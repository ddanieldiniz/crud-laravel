<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/5d47d4d58c.js" crossorigin="anonymous"></script>

    <title>Controle Estudantes</title>
  </head>
  <body class="container">
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="/listacandidatos">EAD - PHP/LARAVEL</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/listacandidatos">Lista de Estudantes<span class="sr-only"></span></a>
      </li>
      
      </li>
    </ul>
  </div>
</nav>
<br/><br/>
<div class="modal fade" class="md" id="examplemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Novo Estudante</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Dados:<div class="container" id="one"><br/>
            <form action="" method="POST">
                  @csrf
                  <input type="text" name="Nome" placeholder="Insira nome">
                  <br/><br/>
                  <input type="text" name="Senha" placeholder="Insira senha">
                  <br/><br/>
                  <input type="text" name="Data" placeholder="Insira data">
                  <br/><br/>

                  <button class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                  <button class="btn btn-primary" type="submit">Adicionar</button>
            </form>

        </div>
      </div>
    </div>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Senha</th>
      <th scope="col">Data</th>
      <th scope="col">Operações</th>
    </tr>
  </thead>
  <tbody>
    @foreach($members as $member)
    <tr>
      
      <td>{{$member['id']}}</td>
      <td>{{$member['Nome']}}</td>
      <td>{{$member['senha']}}</td>
      <td>{{$member['Data']}}</td>
      <td>
        <a href={{"update/".$member['id']}} class="text-white btn btn-success ml-2 pt-2">
          <i class="fa-sharp fa-solid fa-pen-to-square"></i>

        <a href={{"delete/".$member['id']}} class="text-white btn btn-danger ml-2 pt-2">
          <i class="fa fa-trash"></i>

        <a href={{"view/".$member['id']}} class="text-white btn btn-primary ml-2 pt-2">
          <i class="fa fa-eye"></i>
        </a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<button data-loading-text="Carregando..." class="btn btn-warning" type="Button " data-toggle="modal" data-target="#examplemodal">Adicionar Estudante</button>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>