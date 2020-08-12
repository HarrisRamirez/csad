<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
session_start();
$_SESSION['currentPage']='index.php'; 
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Homepage</title>
        <?php include('websiteHeader.php'); ?>
        
        <!-- Content -->
        <main role="main">
        <div class="jumbotron" style="padding-top:15px;padding-bottom:30px;margin-bottom:0px;background-color: black;color:white">
            <div class="mx-auto">
                <?php 
                if (isset($_SESSION['User'])) {
                    echo 'Welcome '.$_SESSION['User'].',';
                }
                ?>
            </div>
        </div>
        
        <?php include('websiteFooter.php'); ?>