@extends('admin.layouts.base')
@section('admin', 'active')
@section('content')
<div id="content" class="flex ">
    <!-- ############ Main START-->

    <div class="page-container" id="page-container">

        <div class="padding">
            @if ($errors->any())
            <div class="alert bg-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="card">
                <div class="card-header">
                    <strong>Edit your user account
                    </strong>
                </div>
                <div class="card-body">
                    <form action="{{route('user.update', $user->id)}}" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label class="text-muted" for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter user name"
                                value="{{$user->name}}">
                        </div>
                        <div class="form-group">
                            <label class="text-muted" for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email"
                                placeholder="Enter your email" value="{{$user->email}}">
                        </div>
                        <div class="form-group">
                            <label class="text-muted" for="account_name">Role</label>
                            <div class="mt-2 mb-2">
                                <div class="form-check form-check-inline">
                                    <label class="ui-check ui-check-color">
                                        <input type="radio" name="role" value="superadmin" @if ($user->role
                                        =="superadmin")
                                        checked
                                        @endif>
                                        <i class="bg-success"></i>
                                    </label>
                                    <label class="form-check-label" for="superadmin">Superadmin</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="ui-check ui-check-color">
                                        <input type="radio" name="role" value="admin"
                                            @if($user->role=="admin")
                                        checked
                                        @endif>
                                        <i class="bg-danger"></i>
                                    </label>
                                    <label class="form-check-label" for="admin">Admin</label>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#m-a-a">Submit</button>
                        <div id="m-a-a" class="modal fade" data-backdrop="true">
                            <div class="modal-dialog animate" id="animate">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Confirmation</h5>
                                    </div>
                                    <div class="modal-body text-center p-lg">
                                        <p>Are you sure?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-white" data-dismiss="modal">No</button>
                                        <button type="submit" class="btn btn-primary">Yes</button>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <strong>Ubah password
                    </strong>
                </div>
                <div class="card-body">
                    <form action="{{route('user.update', $user->id)}}" method="POST">
                        @csrf
                        @method('put')

                        <div class="form-group">
                            <label class="text-muted" for="account_name">Password</label>
                            <input type="password" class="form-control" id="account_name" name="account_name"
                                placeholder="Masukkan password">
                        </div>

                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#pwd">Submit</button>
                        <div id="pwd" class="modal fade" data-backdrop="true">
                            <div class="modal-dialog animate" id="animate">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Confirmation</h5>
                                    </div>
                                    <div class="modal-body text-center p-lg">
                                        <p>Are you sure?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-white" data-dismiss="modal">No</button>
                                        <button type="submit" class="btn btn-primary">Yes</button>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- ############ Main END-->
</div>
@endsection
