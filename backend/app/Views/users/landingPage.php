<!DOCTYPE html>
<html lang="en">

<head>
    <?= view('components/head', ['title' => '🍌Banana Odyssey']) ?>
    <style>
        :root {
            --primary: #E09F3E;
            --secondary: #9E2A2B;
            --accent: #FFF3B0;
            --neutral: #333333;
        }

        body {
            font-family: 'Lato', sans-serif;
            margin: 0;
            padding: 0;
            scroll-behavior: smooth;
            background-color: var(--accent);
            color: var(--neutral);
        }

        a {
            text-decoration: none;
        }

        .hero {
            position: relative;
            background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('https://png.pngtree.com/thumb_back/fw800/background/20240601/pngtree-banana-bread-with-pecan-nuts-cut-on-the-table-image_15736440.jpg') no-repeat center/cover;
            min-height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 0 20px;
        }

        .hero::before {
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.2));
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 700px;
            color: var(--accent);
        }

        .hero-content h1 {
            font-family: 'Playfair Display', serif;
            font-size: 56px;
            font-weight: 900;
            margin-bottom: 20px;
            text-shadow: 2px 2px var(--secondary);
        }

        .hero-content p {
            font-size: 20px;
            margin-bottom: 30px;
        }

        .btn-order {
            background-color: var(--secondary);
            color: var(--accent);
            padding: 14px 32px;
            font-weight: bold;
            border-radius: 8px;
            transition: background 0.3s;
        }

        .btn-order:hover {
            background-color: var(--primary);
        }

        .about {
            padding: 80px 40px;
            background-color: var(--primary);
            color: var(--neutral);
            text-align: center;
        }

        .about h2 {
            font-family: 'Playfair Display', serif;
            font-size: 36px;
            margin-bottom: 20px;
        }

        .about p {
            font-size: 18px;
            line-height: 1.8;
            max-width: 800px;
            margin: 0 auto;
        }

        .flavors {
            padding: 80px 40px;
            background: url('https://i.pinimg.com/1200x/5e/ec/1a/5eec1a7687685bf9834f542c0d6d1d25.jpg') repeat;

            background-color: var(--accent);
            text-align: center;
        }

        .flavors h2 {
            font-family: 'Playfair Display', serif;
            font-size: 36px;
            margin-bottom: 50px;
            color: var(--secondary);
        }

        .flavor-card {
            background: #fff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease;
        }

        .flavor-card:hover {
            transform: translateY(-8px);
        }

        .flavor-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .flavor-card h4 {
            margin-top: 15px;
            font-size: 20px;
            color: var(--secondary);
        }

        .flavor-card p {
            font-size: 16px;
            color: #555;
            margin: 10px 20px 20px;
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 50px;
            height: 50px;
            background-color: var(--secondary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0.8;
            transition: opacity 0.3s ease;
        }

        .carousel-control-prev:hover,
        .carousel-control-next:hover {
            opacity: 1;
            background-color: var(--primary);
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-image: none;
            display: inline-block;
            width: 20px;
            height: 20px;
        }

        .carousel-control-prev-icon::after,
        .carousel-control-next-icon::after {
            content: '';
            display: block;
            width: 12px;
            height: 12px;
            border-top: 3px solid var(--accent);
            border-right: 3px solid var(--accent);
        }

        .carousel-control-prev-icon::after {
            transform: rotate(-135deg);
        }

        .carousel-control-next-icon::after {
            transform: rotate(45deg);
        }

        .flavor-card {
            max-width: 300px;
        }

        .testimonials {
            padding: 80px 20px;
            text-align: center;
            background-color: var(--primary);
            color: var(--accent);
        }

        .testimonials h2 {
            font-family: 'Playfair Display', serif;
            font-size: 36px;
            margin-bottom: 40px;
            color: var(--accent);
        }

        .testimonial-card {
            background: var(--accent);
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
            margin: 20px 0;
            transition: transform 0.3s ease;
        }

        .testimonial-card:hover {
            transform: scale(1.05);
        }

        .testimonial-text {
            font-size: 18px;
            font-style: italic;
            color: var(--neutral);
        }

        .testimonial-author {
            font-weight: bold;
            margin-top: 15px;
            color: var(--secondary);
        }
    </style>
</head>

<body>
    <?= view('components/header') ?>
    <section class="hero" data-parallax>
        <div class="hero-content" data-aos="fade-up">
            <h1>Banana Odyssey</h1>
            <p>Embark on a mythical journey of flavor, from Olympus to your table.<br>Soft, golden, and unforgettable.</p>
            <a href="#" class="btn-order">Begin the Voyage 🍌</a>
        </div>
    </section>

    <section class="about" data-aos="fade-up">
        <h2>The Legend</h2>
        <p>
            In the scrolls of taste, it is told that ripe bananas were gifted by the gods.
            Baked into golden loaves, they became the food of heroes and dreamers.
            Banana Odyssey continues this ancient tale — one slice at a time.
        </p>
    </section>

    <section class="flavors">
        <h2>Pantheon of Flavors</h2>
        <div id="flavorsCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <div class="d-flex justify-content-center gap-4">
                        <div class="flavor-card" style="max-width:300px;">
                            <img src="https://thumbs.dreamstime.com/b/upside-down-caramel-banana-cake-rustic-table-moist-upside-down-banana-cake-layered-caramel-topped-slices-355298339.jpg" alt="cake1">
                            <h4>Apollo’s Golden Slice</h4>
                            <p>Bright and radiant, glazed with honey.</p>
                        </div>
                        <div class="flavor-card" style="max-width:300px;">
                            <img src="https://images.immediate.co.uk/production/volatile/sites/2/2021/05/BananaWalnutLoafCake-b80daa2.jpg?quality=90&webp=true&resize=700,636" alt="cake2">
                            <h4>Athena’s Wisdom Loaf</h4>
                            <p>Balanced with nuts, crafted with care.</p>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="d-flex justify-content-center gap-4">
                        <div class="flavor-card" style="max-width:300px;">
                            <img src="https://butternutbakeryblog.com/wp-content/uploads/2022/05/inside-a-sliced-banana-cake-1024x1536.jpg" alt="cake3">
                            <h4>Dionysus’ Feast Cake</h4>
                            <p>Rich chocolate swirl, fit for celebrations.</p>
                        </div>
                        <div class="flavor-card" style="max-width:300px;">
                            <img src="https://hostessatheart.com/wp-content/uploads/2024/05/Recipe-for-Banana-Cake-h.jpg" alt="cake4">
                            <h4>Hermes’ Swift Delight</h4>
                            <p>Light, fluffy, and full of zest.</p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#flavorsCarousel" data-bs-slide="prev" aria-label="Previous">
                <span class="carousel-control-prev-icon"></span></button>
            <button class="carousel-control-next" type="button" data-bs-target="#flavorsCarousel" data-bs-slide="next" aria-label="Next">
                <span class="carousel-control-next-icon"></span></button>
        </div>
    </section>

    <section class="testimonials">
        <h2>The Oracle Speaks (and Peels Back the Truth)</h2>
        <div class="row justify-content-center">
            <div class="col-md-4" data-aos="fade-up">
                <div class="testimonial-card">
                    <p class="testimonial-text">“Un-peel-ievably good — I’m bananas for it!”</p>
                    <p class="testimonial-author">— Cassandra</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="150">
                <div class="testimonial-card">
                    <p class="testimonial-text">“Every bite is a bunch of joy — truly a peel of heaven!”</p>
                    <p class="testimonial-author">— Dion</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="testimonial-card">
                    <p class="testimonial-text">“I’m split between saying it’s divine or just a-peeling.”</p>
                    <p class="testimonial-author">— Hera</p>
                </div>
            </div>
        </div>
    </section>
    <?= view('components/cta', ['label' => 'Order Today!', 'href' => '/signup', 'bgImage' => 'https://i.pinimg.com/736x/59/58/04/595804daa165b11a56194b6cff5893b6.jpg']) ?>


    <?= view('components/footer') ?>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1200,
            once: true
        });

        document.addEventListener("scroll", function() {
            const hero = document.querySelector(".hero");
            let offset = window.pageYOffset;
            hero.style.backgroundPositionY = offset * 0.5 + "px";
        });
    </script>
</body>

</html>