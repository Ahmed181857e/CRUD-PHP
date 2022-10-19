<?php
require 'users.php';
$users=GetUsers();
foreach($users as $key =>$user)
{

    if($user['id']==$_GET['id'])
    {
     unset($users[$key]);
     Delete($users);
     break;
    }
}