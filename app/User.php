<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function is_admin(){
        $role = $this-role;
        if($role == 'admin'){
            return true;
        }else{
            return false;
        }
    }
    public function is_pengadaan(){
        $role = $this->role;
        if($role == 'pengadaan'){
            return true;
        }else{
            return false;
        }
    }
    public function is_umum(){
        $role = $this->role;
        if($role == 'umum'){
            return true;
        }else{
            return false;
        }
    }
    public function is_dir(){
        $role = $this->role;
        if($role == 'direktur'){
            return true;
        }else{
            return false;
        }
    }
    public function is_sub_bag(){
        $role = $this->role;
        if($role == 'sub_bag'){
            return true;
        }else{
            return false;
        }
    }
    public function is_unit(){
        $role = $this->role;
        if($role == 'unit'){
            return true;
        }else{
            return false;
        }
    }
}
