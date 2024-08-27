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
                @forelse ($bestellungen as $bestellung)
                    <tr>
                        <td>{{ $bestellung->created_at->format('d.m.Y') }}</td>
                        <td>{{ $bestellung->lieferant->name }}</td>
                        <td>{{ $bestellung->entries->count() }}</td>
                        <td>
                            <a href="{{ route('bestellungen.show', $bestellung) }}" class="btn btn-primary">Details</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">Keine Bestellungen vorhanden</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
