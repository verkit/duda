@extends('admin.layouts.base')
@section('product', 'active')
@section('list-product', 'active')
@section('content')
<div id="content" class="flex ">
    <!-- ############ Main START-->

    <div class="page-container" id="page-container">
        <div class="page-title padding pb-0 ">
            <h2 class="text-md mb-0">Products</h2>
        </div>
        <div class="padding">
            @if ($message = Session::get('success'))
            <div class="alert bg-success" role="alert">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif
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
                        <th data-sortable="true">Product</th>
                        <th data-sortable="true">Sub Service</th>
                        <th data-sortable="true">Price</th>
                        <th data-sortable="true">Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td>
                            <small class="text-muted">{{$loop->iteration}}</small>
                        </td>
                        <td class="flex">
                            <a href="{{route('product.edit', $product->id)}}"
                                class="item-author ">{{$product->product_name}}</a>
                            <div class="item-except text-muted h-1x">
                                @if ( $product->description == null)
                                No description
                                @else
                                {{$product->description}}
                                @endif
                            </div>
                        </td>
                        <td>
                            <span class="item-amount text-sm ">
                                {{$product->sub->sub_service_name}}
                            </span>
                        </td>
                        <td>
                            <span class="item-amount text-sm ">
                                {{$product->price}}
                            </span>
                        </td>
                        <td>
                            <span class="item-amount text-sm ">
                                <span class="badge
                                @if ($product->status == 'aktif')
                                bg-success-lt
                                @else
                                bg-danger-lt
                                @endif
                                p-1">{{$product->status}}</span>
                            </span>
                        </td>
                        <td>

                            <div class="item-action dropdown">
                                <a href="#" data-toggle="dropdown" class="text-muted"><i
                                        class="i-con i-con-more"><i></i></i></a>
                                <div class="dropdown-menu dropdown-menu-right bg-dark" role="menu">
                                    <a class="dropdown-item" href=" {{route('product.edit', $product->id)}}">
                                        Edit
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <form action="{{route('product.destroy', $product->id)}}" method="POST">
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
@endsection
