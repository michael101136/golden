@extends('assets.pagina.es.layouts.master')

@section('content')
 
    <!-- page header -->
            <section class="header header-bg-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="header-content">
                                <div class="header-content-inner">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact -->
            <section class="contact-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="contact_map">
                               <div class="container">
                                    @if(Session::has('cart'))
                                        <table id="cart" class="table table-hover table-condensed">
                                                        <thead>
                                                            <tr>
                                                                <th style="width:50%">Tours</th>
                                                                <th style="width:10%">Pricio</th>
                                                                <th style="width:8%">Cantidad</th>
                                                                <th style="width:22%" class="text-center">Subtotal</th>
                                                                <th style="width:10%"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($products as $product)
                                                                <tr>
                                                                    <td data-th="Product">
                                                                        <div class="row">
                                                                            <div class="col-sm-2 hidden-xs"><img src="/{{ $product['item']['img'] }}" alt="..." class="img-responsive"/></div>
                                                                            <div class="col-sm-10">
                                                                                <h4 class="nomargin">{{ $product['item']['name'] }} </h4>
                                                                                </h4>
                                                                               
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td data-th="Price">{{ $product['item']['price'] }}</td>
                                                                    <td data-th="Quantity">
                                                                        <input type="number" class="form-control text-center" value="{{ $product['qty'] }}">
                                                                    </td>
                                                                    <td data-th="Subtotal" class="text-center">{{ $product['item']['price'] }}</td>
                                                                    <td class="actions" data-th="">
                                                                        <button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
                                                                        <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>                                
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                        <tfoot>
                                                            <tr class="visible-xs">
                                                                <td class="text-center"><strong>Totals : {{ $totalPrice}}</strong></td>
                                                            </tr>
                                                            <tr>
                                                                <td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                                                                <td colspan="2" class="hidden-xs"></td>
                                                                <td class="hidden-xs text-center"><strong>Total $ {{ $totalPrice}} </strong></td>
                                                                <td><a href="{{ route('checkout')}}" class="btn btn-success btn-block" >Checkout <i class="fa fa-angle-right"></i></a></td>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                        @else


                                        @endif

                                    </div>
                            </div>
                        </div>
                      
                      
                    </div>
                </div>
            </section>
           
        </div>

@endsection

@section('script')
   
  
@endsection