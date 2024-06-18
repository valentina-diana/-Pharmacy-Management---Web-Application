<?php
include_once 'config.php';

class Login {
    public static function Autentificare($user, $pass){

        $sql="select * from Autentificare where Email = '$user' and Parola='$pass'";

        $ok = BDConnection::runSQL($sql);

        if ($ok) {
            if ($user == 'diana') {
                header('Location:registration.php');
            } else {
                header('Location:PaginaCautaMedicamente.php');
            }
        }
        return 0;
    }
}
