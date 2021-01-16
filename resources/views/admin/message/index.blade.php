@extends('admin.layouts.base')
@section('message', 'active')
@section('content')
<div id="content" class="flex ">
    <!-- ############ Main START-->

    <div class="page-container" id="page-container">
        <!-- ############ Main START-->

        @if ($message = Session::get('success'))
        <div class="alert bg-success" role="alert">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
        @endif

        <div class="d-flex h-100 padding">
            <div class="d-flex flex h-100 block m-0">
                <div class="aside-deck hide" id="mail-deck">
                    <div class="card card-origin alert p-0 m-0 b-a hide">
                        <div class="card-header d-flex align-items-center bg-body">
                            <div class="flex h-1x mx-1 mail-to">New mail</div>
                            <div class="ml-auto no-wrap">
                                <button class="btn btn-sm btn-link btn-icon no-shadow i-con-h-a" data-toggle="tooltip"
                                    data-placement="top" title="Send">
                                    <span>
                                        <i class="i-con i-con-arrow-right"><i></i></i>
                                    </span>
                                </button>
                                <button class="btn btn-sm btn-link btn-icon no-shadow text-muted i-con-h-a"
                                    data-toggle-class="card-hide-body" data-target=".card" data-target-closest="true">
                                    <i class="i-con i-con-minus"></i>
                                </button>

                                <button class="btn btn-sm btn-link btn-icon no-shadow text-muted i-con-h-a"
                                    data-dismiss="alert">
                                    <i class="i-con i-con-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="mb-2">
                                    <input type="text" class="form-control" placeholder="Recipients">
                                </div>
                                <div>
                                    <input type="text" class="form-control" placeholder="Subject">
                                </div>
                                <div class="note-editor-inline">
                                    <textarea class="form-control summernote">
		                      </textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex" id="content-body">
                    <div class="d-flex flex-column flex" id="mail-list" data-plugin="mail">
                        <div class="p-3 b-b">
                            <div class="toolbar ">
                                <button class="btn btn-sm btn-white i-con-h-a" data-toggle="tooltip" title="Trash"
                                    id="btn-trash">
                                    <i class="i-con i-con-trash text-muted"><i></i></i>
                                </button>
                                <button class="btn btn-sm btn-white i-con-h-a sort " data-sort="item-title"
                                    data-toggle="tooltip" title="Sort">
                                    <i class="i-con i-con-sort text-muted"><i></i></i>
                                </button>
                                <form class="flex">
                                    <div class="input-group">
                                        <input type="text" class="form-control form-control-sm search"
                                            placeholder="Search" required>
                                        <span class="input-group-append">
                                            <button class="btn btn-white no-shadow btn-sm i-con-h-a" type="button">
                                                <i class="i-con i-con-search text-muted"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                                <button data-toggle="modal" data-target="#content-aside" data-modal
                                    class="btn btn-sm btn-white d-md-none i-con-h-a">
                                    <i class="i-con i-con-nav text-muted"><i></i></i>
                                </button>
                            </div>
                        </div>
                        <div class="scroll-y">
                            @foreach ($messages as $item)
                            @if ($messages == null)
                            <div class="no-result hide">
                                <div class="p-4 text-center">
                                    No Results
                                </div>
                            </div>
                            @else
                            <div class="list list-row hide">
                                <div class="list-item">
                                    <div>
                                        <label class="ui-check m-0 ">
                                            <input type="checkbox" name="id" value="{{ $item->id}}">
                                            <i></i>
                                        </label>
                                    </div>
                                    <div>
                                        <a href="{{route('message.show', $item->id)}}">
                                            <span class="w-40 avatar circle bg-warning-lt" data-toggle-class="loading">
                                                {{$item->name[0]}}
                                            </span>
                                        </a>
                                    </div>
                                    <div class="flex">
                                        <a href="{{route('message.show', $item->id)}}"
                                            class="item-title text-color h-1x">{{$item->subject}}</a>

                                        <div class="item-except text-muted h-1x">
                                            {{$item->message}}
                                        </div>

                                    </div>
                                    <div>
                                        <span class="badge
                                        @if ($item->status == 'responded')
                                        bg-success-lt
                                        @else
                                        bg-danger-lt
                                        @endif
                                        p-1">{{$item->status}}</span>
                                    </div>
                                    <div class="no-wrap">
                                        <div class="item-date text-muted text-sm d-none d-md-block">
                                            {{$item->created_at->diffForHumans()}}</div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                        <div class="p-3 b-t mt-auto">
                            <div class="d-flex align-items-center">
                                <div class="flex d-flex flex-row">
                                    <a href="#" class="btn btn-xs white no-border pager-prev hide">
                                        <i class="fa fa-angle-left"></i>
                                    </a>
                                    <div class="pagination pagination-xs">
                                    </div>
                                    <a href="#" class="btn btn-xs white no-border pager-next hide">
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                                <div>
                                    <span class="text-muted">Total:</span>
                                    <span id="count"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- ############ Main END-->

    </div>
</div>
@endsection
