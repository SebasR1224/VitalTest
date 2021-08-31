<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function create(Request $request){
        Profile::create($request->all());
        return redirect()->back()->with('messageProfile_add' , 'Genial, acabas de completar tú perfil');
    }

    public function update(Request $request, $id){
        $profile=Profile::findOrfail($id);
        $dataProfile = $request->all();
        $profile->update($dataProfile);
        return redirect()->back()->with('messageProfile_add', 'Se han actualizado los campos');
    }
}
