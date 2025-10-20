<!DOCTYPE html>
<html lang="en">

<head>
    <?= view('components/head', ['title' => '🍌Banana Menu']) ?>
</head>

<body class="min-h-screen flex flex-col bg-gradient-to-br from-[#FFF3B0] via-[#FCE38A] to-[#F38181] text-[var(--neutral)] font-lato">

    <?= view('components/header'); ?>

    <section class="text-center py-20 bg-gradient-to-r from-[#FFD166] via-[#F6AE2D] to-[#FFB627] text-[var(--accent)] shadow-lg">
        <h2 class="text-4xl md:text-5xl font-playfair font-bold mb-4">Freshly Baked, Golden & Good</h2>
        <p class="text-lg mb-6">Taste the best banana delights made with love and sunshine 🍌</p>
        <button class="px-6 py-3 bg-[var(--accent)] text-[var(--secondary)] font-semibold rounded-lg shadow hover:bg-[var(--neutral)] hover:text-[var(--secondary)] transition">
            Order Now
        </button>
    </section>

    <main class="flex-1 p-10 bg-white bg-opacity-70 backdrop-blur-lg">
        <h3 class="text-3xl font-playfair font-bold text-center text-[var(--secondary)] mb-10">Our Menu</h3>

        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-8">
            <div class="bg-[var(--accent)] rounded-2xl shadow-lg overflow-hidden hover:scale-105 transition">
                <img src="https://www.resplendentkitchen.com/wp-content/uploads/2024/07/Vegan-Banana-Bread-GF05943-1.jpg" alt="Banana Bread" class="h-48 w-full object-cover">
                <div class="p-6">
                    <h4 class="text-xl font-semibold font-playfair text-[var(--secondary)]">Banana Bread</h4>
                    <p class="text-[var(--neutral)] text-sm mb-3">Soft, moist, and baked to golden perfection.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-bold text-[var(--primary)]">₱120</span>
                        <button class="px-3 py-2 bg-[var(--secondary)] text-[var(--accent)] rounded-lg hover:bg-[var(--primary)] transition">Add</button>
                    </div>
                </div>
            </div>

            <div class="bg-[var(--accent)] rounded-2xl shadow-lg overflow-hidden hover:scale-105 transition">
                <img src="https://www.tasteofhome.com/wp-content/uploads/2018/01/Basic-Banana-Muffins_EXPS_FT24_7708_0404_JR_1.jpg" alt="Banana Muffin" class="h-48 w-full object-cover">
                <div class="p-6">
                    <h4 class="text-xl font-semibold font-playfair text-[var(--secondary)]">Banana Muffin</h4>
                    <p class="text-[var(--neutral)] text-sm mb-3">Perfectly sweet muffins topped with crumbs.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-bold text-[var(--primary)]">₱65</span>
                        <button class="px-3 py-2 bg-[var(--secondary)] text-[var(--accent)] rounded-lg hover:bg-[var(--primary)] transition">Add</button>
                    </div>
                </div>
            </div>

            <div class="bg-[var(--accent)] rounded-2xl shadow-lg overflow-hidden hover:scale-105 transition">
                <img src="https://tidymom.net/blog/wp-content/uploads/2024/01/choc-chip-banana-cake-pic-1024x1536.jpg" alt="Banana Cake" class="h-48 w-full object-cover">
                <div class="p-6">
                    <h4 class="text-xl font-semibold font-playfair text-[var(--secondary)]">Banana Cake</h4>
                    <p class="text-[var(--neutral)] text-sm mb-3">Layered banana cake with creamy frosting.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-bold text-[var(--primary)]">₱250</span>
                        <button class="px-3 py-2 bg-[var(--secondary)] text-[var(--accent)] rounded-lg hover:bg-[var(--primary)] transition">Add</button>
                    </div>
                </div>
            </div>

            <div class="bg-[var(--accent)] rounded-2xl shadow-lg overflow-hidden hover:scale-105 transition">
                <img src="https://cdn.apartmenttherapy.info/image/upload/f_auto,q_auto:eco,c_fit,w_730,h_548/k%2FPhoto%2FRecipes%2F2024-05-banana-cream-pie%2Fbanana-cream-pie-074" alt="Banana Pie" class="h-48 w-full object-cover">
                <div class="p-6">
                    <h4 class="text-xl font-semibold font-playfair text-[var(--secondary)]">Banana Pie</h4>
                    <p class="text-[var(--neutral)] text-sm mb-3">Flaky crust with banana filling and whipped cream.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-bold text-[var(--primary)]">₱180</span>
                        <button class="px-3 py-2 bg-[var(--secondary)] text-[var(--accent)] rounded-lg hover:bg-[var(--primary)] transition">Add</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?= view('components/footer'); ?>
</body>

</html>