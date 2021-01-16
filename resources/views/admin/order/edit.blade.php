@extends('admin.layouts.base')
@section('order', 'active')
@section('list-order', 'active')
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
            @if ($message = Session::get('success'))
            <div class="alert bg-primary" role="alert">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <button onclick="copyToClip(document.getElementById('message-info').textContent)"
                    class="btn w-sm mb-1 btn-success">Copy text</button><br>
                <br>
                <p id="message-info">{!! $message !!}</p>
            </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <strong>Edit order
                    </strong>
                </div>
                <div class="card-body">
                    <form action="{{route('order.update', $order->id)}}" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label class="text-muted" for="name">Service*</label>
                            <select name="service" id="service" class="form-control">
                                @foreach ($services as $item)
                                @if ($order->product->sub->service->id == $item->id)
                                <option value="{{$item->id}}" selected>{{$item->service_name}}</option>
                                @else
                                <option value="{{$item->id}}">{{$item->service_name}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="text-muted" for="name">Sub Service*</label>
                            <select name="subservice" id="subservice" class="form-control">
                                <option selected value="{{$order->product->sub->id}}">
                                    {{$order->product->sub->sub_service_name}}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="text-muted" for="name">Product*</label>
                            <select name="product" id="product" class="form-control">
                                <option selected value="{{$order->id_product}}">{{$order->product->product_name}}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="text-muted" for="price">Price*</label>
                            <input type="text" class="form-control" id="price" name="price"
                                value="{{$order->product->price}}" readonly />
                            <!-- :value="productDetail.price" -->
                        </div>
                        <div class="form-group">
                            <label for="coupon">Coupon</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="code" name="code" value="
                                    @if ($order->id_coupon != null)
                                    {{$order->coupon->code}}
                                    @endif" placeholder="Enter Coupon" />
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" id="check_coupon"
                                        type="button">Check</button>
                                </div>
                            </div>
                            <small class="form-text" id="coupon_confirmation"></small>
                        </div>

                        <div class="form-group">
                            <label class="text-muted" for="discount">Discount(%)</label>
                            <input type="text" class="form-control" id="discount" name="discount"
                                value=" @if ($order->id_coupon != null)
                                {{$order->coupon->discount}}
                                @endif" readonly />
                        </div>
                        <div class="form-group">
                            <label class="text-muted" for="total">Total</label>
                            <input type="text" class="form-control" id="total" name="total" value="{{$order->price}}"
                                readonly />
                        </div>
                        <div class="form-group">
                            <label class="text-muted" for="link">Link*</label>
                            <input type="text" class="form-control" id="link" name="link" value="{{$order->link}}"
                                placeholder="Ex. https://duda.co.id">
                        </div>
                        <div class="form-group">
                            <label class="text-muted" for="name">Nama Lengkap*</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$order->name}}"
                                placeholder="Ex. Arya Surya">
                        </div>
                        <div class="form-group">
                            <label class="text-muted" for="email">Email*</label>
                            <input type="text" class="form-control" id="email" name="email" value="{{$order->email}}"
                                placeholder="Ex. aryasurya@gmail.com">
                        </div>
                        <div class="form-group">
                            <label class="text-muted" for="hp">Nomor HP*</label>
                            <input type="text" class="form-control" id="hp" name="hp" value="{{$order->hp}}"
                                placeholder="Ex. +628123456789">
                        </div>
                        <div class="form-group">
                            <label class="text-muted" for="khusus">Link dan Keyword (Khusus untuk Backlink dan
                                SEO)</label>
                            <input type="text" class="form-control" id="khusus" name="khusus"
                                placeholder="Page link dan keyword" value="{{$order->links_keyword}}">
                            <small class="text-muted">Gunakan tanda koma sebagai pemisah</small>
                        </div>
                        <div class="form-group">
                            <label class="text-muted" for="status">Status (Opsional)</label>
                            <select name="status" id="status" class="form-control">
                                @foreach ($order_statuses as $item)
                                @if ($order->status == $item->id)
                                <option value="{{$item->id}}" selected>{{$item->name}}</option>
                                @else
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                @endif
                                @endforeach
                            </select>
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
<script src="https://code.jquery.com/jquery-3.5.0.min.js"
    integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>

<link rel="stylesheet" href="{{asset('css/amsify.suggestags.css')}}">
<script src="{{asset('js/jquery.amsify.suggestags.js')}}"></script>

<script type="text/javascript">
    $('input[name="khusus"]').amsifySuggestags();

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

        $('#product').on('change', function(e) {
            var productID = e.target.value
            if(productID) {
                $.ajax({
                    url: '/api/product/'+productID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        price = data.price
                        $('#price').val(data.price);
                        fun.calculate(price, 0);
                    }
                });
            }else{
                $('#price').empty();
            }
        });

        $('#check_coupon').click(function(){
            var code = $('#code').val();
            if(code) {
                $.ajax({
                    url: '/api/coupon/'+code,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        if(data == null){
                            $("#coupon_confirmation").addClass('text-danger').removeClass('text-success').text('Coupon is not available');
                        } else {
                            dscnt = data.discount
                            $('#discount').val(data.discount);
                            $("#coupon_confirmation").addClass('text-success').removeClass('text-danger').text('Coupon is available');
                            fun.calculate(price, dscnt);
                        }
                    },
                    error: function (request, status, error) {
                        alert(request.responseText);
                    }
                });
            }else{
                $('#price').empty();
            }
        })

        var fun = {
        calculate: function(price, discount){
            if(discount == 0) {
                total = price
                $('#total').val(total);
            }else{
                total = price - (price*discount/100)
                $('#total').val(total);
            }
        }
    }
    });

    //copy text
    function copyToClip(str) {
        function listener(e) {
            e.clipboardData.setData("text/html", str);
            e.clipboardData.setData("text/plain", str);
            e.preventDefault();
        }
        document.addEventListener("copy", listener);
        document.execCommand("copy");
        document.removeEventListener("copy", listener);
    };

</script>

@endsection
