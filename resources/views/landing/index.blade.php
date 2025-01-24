<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracer Study - SMK Antartika 1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* General Styles */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f9fafc;
            color: #333;
        }

        /* Header */
        header {
            background-color: #017c87;
            color: #fff;
            padding: 15px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        header .logo {
            font-size: 1.5rem;
            font-weight: bold;
        }

        header .btn {
            font-size: 0.9rem;
        }

        /* Hero Section */
        .hero-section {
            padding: 100px 20px;
            background: linear-gradient(120deg, #eef9fc, #ffffff);
            text-align: center;
        }

        .hero-section h1 {
            font-size: 2.5rem;
            color: #017c87;
        }

        .hero-section p {
            font-size: 1rem;
            color: #555;
            margin-top: 15px;
            line-height: 1.6;
        }

        .hero-section .btn-primary {
            margin-top: 20px;
            padding: 10px 30px;
            font-size: 1rem;
            border-radius: 30px;
        }

        /* Features Section */
        .features-section {
            padding: 60px 20px;
        }

        .features-section .feature-box {
            text-align: center;
            padding: 20px;
        }

        .features-section .feature-box i {
            font-size: 2.5rem;
            color: #017c87;
            margin-bottom: 10px;
        }

        .features-section .feature-box h3 {
            font-size: 1.2rem;
            margin-top: 10px;
        }

        /* Footer */
        footer {
            background-color: #017c87;
            color: #fff;
            text-align: center;
            padding: 15px 0;
            margin-top: 40px;
            font-size: 0.9rem;
        }
    </style>
</head>

<body>

    <!-- Header -->
    <header class="d-flex justify-content-between align-items-center px-4">
        <div class="logo">Tracer Study</div>
        <div>
            <a href="/login" class="btn btn-light me-2">Login</a>
            <a href="/register" class="btn btn-outline-light">Register</a>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1>Selamat Datang di <br> <span style="color: #017c87;">Tracer Study SMK Antartika 1</span></h1>
            <p>Tracer Study membantu melacak jejak lulusan kami dan meningkatkan kualitas pendidikan dengan survei data alumni yang terkini dan relevan.</p>
            <a href="#features" class="btn btn-primary">Jelajahi Fitur</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section" id="features">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-box">
                        <i class="fas fa-database"></i>
                        <h3>Data Alumni</h3>
                        <p>Kelola dan akses data alumni dengan mudah.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <i class="fas fa-chart-bar"></i>
                        <h3>Analisis Statistik</h3>
                        <p>Visualisasi data untuk mendukung pengambilan keputusan.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <i class="fas fa-users"></i>
                        <h3>Jaringan Alumni</h3>
                        <p>Perkuat koneksi antaralumni melalui platform kami.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 SMK Antartika 1. All Rights Reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
