@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add match</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('match') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="enemy" class="col-md-4 control-label">Enemy</label>

                            <div class="col-md-6">
                                <!--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>-->
                                <select class="form-control">
                                    <option>Player 1</option>
                                    <option>Player 2</option>
                                    <option>Player 3</option>
                                    <option>Player 4</option>
                                </select>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="me mission points" class="col-md-4 control-label">Mission Points Me</label>

                            <div class="col-md-6">
                                <input id="missionpoints-me" type="text" class="form-control" name="missionpoints-me" required>
                            </div>


                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="enemy mission points" class="col-md-4 control-label">Mission Points Enemy</label>

                            <div class="col-md-6">
                                <input id="missionpoints-enemy" type="text" class="form-control" name="missionpoints-enemy" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
