@extends('_layout.site')
@section('content')
  <div class="page-wrapper">
    <!-- Page body -->
    <div class="page-body">
      <div class="col-md-8 mx-auto">
        <!-- Banner Hero -->
        <div class="card text-start">
          <div class="card-body ">
            <h1 class="display-4 text-center my-2 fw-lighter">
              Laravel Social Listening
            </h1>
            <h1 class="h1 text-center mt-3 fw-lighter">
              Free social listening powered by GitHub Page & Github Action
            </h1>
            <div class="col-12 d-flex justify-content-center" id="learn-more">
              <a data-bs-spy="scroll" href="#features" class="btn btn-lg btn-warning fw-light px-4 scroll-reveal" data-bs-toggle="modal" data-bs-target="#modal-report">
                Get Started
              </a>
            </div>
          </div>
        </div>
        <!-- End Banner Hero -->
        <!-- Facebook Pages -->
        <div class="card mt-5" data-bs-spy="scroll" data-bs-target="#learnmore"  data-bs-smooth-scroll="true">
          <div class="card-body" id="features">
            <h4 class="card-title">Features</h4>
            <p class="card-text">Text</p>
            @php
              $follower = 100005050;
              $words = \Rmunate\Utilities\SpellNumber::value($follower)->locale('en')->toLetters();
            @endphp
            <p data-kute-text="{{$words}}">Number of follower.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Item 1</li>
            <li class="list-group-item">Item 2</li>
            <li class="list-group-item">Item 3</li>
          </ul>
        </div>
        <!-- End Facebook Pages -->
        <!-- Features -->
        <div class="card">
          <div class="card-body">
            <h4 class="count-up" data-count-up-end-val="124">Documentation</h4>
            <h4 class="count-up" data-count-up-end-val="567">Documentation</h4>
            <h4 class="count-up" data-count-up-end-val="890">Documentation</h4>
            <h4 class="count-up" data-count-up-end-val="134">Documentation</h4>
            <h4>
              Documentation
            </h4>
            <div>
              <pre><code>GET <a class="text-reset" target="_blank" href="https://tabler.io/demo">https://tabler.io/demo</a></code></pre>
            </div>
          </div>
        </div>
        <!-- End Features -->
        <!-- Documentation -->
        @php
          $markdown_content = file_get_contents(base_path().'/README.md');
          $html = Str::of($markdown_content)->markdown();
        @endphp
        <h4>Documentation</h4>
        <div class="mt-5 card card-body">
          <div class="markdown">{!!$html!!}</div>
        </div>
        <!-- End Documentation -->
        <h4 class="scroll-reveal">Documentation</h4>









        <!-- Comment -->
        <script
          src="https://utteranc.es/client.js"
          repo="today-mm/laravel-social-listening"
          issue-term="pathname"
          theme="dark-blue"
          crossorigin="anonymous"
          async>
        </script>
        <!-- End Comment -->













        @include('_layout.partials.footer-btns')
      </div>
    </div>
    <!-- End Page body -->
  </div>
  <!-- End Page wapper -->
@endsection
