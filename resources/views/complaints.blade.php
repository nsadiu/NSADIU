<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Submit Complaint | NSA-DIU</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    
    <style>
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
        }
        
        [data-theme="dark"] {
            --text-dark: #FFFFFF;
            --text-gray: #d1d5db;
            --bg-white: #1f2937;
            --bg-light: #111827;
            --bg-card: #374151;
            --card-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-white);
            color: var(--text-dark);
            min-height: 100vh;
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

        .hero-section {
            background: var(--bg-white);
            color: var(--text-dark);
            padding: 6rem 0 4rem 0;
            text-align: center;
            margin-top: 0;
            border-bottom: 1px solid var(--bg-card);
            position: relative;
        }

        .back-button-container {
            position: absolute;
            top: 2rem;
            left: 2rem;
        }

        .back-button {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            background: var(--primary-color);
            color: white;
            border: none;
            padding: 0.8rem 1.5rem;
            border-radius: 25px;
            font-size: 0.9rem;
            font-weight: 500;
            cursor: pointer;
            transition: var(--transition);
            box-shadow: 0 4px 15px rgba(30, 144, 255, 0.3);
        }

        .back-button:hover {
            background: var(--secondary-color);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(30, 144, 255, 0.4);
        }

        .back-button i {
            font-size: 0.8rem;
        }

        .hero-section h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .hero-section h1 i {
            color: var(--primary-color);
        }

        .hero-section p {
            font-size: 1.2rem;
            opacity: 0.8;
            color: var(--text-gray);
        }

        .content-section {
            padding: 4rem 0;
            background: var(--bg-light);
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 3rem;
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: var(--primary-color);
            border-radius: 2px;
        }

        .complaint-form-container {
            background: var(--bg-white);
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
            padding: 3rem;
            margin-bottom: 2rem;
        }

        .form-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .form-header h3 {
            color: var(--primary-color);
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .form-header p {
            color: var(--text-gray);
            font-size: 1rem;
        }

        .complaint-form {
            display: grid;
            gap: 1.5rem;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        .form-group label {
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            padding: 1rem;
            border: 2px solid var(--bg-card);
            border-radius: 12px;
            font-size: 1rem;
            transition: var(--transition);
            background: var(--bg-white);
            color: var(--text-dark);
            font-family: 'Inter', sans-serif;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(30, 144, 255, 0.1);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }

        .priority-options {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
            gap: 1rem;
            margin-top: 0.5rem;
        }

        .priority-option {
            position: relative;
        }

        .priority-option input[type="radio"] {
            position: absolute;
            opacity: 0;
        }

        .priority-label {
            display: block;
            padding: 0.8rem 1rem;
            border: 2px solid var(--bg-card);
            border-radius: 10px;
            text-align: center;
            cursor: pointer;
            transition: var(--transition);
            font-weight: 500;
        }

        .priority-option input[type="radio"]:checked + .priority-label {
            border-color: var(--primary-color);
            background: var(--primary-color);
            color: white;
        }

        .priority-low .priority-label {
            color: var(--success-color);
        }

        .priority-medium .priority-label {
            color: var(--warning-color);
        }

        .priority-high .priority-label {
            color: var(--danger-color);
        }

        .file-upload {
            position: relative;
            display: inline-block;
            width: 100%;
        }

        .file-upload input[type="file"] {
            position: absolute;
            opacity: 0;
            width: 100%;
            height: 100%;
            cursor: pointer;
        }

        .file-upload-label {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            padding: 1rem;
            border: 2px dashed var(--bg-card);
            border-radius: 12px;
            background: var(--bg-light);
            cursor: pointer;
            transition: var(--transition);
            color: var(--text-gray);
        }

        .file-upload:hover .file-upload-label {
            border-color: var(--primary-color);
            background: var(--bg-white);
        }

        .submit-btn {
            background: var(--primary-color);
            color: white;
            border: none;
            padding: 1rem 2rem;
            border-radius: 12px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            margin-top: 1rem;
        }

        .submit-btn:hover {
            background: var(--secondary-color);
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(30, 144, 255, 0.3);
        }

        .submit-btn:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none;
        }

        .loading-spinner {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        /* Alert Messages */
        .alert {
            padding: 1rem 1.5rem;
            border-radius: 10px;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            font-weight: 500;
        }

        .alert-success {
            background: rgba(16, 185, 129, 0.1);
            border: 1px solid var(--success-color);
            color: var(--success-color);
        }

        .alert-error {
            background: rgba(239, 68, 68, 0.1);
            border: 1px solid var(--danger-color);
            color: var(--danger-color);
        }

        .alert ul {
            margin: 0.5rem 0 0 0;
            padding-left: 1.2rem;
        }

        .alert li {
            margin-bottom: 0.25rem;
        }

        /* Error Text */
        .error-text {
            color: var(--danger-color);
            font-size: 0.875rem;
            margin-top: 0.25rem;
            display: block;
        }

        /* Character Count */
        .character-count {
            text-align: right;
            font-size: 0.75rem;
            color: var(--text-gray);
            margin-top: 0.25rem;
        }

        /* File Input Styling */
        input[type="file"] {
            padding: 0.75rem;
            border: 2px dashed var(--bg-card);
            border-radius: 10px;
            background: transparent;
            cursor: pointer;
            transition: var(--transition);
        }

        input[type="file"]:hover {
            border-color: var(--primary-color);
            background: rgba(30, 144, 255, 0.05);
        }

        .file-info {
            margin-top: 0.5rem;
        }

        .file-info small {
            color: var(--text-gray);
            font-size: 0.75rem;
        }

        /* Checkbox Container */
        .checkbox-container {
            display: flex;
            align-items: flex-start;
            gap: 0.75rem;
            cursor: pointer;
            font-size: 0.9rem;
            line-height: 1.5;
        }

        .checkbox-container input[type="checkbox"] {
            width: auto;
            margin: 0;
            accent-color: var(--primary-color);
        }

        .checkbox-container a {
            color: var(--primary-color);
            text-decoration: none;
        }

        .checkbox-container a:hover {
            text-decoration: underline;
        }

        /* Form Help Text */
        .form-help {
            color: var(--text-gray);
            font-size: 0.8rem;
            margin-top: 0.5rem;
            display: block;
            line-height: 1.4;
        }

        /* Witness Management */
        .witness-row {
            background: var(--bg-card);
            padding: 1rem;
            border-radius: 10px;
            margin-bottom: 1rem;
            position: relative;
        }

        .remove-witness-btn {
            position: absolute;
            top: 0.5rem;
            right: 0.5rem;
            background: var(--danger-color);
            color: white;
            border: none;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
        }

        .remove-witness-btn:hover {
            background: #dc2626;
            transform: scale(1.1);
        }

        .add-witness-btn {
            background: var(--secondary-color);
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            transition: var(--transition);
            margin-top: 1rem;
        }

        .add-witness-btn:hover {
            background: var(--accent-color);
            transform: translateY(-2px);
        }

        /* Tracking Section */
        .tracking-section {
            background: var(--bg-card);
            padding: 2rem;
            border-radius: 15px;
            margin-top: 3rem;
            border: 1px solid var(--bg-card);
        }

        .tracking-section h4 {
            color: var(--text-dark);
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .tracking-form {
            margin-top: 1rem;
        }

        .track-btn {
            background: var(--secondary-color);
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            transition: var(--transition);
            white-space: nowrap;
        }

        .track-btn:hover {
            background: var(--accent-color);
            transform: translateY(-2px);
        }

        .complaint-guidelines {
            background: var(--bg-white);
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 8px 25px rgba(0,0,0,0.08);
            margin-bottom: 2rem;
        }

        .guidelines-title {
            color: var(--primary-color);
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .guidelines-list {
            list-style: none;
            padding: 0;
        }

        .guidelines-list li {
            padding: 0.5rem 0;
            color: var(--text-gray);
            display: flex;
            align-items: flex-start;
            gap: 0.5rem;
        }

        .guidelines-list li i {
            color: var(--primary-color);
            margin-top: 0.2rem;
            flex-shrink: 0;
        }

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
            box-shadow: var(--card-shadow);
            transition: var(--transition);
            opacity: 0;
            visibility: hidden;
            cursor: pointer;
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

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .mobile-menu-toggle {
                display: block;
            }
            
            .nav-menu {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: var(--bg-white);
                flex-direction: column;
                padding: 1rem 0;
                border-top: 1px solid var(--bg-card);
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }

            [data-theme="dark"] .nav-menu {
                background: var(--bg-light);
            }
            
            .nav-menu.active {
                display: flex;
            }
            
            .nav-controls .get-app-btn {
                display: none;
            }
            
            .hero-section h1 {
                font-size: 2rem;
            }
            
            .back-button-container {
                position: static;
                margin-bottom: 2rem;
            }
            
            .complaint-form-container {
                padding: 2rem 1.5rem;
            }
            
            .form-row {
                grid-template-columns: 1fr;
            }
            
            .priority-options {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 0 0.5rem;
            }
            
            .hero-section {
                padding: 4rem 0 2rem 0;
            }
            
            .hero-section h1 {
                font-size: 1.8rem;
            }
            
            .complaint-form-container {
                padding: 1.5rem 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
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
                <li class="nav-item"><a href="{{ url('/gallery') }}">Gallery</a></li>
                <li class="nav-item"><a href="{{ url('/transport') }}">Transportation</a></li>
                <li class="nav-item"><a href="{{ url('/complaints') }}" class="active">Complaints</a></li>
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
        <div class="back-button-container">
            <button class="back-button" onclick="goBack()">
                <i class="fas fa-arrow-left"></i>
                <span>Back</span>
            </button>
        </div>
        <h1><i class="fas fa-exclamation-triangle"></i> Submit Complaint</h1>
        <p>We take your concerns seriously and are committed to addressing them promptly</p>
    </section>

    <!-- Content Section -->
    <section class="content-section">
        <div class="container">
            <!-- Guidelines -->
            <div class="complaint-guidelines">
                <h3 class="guidelines-title">
                    <i class="fas fa-info-circle"></i>
                    Complaint Guidelines
                </h3>
                <ul class="guidelines-list">
                    <li><i class="fas fa-check"></i> Provide detailed and accurate information about your complaint</li>
                    <li><i class="fas fa-check"></i> Include relevant dates, times, and locations if applicable</li>
                    <li><i class="fas fa-check"></i> Attach supporting documents or evidence if available</li>
                    <li><i class="fas fa-check"></i> Be respectful and professional in your communication</li>
                    <li><i class="fas fa-check"></i> Allow 3-5 business days for initial response</li>
                    <li><i class="fas fa-check"></i> You will receive a complaint reference number for tracking</li>
                </ul>
            </div>

            <!-- Complaint Form -->
            <div class="complaint-form-container">
                <div class="form-header">
                    <h3>Complaint Submission Form</h3>
                    <p>Please fill out all required fields marked with (*)</p>
                </div>

                <form class="complaint-form" id="complaintForm" method="POST" action="#" enctype="multipart/form-data">
                    @csrf
                    
                    <!-- Personal Information -->
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Full Name *</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="student_id">Student ID</label>
                            <input type="text" id="student_id" name="student_id" placeholder="e.g., 221-15-1234">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone" placeholder="+880XXXXXXXXX">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="department">Department</label>
                            <input type="text" id="department" name="department" placeholder="e.g., CSE, EEE, BBA">
                        </div>
                        <div class="form-group">
                            <label for="semester">Current Semester</label>
                            <input type="text" id="semester" name="semester" placeholder="e.g., 5th, Spring 2025">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="section">Section</label>
                        <input type="text" id="section" name="section" placeholder="e.g., A, B, C">
                    </div>

                    <!-- Complaint Details -->
                    <div class="form-row">
                        <div class="form-group">
                            <label for="complaint_type">Complaint Type *</label>
                            <select id="complaint_type" name="complaint_type" required>
                                <option value="">Select Complaint Type</option>
                                <option value="academic">Academic Issues</option>
                                <option value="facilities">Facilities & Infrastructure</option>
                                <option value="transportation">Transportation</option>
                                <option value="harassment">Harassment/Discrimination</option>
                                <option value="administrative">Administrative Issues</option>
                                <option value="financial">Financial Concerns</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="category">Priority Level *</label>
                            <select id="category" name="category" required>
                                <option value="">Select Priority</option>
                                <option value="low">Low</option>
                                <option value="medium">Medium</option>
                                <option value="high">High</option>
                                <option value="urgent">Urgent</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="subject">Complaint Title/Subject *</label>
                        <input type="text" id="subject" name="subject" required placeholder="Brief title describing your complaint" maxlength="500">
                    </div>

                    <div class="form-group">
                        <label for="description">Detailed Description *</label>
                        <textarea id="description" name="description" required placeholder="Please provide a detailed description of your complaint including dates, times, locations, and any relevant circumstances..." maxlength="3000"></textarea>
                        <div class="character-count">
                            <span id="charCount">0</span>/3000 characters
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="incident_date">Date of Incident (if applicable)</label>
                            <input type="date" id="incident_date" name="incident_date">
                        </div>
                        <div class="form-group">
                            <label for="incident_time">Time of Incident (if applicable)</label>
                            <input type="time" id="incident_time" name="incident_time">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="location">Location of Incident (if applicable)</label>
                        <input type="text" id="location" name="location" placeholder="e.g., Daffodil Smart City, Library, Specific classroom">
                    </div>

                    <!-- Witnesses Section -->
                    <div class="form-group">
                        <label>Witnesses (if any)</label>
                        <div id="witnessesContainer">
                            <!-- Witnesses will be added dynamically -->
                        </div>
                        <button type="button" id="addWitnessBtn" class="add-witness-btn">
                            <i class="fas fa-plus"></i> Add Witness
                        </button>
                    </div>

                    <!-- File Upload -->
                    <div class="form-group">
                        <label for="attachments">Supporting Documents (Optional)</label>
                        <input type="file" id="attachments" name="attachments[]" multiple accept=".pdf,.doc,.docx,.jpg,.jpeg,.png,.gif,.txt,.zip,.rar,.mp4,.mov,.avi">
                        <div class="file-info">
                            <small>Max 10 files, 10MB each. Supported: PDF, DOC, DOCX, JPG, PNG, GIF, TXT, ZIP, RAR, MP4, MOV, AVI</small>
                        </div>
                    </div>

                    <!-- Terms and Conditions -->
                    <div class="form-group">
                        <label class="checkbox-container">
                            <input type="checkbox" name="terms" value="1" required>
                            <span>I agree to the <a href="#" target="_blank">Terms and Conditions</a> and understand that providing false information may result in disciplinary action</span>
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="submit-btn" id="submitBtn">
                        <i class="fas fa-paper-plane"></i>
                        <span>Submit Complaint</span>
                    </button>
                </form>
                
                <!-- Complaint Tracking Section -->
                <div class="tracking-section">
                    <h4><i class="fas fa-search"></i> Track Your Complaint</h4>
                    <p>Already submitted a complaint? Track its status here:</p>
                    <form action="#" method="POST" class="tracking-form">
                        @csrf
                        <div class="form-row">
                            <div class="form-group">
                                <input type="text" name="complaint_number" placeholder="Enter your complaint number" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Enter your email address" required>
                            </div>
                            <button type="submit" class="track-btn">
                                <i class="fas fa-search"></i> Track
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Back to Top Button -->
    <button class="back-to-top" id="backToTop">
        <i class="fas fa-arrow-up"></i>
    </button>

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

    <script>
        // Back button functionality
        function goBack() {
            if (window.history.length > 1) {
                window.history.back();
            } else {
                window.location.href = '{{ url("/welcome") }}';
            }
        }

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

        // Form validation and submission
        const complaintForm = document.getElementById('complaintForm');
        
        if (complaintForm) {
            // Character count for description
            const descriptionTextarea = document.getElementById('description');
            const charCount = document.getElementById('charCount');
            
            if (descriptionTextarea && charCount) {
                descriptionTextarea.addEventListener('input', function() {
                    const count = this.value.length;
                    charCount.textContent = count;
                    
                    if (count > 2800) {
                        charCount.style.color = 'var(--danger-color)';
                    } else if (count > 2500) {
                        charCount.style.color = 'var(--warning-color)';
                    } else {
                        charCount.style.color = 'var(--text-gray)';
                    }
                });
                
                // Initial count
                charCount.textContent = descriptionTextarea.value.length;
            }
            
            // Witness management
            let witnessCount = 0;
            
            document.getElementById('addWitnessBtn').addEventListener('click', function() {
                if (witnessCount >= 5) {
                    alert('You can add a maximum of 5 witnesses.');
                    return;
                }
                
                const witnessesContainer = document.getElementById('witnessesContainer');
                const witnessRow = document.createElement('div');
                witnessRow.className = 'witness-row';
                witnessRow.dataset.index = witnessCount;
                
                witnessRow.innerHTML = `
                    <div class="form-row">
                        <div class="form-group">
                            <input type="text" name="witnesses[${witnessCount}][name]" placeholder="Witness Name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="witnesses[${witnessCount}][contact]" placeholder="Contact Information (optional)">
                        </div>
                    </div>
                    <button type="button" class="remove-witness-btn" onclick="removeWitness(${witnessCount})">
                        <i class="fas fa-times"></i>
                    </button>
                `;
                
                witnessesContainer.appendChild(witnessRow);
                witnessCount++;
            });
        }
        
        // Remove witness function
        function removeWitness(index) {
            const witnessRow = document.querySelector(`[data-index="${index}"]`);
            if (witnessRow) {
                witnessRow.remove();
            }
        }

        function validateForm() {
            const requiredFields = document.querySelectorAll('input[required], select[required], textarea[required]');
            let isValid = true;
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    field.style.borderColor = 'var(--danger-color)';
                    isValid = false;
                } else {
                    field.style.borderColor = 'var(--bg-card)';
                }
            });
            
            if (!isValid) {
                alert('Please fill in all required fields.');
            }
            
            return isValid;
        }

        // Form field validation on blur
        const formInputs = document.querySelectorAll('input, select, textarea');
        formInputs.forEach(input => {
            input.addEventListener('blur', function() {
                if (this.hasAttribute('required') && !this.value.trim()) {
                    this.style.borderColor = 'var(--danger-color)';
                } else {
                    this.style.borderColor = 'var(--bg-card)';
                }
            });
            
            input.addEventListener('focus', function() {
                this.style.borderColor = 'var(--primary-color)';
            });
        });

        // File upload enhancement
        const fileInput = document.getElementById('attachments');
        
        if (fileInput) {
            fileInput.addEventListener('change', function() {
                const files = this.files;
                let totalSize = 0;
                let validFiles = true;
                
                for (let file of files) {
                    totalSize += file.size;
                    if (file.size > 10 * 1024 * 1024) { // 10MB
                        alert(`File "${file.name}" is too large. Maximum size is 10MB.`);
                        validFiles = false;
                    }
                }
                
                if (files.length > 10) {
                    alert('You can upload a maximum of 10 files.');
                    validFiles = false;
                }
                
                if (!validFiles) {
                    this.value = '';
                }
            });
        }

        // Animate form elements on scroll
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

        // Animate form sections on scroll
        document.querySelectorAll('.complaint-guidelines, .complaint-form-container').forEach(element => {
            element.style.opacity = '0';
            element.style.transform = 'translateY(30px)';
            element.style.transition = 'all 0.6s ease';
            observer.observe(element);
        });

        // Form submission handling
        const mainForm = document.getElementById('complaintForm');
        mainForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            if (validateForm()) {
                const submitButton = this.querySelector('button[type="submit"]');
                const originalText = submitButton.innerHTML;
                
                submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Submitting...';
                submitButton.disabled = true;
                
                // Simulate API call
                setTimeout(() => {
                    alert('Thank you! Your complaint has been submitted successfully. You will receive a confirmation email shortly.');
                    
                    // Reset form
                    this.reset();
                    document.getElementById('charCount').textContent = '0';
                    document.getElementById('witnessesContainer').innerHTML = '';
                    
                    // Reset button
                    submitButton.innerHTML = originalText;
                    submitButton.disabled = false;
                }, 2000);
            }
        });

        // Tracking form submission
        const trackingForm = document.querySelector('.tracking-form');
        if (trackingForm) {
            trackingForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                const complaintNumber = this.querySelector('input[name="complaint_number"]').value;
                const email = this.querySelector('input[name="email"]').value;
                
                if (complaintNumber && email) {
                    alert(`Tracking feature is not available in this demo. In a real application, you would receive status updates for complaint #${complaintNumber} at ${email}`);
                } else {
                    alert('Please fill in both complaint number and email address.');
                }
            });
        }
    </script>
</body>
</html>
