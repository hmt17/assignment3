<?php
     include 'ParentClass.php';
     include 'ChildClass.php';
  
     $superCat = new ParentClass("Flash", 94);
     $captainUnderpants = new ChildClass("Matty Digital", 95);
  ?>
  
  <!doctype html>
  <html lang="en">
     <head>
         <meta charset="UTF-8">
         <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
         <meta http-equiv="X-UA-Compatible" content="ie=edge">
         <link rel="stylesheet" href="assignment3.css">
         
     </head>
     <body id="info">
         <h1>
		    SuperCat versus Captain Underpants! Who will WIN?!
         </h1>
         <section>
             <h4>
                 In a world where the two power hosues collide, WHO WILL PREVAIL CHAMPION?
             </h4>
             <div class="imgContainer">
				<img src="images/supercat.jpg" style="width:375px;height:275px;">
			 </div>
			 <h4>
			 OR
             </h4>
             <div class="imgContainer">
				<img src="images/cptunderpants.png">
			 </div>

             <p> so who will win? </p>
             <h4>
				Matty Digital <?= $captainUnderpants->__toString(); ?>
				<?= $superCat->__toString(); ?> 
             </h4> 
           

         </section>
     </body>
 </html>