<script type="text/javascript">
        $(document).ready(function() {
            function readURL(input) {

                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                    $('#img').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                    console.log("hello world");
                }
            }


            $("#img_input").change(function() {
                readURL(this);
            });
            
            $("#btn-trailer").click(function() {
                // console.log($("#input-trailer").val());
                url = 'https://www.youtube.com/embed/' + $("#movie-trailer").val().split('?')[1].substring(2);
                // $("#movie-trailer").val().split('?')[1].substring(2);
                console.log(url);
                $("#trailer").attr('src', url) ;
                $("#movie-trailer").val(url);
            });
            

            $("#btn-model-register").click(function () {
                $('#login-modal').modal('hide');
            });
            
            
        })



        
        

</script>