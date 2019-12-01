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

            function dropdown() {
                $("#kinds").change(function(){
 
                // get the selected user's id
                var kind_key = $(this).find(":selected").val();

                console.log(kind_key);

                // load it in the userInfo div above
                $('#list').load('index.php?controller=game&kind_key=' + kind_key);

                });
            }

            

            $("#img_input").change(function() {
                readURL(this);
            });
            
            $("#btn-trailer").click(function() {
                // console.log($("#input-trailer").val());
                url = 'https://www.youtube.com/embed/' + $("#input-trailer").val().split('=')[1]
                console.log(url);
                $("#trailer").attr('src', url) ;
            });
            

            dropdown();



            $("#btn-model-register").click(function () {
                $('#login-modal').modal('hide');
            });
            
            
        })



        
        

</script>