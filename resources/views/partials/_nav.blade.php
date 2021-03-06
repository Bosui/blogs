<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle colapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class=sr-only>Toggle Navigation </span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Laravel Blog</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class=" {{Request::is('/') ? "active" : ""}} "><a href="/">Home</a></li>
          <li class=" {{Request::is('blog') ? "active" : ""}} "><a href="blog">Blog</a></li>
          <li class=" {{Request::is('about') ? "active" : ""}}"><a href="/about">About</a></li>
          <li class=" {{Request::is('contact') ? "active" : ""}}"><a href="/contact">Contact</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account <span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li><a href="{{ route('posts.index') }}"> Posts </a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#"> Logout </a></li>
            </ul>
          </li>
        </ul>
    </div>
  </div>
</nav>
