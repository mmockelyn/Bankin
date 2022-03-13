<script type="text/javascript">
    let elements = {
        step: document.querySelector('#kt_stepper_example_basic'),
        birthdate: document.querySelector('#birthdate'),
    }
    let stepper = new KTStepper(elements.step);

    // Handle next step
    stepper.on("kt.stepper.next", function (stepper) {
        stepper.goNext(); // go next step
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
