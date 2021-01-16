@extends('admin.layouts.base')
@section('admin', 'active')
@section('content')
<div id="content" class="flex ">
    <!-- ############ Main START-->

    <div class="page-container" id="page-container">
        <div class="page-title padding pb-0 ">
            <h2 class="text-md mb-0">Admin account</h2>
        </div>
        <div class="padding">
            @if ($message = Session::get('success'))
            <div class="alert bg-success" role="alert">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif

            <a href="{{route('user.create')}}" class="btn w-sm btn-primary mb-3">Add account</a>
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
                        <th data-sortable="true">Name</th>
                        <th data-sortable="true">Email</th>
                        <th data-sortable="true">Role</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        {{-- <td>
                            <label class="ui-check m-0">
                                <input type="checkbox" name="id" value="{{$user->id}}">
                                <i></i>
                            </label>
                        </td> --}}
                        <td>
                            <small class="text-muted">{{$loop->iteration}}</small>
                        </td>
                        <td>
                            <span class="item-amount text-sm ">
                                {{$user->name}}
                            </span>
                        </td>
                        <td>
                            <span class="item-amount text-sm ">

                                {{$user->email}}
                            </span>
                        </td>
                        <td>
                            <span class="item-amount text-sm ">
                                {{$user->role}}
                            </span>
                        </td>
                        <td>

                            <div class="item-action dropdown">
                                <a href="#" data-toggle="dropdown" class="text-muted"><i
                                        class="i-con i-con-more"><i></i></i></a>
                                <div class="dropdown-menu dropdown-menu-right bg-dark" role="menu">
                                    <a class="dropdown-item"  href=" {{route('user.edit', $user->id)}}" >
                                        Edit
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <form action="{{route('user.destroy', $user->id)}}" method="POST">
                                        @csrf()
                                        @method('delete')
                                        <button class="dropdown-item" type="submit">
                                            Delete item
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
