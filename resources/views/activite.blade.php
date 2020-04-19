
@extends('template')

@section('contenu')
<main class="mt-5">
<section id="services">
      <div class="container">

        <header class="section-header">
         <h3>{{ __('translate.Nos Excurssion')}}</h3>
         <p>En vous donnes le meilleur service des Excursions et Circuits au Maroc à un prix le plus bas dans le marché des professionels de domaine, voyager avec nous ce n’est pas seulement visiter et profiter un endroit mais c’est plus que ça</p>
        </header>

        <div class="row services-cols">

          
        @foreach ($listActivities as $listActivitie)

          <div class="col-md-4 wow">
            <div class="services-col activite-box">
              <div class="img">
                <img src="http://admin.sunrise-pro.com/public/images/{{$listActivitie->medias[0]->url}}" alt="" style="height: 200px;width: 100%;" class="img-fluid">
              </div>
              <h2 class="title"><a href="/public/{{app()->getLocale()}}/details/{{$listActivitie->id}}">{{$listActivitie->activite_details[0]->title}} </a></h2>
              <p>
                {{$listActivitie->activite_details[0]->description}}
              </p>
            </div>
          </div>
          @endforeach
        


        </div>

      </div>
    </section>
</main>
@endsection