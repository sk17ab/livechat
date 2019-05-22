@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <ul>
                            <li>One</li>
                            <li>One</li>
                            <li>One</li>
                        </ul>


                        <form method="post" action="{{route('chats.store')}}">
                            @csrf

                            <div class="form-group">
                                <label for="comment">Message:</label>
                                <input class="form-control" type="text" name="body">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
