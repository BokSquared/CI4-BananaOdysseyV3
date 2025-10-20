<!DOCTYPE html>
<html lang="en">

<head>
    <?= view('components/head', ['title' => '🍌Banana Dashboard']) ?>
</head>

<body class="min-h-screen flex flex-col bg-[var(--accent)] text-[var(--neutral)]">
    <header class="bg-[var(--secondary)] text-[var(--accent)] py-4 px-8 flex justify-between items-center shadow-lg">
        <h1 class="text-2xl font-bold tracking-wide font-[PlayfairDisplay]">🍌 Banana Odyssey Admin</h1>
        <div class=" flex items-center gap-6">
            <input type=" text" placeholder="Search..."
                class="px-4 py-2 rounded-lg bg-[var(--accent)] text-[var(--neutral)] border border-[var(--primary)] focus:outline-none focus:ring-2 focus:ring-[var(--primary)]">
            <form action="/logout" method="get" class="inline">
                <button type="submit" class="btn-primary px-4 py-2 rounded-lg font-semibold">
                    Logout
                </button>
            </form>

        </div>
    </header>

    <div class="flex flex-1">
        <aside class="w-64 bg-[var(--primary)] text-[var(--accent)] p-6 flex flex-col justify-between shadow-2xl">
            <nav class="flex flex-col gap-4">
                <a href="#" class="flex items-center gap-3 hover:bg-[var(--secondary)] hover:text-[var(--accent)] p-3 rounded-lg transition">
                    <i class="bi bi-speedometer2"></i> Dashboard
                </a>
                <a href="#" class="flex items-center gap-3 hover:bg-[var(--secondary)] hover:text-[var(--accent)] p-3 rounded-lg transition">
                    <i class="bi bi-list"></i> Menu
                </a>
                <a href="#" class="flex items-center gap-3 hover:bg-[var(--secondary)] hover:text-[var(--accent)] p-3 rounded-lg transition">
                    <i class="bi bi-people"></i> Accounts
                </a>
                <a href="#" class="flex items-center gap-3 hover:bg-[var(--secondary)] hover:text-[var(--accent)] p-3 rounded-lg transition">
                    <i class="bi bi-cart"></i> Orders
                </a>
            </nav>

            <footer class="mt-10 text-sm text-[var(--accent)] opacity-80">
                <p>© 2025 Banana Odyssey</p>
            </footer>
        </aside>

        <main class="flex-1 bg-[var(--accent)] bg-opacity-80 backdrop-blur-lg p-10 rounded-l-3xl overflow-y-auto">

            <section class="mb-10">
                <h2 class="text-3xl font-bold text-[var(--secondary)] mb-2">Welcome back, Captain 🍌</h2>
                <p class="text-[var(--neutral)] text-lg">Here’s the latest from your bakery dashboard.</p>
            </section>

            <section class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                <div class="bg-white p-6 rounded-2xl shadow-lg border-t-4 border-[var(--primary)]" data-aos="fade-up">
                    <h3 class="text-lg font-semibold text-[var(--neutral)]">Total Orders</h3>
                    <p class="text-4xl font-bold text-[var(--secondary)] mt-2">120</p>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-lg border-t-4 border-[var(--secondary)]" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="text-lg font-semibold text-[var(--neutral)]">Active Accounts</h3>
                    <p class="text-4xl font-bold text-[var(--primary)] mt-2">45</p>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-lg border-t-4 border-[var(--neutral)]" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="text-lg font-semibold text-[var(--neutral)]">Revenue</h3>
                    <p class="text-4xl font-bold text-[var(--secondary)] mt-2">$4,500</p>
                </div>
            </section>

            <section class="bg-white rounded-2xl p-8 shadow-xl" data-aos="fade-up">
                <h3 class="text-2xl font-semibold text-[var(--secondary)] mb-6">Recent Orders</h3>
                <div class="overflow-x-auto">
                    <table class="table-auto w-full text-left border-collapse">
                        <thead class="bg-[var(--primary)] text-[var(--accent)]">
                            <tr>
                                <th class="px-4 py-3">Order ID</th>
                                <th class="px-4 py-3">Customer</th>
                                <th class="px-4 py-3">Item</th>
                                <th class="px-4 py-3">Status</th>
                                <th class="px-4 py-3 text-right">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-gray-200 hover:bg-[var(--accent)]/30">
                                <td class="px-4 py-3">#00123</td>
                                <td class="px-4 py-3">Hermes</td>
                                <td class="px-4 py-3">Golden Loaf</td>
                                <td class="px-4 py-3 text-[var(--secondary)] font-semibold">Delivered</td>
                                <td class="px-4 py-3 text-right">$25.00</td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-[var(--accent)]/30">
                                <td class="px-4 py-3">#00124</td>
                                <td class="px-4 py-3">Athena</td>
                                <td class="px-4 py-3">Wisdom Loaf</td>
                                <td class="px-4 py-3 text-[var(--primary)] font-semibold">In Progress</td>
                                <td class="px-4 py-3 text-right">$20.00</td>
                            </tr>
                            <tr class="hover:bg-[var(--accent)]/30">
                                <td class="px-4 py-3">#00125</td>
                                <td class="px-4 py-3">Dionysus</td>
                                <td class="px-4 py-3">Feast Cake</td>
                                <td class="px-4 py-3 text-[var(--secondary)] font-semibold">Delivered</td>
                                <td class="px-4 py-3 text-right">$30.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

        </main>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>

</body>

</html>