@extends('layouts.app')

@section('content')

<!-- ============================================================
     NAVBAR
     ============================================================ -->
<nav class="navbar" id="navbar">
    <div class="navbar-inner">
        <a href="/" class="navbar-logo">
            <img src="{{ asset('images/logo.png') }}" alt="Banavo Logo">
            <span class="navbar-logo-text">Banavo</span>
        </a>

        <div class="navbar-menu" id="navbarMenu">
            <ul class="navbar-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#layanan">Layanan</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#tentang">Tentang</a></li>
                <li><a href="#kontak">Kontak</a></li>
            </ul>
            <div class="navbar-cta">
                <a href="#kontak" class="btn btn-primary btn-sm">
                    <i data-lucide="message-circle" style="width:16px;height:16px;"></i>
                    Konsultasi Gratis
                </a>
            </div>
        </div>

        <button class="navbar-toggle" id="navbarToggle" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</nav>


<!-- ============================================================
     HERO SECTION
     ============================================================ -->
<section class="hero" id="home">
    <div class="hero-bg">
        <img src="{{ asset('images/hero-bg.png') }}" alt="Modern construction project" loading="eager">
    </div>
    <div class="hero-overlay"></div>
    <div class="hero-pattern"></div>

    <div class="hero-content">
        <div class="hero-badge">
            <span class="pulse-dot"></span>
            Premium Construction Company
        </div>
        <h1>
            Membangun <span class="accent-word">Standar Baru</span> dalam Konstruksi Modern
        </h1>
        <p class="hero-subtitle">
            Spesialis Gudang, Kolam Renang, Hunian Eksklusif & ACP Panel — dengan presisi teknik dan estetika tinggi.
        </p>
        <div class="hero-actions">
            <a href="#kontak" class="btn btn-primary btn-lg">
                <i data-lucide="phone" style="width:20px;height:20px;"></i>
                Konsultasi Gratis
            </a>
            <a href="#portfolio" class="btn btn-secondary btn-lg">
                <i data-lucide="layout-grid" style="width:20px;height:20px;"></i>
                Lihat Portfolio
            </a>
        </div>
    </div>

    <div class="hero-floating-stats">
        <div class="hero-float-card">
            <div class="number">10+</div>
            <div class="label">Tahun Pengalaman</div>
        </div>
        <div class="hero-float-card">
            <div class="number">100+</div>
            <div class="label">Proyek Selesai</div>
        </div>
    </div>

    <div class="hero-scroll">
        <span>Scroll</span>
        <div class="scroll-line"></div>
    </div>
</section>


<!-- ============================================================
     TRUST INDICATORS
     ============================================================ -->
<section class="trust-section">
    <div class="container">
        <div class="trust-grid">
            <div class="trust-item reveal">
                <div class="trust-icon">
                    <i data-lucide="calendar-check"></i>
                </div>
                <div class="trust-number" data-count="10">0</div>
                <div class="trust-label">Tahun Pengalaman</div>
            </div>
            <div class="trust-item reveal reveal-delay-1">
                <div class="trust-icon">
                    <i data-lucide="building-2"></i>
                </div>
                <div class="trust-number" data-count="100">0</div>
                <div class="trust-label">Proyek Selesai</div>
            </div>
            <div class="trust-item reveal reveal-delay-2">
                <div class="trust-icon">
                    <i data-lucide="shield-check"></i>
                </div>
                <div class="trust-number" data-count="100">0</div>
                <div class="trust-label">Garansi Kualitas (%)</div>
            </div>
        </div>
    </div>
</section>


<!-- ============================================================
     LAYANAN (SERVICES)
     ============================================================ -->
<section class="section services-section" id="layanan">
    <div class="container">
        <div class="section-header reveal">
            <div class="section-label">Layanan Kami</div>
            <h2>Solusi Konstruksi <span class="text-gradient">Premium</span></h2>
            <p>Kami menghadirkan layanan konstruksi terbaik dengan standar internasional untuk setiap proyek Anda.</p>
        </div>

        <div class="services-grid">
            <!-- Gudang -->
            <div class="service-card reveal reveal-delay-1">
                <div class="service-card-img">
                    <img src="{{ asset('images/service-gudang.png') }}" alt="Konstruksi Gudang Modern" loading="lazy">
                </div>
                <div class="service-card-overlay"></div>
                <div class="service-card-content">
                    <div class="service-card-icon">
                        <i data-lucide="warehouse" style="width:24px;height:24px;"></i>
                    </div>
                    <h3>Gudang</h3>
                    <p>Konstruksi gudang skala besar dengan struktur baja premium, efisien, dan tahan lama untuk kebutuhan industri modern.</p>
                </div>
                <div class="service-card-arrow">
                    <i data-lucide="arrow-up-right" style="width:18px;height:18px;"></i>
                </div>
            </div>

            <!-- Kolam Renang -->
            <div class="service-card reveal reveal-delay-2">
                <div class="service-card-img">
                    <img src="{{ asset('images/service-kolam.png') }}" alt="Kolam Renang Mewah" loading="lazy">
                </div>
                <div class="service-card-overlay"></div>
                <div class="service-card-content">
                    <div class="service-card-icon">
                        <i data-lucide="waves" style="width:24px;height:24px;"></i>
                    </div>
                    <h3>Kolam Renang</h3>
                    <p>Desain dan pembangunan kolam renang mewah dengan sistem filtrasi canggih dan finishing premium.</p>
                </div>
                <div class="service-card-arrow">
                    <i data-lucide="arrow-up-right" style="width:18px;height:18px;"></i>
                </div>
            </div>

            <!-- Home Exclusive -->
            <div class="service-card reveal reveal-delay-3">
                <div class="service-card-img">
                    <img src="{{ asset('images/service-rumah.png') }}" alt="Rumah Eksklusif" loading="lazy">
                </div>
                <div class="service-card-overlay"></div>
                <div class="service-card-content">
                    <div class="service-card-icon">
                        <i data-lucide="home" style="width:24px;height:24px;"></i>
                    </div>
                    <h3>Home Exclusive</h3>
                    <p>Hunian eksklusif dengan arsitektur modern, material premium, dan detail yang dirancang sempurna.</p>
                </div>
                <div class="service-card-arrow">
                    <i data-lucide="arrow-up-right" style="width:18px;height:18px;"></i>
                </div>
            </div>

            <!-- ACP Panel -->
            <div class="service-card reveal reveal-delay-4">
                <div class="service-card-img">
                    <img src="{{ asset('images/service-acp.png') }}" alt="ACP Panel" loading="lazy">
                </div>
                <div class="service-card-overlay"></div>
                <div class="service-card-content">
                    <div class="service-card-icon">
                        <i data-lucide="panel-top" style="width:24px;height:24px;"></i>
                    </div>
                    <h3>ACP Panel</h3>
                    <p>Pemasangan Aluminium Composite Panel untuk fasad gedung modern dengan tampilan elegan dan profesional.</p>
                </div>
                <div class="service-card-arrow">
                    <i data-lucide="arrow-up-right" style="width:18px;height:18px;"></i>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================================================
     PORTFOLIO
     ============================================================ -->
<section class="section portfolio-section" id="portfolio">
    <div class="container">
        <div class="section-header reveal">
            <div class="section-label">Portfolio</div>
            <h2>Proyek <span class="text-gradient">Terbaik</span> Kami</h2>
            <p>Setiap proyek mencerminkan komitmen kami terhadap kualitas, presisi, dan keunggulan desain.</p>
        </div>

        <div class="portfolio-filters reveal">
            <button class="filter-btn active" data-filter="all">Semua</button>
            <button class="filter-btn" data-filter="gudang">Gudang</button>
            <button class="filter-btn" data-filter="kolam">Kolam Renang</button>
            <button class="filter-btn" data-filter="rumah">Rumah</button>
            <button class="filter-btn" data-filter="acp">ACP</button>
        </div>

        <div class="portfolio-grid" id="portfolioGrid">
            <!-- Portfolio Item 1 -->
            <div class="portfolio-card reveal" data-category="gudang">
                <img src="{{ asset('images/portfolio-gudang1.png') }}" alt="Gudang Modern Jakarta" loading="lazy">
                <span class="portfolio-card-category">Gudang</span>
                <div class="portfolio-card-overlay">
                    <h4>Gudang Logistik Premium</h4>
                    <div class="portfolio-card-meta">
                        <span><i data-lucide="map-pin" style="width:14px;height:14px;"></i> Jakarta</span>
                        <span><i data-lucide="calendar" style="width:14px;height:14px;"></i> 2024</span>
                    </div>
                </div>
            </div>

            <!-- Portfolio Item 2 -->
            <div class="portfolio-card reveal reveal-delay-1" data-category="kolam">
                <img src="{{ asset('images/portfolio-kolam1.png') }}" alt="Kolam Renang Mewah Bali" loading="lazy">
                <span class="portfolio-card-category">Kolam Renang</span>
                <div class="portfolio-card-overlay">
                    <h4>Infinity Pool Resort</h4>
                    <div class="portfolio-card-meta">
                        <span><i data-lucide="map-pin" style="width:14px;height:14px;"></i> Bali</span>
                        <span><i data-lucide="calendar" style="width:14px;height:14px;"></i> 2024</span>
                    </div>
                </div>
            </div>

            <!-- Portfolio Item 3 -->
            <div class="portfolio-card reveal reveal-delay-2" data-category="rumah">
                <img src="{{ asset('images/service-rumah.png') }}" alt="Rumah Eksklusif Bandung" loading="lazy">
                <span class="portfolio-card-category">Rumah</span>
                <div class="portfolio-card-overlay">
                    <h4>Villa Modern Minimalis</h4>
                    <div class="portfolio-card-meta">
                        <span><i data-lucide="map-pin" style="width:14px;height:14px;"></i> Bandung</span>
                        <span><i data-lucide="calendar" style="width:14px;height:14px;"></i> 2023</span>
                    </div>
                </div>
            </div>

            <!-- Portfolio Item 4 -->
            <div class="portfolio-card reveal" data-category="acp">
                <img src="{{ asset('images/service-acp.png') }}" alt="ACP Panel Surabaya" loading="lazy">
                <span class="portfolio-card-category">ACP</span>
                <div class="portfolio-card-overlay">
                    <h4>Fasad Gedung Perkantoran</h4>
                    <div class="portfolio-card-meta">
                        <span><i data-lucide="map-pin" style="width:14px;height:14px;"></i> Surabaya</span>
                        <span><i data-lucide="calendar" style="width:14px;height:14px;"></i> 2024</span>
                    </div>
                </div>
            </div>

            <!-- Portfolio Item 5 -->
            <div class="portfolio-card reveal reveal-delay-1" data-category="gudang">
                <img src="{{ asset('images/service-gudang.png') }}" alt="Gudang Distribusi Semarang" loading="lazy">
                <span class="portfolio-card-category">Gudang</span>
                <div class="portfolio-card-overlay">
                    <h4>Gudang Distribusi Nasional</h4>
                    <div class="portfolio-card-meta">
                        <span><i data-lucide="map-pin" style="width:14px;height:14px;"></i> Semarang</span>
                        <span><i data-lucide="calendar" style="width:14px;height:14px;"></i> 2023</span>
                    </div>
                </div>
            </div>

            <!-- Portfolio Item 6 -->
            <div class="portfolio-card reveal reveal-delay-2" data-category="kolam">
                <img src="{{ asset('images/service-kolam.png') }}" alt="Kolam Renang Private Jakarta" loading="lazy">
                <span class="portfolio-card-category">Kolam Renang</span>
                <div class="portfolio-card-overlay">
                    <h4>Private Pool Residence</h4>
                    <div class="portfolio-card-meta">
                        <span><i data-lucide="map-pin" style="width:14px;height:14px;"></i> Jakarta Selatan</span>
                        <span><i data-lucide="calendar" style="width:14px;height:14px;"></i> 2023</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================================================
     TESTIMONIALS
     ============================================================ -->
<section class="section testimonials-section" id="tentang">
    <div class="container">
        <div class="section-header reveal">
            <div class="section-label">Testimoni</div>
            <h2>Apa Kata <span class="text-gradient">Klien Kami</span></h2>
            <p>Kepuasan klien adalah prioritas utama kami dalam setiap proyek yang dikerjakan.</p>
        </div>

        <div class="testimonials-grid">
            <!-- Testimonial 1 -->
            <div class="testimonial-card reveal reveal-delay-1">
                <div class="testimonial-quote-icon">
                    <i data-lucide="quote" style="width:24px;height:24px;"></i>
                </div>
                <div class="testimonial-stars">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                </div>
                <p class="testimonial-text">
                    "Banavo membangun gudang kami dengan presisi luar biasa. Kualitas material dan ketepatan waktu pengerjaan sangat profesional. Sangat merekomendasikan untuk proyek skala besar."
                </p>
                <div class="testimonial-author">
                    <div class="testimonial-avatar">AW</div>
                    <div class="testimonial-author-info">
                        <h4>Ahmad Wijaya</h4>
                        <p>Direktur, PT Logistik Nusantara</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="testimonial-card reveal reveal-delay-2">
                <div class="testimonial-quote-icon">
                    <i data-lucide="quote" style="width:24px;height:24px;"></i>
                </div>
                <div class="testimonial-stars">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                </div>
                <p class="testimonial-text">
                    "Kolam renang yang dibangun Banavo melebihi ekspektasi kami. Desainnya elegan, sistem filtrasi bekerja sempurna, dan hasilnya benar-benar mewah seperti di resort bintang lima."
                </p>
                <div class="testimonial-author">
                    <div class="testimonial-avatar">SR</div>
                    <div class="testimonial-author-info">
                        <h4>Sarah Rahmawati</h4>
                        <p>Owner, Villa Serenity Bali</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="testimonial-card reveal reveal-delay-3">
                <div class="testimonial-quote-icon">
                    <i data-lucide="quote" style="width:24px;height:24px;"></i>
                </div>
                <div class="testimonial-stars">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                </div>
                <p class="testimonial-text">
                    "Pemasangan ACP di gedung kantor kami oleh Banavo benar-benar mengubah tampilan keseluruhan. Hasilnya rapi, modern, dan sangat impresif. Tim mereka sangat terampil."
                </p>
                <div class="testimonial-author">
                    <div class="testimonial-avatar">BP</div>
                    <div class="testimonial-author-info">
                        <h4>Budi Prasetyo</h4>
                        <p>CEO, PT Maju Bersama</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================================================
     WHY CHOOSE US (KEUNGGULAN)
     ============================================================ -->
<section class="section advantages-section">
    <div class="container">
        <div class="section-header reveal">
            <div class="section-label">Keunggulan</div>
            <h2>Mengapa Memilih <span class="text-gradient">Banavo</span></h2>
            <p>Kami menggabungkan pengalaman, keahlian, dan dedikasi untuk menghadirkan hasil terbaik.</p>
        </div>

        <div class="advantages-grid">
            <div class="advantage-item reveal reveal-delay-1">
                <div class="advantage-icon">
                    <i data-lucide="ruler" style="width:32px;height:32px;"></i>
                </div>
                <h3>Precision Engineering</h3>
                <p>Setiap detail diukur dan direncanakan dengan presisi tinggi menggunakan teknologi terkini.</p>
            </div>

            <div class="advantage-item reveal reveal-delay-2">
                <div class="advantage-icon">
                    <i data-lucide="users" style="width:32px;height:32px;"></i>
                </div>
                <h3>Tim Profesional</h3>
                <p>Tenaga ahli berpengalaman dengan sertifikasi dan pelatihan standar internasional.</p>
            </div>

            <div class="advantage-item reveal reveal-delay-3">
                <div class="advantage-icon">
                    <i data-lucide="clock" style="width:32px;height:32px;"></i>
                </div>
                <h3>Tepat Waktu</h3>
                <p>Komitmen penyelesaian proyek sesuai timeline yang telah disepakati tanpa kompromi kualitas.</p>
            </div>

            <div class="advantage-item reveal reveal-delay-4">
                <div class="advantage-icon">
                    <i data-lucide="gem" style="width:32px;height:32px;"></i>
                </div>
                <h3>Material Berkualitas</h3>
                <p>Hanya menggunakan material grade-A dari supplier terpercaya untuk hasil terbaik.</p>
            </div>
        </div>
    </div>
</section>


<!-- ============================================================
     CALL TO ACTION
     ============================================================ -->
<section class="cta-section" id="kontak">
    <div class="cta-pattern"></div>
    <div class="cta-glow"></div>
    <div class="container">
        <div class="cta-content reveal">
            <h2>Siap Memulai Proyek Anda?</h2>
            <p>Konsultasikan kebutuhan konstruksi Anda dengan tim ahli kami. Gratis dan tanpa komitmen.</p>
            <div class="cta-actions">
                <a href="tel:+6281234567890" class="btn btn-white btn-lg">
                    <i data-lucide="phone" style="width:20px;height:20px;"></i>
                    Hubungi Sekarang
                </a>
                <a href="https://wa.me/6281234567890" target="_blank" class="btn btn-whatsapp btn-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                    WhatsApp
                </a>
            </div>
        </div>
    </div>
</section>


<!-- ============================================================
     FOOTER
     ============================================================ -->
<footer class="footer">
    <div class="container">
        <div class="footer-grid">
            <!-- Brand -->
            <div>
                <div class="footer-logo">
                    <img src="{{ asset('images/logo.png') }}" alt="Banavo Logo">
                    <span class="footer-logo-text">Banavo</span>
                </div>
                <p class="footer-brand-text">
                    Perusahaan kontraktor premium yang berdedikasi membangun standar baru dalam konstruksi modern. Melayani proyek gudang, kolam renang, hunian eksklusif, dan ACP panel.
                </p>
                <div class="footer-social">
                    <a href="#" aria-label="Instagram"><i data-lucide="instagram" style="width:18px;height:18px;"></i></a>
                    <a href="#" aria-label="Facebook"><i data-lucide="facebook" style="width:18px;height:18px;"></i></a>
                    <a href="#" aria-label="LinkedIn"><i data-lucide="linkedin" style="width:18px;height:18px;"></i></a>
                    <a href="#" aria-label="Youtube"><i data-lucide="youtube" style="width:18px;height:18px;"></i></a>
                </div>
            </div>

            <!-- Navigation -->
            <div>
                <h4>Navigasi</h4>
                <div class="footer-links">
                    <a href="#home">Home</a>
                    <a href="#layanan">Layanan</a>
                    <a href="#portfolio">Portfolio</a>
                    <a href="#tentang">Tentang Kami</a>
                    <a href="#kontak">Kontak</a>
                </div>
            </div>

            <!-- Services -->
            <div>
                <h4>Layanan</h4>
                <div class="footer-links">
                    <a href="#">Konstruksi Gudang</a>
                    <a href="#">Kolam Renang</a>
                    <a href="#">Home Exclusive</a>
                    <a href="#">ACP Panel</a>
                    <a href="#">Renovasi</a>
                </div>
            </div>

            <!-- Contact -->
            <div>
                <h4>Kontak</h4>
                <div class="footer-contact-item">
                    <i data-lucide="map-pin"></i>
                    <span>Jl. Konstruksi Premium No. 88, Jakarta Selatan, Indonesia 12345</span>
                </div>
                <div class="footer-contact-item">
                    <i data-lucide="phone"></i>
                    <span>+62 812 3456 7890</span>
                </div>
                <div class="footer-contact-item">
                    <i data-lucide="mail"></i>
                    <span>info@banavo.co.id</span>
                </div>
                <div class="footer-contact-item">
                    <i data-lucide="clock"></i>
                    <span>Sen - Sab: 08:00 - 17:00 WIB</span>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <span>&copy; {{ date('Y') }} Banavo. All rights reserved.</span>
            <span>Crafted with precision & passion</span>
        </div>
    </div>
</footer>

@endsection
