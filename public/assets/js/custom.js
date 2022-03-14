$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(".logout").on('click', e => {
    e.preventDefault()
    $.ajax({
        url: '/logout',
        method: 'post',
        success: () => {
            window.location.href='/'
        },
        error: err => {
            console.error(err)
        }
    })
})
