<?php
require_once 'users.php';
require 'partial/header.php';
if(!isset($_GET['id']) || !$user=GetUsersByID($_GET['id']))
{
die('no id');
}
else{
    array_shift($user);
}
?>
<div class="container">
<div class="card">
    <div class="card-header">
        <h3 style="display: inline;">view user: <b><?=$user['name'] ?></b></h3>
        <a href="update.php?id=<?=$_GET['id']?>" style="display: inline; float:right"  class="btn btn-outline-secondary right">Update</a>
        <a href="delete.php?id=<?=$_GET['id']?>" style="display: inline; float:right"  class="btn btn-outline-danger">Delete</a>
    </div>
<table class="table">
    <tbody>
        <?php foreach($user as $key=>$val): ?>
            <tr> 
                <th><?= ucfirst($key)?>:</th>
                <td><?=$val?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>
</div>
<?php  require 'partial/footer.php'; ?>