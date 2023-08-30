@extends('fontend.master')

@section('content')
<div class="home2__hero--bg">

    <!-- Start header area -->
    <header class="header__section  header__transparent">
        <div class="container">
            <div class="main__header d-flex justify-content-between align-items-center">
                <div class="main__logo">
                    <h1 class="main__logo--title"><a class="main__logo--link" href="index-2.html">
                        {{-- <img class="main__logo--img logo_light" src="{{ asset('fontend') }}/assets/img/logo/nav-log.png" alt="logo-img"> --}}
                        <img class="main__logo--img logo_dark" src="{{ asset('fontend') }}/assets/img/logo/nav-log-white.png" alt="logo-img">
                    </a></h1>
                </div>
                <button class="light__dark--btn" id="light__to--dark">
                    <svg class="dark--mode__icon" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512"><title>Moon</title><path d="M264 480A232 232 0 0132 248c0-94 54-178.28 137.61-214.67a16 16 0 0121.06 21.06C181.07 76.43 176 104.66 176 136c0 110.28 89.72 200 200 200 31.34 0 59.57-5.07 81.61-14.67a16 16 0 0121.06 21.06C442.28 426 358 480 264 480z"></path></svg>
                    <svg class="light--mode__icon" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512"><title>Sunny</title><path d="M256 118a22 22 0 01-22-22V48a22 22 0 0144 0v48a22 22 0 01-22 22zM256 486a22 22 0 01-22-22v-48a22 22 0 0144 0v48a22 22 0 01-22 22zM369.14 164.86a22 22 0 01-15.56-37.55l33.94-33.94a22 22 0 0131.11 31.11l-33.94 33.94a21.93 21.93 0 01-15.55 6.44zM108.92 425.08a22 22 0 01-15.55-37.56l33.94-33.94a22 22 0 1131.11 31.11l-33.94 33.94a21.94 21.94 0 01-15.56 6.45zM464 278h-48a22 22 0 010-44h48a22 22 0 010 44zM96 278H48a22 22 0 010-44h48a22 22 0 010 44zM403.08 425.08a21.94 21.94 0 01-15.56-6.45l-33.94-33.94a22 22 0 0131.11-31.11l33.94 33.94a22 22 0 01-15.55 37.56zM142.86 164.86a21.89 21.89 0 01-15.55-6.44l-33.94-33.94a22 22 0 0131.11-31.11l33.94 33.94a22 22 0 01-15.56 37.55zM256 358a102 102 0 11102-102 102.12 102.12 0 01-102 102z"></path></svg>
                </button>
            </div>
        </div>
    </header>
<div class="hero__section">
    <div class="container">
        <div class="hero__section--inner2 d-flex align-items-center">
            <div class="hero__section--left d-flex align-items-center">
                <div class="hero__profile position__relative">
                    <div class="hero__profile--topbar position__relative">
                        <div class="hero__profile--thumbnail">
                            <img class="hero__profile--thumbnail__media" src="{{ asset('fontend/assets/img/hero/profile-image.png') }}" alt="img">
                        </div>
                        <div class="hero__profile--text">
                            <h2 class="hero__profile--title">Oasif Sadik Jisan</h2>
                            <span class="hero__profile--subtitle">Php & Laravel Developer</span>
                        </div>
                    </div>
                    <ul class="hero__profile--info position__relative">
                        <li class="hero__profile--info__list">
                            <span class="hero__profile--info__icon"><svg class="max-w-5" width="16" height="34" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"></path></svg></span>
                            <a class="hero__profile--info__text" href="tel:+8801705825277">+8801705825277</a>
                        </li>
                        <li class="hero__profile--info__list">
                            <span class="hero__profile--info__icon"><svg class="max-w-5" xmlns="http://www.w3.org/2000/svg" width="16" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg></span>
                            <a class="hero__profile--info__text" href="oasifsadik99@gmail.com">oasifsadik99@gmail.com</a>
                        </li>
                        <li class="hero__profile--info__list">
                            <span class="hero__profile--info__icon"><svg class="max-w-5" width="16" height="34" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 256c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64z"></path></svg></span>
                            <span class="hero__profile--info__text">Dhaka,Adabor</span>
                        </li>
                    </ul>
                </div>
                <div class="hero__content hero__profile--content">
                    <span class="hero__content--subtitle text__secondary mb-10">HELLO  I'M</span>
                    <h2 class="hero__content--title mb-15">Oasif Sadik Jisan! </h2>
                    <h3 class="hero__content--subtitle2 mb-20">Web Designer and Developer </h3>
                    <p class="hero__content--desc mb-30">There are many variations of sum availabled
                        in alley of type and scrambled it some.</p>
                    <button class="primary__btn download__btn mb-30">
                        <svg class="download__btn--svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                        Download CV
                    </button>
                    <div class="social__share style2 d-flex align-items-center">
                        <span class="social__share--title">Follow Me: </span>
                        <ul class="social__share--wrapper d-flex">
                            <li class="social__share--child"><a class="social__share--link" href="#">
                                <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="20px" height="20px">    <path d="M17.525,9H14V7c0-1.032,0.084-1.682,1.563-1.682h1.868v-3.18C16.522,2.044,15.608,1.998,14.693,2 C11.98,2,10,3.657,10,6.699V9H7v4l3-0.001V22h4v-9.003l3.066-0.001L17.525,9z"/></svg>
                                <span class="visually-hidden">Facebook</span>
                            </a>
                            </li>
                            <li class="social__share--child"><a class="social__share--link" href="#">
                                <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="20px" height="20px">    <path d="M12,2C6.477,2,2,6.477,2,12c0,4.237,2.636,7.855,6.356,9.312c-0.087-0.791-0.167-2.005,0.035-2.868 c0.182-0.78,1.172-4.971,1.172-4.971s-0.299-0.599-0.299-1.484c0-1.391,0.806-2.428,1.809-2.428c0.853,0,1.265,0.641,1.265,1.408 c0,0.858-0.546,2.141-0.828,3.329c-0.236,0.996,0.499,1.807,1.481,1.807c1.777,0,3.143-1.874,3.143-4.579 c0-2.394-1.72-4.068-4.177-4.068c-2.845,0-4.515,2.134-4.515,4.34c0,0.859,0.331,1.781,0.744,2.282 c0.082,0.099,0.093,0.186,0.069,0.287c-0.076,0.316-0.244,0.995-0.277,1.134c-0.043,0.183-0.145,0.222-0.334,0.133 c-1.249-0.582-2.03-2.408-2.03-3.874c0-3.154,2.292-6.052,6.608-6.052c3.469,0,6.165,2.472,6.165,5.776 c0,3.447-2.173,6.22-5.189,6.22c-1.013,0-1.966-0.527-2.292-1.148c0,0-0.502,1.909-0.623,2.378 c-0.226,0.868-0.835,1.958-1.243,2.622C9.975,21.843,10.969,22,12,22c5.522,0,10-4.478,10-10S17.523,2,12,2z"/></svg>
                                <span class="visually-hidden">Pinterest</span>
                                </a>
                            </li>
                            <li class="social__share--child"><a class="social__share--link" href="#">
                                <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="20px" height="20px">    <path d="M22,3.999c-0.78,0.463-2.345,1.094-3.265,1.276c-0.027,0.007-0.049,0.016-0.075,0.023c-0.813-0.802-1.927-1.299-3.16-1.299 c-2.485,0-4.5,2.015-4.5,4.5c0,0.131-0.011,0.372,0,0.5c-3.353,0-5.905-1.756-7.735-4c-0.199,0.5-0.286,1.29-0.286,2.032 c0,1.401,1.095,2.777,2.8,3.63c-0.314,0.081-0.66,0.139-1.02,0.139c-0.581,0-1.196-0.153-1.759-0.617c0,0.017,0,0.033,0,0.051 c0,1.958,2.078,3.291,3.926,3.662c-0.375,0.221-1.131,0.243-1.5,0.243c-0.26,0-1.18-0.119-1.426-0.165 c0.514,1.605,2.368,2.507,4.135,2.539c-1.382,1.084-2.341,1.486-5.171,1.486H2C3.788,19.145,6.065,20,8.347,20 C15.777,20,20,14.337,20,8.999c0-0.086-0.002-0.266-0.005-0.447C19.995,8.534,20,8.517,20,8.499c0-0.027-0.008-0.053-0.008-0.08 c-0.003-0.136-0.006-0.263-0.009-0.329c0.79-0.57,1.475-1.281,2.017-2.091c-0.725,0.322-1.503,0.538-2.32,0.636 C20.514,6.135,21.699,4.943,22,3.999z"/></svg>
                                <span class="visually-hidden">Twitter</span>
                                </a>
                            </li>
                            <li class="social__share--child"><a class="social__share--link" href="#">
                                <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="20px" height="20px"><path d="M 4 2 C 2.898438 2 2 2.898438 2 4 L 2 20 C 2 21.101563 2.898438 22 4 22 L 20 22 C 21.101563 22 22 21.101563 22 20 L 22 4 C 22 2.898438 21.101563 2 20 2 Z M 4 4 L 20 4 L 20 8 L 16.453125 8 C 15.355469 6.777344 13.765625 6 12 6 C 10.234375 6 8.644531 6.777344 7.546875 8 L 4 8 Z M 17 5 L 17 7 L 19 7 L 19 5 Z M 12 8 C 14.222656 8 16 9.777344 16 12 C 16 14.222656 14.222656 16 12 16 C 9.777344 16 8 14.222656 8 12 C 8 9.777344 9.777344 8 12 8 Z M 12 10 C 11.800781 10 11.601563 10 11.402344 10.097656 C 11.699219 10.300781 12 10.601563 12 11 C 12 11.601563 11.601563 12 11 12 C 10.601563 12 10.300781 11.800781 10.097656 11.402344 C 10 11.601563 10 11.800781 10 12 C 10 13.101563 10.898438 14 12 14 C 13.101563 14 14 13.101563 14 12 C 14 10.898438 13.101563 10 12 10 Z"/></svg>
                                <span class="visually-hidden">Instagram</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            @include('fontend.layout.home-nav')
        </div>
    </div>
</div>
@endsection
