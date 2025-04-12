<?php
// remove all session variables
unset($_SESSION['name']);
session_unset();

// destroy the session
session_destroy();
 header("Location: http://localhost/shlok/new2/Admin/admin.html");
?>