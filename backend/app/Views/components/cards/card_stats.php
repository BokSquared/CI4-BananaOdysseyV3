<?php
// Component: cards/card_stats.php
// $title: string
// $value: string|int
// $subtitle: string|null
// $href: string|null
// $class: string|null
?>

<div class="bg-white border rounded-xl p-6 shadow-lg flex flex-col justify-between <?php echo isset($class) ? esc($class) : ''; ?>">
    <?php if (!empty($title)): ?>
        <h3 class="font-bold text-lg mb-4 text-[#AF4B41] break-words"><?= esc($title) ?></h3>
    <?php endif; ?>
    <?php if (!empty($value)): ?>
        <p class="text-gray-500 mb-4"><?= esc($value) ?></p>
    <?php endif; ?>
    <?php if (!empty($subtitle)): ?>
        <p class="text-sm text-gray-400 mb-4"><?= esc($subtitle) ?></p>
    <?php endif; ?>
    <?php if (!empty($href)): ?>
        <a href="<?= esc($href) ?>" class="text-blue-500 text-sm mt-auto">Read more</a>
    <?php endif; ?>
</div>