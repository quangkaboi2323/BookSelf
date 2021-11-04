<?php
session_start();
$date = date('YhdHis').$_SESSION['id'];

echo $date;
