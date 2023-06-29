@extends('backend.master')
@section('content')
<div class="container">
    <section x-init="groupView()" class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header text-right">
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">P:Name</th>
                                        <th scope="col">Budget</th>
                                        <th scope="col">message</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @forelse ($messages as $index=>$data )
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->price }} <span>$</span></td>
                                        <td>{!! Str::limit($data->message, 30)!!}</td>
                                        <td>
                                            <a href="{{ route('message.edit',$data->id) }}"
                                                class="btn btn-success btn-sm"><i class="fa fa-eye"
                                                    style="font-size:20px"></i></a>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="6" class="text-center">No Data Found</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            {{-- <div class="d-flex justify-content-center">
                                {!! $dataview->links('pagination::bootstrap-4') !!}
                            </div> --}}
                            <div class="d-flex justify-content-center">
                                {!! $messages->links('pagination::bootstrap-4') !!}
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