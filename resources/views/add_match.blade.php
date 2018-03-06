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
                    <form class="form-horizontal" method="POST" action="{{ route('add_match') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="Opponent" class="col-md-4 control-label">Opponent</label>

                            <div class="col-md-6">
                                <select name="opponent" class="form-control">
                                    @forelse ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @empty
                                        <p>No users</p>
                                    @endforelse
                                </select>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="Mission Points Player 2" class="col-md-4 control-label">Mission Points Player 2</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="user2_points" required>
                            </div>
                        </div>

                        <label for="Opponent" class="col-md-4 control-label">Result</label>
                            <div class="col-md-6">
                                <select name="result" class="form-control" required>
                                    <option value="win">Win</option>
                                    <option value="win">Loss</option>
                                    <option value="win">Draw</option>
                                </select>
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
