<?php require('partials/head.php') ?>

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

<?php require('partials/footer.php') ?>