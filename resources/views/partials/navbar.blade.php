<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="/">Digital Sign Test</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($active==="home") ? 'active' : ''}}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active==="form") ? 'active' : ''}}" href="/form">Form</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active==="alldocs") ? 'active' : ''}}" href="/alldocs">All Documents</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active==="participation") ? 'active' : ''}}" href="/participation">Participation Type</a>
          </li>
        </ul>

        @auth
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <form action="/logout" method="post">
                    @csrf
                      <button type="submit" class="dropdown-item">
                        <i class="bi bi-box-arrow-right"></i> Logout
                      </button>
                  </form>
            </li>
        </ul>
        @else
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a href="/login" class="nav-link {{ ($active==="categories") ? 'active' : ''}}"><i class="bi bi-box-arrow-right"></i> Login</a>
            </li>
        </ul>
        @endauth


      </div>
    </div>
  </nav>
