<?php
/**
 * Created by PhpStorm.
 * User: hamed
 * Date: 22/10/17
 * Time: 12:25 م
 */



session_start();
session_destroy();
header('location:../index.html');
die();