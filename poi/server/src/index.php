<?php

include 'Logger.php';
include 'Stream.php';
include 'TempFile.php';
include 'UserData.php';

$logger = new Logger(new Stream('./logs/log.txt'));

if (isset($_COOKIE['data'])) {
  $data = $_COOKIE['data'];
  $unserializedData = unserialize($data);
  
  if ($unserializedData instanceof UserData) {
      $logger->log("Received user data: Username: " . $unserializedData->username . ", Email: " . $unserializedData->email . "\n");
  } else {
      $logger->log("Received suspicious data: " . print_r($unserializedData, true) . "\n");
  }
}

?>
