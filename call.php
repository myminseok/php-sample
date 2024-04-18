<?php

$decode=json_decode($_ENV["VCAP_APPLICATION"]);
echo "APPLICATION_NAME: $decode->application_name"; echo "<br/><br/>";
echo "APPLICATION_GUID: $decode->application_id"; echo "<br/><br/>";
echo "INSTANCE_INDEX: $decode->instance_index"; echo "<br/><br/>";

$url = $_GET['url'];
echo "URL: $url"; echo "<br/><br/>";
$response = file_get_contents($url);
echo "response: $response"; 
?>
