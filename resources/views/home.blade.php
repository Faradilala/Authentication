@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    
                    <table class="table table-responsive">
                        <tr><th>Username</th><th>:</th><th>{{ $user->username}}</th><th>
                        <tr><th>Name</th><th>:</th><th>{{ $user->name}}</th><th>
                        <tr><th>Email</th><th>:</th><th>{{ $user->email}}</th><th>
                        <tr><th>Created At</th><th>:</th><th>{{ $user->created_at}}</th><th>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
