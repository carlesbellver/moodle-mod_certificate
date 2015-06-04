<?php

/**
 * UJI_certificate certificate type
 *
 * @package    mod
 * @subpackage certificate
 * @copyright  Mark Nelson <markn@moodle.com> UJI <mooc@uji.es>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
if (!defined('MOODLE_INTERNAL')) {
    die('Direct access to this script is forbidden.'); // It must be included from view.php
}

//Testing...
//$testname = "Sergio Barrachina Mir";
$testname = false;

$pdf = new PDF($certificate->orientation, 'mm', 'A4', true, 'UTF-8', false);

$pdf->SetMargins(20,20,20, true);
$pdf->SetTitle($certificate->name);
$pdf->SetProtection(array('modify'));
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetAutoPageBreak(false, 0);
$pdf->AddPage();

// A4 210x297
// Define variables
// Portrait
    $x = 20;
    $y = 50;
    //$sealx = 163; # 210 - 20(margin) - 25(width) = 165
    $sealx = 92.5; # (210 - 25(width)) / 2 = 92,25
    $sealy = 20;
    $sigx = 20;
    $sigy = 170;
    $dsclx = 20;
    $dscly = 250;
    $codey = 275;

$pdf->SetAlpha(1);

// Add seal
certificate_print_image($pdf, $certificate, CERT_IMAGE_SEAL, $sealx, $sealy, 25, 25);

// Add text
$pdf->SetTextColor(105, 105, 105);
$pdf->setHtmlLinksStyle(array(105, 105, 105), '');
certificate_print_text($pdf, $x, $y + 20, 'L', 'freeserif', '', 20, get_string('title', 'certificate'));
$pdf->SetTextColor(46, 91, 125);
certificate_print_text($pdf, $x, $y + 50, 'L', 'freesans', '', 18, mb_strtoupper(($testname ? $testname : fullname($USER)), 'UTF-8'));
$pdf->SetTextColor(105, 105, 105);
certificate_print_text($pdf, $x, $y + 65, 'L', 'freeserif', '', 12, get_string('statement', 'certificate'));
$pdf->SetTextColor(46, 91, 125);
certificate_print_text($pdf, $x, $y + 75, 'L', 'freesans', '', 15, $course->fullname);
$pdf->SetTextColor(105, 105, 105);
// Course info: teachers' list + hours
$courseinfo = '';
if ($certificate->printteacher) {
    $context = context_module::instance($cm->id);
    if ($teachers = get_users_by_capability($context, 'mod/certificate:printteacher', '', $sort = 'u.lastname ASC', '', '', '', '', false)) {
        $teacher_array = array();
        foreach ($teachers as $teacher) {
            if ($teacher->id > 2) array_push($teacher_array, fullname($teacher));
        }
        $teacher_string = join(', ', $teacher_array);
        $and = get_string('and', 'certificate');
        $teacher_string = preg_replace('/, ([^,]+)$/', " $and $1", $teacher_string);
		$courseinfo = get_string('coursetaughtby', 'certificate').' '.$teacher_string.'.';
    }
}
if ($certificate->printhours) {
    $courseinfo .= ($courseinfo ? "<br>" : '') . get_string('credithours', 'certificate', $certificate->printhours);
}
if ($courseinfo) {
    certificate_print_text($pdf, $x, $y + 87, 'L', 'freeserif', '', 12, $courseinfo);
}
// code
certificate_print_text($pdf, $x, $codey, 'R', 'freeserif', '', 9, get_string('verificationcode', 'certificate').': '.certificate_get_code($certificate, $certrecord));
certificate_print_text($pdf, $x, $codey, 'L', 'freeserif', '', 9, '<a href="http://mooc.uji.es/">http://mooc.uji.es</a>');
$pdf->SetTextColor(105, 105, 105);
// Custom text: signature
$custom = '';
if ($certificate->customtext) {
    $lines = explode("\n", $certificate->customtext);
    $custom = join("<br>", $lines);
}
$sigtext = "Castelló de la Plana, ".certificate_get_date($certificate, $certrecord, $course);
if ($custom) $sigtext = $custom.'<br>'.$sigtext;
certificate_print_text($pdf, $sigx, $sigy + 30, 'L', 'freeserif', '', 12, $sigtext);
// Add signature
certificate_print_image($pdf, $certificate, CERT_IMAGE_SIGNATURE, $sigx, $sigy, 70, 30);

//disclaimer
certificate_print_text($pdf, $dsclx, $dscly, 'J', 'freeserif', '', 9, get_string('disclaimer', 'certificate'));

//syllabus
if ($certificate->syllabus) {
	$pdf->AddPage();
    certificate_print_text($pdf, $x, 30, 'L', 'freeserif', '', 14, '<b>'.$course->fullname.'</b>');
	$syllabus = markdown_to_html($certificate->syllabus);
	certificate_print_text($pdf, $x, 50, 'L', 'freeserif', '', 12, $syllabus);
}

?>