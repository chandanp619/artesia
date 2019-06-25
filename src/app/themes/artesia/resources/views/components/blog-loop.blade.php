<section>
<div class="wrapper">
    <div class="content">
        <form method="post" action="{!! TemplateBlog::searchFormAction() !!}">
            <input type="text" name="searchText" value="{!! TemplateBlog::searchtext() !!}" />
        </form>

        <h3 class="tag-search-title">Search By Popular Tags</h3>
        
        <ul class="tags-filter">
            @if($tags = TemplateBlog::getTags() )
            @foreach($tags as $tag)    
                <li><a href="{!! TemplateBlog::termLink($tag) !!}">{{$tag->name}}</a></li>
            @endforeach
            @endif()
        </ul>


        <div class="blogs">
        @php 
        $indx =1;
        @endphp
        @if($blogs = TemplateBlog::getBlog())
        @foreach($blogs as $blog)
        
        
            <article class="article @if($indx % 2 == 0) even @else odd @endif blog">
                <div class="image @if($indx % 2 == 0) pullright @else pullleft @endif"><a href="{!! TemplateBlog::getPermalink($blog->ID) !!}"><img src="{!! TemplateBlog::featuredImageUrl($blog->ID) !!}" alt="blog-featured-image"/></a></div>
                <div class="content @if($indx % 2 == 0) pullleft @else pullright @endif">
                    <div class="post-date">
                        <span>{!! TemplateBlog::getBlogDate($blog->ID) !!}</span>
                    </div>
                    <div class="post-title">
                        <h2><a href="{!! TemplateBlog::getPermalink($blog->ID) !!}">{{$blog->post_title}}</a></h2>
                        <p>{{$blog->post_excerpt}} <span class="read-more"><a href="{!! TemplateBlog::getPermalink($blog->ID) !!}">Read More &raquo;</a></span></p>
                    </div>

                </div>
            </article>
        
        @php
        $indx++;
        @endphp
        @endforeach
        @endif()
    </div>
        <div class="pagination">
            {!! TemplateBlog::getPagination() !!}
        </div>    
    </div>
</div>    
</section>