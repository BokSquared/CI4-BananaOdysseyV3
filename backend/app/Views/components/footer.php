<style>
    .footer {
        padding: 40px;
        background-color: var(--secondary);
        color: var(--accent);
        text-align: center;
    }

    .footer a {
        color: var(--primary);
        text-decoration: none;
        margin: 0 10px;
    }
</style>

<footer class="bg-[#9E2A2B] text-white py-8 mt-10">
    <div class="container mx-auto px-6 flex flex-col md:flex-row justify-between items-start gap-8">

        <div class="flex-1">
            <h2 class="text-2xl font-extrabold">Wybie's Banana Cake 🍌</h2>
            <p class="text-sm mt-2 max-w-xs">
                Baked with love, crafted with bananas.<br>
                Every slice is a taste of joy and comfort.
            </p>
        </div>

        <div class="flex-1 grid grid-cols-2 gap-6">
            <ul class="space-y-2 text-sm">
                <li><a href="#">Home</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>

            <ul class="space-y-2 text-sm">
                <li><a href="<?= base_url('/moodPage') ?>" class="hover:text-yellow-200">Mood Board</a></li>
                <li><a href="<?= base_url('/roadMap') ?>" class="hover:text-yellow-200">Road Map</a></li>
            </ul>
        </div>
    </div>

    <div class="text-center text-xs text-gray-200 mt-6">
        © 2025 Wybie's Banana Cake. All rights reserved.
    </div>
</footer>