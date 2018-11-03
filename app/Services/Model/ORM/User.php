<?php
namespace App\Services\Model\ORM;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use App\Services\Model\ORM\UserProfile as UserInfoEloquent;


class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;
    protected $table = 'users';
    protected $guard_name = 'web';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','s_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
