<?php
    $mysqli = false;
    function connectDB() {
        global $mysqli;
        $mysqli = new mysqli("localhost", "art-researcher", "Otn48zQRNoBf03qw", "art-researcher-site");
        $mysqli->query("SET NAMES 'utf-8'");
    }

    function closeDB() {
        global $mysqli;
        $mysqli->close();
    }

?>