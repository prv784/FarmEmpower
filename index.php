<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmer Empowerment Initiative</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="styles.css">
    <script src="js/languages.js"></script>
    <script src="js/translations.js"></script>
    <script src="js/language-manager.js"></script>
    <style>
       
        .floating {
            animation: floating 3s ease-in-out infinite;
        }
        @keyframes floating {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }
        .pulse {
            animation: pulse 2s infinite;
        }
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        .fade-in {
            opacity: 0;
            transition: opacity 0.5s ease-in;
        }
        .fade-in.visible {
            opacity: 1;
        }
        .service-card {
            transition: all 0.3s ease;
        }
        .service-card:hover {
            transform: translateY(-10px);
        }
        .counter {
            transition: all 0.5s ease;
        }
        .parallax {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Loading Screen -->
    <div id="loading-screen" class="fixed inset-0 bg-white z-50 flex items-center justify-center">
        <div class="text-center">
            <div class="w-16 h-16 border-4 border-green-600 border-t-transparent rounded-full animate-spin mx-auto"></div>
            <p class="mt-4 text-green-600 font-semibold">Loading FarmEmpower...</p>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="bg-green-600 text-white p-4 fixed w-full z-40 transition-all duration-300" id="main-nav">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <div class="bg-white w-12 h-12 rounded-full flex items-center justify-center relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-green-400 to-green-600 rounded-full opacity-20"></div>
                    <i class="fas fa-leaf text-2xl text-green-600 transform -rotate-12"></i>
                    <i class="fas fa-seedling text-xl text-green-500 absolute -bottom-1 -right-1"></i>
                </div>
                <div class="flex flex-col">
                    <div class="text-2xl font-bold tracking-wide">FarmEmpower</div>
                    <div class="text-xs text-green-200">Growing Together</div>
                </div>
            </div>
            <div class="hidden md:flex space-x-8">
                <a href="#home" class="hover:text-green-200 transition duration-300 flex items-center">
                    <i class="fas fa-home mr-2"></i>
                    <span>Home</span>
                </a>
                <a href="#services" class="hover:text-green-200 transition duration-300 flex items-center">
                    <i class="fas fa-tools mr-2"></i>
                    <span>Services</span>
                </a>
                <a href="#about" class="hover:text-green-200 transition duration-300 flex items-center">
                    <i class="fas fa-info-circle mr-2"></i>
                    <span>About</span>
                </a>
                <a href="pages/team.html" class="hover:text-green-200 transition duration-300 flex items-center">
                    <i class="fas fa-users mr-2"></i>
                    <span>Our Team</span>
                </a>
                <a href="index.html#contact" class="hover:text-green-200 transition duration-300 flex items-center">
                    <i class="fas fa-envelope mr-2"></i>
                    <span id="nav-contact">Contact</span>
                </a>
                <a href="pages/blog/blogpage.html" class="hover:text-green-200 transition duration-300 flex items-center">
                    <i class="fas fa-blog mr-2"></i>
                    <span id="nav-blog">Blog</span>
                </a>
                <div class="relative group">
                    <button class="hover:text-green-200 transition duration-300 flex items-center">
                        <i class="fas fa-globe mr-2"></i>
                        <span id="current-language">English</span>
                        <i class="fas fa-chevron-down ml-2 text-xs"></i>
                    </button>
                    <div class="absolute right-0 mt-2 w-40 bg-white rounded-lg shadow-lg py-2 hidden group-hover:block z-10">
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-green-100 hover:text-green-700" data-lang="en">English</a>
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-green-100 hover:text-green-700" data-lang="hi">हिंदी (Hindi)</a>
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-green-100 hover:text-green-700" data-lang="pa">ਪੰਜਾਬੀ (Punjabi)</a>
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-green-100 hover:text-green-700" data-lang="ta">தமிழ் (Tamil)</a>
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-green-100 hover:text-green-700" data-lang="te">తెలుగు (Telugu)</a>
                    </div>
                </div>
                <div id="auth-buttons" class="flex items-center">
                    <a href="pages/login.php" class="hover:text-green-200 transition duration-300 flex items-center" id="login-btn">
                        <i class="fas fa-sign-in-alt mr-2"></i>
                        <span>Login</span>
                    </a>
                </div>
                <div id="user-welcome" class="hidden">
                    <div class="flex items-center space-x-4">
                        <div class="bg-white w-10 h-10 rounded-full flex items-center justify-center shadow-md">
                            <i class="fas fa-user text-green-600"></i>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-green-200 text-sm">Welcome,</span>
                            <span id="user-email" class="font-medium text-white"></span>
                        </div>
                        <button id="logout-btn" class="text-green-200 hover:text-white transition duration-300">
                            <i class="fas fa-sign-out-alt"></i>
                        </button>
                    </div>
                </div>
            </div>
            <button class="md:hidden" id="menu-btn">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>
    </nav>

  
    <section id="home" class="relative text-white py-32 overflow-hidden min-h-screen flex items-center">
        <!-- Background with Parallax -->
        <div class="absolute inset-0 w-full h-full parallax">
            <img src="video/bg6.jpg" alt="Farm Background" class="absolute inset-0 w-full h-full object-cover">
            <div class="absolute inset-0 bg-black bg-opacity-60"></div>
        </div>
        <!-- Content with Animation -->
        <div class="container mx-auto px-4 text-center relative z-10" data-aos="fade-up" data-aos-duration="1000">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 floating" data-translate="welcome-title">Empowering Farmers for a Better Tomorrow</h1>
            <p class="text-xl mb-8" data-aos="fade-up" data-aos-delay="200" data-translate="welcome-description">Supporting sustainable agriculture and rural development</p>
            <button class="bg-white text-green-700 px-8 py-3 rounded-full font-bold hover:bg-green-100 transition duration-300 transform hover:scale-105 pulse">
                <a href="get-started.html">Get Started</a>
            </button>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4" data-aos="fade-up">Our Services</h2>
            <p class="text-gray-600 text-center mb-12 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                We provide comprehensive support to farmers through various services designed to enhance productivity and sustainability.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <a href="pages/modern-farming.html" class="block h-full" data-aos="zoom-in" data-aos-delay="200">
                    <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300 service-card h-full flex flex-col">
                        <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mb-6 pulse">
                            <i class="fas fa-seedling text-3xl text-blue-600"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-blue-800">Modern Farming Techniques</h3>
                        <p class="text-gray-600 mb-4 flex-grow">Learn about the latest agricultural practices and technologies to improve your yield</p>
                        <div class="text-blue-600 hover:text-blue-700 font-medium inline-flex items-center mt-auto group">
                            Learn More
                            <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-2 transition-transform"></i>
                        </div>
                    </div>
                </a>
                <a href="pages/financial-support.html" class="block h-full" data-aos="zoom-in" data-aos-delay="400">
                    <div class="bg-gradient-to-br from-purple-50 to-purple-100 p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300 service-card h-full flex flex-col">
                        <div class="bg-purple-100 w-16 h-16 rounded-full flex items-center justify-center mb-6 pulse">
                            <i class="fas fa-hand-holding-usd text-3xl text-purple-600"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-purple-800">Financial Support</h3>
                        <p class="text-gray-600 mb-4 flex-grow">Access to loans and financial resources for farmers to grow their business</p>
                        <div class="text-purple-600 hover:text-purple-700 font-medium inline-flex items-center mt-auto group">
                            Learn More
                            <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-2 transition-transform"></i>
                        </div>
                    </div>
                </a>
                <a href="training-programs.php" class="block h-full" data-aos="zoom-in" data-aos-delay="600">
                    <div class="bg-gradient-to-br from-green-50 to-green-100 p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300 service-card h-full flex flex-col">
                        <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mb-6 pulse">
                            <i class="fas fa-graduation-cap text-3xl text-green-600"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-green-800">Training Programs</h3>
                        <p class="text-gray-600 mb-4 flex-grow">Comprehensive training in sustainable farming practices and modern techniques</p>
                        <div class="text-green-600 hover:text-green-700 font-medium inline-flex items-center mt-auto group">
                            Learn More
                            <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-2 transition-transform"></i>
                        </div>
                    </div>
                </a>
                <a href="pages/farmer-options.html" class="block h-full" data-aos="zoom-in" data-aos-delay="800">
                    <div class="bg-gradient-to-br from-orange-50 to-orange-100 p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300 service-card h-full flex flex-col">
                        <div class="bg-orange-100 w-16 h-16 rounded-full flex items-center justify-center mb-6 pulse">
                            <i class="fas fa-store text-3xl text-orange-600"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-orange-800">Market Access</h3>
                        <p class="text-gray-600 mb-4 flex-grow">Direct connections to buyers and marketplaces for better prices and reach</p>
                        <div class="text-orange-600 hover:text-orange-700 font-medium inline-flex items-center mt-auto group">
                            Learn More
                            <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-2 transition-transform"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-green-600 text-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
                <div class="p-6" data-aos="fade-up">
                    <div class="text-4xl font-bold mb-2 counter" data-target="10000">0</div>
                    <p class="text-green-200">Farmers Empowered</p>
                </div>
                <div class="p-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-4xl font-bold mb-2 counter" data-target="500">0</div>
                    <p class="text-green-200">Training Programs</p>
                </div>
                <div class="p-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-4xl font-bold mb-2 counter" data-target="2000">0</div>
                    <p class="text-green-200">Success Stories</p>
                </div>
                <div class="p-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-4xl font-bold mb-2 counter" data-target="50">0</div>
                    <p class="text-green-200">Partner Organizations</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="bg-gray-100 py-16">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <img src="https://images.unsplash.com/photo-1523348837708-15d4a09cfac2?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Farmer in field" class="rounded-lg shadow-lg">
                </div>
                <div class="md:w-1/2 md:pl-12">
                    <h2 class="text-3xl font-bold mb-6">About Our Mission</h2>
                    <p class="text-gray-600 mb-4">We are dedicated to empowering farmers through education, resources, and support. Our goal is to create sustainable agricultural practices that benefit both farmers and the environment.</p>
                    <p class="text-gray-600">Join us in our mission to transform agriculture and build a better future for farming communities.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4">What Farmers Say</h2>
            <p class="text-gray-600 text-center mb-12 max-w-2xl mx-auto">Hear from our community of farmers who have experienced the impact of our programs and support.</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-gray-50 p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300">
                    <div class="flex items-center mb-6">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=150&q=80" 
                             alt="Farmer Rajesh" 
                             class="w-16 h-16 rounded-full object-cover mr-4">
                        <div>
                            <h3 class="font-bold text-lg">Rajesh Kumar</h3>
                            <p class="text-green-600">Wheat Farmer, Punjab</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"The modern farming techniques I learned through FarmEmpower have increased my crop yield by 40%. The support and guidance have been invaluable to my success."</p>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-gray-50 p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300">
                    <div class="flex items-center mb-6">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&auto=format&fit=crop&w=150&q=80" 
                             alt="Farmer Priya" 
                             class="w-16 h-16 rounded-full object-cover mr-4">
                        <div>
                            <h3 class="font-bold text-lg">Priya Sharma</h3>
                            <p class="text-green-600">Organic Farmer, Maharashtra</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"The financial support and market access provided by FarmEmpower helped me transition to organic farming. Now I'm earning better prices for my produce."</p>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-gray-50 p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300">
                    <div class="flex items-center mb-6">
                        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&auto=format&fit=crop&w=150&q=80" 
                             alt="Farmer Arun" 
                             class="w-16 h-16 rounded-full object-cover mr-4">
                        <div>
                            <h3 class="font-bold text-lg">Arun Patel</h3>
                            <p class="text-green-600">Rice Farmer, Gujarat</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"The training programs and technology support have revolutionized my farming practices. I'm now using smart irrigation and better pest management techniques."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4">Get in Touch</h2>
            <p class="text-gray-600 text-center mb-12 max-w-2xl mx-auto">Have questions about our services? We're here to help you grow your farming business.</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Contact Information -->
                <div class="space-y-8">
                    <!-- Contact Cards -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300">
                            <div class="bg-green-100 w-12 h-12 rounded-full flex items-center justify-center mb-4">
                                <i class="fas fa-map-marker-alt text-xl text-green-600"></i>
                            </div>
                            <h3 class="font-bold text-lg mb-2">Visit Us</h3>
                            <p class="text-gray-600">123 Agriculture Street<br>New Delhi, India 110001</p>
                        </div>
                        
                        <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300">
                            <div class="bg-green-100 w-12 h-12 rounded-full flex items-center justify-center mb-4">
                                <i class="fas fa-phone text-xl text-green-600"></i>
                            </div>
                            <h3 class="font-bold text-lg mb-2">Call Us</h3>
                            <p class="text-gray-600">+91 98765 43210<br>+91 98765 43211</p>
                        </div>
                        
                        <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300">
                            <div class="bg-green-100 w-12 h-12 rounded-full flex items-center justify-center mb-4">
                                <i class="fas fa-envelope text-xl text-green-600"></i>
                            </div>
                            <h3 class="font-bold text-lg mb-2">Email Us</h3>
                            <p class="text-gray-600">info@farmempower.com<br>support@farmempower.com</p>
                        </div>
                        
                        <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300">
                            <div class="bg-green-100 w-12 h-12 rounded-full flex items-center justify-center mb-4">
                                <i class="fas fa-clock text-xl text-green-600"></i>
                            </div>
                            <h3 class="font-bold text-lg mb-2">Working Hours</h3>
                            <p class="text-gray-600">Mon - Fri: 9:00 AM - 6:00 PM<br>Sat: 9:00 AM - 1:00 PM</p>
                        </div>
                    </div>

                    <!-- Social Media Links -->
                    <div class="bg-white p-6 rounded-xl shadow-lg">
                        <h3 class="font-bold text-lg mb-4">Follow Us</h3>
                        <div class="flex space-x-4">
                            <a href="#" class="bg-green-100 w-10 h-10 rounded-full flex items-center justify-center hover:bg-green-200 transition duration-300">
                                <i class="fab fa-facebook-f text-green-600"></i>
                            </a>
                            <a href="#" class="bg-green-100 w-10 h-10 rounded-full flex items-center justify-center hover:bg-green-200 transition duration-300">
                                <i class="fab fa-twitter text-green-600"></i>
                            </a>
                            <a href="#" class="bg-green-100 w-10 h-10 rounded-full flex items-center justify-center hover:bg-green-200 transition duration-300">
                                <i class="fab fa-instagram text-green-600"></i>
                            </a>
                            <a href="#" class="bg-green-100 w-10 h-10 rounded-full flex items-center justify-center hover:bg-green-200 transition duration-300">
                                <i class="fab fa-linkedin-in text-green-600"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <h3 class="text-2xl font-bold mb-6">Send us a Message</h3>
                    <form id="contact-form" class="space-y-6" action="pages/thank-you.html" method="GET">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-gray-700 mb-2 font-medium">Full Name</label>
                                <input type="text" id="name" name="name" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent" required>
                            </div>
                            <div>
                                <label for="email" class="block text-gray-700 mb-2 font-medium">Email Address</label>
                                <input type="email" id="email" name="email" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent" required>
                            </div>
                        </div>
                        <div>
                            <label for="subject" class="block text-gray-700 mb-2 font-medium">Subject</label>
                            <input type="text" id="subject" name="subject" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent" required>
                        </div>
                        <div>
                            <label for="message" class="block text-gray-700 mb-2 font-medium">Message</label>
                            <textarea id="message" name="message" class="w-full p-3 border border-gray-300 rounded-lg h-32 focus:ring-2 focus:ring-green-500 focus:border-transparent" required></textarea>
                        </div>
                        <button type="submit" class="w-full bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 transition duration-300 font-medium">
                            Send Message
                            <i class="fas fa-paper-plane ml-2"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2024 FarmEmpower. All rights reserved.</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });

        // Loading Screen
        window.addEventListener('load', function() {
            document.getElementById('loading-screen').classList.add('hidden');
        });

        // Smooth Scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Navbar Scroll Effect
        window.addEventListener('scroll', function() {
            const nav = document.getElementById('main-nav');
            if (window.scrollY > 50) {
                nav.classList.add('shadow-lg');
                nav.classList.add('bg-opacity-90');
            } else {
                nav.classList.remove('shadow-lg');
                nav.classList.remove('bg-opacity-90');
            }
        });

        // Counter Animation
        const counters = document.querySelectorAll('.counter');
        const speed = 200;

        function animateCounter(counter) {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText;
            const increment = target / speed;

            if (count < target) {
                counter.innerText = Math.ceil(count + increment);
                setTimeout(() => animateCounter(counter), 1);
            } else {
                counter.innerText = target;
            }
        }

        // Intersection Observer for Counters
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        });

        counters.forEach(counter => {
            observer.observe(counter);
        });

        // Fade In Elements on Scroll
        const fadeElements = document.querySelectorAll('.fade-in');
        const fadeObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    fadeObserver.unobserve(entry.target);
                }
            });
        });

        fadeElements.forEach(element => {
            fadeObserver.observe(element);
        });

        // Check login status
        function checkLoginStatus() {
            const isLoggedIn = localStorage.getItem('isLoggedIn') === 'true';
            const userEmail = localStorage.getItem('userEmail');
            const authButtons = document.getElementById('auth-buttons');
            const userWelcome = document.getElementById('user-welcome');
            const userEmailSpan = document.getElementById('user-email');
            
            if (isLoggedIn && userEmail) {
                authButtons.classList.add('hidden');
                userWelcome.classList.remove('hidden');
                userEmailSpan.textContent = userEmail;
            } else {
                authButtons.classList.remove('hidden');
                userWelcome.classList.add('hidden');
            }
        }

        // Handle logout
        document.getElementById('logout-btn').addEventListener('click', function() {
            localStorage.removeItem('isLoggedIn');
            localStorage.removeItem('userEmail');
            checkLoginStatus();
        });

        // Check for login success message
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.get('login') === 'success') {
            const successMessage = document.createElement('div');
            successMessage.className = 'login-success-message';
            successMessage.innerHTML = `
                <div class="success-content">
                    <i class="fas fa-check-circle"></i>
                    <span>Welcome back! You have successfully logged in.</span>
                </div>
            `;
            document.body.appendChild(successMessage);
            
            // Remove the message after 5 seconds
            setTimeout(() => {
                successMessage.remove();
            }, 5000);
        }

        // Check login status when page loads
        document.addEventListener('DOMContentLoaded', function() {
            checkLoginStatus();
        });

        // Add styles for login success message
        const style = document.createElement('style');
        style.textContent = `
            .login-success-message {
                position: fixed;
                top: 20px;
                right: 20px;
                background: #4CAF50;
                color: white;
                padding: 15px 25px;
                border-radius: 8px;
                box-shadow: 0 4px 6px rgba(0,0,0,0.1);
                z-index: 1000;
                animation: slideIn 0.5s ease-out;
            }
            
            .success-content {
                display: flex;
                align-items: center;
                gap: 10px;
            }
            
            .success-content i {
                font-size: 1.2rem;
            }
            
            @keyframes slideIn {
                from {
                    transform: translateX(100%);
                    opacity: 0;
                }
                to {
                    transform: translateX(0);
                    opacity: 1;
                }
            }
            
            .auth-buttons {
                display: flex;
                align-items: center;
                margin-left: 1rem;
            }
            
            .login-btn {
                padding: 8px 16px;
                border-radius: 4px;
                text-decoration: none;
                font-weight: 500;
                transition: all 0.3s ease;
                color: #4CAF50;
                border: 1px solid #4CAF50;
                background: rgba(255, 255, 255, 0.1);
            }
            
            .login-btn:hover {
                background: #4CAF50;
                color: white;
                transform: translateY(-2px);
                box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            }
            
            #user-welcome {
                margin-left: 1rem;
            }
            
            #user-welcome .bg-white {
                transition: all 0.3s ease;
                border: 2px solid rgba(255, 255, 255, 0.2);
            }
            
            #user-welcome:hover .bg-white {
                transform: scale(1.1) rotate(5deg);
                background: #4CAF50;
                border-color: #4CAF50;
            }
            
            #user-welcome:hover .text-green-600 {
                color: white;
            }
            
            #user-welcome .flex-col {
                transition: all 0.3s ease;
            }
            
            #user-welcome:hover .flex-col {
                transform: translateX(5px);
            }
            
            #logout-btn {
                transition: all 0.3s ease;
                padding: 8px;
                border-radius: 50%;
            }
            
            #logout-btn:hover {
                transform: scale(1.2) rotate(90deg);
                background: rgba(255, 255, 255, 0.1);
            }
            
            #user-email {
                text-shadow: 0 1px 2px rgba(0,0,0,0.2);
            }

            /* Contact Form Styles */
            #contact-form input:focus,
            #contact-form textarea:focus {
                outline: none;
                box-shadow: 0 0 0 3px rgba(76, 175, 80, 0.2);
            }
            
            #contact-form button {
                position: relative;
                overflow: hidden;
            }
            
            #contact-form button:hover i {
                transform: translateX(5px);
            }
            
            #contact-form button i {
                transition: transform 0.3s ease;
            }
            
            #contact-form input,
            #contact-form textarea {
                transition: all 0.3s ease;
            }
            
            #contact-form input:focus,
            #contact-form textarea:focus {
                border-color: #4CAF50;
            }
        `;
        document.head.appendChild(style);

        // Contact Form Submission
        document.getElementById('contact-form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this);
            const data = Object.fromEntries(formData.entries());
            
            // Store form data in localStorage
            localStorage.setItem('contactFormData', JSON.stringify(data));
            
            // Redirect to thank you page
            window.location.href = 'pages/thank-you.html';
        });
    </script>
</body>
</html> 