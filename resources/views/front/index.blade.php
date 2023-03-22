<x-news-layout>
    <main>

        <!-- slider-area -->
        <section class="courses-area fix"  >
            <div class="container-fluid">

                <div class="row">
                     <div class="col-lg-12 col-md-12">

                       <div class="featured-post-slider-active">
                        @foreach ($posts as $post)

                             <div class="box-slider-post hover-zoomin">
                                {{-- <a href="{{route('post.details',[$post->category->slug,$post->slug])}}" class="img-s"><img src="{{$post->image_url}}" alt="courses-img1"></a> --}}
                                <a href="{{route('post.det',$post->slug)}}" class="img-s"><img src="{{$post->image_url}}" alt="courses-img1"></a>

                              <div class="text">
                                     <div class="post-tags">
                                        <ul>
                                            <li><a href="#" class="c-btn">{{$post->category->name}}</a></li>
                                            <li><a href="#"><span class="icon"><img src="{{$post->image_url}}" alt="courses-img1"></span> {{$post->category->name}}</a></li>
                                        </ul>
                                    </div>
                                   {{-- <h3><a href="{{route('post.details',[$post->category->slug,$post->slug])}}">{{$post->name}}</a></h3> --}}
                                   <h3><a href="{{route('post.det',$post->slug)}}">{{$post->name}}</a></h3>

                                     <div class="post-tags mt-20">
                                        <ul>
                                             <li><a href="{{route('author.posts',$post->user->id)}}"><span class="icon"><i class="fal fa-user-crown"></i></span> {{$post->user->name}}</a></li>
                                             <li><a href="#"><span class="icon"><i class="fal fa-clock"></i></span> {{$post->created_at->format('d/m/y')}}</a></li>
                                             <li><a href="#"><span class="icon"><i class="fal fa-comment"></i></span> {{count($post->comments)}} Comments</a></li>
                                        </ul>
                                    </div>
                               </div>
                           </div>
                           @endforeach

                        </div>


                    </div>


                </div>
            </div>
        </section>

        <!-- slider-area-end -->

        <!-- featured-post-area -->
        <section id="services" class="services-area pt-90 pb-90 fix" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-title mb-50">
                            <h2>
                          {{ trans('front_trans.Popular_Posts') }}
                            </h2>

                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="section-title text-right mt-10">
                           <a href="#">See All Posts <i class="fal fa-long-arrow-right"></i></a>
                        </div>

                    </div>

                </div>
                <div class="row">
                    @foreach ($featuredPosts as $featuredPost)

                     <div class="col-lg-4 col-md-12">

                      <div class="fp-box wow fadeInUp animated hover-zoomin"  data-delay=".4s">
                          <div class="img ">
                              <div class="cat">{{$featuredPost->category->name}}</div>
                               <img src="{{$featuredPost->image_url}}" alt="icon01">
                            </div>
                           <div class="text">
                                <h5><a href="{{route('post.det',$featuredPost->slug)}}">{{$featuredPost->name}}</a></h5>
                               <div class="post-tags mt-20">
                                        <ul>
                                             <li><a href="{{route('author.posts',$featuredPost->user->id)}}"><span class="icon"><i class="fal fa-user-crown"></i></span> {{$featuredPost->user->name}}</a></li>
                                             <li><a href="#"><span class="icon"><i class="fal fa-clock"></i></span> {{$featuredPost->created_at->format('d/m/Y')}}</a></li>

                                        </ul>
                                    </div>
                            </div>
                        </div>


                    </div>
                    @endforeach


                </div>
            </div>
        </section>
         <!-- featured-post-area-end -->
         <!-- top-Stories-post-area -->
        <section class="top-store-post-area pt-90 pb-60 fix" style="background: #f3f8fb;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-title mb-50">
                            <h2>
                         {{ trans('front_trans.Top_Stories') }}
                            </h2>

                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="section-title text-right mt-10">
                           <a href="#">See All Posts <i class="fal fa-long-arrow-right"></i></a>
                        </div>

                    </div>

                </div>
                <div class="row">

                     <div class="col-lg-8 col-md-12">
                         <div class="row">

                            @foreach ($topStories as $topStorie)

                     <div class="col-lg-6 col-md-12">

                      <div class="ts-box wow fadeInUp animated hover-zoomin mb-30"  data-delay=".4s">
                          <div class="img ">
                              <div class="cat">{{$topStorie->category->name}}</div>
                               <img src="{{$topStorie->image_url}}" alt="icon01">
                            </div>
                           <div class="text">
                                <h5><a href="{{route('post.det',$topStorie->slug)}}">{{$topStorie->name}}</a></h5>
                               <div class="post-tags mt-20">
                                        <ul>
                                             <li><a href="{{$topStorie->user->id}}"><span class="icon"><i class="fal fa-user-crown"></i></span>{{$topStorie->user->name}}</a></li>
                                             <li><a href="#"><span class="icon"><i class="fal fa-clock"></i></span> {{$topStorie->created_at->format('d/y/m')}}</a></li>

                                        </ul>
                                    </div>
                            </div>
                        </div>


                    </div>
                    @endforeach

                         </div>
                    </div>
                     <div class="col-lg-4 col-md-12">

                        @foreach ($topStoriesOffest as $offest)

                      <div class="ts-box2 wow fadeInUp animated mb-30"  data-delay=".4s">
                          <div class="row">
                             <div class="col-lg-4 col-md-12 col-sm-12">
                              <div class="img">
                               <img src="{{$offest->image_url}}" alt="icon01">
                            </div>
                              </div>
                               <div class="col-lg-8 col-md-12 col-sm-12">
                              <div class="text">
                                <h5><a href="{{route('post.det',$offest->slug)}}">{{$offest->name}}</a></h5>
                               <div class="post-tags mt-10">
                                        <ul>

                                             <li><a href="#"><span class="icon"><i class="fal fa-clock"></i></span> {{$offest->created_at->format('d/y/m')}}</a></li>

                                        </ul>
                                    </div>
                            </div>
                              </div>
                          </div>
                        </div>
                        @endforeach

                    </div>

                </div>
            </div>
        </section>
         <!-- top-Stories-post-area-end -->

        <!-- feature-vedio-post-area -->

         <!-- feature-vedio-post-area-end -->
           <!-- top-post-post-area -->
        <section class="top-store-post-area pt-90 pb-60 fix" style="background: #f3f8fb;">
            <div class="container">
                  <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-title mb-50">
                            <h2>
                         {{ trans('front_trans.Top_Posts') }}
                            </h2>

                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="section-title text-right mt-10">
                           <a href="#">See All Posts <i class="fal fa-long-arrow-right"></i></a>
                        </div>

                    </div>

                </div>
                    <div class="row">

                        @foreach ($posts as $post)

                     <div class="col-lg-6 col-md-12">
                         <div class="tps-box wow fadeInUp animated hover-zoomin mb-30"  data-delay=".4s">
                          <div class="img ">
                              <div class="cat">{{$post->category->name}}</div>
                               <img src="
                               {{$post->image_url}}" alt="icon01">
                            </div>
                           <div class="text">
                                <h5><a href="{{route('post.det',$topStorie->slug)}}">{{$post->name}}</a></h5>
                               {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis vel hendrerit.</p> --}}
                               <div class="post-tags mt-20">
                                        <ul>
                                             <li><a href="{{route('author.posts',$post->user->id)}}"><span class="icon"><i class="fal fa-user-crown"></i></span> {{$post->user->name}}</a></li>
                                             <li><a href="#"><span class="icon"><i class="fal fa-clock"></i></span> {{$post->created_at->format('d/m/y')}}</a></li>
                                        </ul>
                                    </div>
                            </div>
                        </div>


                    </div>
                    @endforeach



                </div>

                </div>

                <div class="col-sm-12 col-md-12 col-lg-4">
                   <aside class="sidebar-top-post">
                       <section class="subscribe mb-60">
                            <img src="{{asset('front/img/icon/email-s.png')}}" alt="email-s"/>
                           <h4>{{ trans('front_trans.Subscribe_Now') }}</h4>
                           <p>No spam, notifications only about new products, updates</p>
                           <form role="search" method="get" class="search-form" action="{{route('newslatter.store')}}">
                            <label>
                            <span class="screen-reader-text"></span>
                            <input type="search" class="search-field" placeholder="Subscribe Now" value="" name="email">
                            </label>
                            <input type="submit" class="search-submit" value="send">
                         </form>
                       </section>
                       <x-social/>
                       <section class="best-store mb-60">
                            <h2>{{ trans('front_trans.Top_Stories') }}</h2>

                            @foreach ($postsOffset as $post)

                        <div class="ts-box2 wow fadeInUp animated mb-30"  data-delay=".4s">
                          <div class="row">
                            <div class="col-lg-4">
                              <div class="img">
                               <img src="{{$post->image_url}}" alt="icon01">
                            </div>
                              </div>
                              <div class="col-lg-8">
                              <div class="text">
                                <h5><a href="{{route('post.det',$post->slug)}}">{{$post->name}}</a></h5>
                               <div class="post-tags mt-10">
                                        <ul>

                                             <li><a href="#"><span class="icon"><i class="fal fa-clock"></i></span>{{$post->created_at->format('d/m/y')}}</a></li>

                                        </ul>
                                    </div>
                            </div>
                              </div>
                          </div>
                        </div>

                        @endforeach

                       </section>


                    </aside>

            </div>
            </div>
            </div>
        </section>
         <!-- top-Stories-post-area-end -->


         <!-- recent-post-area -->

         <!-- recent-post-area-end -->


        <!-- editor-choice -->
        <section id="editor-choice" class="editor-choice-area pt-90 pb-60 fix" style="background: #f3f8fb;" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title center-align mb-50">

                            <h2>
                                {{ trans('front_trans.Editors') }}
                            </h2>

                        </div>

                    </div>

                </div>
                <div class="row home-blog-active">

                    @foreach ($editors as $editor)

                    <div class="col-lg-5 col-md-12">

                      <div class="fp-box wow fadeInUp animated hover-zoomin mb-30"  data-delay=".4s">
                          <div class="img ">

                               <img src="img/blog/lifestyle/lf-1.jpg" alt="icon01">
                            </div>
                           <div class="text">
                                <h5><a href="{{route('author.posts',$editor->id)}}">{{$editor->name}}</a></h5>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </section>
        <!-- case-study-end -->





    </main>
</x-news-layout>
