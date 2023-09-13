<?php

class TempFile {
    private $filePath;

    public function __construct($filePath) {
        $this->filePath = $filePath;
    }

    public function __wakeup() {
        if (file_exists($this->filePath)) {
            unlink($this->filePath);
        }
    }
}

?>