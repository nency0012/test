<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\View\Components\testcom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request  $request)
    {
        //
     // echo $name;
     //  echo "hello from  resources index";
     //   return  ['name1'=>'nency','age'=>45];

      /*   echo url()->current();
         echo "<br/>";
        echo url()->full();
       echo "<br/>";
        echo url()->previous();
        echo "<br/>";

   echo route('users.index', ['post' => 1,'search'=>'rocket']); */

     /*   if ($request->has('name')) {
            echo "successful";
            //
        } */
      /*  if ($request->hasAny(['name', 'email'])) {
            //
            echo "success";
        } */

      //  $file = $request->file('photo');

    //    return  view('Users.insertUser');


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        echo "create";
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
      //  echo "store";

        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);

        dd($validator);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
        echo "show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
        echo "edit";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
        echo "update";

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
        echo "destroy";
    }
}
