<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 1/8/2018
 * Time: 4:06 PM
 */

session_start();
session_destroy();

header('Location:../index.php');