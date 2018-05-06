@extends('backEnd.layout')
@section('headLinks')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ URL::to('backEnd/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Breadcrumb -->
        @include('backEnd.includes.breadcrumb')

        <div class="box" style="margin-top: 20px;">
            <div class="box-header">
                <h3 class="box-title">Users List</h3>
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
                            <td>X</td>
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
@endsection
@section('extendScripts')
    <!-- DataTables -->
    <script src="{{ URL::to('backEnd/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::to('backEnd/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script>
        $(function () {
            $('#example1').DataTable()
            // $('#example2').DataTable({
            //     'paging'      : true,
            //     'lengthChange': false,
            //     'searching'   : false,
            //     'ordering'    : true,
            //     'info'        : true,
            //     'autoWidth'   : false
            // })
        })
    </script>
@endsection