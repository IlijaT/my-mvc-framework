<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<center><h1>Tasks</h1></center>

	<div>
		<ul>
			<?php foreach ($tasks as $key => $task): ?>

				 <li> 
					<?php if ($task->completed): ?>	

						<strike> <?= $task->description ?> </strike>

					<?php else: ?>

				 	<?= $task->description ?>

				 <?php endif; ?>
				 	

				 </li> 
			<?php endforeach ?>
		</ul>
	</div>

</body>
</html>