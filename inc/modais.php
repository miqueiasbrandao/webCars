<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastrar Carros</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="row my-2 fadeIn">

                    <div class="col-md">


                    </div>

                </div>

                <div class="card animate slideIn">

                    <form class="card-body" method="post" id="CarrosForm" action="controler/inserirCarros.php">

                        <div class="row g-2">

                            <div class="col-md-4">

                                <div class="form-group">

                                    <label for="modelo">

                                    Modelo

                                    </label>

                                    <input type="text" class="form-control" id="modelo" name="modelo">

                                </div>

                            </div>

                            <div class="col-md-4">

                                <div class="form-group">

                                    <label for="placa">

                                    Placa

                                    </label>

                                    <input type="text" class="form-control" id="placa" name="placa">

                                </div>

                            </div>

                            <div class="col-md-4">

                                <div class="form-group">

                                    <label for="marca">

                                    Marca

                                    </label>

                                    <input type="text" class="form-control" id="marca" name="marca">

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="cor">

                                    Cor

                                    </label>

                                    <input type="text" class="form-control" id="cor" name="cor">

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="ano">

                                    Ano

                                    </label>

                                    <input type="text" class="form-control" id="ano" name="ano">

                                </div>

                            </div>

                        </div>

                        </div>
                            <p style="font-size: 13px;" class="text-center text-danger"><i>Por padrão, a situação do veículo no momento do cadastro é: "em preparação" <br> Para alterar, deve ir em editar e alterar a situação </i></p>
                        </div>

                        <div class="modal-footer">

                            <button type="button" class="btn btn-secondary btn-sm mt-3" data-bs-dismiss="modal" >

                                ⬅️ Voltar

                            </button>

                            <button type="submit" class="btn btn-primary btn-sm mt-3">

                                ✔️Salvar

                            </button>

                        </div>

                    </form>

                </div>

    </div>

</div>


<!-- Modal -->
<div class="modal fade" id="sobre" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-dialog-centered">

    <div class="modal-content">

      <div class="modal-header">

        <h1 class="modal-title fs-5" id="exampleModalLabel">Sobre</h1>

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

      </div>

        <div class="modal-body">

            Projeto da disciplina Desenvolvimento WEB, HTML, CSS, JAVASCRIPT, PHP, MYSQL.
            Ministrada pelo professor Daniel Gomes(Estácio de Sá). <br>
            Trabalho desenvolvido pelo grupo de alunos listados abaixo.

            <table class="table mt-2 text-center table-sm table-hover">

                <thead>

                    <tr>
                        
                        <th scope="col">Aluno</th>

                        <th scope="col">Matricula</th>

                    </tr>
                    
                </thead>

                <tbody class="table-group-divider">

                    <tr>

                        <td>Miqueias Costa Brandão</td>

                        <td>202203141424</td>

                    </tr>

                    <tr>

                        <td>Victor Dias de Alcântara</td>

                        <td>202203395084</td>

                    </tr>

                    <tr>

                        <td>Marcos Dias Lima</td>

                        <td>202202148296</td>

                    </tr>

                    <tr>

                        <td>Carlos Henrique Ribeiro da Silva</td>

                        <td>202202311464</td>

                    </tr>

                    <tr>

                        <td>Lucas Pereira da Silva</td>

                        <td>202202148202</td>

                    </tr>

                    </tr>

                </tbody>

            </table>

        </div>

      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Sair</button>

      </div>

    </div>

  </div>
  
</div>

<!-- Modal -->
<div class="modal fade" id="criarUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Criar novo Usuario</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


      <div class="card animate slideIn">

        <form class="card-body" method="post" id="CarrosForm" action="controler/criarUsuario.php">

            <div class="row g-2">

                <div class="col-md-12">

                    <div class="form-group">

                        <label for="login">

                        Login

                        </label>

                        <input type="text" class="form-control" id="login" name="login">

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="form-group">

                        <label for="senhaOne">

                        Senha

                        </label>

                        <input type="password" class="form-control" id="senha" name="senhaOne">

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="form-group">

                        <label for="senhaTwo">

                        Informe a senha novamente

                        </label>

                        <input type="password" class="form-control" id="senhaTwo" name="senhaTwo">

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="form-group mx-auto">

                        <label for="senhaTwo">

                        Grupo de Usuarios

                        </label>

                        <br>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="administrador" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Administrador</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="usuario" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Usuario</label>
                        </div>

                    </div>

                </div>

            </div>

            </div>

            </div>

            <div class="modal-footer">

                <button type="submit" class="btn btn-primary mt-3">

                    <i class="bi bi-person-check-fill"></i>

                    Salvar

                </button>

            </div>

        </form>

        </div>
        
        
      </div>
    </div>
  </div>
</div>