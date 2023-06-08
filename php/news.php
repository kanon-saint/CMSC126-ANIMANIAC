<?php

?>

<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>News</title>

	<link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet'>
	
	<!-- Swiper -->
	<link rel="stylesheet" type="text/css" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script type="text/javascript" src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

	<link rel="stylesheet" href="css/design.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head> 
<body>
<div >
	<!-- Header -->
	<?php include 'header.php'; ?>
        <!--  -->
	<!-- Body -->
	<h1 class="featured-article-header">featured articles</h1>
	
		<div class="featured-articles">
			<div class="featured-slide-container swiper">
				<div class="featured-slide-content">
					<div class="card-wrapper swiper-wrapper">
						<?php
							include 'featuredArticle.php';
							
						?>

<!-- 						
						<div class="featured-card swiper-slide">
							<div class="featured-image-content">
								<div class="featured-card-image">
									<img class="featured-card-img" src="images/news.jpg">
								</div>
							</div>

							<div class="featured-card-content">
								<p class="newsTags">Anime</p>
								<p class="newsTags">Popular</p>
								<h1 class="featured-headline">Dr. Stone New World Officially Gets Season 3 this summer!</h1>
								<p class="featured-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
						</div>

						<div class="featured-card swiper-slide" onclick="window.location.href ='newsArticle.html';">
							<div class="featured-image-content">
								<div class="featured-card-image">
									<img class="featured-card-img" src="images/news2.jpg">
								</div>
							</div>

							<div class="featured-card-content">
								<p class="newsTags">Anime</p>
								<p class="newsTags">Trending</p>
								<h1 class="featured-headline">Oshi no Ko Anime Debuts with 90-Minute 1st Episode</h1>
								<p class="featured-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
						</div>

						<div class="featured-card swiper-slide">
							<div class="featured-image-content">
								<div class="featured-card-image">
									<img class="featured-card-img" src="images/news.jpg">
								</div>
							</div>

							<div class="featured-card-content">
								<p class="newsTags">Anime</p>
								<p class="newsTags">Popular</p>
								<h1 class="featured-headline">Dr. Stone New World Officially Gets Season 3 this summer!</h1>
								<p class="featured-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
						</div>

						<div class="featured-card swiper-slide">
							<div class="featured-image-content">
								<div class="featured-card-image">
									<img class="featured-card-img" src="images/news.jpg">
								</div>
							</div>

							<div class="featured-card-content">
								<p class="newsTags">Anime</p>
								<p class="newsTags">Popular</p>
								<h1 class="featured-headline">Dr. Stone New World Officially Gets Season 3 this summer!</h1>
								<p class="featured-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
						</div> -->

					</div>
			

			<div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
			</div>
		</div>

	<h1 class="smallerHeader">upcoming anime</h1>
	<div class="upcoming-anime">
		<div class="slide-container swiper">
			<div class="slide-content">
				<div class="card-wrapper swiper-wrapper">
					<?php 
						include 'upcomingAnime.php';
					?>
					
				</div>
			

						<div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
		</div>
	</div>

	<h1 class="smallerHeader">upcoming products</h1>
	<div class="upcoming-anime">
		<div class="slide-container swiper">
			<div class="slide-content">
				<div class="card-wrapper swiper-wrapper">
					<?php 
						include 'upcomingProducts.php';
					?>
					
				</div>
			

						<div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
		</div>
	</div>

	<h1 class="smallerHeader">upcoming promotions</h1>
	<div class="upcoming-anime">
		<div class="slide-container swiper">
			<div class="slide-content">
				<div class="card-wrapper swiper-wrapper">
					<?php 
						include 'upcomingPromotions.php';
					?>
					
				</div>
			

						<div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
		</div>
	</div>

	
</div>
<!-- Footer -->
<?php include 'footer.php'; ?>

	<!-- Swiper JS -->
      <!--Uncomment this line-->
    <!-- <script src="swiper-bundle.min.js"></script> -->

    <!-- JavaScript -->
      <!--Uncomment this line-->
    <script src="js/news.js"></script>
</body>
	
</html>