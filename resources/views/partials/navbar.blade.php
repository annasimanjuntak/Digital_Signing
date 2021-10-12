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
      </div>
    </div>
  </nav>
