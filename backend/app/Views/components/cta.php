<?php
// CTA Fragment
// $label: string (button text)
// $href: string (button link)
// $bgImage: string|null (optional background image URL)

?>

<div class="relative cta-section my-12 rounded-lg overflow-hidden shadow-lg" style="min-height: 300px;">
    <?php if (!empty($bgImage)): ?>
        <div class="absolute inset-0" style="background-image: url('<?= esc($bgImage) ?>'); background-size: cover; background-position: center;"></div>
    <?php else: ?>
        <div class="absolute inset-0 bg-[#E09F3E]"></div>
    <?php endif; ?>

    <div class="absolute inset-0 bg-black bg-opacity-25"></div>

    <div class="relative text-center text-white py-12 px-6">
        <h2 class="text-3xl font-bold mb-4"><?= esc($label ?? 'Join Us Today!') ?></h2>
        <p class="mb-6 text-lg">Discover the sweetest adventure with Banana Odyssey 🍌</p>
        <a href="<?= esc($href ?? '#') ?>" class="bg-[#9E2A2B] hover:bg-[#7b2022] text-white px-6 py-3 rounded-lg font-semibold transition">
            <?= esc($label ?? 'Get Started') ?>
        </a>
    </div>
</div>