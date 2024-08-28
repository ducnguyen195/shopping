<script>

        function realQuantity() {
            $.ajax({
                url:'{{route('shop.quantity_real')}}',
                type:'GET',
                success: function (response){
                    console.log(response.quantityCart)
                },
                error: function (error) {

                }
            });
        }
</script>
