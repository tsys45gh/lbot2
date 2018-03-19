<?php
require("phpMQTT.php");

// $access_token = 'l+XJmEK4S3PQW9NQRGhnqFff7WmFj9k2MMMGrif2EsWALWh+cn6URu3l0dEjpphbjHyk3013gsq/wgEp5lMBQhWtUsPK0D8VbmjlBOg4W4ST9ipMQ8EuW7HAZVHglPn4OIDbufKT2VEkKTet+n5lKgdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
	$mqtt = new phpMQTT("m10.cloudmqtt.com", 19518, "clientId-CdGZeZUz5f"); //Change client name to something unique
	if ($mqtt->connect(true,null,'eqvihjxj','Ki2b6SmTWqgM')) {
		$mqtt->publish("bot2018/ev","xxxx",0);
		$mqtt->close();
	};

}
echo "OK";
?>
