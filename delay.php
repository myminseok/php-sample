<?php

$decode=json_decode($_ENV["VCAP_APPLICATION"]);
echo "APPLICATION_NAME: $decode->application_name"; echo "<br/><br/>";
echo "APPLICATION_GUID: $decode->application_id"; echo "<br/><br/>";
echo "INSTANCE_INDEX: $decode->instance_index"; echo "<br/><br/>";

#echo $_ENV["VCAP_APPLICATION"]; echo "<br/><br/>";
#phpinfo();

$i= $decode->instance_index;

if ($i == 3 ){
  echo "delaying ...";
  sleep(10);
}

?>
