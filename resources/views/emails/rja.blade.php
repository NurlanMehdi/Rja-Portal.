<!DOCTYPE html>
<html>
<head>
    <title>RJA Details</title>
</head>
<body>
    <h1>RJA Details</h1>
    <p>Company Profile: {{ $rja->companies->company_name ?? 'N/A' }}</p>
    <p>Maintenance Email: {{ $rja->maintenance_email ?? 'N/A' }}</p>
    <p>B2B/Warranty Reference: {{ $rja->b2b_reference ?? 'N/A' }}</p>
    <p>Diagnosis: {{ $rja->diagnosis ?? 'N/A' }}</p>

    <h2>Labour Items</h2>
    @if ($rja->items->where('type', 'labour')->isNotEmpty())
        @foreach($rja->items->where('type', 'labour') as $labour)
            <p>Cost: {{ $labour->cost ?? 'N/A' }}</p>
        @endforeach
    @else
        <p>No labour items found.</p>
    @endif

    <h2>Parts Items</h2>
    @if ($rja->items->where('type', 'part')->isNotEmpty())
        @foreach($rja->items->where('type', 'part') as $part)
            <p>Part Number: {{ $part->part_number ?? 'N/A' }}, Cost: {{ $part->cost ?? 'N/A' }}</p>
        @endforeach
    @else
        <p>No parts items found.</p>
    @endif

    <form action="{{ route('rja.approve', $rja->id) }}" method="POST">
        @csrf
        <button type="submit">Approve</button>
    </form>

    <form action="{{ route('rja.reject', $rja->id) }}" method="POST">
        @csrf
        <button type="submit">Reject</button>
    </form>
</body>
</html>
