<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NSA-DIU Loading</title>
    <style>
        :root {
            --primary-color: #1e90ff;
            --secondary-color: #0066cc;
            --accent-color: #1e90ff;
            --header-bg: #ffffff;
            --bg-light: #f9fafb;
            --text-light: #ffffff;
            --text-dark: #1a1a1a;
            --text-gray: #6b7280;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', 'Segoe UI', Arial, sans-serif;
            height: 100vh;
            overflow: hidden;
            background: linear-gradient(135deg, rgba(30, 144, 255, 0.05) 0%, rgba(0, 102, 204, 0.08) 100%), var(--header-bg);
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .splash-container {
            text-align: center;
            color: var(--text-dark);
            z-index: 10;
            position: relative;
        }

        .logo-container {
            margin-bottom: 30px;
            position: relative;
        }

        .logo {
            width: 120px;
            height: 120px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            backdrop-filter: blur(10px);
            border: 3px solid var(--header-bg);
            box-shadow: 0 10px 40px rgba(30, 144, 255, 0.3);
            animation: logoFloat 3s ease-in-out infinite;
        }

        .main-title {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 10px;
            opacity: 0;
            animation: fadeInUp 1s ease-out 0.5s forwards;
        }

        .subtitle {
            font-size: 1.2rem;
            color: var(--primary-color);
            font-weight: 600;
            margin-bottom: 30px;
            opacity: 0;
            animation: fadeInUp 1s ease-out 1s forwards;
        }

        .university-name {
            font-size: 1rem;
            color: var(--text-gray);
            margin-bottom: 40px;
            opacity: 0;
            animation: fadeInUp 1s ease-out 1.5s forwards;
        }

        .loading-container {
            position: relative;
            width: 300px;
            margin: 0 auto;
        }

        .loading-bar {
            width: 100%;
            height: 4px;
            background: var(--bg-light);
            border-radius: 2px;
            overflow: hidden;
            position: relative;
        }

        .loading-progress {
            height: 100%;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            border-radius: 2px;
            width: 0%;
            animation: loadingProgress 5s ease-in-out forwards;
            box-shadow: 0 0 15px rgba(30, 144, 255, 0.5);
        }

        .loading-text {
            margin-top: 15px;
            font-size: 0.9rem;
            color: var(--text-gray);
            font-weight: 500;
            opacity: 0;
            animation: fadeIn 1s ease-out 2s forwards;
        }

        .dots {
            display: inline-block;
            animation: dotAnimation 1.5s infinite;
        }

        .particles {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
            top: 0;
            left: 0;
        }

        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: var(--accent-color);
            border-radius: 50%;
            animation: particleFloat 4s infinite ease-in-out;
            opacity: 0.6;
        }

        .main-content {
            display: none;
            text-align: center;
            padding: 50px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 0 auto;
        }

        .main-content h1 {
            color: #333;
            margin-bottom: 20px;
            font-size: 2rem;
        }

        .main-content p {
            color: #666;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        @keyframes logoFloat {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes loadingProgress {
            from { width: 0%; }
            to { 
                width: 100%;
                background: var(--accent-color);
            }
        }

        @keyframes dotAnimation {
            0%, 20% { opacity: 0; }
            50% { opacity: 1; }
            100% { opacity: 0; }
        }

        @keyframes particleFloat {
            0% {
                transform: translateY(100vh) rotate(0deg);
                opacity: 0;
            }
            10% {
                opacity: 0.6;
            }
            90% {
                opacity: 0.6;
            }
            100% {
                transform: translateY(-100vh) rotate(360deg);
                opacity: 0;
            }
        }

        @keyframes fadeOut {
            from { opacity: 1; }
            to { opacity: 0; }
        }

        .fade-out {
            animation: fadeOut 0.5s ease-out forwards;
        }

        @media (max-width: 768px) {
            .main-title {
                font-size: 2rem;
            }
            
            .subtitle {
                font-size: 1rem;
            }
            
            .loading-container {
                width: 250px;
            }
        }
    </style>
</head>
<body>
    <!-- Animated particles background -->
    <div class="particles" id="particles"></div>
    
    <!-- Splash Screen -->
    <div class="splash-container" id="splashScreen">
        <div class="logo-container">
            <div class="logo" style="background: none; box-shadow: none; border: none;">
                <img src="{{ asset('images/logo.png') }}" alt="NSA-DIU Logo" style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover; box-shadow: none; border: none; background: none;" />
            </div>
        </div>
        
        <h1 class="main-title">Narayanganj Student Association</h1>
        <p class="subtitle">Daffodil International University</p>
        <p class="university-name">Empowering Students • Building Community • Creating Future</p>
        
        <div class="loading-container">
            <div class="loading-bar">
                <div class="loading-progress"></div>
            </div>
            <p class="loading-text">Loading<span class="dots">...</span></p>
        </div>
    </div>


    <script>
    // Create animated particles
    function createParticles() {
        const particlesContainer = document.getElementById('particles');
        const numberOfParticles = 50;

        for (let i = 0; i < numberOfParticles; i++) {
            const particle = document.createElement('div');
            particle.className = 'particle';
            particle.style.left = Math.random() * 100 + '%';
            particle.style.animationDelay = Math.random() * 4 + 's';
            particle.style.animationDuration = (Math.random() * 3 + 2) + 's';
            particlesContainer.appendChild(particle);
        }
    }

    // Animate dots in loading text
    function animateDots() {
        const dots = document.querySelector('.dots');
        let dotCount = 0;

        const interval = setInterval(() => {
            dotCount = (dotCount + 1) % 4;
            dots.textContent = '.'.repeat(dotCount);
        }, 500);

        return interval;
    }

    // Initialize splash screen
    function initSplashScreen() {
        createParticles();
        const dotInterval = animateDots();

        // Hide splash screen after 6 seconds
        setTimeout(() => {
            const splashScreen = document.getElementById('splashScreen');
            splashScreen.classList.add('fade-out');

            setTimeout(() => {
                clearInterval(dotInterval);
                window.location.href = "{{ route('welcome') }}";
            }, 500);
        }, 6000);
    }

    // Start when page loads
    window.addEventListener('load', initSplashScreen);
</script>

</body>
</html>