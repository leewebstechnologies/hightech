<?php include ("includes/header.php"); ?>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4>
            Edit User
            <a href="users.php" class="btn btn-danger float-end">Back</a>
          </h4>
        </div>
        <div class="card-body">
          <form action="users-create.php" method="POST">
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" name="name" class="form-control" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="name" class="form-label">Phone No.</label>
                  <input type="text" name="phone" class="form-control" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" name="email" class="form-control" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" required>
                </div>
              </div>
              <div class="col-md-3">
                <div class="mb-3">
                  <label for="role" class="form-label">Select Role</label>
                  <select name="role" class="form-select" required>
                    <option value="">Select Role</option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3 mt-4">
                <div class="mb-3">
                  <label for="role">Select Role</label>
                  <br />
                  <input type="checkbox" name="is_ban" style="width: 30px"; height: 30px;>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3 text-end">
                  <br />
                  <button type="submit" name="updateUser" class="btn btn-primary">Update</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

<?php include ("includes/footer.php"); ?>