<?php

require_once 'Logger.php';

$logger1 = Logger::getInstance();
$logger2 = Logger::getInstance();

// Display the instance ID to verify they are the same
echo "Logger1 ID: " . spl_object_hash($logger1) . "\n";
echo "Logger2 ID: " . spl_object_hash($logger2) . "\n";

$logger1->log("This is the first log message.");
$logger2->log("This is the second log message.");

echo $logger1->readLogs();