@extends('layouts.user')

@section('title', 'Landing Page')

@section('contents')
<div class="bg-gray-100">
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold text-center my-8">Selamat datang di Outfit Store</h1>

        <!-- Carousel -->
        <div class="relative">
            <div class="carousel-inner relative overflow-hidden">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <img src="https://www.mokapos.com/blog/_next/image?url=http%3A%2F%2Fwp.mokapos.com%2Fwp-content%2Fuploads%2F2023%2F02%2Fcara-foto-baju-untuk-jualan-2.jpg&w=1200&q=75" class="w-full h-screen object-cover" alt="Slide 1">
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item hidden">
                    <img src="https://www.mokapos.com/blog/_next/image?url=http%3A%2F%2Fwp.mokapos.com%2Fwp-content%2Fuploads%2F2023%2F02%2Fcara-foto-baju-untuk-jualan-6.jpg&w=1200&q=75" class="w-full h-screen object-cover" alt="Slide 2">
                </div>
                <!-- Slide 3 -->
                <div class="carousel-item hidden">
                    <img src="https://awsimages.detik.net.id/community/media/visual/2022/06/04/baju-turun-naik-1.jpeg?w=1200" class="w-full h-screen object-cover" alt="Slide 3">
                </div>
            </div>
            <!-- Carousel Controls -->
            <button class="absolute top-0 bottom-0 left-0 z-10 flex items-center justify-center w-12 bg-gray-800 bg-opacity-50 hover:bg-opacity-75 text-white focus:outline-none" type="button" data-slide="prev" onclick="prevSlide()">
                <span class="carousel-control-prev-icon"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="absolute top-0 bottom-0 right-0 z-10 flex items-center justify-center w-12 bg-gray-800 bg-opacity-50 hover:bg-opacity-75 text-white focus:outline-none" type="button" data-slide="next" onclick="nextSlide()">
                <span class="carousel-control-next-icon"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Product Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
            <!-- Card 1 -->
            <div class="bg-white overflow-hidden shadow-lg rounded-lg">
                <img class="w-full h-64 object-cover" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKXSxsR114_wnQzEWHYqQk7aBlNXDtroLWAQ&s" alt="Card image">
                <div class="px-4 py-4">
                    <h3 class="text-lg font-semibold text-gray-900">Baju Wanita</h3>
                    <p class="mt-1 text-sm text-gray-600">BAJU DEWASA WANITA - BUILD UP SWEATER WANITA CREWNECK WANITA!</p>
                    <div class="mt-4 flex justify-between items-center">
                        <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none" onclick="addToCart()">Add to Cart</button>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="bg-white overflow-hidden shadow-lg rounded-lg">
                <img class="w-full h-64 object-cover" src="https://down-id.img.susercontent.com/file/ff4ff54d7b4222546bf55bcd85e81660" alt="Card image">
                <div class="px-4 py-4">
                    <h3 class="text-lg font-semibold text-gray-900">Baju Pria 2</h3>
                    <p class="mt-1 text-sm text-gray-600">INDOSAN-BAJU KAOS CNN-KAOS DISTRO!</p>
                    <div class="mt-4 flex justify-between items-center">
                        <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none" onclick="addToCart()">Add to Cart</button>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="bg-white overflow-hidden shadow-lg rounded-lg">
                <img class="w-full h-64 object-cover" src="https://images.tokopedia.net/img/cache/700/VqbcmM/2022/8/7/6c7e276c-c131-4add-be95-37c54f8ba91c.jpg" alt="Card image">
                <div class="px-4 py-4">
                    <h3 class="text-lg font-semibold text-gray-900">Baju Wanita</h3>
                    <p class="mt-1 text-sm text-gray-600">Baju Wanita Blouse Kemeja Atasan Bahan Wollycrepe - Putih!</p>
                    <div class="mt-4 flex justify-between items-center">
                        <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none" onclick="addToCart()">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.carousel-item');
    const totalSlides = slides.length;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            if (i === index) {
                slide.classList.remove('hidden');
                slide.classList.add('active');
            } else {
                slide.classList.remove('active');
                slide.classList.add('hidden');
            }
        });
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % totalSlides;
        showSlide(currentSlide);
    }

    function prevSlide() {
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        showSlide(currentSlide);
    }

    document.querySelector('[data-slide="next"]').addEventListener('click', nextSlide);
    document.querySelector('[data-slide="prev"]').addEventListener('click', prevSlide);

    // Show the initial slide
    showSlide(currentSlide);

    // Auto slide every 5 seconds
    setInterval(nextSlide, 5000);
</script>
@endsection
