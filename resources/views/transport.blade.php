<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transport Schedule - NSA DIU</title>
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
        }

        /* Container */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 3rem 5%;
        }

        /* Schedule Section */
        .schedule-section {
            margin-bottom: 3rem;
        }

        .section-title {
            font-size: 2rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 2rem;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .section-title i {
            color: var(--primary-color);
            font-size: 2.2rem;
        }

        .discipline-notice {
            background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%);
            border: 2px solid #f59e0b;
            border-radius: 16px;
            padding: 2rem;
            margin-bottom: 3rem;
            box-shadow: 0 4px 12px rgba(245, 158, 11, 0.2);
        }

        .discipline-notice h3 {
            color: #92400e;
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.8rem;
        }

        .discipline-notice h3 i {
            font-size: 1.8rem;
        }

        .discipline-notice ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .discipline-notice li {
            color: #78350f;
            font-size: 0.95rem;
            padding: 0.6rem 0;
            display: flex;
            align-items: flex-start;
            gap: 0.8rem;
            line-height: 1.6;
        }

        .discipline-notice li i {
            color: #f59e0b;
            margin-top: 0.2rem;
            flex-shrink: 0;
        }

        .schedule-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(380px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .schedule-card {
            background: var(--bg-white);
            border-radius: 16px;
            padding: 2rem;
            box-shadow: var(--shadow-sm);
            border: 2px solid transparent;
            transition: all 0.3s;
            position: relative;
            overflow: hidden;
        }

        .schedule-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 6px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
        }

        .schedule-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow);
            border-color: var(--primary-color);
        }

        .schedule-header {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .schedule-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            color: var(--bg-white);
        }

        .schedule-title {
            flex: 1;
        }

        .schedule-title h3 {
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 0.3rem;
        }

        .schedule-title p {
            color: var(--text-gray);
            font-size: 0.9rem;
        }

        /* New Schedule Group Design */
        .schedule-group {
            margin-bottom: 2rem;
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: all 0.3s ease;
        }

        .schedule-group:hover {
            box-shadow: 0 15px 40px rgba(30, 144, 255, 0.15);
            transform: translateY(-4px);
        }

        .schedule-group-header {
            padding: 1.5rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .schedule-group-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            z-index: 0;
        }

        .schedule-group-header.morning::before {
            background: linear-gradient(135deg, #fbbf24, #f59e0b);
        }

        .schedule-group-header.afternoon::before {
            background: linear-gradient(135deg, #fb923c, #ea580c);
        }

        .schedule-group-header.evening::before {
            background: linear-gradient(135deg, #6366f1, #4f46e5);
        }

        .header-content {
            display: flex;
            align-items: center;
            gap: 1rem;
            position: relative;
            z-index: 1;
        }

        .header-content i {
            font-size: 2rem;
        }

        .header-content h3 {
            margin: 0;
            font-size: 1.5rem;
            font-weight: 700;
        }

        .header-content p {
            margin: 0.25rem 0 0 0;
            opacity: 0.95;
            font-size: 0.95rem;
        }

        .time-badge {
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(10px);
            padding: 0.75rem 1.5rem;
            border-radius: 30px;
            font-size: 1.5rem;
            font-weight: 700;
            border: 2px solid rgba(255, 255, 255, 0.3);
            position: relative;
            z-index: 1;
        }

        .bus-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.5rem;
            padding: 2rem;
        }

        .bus-card {
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
            border-radius: 12px;
            padding: 1.5rem;
            border: 2px solid transparent;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .bus-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
        }

        .bus-card.student::before {
            background: linear-gradient(90deg, #3b82f6, #1d4ed8);
        }

        .bus-card.faculty::before {
            background: linear-gradient(90deg, #8b5cf6, #6d28d9);
        }

        .bus-card:hover {
            border-color: var(--primary-color);
            box-shadow: 0 10px 25px rgba(30, 144, 255, 0.15);
            transform: translateY(-4px);
        }

        .bus-card.single {
            grid-column: 1 / -1;
            max-width: 400px;
            margin: 0 auto;
        }

        .bus-card-header {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin-bottom: 1.25rem;
        }

        .bus-card-header i {
            font-size: 1.5rem;
            color: var(--primary-color);
        }

        .bus-card.faculty .bus-card-header i {
            color: #8b5cf6;
        }

        .bus-card-header h4 {
            margin: 0;
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--text-color);
        }

        .bus-numbers-display {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-bottom: 1rem;
        }

        .bus-badge {
            background: var(--primary-color);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.9rem;
            display: inline-block;
            box-shadow: 0 4px 10px rgba(30, 144, 255, 0.2);
            transition: all 0.3s ease;
        }

        .bus-badge:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 15px rgba(30, 144, 255, 0.3);
        }

        .bus-card.faculty .bus-badge {
            background: #8b5cf6;
            box-shadow: 0 4px 10px rgba(139, 92, 246, 0.2);
        }

        .bus-card.faculty .bus-badge:hover {
            box-shadow: 0 6px 15px rgba(139, 92, 246, 0.3);
        }

        .bus-info {
            color: var(--text-secondary);
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .bus-info::before {
            content: '\f05a';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            color: var(--primary-color);
        }

        .schedule-time {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1.2rem;
            background: var(--bg-light);
            border-radius: 12px;
            margin-bottom: 1rem;
        }

        .schedule-time i {
            font-size: 1.5rem;
            color: var(--primary-color);
        }

        .schedule-time .time {
            font-size: 2rem;
            font-weight: 700;
            color: var(--text-dark);
        }

        .schedule-time .label {
            font-size: 0.85rem;
            color: var(--text-gray);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .bus-count {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem 1rem;
            background: rgba(30, 144, 255, 0.1);
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
            color: var(--primary-color);
        }

        .bus-details {
            background: var(--bg-light);
            border-radius: 12px;
            padding: 1.2rem;
            margin-top: 1rem;
        }

        .bus-details h4 {
            color: var(--text-dark);
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 0.8rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .bus-list {
            display: flex;
            flex-direction: column;
            gap: 0.6rem;
        }

        .bus-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0.8rem 1rem;
            background: var(--bg-white);
            border-radius: 8px;
            border: 1px solid #e5e7eb;
        }

        .bus-item .bus-type {
            display: flex;
            align-items: center;
            gap: 0.6rem;
            font-weight: 500;
            color: var(--text-dark);
            font-size: 0.9rem;
        }

        .bus-item .bus-type i {
            color: var(--primary-color);
        }

        .bus-numbers {
            display: flex;
            gap: 0.5rem;
        }

        .bus-number {
            background: var(--primary-color);
            color: white;
            padding: 0.3rem 0.8rem;
            border-radius: 6px;
            font-weight: 600;
            font-size: 0.85rem;
        }

        .discipline-notice {
            background: linear-gradient(135deg, #ffffff 0%, #fef3c7 100%);
            border: 3px solid transparent;
            border-radius: 20px;
            padding: 2.5rem;
            margin-bottom: 3rem;
            box-shadow: 0 10px 30px rgba(245, 158, 11, 0.15), inset 0 1px 0 rgba(255, 255, 255, 0.5);
            position: relative;
            overflow: hidden;
        }

        .discipline-notice::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 6px;
            background: linear-gradient(90deg, #ef4444, #f59e0b, #10b981, #3b82f6, #8b5cf6);
            background-size: 200% 100%;
            animation: gradient-shift 3s ease infinite;
        }

        @keyframes gradient-shift {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        .discipline-notice h3 {
            color: #92400e;
            font-size: 1.6rem;
            font-weight: 800;
            margin-bottom: 2rem;
            display: flex;
            align-items: center;
            gap: 1rem;
            position: relative;
        }

        .discipline-notice h3 i {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #fbbf24, #f59e0b);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: white;
            box-shadow: 0 4px 12px rgba(245, 158, 11, 0.3);
        }

        .discipline-notice ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1rem;
        }

        .discipline-notice li {
            background: white;
            color: #78350f;
            font-size: 0.95rem;
            padding: 1rem 1.2rem;
            display: flex;
            align-items: flex-start;
            gap: 0.8rem;
            line-height: 1.6;
            border-radius: 12px;
            border: 2px solid rgba(245, 158, 11, 0.2);
            transition: all 0.3s ease;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        .discipline-notice li:hover {
            border-color: #f59e0b;
            box-shadow: 0 6px 16px rgba(245, 158, 11, 0.2);
            transform: translateY(-2px);
        }

        .discipline-notice li i {
            width: 24px;
            height: 24px;
            background: linear-gradient(135deg, #10b981, #059669);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.75rem;
            flex-shrink: 0;
            box-shadow: 0 2px 8px rgba(16, 185, 129, 0.3);
        }

        /* Route Section */
        .route-section {
            background: var(--bg-white);
            border-radius: 16px;
            padding: 2.5rem;
            box-shadow: var(--shadow-sm);
            margin-top: 3rem;
        }

        .route-header {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 2.5rem;
        }

        .route-header h2 {
            font-size: 2rem;
            font-weight: 700;
            color: var(--text-dark);
        }

        .route-line {
            position: relative;
            padding-left: 3rem;
        }

        .route-stop {
            position: relative;
            padding: 1.5rem 0;
            display: flex;
            align-items: center;
            gap: 1.5rem;
        }

        .route-stop::before {
            content: '';
            position: absolute;
            left: -2.25rem;
            top: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(to bottom, var(--primary-color), var(--secondary-color));
        }

        .route-stop:first-child::before {
            top: 50%;
        }

        .route-stop:last-child::before {
            height: 50%;
        }

        .route-marker {
            position: absolute;
            left: -2.75rem;
            top: 50%;
            transform: translateY(-50%);
            width: 18px;
            height: 18px;
            background: var(--bg-white);
            border: 3px solid var(--primary-color);
            border-radius: 50%;
            z-index: 1;
        }

        .route-stop:first-child .route-marker,
        .route-stop:last-child .route-marker {
            width: 24px;
            height: 24px;
            left: -2.99rem;
            background: var(--primary-color);
            box-shadow: 0 0 0 4px rgba(30, 144, 255, 0.2);
        }

        .stop-icon {
            width: 50px;
            height: 50px;
            background: var(--bg-light);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            color: var(--primary-color);
        }

        .stop-info {
            flex: 1;
        }

        .stop-info h4 {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 0.3rem;
        }

        .stop-info p {
            color: var(--text-gray);
            font-size: 0.9rem;
        }

        /* Info Banner */
        .info-banner {
            background: linear-gradient(135deg, rgba(30, 144, 255, 0.1), rgba(0, 102, 204, 0.1));
            border-left: 4px solid var(--primary-color);
            padding: 1.5rem;
            border-radius: 8px;
            margin-top: 2rem;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .info-banner i {
            font-size: 1.5rem;
            color: var(--primary-color);
        }

        .info-banner p {
            color: var(--text-dark);
            margin: 0;
            font-weight: 500;
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
            .page-header h1 {
                font-size: 2rem;
            }

            .schedule-grid {
                grid-template-columns: 1fr;
            }

            .nav-menu {
                gap: 1rem;
                font-size: 0.85rem;
            }

            .route-line {
                padding-left: 2rem;
            }

            .route-stop {
                padding: 1rem 0;
            }
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .schedule-card,
        .route-section {
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
                <li class="nav-item"><a href="{{ url('/gallery') }}">Gallery</a></li>
                <li class="nav-item"><a href="{{ url('/transport') }}" class="active">Transportation</a></li>
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
        <h1><i class="fas fa-bus"></i> Transport Schedule</h1>
        <p>Daily bus services between Narayanganj and DIU Campus</p>
    </div>

    <!-- Container -->
    <div class="container">
        <!-- Discipline Notice -->
        <div class="discipline-notice">
            <h3>
                <i class="fas fa-shield-alt"></i>
                Bus Discipline & Guidelines
            </h3>
            <ul>
                <li>
                    <i class="fas fa-check"></i>
                    <span>Maintain discipline and proper behavior while using university bus services</span>
                </li>
                <li>
                    <i class="fas fa-check"></i>
                    <span>Do not disturb the peaceful environment inside the bus</span>
                </li>
                <li>
                    <i class="fas fa-check"></i>
                    <span>Keep the bus clean and avoid littering</span>
                </li>
                <li>
                    <i class="fas fa-check"></i>
                    <span>Be respectful to fellow students, faculty members, and bus staff</span>
                </li>
                <li>
                    <i class="fas fa-check"></i>
                    <span>Students are requested to maintain proper dress code and professional behavior</span>
                </li>
                <li>
                    <i class="fas fa-check"></i>
                    <span>Violation of these guidelines may result in suspension of bus services</span>
                </li>
            </ul>
        </div>

        <!-- Schedule Section -->
        <div class="schedule-section">
            <h2 class="section-title">
                <i class="fas fa-clock"></i>
                Bus Timings
            </h2>

            <!-- Morning Schedule -->
            <div class="schedule-group">
                <div class="schedule-group-header morning">
                    <div class="header-content">
                        <i class="fas fa-sun"></i>
                        <div>
                            <h3>Morning Departure</h3>
                            <p>Narayanganj → DIU Campus</p>
                        </div>
                    </div>
                    <div class="time-badge">6:20 AM</div>
                </div>
                
                <div class="bus-grid">
                    <div class="bus-card student">
                        <div class="bus-card-header">
                            <i class="fas fa-graduation-cap"></i>
                            <h4>Student Buses</h4>
                        </div>
                        <div class="bus-numbers-display">
                            <span class="bus-badge">Bus #24</span>
                            <span class="bus-badge">Bus #25</span>
                            <span class="bus-badge">Bus #27</span>
                        </div>
                        <div class="bus-info">3 Student Buses Available</div>
                    </div>
                    
                    <div class="bus-card faculty">
                        <div class="bus-card-header">
                            <i class="fas fa-chalkboard-teacher"></i>
                            <h4>Faculty Bus</h4>
                        </div>
                        <div class="bus-numbers-display">
                            <span class="bus-badge">Bus #26</span>
                        </div>
                        <div class="bus-info">1 Faculty Bus Available</div>
                    </div>
                </div>
            </div>

            <!-- Return Schedule -->
            <div class="schedule-group">
                <div class="schedule-group-header afternoon">
                    <div class="header-content">
                        <i class="fas fa-cloud-sun"></i>
                        <div>
                            <h3>Afternoon Return</h3>
                            <p>DIU Campus → Narayanganj</p>
                        </div>
                    </div>
                    <div class="time-badge">4:20 PM</div>
                </div>
                
                <div class="bus-grid">
                    <div class="bus-card faculty">
                        <div class="bus-card-header">
                            <i class="fas fa-chalkboard-teacher"></i>
                            <h4>Faculty Bus</h4>
                        </div>
                        <div class="bus-numbers-display">
                            <span class="bus-badge">Bus #26</span>
                        </div>
                        <div class="bus-info">1 Faculty Bus Available</div>
                    </div>
                    
                    <div class="bus-card student">
                        <div class="bus-card-header">
                            <i class="fas fa-graduation-cap"></i>
                            <h4>Student Buses</h4>
                        </div>
                        <div class="bus-numbers-display">
                            <span class="bus-badge">2 Buses</span>
                        </div>
                        <div class="bus-info">2 Student Buses Available</div>
                    </div>
                </div>
            </div>

            <!-- Evening Schedule -->
            <div class="schedule-group">
                <div class="schedule-group-header evening">
                    <div class="header-content">
                        <i class="fas fa-moon"></i>
                        <div>
                            <h3>Evening Return</h3>
                            <p>DIU Campus → Narayanganj</p>
                        </div>
                    </div>
                    <div class="time-badge">6:00 PM</div>
                </div>
                
                <div class="bus-grid">
                    <div class="bus-card student single">
                        <div class="bus-card-header">
                            <i class="fas fa-graduation-cap"></i>
                            <h4>Student Bus</h4>
                        </div>
                        <div class="bus-numbers-display">
                            <span class="bus-badge">1 Bus</span>
                        </div>
                        <div class="bus-info">1 Student Bus Available</div>
                    </div>
                </div>
            </div>

            <div class="info-banner">
                <i class="fas fa-info-circle"></i>
                <p><strong>Important:</strong> Please arrive at the pickup point 10 minutes before departure time. Contact the association for any schedule changes or emergencies.</p>
            </div>
        </div>

        <!-- Route Section -->
        <div class="route-section">
            <div class="route-header">
                <i class="fas fa-route" style="font-size: 2rem; color: var(--primary-color);"></i>
                <h2>Bus Route & Stoppages</h2>
            </div>

            <div class="route-line">
                <div class="route-stop">
                    <div class="route-marker"></div>
                    <div class="stop-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="stop-info">
                        <h4>Cashara</h4>
                        <p>Departure Time: 6:20 AM</p>
                    </div>
                </div>

                <div class="route-stop">
                    <div class="route-marker"></div>
                    <div class="stop-icon">
                        <i class="fas fa-map-pin"></i>
                    </div>
                    <div class="stop-info">
                        <h4>Zela Parishad</h4>
                        <p>Arrival Time: 6:20 AM</p>
                    </div>
                </div>

                <div class="route-stop">
                    <div class="route-marker"></div>
                    <div class="stop-icon">
                        <i class="fas fa-map-pin"></i>
                    </div>
                    <div class="stop-info">
                        <h4>Shibu Market</h4>
                        <p>Arrival Time: 6:23 AM</p>
                    </div>
                </div>

                <div class="route-stop">
                    <div class="route-marker"></div>
                    <div class="stop-icon">
                        <i class="fas fa-map-pin"></i>
                    </div>
                    <div class="stop-info">
                        <h4>Fatulla Stadium</h4>
                        <p>Arrival Time: 6:25 AM</p>
                    </div>
                </div>

                <div class="route-stop">
                    <div class="route-marker"></div>
                    <div class="stop-icon">
                        <i class="fas fa-map-pin"></i>
                    </div>
                    <div class="stop-info">
                        <h4>Jalkuri</h4>
                        <p>Arrival Time: 6:27 AM</p>
                    </div>
                </div>

                <div class="route-stop">
                    <div class="route-marker"></div>
                    <div class="stop-icon">
                        <i class="fas fa-map-pin"></i>
                    </div>
                    <div class="stop-info">
                        <h4>Bhuigor</h4>
                        <p>Arrival Time: 6:27 AM</p>
                    </div>
                </div>

                <div class="route-stop">
                    <div class="route-marker"></div>
                    <div class="stop-icon">
                        <i class="fas fa-map-pin"></i>
                    </div>
                    <div class="stop-info">
                        <h4>Signboard</h4>
                        <p>Arrival Time: 6:30 AM</p>
                    </div>
                </div>

                <div class="route-stop">
                    <div class="route-marker"></div>
                    <div class="stop-icon">
                        <i class="fas fa-map-pin"></i>
                    </div>
                    <div class="stop-info">
                        <h4>Madrasha Road</h4>
                        <p>Arrival Time: 6:30 AM</p>
                    </div>
                </div>

                <div class="route-stop">
                    <div class="route-marker"></div>
                    <div class="stop-icon">
                        <i class="fas fa-map-pin"></i>
                    </div>
                    <div class="stop-info">
                        <h4>Matuail</h4>
                        <p>Arrival Time: 6:33 AM</p>
                    </div>
                </div>

                <div class="route-stop">
                    <div class="route-marker"></div>
                    <div class="stop-icon">
                        <i class="fas fa-map-pin"></i>
                    </div>
                    <div class="stop-info">
                        <h4>Rayerbag</h4>
                        <p>Arrival Time: 6:35 AM</p>
                    </div>
                </div>

                <div class="route-stop">
                    <div class="route-marker"></div>
                    <div class="stop-icon">
                        <i class="fas fa-map-pin"></i>
                    </div>
                    <div class="stop-info">
                        <h4>Sanir Akhra</h4>
                        <p>Arrival Time: 6:40 AM</p>
                    </div>
                </div>

                <div class="route-stop">
                    <div class="route-marker"></div>
                    <div class="stop-icon">
                        <i class="fas fa-map-pin"></i>
                    </div>
                    <div class="stop-info">
                        <h4>Kajla</h4>
                        <p>Arrival Time: 6:45 AM</p>
                    </div>
                </div>

                <div class="route-stop">
                    <div class="route-marker"></div>
                    <div class="stop-icon">
                        <i class="fas fa-map-pin"></i>
                    </div>
                    <div class="stop-info">
                        <h4>Jatrabari</h4>
                        <p>Arrival Time: 6:50 AM</p>
                    </div>
                </div>

                <div class="route-stop">
                    <div class="route-marker"></div>
                    <div class="stop-icon">
                        <i class="fas fa-university"></i>
                    </div>
                    <div class="stop-info">
                        <h4>DIU Campus - Final Destination</h4>
                        <p>Daffodil International University Main Campus</p>
                    </div>
                </div>
            </div>

            <div class="info-banner" style="margin-top: 2rem;">
                <i class="fas fa-exclamation-triangle"></i>
                <p><strong>Note:</strong> All times are approximate and may vary due to traffic conditions. Bus will only stop at designated stoppages. Please be at the stoppage 5 minutes early. For exact stoppage locations, please contact the transport coordinator or check the association notice board.</p>
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
