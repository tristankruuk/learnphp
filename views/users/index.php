<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container">
  <table class="table table-hover table-striped">
    <thead>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Actions</th>
    </thead>
    <tbody>
      <?php foreach (($users ?? []) as $user): ?>
        <tr>
          <td><?= $user->id ?></td>
          <td><?= $user->name ?></td>
          <td><?= $user->email ?></td>
          <td>
            <div class="btn-group">
              <a href="/admin/users/view?id=<?= $user->id ?>" class="btn btn-info">View</a>
              <a href="/admin/users/edit?id=<?= $user->id ?>" class="btn btn-warning">Edit</a>
            </div>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>