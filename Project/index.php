<?php include 'inc/header.php'; ?>
<?php include 'inc/navsection.php'; ?>
<?php include 'inc/slider.php'; ?>

<div class="contentsection templete ">

               <div class="row">
                 
                     <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                                             
                            <div class="maincontent ">
                            <?php

                                 $query="select * from post_tbl";
                                 $post=$db->select($query);
                                 if($post)
                                 {
                                      while($result=$post->fetch_assoc()){

                            ?>

                            <div class="samepost">
                                 <div class="title">
                                   
                                       <h1><a href="post.php?id=<?php echo $result['post_id']?>;"><?php echo $result['post_title'];?></a></h1>
                                       <h4><?php echo $fm->formatDate($result['post_date']);?> By<a href="#"><?php echo $result['post_name']; ?></a></h4>

                                 </div>

                                 <?php echo $result['post_body']; ?>
                                
                                <img src="images/<?php echo $result['post_pic']; ?>"align="middle" onerror="this.style.display='none'">                               

                            </div>

                            <?php } }?>

                         </div>
                     </div>



                     <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                       
                              <?php include 'inc/sidebar.php'; ?>
                     </div>

               </div>   
                                
                      
       </div>

     <?php include 'inc/footer.php'; ?>

</body>
</html>