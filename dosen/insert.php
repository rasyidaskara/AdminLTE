<div class="container-fluid">
    <!--begin::Row-->
    <div class="row g-4">
        <!--begin::Col-->
        <div class="col-12">
            <div class="callout callout-info">
                For detailed documentation of Form visit
                <a href="https://getbootstrap.com/docs/5.3/forms/overview/" target="_blank" rel="noopener noreferrer" class="callout-link">
                    Bootstrap Form
                </a>
            </div>
        </div>
        <!--end::Col-->

        <!--begin::Col-->
        <div class="col-md-12">
            <!--begin::Form Validation-->
            <div class="card card-info card-outline mb-4">
                <!--begin::Header-->
                <div class="card-header">
                    <div class="card-title">Form Input Data Dosen</div>
                </div>
                <!--end::Header-->
                <!--begin::Form-->
                <form class="needs-validation" novalidate="" method="post"
                    action="index.php?page=dosen_tangkap">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Row-->
                        <div class="row g-3">
                            <!--begin::Col-->
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">NIDN
                                    <span class="required-indicator sr-only"> (required)</span>
                                </label>
                                <input type="text" class="form-control" id="validationCustom01"
                                    value="" required="true" name="nidn" id="nidn">
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6">
                                <label for="validationCustom02" class="form-label">Nama Dosen
                                    <span class="required-indicator sr-only"> (required)</span>
                                </label>
                                <input type="text" class="form-control" id="validationCustom02"
                                    required="" name="nama" id="nama">
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6">
                                <label for="validationCustom04" class="form-label">Gender<span class="required-indicator sr-only"> (required)</span></label>
                                <select class="form-select" id="validationCustom04" required=""
                                    name="gender">
                                    <option selected="" disabled="" value="">Pilih...</option>
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                                <div class="invalid-feedback">Please select a valid state.</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6">
                                <label for="validationCustom05" class="form-label">No.Telp/HP<span class="required-indicator sr-only"> (required)</span></label>
                                <input type="text" class="form-control" id="validationCustom05"
                                    required="" name="no_hp" id="no_hp">
                                <div class="invalid-feedback">Please provide a valid zip.</div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                        <button class="btn btn-info" type="submit">Submit form</button>
                    </div>
                    <!--end::Footer-->
                </form>
                <!--end::Form-->
                <!--begin::JavaScript-->
                <script>
                    // Example starter JavaScript for disabling form submissions if there are invalid fields
                    (() => {
                        'use strict';

                        // Fetch all the forms we want to apply custom Bootstrap validation styles to
                        const forms = document.querySelectorAll('.needs-validation');

                        // Loop over them and prevent submission
                        Array.from(forms).forEach((form) => {
                            form.addEventListener(
                                'submit',
                                (event) => {
                                    if (!form.checkValidity()) {
                                        event.preventDefault();
                                        event.stopPropagation();
                                    }

                                    form.classList.add('was-validated');
                                },
                                false,
                            );
                        });
                    })();
                </script>
                <!--end::JavaScript-->
            </div>
            <!--end::Form Validation-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
</div>