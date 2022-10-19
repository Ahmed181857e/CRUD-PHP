<?php
require_once 'partial/header.php';
$users=GetUsers();
?>
<div class="container">
<div class="card">
            <div class="card-header">
            <h3  style="display: inline;">All Users <b><?=$user['name'] ?></b></h3>
            <a href="create.php" style="display: inline; float:right" class="btn btn-outline-success">Create New User</a>
</div>

<table class="table">
   <tr>
    <th scope="col">Name</th>
    <th scope="col">Username</th>
    <th scope="col">Email</th>
    <th scope="col">Phone</th>
    <th scope="col">Website</th>
    <th scope="col">Actions</th>
  </tr>

   <?php foreach($users as $user): ?>
  <tr>
       <td><?=$user['name'];?></td>
       <td><?=$user['username'];?></td>
       <td><?=$user['email'];?></td>
       <td><?=$user['phone'];?></td>
       <td> 
       <a target="_blank" href="https://<?=$user['website'];?>/">
       <?=$user['website'];?>
       </a> 
       </td>
      <td>
         <a href="view.php?id=<?=$user['id']?>" class="btn btn-outline-info">View</a>
         <a href="update.php?id=<?=$user['id']?>" class="btn btn-outline-secondary">Update</a>
         <a href="delete.php?id=<?=$user['id']?>" class="btn btn-outline-danger">Delete</a>
        </td>
    </tr>   
    <?php endforeach;?>         
</table>
</div>
</div>

<?php
require_once 'partial/footer.php';
?>