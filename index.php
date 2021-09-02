<!DOCTYPE html>
<html lang="en">
<head> 
	<title> LiveNews </title> 
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<link rel="stylesheet" href="./css/mystyle.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<?php


$category = "general";
$country = "in";


include 'header.php';
echo "<br> <br> <br> <br>";

$apiKey = "3dd956b5ad7b49deae99e0c0db55a4e9";
$baseUrl = "https://newsapi.org/v2/top-headlines";
$api = file_get_contents($baseUrl."?category=".$category."&country=".$country."&apiKey=".$apiKey);

$news = json_decode ($api, true);
$cnt = 0;
//echo count($news['articles']);
?>
	<!-- <section class="container-fluid p-t-3">
	    <div class="row">
	        <div class="align-items-center">
	            <h1><span style="color: crimson">LIVE NEWS</span></h1>
	        </div>
	    </div>
	</section> -->
	<section class="carousel slide" data-interval="false" data-ride="carousel" id="postsCarousel">
	    
	    <a class="carousel-control-prev" href="#postsCarousel" role="button" data-slide="prev">
		    <i class="fa fa-chevron-left text-dark"></i> 
		</a>
		<a class="carousel-control-next" href="#postsCarousel" role="button" data-slide="next">
		    <i class="fa fa-chevron-right text-dark"></i> 
		</a>
        <div class="container carousel-inner" id="pc-view">
			<?php foreach ($news['articles'] as $value){ 
				$image = "https://bitsofco.de/content/images/2018/12/broken-1.png";
				if(!empty($value['urlToImage'])) $image = $value['urlToImage']; 

			if($cnt%3==0) { ?> 
		        <div class='<?php if($cnt==0) echo "row row-equal carousel-item active ml-1"; else echo "row row-equal carousel-item ml-1"; ?>'>
		    <?php } ?>

			<div class="col-sm-4 d-flex justify-content-around align-items-center">
				<div class="card" style="height: 40rem; width:23rem;">
				  <img src='<?php echo $image; ?>' class="card-img-top" alt=" Sorry Image Not Available :(">
				  <div class="card-body">
				    <h5 class="card-title"><b><?php echo $value['title']; ?></b></h5>
				    <p class="card-text">
				    	<b><?php echo $value['publishedAt']; ?> </b>
				    	<p><?php echo $value['description']; ?> </p>
				    </p>
				    <a href="<?php echo $value['url']; ?>" class="link" style="color:#FF0000;">Read More...</a>
				  </div>
				</div>
			</div>
			<?php 
				$cnt++;
				if($cnt%3==0){ ?>
				</div>
					<?php } } ?>
		</div>
	</section>

	<section class="carousel slide" data-interval="false" data-ride="carousel" id="postsCarouselMobile">
		 <a class="carousel-control-prev" href="#postsCarouselMobile" role="button" data-slide="prev">
		    <i class="fa fa-chevron-left text-dark"></i> 
		</a>
		<a class="carousel-control-next" href="#postsCarouselMobile" role="button" data-slide="next">
		    <i class="fa fa-chevron-right text-dark"></i> 
		</a>
	    
        <div class="container carousel-inner d-flex justify-content-between ml-3" id="mobile-view">

			<?php
			$cnt = 0; 
			foreach ($news['articles'] as $value){ 
				
				$image = "https://bitsofco.de/content/images/2018/12/broken-1.png";
				if(!empty($value['urlToImage'])) $image = $value['urlToImage']; 

			if($cnt%1==0) { ?> 

		        <div class='<?php if($cnt==0) echo "row carousel-item active"; else echo "row carousel-item"; ?>'>
		    <?php } ?>
			<div class="col-xs-12 d-flex justify-content-around align-items-center">
				<div class="card overflow-auto" style="height: 38rem; width:20rem; padding: 1%;">
				  <img src='<?php echo $image; ?>' class="card-img-top" alt=" Sorry Image Not Available :(">
				  <div class="card-body">
				    <h5 class="card-title"><b><?php echo $value['title']; ?></b></h5>
				    <p class="card-text">
				    	<b><?php echo $value['publishedAt']; ?> </b>
				    	<p><?php echo $value['description']; ?> </p>
				    </p>
				    <a href="<?php echo $value['url']; ?>" class="link" style="color:#FF0000;">Read More...</a>
				  </div>
				</div>
			</div>
			
			<?php 
				$cnt++;
				if($cnt%1==0){ ?>
				</div>
					<?php } } ?>
		</div>
	</section>
	<?php include 'footer.php'; ?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script>

</script>
</body>
</html>