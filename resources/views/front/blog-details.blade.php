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
                                        <li><i class="fal fa-eye"></i> {{$post->views}} Views  </li>
                                        <li><i class="fal fa-comments"></i>{{count($post->comments)}}</li>
                                        <li><i class="fal fa-calendar-alt"></i> {{$post->created_at->format('d/m/Y')}}</li>
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
                                            @if($prev_post)
                                            <span>Prev Post</span>

                                            <h4><a href="{{route('post.det',$prev_post->slug)}}">{{$prev_post->name}}</a></h4>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-2 text-left text-md-center">
                                        <a href="blog.html" class="blog-filter"><img src="img/icon/c_d01.png" alt=""></a>
                                    </div>
                                    <div class="col-xl-4 col-md-5">
                                        <div class="next-link text-left text-md-right">
                                            @if ($next_post)
                                            <span>next Post</span>


                                            <h4><a href="{{route('post.det',$next_post->slug)}}">{{$next_post->name}}</a></h4>

                                            @endif

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="related__post mt-45 mb-85">
                                <div class="post-title">
                                    <h4>Related Post</h4>
                                </div>
                                <div class="row">

                                    @foreach ($postrelateds as $postrelated)
                                    <div class="col-md-6">
                                        <div class="related-post-wrap mb-30">
                                            <div class="post-thumb">
                                                <img src="{{$postrelated->image_url}}" alt="">
                                            </div>
                                            <div class="rp__content">

                                                <h3><a href="{{route('post.det',$postrelated->slug)}}">{{$postrelated->name}}</a></h3>
                                                {{-- <p>{!! Str::limit($postrelated->description, 20, '..') !!}</p> --}}
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="avatar__wrap text-center mb-45">
                                <div class="avatar-img">
                                    <img src="img/blog/comment/avatar.png" alt="">
                                </div>
                                <div class="avatar__info">
                                    <h5><a href="{{route('author.posts',$post->user->id)}}">{{$post->user->name}}</a></h5>
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

                                @foreach ($comments as $comment)


                                <div class="single__comment">
                                    <div class="comments-avatar">
                                        <img src="img/blog/comment/c_03.png" alt="">
                                    </div>
                                    <div class="comment-text">
                                        <div class="avatar-name mb-15">
                                            <h6>{{$comment->name}}</h6>
                                            <span>{{$comment->created_at->format('d/m/Y')}}</span>
                                            <a href="#" class="comment-reply"><i class="fas fa-reply"></i>Reply</a>
                                        </div>
                                        <p>{{$comment->content}}</p>
                                    </div>
                                </div>
                                <br>
                                @endforeach
                            </div>
                           <div id="comments" class="comments-area  mt-45">
                               <div id="respond" class="comment-respond">
                                  <h3 id="reply-title" class="comment-reply-title">Leave a Reply <small><a rel="nofollow" id="cancel-comment-reply-link" href="/finco/?p=2112#respond" style="display:none;">Cancel reply</a></small></h3>
                                  <form action="{{route('comments.store')}}" method="post" id="commentform" class="comment-form">
                                    @csrf
                                    <input type="hidden" name="post_id" value="{{$post->id}}">
                                    @guest


                                     <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p>
                                     <p class="comment-field"><i class="fas fa-user"></i><input id="author" placeholder="Your Name" name="name" type="text"></p>
                                     <p class="comment-field"><i class="fas fa-envelope"></i><input id="email" placeholder="your-real-email@example.com" name="email" type="text"></p>
                                     @endguest

                                     <p class="comment-form-comment"><label for="comment">Comment</label> <textarea id="comment" name="content" cols="45" rows="8" maxlength="65525" required="required"></textarea></p>
                                     <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Post Comment">
                                     </p>
                                  </form>
                               </div>
                               <!-- #respond -->
                            </div>

                        </div>
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
