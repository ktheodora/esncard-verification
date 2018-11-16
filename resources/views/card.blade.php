@extends('layouts.app')

@section('content')

    <h1> Information about the card: {{$cardid}}</h1>
    <h2> Card status: {{$cardstatus}}</h2>

    @if ($cardstatus == "active")
        <h2> Expiration date: {{$expdate}}</h2>
        <h2> Section code: {{$sectioncode}}</h2>
    @else
        <h2 color='red'> You cannot participate in any ESN Activities with this card!</h2>
    @endif

@endsection