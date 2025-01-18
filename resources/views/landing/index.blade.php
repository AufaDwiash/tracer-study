<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracer Study - SMK Antartika 1 </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/sneat-ui/assets/css/sneat.css">
    <style>
        /* Custom Styles for Sneat */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f6fa;
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(120deg, #eef9fc, #ffffff);
            padding: 80px 0;
            position: relative;
        }

        .hero-section::after {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 300px;
            height: 300px;
            background: linear-gradient(45deg, #017c87, #01a2c6);
            border-radius: 50%;
            opacity: 0.2;
        }

        .hero-text {
            z-index: 1;
        }

        .hero-text h1 {
            font-size: 3rem;
            color: #017c87;
        }

        .hero-text h1 span {
            background-color: #017c87;
            color: #ffffff;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .hero-text p {
            font-size: 1.1rem;
            margin: 20px 0;
            color: #6c757d;
        }

        .hero-icons {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .hero-icon {
            background-color: #f5f6fa;
            border: 2px solid #017c87;
            border-radius: 50%;
            width: 100px;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #017c87;
            font-size: 2rem;
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        .hero-icon:hover {
            transform: scale(1.1);
            background-color: #017c87;
            color: #fff;
        }

        /* Features Section */
        .features-section {
            padding: 60px 0;
            background-color: #ffffff;
        }

        .feature-box {
            text-align: center;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .feature-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .feature-box i {
            font-size: 3rem;
            color: #017c87;
            margin-bottom: 15px;
        }

        /* Footer */
        footer {
            background-color: #017c87;
            color: #ffffff;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>

<body>

    <!-- Header -->
    <header class="bg-white shadow-sm sticky-top">
        <div class="container d-flex align-items-center justify-content-between py-3">
            <div class="logo d-flex align-items-center">
                <span class="ms-3 fw-bold text-primary" style="white-space: nowrap;">Tracer Study</span>
            </div>

            <!-- <nav>
                <ul class="list-unstyled d-flex mb-0">
                    <li><a href="#" class="text-dark px-3">Beranda</a></li>
                    <li><a href="#" class="text-dark px-3">Berita</a></li>
                    <li><a href="#" class="text-dark px-3">Statistik</a></li>
                    <li><a href="#" class="text-dark px-3">Publikasi</a></li>
                    <li><a href="#" class="text-dark px-3">FAQ</a></li>
                    <li><a href="#" class="text-dark px-3">Isi Kuesioner</a></li>
                </ul>
            </nav> -->
            <a href="/login" class="btn btn-primary rounded-pill" style="margin-left: 920px;">Login</a>
            <a href="/register" class="btn btn-primary rounded-pill" style="margin-left: 10px;">Register</a>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container text-center">
            <div class="hero-text">
                <h1>Selamat Datang! <span>Tracer Study</span></h1>
                <p>Tracer Study adalah sebuah studi atau survei yang dilakukan oleh lembaga pendidikan, seperti universitas atau sekolah, untuk melacak jejak lulusan mereka setelah menyelesaikan pendidikan. Tracer study sering juga disebut dengan istilah graduate survey atau studi pelacakan alumni.</p>
                <!-- <a href="#" class="btn btn-primary btn-lg rounded-pill mt-4">Isi Kuesioner</a> -->
            </div>
            <div class="hero-icons mt-5">
                <div class="hero-icon">
                    <i class="fas fa-database"></i>
                </div>
                <div class="hero-icon">
                    <i class="fas fa-chart-bar"></i>
                </div>
                <div class="hero-icon">
                    <i class="fas fa-users"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <!-- <section class="features-section">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4 mb-4">
                    <div class="feature-box">
                        <i class="fas fa-database"></i>
                        <h5 class="fw-bold mt-3">Data Alumni</h5>
                        <p>Kumpulkan informasi alumni untuk memetakan pengaruh pendidikan terhadap karier mereka.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature-box">
                        <i class="fas fa-chart-bar"></i>
                        <h5 class="fw-bold mt-3">Statistik</h5>
                        <p>Analisis data alumni menggunakan grafik dan laporan terintegrasi.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature-box">
                        <i class="fas fa-users"></i>
                        <h5 class="fw-bold mt-3">Jaringan Alumni</h5>
                        <p>Perkuat kolaborasi alumni melalui kegiatan tracer study.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Footer -->
    <footer>
        <p>&copy; 2025.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>