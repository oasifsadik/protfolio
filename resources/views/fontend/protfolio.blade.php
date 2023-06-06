@extends('fontend.master')

@section('content')
@include('fontend.layout.toggol-nav')
<main class="main__content_wrapper inner__page--content">

    <div class="page__heading">
        <h1 class="page__heading--title">MY PORTFOLIO</h1>
        <h2 class="page__heading--subtitle">MY <span>PORTFOLIO</span></h2>
    </div>

     <!-- Start portfolio section -->
     <section class="portfolio__section section--padding">
        <div class="container">
            <div class="portfolio__section--inner">
                <div class="button-group filters-button-group mb-50">
                    <button class="filters__button--items button is-checked" data-filter="*">Show All</button>
                    <button class="filters__button--items button" data-filter=".web">Web</button>
                    <button class="filters__button--items button" data-filter=".graphics">Graphics</button>
                    <button class="filters__button--items button" data-filter=".development">Development</button>
                    <button class="filters__button--items button" data-filter=".mobile">Mobile</button>
                </div>
                <div class="portfolio__grid mb--n30">
                    <div class="element-item web" data-category="web">
                        <div class="portfolio__card">
                            <a href="#" class="popup-modal--open display-block" data-bs-toggle="modal" data-bs-target="#portfolioModal">
                                <div class="portfolio__image--card">
                                <img src="{{ asset('fontend') }}/assets/img/other/portfolio1.png" alt="img">
                                </div>
                                <div class="portfolio__content">
                                    <span class="portfolio__zoom text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg>
                                    </span>
                                    <h3 class="portfolio__title text-white">Illustration</h3>
                                    <p class="portfolio__desc text-white">Promote your blog posts, case udie, and thehe branded videos.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="element-item graphics" data-category="graphics">
                        <div class="portfolio__card">
                            <a href="#" class="popup-modal--open display-block" data-bs-toggle="modal" data-bs-target="#portfolioModal">
                                <div class="portfolio__image--card">
                                <img src="{{ asset('fontend') }}/assets/img/other/portfolio2.png" alt="img">
                                </div>
                                <div class="portfolio__content">
                                    <span class="portfolio__zoom text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg>
                                    </span>
                                    <h3 class="portfolio__title text-white">Illustration</h3>
                                    <p class="portfolio__desc text-white">Promote your blog posts, case udie, and thehe branded videos.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="element-item development" data-category="development">
                        <div class="portfolio__card">
                            <a href="#" class="popup-modal--open display-block" data-bs-toggle="modal" data-bs-target="#portfolioModal">
                                <div class="portfolio__image--card">
                                <img src="{{ asset('fontend') }}/assets/img/other/portfolio3.png" alt="img">
                                </div>
                                <div class="portfolio__content">
                                    <span class="portfolio__zoom text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg>
                                    </span>
                                    <h3 class="portfolio__title text-white">Illustration</h3>
                                    <p class="portfolio__desc text-white">Promote your blog posts, case udie, and thehe branded videos.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="element-item mobile" data-category="mobile">
                        <div class="portfolio__card">
                            <a href="#" class="popup-modal--open display-block" data-bs-toggle="modal" data-bs-target="#portfolioModal">
                                <div class="portfolio__image--card">
                                <img src="{{ asset('fontend') }}/assets/img/other/portfolio4.png" alt="img">
                                </div>
                                <div class="portfolio__content">
                                    <span class="portfolio__zoom text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg>
                                    </span>
                                    <h3 class="portfolio__title text-white">Illustration</h3>
                                    <p class="portfolio__desc text-white">Promote your blog posts, case udie, and thehe branded videos.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="element-item web" data-category="web">
                        <div class="portfolio__card">
                            <a href="#" class="popup-modal--open display-block" data-bs-toggle="modal" data-bs-target="#portfolioModal">
                                <div class="portfolio__image--card">
                                <img src="{{ asset('fontend') }}/assets/img/other/portfolio5.png" alt="img">
                                </div>
                                <div class="portfolio__content">
                                    <span class="portfolio__zoom text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg>
                                    </span>
                                    <h3 class="portfolio__title text-white">Illustration</h3>
                                    <p class="portfolio__desc text-white">Promote your blog posts, case udie, and thehe branded videos.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="element-item graphics" data-category="graphics">
                        <div class="portfolio__card">
                            <a href="#" class="popup-modal--open display-block" data-bs-toggle="modal" data-bs-target="#portfolioModal">
                                <div class="portfolio__image--card">
                                <img src="{{ asset('fontend') }}/assets/img/other/portfolio6.png" alt="img">
                                </div>
                                <div class="portfolio__content">
                                    <span class="portfolio__zoom text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg>
                                    </span>
                                    <h3 class="portfolio__title text-white">Illustration</h3>
                                    <p class="portfolio__desc text-white">Promote your blog posts, case udie, and thehe branded videos.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="element-item development" data-category="development">
                        <div class="portfolio__card">
                            <a href="#" class="popup-modal--open display-block" data-bs-toggle="modal" data-bs-target="#portfolioModal">
                                <div class="portfolio__image--card">
                                <img src="{{ asset('fontend') }}/assets/img/other/portfolio7.png" alt="img">
                                </div>
                                <div class="portfolio__content">
                                    <span class="portfolio__zoom text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg>
                                    </span>
                                    <h3 class="portfolio__title text-white">Illustration</h3>
                                    <p class="portfolio__desc text-white">Promote your blog posts, case udie, and thehe branded videos.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="element-item web" data-category="web">
                        <div class="portfolio__card">
                            <a href="#" class="popup-modal--open display-block" data-bs-toggle="modal" data-bs-target="#portfolioModal">
                                <div class="portfolio__image--card">
                                <img src="{{ asset('fontend') }}/assets/img/other/portfolio8.png" alt="img">
                                </div>
                                <div class="portfolio__content">
                                    <span class="portfolio__zoom text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg>
                                    </span>
                                    <h3 class="portfolio__title text-white">Illustration</h3>
                                    <p class="portfolio__desc text-white">Promote your blog posts, case udie, and thehe branded videos.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="element-item mobile" data-category="mobile">
                        <div class="portfolio__card">
                            <a href="#" class="popup-modal--open display-block" data-bs-toggle="modal" data-bs-target="#portfolioModal">
                                <div class="portfolio__image--card">
                                <img src="{{ asset('fontend') }}/assets/img/other/portfolio9.png" alt="img">
                                </div>
                                <div class="portfolio__content">
                                    <span class="portfolio__zoom text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg>
                                    </span>
                                    <h3 class="portfolio__title text-white">Illustration</h3>
                                    <p class="portfolio__desc text-white">Promote your blog posts, case udie, and thehe branded videos.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End portfolio section -->

</main>

<div class="modal fade" id="portfolioModal" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered portfolio__modal--dialog">
      <div class="modal-content modal-content-height">
        <button type="button" class="btn-close portfolio__modal--colse" data-bs-dismiss="modal" aria-label="Close">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
        </button>
        <div class="modal-body portfolio__modal--body">
            <h2 class="portfolio__modal--title text-center mb-30">Illustration Project</h2>
            <div class="portfolio__modal--info d-flex align-items-center mb-20">
                <div class="portfolio__modal--info--list">
                    <p class="portfolio__modal--info--text">
                        <span class="portfolio__modal--info__icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg></span>
                        Project :
                        <span class="portfolio__modal--info__name">Website</span>
                    </p>
                    <p class="portfolio__modal--info--text">
                        <span class="portfolio__modal--info__icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-code"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg></span>
                        Languages :
                        <span class="portfolio__modal--info__name">Photoshop, Illustration</span>
                    </p>
                </div>
                <div class="portfolio__modal--info--list">
                    <p class="portfolio__modal--info--text">
                        <span class="portfolio__modal--info__icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></span>
                        Client :
                        <span class="portfolio__modal--info__name">Envato</span>
                    </p>
                    <p class="portfolio__modal--info--text">
                        <span class="portfolio__modal--info__icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-external-link"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg></span>
                        Preview :
                        <a class="portfolio__modal--info__name" href="https://www.envato.com/" target="_blank" rel="noopener noreferrer">www.envato.com</a>
                    </p>
                </div>
            </div>
            <p class="portfolio__modal--info__desc mb-30">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia placeat magnam possimus iusto blanditiis pariatur labore explicabo quo repellat hic dolorum numquam asperiores, voluptatum fugiat reiciendis aspernatur, non, odio aperiam voluptas ex tempora vitae. Dolor, consequatur quidem! Quas magni distinctio dolorum dolore natus, vel numquam accusamus. Nostrum eligendi recusandae qui tempore deserunt!
            </p>
            <div class="portfolio__modal--info__media">
                <img src="{{ asset('fontend') }}/assets/img/other/portfolio-big1.png" alt="img">
            </div>
        </div>
      </div>
    </div>
</div>
@endsection
