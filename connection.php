<?php
// Check database password?
// $con  = mysqli_connect('localhost','root','','datatable_example');
$con  = mysqli_connect('localhost','root','12345678','datatable_example');
if(mysqli_connect_errno())
{
    echo 'Database Connection Error';
}
