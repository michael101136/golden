@extends('assets.admin.layout.from')
@section('style')

<link rel="stylesheet" href="{{ URL::asset('public/assets/dist/css/dropzone/dropzone.css')}}">

@endsection

@section('contenido')
	    <section class="content-header">
      <h1>
        
      </h1>
      
    </section>

    <section class="content">
        
      <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">
                 <button type="button" class="btn bg-navy btn-flat margin" onclick="crearFormularioItinerario();">
                    <i class="fa fa-fw fa-plus-square"></i>
                </button>
            </h3>

            <div class="box-tools pull-right">

                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
            </div>

        </div>
        
        <div class="box-body">
          
          <div class="col-md-12">
                         
                  <table class="table" id="tableImagenes">
                    <thead>
                      <tr>
                        <th>DÍA</th>
                        <th>NAME</th>
                        <th>IMAGEN</th>
                        <th>DESCRIPCIÓN</th>
                        <th>LUGAR</th>
                        <th>COORDENADAS</th>
                        <th>ACCIÓN</th>
                      </tr>
                    </thead>
                    <tbody id="tablaItinerarioTour">
                        
                    </tbody>
                  </table>
            </div>
            
             <div class="col-md-2">
                
             </div>

        </div>
        <div class="box-footer">
          Itinerario
        </div>
      </div>

    </section>



  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Crear Itinerario</h4>
        </div>
        <div class="modal-body">
                
                <div class="box box-info">
                                          

                    <div class="col-md-12">   
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    SUBIR IMAGENES
                                </div>
                                <div class="panel-body">
                                    {!! Form::open(['route'=> ['CargarImagenItinerario'], 'method' => 'POST', 'files'=>'true', 'id' => 'my-dropzone' , 'class' => 'dropzone']) !!}

                                            <div class="dz-message" style="height:100px;">
                                                Drop your files here
                                            </div>
                                             <input type="hidden" class="form-control" id="idToursItinerario" name="idToursItinerario" value="{{ $id}}">
                                            <div class="dropzone-previews"></div>
                                            <button type="submit" class="btn btn-success" id="submit">Save</button>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                    </div>

                      <div class="box-body">
                       
                         {!! Form::open(["route" => ["insertarItinerario"] , "method" => "POST","id"=>"FormCrearItinerarie", "class" => "form-horizontal" ]) !!}

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                         <input type="text" class="form-control" id="name" name="name" >
                                          <input type="hidden" class="form-control" id="idTours" name="idTours" value="{{ $id}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Descripción</label>
                                <div class="col-sm-10">
                                        
                                        <textarea id="descripcion" name="descripcion" class="form-control" rows="10" cols="80">

                                        </textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Departamento</label>
                                <div class="col-sm-2">
                                         <input type="text" class="form-control" id="departamento" name="departamento" >
                                </div>
                                <label for="inputPassword3" class="col-sm-2 control-label">Provincia</label>
                                <div class="col-sm-2">
                                         <input type="text" class="form-control" id="provincia" name="provincia" >
                                </div>
                                <label for="inputPassword3" class="col-sm-2 control-label">Distrito</label>
                                <div class="col-sm-2">
                                         <input type="text" class="form-control" id="distrito" name="distrito" >
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Altitud</label>
                               <div class="col-sm-4">
                                         <input type="text" class="form-control" id="altitud" name="altitud">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Longitud</label>
                               <div class="col-sm-4">
                                         <input type="text" class="form-control" id="longitud" name="longitud">
                                </div>
                            </div>

                      </div>
                   
                      <div class="box-footer">
                        <button type="submit" class="btn btn-info pull-right" name="btnInsertarItinerario">Guardar</button>
                      </div>
                {!! Form::close() !!}
        </div>
       
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

@endsection

@section('script')

{!!Html::script('public/assets/dist/css/dropzone/dropzone.js')!!}

<script>
   
    var suma=1;
      
             function crearFormularioItinerario()
             {
                 $('#myModal').modal('show'); 
             }
    
    listarImagenes();
    function  listarImagenes()
                {
                 
                    var id={{ $id}};
                    var htmlTours;

                     $( "#tablaItinerarioTour" ).html('');

                 $.ajax({
                           url:'{{ route('listarItinerarios') }}/'+id,
                               type: 'GET',
                           success: function(data) 
                           {

                         
                             $.each(data.itineraio,function(index,element)
                                { 
                                
                                htmlTours=htmlTours + "<tr>"+ 
                                                             "<td> "+element.day+" </td>"+
                                                               "<td> "+element.name+" </td>"+
                                                               "<td> <img  style='height: 50px;' src='/"+element.photo+"'></td>"+
                                                               "<td> "+element.description+"  </td>"+
                                                               "<td> "+element.department+" : "+element.province+" :   "+element.district+"  </td>"+
                                                               "<td> "+element.altitud+" : "+element.latitud+"  </td>"+
                                                             "<td> <a  onclick='eliminarItinerario("+element.id+",this)' class='btn btn-danger btn-ls'> <i class='fa fa-trash'></i></a>"+  
                                                         "</td>"+
                                                         "<tr>";

                                });
                               $("#tablaItinerarioTour").append(htmlTours);

                           }
                        });
                      
                }
     function eliminarItinerario(id,trEliminar) 
      {

         $.ajax({
                     url:'{{ route('delete_itinerario') }}/'+id,
                     type: 'GET',
                     success: function(data) 
                     {
                        var i = trEliminar.parentNode.parentNode.rowIndex;
                        document.getElementById("tableImagenes").deleteRow(i);
                         
                     }
                });  

      }        
    
    
      Dropzone.options.myDropzone = {
            autoProcessQueue: false,
            uploadMultiple: true,
            maxFilezise: 10,
            maxFiles: 1,
            
            init: function() {
                var submitBtn = document.querySelector("#submit");
                myDropzone = this;
                
                submitBtn.addEventListener("click", function(e){
                    e.preventDefault();
                    e.stopPropagation();
                    myDropzone.processQueue();
                });
                this.on("addedfile", function(file) {
                    
                });
                
                this.on("complete", function(file) {
                    myDropzone.removeFile(file);
                });
 
                this.on("success", 
                    myDropzone.processQueue.bind(myDropzone)
                );
            }
        };


    
</script>


@endsection