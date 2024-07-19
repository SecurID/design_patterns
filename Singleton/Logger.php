<?php

class Logger {

    private static $instance = null;
    private $logFile;

    private function __construct() {
        $this->logFile = 'application.log';
    }

    private function __clone() {}
    private function __wakeup() {}

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function log ($message) {
        $logMessage = date('Y-m-d H:i:s') . ' - ' . $message . PHP_EOL;
        file_put_contents($this->logFile, $logMessage, FILE_APPEND);
    }

    public function readLogs() {
        if (file_exists($this->logFile)) {
            return file_get_contents($this->logFile);
        } else {
            return 'Log file not found.';
        }
    }
}