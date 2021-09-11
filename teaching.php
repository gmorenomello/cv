
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
				<h3>place for  for image</h3>
				</div>
			</div>
      <div class="row">
				<div class="col">
					<h3>Teaching Philosophy</h3>
					Etiam nec velit orci. Maecenas congue elit vel pharetra fringilla. Mauris in leo ligula. Integer quis accumsan elit. Nunc suscipit accumsan erat sed ultrices. Curabitur consectetur risus ex, sit amet elementum nunc laoreet non. Quisque quis tincidunt metus, eu sollicitudin ipsum. Morbi id nulla congue tellus pellentesque consectetur.

					Etiam vulputate, quam quis vehicula suscipit, ligula leo varius nisi, at porttitor lorem mi quis quam. Suspendisse quis bibendum velit. Sed maximus erat vitae neque hendrerit, eu ullamcorper leo egestas. Vestibulum ornare purus pretium, auctor nibh vel, ullamcorper elit. Integer varius ligula quam, eu iaculis nisl vehicula ut. Nullam a commodo dolor. Sed in diam eu metus tincidunt fermentum at nec est. Vivamus eu sollicitudin ligula. Vestibulum lacinia augue nec purus rhoncus, id facilisis nunc vestibulum. Nam ultrices dictum ligula eu maximus. Donec ut sem in purus vulputate ultricies a ut turpis.

					Vestibulum id neque eleifend, pellentesque urna vitae, interdum leo. Fusce finibus volutpat nulla ac pellentesque. Nulla tristique ante at nulla mollis, sodales tempor est cursus. Proin eleifend faucibus risus, sed pulvinar ligula cursus vel. In in arcu nibh. Pellentesque a dignissim turpis. Vivamus venenatis libero et velit porttitor, a pulvinar diam sollicitudin. Maecenas odio orci, convallis a finibus et, semper sit amet odio.

					Nam purus quam, tincidunt sit amet urna a, finibus consectetur lorem. Ut posuere, metus vel auctor tempor, purus ipsum convallis est, vitae sollicitudin nisi velit at velit. Nunc ut tortor in nulla aliquet suscipit vel in dui. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur vitae sollicitudin purus. Donec at tellus pellentesque, elementum tortor eu, sodales leo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.

					Quisque sit amet laoreet mi, sit amet egestas velit. Quisque id ultrices tellus, vel cursus massa. Cras ut nisl lorem. Duis tempor, elit mattis finibus facilisis, risus purus pulvinar nisi, ac dictum elit nulla a felis. Donec eget odio vitae urna placerat gravida at non eros. Maecenas nulla dui, viverra a mi a, condimentum lacinia dui. Integer pulvinar dui ac lobortis venenatis. Donec tempus non urna quis auctor. Maecenas ornare rutrum massa at dapibus. Cras fermentum auctor urna sit amet placerat. Praesent sed facilisis dui. Vivamus ex neque, molestie at nulla id, efficitur congue ex. Donec vehicula ante mauris, ut cursus justo condimentum eu. Cras mi felis, eleifend id lacus nec, blandit semper purus. Vestibulum vitae porta metus. Aliquam risus nibh, malesuada id dui a, volutpat mollis quam.
				</div>
			</div>
			<div class="row">
				<div class="col">
					<h3>Courses</h3>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<h3>PhD Thesis</h3>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<h3>Master Thesis</h3>
				</div>
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
