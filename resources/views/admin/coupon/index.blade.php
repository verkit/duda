@extends('admin.layouts.base')
@section('coupon', 'active')
@section('list-coupon', 'active')
@section('content')
<div id="content" class="flex ">
    <!-- ############ Main START-->

    <div class="page-container" id="page-container">
        <div class="page-title padding pb-0 ">
            <h2 class="text-md mb-0">Coupons</h2>
        </div>
        <div class="padding">
            @if ($message = Session::get('success'))
            <div class="alert bg-success" role="alert">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif

            <a href="{{route('coupon.create')}}" class="btn w-sm btn-primary mb-3">Add coupon</a>
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
                        {{-- <th data-checkbox="true"></th> --}}
                        <th data-sortable="true" data-field="id">No</th>
                        <th data-sortable="true">Coupon Name</th>
                        <th data-sortable="true">Code</th>
                        <th data-sortable="true">Date</th>
                        <th data-sortable="true">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($coupons as $coupon)
                    <tr>
                        {{-- <td>
                            <label class="ui-check m-0">
                                <input type="checkbox" name="id" value="{{$bank->id}}">
                                <i></i>
                            </label>
                        </td> --}}
                        <td>
                            <small class="text-muted">{{$loop->iteration}}</small>
                        </td>
                        <td>
                            <a href="{{route('coupon.edit', $coupon->id)}}"><span class="item-amount text-sm ">
                                {{$coupon->name}}
                            </span></a>

                        </td>
                        <td>
                            <span class="item-amount text-sm ">
                                {{$coupon->code}}
                            </span>
                        </td>
                        <td>
                            <span class="item-amount text-sm ">
                                {{$coupon->start}} - {{$coupon->end}}
                            </span>
                        </td>
                        <td>
                            <span class="badge
                            @if ($coupon->status == 'aktif')
                            bg-success-lt
                            @else
                            bg-danger-lt
                            @endif
                            p-1">{{$coupon->status}}</span>
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
