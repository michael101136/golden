<?php
namespace App\Helpers;
use App\Language;
use App\Tour;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class publicTours
{
	public static function tours($abbr,$estadoPublicado)
	{
		
         $toursPublic = DB::table('languages')
			        ->select('tours.id', DB::raw('count(*) as dias'),'tours.name','tours.description_short','tours.img','tours.price','tours.slug','categories.name as categoriesName','itineraries.department')
			        ->join('categories', 'languages.id', '=', 'categories.language_id')
			        ->join('categories_has_tours as cat_t', 'cat_t.categorie_id', '=', 'categories.id')
			        ->join('tours', 'cat_t.tour_id', '=', 'tours.id')
			        ->leftJoin('itineraries', 'itineraries.tour_id', '=', 'tours.id')
			        ->where("tours.principal","=",$estadoPublicado)
			        ->where("languages.abbr","=",$abbr)
			        ->groupBy('tours.name')
			        ->paginate(6);

		return $toursPublic;

	}
	public static function toursIndex($abbr,$estadoPublicado)
	{
		
         $toursPublic = DB::table('languages')
			           ->select('tours.id', DB::raw('count(*) as dias'),'tours.name','tours.img','tours.slug','categories.name as categoriesName')
			           ->join('categories', 'languages.id', '=', 'categories.language_id')
			           ->join('categories_has_tours as cat_t', 'cat_t.categorie_id', '=', 'categories.id')
			           ->join('tours', 'cat_t.tour_id', '=', 'tours.id')
			           ->where("tours.principal","=",$estadoPublicado)
			           ->where("languages.abbr","=",$abbr)
			           ->groupBy('tours.name')
			           ->paginate(6);

		return $toursPublic;

	}
	public static function toursRelacionados($abbr,$catagoriaId)
	{
		
         $toursPublic = DB::table('languages')
			        ->select('tours.id', DB::raw('count(*) as dias'),'tours.name','tours.tipo_tour','tours.description_short','tours.img','tours.price','tours.slug','categories.name as categoriesName','itineraries.department')
			        ->join('categories', 'languages.id', '=', 'categories.language_id')
			        ->join('categories_has_tours as cat_t', 'cat_t.categorie_id', '=', 'categories.id')
			        ->join('tours', 'cat_t.tour_id', '=', 'tours.id')
			        ->leftJoin('itineraries', 'itineraries.tour_id', '=', 'tours.id')
			        ->where("categories.id","=",$catagoriaId)
			        ->where("languages.abbr","=",$abbr)
			        ->groupBy('tours.name')
			        ->paginate(5);

		return $toursPublic;

	}

		public static function todoTours($abbr)
		{
		
         $toursPublic = DB::table('languages')
			        ->select('tours.id', DB::raw('count(*) as dias'),'tours.name','tours.tipo_tour','tours.description_short','tours.img','tours.price','tours.slug','categories.name as categoriesName','itineraries.department')
			        ->join('categories', 'languages.id', '=', 'categories.language_id')
			        ->join('categories_has_tours as cat_t', 'cat_t.categorie_id', '=', 'categories.id')
			        ->join('tours', 'cat_t.tour_id', '=', 'tours.id')
			        ->leftJoin('itineraries', 'itineraries.tour_id', '=', 'tours.id')
			        ->where("languages.abbr","=",$abbr)
			        ->groupBy('tours.name')
			        ->paginate(12);

				return $toursPublic;

		}

		public static function searchTours($abbr,$search)
		{
		
         $toursPublic = DB::table('languages')
			        ->select('tours.id', DB::raw('count(*) as dias'),'tours.name','tours.tipo_tour','tours.description_short','tours.img','tours.price','tours.slug','categories.name as categoriesName','itineraries.department')
			        ->join('categories', 'languages.id', '=', 'categories.language_id')
			        ->join('categories_has_tours as cat_t', 'cat_t.categorie_id', '=', 'categories.id')
			        ->join('tours', 'cat_t.tour_id', '=', 'tours.id')
			        ->leftJoin('itineraries', 'itineraries.tour_id', '=', 'tours.id')
			        ->where("languages.abbr","=",$abbr)
			        ->where("categories.name","=",$search)
			        ->groupBy('tours.name')
			        ->paginate(12);    
				return $toursPublic;

		}
		public static function searchSeries($abbr)
		{
		$toursPublic = DB::table('languages')
			        ->select('tours.id', DB::raw('count(*) as dias'),'tours.tipo_tour','tours.name','tours.description_short','tours.img','tours.price','tours.slug','categories.name as categoriesName','itineraries.department')
			        ->join('categories', 'languages.id', '=', 'categories.language_id')
			        ->join('categories_has_tours as cat_t', 'cat_t.categorie_id', '=', 'categories.id')
			        ->join('tours', 'cat_t.tour_id', '=', 'tours.id')
			        ->leftJoin('itineraries', 'itineraries.tour_id', '=', 'tours.id')
			        ->where("languages.abbr","=",$abbr)
			        ->where ('tours.tipo_tour','serie')
			        ->groupBy('tours.name')
			        ->paginate(12);
				return $toursPublic;    
		}


}