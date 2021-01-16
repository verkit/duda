@extends('admin.layouts.base')
@section('news', 'active')
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
                <h2 class="text-md mb-0">Create News</h2>
            </div>
            <div class="padding">
                <form action="{{route('news.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control"
                            placeholder="Ex. Have a Good News">
                    </div>
                    <div class="form-group row">
                        <div class="col-6">
                            <label for="slug">Slug</label>
                            <input type="text" name="slug" id="slug" class="form-control"
                                placeholder="Ex. have-a-good-news">
                        </div>
                        <div class="col-6">
                            <label for="category">Category</label>
                            <select class="form-control" id="category" multiple="multiple" name="category[]">
                                @foreach ($category as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="cover">Cover</label>
                        <input type="file" class="form-control-file" id="cover" name="cover">
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.12/css/select2.min.css">
<script src="https://code.jquery.com/jquery-3.5.0.min.js"
    integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.12/js/select2.min.js"></script>
<script>
    $("#category").select2({
    tags: true,
    tokenSeparators: [',', ' '],
    placeholder: 'Choose category'
})
</script>
@endsection
