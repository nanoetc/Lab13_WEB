 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="style_admin.css">
  </head>
  <body>
    <div id="container">
  	<header>
  		<h1>Layout Sederhana</h1>
  	</header>

  	<nav>
        <div class="navbar-nav">
        <a class"nav-link active" aria-current="page" href="/lab11_php_ci/ci4/public/home" class="active">Home</a>
        <a class="nav-link" href="<?= ('/lab11_php_ci/ci4/public/artikel');?>" class="active">artikel</a>
        <a class="nav-link" href="<?= ('/lab11_php_ci/ci4/public/about');?>" class="active">about</a>
        <a class="nav-link" href="<?= ('/lab11_php_ci/ci4/public/contact');?>" class="active">Contact</a>
  </nav>
      <section id="wrapper">
        <section id="main">
