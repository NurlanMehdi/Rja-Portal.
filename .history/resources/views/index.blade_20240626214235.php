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
        <a href="cancel-reschedule-inquiries.html" class=""> <i class="bi bi-chevron-left"></i> Back</a>
        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">
            <!-- Jobs Search Result -->
            <div class="col-12">
                <!-- <h4 class="">Search Result</h4> -->
                <!-- <div class="card recent-sales overflow-auto">
  
                  <div class="card-body"> -->
                    <div class="">  
                      <!-- <h5 class="card-title">Total: <span class="fw_6 fs_16 heading_clr">5</span></h5> -->
                      <h4 class=" mt-4 mb-4 fw_6">Transmission Details</h4>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <div class="card h-100">
                                <div class="card-header bg-info-dark">
                                    <span class="fs_16 fw_6 text-white">
                                    RJA Transmission Details
                                    </span>
                                </div>
                                <div class="card-body pt-3">
                                    <!-- Contact Info Start -->
                                    <div class="row">
                                        <div class="col-lg-6 jd_column">
                                            <div class="d-flex align-items-center">
                                                <span class="fs_14 fw_6 jd_title">
                                                Select Company Profile:
                                                </span>
                                                <span class="fs_14 fw_4 jd_title">
                                                  Leisha
                                                </span>
                                            </div>
                                        </div>

                                         <!-- Contact Info End -->
                                        <!-- <div class="col-12">
                                            <hr class="mt-1">
                                        </div> -->
                                        <!-- Address Info Start -->
                                        <div class="col-12 mt-4">
                                            <span class="fs_16 fw_6 mb-3 d-block text-muted line_behind">
                                            Company Details:
                                            </span>
                                        </div>
                                        <div class="col-lg-6 jd_column">
                                            <div class="d-flex align-items-center">
                                                <span class="fs_14 fw_6 jd_title">
                                                Maintenance Department Email:</span>
                                                <span class="fs_14 fw_4 jd_title">
                                                    700 Lawrence Ave W
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 jd_column">
                                            <div class="d-flex align-items-center">
                                                <span class="fs_14 fw_6 jd_title">
                                                B2B/Warranty Reference:


                                                </span>
                                                <span class="fs_14 fw_4 jd_title">
                                                    Unit 101
                                                </span>
                                            </div>
                                        </div>
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
                                    <!-- Contact Info Start -->
                                    <span class="fs_16 fw_6 mb-3 d-block text-muted line_behind">
                                        Job ID Reeferences
                                    </span>
                                    <div class="row">
                                        <div class="col-lg-6 jd_column">
                                            <div class="d-flex align-items-center">
                                                <span class="fs_14 fw_6 jd_title">
                                                    Job ID Reeferences
                                                </span>
                                                <span class="fs_14 fw_4 jd_title">
                                                    
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 jd_column">
                                            <div class="d-flex align-items-center">
                                                <span class="fs_14 fw_6 jd_title">
                                                    Current Job Status
                                                </span>
                                                <span class="fs_14 fw_4 jd_title">
                                                    Completed and Claimed Job
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 jd_column">
                                            <div class="d-flex align-items-center">
                                                <span class="fs_14 fw_6 jd_title">
                                                    Admin Panel Job ID:
                                                </span>
                                                <span class="fs_14 fw_4 jd_title">
                                                    w-12196
                                                </span>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 jd_column">
                                            <div class="d-flex align-items-center">
                                                <span class="fs_14 fw_6 jd_title">
                                                    HCP Invoice
                                                </span>
                                                <span class="fs_14 fw_4 jd_title">
                                                    16512
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 jd_column">
                                            <div class="d-flex align-items-center">
                                                <span class="fs_14 fw_6 jd_title">
                                                    B2B/Warranty Referance ID:
                                                </span>
                                                <span class="fs_14 fw_4 jd_title">
                                                    28182512
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 jd_column">
                                            <div class="d-flex align-items-center">
                                                <span class="fs_14 fw_6 jd_title">
                                                    Source(B2C, B2B, Warranty):
                                                </span>
                                                <span class="fs_14 fw_4 jd_title">
                                                    B2B
                                                </span>
                                            </div>
                                        </div>
                                         <!-- Contact Info End -->

                                        <!-- <div class="col-12">
                                            <hr class="mt-1">
                                        </div> -->

                                        <!-- Address Info Start -->
                                        <div class="col-12 mt-4">
                                            <span class="fs_16 fw_6 mb-3 d-block text-muted line_behind">
                                                Company Details
                                            </span>
                                        </div>
                                        <div class="col-lg-6 jd_column">
                                            <div class="d-flex align-items-center">
                                                <span class="fs_14 fw_6 jd_title">
                                                    Company Name:
                                                </span>
                                                <span class="fs_14 fw_4 jd_title">
                                                  CMHA
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 jd_column">
                                            <div class="d-flex align-items-center">
                                                <span class="fs_14 fw_6 jd_title">
                                                    AP Phone:
                                                </span>
                                                <span class="fs_14 fw_4 jd_title">
                                                    (416) 518-5422
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 jd_column">
                                            <div class="d-flex align-items-center">
                                                <span class="fs_14 fw_6 jd_title">
                                                    POC Phone:
                                                </span>
                                                <span class="fs_14 fw_4 jd_title">
                                                    (416) 518-5422
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 jd_column">
                                            <div class="d-flex align-items-center">
                                                <span class="fs_14 fw_6 jd_title">
                                                    AP Phone Extn:
                                                </span>
                                                <span class="fs_14 fw_4 jd_title">
                                                    
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 jd_column">
                                            <div class="d-flex align-items-center">
                                                <span class="fs_14 fw_6 jd_title">
                                                    POC Phone Extn:
                                                </span>
                                                <span class="fs_14 fw_4 jd_title">
                                                    
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 jd_column">
                                            <div class="d-flex align-items-center">
                                                <span class="fs_14 fw_6 jd_title">
                                                    Company AP Email:
                                                </span>
                                                <span class="fs_14 fw_4 jd_title">
                                                    ap@cmha.ca.org
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 jd_column">
                                            <div class="d-flex align-items-center">
                                                <span class="fs_14 fw_6 jd_title">
                                                    Company POC Email:
                                                </span>
                                                <span class="fs_14 fw_4 jd_title">
                                                    maintenance@cmha.ca.org
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 jd_column">
                                            <div class="d-flex align-items-center">
                                                <span class="fs_14 fw_6 jd_title">
                                                    Company Desired Markup for Invoices:
                                                </span>
                                                <span class="fs_14 fw_4 jd_title">
                                                    0%
                                                </span>
                                            </div>
                                        </div>
                                         <!-- Address Info End -->
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
                                        <div class="col-lg-6 border-end">
                                            <!-- job Details Info Start -->
                                            <span class="fs_16 fw_6 mb-3 d-block text-muted line_behind">
                                                Job Categorization
                                            </span>
                                            <div class="row">
                                                <div class="col-lg-6 jd_column">
                                                    <div class="d-flex align-items-center">
                                                        <span class="fs_14 fw_6 jd_title">
                                                            Type of Job:
                                                        </span>
                                                        <span class="fs_14 fw_4 jd_title">
                                                            Appliance
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 jd_column">
                                                    <div class="d-flex align-items-center">
                                                        <span class="fs_14 fw_6 jd_title">
                                                            Type of Product:
                                                        </span>
                                                        <span class="fs_14 fw_4 jd_title">
                                                            Washing Machine
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-12 mt-4">
                                                    <span class="fs_16 fw_6 mb-3 d-block text-muted line_behind">
                                                        Additional Specifics For Appliances Only
                                                    </span>
                                                </div>
                                                <div class="col-lg-6 jd_column">
                                                    <div class="d-flex align-items-center">
                                                        <span class="fs_14 fw_6 jd_title">
                                                            Fule Type:
                                                        </span>
                                                        <span class="fs_14 fw_4 jd_title">
                                                            Electric
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 jd_column">
                                                    <div class="d-flex align-items-center">
                                                        <span class="fs_14 fw_6 jd_title">
                                                            Modal Number :
                                                        </span>
                                                        <span class="fs_14 fw_4 jd_title">
                                                            WFC7500VW2
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 jd_column">
                                                    <div class="d-flex align-items-center">
                                                        <span class="fs_14 fw_6 jd_title">
                                                            Stacked Unit:
                                                        </span>
                                                        <span class="fs_14 fw_4 jd_title">
                                                            No
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 jd_column">
                                                    <div class="d-flex align-items-center">
                                                        <span class="fs_14 fw_6 jd_title">
                                                            Serial Number:
                                                        </span>
                                                        <span class="fs_14 fw_4 jd_title">
                                                            N/a
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 jd_column">
                                                    <div class="d-flex align-items-center">
                                                        <span class="fs_14 fw_6 jd_title">
                                                            Brand:
                                                        </span>
                                                        <span class="fs_14 fw_4 jd_title">
                                                            Whirlpool
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="fs_16 fw_6 mb-3 d-block text-muted ">
                                                &nbsp;
                                            </span>
                                            <div class="row">
                                                <div class="col-lg-12 jd_column">
                                                    <div class="d-flex align-items-center">
                                                        <span class="fs_14 fw_6 jd_title ">
                                                            Urgency Level:
                                                        </span>
                                                        <span class="fs_14 fw_4 jd_title">
                                                            Select
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 jd_column">
                                                    <div class="">
                                                        <span class="fs_14 fw_6 jd_title d-block mb-2">
                                                            Problem Description:
                                                        </span>
                                                        <span class="fs_14 fw_4 jd_title">
                                                            Leaking Water
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                          <div class="card h-100">
                              <div class="card-header bg-info-dark">
                                  <span class="fs_16 fw_6 text-white">
                                      Service Type and Price
                                  </span>
                              </div>
                              <div class="card-body pt-3">
                                  <!-- Contact Info Start -->
                                  <span class="fs_16 fw_6 mb-3 d-block text-muted line_behind">
                                      
                                  </span>
                                  <div class="row">
                                      <div class="col-lg-6 jd_column">
                                          <div class="d-flex align-items-center">
                                              <span class="fs_14 fw_6 jd_title">
                                                  Service Type:
                                              </span>
                                              <span class="fs_14 fw_4 jd_title">
                                                  Dignostic Truck Roll
                                              </span>
                                          </div>
                                      </div>
                                      <div class="col-lg-6 jd_column">
                                          <div class="d-flex align-items-center">
                                              <span class="fs_14 fw_6 jd_title">
                                                  Pre-HST Vendor Price:
                                              </span>
                                              <span class="fs_14 fw_4 jd_title">
                                                  140.00
                                              </span>
                                          </div>
                                      </div>
                                       <!-- Contact Info End -->
                                      <!-- <div class="col-12">
                                          <hr class="mt-1">
                                      </div> -->
                                      <!-- Address Info Start -->
                                      <div class="col-12 mt-4">
                                          <span class="fs_16 fw_6 mb-3 d-block text-muted line_behind">
                                              Vendor Price Breakdown
                                          </span>
                                      </div>
                                      <div class="col-lg-6 jd_column">
                                          <div class="d-flex align-items-center">
                                              <span class="fs_14 fw_6 jd_title">
                                                  Total Diagnostic Fees:
                                              </span>
                                              <span class="fs_14 fw_4 jd_title">
                                                  140.00
                                              </span>
                                          </div>
                                      </div>
                                      <div class="col-lg-6 jd_column">
                                          <div class="d-flex align-items-center">
                                              <span class="fs_14 fw_6 jd_title">
                                                  Total Labour:
                                              </span>
                                              <span class="fs_14 fw_4 jd_title">
                                                  0.00
                                              </span>
                                          </div>
                                      </div>
                                      <div class="col-lg-6 jd_column">
                                          <div class="d-flex align-items-center">
                                              <span class="fs_14 fw_6 jd_title">
                                                  Total Parts:
                                              </span>
                                              <span class="fs_14 fw_4 jd_title">
                                                  0.00
                                              </span>
                                          </div>
                                      </div>
                                      <div class="col-lg-6 jd_column">
                                          <div class="d-flex align-items-center">
                                              <span class="fs_14 fw_6 jd_title">
                                                  Part Freight Cost:
                                              </span>
                                              <span class="fs_14 fw_4 jd_title">
                                                  0.00
                                              </span>
                                          </div>
                                      </div>
                                       <!-- Address Info End -->
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="card h-100">
                                <div class="card-header bg-info-dark">
                                    <span class="fs_16 fw_6 text-white">
                                        Schedule
                                    </span>
                                </div>
                                <div class="card-body pt-3">
                                    <!-- Contact Info Start -->
                                    <span class="fs_16 fw_6 mb-3 d-block text-muted line_behind">
                                        
                                    </span>
                                    <div class="row">
                                        <div class="col-lg-6 jd_column">
                                            <div class="d-flex align-items-center">
                                                <span class="fs_14 fw_6 jd_title">
                                                    Schedule Date:
                                                </span>
                                                <span class="fs_14 fw_4 jd_title">
                                                    06-05-2024
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 jd_column">
                                            <div class="d-flex align-items-center">
                                                <span class="fs_14 fw_6 jd_title">
                                                    Schedule Period:
                                                </span>
                                                <span class="fs_14 fw_4 jd_title">
                                                    09:00-12:00
                                                </span>
                                            </div>
                                        </div>
                                        <!-- Contact Info End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">  
                      <!-- <h5 class="card-title">Total: <span class="fw_6 fs_16 heading_clr">5</span></h5> -->
                      <h4 class=" mt-4 mb-4 fw_6">Tech Report - Summary</h4>
                    </div>
                    <div class="row">
                      <div class="col-lg-12 mb-4">
                          <div class="card h-100">
                              <div class="card-header bg-info-dark">
                                  <span class="fs_16 fw_6 text-white">
                                      Report - Summary
                                  </span>
                              </div>
                              <div class="card-body pt-3">
                                  <div class="row">
                                      <div class="col-lg-12 border-end">
                                              <!-- job Details Info Start -->
                                              <span class="fs_16 fw_6 mb-3 d-block text-muted line_behind">
                                                  
                                              </span>
                                              <div class="row">
                                                <div class="col-lg-12 jd_column">
                                                  <div class="align-items-center">
                                                      <span class="fs_14 fw_6 jd_title d-block mb-2">
                                                        Diagnosis Findings:
                                                      </span>
                                                      <span class="fs_14 fw_4 jd_title">
                                                          Disassembled the Washing Machine, found the drain pump housing cracked.
                                                      </span>
                                                  </div>
                                                </div>
                                                <div class="col-lg-12 jd_column mt-4">
                                                  <div class="align-items-center">
                                                      <span class="fs_14 fw_6 jd_title d-block mb-2">
                                                          Suggested Resolution:
                                                      </span>
                                                      <span class="fs_14 fw_4 jd_title">
                                                          To resolve the drain pump assembly will need to be replaced.
                                                      </span>
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
                                <span class="fs_16 fw_6 text-white">
                                    Report - Additional Required Parts & Availability
                                </span>
                            </div>
                            <div class="card-body pt-3">
                                <div class="row">
                                    <div class="col-lg-12 border-end">
                                            <!-- job Details Info Start -->
                                            <span class="fs_16 fw_6 mb-3 d-block text-muted line_behind">
                                                
                                            </span>
                                            <div class="row">
                                              <div class="col-lg-12 jd_column">
                                                <div class="d-flex align-items-center">
                                                    <span class="fs_14 fw_6 me-3">
                                                      This section to Be Included in the Report(Customer Default Setting):
                                                    </span>
                                                    <span class="fs_14 fw_4 jd_title">
                                                        False
                                                    </span>
                                                </div>
                                              </div>
                                              <div class="col-12 mt-4">
                                                <span class="fs_16 fw_6 mb-3 d-block text-muted line_behind">
                                                    Parts
                                                </span>
                                              </div>
                                              <div class="col-lg-12 jd_column">
                                                <span class="fs_16 fw_6 mb-3 d-block bg-light p-2 rounded-1">
                                                    Part 1
                                                </span>
                                                <div class="d-flex">
                                                    <div class="col-auto me-4">
                                                        <div class="d-flex align-items-center">
                                                            <span class="fs_14 fw_6 me-2">
                                                                Part Number: 
                                                            </span>
                                                            <span class="fs_14 fw_4">
                                                                WPW10465252
                                                            </span>,
                                                        </div>
                                                    </div>
                                                    <div class="col-auto me-4">
                                                        <div class="d-flex align-items-center">
                                                            <span class="fs_14 fw_6 me-2">
                                                                Quantity Needed:
                                                            </span>
                                                            <span class="fs_14 fw_4">
                                                                1
                                                            </span>,
                                                        </div>
                                                    </div>
                                                    <div class="col-auto me-4">
                                                        <div class="d-flex align-items-center">
                                                            <span class="fs_14 fw_6 me-2">
                                                                Part Available at - Reliable Parts:
                                                            </span>
                                                            <span class="fs_14 fw_4">
                                                                15
                                                            </span>,
                                                        </div>
                                                    </div>
                                                    <div class="col-auto me-4">
                                                        <div class="d-flex align-items-center">
                                                            <span class="fs_14 fw_6 me-2">
                                                                Amre Supply:
                                                            </span>
                                                            <span class="fs_14 fw_4">
                                                                21
                                                            </span>,
                                                        </div>
                                                    </div>
                                                    <div class="col-auto me-4">
                                                        <div class="d-flex align-items-center">
                                                            <span class="fs_14 fw_6 me-2">
                                                                Marcone
                                                            </span>
                                                            <span class="fs_14 fw_4">
                                                                15
                                                            </span>
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
                      <div class="col-lg-12 mb-4">
                        <div class="card h-100">
                            <div class="card-header bg-info-dark">
                                <span class="fs_16 fw_6 text-white">
                                    Report - Essential information for Specific B2B/Warranty Companies
                                </span>
                            </div>
                            <div class="card-body pt-3">
                                <div class="row">
                                    <div class="col-lg-12 border-end">
                                            <!-- job Details Info Start -->
                                            <span class="fs_16 fw_6 mb-3 d-block text-muted line_behind">
                                                
                                            </span>
                                            <div class="row">
                                              <div class="col-lg-12 jd_column">
                                                <div class="d-flex align-items-center">
                                                    <span class="fs_14 fw_6 me-3">
                                                      Selected B2B/Warranty Template:
                                                    </span>
                                                    <span class="fs_14 fw_4 jd_title">
                                                        N/A
                                                    </span>
                                                </div>
                                              </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>

                    <div class="">  
                      <!-- <h5 class="card-title">Total: <span class="fw_6 fs_16 heading_clr">5</span></h5> -->
                      <h4 class=" mt-4 mb-4 fw_6">Tech Report - Attachments Before Work Commenced (Shared With Customer)</h4>
                    </div>
                    <div class="row">
                      <div class="col-lg-6 mb-4">
                          <div class="card h-100">
                              <div class="card-header bg-info-dark">
                                  <span class="fs_16 fw_6 text-white">
                                      BEFORE - Pictures of The Property(Proof of attendance) <span class="text-danger">Mendatory</span>
                                  </span>
                              </div>
                              <div class="card-body pt-3">
                                  <!-- Contact Info Start -->
                                  <span class="fs_16 fw_6 mb-3 d-block text-muted line_behind">
                                  </span>
                                  <div class="row">
                                      <div class="col-lg-12 jd_column">
                                          <div class="d-flex align-items-center">
                                              <span class="fs_14 fw_6 jd_title">
                                                  Attachment 1:
                                              </span>
                                              <span class="fs_14 fw_4 d-flex align-items-center text-primary">
                                                <div class="image_attachment me-2">
                                                    <img src="../assets/img/messages-1.jpg" alt="" class="" />
                                                </div>
                                                  IMG_4242.jpg
                                              </span>
                                          </div>
                                      </div>
                                       <!-- Contact Info End -->

                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6 mb-4">
                          <div class="card h-100">
                              <div class="card-header bg-info-dark">
                                  <span class="fs_16 fw_6 text-white">
                                      Reschedule Inquiry
                                  </span>
                              </div>
                              <div class="card-body pt-3">
                                  <!-- Contact Info Start -->
                                  <span class="fs_16 fw_6 mb-3 d-block text-muted line_behind">

                                  </span>
                                  <div class="row">
                                      <div class="col-lg-6 jd_column">
                                          <div class="d-flex align-items-center">
                                              <span class="fs_14 fw_6 jd_title">
                                                  New Schedule Date:
                                              </span>
                                              <span class="fs_14 fw_4 jd_title">
                                                  06-05-2024
                                              </span>
                                          </div>
                                      </div>
                                      <div class="col-lg-6 jd_column">
                                          <div class="d-flex align-items-center">
                                              <span class="fs_14 fw_6 jd_title">
                                                  New Schedule Period:
                                              </span>
                                              <span class="fs_14 fw_4 jd_title">
                                                  08:00 - 12:00
                                              </span>
                                          </div>
                                      </div>
                                      <div class="col-lg-6 jd_column">
                                          <div class="d-flex align-items-center">
                                              <span class="fs_14 fw_6 jd_title">
                                                 Reschedule Reason:
                                              </span>
                                              <span class="fs_14 fw_4 jd_title">
                                                  Select
                                              </span>
                                          </div>
                                      </div>

                                      <div class="col-lg-6 jd_column">
                                          <div class="d-flex align-items-center">
                                              <span class="fs_14 fw_6 jd_title">
                                                  Extra Stage - Reschedule Inquiry:
                                              </span>
                                              <span class="fs_14 fw_4 jd_title">
                                                  False
                                              </span>
                                          </div>
                                      </div>
                                       <!-- Contact Info End -->
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6 mb-4">
                        <div class="card h-100">
                            <div class="card-header bg-info-dark">
                                <span class="fs_16 fw_6 text-white">
                                    HCP Scheduling
                                </span>
                            </div>
                            <div class="card-body pt-3">
                                <!-- Contact Info Start -->
                                <span class="fs_16 fw_6 mb-3 d-block text-muted line_behind">
                                </span>
                                <div class="row">
                                    <div class="col-lg-6 jd_column">
                                        <div class="d-flex align-items-center">
                                            <span class="fs_14 fw_6 jd_title">
                                                Assigned Tech:
                                            </span>
                                            <span class="fs_14 fw_4 jd_title">
                                                Select
                                            </span>
                                        </div>
                                    </div>
                                     <!-- Contact Info End -->

                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="col-lg-6 mb-4">
                          <div class="card h-100">
                              <div class="card-header bg-info-dark">
                                  <span class="fs_16 fw_6 text-white">
                                      Cancellation Inquiry
                                  </span>
                              </div>
                              <div class="card-body pt-3">
                                  <!-- Contact Info Start -->
                                  <span class="fs_16 fw_6 mb-3 d-block text-muted line_behind">

                                  </span>
                                  <div class="row">
                                      <div class="col-lg-6 jd_column">
                                          <div class="d-flex align-items-center">
                                              <span class="fs_14 fw_6 jd_title">
                                                  Cancellation Reason:
                                              </span>
                                              <span class="fs_14 fw_4 jd_title">
                                                  Select
                                              </span>
                                          </div>
                                      </div>
                                      <div class="col-lg-6 jd_column">
                                          <div class="d-flex align-items-center">
                                              <span class="fs_14 fw_6 jd_title">
                                                  Extra Stage - Cancellation Inquiry:
                                              </span>
                                              <span class="fs_14 fw_4 jd_title">
                                                  False
                                              </span>
                                          </div>
                                      </div>
                                      <!-- Contact Info End -->
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- </div>
                </div> -->
            </div><!-- End Jobs Search Result -->
          </div>
        </div><!-- End Left side columns -->

      </div>
    </section>
</main>
@endsection
