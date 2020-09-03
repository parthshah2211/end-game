<?php

namespace App\Http\Controllers;

use App\GiveAway;
use App\RegisterUserGiveWay;
use App\Tournament;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Yajra\DataTables\DataTables;

class AdminGiveAwayController extends Controller
{
    public  function index(){
        return DataTables::of(GiveAway::query())->make(true);
    }
    public  function filterGiveWay($gameType = null){

        if ($gameType)
            $giveways = GiveAway::where('category', '=', $gameType)->get();
        else
            $giveways = GiveAway::all();

        // show the view with blog posts (app/views/blog.blade.php)
        return View('pages.give_way')->with('giveways',$giveways);
    }
    public function  insertGiveAway(Request $request){
        $data=$request->all();
        if($request->has('image')){
            $fileName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads'), $fileName);
            $data['image']=$fileName;
        }
        $createTournament=GiveAway::create($data);
        return redirect()->route('giveaway');
    }
    public function registerGivewayUser(Request $request){
      $giveway_id=$request->givewayid;
      $user_id=auth()->id();
     // $alredyRegisterd=RegisterUserGiveWay::where('giveway_id',$giveway_id)->andWhere('user_id',$user_id)->get(
      $data=[];
      $data['giveway_id']=$giveway_id;
        $data['user_id']=$user_id;
        $registerUserGiveWay=RegisterUserGiveWay::create($data);
        return redirect()->back()->with('message','SuccessFully Registerd');

    }
}
