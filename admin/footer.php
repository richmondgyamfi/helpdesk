

<script type="text/javascript">
// 	jQuery(document).ready(function($) {
//     $(".clickable-row").click(function() {
//         window.location = $(this).data("href");
//     }); 
// });
    
         $(document).ready(function () {
             $('#sidebarCollapse').on('click', function () {
                 $('#sidebar').toggleClass('active');
                 $(this).toggleClass('active');
             });
         });


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
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/shards.min.js"></script>
  </body>
</html>