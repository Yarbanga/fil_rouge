<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <!-- <img src="images/icon/logo-mini.png" alt="Cool Admin" /> -->
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                    <a class="js-arrow" href="">
                        <i class="fas fa-tachometer-alt"></i>Tableau de bord</a>
                    
                </li>
                
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-desktop"></i>Programme</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="">Liste des classes</a>
                        </li>
                        <li>
                            <a href="{{ url('classe') }}">Ajouter une classe</a>
                        </li>
                        
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-table"></i>Leçons</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        
                        <li>
                            <a href="">Ajouter une leçon</a>
                        </li>
                        <li>
                            <a href="">Ajouter une matière</a>
                        </li>
                    </ul>
                </li>
               
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-desktop"></i>Exercice</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="#">liste</a>
                        </li>
                        <li>
                            <a href="#">Ajouter exercice</a> 
                        </li>
                        
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>