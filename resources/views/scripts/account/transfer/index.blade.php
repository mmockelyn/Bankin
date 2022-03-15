<script type="text/javascript">
    $("[name=amount]").on('blur', e => {
        window.location.href='/account/transfer/create?amount='+$("[name=amount]").val()
    })
</script>
