@extends('backend.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                    Create Up comming AMA
                </div>
                <div class="card-body card-block">
                    <form action="{{ route('alldone.update',$updateData->id) }}" method="post"
                        enctype="multipart/form-data" class="form-horizontal">
                        @csrf
                        @method('put')
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Static</label></div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="title" name="title" value="{{ $updateData->title }}"
                                    placeholder="Text" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="image" class=" form-control-label">File
                                    input</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="image" name="image"
                                    class="form-control-file"></div>
                        </div>
                        <div class="mt-2 mb-4"><img src="{{asset('images/'.$updateData->image)}}" height="130px">
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