@extends('backend.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Setting
                </div>
                <div class="card-body card-block">
                    <form action="{{ route('setting.store') }}" method="post" enctype="multipart/form-data"
                        class="form-horizontal">
                        @csrf
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Banner Image</label></div>
                            <div class="col-12 col-md-6">
                                <input type="file" id="file-input" name="banner" class="form-control-file">
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="mt-2 mb-4"><img src="{{asset('images/'.$dataView->banner)}}"
                                        height="100px">
                                    <label>Image size = 512*602</label>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Header Text</label></div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="heading" value="{{ $dataView->heading }}"
                                    placeholder="Text" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Header Text</label></div>
                            <div class="col-12 col-md-12">
                                <textarea class="form-control" rows="6"
                                    name="description">{{ $dataView->description }}</textarea>
                            </div>
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
