@extends('templates/master')

@section('title')
    Round Details
@endsection

@section('content')
    <h2>Round Details</h2>
    <a href='/history'>Return to Round History</a>
    <br>
    <br>
    <table class="round">

        <tr>
            <td>Round #</td>
            <td>{{ $round['id'] }}</td>
        </tr>
        <tr>
            <td>Time Played</td>
            <td>{{ date('F j, Y, g:i a', strtotime($round['timestamp'])) }}</td>
        </tr>
        <tr>
            <td>Computer Roll</td>
            <td>{{ $round['computer_roll'] }}</td>
        </tr>
        <tr>
            <td>Player Bet</td>
            <td>{{ $round['bet'] }}</td>
        </tr>
        <tr>
            <td>Player Roll</td>
            <td>{{ $round['player_roll'] }}</td>
        </tr>
        <tr>
            <td>Result</td>
            <td>Player {{ $round['player_won'] ? 'won' : 'lost' }}</td>
        </tr>
    </table>
@endsection
