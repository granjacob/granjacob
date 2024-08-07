<div  class="login-container">
	<h2>Sign up - New account</h2>
	<form action="/account" method="post" novalidate>
		<div class="form-group">
			<label for="username">Your name</label>
			<input type="text" id="fullname" name="fullname" required>
		</div>
		<div class="form-group">
			<label for="username">Username</label>
			<input type="text" id="username" name="username" required>
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" id="password" name="password" required>
		</div>
		<div class="form-group">
			<label for="password">Email</label>
			<input type="password" id="email" name="email" required>
		</div>
		<div class="form-group">
			<button type="submit">Create account</button>
		</div>
	</form>
</div>