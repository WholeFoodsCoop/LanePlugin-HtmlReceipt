<?php
ini_set('error_reporting', E_ALL);

/* mock COREPOS API classes for testing */

if (!class_exists('Plugin', false)) {
    class Plugin 
    {
        public function pluginUrl()
        {
            return '';
        }
    }
}

if (!class_exists('DefaultHtmlEmail', false)) {
    class DefaultHtmlEmail{}
}

include(__DIR__ . '/self.php');

