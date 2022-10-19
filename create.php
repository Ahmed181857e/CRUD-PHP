<?php
require_once 'partial/header.php';

if (!empty($_POST)) {
    AddUser($_POST);
}
?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Create New User</h3>         
            </div>
            <div class="card-body">

<form method='POST' action ="">
<label>Name: </label>
<input type='text' minlength="20" placeholder="Enter You Name" name='name' required class="form-control" /><br>
<label>User Name: </label>
<input type='text' minlength="10" placeholder="Enter Your Username" name='username' required class="form-control" /><br>
<label>Email: </label>
<input type="email" id="email" placeholder="Your Email address" name="email" required class="form-control"><br>
<label>phone: </label>
<input type="tel"  name="phone" required placeholder="123-45-678" class="form-control"/><br>

<label>WebSite: </label>
<input type='text' minlength="20" name='website' require class="form-control" /><br>
<input type='submit' value ="Submit" class="btn btn-outline-success"/><br>
</form>
</div>
</div>
</div>



<?php
require 'partial/footer.php';