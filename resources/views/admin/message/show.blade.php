@extends('admin.layouts.base')
@section('message', 'active')
@section('content')
<div id="content" class="flex ">
    <!-- ############ Main START-->

    <div class="page-container" id="page-container">
        <div class="d-flex h-100 padding">
            <div class="d-flex flex h-100 block m-0">
                <div class="d-flex flex" id="content-body">
                    <div class="d-flex flex-column flex white bg">
                        {{-- <div class="navbar b-b">
                            <div class="b-r d-none d-md-inline">
                                <img class="circle w-32" src="../assets/img/a1.jpg" alt=".">
                                <span class="mx-2">
                                    <span class="text-muted">from </span>
                                    <a href="#">{{$message->name}}</a>
                                    <span class="text-xs text-muted">on
                                        {{$message->created_at->isoFormat('LLLL')}}</span>
                                </span>
                            </div>
                            <a href="app.mail.html" class="d-md-none btn-go-back btn btn-sm bg-white i-con-h-a">
                                <i class="i-con i-con-arrow-left text-muted"><i></i></i>
                            </a>
                            <span class="flex"></span>
                            <ul class="nav no-border">
                                <li class="nav-item">
                                    <a class="list-group-item i-con-h-a bg-success-lt">
                                        <i class="mr-2 i-con i-con-ok"><i class="i-con-border"></i></i>
                                        Confirmed
                                    </a>
                                </li>
                            </ul>
                        </div> --}}
                        <div class="scroll-y">
                            <div class="p-3 px-md-5 py-md-4">
                                <div class="navbar b-b" style="padding:0; padding-bottom:18px">
                                    <div class="b-r d-none d-md-inline">
                                        <img class="circle w-32" src="../assets/img/a1.jpg" alt=".">
                                        <span class="mx-2">
                                            <span class="text-muted">from </span>
                                            <a href="#">{{$message->name}}</a>
                                            <span class="text-xs text-muted">on
                                                {{$message->created_at->isoFormat('LLLL')}}</span>
                                        </span>
                                    </div>
                                    {{-- <a href="app.mail.html" class="d-md-none btn-go-back btn btn-sm bg-white i-con-h-a">
                                        <i class="i-con i-con-arrow-left text-muted"><i></i></i>
                                    </a> --}}
                                    <span class="flex"></span>
                                    <ul class="nav no-border">
                                        <li class="nav-item">
                                            @if ($message->status == "pending")
                                            <form action="{{route('message.responded', $message->id)}}" method="POST">
                                                @csrf()
                                                @method('put')
                                                <button class="list-group-item i-con-h-a bg-success-lt" type="submit">
                                                    <i class="mr-2 i-con i-con-ok"></i>
                                                Confirmed
                                                </button>
                                            </form>
                                            @else
                                            <form action="{{route('message.pending', $message->id)}}" method="POST">
                                                @csrf()
                                                @method('put')
                                                <button class="list-group-item i-con-h-a bg-warning-lt" type="submit">
                                                    <i class="mr-2 i-con i-con-warning"></i>
                                                Pending
                                                </button>
                                            </form>
                                            @endif
                                        </li>
                                    </ul>
                                </div>
                                <div class="py-md-3 px-md-2">
                                <h2 class="mb-3">{{$message->subject}}</h2>
                                <div>
                                    <p>{{$message->message}}</p>
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
