
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.2.min.js"></script>
   <!--Ajax set up-->
    <script>
     $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    </script>

     <script>
     $(document).ready(function(){
        $(document).on('click','add_product',function(e){
            e.preventDefault();
            let name=$('#name').val();
            let price=$('#price').val();
            console.log(name+price);
            $ajax({
                url:{{route('add.product')}},
                method:'post',
            });
        
        });
     });
    </script>