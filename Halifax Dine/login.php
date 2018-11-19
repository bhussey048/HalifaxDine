<?php include('includes/header.php'); ?>

    <div class="container">

      <form class="form-signin" action="includes/processLogin.php" method="post" enctype="multipart/form-data">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="username" class="sr-only">Username</label>
        <input type="username" name="username" id="username" class="form-control" placeholder="Username" required="" autofocus="">
        <label for="password" class="sr-only">Password</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required="">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Sign in</button>
      </form>

    </div> <!-- /container -->

<?php include('includes/footer.php'); ?>
