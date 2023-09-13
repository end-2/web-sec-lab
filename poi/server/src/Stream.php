<?php

class Stream {
    private $filePath;

    public function __construct($filePath) {
        $this->filePath = $filePath;
    }

    public function getStream() {
        return fopen($this->filePath, 'a');
    }
}

?>
