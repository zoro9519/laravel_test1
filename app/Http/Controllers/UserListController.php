<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userlist;

class UserListController extends Controller
{
    //Get All User Lists
    public function getUserLists() {
        $userlists = Userlist::all();
    
        // Return the posts as json
        return response()->json($userlists);
    }
}
