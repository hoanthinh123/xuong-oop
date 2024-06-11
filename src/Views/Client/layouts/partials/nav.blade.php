  <section class="container max-w-screen-xl m-auto flex items-center justify-between py-4">
    <a href="{{ url() }}"><img src="{{asset('assets/Client/images/logo.jpg')}}" alt=""></a>
    <ul class="flex gap-8 font-medium text-xl">
      <li class="hover:text-amber-500"><a href="{{ url() }}">Home</a></li>
      <li class="hover:text-amber-500"><a href=" {{ url('shop') }}">Shop</a></li>
      <li class="hover:text-amber-500"><a href="">About</a></li>
      <li class="hover:text-amber-500"><a href="">Contact</a></li>
    </ul>
    <div class="flex gap-4">
      <nav class="font-medium text-xl">
        @if (!isset($_SESSION['user']))
        <a class="btn btn-primary" href="{{ url('login') }}">Login <span class="material-symbols-outlined ">login</span></a>
        @endif

        @if (isset($_SESSION['user']))
        <a class="btn btn-primary" href="{{ url('logout') }}"> <span class="material-symbols-outlined">logout</span></a>
        <a href="{{ url('cart/detail') }}" type="margin-top:15px;"><span class="material-symbols-outlined">
            shopping_cart
          </span></a>
        @endif
      </nav>
    </div>
  </section>
  <!--  Navigation Bar-->

  <!-- Banner -->

  <!-- End Banner -->