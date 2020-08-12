<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
session_start();
include('connection.php');
$_SESSION['currentPage']='aboutUs.php'; 
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>About Us</title>
        <?php include('websiteHeader.php'); ?>
        
        <!-- Content -->
        <main role="main">
        <div class="jumbotron" style="padding-top:15px;padding-bottom:30px;margin-bottom:0px;background-color: black;color:white">
            <div class="mx-auto">
                Welcome to our site, we are Singapore Polytechnic students. <br>
                This is where we are located:
                500 Dover Rd, Singapore 139651<br>
                <iframe style="margin-top:10px"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.7757152129147!2d103.77750061856136!3d1.3098768198761184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da1a602ff17c15%3A0xa9545dd23993859e!2sSingapore%20Polytechnic!5e0!3m2!1sen!2ssg!4v1597223372482!5m2!1sen!2ssg" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
        
        <?php include('websiteFooter.php'); ?>