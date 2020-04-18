
@extends('template')

@section('contenu')
<style type="text/css">
  iframe{
    position:relative;
    top:-46px;
    border:none;
    width: 100%
  }      
</style>
<main class="mt-5">
  <section id="services">
      <div class="container">

        <header class="section-header">
          <h3>{{$activities_details->title}}</h3>
        </header>

        <div class="row ">
          <div class="col">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
         
              </ol>

              <div class="carousel-inner">
               
                @foreach ($activities[0]->medias as $img)
                <div class="carousel-item @if($loop->first) active @endif " style="height: 550px">
                  <img class="d-block w-100 h-100" src="http://admin.sunrise-pro.com/public/images/{{$img->url}}" alt="First slide">
                </div>
                @endforeach              
            
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
          </div>
        </div>

      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h3>Détails :</h3>
          </div>
        </div>
      </div>
    </section>

     <section >
      <div class="container" style="padding-left: 40px ">
        <div class="row">
          <div class="col-12">
            <p style="font-size: 14px;text-align: justify;">
              {{$activities_details->description}}
            </p>
          </div>
        </div>

        <div class="row align-items-center" style="border-bottom: 1px solid #ddd;height:50px;font-size: 13px; ">
          <div class="col-md-3" style="font-weight: bold;">
            DESTINATION
          </div>
          <div class="col-md-9">
            {{$activities[0]->destination}}
          </div>
        </div>

        <div class="row align-items-center" style="border-bottom: 1px solid #ddd;height:50px;font-size: 13px; ">
          <div class="col-md-3" style="font-weight: bold;">
            LIEU DE SORTIE
          </div>
          <div class="col-md-9">
            {{$activities[0]->lieu_depart}}
          </div>
        </div>

        <div class="row align-items-center" style="border-bottom: 1px solid #ddd;height:50px;font-size: 13px; ">
          <div class="col-md-3" style="font-weight: bold;">
            LIEU DE RETOUR
          </div>
          <div class="col-md-9">
            {{$activities[0]->lieu_arriver}}
          </div>
        </div>

     <!-- 
        <div class="row align-items-center" style="border-bottom: 1px solid #ddd;height:50px;font-size: 13px; ">
          <div class="col-md-3" style="font-weight: bold;">
            HEURE DE SORTIE 
          </div>
          <div class="col-md-9">
            {{$activities[0]->heur_depart}}
          </div>
        </div>
   <div class="row align-items-center" style="border-bottom: 1px solid #ddd;height:50px;font-size: 13px; ">
          <div class="col-md-3" style="font-weight: bold;">
            HEURE DE RETOUR
          </div>
          <div class="col-md-9">
            {{$activities[0]->heur_arriver}}
          </div>
        </div>-->

        <div class="row align-items-center" style="border-bottom: 1px solid #ddd;height:50px;font-size: 13px; ">
          <div class="col-md-3" style="font-weight: bold;">
            DURÉE
          </div>
          <div class="col-md-9">
            {{$activities[0]->duree}}
          </div>
        </div> 

        <div class="row align-items-center" style="font-size: 13px;;border-bottom: 1px solid #ddd;height:50px; ">
          <div class="col-md-3" style="font-weight: bold;">
            PRIX
          </div>
          <div class="col-md-9">
            {{$activities[0]->price}}
          </div>
        </div>
          <br>

          @foreach ($activities_days as $activities_day)
            <div class="row">
              <div class="col-12">
                 <p style="font-size: 14px;text-align: justify;font-weight: bold;margin-bottom: 12px">{{$activities_day->title}}</p>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <p style="font-size: 14px;text-align: justify;margin-bottom: 12px">
                  {{$activities_day->desc}}
                </p>
              </div>
            </div>
          @endforeach 
       
     

        
      
        <br>
        <div class="row">
          <div class="col-12">
            <div style="height:440px; border:2px solid #eee; display:inline-block; overflow:hidden;width: 100%">
              {!! $activities[0]->map_url !!}
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-12 text-center">
              <a href="/reservation" style="background: #efa700;color: #fff;border-radius: 5px;padding: 7px 9px;cursor: pointer;">Réserver Maintenant</a>
          </div>
        </div>

        
      </div>
    </section>
<br>
<br>

</main>
@endsection