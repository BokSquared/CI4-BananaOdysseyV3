<?php

/**
 * components/head.php
 * 
 * Renders a <head> block with Bootstrap 5, Tailwind, AOS, and Lato font.
 * Uses a custom color palette defined as CSS variables.
 * 
 * Usage:
 * <?= view('components/head', ['title' => 'Page Title']) ?>
 */

$title = $title ?? ' ';
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?= esc($title) ?></title>

    <!-- Bootstrap 5 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet">
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
    </script>

    <!-- AOS (Animate On Scroll) -->
    <link
        href="https://unpkg.com/aos@2.3.1/dist/aos.css"
        rel="stylesheet">
    <script
        src="https://unpkg.com/aos@2.3.1/dist/aos.js">
    </script>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Font: Lato -->
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap"
        rel="stylesheet">

    <!-- Global Styles -->
    <style>
        :root {
            --primary: #E09F3E;
            --secondary: #9E2A2B;
            --accent: #FFF3B0;
            --neutral: #333333;
            --input-bg: rgba(255, 255, 255, 0.95);
            --input-border: rgba(0, 0, 0, 0.1);
        }

        html,
        body {
            font-family: 'Lato', system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            color: var(--neutral);
            background-color: #fff;
        }

        body {
            background: linear-gradient(to right, var(--primary), var(--secondary));
        }

        h1 {
            font-family: 'Playfair Display,' serif;
        }

        .text-primary {
            color: var(--primary);
        }

        .text-secondary {
            color: var(--secondary);
        }

        .text-accent {
            color: var(--accent);
        }

        .text-neutral {
            color: var(--neutral);
        }

        .bg-primary {
            background-color: var(--primary);
            color: white;
        }

        .bg-secondary {
            background-color: var(--secondary);
            color: white;
        }

        .bg-accent {
            background-color: var(--accent);
            color: var(--neutral);
        }

        .bg-neutral {
            background-color: var(--neutral);
            color: white;
        }

        .btn-primary {
            background-color: var(--primary);
            color: white;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #d98c1a;
        }

        .btn-secondary {
            background-color: var(--secondary);
            color: white;
            transition: background-color 0.3s ease;
        }

        .btn-secondary:hover {
            background-color: #7a1f1f;
        }
    </style>
</head>