<section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">{{ __('words.news') }}</span>
          <h2>{{ __('words.news') }} </h2>
        </div>
      </div>
      <div class="row d-flex">
        @foreach ($news as $rs)
            <div class="col-md-3 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                <div class="text">
                <a href="blog-single.html" class="block-20 img" style="background-image: url('{{ Storage::url($rs->image) }}');">
                    </a>
                    <h3 class="heading"><a href="#"> {{ $rs->title }}</a></h3>
                </div>
            </div>
            </div>
        @endforeach
      </div>
    </div>
  </section>
