  <header>
    <p class="d-none"><?php echo $_SESSION['codusu'] ?></p>
    <p class="d-none"><?php echo $_SESSION['nomusu'] ?></p>
    <p class="d-none"><?php echo $_SESSION['dtcad'] ?></p>
    <p class="d-none"><?php echo $_SESSION['tipusu'] ?></p>
    <p class="d-none"><?php echo $_SESSION['situacao'] ?></p>!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <div class="dropdown">
            <a class="btn btn-dark dropdown
            dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Cadastros</a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" data-toggle="modal" data-target="#CadUsuario">Usuário</a>
            </div>
          </div>       
       </ul>
       <ul class="navbar-nav">
          <li class="nav-item">
           <a class="nav-link" href="Views/sair.php">Sair</a>
          </li>  
       </ul>
    </div>
  </nav>
</header>

<?php include 'Views/cadastro_usuario.php' ?>

<script type="text/javascript">
  $('.custom-file-input').on('change',function(){
    var fileName = $(this).val();

    $('#labelFile').html(fileName);
  })
  function process(quant,id){
    var value = parseInt(document.getElementById("q"+id+"").value);
    value+=quant;
    if(value < 1){
      document.getElementById("q"+id+"").value = 1;
    }else{
      document.getElementById("q"+id+"").value = value;
    }
  }
</script>
