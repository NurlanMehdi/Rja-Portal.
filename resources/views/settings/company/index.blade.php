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
                        <table class="table table-bordered datatable">
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
                                            <a href="{{ route('company.edit', $company->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <form action="{{ route('company.destroy', $company->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                                            </form>
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
@endsection
