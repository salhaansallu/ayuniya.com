@extends('layouts.app')
@section('content')
    <section class="main_hero site-container" style="background-image: url({{ asset('images/hero/hero_top_bg.png') }});">
        <div class="row row-cols-2">
            <div class="col">
                <div class="content">
                    <h1>World&#039;s leading <span>herbal <br> medicine</span> market place</h1>
                    <p class="subtext">Welcome to Ayuniya, the world's leading marketplace for herbal medicine and hospital
                        appointment booking in the field of Ayurvedic healthcare. We are passionate about providing a
                        comprehensive platform that connects individuals with authentic Ayurvedic remedies and convenient
                        healthcare services.</p>
                    <a href="https://store.ayuniya.com" class="primary-btn">Shop</a>
                    <a href="#about" class="primary-btn border-only">Learn more</a>

                </div>
            </div>
            <div class="col">
                <img src="{{ asset('images/hero/hero_device.png') }}" alt="">
            </div>
        </div>
    </section>

    <section id="about" class="site-container">
        <div class="row row-cols-2">
            <div class="col">
                <img src="{{ asset('images/static/ayurvadic-pill.png') }}" alt="">
            </div>
            <div class="col">
                <div class="content">
                    <div class="head">
                        <h2>About <span>Ayuniya</span></h2>
                    </div>
                    <p class="subtext">At Ayuniya, we believe in the power of Ayurveda to promote holistic well-being and
                        restore balance in our lives. Our marketplace brings together a diverse range of trusted suppliers
                        and healthcare providers who specialize in Ayurvedic medicine, ensuring that you have access to
                        high-quality and genuine herbal remedies.</p>
                    <a href="/contact-us" class="primary-btn border-only">Contact us</a>
                </div>
            </div>
        </div>
    </section>

    <section id="whyayuniya" class="site-container">
        <div class="head mb-lg-5 text-center">
            <h2 class="text-center">Why <span>Ayuniya</span></h2>
        </div>
        <div class="why">
            <h4>Experties</h4>
            <p class="subtext">Explore our extensive collection of herbal medicines, carefully curated by experts in the
                field. From traditional formulations to innovative herbal supplements, Ayuniya offers a wide range of
                natural products to address various health concerns and support overall wellness.</p>
        </div>

        <div class="why text-end">
            <h4>Hospital appointments</h4>
            <p class="subtext">In addition to herbal medicine, Ayuniya is dedicated to simplifying the process of booking
                appointments with experienced Ayurvedic doctors and healthcare professionals. We understand the importance
                of finding the right practitioner who can provide personalized guidance and treatment. With our
                user-friendly platform, you can easily search for and schedule appointments with trusted Ayurvedic
                practitioners who specialize in different areas of healthcare.</p>
        </div>

        <div class="why">
            <h4>Our mission</h4>
            <p class="subtext">Our mission at Ayuniya is to empower individuals to take charge of their health and
                well-being through Ayurveda. We are committed to providing a reliable platform that connects you with
                trusted suppliers, healthcare professionals, and authentic Ayurvedic remedies.</p>
            <p class="subtext">Join us on this transformative journey and discover the world of Ayurvedic healthcare at
                Ayuniya. Embrace the power of nature and ancient wisdom to nurture your body, mind, and soul. Experience the
                benefits of Ayurveda and unlock a healthier, more balanced life.</p>
            <a href="" class="primary-btn">Shop now</a>
        </div>
    </section>

    <section id="products" class="site-container">
        <div class="head mb-5">
            <h2 class="text-center">Our <span>Products</span></h2>
        </div>
        <div class="row row-cols-2">
            <div class="col">
                <div class="project_img" style="background-image: url({{ asset('images/products/ayuniya_web.png') }});">
                    <h3><a href="https://store.ayuniya.com">Ayuniya Store</a></h3>
                </div>
            </div>

            <div class="col">
                <div class="project_img" style="background-image: url({{ asset('images/products/ayuniya_lms_loading.gif') }});">
                    <h3><a>Ayuniya LMS <br> Coming soon</a></h3>
                </div>
            </div>
        </div>
    </section>
@endsection
