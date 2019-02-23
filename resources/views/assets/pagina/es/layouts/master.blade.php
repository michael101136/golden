<!DOCTYPE html>
<html lang="español">
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MACHUPICCHU GOLDEN</title>
<head>
    
 
    	 @include('assets.pagina.partials.header')
 

</head>

<body>
   
      @include('assets.pagina.es.layouts.navbar')

    @yield('content')




    	<!--========= scrip footer ===========-->
    	@include('assets.pagina.partials.footer')
    	<!--========= fin  ===========-->

    @yield('script')


   
</html>