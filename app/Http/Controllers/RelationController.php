<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Phone;

class RelationController extends Controller
{
    public function getPhoneUserList(Request $request)
    {
        $phone = User::find(1)->phone;
         return $phone;
    }
    public function getUserIdWiseUser(Request $request)
    {
        $user = Phone::find(1)->user;
         return $user;
    }

    public function store(Request $request)
    {
        $user = User::find(1);
        $phone = new Phone;
        $phone->phone = '9429343852';
        $user->phone()->save($phone);
    }
    public function userStore(Request $request)
    {
        $phone = Phone::find(1);
        $user = User::find(2);
        $phone->user()->associate($user)->save();
    }
}
