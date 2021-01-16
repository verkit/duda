@extends('admin.layouts.base')
@section('product', 'active')
@section('create-product', 'active')
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
                    <strong>Add new product
                    </strong>
                </div>
                <div class="card-body">
                    <form action="{{route('product.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="text-muted" for="name">Product Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Ex. Backlink">
                        </div>
                        <div class="form-group">
                            <label class="text-muted" for="slug">Sub Service</label>
                            <select class="form-control" name="subservice">
                                @foreach ($subservices as $item)
                                <option value="{{$item->id}}">{{$item->sub_service_name}}</option>
                                @endforeach
                              </select>
                        </div>
                        <div class="form-group">
                            <label class="text-muted" for="price">Price</label>
                            <input type="number" class="form-control" id="price" name="price" placeholder="Ex. 500000">
                        </div>
                        <div class="form-group">
                            <label class="text-muted" for="desc">Description</label>
                            <textarea class="form-control" rows="7" name="desc"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="text-muted" for="status">Status</label>
                            <div class="mt-2 mb-2">
                                <div class="form-check form-check-inline">
                                    <label class="ui-check ui-check-color">
                                        <input type="radio" name="status" value="aktif">
                                        <i class="bg-success"></i>
                                    </label>
                                    <label class="form-check-label" for="aktif">Aktif</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="ui-check ui-check-color">
                                        <input type="radio" name="status" value="tidak aktif">
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
