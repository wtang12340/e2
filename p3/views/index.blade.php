@extends('templates/master')

@section('content')

    <h2>How to Play</h2>
    <p>After the computer rolls a die valued from 1-6, bet on whether your die roll will be higher, lower, or same.</p>
    <p>A correct bet wins!</p>

    @php
    $computer_roll = rand(1, 6);
    @endphp

    <p>The computer rolled <b>{{ $computer_roll }}</b>.</p>

    <form method='POST' action='/process'>
        <input type='hidden' name='computer_roll' value='{{ $computer_roll }}'>
        <input type='radio' name='bet' value='higher' id='higher'><label for='higher'>Higher</label><br>
        <input type='radio' name='bet' value='lower' id='lower'><label for='lower'>Lower</label><br>
        <input type='radio' name='bet' value='same' id='same'><label for='same'>Same</label><br>
        <br>
        <button type='submit'>Place Bet</button>
    </form>

    @if ($bet)
        <p>The computer rolled <b>{{ $computer_roll_old }}</b>, you bet <b>{{ $bet }}</b>.</p>
        <p>You rolled <b>{{ $player_roll }}</b>.</p>
        @if ($player_won)
            <p>You <b>won</b>.</p>
        @else
            <p>You <b>lost</b>.</p>
        @endif

    @endif

@endsection
