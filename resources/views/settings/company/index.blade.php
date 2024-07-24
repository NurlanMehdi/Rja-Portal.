@extends('layouts.master')

@section('content')

<section class="section dashboard">
    <div class="row">
        <div class="col-12">
            <div class="card recent-sales overflow-auto">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-4">  
                        <h5 class="card-title">Company Profile</h5>
                        <a href="{{ route('company.create') }}" class="btn btn-primary">Add Company</a>
                    </div>

                    @if (session()->has('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <div class="table-responsive">
                        <table  id="companyTable" class="table table-bordered datatable">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Company Name</th>
                                    <th scope="col">E-Mail</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($companies as $company)
                                    <tr>
                                        <td>{{ $company->id }}</td>
                                        <td>{{ $company->company_name }}</td>
                                        <td>
                                        @foreach($company->emails as $key => $email)
                                        @if($key == 0)
                                        {{ $email->email }}
                                        @endif
                                     
                                        @endforeach
                                            
                                        </td>
                                        <td>
                                            <a href="{{ route('company.edit', $company->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal" data-company-id="{{ $company->id }}">Remove</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $companies->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Confirm Delete Modal -->
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmDeleteModalLabel">Confirm Delete</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this company?
            </div>
            <div class="modal-footer">
                <form id="deleteForm" method="POST" action="">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
