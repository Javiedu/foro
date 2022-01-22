<?php
    function requerir_sesion(){
        session_start();
        if (isset($_SESSION["ID"]) != true) {
            header("Location: ../login.php");
        }
    }