@extends('layouts.app')

@section('content')
    @include('templates.alle-bestellungen')

    <div class="text-center mt-5">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">⌀ Bestellungen pro Woche</h5>
                        <h1>3</h1>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">⌀ Besteller pro Bestellung</h5>
                        <h1>6</h1>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">⌀ Preis pro Bestellung</h5>
                        <h1>6,50€</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
