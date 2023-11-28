<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <h4 class="logo-text">Zoro-Mart</h4>
        </div>
    </div>
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <div class="parent-icon">
                    <i class="fa-solid fa-house fa-sm"></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>

        <li class="menu-label">Category area</li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon">
                    <ion-icon name="bag-handle-outline"></ion-icon>
                </div>
                <div class="menu-title">Categories</div>
            </a>
            <ul>
                <li><a href="{{ route('admin.categories') }}">
                        <ion-icon name="ellipse-outline"></ion-icon>All Categories
                    </a>
                </li>
                <li><a href="{{ route('admin.add-category') }}">
                        <ion-icon name="ellipse-outline"></ion-icon>Add Categories
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-label">Sub-Category area</li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon">
                    <ion-icon name="bag-handle-outline"></ion-icon>
                </div>
                <div class="menu-title">Sub-Categories</div>
            </a>
            <ul>
                <li><a href="{{ route('admin.sub-categories') }}">
                        <ion-icon name="ellipse-outline"></ion-icon>All Sub-Categories
                    </a>
                </li>
                <li><a href="{{ route('admin.add-sub-category') }}">
                        <ion-icon name="ellipse-outline"></ion-icon>Add Sub-Category
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-label">Product area</li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon">
                    <ion-icon name="bag-handle-outline"></ion-icon>
                </div>
                <div class="menu-title">Products</div>
            </a>
            <ul>
                <li><a href="{{ route('admin.products') }}">
                        <ion-icon name="ellipse-outline"></ion-icon>All Products
                    </a>
                </li>
                <li><a href="{{ route('admin.add-product') }}">
                        <ion-icon name="ellipse-outline"></ion-icon>Add Products
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-label">Setting Area</li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon">
                    <ion-icon name="bag-handle-outline"></ion-icon>
                </div>
                <div class="menu-title">General Settings</div>
            </a>
            <ul>
                <li><a href="{{ route('admin.utility') }}">
                        <ion-icon name="ellipse-outline"></ion-icon>Utility
                    </a>
                </li>
                <li><a href="{{ route('admin.socialmedia') }}">
                        <ion-icon name="ellipse-outline"></ion-icon>Social Media
                    </a>
                </li>
            </ul>
        </li>

</aside>
