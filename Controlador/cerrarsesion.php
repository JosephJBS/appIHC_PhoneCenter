<?php
session_start();
session_destroy();
header("location:../Vistas/index.html");
?>