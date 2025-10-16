<?php
// Component: cards/card_service.php
// $s: array|object containing service info
if (is_array($s)) {
    $svc = $s;
} elseif (is_object($s)) {
    $svc = [];
    $fields = ['id', 'title', 'description', 'cost', 'category', 'created_at', 'is_available', 'image', 'banner_image'];
    foreach ($fields as $f) {
        $svc[$f] = $s->{$f} ?? null;
    }
} else {
    $svc = [];
}
?>

<article class="flex flex-col h-full bg-white shadow-sm rounded-lg overflow-hidden hover:scale-105 hover:shadow-lg transition hover:-translate-y-[2px] duration-200 card <?php echo !empty($svc['is_available']) ? "" : "grayscale brightness-90 contrast-90 opacity-50"; ?>" data-id="<?= esc($svc['id'] ?? '') ?>" data-category="<?= esc($svc['category'] ?? '') ?>" data-cost="<?= esc($svc['cost'] ?? '') ?>" data-created="<?= esc($svc['created_at'] ?? '') ?>">
    <?php if (!empty($svc['is_available'])): ?>
        <a href="/services/<?= esc($svc['id']) ?>" class="duration-200 transform">
        <?php else: ?>
            <div class="cursor-not-allowed">
            <?php endif; ?>

            <div class="flex flex-col flex-1 mt-8 p-4">
                <h3 class="mb-1 min-h-[4rem] overflow-hidden font-medium text-slate-900 text-lg line-clamp-2"><?= esc($svc['title'] ?? 'Untitled') ?><?= !empty($svc['is_available']) ? "" : " (inactive)"; ?></h3>
                <p class="flex-1 min-h-[3rem] overflow-hidden text-slate-700 text-sm line-clamp-2"><?= esc(substr($svc['description'] ?? '', 0, 240)) ?><?= strlen($svc['description'] ?? '') > 240 ? '…' : ''; ?></p>
                <div class="flex justify-between items-center mt-4">
                    <div class="inline-flex items-center bg-indigo-50 px-3 py-1 rounded-full font-medium text-indigo-700 text-sm">$<?= number_format((float)($svc['cost'] ?? 0), 2) ?></div>
                </div>
            </div>

            <?php if (!empty($svc['is_available'])): ?>
        </a>
    <?php else: ?>
        </div>
    <?php endif; ?>
</article>