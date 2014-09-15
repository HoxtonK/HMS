<link href="<?php echo base_url(); ?>assets/css/student_login.css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>assets/css/student_forgotpassword.css" rel="stylesheet" />

<div class="panel panel-default" id="login-panel">
  <div class="panel-heading">
    <h3 class="panel-title">Forgot password</h3>
  </div>
  <div class="panel-body">

      <p>
          After having filled in your email address we will mail your new password to you.
      </p>
      
      <form method="POST">
      
        <div class="col-lg-6">
            <div class="input-group">
              <input name="param_email" type="email" class="form-control" placeholder="Email address" required>
              <span class="input-group-btn">
                <input name="submit_forgotpassword" class="btn btn-primary" type="submit" value="Send new password">
              </span>
            </div><!-- /input-group -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        
        <p>
            <!--<a href="?c=studentlogin&m=index&a=student_login"><< Terug naar login scherm</a>-->            
            <a href="<?=base_url();?>index.php/login"><< Back to login screen</a>            
        </p>
      
        </form>
        
  </div>
</div>