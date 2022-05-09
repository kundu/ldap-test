<?php

namespace App\Http\Controllers;

use App\Ldap\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function userCreate(){
        // $user = User::find('cn=jakia apu,ou=web,dc=iamkundu,dc=com');

        // dd($user);
        $user = new User();

        $user->cn = 'Steve Bauman';
        $user->ou = 'Steve';
        $user->dc = 'iamkundu';
        $user->dc = 'com';
        $user->save();

        dd($user);
    }
}
