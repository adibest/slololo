<div class="collapse navbar-collapse justify-content-end" id="navbar1">
  <ul class="navbar-nav">
    <li class="nav-item {{ \Request::path() == '/' ? 'active' : '' }}">
      <a class="nav-link" href="/">Home</a>
    </li>
    <li class="nav-item {{ \Request::path() == '/article' ? 'active' : '' }}">
      <a class="nav-link" href="/article">Artikel</a>
    </li>
    <li class="nav-item {{ \Request::path() == '/contribute' ? 'active' : '' }}">
      <a class="nav-link" href="/contribute">Jadi Kontributor</a>
    </li>
    <li class="nav-item {{ \Request::path() == '/about-us' ? 'active' : '' }}">
      <a class="nav-link" href="/about-us">Tentang Kami</a>
    </li>
    <li class="nav-item {{ \Request::path() == '/advertising' ? 'active' : '' }}">
      <a class="nav-link" href="/advertising">Beriklan</a>
    </li>
  </ul>
</div>
