@extends('admin.layouts.base')
@section('order', 'active')
@section('list-order', 'active')
@section('content')
<div id="content" class="flex ">
    <!-- ############ Main START-->

    <div class="page-container" id="page-container">

        <div class="padding my-3">
            @if ($message = Session::get('success'))
            <div class="alert bg-success" role="alert">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif

            <div class="card">
                <div class="card-header">
                    <strong>Search</strong>
                </div>
                <div class="card-body">
                    <form action="{{route('order.search')}}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="service" class="col-form-label">Service</label>
                                <select name="service" id="service" class="form-control">
                                    <option selected>Select Service</option>
                                    @foreach ($services as $item)
                                    <option value="{{$item->id}}">{{$item->service_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <label for="service" class="col-form-label">Sub Service</label>
                                <select name="subservice" id="subservice" class="form-control">
                                    <option selected>Select Sub Service</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <label for="service" class="col-form-label">Product</label>
                                <select name="product" id="product" class="form-control">
                                    <option selected>Select Product</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="service" class="col-form-label">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option>Select status</option>
                                    @foreach ($order_statuses as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <label for="service" class="col-form-label">Date Order</label>
                                <input type='text' class="form-control mb-3" data-plugin="datepicker" name="date" data-option="{}">
                            </div>
                            <div class="col-sm-4">
                                <label for="service" class="col-form-label">Search</label>
                                <input type="text" class="form-control" placeholder="Invoice" name="invoice">
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn w-sm btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

            {{-- <div id="toolbar">
                <button id="trash" class="btn btn-icon btn-white i-con-h-a mr-1"><i
                        class="i-con i-con-trash text-muted"><i></i></i></button>
            </div> --}}
            <table class="table table-theme v-middle" data-plugin="bootstrapTable" id="table" data-toolbar="#toolbar"
                data-search="true" data-search-align="left" data-show-columns="true" data-show-export="true"
                data-detail-view="false" data-mobile-responsive="true" data-pagination="true"
                data-page-list="[10, 25, 50, 100, ALL]">
                <thead>
                    <tr>
                        <th data-sortable="true" data-field="id">No</th>
                        <th data-sortable="true">Invoice</th>
                        <th data-sortable="true">Product</th>
                        <th data-sortable="true">Price</th>
                        <th data-sortable="true">Status</th>
                        <th data-sortable="true">Date</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                    <tr>
                        <td>
                            <small class="text-muted">{{$loop->iteration}}</small>
                        </td>
                        <td>
                            <a class="item-invoice text-sm" href="
                            @if ($order->id_product == null)
                            {{route('customorder.edit', $order->id)}}
                            @else
                            {{route('order.edit', $order->id)}}
                            @endif
                            ">
                                {{$order->invoice}}
                            </a>
                        </td>
                        @if ($order->id_product == null)
                        <td>
                            <span class="item-product">
                                {{$order->custom_product}}
                            </span>
                        </td>
                        @else
                        <td class="flex">
                            <span class="item-product ">
                                {{$order->product->product_name}}
                            </span>
                            <div class="item-except text-muted h-1x">
                                {{$order->product->sub->sub_service_name}}
                            </div>
                        </td>
                        @endif


                        <td>
                            <span class="item-amount text-sm ">
                                {{$order->price}}
                            </span>
                        </td>
                        <td>
                            <span class="item-amount text-sm badge
                                @if ($order->status == 1)
                                badge-warning
                                @elseif($order->status == 2)
                                badge-danger
                                @elseif($order->status == 3)
                                badge-secondary
                                @elseif($order->status == 4)
                                badge-info
                                @elseif($order->status == 5)
                                badge-primary
                                @elseif($order->status == 6)
                                badge-success
                                @else
                                @endif
                                p-1">
                                @if ($order->status != null)
                                {{strtoupper($order->this_status->name) }}
                                @endif
                            </span>
                        </td>
                        <td>
                            <span class="item-amount text-sm ">
                                {{$order->created_at->diffForHumans()}}
                            </span>
                        </td>
                        <td>

                            <div class="item-action dropdown">
                                <a href="#" data-toggle="dropdown" class="text-muted"><i
                                        class="i-con i-con-more"><i></i></i></a>
                                <div class="dropdown-menu dropdown-menu-right bg-dark" role="menu">
                                    <a class="dropdown-item" href=" {{route('order.edit', $order->id)}}">
                                        Edit
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <form action="{{route('order.destroy', $order->id)}}" method="POST">
                                        @csrf()
                                        @method('delete')
                                        <button class="dropdown-item" type="submit">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

    <!-- ############ Main END-->
</div>
<script src="https://code.jquery.com/jquery-3.5.0.min.js"
    integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function() {
    var price, dscnt;
    $('#service').on('change', function(e) {
            var serviceID = e.target.value
            if(serviceID) {
                $.ajax({
                    url: '/api/service/'+serviceID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        $('#subservice').empty();
                        $('#subservice').append('<option selected>Select Sub Service</option>');
                        $.each(data, function(key, value) {
                            $('#subservice').append('<option value="'+ value.id +'">'+ value.sub_service_name +'</option>');
                        });
                    }
                });
            }else{
                $('#subservice').empty();
            }
        });

        $('#service').on('change', function(e) {
            var subserviceID = e.target.value
            if(subserviceID) {
                $.ajax({
                    url: '/api/subservice/'+subserviceID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        $('#product').empty();
                        $('#product').append('<option selected>Select Product</option>');
                        $.each(data, function(key, value) {
                            $('#product').append('<option value="'+ value.id +'">'+ value.product_name +'</option>');
                        });
                    }
                });
            }else{
                $('#product').empty();
            }
        });
    });

</script>

@endsection
