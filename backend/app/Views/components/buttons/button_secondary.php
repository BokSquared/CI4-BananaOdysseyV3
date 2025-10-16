<?php
// Secondary button
// $label: string
// $href: string
// $dark: boolean
// $disable: boolean
?>

<?php if ($disable ?? false) : ?>
    <a href="<?= esc($href ?? '#') ?>" class="inline-block opacity-50 shadow px-4 py-2 rounded-lg font-semibold text-[#9E2A2B] bg-[#E09F3E] cursor-not-allowed">
        <?= esc($label ?? 'Secondary') ?>
    </a>

<?php elseif ($dark ?? false) : ?>
    <a href="<?= esc($href ?? '#') ?>" class="inline-block shadow px-4 py-2 rounded-lg font-semibold text-[#9E2A2B] bg-[#c4882f] hover:bg-[#a87627]">
        <?= esc($label ?? 'Secondary') ?>
    </a>

<?php else : ?>
    <a href="<?= esc($href ?? '#') ?>" class="inline-block shadow px-4 py-2 rounded-lg font-semibold text-[#9E2A2B] bg-[#E09F3E] hover:bg-[#c4882f]">
        <?= esc($label ?? 'Secondary') ?>
    </a>
<?php endif; ?>