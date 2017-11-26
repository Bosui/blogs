<ul class="nav nav-pills nav-fill">
<li class="nav-item ">
<a class="nav-link " href="#">Larawel Blog</a>
</li>
<li class="nav-item">
<a class="nav-link {{Request::is('/') ? "active" : ""}} " href="/">Home</a>
</li>
<li class="nav-item">
<a class="nav-link {{Request::is('about') ? "active" : ""}}" href="/about">About</a>
</li>
<li class="nav-item">
<a class="nav-link {{Request::is('contact') ? "active" : ""}}" href="/contact">Contact</a>
</li>
<li class="nav-item">
<a class="nav-link disabled" href="#">Disabled</a>
</li>
<nav>
<ul class"nav navbar-nav navbar-right">
<li class="dropdown">
  <a href="#" class="dropdown-toggle {{Request::is('My Account') ? "active" : ""}}" data-toogle="dropdown" role="button aria-haspopup="true" aria-expanded="false"">My Account<span class="caret"></span></a>
  <ul class="dropdown-menu">
    <li><a href="#"> Action </a></li>

  </ul>
</li>

</ul>
</ul>
</nav>
