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
                            <a class="btn btn-primary" href="{{route('upama.create')}}"><i
                                    class="fa fa-plus"></i></a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">SL</th>
                                        <th scope="col">Category Name</th>
                                        <th scope="col">Stutas</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($dataview as $index=>$data)
                                    <tr>
                                        <td>{{$index + 1}}</td>
                                        <td>{{ $data->title }}</td>
                                        <td><img src="{{ asset('images/'.$data->image) }}" width="80"></td>
                                        <td class="d-flex">
                                            <a href="{{ route('upama.edit',$data->id) }}"
                                                class="btn btn-success btn-sm"><i class="fa fa-pencil"
                                                    style="font-size:20px"></i></a>
                                            <form action="{{route('upama.destroy',$data->id)}}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"
                                                                                                       style="font-size:20px"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                        <tr class="text-center">
                                            <td colspan="4"> No Data Found</td>
                                        </tr>

                                    @endforelse
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center">
                                {!! $dataview->links('pagination::bootstrap-4') !!}
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
        <!-- /.container-fluid -->
        <div class="modal" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h5>Delete your user?</h5>
                    </div>
                    <div class="modal-footer">
                        @if($dataview->count())
                        <form action="{{route('upama.destroy',$data->id)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-sm" type="submit">Confirm</button>
                        </form>
                        @else

                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>


    @endsection
