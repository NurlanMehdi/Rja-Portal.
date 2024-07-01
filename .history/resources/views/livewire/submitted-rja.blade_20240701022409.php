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
                            <table class="table table-border datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">Select</th>
                                        <th scope="col">Job ID</th>
                                        <th scope="col">Company Profile</th>
                                        <th scope="col">Maintenance Email</th>
                                        <th scope="col">B2B/Warranty Reference</th>
                                        <th scope="col">Diagnosis</th>
                                        <th scope="col">Created At</th>
                                        <th scope="col">Updated At</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($rjas as $rja)
                                        <tr>
                                            <th scope="row">
                                                <input type="checkbox" name="select" class="" id="">
                                            </th>
                                            <td><a href="#" class="text-primary">#{{ $rja->id }}</a></td>
                                            <td>{{ $rja->company_profile }}</td>
                                            <td>{{ $rja->maintenance_email }}</td>
                                            <td>{{ $rja->b2b_reference }}</td>
                                            <td>{{ $rja->diagnosis }}</td>
                                            <td>{{ $rja->created_at }}</td>
                                            <td>{{ $rja->updated_at }}</td>
                                            <td>{{ $rja->status }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $rjas->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
