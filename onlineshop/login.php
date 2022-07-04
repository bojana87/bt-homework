<?php
session_start();
// Header
require __DIR__ . "/views/_layout/v-header.php";


// PAGE CONTENT
require __DIR__ . "/views/v-login.php";

// Footer
require __DIR__ . "/views/_layout/v-footer.php";


?>