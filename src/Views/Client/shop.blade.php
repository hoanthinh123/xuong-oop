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
                    <a href="{{ url('products/' . $Product['id']) }}"><img src="{{ asset($Product['img_thumbnail']) }}" class="hover:scale-125 duration-1000" alt=""></a>
                </div>
                <div class="bg-[#F5F5F5] p-4">
                    <a href="{{ url('products/' . $Product['id']) }}" class="hover:text-[#CA8A04]">
                        <h3 class="font-semibold text-xl">{{ $Product['name']}}</h3>
                    </a>
                    <p class="text-[#898989] text-base mt-1 mb-2">{{ $Product['content'] }}</p>
                    <div class="flex ">
                        <p class="font-semibold text-xl text-[#EF4444] mb-3">{{ number_format($Product['price_sale'], 0, ",", ".")}}đ </p>
                        <span class="text-[#898989] text-base mt-1 mb-2" style="text-decoration: line-through; margin-left:5px;">{{ number_format($Product['price_regular'], 0, ",", ".")}}đ</span>
                    </div>
                    <a href="{{ url('cart/add')}}??quantity=1&productID={{ $Product['id']}}" class="border border-solid border-[#CA8A04] text-[#CA8A04] font-semibold rounded text-base hover:bg-yellow-700 hover:text-white" style="padding: 10px 89px;">Add
                        to cart
                    </a>
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
        <div class="pagination__wrapper mt-4">
            <ul class="pagination flex justify-center gap-4 ">
                @if ($page > 1)
                <li><a href="{{ url('shop?page=' . ($page - 1 == 0 ? 1 : $page - 1)) }}" class="border border-solid border-[#CA8A04] m-1 py-2 px-4 bg-white text-black hover:bg-[#CA8A04] inline-block  font-bold rounded-md" class="prev" title="previous page">&#10094;</a></li>
                @endif
                @for ($i = 1; $i <= $totalPage; $i++) <li>
                    <a href="{{ url('shop?page=' . $i) }}" class="border border-solid border-[#CA8A04] m-1 py-2 px-4 bg-white text-black hover:bg-[#CA8A04] inline-block  font-bold rounded-md" class="{{ $page == $i ? 'active' : '' }}">{{ $i }}</a>
                    </li>
                    @endfor
                    @if ($page < $totalPage) <li><a href="{{ url('shop?page=' . ($page + 1 > $totalPage ? $totalPage : $page + 1)) }}" class="border border-solid border-[#CA8A04] m-1 py-2 px-4 bg-white text-black hover:bg-[#CA8A04] inline-block  font-bold rounded-md" class="next" title="next page">&#10095;</a></li>
                        @endif
            </ul>
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