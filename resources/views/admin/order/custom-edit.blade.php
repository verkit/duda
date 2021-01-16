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
                    <form action="{{route('custom.order.update', $order->id)}}" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label class="text-muted" for="product">Product*</label>
                            <input type="text" class="form-control" id="product" name="product"
                            value="{{$order->custom_product}}" />
                        </div>
                        <div class="form-group">
                            <label class="text-muted" for="price">Price*</label>
                            <input type="text" class="form-control" id="price" name="price"
                                value="{{$order->price}}" />
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
<script>
    $('input[name="khusus"]').amsifySuggestags();
</script>
@endsection
