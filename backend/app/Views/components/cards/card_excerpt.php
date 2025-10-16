<?php
// Component: cards/card.php
// $title: string
// $excerpt: string
// $image: string|null
// $href: string|null
?>

<article class="border rounded-lg overflow-hidden shadow-sm bg-white flex flex-col h-full">
    <div class="p-4 flex flex-col flex-1">
        <?php if (!empty($title)): ?>
            <h3 class="font-semibold text-lg mb-2 text-[#AF4B41]"><?= esc($title) ?></h3>
        <?php endif; ?>
        <?php if (!empty($excerpt)): ?>
            <p class="text-sm text-gray-500 mb-4 flex-1"><?= esc($excerpt) ?></p>
        <?php endif; ?>
        <?php if (!empty($href)): ?>
            <a href="<?= esc($href) ?>" class="text-blue-500 text-sm mt-auto">Read more</a>
        <?php endif; ?>
    </div>
</article>