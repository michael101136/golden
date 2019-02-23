 <!-- page loader -->
        <div class="se-pre-con"></div>
        <div id="page-content">
            <!-- navber -->
            <nav id="mainNav" class="navbar navbar-fixed-top">
                <div class="container">
                    <!--Brand and toggle get grouped for better mobile display--> 
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span><i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="/es">
                            <img src="/plantilla/assets/images/logo.png" class="img-resposive" alt="" style="margin-top: -18px;">
                        </a>
                    </div>
                    <!--Collect the nav links, forms, and other content for toggling--> 
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="/es">Inicio</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true">Paquetes<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{route('paquetesCategoriaES',['idioma'=> 'es','categoria'=>'aventura'])}}">AVENTURA</a>
                                        <a href="{{route('paquetesCategoriaES',['idioma'=> 'es','categoria'=>'místico'])}}">MÍSTICO</a>
                                        <a href="{{route('paquetesCategoriaES',['idioma'=> 'es','categoria'=>'tradicional'])}}">TRADICIONAL</a>
                                        <a href="{{route('paquetesCategoriaES',['idioma'=> 'es','categoria'=>'vivnecial'])}}">VIVENCIAL</a>
                                    </li>
                                   
                                </ul>
                            </li>
                            <li><a href="{{ route('nosotrosEs','es') }}">Nosotros</a></li>
                            <li><a href="{{route('testimonioEs','es')}}">Testimonios</a></li>
                            <li><a href="{{ route('contactoEs','es') }}">Contacto</a></li>

                        </ul>
                        <ul class="nav navbar-nav navbar-right hidden-sm">
                            <li>
                                    <a class="nav-btn" href="#">
                                            <img src="/plantilla/assets/images/bandera/en.png">
                                    </a>
                            </li>
                        </ul>
                    </div> 
                </div> 
            </nav> 