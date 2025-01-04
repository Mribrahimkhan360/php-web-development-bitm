<?php
if (isset($_GET['page'])) { // Corrected: Added missing closing parenthesis
    if ($_GET['page'] == 'home') {
        include 'pages/home.php';
    }
}
