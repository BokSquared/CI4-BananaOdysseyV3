<style>
    :root {
        --primary: #E09F3E;
        --secondary: #9E2A2B;
        --accent: #FFF3B0;
        --neutral: #333333;
    }

    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px 60px;
        background-color: var(--secondary);
        position: sticky;
        top: 0;
        z-index: 1000;
    }

    .header .title {
        font-family: 'Playfair Display', serif;
        font-size: 28px;
        font-weight: bold;
        color: var(--accent);
    }

    .btn-header {
        list-style: none;
        display: flex;
        gap: 25px;
        margin: 0;
        padding: 0;
    }

    .btn-header li a {
        color: var(--accent);
        font-weight: 500;
        transition: color 0.3s;
    }

    .btn-header li a:hover {
        color: var(--primary);
    }
</style>

<?php $user = session()->get('user'); ?>

<div class="header">
    <a class="title" href="/">🍌Banana Odyssey</a>
    <ul class="btn-header">
        <li><a href="#about">About</a></li>
        <li><a href="#menu">Menu</a></li>

        <?php if ($user): ?>
            <li><a href="<?= base_url('/logout') ?>" class="hover:text-yellow-200">Logout</a></li>
        <?php else: ?>
            <li><a href="<?= base_url('/login') ?>" class="hover:text-yellow-200">Log In</a></li>
            <li><a href="<?= base_url('/signup') ?>" class="hover:text-yellow-200">Sign Up</a></li>
        <?php endif; ?>
    </ul>
</div>