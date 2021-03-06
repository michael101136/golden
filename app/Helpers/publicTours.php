<?php
namespace App\Helpers;
use App\Language;
use App\Tour;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class publicTours
{
	public static function tours($idioma,$estadoPublicado)
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

	public static function toursPrincipal($idioma,$estadoPublicado)
	{
		

         $toursPublic = DB::table('languages')
			        ->select('tours.id','tours.name','tours.description_short','tours.img','tours.price','tours.slug','categories.description as categoriesName')
			        ->join('categories', 'languages.id', '=', 'categories.language_id')
			        ->join('categories_has_tours as cat_t', 'cat_t.categorie_id', '=', 'categories.id')
			        ->join('tours', 'cat_t.tour_id', '=', 'tours.id')
			        ->where("tours.principal","=",$estadoPublicado)
			        ->where("languages.abbr","=",$idioma)
			        ->paginate(6);

		return $toursPublic;

	}
	public static function toursRecomendadosUnDia($idioma,$estadoPublicado)
	{
		

         $toursPublic = DB::table('languages')
			        ->select('tours.id','tours.name','tours.description_short','tours.img','tours.price','tours.slug','categories.description as categoriesName')
			        ->join('categories', 'languages.id', '=', 'categories.language_id')
			        ->join('categories_has_tours as cat_t', 'cat_t.categorie_id', '=', 'categories.id')
			        ->join('tours', 'cat_t.tour_id', '=', 'tours.id')
			        ->where("languages.abbr","=",$idioma)
			        ->where("tours.tipo_tour","=",'uno_dia')
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
			        ->groupBy('tours.name','tours.id','tours.tipo_tour','tours.description_short','tours.img','tours.price','tours.slug','categories.name','itineraries.department')
			        ->paginate(4);

		return $toursPublic;

	}

		public static function todoTours($abbr)
		{
		
         

         $toursPublic = DB::table('languages')
			        ->select('tours.id','tours.name','tours.tipo_tour','tours.description_short','tours.img','tours.price','tours.slug','categories.name as categoriesName')
			        ->join('categories', 'languages.id', '=', 'categories.language_id')
			        ->join('categories_has_tours as cat_t', 'cat_t.categorie_id', '=', 'categories.id')
			        ->join('tours', 'cat_t.tour_id', '=', 'tours.id')
			        ->where("languages.abbr","=",$abbr)

			        ->paginate(12);

				return $toursPublic;

		}

		public static function searchTours($abbr,$search)
		{
		
         $toursPublic = DB::table('languages')
			        ->select('tours.id','tours.name','tours.tipo_tour','tours.description_short','tours.img','tours.price','tours.slug','categories.name as categoriesName')
			        ->join('categories', 'languages.id', '=', 'categories.language_id')
			        ->join('categories_has_tours as cat_t', 'cat_t.categorie_id', '=', 'categories.id')
			        ->join('tours', 'cat_t.tour_id', '=', 'tours.id')
			        ->where("languages.abbr","=",$abbr)
			        ->where("categories.name","=",$search)
			        ->paginate(20);    

				return $toursPublic;

		}

		public static function searchToursPais($abbr,$search)
		{
		
         $toursPublic = DB::table('languages')
			        ->select('tours.id','tours.name','tours.tipo_tour','tours.description_short','tours.img','tours.price','tours.slug','categories.name as categoriesName')
			        ->join('categories', 'languages.id', '=', 'categories.language_id')
			        ->join('categories_has_tours as cat_t', 'cat_t.categorie_id', '=', 'categories.id')
			        ->join('tours', 'cat_t.tour_id', '=', 'tours.id')
			        ->where("languages.abbr","=",$abbr)
			        ->where("tours.lugar","=",$search)
			        ->paginate(12);    

				return $toursPublic;

		}
		public static function searchToursPrecio($idioma,$precio,$departamento)
		{
		
         $toursPublic = DB::table('languages')
			        ->select('tours.id','tours.name','tours.tipo_tour','tours.description_short','tours.img','tours.price','tours.slug','categories.name as categoriesName')
			        ->join('categories', 'languages.id', '=', 'categories.language_id')
			        ->join('categories_has_tours as cat_t', 'cat_t.categorie_id', '=', 'categories.id')
			        ->join('tours', 'cat_t.tour_id', '=', 'tours.id')
			        ->where("languages.abbr","=",$idioma)
			        ->where("tours.price","<=",$precio)
			        ->where("tours.lugar","=",$departamento)
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