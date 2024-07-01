@extends('layouts.master')
@section('content')
@livewire('new-rja')
      <div class="row">
             <!-- Jobs Search Result -->
             <div class="col-12">
                <!-- <h4 class="">Search Result</h4> -->
                <div class="card recent-sales overflow-auto">
  
                  <div class="card-body">
                    <div class="">  
                      <!-- <h5 class="card-title">Total: <span class="fw_6 fs_18 heading_clr">5</span></h5> -->
                      <h5 class="card-title">Submitted RJA</h5>
                    </div>
                    <!-- <div class="d-flex justify-content-between align-items-center mb-4">
                      <div class="select_e">
                        <select class="entry_select">
                          <option>5</option>
                          <option>10</option>
                          <option>15</option>
                          <option>All</option>
                        </select>
                        entries per page
                      </div>
                      <div class="search-bar pe-0">
                        <form class="search-form d-flex align-items-center" method="POST" action="#">
                          <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                          <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                        </form>
                      </div>
                    </div> -->

                    <!-- Table Start -->
                    <div class="table-responsive">
                      <table class="table table-border datatable">
                        <thead>
                          <tr>
                            <th scope="col">
                              Select
                              <i class="bi bi-arrow-down-up ms-2 text-muted d-none"></i>
                              <i class="bi bi-funnel-fill ms-2 text-muted d-none"></i>
                            </th>
                            <th scope="col">
                                Job ID
                                <i class="bi bi-arrow-down-up ms-2 text-muted d-none"></i>
                                <i class="bi bi-funnel-fill ms-2 text-muted d-none"></i>
                            </th>
                            <th scope="col">
                                HPC Invoice
                                <i class="bi bi-arrow-down-up ms-2 text-muted d-none"></i>
                                <i class="bi bi-funnel-fill ms-2 text-muted d-none"></i>
                            </th>
                            <!-- <th scope="col">B2B/Warranty Reference ID</th> -->
                            <th scope="col">
                                Source (B2C, B2B, Warranty)
                                <i class="bi bi-arrow-down-up ms-2 text-muted d-none"></i>
                                <i class="bi bi-funnel-fill ms-2 text-muted d-none"></i>
                            </th>
                            <th scope="col">
                                Customer Name
                                <i class="bi bi-arrow-down-up ms-2 text-muted d-none"></i>
                                <i class="bi bi-funnel-fill ms-2 text-muted d-none"></i>
                            </th>
                            <th scope="col">
                                Company Name
                                <i class="bi bi-arrow-down-up ms-2 text-muted d-none"></i>
                                <i class="bi bi-funnel-fill ms-2 text-muted d-none"></i>
                            </th>
                            <th scope="col">
                                Phone Number
                                <i class="bi bi-arrow-down-up ms-2 text-muted d-none"></i>
                                <i class="bi bi-funnel-fill ms-2 text-muted d-none"></i>
                            </th>
                            <th scope="col">
                                Job Status
                                <i class="bi bi-arrow-down-up ms-2 text-muted d-none"></i>
                                <i class="bi bi-funnel-fill ms-2 text-muted d-none"></i>
                            </th>
                            <!-- <th scope="col">Appointment Time Window</th> -->
                            <!-- <th scope="col">Days to The Appointment</th> -->
                            <!-- <th scope="col">Current Job Stage</th> -->
                            <!-- <th scope="col">Type of Job (Appliance/Other)</th> -->
                            <!-- <th scope="col">Type of Product</th> -->
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">
                              <input type="checkbox" name="select" class="" id="">
                            </th>
                            <th scope="row"><a href="new-job-inquiry-details.html" class="text-primary">#12232</a></th>
                            <td class="hpc_red">No Schedualed yet</td>
                            <td>Warranty</td>
                            <td>Jitender Shenh</td>
                            <td><a href="#" >Royal York PM</a></td>
                            <td>(647)-405-3813</td>
                            <td><span class="badge bg-in-progress">New Job Inquiry</span></td>
                          </tr>
                          <tr>
                            <th scope="row">
                              <input type="checkbox" name="select" class="" id="">
                            </th>
                            <th scope="row"><a href="#" class="text-primary">#21471</a></th>
                            <td class="hpc_red">No Schedualed yet</td>
                            <td>Warranty</td>
                            <td>Bridie Kessler</td>
                            <td><a href="#" >Blanditiis dolor omnis similique</a></td>
                            <td>(647)-405-3813</td>
                            <td><span class="badge bg-in-progress">New Job Inquiry</span></td>
                          </tr>
                          <tr>
                            <th scope="row">
                              <input type="checkbox" name="select" class="" id="">
                            </th>
                            <th scope="row"><a href="#" class="text-primary">#20491</a></th>
                            <td class="hpc_red">No Schedualed yet</td>
                            <td>Warranty</td>
                            <td>Ashleigh Langosh</td>
                            <td><a href="#" >At recusandae consectetur</a></td>
                            <td>(647)-405-3813</td>
                            <td><span class="badge bg-in-progress">New Job Inquiry</span></td>
                          </tr>
                          <tr>
                            <th scope="row">
                              <input type="checkbox" name="select" class="" id="">
                            </th>
                            <th scope="row"><a href="#" class="text-primary">#26441</a></th>
                            <td class="hpc_red">No Schedualed yet</td>
                            <td>Warranty</td>
                            <td>Angus Grady</td>
                            <td><a href="#" class="text-primar">Ut voluptatem id earum et</a></td>
                            <td>(647)-405-3813</td>
                            <td><span class="badge bg-in-progress">New Job Inquiry</span></td>
                          </tr>
                          <tr>
                            <th scope="row">
                              <input type="checkbox" name="select" class="" id="">
                            </th>
                            <th scope="row"><a href="#" class="text-primary">#26442</a></th>
                            <td class="hpc_red">No Schedualed yet</td>
                            <td>Warranty</td>
                            <td>Raheem Lehner</td>
                            <td><a href="#" >Sunt similique distinctio</a></td>
                            <td>(647)-405-3813</td>
                            <td><span class="badge bg-in-progress">New Job Inquiry</span></td>
                          </tr>
                          <tr>
                            <th scope="row">
                              <input type="checkbox" name="select" class="" id="">
                            </th>
                            <th scope="row"><a href="#" class="text-primary">#26443</a></th>
                            <td class="hpc_red">No Schedualed yet</td>
                            <td>Warranty</td>
                            <td>Raheem Lehner</td>
                            <td><a href="#" >Sunt similique distinctio</a></td>
                            <td>(647)-405-3813</td>
                            <td><span class="badge bg-in-progress">New Job Inquiry</span></td>
                          </tr>
                          <tr>
                            <th scope="row">
                              <input type="checkbox" name="select" class="" id="">
                            </th>
                            <th scope="row"><a href="#" class="text-primary">#26444</a></th>
                            <td class="hpc_red">No Schedualed yet</td>
                            <td>Warranty</td>
                            <td>Raheem Lehner</td>
                            <td><a href="#" >Sunt similique distinctio</a></td>
                            <td>(647)-405-3813</td>
                            <td><span class="badge bg-in-progress">New Job Inquiry</span></td>
                          </tr>
                          <tr>
                            <th scope="row">
                              <input type="checkbox" name="select" class="" id="">
                            </th>
                            <th scope="row"><a href="#" class="text-primary">#26445</a></th>
                            <td class="hpc_red">No Schedualed yet</td>
                            <td>Warranty</td>
                            <td>Raheem Lehner</td>
                            <td><a href="#" >Sunt similique distinctio</a></td>
                            <td>+555-555-5555</td>
                            <td><span class="badge bg-in-progress">New Job Inquiry</span></td>
                          </tr>
                          <tr>
                            <th scope="row">
                              <input type="checkbox" name="select" class="" id="">
                            </th>
                            <th scope="row"><a href="#" class="text-primary">#26446</a></th>
                            <td class="hpc_red">No Schedualed yet</td>
                            <td>Warranty</td>
                            <td>Raheem Lehner</td>
                            <td><a href="#" >Sunt similique distinctio</a></td>
                            <td>+555-555-5555</td>
                            <td><span class="badge bg-in-progress">New Job Inquiry</span></td>
                          </tr>
                          <tr>
                            <th scope="row">
                              <input type="checkbox" name="select" class="" id="">
                            </th>
                            <th scope="row"><a href="#" class="text-primary">#26447</a></th>
                            <td class="hpc_red">No Schedualed yet</td>
                            <td>Warranty</td>
                            <td>Raheem Lehner</td>
                            <td><a href="#" >Sunt similique distinctio</a></td>
                            <td>+555-555-5555</td>
                            <td><span class="badge bg-in-progress">New Job Inquiry</span></td>
                          </tr>
                          <tr>
                            <th scope="row">
                              <input type="checkbox" name="select" class="" id="">
                            </th>
                            <th scope="row"><a href="#" class="text-primary">#26448</a></th>
                            <td class="hpc_red">No Schedualed yet</td>
                            <td>Warranty</td>
                            <td>Raheem Lehner</td>
                            <td><a href="#" >Sunt similique distinctio</a></td>
                            <td>+555-555-5555</td>
                            <td><span class="badge bg-in-progress">New Job Inquiry</span></td>
                          </tr>
                          <tr>
                            <th scope="row">
                              <input type="checkbox" name="select" class="" id="">
                            </th>
                            <th scope="row"><a href="#" class="text-primary">#26449</a></th>
                            <td class="hpc_red">No Schedualed yet</td>
                            <td>Warranty</td>
                            <td>Raheem Lehner</td>
                            <td><a href="#" >Sunt similique distinctio</a></td>
                            <td>+555-555-5555</td>
                            <td><span class="badge bg-in-progress">New Job Inquiry</span></td>
                          </tr>

                        </tbody>
                      </table>
                    </div>
                    <!-- Table End -->
                    <div class="select_all d-flex mt-3 btn_group">
                      <a href="#" class="btn btn-success">Approve RJA</a>
                      <a href="#" class="btn btn-danger">Reject RJA</a>
                      <a href="#" class="btn btn-success">Re-Notify Maintenance Department</a>
                    </div>

                  </div>
                </div>
              </div><!-- End Jobs Search Result -->
          </div>
        </div><!-- End Left side columns -->

      </div>
    </section>
@endsection