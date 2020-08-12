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
        <title>Project Portfolio</title>
        <?php include('websiteHeader.php'); ?>
        
        <!-- Content -->
        <main role="main">
        <div class="jumbotron" style="padding-top:15px;padding-bottom:30px;margin-bottom:0px;background-color: black;color:white">
            <div class="mx-auto">
               <div class="d-flex flex-row justify-content-center flex-wrap">
               <div class="p-2" style="background-color:white;color:black;border-radius:5px;margin:10px">Name: Eggen The Cat<br>Admission Number: PCAT<br><img src="images/cute cat.jpg" style="margin-top:5px"></div>
               <div class="p-2" style="background-color:white;color:black;border-radius:5px;margin:10px">Name: Pepe<br>Admission Number: PPEPE<br><img src="images/pepe.jpeg" style="margin-top:5px"></div>
               <div class="p-2" style="background-color:white;color:black;border-radius:5px;margin:10px">Name: Spongebob<br>Admission Number: PBOB<br><img src="images/spongebob.jpg" style="margin-top:5px"></div>
               <div class="p-2" style="background-color:white;color:black;border-radius:5px;margin:10px">Name: Squidward<br>Admission Number: PWARD<br><img src="images/squidward.jpeg" style="margin-top:5px"></div>
               </div>
        </div>
        </div>
        
        <?php include('websiteFooter.php'); ?>