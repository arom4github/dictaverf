<!DOCTYPE html>
<?php include "includes/header.php"; ?>

<body id="top">
	<?php include "includes/navbar.php"; ?>
	<!-- ################################################################################################ -->
	<div class="bgded overlay" style="background-image:url('../images/associativnoe-myshlenie.jpg');">
		<div id="breadcrumb" class="hoc clear">
			<ul>
				<li><a href="../index.php"><?php echo $lang->path->home->{$_SESSION["lang"]}; ?></a></li>
				<li><a href="#"><?php echo $lang->navbar->dictionaries->{$_SESSION["lang"]}; ?></a></li>
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
						<li><a href="#dict1"><?php echo $lang->dict->fas->{$_SESSION["lang"]}; ?></a></li>
						<li><a href="#dict2"><?php echo $lang->dict->fas2->{$_SESSION["lang"]}; ?></a></li>
						<li><a href="#dict3"><?php echo $lang->dict->sanfn->{$_SESSION["lang"]}; ?></a></li>
						<li><a href="#dict4"><?php echo $lang->dict->fas1_red->{$_SESSION["lang"]}; ?></a></li>
						<li><a href="#dict5"><?php echo $lang->dict->fas2_red->{$_SESSION["lang"]}; ?></a></li>
					</ul>
				</nav>
			</div>
			<!-- ################################################################################################ -->
			<div class="content three_quarter">
				<div id="dict1">
					<?php include __DIR__."/lang/".$_SESSION["lang"]."/".$lang->about->fas->link; ?>
				</div>
				<div id="dict2">
					<?php include __DIR__."/lang/".$_SESSION["lang"]."/".$lang->about->fas2->link; ?>
				</div>
				<div id="dict3">
					<?php include __DIR__."/lang/".$_SESSION["lang"]."/".$lang->about->sanfn->link; ?>
				</div>
				<div id="dict4">
					<?php include __DIR__."/lang/".$_SESSION["lang"]."/".$lang->about->fas1_red->link; ?>
				</div>
				<div id="dict5">
					<?php include __DIR__."/lang/".$_SESSION["lang"]."/".$lang->about->fas2_red->link; ?>
				</div>
			</div>
			<!-- / main body -->
			<div class="clear"></div>
		</main>
	</div>
	<!-- ################################################################################################ -->
	<?php include "includes/footer.php"; ?>
</body>

</html>
