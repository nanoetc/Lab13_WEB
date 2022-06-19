<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?= $title; ?></title>
  </head>
  <body>
    <?= $this->include('template/header'); ?>
    <h1><?= $title; ?></h1>
    <hr>
    <section id="hero">
  		<h1>Hello world</h1>
  		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Vestibulum lorem elit,iaculis innisl volutpat, malesuada tincidunt arcu. Proin in leo fringilla, vestibulum mi porta, faucibus felis. Integer pharetra est nunc, nec pretium nunc pretium ac.</p>
  		<a href="home.html" class="btn btn-large">Learn more &raquo;</a>
  		</section>

  	<section id="wrapper">
  		<section id="main">
  			<div class="row">
  				<div class="box">
  					<img src="https://dummyimage.com/120/db7d25/fff.png" alt="" class="image-circle">
  					<h3>Heading</h3>
  					<p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>
  					<a href="#" class="btn btn-default">View detail</a>
  				</div>
  				<div class="row">
  					<div class="box">
  						<img src="https://dummyimage.com/120/db7d25/fff.png" alt="" class="image-circle">
  						<h3>Heading</h3>
  						<p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>
  						<a href="#" class="btn btn-default">View detail</a>
  					</div>
  				<div class="box">
  					<img src="https://dummyimage.com/120/3e73e6/fff.png" alt="" class="image-circle">
  					<h3>Heading</h3>
  					<p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>
  					<a href="#" class="btn btn-default">View detail</a>
  				</div><div class="box">
  					<img src="https://dummyimage.com/120/71e6d4/fff.png" alt="" class="image-circle">
  					<h3>Heading</h3>
  					<p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>
  					<a href="#" class="btn btn-default">View detail</a>
  				</div>
  			</div>

  			<hr class="divider" />
  			<article class="entry">
  				<h2>First featurette heading.</h2>
  				<img src="https://dummyimage.com/150/7b8a70/fff.png" alt="">
  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum lorem elit, iaculis in nisl volutpat, malesuada tincidunt arcu. Proin in leo fringilla, vestibulum mi porta, faucibus felis. Integer pharetra est nunc, nec pretium nunc pretium ac.</p>
  			</article>
  			<article class="entry">
  				<h2>First featurette heading.</h2>
  				<img src="https://dummyimage.com/150/7b8a70/fff.png" alt="" class="right-img">
  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum lorem elit, iaculis in nisl volutpat, malesuada tincidunt arcu. Proin in leo fringilla, vestibulum mi porta, faucibus felis. Integer pharetra est nunc, nec pretium nunc pretium ac.</p>
  			</article>
  		</section>

    <?= $this->include('template/footer'); ?>
  </body>
</html>
