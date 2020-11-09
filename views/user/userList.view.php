<?php
  require '../layouts/header.php';
  require '../layouts/navigationBar.php';
?>

  <div class="container">

    <!-- Books Display using data base place this in model section-->
    <div class="row" style="margin:1% 0;">


         <!------------- Sample Books --------------->

         <div class="col-lg-3 col-md-4 col-sm-6 box" >
           <div class="user-polaroid" onclick="window.location.href ='details-page.php'">
             <img class="user-image" src="../../Book-images/adminImage.svg" alt="Book-Image" style="background-color:#f4f4f4;">
             <div class="image-text">
               <h6 style="padding-top:5px;">User Name(abc@gmail.com)</h6>
               <sub>Admin</sub>
             </div>
           </div>
         </div>

         <div class="col-lg-3 col-md-4 col-sm-6 box" >
           <div class="user-polaroid" onclick="window.location.href ='details-page.php'">
             <img class="user-image" src="../../Book-images/adminImage.svg" alt="Book-Image" style="background-color:#f4f4f4;">
             <div class="image-text">
               <h6 style="padding-top:5px;">User Name(abc@gmail.com)</h6>
               <sub>Admin</sub>
             </div>
           </div>
         </div>

         <div class="col-lg-3 col-md-4 col-sm-6 box" >
           <div class="user-polaroid" onclick="window.location.href ='details-page.php'">
             <img class="user-image" src="../../Book-images/readerImage.svg" alt="Book-Image" style="background-color: #f4f4f4 ;">
             <div class="image-text">
               <h6 style="padding-top:5px;">User Name(abc@gmail.com)</h6>
               <sub>Reader</sub>
             </div>
           </div>
         </div>
    </div>
  </div>
<?php require '../layouts/footer.php'; ?>
