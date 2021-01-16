@extends('admin.layouts.base')
@section('website', 'active')
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
            <div class="page-title padding pb-0 ">
                <h2 class="text-md mb-0">Create Notification</h2>
            </div>
            <div class="padding">
                <form action="{{route('web.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control"
                            placeholder="Ex. We have new product">
                    </div>
                    <div class="mb-3 card">
                        <textarea type="text" data-plugin="summernote" data-option="{}" name="content"></textarea>
                    </div>
                    <div class="checkbox">
                        <label class="ui-check">
                            <input type="checkbox" value="0" name="draft">
                            <i class="dark-white"></i>
                            Publish?
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary w-sm">Submit</button>
                </form>
            </div>
        </div>
        <!-- ############ Main END-->
    </div>
</div>
@endsection
