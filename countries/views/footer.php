<?php 
	require_once('views/menu.php');
?>

<footer>
	<ul class="menu-footer">
		<?php foreach ($menu as $link) { 
			$diretorio = $link['diretorio'].'.php';
		?>
			<li class="nav-item <?= activeLink($diretorio) ?>">
				<a class="nav-link" href="<?= $diretorio ?>"><?= $link['text'] ?></a>
			</li>
		<?php } ?>
	</ul>
	<h2 class="info-credits">
		2020 - Web Development - Willian Marcal
	</h2>
</footer>