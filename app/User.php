<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
class User extends Authenticatable
{
    //use Notifiable;
    //use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

   // protected $dates = ['deleted_at'];
    
    protected $fillable = [
        'name',
        'email',
        'password',
        'language_id',
        'privilege',
        'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // public function hasRoles(array $roles)
    // {
       
    //    //dd($usuarios);
    //    ///dd($usuarios->abbr);
    //    foreach ($roles as $role) 
    //     {

    //             if ($this->privilege == $role)
    //             {
    //                 return true;
    //             }       

    //     }
    //    return false;
    // }

    // public function language() {
    //     return $this->hasOne('App\Language', 'id'); // Le indicamos que se va relacionar con el atributo id
    // }

}
