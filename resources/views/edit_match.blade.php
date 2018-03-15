@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-heading">Add match</div>
                @if (session('success'))
                <div class="alert alert-success">
                  <strong>Success!</strong> A new match has been added
                </div>
                @endif
                 <div class="panel-body">
                <h1> Edit match </h1>
                {!! Form::model($match, ['route' => ['match.edit', $match]]) !!}
                <div class="col-md-6">
                    <div class="form-group">
                       {!! Form::label('winner', 'Winner', ['class' => 'col-md-6 control-label']) !!}
                       {!! Form::select('winner_id', $players); !!}
                    </div>
                    <div class="form-group">
                   {!! Form::label('winner_score', 'Winner Score', ['class' => 'col-md-6 control-label']) !!}
                   {!! Form::number('winner_score', $match->winner_score) !!}
                    </div>
                    <div class="form-group">
                   {!! Form::label('loser_score', 'Loser score', ['class' => 'col-md-6 control-label']) !!}
                   {!! Form::number('loser_score', $match->loser_score) !!}
                    </div>
                    <div class="form-group">
                   {!! Form::label('mission', 'Mission', ['class' => 'col-md-6 control-label']) !!}
                   {!! Form::text('mission', $match->mission) !!}
                    </div>
                    <div class="form-group">
                   {!! Form::label('where', 'Where', ['class' => 'col-md-6 control-label']) !!}
                   {!! Form::text('where', $match->where) !!}
                    </div>
                    <div class="form-group">
                   {!! Form::label('list_points', 'List Points', ['class' => 'col-md-6 control-label']) !!}
                   {!! Form::text('list_points', $match->list_points) !!}

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                </div>
                </div>
                {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
