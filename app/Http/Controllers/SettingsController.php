<?php

namespace App\Http\Controllers;

use App\Permissions;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class SettingsController extends Controller
{
    //
    private $upload_path = "uploads/sites";
    
    // Checking permission to view this page
    public function __construct()
    {
        $this->middleware('auth');
//        if(@Auth::user()->permissions_id != 0 && Auth::user()->permissions_id != 1){
//            return Redirect::to(route('NoPermission'))->send();
//        }
    }
    
    // View settings general page
    public function index(){
        return view('backEnd.settings');
    }
}
