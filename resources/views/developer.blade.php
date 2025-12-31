<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developer - NSA DIU</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
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
            --transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
            --shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            --shadow-sm: 0 2px 8px rgba(0, 0, 0, 0.05);
            --shadow-lg: 0 25px 50px rgba(0, 0, 0, 0.15);
            --border-radius: 20px;
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

        /* Developer Page Styles */
        .developer-hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
            color: white;
            padding: 8rem 5% 10rem;
            text-align: center;
            position: relative;
            overflow: hidden;
            clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
        }

        .developer-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: 
                repeating-linear-gradient(45deg, transparent, transparent 35px, rgba(255,255,255,0.03) 35px, rgba(255,255,255,0.03) 70px),
                repeating-linear-gradient(-45deg, transparent, transparent 35px, rgba(255,255,255,0.03) 35px, rgba(255,255,255,0.03) 70px);
            animation: heroPattern 30s linear infinite;
        }

        @keyframes heroPattern {
            0% { transform: translate(0, 0); }
            100% { transform: translate(70px, 70px); }
        }

        @keyframes float {
            0%, 100% { transform: translate(0, 0); }
            25% { transform: translate(20px, -20px); }
            50% { transform: translate(-20px, 20px); }
            75% { transform: translate(20px, 10px); }
        }

        .developer-hero h1 {
            font-size: 4.5rem;
            font-weight: 900;
            margin-bottom: 1.5rem;
            position: relative;
            z-index: 1;
            text-shadow: 0 4px 30px rgba(0,0,0,0.25);
            animation: slideDown 0.8s ease-out;
            letter-spacing: -2px;
            line-height: 1;
        }

        .developer-hero h1 i {
            font-size: 0.85em;
            margin-right: 1rem;
            display: inline-block;
            animation: iconFloat 3s ease-in-out infinite;
        }

        @keyframes iconFloat {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            25% { transform: translateY(-10px) rotate(-5deg); }
            75% { transform: translateY(-5px) rotate(5deg); }
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .developer-hero p {
            font-size: 1.5rem;
            opacity: 0.95;
            position: relative;
            z-index: 1;
            animation: slideUp 0.8s ease-out 0.2s both;
            font-weight: 300;
            letter-spacing: 0.5px;
            max-width: 700px;
            margin: 0 auto;
        }

        .hero-subtitle {
            display: inline-block;
            padding: 0.8rem 2rem;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            border-radius: 50px;
            margin-top: 2rem;
            font-size: 1.1rem;
            font-weight: 500;
            border: 2px solid rgba(255, 255, 255, 0.3);
            animation: slideUp 0.8s ease-out 0.4s both;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .developer-container {
            max-width: 1300px;
            margin: -6rem auto 4rem;
            padding: 0 2rem;
            position: relative;
            z-index: 10;
        }

        .developer-card {
            background: var(--bg-white);
            border-radius: 30px;
            box-shadow: 0 30px 90px rgba(102, 126, 234, 0.2);
            padding: 3.5rem;
            display: flex;
            flex-direction: column;
            gap: 3rem;
            transition: var(--transition);
            overflow: hidden;
            border: none;
            animation: cardAppear 0.8s ease-out 0.4s both;
            position: relative;
        }

        .developer-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 6px;
            background: linear-gradient(90deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
            z-index: 10;
        }

        .developer-card:hover {
            box-shadow: 0 35px 100px rgba(102, 126, 234, 0.25);
            transform: translateY(-5px);
        }

        @keyframes cardAppear {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .developer-card:hover {
            box-shadow: 0 25px 80px rgba(102, 126, 234, 0.25);
        }

        .developer-profile-header {
            display: grid;
            grid-template-columns: 280px 1fr;
            gap: 3rem;
            align-items: center;
        }

        .developer-image-section {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1.5rem;
        }

        .developer-image-section::before {
            display: none;
        }

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .developer-image-wrapper {
            position: relative;
            z-index: 2;
        }

        .developer-image {
            width: 280px;
            height: 280px;
            border-radius: 50%;
            object-fit: cover;
            border: none;
            box-shadow: 0 20px 60px rgba(102, 126, 234, 0.3);
            transition: var(--transition);
            position: relative;
            padding: 8px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
        }

        .developer-image:hover {
            transform: scale(1.05);
            box-shadow: 0 25px 80px rgba(102, 126, 234, 0.4);
        }

        .image-glow {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(102, 126, 234, 0.2) 0%, transparent 70%);
            border-radius: 50%;
            z-index: -1;
            animation: glowPulse 4s ease-in-out infinite;
        }

        @keyframes glowPulse {
            0%, 100% { 
                transform: translate(-50%, -50%) scale(1);
                opacity: 0.5;
            }
            50% { 
                transform: translate(-50%, -50%) scale(1.1);
                opacity: 0.8;
            }
        }

        @keyframes pulse {
            0%, 100% { transform: translate(-50%, -50%) scale(1); opacity: 0.5; }
            50% { transform: translate(-50%, -50%) scale(1.1); opacity: 0.8; }
        }

        .developer-badge {
            padding: 0.6rem 1.5rem;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 100px;
            color: white;
            font-weight: 700;
            font-size: 0.75rem;
            text-align: center;
            border: none;
            box-shadow: 0 8px 20px rgba(102, 126, 234, 0.3);
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: var(--transition);
        }

        .developer-badge:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 30px rgba(102, 126, 234, 0.4);
        }

        .developer-info {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .developer-info::before {
            display: none;
        }

        .developer-name {
            font-size: 3.5rem;
            font-weight: 900;
            color: var(--text-dark);
            margin-bottom: 0.5rem;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            line-height: 1.1;
            position: relative;
            letter-spacing: -1.5px;
        }

        .developer-name::after {
            display: none;
        }

        .developer-header {
            display: none;
        }

        .developer-title {
            font-size: 1.25rem;
            color: var(--text-gray);
            margin-bottom: 0;
            line-height: 1.7;
            font-weight: 400;
            position: relative;
            padding-left: 0;
        }

        .developer-title::before {
            display: none;
        }

        .developer-details {
            display: flex;
            flex-direction: column;
            gap: 2.5rem;
        }

        .skill-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.75rem;
            margin-bottom: 0;
        }

        .skill-tag {
            padding: 0.5rem 1.2rem;
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.08), rgba(118, 75, 162, 0.08));
            border: 1.5px solid rgba(102, 126, 234, 0.25);
            border-radius: 25px;
            font-size: 0.875rem;
            color: #667eea;
            font-weight: 600;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            letter-spacing: 0.3px;
        }

        .skill-tag i {
            font-size: 0.85rem;
        }

        .skill-tag:hover {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.35);
            border-color: transparent;
        }

        .developer-roles {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .role-item {
            background: var(--bg-white);
            padding: 1rem 1.5rem;
            border-radius: 16px;
            display: flex;
            align-items: center;
            text-align: left;
            gap: 0.8rem;
            transition: var(--transition);
            border: 2px solid rgba(102, 126, 234, 0.15);
            position: relative;
            overflow: hidden;
            flex: 0 0 auto;
        }

        .role-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #667eea, #764ba2, #f093fb);
            transform: scaleX(0);
            transition: transform 0.4s ease;
        }

        .role-item:hover::before {
            transform: scaleX(1);
        }

        .role-item:hover {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.35);
            border-color: transparent;
        }

        .role-item i {
            font-size: 1.5rem;
            background: linear-gradient(135deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            transition: var(--transition);
            flex-shrink: 0;
        }

        .role-item:hover i {
            background: white;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            transform: scale(1.1);
        }

        .role-item-text {
            flex: 1;
        }

        .role-label {
            font-size: 0.7rem;
            color: var(--text-gray);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 0.2rem;
        }

        .role-item:hover .role-label {
            color: rgba(255,255,255,0.9);
        }

        .role-value {
            font-size: 0.9rem;
            font-weight: 600;
            color: var(--text-dark);
        }

        .role-item:hover .role-value {
            color: white;
        }

        .social-links {
            margin-top: 0;
            padding-top: 0;
            border-top: none;
        }

        .social-links h3 {
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            color: var(--text-dark);
            font-weight: 800;
            text-align: left;
        }

        .social-buttons {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .social-btn {
            position: relative;
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 16px;
            text-decoration: none;
            transition: all 0.3s ease;
            cursor: pointer;
            overflow: visible;
        }

        .social-btn::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 16px;
            transition: all 0.3s ease;
            z-index: 1;
        }

        .social-btn i {
            font-size: 1.8rem;
            position: relative;
            z-index: 2;
            color: white;
            transition: all 0.3s ease;
        }

        .social-btn:hover {
            transform: translateY(-8px) scale(1.1);
        }

        .social-btn:hover i {
            transform: scale(1.1);
        }

        .social-tooltip {
            position: absolute;
            bottom: -45px;
            left: 50%;
            transform: translateX(-50%) scale(0);
            background: var(--text-dark);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            font-size: 0.85rem;
            font-weight: 600;
            white-space: nowrap;
            opacity: 0;
            transition: all 0.3s ease;
            z-index: 10;
            pointer-events: none;
        }

        .social-tooltip::before {
            content: '';
            position: absolute;
            top: -6px;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 0;
            border-left: 6px solid transparent;
            border-right: 6px solid transparent;
            border-bottom: 6px solid var(--text-dark);
        }

        .social-btn:hover .social-tooltip {
            opacity: 1;
            transform: translateX(-50%) scale(1);
            bottom: -50px;
        }

        .social-btn.github::before {
            background: linear-gradient(135deg, #24292e, #1a1d21);
            box-shadow: 0 5px 20px rgba(36, 41, 46, 0.4);
        }

        .social-btn.github:hover::before {
            box-shadow: 0 8px 30px rgba(36, 41, 46, 0.6);
        }

        .social-btn.linkedin::before {
            background: linear-gradient(135deg, #0077b5, #005885);
            box-shadow: 0 5px 20px rgba(0, 119, 181, 0.4);
        }

        .social-btn.linkedin:hover::before {
            box-shadow: 0 8px 30px rgba(0, 119, 181, 0.6);
        }

        .social-btn.facebook::before {
            background: linear-gradient(135deg, #1877f2, #145dbf);
            box-shadow: 0 5px 20px rgba(24, 119, 242, 0.4);
        }

        .social-btn.facebook:hover::before {
            box-shadow: 0 8px 30px rgba(24, 119, 242, 0.6);
        }

        .social-btn.telegram::before {
            background: linear-gradient(135deg, #0088cc, #006699);
            box-shadow: 0 5px 20px rgba(0, 136, 204, 0.4);
        }

        .social-btn.telegram:hover::before {
            box-shadow: 0 8px 30px rgba(0, 136, 204, 0.6);
        }

        [data-theme="dark"] .social-tooltip {
            background: var(--bg-card);
            border: 1px solid rgba(102, 126, 234, 0.3);
        }

        [data-theme="dark"] .social-tooltip::before {
            border-bottom-color: var(--bg-card);
        }

        .message-section {
            margin-top: 3rem;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
            padding: 4rem 3.5rem;
            border-radius: 30px;
            text-align: center;
            position: relative;
            overflow: hidden;
            border: none;
            animation: cardAppear 0.8s ease-out 0.6s both;
            color: white;
        }

        .message-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: 
                repeating-linear-gradient(45deg, transparent, transparent 35px, rgba(255,255,255,0.03) 35px, rgba(255,255,255,0.03) 70px);
            opacity: 0.5;
        }

        .message-section h3 {
            font-size: 2.5rem;
            color: white;
            margin-bottom: 1.5rem;
            font-weight: 900;
            position: relative;
            z-index: 1;
        }

        .message-section p {
            font-size: 1.15rem;
            color: rgba(255, 255, 255, 0.95);
            line-height: 2;
            max-width: 900px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
            font-weight: 400;
        }

        .quote-icon {
            font-size: 4rem;
            color: rgba(255, 255, 255, 0.3);
            margin-bottom: 1.5rem;
            position: relative;
            z-index: 1;
        }

        .achievements-section {
            margin-top: 3rem;
            background: var(--bg-white);
            padding: 3rem;
            border-radius: 32px;
            box-shadow: 0 15px 40px rgba(102, 126, 234, 0.1);
            border: 1.5px solid rgba(102, 126, 234, 0.1);
            animation: cardAppear 0.8s ease-out 0.7s both;
        }

        .achievements-section h3 {
            font-size: 2rem;
            font-weight: 800;
            color: var(--text-dark);
            margin-bottom: 2rem;
            text-align: center;
            background: linear-gradient(135deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .achievements-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
        }

        .achievement-item {
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.05), rgba(118, 75, 162, 0.05));
            padding: 1.5rem;
            border-radius: 18px;
            display: flex;
            align-items: flex-start;
            gap: 1rem;
            border: 1.5px solid rgba(102, 126, 234, 0.15);
            transition: var(--transition);
        }

        .achievement-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.2);
            border-color: rgba(102, 126, 234, 0.3);
        }

        .achievement-icon {
            font-size: 1.8rem;
            background: linear-gradient(135deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            flex-shrink: 0;
            width: 45px;
            text-align: center;
        }

        .achievement-content h4 {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 0.3rem;
        }

        .achievement-content p {
            font-size: 0.9rem;
            color: var(--text-gray);
            line-height: 1.6;
        }

        .tech-stack-section {
            margin-top: 3rem;
            background: var(--bg-white);
            padding: 3rem;
            border-radius: 32px;
            box-shadow: 0 15px 40px rgba(102, 126, 234, 0.1);
            border: 1.5px solid rgba(102, 126, 234, 0.1);
            animation: cardAppear 0.8s ease-out 0.75s both;
        }

        .tech-stack-section h3 {
            font-size: 2rem;
            font-weight: 800;
            color: var(--text-dark);
            margin-bottom: 2rem;
            text-align: center;
            background: linear-gradient(135deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .tech-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1.5rem;
        }

        .tech-item {
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.05), rgba(118, 75, 162, 0.05));
            padding: 1.8rem 1.2rem;
            border-radius: 18px;
            text-align: center;
            border: 1.5px solid rgba(102, 126, 234, 0.15);
            transition: var(--transition);
        }

        .tech-item:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 12px 30px rgba(102, 126, 234, 0.25);
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-color: transparent;
        }

        .tech-item i {
            font-size: 3rem;
            background: linear-gradient(135deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 0.8rem;
            display: block;
            transition: var(--transition);
        }

        .tech-item:hover i {
            background: white;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            transform: scale(1.1);
        }

        .tech-item span {
            font-size: 0.95rem;
            font-weight: 600;
            color: var(--text-dark);
            transition: var(--transition);
        }

        .tech-item:hover span {
            color: white;
        }

        .stats-section {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            margin-top: 3rem;
            animation: cardAppear 0.8s ease-out 0.8s both;
        }

        .stat-card {
            background: var(--bg-white);
            padding: 2rem;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            transition: var(--transition);
            border: 1px solid rgba(102, 126, 234, 0.1);
        }

        .stat-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(102, 126, 234, 0.2);
        }

        .stat-icon {
            font-size: 3rem;
            background: linear-gradient(135deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1rem;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 900;
            color: var(--text-dark);
            margin-bottom: 0.5rem;
        }

        .stat-label {
            font-size: 1rem;
            color: var(--text-gray);
            font-weight: 600;
        }

        /* Responsive Design */
        @media (max-width: 968px) {
            .developer-card {
                padding: 2.5rem;
            }

            .developer-profile-header {
                grid-template-columns: 1fr;
                gap: 2rem;
                text-align: center;
            }

            .developer-image-section {
                margin: 0 auto;
            }

            .developer-roles {
                flex-direction: column;
            }

            .role-item {
                flex: 1 1 100%;
            }

            .social-links h3 {
                text-align: center;
            }

            .social-buttons {
                justify-content: center;
            }

            .developer-image {
                width: 240px;
                height: 240px;
            }

            .image-glow {
                width: 260px;
                height: 260px;
            }

            .stats-section {
                grid-template-columns: 1fr;
            }

            .tech-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .achievements-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .developer-card {
                padding: 2rem;
            }

            .developer-info {
                padding: 0;
            }

            .developer-image {
                width: 200px;
                height: 200px;
            }

            .image-glow {
                width: 220px;
                height: 220px;
            }

            .developer-badge {
                font-size: 0.7rem;
                padding: 0.5rem 1.2rem;
            }

            .developer-name {
                font-size: 2.5rem;
            }

            .social-buttons {
                flex-direction: column;
                gap: 1rem;
            }

            .social-btn {
                width: 60px;
                height: 60px;
            }

            .social-btn i {
                font-size: 1.5rem;
            }

            .developer-hero h1 {
                font-size: 2.8rem;
            }

            .developer-hero p {
                font-size: 1.1rem;
            }

            .developer-hero {
                padding: 4rem 5% 6rem;
            }

            .nav-menu {
                display: none;
            }

            .mobile-menu-toggle {
                display: block;
            }

            .stat-number {
                font-size: 2rem;
            }
        }

        /* Dark theme adjustments */
        [data-theme="dark"] .developer-card {
            background: var(--bg-card);
        }

        [data-theme="dark"] .role-item {
            background: var(--bg-white);
        }

        [data-theme="dark"] .message-section {
            background: var(--bg-white);
        }

        .back-to-top {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            width: 55px;
            height: 55px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transition: var(--transition);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
            z-index: 999;
            border: 2px solid rgba(255,255,255,0.3);
        }

        .back-to-top.visible {
            opacity: 1;
            visibility: visible;
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        .back-to-top:hover {
            background: linear-gradient(135deg, #764ba2, #f093fb);
            transform: translateY(-5px) scale(1.1);
            box-shadow: 0 12px 35px rgba(102, 126, 234, 0.6);
            animation: none;
        }

        .back-to-top i {
            font-size: 1.3rem;
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

    <!-- Developer Hero Section -->
    <div class="developer-hero">
        <h1><i class="fas fa-code"></i>Project Developer</h1>
        <p>Crafting Digital Solutions with Passion & Precision</p>
        <div class="hero-subtitle">Full Stack Development | Innovation | Leadership</div>
    </div>

    <!-- Developer Content -->
    <div class="developer-container">
        <div class="developer-card">
            <!-- Profile Header -->
            <div class="developer-profile-header">
                <div class="developer-image-section">
                    <div class="developer-image-wrapper">
                        <div class="image-glow"></div>
                        <img src="{{ asset('images/executives2025/Tamal.jpg') }}" alt="Jahangir Alam Tamal" class="developer-image">
                    </div>
                    <div class="developer-badge">Founder & CEO of DONORO</div>
                </div>

                <div class="developer-info">
                    <h2 class="developer-name">Jahangir Alam Tamal</h2>
                    <p class="developer-title">
                        Passionate Full Stack Developer | Entrepreneur | Visionary Leader
                    </p>
                    <div class="skill-tags">
                        <span class="skill-tag"><i class="fas fa-laptop-code"></i> Web Development</span>
                        <span class="skill-tag"><i class="fas fa-mobile-alt"></i> Mobile Apps</span>
                        <span class="skill-tag"><i class="fas fa-database"></i> Database Design</span>
                        <span class="skill-tag"><i class="fas fa-server"></i> Backend</span>
                        <span class="skill-tag"><i class="fas fa-paint-brush"></i> UI/UX</span>
                    </div>
                </div>
            </div>

            <!-- Developer Details -->
            <div class="developer-details">
                <div class="developer-roles">
                    <div class="role-item">
                        <i class="fas fa-graduation-cap"></i>
                        <div class="role-item-text">
                            <div class="role-label">Department</div>
                            <div class="role-value">Computer Science & Engineering</div>
                        </div>
                    </div>

                    <div class="role-item">
                        <i class="fas fa-users-class"></i>
                        <div class="role-item-text">
                            <div class="role-label">Batch</div>
                            <div class="role-value">Batch 61</div>
                        </div>
                    </div>

                    <div class="role-item">
                        <i class="fas fa-star"></i>
                        <div class="role-item-text">
                            <div class="role-label">Leadership</div>
                            <div class="role-value">Founding President of NSA-DIU</div>
                        </div>
                    </div>
                </div>

                <div class="social-links">
                    <h3><i class="fas fa-share-alt"></i> Let's Connect</h3>
                    <div class="social-buttons">
                        <a href="https://github.com/tamal" target="_blank" class="social-btn github">
                            <i class="fab fa-github"></i>
                            <span class="social-tooltip">GitHub</span>
                        </a>
                        <a href="https://linkedin.com/in/tamal" target="_blank" class="social-btn linkedin">
                            <i class="fab fa-linkedin"></i>
                            <span class="social-tooltip">LinkedIn</span>
                        </a>
                        <a href="https://facebook.com/tamal" target="_blank" class="social-btn facebook">
                            <i class="fab fa-facebook"></i>
                            <span class="social-tooltip">Facebook</span>
                        </a>
                        <a href="https://t.me/tamal" target="_blank" class="social-btn telegram">
                            <i class="fab fa-telegram"></i>
                            <span class="social-tooltip">Telegram</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="message-section">
            <i class="fas fa-quote-left quote-icon"></i>
            <h3>Vision & Mission</h3>
            <p>
                This platform represents more than just code—it's a vision to revolutionize how the NSA-DIU community 
                connects, communicates, and thrives. Built with cutting-edge technologies and an unwavering commitment 
                to excellence, this project embodies the spirit of innovation and service that drives our community forward. 
                Every feature, every line of code, is crafted with the goal of making student life easier and more connected.
            </p>
        </div>

        <!-- Achievements Section -->
        <div class="achievements-section">
            <h3><i class="fas fa-trophy"></i> Key Achievements</h3>
            <div class="achievements-grid">
                <div class="achievement-item">
                    <div class="achievement-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <div class="achievement-content">
                        <h4>DONORO Platform</h4>
                        <p>Founded and developed a comprehensive donation management platform serving thousands of users</p>
                    </div>
                </div>
                <div class="achievement-item">
                    <div class="achievement-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="achievement-content">
                        <h4>NSA-DIU Leadership</h4>
                        <p>Founding President, leading and establishing the Narayanganj Student Association at DIU</p>
                    </div>
                </div>
                <div class="achievement-item">
                    <div class="achievement-icon">
                        <i class="fas fa-code-branch"></i>
                    </div>
                    <div class="achievement-content">
                        <h4>Full Stack Developer</h4>
                        <p>Expertise in modern web technologies with multiple successful projects deployed</p>
                    </div>
                </div>
                <div class="achievement-item">
                    <div class="achievement-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <div class="achievement-content">
                        <h4>Innovation Leader</h4>
                        <p>Pioneering digital solutions that transform student community engagement</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tech Stack Section -->
        <div class="tech-stack-section">
            <h3><i class="fas fa-layer-group"></i> Technology Stack</h3>
            <div class="tech-grid">
                <div class="tech-item">
                    <i class="fab fa-laravel"></i>
                    <span>Laravel</span>
                </div>
                <div class="tech-item">
                    <i class="fab fa-react"></i>
                    <span>React</span>
                </div>
                <div class="tech-item">
                    <i class="fab fa-node-js"></i>
                    <span>Node.js</span>
                </div>
                <div class="tech-item">
                    <i class="fab fa-php"></i>
                    <span>PHP</span>
                </div>
                <div class="tech-item">
                    <i class="fab fa-js-square"></i>
                    <span>JavaScript</span>
                </div>
                <div class="tech-item">
                    <i class="fas fa-database"></i>
                    <span>MySQL</span>
                </div>
                <div class="tech-item">
                    <i class="fab fa-git-alt"></i>
                    <span>Git</span>
                </div>
                <div class="tech-item">
                    <i class="fab fa-docker"></i>
                    <span>Docker</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Back to Top Button -->
    <div class="back-to-top" id="backToTop">
        <i class="fas fa-arrow-up"></i>
    </div>

    <script>
        // Theme Toggle Functionality
        const themeToggle = document.getElementById('themeToggle');
        const themeIcon = document.getElementById('themeIcon');
        const htmlElement = document.documentElement;

        // Check for saved theme preference or default to 'light'
        const currentTheme = localStorage.getItem('theme') || 'light';
        htmlElement.setAttribute('data-theme', currentTheme);
        updateThemeIcon(currentTheme);

        themeToggle.addEventListener('click', () => {
            const currentTheme = htmlElement.getAttribute('data-theme');
            const newTheme = currentTheme === 'light' ? 'dark' : 'light';
            
            htmlElement.setAttribute('data-theme', newTheme);
            localStorage.setItem('theme', newTheme);
            updateThemeIcon(newTheme);
        });

        function updateThemeIcon(theme) {
            if (theme === 'dark') {
                themeIcon.classList.remove('fa-moon');
                themeIcon.classList.add('fa-sun');
            } else {
                themeIcon.classList.remove('fa-sun');
                themeIcon.classList.add('fa-moon');
            }
        }

        // Mobile Menu Toggle
        const mobileToggle = document.getElementById('mobileToggle');
        const navMenu = document.getElementById('navMenu');

        mobileToggle.addEventListener('click', () => {
            navMenu.style.display = navMenu.style.display === 'flex' ? 'none' : 'flex';
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!e.target.closest('.nav-container')) {
                navMenu.style.display = '';
            }
        });

        // Back to Top Button
        const backToTop = document.getElementById('backToTop');

        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTop.classList.add('visible');
            } else {
                backToTop.classList.remove('visible');
            }
        });

        backToTop.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>
