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
        $users = User::where('company', '=', 'iamkundu')->get();
        dd($users);
        // $user = new User();

        // $user->cn = 'Steve Bauman';
        // $user->dn = 'Steve';
        // $user->sn = 'Bauman';
        // $user->company = 'Acme';
        // $user->save();

        // dd($user);
    }
}
