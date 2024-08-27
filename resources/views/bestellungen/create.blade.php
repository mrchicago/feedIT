@extends('layouts.app')

@section('content')
    <div class="card mt-5">
        <h5 class="card-header">Neue Bestellung</h5>
        <div class="card-body">
            <form method="POST" action="{{ route('bestellungen.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="lieferant" class="form-label">Lieferant</label>
                    <select class="form-select" aria-label="Lieferant wählen..." wire:model.live="selectedLieferant">
                        <option selected>Lieferant wählen...</option>
                        {{-- @forelse ($lieferanten as $lieferant)
                            <option value="{{ $lieferant->id }}">{{ $lieferant->name }}</option>
                        @empty
                            <option value="0">Keine Lieferanten vorhanden</option>
                        @endforelse --}}
                    </select>
                </div>

                <div class="mb-3">
                    <label for="lieferant" class="form-label">PayPal-Beauftragter</label>
                    <select class="form-select" aria-label="Gericht wählen...">
                        <option selected>PayPal-Beauftragten wählen...</option>
                        <option value="1">Memet</option>
                        <option value="2">Mehmet</option>
                        <option value="3">Mamet</option>
                        <option value="4">Mumet</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="lieferant" class="form-label">Bezahlmethode</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="bezahlmethode" id="bezahlmethode0" checked>
                        <label class="form-check-label" for="bezahlmethode0">
                            Cash & PayPal
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="bezahlmethode" id="bezahlmethode1">
                        <label class="form-check-label" for="bezahlmethode1">
                            NUR Cash
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="bezahlmethode" id="bezahlmethode2">
                        <label class="form-check-label" for="bezahlmethode2">
                            NUR PayPal
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Bestellung anlegen</button>
            </form>
        </div>
    </div>
@endsection
