<h1>Lista de Atividades</h1>
<hr>
@if (Auth::check())<a href="/atividades/create"><h1>Nova Atividade</h1></a>@endif
<hr>
<!-- EXIBE MENSAGENS DE ERROS -->
@if ($errors->any())
<div class="container">
  <div class="alert alert-danger">
	<ul>
	  @foreach ($errors->all() as $error)
	  <li>{{ $error }}</li>
	  @endforeach
	</ul>
  </div>
</div>
@endif

@foreach($atividades as $a)
	<h2>Agendado para: </h2><h4>{{$a->scheduledto}}</h4>
	<h2>Título: </h2><p><a href="/atividades/{{$a->id}}">{{$a->title}}</a></p>
	<h2>Descrição</h2><p>{{$a->description}}</p>
	<br>
	<p><h2>Ações</h2>
		<a href="/atividades/{{$a->id}}">Ver mais</a>
		<a href="/atividades/{{$a->id}}/edit">Editar</a>
		<a href="/atividades/{{$a->id}}/delete">Deletar</a>
	</p>
	<br>
	<br>....................................................................................................................................................................................................
	<br>
@endforeach

@if(\Session::has('sucess'))
	<div class="container">
		<div class="alert alert-sucess">
			{{\Session::get('sucess')}}
		</div>
	</div>
@endif


<!-- \Carbon\Carbon::parse($a->scheduledto)->format('d/m/Y h:m')  -->
