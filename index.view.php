<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1>Tasks</h1>
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