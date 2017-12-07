<?php
    session_start();
    require_once('includes/helper.php');
    render('templates/header');
?>

            <meta http-equiv="refresh" content="5">

<?php

    if (isset($_SESSION['view'])) {
        if ($_SESSION['view'] === "idleGiveaway") {
            render('idleGiveaway');
        } else if ($_SESSION['view'] === 'activeGiveaway') {
            render('activeGiveaway');
        } else if ($_SESSION['view'] === 'buttonGiveaway') {
            render('buttonGiveaway');
        } else if ($_SESSION['view'] === 'winners') {
            render('winners');
        } else {
            render('welcome');
        }
    } else {
        render('welcome');
    }

    // if ($_SESSION['view'] === 'idleGiveaway') {
    //     $pathToFile = "views/idleGiveaway.html";
    // } else if ($_SESSION['view'] === 'activeGiveaway') {
    //     $pathToFile = "activeGiveaway";
    // } else if ($_SESSION['view'] === 'buttonGiveaway') {
    //     $pathToFile = "buttonGiveaway";
    // } else {
    //     $pathToFile = "views/welcome.html";
    // }

?>

<!--
//         $(document).ready(function () {
//             var pathToFile = "";
//             alert(pathToFile);
//             var interval = 500;
//             var refresh = function() {
//                 $.ajax({
//                     url: pathToFile,
//                     cache: false,
//                     success: function(html) {
//                         $('#divMain').html(html);
//                         setTimeout(function() {
//                             refresh();
//                         }, interval)
//                     }
//                 });
//             }
//         }); -->

<?php
    render('templates/footer');
?>



