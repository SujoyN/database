  <div class="slidelogin templete clear">    
       <div class="slidersection clear">

                    <div class="w3-content w3-section" style="max-width:100%">
                      <img class="mySlides" src="images/1.jpg" style="width:100%; height:400px">
                      <img class="mySlides" src="images/2.jpg" style="width:100%; height:400px">
                      <img class="mySlides" src="images/3.jpg" style="width:100%; height:400px">
                      <img class="mySlides" src="images/4.jpg" style="width:100%; height:400px">
                      <img class="mySlides" src="images/5.jpg" style="width:100%; height:400px">
                      <img class="mySlides" src="images/6.jpg" style="width:100%; height:400px">
                      <img class="mySlides" src="images/7.jpg" style="width:100%; height:400px">
                      <img class="mySlides" src="images/8.jpg" style="width:100%; height:400px">
                    </div>

                    <script>
                    var myIndex = 0;
                    carousel();

                    function carousel() {
                        var i;
                        var x = document.getElementsByClassName("mySlides");
                        for (i = 0; i < x.length; i++) {
                           x[i].style.display = "none";  
                        }
                        myIndex++;
                        if (myIndex > x.length) {myIndex = 1}    
                        x[myIndex-1].style.display = "block";  
                        setTimeout(carousel, 2000); // Change image every 2 seconds
                    }
                    </script>

                      </div>
                       <div class="login templete clear">

                           <a href="donerlogin.html">
                               
                            <div class="samelogin">


                                    <img src="images/social/pic1.jpg">
                                    <h2>USER SIGNUP</h2>

                            </div>


                           </a>
                            

                            <div class="samelogin">


                                    <img src="images/social/pic2.jpg">
                                    <h2>DONER SIGNUP</h2>

                            </div>

                            <div class="samelogin">


                                    <img src="images/social/pic3.jpg">
                                    <h2>DOCTOR SIGNUP</h2>

                            </div>
                        

                       </div>


  </div>