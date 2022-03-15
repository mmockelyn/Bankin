<script type="text/javascript">
    let elements = {
        modal_add: document.querySelector('#add'),
        form_add: $("#form_add"),
        form_add_btn: document.querySelector('[data-kt-modal-action-type="submit"]'),
    }

    elements.form_add.on('submit', (e) => {
        e.preventDefault()
        let form = elements.form_add
        let url = form.attr('action')
        let data = form.serializeArray()
        let btn = form.find('.btn-primary')

        btn.attr('data-kt-indicator', true)

        $.ajax({
            url: url,
            method: 'POST',
            data: data,
            success: data => {
                console.log(data)
                elements.modal_add.hide()
                form[0].reset()
            },
            error: data => {
                toastr.error(data.responseJSON.message)
            }
        })
    })
</script>
