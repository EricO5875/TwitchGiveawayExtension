<?php
    session_start();

    echo $_POST['action'];
    if (isset($_POST['action'])) {
        switch ($_POST['action']) {
            case 'Start Passive Giveaway':
                $_SESSION['view'] = "idleGiveaway";
                echo "idleGiveaway";
                break;
            case 'Start Active Giveaway':
                $_SESSION['view'] = "activeGiveaway";
                echo "activeGiveaway";
                break;
            case 'Start Entry Giveaway':
                $_SESSION['view'] = "buttonGiveaway";
                break;
            case 'End Giveaway':
                $_SESSION['view'] = "welcome";
                break;
            case 'Roll for Winners':
                $_SESSION['view'] = "winners";
                break;
            default:
                $_SESSION['view'] = "welcome";
        }
    }
?>