<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\table_post;
use App\Tbl_Users;
use App\User;
use App\Target_Tbl;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $post = table_post::all();
        return view('posts.index', compact('post')); //'table_post' -> model
    }

    
    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){
         $this->validate($request,[
          'title'=>'required|string|max:255',
          'body'=>'required',
        ]);
        table_post::create($request->all());
        return redirect()->route('posts.index')->with('success','Post created success');
    }


    public function show($id){
        $post = table_post::find($id);
      return view('posts.show',compact('post'));
    }


    public function edit($id){
        $post = table_post::find($id);
        return view('posts.edit',compact('post'));
    }

    // // EDIT USER
    // public function edit($id) {
    //     $editUser = table_post::find($id);
    //     return view('posts.edit',compact('editUser'));
    // }

    public function update(Request $request, $id){
        $this->validate($request,[
          'title' => 'required',
          'body' => 'required',
        ]);
        table_post::find($id)->update($request->all());
        return redirect()->route('posts.index')->with('success','Post update success');
        }

    public function destroy($id){
        table_post::find($id)->delete();
        return redirect()->route('posts.index')->with('success','Post deleted success');
    }

    public function home(){
        return view('login');
    }

    public function createUser(){
        return view('registerUser.createAccount');
    }
       
    // CREATION OF ACCOUNT
    public function storeUser(Request $request){
         $this->validate($request,[
            'full_name' => 'required|string|max:255',
            'ADID' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'password' => 'required|string|min:8',
        ]);

          User::create([
            'full_name' => $request['full_name'],
            'ADID' => $request['ADID'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
         return redirect()->route('home')->with('success','User Succesfully Created');
    }

    public function showUser($id)
    {
        $account = User::find($id);
        return view('home',compact('account'));
    }

    // LIST OF ALL USER
    public function tableUser()
    {
        $user = User::all();
        return view('registerUser.showAccount',  ['user'=>$user] ); 
       
    }

    public function userType()
    {
        $usertype = User::all();
        return view('registerUser.createAccount',  ['usertype'=>$usertype] ); 
    }
    // // LIST OF ALL TABLE IN OPTION
    // public function tableAccess()
    // {
    //     $table = Target_Tbl::all();
    //     return view('registerUser.createAccount',  ['table'=>$table] ); 
    // }



    // DELETE USER
    public function destroyUSer($id)
    {
        User::find($id)->delete();
        return redirect()->route('registerUser.showAccount');

    }
    // LIST ALL OF TABLE
    public function targetTable()
    {
        $tbl = Target_Tbl::all();
        return view('showTables',  ['tbl'=>$tbl] ); 
    }

    public function adminView(){
        return view('dashboard');
    }

}
