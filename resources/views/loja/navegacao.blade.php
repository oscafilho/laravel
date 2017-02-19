<div class="navbar navbar-default navbar-inverse navbar-static-top" role="navigation">
  <div class="container">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{@action('LoginController@login')}}"><span>Laravel</span></a>
      </div>
      <div class="collapse navbar-collapse" id="nav1">
        <ul class="nav navbar-nav">
          <li class="active">
            <a href="{{@action('ProdutoController@lista')}}">Listagem</a>
          </li>
          <li>
            <a href="{{@action('ProdutoController@novo')}}">Novo Produto</a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" aria-haspopup="true"
                    data-toggle="dropdown" role="button" aria-expanded="false">
                      {{@explode(" ", Auth::user()->name)[0]}}
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" >
                  <li><a href="{{@action('LoginController@logout')}}">Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
  </div>
</div>
</div>
