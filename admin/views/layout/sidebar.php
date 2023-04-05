<div class="app-sidepanel" id="app-sidepanel">
    <div class="sidepanel-drop" id="sidepanel-drop"></div>
    <div class="sidepanel-inner d-flex flex-column">
        <a class="sidepanel-close d-xl-none" id="sidepanel-close" href="#">&times;</a>
        <div class="app-branding align-items-center mb-4">
            <a class="app-logo d-flex " href="index.php">
                <img class="logo-icon m-1" src="./assets/img/logo/apple-icon-noname.png" alt="logo">
                <div class="content">
                    <h3 class="fw-bold">Bookly</h3>
                    <p class="">End Of Alley</p>
                </div>
            </a>

        </div><!--//app-branding-->

        <nav class="app-nav app-nav-main flex-grow-1" id="app-nav-main">
            <ul class="app-menu list-unstyled accordion" id="menu-accordion">
                <li class="nav-item ">
                    <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                    <a class="nav-link menu-link" href="index.php">
                        <span class="nav-icon">
                            <svg class="bi bi-speedometer" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z"></path>
                                <path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z"></path>
                            </svg>
                        </span>
                        <span class="nav-link-text">Dashboard</span>
                    </a><!--//nav-link-->
                </li><!--//nav-item-->
                <li class="nav-item">
                    <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                    <a class="nav-link menu-link" href="index.php?controller=customer">
                        <span class="nav-icon">
                            <svg class="bi bi-people" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"></path>
                            </svg>
                        </span>
                        <span class="nav-link-text">Users</span>
                    </a><!--//nav-link-->
                </li><!--//nav-item-->
                <li class="nav-item">
                    <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                    <a class="nav-link menu-link" href="index.php?controller=brand">
                        <span class="nav-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 12">
                                <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                                <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
                            </svg>
                        </span>
                        <span class="nav-link-text">Category</span>
                    </a><!--//nav-link-->
                </li><!--//nav-item-->
                <li class="nav-item">
                    <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                    <a class="nav-link menu-link" href="index.php?controller=publishing_company">
                        <span class="nav-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-houses" viewBox="0 0 16 16">
                                <path d="M5.793 1a1 1 0 0 1 1.414 0l.647.646a.5.5 0 1 1-.708.708L6.5 1.707 2 6.207V12.5a.5.5 0 0 0 .5.5.5.5 0 0 1 0 1A1.5 1.5 0 0 1 1 12.5V7.207l-.146.147a.5.5 0 0 1-.708-.708L5.793 1Zm3 1a1 1 0 0 1 1.414 0L12 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l1.854 1.853a.5.5 0 0 1-.708.708L15 8.207V13.5a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 4 13.5V8.207l-.146.147a.5.5 0 1 1-.708-.708L8.793 2Zm.707.707L5 7.207V13.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5V7.207l-4.5-4.5Z" />
                            </svg>
                        </span>
                        <span class="nav-link-text">Publishing Company</span>
                    </a><!--//nav-link-->
                </li><!--//nav-item-->
                <li class="nav-item">
                    <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                    <a class="nav-link menu-link" href="index.php?controller=product">
                        <span class="nav-icon">
                            <svg class="bi bi-box" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5 8 5.961 14.154 3.5 8.186 1.113zM15 4.239l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"></path>
                            </svg>
                        </span>
                        <span class="nav-link-text">Products</span>
                    </a><!--//nav-link-->
                </li><!--//nav-item-->
                <li class="nav-item">
                    <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                    <a id="menu-link" class="nav-link menu-link" href="index.php?controller=order">
                        <span class="nav-icon">
                            <svg class="bi bi-layout-text-window-reverse" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M13 6.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm0 3a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm-.5 2.5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1h5z"></path>
                                <path d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM2 1a1 1 0 0 0-1 1v1h14V2a1 1 0 0 0-1-1H2zM1 4v10a1 1 0 0 0 1 1h2V4H1zm4 0v11h9a1 1 0 0 0 1-1V4H5z"></path>
                            </svg>
                        </span>
                        <span class="nav-link-text">Orders</span>
                    </a><!--//nav-link-->
                </li><!--//nav-item-->

            </ul><!--//app-menu-->
        </nav><!--//app-nav-->
        <div class="app-sidepanel-footer">
            <nav class="app-nav app-nav-footer">
                <ul class="app-menu footer-menu list-unstyled">

                    <li class="nav-item">
                        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                        <a class="nav-link menu-link" href="index.php?controller=login&action=logout">
                            <span class="nav-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                                    <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                                </svg>
                            </span>
                            <span class="nav-link-text">Exit</span>
                        </a><!--//nav-link-->
                    </li><!--//nav-item-->
                </ul><!--//footer-menu-->
            </nav>
        </div><!--//app-sidepanel-footer-->

    </div><!--//sidepanel-inner-->
</div><!--//app-sidepanel-->

<script>
    let menuLinks = document.querySelectorAll('.menu-link');
    let activeLink = localStorage.getItem('activeLink');

    // Thêm class active vào liên kết được lưu trữ trong localStorage
    if (activeLink) {
        menuLinks.forEach(function(link) {
            if (link.href === activeLink) {
                link.classList.add('active');
            }
        });
    }

    // Thêm sự kiện click vào tất cả các liên kết trong menu
    menuLinks.forEach(function(link) {
        link.addEventListener('click', function(event) {
            // Lưu trữ đường dẫn của liên kết đang được nhấp vào localStorage
            localStorage.setItem('activeLink', link.href);

            menuLinks.forEach(function(link) {
                link.classList.remove('active');
            });
            this.classList.add('active');
        });
    });

    // Kiểm tra giá trị trong localStorage và thêm class active vào liên kết tương ứng
    window.addEventListener('load', function() {
        let activeLink = localStorage.getItem('activeLink');
        if (activeLink) {
            let link = document.querySelector('a[href="' + activeLink + '"]');
            if (link) {
                link.classList.add('active');
            }
        }
    });
</script>