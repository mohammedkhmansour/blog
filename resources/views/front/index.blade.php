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
                                             <li><a href="#"><span class="icon"><i class="fal fa-user-crown"></i></span> {{$post->user->name}}</a></li>
                                             <li><a href="#"><span class="icon"><i class="fal fa-clock"></i></span> {{$post->created_at}}</a></li>
                                             <li><a href="#"><span class="icon"><i class="fal fa-comment"></i></span> 147 Comments</a></li>
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
                          Featured Posts
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
                     <div class="col-lg-4 col-md-12">

                      <div class="fp-box wow fadeInUp animated hover-zoomin"  data-delay=".4s">
                          <div class="img ">
                              <div class="cat">LIFE STYLE</div>
                               <img src="img/blog/lifestyle/lf-1.jpg" alt="icon01">
                            </div>
                           <div class="text">
                                <h5><a href="blog-details.html">Guide to Picking the Best Travel Card</a></h5>
                               <div class="post-tags mt-20">
                                        <ul>
                                             <li><a href="#"><span class="icon"><i class="fal fa-user-crown"></i></span> Johen Doe</a></li>
                                             <li><a href="#"><span class="icon"><i class="fal fa-clock"></i></span> 12 March, 2021</a></li>

                                        </ul>
                                    </div>
                            </div>
                        </div>


                    </div>
                     <div class="col-lg-4 col-md-12">

                      <div class="fp-box wow fadeInUp animated hover-zoomin"  data-delay=".4s">
                          <div class="img ">
                              <div class="cat">TRAVEL</div>
                               <img src="img/blog/travel/tr-7.jpg" alt="icon01">
                            </div>
                           <div class="text">
                                <h5><a href="blog-details.html">If you want to find your life, you go to nature.</a></h5>
                               <div class="post-tags mt-20">
                                        <ul>
                                             <li><a href="#"><span class="icon"><i class="fal fa-user-crown"></i></span> Johen Doe</a></li>
                                             <li><a href="#"><span class="icon"><i class="fal fa-clock"></i></span> 12 March, 2021</a></li>

                                        </ul>
                                    </div>
                            </div>
                        </div>


                    </div>
                     <div class="col-lg-4 col-md-12">

                      <div class="fp-box wow fadeInUp animated hover-zoomin"  data-delay=".4s">
                          <div class="img ">
                              <div class="cat">MUSIC</div>
                               <img src="img/blog/music/mc-1.jpg" alt="icon01">
                            </div>
                           <div class="text">
                                <h5><a href="blog-details.html">Try to be happy all the time no matter.</a></h5>
                               <div class="post-tags mt-20">
                                        <ul>
                                             <li><a href="#"><span class="icon"><i class="fal fa-user-crown"></i></span> Johen Doe</a></li>
                                             <li><a href="#"><span class="icon"><i class="fal fa-clock"></i></span> 12 March, 2021</a></li>

                                        </ul>
                                    </div>
                            </div>
                        </div>


                    </div>

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
                         Top Stories
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
                          <div class="col-lg-6 col-md-12">

                      <div class="ts-box wow fadeInUp animated hover-zoomin mb-30"  data-delay=".4s">
                          <div class="img ">
                              <div class="cat">FASHION</div>
                               <img src="img/blog/fashion/fs-3.jpg" alt="icon01">
                            </div>
                           <div class="text">
                                <h5><a href="blog-details.html">3 Technology Basics You Reviewing Constantly.</a></h5>
                               <div class="post-tags mt-20">
                                        <ul>
                                             <li><a href="#"><span class="icon"><i class="fal fa-user-crown"></i></span> Johen Doe</a></li>
                                             <li><a href="#"><span class="icon"><i class="fal fa-clock"></i></span> 12 March, 2021</a></li>

                                        </ul>
                                    </div>
                            </div>
                        </div>


                    </div>
                     <div class="col-lg-6 col-md-12">

                      <div class="ts-box wow fadeInUp animated hover-zoomin mb-30"  data-delay=".4s">
                          <div class="img ">
                              <div class="cat">EDUCATION</div>
                               <img src="img/blog/eductions/ed-7.jpg" alt="icon01">
                            </div>
                           <div class="text">
                                <h5><a href="blog-details.html">Best friends in high school life. I miss all time.</a></h5>
                               <div class="post-tags mt-20">
                                        <ul>
                                             <li><a href="#"><span class="icon"><i class="fal fa-user-crown"></i></span> Johen Doe</a></li>
                                             <li><a href="#"><span class="icon"><i class="fal fa-clock"></i></span> 12 March, 2021</a></li>

                                        </ul>
                                    </div>
                            </div>
                        </div>


                    </div>
                         </div>
                    </div>
                     <div class="col-lg-4 col-md-12">

                      <div class="ts-box2 wow fadeInUp animated mb-30"  data-delay=".4s">
                          <div class="row">
                             <div class="col-lg-4 col-md-12 col-sm-12">
                              <div class="img">
                               <img src="img/blog/music/mc-3.jpg" alt="icon01">
                            </div>
                              </div>
                               <div class="col-lg-8 col-md-12 col-sm-12">
                              <div class="text">
                                <h5><a href="blog-details.html">This Not Just A Photo But It Best</a></h5>
                               <div class="post-tags mt-10">
                                        <ul>

                                             <li><a href="#"><span class="icon"><i class="fal fa-clock"></i></span> 12 March, 2021</a></li>

                                        </ul>
                                    </div>
                            </div>
                              </div>
                          </div>
                        </div>
                         <div class="ts-box2 wow fadeInUp animated mb-30"  data-delay=".4s">
                          <div class="row">
                            <div class="col-lg-4 col-md-12 col-sm-12">
                              <div class="img">
                               <img src="img/blog/travel/tr-6.jpg" alt="icon01">
                            </div>
                              </div>
                                <div class="col-lg-8 col-md-12">
                              <div class="text">
                                <h5><a href="blog-details.html">We have to keep every chapter</a></h5>
                               <div class="post-tags mt-10">
                                        <ul>

                                             <li><a href="#"><span class="icon"><i class="fal fa-clock"></i></span> 12 March, 2021</a></li>

                                        </ul>
                                    </div>
                            </div>
                              </div>
                          </div>
                        </div>
                         <div class="ts-box2 wow fadeInUp animated mb-30"  data-delay=".4s">
                          <div class="row">
                            <div class="col-lg-4">
                              <div class="img">
                               <img src="img/blog/music/mc-1.jpg" alt="icon01">
                            </div>
                              </div>
                              <div class="col-lg-8">
                              <div class="text">
                                <h5><a href="blog-details.html">Never eat extra fatty foods.</a></h5>
                               <div class="post-tags mt-10">
                                        <ul>

                                             <li><a href="#"><span class="icon"><i class="fal fa-clock"></i></span> 12 March, 2021</a></li>

                                        </ul>
                                    </div>
                            </div>
                              </div>
                          </div>
                        </div>


                    </div>

                </div>
            </div>
        </section>
         <!-- top-Stories-post-area-end -->

        <!-- feature-vedio-post-area -->
        <section class="fv-post-area pt-90 pb-60 fix" style="background: #010e2e;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-title mb-50">
                            <h2>
                        Featured Videos
                            </h2>

                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="section-title text-right mt-10">
                           <a href="#">See All VIDEOS <i class="fal fa-long-arrow-right"></i></a>
                        </div>

                    </div>

                </div>
                <div class="row">
                     <div class="col-lg-4 col-md-12">

                      <div class="fv-box wow fadeInUp animated mb-30"  data-delay=".4s">
                          <div class="img ">
                              <div class="cat">FASHION</div>
                               <a href="https://www.youtube.com/watch?v=gyGsPlt06bo" class="video-i popup-video"> <img src="img/icon/play-icon.png" alt="img" class="active-icon"></a>
                               <img src="img/blog/fashion/fs-2.jpg" alt="icon01">
                            </div>
                           <div class="text">
                                <h5><a href="blog-details.html">3 Technology Basics You Reviewing Constantly.</a></h5>
                               <div class="post-tags mt-20">
                                        <ul>
                                             <li><a href="#"><span class="icon"><i class="fal fa-user-crown"></i></span> Johen Doe</a></li>
                                             <li><a href="#"><span class="icon"><i class="fal fa-clock"></i></span> 12 March, 2021</a></li>

                                        </ul>
                                    </div>
                            </div>
                        </div>
                          <div class="fv-box wow fadeInUp animated mb-30"  data-delay=".4s">
                          <div class="img ">
                              <div class="cat">FOOD</div>
                               <a href="https://www.youtube.com/watch?v=gyGsPlt06bo" class="video-i popup-video"> <img src="img/icon/play-icon.png" alt="img" class="active-icon"></a>
                               <img src="img/blog/food/fd-1.jpg" alt="icon01">
                            </div>
                           <div class="text">
                                <h5><a href="blog-details.html">Never eat extra fatty foods. Possibility of health damage.</a></h5>
                               <div class="post-tags mt-20">
                                        <ul>
                                             <li><a href="#"><span class="icon"><i class="fal fa-user-crown"></i></span> Johen Doe</a></li>
                                             <li><a href="#"><span class="icon"><i class="fal fa-clock"></i></span> 12 March, 2021</a></li>

                                        </ul>
                                    </div>
                            </div>
                        </div>

                    </div>
                     <div class="col-lg-8 col-md-12">

                      <div class="fv-box fv-box2 wow fadeInUp animated mb-30"  data-delay=".4s">
                          <div class="img ">
                              <div class="cat">HISTORY</div>
                             <a href="https://www.youtube.com/watch?v=gyGsPlt06bo" class="video-i popup-video"> <img src="img/icon/play-icon.png" alt="img" class="active-icon"></a>
                               <img src="img/blog/travel/tr-10.jpg" alt="icon01">
                            </div>
                           <div class="text">
                                <h5><a href="blog-details.html">One day the cities of two thousand and twenty years will become history.</a></h5>
                               <div class="post-tags mt-20">
                                        <ul>
                                             <li><a href="#"><span class="icon"><i class="fal fa-user-crown"></i></span> Johen Doe</a></li>
                                             <li><a href="#"><span class="icon"><i class="fal fa-clock"></i></span> 12 March, 2021</a></li>

                                        </ul>
                                    </div>
                            </div>
                        </div>


                    </div>


                </div>
            </div>
        </section>
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
                         Top Posts
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

                     <div class="col-lg-6 col-md-12">
                         <div class="tps-box wow fadeInUp animated hover-zoomin mb-30"  data-delay=".4s">
                          <div class="img ">
                              <div class="cat">LIFE STYLE</div>
                               <img src="img/blog/lifestyle/lf-7.jpg" alt="icon01">
                            </div>
                           <div class="text">
                                <h5><a href="blog-details.html">Los angeles compound he is trying to sell</a></h5>
                               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis vel hendrerit.</p>
                               <div class="post-tags mt-20">
                                        <ul>
                                             <li><a href="#"><span class="icon"><i class="fal fa-user-crown"></i></span> Johen Doe</a></li>
                                             <li><a href="#"><span class="icon"><i class="fal fa-clock"></i></span> 12 March, 2021</a></li>
                                        </ul>
                                    </div>
                            </div>
                        </div>


                    </div>
                     <div class="col-lg-6 col-md-12">
                      <div class="tps-box wow fadeInUp animated hover-zoomin mb-30"  data-delay=".4s">
                          <div class="img ">
                              <div class="cat">FOOD</div>
                               <img src="img/blog/food/fd-7.jpg" alt="icon01">
                            </div>
                           <div class="text">
                                <h5><a href="blog-details.html">How to Make Choreg Armenia's Eggy</a></h5>
                               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis vel hendrerit.</p>
                               <div class="post-tags mt-20">
                                        <ul>
                                             <li><a href="#"><span class="icon"><i class="fal fa-user-crown"></i></span> Johen Doe</a></li>
                                             <li><a href="#"><span class="icon"><i class="fal fa-clock"></i></span> 12 March, 2021</a></li>
                                        </ul>
                                    </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-6 col-md-12">
                         <div class="tps-box wow fadeInUp animated hover-zoomin mb-30"  data-delay=".4s">
                          <div class="img ">
                              <div class="cat">MUSIC</div>
                               <img src="img/blog/music/mc-10.jpg" alt="icon01">
                            </div>
                           <div class="text">
                                <h5><a href="blog-details.html">Essential Qualities of Highly Successful Music.</a></h5>
                               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis vel hendrerit.</p>
                               <div class="post-tags mt-20">
                                        <ul>
                                             <li><a href="#"><span class="icon"><i class="fal fa-user-crown"></i></span> Johen Doe</a></li>
                                             <li><a href="#"><span class="icon"><i class="fal fa-clock"></i></span> 12 March, 2021</a></li>
                                        </ul>
                                    </div>
                            </div>
                        </div>


                    </div>
                     <div class="col-lg-6 col-md-12">
                      <div class="tps-box wow fadeInUp animated hover-zoomin mb-30"  data-delay=".4s">
                          <div class="img ">
                              <div class="cat">EDUCATION</div>
                               <img src="img/blog/eductions/ed-2.jpg" alt="icon01">
                            </div>
                           <div class="text">
                                <h5><a href="blog-details.html">3 Technology Basics You Reviewing Constantly.</a></h5>
                               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis vel hendrerit.</p>
                               <div class="post-tags mt-20">
                                        <ul>
                                             <li><a href="#"><span class="icon"><i class="fal fa-user-crown"></i></span> Johen Doe</a></li>
                                             <li><a href="#"><span class="icon"><i class="fal fa-clock"></i></span> 12 March, 2021</a></li>
                                        </ul>
                                    </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-6 col-md-12">
                         <div class="tps-box wow fadeInUp animated hover-zoomin mb-30"  data-delay=".4s">
                          <div class="img ">
                              <div class="cat">FITNESS</div>
                               <img src="img/blog/fitness/ft-10.jpg" alt="icon01">
                            </div>
                           <div class="text">
                                <h5><a href="blog-details.html">The loss is not all that surprising</a></h5>
                               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis vel hendrerit.</p>
                               <div class="post-tags mt-20">
                                        <ul>
                                             <li><a href="#"><span class="icon"><i class="fal fa-user-crown"></i></span> Johen Doe</a></li>
                                             <li><a href="#"><span class="icon"><i class="fal fa-clock"></i></span> 12 March, 2021</a></li>
                                        </ul>
                                    </div>
                            </div>
                        </div>


                    </div>
                     <div class="col-lg-6 col-md-12">
                      <div class="tps-box wow fadeInUp animated hover-zoomin mb-30"  data-delay=".4s">
                          <div class="img ">
                              <div class="cat">GAMING</div>
                               <img src="img/blog/gaming/gm-01.jpg" alt="icon01">
                            </div>
                           <div class="text">
                                <h5><a href="blog-details.html">It’s Great the Government is Tightening Gambling Rules</a></h5>
                               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis vel hendrerit.</p>
                               <div class="post-tags mt-20">
                                        <ul>
                                             <li><a href="#"><span class="icon"><i class="fal fa-user-crown"></i></span> Johen Doe</a></li>
                                             <li><a href="#"><span class="icon"><i class="fal fa-clock"></i></span> 12 March, 2021</a></li>
                                        </ul>
                                    </div>
                            </div>
                        </div>
                    </div>


                </div>

                </div>

                <div class="col-sm-12 col-md-12 col-lg-4">
                   <aside class="sidebar-top-post">
                       <section class="subscribe mb-60">
                            <img src="img/icon/email-s.png" alt="email-s"/>
                           <h4>Subscribe Now !</h4>
                           <p>No spam, notifications only about new products, updates</p>
                           <form role="search" method="get" class="search-form" action="http://wordpress.zcube.in/finco/">
                            <label>
                            <span class="screen-reader-text">Search for:</span>
                            <input type="search" class="search-field" placeholder="Search …" value="" name="s">
                            </label>
                            <input type="submit" class="search-submit" value="Search">
                         </form>
                       </section>
                       <section id="custom_html-5" class="widget_text widget widget_custom_html mb-30">
                             <h2 class="widget-title">Social Link</h2>
                             <div class="textwidget custom-html-widget">
                                <div class="widget-social">
                                     <a href="#"><i class="fab fa-facebook-f"></i> </a>
                                   <a href="#"><i class="fab fa-instagram"> </i></a>
                                   <a href="#"><i class="fab fa-twitter"></i> </a>
                                   <a href="#"><i class="fab fa-pinterest-p"></i> </a>
                                    <a href="#"><i class="fab fa-linkedin"></i> </a>
                                     <a href="#"><i class="fab fa-youtube"></i> </a>
                                </div>
                             </div>
                        </section>
                       <section class="best-store mb-60">
                            <h2>Best Stories</h2>
                           <div class="ts-box2 wow fadeInUp animated mb-30"  data-delay=".4s">
                          <div class="row">
                            <div class="col-lg-4">
                              <div class="img">
                               <img src="img/blog/music/mc-3.jpg" alt="icon01">
                            </div>
                              </div>
                              <div class="col-lg-8">
                              <div class="text">
                                <h5><a href="blog-details.html">This Not Just A Photo But It Best</a></h5>
                               <div class="post-tags mt-10">
                                        <ul>

                                             <li><a href="#"><span class="icon"><i class="fal fa-clock"></i></span> 12 March, 2021</a></li>

                                        </ul>
                                    </div>
                            </div>
                              </div>
                          </div>
                        </div>
                         <div class="ts-box2 wow fadeInUp animated mb-30"  data-delay=".4s">
                          <div class="row">
                            <div class="col-lg-4">
                              <div class="img">
                               <img src="img/blog/travel/tr-6.jpg" alt="icon01">
                            </div>
                              </div>
                              <div class="col-lg-8">
                              <div class="text">
                                <h5><a href="blog-details.html">We have to keep every chapter</a></h5>
                               <div class="post-tags mt-10">
                                        <ul>

                                             <li><a href="#"><span class="icon"><i class="fal fa-clock"></i></span> 12 March, 2021</a></li>

                                        </ul>
                                    </div>
                            </div>
                              </div>
                          </div>
                        </div>
                         <div class="ts-box2 wow fadeInUp animated mb-30"  data-delay=".4s">
                          <div class="row">
                            <div class="col-lg-4">
                              <div class="img">
                               <img src="img/blog/music/mc-1.jpg" alt="icon01">
                            </div>
                              </div>
                              <div class="col-lg-8">
                              <div class="text">
                                <h5><a href="blog-details.html">Never eat extra fatty foods.</a></h5>
                               <div class="post-tags mt-10">
                                        <ul>

                                             <li><a href="#"><span class="icon"><i class="fal fa-clock"></i></span> 12 March, 2021</a></li>

                                        </ul>
                                    </div>
                            </div>
                              </div>
                          </div>
                        </div>
                        <div class="ts-box2 wow fadeInUp animated mb-30"  data-delay=".4s">
                          <div class="row">
                            <div class="col-lg-4">
                              <div class="img">
                               <img src="img/blog/food/fd-2.jpg" alt="icon01">
                            </div>
                              </div>
                              <div class="col-lg-8">
                              <div class="text">
                                <h5><a href="blog-details.html">Never eat extra fatty foods.</a></h5>
                               <div class="post-tags mt-10">
                                        <ul>

                                             <li><a href="#"><span class="icon"><i class="fal fa-clock"></i></span> 12 March, 2021</a></li>

                                        </ul>
                                    </div>
                            </div>
                              </div>
                          </div>
                        </div>
                       </section>
                       <section class="tags-store mb-30">
                           <h2>Tags</h2>
                           <a href="#">TRAVEL</a>
                           <a href="#">NEWS</a>
                           <a href="#">LIFE STYLE</a>
                           <a href="#">MUSIC</a>
                           <a href="#">FOOD</a>
                           <a href="#">HISTORY</a>
                           <a href="#">FASHION</a>
                           <a href="#">WEBSITE</a>
                           <a href="#">GAMING</a>
                       </section>

                    </aside>

            </div>
            </div>
            </div>
        </section>
         <!-- top-Stories-post-area-end -->


         <!-- recent-post-area -->
        <section class="recent-post-area pt-90 pb-60 fix">
            <div class="container">
                  <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title mb-50">
                            <h2>
                         Recent Posts
                            </h2>

                        </div>

                    </div>


                </div>
                    <div class="row">

                     <div class="col-lg-12 col-md-12">
                         <div class="rp-box wow fadeInUp animated hover-zoomin mb-30"  data-delay=".4s">
                          <div class="img ">

                               <img src="img/blog/food/fd-1.jpg" alt="icon01">
                            </div>
                           <div class="text">
                               <div class="cat">FOOD</div>
                                <h5><a href="blog-details.html">Quick  Simple  and Downright Comforting Dishes for Busy Weeknights</a></h5>
                               <p>Integer nibh libero, luctus id dolor vel, euismod volutpat dolor. Suspendisse dignissim id arcu ut sollicitudin.</p>
                               <div class="post-tags mt-10">
                                        <ul>
                                             <li><a href="#"><span class="icon"><i class="fal fa-user-crown"></i></span> Johen Doe</a></li>
                                             <li><a href="#"><span class="icon"><i class="fal fa-clock"></i></span> 12 March, 2021</a></li>
                                        </ul>
                                    </div>
                            </div>
                        </div>


                    </div>
                         <div class="col-lg-12 col-md-12">
                         <div class="rp-box wow fadeInUp animated hover-zoomin mb-30"  data-delay=".4s">
                          <div class="img ">

                               <img src="img/blog/lifestyle/lf-7.jpg" alt="icon01">
                            </div>
                           <div class="text">
                               <div class="cat">LIFE STYLE</div>
                                <h5><a href="blog-details.html">Make a beauty selfie 2020: new life to go, a short the story across the world</a></h5>
                               <p>Integer nibh libero, luctus id dolor vel, euismod volutpat dolor. Suspendisse dignissim id arcu ut sollicitudin.</p>
                               <div class="post-tags mt-10">
                                        <ul>
                                             <li><a href="#"><span class="icon"><i class="fal fa-user-crown"></i></span> Johen Doe</a></li>
                                             <li><a href="#"><span class="icon"><i class="fal fa-clock"></i></span> 12 March, 2021</a></li>
                                        </ul>
                                    </div>
                            </div>
                        </div>


                    </div>
                         <div class="col-lg-12 col-md-12">
                         <div class="rp-box wow fadeInUp animated hover-zoomin mb-30"  data-delay=".4s">
                          <div class="img ">

                               <img src="img/blog/gaming/gm-05.jpg" alt="icon01">
                            </div>
                           <div class="text">
                               <div class="cat">GAMING</div>
                                <h5><a href="blog-details.html">New game studios pop up all the time and they’re always looking</a></h5>
                               <p>Integer nibh libero, luctus id dolor vel, euismod volutpat dolor. Suspendisse dignissim id arcu ut sollicitudin.</p>
                               <div class="post-tags mt-10">
                                        <ul>
                                             <li><a href="#"><span class="icon"><i class="fal fa-user-crown"></i></span> Johen Doe</a></li>
                                             <li><a href="#"><span class="icon"><i class="fal fa-clock"></i></span> 12 March, 2021</a></li>
                                        </ul>
                                    </div>
                            </div>
                        </div>


                    </div>


                </div>

                </div>

                <div class="col-sm-12 col-md-12 col-lg-4">
                   <aside class="sidebar-top-post">
                       <section class="ad-bnner mb-30">
                            <img src="img/blog/ad-banner.png" alt="email-s"/>

                       </section>

                       <section class="most-loved mb-30">
                           <h2>Most Loved</h2>
                            <img src="img/blog/most-loved.png" alt="email-s" class="mb-15"/>
                           <h4>It’s Great the Government is Tightening Gambling</h4>
                       </section>

                    </aside>

            </div>
            </div>
            </div>
        </section>
         <!-- recent-post-area-end -->


        <!-- editor-choice -->
        <section id="editor-choice" class="editor-choice-area pt-90 pb-60 fix" style="background: #f3f8fb;" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title center-align mb-50">

                            <h2>
                                Editor Choice
                            </h2>

                        </div>

                    </div>

                </div>
                <div class="row home-blog-active">
                    <div class="col-lg-4 col-md-12">

                      <div class="fp-box wow fadeInUp animated hover-zoomin mb-30"  data-delay=".4s">
                          <div class="img ">
                              <div class="cat">LIFE STYLE</div>
                               <img src="img/blog/lifestyle/lf-1.jpg" alt="icon01">
                            </div>
                           <div class="text">
                                <h5><a href="blog-details.html">Guide to Picking the Best Travel Card</a></h5>
                               <div class="post-tags mt-20">
                                        <ul>
                                             <li><a href="#"><span class="icon"><i class="fal fa-user-crown"></i></span> Johen Doe</a></li>
                                             <li><a href="#"><span class="icon"><i class="fal fa-clock"></i></span> 12 March, 2021</a></li>

                                        </ul>
                                    </div>
                            </div>
                        </div>


                    </div>
                     <div class="col-lg-4 col-md-12">

                      <div class="fp-box wow fadeInUp animated hover-zoomin"  data-delay=".4s">
                          <div class="img ">
                              <div class="cat">TRAVEL</div>
                               <img src="img/blog/travel/tr-7.jpg" alt="icon01">
                            </div>
                           <div class="text">
                                <h5><a href="blog-details.html">If you want to find your life, you go to nature.</a></h5>
                               <div class="post-tags mt-20">
                                        <ul>
                                             <li><a href="#"><span class="icon"><i class="fal fa-user-crown"></i></span> Johen Doe</a></li>
                                             <li><a href="#"><span class="icon"><i class="fal fa-clock"></i></span> 12 March, 2021</a></li>

                                        </ul>
                                    </div>
                            </div>
                        </div>


                    </div>
                    <div class="col-lg-4 col-md-12">

                      <div class="fp-box wow fadeInUp animated hover-zoomin"  data-delay=".4s">
                          <div class="img ">
                              <div class="cat">HISTORY</div>
                               <img src="img/blog/travel/tr-8.jpg" alt="icon01">
                            </div>
                           <div class="text">
                                <h5><a href="blog-details.html">Guide to Picking the Best Travel Card</a></h5>
                               <div class="post-tags mt-20">
                                        <ul>
                                             <li><a href="#"><span class="icon"><i class="fal fa-user-crown"></i></span> Johen Doe</a></li>
                                             <li><a href="#"><span class="icon"><i class="fal fa-clock"></i></span> 12 March, 2021</a></li>

                                        </ul>
                                    </div>
                            </div>
                        </div>


                    </div>
                     <div class="col-lg-4 col-md-12">

                      <div class="fp-box wow fadeInUp animated hover-zoomin"  data-delay=".4s">
                          <div class="img ">
                              <div class="cat">TRAVEL</div>
                               <img src="img/blog/travel/tr-1.jpg" alt="icon01">
                            </div>
                           <div class="text">
                                <h5><a href="blog-details.html">If you want to find your life, you go to nature.</a></h5>
                               <div class="post-tags mt-20">
                                        <ul>
                                             <li><a href="#"><span class="icon"><i class="fal fa-user-crown"></i></span> Johen Doe</a></li>
                                             <li><a href="#"><span class="icon"><i class="fal fa-clock"></i></span> 12 March, 2021</a></li>

                                        </ul>
                                    </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </section>
        <!-- case-study-end -->





    </main>
</x-news-layout>
