<section id="videos">
        <div class="row">
        @foreach ($videos as $video)
            @php $post_status = $video->post_status @endphp
            <div class="col-md-4 {{ $post_status }} state">
                <img class="thumbnail" src="{{ get_the_post_thumbnail_url($video->ID)}}" />
                <h3>
                    @if($post_status == 'publish')
                        <a href="{{ the_permalink($video->ID) }}">{{ $video->post_name }}</a>
                    @else
                        {{ $video->post_name }}
                    @endif
                </h3>
            </div>
        @endforeach
        </div>
</section>

<section id="mainContent">
        @php the_content() @endphp
</section>