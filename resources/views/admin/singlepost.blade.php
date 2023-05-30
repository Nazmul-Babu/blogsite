@extends('bloglayout')
@section('navbar')
@include('partials.navbar')
@endsection
@section('header')
@include('partials.header')
@endsection
@section('content')
  <!--Contents-->
  <main class="blog-page style-5">


    <!-- ====== start all-news ====== -->
    <section class="all-news section-padding pt-50 blog bg-transparent style-3">
        <div class="container">
            <div class="blog-details-slider mb-100">
                <div class="section-head text-center mb-60 style-5">
                    <h2 class="mb-20 color-000"> Crypto Trend 2023 </h2>
                    <small class="d-block date text">
                        <a href="#" class="text-uppercase border-end brd-gray pe-3 me-3 color-blue5 fw-bold"> news </a>
                        <i class="bi bi-clock me-1"></i>
                        <span class="op-8">Posted on 15 Days ago</span>
                    </small>
                </div>
                <div class="content-card">
                    <div class="img">
                        <img src="assets/img/blog/1.jpeg" alt="">
                    </div>
                    
                </div>
            </div>
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-8">
                    <div class="d-flex small align-items-center justify-content-between mb-70 fs-12px">
                        <div class="l_side d-flex align-items-center">
                            <a href="#" class="me-3 me-lg-5">
                                <span class="icon-20 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-main p-1 me-2 text-white">
                                    a
                                </span>
                                <span class="">
                                    By Admin
                                </span>
                            </a>
                            <a href="#" class="me-3 me-lg-5">
                                <i class="bi bi-chat-left-text me-1"></i>
                                <span>24 Comments</span>
                            </a>
                            <a href="#">
                                <i class="bi bi-eye me-1"></i>
                                <span>774k Views</span>
                            </a>
                        </div>
                        <div class="r-side mt-1">
                            <a href="#">
                                <i class="bi bi-info-circle me-1"></i>
                                <span>Report</span>
                            </a>
                        </div>
                    </div>

                    <div class="blog-content-info">
                        <h4 class="fw-bold color-000 lh-4 mb-30">To mark the first UK show of artist Henri Barande, developer <a href="#" class="color-blue5">Moussa</a> and German studio Schultzschultz  have created The Lodge Wooden at Berlin City</h4>
                        <div class="text mb-10 color-666">
                            Today most people get on average 4 to 6 hours of exercise every day, and make sure that everything they put in their mouths is not filled with sugars or preservatives, but they pay no attention to their mental health, no vacations, not even the occasional long weekend. All of this for hopes of one day getting that big promotion.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis enim vero deleniti! Eius perspiciatis cupiditate laboriosam quidem nam accusantium iusto perferendis suscipit excepturi, est aut minus voluptatum non eum earum!
                        </div>
                        {{-- <div class="text color-666 mb-20">
                            Coventry is a city with a thousand years of history that has plenty to offer the visiting tourist. <br> Located in the heart of Warwickshire.
                        </div> --}}
                        <div class="info-imgs">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="img text-center mt-30">
                                        <img src="assets/img/blog/13.png" alt="">
                                        <span class="color-999 fs-12px mt-20">Images by <a href="#" class="color-000">@sample</a> </span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="img text-center mt-30">
                                        <img src="assets/img/blog/14.png" alt="">
                                        <span class="color-999 fs-12px mt-20">Images by <a href="#" class="color-000">@sample</a> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text mt-50 color-666">
                            The short answer is yes. According to Kross, when you think of yourself as another person, it allows you lorem ispum lorem suo give yourself more. Notre dame at sume lorem objective, helpful feedback.
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum asperiores sint perspiciatis amet harum obcaecati, eveniet recusandae reiciendis atque sequi temporibus optio officia repudiandae debitis consequuntur non iste, quia dignissimos!
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus veniam, id voluptatibus consectetur itaque eum asperiores? Ab itaque eius earum, corporis ratione non aut dolore totam laudantium suscipit, libero iusto.
                        </div>
                        {{-- blog comment start  --}}

                         @include('partials.blogcomment')
                        {{-- blog comment end  --}}

                    </div>
                </div>
                   {{-- rightbar start  --}}
                   @include('partials.rightbar')

                   {{-- rightbar end  --}}

            </div>
        </div>
    </section>
    <!-- ====== end all-news ====== -->


    <!-- ====== start Popular Posts ====== -->
    <section class="popular-posts related Posts section-padding pb-100 bg-gray5">
        <div class="container">
            <h5 class="fw-bold text-uppercase mb-50">Related Posts</h5>
            <div class="related-postes-slider position-relative">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card border-0 bg-transparent rounded-0 p-0  d-block">
                                <a href="page-single-post-5.html" class="img radius-7 overflow-hidden img-cover">
                                    <img src="assets/img/blog/1.jpeg" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body px-0">
                                    <small class="d-block date mt-10 fs-10px fw-bold">
                                        <a href="#" class="text-uppercase border-end brd-gray pe-3 me-3 color-blue5">News</a>
                                        <i class="bi bi-clock me-1"></i>
                                        <a href="#" class="op-8">Posted on 3 Days ago</a>
                                    </small>
                                    <h5 class="fw-bold mt-10 title">
                                        <a href="page-single-post-5.html">Crypto Trend 2023</a>
                                    </h5>
                                    <p class="small mt-2 op-8">If there’s one way that wireless technology has
                                        changed the way we work.
                                    </p>
                                    <div class="d-flex small mt-20 align-items-center justify-content-between op-9">
                                        <div class="l_side d-flex align-items-center">
                                            <span class="icon-20 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-main p-1 me-2 text-white">
                                                a
                                            </span>
                                            <a href="#" class="mt-1">
                                                By Admin
                                            </a>
                                        </div>
                                        <div class="r-side mt-1">
                                            <i class="bi bi-chat-left-text me-1"></i>
                                            <a href="#">24</a>
                                            <i class="bi bi-eye ms-4 me-1"></i>
                                            <a href="#">774k</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card border-0 bg-transparent rounded-0 p-0  d-block">
                                <a href="page-single-post-5.html" class="img radius-7 overflow-hidden img-cover">
                                    <img src="assets/img/blog/7.png" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body px-0">
                                    <small class="d-block date mt-10 fs-10px fw-bold">
                                        <a href="#" class="text-uppercase border-end brd-gray pe-3 me-3 color-blue5">News</a>
                                        <i class="bi bi-clock me-1"></i>
                                        <a href="#" class="op-8">Posted on 3 Days ago</a>
                                    </small>
                                    <h5 class="fw-bold mt-10 title">
                                        <a href="page-single-post-5.html">AI With Fingerprint</a>
                                    </h5>
                                    <p class="small mt-2 op-8">If there’s one way that wireless technology has
                                        changed the way we work.
                                    </p>
                                    <div class="d-flex small mt-20 align-items-center justify-content-between op-9">
                                        <div class="l_side d-flex align-items-center">
                                            <span class="icon-20 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-main p-1 me-2 text-white">
                                                a
                                            </span>
                                            <a href="#" class="mt-1">
                                                By Admin
                                            </a>
                                        </div>
                                        <div class="r-side mt-1">
                                            <i class="bi bi-chat-left-text me-1"></i>
                                            <a href="#">24</a>
                                            <i class="bi bi-eye ms-4 me-1"></i>
                                            <a href="#">774k</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card border-0 bg-transparent rounded-0 p-0  d-block">
                                <a href="page-single-post-5.html" class="img radius-7 overflow-hidden img-cover">
                                    <img src="assets/img/blog/5.png" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body px-0">
                                    <small class="d-block date mt-10 fs-10px fw-bold">
                                        <a href="#" class="text-uppercase border-end brd-gray pe-3 me-3 color-blue5">News</a>
                                        <i class="bi bi-clock me-1"></i>
                                        <a href="#" class="op-8">Posted on 3 Days ago</a>
                                    </small>
                                    <h5 class="fw-bold mt-10 title">
                                        <a href="page-single-post-5.html">NFT Game! New Oppoturnity</a>
                                    </h5>
                                    <p class="small mt-2 op-8">If there’s one way that wireless technology has
                                        changed the way we work.
                                    </p>
                                    <div class="d-flex small mt-20 align-items-center justify-content-between op-9">
                                        <div class="l_side d-flex align-items-center">
                                            <span class="icon-20 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-main p-1 me-2 text-white">
                                                a
                                            </span>
                                            <a href="#" class="mt-1">
                                                By Admin
                                            </a>
                                        </div>
                                        <div class="r-side mt-1">
                                            <i class="bi bi-chat-left-text me-1"></i>
                                            <a href="#">24</a>
                                            <i class="bi bi-eye ms-4 me-1"></i>
                                            <a href="#">774k</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>
    <!-- ====== end Popular Posts ====== -->

</main>
<!--End-Contents-->
@endsection
