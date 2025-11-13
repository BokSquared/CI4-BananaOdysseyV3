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

<div class="header">
    <a class="title" href="#">🍌Banana Odyssey</a>
    <ul class="btn-header">
        <li><a href="/">Home</a></li>
        <li><a href="#">Menu</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="/login">Login</a></li>
        <li><a href="/signup">Sign Up</a></li>
    </ul>
</div>