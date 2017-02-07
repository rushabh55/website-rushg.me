<?php
$from = $_GET['from'];
$to = $_GET['to'];
$text = $_GET['text'];
$api_key = $_GET['api_key'];
$api_secret = $_GET['api_secret'];
//$udh = $_GET('udh');
//$body = $_GET('body');

//http://rushg.me/TreasureHunt/authenticate.php?from=15857732396&to=15852982102&text=gand+mara&api_key=0ffc2d57&api_secret=4982c33b




$url = 'https://rest.nexmo.com/sms/json';
$data = array('from' => $from, 'to' => $to,  'text' => $text,  'api_key' => $api_key, 'api_secret'=>$api_secret );

$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    ),
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);

var_dump($result);

