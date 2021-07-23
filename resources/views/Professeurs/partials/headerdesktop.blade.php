<header class="header-desktop">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="header-wrap">
                <form class="form-header" action="" method="POST">
                    <input class="au-input au-input--xl" type="text" name="search" placeholder="Rechercher des données &amp; rapports..." />
                    <button class="au-btn--submit" type="submit">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                </form>
                <div class="header-button">
                    <div class="noti-wrap">
                        <div class="noti__item js-item-menu">
                            <i class="zmdi zmdi-notifications"></i>
                            <span class="quantity">3</span>
                            <div class="notifi-dropdown js-dropdown">
                                <div class="notifi__title">
                                    <p>Vous avez 1 Notifications</p>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c1 img-cir img-40">
                                        <i class="zmdi zmdi-email-open"></i>
                                    </div>
                                    <div class="content">
                                        <p>nouvelle notification</p>
                                        <span class="date">12 Avril 2020</span>
                                    </div>
                                </div>
                                <div class="notifi__footer">
                                    <a href="#">toutes les notifications</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="account-wrap">
                        <div class="account-item clearfix js-item-menu">
                            <div class="image rounded-circle">
                                <img src="{{asset('admin/images/icon/kid.png') }}"/>
                            </div>
                            <div class="content">
                                <a class="js-acc-btn" href="#"></a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image rounded-circle">
                                        <a href="#">
                                            <img src="images/icon/kid.png"/>
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#"></a>
                                        </h5>
                                        <span class="email"></span>
                                    </div>
                                </div>
                               
                                <div class="account-dropdown__footer">
                                    
                                        <a href="{{ route('logout') }}" 
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                                <i class="zmdi zmdi-power"></i>Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                            @csrf
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>