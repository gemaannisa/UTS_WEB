<?php echo $this->extend('auth/login/index'); ?>
<?php echo $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
        <form action="auth/aksi_login" method="post">
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
  <br><a href="auth/register">Register</a>
</form>
        </div>
    </div>
</div> 
<?php echo $this->endSection(); ?>