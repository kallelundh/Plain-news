<?php


// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.


?>

<?php
require __DIR__ . '/data.php';
require __DIR__ . '/functions.php';
require __DIR__ . '/header.php';
?>


<?php usort($articles, "sortByDate"); ?>

<?php foreach ($articles as $article) : ?>
	<?php $contentImage = $article['contentImg']; ?>
	<div class="imagebox"><img class="contentimg" src="<?= $contentImage; ?> " alt="kalle"></div> <!-- Picture -->
	<br>
	<div class="maincontainer">
		<div class="box title">
			<h2><?= $article['title'] ?></h2>
		</div> <!-- Title -->
		<br>
		<div class="box content"><?= ($article['content']) ?></div> <!-- Article -->
		<br>
		<div class="box author"><?= $authors[$article['authorId']]['fullName'] ?></div> <!-- Author -->
		<br>
		<div class="box title"><?= $article['publishDate'] ?></div> <!-- PublishDate -->
		<br>
		<div class="box likes">Likes: <?= $article['likeCounter'] ?></div> <!-- Likes -->
		<br>
		<br>
	</div> <!-- Main Div -->
<?php endforeach ?>


<?php
require __DIR__ . '/footer.php';
?>
