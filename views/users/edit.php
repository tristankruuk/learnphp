<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container">
  <form action="/admin/users/edit?id=<?= $user->id ?>" method="POST">
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input value="<?= $user->name ?>" name="name" type="text" class="form-control" id="name">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input value="<?= $user->email ?>" name="email" type="text" class="form-control" id="email">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>