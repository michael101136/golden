@extends('assets.admin.layout.from')
@section('contenido')
	    <section class="content-header">
      <h1>
        
      </h1>
      
    </section>

    <section class="content">

      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">LISTADO</h3>
          <div class="box-tools pull-right">

            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>

        </div>
        
        <div class="box-body">
           <a href="{{ URL::route('categories.create')}}" type="button" class="btn bg-olive margin">Nuevo</a>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Descripción</th>
                      <th>Imagen</th>
                      <th>Fecha</th>
                      <th>F Actualización</th>
                      <th></th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($categorias as $itemp)
                      <tr>
                        <td>{{$itemp->name}}</td>
                        <td>{{$itemp->description}}</td>
                        <td>
                            <img src="/public/admin/categoria/{{$itemp->id}}.{{$itemp->img}}" style="height: 50px;"> 
                        </td>
                        <td>{{$itemp->created_at}}</td>
                        <td>{{$itemp->updated_at}}</td>
                        <td>
                           <div class="btn-group">
                              <button type="button" class="btn btn-success">Acción</button>
                              <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                              </button>
                              <ul class="dropdown-menu" role="menu">
                                <li style="text-align: center;">
                                  {!! Form::open(['method' => 'DELETE','route' => ['categories.destroy', $itemp->id]]) !!}
                                         {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-ls'] )  }}
                                  {!! Form::close() !!}
                                </li>
                                <li>
                                     <a href="{{ URL::route('categories.show',$itemp->id)}}"> 
                                        <i class="fa fa-pencil"></i> Modificar
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
          CATEGORIAS
        </div>
      </div>

    </section>

@endsection