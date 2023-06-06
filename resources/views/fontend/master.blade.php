@include('fontend.layout.header')


        <main class="main__content_wrapper">
            <!-- Start slider section -->
            @yield('content')
            <!-- End slider section -->

            <!-- Start footer section -->
            @include('fontend.layout.copyright')
            <!-- End footer section -->

        </main>
@include('fontend.layout.footer')
