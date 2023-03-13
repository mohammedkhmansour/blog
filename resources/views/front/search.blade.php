<x-news-layout>
    <main>
        <!-- breadcrumb-area -->
        <section class="breadcrumb-area d-flex align-items-center" style="background-image:url(img/testimonial/test-bg.png)">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="breadcrumb-wrap text-left">
                            <div class="breadcrumb-title">
                                <h2>Blog</h2>
                                <div class="breadcrumb-wrap">

                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
                                </ol>
                            </nav>
                        </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->
        <!-- inner-blog -->
        <section class="inner-blog pt-90 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        @foreach ($posts as $post)

                        <div class="bsingle__post mb-50">
                            <div class="bsingle__post-thumb">
                                <img src="{{$post->image_url}}" alt="fitness">
                            </div>
                            <div class="bsingle__content">
                                <div class="admin">
                                    <a href="#"><i class="far fa-user"></i> {{$post->user->name}}</a>
                                </div>


                                <h2><a href="{{$post->post_url}}">{{$post->name}}</a></h2>
                                <p>{!! Str::limit($post->description, 20, '..') !!}</p>
                                <div class="meta-info">
                                    <ul>
                                        <li><i class="fal fa-eye"></i> 100 Views  </li>
                                        <li><i class="fal fa-comments"></i> 35 Comments</li>
                                        <li><i class="fal fa-calendar-alt"></i> {{$post->created_at->format('d/m/Y')}}</li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        @endforeach
                        {{ $posts->links() }}

                        {{-- <div class="pagination-wrap">
                            <nav>
                                <ul class="pagination">
                                    <li class="page-item"><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                    <li class="page-item active"><a href="#">1</a></li>
                                    <li class="page-item"><a href="#">2</a></li>
                                    <li class="page-item"><a href="#">3</a></li>
                                    <li class="page-item"><a href="#">...</a></li>
                                    <li class="page-item"><a href="#">10</a></li>
                                    <li class="page-item"><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                                </ul>
                            </nav>
                        </div> --}}
                    </div>
                    <!-- #right side -->
<div class="col-sm-12 col-md-12 col-lg-4">
    <x-sidebar/>
</div>
<!-- #right side end -->

                </div>
            </div>
        </section>
        <!-- inner-blog-end -->



    </main>
    <!-- main-area-end -->
</x-news-layout>
