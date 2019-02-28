<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tour;
use DB;
use App\language;
use App\Categorie;
use App\Multimedia;
use App\Helpers\languageUsers;
use App\Http\Requests\StoreTours;
use Validator, Input, Redirect; 
use Illuminate\Support\Str as Str;
class ToursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct()
    {
         $this->middleware(['auth' ,'roles:normal,admin']);
    }

    public function index()
    {
         $DataUno = DB::table('languages')
                    ->select('tours.*','languages.name as nameLenguage')
                    ->join('categories', 'languages.id', '=', 'categories.language_id')
                    ->join('categories_has_tours as cat_t', 'cat_t.categorie_id', '=', 'categories.id')
                    ->join('tours', 'cat_t.tour_id', '=', 'tours.id')
                    ->where('languages.id',languageUsers::idLanguage())
                    ->where('tours.status','A')
                    ->where('tours.tipo_tour','uno_dia')
                   ->orderBy('tours.id', 'desc')
                ->paginate(6);

        $DataVarios = DB::table('languages')
                    ->select('tours.*','languages.name as nameLenguage')
                    ->join('categories', 'languages.id', '=', 'categories.language_id')
                    ->join('categories_has_tours as cat_t', 'cat_t.categorie_id', '=', 'categories.id')
                    ->join('tours', 'cat_t.tour_id', '=', 'tours.id')
                    ->where('languages.id',languageUsers::idLanguage())
                    ->where('tours.status','A')
                    ->where('tours.tipo_tour','varios_dias')
                   ->orderBy('tours.id', 'desc')
                ->get();
       


        $dataMultimedia=Multimedia::all();
        // $dataCategoria=Categorie::all();
        $dataCategoria = DB::table('languages')
                    ->select('categories.name','categories.description','categories.id')
                    ->join('categories', 'categories.language_id', '=', 'languages.id')
                    ->where('languages.id',languageUsers::idLanguage() )
                    ->get();

        return view("assets.admin.tours.index",['DataUno' => $DataUno,'DataVarios'=>$DataVarios,'dataMultimedia' => $dataMultimedia,'dataCategoria' => $dataCategoria]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($TipoTour)
    {

       
    }

    public function createTour($TipoTour)
    {
        
        // return languageUsers::idLanguage();

        $dataMultimedia=Multimedia::all();
        // $dataCategoria=Categorie::all();

        $dataCategoria = DB::table('languages')
                    ->select('categories.description','categories.id')
                    ->join('categories', 'categories.language_id', '=', 'languages.id')
                    ->where('languages.id',languageUsers::idLanguage() )
                    ->get();

        return view("assets.admin.tours.create",['dataMultimedia' =>$dataMultimedia ,'dataCategoria' =>$dataCategoria,'tipoTour'=> $TipoTour]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTours $request)
    {
           
      

        $slug = Str::slug($request['name']);

        
        $data = Tour::where('tours.slug',$slug )->get()->count();
        
        if($data=='0')
        {

           $Tour = new Tour;
           $Tour->name = $request->name;
           $Tour->price = $request->precio;
           $Tour->description_short =$request->description_corta;
           $Tour->description_complete =$request->description_completa;
           $Tour->organization =$request->textOrganizacion;
           $Tour->status = $request->status;
           $Tour->tipo_tour = $request->tipoTour;
           $Tour->principal = $request->dataPopular;
           $Tour->lugar = $request->lugar;
           $Tour->slug =$slug;
           $Tour->multimedia_id = $request->dataMultimedia;
           $Tour->save();

           $id=DB::table('tours')->max('id');

           $inserted = DB::table('categories_has_tours')
                        ->insert([
                            'categorie_id' => $request->dataCategoria,
                            'tour_id' =>$id
                        ]); 

           return response()->json(['id'=> $id,'opcion'=> 'correcta']);


        }else
        {

            
           return response()->json(['id'=> '1','opcion'=> 'erros']);

        }
        
        
    
      


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $itemCategoria = Tour::where('id', '=',$id)->get()[0];
        Tour::destroy($id);

        $destinationPath = '/'.$itemCategoria->img;

        if(file_exists(public_path($destinationPath)))
            {

            unlink(public_path($destinationPath));

            }else{

            }

        return redirect()->route('tours.index')
                        ->with('success','Member deleted successfully');

    }

    public function cargarImagens(Request $request)
    {
            

             
             $path = public_path().'/admin/uploads/tour/';
             $files = $request->file('file');

             foreach($files as $file)
             {
                $fileName = time().'.'.$file->getClientOriginalName();
                $size = $file->getClientSize();
                $ruta = 'admin/uploads/tour/'.$fileName;
                $file->move($path, $fileName);

                Tour::find($request->idTour)->update(['img' => $ruta]);

                                                                               
             }
    }

    public function listarImagenesToursUpdate($id)
    {
           $data = Tour::where('id',$id)->get();

     
           return response()->json(['data'=> $data]);
    }

     public function updateTourCampos(Request $request)
    {
        $Tour = Tour::find($request->idTourUpdate);
        $Tour->name = $request->name;
        $Tour->price = $request->precio;
        $Tour->description_short =$request->description_corta;
        $Tour->description_complete =$request->description_completa;
        $Tour->organization =$request->textOrganizacion;
        $Tour->principal =$request->EditardataPopular;
        $Tour->lugar =$request->editarLugar;
        $Tour->status = $request->status;
        $Tour->slug =str_replace(' ', '-', $request->name);
        $Tour->multimedia_id = $request->dataMultimedia;
        $Tour->save();



        DB::table('categories_has_tours')->where('tour_id', $request->idTourUpdate)->delete();

        DB::table('categories_has_tours')
                        ->insert([
                            'categorie_id' => $request->dataCategoria,
                            'tour_id' =>$request->idTourUpdate
                        ]); 

        return "correcto";
          
    }

    public function TourUpdateCategoria(Request $request)
    {
            return $request->all();
    }

    // public function updateImagenTours(Request $request)
    // {
    //          $path = public_path().'/admin/uploads/tour/';
    //          $files = $request->file('file');
    //          foreach($files as $file)
    //          {
    //             $fileName = time().'.'.$file->getClientOriginalName();
    //             $size = $file->getClientSize();
    //             $ruta = 'admin/uploads/tour/'.$fileName;
    //             $file->move($path, $fileName);

    //             Tour::find($request->idTour)->update(['img' => "michael"]);
    //          }
    // }


}
