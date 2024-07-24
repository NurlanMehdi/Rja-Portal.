@extends('layouts.master')

@section('content')
<section class="section dashboard">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edit Company</h5>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('company.update', $company->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="company_name" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="company_name" name="company_name" value="{{ old('company_name', $company->company_name) }}">
                        </div>
                        <div class="mb-3">
                            <label for="emails" class="form-label">E-Mails</label>
                            <div id="email-wrapper">
                            <div class="input-group mb-2 email-input-group">
                                    <input type="email" name="emails[]" class="form-control email-input" value="{{ old('emails.0', $company->emails->first() ? $company->emails->first()->email : '') }}" placeholder="Enter email">
                                    <button type="button" class="btn btn-sm btn-success add-email email-action-button">+</button>
                                </div>
                                @foreach($company->emails->slice(1) as $email)
                                    <div class="input-group mb-2 email-input-group">
                                        <input type="email" name="emails[]" class="form-control email-input" value="{{ old('emails.'.$loop->index, $email->email) }}" placeholder="Enter email">
                                        <button type="button" class="btn btn-sm btn-danger remove-email email-action-button">-</button>
                                    </div>
                                @endforeach
                            
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
