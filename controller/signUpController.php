<?php

include ('../vue/signUpView.php');

require_once ('../model/signUp.php');

session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["signup"])) {
    

}