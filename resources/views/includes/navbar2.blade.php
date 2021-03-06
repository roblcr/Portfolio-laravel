<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="ti-home menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
          <i class="ti-clipboard menu-icon"></i>
          <span class="menu-title">Création</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="form-elements">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="{{URL::to('/add_skills')}}">Ajouter compétences</a></li>
            <li class="nav-item"><a class="nav-link" href="{{URL::to('/add_education')}}">Ajouter formation</a></li>
            <li class="nav-item"><a class="nav-link" href="{{URL::to('/add_professionalexp')}}">Ajouter une expérience professionnelle</a></li>
            <li class="nav-item"><a class="nav-link" href="{{URL::to('/add_portfolio')}}">Ajouter une nouvelle application</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
          <i class="ti-layout menu-icon"></i>
          <span class="menu-title">Affichages</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="tables">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{URL::to('/profile')}}">Profile</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{URL::to('/skills')}}">Compétences</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{URL::to('/education')}}">Education</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{URL::to('/professional_exp')}}">Experience professionnel</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{URL::to('/portfolio')}}">Portfolio</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </nav>
