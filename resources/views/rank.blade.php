@extends('layouts.app')

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
                     <th scope="col">Name</th>
                     <th scope="col">Race</th>
                     <th scope="col">Points</th>
                   </tr>
                 </thead>
                 <tbody>

                @forelse ($users as $user)
                   <tr>
                     <th scope="row">{{ $loop->iteration }}</th>
                     <td>{{ $user->name }}</td>
                     <td>{{ $user->race }}</td>
                     <td>{{ $user->points }}</td>
                   </tr>
                @empty
                    <tr>
                        <th scope="row">1</th>
                        <td>No users</td>
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
