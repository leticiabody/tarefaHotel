@extends('padrao')
@section('content')
<div class="container">
    <form class="row g-3" method="Post" action="{{route('alterarBanco-Hospedes',$hospedes->id)}}">
        @method('put')
        @csrf
        <div class="col-md-8">
            <label for="inputNome" class="form-label">Nome Hospede</label>
            <input type="text" class="form-control" name='nomeHosp' id="inputNome">
        </div>

        <div class="col-md-4">
            <label for="inputFone" class="form-label">Fone Hospede</label>
            <input type="text" class="form-control"name='foneHosp' id="inputFone">
        </div>
        <div class="col-md-4">
            <label for="inputEmail" class="form-label">E-mail Hospede</label>
            <input type="e-mail" class="form-control"name='emailHosp' id="inputEmail">
        </div>
        <div class="col-md-4">
            <label for="inputEmail" class="form-label"> Quarto</label>
            <input type="text" class="form-control"name='quartosHosp' id="inputQuartos">
        </div>
        <div class="col-md-4">
            <label for="inputEmail" class="form-label">Quantidade Hospedes</label>
            <input type="text" class="form-control"name='qtdHosp' id="inputqtdHosp">

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Alterar</button>
        </div>
    </form>
</div>
@endsection
