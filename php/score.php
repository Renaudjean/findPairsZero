<?php
    require_once './connect.php';

    if (isset($_POST["score"], $_POST["date"])) {
        $req = $DB-> prepare("INSERT INTO `highscore`(`Score`, `Dates`) VALUES (?,?)");
        $req -> execute ([$_POST["score"], $_POST["date"]]);
    }

