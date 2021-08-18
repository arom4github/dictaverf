<?php
/**
*\file navbar.php
*\brief Navigation bar
*\date Summer 2021
*/
?>
<div class="wrapper row1">
	<header id="header" class="hoc clear">
	<div id="logo" class="fl_left">
		<h1 class="logoname">
			<a 
				<?php echo 'href="'.$BASE_PATH.'index.php"'; ?>>
				<?php echo $lang->navbar->title->{$_SESSION["lang"]}; ?>
			</a>
		</h1>
	</div>
	<nav id="mainav" class="fl_right"> 
		<ul class="clear">
			<li><a <?php echo 'href="'.$BASE_PATH.'pages/about.php"'; ?>><?php echo $lang->navbar->about->{$_SESSION["lang"]}; ?></a></li>
			<li><a <?php echo 'href="'.$BASE_PATH.'pages/authors.php"'; ?>><?php echo $lang->navbar->authors->{$_SESSION["lang"]}; ?></a></li>
			<li><a class="drop"><?php echo $lang->navbar->dictionaries->{$_SESSION["lang"]}; ?></a>
				<ul>
					<li><a <?php echo 'href="'.$BASE_PATH.'pages/dict_fas.php"'; ?>><?php echo $lang->navbar->fas->{$_SESSION["lang"]}; ?></a></li>
					<li><a <?php echo 'href="'.$BASE_PATH.'pages/dict_sanf.php"'; ?>><?php echo $lang->navbar->sanf->{$_SESSION["lang"]}; ?></a></li>
					<li><a <?php echo 'href="'.$BASE_PATH.'pages/dict_sanfn.php"'; ?>><?php echo $lang->navbar->sanfn->{$_SESSION["lang"]}; ?></a></li>
					<li><a <?php echo 'href="'.$BASE_PATH.'pages/dict_fasn.php"'; ?>><?php echo $lang->navbar->fasn->{$_SESSION["lang"]}; ?></a></li>
					<li><a <?php echo 'href="'.$BASE_PATH.'pages/dict_fas1_red.php"'; ?>><?php echo $lang->navbar->fas1_red->{$_SESSION["lang"]}; ?></a></li>
					<li><a <?php echo 'href="'.$BASE_PATH.'pages/dict_fas2_red.php"'; ?>><?php echo $lang->navbar->fas2_red->{$_SESSION["lang"]}; ?></a></li>
				</ul>
			</li>
			<li><a <?php echo 'href="'.$BASE_PATH.'pages/help.php"'; ?>><?php echo $lang->navbar->help->{$_SESSION["lang"]}; ?></a></li>
			<li>
			<?php
				if($_SESSION["lang"]=="fr"){
				echo "<a href='?lang=ru'>RU</a>";
				}else{
				echo "<a href='?lang=fr'>Fr</a>";
				}
			?>
			</li>
		</ul>
	</nav>
	</header>
</div>