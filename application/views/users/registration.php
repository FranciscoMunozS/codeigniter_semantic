<!DOCTYPE html>
<html lang="en">
<head>
<link href="<?php echo base_url(); ?>assets/semantic/dist/semantic.min.css" rel='stylesheet' type='text/css' />
</head>
<body>
<div class="ui container">
    <h2>User Registration</h2>
    <form action="" method="post" class="ui form">
        <div class="field">
            <input type="text" class="form-control" name="name" placeholder="Name" required="" value="<?php echo !empty($user['name'])?$user['name']:''; ?>">
          <?php echo form_error('name','<span class="help-block">','</span>'); ?>
        </div>
        <div class="field">
            <input type="email" class="form-control" name="email" placeholder="Email" required="" value="<?php echo !empty($user['email'])?$user['email']:''; ?>">
          <?php echo form_error('email','<span class="help-block">','</span>'); ?>
        </div>
        <div class="field">
            <input type="text" class="form-control" name="phone" placeholder="Phone" value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>">
        </div>
        <div class="two fields">
          <div class="field">
            <input type="password" class="form-control" name="password" placeholder="Password" required="">
            <?php echo form_error('password','<span class="help-block">','</span>'); ?>
          </div>
          <div class="field">
            <input type="password" class="form-control" name="conf_password" placeholder="Confirm password" required="">
            <?php echo form_error('conf_password','<span class="help-block">','</span>'); ?>
          </div>
        </div>
        <div class="field">
          <input type="submit" name="regisSubmit" class="ui button" value="Submit"/>
        </div>
    </form>
    <p class="footInfo">Already have an account? <a href="<?php echo base_url(); ?>users/login">Login here</a></p>
</div>
</body>
</html>
