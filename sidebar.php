
<!-- ========== Left Sidebar Start ========== -->
<div class="leftside-menu">
    
    <!-- LOGO -->
    <a href="index.php" class="logo text-center logo-light">
        <span class="logo-lg">
            <img src="assets/images/logo.png" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="assets/images/logo_sm.png" alt="" height="16">
        </span>
    </a>

    <!-- LOGO -->
    <a href="index.php" class="logo text-center logo-dark">
        <span class="logo-lg">
            <img src="assets/images/logo-dark.png" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="assets/images/logo_sm_dark.png" alt="" height="16">
        </span>
    </a>

    <div class="h-100" id="leftside-menu-container" data-simplebar="">

        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title side-nav-item">Navigation</li>

            <li class="side-nav-item">
                <a href="index.php" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <!-- <span class="badge bg-success float-end">4</span> -->
                    <span> Dashboards </span>
                </a>
            </li>

            <li class="side-nav-title side-nav-item">Apps</li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false" aria-controls="sidebarEcommerce" class="side-nav-link">
                    <i class="uil-store"></i>
                    <span> Courses </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarEcommerce">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="add_course.php">Add Course</a>
                        </li>
                        <li>
                            <a href="view_courses.php">View Courses</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarEmail" aria-expanded="false" aria-controls="sidebarEmail" class="side-nav-link">
                    <i class="uil-envelope"></i>
                    <span> Email </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarEmail">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="apps-email-inbox.html">Inbox</a>
                        </li>
                        <li>
                            <a href="apps-email-read.html">Read Email</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarProjects" aria-expanded="false" aria-controls="sidebarProjects" class="side-nav-link">
                    <i class="uil-briefcase"></i>
                    <span> Projects </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarProjects">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="apps-projects-list.html">List</a>
                        </li>
                        <li>
                            <a href="apps-projects-details.html">Details</a>
                        </li>
                        <li>
                            <a href="apps-projects-gantt.html">Gantt <span class="badge rounded-pill badge-light-lighten font-10 float-end">New</span></a>
                        </li>
                        <li>
                            <a href="apps-projects-add.html">Create Project <span class="badge rounded-pill badge-success-lighten font-10 float-end">New</span></a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a href="apps-social-feed.html" class="side-nav-link">
                    <i class="uil-rss"></i>
                    <span> Social Feed </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarTasks" aria-expanded="false" aria-controls="sidebarTasks" class="side-nav-link">
                    <i class="uil-clipboard-alt"></i>
                    <span> Tasks </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarTasks">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="apps-tasks.html">List</a>
                        </li>
                        <li>
                            <a href="apps-tasks-details.html">Details</a>
                        </li>
                        <li>
                            <a href="apps-kanban.html">Kanban Board</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a href="apps-file-manager.html" class="side-nav-link">
                    <i class="uil-folder-plus"></i>
                    <span> File Manager </span>
                </a>
            </li>

            <li class="side-nav-title side-nav-item">Custom</li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarPages" aria-expanded="false" aria-controls="sidebarPages" class="side-nav-link">
                    <i class="uil-copy-alt"></i>
                    <span> Pages </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarPages">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="pages-profile.html">Profile</a>
                        </li>
                        <li>
                            <a href="pages-profile-2.html">Profile 2</a>
                        </li>
                        <li>
                            <a href="pages-invoice.html">Invoice</a>
                        </li>
                        <li>
                            <a href="pages-faq.html">FAQ</a>
                        </li>
                        <li>
                            <a href="pages-pricing.html">Pricing</a>
                        </li>
                        <li>
                            <a href="pages-maintenance.html">Maintenance</a>
                        </li>
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarPagesAuth" aria-expanded="false" aria-controls="sidebarPagesAuth">
                                <span> Authentication </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarPagesAuth">
                                <ul class="side-nav-third-level">
                                    <li>
                                        <a href="pages-login.html">Login</a>
                                    </li>
                                    <li>
                                        <a href="pages-login-2.html">Login 2</a>
                                    </li>
                                    <li>
                                        <a href="pages-register.html">Register</a>
                                    </li>
                                    <li>
                                        <a href="pages-register-2.html">Register 2</a>
                                    </li>
                                    <li>
                                        <a href="pages-logout.html">Logout</a>
                                    </li>
                                    <li>
                                        <a href="pages-logout-2.html">Logout 2</a>
                                    </li>
                                    <li>
                                        <a href="pages-recoverpw.html">Recover Password</a>
                                    </li>
                                    <li>
                                        <a href="pages-recoverpw-2.html">Recover Password 2</a>
                                    </li>
                                    <li>
                                        <a href="pages-lock-screen.html">Lock Screen</a>
                                    </li>
                                    <li>
                                        <a href="pages-lock-screen-2.html">Lock Screen 2</a>
                                    </li>
                                    <li>
                                        <a href="pages-confirm-mail.html">Confirm Mail</a>
                                    </li>
                                    <li>
                                        <a href="pages-confirm-mail-2.html">Confirm Mail 2</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarPagesError" aria-expanded="false" aria-controls="sidebarPagesError">
                                <span> Error </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarPagesError">
                                <ul class="side-nav-third-level">
                                    <li>
                                    <a href="pages-404.html">Error 404</a>
                                </li>
                                <li>
                                    <a href="pages-404-alt.html">Error 404-alt</a>
                                </li>
                                <li>
                                    <a href="pages-500.html">Error 500</a>
                                </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="pages-starter.html">Starter Page</a>
                        </li>
                        <li>
                            <a href="pages-preloader.html">With Preloader</a>
                        </li>
                        <li>
                            <a href="pages-timeline.html">Timeline</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarLayouts" aria-expanded="false" aria-controls="sidebarLayouts" class="side-nav-link">
                    <i class="uil-window"></i>
                    <span> Layouts </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarLayouts">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="layouts-horizontal.html">Horizontal</a>
                        </li>
                        <li>
                            <a href="layouts-detached.html">Detached</a>
                        </li>
                    </ul>
                </div>
            </li>


        </ul>

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->