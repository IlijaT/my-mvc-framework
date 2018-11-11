<!DOCTYPE html>
<html>
<head>
	<title>Tasks</title>
</head>
<body>

	<nav>

		<ul>

			<a href="http://localhost/my-mvc-framework/about">About Page</a> |

			<a href="http://localhost/my-mvc-framework/contact">Contact Page</a> |

			<a href="http://localhost/my-mvc-framework/about-culture">About Culture Page</a>
			
		</ul>

	</nav>

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