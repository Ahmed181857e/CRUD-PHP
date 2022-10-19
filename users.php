<?php 
const DS=DIRECTORY_SEPARATOR;
function GetUsers()
{
     return json_decode(file_get_contents('users.json'),associative:true);
}
function GetUsersByID($id)
{
     foreach(GetUsers() as $user)
     {
          if($user['id']==$id)
          {
               return $user;
          }
     }
     return false;
}
function GetLastID($users)
{
     $max=-9999999;
     foreach($users as $user)
     {
          if($user['id']>$max)
          {
               $max=$user['id'];
          }                 
     }
     return $max+1;
}
function UpdateUserById($data,$id)
{
     $users=GetUsers();
     foreach($users as $key=>$val)
     {
          if($val['id']==$id)
          {
             $users[$key]=array_merge($val,$data);
             file_put_contents(filename:__DIR__  ."/users.json",data:json_encode($users,JSON_PRETTY_PRINT)) ;
             header("Location:http://localhost/PHP-Simple-CRUD/index.php");
             break;
           }
     }    
}
function AddUser($data)
{
    $users=GetUsers();

    $w['id']= GetLastID($users);
    $data=$w+$data;
    array_push($users,$data);
    file_put_contents(filename:__DIR__  ."/users.json",data:json_encode($users,JSON_PRETTY_PRINT)) ;
    header("Location:http://localhost/PHP-Simple-CRUD/index.php");
}
function Delete($users)
{
     file_put_contents(filename:__DIR__  ."/users.json",data:json_encode($users,JSON_PRETTY_PRINT));
     
     header("Location:http://localhost/PHP-Simple-CRUD/index.php");
}

