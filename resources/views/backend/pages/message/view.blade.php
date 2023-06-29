@extends('backend.master')
@section('content')
<div class="container">
    <section x-init="groupView()" class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-10">
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header text-right">
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="flex justify-center">
                                <h4 class="py-2">Project Name: <span class="font-bold">{{ $messages->name }}</span></h4>
                                <h4 class="py-2">Telegram Link: <span class="font-bold">{{ $messages->telegram }}</span>
                                </h4>
                                <h4 class="py-2">Twitter Link: <span class="font-bold">{{ $messages->twitter }}</span>
                                </h4>
                                <h4 class="py-2">Website URL: <span class="font-bold">{{ $messages->website }}</span>
                                </h4>
                                <h4 class="py-2">Order Date: <span class="font-bold">{{ $messages->ama_date
                                            }}</span></h4>
                                <h4 class="py-2">Order Price: <span class="font-bold">{{ $messages->price }}
                                            $</span>
                                </h4>
                                <h4 class="py-2">Messages: <span class="font-bold">{{ $messages->message }}</span>
                                </h4>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
    </section>


    @endsection
