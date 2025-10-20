<?php
$errors = session()->getFlashdata('errors') ?? [];
$old = session()->getFlashdata('old') ?? [];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?= view('components/head', ['title' => '🍌Sign Up']) ?>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Lato', sans-serif;
        }

        html,
        body {
            height: 100%;
            width: 100%;
            display: flex;
            flex-direction: row-reverse;
            background-color: var(--primary);
            color: var(--accent);
            overflow: hidden;
        }

        .signup-section {
            flex: 4;
            background: var(--secondary);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 60px 80px;
            box-shadow: -5px 0 15px rgba(0, 0, 0, 0.25);
            border-radius: 30px 0 0 30px;
        }

        .signup-card {
            width: 100%;
            max-width: 380px;
            text-align: left;
            animation: fadeIn 1.2s ease;
        }

        .signup-card h2 {
            color: var(--accent);
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 6px;
            font-family: 'Playfair Display', serif;
        }

        .signup-card p.subtitle {
            font-size: 16px;
            color: var(--primary);
            margin-bottom: 30px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .input-group input {
            width: 100%;
            padding: 10px 14px;
            background: var(--input-bg);
            border: 1px solid var(--input-border);
            border-radius: 10px;
            font-size: 14px;
            color: var(--neutral);
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .input-group input::placeholder {
            color: rgba(80, 80, 80, 0.6);
        }

        .input-group input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 6px rgba(224, 159, 62, 0.6);
            background: #fff;
        }

        .btn {
            width: 100%;
            background: linear-gradient(90deg, var(--accent), #FFD54F);
            border: none;
            color: var(--neutral);
            font-weight: bold;
            padding: 10px;
            border-radius: 20px;
            cursor: pointer;
            font-size: 15px;
            transition: all 0.3s ease;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.15);
            margin-top: 5px;
        }

        .btn:hover {
            background: linear-gradient(90deg, #FFD54F, var(--accent));
            transform: translateY(-2px);
        }

        .divider {
            display: flex;
            align-items: center;
            text-align: center;
            color: var(--primary);
            font-size: 13px;
            margin: 18px 0;
        }

        .divider::before,
        .divider::after {
            content: "";
            flex: 1;
            border-bottom: 1px solid var(--primary);
            margin: 0 10px;
        }

        .social-login {
            display: flex;
            justify-content: center;
            gap: 16px;
            margin-bottom: 2px;
        }

        .social-login img {
            width: 36px;
            height: 36px;
            cursor: pointer;
            transition: transform 0.25s ease;
        }

        .social-login img:hover {
            transform: scale(1.1);
        }

        .register {
            margin-top: 8px;
            font-size: 13px;
            text-align: center;
            color: var(--primary);
        }

        .register a {
            color: var(--accent);
            text-decoration: none;
            font-weight: bold;
        }

        .register a:hover {
            text-decoration: underline;
        }

        .return-home {
            text-align: center;
            margin-top: 10px;
        }

        .hero-section {
            flex: 5;
            background: url('https://i.pinimg.com/736x/47/1f/48/471f48642e4f138175a86b2a7f804337.jpg') no-repeat center center;
            background-size: cover;
            position: relative;
            overflow: hidden;
            border-radius: 0 30px 30px 0;
        }

        .hero-section::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(to left, rgba(0, 0, 0, 0.45), rgba(158, 42, 43, 0.4));
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 900px) {
            body {
                flex-direction: column;
                overflow-y: auto;
            }

            .hero-section {
                flex: none;
                height: 40vh;
                border-radius: 0;
            }

            .signup-section {
                flex: none;
                height: auto;
                border-radius: 30px 30px 0 0;
                padding: 30px 40px;
            }
        }
    </style>
</head>

<body>
    <div class="hero-section"></div>
    <div class="signup-section">
        <div class="signup-card">
            <h2>Create Account</h2>
            <p class="subtitle">Join Banana Odyssey today</p>

            <form action="/signup" method="post" novalidate>
                <div class="input-group">
                    <input
                        type="text"
                        name="first_name"
                        placeholder="First Name"
                        value="<?= esc($old['first_name'] ?? '') ?>"
                        required>
                </div>

                <div class="input-group">
                    <input
                        type="text"
                        name="middle_name"
                        placeholder="Middle Name"
                        value="<?= esc($old['middle_name'] ?? '') ?>">
                </div>

                <div class="input-group">
                    <input
                        type="text"
                        name="last_name"
                        placeholder="Last Name"
                        value="<?= esc($old['last_name'] ?? '') ?>"
                        required>
                </div>

                <div class="input-group">
                    <input
                        type="email"
                        name="email"
                        placeholder="Email"
                        value="<?= esc($old['email'] ?? '') ?>"
                        required>
                    <?php if (!empty($errors['email'])): ?>
                        <p class="mt-1 text-red-600 text-sm"><?= esc($errors['email']) ?></p>
                    <?php endif; ?>
                </div>

                <div class="input-group">
                    <input
                        type="password"
                        name="password"
                        placeholder="Password"
                        required>
                    <?php if (!empty($errors['password'])): ?>
                        <p class="mt-1 text-red-600 text-sm"><?= esc($errors['password']) ?></p>
                    <?php endif; ?>
                </div>

                <button type="submit" class="btn">Sign Up</button>

                <div class="divider">or access quickly with</div>

                <div class="social-login">
                    <img src="https://cdn-icons-png.flaticon.com/512/281/281764.png" alt="Google">
                    <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook">
                </div>

                <div class="register">
                    Already have an account? <a href="/login">Log In</a>
                </div>

                <div class="return-home">
                    <?= view('components/buttons/button_secondary', ['label' => 'Return to Home', 'href' => '/']); ?>
                </div>
            </form>
        </div>
    </div>
</body>

</html>