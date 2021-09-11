<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta property="og:description" content="">
	<meta property="og:title" content="">
	<meta property="twitter:description" content="">
	<meta property="twitter:title" content="">
	<title> Guga's Personal Website</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
	</link>

</head>

<body onload="topFunction()">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

	<nav class="navbar navbar-expand-lg bg-dark navbar-dark px-4">
    <a class="navbar-brand" href="#"><img src="images/mascot.png" class="rounded" height="100" width="100">Guga's Laboratorium</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <?php
    include('includes/header.php');
    ?>
    </div>
	</nav>

  <a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out" data-abc="true" onclick="scrollToTop()" onload="setinvisible()" style="border-radius:80px"></a>

	<main class="page-content" style="padding-top: 30px; padding-bottom:30px;">
    <div class="container-lg">
			<div class="row" id="img" >
				<div class="col" style="height:300px; width:100%; background-color:#00cccc;">
				<h3>ARTICLES</h3>
				</div>
			</div>
			<div class="row" id="proj_pos">
        <div class="col-lg-6 col-md-12" >
                <img style="height:160px; width:160px; background-color:#cc00cc; margin-right: 5px; margin-bottom: 5px; float: left;">
                </img>
            <h5>Article 1 Title(link)</h5>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ut accumsan odio. Sed dignissim varius tristique. Curabitur ultricies posuere ipsum, at eleifend purus rutrum id. Praesent cursus purus vitae neque lacinia efficitur. Quisque gravida ex leo, ut pretium justo pellentesque sed. In sit amet molestie dui. Curabitur in ipsum et nisi luctus venenatis. Sed nisi risus, cursus quis pellentesque quis, vulputate in odio. Suspendisse tristique ultrices diam ac sodales. Mauris nisl augue, commodo ut ipsum et, faucibus consectetur quam. Etiam molestie tortor eget nunc bibendum luctus. Duis lobortis pharetra lacinia. Suspendisse faucibus cursus mauris lobortis dictum. Morbi massa diam, aliquet eget pretium eu, pulvinar ac nunc. Integer eget feugiat mi.
        </div>
        <div class="col-lg-6 col-md-12" >
                <img style="height:160px; width:160px; background-color:#cccc00; margin-right: 5px; margin-bottom: 5px; float: left;">
                </img>
            <h5>Article 2 Title(link)</h5>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ut accumsan odio. Sed dignissim varius tristique. Curabitur ultricies posuere ipsum, at eleifend purus rutrum id. Praesent cursus purus vitae neque lacinia efficitur. Quisque gravida ex leo, ut pretium justo pellentesque sed. In sit amet molestie dui. Curabitur in ipsum et nisi luctus venenatis. Sed nisi risus, cursus quis pellentesque quis, vulputate in odio. Suspendisse tristique ultrices diam ac sodales. Mauris nisl augue, commodo ut ipsum et, faucibus consectetur quam. Etiam molestie tortor eget nunc bibendum luctus. Duis lobortis pharetra lacinia. Suspendisse faucibus cursus mauris lobortis dictum. Morbi massa diam, aliquet eget pretium eu, pulvinar ac nunc. Integer eget feugiat mi.
        </div>

      </div>
    </div>
</main>



	<footer class="bg-dark text-center text-secondary" >
    <?php
    include('includes/footer.php');
    ?>

  </div>
	</footer>

  <script>
  var rootElement = document.documentElement
  var mybutton = document.getElementById("toTopBtn");
  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {
    if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "none";
    }
  }
  function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
  mybutton.style.display = "none";
  }
  </script>



</body>

</html>
