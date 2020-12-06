          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item">
                      <a href="{{ url('admin/home') }}" class="nav-link">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              Dashboard
                              <span class="right badge badge-danger">New</span>
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('setting.index') }}" class="nav-link">
                          <i class="nav-icon fas fa-chart-pie"></i>
                          <p>
                              Settings
                              <span class="badge badge-info right">6</span>
                          </p>
                      </a>
                  </li>
                  <li class="nav-header">Categories</li>

                  <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-table"></i>
                          <p>
                              Categories
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('category.index') }}" class="nav-link">
                                  <i class="nav-icon fas fa-th"></i>
                                  <p>Show All Categories</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('category.create') }}" class="nav-link">
                                  <i class="nav-icon far fa-plus-square"></i>
                                  <p>Add New Category</p>
                              </a>
                          </li>

                      </ul>
                  </li>
                  <li class="nav-header">News</li>
                  <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-book"></i>
                          <p>
                              News
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('news.index') }}" class="nav-link">
                                  <i class="nav-icon fas fa-copy"></i>
                                  <p>Show all news</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('news.create') }}" class="nav-link">
                                  <i class="nav-icon fas fa-edit"></i>
                                  <p>Add News</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-header">Sign Out</li>
                  <li class="nav-item">
                      <a class="nav-link text" href="{{ route('logout') }}"
                          onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                          <i class="nav-icon far fa-circle text-danger"></i>

                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>

                  </li>

              </ul>
          </nav>
          <!-- /.sidebar-menu -->
