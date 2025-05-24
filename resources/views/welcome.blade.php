<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AI Math Teaching - Revolutionary Learning</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'inter': ['Inter', 'sans-serif'],
                        'space': ['Space Grotesk', 'sans-serif'],
                    },
                    colors: {
                        'primary': '#1e88e5',
                        'primary-dark': '#1565c0',
                        'primary-light': '#42a5f5',
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'float-delayed': 'float 6s ease-in-out infinite 2s',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'spin-slow': 'spin 10s linear infinite',
                        'bounce-slow': 'bounce 3s infinite',
                        'glow': 'glow 2s ease-in-out infinite alternate',
                        'slide-up': 'slideUp 0.8s ease-out',
                        'fade-in': 'fadeIn 1s ease-out',
                        'scale-in': 'scaleIn 0.6s ease-out',
                        'wiggle': 'wiggle 1s ease-in-out infinite',
                        'card-float': 'cardFloat 8s ease-in-out infinite',
                        'rotate-slow': 'rotateSlow 20s linear infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0px) rotate(0deg)' },
                            '50%': { transform: 'translateY(-20px) rotate(5deg)' },
                        },
                        glow: {
                            '0%': { boxShadow: '0 0 20px rgba(30, 136, 229, 0.5)' },
                            '100%': { boxShadow: '0 0 40px rgba(30, 136, 229, 0.8)' },
                        },
                        slideUp: {
                            '0%': { transform: 'translateY(100px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' },
                        },
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        scaleIn: {
                            '0%': { transform: 'scale(0.8)', opacity: '0' },
                            '100%': { transform: 'scale(1)', opacity: '1' },
                        },
                        wiggle: {
                            '0%, 100%': { transform: 'rotate(-3deg)' },
                            '50%': { transform: 'rotate(3deg)' },
                        },
                        cardFloat: {
                            '0%, 100%': { transform: 'translateY(0px) translateX(0px) rotate(0deg)' },
                            '25%': { transform: 'translateY(-15px) translateX(10px) rotate(2deg)' },
                            '50%': { transform: 'translateY(-25px) translateX(-5px) rotate(-1deg)' },
                            '75%': { transform: 'translateY(-10px) translateX(-15px) rotate(1deg)' },
                        },
                        rotateSlow: {
                            '0%': { transform: 'rotate(0deg)' },
                            '100%': { transform: 'rotate(360deg)' },
                        }
                    },
                    backdropBlur: {
                        xs: '2px',
                    }
                }
            }
        }
    </script>

    <style>
        body { 
            font-family: 'Inter', sans-serif; 
            overflow-x: hidden;
        }
        
        .glassmorphism {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .glassmorphism-dark {
            background: rgba(30, 136, 229, 0.1);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(30, 136, 229, 0.2);
        }
        
        .nav-glassmorphism {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(30, 136, 229, 0.1);
        }
        
        .nav-item {
            position: relative;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .nav-item::before {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 50%;
            width: 0;
            height: 2px;
            background: #1e88e5;
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }
        
        .nav-item:hover::before {
            width: 100%;
        }
        
        .nav-item:hover {
            transform: translateY(-2px);
            color: #1e88e5;
        }
        
        .math-symbol {
            position: absolute;
            font-size: 2rem;
            font-weight: bold;
            opacity: 0.1;
            animation: float 8s ease-in-out infinite;
            color: #1e88e5;
        }
        
        .particle {
            position: absolute;
            background: radial-gradient(circle, rgba(30, 136, 229, 0.8), rgba(30, 136, 229, 0.2));
            border-radius: 50%;
            animation: float 10s ease-in-out infinite;
        }
        
        .gradient-text {
            background: linear-gradient(135deg, #1e88e5 0%, #42a5f5 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .hero-card {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.9) 0%, rgba(255, 255, 255, 0.8) 100%);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(30, 136, 229, 0.2);
            transition: all 0.3s ease;
        }
        
        .hero-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(30, 136, 229, 0.2);
        }
        
        .floating-element {
            animation: float 6s ease-in-out infinite;
        }
        
        .floating-element:nth-child(2n) {
            animation-delay: -2s;
        }
        
        .floating-element:nth-child(3n) {
            animation-delay: -4s;
        }
        
        #particles-canvas {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }

        .video-overlay {
            background: linear-gradient(135deg, rgba(30, 136, 229, 0.8), rgba(30, 136, 229, 0.6));
        }

        .section-divider {
            background: linear-gradient(90deg, transparent, #1e88e5, transparent);
            height: 2px;
        }

        .feature-card {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.95) 0%, rgba(255, 255, 255, 0.85) 100%);
            backdrop-filter: blur(25px);
            border: 1px solid rgba(30, 136, 229, 0.15);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .feature-card:hover {
            transform: translateY(-15px) scale(1.02);
            box-shadow: 0 25px 50px rgba(30, 136, 229, 0.25);
            border-color: rgba(30, 136, 229, 0.3);
        }

        .floating-card {
            animation: cardFloat 8s ease-in-out infinite;
        }

        .floating-card:nth-child(2n) {
            animation-delay: -2s;
        }

        .floating-card:nth-child(3n) {
            animation-delay: -4s;
        }

        .floating-card:nth-child(4n) {
            animation-delay: -6s;
        }

        .icon-orbit {
            animation: rotateSlow 20s linear infinite;
        }

        .icon-float {
            animation: float 4s ease-in-out infinite;
        }

        .icon-float:nth-child(2n) {
            animation-delay: -1s;
        }

        .icon-float:nth-child(3n) {
            animation-delay: -2s;
        }
    </style>
       <style>
        :root {
            --primary: #6366f1;
            --primary-light: #818cf8;
            --primary-dark: #4f46e5;
        }

        @import url('https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap');
        
        .font-space {
            font-family: 'Space Grotesk', sans-serif;
        }

        /* Floating navbar effect */
        .navbar-float {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-2px); }
        }

        /* Glowing border effect */
        .glow-border {
            position: relative;
            overflow: hidden;
        }

        .glow-border::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(99, 102, 241, 0.4), transparent);
            transition: left 0.5s;
        }

        .glow-border:hover::before {
            left: 100%;
        }

        /* Morphing logo animation */
        .logo-morph {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .logo-morph:hover {
            transform: rotate(360deg) scale(1.1);
            box-shadow: 0 20px 40px rgba(99, 102, 241, 0.3);
        }

        /* Advanced underline effect */
        .nav-link {
            position: relative;
            overflow: hidden;
        }

        .nav-link::before {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, var(--primary), var(--primary-light));
            transform: translateX(-100%);
            transition: transform 0.3s ease;
        }

        .nav-link:hover::before {
            transform: translateX(0);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(99, 102, 241, 0.1), transparent);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .nav-link:hover::after {
            opacity: 1;
        }

        /* Magnetic button effect */
        .magnetic-btn {
            position: relative;
            overflow: hidden;
            transform-style: preserve-3d;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .magnetic-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .magnetic-btn:hover::before {
            left: 100%;
        }

        .magnetic-btn:hover {
            transform: translateY(-2px) scale(1.05);
            box-shadow: 0 15px 30px rgba(99, 102, 241, 0.4);
        }

        /* Mobile menu slide animation */
        .mobile-menu-enter {
            animation: slideDown 0.3s ease-out forwards;
        }

        .mobile-menu-exit {
            animation: slideUp 0.3s ease-in forwards;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
                max-height: 0;
            }
            to {
                opacity: 1;
                transform: translateY(0);
                max-height: 300px;
            }
        }

        @keyframes slideUp {
            from {
                opacity: 1;
                transform: translateY(0);
                max-height: 300px;
            }
            to {
                opacity: 0;
                transform: translateY(-20px);
                max-height: 0;
            }
        }

        /* Hamburger menu morphing */
        .hamburger-line {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            transform-origin: center;
        }

        .hamburger-active .hamburger-line:nth-child(1) {
            transform: rotate(45deg) translate(6px, 6px);
        }

        .hamburger-active .hamburger-line:nth-child(2) {
            opacity: 0;
            transform: scale(0);
        }

        .hamburger-active .hamburger-line:nth-child(3) {
            transform: rotate(-45deg) translate(6px, -6px);
        }

        /* Background particles */
        .bg-particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            overflow: hidden;
        }

        .particle {
            position: absolute;
            background: rgba(99, 102, 241, 0.1);
            border-radius: 50%;
            animation: particle-float 8s linear infinite;
        }

        @keyframes particle-float {
            0% {
                transform: translateY(100vh) rotate(0deg);
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                transform: translateY(-100px) rotate(360deg);
                opacity: 0;
            }
        }

        /* Glass morphism enhancement */
        .glass-morph {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        }

        /* Logo pulse animation */
        @keyframes logo-pulse {
            0%, 100% {
                box-shadow: 0 0 20px rgba(99, 102, 241, 0.3);
            }
            50% {
                box-shadow: 0 0 30px rgba(99, 102, 241, 0.6);
            }
        }

        .logo-pulse {
            animation: logo-pulse 2s ease-in-out infinite;
        }

        /* Scroll-triggered navbar changes */
        .navbar-scrolled {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(25px);
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        }

        /* Active link glow */
        .nav-link.active {
            color: var(--primary);
            text-shadow: 0 0 10px rgba(99, 102, 241, 0.5);
        }

        .nav-link.active::before {
            transform: translateX(0);
        }
    </style>
</head>
<body class="bg-white min-h-screen">
<!-- Navbar Section -->
<nav class="fixed top-0 left-0 w-full z-50 bg-white/40 backdrop-blur-md shadow-lg border-b border-white/20 px-3 sm:px-4 lg:px-6">
  <div class="flex items-center justify-between h-16 w-full">

    <!-- Logo -->
    <div class="flex items-center space-x-2 animate-fade-in">
      <div class="w-10 h-10 bg-gradient-to-br from-primary to-primary-light rounded-xl flex items-center justify-center shadow-xl animate-pulse">
        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
        </svg>
      </div>
      <div class="font-space font-bold text-xl text-gray-800 tracking-tight">
        Torvic <span class="text-primary">AI</span>
      </div>
    </div>

    <!-- Desktop Menu -->
    <div class="hidden md:flex items-center space-x-6">
      <a href="#home" class="relative group text-gray-800 font-medium">
        Home
        <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-primary group-hover:w-full transition-all duration-300"></span>
      </a>
      <a href="#features" class="relative group text-gray-800 font-medium">
        Features
        <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-primary group-hover:w-full transition-all duration-300"></span>
      </a>
      <a href="#lessons" class="relative group text-gray-800 font-medium">
        Lessons
        <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-primary group-hover:w-full transition-all duration-300"></span>
      </a>
      <a href="#about" class="relative group text-gray-800 font-medium">
        About
        <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-primary group-hover:w-full transition-all duration-300"></span>
      </a>
      <button class="bg-primary text-white px-5 py-2 rounded-full font-semibold hover:scale-105 hover:shadow-xl transition-transform duration-300">
        Get Started
      </button>
    </div>

    <!-- Mobile Menu Button -->
    <div class="md:hidden">
      <button id="mobile-menu-button" class="p-2 rounded-lg bg-white/20 hover:bg-white/30 shadow transition">
        <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="md:hidden hidden transition-all duration-300">
    <div class="mt-3 bg-white/90 rounded-xl shadow border border-primary/10 px-4 py-3 space-y-2">
      <a href="#home" class="block text-gray-800 font-medium hover:text-primary">Home</a>
      <a href="#features" class="block text-gray-800 font-medium hover:text-primary">Features</a>
      <a href="#lessons" class="block text-gray-800 font-medium hover:text-primary">Lessons</a>
      <a href="#about" class="block text-gray-800 font-medium hover:text-primary">About</a>
      <button class="w-full bg-primary text-white py-2 rounded-full font-semibold hover:bg-primary-dark transition">
        Get Started
      </button>
    </div>
  </div>
</nav>


<script>
  // Toggle mobile menu
  document.getElementById("mobile-menu-button").addEventListener("click", () => {
    document.getElementById("mobile-menu").classList.toggle("hidden");
  });
</script>


 <!-- Hero Section with Background Video -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden pt-16">
 <!-- Background Image -->
<div class="absolute inset-0 w-full h-full">
    <img src="{{ asset('pic2.jpg') }}" alt="Hero Background" class="w-full h-full object-cover" />
    <!-- New grayish overlay -->
    <div class="absolute inset-0 bg-gradient-to-b from-gray-900/60 via-gray-800/40 to-gray-900/60 mix-blend-multiply"></div>
</div>
        
        <!-- Animated Background -->
        <canvas id="particles-canvas"></canvas>
        
        <!-- Floating Math Symbols -->
        <div class="math-symbol text-white" style="top: 10%; left: 5%; animation-delay: 0s;">∑</div>
        <div class="math-symbol text-white" style="top: 20%; right: 10%; animation-delay: 1s;">π</div>
        <div class="math-symbol text-white" style="top: 70%; left: 8%; animation-delay: 2s;">∆</div>
        <div class="math-symbol text-white" style="top: 60%; right: 15%; animation-delay: 3s;">∞</div>
        <div class="math-symbol text-white" style="top: 30%; left: 80%; animation-delay: 1.5s;">√</div>
        <div class="math-symbol text-white" style="top: 80%; left: 70%; animation-delay: 2.5s;">α</div>

        <!-- Main Content -->
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-10 pb-16">
            <div class="text-center">
                <!-- Hero Badge -->
                <div class="inline-flex items-center px-4 py-2 rounded-full glassmorphism mb-8 animate-scale-in">
                    <span class="w-2 h-2 bg-green-400 rounded-full mr-2 animate-pulse"></span>
                    <span class="text-white text-sm font-medium">AI-Powered Learning Revolution</span>
                </div>

                <!-- Main Heading -->
                <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold text-white mb-6 animate-slide-up font-space">
                    Master <span class="gradient-text text-white">Math</span>
                    <br>with <span class="text-yellow-300">AI Magic</span>
                </h1>

                <!-- Subtitle -->
                <p class="text-xl md:text-2xl text-gray-200 mb-12 max-w-3xl mx-auto animate-fade-in font-inter" style="animation-delay: 0.3s;">
                    Revolutionize your 5th grade math journey with personalized AI tutoring, 
                    <span class="text-yellow-300">interactive lessons</span>, and 
                    <span class="text-blue-200">gamified learning</span>
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-16 animate-fade-in" style="animation-delay: 0.6s;">
                    <button class="group bg-white text-primary px-8 py-4 rounded-full font-bold text-lg hover:shadow-2xl hover:scale-105 transition-all duration-300 flex items-center space-x-2">
                        <span>Start Learning Now</span>
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </button>
                    <button class="glassmorphism text-white px-8 py-4 rounded-full font-semibold text-lg hover:bg-white/20 transition-all duration-300 flex items-center space-x-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h1m4 0h1m-6 4h8m-5-4v4m0-4V6a2 2 0 012-2h2a2 2 0 012 2v4"></path>
                        </svg>
                        <span>Watch Demo</span>
                    </button>
                </div>

                <!-- Feature Cards -->
                <div class="grid md:grid-cols-3 gap-6 max-w-5xl mx-auto animate-fade-in" style="animation-delay: 0.9s;">
                    <!-- Card 1 -->
                    <div class="hero-card rounded-2xl p-6 text-center">
                        <div class="w-16 h-16 bg-gradient-to-br from-primary to-primary-light rounded-2xl flex items-center justify-center mx-auto mb-4 floating-element">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Lightning Fast</h3>
                        <p class="text-gray-600">AI-powered instant feedback and explanations</p>
                    </div>

                    <!-- Card 2 -->
                    <div class="hero-card rounded-2xl p-6 text-center">
                        <div class="w-16 h-16 bg-gradient-to-br from-primary to-primary-light rounded-2xl flex items-center justify-center mx-auto mb-4 floating-element">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C20.832 18.477 19.246 18 17.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Personalized</h3>
                        <p class="text-gray-600">Adaptive learning paths for every student</p>
                    </div>

                    <!-- Card 3 -->
                    <div class="hero-card rounded-2xl p-6 text-center">
                        <div class="w-16 h-16 bg-gradient-to-br from-primary to-primary-light rounded-2xl flex items-center justify-center mx-auto mb-4 floating-element">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Gamified</h3>
                        <p class="text-gray-600">Earn rewards and level up your skills</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Floating Elements -->
        <div class="absolute top-20 left-10 floating-element">
            <div class="w-20 h-20 glassmorphism rounded-2xl flex items-center justify-center text-2xl font-bold text-white">
                2+3
            </div>
        </div>
        <div class="absolute top-40 right-20 floating-element">
            <div class="w-16 h-16 glassmorphism rounded-full flex items-center justify-center text-xl font-bold text-white">
                5!
            </div>
        </div>
        <div class="absolute bottom-40 left-20 floating-element">
            <div class="w-24 h-24 glassmorphism rounded-3xl flex items-center justify-center text-lg font-bold text-white">
                x²+y²
            </div>
        </div>
        <div class="absolute bottom-60 right-10 floating-element">
            <div class="w-18 h-18 glassmorphism rounded-2xl flex items-center justify-center text-2xl font-bold text-white">
                7×8
            </div>
        </div>
    </section>











    <!-- Section Divider -->
    <div class="section-divider"></div>
   <section class="relative min-h-[90vh] py-32 px-6 bg-white">
  <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
    
    <!-- Text & Card Content -->
    <div class="text-center lg:text-left space-y-10">
      <!-- Heading -->
      <div class="space-y-4">
        <h2 class="text-5xl font-bold text-[#ff467c] leading-tight">
          Experience Math Like Never Before
        </h2>
        <p class="text-lg text-gray-700 max-w-xl mx-auto lg:mx-0">
          Watch how AI transforms the way students learn. Personalized lessons, real-time feedback, and gamified experiences all in one place.
        </p>
      </div>

      <!-- Get Started Card -->
      <div class="bg-[#ff467c] text-white rounded-3xl p-8 shadow-xl max-w-md mx-auto lg:mx-0">
        <h3 class="text-2xl font-semibold mb-2">Start Your Journey Today</h3>
        <p class="mb-6 text-white/80">Sign up now to access your personalized AI math tutor for free.</p>
        <a href="#start" class="inline-block bg-white text-[#ff467c] font-bold px-6 py-3 rounded-full hover:bg-gray-100 transition-all">
          Get Started →
        </a>
      </div>
    </div>

    <!-- Video Container -->
    <div class="relative rounded-3xl overflow-hidden shadow-2xl">
      <div class="aspect-w-16 aspect-h-9">
        <video autoplay muted loop
          src="{{ asset('vide2.mp4') }}"
          title="AI Math Demo"
          class="w-full h-full"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen>
    </video>
      </div>
      <!-- Optional overlay effect -->
      <div class="absolute inset-0 bg-black/20 hover:bg-black/10 transition duration-300"></div>
    </div>
  </div>
</section>




<!---kids math section -->
<section class="relative bg-white py-20 px-4 sm:px-8 lg:px-20 overflow-hidden">
  <!-- Decorative shapes -->
  <div class="absolute top-10 left-10 w-4 h-4 bg-yellow-300 rounded-full animate-ping"></div>
  <div class="absolute top-32 right-12 w-6 h-6 bg-purple-400 rounded-full animate-bounce"></div>
  <div class="absolute top-12 right-40 w-4 h-4 bg-pink-300 rounded-full"></div>
  <div class="absolute bottom-10 left-32 w-3 h-3 bg-blue-400 rounded-full"></div>
  <div class="absolute bottom-20 right-20 text-4xl text-yellow-400">★</div>
  <div class="absolute top-1/3 left-1/2 transform -translate-x-1/2 text-3xl text-pink-400">✦</div>

  <div class="max-w-7xl mx-auto flex flex-col-reverse lg:flex-row items-center gap-16">
    <!-- Left content -->
    <div class="w-full lg:w-1/2 text-center lg:text-left">
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
        Smart math learning for kids<br>
        powered by <span class="text-yellow-500">AI technology</span>
      </h2>
      <p class="text-gray-600 text-lg mb-6">
        Our platform helps children from ages 4 to 12 develop a strong foundation in math.<br>
        With interactive lessons, instant feedback, and fun challenges, learning math has never been this exciting!
      </p>
    
    </div>

    <!-- Right images -->
    <div class="w-full lg:w-1/2 grid grid-cols-2 gap-6">
      <!-- Image 1 -->
      <div class="bg-blue-100 rounded-3xl p-3">
        <div class="w-full h-48 sm:h-56 lg:h-60 rounded-2xl overflow-hidden">
          <img src="{{ asset('kid1.jpg') }}" alt="Child 1" class="w-full h-full object-cover" />
        </div>
      </div>

      <!-- Image 2 -->
      <div class="bg-yellow-100 rounded-3xl p-3">
        <div class="w-full h-48 sm:h-56 lg:h-60 rounded-2xl overflow-hidden">
          <img src="{{ asset('kid2.jpg') }}" alt="Child 2" class="w-full h-full object-cover" />
        </div>
      </div>

      <!-- Image 3 -->
      <div class="bg-pink-100 rounded-3xl p-3 col-span-2 mx-auto">
        <div class="w-full h-56 sm:h-64 lg:h-72 rounded-2xl overflow-hidden">
          <img src="{{ asset('kid3.jpg') }}" alt="Child 3" class="w-full h-full object-cover" />
        </div>
      </div>
    </div>
  </div>
</section>






    <!-- Section Divider -->
    <div class="section-divider"></div>

    <!-- Ready to Help Section -->
    <section class="py-20 bg-gradient-to-br from-primary to-primary-dark relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, white 1px, transparent 0); background-size: 20px 20px;"></div>
        </div>
        
        <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <!-- Header -->
            <div class="mb-12 animate-fade-in">
                <div class="inline-flex items-center px-4 py-2 rounded-full bg-white/20 backdrop-blur-sm border border-white/30 mb-6">
                    <span class="w-2 h-2 bg-yellow-400 rounded-full mr-2 animate-pulse"></span>
                    <span class="text-white text-sm font-medium">24/7 AI Support</span>
                </div>
                
                <h2 class="text-4xl md:text-6xl font-bold text-white mb-6 font-space">
                    We're Ready to 
                    <span class="text-yellow-300">Help You</span>
                </h2>
                
                <p class="text-xl text-blue-100 max-w-2xl mx-auto">
                    Join thousands of students who have already transformed their math skills with our AI-powered learning platform.
                </p>
            </div>
            
            <!-- Help Card -->
            <div class="glassmorphism rounded-3xl p-8 md:p-12 max-w-2xl mx-auto animate-scale-in" style="animation-delay: 0.3s;">
                <div class="space-y-8">
                    <!-- Icon -->
                    <div class="w-20 h-20 bg-gradient-to-br from-yellow-400 to-orange-400 rounded-2xl flex items-center justify-center mx-auto animate-glow">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                    </div>
                    
                    <!-- Content -->
                    <div class="space-y-4">
                        <h3 class="text-2xl font-bold text-white">Start Your Math Journey Today</h3>
                        <p class="text-blue-100">
                            Get personalized lessons, instant feedback, and track your progress as you master 5th grade math concepts.
                        </p>
                    </div>
                    
                    <!-- Stats -->
                    <div class="grid grid-cols-3 gap-6 py-6 border-t border-b border-white/20">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-yellow-300">10K+</div>
                            <div class="text-sm text-blue-100">Happy Students</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-yellow-300">95%</div>
                            <div class="text-sm text-blue-100">Success Rate</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-yellow-300">24/7</div>
                            <div class="text-sm text-blue-100">AI Support</div>
                        </div>
                    </div>
                    
                    <!-- CTA Button -->
                    <button class="w-full bg-white text-primary px-8 py-4 rounded-full font-bold text-lg hover:bg-gray-100 hover:shadow-xl hover:scale-105 transition-all duration-300 flex items-center justify-center space-x-2">
                        <span>Get Started Now</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </button>
                </div>
            </div>
            
            <!-- Bottom Text -->
            <p class="text-blue-200 text-sm mt-8 animate-fade-in" style="animation-delay: 0.6s;">
                No credit card required • Free 7-day trial • Cancel anytime
            </p>
        </div>
        
        <!-- Floating Elements -->
        <div class="absolute top-20 left-10 floating-element">
            <div class="w-16 h-16 bg-white/10 rounded-2xl flex items-center justify-center text-xl font-bold text-white backdrop-blur-sm">
                ÷
            </div>
        </div>
        <div class="absolute top-40 right-20 floating-element">
            <div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center text-lg font-bold text-white backdrop-blur-sm">
                %
            </div>
        </div>
        <div class="absolute bottom-40 left-20 floating-element">
            <div class="w-20 h-20 bg-white/10 rounded-3xl flex items-center justify-center text-lg font-bold text-white backdrop-blur-sm">
                =
            </div>
        </div>
        <div class="absolute bottom-60 right-10 floating-element">
            <div class="w-14 h-14 bg-white/10 rounded-2xl flex items-center justify-center text-xl font-bold text-white backdrop-blur-sm">
                +
            </div>
        </div>
    </section>


     <!-- Modern Testimonials Section -->
    <section class="py-24 bg-gradient-to-br from-gray-50 via-blue-50 to-indigo-100 relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, #1e88e5 1px, transparent 0); background-size: 30px 30px;"></div>
        </div>
        
        <!-- Floating Background Elements -->
        <div class="absolute top-20 left-10 w-32 h-32 bg-gradient-to-br from-blue-300/20 to-purple-400/20 rounded-full blur-xl animate-float"></div>
        <div class="absolute top-60 right-20 w-24 h-24 bg-gradient-to-br from-green-300/30 to-teal-400/20 rounded-full blur-lg animate-bounce-slow"></div>
        <div class="absolute bottom-40 left-1/4 w-28 h-28 bg-gradient-to-br from-pink-300/25 to-rose-400/20 rounded-full blur-md animate-pulse-slow"></div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center mb-20 animate-fade-in">
                <div class="inline-flex items-center px-6 py-3 rounded-full bg-blue-100 border border-blue-200 mb-8">
                    <span class="w-3 h-3 bg-blue-500 rounded-full mr-3 animate-pulse"></span>
                    <span class="text-blue-600 text-sm font-semibold tracking-wide">Student Success Stories</span>
                </div>
                
                <h2 class="text-5xl md:text-6xl font-bold text-gray-800 mb-8 font-space leading-tight">
                    What Our Students
                    <span class="gradient-text block">Are Saying</span>
                </h2>
                
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Join thousands of students who have transformed their math skills and achieved academic excellence with our AI-powered platform.
                </p>
            </div>
            
            <!-- Testimonials Grid -->
            <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-8 mb-16">
                <!-- Testimonial 1 -->
                <div class="feature-card floating-card rounded-3xl p-8 text-left group relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-20 h-20 bg-gradient-to-br from-yellow-200/50 to-orange-300/30 rounded-full blur-xl"></div>
                    
                    <!-- Quote Icon -->
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mb-6 relative z-10">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                        </svg>
                    </div>
                    
                    <p class="text-gray-700 mb-6 leading-relaxed text-lg relative z-10">
                        "This platform completely changed how I understand math! The AI tutor explains things in a way that finally makes sense to me."
                    </p>
                    
                    <!-- Student Info -->
                    <div class="flex items-center space-x-4 relative z-10">
                        <div class="w-12 h-12 bg-gradient-to-br from-pink-400 to-purple-500 rounded-full flex items-center justify-center">
                            <span class="text-white font-bold text-lg">S</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800">Sarah Johnson</h4>
                            <p class="text-sm text-gray-500">5th Grade Student</p>
                        </div>
                    </div>
                    
                    <!-- Rating Stars -->
                    <div class="flex space-x-1 mt-4 relative z-10">
                        <span class="text-yellow-400 text-lg">★★★★★</span>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="feature-card floating-card rounded-3xl p-8 text-left group relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-br from-green-200/50 to-teal-300/30 rounded-full blur-xl"></div>
                    
                    <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center mb-6 relative z-10">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                        </svg>
                    </div>
                    
                    <p class="text-gray-700 mb-6 leading-relaxed text-lg relative z-10">
                        "My grades improved from C's to A's in just 3 months! The interactive lessons make learning so much fun and engaging."
                    </p>
                    
                    <div class="flex items-center space-x-4 relative z-10">
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-400 to-indigo-500 rounded-full flex items-center justify-center">
                            <span class="text-white font-bold text-lg">M</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800">Marcus Chen</h4>
                            <p class="text-sm text-gray-500">5th Grade Student</p>
                        </div>
                    </div>
                    
                    <div class="flex space-x-1 mt-4 relative z-10">
                        <span class="text-yellow-400 text-lg">★★★★★</span>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="feature-card floating-card rounded-3xl p-8 text-left group relative overflow-hidden  md:col-span-2 lg:col-span-1">
                    <div class="absolute top-0 right-0 w-20 h-20 bg-gradient-to-br from-purple-200/50 to-pink-300/30 rounded-full blur-xl"></div>
                    
                    <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center mb-6 relative z-10">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                        </svg>
                    </div>
                    
                    <p class="text-gray-700 mb-6 leading-relaxed text-lg relative z-10">
                        "As a parent, I love seeing my daughter's confidence grow. The progress tracking helps me support her learning journey."
                    </p>
                    
                    <div class="flex items-center space-x-4 relative z-10">
                        <div class="w-12 h-12 bg-gradient-to-br from-orange-400 to-red-500 rounded-full flex items-center justify-center">
                            <span class="text-white font-bold text-lg">L</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800">Lisa Rodriguez</h4>
                            <p class="text-sm text-gray-500">Parent</p>
                        </div>
                    </div>
                    
                    <div class="flex space-x-1 mt-4 relative z-10">
                        <span class="text-yellow-400 text-lg">★★★★★</span>
                    </div>
                </div>
            </div>
            
            <!-- Stats Section -->
            <div class="feature-card rounded-3xl p-12 text-center max-w-4xl mx-auto relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-blue-500/5 to-purple-500/5 rounded-3xl"></div>
                
                <div class="relative z-10">
                    <h3 class="text-3xl font-bold text-gray-800 mb-8 font-space">Trusted by Thousands</h3>
                    
                    <div class="grid md:grid-cols-4 gap-8">
                        <div class="text-center">
                            <div class="text-4xl font-bold text-blue-600 mb-2">15K+</div>
                            <div class="text-gray-600 font-medium">Active Students</div>
                        </div>
                        <div class="text-center">
                            <div class="text-4xl font-bold text-green-600 mb-2">98%</div>
                            <div class="text-gray-600 font-medium">Satisfaction Rate</div>
                        </div>
                        <div class="text-center">
                            <div class="text-4xl font-bold text-purple-600 mb-2">2.5M+</div>
                            <div class="text-gray-600 font-medium">Problems Solved</div>
                        </div>
                        <div class="text-center">
                            <div class="text-4xl font-bold text-orange-600 mb-2">45%</div>
                            <div class="text-gray-600 font-medium">Grade Improvement</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!-- Advanced Creative Footer -->
    <footer class="relative bg-gradient-to-br from-slate-900 via-blue-900 to-indigo-900 overflow-hidden">
        <!-- Animated Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: radial-gradient(circle at 2px 2px, rgba(255,255,255,0.3) 1px, transparent 0); background-size: 50px 50px;"></div>
        </div>
        
        <!-- Floating Background Elements -->
        <div class="absolute top-20 left-10 w-40 h-40 bg-gradient-to-br from-blue-400/20 to-indigo-500/20 rounded-full blur-2xl animate-float"></div>
        <div class="absolute top-40 right-20 w-32 h-32 bg-gradient-to-br from-purple-400/30 to-pink-500/20 rounded-full blur-xl animate-float-delayed"></div>
        <div class="absolute bottom-40 left-1/3 w-28 h-28 bg-gradient-to-br from-yellow-400/25 to-orange-500/20 rounded-full blur-lg animate-bounce-slow"></div>
        <div class="absolute bottom-20 right-1/4 w-36 h-36 bg-gradient-to-br from-green-400/20 to-teal-500/20 rounded-full blur-xl animate-pulse-slow"></div>
        
        <!-- Math Symbols -->
        <div class="absolute top-16 left-20 text-6xl text-white/10 font-bold animate-rotate-slow">∑</div>
        <div class="absolute top-32 right-32 text-5xl text-white/10 font-bold animate-wiggle">π</div>
        <div class="absolute bottom-32 left-16 text-7xl text-white/10 font-bold animate-float">∞</div>
        <div class="absolute bottom-16 right-16 text-4xl text-white/10 font-bold animate-bounce-slow">√</div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-20 pb-12">
            <!-- Main Footer Content -->
            <div class="grid lg:grid-cols-5 md:grid-cols-3 gap-8 mb-16">
                <!-- Brand Section -->
                <div class="lg:col-span-2 space-y-6">
                    <div class="flex items-center space-x-4">
                        <div class="relative">
                            <div class="w-16 h-16 bg-gradient-to-br from-blue-400 to-indigo-500 rounded-2xl flex items-center justify-center shadow-2xl animate-glow">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <!-- Orbiting particles -->
                            <div class="absolute -top-2 -right-2 w-4 h-4 bg-yellow-400 rounded-full animate-spin-slow"></div>
                            <div class="absolute -bottom-2 -left-2 w-3 h-3 bg-green-400 rounded-full animate-bounce"></div>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-white font-space">AI Math Genius</h3>
                            <p class="text-blue-200 text-sm">Revolutionizing Education</p>
                        </div>
                    </div>
                    
                    <p class="text-gray-300 leading-relaxed max-w-md">
                        Empowering the next generation with AI-powered mathematics education. Join thousands of students on their journey to mathematical excellence.
                    </p>
                    
                    <!-- Social Media with Glassmorphism -->
                    <div class="flex space-x-4">
                        <a href="#" class="group glassmorphism-dark w-12 h-12 rounded-xl flex items-center justify-center hover:bg-white/20 transition-all duration-300 hover:scale-110">
                            <svg class="w-5 h-5 text-blue-300 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="group glassmorphism-dark w-12 h-12 rounded-xl flex items-center justify-center hover:bg-white/20 transition-all duration-300 hover:scale-110">
                            <svg class="w-5 h-5 text-blue-300 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                            </svg>
                        </a>
                        <a href="#" class="group glassmorphism-dark w-12 h-12 rounded-xl flex items-center justify-center hover:bg-white/20 transition-all duration-300 hover:scale-110">
                            <svg class="w-5 h-5 text-blue-300 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.317 4.3698a19.7913 19.7913 0 00-4.8851-1.5152.0741.0741 0 00-.0785.0371c-.211.3753-.4447.8648-.6083 1.2495-1.8447-.2762-3.68-.2762-5.4868 0-.1636-.3933-.4058-.8742-.6177-1.2495a.077.077 0 00-.0785-.037 19.7363 19.7363 0 00-4.8852 1.515.0699.0699 0 00-.0321.0277C.5334 9.0458-.319 13.5799.0992 18.0578a.0824.0824 0 00.0312.0561c2.0528 1.5076 4.0413 2.4228 5.9929 3.0294a.0777.0777 0 00.0842-.0276c.4616-.6304.8731-1.2952 1.226-1.9942a.076.076 0 00-.0416-.1057c-.6528-.2476-1.2743-.5495-1.8722-.8923a.077.077 0 01-.0076-.1277c.1258-.0943.2517-.1923.3718-.2914a.0743.0743 0 01.0776-.0105c3.9278 1.7933 8.18 1.7933 12.0614 0a.0739.0739 0 01.0785.0095c.1202.099.246.1981.3728.2924a.077.077 0 01-.0066.1276 12.2986 12.2986 0 01-1.873.8914.0766.0766 0 00-.0407.1067c.3604.698.7719 1.3628 1.225 1.9932a.076.076 0 00.0842.0286c1.961-.6067 3.9495-1.5219 6.0023-3.0294a.077.077 0 00.0313-.0552c.5004-5.177-.8382-9.6739-3.5485-13.6604a.061.061 0 00-.0312-.0286zM8.02 15.3312c-1.1825 0-2.1569-1.0857-2.1569-2.419 0-1.3332.9555-2.4189 2.157-2.4189 1.2108 0 2.1757 1.0952 2.1568 2.419-.0190 1.3332-.9555 2.4189-2.1569 2.4189zm7.9748 0c-1.1825 0-2.1569-1.0857-2.1569-2.419 0-1.3332.9554-2.4189 2.1569-2.4189 1.2108 0 2.1757 1.0952 2.1568 2.419 0 1.3332-.946 2.4189-2.1568 2.4189Z"/>
                            </svg>
                        </a>
                        <a href="#" class="group glassmorphism-dark w-12 h-12 rounded-xl flex items-center justify-center hover:bg-white/20 transition-all duration-300 hover:scale-110">
                            <svg class="w-5 h-5 text-blue-300 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001.012.001z.012 0z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div class="space-y-6">
                    <h4 class="text-xl font-bold text-white font-space">Quick Links</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-300 hover:text-blue-300 transition-colors duration-300 flex items-center space-x-2 group">
                            <span class="w-1 h-1 bg-blue-400 rounded-full group-hover:w-2 transition-all duration-300"></span>
                            <span>About Us</span>
                        </a></li>
                        <li><a href="#" class="text-gray-300 hover:text-blue-300 transition-colors duration-300 flex items-center space-x-2 group">
                            <span class="w-1 h-1 bg-blue-400 rounded-full group-hover:w-2 transition-all duration-300"></span>
                            <span>Courses</span>
                        </a></li>
                        <li><a href="#" class="text-gray-300 hover:text-blue-300 transition-colors duration-300 flex items-center space-x-2 group">
                            <span class="w-1 h-1 bg-blue-400 rounded-full group-hover:w-2 transition-all duration-300"></span>
                            <span>Pricing</span>
                        </a></li>
                        <li><a href="#" class="text-gray-300 hover:text-blue-300 transition-colors duration-300 flex items-center space-x-2 group">
                            <span class="w-1 h-1 bg-blue-400 rounded-full group-hover:w-2 transition-all duration-300"></span>
                            <span>Contact</span>
                        </a></li>
                    </ul>
                </div>
                
                <!-- Features -->
                <div class="space-y-6">
                    <h4 class="text-xl font-bold text-white font-space">Features</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-300 hover:text-blue-300 transition-colors duration-300 flex items-center space-x-2 group">
                            <span class="w-1 h-1 bg-green-400 rounded-full group-hover:w-2 transition-all duration-300"></span>
                            <span>AI Tutoring</span>
                        </a></li>
                        <li><a href="#" class="text-gray-300 hover:text-blue-300 transition-colors duration-300 flex items-center space-x-2 group">
                            <span class="w-1 h-1 bg-green-400 rounded-full group-hover:w-2 transition-all duration-300"></span>
                            <span>Progress Tracking</span>
                        </a></li>
                        <li><a href="#" class="text-gray-300 hover:text-blue-300 transition-colors duration-300 flex items-center space-x-2 group">
                            <span class="w-1 h-1 bg-green-400 rounded-full group-hover:w-2 transition-all duration-300"></span>
                            <span>Interactive Lessons</span>
                        </a></li>
                        <li><a href="#" class="text-gray-300 hover:text-blue-300 transition-colors duration-300 flex items-center space-x-2 group">
                            <span class="w-1 h-1 bg-green-400 rounded-full group-hover:w-2 transition-all duration-300"></span>
                            <span>Parent Dashboard</span>
                        </a></li>
                    </ul>
                </div>
                
                <!-- Newsletter -->
                <div class="space-y-6">
                    <h4 class="text-xl font-bold text-white font-space">Stay Updated</h4>
                    <p class="text-gray-300 text-sm">Get the latest updates and educational tips directly to your inbox.</p>
                    
                    <!-- Newsletter Form with Glassmorphism -->
                    <div class="glassmorphism-dark rounded-2xl p-4 space-y-4">
                        <input type="email" placeholder="Enter your email" class="w-full bg-white/10 border border-white/20 rounded-xl px-4 py-3 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent transition-all duration-300">
                        <button class="w-full bg-gradient-to-r from-blue-500 to-indigo-600 text-white px-4 py-3 rounded-xl font-semibold hover:from-blue-600 hover:to-indigo-700 transition-all duration-300 hover:scale-105 flex items-center justify-center space-x-2">
                            <span>Subscribe</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            
           
            
            <!-- Bottom Section -->
            <div class="border-t border-white/20 pt-8">
                <div class="flex flex-col lg:flex-row items-center justify-between space-y-4 lg:space-y-0">
                    <!-- Copyright -->
                    <div class="text-gray-300 text-sm">
                        © 2024 AI Math Genius. All rights reserved. Made with 💙 for students worldwide.
                    </div>
                    
                    <!-- Links -->
                    <div class="flex items-center space-x-6 text-sm">
                        <a href="#" class="text-gray-300 hover:text-blue-300 transition-colors">Privacy Policy</a>
                        <a href="#" class="text-gray-300 hover:text-blue-300 transition-colors">Terms of Service</a>
                        <a href="#" class="text-gray-300 hover:text-blue-300 transition-colors">Cookie Policy</a>
                    </div>
                    
                    <!-- Back to Top Button -->
                    <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="glassmorphism-dark w-10 h-10 rounded-xl flex items-center justify-center hover:bg-white/20 transition-all duration-300 hover:scale-110">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Floating Mathematical Elements -->
        <div class="absolute top-20 left-10 floating-element">
            <div class="w-16 h-16 glassmorphism-dark rounded-2xl flex items-center justify-center text-xl font-bold text-white backdrop-blur-sm">
                ÷
            </div>
        </div>
        <div class="absolute top-40 right-20 floating-element">
            <div class="w-12 h-12 glassmorphism-dark rounded-full flex items-center justify-center text-lg font-bold text-white backdrop-blur-sm">
                %
            </div>
        </div>
        <div class="absolute bottom-40 left-20 floating-element">
            <div class="w-20 h-20 glassmorphism-dark rounded-3xl flex items-center justify-center text-lg font-bold text-white backdrop-blur-sm">
                =
            </div>
        </div>
        <div class="absolute bottom-60 right-10 floating-element">
            <div class="w-14 h-14 glassmorphism-dark rounded-2xl flex items-center justify-center text-xl font-bold text-white backdrop-blur-sm">
                +
            </div>
        </div>
    </footer>


    <!-- JavaScript -->
    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Particles animation
        const canvas = document.getElementById('particles-canvas');
        const ctx = canvas.getContext('2d');

        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;

        const particles = [];
        const particleCount = 30;

        class Particle {
            constructor() {
                this.x = Math.random() * canvas.width;
                this.y = Math.random() * canvas.height;
                this.size = Math.random() * 3 + 1;
                this.speedX = Math.random() * 3 - 1.5;
                this.speedY = Math.random() * 3 - 1.5;
                this.opacity = Math.random() * 0.5 + 0.1;
            }

            update() {
                this.x += this.speedX;
                this.y += this.speedY;

                if (this.x > canvas.width) this.x = 0;
                if (this.x < 0) this.x = canvas.width;
                if (this.y > canvas.height) this.y = 0;
                if (this.y < 0) this.y = canvas.height;
            }

            draw() {
                ctx.fillStyle = `rgba(255, 255, 255, ${this.opacity})`;
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                ctx.fill();
            }
        }

        function init() {
            for (let i = 0; i < particleCount; i++) {
                particles.push(new Particle());
            }
        }

        function animate() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            
            for (let i = 0; i < particles.length; i++) {
                particles[i].update();
                particles[i].draw();
            }
            
            requestAnimationFrame(animate);
        }

        // Resize canvas
        window.addEventListener('resize', () => {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
        });

        init();
        animate();

        // Scroll effects for navbar
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('nav');
            if (window.scrollY > 50) {
                navbar.style.background = 'rgba(255, 255, 255, 0.95)';
                navbar.style.backdropFilter = 'blur(20px)';
            } else {
                navbar.style.background = 'rgba(255, 255, 255, 0.95)';
                navbar.style.backdropFilter = 'blur(20px)';
            }
        });

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe all animated elements
        document.querySelectorAll('.animate-fade-in, .animate-scale-in, .animate-slide-up').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'all 0.8s ease-out';
            observer.observe(el);
        });
    </script>
</body>
</html>