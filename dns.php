<?php
error_reporting(0);

include 'links.php';

$json_response = array();

foreach ($links as $link) {
    $row_array = array(
        'DNSName' => $link['title'],
        'DNSUrl'  => $link['url']
    );

    array_push($json_response, $row_array);
}

header('Content-type: application/json; charset=UTF-8');

$final = json_encode(
    $json_response,
    JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES
);

echo base64_encode($final);
?>
