

<!-- Optional JavaScript -->
    <!-- JavaScript Dependencies: jQuery, Popper.js, Bootstrap JS, Shards JS -->
    <script src="../js/jquery.min.js"></script>
    <!-- <script src="js/popper.min.js"></script> -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/shards.min.js"></script>

    <script type="text/javascript">
         $(document).ready(function () {
             $('#sidebarCollapse').on('click', function () {
                 $('#sidebar').toggleClass('active');
                 $(this).toggleClass('active');
             });
         });


        //  $(document).ready(function(){
        //     $("a").click(function(){
        //         $("p").slideToggle("slow");
        //     });
        // });

        
        jQuery(document).ready(function($) {
            $(".clickable-row").click(function() {
                window.location = $(this).data("href");
            });
        });
     </script>
   <!--  <script type="text/javascript">
    	$("form#form1").submit(function(){
    		var data = $(this).serialize();
    		$.ajax({
    			url: "php/include.php",
    			method: "post",
    			data: data,
    			success : function(){
    				jQuery('body').append(data);
    			},
                error : function(){
                    alert('something went wrong')
                }
    		});
    		return false;
    	});
    </script> -->
  </body>
</html>