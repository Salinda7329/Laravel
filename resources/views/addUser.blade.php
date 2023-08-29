@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">{{ __('System 2 Add User Form') }}</div>
                <!-- success message -->
                @if (session('Success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('Success') }}
                    </div>
                @endif

                 <!-- errors -->
                 @if($errors->any())
                    <div class="alert alert-danger" role="alert">
                        @foreach($errors->all() as $error)
                            <li>
                                {{$error}}
                            </li>
                        @endforeach
                    </div>
                @endif


                <div class="card-body">


                    <form action="/addUserDetails" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" >
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" >
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="tel" class="form-control" name="phone" placeholder="077......."  pattern="[0]{1}[7]{1}[0-9]{8}">
                        </div>

                        <div class="mb-3">
                            <label for="nic" class="form-label">NIC</label>
                            <input type="text" class="form-control" name="nic" placeholder="74......V or 197......57" pattern="(\d{12}|\d{9}[A-Za-z])">
                        </div>

                        <div class="mb-3">
                            <button type="reset" class="btn btn-danger">Cancel</button>&nbsp;
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                    </form>
                    
                </div>

               
                <div class="card">
                    <div class="card-body">
                        <div style="text-align: center;">
                            <!-- add 3 buttons to navigate -->
                            <a href="/home" class="btn btn-primary">Home</a>&nbsp;
                            <a href="/viewUsers" class="btn btn-warning">View Users</a>&nbsp;
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
