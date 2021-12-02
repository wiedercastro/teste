@extends ('layout')
@section('cabecalho')
    
@endsection

@section('conteudo')

<ul class="list-group">
<li class="list-group-item d-flex justify-content-between align-items-center">
<span id="">Veiculos</span>
<span class="d-flex">
<form>
 <input type="text" name="search" placeholder="Filtar:">
 <button type="submit" class="btn btn-primary bt-sm mr-3" >Filtrar</button>
</form>

@auth
<a href="/teste/criar"><button class="btn btn-primary d-flex">Cadastro</button></a>
@endauth

</span>

</li>

</ul>

		@if(!empty($mensagem))
				<div class="alert alert-success">
					{{$mensagem}}
				</div>
		@endif
				<table class="table table-success table-striped">
				<thead>
				<tr>
					<th scope="col">Marca</th>
					<th scope="col">Modelo</th>
					<th scope="col">Versão</th>
					<th scope="col">Dica</th>
				</tr>
				</thead>
				<tbody>
				@foreach($veiculo as $veiculos)
					<tr>
						<td class="">
						{{$veiculos->marca}}
						</td>
						<td class="">
						{{$veiculos->modelo}}
						</td>
						<td class="">
						{{$veiculos->versao}}
						</td>
						<td class="">
						{{$veiculos->dica}}
						</td>
					</tr>	
						<!--
						<span class="d-flex">
							<a href="/teste/{{$veiculos->id}}" class="btn btn-info btn-sm">
								<i class="fas fa-external-link-alt">Detalhar</i>
							</a>
						</span>	-->
						
					
				@endforeach	
				</tbody>
				</table>

				@endsection
	<!-- /.login-box -->