<?php
require_once('includes/__header.php');
?>
    <!-- ==========================header ends==================== -->
    <div class="main-container row">
        <div class="breaking-news col-md-8 col-sm-12">
            <img src="./assets/trending.svg" alt="" srcset="">
            <hr style="margin:0">
            <div class="trending-news">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <?php
                              $sql="Select title,substr(body,0,25) as 'body',photo_path  from news order by id desc limit 3;";
                              $result=mysqli_query($conn,$sql);
                              $i=0;
                              echo '<div class="carousel-inner">';
                              while ($row = $result->fetch_assoc()) { 
                                if($i===0){
                                  echo '<div class="carousel-item active">';
                                  $i++;
                                }
                                else{
                                  echo '<div class="carousel-item">';
                                }
                                echo '<img src="admin/uploads/'.$row['photo_path'].'" class="d-block w-100" alt="...">';
                                echo '<div class="carousel-caption d-none d-md-block">';
                                echo '<h5>'.$row['title'].'</h5>';
                                echo '<p>'.$row['body'].'</p>';
                                echo  '</div></div>';
                              }
                  
                    ?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div>
        </div>
        <div class="popular-news col-md-4 col-sm-12">
            <img src="./assets/speaker.svg" alt="" srcset="">   
            <hr style="margin:0"> 
            <div class="announcement">
              <?php
                              $sql="Select title  from events order by id desc;";
                              $result=mysqli_query($conn,$sql);
                            
                              
                              while ($row = $result->fetch_assoc()) { 
                                echo '<div class="news">
                    <div class="news-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36.884" height="24.589" viewBox="0 0 36.884 24.589">
                            <g id="Group_35" data-name="Group 35" transform="translate(-3106 -566.578)">
                              <path id="news" d="M35.347,5.889H5.635A1.537,1.537,0,0,0,4.1,7.426v.512H1.537A1.537,1.537,0,0,0,0,9.475V26.892a3.586,3.586,0,0,0,3.586,3.586H33.81A3.074,3.074,0,0,0,36.884,27.4V7.426A1.537,1.537,0,0,0,35.347,5.889ZM3.586,27.4a.512.512,0,0,1-.512-.512V11.012H4.1V26.892A.512.512,0,0,1,3.586,27.4ZM18.7,26.38H8.965a.768.768,0,0,1-.768-.768V25.1a.768.768,0,0,1,.768-.768H18.7a.768.768,0,0,1,.768.768v.512A.768.768,0,0,1,18.7,26.38Zm13.319,0H22.284a.768.768,0,0,1-.768-.768V25.1a.768.768,0,0,1,.768-.768h9.733a.768.768,0,0,1,.768.768v.512A.768.768,0,0,1,32.017,26.38ZM18.7,20.233H8.965a.768.768,0,0,1-.768-.768v-.512a.768.768,0,0,1,.768-.768H18.7a.768.768,0,0,1,.768.768v.512A.768.768,0,0,1,18.7,20.233Zm13.319,0H22.284a.768.768,0,0,1-.768-.768v-.512a.768.768,0,0,1,.768-.768h9.733a.768.768,0,0,1,.768.768v.512A.768.768,0,0,1,32.017,20.233Zm0-6.147H8.965a.768.768,0,0,1-.768-.768V10.755a.768.768,0,0,1,.768-.768H32.017a.768.768,0,0,1,.768.768v2.561A.768.768,0,0,1,32.017,14.085Z" transform="translate(3106 560.689)" fill="#0B1C6E"/>
                            </g>
                          </svg>            
                          
                    </div>
                    <div class="news-headline">';
                                echo '<p>'.$row['title'].'
                    </div>

                </div>';
                              }
                  
                    ?>
                
                        



                </div>
            </div>

        </div>

    </div>

    <!-- =============main-container-ends==================== -->

    <div class="latest-news-container">
        <img src="./assets/latest.svg" alt="" srcset="">   
            <hr style="margin:0"> 
        <div class="latest-news">
            <a class="btn-floating" href="#multi-item-example" data-slide="prev"><img src="./assets/prev.svg" alt=""></a>
            <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
                 <!--Slides-->

                <div class="carousel-inner" role="listbox">
          
                  <!--First slide-->
                  <div class="carousel-item active">
          
                    <div class="row custom-carousel">
                      <div class="col-md-4 custom-carousel">
                        <div class="card mb-2">
                          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
                            alt="Card image cap">
                            <a href="">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                      card's content.</p>
                                    
                                  </div>
                            </a>
                        </div>
                      </div>
          
                      <div class="col-md-4 clearfix d-none d-md-block custom-carousel">
                        <div class="card mb-2">
                          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
                            alt="Card image cap">
                            <a href="">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                      card's content.</p>
                                    
                                  </div>
                            </a>
                        </div>
                      </div>
          
                      <div class="col-md-4 clearfix d-none d-md-block custom-carousel">
                        <div class="card mb-2">
                          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg"
                            alt="Card image cap">
                            <a href="">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                      card's content.</p>
                                    
                                  </div>
                            </a>
                        </div>
                      </div>
                    </div>
          
                  </div>
                  <!--/.First slide-->
          
                  <!--Second slide-->
                  <div class="carousel-item">
          
                    <div class="row">
                      <div class="col-md-4">
                        <div class="card mb-2">
                          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg"
                            alt="Card image cap">
                            <a href="">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                      card's content.</p>
                                    
                                  </div>
                            </a>
                        </div>
                      </div>
          
                      <div class="col-md-4 clearfix d-none d-md-block">
                        <div class="card mb-2">
                          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg"
                            alt="Card image cap">
                            <a href="">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                      card's content.</p>
                                    
                                  </div>
                            </a>
                        </div>
                      </div>
          
                      <div class="col-md-4 clearfix d-none d-md-block">
                        <div class="card mb-2">
                          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg"
                            alt="Card image cap">
                            <a href="">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                      card's content.</p>
                                    
                                  </div>
                            </a>
                        </div>
                      </div>
                    </div>
          
                  </div>
                  <!--/.Second slide-->
          
                  <!--Third slide-->
                  <div class="carousel-item">
          
                    <div class="row ">
                      <div class="col-md-4">
                        <div class="card mb-2" style="width:70%;">
                          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(53).jpg"
                            alt="Card image cap">
                            <a href="">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                      card's content.</p>
                                    
                                  </div>
                            </a>
                        </div>
                      </div>
          
                      <div class="col-md-4 clearfix d-none d-md-block">
                        <div class="card mb-2">
                          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(45).jpg"
                            alt="Card image cap">
                            <a href="">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                      card's content.</p>
                                    
                                  </div>
                            </a>
                        </div>
                      </div>
          
                      <div class="col-md-4 clearfix d-none d-md-block">
                        <div class="card mb-2">
                          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(51).jpg"
                            alt="Card image cap">
                            <a href="">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                      card's content.</p>
                                    
                                  </div>
                            </a>
                          
                        </div>
                      </div>
                    </div>
          
                  </div>
                  <!--/.Third slide-->
          
                </div>
                <!--/.Slides-->
           </div>
              <!--/.Carousel Wrapper-->
              
                 <a class="btn-floating" href="#multi-item-example" data-slide="next"><img src="./assets/next.svg" alt=""></a>
            
        </div>
    </div>


    <!-- =========================categorical news==================== -->
  <div class="categorical-news-container">
      <div class="head">
        <img src="./assets/hostel.svg" alt="">
        <a href=""><p>SEE MORE</p></a>
      </div>
      <hr style="margin:0"> 
      <div class="row">
          <div class="col-md-5 cat-img">
            <img src="./assets/hostel-main.png" alt="" class="img-fluid">
            <a href="">
                <div class="desc">
                    <p class=img-heading>Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
                    <p class="img-desc"> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident,</p>
                 
                </div>
            </a>
           
             </div>
          <div class="col-md-1">

          </div>
          <div class="col-md-6">
            <div class="row" style="margin-bottom: 5%; margin-top: 5%;">
                <div class="col sec-news">
                    <img src="./assets/globe.svg" class="img-fluid" alt="">
                    <a href="
                    "> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
                  </a>    </div>
                <div class="col sec-news">
                    <img src="./assets/globe.svg" alt="" class="img-fluid">
                    <a href="
                    "> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
                  </a>   </div>
            </div>
            <div class="row">
                <div class="col sec-news">
                    <img src="./assets/globe.svg" class="img-fluid"alt="">
                    <a href="
                    "> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
                  </a>   </div>
                <div class="col sec-news">
                    <img src="./assets/globe.svg" class="img-fluid"alt="">
                    <a href="
                    "> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
                  </a>    </div>
            </div>
          </div>
      </div>
      
  </div>


  <!-- =====academics============= -->
  <div class="categorical-news-container">
    <div class="head">
      <img src="./assets/academics.svg" alt="">
      <a href=""><p>SEE MORE</p></a>
    </div>
    <hr style="margin:0"> 
    <div class="row">
        <div class="col-md-5 cat-img">
          <img src="./assets/hostel-main.png" alt="" class="img-fluid">
          <a href="">
            <div class="desc">
                <p class=img-heading>Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
                <p class="img-desc"> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident,</p>
             
            </div>
          </a>
          
           </div>
        <div class="col-md-1">

        </div>
        <div class="col-md-6">
          <div class="row" style="margin-bottom: 5%; margin-top: 5%;">
              <div class="col sec-news">
                  <img src="./assets/globe.svg" class="img-fluid" alt="">
                  <a href="
                  "> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
                </a>    </div>
              <div class="col sec-news">
                  <img src="./assets/globe.svg" alt="" class="img-fluid">
                  <a href="
                  "> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
                </a>   </div>
          </div>
          <div class="row">
              <div class="col sec-news">
                  <img src="./assets/globe.svg" class="img-fluid"alt="">
                  <a href="
                  "> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
                </a>   </div>
              <div class="col sec-news">
                  <img src="./assets/globe.svg" class="img-fluid"alt="">
                  <a href="
                  "> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
                </a>   </div>
          </div>
        </div>
    </div>
    
</div>
<!-- ==========cultural news===================== -->
<div class="categorical-news-container">
    <div class="head">
      <img src="./assets/cultural.svg" alt="">
      <a href=""><p>SEE MORE</p></a>
    </div>
    <hr style="margin:0"> 
    <div class="row">
        
        <div class="col-md-5 cat-img">
          <img src="./assets/hostel-main.png" alt="" class="img-fluid">
          <a href="">
            <div class="desc">
                <p class=img-heading>Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
                <p class="img-desc"> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident,</p>
             
            </div>
          </a>
          
           </div>
        <div class="col-md-1">

        </div>
        <div class="col-md-6">
          <div class="row" style="margin-bottom: 5%; margin-top: 5%;">
            
              <div class="col sec-news">
                  <img src="./assets/globe.svg" class="img-fluid" alt="">
                  <a href="
                  "> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
                </a>
                       </div>
              <div class="col sec-news">
                  <img src="./assets/globe.svg" alt="" class="img-fluid">
                  <a href="
                  "> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
                </a>    </div>
          </div>
          <div class="row">
              <div class="col sec-news">
                  <img src="./assets/globe.svg" class="img-fluid"alt="">
                  <a href="
                  "> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
                </a>    </div>
              <div class="col sec-news">
                  <img src="./assets/globe.svg" class="img-fluid"alt="">
                  <a href="
                  "> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
                </a>   </div>
          </div>
        </div>
    </div>
    
</div>
    

<?php
require_once('includes/__footer.php');
?>