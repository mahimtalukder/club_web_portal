    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar">
        <div class="sidebar-header">
            <a href="{{ route('directorDash') }}" class="sidebar-brand">
                MT<span>LTD</span>
            </a>
            <div class="sidebar-toggler not-active">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="sidebar-body">
            <ul class="nav">
                <li class="nav-item nav-category">Main</li>
                <li class="nav-item">
                    <a href="{{ route('directorDash') }}" class="nav-link">
                        <i class="link-icon" data-feather="box"></i>
                        <span class="link-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item nav-category">Personal</li>
                <li class="nav-item">
                    <a href="{{route('directorProfile')}}" class="nav-link">
                        <i class="link-icon" data-feather="user"></i>
                        <span class="link-title">View Profile</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('directorEditProfile')}}" class="nav-link">
                        <i class="link-icon" data-feather="edit"></i>
                        <span class="link-title">Edit Profile</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar">
        <div class="sidebar-header">
            <a href="{{ route('directorDash') }}" class="sidebar-brand">
                MT<span>LTD</span>
            </a>
            <div class="sidebar-toggler not-active">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="sidebar-body">
            <ul class="nav">
                <li class="nav-item nav-category">Main</li>
                <li class="nav-item">
                    <a href="{{ route('directorDash') }}" class="nav-link">
                        <i class="link-icon" data-feather="box"></i>
                        <span class="link-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item nav-category">Personal</li>
                <li class="nav-item">
                    <a href="{{ route('directorProfile') }}" class="nav-link">
                        <i class="link-icon" data-feather="user"></i>
                        <span class="link-title">View Profile</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('directorEditProfile')}}" class="nav-link">
                        <i class="link-icon" data-feather="edit"></i>
                        <span class="link-title">Edit Profile</span>
                    </a>
                </li>

                <li class="nav-item nav-category">Services</li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" role="button" aria-expanded="false"
                      aria-controls="general-pages">
                      <i class="link-icon" data-feather="mail"></i>
                      <span class="link-title">Application</span>
                      <i class="link-arrow" data-feather="chevron-down"></i>
                    </a>
                    <div class="collapse" id="general-pages">
                      <ul class="nav sub-menu">
                          <li class="nav-item">
                              <a href="{{route('directorAllApplication')}}" class="nav-link">All Application</a>
                          </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link">New Application</a>
                        </li>
                      </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" role="button" aria-expanded="false"
                      aria-controls="general-pages">
                      <i class="link-icon" data-feather="mail"></i>
                      <span class="link-title">Club</span>
                      <i class="link-arrow" data-feather="chevron-down"></i>
                    </a>
                    <div class="collapse" id="general-pages">
                      <ul class="nav sub-menu">
                          <li class="nav-item">
                              <a href="{{ route('directorAllClub') }}" class="nav-link">All Club</a>
                          </li>
                        <li class="nav-item">
                          <a href="{{ route('directorCreateClub') }}" class="nav-link">Create New Club</a>
                        </li>
                      </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- partial -->
