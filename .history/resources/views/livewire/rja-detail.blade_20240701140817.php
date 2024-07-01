<div>
    <section class="section dashboard">
        <div class="row">
            <div class="col-12">
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <div class="">
                            <h4 class=" mt-4 mb-4 fw_6">RJA Details</h4>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>Company Profile</th>
                                        <td>{{ $rja->company_profile }}</td>
                                    </tr>
                                    <tr>
                                        <th>Maintenance Email</th>
                                        <td>{{ $rja->maintenance_email }}</td>
                                    </tr>
                                    <tr>
                                        <th>B2B/Warranty Reference</th>
                                        <td>{{ $rja->b2b_reference }}</td>
                                    </tr>
                                    <tr>
                                        <th>Diagnosis</th>
                                        <td>{{ $rja->diagnosis }}</td>
                                    </tr>
                                    <tr>
                                        <th>Labour Items</th>
                                        <td>
                                            @foreach(json_decode($rja->labour_items, true) as $labour)
                                                <p>Cost: {{ $labour['cost'] }}</p>
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Parts Items</th>
                                        <td>
                                            @foreach(json_decode($rja->parts_items, true) as $part)
                                                <p>Part Number: {{ $part['number'] }}, Cost: {{ $part['cost'] }}</p>
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Created At</th>
                                        <td>{{ $rja->created_at }}</td>
                                    </tr>
                                    <tr>
                                        <th>Updated At</th>
                                        <td>{{ $rja->updated_at }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
