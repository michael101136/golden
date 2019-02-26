<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\languageUsers;
use App\Categorie;
use App\Tour;
use App\Helpers\publicTours;
use DB;
use App\Itinerarie;
use App\testimonial;
// use App\Helpers\languageUsers;

class PublicController extends Controller
{
    
    public function index($idioma)
    {

       
        $toursRecomendadosUnDia=publicTours::toursRecomendadosUnDia($idioma,'1');

        $toursPrincipal=publicTours::toursPrincipal($idioma,'1');



        return view('assets.pagina.es.inicio',['tourPrincipal' => $toursPrincipal,'toursRecomendadosUnDia' => $toursRecomendadosUnDia]);

    }

    public function tours($idioma,$categoria,$precio='')
    {
        
         if($categoria=='cusco' ||  $categoria=='puno' ||  $categoria=='arequipa' ||  $categoria=='lima' ||  $categoria=='selva' ||  $categoria=='nazca'||  $categoria=='ica' ||  $categoria=='bolivia' )
         {

             $categorias = DB::table('languages')
                ->select('categories.name','categories.description','languages.abbr','categories.id')
                ->join('categories', 'languages.id', '=', 'categories.language_id')
                ->where('languages.abbr','=',$idioma)
                ->get();

            $todoTours=publicTours::searchToursPais($idioma,$categoria);
          

            return view("assets.pagina.".$idioma.".tours",['categoria' =>$categorias,'tours' => $todoTours,'ItempCategoria' => $categoria]);


         }else
         {
            
             // $ItempCategoria = DB::table('categories')
             //    ->select('categories.name','categories.description')
             //    ->where('categories.name','=',$categoria)
             //    ->get()[0];

            $categorias = DB::table('languages')
                ->select('categories.name','categories.description','languages.abbr','categories.id')
                ->join('categories', 'languages.id', '=', 'categories.language_id')
                ->where('languages.abbr','=',$idioma)
                ->get();
       
            $todoTours=publicTours::searchTours($idioma,$categoria);

         }
        

       return view("assets.pagina.".$idioma.".tours",['categoria' =>$categorias,'tours' => $todoTours,'ItempCategoria' => $categoria]);

    }

    public function toursPrecioCiudad($idioma='',$precio='',$departamento='')
    {
        
             $categoria='Busqueda por precio';
             $categorias = DB::table('languages')
                ->select('categories.name','categories.description','languages.abbr','categories.id')
                ->join('categories', 'languages.id', '=', 'categories.language_id')
                ->where('languages.abbr','=',$idioma)
                ->get();

            $todoTours=publicTours::searchToursPrecio($idioma,$precio,$departamento);
          

            return view("assets.pagina.".$idioma.".tours",['categoria' =>$categorias,'tours' => $todoTours,'ItempCategoria' => $categoria]);


    }

    public function tour($idioma,$tourSlug){

    	

        $tour = Tour::where('slug', '=',$tourSlug)->get()[0];

    	$multimediaTour = DB::table('tours')
                    ->select('images.path')
                    ->join('multimedia', 'tours.multimedia_id', '=', 'multimedia.id')
                    ->leftjoin('images', 'multimedia.id', '=', 'images.multimedia_id')
                    ->where("tours.id","=",$tour->id)
                    ->get();

        $itinerarioTour = DB::table('tours')
                    ->select('itineraries.name','itineraries.description','itineraries.day','itineraries.photo')
                    ->join('itineraries', 'tours.id', '=', 'itineraries.tour_id')
                    ->where("tours.id","=",$tour->id)
                    ->get();


       return view("assets.pagina.".$idioma.".tour",['tour' => $tour,'multimediaTour' => $multimediaTour,'itinerarioTour' => $itinerarioTour]); 



    }
     public function tourDetalle($abbr='es',$slug)
   {
     
    
     $tour = Tour::where('slug', '=', $slug)->get()[0];
     $tourCategoria = DB::table('tours')
                    ->select('categories.id')
                    ->join('categories_has_tours', 'tours.id', '=', 'categories_has_tours.tour_id')
                    ->join('categories', 'categories.id', '=', 'categories_has_tours.categorie_id')
                    ->where("tours.id","=",$tour->id)
                    ->get()[0];//traaes el ide relacionado con tours
    
     return   $tourCategoria;
                   
    //  $multimediaTour = DB::table('tours')
    //                 ->select('images.path')
    //                 ->join('multimedia', 'tours.multimedia_id', '=', 'multimedia.id')
    //                 ->leftjoin('images', 'multimedia.id', '=', 'images.multimedia_id')
    //                 ->where("tours.id","=",$tour->id)
    //                 ->get();
    //  $itinerarioTour = DB::table('tours')
    //                 ->select('itineraries.name','itineraries.description','itineraries.day')
    //                 ->join('itineraries', 'tours.id', '=', 'itineraries.tour_id')
    //                 ->where("tours.id","=",$tour->id)
    //                 ->get();
    // $seriesTour     = DB::table('series')
    //                 ->select('series.cant_person','series.date_start','series.date_end','series.status')
    //                 /*->join('series', 'tours.id', '=', 'series.tour_id')*/
    //                 ->where("series.tour_id","=",$tour->id)
    //                 ->get(); 
    // $pricesTour     = DB::table('prices')
    //                 ->select('prices.range_first','prices.range_end','prices.monto')
    //                 /*->join('prices', 'tours.id', '=', 'prices.tour_id')*/
    //                 ->where("prices.tour_id","=",$tour->id)
    //                 ->get();                               
   
    // $toursPrincipal=publicTours::tours($abbr,'1');//Retorne de  tours  en español y principal(1 y 0)
    // $toursRelacionados=publicTours::toursRelacionados($abbr,$tourCategoria->id);//Retorne de  tours  relacionados
    // $lenguajeFaltantes=languageUsers::lenguajeFaltantes($abbr);
    //  return view('public.'.$abbr.'.tour',['tour' => $tour,'multimediaTour' => $multimediaTour,'toursPrincipal' => $toursPrincipal,'itinerarioTour' => $itinerarioTour,'toursRelacionados' => $toursRelacionados,'seriesTour'=>$seriesTour,'pricesTour'=>$pricesTour,'abbr'=>$abbr,'lenguajeFaltantes' => $lenguajeFaltantes]);
   }
    public function about($idioma)
    {

    	 return view("assets.pagina.".$idioma.".about_us");
    }

    public function contact($idioma)
    {

    	return view("assets.pagina.".$idioma.".contact");

    }

    public function testimony($idioma)
    {
    	return view("assets.pagina.".$idioma.".testimony");
    }

     public function toursOpcionPrecio()
   {
        if(request()->ajax())
            {
               
                $max=$_POST['max'];
                $min=$_POST['min'];
                $data = DB::table('categories')
                                  ->select('categories.name as categoriaName','tours.name','tours.slug','tours.description_short','tours.price','tours.img')
                                  ->join('languages', 'languages.id', '=', 'categories.language_id')
                                  ->join('categories_has_tours as cat_t', 'cat_t.categorie_id', '=', 'categories.id')
                                  ->join('tours', 'cat_t.tour_id', '=', 'tours.id')
                                  ->whereBetween('tours.price',[$min,$max])->get();
                              
                                 
                
                        
            }
                
            
                return response(['data' => $data]);
                
                
    }

    
    
    public function toursOpcion()
    {
        
      if(request()->ajax())
            {
                
                $abbr=$_POST['abbr'];
                if($_POST['cantidaPeticion']<1)
                {
                    $categories = DB::table('categories')
                                  ->select('categories.name as categoriaName','tours.id','tours.name','tours.slug','tours.description_short','tours.price','tours.img')
                                  ->join('languages', 'languages.id', '=', 'categories.language_id')
                                  ->join('categories_has_tours as cat_t', 'cat_t.categorie_id', '=', 'categories.id')
                                  ->join('tours', 'cat_t.tour_id', '=', 'tours.id')
                                  ->where('languages.abbr',$abbr)->get();
                    return response(['data' => $categories,'can' => $_POST['cantidaPeticion']]);
                }
                $categorie=$_POST['catagoria'];
            
                
                $categories = DB::table('categories')
                                  ->select('categories.name as categoriaName','tours.name','tours.id','tours.slug','tours.description_short','tours.price','tours.img')
                                  ->join('languages', 'languages.id', '=', 'categories.language_id')
                                  ->join('categories_has_tours as cat_t', 'cat_t.categorie_id', '=', 'categories.id')
                                  ->join('tours', 'cat_t.tour_id', '=', 'tours.id')
                                  ->whereIn('categories.id', $categorie)
                                  ->where('languages.abbr',$abbr)->get();
                                  return response(['data' => $categories,'can' => $_POST['cantidaPeticion']]);
                
                
            }
    
    }
    
   

}
