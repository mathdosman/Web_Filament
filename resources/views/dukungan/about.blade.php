@extends('layout') {{-- Jika menggunakan Laravel --}}

@section('title', 'Tentang Kami')
@section('description', 'Tentang Kami - Math_Dosman')

@section('content')
<div class="container mx-auto p-6 max-w-2xl text-center">
    <h1 class="text-3xl font-bold mb-4 text-indigo-800">Tentang Kami</h1>

    <div class="flex justify-center mb-6">
        <img src="{{ asset('img/pi.png') }}" alt="Guru menulis catatan di situs web" class="w-24 h-24 rounded-full">
    </div>

    <p class="mb-4 text-justify">Selamat datang di Math_Dosman, sebuah situs web yang didedikasikan untuk membantu siswa mempelajari matematika dengan cara yang menyenangkan dan menarik. Misi kami adalah menyediakan sumber daya pendidikan berkualitas tinggi yang membuat pembelajaran matematika dapat diakses dan dinikmati oleh semua orang.</p>

    <p class="mb-4 text-justify">Kami adalah tim pendidik yang bersemangat dengan pengalaman bertahun-tahun dalam mengajar matematika. Kami memahami tantangan yang dihadapi siswa saat belajar matematika dan berkomitmen untuk menciptakan sumber daya yang mengatasi tantangan tersebut dan membuat pembelajaran matematika lebih efektif.</p>

    <p class="mb-4 text-justify">Situs web kami menawarkan berbagai sumber daya, termasuk:</p>

    <ul class="list-disc list-inside mb-4 text-left inline-block">
        <li><strong>Pelajaran interaktif:</strong> Pelajaran interaktif kami menggunakan multimedia dan gamifikasi untuk membuat pembelajaran matematika lebih menarik dan interaktif.</li>
        <li><strong>Soal latihan:</strong> Soal latihan kami membantu siswa membangun keterampilan matematika mereka dan memperkuat konsep.</li>
        <li><strong>Kuis dan tes:</strong> Kuis dan tes kami membantu siswa menilai pemahaman mereka tentang konsep matematika.</li>
        <li><strong>Artikel dan posting blog:</strong> Artikel dan posting blog kami memberikan wawasan dan tips tentang belajar matematika.</li>
    </ul>

    <p class="mb-4 text-justify">Kami terus menambahkan sumber daya baru ke situs web kami, jadi pastikan untuk sering memeriksanya kembali. Kami juga menyambut umpan balik dan saran Anda tentang bagaimana kami dapat meningkatkan sumber daya kami.</p>

    <p class="mb-4 text-justify">Kami percaya bahwa setiap orang dapat belajar matematika. Kami berkomitmen untuk menyediakan sumber daya dan dukungan yang dibutuhkan siswa untuk berhasil dalam matematika.</p>

    <h2 class="text-2xl font-semibold mb-2 text-indigo-700">Tim Kami</h2>
    <p class="mb-4 text-justify">Tim kami terdiri dari pendidik berpengalaman yang bersemangat mengajar matematika. Kami memiliki berbagai keahlian di berbagai bidang matematika, dan kami berkomitmen untuk memberikan pendidikan terbaik kepada siswa kami.</p>

    <h2 class="text-2xl font-semibold mb-2 text-indigo-700">Nilai-Nilai Kami</h2>
    <p class="mb-4 text-justify">Kami berkomitmen untuk memberikan pendidikan berkualitas tinggi kepada siswa kami. Kami percaya bahwa setiap orang harus memiliki kesempatan untuk belajar matematika, terlepas dari latar belakang atau kemampuan mereka. Kami juga berkomitmen untuk menciptakan lingkungan belajar yang mendukung dan inklusif.</p>

    <h2 class="text-2xl font-semibold mb-2 text-indigo-700">Hubungi Kami</h2>
    <p class="mb-4 text-justify">Kami akan senang mendengar dari Anda! Silakan hubungi kami jika Anda memiliki pertanyaan atau saran.</p>

    <p class="mb-4 text-justify">Terima kasih telah memilih Math_Dosman sebagai sumber belajar matematika Anda. Kami berkomitmen untuk membantu Anda mencapai tujuan matematika Anda.</p>
</div>
@endsection