<?php

$conn = mysqli_connect('localhost','root','','gasoderingsystem');

if(!$conn){
    die(mysqli_error($conn));
}
