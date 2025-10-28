<?php $session = session(); ?>
<h2>Update User</h2>

<?php if ($session->getFlashdata('errors')): ?>
    <div class="alert alert-danger">
        <?php foreach ($session->getFlashdata('errors') as $error): ?>
            <p><?= esc($error) ?></p>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<form action="<?= base_url('/test/update/' . $user->id) ?>" method="post">
    <input type="hidden" name="id" value="<?= esc($user->id) ?>">

    <label>First Name</label>
    <input type="text" name="first_name" value="<?= esc($user->first_name) ?>">

    <label>Last Name</label>
    <input type="text" name="last_name" value="<?= esc($user->last_name) ?>">

    <label>User Type</label>
    <select name="type">
        <option value="client" <?= $user->type === 'client' ? 'selected' : '' ?>>Client</option>
        <option value="admin" <?= $user->type === 'admin' ? 'selected' : '' ?>>Admin</option>
    </select>

    <button type="submit">Update</button>
</form>