<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="container">
    <h1>Dados do Estudante</h1>
    <form action="/view" method="POST">
        @csrf

        <input type="text" disabled name="Nome" value="{{$data['Nome']}}" placeholder="Insira nome">
        <br /><br />
        <input type="text" disabled name="Senha" value="{{$data['senha']}}" placeholder="Insira senha">
        <br /><br />
        <input type="text" disabled name="Data" value="{{$data['Data']}}" placeholder="Insira data">
        <br /><br />

        <a class="btn btn-primary" type="submit" href="/listacandidatos">Voltar</a>

    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>