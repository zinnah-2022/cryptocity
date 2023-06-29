@extends('backend.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Create Up comming AMA
                </div>
                <div class="card-body card-block">
                    <form action="{{ route('amarecap.update',$updateData->id ) }}" method="post"
                        enctype="multipart/form-data" class="form-horizontal">
                        @csrf
                        @method('put')
                        <div class="row form-group">
                            <div class="col col-md-1"><label class=" form-control-label">Static</label></div>
                            <div class="col-12 col-md-11">
                                <input type="text" id="text-input" value="{{ $updateData->title }}" name="title"
                                    placeholder="Text" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-12 col-md-12">
                                <textarea class="ckeditor form-control" rows="26"
                                    name="body">{{ $updateData->body }}</textarea>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="image" class=" form-control-label">File
                                    input</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="file-input" name="image"
                                    class="form-control-file"></div>
                        </div>
                        <div class="mt-2 mb-4"><img src="{{asset('images/'.$updateData->image)}}"
                                height="130px">
                        </div>

                        <button type="submit" class=" btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
