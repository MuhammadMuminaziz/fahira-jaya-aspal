<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('comment') ? 'active' : '' }}" aria-current="page" href="/comment">
            <span data-feather="home" class="align-text-bottom"></span>
            Comment
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('gallery') ? 'active' : '' }}" href="/gallery">
            <span data-feather="file" class="align-text-bottom"></span>
            Gallery
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('blog') ? 'active' : '' }}" href="/blog">
            <span data-feather="shopping-cart" class="align-text-bottom"></span>
            Blog
          </a>
        </li>
        <li class="nav-item mt-2">
          <form action="/logout" method="post">
            @csrf
            <button type="submit" class="btn btn-sm btn-primary ms-3">Logout</button>
          </form>
        </li>
      </ul>
    </div>
  </nav>