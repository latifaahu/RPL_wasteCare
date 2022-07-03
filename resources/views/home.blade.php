@extends('layouts.main-layout')

@section('content')
<div class="w-full">
    <img src="/img/atas.png" alt="landing page" class="w-full h-auto">
    <div class="px-20 bg-gray-50 py-4">
        <div class="py-4">
            <h1 class="text-2xl font-bold mt-8">
                Layanan
            </h1>
            <p>Saatnya kelola sampah produk kecantikan tanpa repot, lebih praktis dengan WasteCare</p>
        </div>
        <div class="py-4 grid grid-cols-3 gap-4">
            <div class="px-5 py-4 border-2 border-green-950">
                <div class="inline-flex py-4 mt-4">
                    <div class="mr-4">
                        <img src="/img/box.png" alt="box" class="w-10 h-10">
                    </div>
                    <p class="font-bold text-xl mt-2">Drop Off</p>
                </div>
                <div class="mb-4 py-4"><span>Antar langsung sampah skincaremu ke Recycling Centre WasteCare. Mari daur ulang sampah kita agar menjadi manfaat.</span></div>
            </div>
            <div class="px-5 py-4 border-2 border-green-950">
                <div class="inline-flex py-4 mt-4">
                    <div class="mr-4">
                        <img src="/img/truck.png" alt="box" class="w-12 h-10">
                    </div>
                    <p class="font-bold text-xl mt-2">Pick Up</p>
                </div>
                <div class="mb-4 py-4"><span>Masukkan data sampah skincare yang akan kamu daur ulang ke Website WasteCare. WasteCare akan menjemput sampahmu.</span></div>
            </div>
            <div class="px-5 py-4 border-2 border-green-950">
                <div class="inline-flex py-4 mt-4">
                    <div class="mr-4">
                        <img src="/img/point.png" alt="box" class="w-10 h-10">
                    </div>
                    <p class="font-bold text-xl mt-2">WPoint</p>
                </div>
                <div class="mb-4 py-4"><span>WasteCare mengkonversi WPoint yang kamu dapatkan menjadi e-wallet yang bisa kamu manfaatkan.</span></div>
            </div>
        </div>
    </div>
    <div class="px-20 bg-gray-50 py-4">
        <div class="py-4">
        </div>
        <div class="py-4 grid grid-cols-3 gap-4 mb-8">
            <div class="px-5 py-4">
                <h1 class="text-2xl font-bold">
                    Jenis Sampah
                </h1>
                <p>Pilah sampah skincaremu bersama WasteCare</p>

            </div>
            <div class="px-5 py-4 bg-green-950 text-white">
                <p class="font-bold text-xl mt-2 mb-4">Body Care</p>
                <img src="/img/bodycare.png" alt="" class="w-full">
                <div class="py-4 text-sm">
                    <ul>
                        <li>botol body lotion</li>
                        <li>botol hand cream</li>
                        <li>botol sabun</li>
                        <li>wadah lulur</li>
                    </ul>
                </div>
            </div>
            <div class="px-5 py-4 bg-green-950 text-white">
                <p class="font-bold text-xl mt-2 mb-4">Skin Care</p>
                <img src="/img/skincare.png" alt="" class="w-full">
                <div class="py-4 text-sm">
                    <ul>
                        <li>botol body lotion</li>
                        <li>botol hand cream</li>
                        <li>botol sabun</li>
                        <li>wadah lulur</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="px-20 py-4 text-white">
        <div class="inline-flex py-4 mt-8">
            <div class="w-1/2 py-4 mt-8 mr-4">
                <img src="/img/about.png" alt="" class="w-full">
            </div>
            <div class="w-1/2 py-4 mt-8">
                <h1 class="text-2xl font-bold">Tentang Kami</h1>
                <p class="text-sm py-4">Perawatan tubuh mulai dari hair conditioner, sabun muka, produk skincare hingga body lotion, semua kita gunakan untuk menjaga tubuh kita tetap dalam keadaan yang terbaik. Terlebih dalam masa-masa pandemi, hal ini menjadi salah satu aktivitas makin marak. Penggunaan produk-produk tersebut tentunya menghasilkan sampah. WasteCare menghadirkan solusi untuk membantu masalah sampah di negara kita dengan membantu proses daur ulang sampah-sampah tersebut dengan baik dan benar. Teknologi WasteCare memungkinkan kami untuk menangkap limbah kimiawi dari produk-produk perawatan tubuh. Kami harap, dengan kehadiran kami, permasalahan sampah akibat penggunaan produk-produk perawatan tubuh dan kimiawi tersebut tidak lagi menghantui negara kita.</p>
                <a
                class="inline-flex items-center w-full text-sm rounded-m" href="/"
                >
                <span class="font-semibold">More info</span>
                <span
                    class="inline-flex items-center justify-center px-2 text-xs leading-none"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </span>
            </a>
            </div>
        </div>

    </div>
</div>
@endsection
