@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="card-header">{{ __('System 2 Home Page Dashboard') }}</div>

                <div class="card-body">

                    <div style="text-align: center;">
                        <!-- add 3 buttons to navigate -->
                        <a href="/addUser" class="btn btn-primary">Add User</a>&nbsp;
                        <a href="/viewUsers" class="btn btn-warning">View Users</a>&nbsp;
                        <a href="/viewUsers" class="btn btn-danger">Edit and Delete Users</a>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
