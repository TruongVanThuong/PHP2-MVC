<?php

session_start();
/**
*Session Class
**/
class Session{
 public static function init(){
  if (version_compare(phpversion(), '5.4.0', '<')) {
        if (session_id() == '') {
            session_start();
        }
    } else {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }
 }

 public static function set($key, $val){
    $_SESSION[$key] = $val;
 }

 public static function get($key){
    if (isset($_SESSION[$key])) {
     return $_SESSION[$key];
    } else {
     return false;
    }
 }

 public static function checkSession(){
    self::init();
    if (self::get("login_admin")== false) {
     self::destroy();
     header("Location:login.php");
    }
 }

 public static function checkLogin(){
    self::init();
    if (self::get("login_admin")== true) {
     header("Location:dashboard.php");
    }
 }

 public static function checkSession_u(){
   self::init();
   if (self::get("login_user")== false) {
    self::destroy();
    header("Location:".URL_ROOT."/user/login.php");
   }
}

 public static function checkLogin_u(){
   self::init();
   if (self::get("login_user")== true) {
    header("Location:http://localhost/php2mvc/views/");
   }
}

 public static function destroy(){
  session_destroy();
  header("Location:login.php");
 }
}
