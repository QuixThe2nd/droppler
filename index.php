<?php
session_start();
if(!$_SESSION['user']){
  header('Location: login');
  die('Please login');
}
