<div class="modal fade" id="edit-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" align="center"><b>Edit User</b></h4>
            </div>
            <div class="modal-body">
                <form id="edit-form" class="form-horizontal" method="POST" action="">
                    <!-- <input type="hidden" name="_token" value=""> -->
                    {{--@csrf--}}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">User ID</label>
                            <input type="text" class="form-control" name="user_id" placeholder="User ID" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Enter username">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Contact</label>
                            <input type="text" class="form-control" name="contact" placeholder="Enter contact">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Change Password</label>
                            <input type="password" class="form-control" name="change_password" placeholder="Enter password">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>