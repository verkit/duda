@extends('admin.layouts.base')
@section('payment', 'active')
@section('content')
<div id="content" class="flex ">
    <!-- ############ Main START-->

    <div class="page-container" id="page-container">
        <div class="page-title padding pb-0 ">
            <h2 class="text-md mb-0">Payment</h2>
        </div>
        <div class="padding col-6">
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
                        <th data-sortable="true">Invoice</th>
                        <th data-sortable="true">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($payments as $item)
                    <tr>
                        <td>
                            <small class="text-muted">{{$loop->iteration}}</small>
                        </td>
                        <td>
                            <span class="item-amount">
                                <a href="{{route('payment.show', $item->id)}}">
                                    {{$item->invoice}}
                                </a>
                            </span>
                        </td>
                        <td>
                            <span class="item-amount">
                                <span class="badge
                                @if ($item->status == 'accepted')
                                bg-success-lt
                                @elseif($item->status == 'pending')
                                bg-danger-lt
                                @elseif($item->status == 'refund')
                                bg-warning-lt
                                @else
                                bg-dark-lt
                                @endif
                                p-1">{{strtoupper($item->status)}}</span>
                            </span>
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
