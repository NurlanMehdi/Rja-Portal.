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
                                                <input type="text" id="postal-code" name="postal-code"
                                                                class="form-control" placeholder="Enter Postal Code">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 jd_column">
                                            <div class="d-flex align-items-center">
                                                <span class="fs_14 fw_6 jd_title">
                                                B2B/Warranty Reference:


                                                </span>
                                                <input type="text" id="postal-code" name="postal-code"
                                                                class="form-control" placeholder="Enter Postal Code">
                                            </div>
                                        </div>
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
                                              <div class="row">
                                                <div class="col-lg-12 jd_column">
                                                  <div class="align-items-center">
                                                      <span class="fs_14 fw_6 jd_title d-block mb-2">
                                                      Diagnosis findings/ Suggested Resolution (Mandatory, brief description):
                                                      </span>
                                                      <textarea class="form-control" rows="5"
                                                                placeholder="write your comments....."
                                                                aria-placeholder="write your comments....."></textarea>
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
                RJA - Summary
            </span>
        </div>
        <div class="card-body pt-3">
            <div class="row">
                <div class="col-lg-12 border-end">
                    <div class="row">
                        <div class="col-12 mt-4">
                            <span class="fs_16 fw_6 mb-3 d-block text-muted line_behind">
                                RJA - Labour and Parts
                            </span>
                        </div>
                        <div class="col-lg-12">
                            <span class="fs_16 fw_6 mb-3 d-block bg-light p-2 rounded-1">
                                LABOUR:
                            </span>
                            <div class="d-flex mb-3">
                                <div class="col-auto me-4">
                                    <div class="d-flex align-items-center">
                                        <span class="fs_14 fw_6 me-2">
                                            LABOUR 1:
                                        </span>
                                        <span class="fs_14 fw_4">
                                            Labour Cost:
                                        </span>
                                        <input type="text" class="form-control ms-2" value="135.00">
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="fs_14 fw_6 text-primary" id="add-labour-item">Add Additional Labour Item Line +</a>
                        </div>
                        <div class="col-lg-12 mt-4">
                            <span class="fs_16 fw_6 mb-3 d-block bg-light p-2 rounded-1">
                                PARTS:
                            </span>
                            <div class="d-flex mb-3">
                                <div class="col-auto me-4">
                                    <div class="d-flex align-items-center">
                                        <span class="fs_14 fw_6 me-2">
                                            Part 1:
                                        </span>
                                    </div>
                                </div>
                                <div class="col-auto me-4">
                                    <div class="d-flex align-items-center">
                                        <span class="fs_14 fw_6 me-2">
                                            Part Number:
                                        </span>
                                        <input type="text" class="form-control ms-2" value="MDS38265303">
                                    </div>
                                </div>
                                <div class="col-auto me-4">
                                    <div class="d-flex align-items-center">
                                        <span class="fs_14 fw_6 me-2">
                                            Part Cost:
                                        </span>
                                        <input type="text" class="form-control ms-2" value="100.22">
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="fs_14 fw_6 text-primary" id="add-parts-item">Add Additional Part Item Line +</a>
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
