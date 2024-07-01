<div>
    <section class="section dashboard">
        <div class="row">
            <div class="col-12">
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-4">  
                            <h5 class="card-title">Company Profile</h5>
                            <button wire:click="$emit('showForm')" class="btn btn-primary">Add Company</button>
                        </div>

                        @if (session()->has('message'))
                            <div class="alert alert-success">{{ session('message') }}</div>
                        @endif

                        <div class="table-responsive">
                            <table id="companyTable" class="table table-bordered datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Company Name</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($companies as $company)
                                        <tr>
                                            <td>{{ $company->id }}</td>
                                            <td>{{ $company->company_name }}</td>
                                            <td>{{ $company->description }}</td>
                                            <td>
                                                <button class="btn btn-primary btn-sm" wire:click="edit({{ $company->id }})">Edit</button>
                                                <button class="btn btn-danger btn-sm" wire:click="delete({{ $company->id }})">Remove</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="select_all d-flex justify-content-center mt-3 btn_group">
                            <button wire:click="approveSelected" class="btn btn-success btn-sm">Approve</button>
                            <button wire:click="rejectSelected" class="btn btn-danger btn-sm">Reject</button>
                            <a href="#" class="btn btn-success btn-sm">Re-Notify Maintenance Department</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
