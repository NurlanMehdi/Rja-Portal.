<div>
    @if (session()->has('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <form wire:submit.prevent="submit">
        <div class="col-12">
            <div class="">
                <h4 class=" mt-4 mb-4 fw_6">Transmission Details</h4>
            </div>
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <div class="card h-100">
                        <div class="card-header bg-info-dark">
                            <span class="fs_16 fw_6 text-white">
                                RJA Transmission Details
                            </span>
                        </div>
                        <div class="card-body pt-3">
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <div class="d-flex align-items-center">
                                        <span class="fs_14 fw_6 me-2">
                                            Select Company Profile:
                                        </span>
                                        <select wire:model="company_profile" class="form-select" aria-label="Default select example">
                                            @foreach($companies as $company)
                                                <option value="{{ $company->id }}">{{ $company->company_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('company_profile') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-12 mt-4">
                                    <span class="fs_16 fw_6 mb-3 d-block text-muted line_behind">
                                        Company Details:
                                    </span>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <div class="d-flex align-items-center">
                                        <span class="fs_14 fw_6 me-2">
                                            Maintenance Department Email:
                                        </span>
                                        <input type="email" wire:model="maintenance_email" class="form-control" placeholder="Enter Maintenance Department Email">
                                        @error('maintenance_email') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <div class="d-flex align-items-center">
                                        <span class="fs_14 fw_6 me-2">
                                            B2B/Warranty Reference:
                                        </span>
                                        <input type="text" wire:model="b2b_reference" class="form-control" placeholder="Enter B2B/Warranty Reference">
                                        @error('b2b_reference') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <h4 class=" mt-4 mb-4 fw_6">Tech Report - Summary</h4>
            </div>
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <div class="card h-100">
                        <div class="card-header bg-info-dark">
                            <span class="fs_16 fw_6 text-white">
                                Report - Summary
                            </span>
                        </div>
                        <div class="card-body pt-3">
                            <div class="row">
                                <div class="col-lg-12 border-end">
                                    <div class="row">
                                        <div class="col-lg-12 jd_column">
                                            <div class="align-items-center">
                                                <span class="fs_14 fw_6 d-block mb-2">
                                                    Diagnosis findings/ Suggested Resolution (Mandatory, brief description):
                                                </span>
                                                <textarea wire:model="diagnosis" class="form-control" rows="5" placeholder="write your comments....." aria-placeholder="write your comments....."></textarea>
                                                @error('diagnosis') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-4">
                    <div class="card h-100">
                        <div class="card-header bg-info-dark">
                            <span class="fs_16 fw_6 text-white">
                                RJA - Summary
                            </span>
                        </div>
                        <div class="card-body pt-3">
                            <div class="row">
                                <div class="col-12 mt-4">
                                    <span class="fs_16 fw_6 mb-3 d-block text-muted line_behind">
                                        RJA - Labour and Parts
                                    </span>
                                </div>
                                <div class="col-12">
                                    <span class="fs_16 fw_6 mb-3 d-block bg-light p-2 rounded-1">
                                        LABOUR:
                                    </span>
                                    <div class="col-lg-6 mb-3" id="labour-section">
                                        <div class="labour-item input-group mb-3">
                                            <label class="form-label fs_14 fw_6 me-3">LABOUR 1:</label>
                                            <label class="form-label fs_14 fw_4">Labour Cost:</label>
                                            <input type="text" wire:model="labour_items.0.cost" class="form-control labour-cost" value="0" oninput="updateTotals()">
                                            <button type="button" class="remove-button me-2 remove-labour-item btn-outline-danger" onclick="removeLabourItem(this)">&times;</button>
                                        </div>
                                        <a href="#" class="fs_14 fw_6 text-primary add-link" id="add-labour-item">Add Additional Labour Item Line +</a>
                                    </div>
                                </div>
                                <div class="col-12 mt-4">
                                    <span class="fs_16 fw_6 mb-3 d-block bg-light p-2 rounded-1">
                                        PARTS:
                                    </span>
                                    <div class="col-lg-12" id="parts-section">
                                        <div class="parts-item input-group mb-3">
                                            <label class="form-label fs_14 fw_6 me-2">Part 1:</label>
                                            <div class="row w-100">
                                                <div class="col-lg-2">
                                                    <label class="form-label fs_14 fw_6">Part Number:</label>
                                                    <input type="text" wire:model="parts_items.0.number" class="form-control">
                                                </div>
                                                <div class="col-lg-2">
                                                    <label class="form-label fs_14 fw_6">Part Cost:</label>
                                                    <input type="text" wire:model="parts_items.0.cost" class="form-control parts-cost" value="0" oninput="updateTotals()">
                                                </div>
                                                <button type="button" class="remove-button me-2 remove-parts-item btn-outline-danger" onclick="removePartsItem(this)">&times;</button>
                                            </div>
                                        </div>
                                        <a href="#" class="fs_14 fw_6 text-primary add-link" id="add-parts-item">Add Additional Part Item Line +</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-4">
                    <div class="card h-100">
                        <div class="card-header bg-info-dark">
                            <span class="fs_16 fw_6 text-white">
                                RJA - Summary
                            </span>
                        </div>
                        <div class="card-body pt-3">
                            <div class="row">
                                <div class="col-lg-12 border-end">
                                    <div class="summary-section">
                                        <div class="d-flex align-items-center">
                                            <span class="fs_14 fw_6 jd_title">
                                                RJA Quote (Pre HST):
                                            </span>
                                            <span class="fs_14 fw_4 jd_title">
                                            </span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="fs_14 fw_6 jd_title">
                                                Total Labour (Pre HST):
                                            </span>
                                            <span class="fs_14 fw_4 jd_title" id="total-labour">
                                                0
                                            </span>
                                            <span class="fs_14 fw_6 jd_title">
                                                Total Parts (Pre HST):
                                            </span>
                                            <span class="fs_14 fw_4 jd_title" id="total-parts">
                                                0
                                            </span>
                                        </div>
                                        <span class="fs_16 fw_6 mb-3 d-block text-muted line_behind"></span>
                                        <div class="d-flex align-items-center">
                                            <span class="fs_14 fw_6 jd_title">Total (Pre HST):</span>
                                            <span class="fs_14 fw_4 jd_title" id="total-pre-hst">0</span>
                                        </div>
                                        <div class="center-button">
                                            <button type="submit" class="btn btn-success mt-3">
                                                Send RJA to Maintenance Dept
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
