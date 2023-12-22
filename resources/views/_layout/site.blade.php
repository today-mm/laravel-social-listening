
<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
  <title>Dashboard - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
  <script defer data-api="/stats/api/event" data-domain="preview.tabler.io" src="/stats/js/script.js"></script>
  <meta name="msapplication-TileColor" content="#0054a6"/>
  <meta name="theme-color" content="#0054a6"/>
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
  <meta name="apple-mobile-web-app-capable" content="yes"/>
  <meta name="mobile-web-app-capable" content="yes"/>
  <meta name="HandheldFriendly" content="True"/>
  <meta name="MobileOptimized" content="320"/>
  <link rel="icon" href="./favicon.ico" type="image/x-icon"/>
  <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon"/>
  <meta name="description" content=""/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/core@latest/dist/css/tabler.min.css">
  <style>
    @import url('https://rsms.me/inter/inter.css');
    :root {
    	--tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
    }
    body {
    	font-feature-settings: "cv03", "cv04", "cv11";
    }
  </style>
  </head>
  <body>
  <div class="page">
    @include('_layout.partials.header')
    @yield('content')
    @include('_layout.partials.footer')
  </div>
  @vite('resources/js/app.js')
  @section('tablar_js')
  @stack('js')
  @yield('js')
  @stop
  </body>
</html>
