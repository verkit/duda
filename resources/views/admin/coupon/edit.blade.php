@extends('admin.layouts.base')
@section('coupon', 'active')
@section('list-coupon', 'active')
@section('content')
<div id="content" class="flex ">
    <!-- ############ Main START-->

    <div class="page-container" id="page-container">

        <div class="padding">
            @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {{-- <div class="alert bg-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div> --}}
        @endif
        @if ($message = Session::get('success'))
        <div class="alert bg-success" role="alert">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
        @endif
        <div class="mb-3">
            <ul class="nav nav-pills" id="myTab" role="tabproduct">
                <li class="nav-item">
                    <a class="nav-link active" id="coupon-tab" data-toggle="tab" href="#coupon" role="tab"
                        aria-controls="home" aria-selected="true">Coupon</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="product-tab" data-toggle="tab" href="#product" role="tab"
                        aria-controls="product" aria-selected="false">Product List</a>
                </li>
            </ul>
        </div>
        <div class="tab-content mb-4">
            <div class="tab-pane fade show active" id="coupon" role="tabpanel" aria-labelledby="coupon-tab">
                <div class="card">
                    <div class="card-header">
                        <strong>Edit coupon
                        </strong>
                    </div>
                    <div class="card-body">
                        <form action="{{route('coupon.update', $coupon->id)}}" method="POST">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label class="text-muted" for="name">Coupon Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Ex. Voucher 20% Optimasi SEO" value="{{$coupon->name}}">
                            </div>
                            <div class="form-group">
                                <label class="text-muted" for="code">Code</label>
                                <input type="text" class="form-control" id="code" name="code" placeholder="Ex. SOSMED20"
                                    value="{{$coupon->code}}">
                            </div>
                            <div class="form-group">
                                <label class="text-muted" for="discount">discount</label>
                                <input type="number" class="form-control" id="discount" name="discount"
                                    placeholder="0-100" value="{{$coupon->discount}}">
                            </div>
                            <div class="form-group">
                                <label class="text-muted" for="desc">Description</label>
                                <textarea class="form-control" rows="7" name="desc">{{$coupon->description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="text-muted" for="account_name">Status</label>
                                <div class="mt-2 mb-2">
                                    <div class="form-check form-check-inline">
                                        <label class="ui-check ui-check-color">
                                            <input type="radio" name="status" value="aktif" @if ($coupon->status
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
                                                @if($coupon->status=="tidak aktif")
                                            checked
                                            @endif>
                                            <i class="bg-danger"></i>
                                        </label>
                                        <label class="form-check-label" for="tidakaktif">Tidak aktif</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="date">Date</label>
                                <div class='input-group input-daterange mb-3' data-plugin="datepicker" data-option="{}">
                                    <input type='text' class="form-control" name="start" value="{{$start}}">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">to</span>
                                    </div>
                                    <input type='text' class="form-control" name="end" value="{{$end}}">
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
            <div class="tab-pane fade" id="product" role="tabpanel" aria-labelledby="product-tab">
                <div class="row">
                    <div class="col-sm-6">
                        <div id="toolbar">
                            <button id="add" type="button" class="btn btn-icon btn-white btn-block i-con-h-a mr-1 blue"
                                data-toggle="modal" data-target="#m"><i data-toggle="tooltip" title="Add new product"
                                    class="i-con i-con-plus b-2x"><i></i></i></button>
                        </div>
                        <table class="table table-theme v-middle" data-plugin="bootstrapTable" id="table"
                            data-toolbar="#toolbar" data-search="true" data-search-align="left" data-show-columns="true"
                            data-show-export="true" data-detail-view="false" data-mobile-responsive="true"
                            data-pagination="true" data-page-product="[10, 25, 50, 100, ALL]">
                            <thead>
                                <tr>
                                    <th data-sortable="true" data-field="id">No</th>
                                    <th data-sortable="true">Product</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($coupon_products as $item)
                                <tr>
                                    <td>
                                        <small class="text-muted">{{$loop->iteration}}</small>
                                    </td>
                                    <td>
                                        <span class="item-amount text-sm ">
                                            {{$item->product->product_name}}
                                        </span>
                                    </td>
                                    <td>

                                        <form action="{{route('coupon.del.product', $item->id)}}" method="POST">
                                            @csrf()
                                            @method('delete')
                                            <button id="delete" type="submit"
                                                class="btn btn-icon btn-white btn-block i-con-h-a mr-1 red"
                                                data-toggle="tooltip" title="delete product">
                                                <i class="i-con
                                                        i-con-trash b-2x"><i></i></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>
    </div>

</div>

<!-- ############ Main END-->
<!-- .modal -->
<div id="m" class="modal" data-backdrop="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add product</h5>
            </div>
            <div class="modal-body p-lg">
                <form action="{{route('coupon.product', $coupon->id)}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="text-muted" for="name">Product</label>
                        <select name="product" id="product" class="form-control">
                            @foreach ($products as $item)
                            <option value="{{$item->id}}">{{$item->product_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div>
</div>
<!-- / .modal -->
</div>
@endsection
