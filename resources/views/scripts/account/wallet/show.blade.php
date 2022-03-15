<script type="text/javascript">
    let elements = {
        transaction: document.querySelectorAll('.showTransaction'),
        drawer: document.querySelector('#kt_drawer_example_basic'),
        btnShowRib: document.querySelector('.showRib'),
        modalRib: document.querySelector('#modalShowRib'),
        modalShowRib: new bootstrap.Modal(document.querySelector('#modalShowRib')),
    }
    var processs = function(search) {
        var timeout = setTimeout(function() {
            var number = KTUtil.getRandomInt(1, 6);

            // Hide recently viewed
            suggestionsElement.classList.add("d-none");

            if (number === 3) {
                // Hide results
                resultsElement.classList.add("d-none");
                // Show empty message
                emptyElement.classList.remove("d-none");
            } else {
                // Show results
                resultsElement.classList.remove("d-none");
                // Hide empty message
                emptyElement.classList.add("d-none");
            }

            // Complete search
            search.complete();
        }, 1500);
    }

    var clear = function(search) {
        // Show recently viewed
        suggestionsElement.classList.remove("d-none");
        // Hide results
        resultsElement.classList.add("d-none");
        // Hide empty message
        emptyElement.classList.add("d-none");
    }

    // Input handler
    const handleInput = () => {
        // Select input field
        const inputField = element.querySelector("[data-kt-search-element='input']");

        // Handle keyboard press event
        inputField.addEventListener("keydown", e => {
            // Only apply action to Enter key press
            if(e.key === "Enter"){
                e.preventDefault(); // Stop form from submitting
            }
        });
    }

    // Elements
    element = document.querySelector('#kt_docs_search_handler_basic');


    wrapperElement = element.querySelector("[data-kt-search-element='wrapper']");
    suggestionsElement = element.querySelector("[data-kt-search-element='suggestions']");
    resultsElement = element.querySelector("[data-kt-search-element='results']");
    emptyElement = element.querySelector("[data-kt-search-element='empty']");

    // Initialize search handler
    searchObject = new KTSearch(element);

    // Search handler
    searchObject.on("kt.search.process", processs);

    // Clear handler
    searchObject.on("kt.search.clear", clear);

    // Handle select
    KTUtil.on(element, "[data-kt-search-element='customer']", "click", function() {
        //modal.hide();
    });

    // Handle input enter keypress
    handleInput();

    elements.transaction.forEach(tr => {
        tr.addEventListener('click', e => {
            e.preventDefault()
            console.log(e.target.parentNode)

            $.ajax({
                url:'/api/transaction/'+e.target.parentNode.dataset.transaction,
                success: data => {
                    let type = {
                        'deposit': {"text": "Dépot"},
                        'withdraw': {"text": "Retrait"},
                        'payment': {"text": "Carte Bancaire"},
                        'transfer': {"text": "Virement Bancaire"},
                        'sepa': {"text": "Prélèvement"},
                        'fee': {"text": "Frais Bancaire"},
                    }
                    console.log(data)
                    data.tr.amount > 0 ? elements.drawer.querySelector('.card-header').classList.add('bg-success') : elements.drawer.querySelector('.card-header').classList.add('bg-danger')
                    elements.drawer.querySelector('.textType').innerHTML = type[data.tr.type].text
                    elements.drawer.querySelector('.transactionName').innerHTML = data.tr.meta.designation
                    elements.drawer.querySelector('.transactionLibelle').innerHTML = `${data.tr.meta.designation}`
                    elements.drawer.querySelector('.transactionDate').innerHTML = data.tr.amount > 0 ? `Crédité le ${data.date}` : `Crédité le ${data.date}`
                    elements.drawer.querySelector('.transactionDateOps').innerHTML = data.date
                    elements.drawer.querySelector('.transactionAmount').innerHTML = data.tr.amount > 0 ? '+ '+new Intl.NumberFormat('fr-FR', {style: 'currency', currency: 'EUR'}).format(data.tr.amount) : '- '+new Intl.NumberFormat('fr-FR', {style: 'currency', currency: 'EUR'}).format(data.tr.amount)
                    elements.drawer.querySelector('.transactionReference').innerHTML = data.tr.uuid
                    let drawer = new KTDrawer(elements.drawer, {overlay: true})
                    drawer.toggle()
                    drawer.on("kt.drawer.after.hidden", function() {
                        drawer.destroy()
                    });
                }
            })
        })
    })
    elements.btnShowRib.addEventListener('click', e => {
        e.preventDefault()
        $.ajax({
            url: '/account/info',
            success: data => {
                console.log(data)

                let type_account = {
                    "INDIVIDUAL": {"text": "Compte Individuel"},
                    "JOIN": {"text": "Compte Join"},
                    "PROFESSIONNAL": {"text": "Compte Pro"},
                }

                elements.modalRib.querySelector('#textTypeAccount').innerHTML = type_account[data.civility.type_account].text
                elements.modalRib.querySelector('#textInfoCompte').innerHTML = `${data.ibans[0].number_account} ${data.agence.nom_agence} - ${data.civility.civility}. ${data.civility.birthname} ${data.civility.name} `
                elements.modalRib.querySelector('#textIban').innerHTML = `${data.ibans[0].iban}`
                elements.modalRib.querySelector('#textBic').innerHTML = `${data.agence.bic}`
                elements.modalRib.querySelector('#textCodeBanque').innerHTML = `${data.ibans[0].code_banque}`
                elements.modalRib.querySelector('#textCodeGuichet').innerHTML = `${data.ibans[0].code_guichet}`
                elements.modalRib.querySelector('#textNumCpt').innerHTML = `${data.ibans[0].number_account}`
                elements.modalRib.querySelector('#textKey').innerHTML = `${data.ibans[0].key_rib}`
                elements.modalRib.querySelector('#textAgenceName').innerHTML = `${data.agence.nom_agence}`


                elements.modalShowRib.show()
            }
        })
    })
</script>
