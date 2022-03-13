<!--begin::Main wrapper-->
<div class="fv-row mb-10" data-kt-password-meter="true">
    <!--begin::Wrapper-->
    <div class="mb-1">
        <!--begin::Label-->
        <label class="form-label fw-bold fs-6 mb-2">
            Mot de passe
        </label>
        <!--end::Label-->

        <!--begin::Input wrapper-->
        <div class="position-relative mb-3">
            <input class="form-control form-control-lg form-control-solid"
                   type="password" placeholder="" name="password" autocomplete="off" />

            <!--begin::Visibility toggle-->
            <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                  data-kt-password-meter-control="visibility">
                <i class="bi bi-eye-slash fs-2"></i>

                <i class="bi bi-eye fs-2 d-none"></i>
            </span>
            <!--end::Visibility toggle-->
        </div>
        <!--end::Input wrapper-->

        <!--begin::Highlight meter-->
        <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
        </div>
        <!--end::Highlight meter-->
    </div>
    <!--end::Wrapper-->

    <!--begin::Hint-->
    <div class="text-muted">
        Utilisez 8 caractères ou plus avec un mélange de lettres, de chiffres et de symboles.
    </div>
    <!--end::Hint-->
</div>
<!--end::Main wrapper-->
