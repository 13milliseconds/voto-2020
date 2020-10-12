<section id="videos">
    <div class="container">
        <div class="row">
        @foreach ($videos as $video)
            @php $post_status = $video->post_status @endphp
            <div class="col-md-4 {{ $post_status }}">
                <h3>
                    @if($post_status == 'publish')
                        <a href="{{ the_permalink($video->ID) }}">{{ $video->post_name }}</a>
                    @else
                        {{ $video->post_name }}
                    @endif
                </h3>
                <p>{{ $video->excerpt }}</p>
            </div>
        @endforeach
        </div>
    </div>
</section>

<section id="mainContent">
    <div class="container">
        @php the_content() @endphp
    </div>
</section>