<?php

class Logger {
    private $logStream;

    public function __construct($stream) {
        $this->logStream = $stream;
    }

    public function log($message) {
        fwrite($this->logStream->getStream(), $message);
    }
}

?>
