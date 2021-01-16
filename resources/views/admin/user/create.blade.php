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
                    <strong>Add your new user admin account
                    </strong>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('user.store') }}">
                        @csrf
                        <div class="form-group">
                            <label class="text-muted" for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}"
                                placeholder="Enter name">
                        </div>
                        <div class="form-group">
                            <label class="text-muted" for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}"
                                placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <label class="text-muted" for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        {{-- <div class="form-group">
                            <label class="text-muted" for="password-confirm">Password Confirmation</label>
                            <input type="password" class="form-control" id="password-confirm" name="password_confirmation" required autocomplete="new-password">
                        </div> --}}
                        <div class="form-group">
                            <label class="text-muted" for="role">Role</label>
                            <div class="mt-2 mb-2">
                                <div class="form-check form-check-inline">
                                    <label class="ui-check ui-check-color">
                                        <input type="radio" name="role" value="superadmin">
                                        <i class="bg-success"></i>
                                    </label>
                                    <label class="form-check-label" for="superadmin">Superadmin</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="ui-check ui-check-color">
                                        <input type="radio" name="role" value="admin">
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
        </div>

    </div>

    <!-- ############ Main END-->
</div>
@endsection
