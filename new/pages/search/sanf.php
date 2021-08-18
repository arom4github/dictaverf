<!DOCTYPE html>
<?php include "../includes/header.php"; ?>

<body id="top">
	<?php include "../includes/navbar.php"; ?>
	<!-- ################################################################################################ -->
	<div class="bgded overlay" style="background-image:url('../../images/associativnoe-myshlenie.jpg');">
		<div id="breadcrumb" class="hoc clear">
			<ul>
				<li><a href="../../index.php"><?php echo $lang->path->home->{$_SESSION["lang"]}; ?></a></li>
				<li><a href="../dict_sanf.php"><?php echo $lang->dict->sanf->{$_SESSION["lang"]}; ?></a></li>
				<?php
					/* Path depending of the search method used */
					if(isset($_GET["method"]) && isset($_GET["num"])){
						switch ($_GET["method"]) {
							case 'inv':
								?> 
								<li><a><?php echo $lang->dict->search_invert->title->{$_SESSION["lang"]}; ?></a></li>
								<?php
								switch ($_GET["num"]) {
									case '1':
										?>
										<li><a><?php echo $lang->dict->search_method->word->{$_SESSION["lang"]}; ?></a></li>
										<?php
										break;
									case '2':
										?>
										<li><a><?php echo $lang->dict->search_method->stim->{$_SESSION["lang"]}; ?></a></li>							
										<?php
										break;
									case '3':
										?>
										<li><a><?php echo $lang->dict->search_method->react->{$_SESSION["lang"]}; ?></a></li>							
										<?php
										break;
									default:
										?>
										<li><a><?php echo $lang->dict->search_method->letter->{$_SESSION["lang"]}; ?></a></li>							
										<?php
										break;
								}
								break;
							default:
								?> 
								<li><a><?php echo $lang->dict->search_direct->title->{$_SESSION["lang"]}; ?></a></li>
								<?php
								switch ($_GET["num"]) {
									case '1':
										?>
										<li><a><?php echo $lang->dict->search_method->word->{$_SESSION["lang"]}; ?></a></li>							
										<?php
										break;
									default:
										?>
										<li><a><?php echo $lang->dict->search_method->letter->{$_SESSION["lang"]}; ?></a></li>							
										<?php
										break;
								}
								break;
						}
					}else{
					?>
						<li><a><?php echo $lang->dict->search_direct->title->{$_SESSION["lang"]}; ?></a></li>
						<li><a><?php echo $lang->dict->search_method->letter->{$_SESSION["lang"]}; ?></a></li>
					<?php
					}
				?>
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
						<li><a href="../dict_sanf.php#about"><?php echo $lang->dict->about_title->{$_SESSION["lang"]}; ?></a></li>
						<li><a href="../dict_sanf.php#stim"><?php echo $lang->dict->stim_title->{$_SESSION["lang"]}; ?></a></li>
						<li><a class="sdb_section"><?php echo $lang->dict->search_direct->title->{$_SESSION["lang"]}; ?></a>
							<ul>
								<li><a href="?method=dir&num=0"><?php echo $lang->dict->search_method->letter->{$_SESSION["lang"]}; ?></a></li>
								<li><a href="?method=dir&num=1"><?php echo $lang->dict->search_method->word->{$_SESSION["lang"]}; ?></a></li>
							</ul>
						</li>
						<li><a class="sdb_section"><?php echo $lang->dict->search_invert->title->{$_SESSION["lang"]}; ?></a>
							<ul>
								<li><a href="?method=inv&num=0"><?php echo $lang->dict->search_method->letter->{$_SESSION["lang"]}; ?></a></li>
								<li><a href="?method=inv&num=1"><?php echo $lang->dict->search_method->word->{$_SESSION["lang"]}; ?></a></li>
								<li><a href="?method=inv&num=2"><?php echo $lang->dict->search_method->stim->{$_SESSION["lang"]}; ?></a></li>
								<li><a href="?method=inv&num=3"><?php echo $lang->dict->search_method->frequency->{$_SESSION["lang"]}; ?></a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
			<!-- ################################################################################################ -->
			<div class="content three_quarter">
				<h1><?php echo $lang->pages->title->{$_SESSION["lang"]}; ?></h1>
				<div id="result">
					<h2><?php echo $lang->search->search->{$_SESSION["lang"]}; ?></h2>
					<!-- Filter -->
					<?php
						/* Show filter for direct or invert search */
						if(isset($_GET["method"]) && in_array($_GET["method"],array("dir","inv"))){
							include "../includes/filter.php";
						}
					?>
					<?php 
						/* Show the good search method thanks to GET arguments */
						if(isset($_GET["method"]) && isset($_GET["num"])){
							switch ($_GET["method"]) {
								case 'inv':
									switch ($_GET["num"]) {
										case '1':
											?>
											<div id="word_search">
												<div class="input_container">
												<input type="text" class="input_search" id="input_searchDirect" placeholder=" ">
												<label for=""><?php echo $lang->dict->stim_title->{$_SESSION["lang"]}; ?></label>
												</div>
												<button class="btn-search"
												onclick="printRes(document.getElementById('input_searchDirect').value)"><?php echo $lang->search->search->{$_SESSION["lang"]}; ?></button>
											</div>
											<?php
											break;
										case '2':
											?>
											<div id="stimulus_search">
												<div class="letter_container">
												<span onclick="printRes('1-350');"><?php echo $lang->search->all->{$_SESSION["lang"]}; ?></span>
												<span onclick="printRes('200-350');">350-200</span>
												<span onclick="printRes('150-199');">199-150</span>
												<span onclick="printRes('100-149');">149-100</span>
												<span onclick="printRes('50-99');">99-50</span>
												<span onclick="printRes('1-49');">49-1</span>
												</div>
											</div>
											<?php
											break;
										case '3':
											?>
											<div id="freq_search">
												<div class="letter_container">
													
													<span onclick="printByFreq(80);">100%-80%</span>
													<span onclick="printByFreq(60);">80%-60%</span>
													<span onclick="printByFreq(40);">60%-40%</span>
													<span onclick="printByFreq(20);">40%-20%</span>
													<span onclick="printByFreq(0);">20%-0%</span>
												</div>
											</div>
											<?php
											break;
										default:
											?>
											<div id="alpha_search">
												<div class="letter_container">
												</div>
											</div>
											<?php											
											break;
									}
									break;
								default:
									switch ($_GET["num"]) {
										case '1':
											?>
											<div id="word_search">
												<div class="input_container">
												<input type="text" class="input_search" id="input_searchDirect" placeholder=" ">
												<label for=""><?php echo $lang->dict->stim_title->{$_SESSION["lang"]}; ?></label>
												</div>
												<button class="btn-search"
												onclick="printRes(document.getElementById('input_searchDirect').value)"><?php echo $lang->search->search->{$_SESSION["lang"]}; ?></button>
											</div>
											<?php
											break;
										default:
											?>
											<div class="search_method">
												<div id="alpha_search">
													<div class="letter_container">
													</div>
												</div>
											</div>
											<?php
											break;
									}
									break;
							}
						}else{
							?>
							<div class="search_method">
								<div id="alpha_search">
									<div class="letter_container">
									</div>
								</div>
							</div>
							<?php
						}
					?>
					<div id="res_loader">CHARGEMENT...</div>
					<div class="result"></div>
					<input type="hidden" id="dictionary" value="sanf">
				</div>
			</div>
			<!-- / main body -->
			<div class="clear"></div>
		</main>
	</div>
	<!-- ################################################################################################ -->
	<?php include "../includes/footer.php"; ?>
	<script src="../../layout/scripts/search.js"></script>
	<script>
		init_loader();
		<?php
		/* initialization of search method */
		if(isset($_GET["method"]) && isset($_GET["num"])){
			if($_GET["method"]=="dir" && !in_array($_GET["num"],array('1'))){
				echo "letterGen();";
			}elseif($_GET["method"]=="inv" && !in_array($_GET["num"],array('1','2','3'))){
				echo "letterExtendGen();";
			}
		}else{
			echo "letterGen();";
		}
		?>
	</script>
</body>

</html>