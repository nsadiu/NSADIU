<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - NSA DIU</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
                .gallery-section-title {
                    text-align: center;
                    margin-top: 3rem;
                    margin-bottom: 2.5rem;
                    font-size: 2.5rem;
                    font-weight: 800;
                    letter-spacing: 1px;
                    background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
                    background-clip: text;
                    text-fill-color: transparent;
                    position: relative;
                    text-shadow: 0 4px 24px rgba(30,144,255,0.10);
                }
                .gallery-section-title::after {
                    content: '';
                    display: block;
                    margin: 0.7rem auto 0 auto;
                    width: 80px;
                    height: 5px;
                    border-radius: 3px;
                    background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
                    opacity: 0.7;
                }
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

        .get-app-btn-old {
            background: var(--bg-light);
            border: 1px solid #e5e7eb;
            padding: 0.65rem 1.3rem;
            border-radius: 8px;
            color: var(--text-dark) !important;
            text-decoration: none;
            font-weight: 500;
            font-size: 0.9rem;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .get-app-btn::after {
            display: none;
        }

        .get-app-btn:hover {
            background: var(--text-dark);
            color: var(--bg-white) !important;
            border-color: var(--text-dark);
        }

        .mobile-menu-toggle {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--text-dark);
        }

        /* Page Header */
        .page-header {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: var(--bg-white);
            padding: 4rem 5%;
            text-align: center;
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

        /* Gallery Filters */
        .gallery-filters {
            display: flex;
            justify-content: center;
            gap: 1rem;
            padding: 2rem 5%;
            flex-wrap: wrap;
        }

        .filter-btn {
            background: var(--bg-white);
            border: 1px solid #e5e7eb;
            padding: 0.6rem 1.5rem;
            border-radius: 25px;
            color: var(--text-gray);
            font-size: 0.9rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
        }

        .filter-btn:hover,
        .filter-btn.active {
            background: var(--primary-color);
            color: var(--bg-white);
            border-color: var(--primary-color);
        }

        /* Gallery Grid */
        .gallery-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 2rem 5% 4rem;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 1.5rem;
        }

        .gallery-item {
            background: var(--bg-white);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: var(--shadow-sm);
            transition: all 0.3s;
            cursor: pointer;
            position: relative;
        }

        .gallery-item:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow);
        }

        .gallery-image {
            width: 100%;
            height: 300px;
            object-fit: cover;
            display: block;
        }

        .gallery-info {
            padding: 1rem;
        }

        .gallery-category {
            display: inline-block;
            background: var(--bg-light);
            color: var(--primary-color);
            padding: 0.3rem 0.8rem;
            border-radius: 15px;
            font-size: 0.75rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .gallery-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 0.3rem;
        }

        .gallery-date {
            font-size: 0.85rem;
            color: var(--text-gray);
        }

        /* Lightbox */
        .lightbox {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.9);
            z-index: 2000;
            align-items: center;
            justify-content: center;
        }

        .lightbox.active {
            display: flex;
        }

        .lightbox-content {
            position: relative;
            max-width: 90%;
            max-height: 90%;
        }

        .lightbox-image {
            max-width: 100%;
            max-height: 85vh;
            object-fit: contain;
        }

        .lightbox-close {
            position: absolute;
            top: -40px;
            right: -40px;
            background: var(--bg-white);
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 1.2rem;
            color: var(--text-dark);
            transition: all 0.3s;
        }

        .lightbox-close:hover {
            background: var(--primary-color);
            color: var(--bg-white);
        }

        .lightbox-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: var(--bg-white);
            border: none;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 1.5rem;
            color: var(--text-dark);
            transition: all 0.3s;
        }

        .lightbox-nav:hover {
            background: var(--primary-color);
            color: var(--bg-white);
        }

        .lightbox-prev {
            left: 20px;
        }

        .lightbox-next {
            right: 20px;
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

        /* Back to Top */
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

            .gallery-grid {
                grid-template-columns: 1fr;
            }

            .lightbox-close {
                top: 10px;
                right: 10px;
            }

            .lightbox-nav {
                width: 40px;
                height: 40px;
                font-size: 1.2rem;
            }
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .gallery-item {
            animation: fadeIn 0.6s ease-out;
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
                <li class="nav-item"><a href="{{ url('/welcome') }}">Home</a></li>
                <li class="nav-item"><a href="{{ url('/gallery') }}" class="active">Gallery</a></li>
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

    <!-- Page Header -->
    <div class="page-header">
        <h1><i class="fas fa-images"></i> Photo Gallery</h1>
        <p>Explore our collection of memorable moments and events from NSA-DIU</p>
    </div>

    <!-- Gallery Filters -->
    <div class="gallery-filters">
        <button class="filter-btn active" data-filter="all">All</button>
        <button class="filter-btn" data-filter="sports">Sports</button>
        <button class="filter-btn" data-filter="convocation">Convocation</button>
        <button class="filter-btn" data-filter="oitijjer-haat">Oitijjer Haat</button>
        <button class="filter-btn" data-filter="fresherorientaion">Fresher Orientation</button>
        <button class="filter-btn" data-filter="events">Events</button>
        <button class="filter-btn" data-filter="moments">Moments</button>
    </div>

    <!-- Gallery Grid -->
    <div class="gallery-container">
        <div class="gallery-section" data-section="oitijjer-haat">
            <h2 class="gallery-section-title">Oitijjer&nbsp;Haat</h2>
            <div class="gallery-grid">
                @foreach ([
                    
                    '587686257_122258404844077049_6532897817517865739_n.jpg',
                    '587708169_122258405138077049_895705717763785446_n.jpg',
                    '587842136_122258405066077049_2472741780251154360_n.jpg',
                    '587983540_122258404994077049_6717242520376065954_n.jpg',
                    '588212952_122258405102077049_6835676711310648802_n.jpg',
                    '588902367_122258404880077049_8879214817870074587_n.jpg',
                    '589734705_122258405030077049_1063165080726003160_n.jpg',
                ] as $filename)
                <div class="gallery-item" data-category="oitijjer-haat">
                    <img src="{{ asset('images/Oitijjer Haat/' . $filename) }}" alt="Oitijjer Haat" class="gallery-image">
                    <div class="gallery-info">
                        <span class="gallery-category">Oitijjer Haat</span>
                        <h3 class="gallery-title">Oitijjer Haat Event</h3>
                        <p class="gallery-date">2025</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="gallery-section" data-section="fresherorientaion">
            <h2 class="gallery-section-title">Fresher&nbsp;Orientation</h2>
            <div class="gallery-grid">
                @foreach ([
                    '547403989_122247667316077049_8948701601693903027_n.jpg',
                    '547511678_122247667340077049_978231223809004796_n.jpg',
                    '547669114_122247659396077049_9068411105638987443_n.jpg',
                    '547698608_122247666416077049_8469976803729200860_n.jpg',
                    '547857065_122247667430077049_5064894925410915451_n.jpg',
                    '547933105_122247658808077049_1047612383681099731_n (1).jpg',
                    '548022911_122247666002077049_314139460186532909_n.jpg',
                    '548165331_122247659018077049_5389418516219831523_n.jpg',
                    '548193615_122247662636077049_4509094119231747851_n.jpg',
                    '548195283_122247658994077049_2631555436423149884_n.jpg',
                    '548196325_122247659348077049_8344634221405089904_n.jpg',
                    '548196895_122247659468077049_8974715133026063519_n.jpg',
                    '548299535_122247666602077049_3092539926473441281_n.jpg',
                    '548476204_122247666044077049_4131024232614793610_n.jpg',
                    '548529539_122247659084077049_2431365092441254333_n.jpg',
                    '548687982_122247659126077049_7439740815069686227_n.jpg',
                    '548903577_122247659234077049_3995783980127718541_n.jpg',
                    '548944831_122247667328077049_1305442229508272447_n.jpg',
                    '549284147_122247666026077049_3539032707082134289_n.jpg',
                    '549408086_122247666848077049_7760507207508257914_n.jpg',
                    '549537990_122247667358077049_6038565650363252429_n.jpg',
                    '549539048_122247659360077049_7504105221884929901_n.jpg',
                    '549652202_122247666188077049_744721744235901254_n.jpg',
                    '549686231_122247662180077049_7730236120204046678_n.jpg',
                    '549769264_122247666584077049_1404845650428798183_n.jpg',
                    '549921583_122247658820077049_8550144869629340331_n.jpg',
                    '550261576_122247659222077049_367509675139030281_n.jpg',
                ] as $filename)
                <div class="gallery-item" data-category="fresherorientaion">
                    <img src="{{ asset('images/FresherOrientaion/' . $filename) }}" alt="Fresher Orientation" class="gallery-image">
                    <div class="gallery-info">
                        <span class="gallery-category">Fresher Orientation</span>
                        <h3 class="gallery-title">Fresher Orientation</h3>
                        <p class="gallery-date">2025</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="gallery-section" data-section="sports">
            <h2 class="gallery-section-title">Sports</h2>
            <div class="gallery-grid">
                @foreach ([
                    '530598387_1932315727544313_5440575314180799557_n.jpg',
                    '530742249_1932315614210991_8864990967656330686_n.jpg',
                    '530742274_1932315767544309_4125287317311481468_n.jpg',
                    '530836555_1932315754210977_3847599450087207831_n.jpg',
                    '531282658_1932315824210970_1708348410877948432_n.jpg',
                    '531391928_1932315570877662_7713809505318585037_n.jpg',
                    '531409651_1932315637544322_165750644596501206_n.jpg',
                    '531627607_1932315677544318_2089000526723172859_n.jpg',
                    '532258300_1932315687544317_3797535513076653769_n.jpg',
                    '532315674_1932315550877664_5657932737042295180_n.jpg',
                    '532382429_1932315720877647_3541788347071926820_n.jpg',
                ] as $filename)
                <div class="gallery-item" data-category="sports">
                    <img src="{{ asset('images/sports/' . $filename) }}" alt="Sports" class="gallery-image">
                    <div class="gallery-info">
                        <span class="gallery-category">Sports</span>
                        <h3 class="gallery-title">Sports Event</h3>
                        <p class="gallery-date">2025</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="gallery-section" data-section="convocation">
            <h2 class="gallery-section-title">Convocation</h2>
            <div class="gallery-grid">
                @foreach ([
                    '481671070_601562916207301_1959176496472738398_n.jpg',
                    '481671080_601563189540607_2817583510620255419_n.jpg',
                    '481703539_601562909540635_6554442336395079047_n.jpg',
                    '481713295_601562906207302_3741092342052952167_n.jpg',
                    '481767846_601563199540606_6002669995461774719_n.jpg',
                    '481775427_601563206207272_8376765651511265393_n.jpg',
                    '481780647_601563192873940_7147066624232474160_n.jpg',
                    '481823621_601563196207273_6097228647208351510_n.jpg',
                    '481911031_601562899540636_374481510522114655_n.jpg',
                    '481955017_601562922873967_4964388757111584226_n.jpg',
                    '481960629_601562826207310_6648920980810568562_n.jpg',
                    '481961125_601562849540641_3729798300943936746_n.jpg',
                    '481971220_601562902873969_4951204314493006981_n.jpg',
                    '481974828_601563186207274_8248616575137115138_n.jpg',
                    '481976080_601562956207297_5763557657851172740_n.jpg',
                    '481976801_601562819540644_3164430565221142713_n.jpg',
                    '481999661_601562932873966_4108060750434662010_n.jpg',
                    '482000016_601562929540633_5015336413750714901_n.jpg',
                    '482002330_601562919540634_4543328746931877024_n.jpg',
                    '482003484_601568192873440_5091584392873100112_n.jpg',
                    '482008499_601563219540604_5590974890427131447_n.jpg',
                    '482009473_601562926207300_8502273725833620018_n.jpg',
                    '482010863_601562912873968_4578284462509772969_n.jpg',
                    '482014993_601562856207307_4225184809306982573_n.jpg',
                    '482023836_601563212873938_3841349514154332802_n.jpg',
                    '482024075_601562959540630_1570893014122363368_n.jpg',
                    '482024356_601563176207275_5303348370955471796_n.jpg',
                    '482030227_601562839540642_9129364955875470514_n.jpg',
                ] as $filename)
                <div class="gallery-item" data-category="convocation">
                    <img src="{{ asset('images/convocation/' . $filename) }}" alt="Convocation" class="gallery-image">
                    <div class="gallery-info">
                        <span class="gallery-category">Convocation</span>
                        <h3 class="gallery-title">Convocation Ceremony</h3>
                        <p class="gallery-date">2025</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Lightbox -->
    <div class="lightbox" id="lightbox">
        <button class="lightbox-close" id="closeLightbox">
            <i class="fas fa-times"></i>
        </button>
        <button class="lightbox-nav lightbox-prev" id="prevImage">
        <!-- Sports Section -->
        <h2 class="gallery-section-title">Sports</h2>
        <div class="gallery-grid">
            @foreach ([
                '530598387_1932315727544313_5440575314180799557_n.jpg',
                '530742249_1932315614210991_8864990967656330686_n.jpg',
                '530742274_1932315767544309_4125287317311481468_n.jpg',
                '530836555_1932315754210977_3847599450087207831_n.jpg',
                '531282658_1932315824210970_1708348410877948432_n.jpg',
                '531391928_1932315570877662_7713809505318585037_n.jpg',
                '531409651_1932315637544322_165750644596501206_n.jpg',
                '531627607_1932315677544318_2089000526723172859_n.jpg',
                '532258300_1932315687544317_3797535513076653769_n.jpg',
                '532315674_1932315550877664_5657932737042295180_n.jpg',
                '532382429_1932315720877647_3541788347071926820_n.jpg',
            ] as $filename)
            <div class="gallery-item" data-category="sports">
                <img src="{{ asset('images/sports/' . $filename) }}" alt="Sports" class="gallery-image">
                <div class="gallery-info">
                    <span class="gallery-category">Sports</span>
                    <h3 class="gallery-title">Sports Event</h3>
                    <p class="gallery-date">2025</p>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Convocation Section -->
        <h2 class="gallery-section-title">Convocation</h2>
        <div class="gallery-grid">
            @foreach ([
                '481671070_601562916207301_1959176496472738398_n.jpg',
                '481671080_601563189540607_2817583510620255419_n.jpg',
                '481703539_601562909540635_6554442336395079047_n.jpg',
                '481713295_601562906207302_3741092342052952167_n.jpg',
                '481767846_601563199540606_6002669995461774719_n.jpg',
                '481775427_601563206207272_8376765651511265393_n.jpg',
                '481780647_601563192873940_7147066624232474160_n.jpg',
                '481823621_601563196207273_6097228647208351510_n.jpg',
                '481911031_601562899540636_374481510522114655_n.jpg',
                '481955017_601562922873967_4964388757111584226_n.jpg',
                '481960629_601562826207310_6648920980810568562_n.jpg',
                '481961125_601562849540641_3729798300943936746_n.jpg',
                '481971220_601562902873969_4951204314493006981_n.jpg',
                '481974828_601563186207274_8248616575137115138_n.jpg',
                '481976080_601562956207297_5763557657851172740_n.jpg',
                '481976801_601562819540644_3164430565221142713_n.jpg',
                '481999661_601562932873966_4108060750434662010_n.jpg',
                '482000016_601562929540633_5015336413750714901_n.jpg',
                '482002330_601562919540634_4543328746931877024_n.jpg',
                '482003484_601568192873440_5091584392873100112_n.jpg',
                '482008499_601563219540604_5590974890427131447_n.jpg',
                '482009473_601562926207300_8502273725833620018_n.jpg',
                '482010863_601562912873968_4578284462509772969_n.jpg',
                '482014993_601562856207307_4225184809306982573_n.jpg',
                '482023836_601563212873938_3841349514154332802_n.jpg',
                '482024075_601562959540630_1570893014122363368_n.jpg',
                '482024356_601563176207275_5303348370955471796_n.jpg',
                '482030227_601562839540642_9129364955875470514_n.jpg',
            ] as $filename)
            <div class="gallery-item" data-category="convocation">
                <img src="{{ asset('images/convocation/' . $filename) }}" alt="Convocation" class="gallery-image">
                <div class="gallery-info">
                    <span class="gallery-category">Convocation</span>
                    <h3 class="gallery-title">Convocation Ceremony</h3>
                    <p class="gallery-date">2025</p>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Oitijjer Haat Section -->
        <h2 class="gallery-section-title">Oitijjer Haat</h2>
        <div class="gallery-grid">
            @foreach ([
                '547933105_122247658808077049_1047612383681099731_n.jpg',
                '587842136_122258405066077049_2472741780251154360_n.jpg',
                '588902367_122258404880077049_8879214817870074587_n.jpg',
            ] as $filename)
            <div class="gallery-item" data-category="oitijjer-haat">
                <img src="{{ asset('images/Oitijjer Haat/' . $filename) }}" alt="Oitijjer Haat" class="gallery-image">
                <div class="gallery-info">
                    <span class="gallery-category">Oitijjer Haat</span>
                    <h3 class="gallery-title">Oitijjer Haat Event</h3>
                    <p class="gallery-date">2025</p>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Fresher Orientation Section -->
        <h2 class="gallery-section-title">Fresher Orientation</h2>
        <div class="gallery-grid">
            @foreach ([
                '547403989_122247667316077049_8948701601693903027_n.jpg',
                '547511678_122247667340077049_978231223809004796_n.jpg',
                '547669114_122247659396077049_9068411105638987443_n.jpg',
                '547698608_122247666416077049_8469976803729200860_n.jpg',
                '547857065_122247667430077049_5064894925410915451_n.jpg',
                '547933105_122247658808077049_1047612383681099731_n (1).jpg',
                '548022911_122247666002077049_314139460186532909_n.jpg',
                '548165331_122247659018077049_5389418516219831523_n.jpg',
                '548193615_122247662636077049_4509094119231747851_n.jpg',
                '548195283_122247658994077049_2631555436423149884_n.jpg',
                '548196325_122247659348077049_8344634221405089904_n.jpg',
                '548196895_122247659468077049_8974715133026063519_n.jpg',
                '548299535_122247666602077049_3092539926473441281_n.jpg',
                '548476204_122247666044077049_4131024232614793610_n.jpg',
                '548529539_122247659084077049_2431365092441254333_n.jpg',
                '548687982_122247659126077049_7439740815069686227_n.jpg',
                '548903577_122247659234077049_3995783980127718541_n.jpg',
                '548944831_122247667328077049_1305442229508272447_n.jpg',
                '549284147_122247666026077049_3539032707082134289_n.jpg',
                '549408086_122247666848077049_7760507207508257914_n.jpg',
                '549537990_122247667358077049_6038565650363252429_n.jpg',
                '549539048_122247659360077049_7504105221884929901_n.jpg',
                '549652202_122247666188077049_744721744235901254_n.jpg',
                '549686231_122247662180077049_7730236120204046678_n.jpg',
                '549769264_122247666584077049_1404845650428798183_n.jpg',
                '549921583_122247658820077049_8550144869629340331_n.jpg',
                '550261576_122247659222077049_367509675139030281_n.jpg',
            ] as $filename)
            <div class="gallery-item" data-category="fresherorientaion">
                <img src="{{ asset('images/FresherOrientaion/' . $filename) }}" alt="Fresher Orientation" class="gallery-image">
                <div class="gallery-info">
                    <span class="gallery-category">Fresher Orientation</span>
                    <h3 class="gallery-title">Fresher Orientation</h3>
                    <p class="gallery-date">2025</p>
                </div>
            </div>
            @endforeach
        </div>

        // Lightbox functionality
        const lightbox = document.getElementById('lightbox');
        const lightboxImage = document.getElementById('lightboxImage');
        const closeLightbox = document.getElementById('closeLightbox');
        // Filter functionality for sections
        const gallerySections = document.querySelectorAll('.gallery-section');

        function showSection(filter) {
            if (filter === 'all') {
                gallerySections.forEach(section => section.style.display = '');
            } else {
                gallerySections.forEach(section => {
                    if (section.getAttribute('data-section') === filter) {
                        section.style.display = '';
                    } else {
                        section.style.display = 'none';
                    }
                });
            }
        }

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                filterBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                const filter = btn.getAttribute('data-filter');
                showSection(filter);
            });
        });

        // Show all sections by default
        showSection('all');
        closeLightbox.addEventListener('click', () => {
            lightbox.classList.remove('active');
        });

        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox) {
                lightbox.classList.remove('active');
            }
        });

        prevImage.addEventListener('click', () => {
            currentImageIndex = (currentImageIndex - 1 + galleryImages.length) % galleryImages.length;
            lightboxImage.src = galleryImages[currentImageIndex].src;
        });

        nextImage.addEventListener('click', () => {
            currentImageIndex = (currentImageIndex + 1) % galleryImages.length;
            lightboxImage.src = galleryImages[currentImageIndex].src;
        });

        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (lightbox.classList.contains('active')) {
                if (e.key === 'Escape') {
                    lightbox.classList.remove('active');
                } else if (e.key === 'ArrowLeft') {
                    prevImage.click();
                } else if (e.key === 'ArrowRight') {
                    nextImage.click();
                }
            }
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

        // Scroll animations
        function animateOnScroll() {
            const items = document.querySelectorAll('.gallery-item');
            
            items.forEach(item => {
                const itemTop = item.getBoundingClientRect().top;
                const itemVisible = 150;
                
                if (itemTop < window.innerHeight - itemVisible) {
                    item.style.opacity = '1';
                    item.style.transform = 'translateY(0)';
                }
            });
        }

        // Initialize items
        document.querySelectorAll('.gallery-item').forEach(item => {
            item.style.opacity = '0';
            item.style.transform = 'translateY(20px)';
            item.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        });

        window.addEventListener('scroll', animateOnScroll);
        animateOnScroll();

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
