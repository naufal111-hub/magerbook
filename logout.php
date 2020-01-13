<?php
session_start();
session_unset();
if(session_destroy()) // Menghapus Sessions
{
header("Location: index.php"); // Langsung mengarah ke Home index.php
}
?>