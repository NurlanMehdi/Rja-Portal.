<div>
    <section class="section dashboard">
        <div class="row">
            <div class="col-12">
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <div class="">  
                            <h5 class="card-title">Approved RJA</h5>
                        </div>

                        <div class="table-responsive">
                            <table id="rjaTable" class="table table-border datatable">
                                <thead>
                                    <tr>
                                        <!-- <th scope="col">Select</th> -->
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
                                            <!-- <th scope="row">
                                                <input type="checkbox" name="select" class="" id="{{ $rja->id }}">
                                            </th> -->
                                            <td><a href="{{ route('rja-detail', $rja->id) }}" class="text-primary">#{{ $rja->id }}</a></td>
                                            <td>{{ $rja->companies->company_name ?? ''  }}</td>
                                            <td>{{ $rja->companies->emails[0]->email ?? ($rja->emails[0]->mail ?? '') }}</td>
                                            <td>{{ $rja->b2b_reference }}</td>
                                            <td>{{ $rja->diagnosis }}</td>
                                            <td>{{ $rja->created_at }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $rjas->links('pagination::bootstrap-5') }}

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
