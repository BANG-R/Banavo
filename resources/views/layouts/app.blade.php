<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Banavo - Perusahaan kontraktor premium spesialis konstruksi gudang, kolam renang mewah, rumah eksklusif, dan ACP panel. 10+ tahun pengalaman, 100+ proyek selesai.">
    <meta name="keywords" content="kontraktor, konstruksi, gudang, kolam renang, rumah eksklusif, ACP panel, aluminium composite panel">
    <meta name="author" content="Banavo">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph -->
    <meta property="og:title" content="Banavo — Premium Construction Company">
    <meta property="og:description" content="Membangun Standar Baru dalam Konstruksi Modern. Spesialis Gudang, Kolam Renang, Hunian Eksklusif & ACP Panel.">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="id_ID">
    
    <title>Banavo — Premium Construction Company</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @yield('content')

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            if (typeof lucide !== 'undefined') {
                lucide.createIcons();
            }
        });
    </script>
</body>
</html>
