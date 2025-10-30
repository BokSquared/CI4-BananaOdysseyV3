<!DOCTYPE html>
<html lang="en">

<head>
    <?= view('components/head', ['title' => '🍌 Manage Accounts']) ?>
</head>

<body class="min-h-screen flex flex-col bg-[var(--accent)] text-[var(--neutral)]">

    <!-- 🔹 SAME HEADER AS DASHBOARD -->
    <header class="bg-[var(--secondary)] text-[var(--accent)] py-4 px-8 flex justify-between items-center shadow-lg">
        <h1 class="text-2xl font-bold tracking-wide font-[PlayfairDisplay]">🍌 Banana Odyssey Admin</h1>
        <div class="flex items-center gap-6">
            <input type="text" placeholder="Search..."
                class="px-4 py-2 rounded-lg bg-[var(--accent)] text-[var(--neutral)] border border-[var(--primary)] focus:outline-none focus:ring-2 focus:ring-[var(--primary)]">
            <form action="/logout" method="get" class="inline">
                <button type="submit" class="btn-primary px-4 py-2 rounded-lg font-semibold">
                    Logout
                </button>
            </form>
        </div>
    </header>

    <!-- 🔹 FLEX CONTAINER FOR SIDEBAR + CONTENT -->
    <div class="flex flex-1">
        <?= view('components/admin_sidebar') ?>

        <!-- 🔹 MAIN CONTENT -->
        <main class="flex-1 bg-[var(--accent)] bg-opacity-80 backdrop-blur-lg p-10 overflow-y-auto">
            <section class="mb-10">
                <h2 class="text-3xl font-bold text-[var(--secondary)] mb-2">Manage Accounts</h2>
                <p class="text-[var(--neutral)] text-lg">View, update, or deactivate user accounts below.</p>
            </section>

            <section class="bg-white rounded-2xl p-8 shadow-xl" data-aos="fade-up">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-2xl font-semibold text-[var(--secondary)]">Account List</h3>
                    <button class="bg-[var(--secondary)] hover:bg-[var(--primary)] text-[var(--accent)] px-5 py-2 rounded-lg font-semibold transition shadow-md">
                        + Add Account
                    </button>
                </div>

                <div class="overflow-x-auto">
                    <table class="table-auto w-full text-left border-collapse">
                        <thead class="bg-[var(--primary)] text-[var(--accent)]">
                            <tr>
                                <th class="px-4 py-3">Name</th>
                                <th class="px-4 py-3">Email</th>
                                <th class="px-4 py-3">Role</th>
                                <th class="px-4 py-3">Status</th>
                                <th class="px-4 py-3 text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-gray-200 hover:bg-[var(--accent)]/20 transition">
                                <td class="px-4 py-3 font-semibold">Wybie</td>
                                <td class="px-4 py-3">bananaSaging@gmail.com</td>
                                <td class="px-4 py-3">Admin</td>
                                <td class="px-4 py-3 text-green-600 font-semibold">Active</td>
                                <td class="px-4 py-3 text-right space-x-2">
                                    <button class="bg-[var(--primary)] hover:bg-[var(--secondary)] text-[var(--accent)] px-3 py-1 rounded-lg transition">Update</button>
                                    <button class="bg-[var(--secondary)] hover:bg-[var(--primary)] text-[var(--accent)] px-3 py-1 rounded-lg transition">Deactivate</button>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-[var(--accent)]/20 transition">
                                <td class="px-4 py-3 font-semibold">Hobart</td>
                                <td class="px-4 py-3">F2111@fit.edu.ph</td>
                                <td class="px-4 py-3">Client</td>
                                <td class="px-4 py-3 text-green-600 font-semibold">Active</td>
                                <td class="px-4 py-3 text-right space-x-2">
                                    <button class="bg-[var(--primary)] hover:bg-[var(--secondary)] text-[var(--accent)] px-3 py-1 rounded-lg transition">Update</button>
                                    <button class="bg-[var(--secondary)] hover:bg-[var(--primary)] text-[var(--accent)] px-3 py-1 rounded-lg transition">Deactivate</button>
                                </td>
                            </tr>
                            <tr class="hover:bg-[var(--accent)]/20 transition">
                                <td class="px-4 py-3 font-semibold">Millard</td>
                                <td class="px-4 py-3">MillardTheDuck@yahoo.com</td>
                                <td class="px-4 py-3">Client</td>
                                <td class="px-4 py-3 text-red-600 font-semibold">Inactive</td>
                                <td class="px-4 py-3 text-right space-x-2">
                                    <button class="bg-[var(--primary)] hover:bg-[var(--secondary)] text-[var(--accent)] px-3 py-1 rounded-lg transition">Update</button>
                                    <button class="bg-[var(--secondary)] hover:bg-[var(--primary)] text-[var(--accent)] px-3 py-1 rounded-lg transition">Deactivate</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>

    <!-- AOS Script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>

</body>

</html>