# Scaffolding
Designed to help in simple or complex pages.
## What does it do?
Well, it converts a php array into a base html template. just input an array. and you'll be amazed at what you can do.

# Example?
```php
<?php Scaffolding::start()->head([
	'title'=>'A page', 
	'include'=>[
		'css'=>[
			'https://cdn.embb.pw/css/bootstrap.min.css',
			'https://cdn.embb.pw/css/flat-ui.min.css'
		],
		'js'=>[
			'https://cdn.embb.pw/js/jquery.min.js',
			'https://cdn.embb.pw/js/bootstrap.js'
		]
	], 
	'meta'=>[
		[
			'name'=>'keywords',
			'content'=>'Flat Login, php-login-advaced, '
		]
	]
]);?>
<div class="container">
  <div class="col-md-4 col-md-offset-4">
	<form method="post" action="index.php">
	  <fieldset>
	    <legend>Log in</legend>
	    <div class="form-group">  
	      <label for="user_name">Username</label>
	      <input id="user_name" type="text" name="user_name" class="form-control" required autofocus/>
	    </div>
	    <div class="form-group">
	      <label for="user_password">Password</label>
	      <input id="user_password" type="password" name="user_password" autocomplete="off" class="form-control" required />
	    </div>
	    <div class="form-group">
	      <input type="checkbox" id="user_rememberme" name="user_rememberme" value="1" />
	      <label for="user_rememberme" style=" display:inline;">Keep me logged in</label>
	    </div>
	    <div class="form-group">
	      <input type="submit" name="login" value="Log in" class="btn btn-default"/>
	    </div>
	  </fieldset>
	</form>
	<a href="?register">Register new account</a>&nbsp;&nbsp;|&nbsp;&nbsp;	<a href="?password_reset">I forgot my password</a>
  </div>  
</div>

<?php Scaffolding::start()->end();?>
```
