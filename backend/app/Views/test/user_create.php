<?= view('components/head', ['title' => '🍌Test - Create New User']) ?>

<div class="min-h-screen bg-[var(--accent)] p-10 flex flex-col items-center">
    <section class="w-full max-w-3xl bg-white rounded-2xl p-8 shadow-xl">
        <h2 class="text-3xl font-bold text-[var(--secondary)] mb-6">Create New User</h2>

        <?php if (isset($errors) && !empty($errors)): ?>
            <div class="mb-6 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg">
                <?php foreach ($errors as $error): ?>
                    <p><?= esc($error) ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('/test/storeUser') ?>" method="post" class="space-y-6">
            <div class="flex flex-col">
                <label class="mb-2 font-medium text-[var(--secondary)]">First Name</label>
                <input type="text" name="first_name" value="<?= esc($old['first_name'] ?? '') ?>"
                    class="px-4 py-2 border border-[var(--primary)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--primary)] text-[var(--neutral)]">
            </div>

            <div class="flex flex-col">
                <label class="mb-2 font-medium text-[var(--secondary)]">Middle Name</label>
                <input type="text" name="middle_name" value="<?= esc($old['middle_name'] ?? '') ?>"
                    class="px-4 py-2 border border-[var(--primary)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--primary)] text-[var(--neutral)]">
            </div>

            <div class="flex flex-col">
                <label class="mb-2 font-medium text-[var(--secondary)]">Last Name</label>
                <input type="text" name="last_name" value="<?= esc($old['last_name'] ?? '') ?>"
                    class="px-4 py-2 border border-[var(--primary)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--primary)] text-[var(--neutral)]">
            </div>

            <div class="flex flex-col">
                <label class="mb-2 font-medium text-[var(--secondary)]">Email</label>
                <input type="email" name="email" value="<?= esc($old['email'] ?? '') ?>"
                    class="px-4 py-2 border border-[var(--primary)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--primary)] text-[var(--neutral)]">
            </div>

            <div class="flex flex-col">
                <label class="mb-2 font-medium text-[var(--secondary)]">Password</label>
                <input type="password" name="password"
                    class="px-4 py-2 border border-[var(--primary)] rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--primary)] text-[var(--neutral)]">
            </div>

            <div class="flex justify-end gap-4 mt-4">
                <a href="<?= site_url('test/show') ?>"
                    class="h-10 px-6 bg-[var(--secondary)] hover:bg-[var(--primary)] text-[var(--accent)] rounded-lg font-medium shadow-sm transition flex items-center justify-center">
                    Back to Accounts
                </a>

                <button type="submit"
                    class="h-10 px-6 bg-[var(--primary)] hover:bg-[var(--secondary)] text-[var(--accent)] rounded-lg font-medium shadow-sm transition flex items-center justify-center">
                    Create User
                </button>
            </div>
        </form>
    </section>
</div>