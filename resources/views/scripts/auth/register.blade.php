<script type="text/javascript">
    let elements = {
        step: document.querySelector('#kt_stepper_example_basic'),
        birthdate: document.querySelector('#birthdate'),
        income: document.querySelector('[name=revenue]'),
        pro_activity: document.querySelector('[name=pro_activity]'),
        open_activity: document.querySelector('#open_activity'),
        plan: document.querySelectorAll('[name=plan]'),
        form: {
            civility: document.querySelector('[name=civility]'),
            name: document.querySelector('[name=name]'),
            martialname: document.querySelector('[name=martialname]'),
            birthname: document.querySelector('[name=birthname]'),
            email: document.querySelector('[name=email]'),
            phone: document.querySelector('[name=phone]'),
            address: document.querySelector('[name=address]'),
            postal: document.querySelector('[name=postal]'),
            city: document.querySelector('[name=city]'),
            fiscal_country: document.querySelector('[name=fiscal_country]'),
        },
        debit_type: document.querySelectorAll('[name=debit_type]')
    }
    let stepper = new KTStepper(elements.step);

    let showDomainActivity = (value) => {
        if(value === true) {
            elements.open_activity.classList.remove('d-none')
        } else {
            elements.open_activity.classList.add('d-none')
        }
    }

    let showOfferGoldStep = (value) => {
        if(value == 'gold') {
            $(".offer_gold").removeClass('d-none')
        } else {
            $(".offer_gold").addClass('d-none')
        }
    }

    // Handle next step
    stepper.on("kt.stepper.next", function (stepper) {
        stepper.goNext(); // go next step
        if(stepper.getCurrentStepIndex() == 7) {

            $.ajax({
                url: '/api/simulate/facility',
                data: {"income": elements.income.value},
                success: data => {
                    if(elements.income.value <= 1000) {
                        $("#total_income").html(new Intl.NumberFormat('fr-FR', {style: 'currency', currency: 'EUR'}).format(elements.income.value))
                        $("#credit_facility_amount").addClass('text-danger').removeClass('text-success').html("0,00 €");
                        $("[name='accept_facility']").attr('disabled', true)
                    } else {
                        $("#total_income").html(new Intl.NumberFormat('fr-FR', {style: 'currency', currency: 'EUR'}).format(elements.income.value))
                        $("#credit_facility_amount").html(data);
                    }
                }
            })
        }
        if(stepper.getCurrentStepIndex() == 8) {
            elements.plan.forEach(p => {
                if(p.checked) {
                    if(p.value === 'gold') {
                        $(".offer_silver").addClass('d-none')
                        $(".offer_gold").removeClass('d-none')
                    } else {
                        $(".offer_silver").removeClass('d-none')
                        $(".offer_gold").addClass('d-none')
                    }
                }
            })
        }
        if(stepper.getCurrentStepIndex() == 9) {
            let plan;
            elements.plan.forEach(p => {
                if(p.checked) {
                    if(p.value === 'gold') {
                        plan = p.value
                    }
                }
            })

            let debit_type;
            elements.debit_type.forEach(debit => {
                if(debit.checked) {
                    if(debit.value === 'immediat') {
                        debit_type = 'immediat'
                    } else {
                        debit_type = 'differ'
                    }
                }
            })
            $.ajax({
                url: '/api/simulate/info_subscription',
                data: {"plan": plan, "debit_type": debit_type, "income": elements.income.value},
                success: data => {
                    console.log(data)
                    // Info Perso
                    $("#field_civility").html(elements.form.civility.value)
                    $("#field_name").html(elements.form.name.value)
                    $("#field_martial").html(elements.form.martialname.value)
                    $("#field_birthname").html(elements.form.birthname.value)
                    $("#field_email").html(elements.form.email.value)
                    $("#field_phone").html(elements.form.phone.value)
                    $("#field_address").html(`${elements.form.address.value},${elements.form.postal.value} ${elements.form.city.value}, ${elements.form.fiscal_country.value}`)

                    // Offre
                    $("[name='contract_durability']").val(data.contract_durability)
                    $("[name='contract_effect']").val(data.contract_effect)
                    $("[name='contract_retract']").val(data.contract_retract)
                    $("[name='contract_switch_offer']").val(data.contract_switch_offer)

                    // Carte
                    $("#card_img").html(`<div class="symbol-label" style="background-image: url('/storage/card_${data.card.type}.png')"></div>`)
                    $("#card_label").html(data.card.label)
                    $("#card_sub").html(data.card.sub)
                    $("[name='credit_card_limit_payment']").val(new Intl.NumberFormat('fr', {style: 'currency', currency: 'EUR'}).format(data.card.plafond.payment.amount))
                    $("[name='credit_card_limit_withdraw']").val(new Intl.NumberFormat('fr', {style: 'currency', currency: 'EUR'}).format(data.card.plafond.withdraw.amount))

                    // Facilité de caisse
                    $("#facility_amount").html(data.facility.amount)
                    $("#facility_nominal_tax").html(data.facility.nominal_tax)
                    $("#facility_taeg").html(data.facility.taeg)
                }
            })
        }
        if(stepper.getCurrentStepIndex() == 10) {
            $.ajax({
                url: '/api/oauth/token',
                success: () => {

                },
                error: err => {
                    console.error(err)
                }
            })

            $("#otp_code").on('blur', e => {
                e.preventDefault()
                $.ajax({
                    url: '/api/oauth/verify',
                    method: 'POST',
                    data: {"code_auth_token": e.target.val()},
                    success: () => {

                    },
                    error: data => {
                        $("#otp_code").addClass('is-invalid')
                        $("#otp_error_text").html(data.error)
                    }
                })
            })
        }
    });

    // Handle previous step
    stepper.on("kt.stepper.previous", function (stepper) {
        stepper.goPrevious(); // go previous step
    });

    elements.birthdate.flatpickr({
        "locale": "fr"
    });
    stepper.on("kt.stepper.click", function (stepper) {
        stepper.goTo(stepper.getClickedStepIndex()); // go to clicked step
    });
</script>
