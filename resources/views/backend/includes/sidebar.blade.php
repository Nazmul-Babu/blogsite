<!-- partial:partials/_sidebar.html -->
<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            Rastu<span>rant</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        {{----------------------- Admin Start  -------------}}

        <ul class="nav">
            <li class="nav-item nav-category">Admin</li>
            <li class="nav-item {{ $data['active_menu'] == 'dashboard' ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard') }}" class="nav-link ">
                    <i class="fa-solid fa-chart-line"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item {{ $data['active_menu'] == 'category' ? 'active' : '' }}">
                <a href="{{ route('admin.createcategory') }}" class="nav-link ">
                    <i class="fa-solid fa-chart-line"></i>
                    <span class="link-title">Category</span>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link " data-bs-toggle="collapse" href="#slider" role="button" aria-expanded="false"
                    aria-controls="slider">
                    <i class="fa-solid fa-sliders"></i>
                    <span class="link-title">Posts</span>
                    <i class="fa-solid fa-chevron-down link-arrow"></i>
                </a>
                <div class="collapse" id="slider">
                    <ul class="nav sub-menu">
                        <li class="nav-item ">
                            <a href="{{ route('admin.createpost') }}" class="nav-link ">Create Post</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.allposts') }}" class="nav-link ">Post List</a>
                        </li>
                    </ul>
                </div>
            </li>




        </ul>

        {{----------------------- Admin End  -------------}}

        {{----------------------- Operator End  -------------}}
    </div>
</nav>

<!-- partial -->
