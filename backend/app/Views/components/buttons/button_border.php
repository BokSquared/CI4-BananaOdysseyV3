<?php
// Border button
// $label: string
// $href: string
// $dark: boolean
// $disable: boolean
?>

<?php if ($disable ?? false) : ?>
    <a href="<?= esc($href ?? '#') ?>" class="inline-block opacity-50 shadow px-4 py-2 rounded-lg font-semibold text-[#9E2A2B] border border-[#E09F3E] bg-transparent cursor-not-allowed">
        <?= esc($label ?? 'Border') ?>
    </a>

<?php elseif ($dark ?? false) : ?>
    <a href="<?= esc($href ?? '#') ?>" class="inline-block shadow px-4 py-2 rounded-lg font-semibold text-[#9E2A2B] border border-[#c4882f] bg-transparent hover:bg-[#c4882f] hover:text-[#9E2A2B]">
        <?= esc($label ?? 'Border') ?>
    </a>

<?php else : ?>
    <a href="<?= esc($href ?? '#') ?>" class="inline-block shadow px-4 py-2 rounded-lg font-semibold text-[#9E2A2B] border border-[#E09F3E] bg-transparent hover:bg-[#E09F3E] hover:text-[#9E2A2B]">
        <?= esc($label ?? 'Border') ?>
    </a>
<?php endif; ?>