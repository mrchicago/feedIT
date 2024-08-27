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
                <label for="description" class="form-label">Beschreibung (optional)</label>
                <input type="text" class="form-control" name="description" id="description" placeholder="mit...">
            </div>

            <div class="mb-3">
                <label for="menu_number" class="form-label">Nummer auf der Speisekarte</label>
                <input type="text" class="form-control" name="menu_number" id="menu_number" placeholder="16">
            </div>

            <div class="mb-3">
                <label for="preis_option_1" class="form-label">Preisoptionen in EUR</label>

                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4>Klein</h4>
                                <input type="number" class="form-control" name="preis_option_1" id="preis_option_1"
                                    placeholder="">
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4>Mittel</h4>
                                <input type="number" class="form-control" name="preis_option_2" id="preis_option_2"
                                    placeholder="">
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4>Groß</h4>
                                <input type="number" class="form-control" name="preis_option_3" id="preis_option_3"
                                    placeholder="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Erstellen</button>
        </form>
    </div>
</div>
