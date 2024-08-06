<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>No-Reply Prime RJA Notification</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <style>
        .table-striped tbody tr:nth-child(odd) {
            background-color: #f9f9f9;
        }

        .table-striped tbody tr:nth-child(even) {
            background-color: #e9ecef;
        }
    </style>
</head>

<body style="font-family: 'Poppins', sans-serif; background: #fff; margin: 0; padding: 0;">

    <h1 style="padding: 12px; text-align: center; width: 100%; max-width: 800px; margin-left: auto; margin-right: auto; color: #212529; background: #ccd4e2; box-sizing: border-box; margin-bottom: 0;">
        {{$rja->subject ?? ''}}
    </h1>

    <!-- Notification Text -->
    <div style="padding: 15px; text-align: center; font-weight: bold;">
        ***********************<br>
        PLEASE DO NOT REPLY TO THIS EMAIL.<br>
        THIS EMAIL IS SENT AUTOMATICALLY AND IS NOT MONITORED.<br>
        ***********************
    </div>

    <div style="width: 100%; max-width: 800px; margin-left: auto; margin-right: auto; border-spacing: 0;">
        <div style="font-size: 22px; font-weight: bold; text-align: center; color: #fff; background: #001f47; border-radius: 8px; padding: 10px 0; margin: 20px 0; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
            Transmission Details
        </div>
        <div style="margin: 20px 0; padding: 20px; border: 1px solid #ccd4e2; border-radius: 8px; background: #f9f9f9; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
            <table style="width: 100%; border: 1px solid #ccd4e2; border-spacing: 0; border-radius: 5px; overflow: hidden; margin-bottom: 20px; background: #fff; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                <tbody>
                    <tr>
                        <td colspan="2" style="text-align: left; background: linear-gradient(90deg, rgba(0, 31, 71, 1) 0%, rgba(0, 55, 121, 1) 100%); color: #fff; padding: 15px; font-size: 16px; font-weight: 600; border-radius: 5px 5px 0 0;">
                            RJA Transmission Details
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="color: #212529; background: #f6f9ff; font-size: 18px; font-weight: 600; padding: 12px; border-bottom: 1px solid #ccd4e2;">
                            <span style="border-bottom: 2px solid #585858;">Request Job Authorization Details:</span>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 12px; border-bottom: 1px solid #ccd4e2; font-weight: bold;">B2B/Warranty Reference:</td>
                        <td style="padding: 12px; border-bottom: 1px solid #ccd4e2;">{{ $rja->b2b_reference ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td style="padding: 12px; border-bottom: 1px solid #ccd4e2; font-weight: bold;">RJA Created At:</td>
                        <td style="padding: 12px; border-bottom: 1px solid #ccd4e2;">{{ $rja->created_at ?? '' }}</td>
                    </tr>
                    <tr>
                        <td colspan="2" style="color: #212529; background: #f6f9ff; font-size: 18px; font-weight: 600; padding: 12px; border-bottom: 1px solid #ccd4e2;">
                            <span style="border-bottom: 2px solid #585858;">Company Details:</span>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 12px; border-bottom: 1px solid #ccd4e2; font-weight: bold;">Company Profile:</td>
                        <td style="padding: 12px; border-bottom: 1px solid #ccd4e2;">{{ $rja->companies->company_name ?? 'N/A' }}</td>
                    </tr>
                    @if(isset($rja->companies->company_name))
                    @foreach($rja->companies->emails as $email)
                    <tr>
                        <td style="padding: 12px; font-weight: bold;">Maintenance Department Email:</td>
                        <td style="padding: 12px;"><a href="mailto:{{ $email->email ?? $rja->mail }}" style="color: #001f47; text-decoration: none;">{{ $email->email ?? $rja->mail }}</a></td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td style="padding: 12px; font-weight: bold;">Maintenance Department Email:</td>
                        <td style="padding: 12px;"><a href="mailto:{{ $rja->emails[0]->mail ?? '' }}" style="color: #001f47; text-decoration: none;">{{ $rja->emails[0]->mail ?? '' }}</a></td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>

        <div style="font-size: 22px; font-weight: bold; text-align: center; color: #fff; background: #001f47; border-radius: 8px; padding: 10px 0; margin: 20px 0; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
            Tech Report Details
        </div>
        <div style="margin: 20px 0; padding: 20px; border: 1px solid #ccd4e2; border-radius: 8px; background: #f9f9f9; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
            <table class="table-striped" style="width: 100%; border: 1px solid #ccd4e2; border-spacing: 0; border-radius: 5px; overflow: hidden; margin-bottom: 20px; background: #fff; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                <tbody>
                    <tr>
                        <td colspan="2" style="text-align: left; background: linear-gradient(90deg, rgba(0, 31, 71, 1) 0%, rgba(0, 55, 121, 1) 100%); color: #fff; padding: 15px; font-size: 16px; font-weight: 600; border-radius: 5px 5px 0 0;">
                            Diagnosis findings/ Suggested Resolution (Mandatory, brief description):
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding: 12px; background: #fff;">
                            {!! nl2br(e($rja->diagnosis)) ?? 'N/A' !!}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div style="font-size: 22px; font-weight: bold; text-align: center; color: #fff; background: #001f47; border-radius: 8px; padding: 10px 0; margin: 20px 0; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
            RJA Quote Details
        </div>
        <div style="margin: 20px 0; padding: 20px; border: 1px solid #ccd4e2; border-radius: 8px; background: #f9f9f9; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
            <table class="table-striped" style="width: 100%; border: 1px solid #ccd4e2; border-spacing: 0; border-radius: 5px; overflow: hidden; margin-bottom: 20px; background: #fff; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                <tbody>
                    <tr>
                        <td colspan="2" style="text-align: left; background: linear-gradient(90deg, rgba(0, 31, 71, 1) 0%, rgba(0, 55, 121, 1) 100%); color: #fff; padding: 15px; font-size: 16px; font-weight: 600; border-radius: 5px 5px 0 0;">
                            RJA - Quote Details
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="color: #212529; background: #f6f9ff; font-size: 18px; font-weight: 600; padding: 12px;">
                            <span style="border-bottom: 2px solid #585858;">Labour:</span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding: 0;">
                            <table class="table-striped" style="width: 100%; border-collapse: collapse; border-spacing: 0; border-radius: 5px; overflow: hidden;">
                                <thead>
                                    <tr>
                                        <th style="padding: 10px; border: 1px solid #ccd4e2; background: rgba(0, 31, 71, 0.9); color: #fff; text-align: left; font-size: 14px;">Labour Description</th>
                                        <th style="padding: 10px; border: 1px solid #ccd4e2; background: rgba(0, 31, 71, 0.9); color: #fff; text-align: center; font-size: 14px;">Labour Cost</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($rja->items->where('type', 'labour')->isNotEmpty())
                                    @php
                                    $total_labour_cost = 0;
                                    @endphp
                                    @foreach($rja->items->where('type', 'labour') as $key => $labour)
                                    <tr>
                                        <td style="padding: 10px; border: 1px solid #ccd4e2; font-weight: bold;">Labour {{$key+1}}:</td>
                                        <td style="padding: 10px; border: 1px solid #ccd4e2; text-align: center;">{{ $labour->cost.'$' ?? 'N/A' }}</td>
                                    </tr>
                                    @php
                                    $total_labour_cost += (float) $labour->cost;
                                    @endphp
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="2" style="padding: 10px; border: 1px solid #ccd4e2; font-weight: bold;">No labour items found.</td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="color: #212529; background: #f6f9ff; font-size: 18px; font-weight: 600; padding: 12px;">
                            <span style="border-bottom: 2px solid #585858;">Parts:</span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding: 0;">
                            <table class="table-striped" style="width: 100%; border-collapse: collapse; border-spacing: 0; border-radius: 5px; overflow: hidden;">
                                <thead>
                                    <tr>
                                        <th style="padding: 10px; border: 1px solid #ccd4e2; background: rgba(0, 31, 71, 0.9); color: #fff; text-align: left; font-size: 14px;">Part Description</th>
                                        <th style="padding: 10px; border: 1px solid #ccd4e2; background: rgba(0, 31, 71, 0.9); color: #fff; text-align: left; font-size: 14px;">Part Number</th>
                                        <th style="padding: 10px; border: 1px solid #ccd4e2; background: rgba(0, 31, 71, 0.9); color: #fff; text-align: center; font-size: 14px;">Part Cost</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($rja->items->where('type', 'part')->isNotEmpty())
                                    @php
                                    $total_part_cost = 0;
                                    $i =1;
                                    @endphp
                                    @foreach($rja->items->where('type', 'part') as $part)
                                    <tr>
                                        <td style="padding: 10px; border: 1px solid #ccd4e2; font-weight: bold;">Part {{$i}}:</td>
                                        <td style="padding: 10px; border: 1px solid #ccd4e2;">{{ $part->part_number ?? 'N/A' }}</td>
                                        <td style="padding: 10px; border: 1px solid #ccd4e2; text-align: center;">{{ $part->cost.'$' ?? 'N/A' }}</td>
                                    </tr>
                                    @php
                                    $total_part_cost += (float) $part->cost;
                                    $i++;
                                    @endphp
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="3" style="padding: 10px; border: 1px solid #ccd4e2; text-align: center;">No parts items found.</td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div style="font-size: 22px; font-weight: bold; text-align: center; color: #fff; background: #001f47; border-radius: 8px; padding: 10px 0; margin: 20px 0; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
            RJA Quote Summary Details
        </div>
        <div style="margin: 20px 0; padding: 20px; border: 1px solid #ccd4e2; border-radius: 8px; background: #f9f9f9; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
            <table style="width: 100%; border: 1px solid #ccd4e2; border-spacing: 0; border-radius: 5px; overflow: hidden; margin-bottom: 20px; background: #fff; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                <tbody>
                    <tr>
                        <td colspan="2" style="text-align: left; background: linear-gradient(90deg, rgba(0, 31, 71, 1) 0%, rgba(0, 55, 121, 1) 100%); color: #fff; padding: 15px; font-size: 16px; font-weight: 600; border-radius: 5px 5px 0 0;">
                            RJA - Quote Summary
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 12px; border-bottom: 1px solid #ccd4e2; font-weight: bold;">Total Labour (Pre HST):</td>
                        <td style="padding: 12px; border-bottom: 1px solid #ccd4e2;">{{ number_format($total_labour_cost, 2, '.', ',') }}$</td>
                    </tr>
                    <tr>
                        <td style="padding: 12px; border-bottom: 1px solid #ccd4e2; font-weight: bold;">Total Parts (Pre HST):</td>
                        <td style="padding: 12px; border-bottom: 1px solid #ccd4e2;">{{number_format($total_part_cost, 2, '.', ',')}}$</td>
                    </tr>
                    <tr>
                        <td style="padding: 12px; font-weight: bold;">Total (Pre HST):</td>
                        <td style="padding: 12px;">{{ number_format($total_labour_cost+$total_part_cost, 2, '.', ',') }}$</td>
                    </tr>
                </tbody>
            </table>
            @if($rja->status == 0)
            <table align="center" style="margin-top: 20px;">
                <tr>
                    <td style="padding-right: 15px;">
                        <a href="{{ route('rja.approve.for.mail', $rja->id) }}" style="background: #198754; color: #fff; border: 1px solid #198754; border-radius: 4px; line-height: 31px; font-size: 14px; min-height: 20px; display: inline-block; padding: 5px 15px; text-decoration: none;">Approve</a>
                    </td>
                    <td>
                        <a href="{{ route('rja.reject.for.mail', $rja->id) }}" style="background: #dc3545; color: #fff; border: 1px solid #dc3545; border-radius: 4px; line-height: 31px; font-size: 14px; min-height: 20px; display: inline-block; padding: 5px 15px; text-decoration: none;">Reject</a>
                    </td>
                </tr>
            </table>
            @endif
        </div>
    </div>
</body>

</html>