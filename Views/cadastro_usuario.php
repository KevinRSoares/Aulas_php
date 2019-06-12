<!--Modal Usuario-->
<div class="modal fade" id="CadUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header card-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastro de Usuário</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!--Cad Usu-->
        <form id="formCadastroUsuario">
          <div class="loader"></div>
          <div class="esconder" >
            <div class="container cadastroUsu">
              <div id="divMensagem"></div>
              <div class="row">
                <div class="form-group col-md-8">
                  <label for="InputNomeUsu">Nome do Usuário</label>
                  <input name="InputNomeUsu" type="text" class="form-control" id="InputNomeUsu" placeholder="Digite o Nome">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputTipoUsu">Tipo de Usuário</label>
                  <select name="InputTipoUsu" id="inputTipoUsu" class="form-control">
                    <option value="ST" >Escolha o Tipo</option>
                    <option value="P" >Professor</option>
                    <option value="E" >Estudante</option>
                  </select>
                </div>
              </div>  
              <div class="form-group">
                <label for="InputPasswordUsu">Senha</label>
                <input name="InputPasswordUsu" type="password" class="form-control" id="InputPasswordUsu" placeholder="Senha">
              </div>
            </div>
          </div>
          <!--Cad Usu-->                
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-dark">Cadastrar</button>
        </div>
      </form>
    </div>
  </div>
</div>