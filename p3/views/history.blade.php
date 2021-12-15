@extends('templates/master')

@section('title')
    Round History
@endsection

@section('content')
    <h2>Round History</h2>
    <a href='/'>Return Home</a>
    <br>
    <br>
    You won a total of {{ count($rounds_won) }} rounds out of {{ count($rounds) }}.<br>
    Your win rate is {{ number_format((count($rounds_won) / count($rounds)) * 100, 2) }}%
    <br>
    <br>
    <table class="history">
        <tr>
            <th>Round Time</th>
            <th>Result</th>
        </tr>
        @foreach ($rounds as $round)
            <tr>
                <td><a
                        href='/round?id={{ $round['id'] }}'>{{ date('F j, Y, g:i a', strtotime($round['timestamp'])) }}</a>
                </td>
                <td>{{ $round['player_won'] == 1 ? 'Won' : 'Lost' }}
                </td>
            </tr>
        @endforeach
    </table>
@endsection
