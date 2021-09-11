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
    				<h3>LINKS</h3>
    				</div>
    			</div>
          <div class="row">
    				<div class="col">
    					<h3>Scientific writing support</h3>
              <ul>
                <li><a href="http://arxiv.org/">ArXiV</a></li>
                <li><a href="https://z-lib.org/">Books Online</a></li>
                <li><a href="https://sci-hub.do/">Sci-hub Online</a></li>
                <li><a href="https://www.thesaurus.com">Dictionary Thesaurus</a></li>
                <li><a href="http://www.britannica.com/">Encyclopædia Britannica</a></li>
                <li><a href="">LATTES</a></li>
                <li><a href="">Cristin</a></li>
              </ul>

              <h3>Norwegian sites:</h3>
              <ul>
                <li><a href="https://helsenorge.no/behandlere/bytte-av-fastlege">Helsenorge</a></li>
                <li><a href="https://ruter.no/en/getting-help/travel-guarantee-and-taxi-refund/">Ruter</a></li>
                <li><a href="https://www.altinn.no">Skattetaten (access here; infos here)</a></li>
                <li><a href="https://www.vy.no/">VY (for refunds here)</a></li>
              </ul>

              <h3>Oslo Metropolitan University and related sites:</h3>
              <ul>
                <li><a href="https://ansatt.oslomet.no/en/">Intranet</a></li>
                <li><a href="https://dfo.no/kundesider/logg-inn">Only SAP</a></li>
                <li><a href="https://ansatt.oslomet.no/office-365">Access from outside</a></li>
                <li><a href="https://pressreader.com">Read press</a></li>
                <li><b>Research</b>
                  <ul>
                    <li><a href="https://ansatt.oslomet.no/en/siste-nytt/-/nyhet/forskningsdatabasen-er-no-open-for-alle-tilsette-">Forskningsdatabasen </a></li>
                    <li><a href="https://npi.nsd.no/fagfeltoversikt">Level I-II journals </a></li>
                    <li><a
                        href="https://weblogin.uio.no/simplesaml/module.php/delegate/login.php?AuthState=_a17db9882cd02caa242f20859a02a9879adc798b26%3Ahttps%3A%2F%2Fweblogin.uio.no%2Fsimplesaml%2Fsaml2%2Fidp%2FSSOService.php%3Fspentityid%3Dhttps%253A%252F%252Fnettskjema.no%26cookieTime%3D1580121114">Nettskjema
                      </a></li>
                    <li><a href="https://oslomet.varbi.com/no/login/">Varbi OsloMet </a></li>
                  </ul>
                </li>
                <li><b>Teaching</b>
                  <ul>
                    <li><a href="https://mediasite.oslomet.no/Mediasite/Login/SAML?ReturnUrl=%2fMediasite%2fMyMediasite">Internal MediaSite</a></li>
                    <li><a
                        href="https://idp.feide.no/simplesaml/module.php/feide/login.php?asLen=178&AuthState=_71e2ab489e2f9e2d5c2b8e08557dcf770904676a75%3Ahttps%3A%2F%2Fidp.feide.no%2Fsimplesaml%2Fsaml2%2Fidp%2FSSOService.php%3Fspentityid%3Dhttp%253A%252F%252Foslomet.instructure.com%252Fsaml2%26cookieTime%3D1569178271">Canvas</a>
                    </li>
                    <li><a href="https://ansatt.oslomet.no/en/fagpersonweb-fs">Fagpersonweb</a></li>
                    <li><a href="">Inspera</a></li>
                  </ul>
                </li>
              </ul>

              <h3></h3>
              <ul>
                <li><a href="">Web of Science</a></li>
                <li>Neuro-tree</li>
              </ul>

              <h3>Software sites:</h3>
              <ul>
                <li><a href="">Gnuplot</a></li>
                <li><a href="http://www.ctan.org/find.html">Latex packages</a></li>
                <li><a href="http://html.spec.whatwg.org/">HTML specification</a></li>
                <li><a href="https://developer.mozilla.org/en-US/">Mozilla Developer's Network</a></li>
                <li><a href="https://dev.w3.org/html5/html-author/charref">W3 html entities char reference</a></li>
                <li><a href="https://www.w3schools.com/html/html5_semantic_elements.asp">Semantic Markup in HTML5</a></li>
                <li><a href="">XMGRace(ver também manual de utilização)</a></li>

              </ul>

              <h3>Design sites:</h3>
              <ul>
                <li><a href="https://htmlcolorcodes.com">HTML color codes</a></li>
                <li><a href="https://paletton.com/#uid=1000u0kllllaFw0g0qFqFg0w0aF">Color Scheme Designer</a></li>
                <li><a href="https://colorhunt.co">Color hunt (color palletes)</a></li>
                <li><a href="https://www.mockplus.com/blog/post/color-tool/">Color tools</a></li>
                <li><a href="https://protobot.org/#en/">Random Product Generator</a></li>
                <li><a href="https://ccsfontstack.com">ccs fonts</a></li>
                <li><a href="https://www.w3schools.com/html/html5_semantic_elements.asp">Semantic Markup in HTML5</a></li>
                <li><a href="https://emojipedia.org/">Emojipedia </a></li>
                <li><a href="https://iconmonstr.com">Icon Monstr</a></li>
                <li><a href="https://www.favicons.cc">Favicons</a></li>
                <li><a href="https://www.dailyui.co">Daily UI 100 days of user interface</a></li>
                <li><a href="https://collectui.com">Collect ui</a></li>
                <li><a href="https://canva.com">Canva</a></li>

                <li><a href="s">XMGRace(ver também manual de utilização)</a></li>
                <li><a href="s">XMGRace(ver também manual de utilização)</a></li>

              </ul>

              <h3>Tutorials:<h3>
              <ul>
              <li><a href="https://www.keybr.com">Speed Typing</a></li>
              <li><a href="https://www.submarinecablemap.com">Submarine cable map</a></li>
              <li><a href="https://www.techcrunch.com">Tech news</a></li>
              <li><a href="https://www.codepen.io">codepen</a></li>
              <li><a href="https://www.devdocs.io">Devdocs</a></li>
              <li><a href="https://web.archive.org">web archive to see old websites</a></li>
              <li><a href="https://www.gutenberg.org">gutenberg.org ebooks</a></li>
              <li><a href="https://www.unicode-code.com">unicode table</a></li>
              the absolute minimum every software developer absolutely, positively must know about unicode and character sets (no excuses!)
              </ul>
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
