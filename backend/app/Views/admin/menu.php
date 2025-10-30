<!DOCTYPE html>
<html lang="en">

<head>
    <?= view('components/head', ['title' => '🍌 Manage Menu']) ?>
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
                <h2 class="text-3xl font-bold text-[var(--secondary)] mb-2">Manage Menu</h2>
                <p class="text-[var(--neutral)] text-lg">View, update, or add items to the Banana Odyssey menu below.</p>
            </section>

            <!-- 🔹 MENU TABLE SECTION -->
            <section class="bg-white rounded-2xl p-8 shadow-xl" data-aos="fade-up">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-2xl font-semibold text-[var(--secondary)]">Menu Items</h3>
                    <button class="bg-[var(--secondary)] hover:bg-[var(--primary)] text-[var(--accent)] px-5 py-2 rounded-lg font-semibold transition shadow-md">
                        + Add Menu Item
                    </button>
                </div>

                <div class="overflow-x-auto">
                    <table class="table-auto w-full text-left border-collapse">
                        <thead class="bg-[var(--primary)] text-[var(--accent)]">
                            <tr>
                                <th class="px-4 py-3">Image</th>
                                <th class="px-4 py-3">Item Name</th>
                                <th class="px-4 py-3">Description</th>
                                <th class="px-4 py-3">Price</th>
                                <th class="px-4 py-3 text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Banana Bread -->
                            <tr class="border-b border-gray-200 hover:bg-[var(--accent)]/20 transition">
                                <td class="px-4 py-3">
                                    <img src="https://www.resplendentkitchen.com/wp-content/uploads/2024/07/Vegan-Banana-Bread-GF05943-1.jpg"
                                        alt="Banana Bread" class="h-16 w-24 object-cover rounded-lg shadow">
                                </td>
                                <td class="px-4 py-3 font-semibold">Banana Bread</td>
                                <td class="px-4 py-3 text-sm">Soft, moist, and baked to golden perfection.</td>
                                <td class="px-4 py-3 font-semibold text-[var(--primary)]">₱120</td>
                                <td class="px-4 py-3 text-right space-x-2">
                                    <button class="bg-[var(--primary)] hover:bg-[var(--secondary)] text-[var(--accent)] px-3 py-1 rounded-lg transition">Edit</button>
                                    <button class="bg-[var(--secondary)] hover:bg-[var(--primary)] text-[var(--accent)] px-3 py-1 rounded-lg transition">Delete</button>
                                </td>
                            </tr>

                            <!-- Banana Muffin -->
                            <tr class="border-b border-gray-200 hover:bg-[var(--accent)]/20 transition">
                                <td class="px-4 py-3">
                                    <img src="https://www.tasteofhome.com/wp-content/uploads/2018/01/Basic-Banana-Muffins_EXPS_FT24_7708_0404_JR_1.jpg"
                                        alt="Banana Muffin" class="h-16 w-24 object-cover rounded-lg shadow">
                                </td>
                                <td class="px-4 py-3 font-semibold">Banana Muffin</td>
                                <td class="px-4 py-3 text-sm">Perfectly sweet muffins topped with crumbs.</td>
                                <td class="px-4 py-3 font-semibold text-[var(--primary)]">₱65</td>
                                <td class="px-4 py-3 text-right space-x-2">
                                    <button class="bg-[var(--primary)] hover:bg-[var(--secondary)] text-[var(--accent)] px-3 py-1 rounded-lg transition">Edit</button>
                                    <button class="bg-[var(--secondary)] hover:bg-[var(--primary)] text-[var(--accent)] px-3 py-1 rounded-lg transition">Delete</button>
                                </td>
                            </tr>

                            <!-- Banana Cake -->
                            <tr class="border-b border-gray-200 hover:bg-[var(--accent)]/20 transition">
                                <td class="px-4 py-3">
                                    <img src="https://tidymom.net/blog/wp-content/uploads/2024/01/choc-chip-banana-cake-pic-1024x1536.jpg"
                                        alt="Banana Cake" class="h-16 w-24 object-cover rounded-lg shadow">
                                </td>
                                <td class="px-4 py-3 font-semibold">Banana Cake</td>
                                <td class="px-4 py-3 text-sm">Layered banana cake with creamy frosting.</td>
                                <td class="px-4 py-3 font-semibold text-[var(--primary)]">₱250</td>
                                <td class="px-4 py-3 text-right space-x-2">
                                    <button class="bg-[var(--primary)] hover:bg-[var(--secondary)] text-[var(--accent)] px-3 py-1 rounded-lg transition">Edit</button>
                                    <button class="bg-[var(--secondary)] hover:bg-[var(--primary)] text-[var(--accent)] px-3 py-1 rounded-lg transition">Delete</button>
                                </td>
                            </tr>

                            <!-- Banana Pie -->
                            <tr class="hover:bg-[var(--accent)]/20 transition">
                                <td class="px-4 py-3">
                                    <img src="https://cdn.apartmenttherapy.info/image/upload/f_auto,q_auto:eco,c_fit,w_730,h_548/k%2FPhoto%2FRecipes%2F2024-05-banana-cream-pie%2Fbanana-cream-pie-074"
                                        alt="Banana Pie" class="h-16 w-24 object-cover rounded-lg shadow">
                                </td>
                                <td class="px-4 py-3 font-semibold">Banana Pie</td>
                                <td class="px-4 py-3 text-sm">Flaky crust with banana filling and whipped cream.</td>
                                <td class="px-4 py-3 font-semibold text-[var(--primary)]">₱180</td>
                                <td class="px-4 py-3 text-right space-x-2">
                                    <button class="bg-[var(--primary)] hover:bg-[var(--secondary)] text-[var(--accent)] px-3 py-1 rounded-lg transition">Edit</button>
                                    <button class="bg-[var(--secondary)] hover:bg-[var(--primary)] text-[var(--accent)] px-3 py-1 rounded-lg transition">Delete</button>
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