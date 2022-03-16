<script type="text/javascript">
    let elements = {
        modal_add: document.querySelector('#add'),
        form_add: $("#form_add"),
        form_add_btn: document.querySelector('[data-kt-modal-action-type="submit"]'),
        cardContent: document.querySelector('.cardContent')
    }

    let getBeneficiaire = (beneficiaire) => {
        console.log(beneficiaire)
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
                toastr.success(`Le bénéficiaire ${data.name} à été ajouté`)
                setTimeout(() => {
                    window.location.reload()
                }, 1300)
            },
            error: () => {
                toastr.error("Une erreur à eu lieu lors de la création du bénéficiaire.Veuillez contacter le support.", "Erreur Serveur X-MYS")
            }
        })
    })
</script>
