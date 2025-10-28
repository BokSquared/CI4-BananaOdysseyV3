<?php $session = session(); ?>
<?= view('components/head', ['title' => '🍌Test - Update User']) ?>

<div class="min-h-screen bg-[var(--accent)] p-10 flex flex-col items-center">
    <section class="w-full max-w-3xl bg-white rounded-2xl p-8 shadow-xl">
        <h2 class="text-3xl font-bold text-[var(--secondary)] mb-6">Update User</h2>

        <?php if ($session->getFlashdata('errors')): ?>
            <div class="mb-6 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg">
                <?php foreach ($session->getFlashdata('errors') as $error): ?>
                    <p><?= esc($error) ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('/test/update/' . $user->id) ?>" method="post" class="space-y-6">
            <input type="hidden" name="id" value="<?= esc($user->id) ?>">

            <div class="flex flex-col">
                <label class="mb-2 font-medium text-[var(--secondary)]">First Name</label>
                <input type="text" name="first_name" value="<?= esc($user->first_name) ?>"
                    class="px-4 py-2 border border-[var(--primary)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--primary)] text-[var(--neutral)]">
            </div>

            <div class="flex flex-col">
                <label class="mb-2 font-medium text-[var(--secondary)]">Last Name</label>
                <input type="text" name="last_name" value="<?= esc($user->last_name) ?>"
                    class="px-4 py-2 border border-[var(--primary)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--primary)] text-[var(--neutral)]">
            </div>

            <div class="flex flex-col">
                <label class="mb-2 font-medium text-[var(--secondary)]">User Type</label>
                <select name="type"
                    class="px-4 py-2 border border-[var(--primary)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--primary)] text-[var(--neutral)]">
                    <option value="client" <?= $user->type === 'client' ? 'selected' : '' ?>>Client</option>
                    <option value="admin" <?= $user->type === 'admin' ? 'selected' : '' ?>>Admin</option>
                </select>
            </div>

            <div class="flex justify-end gap-4">
                <a href="<?= site_url('/test/show') ?>"
                    class="h-10 px-6 bg-[var(--secondary)] hover:bg-[var(--primary)] text-[var(--accent)] rounded-lg font-medium shadow-sm transition flex items-center justify-center">
                    Back to Accounts
                </a>

                <button type="submit"
                    class="h-10 px-6 bg-[var(--primary)] hover:bg-[var(--secondary)] text-[var(--accent)] rounded-lg font-medium shadow-sm transition flex items-center justify-center">
                    Update
                </button>
            </div>

        </form>
    </section>
</div>