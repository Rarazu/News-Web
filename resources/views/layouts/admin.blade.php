<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

<div class="flex min-h-screen">
    {{-- SIDEBAR --}}
    <aside class="w-64 bg-blue-900 text-white flex flex-col">
        {{-- LOGO --}}
        <div class="px-6 py-6 text-xl font-bold border-b border-blue-800">
            Inews Admin
        </div>

        {{-- MENU UTAMA --}}
        <nav class="flex-1 px-4 py-6 space-y-2 text-sm">
            
            <a href="/admin/dashboard"
            class="flex items-center gap-3 px-4 py-3 rounded-lg
            {{ request()->is('admin/dashboard') 
                    ? 'bg-blue-700 font-semibold' 
                    : 'hover:bg-blue-800' }}">
                Dashboard
            </a>

            <a href="/admin/news"
            class="flex items-center gap-3 px-4 py-3 rounded-lg
            {{ request()->is('admin/news*') 
                    ? 'bg-blue-700 font-semibold' 
                    : 'hover:bg-blue-800' }}">
                Kelola Berita
            </a>
        </nav>

        {{-- LOGOUT --}}
        <div class="px-4 mb-4">
            <a href="/logout"
            class="flex items-center gap-3 px-4 py-3 rounded-lg text-sm
                    hover:bg-red-600 hover:text-white transition">
                Logout
            </a>
        </div>

        {{-- FOOTER --}}
        <div class="px-6 py-4 border-t border-blue-800 text-xs text-blue-200">
            © {{ date('Y') }} Portal Instansi
        </div>
    </aside>



    {{-- CONTENT --}}
    <main class="flex-1 p-8">
        @yield('content')
    </main>
</div>

</body>
</html>
