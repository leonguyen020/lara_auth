@extends('backEnd.layout')
@section('headLinks')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ URL::to('backEnd/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
    {{--<link rel="stylesheet" href="{{ URL::to('backEnd/css/deleteModal.css') }}">--}}
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Breadcrumb -->
        @include('backEnd.includes.breadcrumb')

        <div class="box" style="margin-top: 20px;">
            <div class="box-header">
                <h3 class="box-title">Users List</h3>
                <a href="#" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Create New User</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Permission</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($Users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->permissionGroup->name}}</td>
                            <td>X</td>
                            <td>
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit-modal">
                                    <i class="fa fa-edit"></I>
                                </button>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Permission</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- Create Modal -->
    <!-- Edit Modal -->
    <!-- Delete Modal -->
    <div id="deleteModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Confirmation</h4>
                    <button type="button" class="close" data-dismiss="modal">×</button>

                </div>
                <div class="modal-body text-center">
                    <h3>Do you want to delete this row?</h3>
                    <h3>You cannot undo this action once you decided.</h3>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger pull-right"><i class="fa fa-trash"></i> Delete</button>
                </div>
            </div>

        </div>
    </div>
@endsection
@section('extendScripts')
    <!-- DataTables -->
    <script src="{{ URL::to('backEnd/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::to('backEnd/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script>
        $(function () {
            $('#example1').DataTable()
        });
    </script>

@endsection