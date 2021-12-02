@extends ('layout')

@section ('cabecalho')
     Teste
@endsection

@section ('conteudo')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
       
        <form method="post">
          @csrf
          <div class="row">

             <div class="col col-6">
                <label for="Tipo de Veiculo">Tipo de veiculo:</label>
                <select class="form-select" aria-label="Default select example" name="tipo">
                    <option selected>Selecione...</option>
                    <option value="1">Moto</option>
                    <option value="2">Carro</option>
                    <option value="3">Caminhão</option>
                </select>
              </div>
              <div class="col col-4">
                <label for="Marca">Marca:</label>
                <input type="text" class="form-control" name="marca"/>
            </div>
         
          </div>
          <div class="row"> 
              <div class="col col-6">
                  <label for="Modelo">Modelo:</label>
                  <input type="text" class="form-control" name="modelo"/>
              </div>
              <div class="col col-4">
                  <label for="Versão">Versão:</label>
                  <input type="text" class="form-control" name="versao"/>
              </div>
          </div>
          <div class="row"> 
            <div class="col col-10">
              <label for="Dica do Veiculo" class="form-label">Dica do Veiculo:</label>
              <textarea class="form-control" name="dica" rows="3"></textarea>
            </div>
          </div>  
            <br>
            <button class="btn btn-primary">Enviar</button>
        </form>

@endsection

