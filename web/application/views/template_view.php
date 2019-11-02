<!DOCTYPE html>
<html lang="ru" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Users</title>
		<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
		<link href="http://fonts.googleapis.com/css?family=Kreon" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" />
		<script src="/js/jquery-3.4.1.min.js" type="text/javascript"></script>
		<script src="/js/bootstrap.min.js" type="text/javascript"></script>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-white"></nav>
		<div class="container">
			<?php if (isset($data)) { ?>
				<table class="table table-hover text-center">
					<thead>
				    <tr>
				      <th scope="col">id</th>
				      <th scope="col">Name</th>
				    </tr>
				  </thead>
					<tbody>
						<?php foreach ($data as $key) { ?>
							<tr>
								<td><?php echo($key->getId()); ?></td>
					      <td><?php echo($key->getName()); ?></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			<?php } ?>
		</div>
	</body>
</html>
