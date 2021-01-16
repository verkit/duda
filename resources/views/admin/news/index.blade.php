@extends('admin.layouts.base')
@section('news', 'active')
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

            {{-- <div id="toolbar">
                <button id="trash" class="btn btn-icon btn-white i-con-h-a mr-1"><i
                        class="i-con i-con-trash text-muted"><i></i></i></button>
            </div> --}}
            <a href="{{route('news.create')}}" class="btn btn-primary mb-3">Create News</a>
            <table class="table table-theme v-middle" data-plugin="bootstrapTable" id="table" data-toolbar="#toolbar"
                data-search="true" data-search-align="left" data-show-columns="true" data-show-export="true"
                data-detail-view="false" data-mobile-responsive="true" data-pagination="true"
                data-page-list="[10, 25, 50, 100, ALL]">
                <thead>
                    <tr>
                        <th data-sortable="true" data-field="id">No</th>
                        <th data-sortable="true">Title</th>
                        <th data-sortable="true">Category</th>
                        <th data-sortable="true">Date</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($news as $item)
                    <tr>
                        <td>
                            <small class="text-muted">{{$loop->iteration}}</small>
                        </td>
                        <td>
                            <a class="item-invoice h6" href="
                            {{route('news.edit', $item->id)}}
                            ">
                                {{$item->title}}
                            </a>
                            @if ($item->isDraft== 1)
                            <span class="text-sm text-danger"><i>Draft</i></span>
                            @endif
                        </td>
                        <td>
                            <span class="item-product">
                                @foreach ($item->category as $cat)
                                <span class="badge bg-info-lt">{{$cat->name}}</span>
                                @endforeach
                            </span>
                        </td>
                        <td>
                            <span>
                                {{$item->updated_at->format('H:i:s, d M Y')}}
                            </span>
                        </td>
                        <td>
                            <div class="item-action dropdown">
                                <a href="#" data-toggle="dropdown" class="text-muted"><i
                                        class="i-con i-con-more"><i></i></i></a>
                                <div class="dropdown-menu dropdown-menu-right bg-dark" role="menu">
                                    <a class="dropdown-item" href=" {{route('news.edit', $item->id)}}">
                                        Edit
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <form action="{{route('news.destroy', $item->id)}}" method="POST">
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
