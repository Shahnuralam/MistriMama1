<div class="page-sidebar navbar-collapse collapse">
    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        <li class="sidebar-toggler-wrapper hide">
            <div class="sidebar-toggler">
                <span></span>
            </div>
        </li>
        <!-- END SIDEBAR TOGGLER BUTTON -->
        <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->

        <li class="nav-item start {{ menuActiveClass(['admin'],true) }}">
            <a href="{{ route('admin') }}" class="nav-link nav-toggle">
                <i class="fa fa-dashboard"></i>
                <span class="title">Dashboard</span>
                <span class="selected"></span>

            </a>

        </li>
        <li class="nav-item  {{ menuActiveClass(['faq','role','email-template','general-setting'],true) }}">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="fa fa-gear"></i>
                <span class="title">Settings</span>
                <span class="arrow {{ menuActiveClass(['role','email-template','general-setting'],true) }}"></span>
            </a>
            <ul class="sub-menu">
               
                <li class="nav-item  {{ menuActiveClass(['general-setting'],true) }}">
                    <a href="{{ route('general-setting.index') }}" class="nav-link ">
                        <span class="title">General Setting</span>
                    </a>
                </li>

<!--                <li class="nav-item  {{ menuActiveClass(['faq'],true) }}">
                    <a href="{{ route('faq.index') }}" class="nav-link ">
                        <span class="title">FAQ</span>
                    </a>
                </li>-->
                 
                
             
                
                
            </ul>
        </li>
        
        <li class="nav-item  {{ menuActiveClass(['cms'],true) }} ">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="fa fa-gear"></i>
                <span class="title">Pages</span>
                <span class="arrow {{ menuActiveClass(['cms'],true) }}"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item {{ menuActiveClass(['cms'],true) }} ">
                    <a href="{{ route('cms.index') }}" class="nav-link ">
                        <span class="title">Manage Page</span>
                    </a>
                </li>
            </ul>
        </li>


             
        <li class="nav-item  {{ menuActiveClass(['service-category','service-sub-category'],true) }} ">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="fa fa-gear"></i>
                <span class="title">Service Category</span>
                <span class="arrow {{ menuActiveClass(['service-category'],true) }}"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item {{ menuActiveClass(['service-category'],true) }} ">
                    <a href="{{ route('service-category.index') }}" class="nav-link ">
                        <span class="title">Manage Service Category</span>
                    </a>
                </li>
                <li class="nav-item {{ menuActiveClass(['service-sub-category'],true) }} ">
                    <a href="{{ route('service-sub-category.index') }}" class="nav-link ">
                        <span class="title">Manage Service Sub Category</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item  {{ menuActiveClass(['service-provider'],true) }} ">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="fa fa-gear"></i>
                <span class="title">Service Provider</span>
                <span class="arrow {{ menuActiveClass(['service-provider'],true) }}"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item {{ menuActiveClass(['service-provider'],true) }} ">
                    <a href="{{ route('service-provider.index') }}" class="nav-link ">
                        <span class="title">Manage Service Provider</span>
                    </a>
                </li>
            </ul>
        </li>
         
           
        




        <li class="nav-item  {{ menuActiveClass(['blogs','blog-category'],true) }} ">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="fa fa-gear"></i>
                <span class="title">Blogs</span>
                <span class="arrow {{ menuActiveClass(['blog-category','blogs'],true) }}"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item {{ menuActiveClass(['blogs'],true) }} ">
                    <a href="{{ route('blogs.index') }}" class="nav-link ">
                        <span class="title">Manage Blogs</span>
                    </a>
                </li>
                <li class="nav-item {{ menuActiveClass(['blog-category'],true) }} ">
                    <a href="{{ route('blog-category.index') }}" class="nav-link ">
                        <span class="title">Manage Blog Category</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item  {{ menuActiveClass(['booking'],true) }} ">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="fa fa-gear"></i>
                <span class="title">Booking</span>
                <span class="arrow {{ menuActiveClass(['booking'],true) }}"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item {{ menuActiveClass(['booking'],true) }} ">
                    <a href="{{ route('booking.index') }}" class="nav-link ">
                        <span class="title">Manage Booking</span>
                    </a>
                </li>
                 
            </ul>
        </li>



         

 
    </ul>
    <!-- END SIDEBAR MENU -->
    <!-- END SIDEBAR MENU -->
</div>
