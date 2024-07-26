/**
 * Template Name: NiceAdmin
 * Updated: Mar 10 2024 with Bootstrap v5.3.3
 * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
 * Author: BootstrapMade.com
 * License: https://bootstrapmade.com/license/
 */
(function () {
    "use strict";

    /**
     * Easy selector helper function
     */
    const select = (el, all = false) => {
        el = el.trim()
        if (all) {
            return [...document.querySelectorAll(el)]
        } else {
            return document.querySelector(el)
        }
    }

    /**
     * Easy event listener function
     */
    const on = (type, el, listener, all = false) => {
        if (all) {
            select(el, all).forEach(e => e.addEventListener(type, listener))
        } else {
            select(el, all).addEventListener(type, listener)
        }
    }

    /**
     * Easy on scroll event listener 
     */
    const onscroll = (el, listener) => {
        el.addEventListener('scroll', listener)
    }

    /**
     * Sidebar toggle
     */
    if (select('.toggle-sidebar-btn')) {
        on('click', '.toggle-sidebar-btn', function (e) {
            select('body').classList.toggle('toggle-sidebar')
        })
    }

    /**
     * Search bar toggle
     */
    if (select('.search-bar-toggle')) {
        on('click', '.search-bar-toggle', function (e) {
            select('.search-bar').classList.toggle('search-bar-show')
        })
    }

    /**
     * Navbar links active state on scroll
     */
    let navbarlinks = select('#navbar .scrollto', true)
    const navbarlinksActive = () => {
        let position = window.scrollY + 200
        navbarlinks.forEach(navbarlink => {
            if (!navbarlink.hash) return
            let section = select(navbarlink.hash)
            if (!section) return
            if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
                navbarlink.classList.add('active')
            } else {
                navbarlink.classList.remove('active')
            }
        })
    }
    window.addEventListener('load', navbarlinksActive)
    onscroll(document, navbarlinksActive)

    /**
     * Toggle .header-scrolled class to #header when page is scrolled
     */
    let selectHeader = select('#header')
    if (selectHeader) {
        const headerScrolled = () => {
            if (window.scrollY > 100) {
                selectHeader.classList.add('header-scrolled')
            } else {
                selectHeader.classList.remove('header-scrolled')
            }
        }
        window.addEventListener('load', headerScrolled)
        onscroll(document, headerScrolled)
    }

    /**
     * Back to top button
     */
    let backtotop = select('.back-to-top')
    if (backtotop) {
        const toggleBacktotop = () => {
            if (window.scrollY > 100) {
                backtotop.classList.add('active')
            } else {
                backtotop.classList.remove('active')
            }
        }
        window.addEventListener('load', toggleBacktotop)
        onscroll(document, toggleBacktotop)
    }

    /**
     * Initiate tooltips
     */
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })

    /**
     * Initiate quill editors
     */
    if (select('.quill-editor-default')) {
        new Quill('.quill-editor-default', {
            theme: 'snow'
        });
    }

    if (select('.quill-editor-bubble')) {
        new Quill('.quill-editor-bubble', {
            theme: 'bubble'
        });
    }

    if (select('.quill-editor-full')) {
        new Quill(".quill-editor-full", {
            modules: {
                toolbar: [
                    [{
                        font: []
                    }, {
                        size: []
                    }],
                    ["bold", "italic", "underline", "strike"],
                    [{
                        color: []
                    },
                    {
                        background: []
                    }
                    ],
                    [{
                        script: "super"
                    },
                    {
                        script: "sub"
                    }
                    ],
                    [{
                        list: "ordered"
                    },
                    {
                        list: "bullet"
                    },
                    {
                        indent: "-1"
                    },
                    {
                        indent: "+1"
                    }
                    ],
                    ["direction", {
                        align: []
                    }],
                    ["link", "image", "video"],
                    ["clean"]
                ]
            },
            theme: "snow"
        });
    }

    /**
     * Initiate TinyMCE Editor
     */
    const useDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;
    const isSmallScreen = window.matchMedia('(max-width: 1023.5px)').matches;

    tinymce.init({
        selector: 'textarea.tinymce-editor',
        plugins: 'preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons',
        editimage_cors_hosts: ['picsum.photos'],
        menubar: 'file edit view insert format tools table help',
        toolbar: 'undo redo | bold italic underline strikethrough | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
        toolbar_sticky: true,
        toolbar_sticky_offset: isSmallScreen ? 102 : 108,
        autosave_ask_before_unload: true,
        autosave_interval: '30s',
        autosave_prefix: '{path}{query}-{id}-',
        autosave_restore_when_empty: false,
        autosave_retention: '2m',
        image_advtab: true,
        link_list: [{
            title: 'My page 1',
            value: 'https://www.tiny.cloud'
        },
        {
            title: 'My page 2',
            value: 'http://www.moxiecode.com'
        }
        ],
        image_list: [{
            title: 'My page 1',
            value: 'https://www.tiny.cloud'
        },
        {
            title: 'My page 2',
            value: 'http://www.moxiecode.com'
        }
        ],
        image_class_list: [{
            title: 'None',
            value: ''
        },
        {
            title: 'Some class',
            value: 'class-name'
        }
        ],
        importcss_append: true,
        file_picker_callback: (callback, value, meta) => {
            /* Provide file and text for the link dialog */
            if (meta.filetype === 'file') {
                callback('https://www.google.com/logos/google.jpg', {
                    text: 'My text'
                });
            }

            /* Provide image and alt text for the image dialog */
            if (meta.filetype === 'image') {
                callback('https://www.google.com/logos/google.jpg', {
                    alt: 'My alt text'
                });
            }

            /* Provide alternative source and posted for the media dialog */
            if (meta.filetype === 'media') {
                callback('movie.mp4', {
                    source2: 'alt.ogg',
                    poster: 'https://www.google.com/logos/google.jpg'
                });
            }
        },
        templates: [{
            title: 'New Table',
            description: 'creates a new table',
            content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>'
        },
        {
            title: 'Starting my story',
            description: 'A cure for writers block',
            content: 'Once upon a time...'
        },
        {
            title: 'New list with dates',
            description: 'New List with dates',
            content: '<div class="mceTmpl"><span class="cdate">cdate</span><br><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>'
        }
        ],
        template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
        template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
        height: 600,
        image_caption: true,
        quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
        noneditable_class: 'mceNonEditable',
        toolbar_mode: 'sliding',
        contextmenu: 'link image table',
        skin: useDarkMode ? 'oxide-dark' : 'oxide',
        content_css: useDarkMode ? 'dark' : 'default',
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
    });

    /**
     * Initiate Bootstrap validation check
     */
    var needsValidation = document.querySelectorAll('.needs-validation')

    Array.prototype.slice.call(needsValidation)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })

    /**
     * Initiate Datatables
     */
    const datatables = select('.datatable', true)
    datatables.forEach(datatable => {
        new simpleDatatables.DataTable(datatable, {
            columns: [{
                select: 2,
                sortSequence: ["desc", "asc"]
            },
            {
                select: 3,
                sortSequence: ["desc"]
            },
            {
                select: 4,
                cellClass: "green",
                headerClass: "red"
            }
            ]
        });
    })

    /**
     * Autoresize echart charts
     */
    const mainContainer = select('#main');
    if (mainContainer) {
        setTimeout(() => {
            new ResizeObserver(function () {
                select('.echart', true).forEach(getEchart => {
                    echarts.getInstanceByDom(getEchart).resize();
                })
            }).observe(mainContainer);
        }, 200);
    }

    document.addEventListener('DOMContentLoaded', function () {
        document.querySelector('.add-email').addEventListener('click', function () {
            var emailWrapper = document.getElementById('email-wrapper');
            var newEmailInput = document.createElement('div');
            newEmailInput.classList.add('input-group', 'mb-2', 'email-input-group');
            newEmailInput.innerHTML = `
              <input type="email" name="emails[]" class="form-control email-input" placeholder="Enter email">
              <button type="button" class="btn btn-sm btn-danger remove-email email-action-button">-</button>
          `;
            emailWrapper.appendChild(newEmailInput);

            newEmailInput.querySelector('.remove-email').addEventListener('click', function () {
                newEmailInput.remove();
            });
        });
    });

    document.addEventListener('DOMContentLoaded', function () {

        function addLabourItem() {
            const labourSection = document.getElementById('labour-section');
            const labourCount = labourSection.getElementsByClassName('labour-item').length;
            const newLabourItem = document.createElement('div');
            newLabourItem.className = 'labour-item input-group mb-3';
            const uniqueId = Date.now() + labourCount; // Ensure a unique ID
            newLabourItem.innerHTML = `
        <div class="row w-100">
            <div class="col-lg-1">
                <label class="form-label fs_14 fw_6 me-2">LABOUR ${labourCount + 1}:</label>
            </div>
            <div class="col-lg-2">
                <label class="form-label fs_14 fw_6">Labour Cost:</label>
                <span class="currencyinput"><span class="doller">.00$</span>
                <input type="text" wire:model="labour_items.${uniqueId}.cost" class="form-control ms-2 labour-cost" placeholder="0" oninput="formatNumber(this)" onkeypress="return isNumberKey(event)">
                </span>
            </div>
            <button type="button" class="remove-button me-2 remove-labour-item btn-outline-danger">&times;</button>
        </div>`;
            labourSection.insertBefore(newLabourItem, labourSection.querySelector('#add-labour-item'));
            addRemoveEvent(newLabourItem.querySelector('.remove-labour-item'));
            addInputEvent(newLabourItem.querySelector('.labour-cost'));
            renumberItems('labour-item', 'LABOUR');
        }

        function addPartsItem() {
            const partsSection = document.getElementById('parts-section');
            const partsCount = partsSection.getElementsByClassName('parts-item').length;
            const newPartsItem = document.createElement('div');
            newPartsItem.className = 'parts-item input-group mb-3';
            const uniqueId = Date.now() + partsCount; // Ensure a unique ID
            newPartsItem.innerHTML = `
        <div class="row w-100">
            <div class="col-lg-1">
                <label class="form-label fs_14 fw_6 me-2">Part ${partsCount + 1}:</label>
            </div>
            <div class="col-lg-2">
                <label class="form-label fs_14 fw_6">Part Number:</label>
                <input type="text" wire:model="parts_items.${uniqueId}.number" class="form-control" placeholder="I.e. W10821385" value="">
            </div>
            <div class="col-lg-2">
                <label class="form-label fs_14 fw_6">Part Cost:</label>
                <span class="currencyinput"><span class="doller">.00$</span>
                <input type="text" wire:model="parts_items.${uniqueId}.cost" class="form-control parts-cost"  placeholder="0" oninput="formatNumber(this)" onkeypress="return isNumberKey(event)">
                </span>
            </div>
            <button type="button" class="remove-button me-2 remove-parts-item btn-outline-danger">&times;</button>
        </div>`;
            partsSection.insertBefore(newPartsItem, partsSection.querySelector('#add-parts-item'));
            addRemoveEvent(newPartsItem.querySelector('.remove-parts-item'));
            addInputEvent(newPartsItem.querySelector('.parts-cost'));
            renumberItems('parts-item', 'Part');
        }

        function renumberItems(className, label) {
            const items = document.getElementsByClassName(className);
            Array.from(items).forEach((item, index) => {
                item.querySelector('label').textContent = `${label} ${index + 1}:`;
            });
        }

        function addRemoveEvent(button) {
            button.addEventListener('click', function () {
                const isLabourItem = button.closest('.input-group').classList.contains('labour-item');
                const itemIndex = Array.from(button.closest('.input-group').parentElement.children).indexOf(button.closest('.input-group'));

                // Clear Livewire model data
                if (typeof Livewire !== 'undefined' && typeof Livewire.emit === 'function') {
                    if (isLabourItem) {
                        Livewire.emit('removeLabourItem', itemIndex);
                    } else {
                        Livewire.emit('removePartsItem', itemIndex);
                    }
                } else {
                    console.error('Livewire is not available or not initialized correctly.');
                }

                this.closest('.input-group').remove();
                renumberItems(isLabourItem ? 'labour-item' : 'parts-item', isLabourItem ? 'LABOUR' : 'Part');
                calculateTotals();
            });
        }

        function addInputEvent(input) {
            input.addEventListener('input', calculateTotals);
        }

        function calculateTotals() {
            let totalLabour = 0;
            let totalParts = 0;

            document.querySelectorAll('.labour-cost').forEach(function (input) {
                totalLabour += parseFloat(input.value.replace(/,/g, '').replace('$', '')) || 0;
            });

            document.querySelectorAll('.parts-cost').forEach(function (input) {
                totalParts += parseFloat(input.value.replace(/,/g, '').replace('$', '')) || 0;
            });

            document.getElementById('total-labour').textContent = totalLabour.toLocaleString(undefined, {
                minimumFractionDigits: 2,
                maximumFractionDigits: 2
            }) + '$';
            document.getElementById('total-parts').textContent = totalParts.toLocaleString(undefined, {
                minimumFractionDigits: 2,
                maximumFractionDigits: 2
            }) + '$';
            document.getElementById('total-pre-hst').textContent = (totalLabour + totalParts).toLocaleString(undefined, {
                minimumFractionDigits: 2,
                maximumFractionDigits: 2
            }) + '$';
        }

        // Initial remove event bindings
        document.querySelectorAll('.remove-labour-item').forEach(addRemoveEvent);
        document.querySelectorAll('.remove-parts-item').forEach(addRemoveEvent);

        // Initial input event bindings
        document.querySelectorAll('.labour-cost').forEach(addInputEvent);
        document.querySelectorAll('.parts-cost').forEach(addInputEvent);

        document.getElementById('add-labour-item').addEventListener('click', function (event) {
            event.preventDefault();
            addLabourItem();
            calculateTotals();
        });

        document.getElementById('add-parts-item').addEventListener('click', function (event) {
            event.preventDefault();
            addPartsItem();
            calculateTotals();
        });

        calculateTotals();

    });

    document.addEventListener('livewire:load', function () {
        // Check all checkboxes
        document.getElementById('selectAll').addEventListener('change', function (event) {
            const checkboxes = document.querySelectorAll('input[type="checkbox"][wire:model="selectedRjas"]');
            checkboxes.forEach(checkbox => {
                checkbox.checked = event.target.checked;
                Livewire.emit('updateSelected', checkbox.value, checkbox.checked);
            });
        });
    });

    document.addEventListener('DOMContentLoaded', function () {
        var deleteModal = document.getElementById('confirmDeleteModal');
        deleteModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget;
            var companyId = button.getAttribute('data-company-id');
            var form = deleteModal.querySelector('#deleteForm');
            form.action = '/company/' + companyId;
        });
    });

    const companySelect = document.getElementById('company-select');

    companySelect.addEventListener('change', function () {
        const maintenanceEmailContainer = document.getElementById('maintenance-email-container-2');
        const selectedOption = companySelect.options[companySelect.selectedIndex];
        let emails = selectedOption.getAttribute('data-emails');

        if (emails) {
            emails = emails.replace(/&quot;/g, '"'); // Replace HTML entities
        }

        try {
            emails = JSON.parse(emails);
        } catch (e) {
            console.error("Invalid JSON format:", e);
            emails = [];
        }
        console.log(emails)

        const maintenanceEmailInput = document.getElementById('maintenance-email');
        maintenanceEmailInput.value = '';


        while (maintenanceEmailContainer.childElementCount > 1) {
            maintenanceEmailContainer.removeChild(maintenanceEmailContainer.lastChild);
        }



        for (let i = 0; i < emails.length; i++) {

            let email = emails[i];

            if (i === 0) {
                maintenanceEmailInput.value = email;
            } else {
                const emailInputGroup = document.createElement('div');
                emailInputGroup.classList.add('d-flex', 'align-items-center', 'mt-2');
                emailInputGroup.innerHTML = `
          <span class="fs_14 fw_6 me-2">Maintenance Department Email:</span>
          <input type="email" class="form-control" value="${email}" placeholder="Enter Maintenance Department CC Email">
          <button type="button" class="btn btn-sm btn-danger remove-email"><i class="bi bi-trash"></i></button>
      `;
                maintenanceEmailContainer.appendChild(emailInputGroup);

                emailInputGroup.querySelector('.remove-email').addEventListener('click', function () {
                    emailInputGroup.remove();
                });
            }
        }
        // maintenanceEmail.value = email ? email : '';
    });

    function hideModal() {
        window.location.reload();
    }
    window.addEventListener('success_modal', event => {

        jQuery('#success-modal').modal('show');
        setTimeout(hideModal, 3000);
    })
})();



function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode != 46 && charCode > 31 &&
        (charCode < 48 || charCode > 57))
        return false;
    return true;
}

function formatNumber(input) {
    let value = input.value.replace(/,/g, '').replace('0.00', '0.00$');

    if (!isNaN(value) && value !== '') {
        let parts = value.split('.');
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ',');
        input.value = parts.join('.');
    } else {
        input.value = '';
    }
}

