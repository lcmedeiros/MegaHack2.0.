<main role="main" class="inner cover">
  <form method="post" action="<?php echo base_url('home/create'); ?>">
    <div class="form-group">
        <input type="text" class="form-control" id="eventName" placeholder="Nome de evento" value="" required>
    </div>        
    <div class="form-group">
        <button class="btn btn-lg btn-primary btn-block" type="submit" href="#">Criar Evento</button>
    </div>
  </form>
</main>