<form class="form-signin" method="post" action="admin/login">
    <?php if (isset($system_message)) echo $system_message; ?>
    <h2 style="text-align: center;" class="form-signin-heading">Please sign in</h2>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input class="form-control" type="email" id="inputEmail" name="email" placeholder="Email address" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input class="form-control" type="password" id="inputPassword" name="password" placeholder="Password" required>
    <div class="checkbox">
        <label>
            <input type="checkbox" value="remember-me"> Remember me
        </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
</form>