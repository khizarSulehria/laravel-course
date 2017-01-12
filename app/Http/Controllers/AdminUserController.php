<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Photo;
use App\Role;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;


class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $users = User::all();
        return view('admin.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roles = Role::all();
        return view('admin.users.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function store(UserRequest $request)
    {
        //

        //take all user inputs and store in $input
       $input =  $request->all();

       //if user select photo file in form
       if($photo = $request->file('photo_id')){

           //set it original name
           $name = time() . $photo->getClientOriginalName();

            //move that file in public/images with name of $name
           $photo->move('images', $name);

           //create a record in photo table
          $photoid = Photo::create(['file' => $photo]);

          //and photo id of photo table store in user table
          $input['photo_id'] = $photoid->id;
       }

        User::create($input);

        return redirect('admin/user');
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
        return view('admin.users.edit');
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
