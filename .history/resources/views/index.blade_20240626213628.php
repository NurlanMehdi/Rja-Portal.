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
        <div class="row">
            <a href="#" class=""><i class="bi bi-chevron-left"></i> Back</a>
            <div class="col-lg-12">
                <div class="row">
                    <!-- Jobs Search Result -->
                    <div class="col-12">
                        <div class="">
                            <h4 class="mt-4 mb-4 fw_6">Details Board</h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 mb-4">
                                <div class="card h-100">
                                    <div class="card-header bg-info-dark">
                                        <span class="fs_16 fw_6 text-white">
                                            Customer Details
                                        </span>
                                    </div>
                                    <div class="card-body pt-3">
                                        <!-- Contact Info Start -->
                                        <span class="fs_16 fw_6 mb-3 d-block text-muted line_behind">
                                            Contact Info
                                        </span>
                                        <div class="row">
                                            <!-- Customer details here -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="card h-100">
                                    <div class="card-header bg-info-dark">
                                        <span class="fs_16 fw_6 text-white">
                                            Job Identification
                                        </span>
                                    </div>
                                    <div class="card-body pt-3">
                                        <!-- Job ID References Start -->
                                        <span class="fs_16 fw_6 mb-3 d-block text-muted line_behind">
                                            Job ID References
                                        </span>
                                        <div class="row">
                                            <!-- Job ID details here -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-4">
                                <div class="card h-100">
                                    <div class="card-header bg-info-dark">
                                        <span class="fs_16 fw_6 text-white">
                                            Job Details
                                        </span>
                                    </div>
                                    <div class="card-body pt-3">
                                        <div class="row">
                                            <!-- Job categorization and details here -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Additional sections here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
