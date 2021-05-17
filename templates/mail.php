<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once $_SERVER['DOCUMENT_ROOT'] . '/functions.php';
$link = connect_to_db();
$result = getSetting('footerEmail');
?>
<div class="mail">
   <a href=""><?php echo "$result"; ?></a>
</div>