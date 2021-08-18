<!DOCTYPE html>
<?php include "pages/includes/header.php"; ?>

<body id="top">
<?php include "pages/includes/navbar.php"; ?>
<!-- ################################################################################################ -->
<div class="bgded overlay" style="background-image:url('images/associativnoe-myshlenie.jpg');">
	<div id="pageintro" class="hoc clear"> 
		<article>
			<p><?php echo $lang->home->intro->{$_SESSION["lang"]}; ?></p>
		</article>
	</div>
</div>
<!-- ################################################################################################ -->
<div class="wrapper row3">
	<main class="hoc container clear"> 
		<!-- main body -->
		<section id="introblocks">
			<ul class="nospace group btmspace-80 elements elements-four">
				<li class="one_third">
					<!-- These links must be changed to a post/person (currently is for share the website) -->
					<article><a href="http://www.facebook.com/sharer.php?u=http://dictaverf.nsu.ru"><i class="fab fa-facebook-f"></i></a>
						<h6 class="heading"><?php echo $lang->home->fb->{$_SESSION["lang"]}; ?></h6>
					</article>
				</li>
				<li class="one_third">
					<article><a href="http://vkontakte.ru/share.php?url=http://dictaverf.nsu.ru"><i class="fab fa-vk"></i></a>
						<h6 class="heading"><?php echo $lang->home->vk->{$_SESSION["lang"]}; ?></h6>
					</article>
				</li>
				<li class="one_third">
					<article><a href="http://www.linkedin.com/shareArticle?mini=true&url=http://dictaverf.nsu.ru"><i class="fab fa-linkedin-in"></i></a>
						<h6 class="heading"><?php echo $lang->home->vk->{$_SESSION["lang"]}; ?></h6>
					</article>
				</li>
			</ul>
		</section>
		<section class="group shout">
			<figure class="one_half first"><img src="images/dictionary.jpg" alt="Dictionary">
				<figcaption class="heading"><a href="./pages/about.php"><?php echo $lang->navbar->about->{$_SESSION["lang"]}; ?></a></figcaption>
			</figure>
			<figure class="one_half"><img src="images/authors.jpg" alt="Authors">
				<figcaption class="heading"><a href="./pages/authors.php"><?php echo $lang->navbar->authors->{$_SESSION["lang"]}; ?></a></figcaption>
			</figure>
		</section>
		<!-- / main body -->
		<div class="clear"></div>
	</main>
</div>
<!-- ################################################################################################ -->
<?php include "pages/includes/footer.php"; ?>
</body>
</html>
