@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Biens disponibles</h3>
    <br>
    <div class="row">
        <div class="col-md-4">
            <img src="{{ $bien->cover }}" alt="img" class="img-rounded">
            <strong>Adresse: </strong>{{ $bien->adress }}<br>
            <strong>Prix: </strong>{{ $bien->prix }}<br>
            <strong>Type de contrat: </strong>{{ $bien->type_contrat }}<br>
            <strong>Type de bien: </strong>{{ $bien->type_bien }}
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-4">
            <img src="{{ $bien->cover }}" alt="img" class="img-rounded">
            <strong>Adresse: </strong>{{ $bien->adress }}<br>
            <strong>Prix: </strong>{{ $bien->prix }}<br>
            <strong>Type de contrat: </strong>{{ $bien->type_contrat }}<br>
            <strong>Type de bien: </strong>{{ $bien->type_bien }}
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-4">
            <img src="{{ $bien->cover }}" alt="img" class="img-rounded">
            <strong>Adresse: </strong>{{ $bien->adress }}<br>
            <strong>Prix: </strong>{{ $bien->prix }}<br>
            <strong>Type de contrat: </strong>{{ $bien->type_contrat }}<br>
            <strong>Type de bien: </strong>{{ $bien->type_bien }}
        </div>
    </div>
</div>
@endsection
