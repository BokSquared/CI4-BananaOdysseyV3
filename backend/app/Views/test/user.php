<?= view('components/head', ['title' => '🍌Test - Banana Accounts']) ?>
<?php $userSession = session()->get('user'); ?>

<div class="p-10 bg-[var(--accent)] min-h-screen">
    <section class="mb-8">
        <h2 class="text-3xl font-bold text-[var(--secondary)] mb-2">Manage Users</h2>
        <p class="text-[var(--neutral)] text-lg">View, update, or deactivate user accounts below.</p>
    </section>

    <section class="bg-white rounded-2xl p-6 shadow-xl">
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-2xl font-semibold text-[var(--secondary)]">User List</h3>
            <a href="<?= site_url('/test/create') ?>" class="bg-[var(--secondary)] hover:bg-[var(--primary)] text-[var(--accent)] px-5 py-2 rounded-lg font-semibold transition shadow-md">
                + Add User
            </a>
        </div>

        <?php if (is_string($listOfUser)): ?>
            <div class="alert alert-info mb-4">
                <?= esc($listOfUser) ?>
            </div>
        <?php endif; ?>

        <div class="overflow-x-auto">
            <table class="table-auto w-full text-left border-collapse">
                <thead class="bg-[var(--primary)] text-[var(--accent)]">
                    <tr>
                        <th class="px-4 py-3">ID</th>
                        <th class="px-4 py-3">First Name</th>
                        <th class="px-4 py-3">Middle Name</th>
                        <th class="px-4 py-3">Last Name</th>
                        <th class="px-4 py-3">Email</th>
                        <th class="px-4 py-3">Type</th>
                        <th class="px-4 py-3">Status</th>
                        <th class="px-4 py-3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($listOfUser)): ?>
                        <tr>
                            <td class="px-4 py-3 border-t" colspan="8">No users found</td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($listOfUser as $user): ?>
                            <tr class="border-b hover:bg-[var(--accent)]/20 transition">
                                <td class="px-4 py-3"><?= $user->id ?></td>
                                <td class="px-4 py-3"><?= esc($user->first_name) ?></td>
                                <td class="px-4 py-3"><?= esc($user->middle_name) ?></td>
                                <td class="px-4 py-3"><?= esc($user->last_name) ?></td>
                                <td class="px-4 py-3"><?= esc($user->email) ?></td>
                                <td class="px-4 py-3"><?= esc($user->type) ?></td>
                                <td class="px-4 py-3 font-semibold <?= ((int)$user->account_status === 1) ? 'text-green-600' : 'text-red-600' ?>">
                                    <?= ((int)$user->account_status === 1) ? 'Active' : 'Inactive' ?>
                                </td>

                                <td class="px-4 py-3">
                                    <div class="flex justify-end items-center gap-5">
                                        <button><a href="<?= site_url('test/update/' . $user->id) ?>"
                                                class="inline-flex items-center justify-center h-10 px-4 bg-[var(--primary)] hover:bg-[var(--secondary)] text-[var(--accent)] rounded-lg font-medium shadow-sm transition">
                                                Update
                                            </a></button>

                                        <form method="POST" action="<?= site_url('/test/delete') ?>"
                                            onsubmit="return confirm('Are you sure?');"
                                            class="inline-flex">
                                            <input type="hidden" name="id" value="<?= $user->id ?>">
                                            <button type="submit"
                                                class="inline-flex items-center justify-center h-10 px-4 bg-[var(--secondary)] hover:bg-[var(--primary)] text-[var(--accent)] rounded-lg font-medium shadow-sm transition">
                                                Deactivate
                                            </button>
                                        </form>
                                    </div>
                                </td>




                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </section>
</div>