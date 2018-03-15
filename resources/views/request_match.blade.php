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
                <h1> Request a match </h1>
                {!! Form::model($match, ['route' => 'match.request']) !!}
                <div class="col-md-6">
                    <div class="form-group">
                       {!! Form::label('date', 'Date', ['class' => 'col-md-4 control-label']) !!}
                       {!! Form::text('date', \Carbon\Carbon::now()->format('Y-m-d H:m')) !!}
                    </div>
                    <div class="form-group">
                   {!! Form::label('where', 'Where', ['class' => 'col-md-4 control-label']) !!}
                   {!! Form::text('where', 'Funtainment') !!}
                    </div>
                    <div class="form-group">
                   {!! Form::label('points', 'Points', ['class' => 'col-md-4 control-label']) !!}
                   {!! Form::number('points', '2000') !!}
                    </div>

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
