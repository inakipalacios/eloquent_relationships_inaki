<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/user">Posts App</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{route('user.index')}}">Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('address.index')}}">Addresses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('subject.index')}}">Subjects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('post.index')}}">Posts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('post.recents')}}">Recent posts</a>
        </li>
      </ul>
    </div>
  </div>
</nav>