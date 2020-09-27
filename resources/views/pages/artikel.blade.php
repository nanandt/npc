@extends('layouts.default')
@section('title', 'Artikel')

@section('content')
<!-- ##### Breadcrumb Area Start ##### -->
<section
    class="breadcrumb-area bg-img bg-overlay"
    style="background-image: url(img/bg-img/49.jpg)"
>
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2>Berita</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Breadcrumb Area Start ##### -->
<div class="mag-breadcrumb py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#"
                                ><i
                                    class="fa fa-home"
                                    aria-hidden="true"
                                ></i>
                                Home</a
                            >
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Berita</a>
                        </li>
                        <li
                            class="breadcrumb-item active"
                            aria-current="page"
                        >
                            Isi Berita
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Post Details Area Start ##### -->
<section class="post-details-area">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Post Details Content Area -->
            <div class="col-12 col-xl-8">
                <div
                    class="post-details-content bg-white mb-30 p-30 box-shadow"
                >
                    <div class="blog-thumb mb-30">
                        <img src="{{ Storage::url($item->photo) }}" alt="" />
                    </div>
                    <div class="blog-content">
                        <div class="post-meta">
                            <a href="#">MAY 8, 2018</a>
                            <a href="archive.html">lifestyle</a>
                        </div>
                        <h4 class="post-title">
                          {{ $item->title }}
                        </h4>

                        <p>
                          {{ $item->body }}
                        </p>

                        <blockquote>
                            <h6 class="quote-text">
                                “Design is a funny word. Some people
                                think design means how it looks. But of
                                course, if you dig deeper, it's really
                                how it works. The design of the Mac
                                wasn't what it looked like, although
                                that was part of it.”
                            </h6>
                            <h6 class="quote-name">STEVE JOBS</h6>
                        </blockquote>

                        <p>
                            Phasellus laoreet mattis ultrices. Integer
                            ex sem, ultrices eu sem in, laoreet vehicula
                            ligula. Phasellus quistor blandit salah
                            convallis augue. Sed velot dictum sapient.
                            In pulvinar libero turpis. Quisque facilisis
                            bigbang consenti. Nullam bendumaz, massan
                            consequat in gravida porttitor, aguet lacus
                            condimentum mauris, id blandit quam augue
                            eget mana. Etiam denim jeans lacus, nascetur
                            auge bibendum vel pulvinar viverra, mattis
                            sit amet mi. Mauris fringilla, ex vitae
                            maximus fringilla, neque sapien maximus
                            justo, cursus risus neque sed nibh. Donec at
                            urna eros scelerisque non nibh sed.
                        </p>

                        <!-- Like Dislike Share -->
                        <div class="like-dislike-share my-5">
                            <h4 class="share">240<span>Share</span></h4>
                            <a href="#" class="facebook"
                                ><i
                                    class="fa fa-facebook"
                                    aria-hidden="true"
                                ></i>
                                Share on Facebook</a
                            >
                            <a href="#" class="twitter"
                                ><i
                                    class="fa fa-twitter"
                                    aria-hidden="true"
                                ></i>
                                Share on Twitter</a
                            >
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar Widget -->
            <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                <div class="sidebar-area bg-white mb-30 box-shadow">
                    <!-- Sidebar Widget -->
                    <div class="single-sidebar-widget p-30">
                        <!-- Section Title -->
                        <div class="section-heading">
                            <h5>Berita Terbaru</h5>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post d-flex">
                            <div class="post-thumbnail">
                                <img src="img/bg-img/4.jpg" alt="" />
                            </div>
                            <div class="post-content">
                                <a
                                    href="single-post.html"
                                    class="post-title"
                                    >Global Travel And Vacations Luxury
                                    Travel</a
                                >
                                <div
                                    class="post-meta d-flex justify-content-between"
                                >
                                    <a href="#"
                                        ><i
                                            class="fa fa-eye"
                                            aria-hidden="true"
                                        ></i>
                                        34</a
                                    >
                                    <a href="#"
                                        ><i
                                            class="fa fa-thumbs-o-up"
                                            aria-hidden="true"
                                        ></i>
                                        84</a
                                    >
                                    <a href="#"
                                        ><i
                                            class="fa fa-comments-o"
                                            aria-hidden="true"
                                        ></i>
                                        14</a
                                    >
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post d-flex">
                            <div class="post-thumbnail">
                                <img src="img/bg-img/5.jpg" alt="" />
                            </div>
                            <div class="post-content">
                                <a
                                    href="single-post.html"
                                    class="post-title"
                                    >Cruising Destination Ideas</a
                                >
                                <div
                                    class="post-meta d-flex justify-content-between"
                                >
                                    <a href="#"
                                        ><i
                                            class="fa fa-eye"
                                            aria-hidden="true"
                                        ></i>
                                        34</a
                                    >
                                    <a href="#"
                                        ><i
                                            class="fa fa-thumbs-o-up"
                                            aria-hidden="true"
                                        ></i>
                                        84</a
                                    >
                                    <a href="#"
                                        ><i
                                            class="fa fa-comments-o"
                                            aria-hidden="true"
                                        ></i>
                                        14</a
                                    >
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post d-flex">
                            <div class="post-thumbnail">
                                <img src="img/bg-img/6.jpg" alt="" />
                            </div>
                            <div class="post-content">
                                <a
                                    href="single-post.html"
                                    class="post-title"
                                    >The Luxury Of Traveling With</a
                                >
                                <div
                                    class="post-meta d-flex justify-content-between"
                                >
                                    <a href="#"
                                        ><i
                                            class="fa fa-eye"
                                            aria-hidden="true"
                                        ></i>
                                        34</a
                                    >
                                    <a href="#"
                                        ><i
                                            class="fa fa-thumbs-o-up"
                                            aria-hidden="true"
                                        ></i>
                                        84</a
                                    >
                                    <a href="#"
                                        ><i
                                            class="fa fa-comments-o"
                                            aria-hidden="true"
                                        ></i>
                                        14</a
                                    >
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post d-flex">
                            <div class="post-thumbnail">
                                <img src="img/bg-img/7.jpg" alt="" />
                            </div>
                            <div class="post-content">
                                <a
                                    href="single-post.html"
                                    class="post-title"
                                    >Choose The Perfect
                                    Accommodations</a
                                >
                                <div
                                    class="post-meta d-flex justify-content-between"
                                >
                                    <a href="#"
                                        ><i
                                            class="fa fa-eye"
                                            aria-hidden="true"
                                        ></i>
                                        34</a
                                    >
                                    <a href="#"
                                        ><i
                                            class="fa fa-thumbs-o-up"
                                            aria-hidden="true"
                                        ></i>
                                        84</a
                                    >
                                    <a href="#"
                                        ><i
                                            class="fa fa-comments-o"
                                            aria-hidden="true"
                                        ></i>
                                        14</a
                                    >
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post d-flex">
                            <div class="post-thumbnail">
                                <img src="img/bg-img/8.jpg" alt="" />
                            </div>
                            <div class="post-content">
                                <a
                                    href="single-post.html"
                                    class="post-title"
                                    >A Guide To Rocky Mountain
                                    Vacations</a
                                >
                                <div
                                    class="post-meta d-flex justify-content-between"
                                >
                                    <a href="#"
                                        ><i
                                            class="fa fa-eye"
                                            aria-hidden="true"
                                        ></i>
                                        34</a
                                    >
                                    <a href="#"
                                        ><i
                                            class="fa fa-thumbs-o-up"
                                            aria-hidden="true"
                                        ></i>
                                        84</a
                                    >
                                    <a href="#"
                                        ><i
                                            class="fa fa-comments-o"
                                            aria-hidden="true"
                                        ></i>
                                        14</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar Widget -->
                    <div class="single-sidebar-widget p-30">
                        <!-- Social Followers Info -->
                        <div class="social-followers-info">
                            <!-- Facebook -->
                            <a href="#" class="facebook-fans"
                                ><i class="fa fa-facebook"></i
                                >Facebook</a
                            >
                            <!-- Twitter -->
                            <a href="#" class="twitter-followers"
                                ><i class="fa fa-twitter"></i>Twitter</a
                            >
                            <!-- YouTube -->
                            <a href="#" class="youtube-subscribers"
                                ><i class="fa fa-youtube"></i>Youtube</a
                            >
                            <!-- Google -->
                            <a href="#" class="google-followers"
                                ><i class="fa fa-google-plus"></i
                                >Google</a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Post Details Area End ##### -->
@endsection
