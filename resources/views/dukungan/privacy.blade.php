@extends('layout') {{-- Jika menggunakan Laravel --}}

@section('title', 'Kebijakan Privasi')
@section('description', 'Kebijakan Privasi - Math_Dosman')

@section('content')
<div class="container mx-auto p-6 max-w-2xl">
    <h1 class="text-3xl font-bold mb-4 text-indigo-800 text-center">Kebijakan Privasi</h1>

    <p class="mb-4 text-justify">Math_Dosman menghargai privasi Anda dan berkomitmen untuk melindungi informasi pribadi Anda. Kebijakan privasi ini menjelaskan bagaimana kami mengumpulkan, menggunakan, dan melindungi informasi Anda saat Anda menggunakan situs web kami.</p>

    <h2 class="text-2xl font-semibold mb-2 text-indigo-700">Informasi yang Kami Kumpulkan</h2>

    <p class="mb-4 text-justify">Kami dapat mengumpulkan informasi berikut dari Anda:</p>

    <ul class="list-disc list-inside mb-4 text-justify">
        <li><strong>Informasi Identifikasi Pribadi (IIP):</strong> Seperti nama dan alamat email Anda, yang Anda berikan saat berlangganan buletin atau menghubungi kami.</li>
        <li><strong>Data Penggunaan:</strong> Informasi tentang bagaimana Anda menggunakan situs web kami, seperti halaman yang Anda kunjungi dan waktu yang Anda habiskan di setiap halaman.</li>
        <li><strong>Cookie:</strong> Kami menggunakan cookie untuk meningkatkan pengalaman Anda di situs web kami. Cookie adalah file kecil yang disimpan di perangkat Anda yang memungkinkan kami melacak preferensi Anda dan aktivitas penjelajahan.</li>
    </ul>

    <h2 class="text-2xl font-semibold mb-2 text-indigo-700">Bagaimana Kami Menggunakan Informasi Anda</h2>

    <p class="mb-4 text-justify">Kami menggunakan informasi Anda untuk tujuan berikut:</p>

    <ul class="list-disc list-inside mb-4 text-justify">
        <li>Untuk menyediakan dan memelihara situs web kami.</li>
        <li>Untuk mengirimkan buletin dan informasi lain yang Anda minta.</li>
        <li>Untuk meningkatkan situs web kami dan mengembangkan fitur baru.</li>
        <li>Untuk menanggapi pertanyaan dan permintaan Anda.</li>
    </ul>

    <h2 class="text-2xl font-semibold mb-2 text-indigo-700">Perlindungan Informasi Anda</h2>

    <p class="mb-4 text-justify">Kami mengambil langkah-langkah yang wajar untuk melindungi informasi Anda dari akses, penggunaan, atau pengungkapan yang tidak sah. Namun, tidak ada metode transmisi melalui internet atau penyimpanan elektronik yang 100% aman.</p>

    <h2 class="text-2xl font-semibold mb-2 text-indigo-700">Tautan ke Situs Lain</h2>

    <p class="mb-4 text-justify">Situs web kami mungkin berisi tautan ke situs web pihak ketiga. Kami tidak bertanggung jawab atas praktik privasi situs web tersebut. Kami mendorong Anda untuk membaca kebijakan privasi dari setiap situs web yang Anda kunjungi.</p>

    <h2 class="text-2xl font-semibold mb-2 text-indigo-700">Perubahan pada Kebijakan Privasi Ini</h2>

    <p class="mb-4 text-justify">Kami dapat memperbarui kebijakan privasi kami dari waktu ke waktu. Kami akan memberi tahu Anda tentang perubahan apa pun dengan memposting kebijakan privasi baru di halaman ini. Anda disarankan untuk meninjau kebijakan privasi ini secara berkala untuk setiap perubahan.</p>

    <h2 class="text-2xl font-semibold mb-2 text-indigo-700">Hubungi Kami</h2>

    <p class="mb-4 text-justify">Jika Anda memiliki pertanyaan tentang kebijakan privasi ini, silakan hubungi kami di <a href="mailto:info@mathdosman.com" class="text-indigo-600 hover:underline">mathdosman@gmail.com</a>.</p>
</div>
@endsection