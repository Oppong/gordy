<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Cliqshots Photography Official Website ">
        <meta name="keywords" content="Photography, Graphic Designs, Web Development">

        <title>Cliqzshots</title>

        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css')}}">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
        <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
      
    </head>
    <body>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h5 class="my-0 mr-md-auto font-weight-bold">Cliqzshots</h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="#home">Home</a>
        <a class="p-2 text-dark" href="#about">About</a>
        <a class="p-2 text-dark" href="#portfolio">Portfolio</a>
        <a class="p-2 text-dark" href="#bookus">Book Us</a>
      </nav>
      <!--<a class="btn btn-outline-primary" href="#">Sign up</a>-->
    </div>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style=" margin-top: -20px;">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/img/bg1.jpg" alt="First slide">
      <div class="carousel-caption d-md-block">
        <h3 class="text-center display-5 first"><strong>NOTHING BUT THE BEST</strong></h3>
      </div><!-- carousel caption -->
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/img/banner.jpg" alt="Second slide">
       <div class="carousel-caption d-md-block">
        <h3 class="text-center display-5"><strong>PHOTOGRAPHY IS THE BEAUTY OF LIFE CAPTURED</strong></h3>
      </div><!-- carousel caption -->
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/img/bg4.jpg" alt="Second slide">
       <div class="carousel-caption d-md-block">
        <h3 class="text-center display-5"><strong>ALWAYS THE BEST</strong></h3>
      </div><!-- carousel caption -->
    </div>


  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<section id="home">
    <div class="container mt-5">
    <div class="row mt-4">
        <div class="col-12 col-md-6 mt-5 show-left">
            <h3 class="font-weight-normal pb-2">Photography</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta consectetur saepe vel blanditiis, aspernatur, ea ad at corrupti praesentium perferendis pariatur magnam! Quibusdam, nam quos, cum commodi maiores nihil natus!</p>
            <p>aspernatur, ea ad at corrupti praesentium perferendis pariatur magnam! Quibusdam, nam quos, cum commodi maiores nihil natus!</p>
            <p>aspernatur, ea ad at corrupti praesentium perferendis pariatur magnam! Quibusdam, nam quos, cum commodi maiores nihil natus!</p>
        </div><!-- end of col -->

        <div class="col-12 col-md-6 mt-5 show-right">
           <div class="text-center"> <img src="/img/asds.png" alt="logo in macbook" width="80%"></div>
        </div>
    </div><!-- end of row -->
 </div><!-- end of container -->
</section>
 
 <section id="about">
      <div class="container-fluid  mt-5" style="padding: 0">
       <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
            <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100 image" src="/img/bg3.jpg" alt="First Slide">
                  <div class="carousel-caption d-md-block">                 
                    <h4 class="text-white image-right" style="margin-top: -180px;" >Who we are</h4>
                    <p class="text-white image-left">aspernatur, ea ad at corrupti praesentium perferendis pariatur <br> magnam! Quibusdam, nam quos, cum commodi maiores nihil natus!</p>
                  </div>
                </div><!-- end of carousel item-->
            </div>
    </div><!-- end of carousel -->
 </div>
 </section>


<section id="portfolio">
    <div class="container ">
    <div class="row">

        <div class="text-center col-12 mt-5">
            <h3 class="font-weight-normal pb-2 mt-5">Latest Works</h3>
        </div>

        <div class="col-6 col-md-3 pb-3">
            <img src="/img/g1.jpg" alt="" class="img-fluid  galle">
        </div>

        <div class="col-6 col-md-3 pb-3">
            <img src="/img/g2.jpg" alt="" class="img-fluid galle">
        </div>

         <div class="col-6 col-md-3">
            <img src="/img/g3.jpg" alt="" class="img-fluid  galle-1">
        </div>

        <div class="col-6 col-md-3">
            <img src="/img/g4.jpg" alt="" class="img-fluid galle-1">
        </div>

    </div><!-- end of row -->

    <div class="row">
            
        <div class="col-6 col-md-3 pb-3 pt-3">
            <img src="/img/g3.jpg" alt="" class="img-fluid galle">
        </div>

        <div class="col-6 col-md-3 pb-3 pt-3">
            <img src="/img/g4.jpg" alt="" class="img-fluid galle">
        </div>

         <div class="col-6 col-md-3 pt-3">
            <img src="/img/g2.jpg" alt="" class="img-fluid galle-1">
        </div>

        <div class="col-6 col-md-3 pt-3">
            <img src="/img/g1.jpg" alt="" class="img-fluid galle-1">
        </div>
    </div><!-- end of row -->
</div>
</section>      


<section id="bookus">
    <div class="container">
    <div class="row">
        <div class="text-center col-12 mt-5">
            <h3 class="font-weight-normal pb-2 mt-5">Book Us</h3>
        </div>

         <div class="col-12 col-md-6 pb-3 show-left">
            <p>aspernatur, ea ad at corrupti praesentium perferendis pariatur <br> magnam! Quibusdam, nam quos, cum commodi maiores nihil natus!</p>

             <p>aspernatur, ea ad at corrupti praesentium perferendis pariatur <br> magnam! Quibusdam, nam quos, cum commodi maiores nihil natus!</p>
        </div>

        <div class="col-12 col-md-6 pb-3 show-right">
            <p>aspernatur, ea ad at corrupti praesentium perferendis pariatur <br> magnam! Quibusdam, nam quos, cum commodi maiores nihil natus!</p>

             <p>aspernatur, ea ad at corrupti praesentium perferendis pariatur <br> magnam! Quibusdam, nam quos, cum commodi maiores nihil natus!</p>
        </div>
    </div><!--end of row -->
</div>

</section>



<footer class="mt-5" style="padding: 0;">
    <div class="col-12 col-md-12">
        <h5 class="text-white text-center pt-5 pb-5" style="background-color: #222222;" > &copy; Copyright Cliqzshot 2018</h5>
    </div>   
</footer>









   
        <script src="js/app.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


        <script>
            window.sr = ScrollReveal();

            sr.reveal('.first', {
  
                duration: 2000,
                origin: 'top',
                viewFactor: 0.2,

            });

            sr.reveal('.show-left', {
  
                duration: 2000,
                origin: 'left',
                viewFactor: 0.2,

            });


            sr.reveal('.show-right', {
  
                duration: 2000,
                origin: 'top',
                viewFactor: 0.2,

            });

             sr.reveal('.image', {
  
                duration: 2000,
                origin: 'top',
                distance: '200px',
                viewFactor: 0.3,

            });


             sr.reveal('.image-right', {
  
                duration: 2000,
                origin: 'right',
                distance: '300px',
                viewFactor: 0.3,

            });


               sr.reveal('.image-left', {
  
                duration: 2000,
                origin: 'left',
                distance: '300px',
                viewFactor: 0.3,

            });


                sr.reveal('.galle', {
  
                duration: 2000,
                origin: 'left',
                viewFactor: 0.3,

            });


                 sr.reveal('.galle-1', {
  
                duration: 2000,
                origin: 'right',
                viewFactor: 0.3,

            });



        </script>

            <script>
        
            $(function() {
      // Smooth Scrolling
      $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });
    </script>
    </body>
</html>
