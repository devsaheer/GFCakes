<div class="modal fade" id="addUserModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="addUserModalLabel">Add User</h5>
                <button class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>

            <div class="modal-body">
                <form method="post" onsubmit="return passwordCheck();" id="userForm">
                    <div class="form-group">
                        <label for="user_name" class="form-control-label">Name</label>
                        <input class="form-control" type="text" name="admin_name" required>
                    </div>
                    <div class="form-group">
                        <label for="password" class="form-control-label">Password</label>
                        <input class="form-control" type="password" name="admin_password" id="admin_password" required>
                    </div>
                    <div class="form-group">
                        <label for="password2" class="form-control-label">Confirm Password</label>
                        <input class="form-control" type="password" name="retype_password" id="retype_password" required>
                        <small id='password_message' class="form-text"></small>
                        
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="add_user" id="add_user_button">Add User</button>

                    </div>
                </form>
            </div>


        </div>
    </div>
</div>