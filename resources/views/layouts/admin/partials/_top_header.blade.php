<header class="top-header">
    <nav class="navbar navbar-expand gap-3">
      <div class="toggle-icon">
        <i class="fa-solid fa-bars"></i>
      </div>
     

      <div class="top-navbar-right ms-auto">

        <ul class="navbar-nav align-items-center">
          <li class="nav-item dropdown dropdown-large">
            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
              <div class="position-relative">
                <span class="notify-badge">8</span>
                <i class="fa-regular fa-bell"></i>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end">
              <a href="javascript:;">
                <div class="msg-header">
                  <p class="msg-header-title">Notifications</p>
                  <p class="msg-header-clear ms-auto">Marks all as read</p>
                </div>
              </a>
              <div class="header-notifications-list">
                <a class="dropdown-item" href="javascript:;">
                  <div class="d-flex align-items-center">
                    <div class="notify text-primary">
                      <i class="fa-solid fa-cart-shopping"></i>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="msg-name">New Orders <span class="msg-time float-end">2 min
                          ago</span></h6>
                      <p class="msg-info">You have recived new orders</p>
                    </div>
                  </div>
                </a>
                <a class="dropdown-item" href="javascript:;">
                  <div class="d-flex align-items-center">
                    <div class="notify text-danger">
                      <i class="fa-regular fa-circle-user"></i>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="msg-name">New Customers<span class="msg-time float-end">14 Sec
                          ago</span></h6>
                      <p class="msg-info">5 new user registered</p>
                    </div>
                  </div>
                </a>
                <a class="dropdown-item" href="javascript:;">
                  <div class="d-flex align-items-center">
                    <div class="notify text-success">
                      <i class="fa-regular fa-file"></i>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="msg-name">24 PDF File<span class="msg-time float-end">19 min
                          ago</span></h6>
                      <p class="msg-info">The pdf files generated</p>
                    </div>
                  </div>
                </a>
              </div>
              <a href="javascript:;">
                <div class="text-center msg-footer">View All Notifications</div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown dropdown-user-setting">
            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
              <div class="user-setting">
                <img src="{{ asset('admin/assets/images/avatars/06.png') }}" class="user-img" alt="">
              </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li>
                <a class="dropdown-item" href="javascript:;">
                  <div class="d-flex flex-row align-items-center gap-2">
                    <img src="{{ asset('admin/assets/images/avatars/06.png') }}" alt="" class="rounded-circle" width="54" height="54">
                    <div class="">
                      <h6 class="mb-0 dropdown-user-name">{{Auth::user()->name}}</h6>
                      <small class="mb-0 dropdown-user-designation text-secondary">{{Auth::user()->role}}</small>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li>
                <a class="dropdown-item" href="javascript:;">
                  <div class="d-flex align-items-center">
                    <div class="">
                      <i class="fa-regular fa-circle-user"></i>
                    </div>
                    <div class="ms-3"><span>Profile</span></div>
                  </div>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="javascript:;">
                  <div class="d-flex align-items-center">
                    <div class="">
                      <i class="fa-solid fa-gear"></i>
                    </div>
                    <div class="ms-3"><span>Setting</span></div>
                  </div>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li>
                <a class="dropdown-item" href="{{ route('user.logout') }}">
                  <div class="d-flex align-items-center">
                    <div class="">
                      <ion-icon name="log-out-outline"></ion-icon>
                    </div>
                    <i class="fa-solid fa-right-from-bracket"></i>
                  </div>
                </a>
              </li>
            </ul>
          </li>

        </ul>

      </div>
    </nav>
  </header>