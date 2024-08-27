<div class="card mt-5">
    <h5 class="card-header">Neues Gericht für Lieferant {{ $lieferant->name }}</h5>
    <div class="card-body">
        <form method="POST" action="{{ route('gericht.store') }}" onsubmit="return checkIsCool()">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Max Mustermann">
            </div>
            <div class="mb-3">
                <label for="preis_option_1" class="form-label">Preisoptionen</label>

                <div class="row">
                    <div class="col">
                        <h4>Klein</h4>
                        <input type="number" class="form-control" name="preis_option_1" id="preis_option_1" placeholder="">
                    </div>

                    <div class="col">
                        <h4>Mittel</h4>
                        <input type="number" class="form-control" name="preis_option_2" id="preis_option_2" placeholder="">
                    </div>

                    <div class="col">
                        <h4>Groß</h4>
                        <input type="number" class="form-control" name="preis_option_3" id="preis_option_3" placeholder="">
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="lieferant" class="form-label">Gericht</label>
                <select class="form-select" aria-label="Gericht wählen..." @disabled($selectedLieferant == 0)  name="gericht" wire:model.live="selectedGericht">
                    @forelse ($gerichte as $gericht)
                        <option value="{{ $gericht->id }}">{{ $gericht->name }}</option>
                    @empty
                        <option value="0">Bitte Lieferant wählen!</option>
                    @endforelse
                </select>
            </div>

            <div class="mb-3">
                <label for="lieferant" class="form-label">Bezahlmethode</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="bezahlmethode" id="bezahlmethode1">
                    <label class="form-check-label" for="bezahlmethode1">
                        Cash
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="bezahlmethode" id="bezahlmethode2"
                        checked>
                    <label class="form-check-label" for="bezahlmethode2">
                        PayPal
                    </label>
                </div>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="hey_schau_dir_den_code_nicht_an" onchange="checkIsCool()">
                <label class="form-check-label" for="hey_schau_dir_den_code_nicht_an">Ich bin cool</label>
                <div style="display: none;" id="hey_schau_dir_den_code_nicht_an_help" class="form-text">Lügen darf man nicht sagen...</div>
            </div>
            <button type="submit" class="btn btn-primary">Ja, mitbestellen</button>
        </form>
    </div>
</div>
