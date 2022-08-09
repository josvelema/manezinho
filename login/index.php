<?php
include "../includes/db.php";
session_start();
include "../admin/functions.php";



checkIfUserIsLoggedInAndRedirect('/admin');


if (ifItIsMethod('post')) {

	if (isset($_POST['user_name']) && isset($_POST['user_pass'])) {

		login_user($_POST['user_name'], $_POST['user_pass']);
	} else {


		redirect('/login');
	}
}

?>
<div class="container">

	<h2 class="text-center">Login</h2>
	<div class="panel-body">


		<form id="login-form" role="form" autocomplete="off" class="form" method="post">

			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-user color-blue"></i></span>

					<input name="user_name" type="text" class="form-control" placeholder="Enter Username">
				</div>
			</div>

			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-lock color-blue"></i></span>
					<input name="user_pass" type="password" class="form-control" placeholder="Enter Password">
				</div>
			</div>

			<div class="form-group">

				<input name="login" class="btn btn-lg btn-primary btn-block" value="Login" type="submit">
			</div>


		</form>

	</div><!-- Body-->


	<hr>

	<?php include "../includes/footer.php"; ?>

</div> <!-- /.container -->