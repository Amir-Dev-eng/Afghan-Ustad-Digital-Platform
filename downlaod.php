<?php
require 'vendor/autoload.php';
use Aws\S3\S3Client;
use Aws\Exception\AwsException;

// Cloudflare R2 client
$s3 = new S3Client([
    'version' => 'latest',
    'region' => 'auto',
    'endpoint' => 'https://946899c74c55f818875f67857fecf00f.r2.cloudflarestorage.com', // Your R2 endpoint
    'credentials' => [
        'key' => '482bf8216f47195d4e99550710c5b903',   // Replace with your R2 Access Key
        'secret' => 'edc88a51c89c878cddc25b0a4520ed2a33edc805436ec0987167e801959429a7', // Replace with your R2 Secret Key
    ],
]);

$bucket = 'afghanustad'; // Your bucket name
$key = 'course_content (1).zip'; // File name in R2

try {
    // Generate a presigned URL valid for 10 minutes
    $cmd = $s3->getCommand('GetObject', [
        'Bucket' => $bucket,
        'Key' => $key,
    ]);

    $expires = new \DateTime('+10 minutes'); // presigned URL expiry
    $request = $s3->createPresignedRequest($cmd, $expires);
    $signedUrl = (string) $request->getUri();

    // Redirect the browser to the presigned URL
    header("Location: $signedUrl");
    exit;

} catch (AwsException $e) {
    echo "Error: " . $e->getMessage();
}
?>