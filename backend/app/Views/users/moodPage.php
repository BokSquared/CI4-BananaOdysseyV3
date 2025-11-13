<!DOCTYPE html>
<html lang="en">

<head>
    <?= view('components/head', ['title' => '🍌Banana Mood Board']) ?>
</head>

<body>
    <?= view('components/header') ?>
    <div class="max-w-7xl mx-auto py-12 px-6 grid md:grid-cols-2 gap-8">
        <div class="bg-white shadow-lg rounded-xl p-8 flex flex-col items-center text-center">

            <h2 class="text-xl font-semibold tracking-wide text-gray-700 mb-6">WYBIE’S PALETTES</h2>
            <div class="flex flex-col md:flex-row items-center md:items-start gap-8 w-full">
                <div class="flex-1 flex justify-center">
                    <img
                        src="http://www.weinerelementary.org/uploads/2/2/8/6/22867982/published/david-napoleon-crossing-the-alps-malmaison2.jpg?1541615388"
                        alt="Wybie Mood Image"
                        class="rounded-2xl object-cover w-[20rem] h-[20rem] md:w-[24rem] md:h-[24rem] shadow-md">
                </div>
                <div class="flex-1 flex flex-col gap-4 w-full">
                    <div class="relative flex flex-row h-12 rounded-lg overflow-hidden shadow-sm bg-[#E09F3E]">
                        <span class="absolute bottom-1 right-2 text-xs font-semibold text-[#4F4D46]">#E09F3E</span>
                    </div>
                    <div class="relative flex flex-row h-12 rounded-lg overflow-hidden shadow-sm bg-[#9E2A2B]">
                        <span class="absolute bottom-1 right-2 text-xs font-semibold text-[#EDE8D0]">#9E2A2B</span>
                    </div>
                    <div class="relative flex flex-row h-12 rounded-lg overflow-hidden shadow-sm bg-[#FFF3B0]">
                        <span class="absolute bottom-1 right-2 text-xs font-semibold text-[#4F4D46]">#FFF3B0</span>
                    </div>
                    <div class="relative flex flex-row h-12 rounded-lg overflow-hidden shadow-sm bg-[#333333]">
                        <span class="absolute bottom-1 right-2 text-xs font-semibold text-[#EDE8D0]">#333333</span>
                    </div>
                    <div class="flex flex-col gap-10 mt-9">
                        <div class="relative h-6 rounded-full shadow-sm">
                            <div class="absolute left-0 top-1/2 -translate-y-1/2 text-xs font-semibold text-[#4F4D46] ml-2">#E09F3E</div>
                            <div class="absolute right-0 top-1/2 -translate-y-1/2 text-xs font-semibold text-[#EDE8D0] mr-2">#9E2A2B</div>
                            <div class="h-7 rounded-full bg-gradient-to-r from-[#E09F3E] to-[#9E2A2B]"></div>
                        </div>
                        <div class="relative h-6 rounded-full shadow-sm">
                            <div class="absolute left-0 top-1/2 -translate-y-1/2 text-xs font-semibold text-[#4F4D46] ml-2">#FFF3B0</div>
                            <div class="absolute right-0 top-1/2 -translate-y-1/2 text-xs font-semibold text-[#EDE8D0] mr-2">#E09F3E</div>
                            <div class="h-7 rounded-full bg-gradient-to-r from-[#FFF3B0] to-[#E09F3E]"></div>
                        </div>
                        <div class="relative h-6 rounded-full shadow-sm">
                            <div class="absolute left-0 top-1/2 -translate-y-1/2 text-xs font-semibold text-[#EDE8D0] ml-2">#333333</div>
                            <div class="absolute right-0 top-1/2 -translate-y-1/2 text-xs font-semibold text-[#EDE8D0] mr-2">#9E2A2B</div>
                            <div class="h-7 rounded-full bg-gradient-to-r from-[#333333] to-[#9E2A2B]"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white shadow-lg rounded-xl p-8 flex flex-col items-center text-center">
            <h2 class="text-xl font-semibold tracking-wide text-gray-700 mb-6">BRAND VIBE</h2>
            <div class="grid grid-cols-2 gap-4 w-full max-w-lg">
                <div class="relative w-full aspect-square overflow-hidden rounded-xl shadow-sm">
                    <img src="https://i.pinimg.com/736x/51/6b/2b/516b2b12fd383fed778d53d61ad007c3.jpg"
                        alt="Brand vibe 1"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-300 hover:scale-105">
                </div>
                <div class="relative w-full aspect-square overflow-hidden rounded-xl shadow-sm">
                    <img src="https://i.pinimg.com/736x/8b/2a/12/8b2a12bf700b778358e92aa4dfa7212b.jpg"
                        alt="Brand vibe 2"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-300 hover:scale-105">
                </div>
                <div class="relative w-full aspect-square overflow-hidden rounded-xl shadow-sm">
                    <img src="https://i.pinimg.com/1200x/9c/ea/29/9cea292788b5003b1520ca2844cf9d52.jpg"
                        alt="Brand vibe 3"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-300 hover:scale-105">
                </div>
                <div class="relative w-full aspect-square overflow-hidden rounded-xl shadow-sm">
                    <img src="https://i.pinimg.com/736x/a7/7c/d2/a77cd2cfd4f3b6966b084cb1c4235edc.jpg"
                        alt="Brand vibe 4"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-300 hover:scale-105">
                </div>
            </div>
        </div>

        <div class="bg-white shadow-lg rounded-xl p-8 flex flex-col items-center text-center space-y-6">
            <h2 class="text-xl font-semibold tracking-wide text-gray-700 mb-1">Typography Showcase</h2>
            <h5 class="text-left text-gray-400 font-medium mb-1">Heading font</h5>
            <p class="text-3xl font-extrabold text-[#AF4B41] mb-2" style="font-family: 'Playfair Display', serif;">Playfair Display</p>
            <h5 class="text-left text-gray-400 font-medium mb-1">Body font</h5>
            <p class="text-2xl font-semibold text-[#FFD369] mb-2" style="font-family: 'Lato', sans-serif;">Lato</p>
            <p class="text-gray-600 text-sm mb-4">Elegant, friendly, and modern fonts for a cozy bakery vibe.</p>
        </div>

        <div class="bg-white shadow-lg rounded-xl p-8 flex flex-col items-center text-center space-y-6">
            <h2 class="text-xl font-semibold tracking-wide text-gray-700 mb-1">Buttons</h2>
            <h5 class="text-left text-gray-400 font-medium mb-1">Light mode</h5>
            <div class="flex gap-4 mb-6">
                <?= view('components/buttons/button_primary', ['label' => 'Primary', 'href' => '#']); ?>
                <?= view('components/buttons/button_secondary', ['label' => 'Secondary', 'href' => '#']); ?>
                <?= view('components/buttons/button_border', ['label' => 'Border', 'href' => '#']); ?>
                <?= view('components/buttons/button_primary', ['label' => 'Disabled', 'href' => '#', 'disable' => true]) ?>
            </div>
            <h5 class="text-left text-gray-400 font-medium mb-1">Dark mode</h5>
            <div class="bg-[#333333] p-6 rounded-xl flex gap-4 mb-6">
                <?= view('components/buttons/button_primary', ['label' => 'Primary', 'href' => '#', 'dark' => true, 'disable' => false]) ?>
                <?= view('components/buttons/button_secondary', ['label' => 'Secondary', 'href' => '#']) ?>
                <?= view('components/buttons/button_border', ['label' => 'Border', 'href' => '#']) ?>
                <?= view('components/buttons/button_primary', ['label' => 'Disabled', 'href' => '#', 'disable' => true]) ?>
            </div>
        </div>
    </div>
    <div class="max-w-7xl mx-auto px-6">
        <div class="bg-white shadow-lg rounded-xl p-6 flex flex-col items-center text-center mb-8">
            <h2 class="text-2xl font-semibold tracking-wide text-gray-700">Card Samples</h2>
        </div>
        <div class="grid md:grid-cols-3 gap-6 mb-12">
            <?= view('components/cards/card_excerpt', ['title' => 'Supreme!', 'excerpt' => 'More banana cake dishes to be discovered.', 'image' => 'https://linktoimage.com/image.jpg', 'href' => '#']) ?>
            <?= view('components/cards/card_stats', ['title' => 'Life is full of bananas—sometimes sweet, sometimes a little mushy, but always worth peeling.', 'href' => '#']) ?>
            <?= view('components/cards/card_service', ['s' => ['id' => 1, 'title' => 'Banana Supreme Cake', 'description' => 'A delicious cake made with ripe bananas and exotic spices.', 'cost' => 12.99, 'category' => 'Desserts', 'created_at' => '2025-09-29', 'is_available' => true, 'image' => 'https://linktoimage.com/cake.jpg']]) ?>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-6">
        <div class="bg-white shadow-lg rounded-xl p-6 flex flex-col items-center text-center mb-8">
            <h2 class="text-2xl font-semibold tracking-wide text-gray-700">Logos</h2>
        </div>
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <div class="bg-white shadow-lg rounded-xl p-6 flex flex-col items-center text-center">
                <h3 class="font-semibold text-lg text-gray-700 mb-4">Banana - Circle</h3>
                <div class="w-32 h-32 flex items-center justify-center mb-4">
                    <img src="https://static.vecteezy.com/system/resources/previews/045/952/907/non_2x/illustration-of-a-tempting-banana-cake-icon-great-for-bakery-logos-or-dessert-menus-vector.jpg"
                        class="rounded-full object-cover w-full h-full border-4 border-[#FFD369]">
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-xl p-6 flex flex-col items-center text-center">
                <h3 class="font-semibold text-lg text-gray-700 mb-4">Banana - Square</h3>
                <div class="w-32 h-32 flex items-center justify-center mb-4">
                    <img src="https://static.vecteezy.com/system/resources/previews/045/952/907/non_2x/illustration-of-a-tempting-banana-cake-icon-great-for-bakery-logos-or-dessert-menus-vector.jpg"
                        class="rounded-xl object-cover w-full h-full border-4 border-[#FFD369]">
                </div>
            </div>
        </div>
    </div>
    <?= view('components/footer') ?>
</body>

</html>