<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap.min.css">
  </head>
  <body>
    <fieldset>
    <div id="login-wrapper">
      <h1>Sign In</h1>
      <?php if(session()->getFlashdata('flash_msg')):?>
        <div class="alert alert-danger"><?= session()->getFlashdata('flash_msg') ?></div>
      <?php endif;?>
      <form action="" method="post">
        <div class="mb-3">
          <p><label for="InputForEmail" class="form-label">Email address</label></p>
          <p><input type="email" name="email" class="form-control" id="InputForEmail" value="<?= set_value('email') ?>"></p>
        </div>
        <div class="mb-3">
          <p><label for="InputForPassword" class="form-label">Password</label><p>
          <p><input type="password" name="password" class="form-control" id="InputForPassword"></p>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
      </form>
    </div>
  </fieldset>
  </body>
</html>
