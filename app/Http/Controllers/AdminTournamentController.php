<?php


namespace App\Http\Controllers;


use App\Tournament;
use App\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class AdminTournamentController
{

    public  function index(){
        return DataTables::of(Tournament::query())->make(true);
    }

    public function  insertTournament(Request $request){
        $data=$request->all();
        if($request->has('image')){
            $fileName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads'), $fileName);
            $data['image']=$fileName;
        }
        $createTournament=Tournament::create($data);
        return redirect()->route('tournament');
    }

}
