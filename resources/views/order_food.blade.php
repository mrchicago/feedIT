<x-app>
    <div class="container">
        <h1 class="mt-5 text-center">Essensbestellung</h1>
        <form class="mt-4">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Dein Name" required>
            </div>
            <div class="form-group">
                <label for="food">Gericht:</label>
                <select class="form-control" id="food" required>
                    <option>Pizza Margherita</option>
                    <option>Spaghetti Bolognese</option>
                    <option>Caesar Salat</option>
                    <option>Schnitzel mit Pommes</option>
                </select>
            </div>
            <div class="form-group">
                <label for="quantity">Anzahl:</label>
                <input type="number" class="form-control" id="quantity" placeholder="Anzahl" min="1" value="1" required>
            </div>
            <div class="form-group">
                <label for="comments">Zusätzliche Bemerkungen:</label>
                <textarea class="form-control" id="comments" rows="3" placeholder="Besondere Wünsche oder Allergien"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Bestellung aufgeben</button>
        </form>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}
</x-app>
