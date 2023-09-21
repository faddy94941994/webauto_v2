            <div class="-games-index-page">
               <h2 class="-heading-sub-title">เกมส์ IronDog</h2>
               <div class="x-category-provider js-game-scroll-container js-game-container">
                  <div class="-games-list-container container">
                     <nav class="nav-menu" id="navbarProvider">
                        <ul class="nav nav-pills">
<?php
$json_data = file_get_contents('https://betflik.com/games_share/ids.txt', true);
$array = json_decode($json_data, true);
 
foreach ($array as  $value) {
	
	
$array_type = array("slot", "SLOT", "Slot", "slots", "slot game", "Video Slots");
if (in_array($value['type'], $array_type))
  {
?>


                           <li class="nav-item -random-container -game-casino-macro-container ">
                              <a href="javascript:void(0)" data-namegame="qtech" data-codegame="<?php echo $value['code']; ?>" class="nav-link js-account-approve-aware ClassStartGame">
                                 <picture>
									<img src="https://img.betflix777.com<?php echo $value['img'];?>" width='250' height='231' class='-cover-img lazyload img-fluid' alt='SLOT' onerror='ImgError(this)'>
                                 </picture>
                              </a>
                              <div class="-text-nav-menu"><?php echo $value['name'];?></div>
                           </li>
<?php
  }
}
?>
                        </ul>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
<br><br><br><br>
<!-- Check Link Active -->
<script type="text/javascript">
   $(".nav-link.-slot").addClass("active");
</script>
<!-- Check Link Active -->
<script type="text/javascript">
function ImgError(source){
	source.src = "https://img.freepik.com/free-vector/internet-network-warning-404-error-page-file-found-web-page-internet-error-page-issue-found-network-404-error-present-by-man-sleep-display_1150-55450.jpg?w=1380&t=st=1664567537~exp=1664568137~hmac=2d63e3b6178a3a9ef5f9d89bf407860584308b4b269c14db0f707ed6d9cf407d";
	source.onerror = "";
	return true;
}
</script>