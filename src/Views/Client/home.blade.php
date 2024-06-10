@extends('layouts.master')
@section('title')
Trang chủ
@endsection

@section('content')
<section class="">
  <img src="{{ asset('assets/Client/images/banner.jpg') }}" alt="" class="w-full">
</section>
<section class="container max-w-screen-xl m-auto mt-16">
  <div class="flex justify-between items-center mb-4">
    <h2 class="font-semibold text-[40px] ">Sản Phẩm Mới Nhất</h2>
    <a href="{{ url('shop') }}" class="border border-solid border-[#CA8A04] py-2 px-4 font-semibold text-base text-[#CA8A04] hover:bg-yellow-700 hover:text-white">View
      all
      products</a>
  </div>


  <div class="grid grid-cols-4 gap-8">
    @foreach ($getTop4 as $top4 )
    <form action="" method="post">
      <div>
        <div class="overflow-hidden w-full">
          <a href="{{ url('products/' . $top4['id']) }}"><img src="{{ $top4['img_thumbnail']}}" class="hover:scale-125 duration-1000 w-full" alt="">
        </div></a>
        <div class="bg-[#F5F5F5] p-4 w-full">
          <a href="{{ url('products/' . $top4['id']) }}" class="hover:text-[#CA8A04]">
            <h3 class="font-semibold text-xl">{{ $top4['name']}}</h3>
          </a>
          <p class="text-[#898989] text-base mt-1 mb-2">{{ $top4['content']}}</p>
          <div class="flex ">
            <p class="font-semibold text-xl text-[#EF4444] mb-3">{{ number_format($top4['price_sale'], 0, ",", ".")}}đ </p>
            <span class="text-[#898989] text-base mt-1 mb-2" style="text-decoration: line-through; margin-left:5px;">{{ number_format($top4['price_regular'], 0, ",", ".")}}đ</span>
          </div>
          <a href="{{ url('cart/add')}}??quantity=1&productID={{ $top4['id']}}"  class="border border-solid border-[#CA8A04] text-[#CA8A04] font-semibold rounded text-base hover:bg-yellow-700 hover:text-white" style="padding: 10px 89px;">Add
            to cart
          </a>
        </div>
      </div>
    </form>

    @endforeach
    <!-- <div>
        <div class="overflow-hidden ">
          <img src="./assets/images/product-2.jpg" class="hover:scale-125 duration-1000" alt="">
        </div>
        <div class="bg-[#F5F5F5] p-4">
          <a href="" class="hover:text-[#CA8A04]"><h3 class="font-semibold text-xl">Leviosa</h3></a>
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
          <a href="" class="hover:text-[#CA8A04]"><h3 class="font-semibold text-xl">Lolito</h3></a>
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
          <a href="" class="hover:text-[#CA8A04]"><h3 class="font-semibold text-xl">Respira</h3></a>
          <p class="text-[#898989] text-base mt-1 mb-2">Outdoor bar table and stoolr</p>
          <p class="font-semibold text-xl text-[#EF4444] mb-3">4.500.000đ</p>
          <button
            class="border border-solid border-[#CA8A04] text-[#CA8A04] font-semibold w-full text-base py-2 hover:bg-yellow-700 hover:text-white ">Add
            to cart
          </button>
        </div>
      </div> -->
  </div>

</section>
<!--end product-->
<section class="container max-w-screen-xl m-auto mt-16">
  <div class="flex justify-between items-center mb-4">
    <h2 class="font-semibold text-[40px] ">Gallery</h2>
    <a href="" class="border border-solid border-[#CA8A04] py-2 px-4 font-semibold text-base text-[#CA8A04] hover:bg-yellow-700 hover:text-white">View
      all gallery</a>
  </div>
  <div class="grid grid-cols-3 gap-8 overflow-hidden">
    <img src="{{ asset('assets/client/images/Gallery-1.jpg')}}" alt="" class="hover:scale-95 duration-1000">
    <img src="{{ asset('assets/client/images/Gallery-2.png')}}" alt="" class="hover:scale-95 duration-1000">
    <img src="{{ asset('assets/client/images/Gallery-3.png')}}" alt="" class="hover:scale-95 duration-1000">
    <img src="{{ asset('assets/client/images/Gallery-4.png')}}" alt="" class="hover:scale-95 duration-1000">
    <img src="{{ asset('assets/client/images/Gallery-5.png')}}" alt="" class="hover:scale-95 duration-1000">
    <img src="{{ asset('assets/client/images/Gallery-6.png')}}" alt="" class="hover:scale-95 duration-1000">

  </div>

</section>
<!-- end Gare-->


@endsection