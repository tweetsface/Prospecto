<aside>
      <div id="sidebar" class="collapse navbar-collapse ">
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered">
            <img src="{{asset('storage/perfil.jpg')}}"  class="img-circle"
           width="80"></p>
           <span class="nombreu" style="text-align: center;"><h3></h3></span>
           <h5 class="centered"></h5> 
          <li class="mt">
            <a class="active" href="{{asset('/listaProspecto')}}">
              <i class="fa fa-dashboard"></i>
              <span class="fontSidebar">Listado de Prospectos</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="#"  data-toggle="modal" data-target="#x"> <i class="fa fa-sign-out"></i><span class="fontSidebar">Nuevo Prospecto</span></a>
            <li class="sub-menu">
            <a href="{{asset('/logout')}}">
              <i class="fa fa-ticket"></i><span class="fontSidebar">Logout</span></a>
          </div>
</aside>
