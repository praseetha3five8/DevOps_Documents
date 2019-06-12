<?php
require 'vendor/autoload.php'; // include Composer's autoloader

function connect_mongo()
{
    $client = new MongoDB\Client("mongodb://myUserAdmin:abc123@127.0.0.1:27017");
    return $client;
}

$current_dt = date('Y-m-d H:i:s');
echo "Start process*******************{$current_dt}*********************\n";
$mongo_conn = connect_mongo();
if (!$mongo_conn->connected) {
    echo "Unable to connect to mongoDB\n";
    exit;
}
else{
	echo "Connected Successfully";
}
?>
