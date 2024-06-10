@extends('layouts.master')
@section('title')
Cart
@endsection

@section('content')
<section class="container max-w-screen-xl m-auto grid grid-cols-12 gap-8 my-16">

    @if (!empty($_SESSION['cart']) || !empty($_SESSION['cart-' . $_SESSION['user']['id']]))
    <div class="col-span-8">
        <table class="w-full">
            <thead>
                <tr class="bg-[#F5F5F5] *:py-4 *:font-medium">
                    <th class="text-left pl-4">Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @php
                $cart = $_SESSION['cart'] ?? $_SESSION['cart-' . $_SESSION['user']['id']]
                @endphp
                @foreach ($cart as $item)
                <tr class="*:py-4 *:text-center *:font-medium">
                    <td class="!text-left">
                        <img src="{{ asset($item['img_thumbnail']) }}" width="150px" alt="" class="inline mr-4">
                        <span class="text-[#A3A3A3]">{{ $item['name'] }}
                        </span>
                    </td>
                    <td class=" text-[#A3A3A3]">
                        {{ number_format(($item['price_sale'] ?: $item['price_regular']), 0, ",", ".")}}đ
                    </td>
                    <td>
                        @php
                        $url = url('cart/quantityDec') . '?productID=' . $item['id'];

                        if (isset($_SESSION['cart-' . $_SESSION['user']['id']])) {
                        $url .= '&cartID=' . $_SESSION['cart_id'];
                        }
                        @endphp
                        <a class="border border-solid border-[#CA8A04] bg-[#CA8A04] text-white font-semibold rounded  text-base py-2" style="width: 100px;" href="{{ $url }}">Giảm</a>

                        {{ $item['quantity'] }}

                        @php
                        $url = url('cart/quantityInc') . '?productID=' . $item['id'];

                        if (isset($_SESSION['cart-' . $_SESSION['user']['id']])) {
                        $url .= '&cartID=' . $_SESSION['cart_id'];
                        }
                        @endphp
                        <a class="border border-solid border-[#CA8A04] bg-[#CA8A04] text-white font-semibold rounded  text-base py-2" href="{{ $url }}">Tăng</a>
                    </td>
                    <td>
                        {{ number_format($item['quantity'] *($item['price_sale'] ?: $item['price_regular']), 0, ",", ".")}}đ

                    </td>
                    <td>
                        @php
                        $url = url('cart/remove') . '?productID=' . $item['id'];

                        if (isset($_SESSION['cart-' . $_SESSION['user']['id']])) {
                        $url .= '&cartID=' . $_SESSION['cart_id'];
                        }
                        @endphp
                        <a onclick="return confirm('Xóa hả:')" href="{{ $url }}" class="material-icons text-[#EF4444]">delete</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    @endif
    <!-- <div class="col-span-4 bg-[#F5F5F5] p-8">
                <h2 class="font-semibold text-2xl mb-4">Cart Total</h2>
                <hr class="border-[#A3A3A3] mb-5">
                <p class="font-medium flex justify-between items-center mb-4">
                    <span>Subtotal</span>
                    <span class="text-[#A3A3A3]">25.000.000đ</span>
                </p>
                <p class="font-medium flex justify-between items-center mb-8">
                    <span>Total</span>
                    <span class="font-bold text-[#EF4444] text-[20px]">25.000.000đ</span>
                </p>
                <a href="payment.html"
                    class="border border-solid border-[#CA8A04] text-[#CA8A04] w-full inline-block text-center py-2 hover:bg-[#CA8A04] hover:text-white ">Checkout</a>
            </div> -->
</section>
@endsection