<script>
    function handleAddProduct(id) {
        $.ajax({
            url:'{{route('shop.add_product')}}',
            type: 'POST',
            data: {
                _token: '{{csrf_token()}}',
                id: id,
            },
            success: function (response){
                if (response){
                    showSuccessToast();
                }
            },
            error: function (error){
                console.log(error)
            }
        });
    }
</script>
