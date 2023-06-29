{{-- @extends('backend.master')
@section('content')
<div class="container">
    <section x-init="groupView()" class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header text-right">
                            <a class="btn btn-primary" href="{{route('team.create')}}"><i class="fa fa-plus"></i></a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Designation</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($dataview as $data)
                                    <tr>
                                        <td>01</td>
                                        <td><img src="{{ asset('storage/team/'.$data->image) }}" width="80"></td>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->designation }}</td>
                                        <td>
                                            <a href="{{ route('team.edit',$data->id) }}"
                                                class="btn btn-danger btn-sm"><i class="fa fa-pencil"
                                                    style="font-size:20px"></i></a>
                                            <a href="#" class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#exampleModal"><i class="fa fa-trash"
                                                    style="font-size:20px"></i></a>
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
                        <form action="{{route('team.destroy',$data->id)}}" method="POST">
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


    @endsection --}}