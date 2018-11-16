<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;

class CardController extends Controller
{

    public function index(Request $request) {

        $cardid = $request['cardid'];
        $json = Curl::to('https://esncard.org/services/1.0/card.json')
            ->withData( array ( 'code' => $cardid))
            ->get();

        $response = json_decode($json, TRUE);

        $cardstatus = $response[0]['status'];
        $expdate = $response[0]['expiration-date']['value'];
        $sectioncode = $response[0]['section-code'];
        return view('card', compact('cardstatus', 'expdate','sectioncode', 'cardid'));
    }
}
