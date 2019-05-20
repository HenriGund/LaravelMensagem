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
      @if (\Session::has('success'))
    <div class="container">
      <div class="alert alert-success">
         {{\Session::get('success')}}
      </div>
    </div>
    @endif

<h1>Formulário de edição de mensagens</h1>
<hr>
<form action="/mensagem/{{$mensagem->id}}" method="post">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    Título:           <input type="text" name="titulo" value="{{$mensagem->titulo}}">     <br>
    Autor:            <input type="text" name="autor" value="{{$mensagem->autor}}">       <br>
    Mensagem:         <input type="text" name="mensagem" value="{{$mensagem->mensagem}}"> <br>
    <input type="submit" value="Salvar">
</form>
