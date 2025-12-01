<?php
// resume.php - robust forced download
$cwd = __DIR__ . DIRECTORY_SEPARATOR;
$checkPaths = [
    $cwd . 'assets' . DIRECTORY_SEPARATOR . 'Resume.pdf',
    $cwd . 'assets' . DIRECTORY_SEPARATOR . 'resume.pdf',
    $cwd . 'Resume.pdf',
    $cwd . 'resume.pdf',
    $cwd . 'assets' . DIRECTORY_SEPARATOR . 'MyResume.pdf',
    $cwd . 'assets' . DIRECTORY_SEPARATOR . 'CV.pdf'
];

$found = '';
foreach ($checkPaths as $p) {
    if (file_exists($p) && is_readable($p)) {
        $found = $p;
        break;
    }
}

if (!$found) {
    header("HTTP/1.1 404 Not Found");
    echo "<h2>Resume not found</h2>";
    echo "<p>Put your resume PDF in one of these locations (recommended):</p>";
    echo "<ul>
            <li><code>assets/Resume.pdf</code></li>
            <li><code>Resume.pdf</code> (root)</li>
          </ul>";
    echo "<p>Then open <code>http://localhost/Anshul/resume.php</code> again.</p>";
    exit;
}

// force download as PDF
$filename = 'Dave-Anshul-Resume.pdf';
header('Content-Description: File Transfer');
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="' . $filename . '"');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($found));
flush();
readfile($found);
exit;
?>
