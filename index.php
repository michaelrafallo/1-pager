<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechNova - Digital & IT Solutions</title>
    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-color: #2563eb;
            --dark-color: #213547;
            --light-color: #f8f9fa;
            --white: #ffffff;
            --gray: #6c757d;
            --section-padding: 80px;
            --section-padding-mobile: 60px;
            --container-padding: 20px;
            --card-padding: 30px;
            --standard-gap: 30px;
            --small-gap: 20px;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: var(--light-color);
            overflow-x: hidden;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 var(--container-padding);
        }
        .hero .container {
            display: flex;        	
        }

        section {
            padding: var(--section-padding) 0;
        }

        h1, h2 {
            margin-bottom: var(--small-gap);
            color: var(--dark-color);
            font-weight: 700;
        }

        p {
            margin-bottom: var(--small-gap);
        }

        a {
        	color: inherit;	
        }

        /* Navigation */
        header {
            background-color: var(--white);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }

        .logo {
            font-size: 24px;
            font-weight: 700;
            color: var(--primary-color);
        }

        .logo span {
            color: var(--dark-color);
        }

        .nav-links {
            display: flex;
            gap: var(--standard-gap);
        }

        .nav-links a {
            text-decoration: none;
            color: var(--dark-color);
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: var(--primary-color);
        }

        .menu-toggle {
            display: none;
            cursor: pointer;
            font-size: 24px;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #2563eb 0%, #3b82f6 100%);
            min-height: 100vh;
            color: var(--white);
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
            padding-top: 80px; /* Account for fixed header */
        }

        .hero-content {
            max-width: 600px;
            padding: var(--standard-gap) 0;
            position: relative;
            z-index: 10;
        }

        .hero h1 {
            font-size: 48px;
            margin-bottom: var(--standard-gap);
            color: var(--white);
        }

        .hero p {
            font-size: 18px;
            margin-bottom: var(--standard-gap);
        }

        .btn {
            display: inline-block;
            background-color: var(--white);
            color: var(--primary-color);
            padding: 12px 24px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            text-align: center;
        }

        .btn:hover {
            background-color: var(--dark-color);
            color: var(--white);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .hero-image {

        }

        /* Services Section */
        .services {
            background-color: var(--white);
        }

        .section-title {
            text-align: center;
            margin-bottom: calc(var(--standard-gap) * 1.7);
            position: relative;
        }

        .section-title h2 {
            font-size: 36px;
            position: relative;
            display: inline-block;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            width: 80px;
            height: 4px;
            background-color: var(--primary-color);
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: var(--standard-gap);
        }

        .service-card {
            background-color: var(--light-color);
            border-radius: 10px;
            padding: var(--card-padding);
            transition: all 0.3s;
            height: 100%;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            display: flex;
            flex-direction: column;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .service-icon {
            font-size: 40px;
            color: var(--primary-color);
            margin-bottom: var(--small-gap);
        }

        .service-card h3 {
            margin-bottom: var(--small-gap);
        }

        /* About Section */
        .about {
            background-color: var(--light-color);
        }

        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
        }

        .about-image {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            height: 100%;
        }

        .about-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .about-content h2 {
            margin-bottom: var(--standard-gap);
        }

        .stat-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: var(--small-gap);
            margin-top: var(--standard-gap);
        }

        .stat-item {
            text-align: center;
            padding: 20px;
            background-color: var(--white);
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .stat-number {
            font-size: 36px;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 10px;
        }

        /* Contact Section */
        .contact {
            background-color: var(--dark-color);
            color: var(--white);
        }

        .contact .section-title h2 {
            color: var(--white);
        }

        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
        }

        .contact-info {
            display: flex;
            flex-direction: column;
            gap: var(--standard-gap);
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            gap: 15px;
        }

        .contact-icon {
            font-size: 24px;
            color: var(--primary-color);
        }

        .contact-form {
            background-color: var(--white);
            padding: var(--card-padding);
            border-radius: 10px;
        }

        .form-group {
            margin-bottom: var(--small-gap);
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--dark-color);
        }

        .form-control {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-family: inherit;
        }

        textarea.form-control {
            height: 150px;
            resize: vertical;
        }

        .btn-submit {
            background-color: var(--primary-color);
            color: var(--white);
            border: none;
            padding: 12px 24px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s;
            width: 100%;
        }

        .btn-submit:hover {
            background-color: #1d4ed8;
        }

        /* Footer */
        footer {
            background-color: var(--dark-color);
            color: var(--white);
            padding: var(--small-gap) 0;
            text-align: center;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* Responsive Styles */
        @media (max-width: 992px) {
            .about-grid,
            .contact-grid {
                grid-template-columns: 1fr;
                gap: var(--standard-gap);
            }
            
            .hero-image {
                width: 50%;
                opacity: 0.7;
            }
            
            .about-image {
                max-height: 400px;
            }
        }

        @media (max-width: 768px) {
            :root {
                --section-padding: var(--section-padding-mobile);
            }
            
            .menu-toggle {
                display: block;
            }
            
            .nav-links {
                position: absolute;
                top: 70px;
                left: 0;
                background-color: var(--white);
                width: 100%;
                padding: var(--small-gap);
                flex-direction: column;
                gap: 15px;
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
                transform: translateY(-150%);
                transition: transform 0.3s;
                z-index: 100;
            }
            
            .nav-links.active {
                transform: translateY(0);
            }
            
            .hero h1 {
                font-size: 36px;
            }
            
            .hero-content {
                padding: var(--standard-gap) 0;
                max-width: 100%;
            }
            
            .hero-image {
                display: none;
            }
            
            .service-card {
                padding: var(--small-gap);
            }
            
            .contact-item {
                align-items: flex-start;
            }
        }

        @media (max-width: 576px) {
            .container {
                padding: 0 15px;
            }
            
            .hero {
                min-height: calc(100vh - 70px);
                padding-top: 70px;
            }
            
            .hero h1 {
                font-size: 28px;
                margin-bottom: var(--small-gap);
            }
            
            .hero p {
                font-size: 16px;
                margin-bottom: var(--small-gap);
            }
            
            .section-title h2 {
                font-size: 28px;
            }
            
            .stat-grid {
                grid-template-columns: 1fr;
            }
            
            .services-grid {
                gap: var(--small-gap);
            }
            
            .contact-form, 
            .service-card {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Header with Navigation -->
    <header>
        <div class="container">
            <nav>
                <div class="logo">Tech<span>Nova</span></div>
                <div class="menu-toggle" id="menuToggle">☰</div>
                <div class="nav-links" id="navLinks">
                    <a href="#home">Home</a>
                    <a href="#services">Services</a>
                    <a href="#about">About</a>
                    <a href="#contact">Contact</a>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <div class="hero-content">
                <h1>Transforming Business Through Technology</h1>
                <p>We deliver innovative digital solutions that drive growth and efficiency. Let our expert team handle your IT needs while you focus on your core business.</p>
                <a href="#contact" class="btn">Get Started</a>
            </div>
            <div class="hero-image">
                <img src="https://placehold.co/600x400?text=Tech+Nova" alt="Digital Solutions">
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="services">
        <div class="container">
            <div class="section-title">
                <h2>Our Services</h2>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">💻</div>
                    <h3>Web Development</h3>
                    <p>Custom websites and web applications built with the latest technologies to deliver exceptional user experiences.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">📱</div>
                    <h3>Mobile Solutions</h3>
                    <p>Native and cross-platform mobile applications designed to engage users and expand your reach.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">🔒</div>
                    <h3>Cybersecurity</h3>
                    <p>Comprehensive security solutions to protect your data and systems from evolving threats.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">☁️</div>
                    <h3>Cloud Services</h3>
                    <p>Scalable cloud infrastructure and migration services to optimize performance and reduce costs.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
        <div class="container">
            <div class="section-title">
                <h2>Why Choose TechNova?</h2>
            </div>
            <div class="about-grid">
                <div class="about-image">
                    <img src="https://placehold.co/600x400?text=About+Us" alt="About Us">
                </div>
                <div class="about-content">
                    <p>With over a decade of experience in the digital transformation space, we've helped businesses of all sizes leverage technology to achieve their goals.</p>
                    <p>Our team of certified professionals combines technical expertise with industry knowledge to deliver solutions that address your unique challenges.</p>
                    <div class="stat-grid">
                        <div class="stat-item">
                            <div class="stat-number">200+</div>
                            <div class="stat-title">Projects Completed</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">50+</div>
                            <div class="stat-title">Expert Consultants</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">98%</div>
                            <div class="stat-title">Client Satisfaction</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">12+</div>
                            <div class="stat-title">Years of Experience</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="section-title">
                <h2>Get In Touch</h2>
            </div>
            <div class="contact-grid">
                <div class="contact-info">
                    <div class="contact-item">
                        <div class="contact-icon">📍</div>
                        <div>
                            <h3>Our Location</h3>
                            <p>123 Tech Avenue, Innovation District, CA 90210</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">📞</div>
                        <div>
                            <h3>Phone Number</h3>
                            <p>(555) 123-4567</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">✉️</div>
                        <div>
                            <h3>Email Address</h3>
                            <p>info@technova.com</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">⏰</div>
                        <div>
                            <h3>Business Hours</h3>
                            <p>Monday - Friday: 9:00 AM - 6:00 PM</p>
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <form id="contactForm">
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="message">How Can We Help?</label>
                            <textarea id="message" class="form-control" required></textarea>
                        </div>
                        <button type="submit" class="btn-submit">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2025 powered by <a href="https://claude.ai/">claude.ai</a>. All Rights Reserved.</p>
        </div>
    </footer>

    <script>
        // Mobile Menu Toggle
        document.getElementById('menuToggle').addEventListener('click', function() {
            document.getElementById('navLinks').classList.toggle('active');
        });

        // Smooth Scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                const headerHeight = document.querySelector('header').offsetHeight;
                const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - headerHeight;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
                
                // Close mobile menu if open
                document.getElementById('navLinks').classList.remove('active');
            });
        });

        // Form Submission
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // In a real scenario, you would handle form submission with AJAX
            alert('Thank you for your message! We will get back to you soon.');
            this.reset();
        });

        // Check if element is in viewport for animations
        function isInViewport(element) {
            const rect = element.getBoundingClientRect();
            return (
                rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.bottom >= 0
            );
        }

        // Add scroll animations
        const animateOnScroll = () => {
            const serviceCards = document.querySelectorAll('.service-card');
            const statsItems = document.querySelectorAll('.stat-item');
            
            [...serviceCards, ...statsItems].forEach(item => {
                if (isInViewport(item)) {
                    item.style.opacity = 1;
                    item.style.transform = 'translateY(0)';
                }
            });
        };

        // Initialize animations
        window.addEventListener('load', () => {
            const serviceCards = document.querySelectorAll('.service-card');
            const statsItems = document.querySelectorAll('.stat-item');
            
            [...serviceCards, ...statsItems].forEach(item => {
                item.style.opacity = 0;
                item.style.transform = 'translateY(20px)';
                item.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            });
            
            // Trigger initial animation check
            animateOnScroll();
        });

        // Listen for scroll events
        window.addEventListener('scroll', animateOnScroll);
    </script>
</body>
</html>