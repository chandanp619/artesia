<section class="content">
  <div class="wrapper single-blog">
    <div class="blog-wrapper">
        <div class="blog-main">
          <div class="blog-main-content-absolute">
            <div class="blog-date"><span>{!! $date !!}</span></div>
            <h2 class="blog-title">{!! $title !!}</h2>
            <div class="blog-content">{!! $content !!}</div>
            <div class="tag-list">
                <ul class="tags-filter">
                    @if($tags = SingleBlog::getBlogTags())
                        @foreach($tags as $tag)
                            <li class="tag">{!! $tag->name !!}</li>
                        @endforeach
                    @endif()
                </ul>
            </div>
          </div>
        </div>
        <div class="blog-sidebar">
            <div class="featured-image">
                <img src="{!! SingleBlog::featuredImageURL() !!}" alt="featured image"/>
            </div>
            <div class="contact-artesia">
                <a href="{!! SingleBlog::contactLink() !!}">Request Information &raquo;</a>
            </div>
    </div>
  </div>
  </div>
</section>
