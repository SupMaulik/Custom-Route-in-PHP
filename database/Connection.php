<?php

namespace Database;

use mysqli;

class Connection {
    private static $instance;

    public static function get() {
        if (!self::$instance) {
            self::$instance = new mysqli('localhost', 'root', '', 'crud_db');

            if (self::$instance->connect_error) {
                die("Connection failed: " . self::$instance->connect_error);
            }
        }

        return self::$instance;
    }
}
