<?php if (is_string($listOfUser)): ?>
    <div class="alert alert-info">
        <?= esc($listOfUser) ?>
    </div>
<?php return;
endif; ?>

<table class="w-full text-left border-collapse border border-gray-300">
    <thead class="bg-gray-50">
        <tr>
            <th class="p-3 border border-gray-300">ID</th>
            <th class="p-3 border border-gray-300">First Name</th>
            <th class="p-3 border border-gray-300">Middle Name</th>
            <th class="p-3 border border-gray-300">Last Name</th>
            <th class="p-3 border border-gray-300">Email</th>
            <th class="p-3 border border-gray-300">Type</th>
            <th class="p-3 border border-gray-300">Status</th>
            <th class="p-3 border border-gray-300">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php if (empty($listOfUser)): ?>
            <tr>
                <td class="p-3 border border-gray-300" colspan="8">No users found</td>
            </tr>
        <?php else: ?>
            <?php foreach ($listOfUser as $user): ?>
                <tr class="border-t">
                    <td class="p-3 border border-gray-300"><?= $user->id ?></td>
                    <td class="p-3 border border-gray-300"><?= esc($user->first_name) ?></td>
                    <td class="p-3 border border-gray-300"><?= esc($user->middle_name) ?></td>
                    <td class="p-3 border border-gray-300"><?= esc($user->last_name) ?></td>
                    <td class="p-3 border border-gray-300"><?= esc($user->email) ?></td>
                    <td class="p-3 border border-gray-300"><?= esc($user->type) ?></td>
                    <td class="p-3 border border-gray-300">
                        <?= ((int)$user->account_status === 1) ? 'Active' : 'Inactive' ?>
                    </td>
                    <td class="p-3 border border-gray-300 flex gap-2">
                        <a href="<?= site_url('test/update/' . $user->id) ?>" class="px-2 py-1 bg-gray-600 text-white rounded hover:bg-gray-500">Edit</a>

                        <form method="POST" action="<?= site_url('/test/delete') ?>" onsubmit="return confirm('Are you sure you want to delete this user?');">
                            <input type="hidden" name="id" value="<?= $user->id ?>">
                            <button type="submit" class="px-2 py-1 bg-red-600 text-white rounded hover:bg-red-500">Delete</button>
                        </form>
                    </td>

                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </tbody>
</table>