<h2>Create New User</h2>

<?php if (isset($errors) && !empty($errors)): ?>
    <div class="alert alert-danger">
        <?php foreach ($errors as $error): ?>
            <p><?= esc($error) ?></p>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<form action="<?= base_url('/test/storeUser') ?>" method="post">
    <label>First Name</label>
    <input type="text" name="first_name" value="<?= esc($old['first_name'] ?? '') ?>">

    <label>Middle Name</label>
    <input type="text" name="middle_name" value="<?= esc($old['middle_name'] ?? '') ?>">

    <label>Last Name</label>
    <input type="text" name="last_name" value="<?= esc($old['last_name'] ?? '') ?>">

    <label>Email</label>
    <input type="email" name="email" value="<?= esc($old['email'] ?? '') ?>">

    <label>Password</label>
    <input type="password" name="password">

    <button type="submit">Create User</button>
</form>