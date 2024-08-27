<div class="card mt-5">
    <h5 class="card-header">Mitbestellen am {{ date('d.m.Y') }}</h5>
    <div class="card-body">
        <script>
            function checkIsCool() {
                if (document.getElementById('hey_schau_dir_den_code_nicht_an').checked) {
                    document.getElementById('hey_schau_dir_den_code_nicht_an_help').style.display = 'block';
                    return false;
                } else {
                    document.getElementById('hey_schau_dir_den_code_nicht_an_help').style.display = 'none';
                    return true;
                }
            }
        </script>
        <form method="POST" action="{{ route('mitbestellen') }}" onsubmit="return checkIsCool()">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Max Mustermann">
            </div>
            <div class="mb-3">
                <label for="lieferant" class="form-label">Lieferant</label>
                <select class="form-select" aria-label="Lieferant wählen..." wire:model.live="selectedLieferant">
                    <option selected>Lieferant wählen...</option>
                    @forelse ($lieferanten as $lieferant)
                        <option value="{{ $lieferant->id }}">{{ $lieferant->name }}</option>
                    @empty
                        <option value="0">Keine Lieferanten vorhanden</option>
                    @endforelse
                </select>
            </div>

            <div class="mb-3">
                <label for="lieferant" class="form-label">Gericht</label>
                <select class="form-select" aria-label="Gericht wählen..." @disabled($selectedLieferant == 0) wire:model.live="selectedGericht">
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
