<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activite;
use App\Lang;
use App\Ville;
use App\Activite_detail;
use App\Activity_day;
use App\Media;
class ajaxController extends Controller
{
   
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    	$activities = Activite::all();
    	$activitiesMenu = Activite::distinct()->get(['ville_id','types_id']);

    	$langues = Lang::all();
    	$villes = Ville::all();
    		$tables=['colorHeader' => 'notblack','activities'=>$activities,'activitiesMenu' => $activitiesMenu,'langues'=>$langues,'villes'=>$villes];
        return view('index',$tables);
    }

    public function activites(Request $request,$lang,$ville_id,$type_id)
    {	

    	$listActivities = Activite::where('ville_id',$ville_id)->where('types_id',$type_id)->get();

    	$activities = Activite::all();

    	$activitiesMenu = Activite::distinct()->get(['ville_id','types_id']);
  
    	$langues = Lang::all();
    	$villes = Ville::all();
    	$tables=['colorHeader' => 'black','activities' => $activities,'langues'=>$langues,'villes'=>$villes,'activitiesMenu' => $activitiesMenu,'listActivities' =>$listActivities];
        return view('activite',$tables);
    }

    public function details(Request $request,$lang,$id)
    {	
        $lang = Lang::where('code',$lang)->get();
    	$activities = Activite::where('id',$id)->get();
    	
    	$activities_details = Activite_detail::where('activite_id',$id)->where('lang_id',$lang[0]->id)->first();
        
    	$activities_days = Activity_day::where('activite_id',$id)->where('lang_id',$lang[0]->id)->get();

    	$activitiesMenu = Activite::distinct()->get(['ville_id','types_id']);

    	$langues = Lang::all();
    	$villes = Ville::all();
    	$medias = Media::where('activite_id',$id);

    	$tables=['colorHeader' => 'black','activities' => $activities,'activities_details'=>$activities_details,
        'activities_days'=>$activities_days,'langues'=>$langues,'villes'=>$villes,'activitiesMenu' => $activitiesMenu];
        return view('details',$tables);
    }

    
   
}
