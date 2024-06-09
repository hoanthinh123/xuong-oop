@extends('layouts.master')
@section('title')
Shop
@endsection
@section('content') 
<section>
            <div class="grid grid-cols-2 gap-8 mb-16">
                <div class="grid grid-cols-6 gap-8">
                    <div class="col-span-1 *:mb-4">
                        <img src="#" alt="">
                        <img src="#" alt="">
                        <img src="#" alt="">
                        <img src="#" alt="">
                        <img src="#" alt="">

                    </div>
                    <div class="col-span-5 overflow-hidden">
                        <img src="{{ asset($product['img_thumbnail']) }}"class="w-full hover:scale-125 duration-1000"  alt="">
                    </div>
                </div>
                <!-- end slide -->
                <div>
                    <p class="font-medium text-[40px] mt-16">{{ $product['name'] }}</p>
                    <p class="font-bold text-[40px] text-[#EF4444] my-2">{{ number_format($product['price_sale'], 0, ",", ".")}}đ</p>
                    <div class="flex items-center">
                        <div class="*:text-[#FFC700] border-r border-solid border-neutral-400 pr-4 mr-4">
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star</span>
                        </div>
                        <span class="font-medium text-sm text-[#9F9F9F]">5 Sao</span>
                    </div>
                    <p class="font-medium my-4">{{ $product['content'] }}</p>
                   
                    <div>
                        <form action="">
                            <div class="border border-solid border-neutral-400 w-fit rounded inline-block">
                                <button class="py-2 px-4">-</button>
                                <input type="text" value="1" class="w-[30px] text-center">
                                <button class="px-2 px-4">+</button>
                            </div>
                            <button type="submit"
                                class="border border-solid border-yellow-600 text-yellow-600 rounded py-2 px-10 ml-3 hover:bg-yellow-700 hover:text-white">Add
                                To Cart</button>
                           
                        </form>
                    </div>
                    <hr class="text-neutral-400 mt-8 mb-3">
                    <div class="*:mb-3 *:text-[#A3A3A3]">
                        <p>Mã sản phẩm : SS001</p>
                        <p>Thông Tin Sản Phẩm {{ $product['overview'] }}</p>
                    </div>
                </div>
            </div>
            <!-- End short description -->
            <div>
                <div class="*:font-semibold *:text-x1 *:mr-16 border-b pb-4 mb-8">
                    <a href="">Bình Luận</a>
                    <a href="" class="text-[#A3A3A3]">Chi tiết</a>
                    <a href="" class="text-[#A3A3A3]">Đánh Giá [5]</a>
                </div>
                <hr>
                <div class="*:text[#A3A3A3] *: font-medium">
                    <p class="mb-8">Weighing in under 7 pounds, the Kilburn is a lightweight piece of vintage styled engineering. Setting the bar as one of the loudest speakers in its class, the Kilburn is a compact, stout-hearted hero with a well-balanced audio which boasts a clear midrange and extended highs for a sound that is both articulate and pronounced. The analogue knobs allow you to fine tune the controls to your personal preferences while the guitar-influenced leather strap enables easy and stylish travel.</p>
                    <div class="flex gap-8">
                        <img src="assets/images/Rectangle 313.jpg" alt="">
                        <img src="assets/images/Rectangle 314.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- End -->
      
@endsection