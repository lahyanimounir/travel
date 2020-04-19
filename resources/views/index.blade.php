
@extends('template')

@section('contenu')


  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="img/intro-carousel/8.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
              <h2>Ouarzazate Excursion </h2>
              <p>{{ __('translate.Profitez d’une expédition de 3 jours à Ouarzazate lors de cette excursion qui vous permettra de découvrir les plus beaux sites du sud du Maroc. L’une des plus belles activités à faire aux alentours de Ouarzazate !')}}</p>
                <a href="#featured-services" class="btn-get-started scrollto">{{ __('translate.Réserver Maintenant')}}</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/7.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>{{ __('translate.Excursion dans le massif de Atlas')}}</h2>
                <p>{{ __('translate.Lors de cette excursion d’une journée au massif de l’Atlas et aux villages berbères, vous verrez les endroits les plus étonnants et magnifiques : Le massif de l’Atlas, la vallée d’Imlil, la vallée d’Asni, la vallée d’Amizmiz, promenez-vous et visitez environ 8 villages berbères...')}}</p>
               
                <a href="#featured-services" class="btn-get-started scrollto">{{ __('translate.Réserver Maintenant')}}</a>
              </div>
            </div>
          </div>

          <div class="carousel-item ">
            <div class="carousel-background"><img src="img/intro-carousel/6.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>{{ __('translate.Les gorges du Todra')}}</h2>
                <p>{{ __('translate.Réservez une excursion privée dune journée sur lancienne route des 1000 casbahs. Explorez la vallée du Dadès et les canyons du Todra. Promenez-vous dans une palmeraie, savourez un déjeuner local et admirez des vues spectaculaires sur le paysage…')}}</p>
                <a href="#featured-services" class="btn-get-started scrollto">{{ __('translate.Réserver Maintenant')}}</a>
              </div>
            </div>
          </div>

       

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

<main id="main">
   
    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>{{ __('translate.Pourquoi Nous')}}</h3>
          <p>{{ __('translate.Nous avons sélectionné les meilleures destinations marocaines, pour rendre votre voyage spécial et inoubliable. excursions dune journée, excursions, circuits dans le désert et circuits entièrement personnalisés')}} .</p>
       

        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="img/circuit1.png" alt="" style="height: 200px;width: 100%;" class="img-fluid">
              </div>
              <h2 class="title"><a href="#">Un circuit de Quad </a></h2>
              <p>
                Un circuit de Quad étudié avec des étapes riches en découverte et enchantement, un guide professionnel, une très bonne ambiance et plusieurs surprises sont les secrets d’une parfaite balade 
              </p>
            </div>
          </div>

           <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="img/circuit5.jpg" alt="" style="height: 200px;width: 100%;" class="img-fluid">
              </div>
              <h2 class="title"><a href="#">Nos Excursion</a></h2>
              <p>
               En vous donnes le meilleur service des Excursions et Circuits au Maroc à un prix le plus bas dans le marché des professionels de domaine, voyager avec nous ce n’est pas seulement visiter et profiter un endroit mais c’est plus que ça....
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="img/circuit4.jpg" alt="" style="height: 200px;width: 100%;" class="img-fluid">
              </div>
              <h2 class="title"><a href="#">translate.Nos Circuits</a></h2>
              <p>Envie dun circuit au Maroc ? Consultez notre sélection et faites appel à un de nos experts locaux pour personnaliser le voyage selon vos attentes ! </p>
              
            </div>
          </div>

         



        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->

    <section id="services">
      <div class="container">

        <header class="section-header">
          <h3>{{ __('translate.Nos Excursion')}}</h3>
          <p>{{ __('translate.En vous donnes le meilleur service des Excursions et Circuits au Maroc à un prix le plus bas dans le marché des professionels de domaine, voyager avec nous ce n’est pas seulement visiter et profiter un endroit mais c’est plus que ça')}} .
          </p>
        </header>

        <div class="row services-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="services-col">
              <div class="img">
                <img src="img/circuit1.png" alt="" style="height: 200px;width: 100%;" class="img-fluid">
              </div>
              <h2 class="title"><a href="#">Un circuit de Quad</a></h2>
              <p>
               Un circuit de Quad étudié avec des étapes riches en découverte et enchantement, un guide professionnel, une très bonne ambiance et plusieurs surprises sont les secrets dune parfaite balade.
              </p>
            </div>
          </div>

           <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="services-col">
              <div class="img">
                <img src="img/circuit5.jpg" alt="" style="height: 200px;width: 100%;" class="img-fluid">
              </div>
              <h2 class="title"><a href="#">Nos Excursion</a></h2>
              <p>
                 En vous donnes le meilleur service des Excursions et Circuits au Maroc à un prix le plus bas dans le marché des professionels de domaine, voyager avec nous ce n’est pas seulement visiter et profiter un endroit mais c’est plus que ça
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="services-col">
              <div class="img">
                <img src="img/circuit4.jpg" alt="" style="height: 200px;width: 100%;" class="img-fluid">
              </div>
              <h2 class="title"><a href="#">Nos Circuits</a></h2>
              <p>
               Envie dun circuit au Maroc ? Consultez notre sélection et faites appel à un de nos experts locaux pour personnaliser le voyage selon vos attentes !
              </p>
            </div>
          </div>

         



        </div>

      </div>
    </section>
  



    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
        <h3>{{ __('translate.Luxury Des Tours')}}</h3>
        <p>{{ __('translate.Lagence de voyage Luxury Tours vous accompagne pour tous vos types de voyage et tout le long de ceux-ci. Que ce soit pour un séjour une Excursions,
        un voyage au Maroc ou un voyage à létranger, un week end ou un voyages à thématiques sports et aventures... Grâce à nos puissants comparateurs')}}.
        </p>
      </div>
    </section>

    

    <section id="circuit">
      <div class="container">

        <header class="section-header">
          <h3>{{ __('translate.Nos Circuits')}}</h3>
          <p>{{ __('translate.En vous donnes le meilleur service des Excursions et Circuits au Maroc à un prix le plus bas dans le marché des professionels de domaine, voyager avec nous ce n’est pas seulement visiter et profiter un endroit mais c’est plus que ça')}}
          .</p>
        </header>

        <div class="row circuit-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="circuit-col">
              <div class="img">
                <img src="img/circuit1.png" alt="" style="height: 200px;width: 100%;" class="img-fluid">
              </div>
              <h2 class="title"><a href="#">Un circuit de Quad </a></h2>
              <p>
                Un circuit de Quad étudié avec des étapes riches en découverte et enchantement, un guide professionnel, une très bonne ambiance et plusieurs surprises sont les secrets d’une parfaite balade .
              </p>
            </div>
          </div>

           <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="circuit-col">
              <div class="img">
                <img src="img/circuit5.jpg" alt="" style="height: 200px;width: 100%;" class="img-fluid">
              </div>
              <h2 class="title"><a href="#">translate.Nos Excursion</a></h2>
              <p>
                En vous donnes le meilleur service des Excursions et Circuits au Maroc à un prix le plus bas dans le marché des professionels de domaine, voyager avec nous ce n’est pas seulement visiter et profiter un endroit mais c’est plus que ça')}}
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="circuit-col">
              <div class="img">
                <img src="img/circuit4.jpg" alt="" style="height: 200px;width: 100%;" class="img-fluid">
              </div>
              <h2 class="title"><a href="#">Nos Circuits</a></h2>
              <p>
              Envie dun circuit au Maroc ? Consultez notre sélection et faites appel à un de nos experts locaux pour personnaliser le voyage selon vos attentes !
              </p>
            </div>
          </div>

         



        </div>

      </div>
    </section>



<section id="trekkings" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>{{ __('translate.Nos trekkings')}}</h3>
          <p>{{ __('translate.En vous donnes le meilleur service des Excursions et Circuits au Maroc à un prix le plus bas dans le marché des professionels de domaine, voyager avec nous ce n’est pas seulement visiter et profiter un endroit mais c’est plus que ça')}}
          </p>
        </header>

        <div class="row trekkings-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="trekkings-col">
              <div class="img">
                <img src="img/circuit1.png" alt="" style="height: 200px;width: 100%;" class="img-fluid">
              </div>
              <h2 class="title"><a href="#">Un circuit de Quad </a></h2>
              <p>
                Un circuit de Quad étudié avec des étapes riches en découverte et enchantement, un guide professionnel, une très bonne ambiance et plusieurs surprises sont les secrets dune parfaite balade.
              </p>
            </div>
          </div>

           <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="trekkings-col">
              <div class="img">
                <img src="img/circuit5.jpg" alt="" style="height: 200px;width: 100%;" class="img-fluid">
              </div>
              <h2 class="title"><a href="#">Nos Excursion</a></h2>
              <p>
                En vous donnes le meilleur service des Excursions et Circuits au Maroc à un prix le plus bas dans le marché des professionels de domaine, voyager avec nous ce n’est pas seulement visiter et profiter un endroit mais c’est plus que ça.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="trekkings-col">
              <div class="img">
                <img src="img/circuit4.jpg" alt="" style="height: 200px;width: 100%;" class="img-fluid">
              </div>
              <h2 class="title"><a href="#">Nos Circuits</a></h2>
              <p>
                Envie dun circuit au Maroc ? Consultez notre sélection et faites appel à un de nos experts locaux pour personnaliser le voyage selon vos attentes !
              </p>
            </div>
          </div>

         



        </div>

      </div>
    </section>




    <section id="portfolio"   >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">{{ __('translate.Nos Galerie')}}</h3>
        </header>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/app1.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Titre 1</a></h4>
                <p>Sous titre 1</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/web3.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/web3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Titre 2</a></h4>
                <p>Sous titre 2</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/app2.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/app2.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Titre 3</a></h4>
                <p>Sous titre 3</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/card2.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Titre 4</a></h4>
                <p>Sous titre 4</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/web2.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/web2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Titre 5</a></h4>
                <p>Sous titre 5</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/app3.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Titre 6</a></h4>
                <p>Sous titre 6</p>
              </div>
            </div>
          </div>

       

        </div>

      </div>
    </section><!-- #portfolio -->

   


    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>{{ __('translate.Contactez nous')}}</h3>
          <p>{{ __('translate.Nous mettons à votre disposition plusieurs moyens pour répondre à vos questions sans que vous déplacer')}}</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>Hay elmassira N° 192 Ouarzazate </address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>{{ __('translate.Téléphone')}}</h3>
              <p><a href="tel:+155895548855">+33 6 64 13 63 96</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">Email@example.com</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">{{ __('translate.Envoyer le Message')}}</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->
  </main>
@endsection