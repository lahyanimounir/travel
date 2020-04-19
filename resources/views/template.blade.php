<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Luxury Des Tours</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon0.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="/lib/animate/animate.min.css" rel="stylesheet">
  <link href="/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->

   


  <header id="header" @if($colorHeader == 'black') style="background: rgba(0, 0, 0, 0.9);padding: 20px 0;height: 72px;" @endif>
    <div class="container-fluid">

      <div id="logo" class="pull-left d-none d-lg-block">
        <h1><a href="#intro" class="scrollto">Luxury Tours</a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu" >
          <li class="menu-active"><a href="/#intro">{{ __('translate.acceuil')}}</a></li>
          <li class="menu-has-children"><a href="/#services">Excursion</a>
             <ul style="border-radius: 5px" class="px-0 py-0">
               @foreach ($activitiesMenu as $activitieMenu)
                  @if($activitieMenu->types_id == 3)
                      <li><a href="/{{app()->getLocale()}}/activitee/{{$activitieMenu->ville_id}}/{{$activitieMenu->types_id}}"> {{$activitieMenu->ville->name}} </a></li>
                  
                  @endif
                @endforeach
            </ul>
          </li>
          <li class="menu-has-children"><a href="/#circuit">Circuit</a>
             <ul style="border-radius: 5px" class="px-0 py-0">
               @foreach ($activitiesMenu as $activitieMenu)
                  @if($activitieMenu->types_id == 1)
                    <li><a href="/{{app()->getLocale()}}/activitee/{{$activitieMenu->ville_id}}/{{$activitieMenu->types_id}}"> {{$activitieMenu->ville->name}} </a></li>
                   @endif
                @endforeach
            </ul>
          </li>
          <li><a href="/#trekkings">Trekkings</a></li>
          <li><a href="/#portfolio">{{ __('translate.galerie')}}</a></li>
          <li><a href="/#contact">{{ __('translate.contacte')}}</a></li>
          <li class="menu-has-children"><a href="">{{ __('translate.langues')}}</a>
            <ul style="border-radius: 5px">
              @foreach ($langues as $langue)
                 <li><a href="/{{$langue->code}}">{{$langue->name}}</a></li>
              @endforeach
            </ul>
          </li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->



@yield('contenu')

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h3>Luxury Tours</h3>
            <p>{{ __('translate.Nous avons sélectionné les meilleures destinations marocaines, pour rendre votre voyage spécial et inoubliable. excursions dune journée, excursions, circuits dans le désert et circuits entièrement personnalisés ')}}.</p>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>{{ __('translate.LIENS UTILES')}}</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">{{ __('translate.ACCEUIL')}}</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">{{ __('translate.POURQUOI NOUS')}}</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">{{ __('translate.NOS EXCURSION')}}</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">{{ __('translate.NOS CIRCUITS')}}</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">{{ __('translate.NOS GALERIE')}}</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-contact">
            <h4>{{ __('translate.Contactez nous')}}</h4>
            <p>
              Hay Elmassira <br>
              N° 192, Ouarzazate<br>
              Maroc <br>
              <strong>{{ __('translate.Téléphone')}}:</strong> +33 6 64 13 63 96<br>
              <strong>Email:</strong> Email@example.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

       

        </div>
      </div>
    </div>

  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="/lib/jquery/jquery.min.js"></script>
  <script src="/lib/jquery/jquery-migrate.min.js"></script>
  <script src="/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/lib/easing/easing.min.js"></script>
  <script src="/lib/superfish/hoverIntent.js"></script>
  <script src="/lib/superfish/superfish.min.js"></script>
  <script src="/lib/wow/wow.min.js"></script>
  <script src="/lib/waypoints/waypoints.min.js"></script>
  <script src="/lib/counterup/counterup.min.js"></script>
  <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="/lib/lightbox/js/lightbox.min.js"></script>
  <script src="/lib/touchSwipe/jquery.touchSwipe.min.js"></script>


  <!-- Template Main Javascript File -->
  <script src="/js/main.js"></script>

</body>
</html>
