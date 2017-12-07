<!doctype html>
  <html lang="en">
  <head>
    @include('partials._head')
  </head>

  <body>
    @include('partials._nav')
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="panel">
            @component ('components.who')
            @endcomponent

          </div>
        </div>
      </div>
    </div>

    
    <div class="container">
      @include('partials._messages')
      @yield('content')
      @include('partials._footer')
    </div>
      @include('partials._javascript')
      @yield('scripts')

  </body>
</html>
