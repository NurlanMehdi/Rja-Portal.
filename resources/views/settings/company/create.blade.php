@extends('layouts.master')

@section('content')
<section class="section dashboard">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Add Company</h5>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('company.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="company_name" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="company_name" name="company_name" value="{{ old('company_name') }}">
                        </div>
                        <div class="mb-3">
                            <label for="emails" class="form-label">E-Mails</label>
                            <div id="email-wrapper">
                                <div class="input-group mb-2 email-input-group">
                                    <input type="email" name="emails[]" class="form-control email-input" placeholder="Enter email">
                                    <button type="button" class="btn btn-sm btn-success add-email email-action-button">+</button>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
