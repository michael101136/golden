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

      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Tours</h3>
          <div class="box-tools pull-right">

            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
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
                            <input type="hidden" name="tipoTour" value="{{$tipoTour}}" > 
                            <div class="col-sm-10">
                               {!!Form::text('name',null,['class'=>'form-control','required'])!!}
                               <p style="color:red;" id="erroName" name="erroName"></p>
                            </div>
                          </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">D Corta</label>

                            <div class="col-sm-10">
                               {!!Form::text('description_corta',null,['class'=>'form-control','required'])!!}
                                <p style="color:red;" id="errordescription_short" name="errordescription_short"></p>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">D completa</label>

                            <div class="col-sm-10">
                               {!!Form::text('description_completa',null,['class'=>'form-control','required'])!!}
                              <p style="color:red;" id="errordescription_complete" name="errordescription_complete"></p>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label" style="margin-top: 27px;">Precio</label>

                            <div class="col-sm-2" style="margin-top: 27px;">
                               {!!Form::text('precio',null,['class'=>'form-control','required'])!!}
                              <p style="color:red;" id="errorprice" name="errorprice"></p>
                            </div>
                              <div class="col-sm-3">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Multimedia</label>
                                    <select id="dataMultimedia" name="dataMultimedia" class='form-control'> 
                                        @foreach($dataMultimedia as $item)
                                          <option value="{{$item->id}}"> {{ $item->name}}</option>
                                        @endforeach
                                    </select>
                               <p style="color:red;">{{ $errors->first('name') }}</p>
                            </div>
                              <div class="col-sm-2">

                                   <label for="inputEmail3" class="col-sm-2 control-label">Categoria</label>
                                    <select id="dataCategoria" name="dataCategoria" class='form-control'> 
                                        @foreach($dataCategoria as $item)
                                          <option value="{{$item->id}}"> {{ $item->description}}</option>
                                        @endforeach
                                    </select>

                                    <p style="color:red;">{{ $errors->first('name') }}</p>

                            </div>
                           
                          </div>
                          <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Organización</label>

                                <div class="col-sm-10">
                                  
                                   <div class="box-body pad">
                                      <form>
                                            <textarea id="editor1" name="editor1" rows="10" cols="80">

                                            </textarea>
                                      </form>
                                    </div>
                                    <p style="color:red;" id="errororganization" name="errororganization"></p>
                                    
                                </div>
                                <input type="hidden" name="textOrganizacion" id="textOrganizacion">
                          </div>

                          <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label" style="margin-top: 27px">Estado</label>

                                <div class="col-sm-2" style="margin-top: 27px">
                                  {!!Form::select('status', ['A' => 'habilitado', 'D' => 'deshabilitado'], 'A',['class'=>'form-control'])!!}
                                </div>
                                 <div class="col-sm-2" >

                                        <label for="inputEmail3" class="col-sm-4 control-label">Popular</label>
                                        <select id="dataPopular" name="dataPopular" class='form-control'> 
                                           
                                              <option value="1">Popular</option>
                                              <option value="0">No popular</option>
                                           
                                        </select>

                                        <p style="color:red;">{{ $errors->first('name') }}</p>

                                </div>
                                <div class="col-sm-2">

                                        <label for="inputEmail3" class="col-sm-4 control-label">Lugar</label>
                                        <select id="lugar" name="lugar" class='form-control'> 
                                           
                                              <option value="cusco">Cusco</option>
                                              <option value="lima">Lima</option>
                                              <option value="puno">Puno</option>
                                              <option value="arequipa">Arequipa</option>
                                              <option value="selva">Selva</option>
                                              <option value="selva">Nazca</option>
                                              <option value="ica">Ica</option>
                                              <option value="bolivia">Bolivia</option>
                                        </select>

                                        <p style="color:red;">{{ $errors->first('name') }}</p>

                                </div>
                          </div>


                        </div>
                        <div class="box-footer">
                          <button type="submit"  name="btnCreartour" id="btnCreartour" class="btn btn-info pull-right">Crear</button>
                        </div>
                  {!! Form::close() !!}
                 </div>
            
                         <div class="col-md-12">
                             <div class="form-group">

                                   <div class="container" id="slider">
                                        <div class="row">
                                            <div class="panel panel-primary">
                                                <div class="panel-heading">
                                                    SUBIR IMAGENES
                                                </div>
                                                <div class="panel-body">
                                                    {!! Form::open(['route'=> ['CargarImagenTour'], 'method' => 'POST', 'files'=>'true', 'id' => 'my-dropzone' , 'class' => 'dropzone']) !!}

                                                        <div class="dz-message" style="height:200px;">
                                                            Drop your files here
                                                        </div>
                                                       <input type="hidden" name="idTour"  id="idTour">
                                                        <div class="dropzone-previews"></div>
                                                    <button type="submit" class="btn btn-success" id="submit">Save</button>
                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                        </div>
                                  </div>
                                
                                </div>
                        </div>
                </div>
            
            

        </div>
        <div class="box-footer">
          Categoria
        </div>
      </div>

    </section>

@endsection

@section('script')


{!!Html::script('public/assets/dist/js/ckeditor/ckeditor.js')!!}
{!!Html::script('public/assets/dist/css/dropzone/dropzone.js')!!}

<script>
    $('#slider').hide(); 
    $(function () {
    
    CKEDITOR.replace('editor1')
        $('.textarea').wysihtml5()
      })


     $("#btnCreartour").click(function (e) {
                        e.preventDefault();
                        var value = CKEDITOR.instances['editor1'].getData(); 
                        $("#textOrganizacion").val(value);
                        var data = $('#formTour').serialize();
                        console.log(value);
                         $.ajax({
                                     url:'{{ route('tours.store') }}',
                                         type: 'POST',
                                         data:data,
                                     success: function(data) 
                                     {
                                          
                                          if(data.opcion=='correcta')
                                          {
                                              $("#idTour").val(data.id);
                                              $('#slider').show();
                                              helperNotificacionCorecto('SE INSERTO CORRECTAMENTE');
                                          }else
                                          {
                                              helperNotificacionError('NO SE PUEDE INSERTAR DOBLE VEZ');
                                          }

                                        
                                          // $('#bannerSlider').hide(); //muestro mediante id
                                     },
                                     error: function(data) 
                                            {
                                                    
                                                    var errors = data.responseJSON.errors;
                                                  
                                                    $("#erroName").html(errors.name);
                                                    $("#errordescription_short").html(errors.description_short);
                                                    $("#errordescription_complete").html(errors.description_complete);
                                                    $("#errororganization").html(errors.organization);
                                                    $("#errorprice").html(errors.price);
                                              
                                                
                                           }
                                });
                         });


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

    function helperNotificacionError(valor)
    {

           toastr.error(valor);
           
    }
     function helperNotificacionCorecto(valor)
    {

           toastr.success(valor);
           
    }
</script>


@endsection