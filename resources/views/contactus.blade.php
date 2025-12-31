<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - NSA DIU</title>
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
            --error-color: #ef4444;
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
            width: 0;
            height: 2px;
            background: var(--primary-color);
            transition: width 0.3s;
        }

        .nav-menu a:hover::after,
        .nav-menu a.active::after {
            width: 100%;
        }

        .get-app-btn {
            background: var(--bg-light);
            border: 1px solid #e5e7eb;
            padding: 0.65rem 1.3rem;
            border-radius: 8px;
            color: var(--text-dark);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.9rem;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .get-app-btn:hover {
            background: var(--text-dark);
            color: var(--bg-white);
            border-color: var(--text-dark);
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

        .contact-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: start;
        }

        /* Form Section */
        .contact-form-section {
            background: var(--bg-white);
            padding: 2.5rem;
            border-radius: 20px;
            box-shadow: var(--shadow-sm);
            border: 1px solid #f3f4f6;
        }

        .form-header h3 {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 0.5rem;
        }

        .form-header p {
            color: var(--text-gray);
            font-size: 0.95rem;
            margin-bottom: 2rem;
        }

        .contact-form {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            font-weight: 500;
            color: var(--text-dark);
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            padding: 0.875rem 1rem;
            border: 2px solid #e5e7eb;
            border-radius: 10px;
            font-family: 'Inter', sans-serif;
            font-size: 0.9rem;
            color: var(--text-dark);
            background: var(--bg-white);
            transition: all 0.3s;
            resize: none;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(30, 144, 255, 0.1);
        }

        .form-group textarea {
            min-height: 120px;
        }

        .character-count {
            text-align: right;
            font-size: 0.75rem;
            color: var(--text-gray);
            margin-top: 0.25rem;
        }

        .submit-btn {
            background: var(--primary-color);
            color: white;
            border: none;
            padding: 1rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            margin-top: 1rem;
        }

        .submit-btn:hover {
            background: var(--secondary-color);
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(30, 144, 255, 0.3);
        }

        .submit-btn:disabled {
            background: var(--text-gray);
            cursor: not-allowed;
            transform: none;
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
            border: 1px solid var(--error-color);
            color: var(--error-color);
        }

        /* Contact Info Section */
        .contact-info-section {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        .contact-info-card {
            background: var(--bg-white);
            padding: 2rem;
            border-radius: 20px;
            box-shadow: var(--shadow-sm);
            border: 1px solid #f3f4f6;
        }

        .contact-info-card h3 {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 1.5rem;
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
            margin-bottom: 1.5rem;
            padding-bottom: 1.5rem;
            border-bottom: 1px solid #f3f4f6;
        }

        .contact-item:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }

        .contact-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
            flex-shrink: 0;
        }

        .contact-details h4 {
            font-size: 1rem;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 0.3rem;
        }

        .contact-details p {
            color: var(--text-gray);
            font-size: 0.9rem;
            line-height: 1.6;
        }

        /* Map Container */
        .map-container {
            background: var(--bg-white);
            padding: 1.5rem;
            border-radius: 15px;
            border: 1px solid #f3f4f6;
            box-shadow: var(--shadow-sm);
        }

        .map-container h4 {
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 1rem;
        }

        .map-frame iframe {
            width: 100%;
            border-radius: 12px;
            display: block;
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

        /* Responsive */
        @media (max-width: 768px) {
            .nav-menu {
                position: static;
                transform: none;
                flex-direction: column;
                gap: 1rem;
            }

            .page-header h1 {
                font-size: 2rem;
            }

            .contact-content {
                grid-template-columns: 1fr;
            }

            .form-row {
                grid-template-columns: 1fr;
            }
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .contact-form-section,
        .contact-info-card {
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
                <li class="nav-item"><a href="{{ url('/executives') }}">Executive Members</a></li>
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
        <h1>Get In Touch</h1>
        <p>Have questions or need assistance? We're here to help! Reach out to us through any of the following methods.</p>
    </div>

    <!-- Contact Section -->
    <div class="container">
        <div class="contact-content">
            <div class="contact-form-section">
                <div class="form-header">
                    <h3>Send Us a Message</h3>
                    <p>Fill out the form below and we'll get back to you as soon as possible.</p>
                </div>
                
                <form class="contact-form" id="contactForm" method="POST" action="{{ url('/contact/submit') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Full Name *</label>
                        <input type="text" id="name" name="name" required>
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
                            <label for="student_id">Student ID (if applicable)</label>
                            <input type="text" id="student_id" name="student_id" placeholder="e.g., 221-15-XXXX">
                        </div>
                        <div class="form-group">
                            <label for="department">Department</label>
                            <input type="text" id="department" name="department" placeholder="e.g., CSE, EEE, BBA">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="subject">Subject *</label>
                        <input type="text" id="subject" name="subject" required placeholder="Brief description of your inquiry" maxlength="500">
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Message *</label>
                        <textarea id="message" name="message" required placeholder="Please describe your inquiry or concern in detail..." maxlength="2000"></textarea>
                        <div class="character-count">
                            <span id="charCount">0</span>/2000 characters
                        </div>
                    </div>
                    
                    <button type="submit" class="submit-btn" id="submitBtn">
                        <i class="fas fa-paper-plane"></i>
                        <span>Send Message</span>
                    </button>
                </form>
            </div>
            
            <div class="contact-info-section">
                <div class="contact-info-card">
                    <h3>Contact Information</h3>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Address</h4>
                            <p>Daffodil International University<br>
                            102/1, Shukrabad, Mirpur Road<br>
                            Dhanmondi, Dhaka-1207, Bangladesh</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Phone</h4>
                            <p>+880 1XXX-XXXXXX<br>
                            +880 1XXX-XXXXXX</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Email</h4>
                            <p>nsadiu@example.com<br>
                            president@nsadiu.org</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Office Hours</h4>
                            <p>Sunday - Thursday: 9:00 AM - 5:00 PM<br>
                            Friday: 9:00 AM - 1:00 PM<br>
                            Saturday: Closed</p>
                        </div>
                    </div>
                </div>
                
                <div class="map-container">
                    <h4>Find Us</h4>
                    <div class="map-frame">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.8977745552825!2d90.37298181543428!3d23.750944484587374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf4e48c7e2e3%3A0x69c3dc9781c93b5c!2sDaffodil%20International%20University!5e0!3m2!1sen!2sbd!4v1632147842000!5m2!1sen!2sbd"
                            width="100%" 
                            height="250" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy">
                        </iframe>
                    </div>
                </div>
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

    <script>
        // Character count for message textarea
        const messageTextarea = document.getElementById('message');
        const charCount = document.getElementById('charCount');
        
        if (messageTextarea && charCount) {
            messageTextarea.addEventListener('input', function() {
                const count = this.value.length;
                charCount.textContent = count;
                
                if (count > 1800) {
                    charCount.style.color = '#ef4444';
                } else if (count > 1500) {
                    charCount.style.color = '#f59e0b';
                } else {
                    charCount.style.color = 'var(--text-gray)';
                }
            });
        }

        // Form validation
        const contactForm = document.getElementById('contactForm');
        const formInputs = document.querySelectorAll('.contact-form input, .contact-form textarea');
        
        formInputs.forEach(input => {
            input.addEventListener('blur', function() {
                if (this.hasAttribute('required') && !this.value.trim()) {
                    this.style.borderColor = '#ef4444';
                } else {
                    this.style.borderColor = '#e5e7eb';
                }
            });
            
            input.addEventListener('focus', function() {
                this.style.borderColor = 'var(--primary-color)';
            });
        });

        // Form submission
        contactForm.addEventListener('submit', function(e) {
            const submitBtn = document.getElementById('submitBtn');
            const buttonText = submitBtn.querySelector('span');
            
            buttonText.textContent = 'Sending...';
            submitBtn.disabled = true;
        });

        // Phone number formatting
        const phoneInput = document.getElementById('phone');
        if (phoneInput) {
            phoneInput.addEventListener('input', function(e) {
                let value = e.target.value.replace(/\D/g, '');
                if (value.startsWith('880')) {
                    value = '+' + value;
                } else if (value.startsWith('0')) {
                    value = '+880' + value.substring(1);
                }
                e.target.value = value;
            });
        }

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
