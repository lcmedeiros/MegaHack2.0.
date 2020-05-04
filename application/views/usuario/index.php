<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>WorkConf</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/bootstrap.min.css'); ?>" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .direct-chat-text {
          border-radius: .3rem;
          background: #d2d6de;
          border: 1px solid #d2d6de;
          color: #444;
          margin: 5px 0 0 50px;
          padding: 5px 10px;
          position: relative;
      }
      .direct-chat-img {
          border-radius: 50%;
          float: left;
          height: 40px;
          width: 40px;
      }
      .direct-chat-warning .right>.direct-chat-text {
          background: #ffc107;
          border-color: #ffc107;
          color: #1f2d3d;
      }
      .right .direct-chat-img {
          float: right;
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/offcanvas.css'); ?>" rel="stylesheet">
  </head>
  <body class="bg-light">
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
  <a class="navbar-brand mr-auto mr-lg-0" href="#">WorkConf Lives</a>
  <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
       <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>">Sair</a>
      </li>
    </ul>
  </div>
</nav>

<div class="nav-scroller bg-white shadow-sm">
  <nav class="nav nav-underline">
    <a class="nav-link active" href="#">Dashboard</a>
    <a class="nav-link" href="#">
      Pessoas Assistindo
      <span class="badge badge-pill bg-light align-text-bottom">360</span>
    </a>
    <a class="nav-link" href="#">Explore</a>
    <a class="nav-link" href="#">Sugestões</a>
    <a class="nav-link" href="#">Compartilhar WorkConf</a>
  </nav>
</div>

<main role="main" class="container">

  <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded shadow-sm">
    <img class="mr-3" src="<?php echo base_url('assets/bootstrap-outline.svg'); ?>" alt="" width="48" height="48">
    <div class="lh-100">
      <h6 class="mb-0 text-white lh-100">Rede Social da Live</h6>
      <small><?php echo date('d/m/Y'); ?></small>
    </div>
  </div>

  <div class="row">

    <div class="col-md-6">
      <div class="my-3 p-3 bg-white rounded shadow-sm">
        <iframe width="500" height="315" src="https://www.youtube.com/embed/oUPaJxk6TZ0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" autoplay = true allowfullscreen></iframe>
      </div>
    </div>

    <div class="col-md-6">
        <div class="my-3 p-3 bg-white rounded shadow-sm">
          <h6 class="border-bottom border-gray pb-2 mb-0">Comentários Recentes</h6>
          <div class="media text-muted pt-3">
            <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
              <strong class="d-block text-gray-dark">@username</strong>
              Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
            </p>
          </div>
          <div class="media text-muted pt-3">
            <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#e83e8c"/><text x="50%" y="50%" fill="#e83e8c" dy=".3em">32x32</text></svg>
            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
              <strong class="d-block text-gray-dark">@username</strong>
              Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
            </p>
          </div>
          <div class="media text-muted pt-3">
            <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#6f42c1"/><text x="50%" y="50%" fill="#6f42c1" dy=".3em">32x32</text></svg>
            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
              <strong class="d-block text-gray-dark">@username</strong>
              Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
            </p>
          </div>
        </div>
    </div>

  </div>

  
    <div class="my-3 p-3 bg-white rounded shadow-sm">
      <div class="row">
          <div class="col-md-4">
              <div class="my-3 p-3 bg-white rounded shadow-sm">
                <h6 class="border-bottom border-gray pb-2 mb-0">Produto Disponíveis</h6>
                <div class="media text-muted pt-3">
                  <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <strong class="d-block text-gray-dark">Livro a Cura</strong>
                    <br>
                    <button class="btn btn-success btn-block">Comprar</button>
                  </p>
                </div>
                <div class="media text-muted pt-3">
                  <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <strong class="d-block text-gray-dark">Mentoria Individual</strong>
                    <br>
                    <button class="btn btn-success btn-block">Comprar</button>
                  </p>
                </div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="my-3 p-3 bg-white rounded shadow-sm">
                <h6 class="border-bottom border-gray pb-2 mb-0">Banners</h6>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="<?php echo base_url('assets/conf.jpg'); ?>" class="d-block w-100" alt="Banner Publicidade">
                    </div>
                    <div class="carousel-item">
                      <img src="<?php echo base_url('assets/conf.jpg'); ?>" class="d-block w-100" alt="Banner Publicidade">
                    </div>
                    <div class="carousel-item">
                      <img src="<?php echo base_url('assets/conf.jpg'); ?>" class="d-block w-100" alt="Banner Publicidade">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="my-3 p-3 bg-white rounded shadow-sm">
                <div class="card direct-chat direct-chat-warning">
                  <div class="card-header">
                    <h3 class="card-title">Chat</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <!-- Conversations are loaded here -->
                    <div class="direct-chat-messages">
                      <!-- Message. Default to the left -->
                      <div class="direct-chat-msg">
                        <div class="direct-chat-infos clearfix">
                          <span class="direct-chat-name float-left">Alexander Pierce</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <img class="direct-chat-img" src="<?php echo base_url('assets/user1-128x128.jpg'); ?>" alt="message user image">
                        <!-- /.direct-chat-img -->
                        <div class="direct-chat-text">
                          Mensagem de Texto
                        </div>
                        <!-- /.direct-chat-text -->
                      </div>
                      <!-- /.direct-chat-msg -->

                      <!-- Message to the right -->
                      <div class="direct-chat-msg right">
                        <div class="direct-chat-infos clearfix">
                          <span class="direct-chat-name float-right">Sarah Bullock</span>
                        </div>  
                        <!-- /.direct-chat-img -->
                        <div class="direct-chat-text">
                          Sim, A Live tá ótima
                        </div>
                        <!-- /.direct-chat-text -->
                      </div>
                      <!-- /.direct-chat-msg -->

                      <!-- Message. Default to the left -->
                      <div class="direct-chat-msg">
                        <div class="direct-chat-infos clearfix">
                          <span class="direct-chat-name float-left">Alexander Pierce</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <img class="direct-chat-img" src="<?php echo base_url('assets/user1-128x128.jpg'); ?>" alt="message user image">
                        <!-- /.direct-chat-img -->
                        <div class="direct-chat-text">
                          s2s2s2
                        </div>
                        <!-- /.direct-chat-text -->
                      </div>
                      <!-- /.direct-chat-msg -->

                      <!-- Message to the right -->
                      <div class="direct-chat-msg right">
                        <div class="direct-chat-infos clearfix">
                          <span class="direct-chat-name float-right">Sarah Bullock</span>
                        </div>  
                        <!-- /.direct-chat-img -->
                        <div class="direct-chat-text">
                          eu to Amando
                        </div>
                        <!-- /.direct-chat-text -->
                      </div>
                      <!-- /.direct-chat-msg -->

                    </div>
                    <!--/.direct-chat-messages-->

                   
                    <!-- /.direct-chat-pane -->
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <form action="#" method="post">
                      <div class="input-group">
                        <input type="text" name="message" placeholder="Digite sua mensagem" class="form-control">
                        <span class="input-group-append">
                          <button type="button" class="btn btn-warning">Enviar</button>
                        </span>
                      </div>
                    </form>
                  </div>
                  <!-- /.card-footer-->
                </div>
              </div>
          </div>
      </div>
    </div>
  


</main>

<script src="<?php echo base_url('assets/jquery-3.4.1.slim.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/offcanvas.js'); ?>"></script>

</body>
</html>