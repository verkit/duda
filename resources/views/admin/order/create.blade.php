@extends('admin.layouts.base')
@section('order', 'active')
@section('create-order', 'active')
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
                <button onclick="copyToClip(document.getElementById('message-info').textContent)" class="btn w-sm mb-1 btn-success">Copy text</button><br>
                <br><p id="message-info">{!! $message !!}</p>
            </div>
            @endif
            <div class="mb-3">
                <ul class="nav nav-pills" id="myTab" role="tabcustom_order">
                    <li class="nav-item">
                        <a class="nav-link active" id="order" data-toggle="tab" href="#order-tab" role="tab"
                            aria-controls="home" aria-selected="true">Standard Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom_order" data-toggle="tab" href="#custom-order" role="tab"
                            aria-controls="custom_order" aria-selected="false">Custom Order</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content mb-4">
                <div class="tab-pane fade show active" id="order-tab" role="tabpanel" aria-labelledby="order">
                    <div class="card">
                        <div class="card-header">
                            <strong>Standard order
                            </strong>
                        </div>
                        <div class="card-body">
                            <form action="{{route('order.store')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label class="text-muted" for="name">Service*</label>
                                    <select name="service" id="service" class="form-control">
                                        <option selected>Select Service</option>
                                        @foreach ($services as $item)
                                        <option value="{{$item->id}}">{{$item->service_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="text-muted" for="name">Sub Service*</label>
                                    <select name="subservice" id="subservice" class="form-control">
                                        <option selected>Select Sub Service</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="text-muted" for="name">Product*</label>
                                    <select name="product" id="product" class="form-control">
                                        <option selected>Select Product</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="text-muted" for="price">Price*</label>
                                    <input type="text" class="form-control" id="price" name="price" readonly />
                                    <!-- :value="productDetail.price" -->
                                </div>
                                <div class="form-group">
                                    <label for="coupon">Coupon</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="code" name="code"
                                            placeholder="Enter Coupon" />
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" id="check_coupon"
                                                type="button">Check</button>
                                        </div>
                                    </div>
                                    <small class="form-text" id="coupon_confirmation"></small>
                                </div>

                                <div class="form-group">
                                    <label class="text-muted" for="discount">Discount(%)</label>
                                    <input type="text" class="form-control" id="discount" name="discount" readonly />
                                </div>
                                <div class="form-group">
                                    <label class="text-muted" for="total">Total</label>
                                    <input type="text" class="form-control" id="total" name="total" readonly />
                                </div>
                                <div class="form-group">
                                    <label class="text-muted" for="link">Link*</label>
                                    <input type="text" class="form-control" id="link" name="link"
                                        placeholder="Ex. https://duda.co.id">
                                </div>
                                <div class="form-group">
                                    <label class="text-muted" for="name">Nama Lengkap*</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Ex. Arya Surya">
                                </div>
                                <div class="form-group">
                                    <label class="text-muted" for="email">Email*</label>
                                    <input type="text" class="form-control" id="email" name="email"
                                        placeholder="Ex. aryasurya@gmail.com">
                                </div>
                                <div class="form-group">
                                    <label class="text-muted" for="hp">Nomor HP*</label>
                                    <input type="text" class="form-control" id="hp" name="hp"
                                        placeholder="Ex. +628123456789">
                                </div>
                                <div class="form-group">
                                    <label class="text-muted" for="khusus">Link dan Keyword (Khusus untuk Backlink dan
                                        SEO)</label>
                                    <input type="text" class="form-control" id="khusus" name="khusus"
                                        placeholder="Page link dan keyword">
                                    <small class="text-muted">Gunakan tanda koma sebagai pemisah</small>
                                </div>
                                <div class="form-group">
                                    <label class="text-muted" for="status">Status (Opsional)</label>
                                    <select name="status" id="status" class="form-control">
                                        <option>Select status</option>
                                        @foreach ($order_statuses as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
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
                                                <button type="button" class="btn btn-white"
                                                    data-dismiss="modal">No</button>
                                                <button type="submit" class="btn btn-primary">Yes</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="custom-order" role="tabpanel" aria-labelledby="custom_order">
                    <div class="card">
                        <div class="card-header">
                            <strong>Custom order
                            </strong>
                        </div>
                        <div class="card-body">
                            <form action="{{route('customorder.store')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label class="text-muted" for="product">Product*</label>
                                    <input type="text" class="form-control" id="product" name="product" />
                                </div>
                                <div class="form-group">
                                    <label class="text-muted" for="price">Price*</label>
                                    <input type="text" class="form-control" id="price" name="price" />
                                </div>
                                <div class="form-group">
                                    <label class="text-muted" for="link">Link*</label>
                                    <input type="text" class="form-control" id="link" name="link"
                                        placeholder="Ex. https://duda.co.id">
                                </div>
                                <div class="form-group">
                                    <label class="text-muted" for="name">Nama Lengkap*</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Ex. Arya Surya">
                                </div>
                                <div class="form-group">
                                    <label class="text-muted" for="email">Email*</label>
                                    <input type="text" class="form-control" id="email" name="email"
                                        placeholder="Ex. aryasurya@gmail.com">
                                </div>
                                <div class="form-group">
                                    <label class="text-muted" for="hp">Nomor HP*</label>
                                    <input type="text" class="form-control" id="hp" name="hp"
                                        placeholder="Ex. +628123456789">
                                </div>
                                <div class="form-group">
                                    <label class="text-muted" for="khusus">Link dan Keyword (Khusus untuk Backlink dan
                                        SEO)</label>
                                    <input type="text" class="form-control" id="khusus" name="khusus"
                                        placeholder="Page link dan keyword">
                                    <small class="text-muted">Gunakan tanda koma sebagai pemisah</small>
                                </div>
                                <div class="form-group">
                                    <label class="text-muted" for="status">Status (Opsional)</label>
                                    <select name="status" id="status" class="form-control">
                                        <option>Select status</option>
                                        @foreach ($order_statuses as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#m-a-b">Submit</button>
                                <div id="m-a-b" class="modal fade" data-backdrop="true">
                                    <div class="modal-dialog animate" id="animate">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Confirmation</h5>
                                            </div>
                                            <div class="modal-body text-center p-lg">
                                                <p>Are you sure?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-white"
                                                    data-dismiss="modal">No</button>
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
            var product = $('#product').val();
            if(code) {
                $.ajax({
                    url: '/api/product/'+product+'/c/'+code,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        if(data == null){
                            $("#coupon_confirmation").addClass('text-danger').removeClass('text-success').text('Coupon is not available');
                            $('#discount').val(0);
                            fun.calculate(price, 0);
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
