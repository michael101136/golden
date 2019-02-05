<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
   
   protected $table = 'testimonials';

    protected $fillable = [
        'name',
        'email',
        'date',
        'nationality',
        'testimonial',
        'photo',
        'status',
        'language',
        'impresion_global',
        'ig_comentario',
        'i_organizacion',
        'i_tansporte',
        'i_chofer',
        'i_comentario',
        'g_conocimiento',
        'g_simpatia',
        'g_eficacia',
        'g_comunicacion',
        'c_comentario',
        'alojamiento_limpieza',
        'alojamiento_servicio',
        'alojamiento_comentario',
        'comida_calidad',
        'comida_servicio',
        'comida_comentario',
        'le_gusta',
        'no_le_gusta',
        'recomendaria',
        'contactarnos',
        'codigo_viaje',
        'acompanante',
        'tipo'
    ];

}
