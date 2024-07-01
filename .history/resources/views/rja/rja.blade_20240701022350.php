@extends('layouts.master')
@section('content')
<section class="section dashboard">
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

                    <!-- Livewire Bileşeni -->
                    @livewire('submitted-rja')

                    <div class="select_all d-flex mt-3 btn_group">
                        <a href="#" class="btn btn-success">Approve RJA</a>
                        <a href="#" class="btn btn-danger">Reject RJA</a>
                        <a href="#" class="btn btn-success">Re-Notify Maintenance Department</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
