<?php

session_start();

if (isset($_SESSION['User'])) {
    if (isset($_SESSION['currentPage'])) {
                $currentPage = $_SESSION['currentPage'];
                } else {
                    $currentPage = 'index.php';
                }
    session_destroy();
    header('location:'.$currentPage.'?success=loggedout');
    
} else {
    if (isset($_SESSION['currentPage'])) {
                header('location:'.$_SESSION['currentPage'].'?error=cantlogoutifyourenotin');
                } else {
                    header('location:index.php?error=cantlogoutifyourenotin');
                }
}