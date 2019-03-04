@component('mail::layout')
{{-- Header --}}
@slot('header')
@component('mail::header', ['url' => config('app.url')])
 FORMULARIO DE CONTACTO<br>
@endcomponent
@endslot

![Logo de Programación y más][logo]

{{-- Body --}}

@component('mail::table')
|                   | DETALLE                  	  |
| ------------------|:----------------------------| 
| Nombre            | 	{{$detalle->f_name}}   	  |
| Email             |                             | 
| Teléfono          |                             | 
| Skype          	|          					  |

<strong>MENSAJE:</strong></br>
{{-- {{$detalle->mensaje}}    --}}
@endcomponent
{{-- Footer --}}
@slot('footer')
@component('mail::footer')
	

© {{ date('Y') }} Todos los derechos reservados Empresa de turismo machupicchugolden.com.

[unsubscribe]: {{ url('/configuracion') }}
@endcomponent
@endslot

[logo]: https://www.cantturperu.org/public/images/socios/terandes.png
@endcomponent