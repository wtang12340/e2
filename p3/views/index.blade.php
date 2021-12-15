@extends('templates/master')

@section('content')


    <h2>How to Play</h2>
    <p>After the computer rolls a die valued from 1-6, bet on whether your die roll will be higher, lower, or same. A
        correct bet wins!</p>

    @php
    $computer_roll = rand(1, 6);
    @endphp

    <p>The computer rolled <b>{{ $computer_roll }}</b>. Now bet on your roll!</p>

    <form method='POST' action='/process'>
        <input type='hidden' name='computer_roll' value='{{ $computer_roll }}'>
        <input type='radio' test='higher-radio' name='bet' value='higher' id='higher'><label for='higher'>Higher</label><br>
        <input type='radio' test='lower-radio' name='bet' value='lower' id='lower'><label for='lower'>Lower</label><br>
        <input type='radio' test='same-radio' name='bet' value='same' id='same'><label for='same'>Same</label><br>
        <br>
        <button test='submit-button' type='submit'>Place Bet</button>
    </form>

    @if ($app->errorsExist())
        <ul class='error alert alert-danger'>
            <li>Please select a bet before submitting.</li>
        </ul>
    @endif

    <h3>Previous Round Results: </h3>
    @if ($bet)
        <div test='results-div'>
            The computer rolled <b>{{ $computer_roll_old }}</b>, you bet <b>{{ $bet }}</b>.<br>
            You rolled <b>{{ $player_roll }}</b>.
            @if ($player_won)
                <p>You <b>won</b>.</p>
            @else
                <p>You <b>lost</b>.</p>
            @endif
        </div>
    @endif
    <br>
    <a href='/history'>Round History</a>

@endsection
