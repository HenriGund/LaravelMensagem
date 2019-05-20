<h1>Mensagem{{$mensagem->id}}</h1>
<hr>
<p><b>Título:</b>{{$mensagem->titulo}}</p>
<p><b>Autor:</b>{{$mensagem->autor}}</p>
<p><b>Mensagens:</b>{{$mensagem->mensagem}}</p>
<br>
<a href="/mensagem/{{$mensagem->id}}/edit">editar</a>
<a href="/mensagem/{{$mensagem->id}}/delete">deletar</a>