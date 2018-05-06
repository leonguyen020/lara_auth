<?php

namespace App\Http\Controllers;

use App\Permissions;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    private $upload_path = "/uploads/users";

    public function __construct()
    {
        $this->middleware('auth');
        $user_permission = Auth::user();
        if(@Auth::user()->permissions_id != 0 && Auth::user()->permissions_id != 1){
            return Redirect::to(route('NoPermission'))->send();
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Users = User::all();
        $Permissions = Permissions::orderby('id', 'asc')->get();
        return view('backEnd.users',compact('Users',
            'Permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if($request->hasfile('filename'))
        {
            $file = $request->file('filename');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().$upload_path, $name);
        }
        $user= new User();
        $user->name             = $request->get('name');
        $user->email            = $request->get('email');
        $user->password         = $request->get('password');
        $user->status           = $request->get('status');
        $user->permissions_id   = $request->get('permissions_id');
        $user->created_by       = $request->get('created_by');
//        $date                       = date_create($request->get('date'));
//        $format                     = date_format($date,"Y-m-d");
//        $passport->date             = strtotime($format);
        $user->photo            = $name;
        $user->save();
        return redirect()->route('users')->with('Success', 'Information has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
