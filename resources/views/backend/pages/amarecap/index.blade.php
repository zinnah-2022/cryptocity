@extends('backend.master')
@section('content')
<div class="container">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header text-right">
                            <a class="btn btn-primary" href="{{route('amarecap.create')}}"><i
                                    class="fa fa-plus"></i></a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">SL</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Title</th>

                                        <th scope="col">Description</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($dataview as $index=>$data)
                                    <tr>
                                        <td>{{ $index+1 }}</td>
                                        <td><img src="{{ asset('images/'.$data->image) }}" width="80"></td>
                                        <td>{!! Str::limit($data->title, 20)!!}</td>
                                        <td>{!! Str::limit($data->body, 20)!!}</td>
                                        <td class="d-flex">
                                            <a href="{{ route('amarecap.edit',$data->id) }}"
                                                class="btn btn-success btn-sm"><i class="fa fa-pencil"
                                                    style="font-size:20px"></i></a>
                                            <form action="{{route('amarecap.destroy',$data->id)}}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"
                                                                                                       style="font-size:20px"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="5" class="text-center"> No data Found</td>
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
    </section>


    @endsection
