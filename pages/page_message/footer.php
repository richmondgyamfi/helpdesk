

<!-- Optional JavaScript -->
    <!-- JavaScript Dependencies: jQuery, Popper.js, Bootstrap JS, Shards JS -->
    <script src="../../js/jquery.min.js"></script>
    <!-- <script src="js/popper.min.js"></script> -->
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/shards.min.js"></script>

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
</div>
    <div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Type a new message with a Topic</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form class="form" method="POST" id="form1">
            <label for="topic">Topic: </label>
            <input type="text" name="topic" id="topic" class="form-control" required="required">
            <label for="message">Message:</label>
            <textarea class="form-control" style="margin-bottom: 10px;" rows="8" name="message" placeholder="Typle message here..... " id="message"></textarea>
            <button type="button" class="btn btn-success" id="mes_submit" name="mes_submit">Submit</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </form>
      </div>

      <!-- Modal footer -->
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div> -->

    </div>
  </div> 
</div>
<?php 
        // $sql1 = "SELECT DISTINCT subject FROM chatdb WHERE studid = 'ps/csc/14' ORDER BY activity DESC";
        //   $row = mysqli_query($dbcon, $sql1);
        //   $message_topic = mysqli_fetch_assoc($row);
?>
<script type="text/javascript">
    $(document).ready(function(){
        $('#mes_submit').click(function(){
            var topic = $('#topic').val();
            var message = $('#message').val();

            if (topic != '' && message != '') {
                $.ajax({
                    url:"res_message.php?id=<?php echo $_GET['id'];?>",
                    method:"POST",
                    data:{topic:topic, message:message},
                    success:function(data){
                        alert("Message sent")
                        $('form').trigger('reset');
                        $('#myModal').modal('hide');
                        location.reload();
                    }
                });
            }
            else{
                alert("Both field are required")
            }
        });
    });
</script>
  </body>


</html>
