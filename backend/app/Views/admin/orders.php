<!DOCTYPE html>
<html lang="en">

<head>
    <?= view('components/head', ['title' => '🍌 Orders']) ?>
</head>

<body class="min-h-screen flex flex-col bg-[var(--accent)] text-[var(--neutral)]">
    <header class="bg-gradient-to-r from-[var(--primary)] to-[var(--secondary)] text-[var(--accent)] py-5 px-6 flex justify-between items-center shadow-lg">
        <h1 class="text-3xl font-bold tracking-wide">🍌 Manage Orders</h1>

        <div class="flex items-center space-x-3">
            <a href="/" class="bg-[var(--primary)] hover:bg-[var(--accent)] text-[var(--neutral)] px-5 py-2 rounded-lg font-semibold transition shadow-md flex items-center gap-2">
                <span class="text-lg">⬅</span> Back to Home
            </a>
            <button class="bg-[var(--secondary)] hover:bg-[var(--primary)] text-[var(--accent)] px-5 py-2 rounded-lg font-semibold transition shadow-md">
                + New Order
            </button>
        </div>
    </header>

    <main class="flex-1 p-10">
        <section class="bg-white rounded-2xl p-8 shadow-xl" data-aos="fade-up">
            <h2 class="text-2xl font-semibold text-[var(--secondary)] mb-6">Order List</h2>

            <div class="overflow-x-auto">
                <table class="table-auto w-full text-left border-collapse">
                    <thead class="bg-[var(--primary)] text-[var(--accent)]">
                        <tr>
                            <th class="px-4 py-3">Order ID</th>
                            <th class="px-4 py-3">Customer</th>
                            <th class="px-4 py-3">Item</th>
                            <th class="px-4 py-3">Quantity</th>
                            <th class="px-4 py-3">Total (₱)</th>
                            <th class="px-4 py-3">Status</th>
                            <th class="px-4 py-3 text-right">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr class="border-b border-gray-200 hover:bg-[var(--accent)]/20 transition">
                            <td class="px-4 py-3 font-semibold">ORD-001</td>
                            <td class="px-4 py-3">Wybie</td>
                            <td class="px-4 py-3">Banana Smoothie</td>
                            <td class="px-4 py-3">2</td>
                            <td class="px-4 py-3">₱120</td>
                            <td class="px-4 py-3 text-green-600 font-semibold">Completed</td>
                            <td class="px-4 py-3 text-right space-x-2">
                                <button class="bg-[var(--primary)] hover:bg-[var(--secondary)] text-[var(--accent)] px-3 py-1 rounded-lg transition">Update</button>
                                <button class="bg-[var(--secondary)] hover:bg-[var(--primary)] text-[var(--accent)] px-3 py-1 rounded-lg transition">Cancel</button>
                            </td>
                        </tr>

                        <tr class="border-b border-gray-200 hover:bg-[var(--accent)]/20 transition">
                            <td class="px-4 py-3 font-semibold">ORD-002</td>
                            <td class="px-4 py-3">Hobart</td>
                            <td class="px-4 py-3">Banana Chips</td>
                            <td class="px-4 py-3">5</td>
                            <td class="px-4 py-3">₱250</td>
                            <td class="px-4 py-3 text-yellow-600 font-semibold">Pending</td>
                            <td class="px-4 py-3 text-right space-x-2">
                                <button class="bg-[var(--primary)] hover:bg-[var(--secondary)] text-[var(--accent)] px-3 py-1 rounded-lg transition">Update</button>
                                <button class="bg-[var(--secondary)] hover:bg-[var(--primary)] text-[var(--accent)] px-3 py-1 rounded-lg transition">Cancel</button>
                            </td>
                        </tr>

                        <tr class="hover:bg-[var(--accent)]/20 transition">
                            <td class="px-4 py-3 font-semibold">ORD-003</td>
                            <td class="px-4 py-3">Millard</td>
                            <td class="px-4 py-3">Banana Split</td>
                            <td class="px-4 py-3">1</td>
                            <td class="px-4 py-3">₱95</td>
                            <td class="px-4 py-3 text-red-600 font-semibold">Cancelled</td>
                            <td class="px-4 py-3 text-right space-x-2">
                                <button class="bg-[var(--primary)] hover:bg-[var(--secondary)] text-[var(--accent)] px-3 py-1 rounded-lg transition">Update</button>
                                <button class="bg-[var(--secondary)] hover:bg-[var(--primary)] text-[var(--accent)] px-3 py-1 rounded-lg transition">Cancel</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
</body>

</html>