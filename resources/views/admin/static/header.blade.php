<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container">
    <a class="navbar-brand" href="{{ route('admin.home') }}">Logo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('admin.home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.messages') }}">Messages</a>
        </li>
      </ul>
    </div>
</div>
  </nav>