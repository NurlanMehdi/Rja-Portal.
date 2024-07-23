<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>RJA Details</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


</head>

<body style=" font-family: 'Poppins', sans-serif; background: #fff;">
    <h1 style="padding: 12px;text-align: center;width: 100%;max-width: 800px; margin-left: auto; margin-right: auto;color:#212529;  background: #ccd4e2; box-sizing: border-box;margin-bottom: 0;">RJA Details</h1>
    <table style="width: 100%;max-width: 800px;border:1px solid #ccd4e2;border-spacing: 0;margin-left: auto; margin-right: auto;">
        <tbody>
            <!--Heading 1 (Company and Authorization Details)-->
            <tr>
                <td style="color:#212529; background: #ffffff; padding: 15px 20px;text-align: left;">
                    <table style="width: 100%;border: 1px solid #ccd4e2;border-spacing: 0;border-radius: 5px;overflow: hidden;">
                        <tbody>
                            <tr>
                                <td colspan="2" style="text-align: left;background-color: #001f47;color:#fff;padding: 15px 20px;font-size: 16px;font-weight: 600;">
                                    RJA Transmission Details
                                </td>
                            </tr>
                            <tr>
                                <td style="color:#212529; background: #f6f9ff; padding: 15px 20px;text-align: left; border-bottom: 1px solid #ccd4e2;width:50%;">Company Profile</td>
                                <td style="width:50%;border-bottom: 1px solid #ccd4e2; color:#212529; padding: 15px 20px;">{{ $rja->companies->company_name ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <td colspan="2" style="color:#212529; background: #f6f9ff; padding: 15px 20px;text-align: left; border-bottom: 1px solid #ccd4e2;font-size: 20px;font-weight: 600;">
                                    <span class="" style="border-bottom: 1px solid #585858;">Company Details:</span>
                                </td>
                            </tr>
                            <tr>
                                <td style="color:#212529; background: #f6f9ff; padding: 15px 20px;text-align: left; border-bottom: 1px solid #ccd4e2;width:50%;">Maintenance Department Email</td>
                                <td style="width:50%;border-bottom: 1px solid #ccd4e2; color:#212529; padding: 15px 20px;">{{ $rja->companies->maintenance_email ?? $rja->companies->email }}</td>
                            </tr>
                            <tr>
                                <td style="color:#212529; background: #f6f9ff; padding: 15px 20px;text-align: left; border-bottom: 1px solid #ccd4e2;width:50%;">B2B/Warranty Reference</td>
                                <td style="width:50%;border-bottom: 1px solid #ccd4e2; color:#212529; padding: 15px 20px;">{{ $rja->b2b_reference ?? 'N/A' }}</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="font-size: 20px;font-weight: 600;padding: 0px 20px 0;">
                    Tech Report - Summary
                </td>
            </tr>
            <tr>
                <td style="color:#212529; background: #ffffff; padding: 15px 20px;text-align: left;">
                    <table style="width: 100%;border: 1px solid #ccd4e2;border-spacing: 0;border-radius: 5px;overflow: hidden;">
                        <tbody>
                            <tr>
                                <td colspan="2" style="text-align: left;background-color: #001f47;color:#fff;padding: 15px 20px;font-size: 16px;font-weight: 600;">
                                    Tech Findings/ Suggested Resolution
                                </td>
                            </tr>
                            <tr>
                                <td style="color:#212529; background: #f6f9ff; padding: 15px 20px;text-align: left; border-bottom: 1px solid #ccd4e2;width:50%;">Diagnosis findings/ Suggested Resolution (Mandatory, brief description):</td>
                                <td style="width:50%;border-bottom: 1px solid #ccd4e2; color:#212529; padding: 15px 20px;">{{ $rja->diagnosis ?? 'N/A' }}</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td style="color:#212529; background: #ffffff; padding: 0px 20px 15px;text-align: left;">
                    <table style="width: 100%;border: 1px solid #ccd4e2;border-spacing: 0;border-radius: 5px;overflow: hidden;">
                        <tbody>
                            <tr>
                                <td colspan="2" style="text-align: left;background-color: #001f47;color:#fff;padding: 15px 20px;font-size: 16px;font-weight: 600;">
                                    RJA - Quote Details
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="color:#212529; background: #f6f9ff; padding: 15px 20px;text-align: left; border-bottom: 1px solid #ccd4e2;font-size: 20px;font-weight: 600;">
                                    <span class="" style="border-bottom: 1px solid #585858;">Labour</span>
                                </td>
                            </tr>
                            @if ($rja->items->where('type', 'labour')->isNotEmpty())
                            @php
                            $total_labour_cost = 0;
                            @endphp
                            @foreach($rja->items->where('type', 'labour') as $labour)
                            <tr>
                                <td style="color:#212529; background: #f6f9ff; padding: 15px 20px;text-align: left; border-bottom: 1px solid #ccd4e2;width:50%;">Labour Cost:</td>
                                <td style="width:50%;border-bottom: 1px solid #ccd4e2; color:#212529; padding: 15px 20px;">{{ $labour->cost ?? 'N/A' }}</td>
                            </tr>
                            @php
                            $total_labour_cost += $labour->cost;
                            @endphp
                            @endforeach

                            <tr>
                                <td style="color:#212529; background: #f6f9ff; padding: 15px 20px;text-align: left; border-bottom: 1px solid #ccd4e2;width:50%;">Total Labour Cost:</td>
                                <td style="width:50%;border-bottom: 1px solid #ccd4e2; color:#212529; padding: 15px 20px;">{{$total_labour_cost}}</td>
                            </tr>
                            @else
                            <tr>
                                <td colspan="2" style="width:50%;border-bottom: 1px solid #ccd4e2; color:#212529; padding: 15px 20px;">No labour items found.</td>
                            </tr>
                            @endif
                            <tr>
                                <td colspan="2" style="color:#212529; background: #f6f9ff; padding: 15px 20px;text-align: left; border-bottom: 1px solid #ccd4e2;font-size: 20px;font-weight: 600;">
                                    <span class="" style="border-bottom: 1px solid #585858;">Parts:</span>
                                </td>
                            </tr>
                            @if ($rja->items->where('type', 'part')->isNotEmpty())
                            @php
                            $total_part_cost = 0;
                            @endphp
                            @foreach($rja->items->where('type', 'part') as $part)
                            <tr>
                                <td style="color:#212529; background: #f6f9ff; padding: 15px 20px;text-align: left; border-bottom: 1px solid #ccd4e2;width:50%;">{{ $part->part_number ?? 'N/A' }}</td>
                                <td style="width:50%;border-bottom: 1px solid #ccd4e2; color:#212529; padding: 15px 20px;">{{ $part->cost ?? 'N/A' }}</td>
                            </tr>
                            @php
                            $total_part_cost += $part->cost;
                            @endphp
                            @endforeach
                            <tr>
                                <td style="color:#212529; background: #f6f9ff; padding: 15px 20px;text-align: left; border-bottom: 1px solid #ccd4e2;width:50%;">Total Parts Cost:</td>
                                <td style="width:50%;border-bottom: 1px solid #ccd4e2; color:#212529; padding: 15px 20px;">{{$total_part_cost}}</td>
                            </tr>
                            @else
                            <tr>
                                <td colspan="2" style="width:50%;border-bottom: 1px solid #ccd4e2; color:#212529; padding: 15px 20px;">No parts items found.</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td style="color:#212529; background: #ffffff; padding: 15px 20px;text-align: left;">
                    <table style="width: 100%;border: 1px solid #ccd4e2;border-spacing: 0;border-radius: 5px;overflow: hidden;">
                        <tbody>
                            <tr>
                                <td colspan="2" style="text-align: left;background-color: #001f47;color:#fff;padding: 15px 20px;font-size: 16px;font-weight: 600;">
                                    RJA - Quote Summary
                                </td>
                            </tr>
                            <tr>
                                <td style="color:#212529; background: #f6f9ff; padding: 15px 20px;text-align: left; border-bottom: 1px solid #ccd4e2;width:50%;">Total Labour (Pre HST):</td>
                                <td style="width:50%;border-bottom: 1px solid #ccd4e2; color:#212529; padding: 15px 20px;">{{$total_labour_cost}}</td>
                            </tr>
                            <tr>
                                <td style="color:#212529; background: #f6f9ff; padding: 15px 20px;text-align: left; border-bottom: 1px solid #ccd4e2;width:50%;">Total Parts (Pre HST):</td>
                                <td style="width:50%;border-bottom: 1px solid #ccd4e2; color:#212529; padding: 15px 20px;">{{$total_part_cost}}</td>
                            </tr>
                            <tr>
                                <td style="color:#212529; background: #f6f9ff; padding: 15px 20px;text-align: left; border-bottom: 1px solid #ccd4e2;width:50%;">Total (Pre HST):</td>
                                <td style="width:50%;border-bottom: 1px solid #ccd4e2; color:#212529; padding: 15px 20px;">{{$total_labour_cost+$total_part_cost}}</td>
                            </tr>
                            <!-- <tr>
                                <td colspan="2" style="color:#212529; background: #f6f9ff; padding: 15px 20px;text-align: left; border-bottom: 1px solid #ccd4e2;">
                                    <div class="" style=" display: flex;align-items: center;justify-content: center; gap: 12px;width: 100%;">
                                        <button type="submit" style="border: 1px solid #198754;background: #198754;border-radius: 4px;line-height: 31px;font-size: 13px;min-height: 20px;color:#fff;">Approve</button>
                                        <button type="submit" style="border: 1px solid #dc3545;background: #dc3545;border-radius: 4px;line-height: 31px;font-size: 13px;min-height: 20px;color:#fff;">Reject</button>
                                        <button type="submit" style="border: 1px solid #ef1e24;background: #ef1e24;border-radius: 4px;line-height: 31px;font-size: 13px;min-height: 20px;color:#fff;">Send Email</button>
                                    </div>
                                </td>
                            </tr> -->
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="color:#212529; padding: 15px 20px;text-align: left; border-bottom: 1px solid #ccd4e2;">
                    <div class="" style="display:block;width:100%;text-align:center;">
                        <a href="{{ route('rja.approve.for.mail', $rja->id) }}" style="background: #198754;color:#fff;border:1px solid #198754;border-radius:4px;line-height:31px;font-size:13px;min-height:20px;display: inline-block;padding: 5px 15px;text-decoration: none;font-size: 16px;margin-right:15px;">Approve</a>
                        <a href="{{ route('rja.reject.for.mail', $rja->id) }}" style="background: #dc3545;color:#fff;;border:1px solid #198754;border-radius:4px;line-height:31px;font-size:13px;min-height:20px;display: inline-block;padding: 5px 15px;text-decoration: none;font-size: 16px;">Reject</a>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>