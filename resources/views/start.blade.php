@extends('layouts.app')

@section('content')
    {{-- <div class="card mt-5">
        <h5 class="card-header">Mitbestellen</h5>
        <div class="card-body">
            <h5 class="card-title">Bestelltag {{ date('d.m.Y') }}</h5>
            <p class="card-text">Fein lecker Pizza oder so</p>
            <a href="{{ route('mitbestellen') }}" class="btn btn-primary">Jetzt mitbestellen</a>
        </div>
    </div> --}}

    <div class="card mt-5">
        <h5 class="card-header">Bestellungen</h5>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Datum</th>
                        <th>Lieferant</th>
                        <th>Mitbesteller</th>
                        <th>Aktionen</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Begrüßungsmonitore Norden</td>
                        <td>3</td>
                        <td>Standard Begrüßung</td>
                        <td class="actions-cell">
                            <a href="#" class="btn btn-primary btn-sm">Mitbestellen</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

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
