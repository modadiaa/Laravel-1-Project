<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container-fluid">
      <!-- <a class="navbar-brand" href="index.html">ArcLab.</a> -->
      <img width="150px" src="img/logo/logo.png" alt="">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active"><a href="{{ url('/') }}" class="nav-link">الرئيسية</a></li>
          <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">عن شركتنا </a></li>
          <li class="nav-item"><a href="{{ route('category') }}" class="nav-link">منتجاتنا</a></li>
          <li class="nav-item"><a href="{{ route('productname') }}" class="nav-link">أسماء المنتجات</a></li>
          <li class="nav-item"><a href="{{ route('news') }}" class="nav-link">أخبارنا</a></li>
          <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">اتصل بنا</a></li>
        </ul>
      </div>
    </div>
  </nav>
