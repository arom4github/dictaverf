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
						<li><a href="#fas"><?php echo $lang->dict->fas->{$_SESSION["lang"]}; ?></a>
							<ul>
								<li><a href="#fas_direct"><?php echo $lang->dict->search_direct->title->{$_SESSION["lang"]}; ?></a></li>
								<li><a href="#fas_invert"><?php echo $lang->dict->search_invert->title->{$_SESSION["lang"]}; ?></a></li>
								<li><a href="#fas_questionnaire"><?php echo $lang->dict->search_questionnaire->title->{$_SESSION["lang"]}; ?></a></li>
							</ul>
						</li>
						<li><a href="#sanf"><?php echo $lang->dict->sanf->{$_SESSION["lang"]}; ?></a>
							<ul>
								<li><a href="#sanf_direct"><?php echo $lang->dict->search_direct->title->{$_SESSION["lang"]}; ?></a></li>
								<li><a href="#sanf_invert"><?php echo $lang->dict->search_invert->title->{$_SESSION["lang"]}; ?></a></li>
							</ul>
						</li>
						<li><a href="#sanfn"><?php echo $lang->dict->sanfn->{$_SESSION["lang"]}; ?></a>
							<ul>
								<li><a href="#sanfn_direct"><?php echo $lang->dict->search_direct->title->{$_SESSION["lang"]}; ?></a></li>
								<li><a href="#sanfn_invert"><?php echo $lang->dict->search_invert->title->{$_SESSION["lang"]}; ?></a></li>
							</ul>
						</li>
						<li><a href="#fasn"><?php echo $lang->dict->fasn->{$_SESSION["lang"]}; ?></a>
							<ul>
								<li><a href="#fasn_direct"><?php echo $lang->dict->search_direct->title->{$_SESSION["lang"]}; ?></a></li>
								<li><a href="#fasn_invert"><?php echo $lang->dict->search_invert->title->{$_SESSION["lang"]}; ?></a></li>
								<li><a href="#fasn_questionnaire"><?php echo $lang->dict->search_questionnaire->title->{$_SESSION["lang"]}; ?></a></li>
							</ul>
						</li>
						<li><a href="#fas1"><?php echo $lang->dict->fas1_red->{$_SESSION["lang"]}; ?></a>
							<ul>
								<li><a href="#fas1_red_direct"><?php echo $lang->dict->search_direct->title->{$_SESSION["lang"]}; ?></a></li>
								<li><a href="#fas1_red_invert"><?php echo $lang->dict->search_invert->title->{$_SESSION["lang"]}; ?></a></li>
								<li><a href="#fas1_red_questionnaire"><?php echo $lang->dict->search_questionnaire->title->{$_SESSION["lang"]}; ?></a></li>
							</ul>
						</li>
						<li><a href="#fas2"><?php echo $lang->dict->fas2_red->{$_SESSION["lang"]}; ?></a>
							<ul>
								<li><a href="#fas2_red_direct"><?php echo $lang->dict->search_direct->title->{$_SESSION["lang"]}; ?></a></li>
								<li><a href="#fas2_red_invert"><?php echo $lang->dict->search_invert->title->{$_SESSION["lang"]}; ?></a></li>
								<li><a href="#fas2_red_questionnaire"><?php echo $lang->dict->search_questionnaire->title->{$_SESSION["lang"]}; ?></a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
			<!-- ################################################################################################ -->
			<div class="content three_quarter">
				<h1><?php echo $lang->pages->title->{$_SESSION["lang"]}; ?></h1>
				<p><?php echo $lang->help->intro->{$_SESSION["lang"]}; ?></p>
				<div id="fas">
					<h2><b><?php echo $lang->navbar->fas->{$_SESSION["lang"]}; ?></b></h2>					
					<?php include __DIR__."\lang\\".$_SESSION["lang"]."\\".$lang->help->fas->link; ?>
				</div>
				<div id="sanf">
					<h2><b><?php echo $lang->navbar->sanf->{$_SESSION["lang"]}; ?></b></h2>
					<?php include __DIR__."\lang\\".$_SESSION["lang"]."\\".$lang->help->sanf->link; ?>
				</div>
				<div id="sanfn">
					<h2><b><?php echo $lang->navbar->sanfn->{$_SESSION["lang"]}; ?></b></h2>		
					<?php include __DIR__."\lang\\".$_SESSION["lang"]."\\".$lang->help->sanfn->link; ?>
				</div>
				<div id="fasn">
					<h2><b><?php echo $lang->navbar->fasn->{$_SESSION["lang"]}; ?></b></h2>		
					<?php include __DIR__."\lang\\".$_SESSION["lang"]."\\".$lang->help->fasn->link; ?>
				</div>
				<div id="fas1">
					<h2><b><?php echo $lang->navbar->fas1_red->{$_SESSION["lang"]}; ?></b></h2>		
					<?php include __DIR__."\lang\\".$_SESSION["lang"]."\\".$lang->help->fas1_red->link; ?>
				</div>
				<div id="fas2">
					<h2><b><?php echo $lang->navbar->fas2_red->{$_SESSION["lang"]}; ?></b></h2>		
					<?php include __DIR__."\lang\\".$_SESSION["lang"]."\\".$lang->help->fas2_red->link; ?>
				</div>
				<!-- / main body -->
				<div class="clear"></div>
		</main>
	</div>
	<?php include "includes/footer.php"; ?>
</body>

</html>