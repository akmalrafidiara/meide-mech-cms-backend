<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4">Data User</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">Data User</li>
    </ol>
    <a href="user/add" class="btn btn-primary mb-4">Add User</a>
    <div class="card mb-4">
      <div class="card-header">
        <i class="fas fa-table me-1"></i>
        User List
      </div>
      <div class="card-body">
        <table id="datatablesSimple">
          <thead>
            <tr>
              <th>No</th>
              <th>Picture</th>
              <th>Full Name</th>
              <th>Username</th>
              <th>Email</th>
              <th>Status</th>
              <th>Rules</th>
              <th>Is Online</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>No</th>
              <th>Picture</th>
              <th>Full Name</th>
              <th>Username</th>
              <th>Email</th>
              <th>Status</th>
              <th>Rules</th>
              <th>Is Online</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            <?php foreach ($data as $key => $d) : ?>
            <tr>
              <td><?= $key + 1 ?></td>
              <td><img src="/img/<?= $d['images'] ?>" alt="" style="width: 100px;"></td>
              <td><?= $d['full_name'] ?></td>
              <td><?= $d['username'] ?></td>
              <td><?= $d['email'] ?></td>
              <td>
                <?= $d['status'] == '1' ? '<span class="badge bg-success">Active</span>' : '<span class="badge bg-danger">Deactive</span>' ?>
              </td>
              <td>
                <?= $d['rules'] == '1' ? '<span class="badge bg-primary">Online</span>' : '<span class="badge bg-secondary">Offline</span>' ?>
              </td>
              <td>
                <?= $d['is_online'] == '1' ? '<span class="badge bg-primary">Online</span>' : '<span class="badge bg-secondary">Offline</span>' ?>
              </td>
              <td>
                <a href=""><i class="fa-solid fa-pen-to-square"></i></a> |
                <form action="/admin/user/<?= $d['id'] ?>" method="POST">
                  <?= csrf_field() ?>
                  <input type="hidden" name="_method" value="DELETE">
                  <button type="submit" style="border: none; outline: none; display: inline"
                    onclick="return confiem('Want to delete this item?')"><i class="fa-solid fa-trash"></i></button>
                </form>
              </td>
            </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</main>