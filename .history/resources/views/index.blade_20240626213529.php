@extends('layouts.master')

@section('content')
<main id="main" class="main">
    <div class="pagetitle d-flex justify-content-between align-items-center flex-wrap">
        <div class="left_area">
            <h1>Report Details</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Job Report Search</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Report Details</a>
                    </li>
                    <li class="breadcrumb-item active">r-12196</li>
                </ol>
            </nav>
        </div>
        <div class="right_area">
            <!-- Filter area here -->
        </div>
    </div><!-- End Page Title -->

    <section class="section dashboard">
    <div class="container">
        <!-- Transmission Details Section -->
        <div class="section-header">
            <h4>Transmission Details</h4>
        </div>
        <div class="section-content">
            <form>
                <div class="form-group">
                    <label for="companyProfile">Select Company Profile</label>
                    <select class="form-control" id="companyProfile">
                        <option>Select</option>
                        <!-- Add options here -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="companyDetails">Company Details</label>
                    <input type="text" class="form-control" id="companyDetails">
                </div>
                <div class="form-group">
                    <label for="maintenanceEmail">Maintenance Department Email</label>
                    <input type="email" class="form-control" id="maintenanceEmail">
                </div>
                <div class="form-group">
                    <label for="warrantyInfo">SIS2 Warranty Information</label>
                    <input type="text" class="form-control" id="warrantyInfo">
                </div>
            </form>
        </div>

        <!-- Tech Report - Summary Section -->
        <div class="section-header">
            <h4>Tech Report - Summary</h4>
        </div>
        <div class="section-content">
            <div class="form-group">
                <label for="reportSummary">Report - Summary</label>
                <textarea class="form-control" id="reportSummary" rows="3">Passenger Compartment Suppressed Insulation (Mandatory Event, description): Boot seal has a hole</textarea>
            </div>
        </div>

        <!-- RJA - Summary Section -->
        <div class="section-header">
            <h4>RJA - Summary</h4>
        </div>
        <div class="summary-section">
            <h5>RJA - Labour and Parts</h5>
            <form>
                <div class="form-group">
                    <label for="labourCost">Labour Cost</label>
                    <input type="text" class="form-control" id="labourCost" value="135.00">
                    <button type="button" class="btn btn-link">Add Additional Labour Item Line</button>
                </div>
                <div class="form-group">
                    <label for="partNumber">Part Number</label>
                    <input type="text" class="form-control" id="partNumber" value="MUD6383353">
                </div>
                <div class="form-group">
                    <label for="partCost">Part Cost</label>
                    <input type="text" class="form-control" id="partCost" value="100.22">
                    <button type="button" class="btn btn-link">Add Additional Part Line</button>
                </div>
            </form>
        </div>
        <div class="summary-section">
            <h5>RJA - Summary</h5>
            <p>Total Labour (Pre GST): 135.00</p>
            <p>Total Parts (Pre GST): 100.22</p>
            <p>Total (Pre GST): 235.22</p>
            <button type="button" class="btn btn-success">Send RJA to Maintenance Dept</button>
        </div>
    </div>
    </section>
</main>
@endsection
