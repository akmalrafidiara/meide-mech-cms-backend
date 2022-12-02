<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4">Add User</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item">Data User</li>
      <li class="breadcrumb-item active">Add User</li>
    </ol>
    <div class="card">
      <div class="card-header">
        <i class="fas fa-user me-1"></i>
        Create New User
      </div>
      <div class="card-body">
        <form action="/admin/user" method="post">
          <div class="row">
            <div class="col-6">
              <div class="mb-3">
                <label for="full_name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="full_name" placeholder="your name" name="full_name">
              </div>
              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" placeholder="your username" name="username">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
              </div>
              <div class="mb-3">
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </div>
            <div class="col-6">
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
              </div>
              <div class="mb-3">
                <label for="password_confirm" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="password_confirm" name="password_confirm">
              </div>
              <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <select class="form-select" id="role" name="role">
                  <option selected disabled>Select Role</option>
                  <option value="administrator">Administrator</option>
                  <option value="client">Clinet</option>
                  <option value="user">User</option>
                </select>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</main>