<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4">Edit User</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item">Data User</li>
      <li class="breadcrumb-item active">Edit User</li>
    </ol>
    <div class="card">
      <div class="card-header">
        <i class="fas fa-user me-1"></i>
        Edit User <?= $data['full_name'] ?>
      </div>
      <div class="card-body">
        <form action="/admin/user/<?= $data['uuid'] ?>" method="post" enctype="multipart/form-data">
          <?= csrf_field() ?>
          <input type="hidden" name="_method" value="PUT">
          <input type="hidden" name="id" value="<?= $data['id'] ?>">
          <input type="hidden" name="username" value="<?= $data['username'] ?>">
          <div class="row">
            <div class="col-6">
              <div class="mb-3">
                <label for="full_name" class="form-label">Full Name</label>
                <input type="text" class="form-control  <?= ($validation->hasError('full_name')) ? 'is-invalid' : '' ?>"
                  id=" full_name" placeholder="your name" name="full_name"
                  value="<?= old('full_name', $data['full_name']) ?>">
                <div class="invalid-feedback">
                  <?= $validation->getError('full_name') ?>
                </div>
              </div>
              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control  <?= ($validation->hasError('username')) ? 'is-invalid' : '' ?>"
                  id=" username" placeholder="your username" value="<?= old('username', $data['username']) ?>" disabled>
                <div class="invalid-feedback">
                  <?= $validation->getError('username') ?>
                </div>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control  <?= ($validation->hasError('email')) ? 'is-invalid' : '' ?>"
                  id=" email" placeholder="name@example.com" name="email" value="<?= old('email', $data['email']) ?>">
                <div class="invalid-feedback">
                  <?= $validation->getError('email') ?>
                </div>
              </div>
              <div class="mb-3">
                <div class="row d-flex align-items-center">
                  <div class="col-6">
                    <label for="images" class="form-label">Profile Images</label>
                    <input class="form-control" type="file" id="images" onchange="previewImg()" name="images">
                  </div>
                  <div class="col-6">
                    <img src="/img/<?= $data['images'] ?>" alt=""
                      style="width: 150px; height: 150px; object-fit: cover;" id="imgPreview">
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </div>
            <div class="col-6">
              <div class="mb-3">
                <label for="password" class="form-label">New Password</label>
                <input type="password"
                  class="form-control  <?= ($validation->hasError('password')) ? 'is-invalid' : '' ?>" id="password"
                  name="password">
                <div class="invalid-feedback">
                  <?= $validation->getError('password') ?>
                </div>
              </div>
              <div class="mb-3">
                <label for="password_confirm" class="form-label">Confirm Password</label>
                <input type="password"
                  class="form-control  <?= ($validation->hasError('password_confirm')) ? 'is-invalid' : '' ?>"
                  id="password_confirm" name="password_confirm">
                <div class="invalid-feedback">
                  <?= $validation->getError('password_confirm') ?>
                </div>
              </div>
              <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <select class="form-select <?= ($validation->hasError('role')) ? 'is-invalid' : '' ?>" id="role"
                  name="role">
                  <option disabled>Select Role</option>
                  <option value="administrator" <?= $data['rules'] == 'administrator' ? 'selected' : '' ?>>
                    Administrator</option>
                  <option value="client" <?= $data['rules'] == 'client' ? 'selected' : '' ?>>Clinet</option>
                  <option value="user" <?= $data['rules'] == 'user' ? 'selected' : '' ?>>User</option>
                </select>
                <div class="invalid-feedback">
                  <?= $validation->getError('role') ?>
                </div>
              </div>
              <div class="mb-3">
                <label for="role" class="form-label">Activation User</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="status" id="active" value="1"
                    <?= $data['status'] == 1 ? 'checked' : '' ?>>
                  <label class="form-check-label" for="active">
                    Active
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="status" id="deactive" value="0"
                    <?= $data['status'] == 0 ? 'checked' : '' ?>>
                  <label class="form-check-label" for="deactive">
                    Deactive
                  </label>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</main>

<script>
function previewImg() {
  const images = document.querySelector('#images');
  // const imagesLabel = document.querySelector('.custom-file-label');
  const imgPreview = document.querySelector('#imgPreview');

  // imagesLabel.textContent = images.files[0].name;

  const fileImages = new FileReader();
  fileImages.readAsDataURL(images.files[0]);

  fileImages.onload = function(e) {
    imgPreview.src = e.target.result;
  }
}
</script>