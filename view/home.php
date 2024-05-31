<div class="Home">

        <div class="Infomation">
            <div class="Slideshow">
                <!-- Slideshow container -->
                <div class="slideshow-container">

                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="view/image/banner1.jpg" style="width:100%">
                <div class="text">Caption Text</div>
                </div>

                <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="view/image/banner2.jpg" style="width:100%">
                <div class="text">Caption Two</div>
                </div>

                <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="view/image/banner3.jpg" style="width:100%">
                <div class="text">Caption Three</div>
                </div>

                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>

                <!-- The dots/circles -->
                <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                </div>
            </div>

           

            <?php
                foreach ($newsp as $sp) {
                    extract($sp);
                    $linksp="index.php?act=sanphamct&idsp=".$id;
                    $hinh=$path.$image;
                    echo '
                        <div class="Item">
                                <a href="'.$linksp.'"><img src="'.$hinh.'"></a>   
                               <a href="'.$linksp.'">'.$price.'$</a> 
                               <a href="'.$linksp.'"> '.$name.'</a>

                            <form action="index.php?act=bill" method="post">
                               <input type="hidden" name="id" value="'.$id.'">
                               <input type="hidden" name="hinh" value="'.$hinh.'">
                               <input type="hidden" name="price" value="'.$price.'">
                               <input type="hidden" name="name" value="'.$name.'">
                               <input type="submit" name="addbill" value="Thêm vào giỏ hàng">
                           </form>
                        </div>   
                            
                            
                    ';
                   

                }

            ?>

            <!-- <div class="Item">
                <img src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcQW3LoaOTYxQm3hLzJsWc0gb_MUtG4GTdC4cXbqw6UdPoaCWLZYzcPTwXAwiGT5RJwbr21_7M0yCmjys5kDez_f8SOxgbJgK-fnrQhKZANn8poWocG9x64xuw&usqp=CAE">
                <p>30$</p>
                <p>Đồng hồ</p>  
            </div>

            <div class="Item">
                <img src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcQW3LoaOTYxQm3hLzJsWc0gb_MUtG4GTdC4cXbqw6UdPoaCWLZYzcPTwXAwiGT5RJwbr21_7M0yCmjys5kDez_f8SOxgbJgK-fnrQhKZANn8poWocG9x64xuw&usqp=CAE">
                <p>30$</p>
                <p>Đồng hồ</p>
            </div>
            <div class="Item">
                <img src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcQW3LoaOTYxQm3hLzJsWc0gb_MUtG4GTdC4cXbqw6UdPoaCWLZYzcPTwXAwiGT5RJwbr21_7M0yCmjys5kDez_f8SOxgbJgK-fnrQhKZANn8poWocG9x64xuw&usqp=CAE">
                <p>30$</p>
                <p>Đồng hồ</p>
            </div>
            <div class="Item">
                <img src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcQW3LoaOTYxQm3hLzJsWc0gb_MUtG4GTdC4cXbqw6UdPoaCWLZYzcPTwXAwiGT5RJwbr21_7M0yCmjys5kDez_f8SOxgbJgK-fnrQhKZANn8poWocG9x64xuw&usqp=CAE">
                <p>30$</p>
                <p>Đồng hồ</p>
            </div>
            <div class="Item">
                <img src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcQW3LoaOTYxQm3hLzJsWc0gb_MUtG4GTdC4cXbqw6UdPoaCWLZYzcPTwXAwiGT5RJwbr21_7M0yCmjys5kDez_f8SOxgbJgK-fnrQhKZANn8poWocG9x64xuw&usqp=CAE">
                <p>30$</p>
                <p>Đồng hồ</p>
            </div>
            <div class="Item">
                <img src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcQW3LoaOTYxQm3hLzJsWc0gb_MUtG4GTdC4cXbqw6UdPoaCWLZYzcPTwXAwiGT5RJwbr21_7M0yCmjys5kDez_f8SOxgbJgK-fnrQhKZANn8poWocG9x64xuw&usqp=CAE">
                <p>30$</p>
                <p>Đồng hồ</p>
            </div>
            <div class="Item">
                <img src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcQW3LoaOTYxQm3hLzJsWc0gb_MUtG4GTdC4cXbqw6UdPoaCWLZYzcPTwXAwiGT5RJwbr21_7M0yCmjys5kDez_f8SOxgbJgK-fnrQhKZANn8poWocG9x64xuw&usqp=CAE">
                <p>30$</p>
                <p>Đồng hồ</p>
            </div>
            <div class="Item">
                <img src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcQW3LoaOTYxQm3hLzJsWc0gb_MUtG4GTdC4cXbqw6UdPoaCWLZYzcPTwXAwiGT5RJwbr21_7M0yCmjys5kDez_f8SOxgbJgK-fnrQhKZANn8poWocG9x64xuw&usqp=CAE">
                <p>30$</p>
                <p>Đồng hồ</p>
            </div>
            <div class="Item">
                <img src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcQW3LoaOTYxQm3hLzJsWc0gb_MUtG4GTdC4cXbqw6UdPoaCWLZYzcPTwXAwiGT5RJwbr21_7M0yCmjys5kDez_f8SOxgbJgK-fnrQhKZANn8poWocG9x64xuw&usqp=CAE">
                <p>30$</p>
                <p>Đồng hồ</p>
            </div> -->


        </div>

      <?php

                include "formright.php";

      ?>

    </div>

  