<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    //user management

    public function index(){
        $users = User::paginate(8);
        return view('users.index' , compact('users'));
    }

    public function create($id=null){
        $user = new User();
        if($id != null){
            $user = User::findOrFail($id);
        }
        return view('users.create' , compact('user'));
    }


    public function store(UserCreateRequest $request){
        User::create($request->only('username' , 'email')
        + [
            'password'=>bcrypt($request->input('password')),
        ]);
        return redirect()->route('users.index')->with('message_add', 'Usuario creado con exito');
    }


    public function update(Request $request, $id){

        $request->validate(
            [
                'password' =>'sometimes',
                'username' => 'unique:users,username,'.$id,

                'email' =>
                    ['email','required', 'unique:users,email,'.$id]

            ]
        );


        $user=User::findOrfail($id);
        $data = $request->only('username' , 'email');
        $password=$request->input('password');
        if($password)
            $data['password'] = bcrypt($password);

        $user->update($data);
        return redirect()->route('users.index')->with('message_add', 'Usuario actualizado correctamente');
    }

    //detalles de usuarios
    public function show($id){
        $user = User::find($id);
        $datos=$user->profile;
        return view('users.show' , compact('datos', 'user'));
    }


    //profile
    public function profile($id){
        $user = User::find($id);
        $datos=$user->profile;
        return view('users.profile' , compact('datos', 'user'));
    }
}
