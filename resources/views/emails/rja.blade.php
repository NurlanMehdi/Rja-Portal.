<!DOCTYPE html>
<html>
<head>
    <title>RJA Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        .rja-details {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            margin-top: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .rja-details h1 {
            background: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
            border-radius: 5px 5px 0 0;
            margin: -20px -20px 20px;
        }
        .rja-details table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .rja-details th, .rja-details td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        .rja-details th {
            background: #f4f4f4;
        }
        .rja-details h2 {
            margin-top: 20px;
            border-bottom: 2px solid #333;
            padding-bottom: 5px;
        }
        .center-button a {
            display: inline-block;
            padding: 10px 20px;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin: 5px;
        }
        .approve-button {
            background-color: green;
        }
        .reject-button {
            background-color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="rja-details">
            <h1>RJA Details</h1>
            <table>
                <tr>
                    <th>Company Profile</th>
                    <td>{{ $rja->companies->company_name ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <th>Maintenance Email</th>
                    <td>{{ $rja->companies->maintenance_email ?? $rja->mail }}</td>
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
                <a href="{{ route('rja.approve', $rja->id) }}" class="approve-button">Approve</a>
                <a href="{{ route('rja.reject', $rja->id) }}" class="reject-button">Reject</a>
            </div>
        </div>
    </div>
</body>
</html>
