<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function list() {
        $client = Client::all();
    
        return view('client.index',[
            'client' => $client
        ]);
    }

    public function store(){
        $pseudo = request('pseudo');

        echo Client::all();
        $client =new Client();
        $client -> name = $pseudo;
        $client ->save();
        echo 'yala';
        dd(Client::all());
        return back();
    }
}
