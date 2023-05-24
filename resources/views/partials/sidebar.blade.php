<div class="col-2">
      <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary">
            <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">Crea Nuovo
                  Project</a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                  <li class="nav-item">
                        <a href="{{ route('welcome') }}" class="nav-link active" aria-current="page">
                              <svg class="bi pe-none me-2" width="16" height="16">
                                    <use xlink:href="#home"></use>
                              </svg>
                              Home
                        </a>
                  </li>
                  <li>
                        <a href="{{ route('admin.dashboard') }}" class="nav-link link-body-emphasis">
                              <svg class="bi pe-none me-2" width="16" height="16">
                                    <use xlink:href="#speedometer2"></use>
                              </svg>
                              Dashboard
                        </a>
                  </li>
                  <li>
                        <a href="{{ route('admin.projects.index') }}" class="nav-link link-body-emphasis">
                              <svg class="bi pe-none me-2" width="16" height="16">
                                    <use xlink:href="#speedometer2"></use>
                              </svg>
                              Projects
                        </a>

                  </li>

            </ul>
            <hr>
            <div class="dropdown">
                  <a href="#"
                        class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle"
                        data-bs-toggle="dropdown" aria-expanded="false">

                        <strong>{{ Auth::user()->name }}</strong>
                  </a>
                  <ul class="dropdown-menu text-small shadow">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                              <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                  </ul>
            </div>
      </div>

</div>
