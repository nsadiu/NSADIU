<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Executive Members - NSA DIU</title>
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
            background: var(--bg-light);
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
        .nav-item a.active + ::after,
        .nav-item:has(a.active)::after {
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

        /* Page Header */
        .page-header {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: var(--bg-white);
            padding: 4rem 5%;
            text-align: center;
            margin-top: 0;
        }

        .page-header h1 {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 1rem;
            letter-spacing: -1px;
        }

        .page-header p {
            font-size: 1.2rem;
            opacity: 0.95;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Container */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 5%;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 3rem;
        }

        /* Leadership Grid */
        .leadership-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 4rem;
            max-width: 1000px;
            margin-left: auto;
            margin-right: auto;
        }

        .hall-leadership-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-bottom: 4rem;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .executives-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }

        /* Executive Cards */
        .executive-card {
            background: var(--bg-white);
            border-radius: 16px;
            padding: 2rem 1.5rem;
            text-align: center;
            transition: all 0.3s;
            border: 1px solid #f3f4f6;
            box-shadow: var(--shadow-sm);
            position: relative;
            overflow: hidden;
        }

        .executive-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow);
            border-color: var(--primary-color);
        }

        .executive-avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            margin: 0 auto 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            color: white;
            font-weight: 600;
            box-shadow: 0 6px 15px rgba(30, 144, 255, 0.25);
            overflow: hidden;
            position: relative;
        }

        .executive-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .executive-avatar .initials {
            position: absolute;
            font-size: 1.8rem;
            font-weight: 600;
            color: white;
        }

        .executive-name {
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 0.3rem;
        }

        .executive-department {
            font-size: 0.85rem;
            color: var(--text-gray);
            margin-bottom: 0.8rem;
            font-style: italic;
        }

        .executive-position {
            font-size: 1rem;
            color: var(--primary-color);
            font-weight: 600;
        }

        /* President Card */
        .president-card {
            border: 2px solid var(--primary-color);
            box-shadow: 0 10px 30px rgba(30, 144, 255, 0.15);
        }

        .president-card .executive-avatar {
            width: 120px;
            height: 120px;
            font-size: 2.2rem;
        }

        .president-card .executive-name {
            font-size: 1.3rem;
            color: var(--primary-color);
        }

        /* Vice President Card */
        .vice-president-card {
            border: 1px solid var(--primary-color);
            box-shadow: 0 8px 25px rgba(30, 144, 255, 0.12);
        }

        /* Search Bar */
        .search-container {
            max-width: 500px;
            margin: 0 auto 3rem;
        }

        .search-box {
            display: flex;
            align-items: center;
            background: var(--bg-white);
            border: 2px solid #e5e7eb;
            border-radius: 50px;
            padding: 0.8rem 1.5rem;
            transition: all 0.3s;
        }

        .search-box:focus-within {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(30, 144, 255, 0.1);
        }

        .search-box input {
            border: none;
            outline: none;
            font-size: 0.95rem;
            width: 100%;
            background: transparent;
            color: var(--text-dark);
        }

        .search-box i {
            color: var(--text-gray);
            margin-right: 0.8rem;
        }

        /* Back to Top Button */
        .back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: var(--primary-color);
            color: white;
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            font-size: 1.2rem;
            box-shadow: var(--shadow);
            transition: all 0.3s;
            opacity: 0;
            visibility: hidden;
            cursor: pointer;
            z-index: 100;
        }

        .back-to-top.show {
            opacity: 1;
            visibility: visible;
        }

        .back-to-top:hover {
            background: var(--secondary-color);
            transform: translateY(-3px);
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

        .mobile-menu-toggle {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--text-dark);
        }

        /* Responsive */
        @media (max-width: 968px) {
            .nav-menu {
                gap: 1.5rem;
            }

            .nav-menu a {
                font-size: 0.85rem;
            }
        }

        @media (max-width: 768px) {
            .mobile-menu-toggle {
                display: block;
            }

            .nav-menu {
                position: fixed;
                top: 72px;
                left: 0;
                right: 0;
                background: var(--bg-white);
                flex-direction: column;
                gap: 0;
                padding: 1rem 0;
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
                display: none;
                transform: none;
            }

            .nav-menu.active {
                display: flex;
            }

            .nav-menu a {
                width: 100%;
                text-align: center;
                padding: 1rem;
                border-bottom: 1px solid #f3f4f6;
            }

            .get-app-btn {
                margin: 0 1rem;
                width: calc(100% - 2rem);
                justify-content: center;
            }

            .page-header h1 {
                font-size: 2rem;
            }

            .leadership-row,
            .hall-leadership-row,
            .executives-grid {
                grid-template-columns: 1fr;
            }
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .executive-card {
            animation: fadeIn 0.6s ease-out;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <nav class="nav-container">
            <div class="logo-section">
                <a href="{{ url('/welcome') }}" class="logo">
                    <img src="{{ asset('images/logo.png') }}" alt="NSA-DIU Logo">
                </a>
                <div class="logo-text">NSA-DIU</div>
            </div>
            <ul class="nav-menu" id="navMenu">
                <li class="nav-item"><a href="{{ url('/welcome') }}">Home</a></li>
                <li class="nav-item"><a href="{{ url('/gallery') }}">Gallery</a></li>
                <li class="nav-item"><a href="{{ url('/transport') }}">Transportation</a></li>
                <li class="nav-item"><a href="{{ url('/complaints') }}">Complaints</a></li>
                <li class="nav-item"><a href="{{ url('/executives') }}" class="active">Executive Members</a></li>
            </ul>
            <div class="nav-controls">
                <a href="{{ url('/developer') }}" class="get-app-btn">
                    <i class="fas fa-code"></i>
                    Developer
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

    <!-- Page Header -->
    <div class="page-header">
        <h1><i class="fas fa-users"></i> Executive Members</h1>
        <p>Meet the dedicated leaders of NSA-DIU working for the betterment of our community</p>
    </div>

    <!-- Main Content -->
    <div class="container">
        <!-- Search Bar -->
        <div class="search-container">
            <div class="search-box">
                <i class="fas fa-search"></i>
                <input type="text" id="searchExecutives" placeholder="Search by name, position, or department...">
            </div>
        </div>

        <h2 class="section-title">Leadership Team 2024-25</h2>
        
        <!-- President & Vice Presidents -->
        <div class="leadership-row">
            <div class="executive-card vice-president-card">
                <div class="executive-avatar">
                    <img src="{{ asset('images/executives2025/tuly.jpg') }}" alt="Tanjina Ahmed Tuly" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                    <div class="initials" style="display:none;">TA</div>
                </div>
                <div class="executive-name">Tanjina Ahmed Tuly</div>
                <div class="executive-department">Department of Computer Science & Engineering</div>
                <div class="executive-position">Vice President</div>
            </div>

            <div class="executive-card president-card">
                <div class="executive-avatar">
                    <img src="{{ asset('images/executives2025/Tamal.jpg') }}" alt="Jahangir Alam Tamal" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                    <div class="initials" style="display:none;">JT</div>
                </div>
                <div class="executive-name">Jahangir Alam Tamal</div>
                <div class="executive-department">Department of Computer Science & Engineering</div>
                <div class="executive-position">President</div>
            </div>

            <div class="executive-card vice-president-card">
                <div class="executive-avatar">
                    <img src="{{ asset('images/executives2025/rabbi.jpg') }}" alt="Fozla Rabbi" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                    <div class="initials" style="display:none;">FR</div>
                </div>
                <div class="executive-name">Fozla Rabbi</div>
                <div class="executive-department">Department of Civil Engineering</div>
                <div class="executive-position">Vice President</div>
            </div>
        </div>

        <!-- Hall Leadership -->
        <div class="hall-leadership-row">
            <div class="executive-card">
                <div class="executive-avatar">
                    <img src="{{ asset('images/executives2025/nayeem.jpg') }}" alt="Md. Mehedi Hasan Nayeem" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                    <div class="initials" style="display:none;">MN</div>
                </div>
                <div class="executive-name">Md. Mehedi Hasan Nayeem</div>
                <div class="executive-department">Department of Computer Science & Engineering</div>
                <div class="executive-position">Hall President</div>
            </div>

            <div class="executive-card">
                <div class="executive-avatar">
                    <img src="{{ asset('images/executives2025/Oishe.jpg') }}" alt="Meherun Nessa Oishe" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                    <div class="initials" style="display:none;">MO</div>
                </div>
                <div class="executive-name">Meherun Nessa Oishe</div>
                <div class="executive-department">Department of Pharmacy</div>
                <div class="executive-position">Hall Vice President</div>
            </div>
        </div>

        <!-- Other Executive Members -->
        <div class="executives-grid">
            <div class="executive-card">
                <div class="executive-avatar">
                    <img src="{{ asset('images/executives2025/sadik.jpg') }}" alt="Md. Sadiqul Alam Tushan" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                    <div class="initials" style="display:none;">ST</div>
                </div>
                <div class="executive-name">Md. Sadiqul Alam Tushan</div>
                <div class="executive-department">Department of Computer Science & Engineering</div>
                <div class="executive-position">General Secretary</div>
            </div>

            <div class="executive-card">
                <div class="executive-avatar">
                    <img src="{{ asset('images/executives2025/sajid.jpg') }}" alt="Md. Sajid Rahman" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                    <div class="initials" style="display:none;">SR</div>
                </div>
                <div class="executive-name">Md. Sajid Rahman</div>
                <div class="executive-department">Department of Computer Science & Engineering</div>
                <div class="executive-position">Joint Secretary</div>
            </div>

            <div class="executive-card">
                <div class="executive-avatar">
                    <img src="{{ asset('images/executives2025/nurjahan.jpg') }}" alt="Nurjahan Akhter Mim" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                    <div class="initials" style="display:none;">NM</div>
                </div>
                <div class="executive-name">Nurjahan Akhter Mim</div>
                <div class="executive-department">Department of Computer Science & Engineering</div>
                <div class="executive-position">Treasurer</div>
            </div>

            <div class="executive-card">
                <div class="executive-avatar">
                    <img src="{{ asset('images/executives2025/tiyash.jpg') }}" alt="K M Tanvir Imam" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                    <div class="initials" style="display:none;">TI</div>
                </div>
                <div class="executive-name">K M Tanvir Imam</div>
                <div class="executive-department">Department of Computer Science & Engineering</div>
                <div class="executive-position">Organizing Secretary</div>
            </div>

            

            <div class="executive-card">
                <div class="executive-avatar">
                    <img src="{{ asset('images/executives2025/saki.jpg') }}" alt="Saki Rajoana" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                    <div class="initials" style="display:none;">SR</div>
                </div>
                <div class="executive-name">Saki Rajoana</div>
                <div class="executive-department">Department of Environmental Science & Disaster Management</div>
                <div class="executive-position">Female Student Affairs Secretary</div>
            </div>

            <div class="executive-card">
                <div class="executive-avatar">
                    <img src="{{ asset('images/executives2025/mohima.jpg') }}" alt="Mohima Jannat" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                    <div class="initials" style="display:none;">MJ</div>
                </div>
                <div class="executive-name">Mohima Jannat</div>
                <div class="executive-department">Department of Agricultural Science</div>
                <div class="executive-position">Cultural Secretary</div>
            </div>

            <div class="executive-card">
                <div class="executive-avatar">
                    <img src="{{ asset('images/executives2025/Likhon.jpg') }}" alt="Md. Likhon Bhuiyan" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                    <div class="initials" style="display:none;">LB</div>
                </div>
                <div class="executive-name">Md. Likhon Bhuiyan</div>
                <div class="executive-department">Department of Computer Science & Engineering</div>
                <div class="executive-position">Sports Secretary</div>
            </div>

            <div class="executive-card">
                <div class="executive-avatar">
                    <img src="{{ asset('images/executives2025/alamin.jpg') }}" alt="Md. Alamin Bhuiyan" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                    <div class="initials" style="display:none;">AB</div>
                </div>
                <div class="executive-name">Md. Alamin Bhuiyan</div>
                <div class="executive-department">Department of Pharmacy</div>
                <div class="executive-position">Education Secretary</div>
            </div>

            <div class="executive-card">
                <div class="executive-avatar">
                    <img src="{{ asset('images/executives2025/samanta.jpg') }}" alt="Samanta Jubaida Haque" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                    <div class="initials" style="display:none;">SH</div>
                </div>
                <div class="executive-name">Samanta Jubaida Haque</div>
                <div class="executive-department">Department of English</div>
                <div class="executive-position">Publication Secretary</div>
            </div>

            <div class="executive-card">
                <div class="executive-avatar">
                    <img src="{{ asset('images/executives2025/niaz.jpg') }}" alt="Obydur Rahman Niaz" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                    <div class="initials" style="display:none;">ON</div>
                </div>
                <div class="executive-name">Obydur Rahman Niaz</div>
                <div class="executive-department">Department of Computer Science & Engineering</div>
                <div class="executive-position">Media & Communication Secretary</div>
            </div>

            <div class="executive-card">
                <div class="executive-avatar">
                    <img src="{{ asset('images/executives2025/azad.jpg') }}" alt="Md. Azad Sarder Naim" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                    <div class="initials" style="display:none;">AN</div>
                </div>
                <div class="executive-name">Md. Azad Sarder Naim</div>
                <div class="executive-department">Department of Software Engineering</div>
                <div class="executive-position">Social Welfare Secretary</div>
            </div>

            <div class="executive-card">
                <div class="executive-avatar">
                    <img src="{{ asset('images/executives2025/ibrahim.jpg') }}" alt="Ibrahim Alam Efty" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                    <div class="initials" style="display:none;">IE</div>
                </div>
                <div class="executive-name">Ibrahim Alam Efty</div>
                <div class="executive-department">Department of Business Administration</div>
                <div class="executive-position">Transport Secretary</div>
            </div>

            <div class="executive-card">
                <div class="executive-avatar">
                    <img src="{{ asset('images/executives2025/Fahim.jpg') }}" alt="Md. Fahim Zahid" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                    <div class="initials" style="display:none;">FZ</div>
                </div>
                <div class="executive-name">Md. Fahim Zahid</div>
                <div class="executive-department">Department of Computer Science & Engineering</div>
                <div class="executive-position">Volunteer Coordinator</div>
            </div>

            <div class="executive-card">
                <div class="executive-avatar">
                    <img src="{{ asset('images/executives2025/salem.jpg') }}" alt="Abdullah Al Salem" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                    <div class="initials" style="display:none;">AS</div>
                </div>
                <div class="executive-name">Abdullah Al Salem</div>
                <div class="executive-department">Department of Electrical & Electronic Engineering</div>
                <div class="executive-position">Volunteer Coordinator</div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3>Narayanganj Student Association</h3>
                <p>We are dedicated to supporting students from Narayanganj at Daffodil International University, fostering community, and ensuring academic success.</p>
                <div class="social-links">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
            <div class="footer-section">
                <h3>Quick Links</h3>
                <a href="{{ url('/welcome') }}">Home</a>
                <a href="{{ url('/transport') }}">Transportation Help</a>
                <a href="{{ url('/gallery') }}">Gallery</a>
                <a href="#">Notices</a>
                <a href="{{ url('/complaints') }}">Complaints</a>
                <a href="{{ url('/contactus') }}">Contact</a>
            </div>
            <div class="footer-section">
                <h3>Transportation Info</h3>
                <div class="info-item">
                    <i class="fas fa-bus"></i>
                    <span>Bus Departure: 6:20 AM</span>
                </div>
                <div class="info-item">
                    <i class="fas fa-clock"></i>
                    <span>Return Times: 4:20 PM, 6:00 PM</span>
                </div>
                <div class="info-item">
                    <i class="fas fa-route"></i>
                    <span>Route: Narayanganj ↔ DIU</span>
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

    <!-- Back to Top Button -->
    <button class="back-to-top" id="backToTop">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script>
        // Search functionality
        const searchInput = document.getElementById('searchExecutives');
        
        searchInput.addEventListener('input', (e) => {
            const searchTerm = e.target.value.toLowerCase();
            const executiveCards = document.querySelectorAll('.executive-card');
            
            executiveCards.forEach(card => {
                const name = card.querySelector('.executive-name').textContent.toLowerCase();
                const position = card.querySelector('.executive-position').textContent.toLowerCase();
                const department = card.querySelector('.executive-department').textContent.toLowerCase();
                
                if (name.includes(searchTerm) || position.includes(searchTerm) || department.includes(searchTerm)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });

        // Back to top functionality
        const backToTopBtn = document.getElementById('backToTop');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopBtn.classList.add('show');
            } else {
                backToTopBtn.classList.remove('show');
            }
        });
        
        backToTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Scroll animation for cards
        function animateOnScroll() {
            const cards = document.querySelectorAll('.executive-card');
            
            cards.forEach(card => {
                const cardTop = card.getBoundingClientRect().top;
                const cardVisible = 150;
                
                if (cardTop < window.innerHeight - cardVisible) {
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }
            });
        }

        // Initialize cards
        document.querySelectorAll('.executive-card').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        });

        window.addEventListener('scroll', animateOnScroll);
        animateOnScroll();

        // Mobile menu toggle
        const mobileToggle = document.getElementById('mobileToggle');
        const navMenu = document.getElementById('navMenu');
        
        if (mobileToggle) {
            mobileToggle.addEventListener('click', () => {
                navMenu.classList.toggle('active');
            });
        }

        // Close menu when clicking outside
        document.addEventListener('click', (e) => {
            if (mobileToggle && navMenu && !navMenu.contains(e.target) && !mobileToggle.contains(e.target)) {
                navMenu.classList.remove('active');
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
