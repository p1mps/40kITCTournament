@extends('layouts.app')
    protected $fillable = [
        'user1_id', 'user2_id', 'user1_points', 'user2_points',
    ];

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Rank</div>

                <div class="panel-body">
               <table class="table">
                 <thead>
                   <tr>
                     <th scope="col">#</th>
                     <th scope="col">Opponent</th>
                     <th scope="col">Your score</th>
                     <th scope="col">Opponent score</th>
                     <th scope="col">Mission</th>
                     <th scope="col">List points</th>
                     <th scope="col">Status</th>
                     <th scope="col">Action</th>
                   </tr>
                </thead>
                 <tbody>

                @forelse ($matches as $match)
                   <tr>
                     <th scope="row">{{ $loop->iteration }}</th>
                     <td>{{ $match->opponent()->first()->name }}</td>
                     <td>{{ $match->opponent_score }}</td>
                     <td>{{ $match->player_score }}</td>
                     <td>{{ $match->mission}}</td>
                     <td>{{ $match->points}}</td>
                     <td>{{ $match->status}}</td>
                     <td><a href="{{ route('match.delete', ['match' => $match->id])}}">UPDATE</a></td>
                     <td><a href="{{ route('match.delete', ['match' => $match->id])}}">DELETE</a></td>
                   </tr>
                @empty
                    <tr>
                        <th scope="row">1</th>
                        <td>No matches</td>
                    </tr>
                @endforelse
                 </tbody>
               </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
