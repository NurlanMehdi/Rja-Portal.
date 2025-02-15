@extends('layouts.master')
@section('content')
<div>
    @if (session()->has('message'))
    <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <div class="col-12">
        <div class="">
            <h4 class="mt-4 mb-4 fw_6">RJA Details</h4>
        </div>
        <div class="row">
            <div class="col-lg-12 mb-4">
                <div class="card h-100">
                    <div class="card-header bg-info-dark">
                        <span class="fs_16 fw_6 text-white">RJA Transmission Details</span>
                    </div>
                    <div class="card-body pt-3">
                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <div class="d-flex align-items-center">
                                    <span class="fs_14 fw_6 me-2">Company Profile:</span>
                                    <span class="form-select" aria-label="Default select example">
                                        {{ $rja->companies->company_name ?? 'N/A' }}
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="d-flex align-items-center">
                                    <span class="fs_14 fw_6 me-2 text-nowrap">Date Created At:</span>
                                    <span class="form-control" aria-label="Default select example">
                                        {{ $rja->created_at ?? 'N/A' }}
                                    </span>
                                </div>
                            </div>
                            <div class="col-12 mt-4">
                                <span class="fs_16 fw_6 mb-3 d-block text-muted line_behind">Company Details:</span>
                            </div>
                            <div class="col-lg-6 mb-3">
                                @foreach($emails as $email)
                                <div class="d-flex align-items-center">
                                    <span class="fs_14 fw_6 me-2">Maintenance Department Email:</span>
                                    <span class="form-control"> {{ $email->email ?? '' }}</span>
                                </div>
                                @endforeach


                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="d-flex align-items-center">
                                    <span class="fs_14 fw_6 me-2">B2B/Warranty Reference:</span>
                                    <span class="form-control">{{ $rja->b2b_reference }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="">
            <h4 class="mt-4 mb-4 fw_6">Tech Report - Summary</h4>
        </div>
        <div class="row">
            <div class="col-lg-12 mb-4">
                <div class="card h-100">
                    <div class="card-header bg-info-dark">
                        <span class="fs_16 fw_6 text-white">Tech Findings/ Suggested Resolution</span>
                    </div>
                    <div class="card-body pt-3">
                        <div class="row">
                            <div class="col-lg-12 border-end">
                                <div class="row">
                                    <div class="col-lg-12 jd_column">
                                        <div class="align-items-center">
                                            <span class="fs_14 fw_6 d-block mb-2">
                                                Diagnosis findings/ Suggested Resolution (Mandatory, brief description):
                                            </span>
                                            <span class="form-control">{!! nl2br(e($rja->diagnosis)) !!}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 mb-4">
                <div class="card h-100">
                    <div class="card-header bg-info-dark">
                        <span class="fs_16 fw_6 text-white">RJA - Quote Details</span>
                    </div>
                    <div class="card-body pt-3">
                        <div class="row">
                            <div class="col-12 mt-4">
                                <span class="fs_16 fw_6 mb-3 d-block text-muted line_behind">RJA - Labour and Parts</span>
                            </div>
                            <div class="col-12">
                                <span class="fs_16 fw_6 mb-3 d-block bg-light p-2 rounded-1">LABOUR:</span>
                                <div class="col-lg-6 mb-3" id="labour-section">
                                    @php
                                    $totalLabour = $rja->items->where('type', 'labour')->map(function($item) {
                                    return (float) $item->cost;
                                    })->sum();
                                    @endphp
                                    @foreach($rja->items->where('type', 'labour') as $index => $labour)

                                    <div class="labour-item input-group mb-3">
                                        <label class="form-label fs_14 fw_6 me-3 text-nowrap">LABOUR {{ $index + 1 }}:</label>
                                        <span class="form-control labour-cost">{{ number_format( (float) $labour->cost, 2, '.', ',') }}$</span>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-12 mt-4">
                                <span class="fs_16 fw_6 mb-3 d-block bg-light p-2 rounded-1">PARTS:</span>
                                <div class="col-lg-12" id="parts-section">
                                    @php
                                    $totalParts = $rja->items->where('type', 'part')->map(function($item) {
                                    return (float) $item->cost;
                                    })->sum();
                                    $index = 0;
                                    @endphp

                                    @foreach($rja->items->where('type', 'part') as $part)
                                    @php
                                    $index = $index + 1
                                    @endphp
                                    <div class="parts-item input-group mb-3">
                                        <label class="form-label fs_14 fw_6 me-2 text-nowrap">Part {{ $index }}:</label>
                                        <div class="row w-100">
                                            <div class="col-lg-2">
                                                <span class="form-control">{{ $part->part_number }}</span>
                                            </div>
                                            <div class="col-lg-2">
                                                <span class="form-control parts-cost">{{ number_format( (float) $part->cost, 2, '.', ',') }}$</span>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 mb-4">
                <div class="card h-100">
                    <div class="card-header bg-info-dark">
                        <span class="fs_16 fw_6 text-white">RJA - Quote Summary</span>
                    </div>
                    <div class="card-body pt-3">
                        <div class="row">
                            <div class="col-lg-12 border-end">
                                <div class="summary-section">
                                    <!-- <div class="d-flex align-items-center">
                                        <span class="fs_14 fw_6 jd_title">RJA Quote (Pre HST):</span>
                                        <span class="fs_14 fw_4 jd_title">{{ $rja->quote_pre_hst ?? 'N/A' }}</span>
                                    </div> -->
                                    <div class="d-flex align-items-center">
                                        <span class="fs_14 fw_6 jd_title">Total Labour (Pre HST):</span>
                                        <span class="fs_14 fw_4 jd_title" id="total-labour">{{ number_format( (float) $totalLabour, 2, '.', ',') }}$</span>
                                        <span class="fs_14 fw_6 jd_title">Total Parts (Pre HST):</span>
                                        <span class="fs_14 fw_4 jd_title" id="total-parts">{{ number_format( (float) $totalParts, 2, '.', ',') }}$</span>
                                    </div>
                                    <span class="fs_16 fw_6 mb-3 d-block text-muted line_behind"></span>
                                    <div class="d-flex align-items-center">
                                        <span class="fs_14 fw_6 jd_title">Total (Pre HST):</span>
                                        <span class="fs_14 fw_4 jd_title" id="total-pre-hst">{{ number_format( (float) $totalLabour + $totalParts, 2, '.', ',') }}$</span>
                                    </div>
                                    <div class="center-button">
                                        @if($rja->status == 0)
                                        <form action="{{ url('rja/'.$rja->id.'/approve') }}" method="POST" style="display: inline;">
                                            @csrf
                                            <button type="submit" class="btn btn-success btn-submitted mt-3 mr-2">Approve</button>
                                        </form>
                                        <form action="{{ url('rja/'.$rja->id.'/reject') }}" method="POST" style="display: inline;">
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-submitted mt-3 mr-2">Reject</button>
                                        </form>
                                        <form action="{{ url('rja/'.$rja->id.'/send-email') }}" method="POST" style="display: inline;">
                                            @csrf
                                            <button type="submit" class="btn btn-primary btn-submitted mt-3 mr-2">Re-Notify Email(s)</button>
                                        </form>
                                        @endif


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection