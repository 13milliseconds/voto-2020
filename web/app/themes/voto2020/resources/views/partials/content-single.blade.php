<article @php post_class() @endphp>
  <div class="container">

  <section id="player">
    @php $thumbnail = get_field('thumbnail'); @endphp
        <img src="{{ $thumbnail['url'] }}" />
        <div class="play"></div>
      <div class="video">
        {!! the_field('video') !!}
      </div>
  </section>

  <header>
    <h1 class="entry-title">{!! get_the_title() !!}</h1>
  </header>
  <div class="entry-content">
    @php the_content() @endphp
  </div>
  
  </div>
</article>
