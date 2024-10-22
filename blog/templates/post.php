<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Le blog de l'AVBN</title>
		<link href="style.css" rel="stylesheet" />
	</head>
	<body>

		<h1>Le super blog de l'AVBN !</h1>
		<p><a href="index.php">Retour à la liste des billets</a></p>
		<div class="news">
			<h3>
				$post = [
				'title' => $row['title'],
				'french_creation_date' => $row['french_creation_date'],
				'content' => $row['content'],
				'identifier' => $row['id'],
				];
			</h3>
			<p>
				<? = nl2br(htmlspecialchars($post['content'])) ?>x
			</p>
		</div>
		<h2>Commentaires</h2>
		<?php
		foreach ($comments as $comment) {
		?>
		<p><strong><?= htmlspecialchars($comment['author']) ?> </strong>
			le <?= $comment['french_creation_date'] ?> </p>
		<p><?= nl2br(htmlspecialchars($comment['comment'])) ?> </p>
		<?php
		}
		?>
	</body>
</html>