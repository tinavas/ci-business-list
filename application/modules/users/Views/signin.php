
	
	<div class="row">
		<div class="span6 offset3">
			<h1>Sign in</h1>
			
			<?php if(@$error): ?>
			<div class="alert">
				<button type="button" class="close" data-dismiss="alert">×</button>
				<?php echo $error; ?>
			</div>
			<?php endif; ?>

			<div class="well">
				<form class="form-horizontal" method="post" action="">
					<div class="control-group">
						<label class="control-label" for="username">Username</label>
						<div class="controls">
							<input type="text" id="username" placeholder="Username" name="username" value="">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="password">Password</label>
						<div class="controls">
							<input type="password" id="password" placeholder="Password" name="password" value="">
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<label class="checkbox">
							<input type="checkbox" name="remember"> Remember me
							</label>
							<button type="submit" class="btn">Sign in</button>
						</div>
					</div>
				</form>
			</div>
			
		</div>
	</div>
