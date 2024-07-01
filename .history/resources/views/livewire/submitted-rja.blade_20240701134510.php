<div>
    <section class="section dashboard">
        <div class="row">
            <div class="col-12">
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <div class="">  
                            <h5 class="card-title">Submitted RJA</h5>
                        </div>

                        <div class="table-responsive">
                            <table  id="rjaTable" class="table table-border datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">Select</th>
                                        <th scope="col">RJA ID</th>
                                        <th scope="col">Company Profile</th>
                                        <th scope="col">Maintenance Email</th>
                                        <th scope="col">B2B/Warranty Reference</th>
                                        <th scope="col">Diagnosis</th>
                                        <th scope="col">Created At</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($rjas as $rja)
                                        <tr>
                                            <th scope="row">
                                                <input type="checkbox" name="select" class="" id="{{ $rja->id }}">
                                            </th>
                                            <td><a href="#" class="text-primary">#{{ $rja->id }}</a></td>
                                            <td>{{ $rja->company_profile }}</td>
                                            <td>{{ $rja->maintenance_email }}</td>
                                            <td>{{ $rja->b2b_reference }}</td>
                                            <td>{{ $rja->diagnosis }}</td>
                                            <td>{{ $rja->created_at }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $rjas->links('pagination::bootstrap-5') }}

                        <div class="select_all d-flex justify-content-center mt-3 btn_group">
                            <button wire:click="approveRja({{ $rja->id }})" class="btn btn-success btn-sm">Approve</button>
                            <button wire:click="rejectRja({{ $rja->id }})" class="btn btn-danger btn-sm">Reject</button>
                            <a href="#" class="btn btn-success">Re-Notify Maintenance Department</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
