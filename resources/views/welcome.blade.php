<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - NSA DIU</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-color: #1e90ff;
            --secondary-color: #0066cc;
            --accent-color: #0052a3;
            --warning-color: #ff9800;
            --text-dark: #1a1a1a;
            --text-gray: #6b7280;
            --bg-white: #ffffff;
            --bg-light: #f9fafb;
            --bg-card: #f3f4f6;
            --hover-primary: #1a7ce6;
            --success-color: #10b981;
            --danger-color: #ef4444;
            --card-shadow: 0 10px 30px rgba(30, 144, 255, 0.1);
            --transition: all 0.3s ease;
            --shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            --shadow-sm: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        [data-theme="dark"] {
            --text-dark: #FFFFFF;
            --text-gray: #d1d5db;
            --bg-white: #1f2937;
            --bg-light: #111827;
            --bg-card: #374151;
            --card-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }

        body {
            font-family: 'Inter', 'Segoe UI', Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: var(--bg-white);
            color: var(--text-dark);
            line-height: 1.6;
            overflow-x: hidden;
            padding-top: 80px;
        }

        /* Header Styles */
        .header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            padding: 0.8rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 20px rgba(30, 144, 255, 0.1);
            border-bottom: 1px solid rgba(30, 144, 255, 0.1);
        }

        [data-theme="dark"] .header {
            background: rgba(31, 41, 55, 0.95);
            border-bottom-color: rgba(30, 144, 255, 0.2);
        }

        .nav-container {
            max-width: 1500px;
            margin: 0 auto;
            padding: 0 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-section {
            display: flex;
            align-items: center;
            gap: 1rem;
            flex-shrink: 0;
        }

        .logo {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            overflow: hidden;
            transition: var(--transition);
        }

        .logo:hover {
            transform: scale(1.05);
        }

        .logo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .logo-text {
            color: var(--primary-color);
            font-weight: 700;
            font-size: 1.3rem;
            letter-spacing: -0.5px;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 0;
            align-items: center;
            flex-wrap: nowrap;
        }

        .nav-item {
            position: relative;
        }

        .nav-item a {
            color: var(--text-dark);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.95rem;
            padding: 0.5rem 1rem;
            transition: var(--transition);
            position: relative;
            display: block;
            white-space: nowrap;
        }

        .nav-item a.active {
            color: var(--primary-color);
        }

        .nav-item::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background: var(--primary-color);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .nav-item:hover::after,
        .nav-item a.active::after {
            width: 80%;
        }

        .nav-controls {
            display: flex;
            align-items: center;
            gap: 1rem;
            flex-shrink: 0;
        }

        .get-app-btn {
            background: var(--bg-light);
            border: 1px solid #e5e7eb;
            color: var(--text-dark);
            padding: 0.65rem 1.3rem;
            border-radius: 8px;
            font-weight: 500;
            font-size: 0.85rem;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 0.5rem;
            text-decoration: none;
            white-space: nowrap;
        }

        .get-app-btn::after {
            display: none;
        }

        .get-app-btn:hover {
            background: var(--primary-color);
            color: white;
            border-color: var(--primary-color);
        }

        .theme-toggle {
            background: transparent;
            border: 2px solid transparent;
            color: var(--text-dark);
            width: 48px;
            height: 48px;
            border-radius: 12px;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .theme-toggle:hover {
            border-color: var(--primary-color);
            color: var(--primary-color);
            transform: scale(1.05);
        }

        .mobile-menu-toggle {
            display: none;
            background: none;
            border: none;
            color: var(--text-dark);
            font-size: 1.5rem;
            cursor: pointer;
            padding: 0.5rem;
        }

        /* Hero Section */
        .hero-section {
            position: relative;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            background: var(--bg-white);
            overflow: hidden;
            margin-top: 0;
            padding-top: 0;
        }

        .hero-background {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 50vh;
            background: url('{{ asset('images/588902367_122258404880077049_8879214817870074587_n.jpg') }}') center bottom/cover no-repeat;
            z-index: 0;
            opacity: 1;
            border-radius: 30px 30px 0 0;
            margin: 0 2rem;
        }

        .hero-content {
            position: relative;
            z-index: 1;
            text-align: center;
            padding: 4rem 5% 2rem;
            max-width: 1200px;
            width: 100%;
        }

        .hero-title {
            font-size: 4rem;
            font-weight: 800;
            color: var(--text-dark);
            margin-bottom: 1rem;
            line-height: 1.15;
            letter-spacing: -2px;
        }

        .hero-subtitle {
            font-size: 1.15rem;
            color: var(--text-gray);
            margin-bottom: 2.5rem;
            font-weight: 400;
        }

        /* Search Box */
        .search-container {
            background: var(--bg-white);
            padding: 1.5rem 1.8rem;
            border-radius: 100px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
            display: flex;
            align-items: center;
            gap: 1rem;
            max-width: 950px;
            margin: 0 auto 3rem;
            flex-wrap: nowrap;
        }

        .search-field {
            flex: 1;
            min-width: 130px;
            display: flex;
            align-items: center;
            gap: 0.6rem;
            padding: 0 0.8rem;
            border-right: 1px solid #e5e7eb;
        }

        .search-field:last-of-type {
            border-right: none;
        }

        .search-field i {
            color: var(--text-gray);
            font-size: 1rem;
        }

        .search-input {
            border: none;
            outline: none;
            font-size: 0.9rem;
            color: var(--text-dark);
            font-weight: 500;
            width: 100%;
            background: transparent;
        }

        .search-input::placeholder {
            color: var(--text-gray);
            font-weight: 400;
        }

        .search-btn {
            background: var(--primary-color);
            color: var(--bg-white);
            border: none;
            padding: 0.9rem 2rem;
            border-radius: 50px;
            font-size: 0.95rem;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s;
            white-space: nowrap;
        }

        .search-btn:hover {
            background: var(--secondary-color);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(30, 144, 255, 0.3);
        }

        /* Features Section */
        .features-section {
            padding: 5rem 5%;
            background: var(--bg-white);
            margin-top: 0 !important;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 3rem;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2.5rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .feature-card {
            background: var(--bg-white);
            padding: 2.5rem 2rem;
            border-radius: 16px;
            text-align: center;
            transition: all 0.3s;
            border: 1px solid #f3f4f6;
            cursor: pointer;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow);
            border-color: var(--primary-color);
        }

        .feature-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 2rem;
            color: var(--bg-white);
        }

        .feature-card h3 {
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 0.8rem;
        }

        .feature-card p {
            color: var(--text-gray);
            font-size: 0.95rem;
            line-height: 1.6;
        }

        /* Call for Committee Member Section */
        .committee-call-section {
            background: #f9fafb;
            padding: 3rem 0 2.5rem 0;
            margin-bottom: 0;
        }

        .committee-call-section img {
            width: 100%;
            max-width: 350px;
            border-radius: 18px;
            box-shadow: 0 4px 24px rgba(30,144,255,0.10);
            margin-bottom: 1.2rem;
        }

        .committee-call-section h2 {
            color: #1e90ff;
            font-size: 2.1rem;
            font-weight: 800;
            margin-bottom: 0.7rem;
        }

        .committee-call-section h3 {
            color: #222;
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .committee-call-section .term {
            font-size: 1.1rem;
            margin-bottom: 0.7rem;
        }

        .committee-call-section .details {
            font-size: 1rem;
            margin-bottom: 1.1rem;
            color: #444;
        }

        .committee-call-section .details ul {
            padding-left: 1.2em;
            margin: 0;
        }

        .committee-call-section .apply-deadline {
            font-size: 1.1rem;
            color: #d32f2f;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .committee-call-section .contact-info {
            font-size: 0.98rem;
            color: #666;
        }

        /* Featured Photos Section */
        .featured-photos-section {
            width: 100vw;
            position: relative;
            left: 50%;
            right: 50%;
            margin-left: -50vw;
            margin-right: -50vw;
            max-width: 100vw;
            background: linear-gradient(90deg, #f9fafb 60%, #e3f0ff 100%);
            padding: 2.5rem 0 2.2rem 0;
        }

        .featured-photos-section h2 {
            text-align: center;
            color: #1e90ff;
            font-size: 2.1rem;
            font-weight: 800;
            margin-bottom: 2.2rem;
            letter-spacing: 0.5px;
        }

        .featured-photos-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 2.5vw;
            justify-content: center;
            align-items: stretch;
        }

        .featured-photo-card {
            flex: 1 1 320px;
            max-width: 400px;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 4px 24px rgba(30,144,255,0.10);
            overflow: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .featured-photo-card img {
            width: 100%;
            height: 260px;
            object-fit: cover;
        }

        .featured-photo-card .content {
            padding: 1.1rem 1.2rem 0.8rem 1.2rem;
            text-align: center;
        }

        .featured-photo-card .event-name {
            font-size: 1.08rem;
            font-weight: 700;
            color: #1e90ff;
            margin-bottom: 0.3rem;
        }

        .featured-photo-card .event-description {
            font-size: 0.97rem;
            color: #444;
        }

        /* Footer */
        .footer {
            background: var(--bg-light);
            color: var(--text-dark);
            padding: 3rem 5% 1.5rem;
            margin-top: 3rem;
            border-top: 1px solid #e5e7eb;
        }

        [data-theme="dark"] .footer {
            background: var(--bg-card);
            border-top-color: rgba(255, 255, 255, 0.1);
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-section h3 {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: var(--text-dark);
        }

        .footer-section p,
        .footer-section a {
            color: var(--text-gray);
            text-decoration: none;
            line-height: 1.8;
            font-size: 0.9rem;
            display: block;
            margin-bottom: 0.5rem;
            transition: var(--transition);
        }

        .footer-section a:hover {
            color: var(--primary-color);
        }

        .footer-section .info-item {
            display: flex;
            align-items: flex-start;
            gap: 0.5rem;
            margin-bottom: 0.5rem;
        }

        .footer-section .info-item i {
            color: var(--primary-color);
            margin-top: 0.3rem;
            font-size: 0.9rem;
        }

        .social-links {
            display: flex;
            gap: 0.8rem;
            margin-top: 1rem;
        }

        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            background: var(--bg-card);
            border-radius: 50%;
            transition: var(--transition);
            color: var(--text-dark);
        }

        [data-theme="dark"] .social-links a {
            background: var(--bg-light);
        }

        .social-links a:hover {
            background: var(--primary-color);
            color: white;
            transform: translateY(-3px);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 1.5rem;
            border-top: 1px solid #e5e7eb;
            color: var(--text-gray);
            font-size: 0.85rem;
        }

        [data-theme="dark"] .footer-bottom {
            border-top-color: rgba(255, 255, 255, 0.1);
        }

        /* Remove top margin from features-section for no gap */
        .features-section {
            margin-top: 0 !important;
            padding-top: 0.5rem !important;
        }

        /* Dark Mode Styles */
        .committee-call-section, .featured-photos-section {
            transition: background 0.3s, color 0.3s;
        }
        [data-theme="dark"] .committee-call-section {
            background: linear-gradient(90deg, #232b3a 0%, #1a2230 100%) !important;
            color: #e3eaf7;
        }
        [data-theme="dark"] .committee-call-section h2,
        [data-theme="dark"] .committee-call-section h3,
        [data-theme="dark"] .committee-call-section ul,
        [data-theme="dark"] .committee-call-section div,
        [data-theme="dark"] .committee-call-section a {
            color: #e3eaf7 !important;
        }
        [data-theme="dark"] .committee-call-section a {
            background: linear-gradient(90deg, #1e90ff 60%, #0066cc 100%);
            color: #fff !important;
        }
        [data-theme="dark"] .featured-photos-section {
            background: linear-gradient(90deg, #1a2230 60%, #232b3a 100%) !important;
            color: #e3eaf7;
        }
        [data-theme="dark"] .featured-photos-section h2,
        [data-theme="dark"] .featured-photos-section div {
            color: #e3eaf7 !important;
        }
        [data-theme="dark"] .featured-photos-section .feature-card,
        [data-theme="dark"] .featured-photos-section > div > div > div {
            background: #232b3a !important;
            color: #e3eaf7 !important;
            box-shadow: 0 4px 24px rgba(30,144,255,0.18);
        }
        [data-theme="dark"] .featured-photos-section img,
        [data-theme="dark"] .committee-call-section img {
            filter: brightness(0.85) contrast(1.08);
            border: 1px solid #222;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-menu {
                position: static;
                transform: none;
                gap: 1rem;
                font-size: 0.85rem;
            }

            .hero-title {
                font-size: 2.5rem;
            }

            .hero-subtitle {
                font-size: 1rem;
            }

            .search-container {
                flex-direction: column;
                border-radius: 20px;
                padding: 1.5rem;
            }

            .search-field {
                border-right: none;
                border-bottom: 1px solid #e5e7eb;
                padding: 1rem 0;
                width: 100%;
            }

            .search-field:last-of-type {
                border-bottom: none;
            }

            .search-btn {
                width: 100%;
                justify-content: center;
            }

            .features-grid {
                grid-template-columns: 1fr;
            }

            .hero-background {
                height: 40vh;
                margin: 0 1rem;
                border-radius: 20px 20px 0 0;
            }

            .hero-photo-row {
                flex-direction: column;
                gap: 1rem;
            }

            .hero-photo-row img {
                width: 100%;
                height: auto;
                max-width: 350px;
                margin: 0 auto;
            }
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .hero-content {
            animation: fadeIn 0.8s ease-out;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <header class="header">
        <nav class="nav-container">
            <div class="logo-section">
                <a href="{{ url('/welcome') }}" class="logo">
                    <img src="{{ asset('images/logo.png') }}" alt="NSA-DIU Logo" onerror="this.src='https://via.placeholder.com/50x50?text=NSA'">
                </a>
                <div class="logo-text">NSA-DIU</div>
            </div>
            
            <ul class="nav-menu" id="navMenu">
                <li class="nav-item"><a href="{{ url('/welcome') }}" class="active">Home</a></li>
                <li class="nav-item"><a href="{{ url('/gallery') }}">Gallery</a></li>
                <li class="nav-item"><a href="{{ url('/transport') }}">Transportation</a></li>
                <li class="nav-item"><a href="{{ url('/complaints') }}">Complaints</a></li>
                <li class="nav-item"><a href="{{ url('/executives') }}">Executive Members</a></li>
            </ul>
            
            <div class="nav-controls">
                <a href="{{ url('/developer') }}" class="get-app-btn">
                    <i class="fas fa-code"></i>
                    <span>Developer</span>
                </a>
                <button class="theme-toggle" id="themeToggle">
                    <i class="fas fa-moon" id="themeIcon"></i>
                </button>
                <button class="mobile-menu-toggle" id="mobileToggle">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-background" style="display: none;"></div>
        <div class="hero-content">
            <h1 class="hero-title">Your campus journey<br>starts right here</h1>
            <p class="hero-subtitle">Connect with fellow students, access resources, and stay updated with NSA DIU community.</p>
            <!-- Search Container -->
            <div class="search-container">
                <div class="search-field">
                    <i class="fas fa-search"></i>
                    <input type="text" class="search-input" placeholder="What are you looking for?" id="searchInput">
                </div>
                <div class="search-field">
                    <i class="fas fa-calendar-alt"></i>
                    <input type="text" class="search-input" placeholder="Event Date" id="dateInput">
                </div>
                <div class="search-field">
                    <i class="fas fa-tag"></i>
                    <input type="text" class="search-input" placeholder="Category" id="categoryInput">
                </div>
                <div class="search-field">
                    <i class="fas fa-users"></i>
                    <input type="text" class="search-input" placeholder="Members" id="membersInput">
                </div>
                <button class="search-btn" onclick="performSearch()">
                    <i class="fas fa-search"></i>
                    Search
                </button>
            </div>
            <!-- Featured Photos Section -->
            <section class="featured-photos-section" style="width: 100vw; position: relative; left: 50%; right: 50%; margin-left: -50vw; margin-right: -50vw; max-width: 100vw; background: linear-gradient(90deg, #f9fafb 60%, #e3f0ff 100%); padding: 2.5rem 0 2.2rem 0;">
                <div style="max-width: 1400px; margin: 0 auto; padding: 0 3vw;">
                    <h2 style="text-align: center; color: #1e90ff; font-size: 2.1rem; font-weight: 800; margin-bottom: 2.2rem; letter-spacing: 0.5px;">Featured Photos of the Association</h2>
                    <div style="display: flex; flex-wrap: wrap; gap: 2.5vw; justify-content: center; align-items: stretch;">
                        <div style="flex: 1 1 320px; max-width: 400px; background: #fff; border-radius: 18px; box-shadow: 0 4px 24px rgba(30,144,255,0.10); overflow: hidden; display: flex; flex-direction: column; align-items: center;">
                            <img src="{{ asset('images/Oitijjer Haat/588902367_122258404880077049_8879214817870074587_n.jpg') }}" alt="Oitijjer Haat" style="width: 100%; height: 260px; object-fit: cover;">
                            <div style="padding: 1.1rem 1.2rem 0.8rem 1.2rem; text-align: center;">
                                <div style="font-size: 1.08rem; font-weight: 700; color: #1e90ff; margin-bottom: 0.3rem;">Oitijjer Haat</div>
                                <div style="font-size: 0.97rem; color: #444;">A glimpse of our vibrant cultural event.</div>
                            </div>
                        </div>
                        <div style="flex: 1 1 320px; max-width: 400px; background: #fff; border-radius: 18px; box-shadow: 0 4px 24px rgba(30,144,255,0.10); overflow: hidden; display: flex; flex-direction: column; align-items: center;">
                            <img src="{{ asset('images/FresherOrientaion/547933105_122247658808077049_1047612383681099731_n (1).jpg') }}" alt="Fresher Orientation" style="width: 100%; height: 260px; object-fit: cover;">
                            <div style="padding: 1.1rem 1.2rem 0.8rem 1.2rem; text-align: center;">
                                <div style="font-size: 1.08rem; font-weight: 700; color: #1e90ff; margin-bottom: 0.3rem;">Fresher Orientation</div>
                                <div style="font-size: 0.97rem; color: #444;">Welcoming new members to our association.</div>
                            </div>
                        </div>
                        <div style="flex: 1 1 320px; max-width: 400px; background: #fff; border-radius: 18px; box-shadow: 0 4px 24px rgba(30,144,255,0.10); overflow: hidden; display: flex; flex-direction: column; align-items: center;">
                            <img src="{{ asset('images/sports/531391928_1932315570877662_7713809505318585037_n.jpg') }}" alt="Sports Event" style="width: 100%; height: 260px; object-fit: cover;">
                            <div style="padding: 1.1rem 1.2rem 0.8rem 1.2rem; text-align: center;">
                                <div style="font-size: 1.08rem; font-weight: 700; color: #1e90ff; margin-bottom: 0.3rem;">Sports Event</div>
                                <div style="font-size: 0.97rem; color: #444;">Celebrating teamwork and sportsmanship.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Call for Committee Member Section (Full Width, Large Image) -->
            <section class="committee-call-section" style="background: linear-gradient(90deg, #e3f0ff 0%, #f9fafb 100%); border-radius: 0; box-shadow: 0 6px 32px rgba(30,144,255,0.10); padding: 2.5rem 0 2.2rem 0; margin: 1.5rem 0 1.2rem 0; width: 100vw; position: relative; left: 50%; right: 50%; margin-left: -50vw; margin-right: -50vw; max-width: 100vw;">
                <div style="max-width: 1400px; margin: 0 auto; display: flex; align-items: center; gap: 2.5rem; flex-wrap: wrap; justify-content: center; padding: 0 3vw;">
                    <div style="flex: 1 1 350px; min-width: 220px; text-align: center;">
                        <img src="{{ asset('images/callfor.jpg') }}" alt="Call for Committee Member" style="width: 100%; max-width: 340px; border-radius: 18px; box-shadow: 0 4px 24px rgba(30,144,255,0.10); margin-bottom: 0.7rem;">
                    </div>
                    <div style="flex: 2 1 500px; min-width: 220px;">
                        <div style="display: flex; align-items: center; gap: 0.9rem; margin-bottom: 0.7rem;">
                            <i class="fas fa-bullhorn" style="font-size: 2.2rem; color: #1e90ff;"></i>
                            <h2 style="color: #1e90ff; font-size: 2.1rem; font-weight: 800; margin: 0;">Committee Member Recruitment</h2>
                        </div>
                        <div style="font-size: 1.18rem; color: #222; font-weight: 600; margin-bottom: 0.3rem;">Narayanganj Student Association</div>
                        <div style="font-size: 1.08rem; margin-bottom: 0.7rem; color: #444;">
                            <b>Term:</b> January – June 2026
                        </div>
                        <ul style="padding-left: 1.2em; margin: 0 0 0.7rem 0; color: #444; font-size: 1.05rem;">
                            <li>Be a voice for your peers</li>
                            <li>Organize student activities & events</li>
                            <li>Work for student welfare and community</li>
                            <li>Build leadership and teamwork skills</li>
                        </ul>
                        <div style="font-size: 1.08rem; color: #d32f2f; font-weight: 700; margin-bottom: 0.7rem;">
                            Last date to apply: 31 December 2025
                        </div>
                        <a href="https://forms.gle/WVmGA9ikUDgUcbJAA" target="_blank" style="display: inline-block; background: linear-gradient(90deg, #1e90ff 60%, #0066cc 100%); color: #fff; font-weight: 700; font-size: 1.18rem; padding: 0.8rem 2.5rem; border-radius: 10px; text-decoration: none; box-shadow: 0 2px 12px rgba(30,144,255,0.10); transition: background 0.2s; letter-spacing: 0.5px;">Apply Now</a>
                        <div style="font-size: 1.01rem; color: #666; margin-top: 0.7rem;">For details: <b>studentassociation.narayanganj@gmail.com</b></div>
                    </div>
                </div>
            </section>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <h2 class="section-title">How We Support Students</h2>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3>Peer Community</h3>
                <p>Connect with fellow students from Narayanganj, share experiences, and build lasting friendships at DIU.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-calendar-check"></i>
                </div>
                <h3>Events & Activities</h3>
                <p>Participate in cultural, academic, and social events designed to enrich your university life.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-hands-helping"></i>
                </div>
                <h3>Student Welfare</h3>
                <p>We advocate for student needs, provide guidance, and help resolve campus challenges together.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-bullhorn"></i>
                </div>
                <h3>Information & Announcements</h3>
                <p>Stay informed with important updates, notices, and opportunities relevant to our community.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <h3>Academic Support</h3>
                <p>Access shared resources, study groups, and peer mentoring to help you succeed at DIU.</p>
            </div>
        </div>
    </section>

   

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3>Narayanganj Student Association</h3>
                <p>We are a student-led, non-profit association dedicated to supporting, empowering, and connecting students from Narayanganj at Daffodil International University. Our mission is to foster community, leadership, and academic success—by students, for students.</p>
                <div class="social-links">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
            <div class="footer-section">
                <h3>Quick Links</h3>
                <a href="{{ url('/welcome') }}">Home</a>
                <a href="{{ url('/gallery') }}">Gallery</a>
                <a href="#">Notices</a>
                <a href="{{ url('/complaints') }}">Complaints</a>
                <a href="{{ url('/contactus') }}">Contact</a>
            </div>
            <div class="footer-section">
                <h3>Contact & Info</h3>
                <div class="info-item">
                    <i class="fas fa-envelope"></i>
                    <span>studentassociation.narayanganj@gmail.com</span>
                </div>
                <div class="info-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Daffodil Smart City, DIU</span>
                </div>
            </div>
            <div class="footer-section">
                <h3>University</h3>
                <a href="https://daffodilvarsity.edu.bd" target="_blank">DIU Official Website</a>
                <a href="https://studentportal.diu.ac" target="_blank">Student Portal</a>
                <a href="#">Academic Calendar</a>
                <a href="#">Campus Map</a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Narayanganj Student Association - DIU. All rights reserved. | Developed by Jahangir Alam Tamal</p>
        </div>
    </footer>

    <script>
        // Search functionality
        function performSearch() {
            const searchValue = document.getElementById('searchInput').value;
            const dateValue = document.getElementById('dateInput').value;
            const categoryValue = document.getElementById('categoryInput').value;
            const membersValue = document.getElementById('membersInput').value;
            
            if (searchValue || dateValue || categoryValue || membersValue) {
                // Create search query
                const params = new URLSearchParams();
                if (searchValue) params.append('search', searchValue);
                if (dateValue) params.append('date', dateValue);
                if (categoryValue) params.append('category', categoryValue);
                if (membersValue) params.append('members', membersValue);
                
                // You can redirect to a search results page
                console.log('Searching with params:', params.toString());
                alert('Search feature coming soon!\n\nSearching for:\n' + 
                      (searchValue ? 'Query: ' + searchValue + '\n' : '') +
                      (dateValue ? 'Date: ' + dateValue + '\n' : '') +
                      (categoryValue ? 'Category: ' + categoryValue + '\n' : '') +
                      (membersValue ? 'Members: ' + membersValue : ''));
            } else {
                alert('Please enter at least one search criteria');
            }
        }

        // Add enter key support for search
        document.querySelectorAll('.search-input').forEach(input => {
            input.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    performSearch();
                }
            });
        });

        // Add date picker functionality (basic)
        document.getElementById('dateInput').addEventListener('focus', function() {
            this.type = 'date';
        });

        document.getElementById('dateInput').addEventListener('blur', function() {
            if (!this.value) {
                this.type = 'text';
            }
        });

        // Theme toggle functionality
        const themeToggle = document.getElementById('themeToggle');
        const themeIcon = document.getElementById('themeIcon');
        const currentTheme = localStorage.getItem('theme') || 'light';

        document.documentElement.setAttribute('data-theme', currentTheme);
        updateThemeIcon(currentTheme);

        themeToggle.addEventListener('click', () => {
            const currentTheme = document.documentElement.getAttribute('data-theme');
            const newTheme = currentTheme === 'light' ? 'dark' : 'light';
            
            document.documentElement.setAttribute('data-theme', newTheme);
            localStorage.setItem('theme', newTheme);
            updateThemeIcon(newTheme);
        });

        function updateThemeIcon(theme) {
            if (theme === 'dark') {
                themeIcon.className = 'fas fa-sun';
            } else {
                themeIcon.className = 'fas fa-moon';
            }
        }

        // Mobile menu toggle functionality
        const mobileToggle = document.getElementById('mobileToggle');
        const navMenu = document.getElementById('navMenu');

        mobileToggle.addEventListener('click', () => {
            navMenu.classList.toggle('active');
        });

        // Close mobile menu when clicking on a nav item
        document.querySelectorAll('.nav-item a').forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('active');
            });
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!navMenu.contains(e.target) && !mobileToggle.contains(e.target)) {
                navMenu.classList.remove('active');
            }
        });
    </script>
</body>
</html>