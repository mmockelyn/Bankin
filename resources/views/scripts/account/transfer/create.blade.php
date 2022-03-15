<script type="text/javascript">
    let elements = {
        transfer_type: document.querySelector('[name=transfer_type]'),
        differed_prog: document.querySelector('#differed_prog'),
        permanente_prog: document.querySelector('#permanente_prog'),
    }

    let optionsFormat = (item) => {
        if (!item.id) {
            return item.text;
        }

        let span = document.createElement('div')
        span.classList.add('d-flex')
        span.classList.add('flex-row')
        span.classList.add('justify-content-between')

        let template = ``;

        let banque = item.element.dataset.bank
        let holder = item.element.dataset.holder
        let account = item.element.dataset.account
        let balance = item.element.dataset.balance

        template += `
        <div>
            <i class="fas fa-circle text-primary me-2"></i> ${banque}
            ${holder}
        </div>
        <div class="">
            ${account}
        </div>
        <div class="text-end">
            ${balance}
        </div>
        `;

        span.innerHTML = template;

        console.log(template)
        return $(span)
    }

    let changeType = (type) => {

        if(type.value == 0) {
            elements.differed_prog.classList.add('d-none')
            elements.permanente_prog.classList.add('d-none')
        } else if(type.value == 1) {
            elements.differed_prog.classList.remove('d-none')
            elements.permanente_prog.classList.add('d-none')
        } else {
            elements.differed_prog.classList.add('d-none')
            elements.permanente_prog.classList.remove('d-none')
        }

    }

    $("#select_outgoing").select2({
        templateSelection: optionsFormat,
        templateResult: optionsFormat
    })

    $(".date").flatpickr();


</script>
