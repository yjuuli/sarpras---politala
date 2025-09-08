<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $name ?? 'Dashboard' }}</title>
    <!-- Fonts & Tailwind CSS -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>
<body class="bg-black">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-72 bg-[#36B388] pt-8 pb-8 flex flex-col min-h-screen border-r-2 border-blue-300">
            <div class="flex flex-col gap-10">
                <div class="flex items-center gap-3 px-8">
                    <svg class="w-7 h-7 text-white" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><rect width="20" height="20" x="2" y="2" rx="4" fill="none" stroke="white" stroke-width="2"/><path d="M7 9h10M7 13h6" stroke="white" stroke-width="2" stroke-linecap="round"/></svg>
                    <span class="text-white text-lg font-bold font-instrument-sans tracking-wide">SIMPERSITE</span>
                </div>
                <nav class="flex flex-col gap-3 px-4">
                    <a href="/"
                    class="flex items-center gap-3 rounded-xl py-3 px-4 font-bold transition transform
                            {{ Request::is('/') ? 'bg-white text-[#292929] shadow' : 'text-white hover:bg-[#2fa779] hover:translate-x-1' }}"
                    {{ Request::is('/') ? 'aria-current=page' : '' }}>
                        <svg class="w-6 h-6 {{ Request::is('/') ? 'text-[#292929]' : 'text-white' }}" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M11.293 3.293a1 1 0 0 1 1.414 0l6 6 2 2a1 1 0 0 1-1.414 1.414L19 12.414V19a2 2 0 0 1-2 2h-3a1 1 0 0 1-1-1v-3h-2v3a1 1 0 0 1-1 1H7a2 2 0 0 1-2-2v-6.586l-.293.293a1 1 0 0 1-1.414-1.414l2-2 6-6Z"/>
                        </svg>
                        Dashboard
                    </a>

                    <a href="/Peminjam"
                    class="flex items-center gap-3 py-3 px-4 rounded-xl font-bold transition transform
                            {{ Request::is('Peminjam') || Request::is('Peminjam/*') ? 'bg-white text-[#292929] shadow' : 'text-white hover:bg-[#2fa779] hover:translate-x-1' }}"
                    {{ (Request::is('Peminjam') || Request::is('Peminjam/*')) ? 'aria-current=page' : '' }}>
                        <svg class="w-6 h-6 {{ (Request::is('Peminjam') || Request::is('Peminjam/*')) ? 'text-[#292929]' : 'text-white' }}" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                             <rect x="3" y="7" width="18" height="13" rx="2"/>
                             <path d="M8 7V5a4 4 0 1 1 8 0v2"/>
                         </svg>
                        Peminjam
                    </a>
                </nav>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 bg-[#eaf6fa] p-12">
            <div class="flex justify-between items-start mb-8">
                <div>
                    <h1 class="text-4xl font-bold text-[#343434] mb-2">{{ $name ?? '' }}</h1>
                </div>
                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Profile" class="w-12 h-12 rounded-full object-cover shadow">
            </div>

            <!-- Page Content -->
            <div class="grid grid-cols-1 gap-6">
                @yield('content')
            </div>
        </main>
    </div>
</body>
</html>
