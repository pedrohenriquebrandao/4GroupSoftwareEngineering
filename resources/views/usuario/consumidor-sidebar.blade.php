<div class="sidebar-header d-flex align-items-center">
    @if($usuario->sexo == "masc")
        <div class="avatar"><img src="produtor/img/avatar-m.png" alt="..." class="img-fluid rounded-circle"></div>
    @else
    <div class="avatar"><img src="produtor/img/avatar-f.png" alt="..." class="img-fluid rounded-circle"></div>
    @endif
    <div class="title">
        <h1 class="h4">{{$usuario->nome}}</h1>
    </div>
</div>