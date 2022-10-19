<?php
require_once 'users.php';
require 'partial/header.php';
$id=$_GET['id'];
if(!isset($_GET['id']) || !$user=GetUsersByID($_GET['id']))
{
}
else{
    array_shift($user);
}
?>
<?php
if(!empty($_POST))
{
    UpdateUserById($_POST,$id);
}
?>

    <div class="container">
        <div class="card">
            <div class="card-header">
            <h3>Update user: <b><?=$user['name'] ?></b></h3>
        </div>
        <div class="card-body">
        <form method="post" action="" >
            <?php foreach($user as $key=>$val): ?>

                <div class="form-group">
                    <label><?= ucfirst($key)?>:</label>
                    <?php if($val !=null):?>
                    <input value=<?=$val ?>  name=<?=$key?>   class="form-control"   /> 
                   <?php endif; ?>
                   <?php if($val ==null):?>
                    <input placeholder="Empty"  name=<?=$key?>   class="form-control"   /> 
                   <?php endif; ?>
                   
                    <br>
                </div>
            <?php endforeach; ?>
            <input class="btn btn-success" type="submit" value="Submit">

        </form>
        </div>
    </div>
</div>

<?php  require 'partial/footer.php'; ?>