<html>  
 <head>  
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no">  
  <meta charset="utf-8">  
  <title>Image Resize - PHP & Ajax</title>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
 </head>  
 <body>  
  <div class="genel">  
   <h3>Image Resize - PHP & Ajax</h3>
   <form method="post" id="upload_image" enctype="multipart/form-data">
    <label>Select File <br />  
    <input type="file" name="image_upload" id="image_upload" /> <br>
    <label>Width :
    <input type="text" name="width" id="width" /> <br>
    <label> Height :	
    <input type="text" name="height" id="height" /> <br>  
    <input type="submit" name="upload" id="upload" class="btn btn-info" value="Upload" />
   </form>
   <div id="yenile"></div>
  </div>   </body>  </html>  
<script>  
$(document).ready(function(){   
    $('#upload_image').on('submit', function(event){
     event.preventDefault();
     $.ajax({
      url:"upload.php",
      method:"POST",
      data:new FormData(this),
      contentType:false,
      cache:false,
      processData:false,
      success:function(data){
       $('#yenile').html(data);
      } }) });  });  
</script>
