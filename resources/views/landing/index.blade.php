<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracer Study - {{$sekolah->nama_sekolah}}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />
    <style>
        /* General Styles */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f9fafc;
            color: #333;
            overflow-x: hidden;
        }

        /* Header */
        header {
            background-color: #017c87;
            color: #fff;
            padding: 15px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        header .logo {
            font-size: 1.5rem;
            font-weight: bold;
            animation: fadeInDown 1s ease-in-out;
        }

        header .btn {
            font-size: 0.9rem;
            animation: fadeInDown 1s ease-in-out;
        }

        /* Hero Section */
        .hero-section {
            padding: 150px 20px;
            background: linear-gradient(135deg, #017c87, #00b4cc);
            text-align: center;
            color: #fff;
            position: relative;
            overflow: hidden;
        }

        .hero-section h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 20px;
            animation: fadeInUp 1s ease-in-out;
        }

        .hero-section p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            animation: fadeInUp 1.5s ease-in-out;
        }

        .hero-section .btn-primary {
            padding: 12px 40px;
            font-size: 1rem;
            border-radius: 30px;
            background-color: #fff;
            color: #017c87;
            border: none;
            transition: all 0.3s ease;
            animation: fadeInUp 2s ease-in-out;
        }

        .hero-section .btn-primary:hover {
            background-color: #017c87;
            color: #fff;
            transform: translateY(-5px);
        }

        /* Features Section */
        .features-section {
            padding: 80px 20px;
            background-color: #fff;
        }

        .features-section .feature-box {
            text-align: center;
            padding: 30px;
            border-radius: 15px;
            background-color: #f9fafc;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            margin-bottom: 20px;
        }

        .features-section .feature-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
        }

        .features-section .feature-box i {
            font-size: 2.5rem;
            color: #017c87;
            margin-bottom: 15px;
        }

        .features-section .feature-box img {
            width: 60px; /* Sesuaikan ukuran logo */
            height: auto;
            margin-bottom: 15px;
        }

        .features-section .feature-box h3 {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .features-section .feature-box p {
            font-size: 1rem;
            color: #555;
        }

        /* Footer */
        footer {
            background-color: #017c87;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            font-size: 1rem;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>

    <!-- Header -->
    <header class="d-flex justify-content-between align-items-center px-4">
        <div class="logo">Tracer Study</div>
        <!-- <div>
            <a href="/login" class="btn btn-light me-2">Login</a>
            <a href="/register" class="btn btn-outline-light">Register</a>
        </div> -->
    </header>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1>Selamat Datang di <br> Tracer Study {{$sekolah->nama_sekolah}}</h1>
            <p>Bangun Masa Depan Bersama melalui Tracer Study</p>
            <a href="/login" class="btn btn-primary">Login</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section" id="features">
        <div class="container">
            <div class="row g-4">
                <!-- Feature 1 -->
                <div class="col-md-4">
                    <div class="feature-box">
                        
                        <h3>Lebih dari 70% Berkarier Sesuai Bidang</h3>
                        <p>Sebagian besar alumni bekerja di bidang yang sesuai dengan jurusan mereka di kampus, membuktikan efektivitas pendidikan tinggi.</p>
                    </div>
                </div>
                <!-- Feature 2 -->
                <div class="col-md-4">
                    <div class="feature-box">
                        
                        <h3>Koneksi Alumni Terungkap</h3>
                        <p>Alumni yang sukses di bidang tertentu saling terhubung atau bahkan bekerja di perusahaan yang sama!</p>
                    </div>
                </div>
                <!-- Feature 3 -->
                <div class="col-md-4">
                    <div class="feature-box">
                        
                        <h3>Berperan dalam Prediksi Tren Karier</h3>
                        <p>Memprediksi tren karier masa depan dengan menganalisis bidang pekerjaan alumni.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; {{$sekolah->nama_sekolah}}</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>