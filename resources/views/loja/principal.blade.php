<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css"
    rel="stylesheet" type="text/css">

    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"
    rel="stylesheet" type="text/css">

    <link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">

  </head>
  <body>

        @yield('conteudo')

        <div class="footer">
          <footer class="hidden-md hidden-sm hidden-xs secao secao-primary">
                <div class="container">
                  <div class="row">
                    <div class="col-sm-6">
                      <h1>Footer header</h1>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
                        <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
                        <br>Ut enim ad minim veniam, quis nostrud</p>
                    </div>
                    <div class="col-sm-6">
                      <p class="text-info text-right">
                        <br>
                        <br>
                      </p>
                      <div class="row">
                        <div class="col-md-12 hidden-lg hidden-md hidden-sm text-left">
                          <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
                          <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                          <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
                          <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 hidden-xs text-right">
                          <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
                          <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                          <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
                          <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </footer>
        </div>

        <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
        <script type="text/javascript">
          $('#example')
            .removeClass( 'display' )
            .addClass('table table-striped table-bordered');
          $().ready(function() {
              $('#alert-msg').fadeIn( 300 ).delay( 1500 ).fadeOut( 400 );
              $('#redireciona').fadeIn( 300 ).delay( 1500 ).fadeOut( 400 );
          });

        </script>

    </body>
</html>
