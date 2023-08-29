@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if (session('Delete'))
                    <div class="alert alert-warning" role="alert">
                        {{ session('Delete') }}
                    </div>
                @endif
                @if (session('Update'))
                    <div class="alert alert-success" role="alert">
                        {{ session('Update') }}
                    </div>
                @endif

                <div class="card-header">{{ __('System 2 User Table') }}</div>

                <div class="card-body">

                <table class="table table-striped table-hover">

                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">NIC</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- @foreach($data as $item)
                        <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->nic}}</td>
                        <td><a href="/editUsers/{{$item->id}}" class="btn btn-primary">Edit</a></td>
                        <td><a href="/deleteUsers/{{$item->id}}" class="btn btn-danger">Delete</a></td>
                      </tr>
                      @endforeach -->

                      @foreach($data as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->phone}}</td>
                            <td>{{$item->nic}}</td>
                            <td><a href="/editUsers/{{$item->id}}" class="btn btn-primary">Edit</a></td>
                            <td>
                                <button class="btn btn-danger" data-toggle="modal" data-target="#deleteModal{{$item->id}}">Delete</button>
                                <!-- Confirmation Modal -->
                                <div class="modal fade" id="deleteModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure to delete {{$item->name}}?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                <a href="/deleteUsers/{{$item->id}}" class="btn btn-danger">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
              

                </table>
                </div>

            </div>

            <div class="card">
                <div class="card-body">
                    <div style="text-align: center;">
                        <!-- add 3 buttons to navigate -->
                        <a href="/home" class="btn btn-primary">Home</a>&nbsp;
                        <a href="/addUser" class="btn btn-success">Add User</a>
                    </div>
                </div>
            </div>


        </div>
    </div>


</div>
@endsection
