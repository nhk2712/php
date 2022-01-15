<?php
session_start();

$_SESSION['username']="";

echo "<script>location.href='/account'</script>";
?>