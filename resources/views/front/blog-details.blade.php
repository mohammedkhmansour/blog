<x-news-layout>
    <main>
        <!-- breadcrumb-area -->
      <section class="breadcrumb-area d-flex align-items-center" style="background-image:url({{asset('front/img/testimonial/test-bg.png')}})">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="breadcrumb-wrap text-left">
                            <div class="breadcrumb-title">
                                <h2>Blog Deatils</h2>
                                <div class="breadcrumb-wrap">

                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Blog Deatils</li>
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
        <section class="inner-blog b-details-p pt-120 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-detailss-wrap">
                            <div class="details__content pb-30">
                                <h2>{{$post->name}}</h2>
                                <div class="meta-info">
                                    <ul>
                                        <li><i class="fal fa-eye"></i> 100 Views  </li>
                                        <li><i class="fal fa-comments"></i> 35 Comments</li>
                                        <li><i class="fal fa-calendar-alt"></i> {{$post->created_at}}</li>
                                    </ul>
                                </div>
                                {!! $post->description !!}
                                <div class="row">
                                    <div class="col-xl-12 col-md-12">
                                        <div class="post__tag">
                                            <h5>Releted Tags</h5>
                                            <ul>
                                                @foreach ($post->tags as $tag)


                                                <li><a href="#">{{$tag->name}}</a></li>

                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="posts_navigation pt-35 pb-35">
                                <div class="row align-items-center">
                                    <div class="col-xl-4 col-md-5">
                                        <div class="prev-link">
                                            <span>Prev Post</span>
                                            <h4><a href="#">Tips Minimalist</a></h4>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-2 text-left text-md-center">
                                        <a href="blog.html" class="blog-filter"><img src="img/icon/c_d01.png" alt=""></a>
                                    </div>
                                    <div class="col-xl-4 col-md-5">
                                        <div class="next-link text-left text-md-right">
                                            <span>next Post</span>
                                            <h4><a href="#">Less Is More</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="related__post mt-45 mb-85">
                                <div class="post-title">
                                    <h4>Related Post</h4>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="related-post-wrap mb-30">
                                            <div class="post-thumb">
                                                <img src="img/blog/b_details03.jpg" alt="">
                                            </div>
                                            <div class="rp__content">
                                                <h3><a href="#">A series of iOS 7 inspire
                                                        vector icons.</a></h3>
                                                <p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or
                                                    incididunt ut labore et dolore.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="related-post-wrap mb-30">
                                            <div class="post-thumb">
                                                <img src="img/blog/b_details04.jpg" alt="">
                                            </div>
                                            <div class="rp__content">
                                                <h3><a href="#">Sed ut perspiciatis unde omnis.</a></h3>
                                                <p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or
                                                    incididunt ut labore et dolore.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="avatar__wrap text-center mb-45">
                                <div class="avatar-img">
                                    <img src="img/blog/comment/avatar.png" alt="">
                                </div>
                                <div class="avatar__info">
                                    <h5>Rosalina William</h5>
                                    <div class="avatar__info-social">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-behance"></i></a>
                                        <a href="#"><i class="fab fa-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="avatar__wrap-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                        aliquip ex ea commodo consequa aute irure dolor.</p>
                                </div>
                            </div>
                            <div class="comment__wrap pb-45">
                                <div class="comment__wrap-title">
                                    <h5>Comments</h5>
                                </div>
                                <div class="single__comment mb-35">
                                    <div class="comments-avatar">
                                        <img src="img/blog/comment/c_01.png" alt="">
                                    </div>
                                    <div class="comment-text">
                                        <div class="avatar-name mb-15">
                                            <h6>ALina Kelian</h6>
                                            <span>19th May 2018</span>
                                            <a href="#" class="comment-reply"><i class="fas fa-reply"></i>Reply</a>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                            ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                                </div>
                                <div class="single__comment children mb-35">
                                    <div class="comments-avatar">
                                        <img src="img/blog/comment/c_02.png" alt="">
                                    </div>
                                    <div class="comment-text">
                                        <div class="avatar-name mb-15">
                                            <h6>Rlex Kelian <i class="fas fa-bookmark"></i></h6>
                                            <span>19th May 2018</span>
                                            <a href="#" class="comment-reply"><i class="fas fa-reply"></i>Reply</a>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                            ullamco laboris nisi ut
                                            aliquip commodo.</p>
                                    </div>
                                </div>
                                <div class="single__comment">
                                    <div class="comments-avatar">
                                        <img src="img/blog/comment/c_03.png" alt="">
                                    </div>
                                    <div class="comment-text">
                                        <div class="avatar-name mb-15">
                                            <h6>Roboto Alex</h6>
                                            <span>21th May 2018</span>
                                            <a href="#" class="comment-reply"><i class="fas fa-reply"></i>Reply</a>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                            ullamco laboris nisi ut
                                            aliquip ex ea commodo consequat.</p>
                                    </div>
                                </div>
                            </div>
                           <div id="comments" class="comments-area  mt-45">
                               <div id="respond" class="comment-respond">
                                  <h3 id="reply-title" class="comment-reply-title">Leave a Reply <small><a rel="nofollow" id="cancel-comment-reply-link" href="/finco/?p=2112#respond" style="display:none;">Cancel reply</a></small></h3>
                                  <form action="http://wordpress.zcube.in/finco/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate="">
                                     <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p>
                                     <p class="comment-field"><i class="fas fa-user"></i><input id="author" placeholder="Your Name" name="author" type="text"></p>
                                     <p class="comment-field"><i class="fas fa-envelope"></i><input id="email" placeholder="your-real-email@example.com" name="email" type="text"></p>
                                     <p class="comment-field"><i class="fas fa-globe"></i><input id="url" name="url" placeholder="http://your-site-name.com" type="text"> </p>
                                     <p class="comment-form-comment"><label for="comment">Comment</label> <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea></p>
                                     <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Post Comment"> <input type="hidden" name="comment_post_ID" value="2112" id="comment_post_ID">
                                        <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                                     </p>
                                  </form>
                               </div>
                               <!-- #respond -->
                            </div>

                        </div>
                    </div>
                     <!-- #right side -->
<div class="col-sm-12 col-md-12 col-lg-4">
<aside class="sidebar-widget">
  <section id="search-3" class="widget widget_search">
     <h2 class="widget-title">Search</h2>
     <form role="search" method="get" class="search-form" action="{{route('search')}}">
        <label>
        <span class="screen-reader-text">Search for:</span>
        <input type="search" class="search-field" placeholder="Search &hellip;" value="" name="search" />
        </label>
        <input type="submit" class="search-submit" value="Search" />
     </form>
  </section>
<x-social/>
  <section id="categories-1" class="widget widget_categories">
     <h2 class="widget-title">Categories</h2>
     <ul>
        @foreach ($categories as $category)

        <li class="cat-item cat-item-16"><a href="#">{{$category->name}}</a> ({{count($category->posts)}})</li>
        @endforeach

     </ul>
  </section>
  <section id="recent-posts-4" class="widget widget_recent_entries">
     <h2 class="widget-title">Recent Posts</h2>
     <ul>
        @foreach ($recents as $recent)

        <li>
           <a href="{{route('post.det',$recent->slug)}}">{{$recent->name}}</a>
           <span class="post-date">{{$recent->created_at->format('d/m/Y')}}</span>
        </li>
        @endforeach

     </ul>
  </section>
  <section id="tag_cloud-1" class="widget widget_tag_cloud">
     <h2 class="widget-title">Tag</h2>
     <div class="tagcloud">
        @foreach ($tags as $tag)


         <a href="#" class="tag-cloud-link tag-link-28 tag-link-position-1" style="font-size: 8pt;" aria-label="app (1 item)">{{$tag->name}}</a>
         @endforeach
     </div>
  </section>
</aside>
</div>
<!-- #right side end -->
                </div>
            </div>
        </section>
        <!-- inner-blog-end -->



    </main>
    <!-- main-area-end -->

</x-news-layout>
