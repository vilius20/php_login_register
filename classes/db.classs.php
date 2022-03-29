<?php

class Db {

    protected function connect() {
        try {
            $username = "root";
            $password = "";
            $db = new PDO('mysql:host=localhost;dbname=login', $username, $password);
            return $db;
        } catch (PDOException $e) {
            print "Klaida!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

}