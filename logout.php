<?php
session_start();
session_destroy();

header("location:./index.php"); // Langsung mengarah ke Home index.php

?>