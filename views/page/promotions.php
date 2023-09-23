         <div class="x-promotion-index">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div class="x-page-title-component ">
                        <div class="-inner-wrapper">
                           <h1 class="-title">โปรโมชั่น</h1>
                           <img src="assets2/build/web/igame-index-lobby-wm/img/line-glow-blue.png" class="-line-img" alt="Page title line glow">
                           <img src="assets2/build/web/igame-index-lobby-wm/img/index-lobby-ic-header-menu-promotion.png" class="-img -item-1" alt="Page title icon">
                           <img src="assets2/build/web/igame-index-lobby-wm/img/index-lobby-ic-header-menu-promotion.png" class="-img -item-2" alt="Page title icon">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="container">
               <div class="row -row-wrapper x-divine-gutter">
                  <?php
                         $querypro = "SELECT * FROM promotion ORDER BY id desc";
                         $resultpro = $class->Query_Mysqli($querypro);
                        ?>
                        <?php foreach ($resultpro as $rowpro){ ?>
                  <div class="col-12 col-md-6 mt-3 -col-wrapper x-divine-gutter" data-animatable="fadeInUp" data-delay="100">
                     <a href="<?php echo $Get_Setting->lineoa; ?>" class="x-promotion-list-item " >
                        <picture>
                           <source  srcset="/slip/<?php echo $rowpro['fileupload_pro']; ?>">
                           <source srcset="/slip/<?php echo $rowpro['fileupload_pro']; ?>">
                           <img alt="บาคาร่า คาสิโน สล็อตออนไลน์ promotion cover image" class="-cover-img img-fluid" width="200" height="200" src="/slip/<?php echo $rowpro['fileupload_pro']; ?>">
                        </picture>                        
                     </a>
                  </div>

                   <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div class="x-page-title-component ">
                        <div class="-inner-wrapper">
                           <br>
                           <center><h1 class="-title">รายละเอียดโปรโมชั่น</h1>
                        - ชื่อโปรโมชั่น : <font color="#fff200"><?php echo $rowpro['name_pro']; ?></font><br>
         - ลักษณะโปรโมชั่น : <font color="#fff200"><?php echo $rowpro['time_pro']; ?></font><br>
         - ยอดฝากขั้นต่ำ : <font color="#fff200"><?php echo $rowpro['dp_pro']; ?></font><br>
         - โบนัสที่ได้รับ : <font color="#fff200"><?php 
if ($rowpro['bonus_pro']!=0) {
   echo $rowpro['bonus_pro']; 
}else{
   echo $rowpro['bonusper_pro'].'%'; }?></font><br>
         - เกมส์ที่เล่นได้ : <font color="#fff200"><?php echo $rowpro['games_pro']; ?></font><br>
         - กติกา : <font color="#fff200"><?php echo $rowpro['rules_pro']; ?></font><br>
         - เทิร์น : <font color="#fff200"><?php echo $rowpro['turn_pro']; ?></font><br>
         - ถอนได้ : <font color="#fff200"><?php echo $rowpro['wd_pro']; ?></font></center>

                  <?php } ?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>




                  
               </div>
            </div>
         </div>
      </div>
   </div>
   <footer class="x-footer ">
      <div class="container-fluid -footer-wrapper">
         <div class="-footer-inner-wrapper">
            <div class="-describe-wrapper">
               <div class="-content-wrapper">
                  <h6 class="-title"><?php echo $Get_Setting->name_web; ?> th เว็บคาสิโนออนไลน์ <br> ครองอันดับในใจคนไทย 3 ปีซ้อน</h6>
                  <h6 class="-content"><?php echo $Get_Setting->name_web; ?> บาคาร่า คาสิโนออนไลน์ ที่ดีที่สุด เพื่อประสบการณ์ที่ดีของผู้เล่นอย่างแท้จริง แบบ <?php echo $Get_Setting->name_web; ?></h6>
               </div>
            </div>
            <!-- <div class="-tag-wrapper">
               <div class="-content-wrapper">
                  <div class="-title">TAG</div>
                  <div class="container x-footer-seo">
                     <div class="-tags">
                        <a href="index.php" class="btn">wm</a>
                        <a href="index.php" class="btn">wmcasino</a>
                        <a href="index.php" class="btn">wm casino</a>
                        <a href="index.php" class="btn">wm คาสิโน</a>
                        <a href="index.php" class="btn">wm คาสิโนออนไลน์</a>
                        <a href="index.php" class="btn">wm บาคาร่า</a>
                        <a href="index.php" class="btn">wm bet</a>
                        <a href="wm55-1.html" class="btn">wm55</a>
                        <a href="index.php" class="btn">wmbet444</a>
                        <a href="index.php" class="btn">wm gaming</a>
                        <a href="index.php" class="btn">wm casino gaming</a>
                        <a href="index.php" class="btn">คาสิโนสด</a>
                        <a href="index.php" class="btn">bet online</a>
                        <a href="index.php" class="btn">wm live casino</a>
                     </div>
                  </div>
               </div>
            </div> -->
        <!--<div class="-provider-wrapper">
               <div class="px-3">
                  <div class="x-contact-directly" data-animatable="fadeInUp" data-delay="100">
                     <div class="-text-wrapper -empty">
                        <span class="-text-top">Created website by</span>
                        <a href="th/index-1.htm" class="-img-wrap -img-wrap-link text-decoration-none" target="_blank" rel="nofollow noopener">
                        <img src="assets2/build/web/shared/img/button-bg-wintech-dark-1.png" class="-button-bg -dark" alt="WinTech company entry" width="350" height="84">
                        <img src="assets2/build/web/shared/img/button-bg-wintech-light-1.png" class="-button-bg -light" alt="WinTech company entry" width="350" height="84">
                        </a>
                     </div>
                     <div class="-qr-wrapper -empty">
                     </div>
                  </div>
               </div>
            </div>
         </div>-->
         <div class="-footer-bottom-wrapper">
            <div>
               <a href="" target="_blank" class="-term-btn">
               Terms and Conditions
               </a>
            </div>
            <div>
               <p class="mb-0">
                  Copyright © 2021 <?php echo $Get_Setting->name_web; ?> All Rights Reserved.
               </p>
            </div>
         </div>
      </div>
   </footer>
</div>
</div>