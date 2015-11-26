<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="{{ $meta_description }}">
  <meta name="author" content="{{ config('blog.author') }}">
  <title>{{ $title or config('blog.title') }}</title>

  {{-- Styles --}}
  <link href="/assets/css/blog.css" rel="stylesheet">
  @yield('styles')

  {{-- HTML5 Shim and Respond.js for IE8 support --}}
  <!--[if lt IE 9]>
  <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

  
</head>
<body style = "background-color: #404040; color: #fff;">
@include('blog.partials.page-nav')
<header class="intro-header"
          style="background-image: url('{{ page_image($page_image) }}')">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
          <div class="site-heading">
            <h2 class="subheading">{{ $subtitle }}</h2>
            <hr class="small">
            <h1>127 . 0 . 0 . 1</h1>
          </div>
        </div>
      </div>
    </div>
  </header>
{{-- Scripts --}}
<script src="/assets/js/blog.js"></script>
@yield('scripts')

</body>
</html>