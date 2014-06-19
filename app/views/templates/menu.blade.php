<nav class="navbar navbar-default" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Navegação</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">CMS</a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
              <li class="active"><a href="{{ url('') }}">Home</a></li>
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Artigos <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                      <li><a href="{{ url('artigos') }}">Lista</a></li>
                      <li><a href="{{ url('artigos/inserir') }}">Inserir</a></li>
                  </ul>
              </li>
          </ul>
      </div>
    </div>
</nav>