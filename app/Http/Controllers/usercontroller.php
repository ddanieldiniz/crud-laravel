<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\estudante;
use Illuminate\Http\Request;

class usercontroller extends Controller
{
    function show(){
        $data = estudante::all();
        return view('listacandidatos',['members'=>$data]);
    }

    function AddData(Request $req){
        $estudantes = new estudante();
        $estudantes->Nome = $req->Nome;
        $estudantes->Senha = $req->Senha;
        $estudantes->Data = $req->Data;
        $estudantes->save();
        return redirect('listacandidatos');
    }

    function delete($id){
        $data = estudante::find($id);
        $data->delete();
        return redirect('listacandidatos');
    }

    function showdata($id){

        $data = estudante::find($id);
        return view('update',['data'=>$data]);
    }

    function update(Request $req, $id){

        $data = estudante::find($id);
        $data->Nome = $req->Nome;
        $data->Senha = $req->Senha;
        $data->Data = $req->Data;
        $data->save();
        return redirect('listacandidatos');
    }

    function viewrecord($id){

        $data = estudante::find($id);
        return view('view',['data'=>$data]);
    }
}
