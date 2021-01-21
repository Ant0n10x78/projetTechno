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
}
