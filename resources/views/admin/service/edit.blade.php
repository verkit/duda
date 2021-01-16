@extends('admin.layouts.base')
@section('service', 'active')
@section('list-service', 'active')
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
            <div class="alert bg-success" role="alert">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif
            <div class="mb-3">
                <ul class="nav nav-pills" id="myTab" role="tabsub_service">
                    <li class="nav-item">
                        <a class="nav-link active" id="service-tab" data-toggle="tab" href="#service" role="tab"
                            aria-controls="home" aria-selected="true">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="sub_service-tab" data-toggle="tab" href="#sub_service" role="tab"
                            aria-controls="sub_service" aria-selected="false">Sub Service</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content mb-4">
                <div class="tab-pane fade show active" id="service" role="tabpanel" aria-labelledby="service-tab">
                    <div class="card">
                        <div class="card-header">
                            <strong>Edit service
                            </strong>
                        </div>
                        <div class="card-body">
                            <form action="{{route('service.update', $service->id)}}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="form-group">
                                    <label class="text-muted" for="name">Service Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Enter service name" value="{{$service->service_name}}">
                                </div>
                                <div class="form-group">
                                    <label class="text-muted" for="slug">Slug</label>
                                    <input type="text" class="form-control" id="slug" name="slug"
                                        placeholder="Enter slug" value="{{$service->slug}}">
                                </div>
                                <div class="form-group">
                                    <img src="{{url('/storage/images/'.$service->cover)}}" alt="">
                                </div>
                                <div class="form-group">
                                    <label class="text-muted" for="cover">Cover</label>
                                    <div class="input-group mb-3">
                                        <div class="custom-file">
                                            <input type="file" class="form-control-file" id="cover" name="cover">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="text-muted" for="desc">Description</label>
                                    <textarea class="form-control" rows="7"
                                        name="desc">{{$service->description}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label class="text-muted" for="account_name">Status</label>
                                    <div class="mt-2 mb-2">
                                        <div class="form-check form-check-inline">
                                            <label class="ui-check ui-check-color">
                                                <input type="radio" name="status" value="aktif" @if ($service->status
                                                =="aktif")
                                                checked
                                                @endif>
                                                <i class="bg-success"></i>
                                            </label>
                                            <label class="form-check-label" for="aktif">Aktif</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="ui-check ui-check-color">
                                                <input type="radio" name="status" value="tidak aktif"
                                                    @if($service->status=="tidak aktif")
                                                checked
                                                @endif>
                                                <i class="bg-danger"></i>
                                            </label>
                                            <label class="form-check-label" for="tidakaktif">Tidak aktif</label>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#m-a-a">Update</button>
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
                <div class="tab-pane fade" id="sub_service" role="tabpanel" aria-labelledby="sub_service-tab">
                    <div id="toolbar">
                        <button id="add" type="button" class="btn btn-icon btn-white btn-block i-con-h-a mr-1 blue"
                            data-toggle="modal" data-target="#m"><i data-toggle="tooltip" title="Add new sub service"
                                class="i-con i-con-plus b-2x"><i></i></i></button>
                    </div>
                    <table class="table table-theme v-middle" data-plugin="bootstrapTable" id="table"
                        data-toolbar="#toolbar" data-search="true" data-search-align="left" data-show-columns="true"
                        data-show-export="true" data-detail-view="false" data-mobile-responsive="true"
                        data-pagination="true" data-page-list="[10, 25, 50, 100, ALL]">
                        <thead>
                            <tr>
                                <th data-sortable="true" data-field="id">No</th>
                                <th data-sortable="true">Service</th>
                                <th data-sortable="true">Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subservices as $sub)
                            <tr>
                                <td>
                                    <small class="text-muted">{{$loop->iteration}}</small>
                                </td>
                                <td class="flex">
                                    <a href="{{route('service.sub.edit', ['id'=>$service->id,'sub'=>$sub->id] )}}"
                                        class="item-author ">{{$sub->sub_service_name}}</a>
                                    <div class="item-except text-muted h-1x">
                                        @if ($sub->description == null)
                                        No sub
                                        @else
                                        {{$sub->description}}
                                        @endif
                                    </div>
                                </td>
                                <td>
                                    <span class="badge
                                    @if ($sub->status == 'aktif')
                                    bg-success-lt
                                    @else
                                    bg-danger-lt
                                    @endif
                                    p-1">{{$sub->status}}</span>
                                </td>
                                <td>

                                    <div class="item-action dropdown">
                                        <a href="#" data-toggle="dropdown" class="text-muted"><i
                                                class="i-con i-con-more"><i></i></i></a>
                                        <div class="dropdown-menu dropdown-menu-right bg-dark" role="menu">
                                            <a class="dropdown-item"
                                                href=" {{route('service.sub.edit', ['id'=>$service->id,'sub'=>$sub->id] )}}">
                                                Edit
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <form
                                                action="{{route('service.sub.destroy', ['id'=>$service->id,'sub'=>$sub->id])}}"
                                                method="POST">
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
        </div>

    </div>

    <!-- ############ Main END-->
    <!-- .modal -->
    <div id="m" class="modal" data-backdrop="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add new sub service</h5>
                </div>
                <div class="modal-body p-lg">
                    <form action="{{route('service.sub.store', $service->id)}}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="text-muted" for="name">Sub Service Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Enter sub service name">
                        </div>
                        <div class="form-group">
                            <label class="text-muted" for="desc">Description</label>
                            <textarea class="form-control" rows="7" name="description"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="text-muted" for="account_name">Status</label>
                            <div class="mt-2 mb-2">
                                <div class="form-check form-check-inline">
                                    <label class="ui-check ui-check-color">
                                        <input type="radio" name="status" value="aktif">
                                        <i class="bg-success"></i>
                                    </label>
                                    <label class="form-check-label" for="aktif">Aktif</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="ui-check ui-check-color">
                                        <input type="radio" name="status" value="tidak aktif">
                                        <i class="bg-danger"></i>
                                    </label>
                                    <label class="form-check-label" for="tidakaktif">Tidak aktif</label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div>
    </div>
    <!-- / .modal -->
</div>
@endsection
