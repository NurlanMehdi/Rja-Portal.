<!DOCTYPE html>
<html>
<head>
    <title>RJA Details</title>
</head>
<body>
    <h1>RJA Details</h1>
    <table>
        <tr>
            <th>Company Profile</th>
            <td>{{ $rja->companies->company_name ?? 'N/A' }}</td>
        </tr>
        <tr>
            <th>Maintenance Email</th>
            <td>{{ $rja->maintenance_email ?? 'N/A' }}</td>
        </tr>
        <tr>
            <th>B2B/Warranty Reference</th>
            <td>{{ $rja->b2b_reference ?? 'N/A' }}</td>
        </tr>
        <tr>
            <th>Diagnosis</th>
            <td>{{ $rja->diagnosis ?? 'N/A' }}</td>
        </tr>
    </table>

    <h2>Labour Items</h2>
    <table>
        @if ($rja->items->where('type', 'labour')->isNotEmpty())
            @foreach($rja->items->where('type', 'labour') as $labour)
                <tr>
                    <th>Labour Cost</th>
                    <td>{{ $labour->cost ?? 'N/A' }}</td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="2">No labour items found.</td>
            </tr>
        @endif
    </table>

    <h2>Parts Items</h2>
    <table>
        @if ($rja->items->where('type', 'part')->isNotEmpty())
            @foreach($rja->items->where('type', 'part') as $part)
                <tr>
                    <th>Part Number</th>
                    <td>{{ $part->part_number ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <th>Part Cost</th>
                    <td>{{ $part->cost ?? 'N/A' }}</td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="2">No parts items found.</td>
            </tr>
        @endif
    </table>

    <div class="center-button">
        <form action="{{ route('rja.approve', $rja->id) }}" method="POST" style="display: inline-block;">
            @csrf
            <button type="submit">Approve</button>
        </form>
        <form action="{{ route('rja.reject', $rja->id) }}" method="POST" style="display: inline-block;">
            @csrf
            <button type="submit">Reject</button>
        </form>
    </div>
</body>
</html>
