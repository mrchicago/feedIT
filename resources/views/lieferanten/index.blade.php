<div class="card mt-5">
    <h5 class="card-header">Lieferanten</h5>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Liefert</th>
                    <th>Bezahlmethoden</th>
                    <th>Bestellbar über Ostfriesland.app</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($lieferanten as $lieferant)
                    <tr>
                        <td>{{ $lieferant->name }}</td>
                        <td>{{ $lieferant->delviers ? 'Ja' : 'Nein' }}</td>
                        <td>{{ $lieferant->payment_methods ?? 'keine Angabe' }}</td>
                        <td>{{ $lieferant->order_via_ost_app ?? 'keine Angabe' }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">Keine Lieferanten vorhanden</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
