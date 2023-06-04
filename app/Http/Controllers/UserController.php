<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;
use DateTime;

class UserController extends Controller
{

    public function index()
    {
        $users = User::with('domicilio')->get();

        foreach ($users as $i => $user) {
            $birthdayDate = new DateTime($user->fecha_nacimento);
            $currentDate = new DateTime(date('Y-m-d'));

            $diff = $birthdayDate->diff($currentDate);
            $years = $diff->y;

            $users[$i]['edad'] = $years;
        }
        
        return $users;
    }
}
