@extends('assets.admin.layout.from')
@section('style')

<link rel="stylesheet" href="{{ URL::asset('public/assets/dist/css/bootstrap3-wysihtml5.css')}}">
<link rel="stylesheet" href="{{ URL::asset('public/assets/dist/css/dropzone/dropzone.css')}}">

@endsection
@section('contenido')
<section class="content-header">
      <h1>
        
      </h1>
      
</section>

    <section class="content">

<div class="row">
        <div class="col-md-12">
         
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Tour horas</a></li>
              <li><a href="#tab_2" data-toggle="tab">Tour Días</a></li>
              
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                        
                    <div class="box">
                        <div class="box-header with-border">
                          <h3 class="box-title">Listado </h3>

                          <div class="box-tools pull-right">

                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                    title="Collapse">
                              <i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                              <i class="fa fa-times"></i></button>
                          </div>
                        </div>
                        <div class="box-body">
                             <a href="{{ URL::route('tours.create')}}" type="button" class="btn bg-olive margin">Nuevo</a>
                             <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                      <th>Nombre</th>
                                      <th>Imagen</th>
                                      <th>Descripcion</th>
                                      <th>Status</th>
                                      <th>Precio</th>
                                      <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach($DataUno as $itemp)   
                                        <tr>
                                              <td> {{ $itemp->name}} </td>
                                              <td> <img style="height:60px;" src='{{$itemp->img}}'></td>
                                              <td>{{ $itemp->description_short}}</td>
                                              <td>{{ $itemp->status}}</td>
                                              <td>{{ $itemp->price}}</td>
                                              <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success">Acción</button>
                                                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                                      <span class="caret"></span>
                                                      <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                      <li style="text-align: center;">

                                                          {!! Form::open(['method' => 'DELETE','route' => ['tours.destroy', $itemp->id]]) !!}
                                                               {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-ls'] )  }}
                                                          {!! Form::close() !!}

                                                      </li><br>
                                                      <li style="text-align: center;">

                                                           <button type="button" class="btn btn-success btn-ls" onclick="listarImagenes({{$itemp->id}});">
                                                              <i class="fa fa-pencil"></i>
                                                          </button>

                                                      </li>
                                                      <li style="text-align: center;">
                                                          
                                                           <a  href="{{ URL::route('Itinerario.show',$itemp->id)}}" type="button"  class="btn bg-olive margin">
                                                                ITINERARIO
                                                           </a>
                                                          
                                                      </li>

                                                    </ul>
                                                  </div>
                                                    
                                              </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                        <div class="box-footer">
                          Tours
                        </div>
                      </div>

              </div>
    
              <div class="tab-pane" id="tab_2">
                
                    <div class="box">
                        <div class="box-header with-border">
                          <h3 class="box-title">Listado </h3>

                          <div class="box-tools pull-right">

                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                    title="Collapse">
                              <i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                              <i class="fa fa-times"></i></button>
                          </div>
                        </div>
                        <div class="box-body">
                             <a href="{{ URL::route('tours.create')}}" type="button" class="btn bg-olive margin">Nuevo</a>
                             <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                      <th>Nombre</th>
                                      <th>Imagen</th>
                                      <th>Descripcion</th>
                                      <th>Status</th>
                                      <th>Precio</th>
                                      <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach($DataVarios as $itemp)   
                                        <tr>
                                              <td> {{ $itemp->name}} </td>
                                              <td> <img style="height:60px;" src='{{$itemp->img}}'></td>
                                              <td>{{ $itemp->description_short}}</td>
                                              <td>{{ $itemp->status}}</td>
                                              <td>{{ $itemp->price}}</td>
                                              <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success">Acción</button>
                                                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                                      <span class="caret"></span>
                                                      <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                      <li style="text-align: center;">
                                                          {!! Form::open(['method' => 'DELETE','route' => ['tours.destroy', $itemp->id]]) !!}
                                                               {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-ls'] )  }}
                                                          {!! Form::close() !!}
                                                      </li><br>
                                                      <li style="text-align: center;">
                                                          {{--  <a href="{{ URL::route('multimedia.show',$itemp->id)}}"> 
                                                              <i class="fa fa-pencil"></i> Modificar
                                                          </a>  --}}
                                                           <button type="button" class="btn btn-success btn-ls" onclick="listarImagenes({{$itemp->id}});">
                                                              <i class="fa fa-pencil"></i>
                                                          </button>
                                                      </li>
                                                      <li style="text-align: center;">
                                                          
                                                           <a  href="{{ URL::route('Itinerario.show',$itemp->id)}}" type="button"  class="btn bg-olive margin">
                                                                ITINERARIO
                                                           </a>

                                                      </li>
                                                    </ul>
                                                  </div>
                                                    
                                              </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                        <div class="box-footer">
                          Tours
                        </div>
                      </div>


              </div>
           
            </div>
          </div>
        </div>
        
      </div>



  
    </section>

    <div class="modal fade" id="sliderImagenes">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Slider</h4>
              </div>
              <div class="modal-body">
               <table class="table table-striped" id="tableImagenes">
                    <thead>
                      <tr>
                        <th>Imagen</th>
                        <th>Acción</th>
                      </tr>
                    </thead>
                    <tbody id="sliderTabla"> 
                    </tbody>
                </table>

                <div class="row">
                    <div class="col-md-12">   
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    SUBIR IMAGENES
                                </div>
                                <div class="panel-body">
                                    {!! Form::open(['route'=> ['CargarImagenTour'], 'method' => 'POST', 'files'=>'true', 'id' => 'my-dropzone' , 'class' => 'dropzone']) !!}

                                            <div class="dz-message" style="height:200px;">
                                                Drop your files here
                                            </div>
                                            <input type="hidden" name="idTour" id="idTour">
                                            <div class="dropzone-previews"></div>
                                            <button type="submit" class="btn btn-success" id="submit">Save</button>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                    </div>

                    <div class="box-body">
          
          <div class="col-md-11">
                <div class="box box-info">
                    <div class="box-header with-border">
                      <h3 class="box-title">Crear</h3>
                    </div>
                   {!! Form::open(['route' => ['tours.store'] , 'method' => 'POST', 'class' => 'form-horizontal','id' => 'formTour']) !!}

                        <div class="box-body">
                            
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>

                            <div class="col-sm-10">
                               {!!Form::text('name',null,['class'=>'form-control','required', 'id'=>'nombreTours'])!!}
                               <p style="color:red;">{{ $errors->first('name') }}</p>
                            </div>
                          </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">D Corta</label>

                            <div class="col-sm-10">
                               {!!Form::text('description_corta',null,['class'=>'form-control','required','id'=>'description_cortaTours'])!!}
                               <p style="color:red;">{{ $errors->first('name') }}</p>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">D completa</label>

                            <div class="col-sm-10">
                               {!!Form::text('description_completa',null,['class'=>'form-control','required','id'=>'description_completaTours'])!!}
                               <p style="color:red;">{{ $errors->first('name') }}</p>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Precio</label>

                            <div class="col-sm-2">
                               {!!Form::text('precio',null,['class'=>'form-control','required','id'=>'precioTours'])!!}
                               <p style="color:red;">{{ $errors->first('name') }}</p>
                            </div>
                              <div class="col-sm-5">
                              
                                    <select id="dataMultimedia" name="dataMultimedia" class='form-control'> 
                                        @foreach($dataMultimedia as $item)
                                              <option value="{{$item->id}}"> {{ $item->name}}</option>
                                        @endforeach
                                    </select>
                               <p style="color:red;">{{ $errors->first('name') }}</p>
                            </div>
                              <div class="col-sm-3">
                                
                                    <select id="dataCategoria" name="dataCategoria" class='form-control'> 
                                        @foreach($dataCategoria as $item)
                                              <option value="{{$item->id}}"> {{ $item->name}}</option>
                                        @endforeach
                                    </select>
                            </div>
                          </div>
                          <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Organización</label>

                                <div class="col-sm-12">
                                  
                                   <div class="box-body pad">
                                      <form>
                                            <textarea id="editor1" name="editor1" rows="10" cols="80">

                                            </textarea>
                                      </form>
                                    </div>
                                </div>
                                <input type="hidden" name="textOrganizacion" id="textOrganizacion">
                          </div>
                          <input type="hidden" name="idTourUpdate" id="idTourUpdate">
                          <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Estado</label>

                                <div class="col-sm-5">
                                  {!!Form::select('status', ['A' => 'habilitado', 'D' => 'deshabilitado'], 'A',['class'=>'form-control','id' => 'status'])!!}
                                </div>
                          </div>


                        </div>
                        <div class="box-footer">
                          <button type="submit"  name="btnCreartour" id="btnUpdatetour" class="btn btn-info pull-right">Update</button>
                        </div>
                  {!! Form::close() !!}
                 </div>
            
                    
                </div>
            
      
        </div>

                </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Guardar</button>
              </div>
            </div>
         
          </div>

        
    </div>


@endsection



@section('script')
{!!Html::script('public/assets/dist/js/ckeditor/ckeditor.js')!!}
{!!Html::script('public/assets/dist/css/dropzone/dropzone.js')!!}
<script>
     $(function () {
    
    CKEDITOR.replace('editor1')
        $('.textarea').wysihtml5()
      })

     $("#btnUpdatetour").click(function (e) 
     {
            e.preventDefault();
            var value = CKEDITOR.instances['editor1'].getData(); 
            $("#textOrganizacion").val(value);
            var data = $('#formTour').serialize();
             $.ajax({
                         url:'{{ route('updateTours') }}',
                             type: 'POST',
                             data:data,
                         success: function(data) 
                         {
                              $("#idTour").val(data.id);
                         
                               helperNotificacion();
                               $('#sliderImagenes').modal('hide')
                         }
                    });
             });

function helperNotificacion()
{

       toastr.success("SE ACTUALIZO EL TOURS");
       toastr.options = 
       {
                    "closeButton": false,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": false,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration ": "300",
                    "hideDuration": "500",
                    "timeOut": "1000",
        }   


}
   

  function  listarImagenes(id)
                {
                 
              $('#sliderImagenes').modal('show'); 
                    
                    var htmlTours;
                    var idTour;
                     $( "#sliderTabla" ).html('');
                 $.ajax({
                           url:'{{ route('listarImagenesToursUpdate') }}/'+id,
                               type: 'GET',
                           success: function(data) 
                           {

                             
                             $.each(data.data,function(index,element)
                                { 
                                       htmlTours=htmlTours + "<tr>"+ 
                                                                 "<td>  <img  style='height: 50px;' src='/"+element.img+"'> </td>"+
                                                                 "<td> <a  onclick='eliminarImagem("+element.id+",this)' class='btn btn-danger btn-ls'> <i class='fa fa-trash'></i></a>"+  
                                                             "</td>"+
                                                             "<tr>";
                                      idTour =element.id;
                                      $("#nombreTours").val(element.name);
                                      $("#description_cortaTours").val(element.description_short);
                                      $("#description_completaTours").val(element.description_complete);
                                      $("#precioTours").val(element.price);
                                      CKEDITOR.instances['editor1'].setData(element.organization);

                                      $("#dataMultimedia option[value="+ element.multimedia_id +"]").attr("selected",true);
                                      $("#status option[value="+ element.status +"]").attr("selected",true);


                                });

                               $("#idTourUpdate").val(idTour);
                               $("#idTour").val(idTour);
                               $("#sliderTabla").append(htmlTours);


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

                    var id=$("#idTour").val();
                    listarImagenes(id);

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