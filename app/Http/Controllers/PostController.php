<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\tracker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller{
    
    public function index(){
        
        // $posts = Post::all();
        $data = DB::select('select * from posts where user_id = ?', [auth()->user()->id]);

        return view('API_Keys.APIview', ['posts' => $data]);
        
    }

    public function addVal(Request $request){
        
        error_log(request('Key_name'));
        error_log(request('Key_value'));

        request()->validate([
            'Key_name' => 'required',
            'Key_value' => 'required',
        ]);

        Post::create([
            'Key_name' => request('Key_name'),
            'Key' => request('Key_value'),
            'user_id' => auth()->user()->id,
        ]);


        return redirect('/posts');
    }

    public function deleteData(){

        error_log(request('Key_name'));
        DB::delete('delete from posts where Key_name = ? and user_id = ?',[request('Key_name'), auth()->user()->id]);

        return redirect('/posts');
    }


    public function addSat(){
        
        tracker::create([
            'user_id' => auth()->user()->id,
            'sat_id' => request('sat_id'),
            'rating' => 0,
            'sat_name' => request('sat_name')
        ]);

        redirect('/sat');
    }

    public function removeSat(){
        
        tracker::create([
            'user_id' => auth()->user()->id,
            'sat_id' => request('sat_id'),
            'rating' => 0,
        ]);

        redirect('/sat');
    }

    public function updateSat(){
        
        DB::update('update trackers set rating = ? where user_id = ? and sat_id = ?' , [request('rating'),auth()->user()->id,request('sat_id')]);

        return redirect('/sat');
    }

    public function viewSat(){
        
        error_log("here tpp");

        $data = DB::select('select * from trackers where user_id = ?', [auth()->user()->id]);

        return view('SatelliteView.Satellite', ['sats' => $data]);
    }

    public function viewSatReview(){

        $data = DB::select('select sat_id, sat_name, user_id, rating from trackers GROUP by sat_id');

        return view('SatelliteView.Satellite', ['sats' => $data]);
    }
}
