@extends('layouts.master')
@section('title')
Shop
@endsection
@section('content')
<section class="">
    <img src="{{ asset('assets/Client/images/shop-banner.jpg') }}" alt="" class="w-full">
  </section>
<section class="container max-w-screen-xl m-auto grid grid-cols-12 gap-8 mt-16">
            <div class="col-span-3">
                <h2 class="font-semibold text-xl mb-4">Categories</h2>
                <ul>
                    @foreach ($CategoryAll as $category )
                    <!-- <li class="text-[#CA8A04] font-medium mb-2"><a href="">Cafe Chair</a></li>
                    <li class="text-[#737373] font-medium mb-2 hover:text-[#CA8A04]"><a href="">Sofa</a></li>
                    <li class="text-[#737373] font-medium mb-2 hover:text-[#CA8A04]"><a href="">Lamp</a></li>
                    <li class="text-[#737373] font-medium mb-2 hover:text-[#CA8A04]"><a href="">Carpet</a></li>
                    <li class="text-[#737373] font-medium mb-2 hover:text-[#CA8A04]"><a href="">Cabinet</a></li> -->
                    <li class="text-[#737373] font-medium mb-2 hover:text-[#CA8A04]"><a href="">{{ $category['name'] }}</a></li>
                    @endforeach
                    
                </ul>
            </div>
            <!-- end categories-->
            <div class="col-span-9 ">
                <div class="grid grid-cols-3 gap-8">
                @foreach ($ProductAll as $Product )

                    <div>
                        <div class="overflow-hidden ">
                            <img src="{{ asset($Product['img_thumbnail']) }}" class="hover:scale-125 duration-1000" alt="">
                        </div>
                        <div class="bg-[#F5F5F5] p-4">
                        <a href="{{ url('products/' . $Product['id']) }}" class="hover:text-[#CA8A04]">
          <h3 class="font-semibold text-xl">{{ $Product['name']}}</h3>
        </a>
                            <p class="text-[#898989] text-base mt-1 mb-2">{{ $Product['content'] }}</p>
                            <p class="font-semibold text-xl text-[#EF4444] mb-3">{{ number_format($Product['price_sale'], 0, ",", ".")}}đ</p>
                            <button
                                class="border border-solid border-[#CA8A04] text-[#CA8A04] font-semibold w-full text-base py-2 hover:bg-yellow-700 hover:text-white ">Add
                                to cart
                            </button>
                        </div>
                    </div>
                    @endforeach
<!-- 
                    <div>
                        <div class="overflow-hidden ">
                            <img src="./assets/images/product-2.jpg" class="hover:scale-125 duration-1000" alt="">
                        </div>
                        <div class="bg-[#F5F5F5] p-4">
                            <h3 class="font-semibold text-xl">Leviosa</h3>
                            <p class="text-[#898989] text-base mt-1 mb-2">Stylish cafe chair</p>
                            <p class="font-semibold text-xl text-[#EF4444] mb-3">1.800.000đ</p>
                            <button
                                class="border border-solid border-[#CA8A04] text-[#CA8A04] font-semibold w-full text-base py-2 hover:bg-yellow-700 hover:text-white ">Add
                                to cart
                            </button>
                        </div>
                    </div>
                    <div>
                        <div class="overflow-hidden ">
                            <img src="./assets/images/product-3.png" class="hover:scale-125 duration-1000" alt="">
                        </div>
                        <div class="bg-[#F5F5F5] p-4">
                            <h3 class="font-semibold text-xl">Lolito</h3>
                            <p class="text-[#898989] text-base mt-1 mb-2">Luxury big sofa</p>
                            <p class="font-semibold text-xl text-[#EF4444] mb-3">2.000.000đ</p>
                            <button
                                class="border border-solid border-[#CA8A04] text-[#CA8A04] font-semibold w-full text-base py-2 hover:bg-yellow-700 hover:text-white ">Add
                                to cart
                            </button>
                        </div>
                    </div>
                    <div>
                        <div class="overflow-hidden ">
                            <img src="./assets/images/product-4.png" class="hover:scale-125 duration-1000" alt="">
                        </div>
                        <div class="bg-[#F5F5F5] p-4">
                            <h3 class="font-semibold text-xl">Respira</h3>
                            <p class="text-[#898989] text-base mt-1 mb-2">Outdoor bar table and stoolr</p>
                            <p class="font-semibold text-xl text-[#EF4444] mb-3">4.500.000đ</p>
                            <button
                                class="border border-solid border-[#CA8A04] text-[#CA8A04] font-semibold w-full text-base py-2 hover:bg-yellow-700 hover:text-white ">Add
                                to cart
                            </button>
                        </div>
                    </div>
                    <div>
                        <div class="overflow-hidden ">
                            <img src="./assets/images/product-1.jpg" class="hover:scale-125 duration-1000" alt="">
                        </div>
                        <div class="bg-[#F5F5F5] p-4">
                            <h3 class="font-semibold text-xl">Syltherine</h3>
                            <p class="text-[#898989] text-base mt-1 mb-2">Stylish cafe chair</p>
                            <p class="font-semibold text-xl text-[#EF4444] mb-3">2.500.000đ</p>
                            <button
                                class="border border-solid border-[#CA8A04] text-[#CA8A04] font-semibold w-full text-base py-2 hover:bg-yellow-700 hover:text-white ">Add
                                to cart
                            </button>
                        </div>
                    </div>
                    <div>
                        <div class="overflow-hidden ">
                            <img src="./assets/images/product-2.jpg" class="hover:scale-125 duration-1000" alt="">
                        </div>
                        <div class="bg-[#F5F5F5] p-4">
                            <h3 class="font-semibold text-xl">Leviosa</h3>
                            <p class="text-[#898989] text-base mt-1 mb-2">Stylish cafe chair</p>
                            <p class="font-semibold text-xl text-[#EF4444] mb-3">1.800.000đ</p>
                            <button
                                class="border border-solid border-[#CA8A04] text-[#CA8A04] font-semibold w-full text-base py-2 hover:bg-yellow-700 hover:text-white ">Add
                                to cart
                            </button>
                        </div>
                    </div>
                    <div>
                        <div class="overflow-hidden ">
                            <img src="./assets/images/product-3.png" class="hover:scale-125 duration-1000" alt="">
                        </div>
                        <div class="bg-[#F5F5F5] p-4">
                            <h3 class="font-semibold text-xl">Lolito</h3>
                            <p class="text-[#898989] text-base mt-1 mb-2">Luxury big sofa</p>
                            <p class="font-semibold text-xl text-[#EF4444] mb-3">2.000.000đ</p>
                            <button
                                class="border border-solid border-[#CA8A04] text-[#CA8A04] font-semibold w-full text-base py-2 hover:bg-yellow-700 hover:text-white ">Add
                                to cart
                            </button>
                        </div>
                    </div>
                    <div>
                        <div class="overflow-hidden ">
                            <img src="./assets/images/product-4.png" class="hover:scale-125 duration-1000" alt="">
                        </div>
                        <div class="bg-[#F5F5F5] p-4">
                            <h3 class="font-semibold text-xl">Respira</h3>
                            <p class="text-[#898989] text-base mt-1 mb-2">Outdoor bar table and stoolr</p>
                            <p class="font-semibold text-xl text-[#EF4444] mb-3">4.500.000đ</p>
                            <button
                                class="border border-solid border-[#CA8A04] text-[#CA8A04] font-semibold w-full text-base py-2 hover:bg-yellow-700 hover:text-white ">Add
                                to cart
                            </button>
                        </div>
                    </div>
                    <div>
                        <div class="overflow-hidden ">
                            <img src="./assets/images/product-4.png" class="hover:scale-125 duration-1000" alt="">
                        </div>
                        <div class="bg-[#F5F5F5] p-4">
                            <h3 class="font-semibold text-xl">Respira</h3>
                            <p class="text-[#898989] text-base mt-1 mb-2">Outdoor bar table and stoolr</p>
                            <p class="font-semibold text-xl text-[#EF4444] mb-3">4.500.000đ</p>
                            <button
                                class="border border-solid border-[#CA8A04] text-[#CA8A04] font-semibold w-full text-base py-2 hover:bg-yellow-700 hover:text-white ">Add
                                to cart
                            </button>
                        </div>
                    </div> -->
                </div>
                <!-- end product-->
                <div class="mt-8">
                    <a href="" class="py-2 px-4 bg-[#CA8A04] inline-block text-white font-bold rounded-md">1</a>
                    <a href="" class="py-2 px-4 bg-[#A3A3A3] inline-block text-white font-bold rounded-md">2</a>
                    <a href="" class="py-2 px-4 bg-[#A3A3A3] inline-block text-white font-bold rounded-md">3</a>
                    <a href="" class="py-2 px-4 bg-[#A3A3A3] inline-block text-white font-bold rounded-md">Next</a>

                </div>
                <!-- end Pagination-->
            </div>
        </section>
        <section class="bg-[#FFF7ED] py-16 mt-16">
            <div class="container max-w-screen-xl m-auto grid grid-cols-4">
                <div class="flex gap-5 items-center">
                    <img src="./assets/images/Vector.png" alt="">
                    <div>
                        <h3 class="font-semibold text-xl mb-1">High Quality</h3>
                        <p class="text-[#898989]">Crafted from top materials</p>
                    </div>
                </div>
                <div class="flex gap-5 items-center">
                    <img src="./assets/images/Vector.png" alt="">
                    <div>
                        <h3 class="font-semibold text-xl mb-1">High Quality</h3>
                        <p class="text-[#898989]">Crafted from top materials</p>
                    </div>
                </div>
                <div class="flex gap-5 items-center">
                    <img src="./assets/images/Vector.png" alt="">
                    <div>
                        <h3 class="font-semibold text-xl mb-1">High Quality</h3>
                        <p class="text-[#898989]">Crafted from top materials</p>
                    </div>
                </div>
                <div class="flex gap-5 items-center">
                    <img src="./assets/images/Vector.png" alt="">
                    <div>
                        <h3 class="font-semibold text-xl mb-1">High Quality</h3>
                        <p class="text-[#898989]">Crafted from top materials</p>
                    </div>
                </div>
            </div>
        </section>
@endsection