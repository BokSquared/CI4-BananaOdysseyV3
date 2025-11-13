<!DOCTYPE html>
<html lang="en">

<head>
    <?= view('components/head', ['title' => '🍌Login']) ?>
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
            background-color: var(--secondary);
            color: var(--accent);
            display: flex;
            flex-direction: row-reverse;
            overflow: hidden;
        }

        .login-side {
            flex: 4;
            background: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 80px;
            box-shadow: -5px 0 15px rgba(0, 0, 0, 0.25);
            border-radius: 30px 0 0 30px;
        }

        .login-card {
            width: 100%;
            max-width: 420px;
            background: transparent;
            text-align: left;
            animation: fadeIn 1.2s ease;
        }

        .login-card h2 {
            color: var(--secondary);
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 8px;
            font-family: 'Playfair Display', serif;
        }

        .login-card p.subtitle {
            font-size: 18px;
            color: var(--accent);
            margin-bottom: 40px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        .input-group input {
            width: 100%;
            padding: 14px 18px;
            border: none;
            border-radius: 25px;
            font-size: 16px;
            transition: box-shadow 0.3s ease;
        }

        .input-group input:focus {
            outline: none;
            box-shadow: 0 0 0 2px var(--neutral);
        }

        .forgot-password {
            text-align: right;
            margin-top: 5px;
            margin-bottom: 10px;
            font-size: 14px;
        }

        .forgot-password a {
            color: var(--secondary);
            text-decoration: none;
        }

        .forgot-password a:hover {
            text-decoration: underline;
        }

        .btn {
            width: 100%;
            background: linear-gradient(90deg, var(--accent), #FFD54F);
            border: none;
            color: var(--neutral);
            font-weight: bold;
            padding: 14px;
            border-radius: 25px;
            cursor: pointer;
            font-size: 17px;
            transition: all 0.3s ease;
        }

        .btn:hover {
            background: linear-gradient(90deg, #FFD54F, var(--accent));
            transform: translateY(-2px);
        }

        .divider {
            display: flex;
            align-items: center;
            text-align: center;
            color: var(--secondary);
            margin: 25px 0;
            font-size: 14px;
        }

        .divider::before,
        .divider::after {
            content: "";
            flex: 1;
            border-bottom: 1px solid var(--secondary);
            margin: 0 10px;
        }

        .social-login {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .social-login img {
            width: 42px;
            height: 42px;
            cursor: pointer;
            transition: transform 0.25s ease;
        }

        .social-login img:hover {
            transform: scale(1.1);
        }

        .register {
            margin-top: 25px;
            font-size: 15px;
            text-align: center;
            color: var(--neutral);
        }

        .register a {
            color: var(--secondary);
            text-decoration: none;
            font-weight: bold;
        }

        .register a:hover {
            text-decoration: underline;
        }

        .hero-side {
            flex: 5;
            background: url('https://pics.craiyon.com/2023-09-04/94352fb97950460fa5ceb885749c7abb.webp') no-repeat center center;
            background-size: cover;
            position: relative;
            overflow: hidden;
            border-radius: 0 30px 30px 0;
        }

        .hero-side::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.35);
        }

        .return-home {
            text-align: center;
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
            }

            .hero-side {
                flex: none;
                height: 40vh;
                border-radius: 0;
            }

            .login-side {
                flex: none;
                height: 60vh;
                border-radius: 30px 30px 0 0;
                padding: 30px 40px;
            }
        }
    </style>
</head>

<body>
    <div class="hero-side"></div>

    <div class="login-side">
        <div class="login-card">
            <h2>Welcome Back</h2>
            <p class="subtitle">Log in to your account</p>

            <form>
                <div class="input-group">
                    <input type="text" placeholder="Email">
                </div>
                <div class="input-group">
                    <input type="password" placeholder="Password">
                </div>

                <div class="forgot-password">
                    <a href="#">Forgot password?</a>
                </div>

                <button type="submit" class="btn">Log In</button>

                <div class="divider">or access quickly with</div>

                <div class="social-login">
                    <img src="https://cdn-icons-png.flaticon.com/512/281/281764.png" alt="Google">
                    <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook">
                </div>

                <div class="register">
                    Don’t have an account? <a href="/signup">Sign Up</a>
                </div>

                <div class="return-home">
                    <?= view('components/buttons/button_primary', ['label' => 'Return to Home', 'href' => '/']); ?>
                </div>
            </form>
        </div>
    </div>
</body>

</html>