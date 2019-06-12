<div class="card" style="width: 18rem;">
    <div class="card-header"> 
        <h5 id="nomeCardUsu" class="card-title">Nome do Usuário</h5>
    </div>
  <div class="card-body">
    <p id="dataCardUsu" class="card-text"> Data de Cadastro: 30/01/2013</p>
    <p id="tipoCardUsu" class="card-text"> Tipo de Usuário: Aluno</p>
  </div>
  <div class="card-footer" > 
    <button type="submit" class="btn btn-success btns"  data-toggle="modal" data-target="#modalSenUsu" data-whatever="@mdo">Atualizar</button>
    </div>
</div>

<div class="modal fade" id="modalSenUsu" tabindex="-1" role="dialog" aria-labelledby="modalSenUsu" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Validação de Senha - Kevin Ruan Soares</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Senha do Usuário</label>
            <input type="password" class="form-control campoSenha">
          </div>
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark btns" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-success btns">Validar</button>
      </div>
    </div>
  </div>
</div>
