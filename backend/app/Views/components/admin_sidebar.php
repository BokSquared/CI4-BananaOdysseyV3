<!-- app/Views/components/admin_sidebar.php -->
<aside class="w-64 bg-[var(--secondary)] text-[var(--accent)] min-h-screen p-6 flex flex-col shadow-xl">

    <nav class="flex flex-col gap-4">
        <a href="/admin/adminDashboard"
            class="hover:bg-[var(--accent)] hover:text-[var(--secondary)] px-4 py-2 rounded-lg transition font-semibold">
            📊 Dashboard
        </a>
        <a href="/admin/accounts"
            class="hover:bg-[var(--accent)] hover:text-[var(--secondary)] px-4 py-2 rounded-lg transition font-semibold">
            👥 Accounts
        </a>
        <a href="/admin/menu"
            class="hover:bg-[var(--accent)] hover:text-[var(--secondary)] px-4 py-2 rounded-lg transition font-semibold">
            🍞 Menu
        </a>
        <a href="/admin/orders"
            class="hover:bg-[var(--accent)] hover:text-[var(--secondary)] px-4 py-2 rounded-lg transition font-semibold">
            🧾 Orders
        </a>
    </nav>

    <div class="mt-auto pt-10 border-t border-[var(--accent)]/50">
        <p class="text-sm opacity-70">&copy; <?= date('Y') ?> Banana Odyssey</p>
    </div>
</aside>