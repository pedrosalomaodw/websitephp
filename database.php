<?php
error_reporting(0);
$bank = new mysqli("localhost", "root", "", "videossql",3306);

if($bank->connect_errno){
    echo "erro ao se conectar", $bank->connect_error;
};
