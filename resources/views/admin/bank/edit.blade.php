@extends('admin.layouts.base')
@section('bank', 'active')
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
                    <strong>Edit your bank account
                    </strong>
                </div>
                <div class="card-body">
                    <form action="{{route('bank.update', $bank->id)}}" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label class="text-muted" for="name">Bank name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter bank name"
                                value="{{$bank->bank_name}}">
                        </div>
                        <div class="form-group">
                            <label class="text-muted" for="account_number">Account number</label>
                            <input type="text" class="form-control" id="account_number" name="account_number"
                                placeholder="Enter your account number" value="{{$bank->account_number}}">
                        </div>
                        <div class="form-group">
                            <label class="text-muted" for="account_name">Account name</label>
                            <input type="text" class="form-control" id="account_name" name="account_name"
                                placeholder="Enter your account name" value="{{$bank->account_owner}}">
                        </div>
                        <div class="form-group">
                            <label class="text-muted" for="account_name">Status</label>
                            <div class="mt-2 mb-2">
                                <div class="form-check form-check-inline">
                                    <label class="ui-check ui-check-color">
                                        <input type="radio" name="status" value="aktif" @if ($bank->status
                                        =="aktif")
                                        checked
                                        @endif>
                                        <i class="bg-success"></i>
                                    </label>
                                    <label class="form-check-label" for="aktif">Aktif</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="ui-check ui-check-color">
                                        <input type="radio" name="status" value="tidak aktif"
                                            @if($bank->status=="tidak aktif")
                                        checked
                                        @endif>
                                        <i class="bg-danger"></i>
                                    </label>
                                    <label class="form-check-label" for="tidakaktif">Tidak aktif</label>
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
