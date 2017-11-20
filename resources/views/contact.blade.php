@extends('layouts.app')


@section('content')
    <h1>Im Contact Page</h1>

    @if( count($friends))
        <ul>
            @foreach($friends as $friend)
                <li>{{$friend}}</li>
            @endforeach

        </ul>


        @endif


    @stop


