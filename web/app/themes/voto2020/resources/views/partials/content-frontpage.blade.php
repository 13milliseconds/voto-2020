<section id="videos">
        <div class="container">
        <div class="row">
        @foreach ($videos as $video)
            @php $post_status = $video->post_status @endphp
            <div class="col-md-4 {{ $post_status }} state">
                <div class="wrap">
                    @if($post_status == 'publish')
                        <a href="{{ the_permalink($video->ID) }}">
                    @endif
                    <img class="thumbnail" src="{{ get_the_post_thumbnail_url($video->ID)}}" />
                    <h3>{{ $video->post_name }}</h3>
                    @if($post_status == 'publish')
                        </a>
                    @endif
                </div>
            </div>
        @endforeach
        </div>
    </div>
</section>

<section id="mainContent">
        @php the_content() @endphp
</section>