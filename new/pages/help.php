<!DOCTYPE html>

<?php include "includes/header.php"; ?>

<body id="top">
	<?php include "includes/navbar.php"; ?>
	<!-- ################################################################################################ -->
	<div class="bgded overlay" style="background-image:url('../images/associativnoe-myshlenie.jpg');">
		<div id="breadcrumb" class="hoc clear">
			<ul>
				<li><a href="../index.php"><?php echo $lang->path->home->{$_SESSION["lang"]}; ?></a></li>
				<li><a href="#"><?php echo $lang->navbar->help->{$_SESSION["lang"]}; ?></a></li>
			</ul>
		</div>
	</div>
	<!-- ################################################################################################ -->
	<div class="wrapper row3">
		<main class="hoc container clear">
			<!-- main body -->
			<div class="sidebar one_quarter first">
				<nav class="sdb_holder">
				    <ul>
					<li><a href="#help"><?php echo $lang->navbar->help->{$_SESSION["lang"]}; ?></a></li>
					<li><a href="#papers"><?php echo $lang->navbar->papers->{$_SESSION["lang"]}; ?></a></li>
					<li><?php echo $lang->navbar->dictionaries->{$_SESSION["lang"]}; ?>
					    <ul>
						<li><a href="dict_fas.php"><?php echo $lang->dict->fas->{$_SESSION["lang"]}; ?></a></li>
						<li><a href="dict_fas2.php"><?php echo $lang->dict->fas2->{$_SESSION["lang"]}; ?></a></li>
						<li><a href="dict_sanfn.php"><?php echo $lang->dict->sanfn->{$_SESSION["lang"]}; ?></a></li>
						<li><a href="dict_fas1_red.php"><?php echo $lang->dict->fas1_red->{$_SESSION["lang"]}; ?></a></li>
						<li><a href="dict_fas2_red.php"><?php echo $lang->dict->fas2_red->{$_SESSION["lang"]}; ?></a></li>
					   </ul>
					</li>
				    </ul>
				</nav>
			</div>
			<!-- ################################################################################################ -->
			<div class="content three_quarter">
				<div id="help">
					<?php include __DIR__."/lang/".$_SESSION["lang"]."/".$lang->help->link; ?>
				</div>
				<div id="papers">
					<?php include __DIR__."/lang/".$_SESSION["lang"]."/".$lang->about->papers->link; ?>
				</div>
				<!-- / main body -->
				<div class="clear"></div>
		</main>
	</div>
	<?php include "includes/footer.php"; ?>
</body>

</html>
