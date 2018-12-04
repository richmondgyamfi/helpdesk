

<script type="text/javascript">
// 	jQuery(document).ready(function($) {
//     $(".clickable-row").click(function() {
//         window.location = $(this).data("href");
//     });
// });

    $(document).ready(function(){
        $('#topic').click(function(){
            var topicID = $(this).val();

            $.ajax({
                url: 'message.php',
                method: 'POST',
                data: {topicID : topicID},
                success: function(data){
                    window.alert(topicID);
                    $('#child').html(data);
                },
                error: function(){
                    alert("something went wrong.")
                }
            });
        });
    });

        // $("form#form1").submit(function(){
        //     var data = $(this).serialize();
        //     $.ajax({
        //         url: "php/include.php",
        //         method: "post",
        //         data: data,
        //         success : function(){
        //             jQuery('body').append(data);
        //         },
        //         error : function(){
        //             alert('something went wrong')
        //         }
        //     });
        //     return false;
        // });
</script>

<!-- Optional JavaScript -->
    <!-- JavaScript Dependencies: jQuery, Popper.js, Bootstrap JS, Shards JS -->
    <script src="js/jquery.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="js/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/shards.min.js"></script>
  </body>
</html>