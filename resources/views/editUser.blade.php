@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">{{ __('System 2 Edit User Form') }}</div>

                           

                <div class="card-body">

                    <form action="/updateUser/{{$data->id}}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" value="{{$data->name}}">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" value="{{$data->email}}">
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" name="phone" value="{{$data->phone}}">
                        </div>

                        <div class="mb-3">
                            <label for="nic" class="form-label">NIC</label>
                            <input type="text" class="form-control" name="nic" value="{{$data->nic}}">
                        </div>

                        <div class="mb-3">
                            <button type="reset" class="btn btn-danger">Cancel</button>&nbsp;
                            <button type="submit" class="btn btn-primary" >Submit</button>&nbsp;
                            <a href="/viewUsers" class="btn btn-warning">View Users</a>
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
