<?php
// Primary button
// $label: string
// $href: string
// $dark: boolean
// $disable: boolean
?>

<?php if ($disable ?? false) : ?>
    <a href="<?= esc($href ?? '#') ?>" class="inline-block opacity-50 shadow px-4 py-2 rounded-lg font-semibold text-white bg-[#9E2A2B] cursor-not-allowed">
        <?= esc($label ?? 'Primary') ?>
    </a>

<?php elseif ($dark ?? false) : ?>
    <a href="<?= esc($href ?? '#') ?>" class="inline-block shadow px-4 py-2 rounded-lg font-semibold text-white bg-[#7b2022] hover:bg-[#5e181a]">
        <?= esc($label ?? 'Primary') ?>
    </a>

<?php else : ?>
    <a href="<?= esc($href ?? '#') ?>" class="inline-block shadow px-4 py-2 rounded-lg font-semibold text-white bg-[#9E2A2B] hover:bg-[#7b2022]">
        <?= esc($label ?? 'Primary') ?>
    </a>
<?php endif; ?>