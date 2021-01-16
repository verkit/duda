@extends('admin.layouts.base')
@section('dashboard', 'active')
@section('content')
<div id="content" class="flex ">
    <!-- ############ Main START-->

    <div class="page-container" id="page-container">
        <div class="page-title padding pb-0 ">
            <h2 class="text-md mb-0">Dashboard</h2>
        </div>
        <div class="padding">
            <div class="row row-sm">
                <div class="col-md-12 col-lg-4 col-xl-3">
                    <div class="row row-sm">
                        <div class="col-lg-12 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <span class="h3" data-plugin="countTo" data-option="{
                        from: 0,
                        to: {{$orderByThisMonth->count()}},
                        refreshInterval: 1,
                        formatter: function (value, options) {
                          return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
                        }
                        }"></span>
                                        <div class="text-muted mt-2 text-sm">Total order bulan ini</div>
                                    </div>
                                    <button
                                        class="btn btn-sm w-100 btn-rounded btn-danger text-align-auto i-con-h-a mb-2"
                                        onclick="window.location.href='{{route('order.create')}}'">
                                        <i class="i-con i-con-arrow-right float-right"><i></i></i>
                                        Buat order baru
                                    </button>
                                </div>
                                {{-- <div class="card-body b-t">
                                    <div class="row no-gutters">
                                        <div class="col">
                                            <small class="text-muted">Website: 75%</small>
                                            <div class="progress my-2" style="height:3px;">
                                                <div class="progress-bar bg-primary" style="width: 45%"></div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <small class="text-muted">Admin: 25%</small>
                                            <div class="progress my-2" style="height:3px;">
                                                <div class="progress-bar bg-warning" style="width: 35%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-6">
                            <div class="card">
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <span class="text-md">Cari invoice</span>
                                        <span class="flex"></span>
                                    </div>
                                    <form action="{{route('payment.find')}}" method="POST">
                                        @csrf
                                        <input type="text" class="form-control" placeholder="213990" name="invoice">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-8 col-xl-9">
                    <div class="block px-4 py-3">
                        <div class="row">
                            <div class="col-lg-3 col-6">
                                <div class="d-flex align-items-center i-con-h-a my-1">
                                    <div>
                                        <span class="avatar w-40 b-a b-2x">
                                            <i class="i-con i-con-shop b-2x text-danger"><i></i></i>
                                        </span>
                                    </div>
                                    <div class="mx-3">
                                        <a href="" class="d-block ajax"><strong>{{$order->count()}}</strong></a>
                                        <small class="text-muted">Total order</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="d-flex align-items-center i-con-h-a my-1">
                                    <div>
                                        <span class="avatar w-40 b-a b-2x">
                                            <i class="i-con i-con-history b-2x text-primary"><i></i></i>
                                        </span>
                                    </div>
                                    <div class="mx-3">
                                        <a href=""
                                            class="d-block ajax"><strong>{{$order->where('status', '5')->count()}}</strong></a>
                                        <small class="text-muted">Diproses</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="d-flex align-items-center i-con-h-a my-1">
                                    <div>
                                        <span class="avatar w-40 b-a b-2x">
                                            <i class="i-con i-con-users b-2x text-info"><i></i></i>
                                        </span>
                                    </div>
                                    <div class="mx-3">
                                        <a href=""
                                            class="d-block ajax"><strong>{{$order->where('status', '6')->count()}}</strong></a>
                                        <small class="text-muted">Selesai</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="d-flex align-items-center i-con-h-a my-1">
                                    <div>
                                        <span class="avatar w-40 b-a b-2x">
                                            <i class="i-con i-con-mail b-2x text-success"><i></i></i>
                                        </span>
                                    </div>
                                    <div class="mx-3">
                                        <a href=""
                                            class="d-block ajax"><strong>{{$order->where('status', '1')->count()}}</strong></a>
                                        <small class="text-muted">Pending</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-sm">
                        <div class="col-md-8">
                            <div class="card p-4">
                                <div class="pb-4">
                                    <div class="d-flex mb-3">
                                        <span class="text-md">Order</span>
                                        <span class="flex"></span>
                                    </div>
                                </div>
                                <div style="height: 295px">
                                    <canvas id="order-line-bar"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="p-4">
                                    <p><strong>History Order</strong></p>
                                    <div style="overflow-y: scroll; max-height: 320px;">
                                        <table class="table table-theme v-middle m-0">
                                            <tbody>
                                                @foreach ($order->take(10) as $item)
                                                <tr class="v-middle" data-id="15">
                                                    <td class="flex">
                                                        <a target="_blank" href="
                                                            @if ($item->id_product == null)
                                                            {{route('customorder.edit', $item->id)}}
                                                            @else
                                                            {{route('order.edit', $item->id)}}
                                                            @endif
                                                        "
                                                            class="item-title text-color h-1x">{{$item->product->product_name}}</a>
                                                        <div class="item-except text-muted h-1x">
                                                            #{{$item->invoice}}
                                                        </div>
                                                        @if ($item->payment->status == "accepted")
                                                        <div class="item-except text-success h-1x">
                                                            {{$item->payment->status}}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="item-amount text-sm ">
                                                            <label class="ui-check">
                                                                <input type="radio" checked="">
                                                                <i class="bg-success"></i>
                                                            </label>
                                                        </span>
                                                    </td>
                                                    @elseif ($item->payment->status == "pending")
                                                    <div class="item-except text-primary h-1x">
                                                        {{$item->payment->status}}
                                                    </div>
                                                    </td>
                                                    <td>
                                                        <span class="item-amount text-sm ">
                                                            <label class="ui-check">
                                                                <input type="radio" checked="">
                                                                <i class="bg-primary"></i>
                                                            </label>
                                                        </span>
                                                    </td>
                                                    @elseif ($item->payment->status == "refund")
                                                    <div class="item-except text-warning h-1x">
                                                        {{$item->payment->status}}
                                                    </div>
                                                    </td>
                                                    <td>
                                                        <span class="item-amount text-sm ">
                                                            <label class="ui-check">
                                                                <input type="radio" checked="">
                                                                <i class="bg-warning"></i>
                                                            </label>
                                                        </span>
                                                    </td>
                                                    @else
                                                    <div class="item-except text-danger h-1x">
                                                        {{$item->payment->status}}
                                                    </div>
                                                    </td>
                                                    <td>
                                                        <span class="item-amount text-sm ">
                                                            <label class="ui-check">
                                                                <input type="radio" checked="">
                                                                <i class="bg-danger"></i>
                                                            </label>
                                                        </span>
                                                    </td>
                                                    @endif
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
            </div>
        </div>
    </div>

    <!-- ############ Main END-->
</div>
@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
{{-- <canvas id="myChart" width="400" height="400"></canvas> --}}
<script>
var ctx = document.getElementById('order-line-bar').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
            labels: [
                    @foreach ($month as $item)
                        '{{$item}}',
                    @endforeach
                    ],
            datasets: [
              {
                  label: 'Terbayar',
                  type: 'line',
                  data: [
                    @foreach ($orderPaidByMonth as $item)
                        '{{$item}}',
                    @endforeach
                    ],
                  fill: true,
                  backgroundColor: hexToRGB(theme.color.success, 0.2),
                  borderColor: hexToRGB(theme.color.success, 1),
                  borderWidth: 2,
                  borderJoinStyle: 'miter',
                  pointBorderColor: hexToRGB(theme.color.success, 1),
                  pointBackgroundColor: hexToRGB(theme.color.success, 1),
                  pointBorderWidth: 2,
                  pointRadius: 3
              },
              {
                  label: 'Masuk',
                  type: 'bar',
                  data: [
                    @foreach ($orderByMonth as $item)
                        '{{$item}}',
                    @endforeach
                    ],
                  backgroundColor: hexToRGB(theme.color.primary, 1),
                  borderColor: hexToRGB(theme.color.primary, 1),
                  borderWidth: 2,
                  borderJoinStyle: 'miter',
              }
            ]
        },
        options: {
          scales: {
            xAxes: [{
              barPercentage: 0.5,
              categoryPercentage: 0.5
            }]
          }
        }
});
</script>
@endsection
