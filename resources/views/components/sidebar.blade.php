<div>
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

              <li class="cat-item cat-item-16"><a href="{{route('category.posts',$category->id)}}">{{$category->name}}</a> ({{count($category->posts)}})</li>
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
