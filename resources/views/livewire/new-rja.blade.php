<div>
    <form wire:submit.prevent="submit">
        <div class="col-12">
            <div class="">
                <h4 class="mt-4 mb-4 fw_6">Transmission Details</h4>
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
                                        <select id="company-select" wire:model="company_id" class="form-select" aria-label="Default select example">
                                            <option value="">Select</option>
                                            @foreach($companies as $company)

                                            <option data-emails="{{ json_encode($company->emails->pluck('email')->toArray()) }}" value="{{ $company->id }}">{{ $company->company_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('company_id') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-12 mt-4">
                                    <span class="fs_16 fw_6 mb-3 d-block text-muted line_behind">
                                        Company Details:
                                    </span>
                                </div>
                                <div id="maintenance-email-container-2" class="col-lg-6 mb-3">
                                    <div class="d-flex align-items-center">
                                        <span class="fs_14 fw_6 me-2">Maintenance Department Email:</span>

                                        <input id="maintenance-email" type="email" wire:model="email" class="form-control" placeholder="Enter Maintenance Department Email"><button type="button" class="btn btn-sm btn-success" wire:click="addCCEmails">+</button>

                                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    @foreach($cc_emails as $index => $cc_email)
                                    <div class="d-flex align-items-center mt-2">
                                        <span class="fs_14 fw_6 me-2">Maintenance Department Email:</span>
                                        <input type="email" wire:model="cc_emails.{{ $index }}.email" class="form-control" placeholder="Enter Maintenance Department CC Email"><button type="button" class="btn btn-sm btn-danger" wire:click="removeCCEmail({{ $index }})"><i class="bi bi-trash"></i></button>
                                    </div>
                                    @endforeach
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
                <h4 class="mt-4 mb-4 fw_6">Tech Report - Summary</h4>
            </div>
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <div class="card h-100">
                        <div class="card-header bg-info-dark">
                            <span class="fs_16 fw_6 text-white">

                                Tech Findings/ Suggested Resolution

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

                                RJA - Quote Details

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
                                    <div class="col-lg-12" id="labour-section">
                                        <div class="labour-item input-group mb-3 align-items-start">

                                            <div class="row w-100">
                                                <div class="col-lg-1">
                                                    <label class="form-label fs_14 fw_6 me-2 text-nowrap">LABOUR 1:</label>
                                                </div>
                                                <div class="col-lg-2">
                                                    <label class="form-label fs_14 fw_6">Labour Cost:</label>
                                                    <span class="currencyinput"><span class="doller">$</span>
                                                        <input type="text" wire:model="labour_items.0.cost" class="form-control labour-cost" placeholder="0.00" oninput="formatNumber(this)" onkeypress="return isNumberKey(event)">
                                                    </span>

                                                </div>
                                                <button type="button" class="remove-button me-2 remove-labour-item btn-outline-danger">&times;</button>
                                            </div>

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

                                            <div class="row w-100">
                                                <div class="col-lg-1">
                                                    <label class="form-label fs_14 fw_6 me-2">Part 1:</label>
                                                </div>
                                                <div class="col-lg-2">
                                                    <label class="form-label fs_14 fw_6">Part Number:</label>
                                                    <input type="text" wire:model="parts_items.0.number" class="form-control" placeholder="I.e. W10821385">
                                                </div>
                                                <div class="col-lg-2">
                                                    <label class="form-label fs_14 fw_6">Part Cost:</label>

                                                    <span class="currencyinput"><span class="doller">$</span>
                                                        <input type="text" wire:model="parts_items.0.cost" class="form-control parts-cost" placeholder="0.00" onkeypress="return isNumberKey(event)" oninput="formatNumber(this);">
                                                    </span>
                                                </div>
                                                <button type="button" class="remove-button me-2 remove-parts-item btn-outline-danger">&times;</button>
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
                                RJA - Quote Summary
                            </span>
                        </div>
                        <div class="card-body pt-3">
                            <div class="row">
                                <div class="col-lg-12 border-end">
                                    <div class="summary-section">
                                        <div class="d-flex align-items-center">
                                            <span class="fs_14 fw_6 jd_title">Total Labour (Pre HST):</span>
                                            <span class="fs_14 fw_4 jd_title" id="total-labour">0.00$</span>
                                            <span class="fs_14 fw_6 jd_title">Total Parts (Pre HST):</span>
                                            <span class="fs_14 fw_4 jd_title" id="total-parts">0.00$</span>
                                        </div>
                                        <span class="fs_16 fw_6 mb-3 d-block text-muted line_behind"></span>
                                        <div class="d-flex align-items-center">
                                            <span class="fs_14 fw_6 jd_title">Total (Pre HST):</span>
                                            <span class="fs_14 fw_4 jd_title" id="total-pre-hst">0.00$</span>
                                        </div>
                                        <div class="center-button">
                                            <button type="submit" class="btn btn-success mt-3">Send RJA to Maintenance Dept</button>
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
    @livewireScripts
</div>

</form>
</div>