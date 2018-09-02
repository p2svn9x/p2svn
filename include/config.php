<?php
$sql["driver"] = "mysql";
                        $sql["host"] = "localhost";
                        $sql["user"] = "p2svn";
                        $sql["pass"] = "Dinokulz123.";
                        $sql["base"] = "heras";
                        $sql["options"] = array(
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
                        );
                        $bdd = new PDO($sql["driver"] .":host=". $sql["host"] .";dbname=". $sql["base"], $sql["user"], $sql["pass"], $sql["options"]);

?>
