<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Not Found | Buffer Zone Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#0D1B22] text-white font-['Inter'] antialiased min-h-screen flex items-center justify-center">
    <div class="text-center p-8 max-w-lg w-full">
        <div class="w-24 h-24 rounded-3xl bg-[#1E3040]/50 border border-[#1E3040] flex items-center justify-center mx-auto mb-8 shadow-2xl">
            <i class="fas fa-terminal text-[#D31111] text-4xl"></i>
        </div>
        
        <h1 class="text-6xl font-black mb-4 font-['Montserrat'] tracking-tight">404</h1>
        <h2 class="text-xl font-bold text-[#8BA4B4] mb-4">Command Sequence Not Found</h2>
        <p class="text-[#4A6070] text-sm mb-10 leading-relaxed font-medium">The administrative resource or portal page you are looking for has been moved, restricted, or does not exist.</p>
        
        <a href="{{ route('admin.dashboard') }}" class="inline-flex items-center gap-3 px-8 py-4 rounded-xl bg-[#D31111] text-white font-bold tracking-wider uppercase text-xs hover:bg-[#EE2A2A] transition-all hover:scale-105 shadow-[0_0_20px_rgba(211,17,17,0.4)]">
            <i class="fas fa-arrow-left"></i> Return to Dashboard
        </a>
    </div>
</body>
</html>
