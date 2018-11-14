<?php

require('partials/head.php') ?>

<div class="container">

	<center><h1>Users</h1></center>	

	<?php foreach ($users as $user) : ?> 

		<ul >
		
			<li> <?= $user->name ?> </li>

		</ul>


	<?php endforeach; ?> 

    <hr>

	<h3>Submit your name</h3>

	<form class="form" method="POST" action="users">

		<input type="text" name="name">

		<button type="submit">Submit</button>

	</form>
</div>
	

 

<?php require('partials/footer.php') ?>