@extends('layout.layout')

@section('title', 'Paciente')

@section('content')

<form action="#">
    <div class="mb-3 mt-3">
      <label for="email" class="form-label">Nome:</label>
      <input type="email" class="form-control" id="email" placeholder="Nome completo" name="nome" required>
    </div>

    <div class="mb-3">
      <label class="form-label">CPF:</label>
      <input type="text" class="form-control" name="cpf" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Data:</label>
        <input type="date" class="form-control" id="pwd" placeholder="Enter password" name="data" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Telefone:</label>
        <input type="text" class="form-control" id="#" placeholder="(88)88888888" name="telefone" required>
      </div>

      <div class="mb-3">
        <label class="form-label">E-mail:</label>
        <input type="text" class="form-control" id="pwd" placeholder="email password" name="email" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Cep:</label>
        <input type="text" id="cep" name="cep" placeholder="CEP" class="form-control" onfocusout="search()">
      </div>

      <div class="mb-3">
        <label class="form-label">Logradouro:</label>
        <input type="text" id="logradouro" name="logradouro" class="form-control">
      </div>

      <div class="mb-3">
        <label class="form-label">Número:</label>
        <input type="text" class="form-control" id="numero" placeholder="Número da residência" name="numero">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>


<script>
function search() {
    const cep = document.getElementById('cep').value
    const logradouro = document.getElementById('logradouro')
    let link = `https://viacep.com.br/ws/${cep}/json/`
    console.log(cep)

    fetch(link)
        .then(T => T.json())
        .then( element => {
            logradouro.value = element.logradouro + ', ' 
            + element.bairro + ', '
            + element.localidade + ' - ' 
            + element.uf 

            logradouro.value = element.logradouro + ', ' 
            + element.bairro + ', ' 
            + element.localidade + ' - ' 
            + element.uf            
        })
}
</script>
  
@endsection