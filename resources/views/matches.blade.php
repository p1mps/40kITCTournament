@extends('layouts.app')
    protected $fillable = [
        'user1_id', 'user2_id', 'user1_points', 'user2_points',
    ];

@section('content')
<div class="container">
    <div class="panel panel-default">
    <div class="row">
        <div class="col-md-12">
                <div class="panel-heading">Rank</div>

                <div class="panel-body">
               <table class="table">
                 <thead>
                   <tr>
                     <th scope="col">#</th>
                     <th scope="col">Players</th>
                     <th scope="col">Winner</th>
                     <th scope="col">Date</th>
                     <th scope="col">Where</th>
                     <th scope="col">Winner Score</th>
                     <th scope="col">Loser Score</th>
                     <th scope="col">Mission</th>
                     <th scope="col">List points</th>
                     <th scope="col">Action</th>
                   </tr>
                </thead>
                 <tbody>

                @forelse ($matches as $match)
                   <tr>
                     <th scope="row">{{ $loop->iteration }}</th>
                     <td>{{ $match->player()->first()->name }}
                     vs @if (!is_null($match->opponent()->first()))
                     {{ $match->opponent()->first()->name }}
                     @else
                     <font color="red">NULL</font>
                     @endif
                     </td>
                     <td>{{ $match->winner->name or '' }}</td>
                     <td>{{ $match->date }}</td>
                     <td>{{ $match->where }}</td>
                     <td>{{ $match->winner_score }}</td>
                     <td>{{ $match->loser_score }}</td>
                     <td>{{ $match->mission}}</td>
                     <td>{{ $match->list_points}}</td>
                     @if (is_null($match['opponent_id']))
                     <td><a href="{{ route('match.accept', ['match' => $match])}}">ACCEPT</a></td>
                     @endif
                     <td><a href="{{ route('match.view_edit', ['match' => $match])}}">EDIT</a></td>
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
