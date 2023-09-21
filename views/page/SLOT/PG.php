            <div class="-games-index-page">
               <h2 class="-heading-sub-title">เกมส์ PG</h2>
               <div class="x-category-provider js-game-scroll-container js-game-container">
                  <div class="-games-list-container container">
                     <nav class="nav-menu" id="navbarProvider">
                        <ul class="nav nav-pills">
					
<?php
function cut_url($url){
	$counturl1 = strrpos(urldecode($url),"Icon/") +5;
	$counturl2 = substr(urldecode($url),$counturl1);
	$counturl3 = strrpos($counturl2,"/");
	return substr($counturl2,0,$counturl3);
}
function loadnamegame($mydate){
	$jsonData = file_get_contents("views/page/SLOT/pg.json");
	$data = json_decode($jsonData,true);
	foreach ($data['dt']['ii']['gmi']['gm'] as $value) {
		if ($value['gid'] == $mydate) {
			return $value['gcd'];
		}
	}
}
function loadidgame($mydate){
	$jsonData = file_get_contents("views/page/SLOT/pg.json");
	$data = json_decode($jsonData,true);
	foreach ($data['dt']['ii']['gmi']['gm'] as $value) {
		if ($value['gid'] == $mydate) {
			return $value['gid'];
		}
	}
}
$jsonData = file_get_contents("views/page/SLOT/pg.json");
$data = json_decode($jsonData,true);
foreach ($data['dt']['ii']['gri']['gr'] as $value) {
	$getname = $value['rid'];
	foreach ($value['r']['6'] as $valueurl) {
		?>
		
						<li class="nav-item -random-container -game-casino-macro-container ">
                            <a href="javascript:void(0)" data-namegame="pg" data-codegame="<?php echo loadidgame($getname); ?>" class="nav-link js-account-approve-aware ClassStartGameNew">
                                <picture>
									<img src="<?php echo urldecode($valueurl);?>" width='250' height='231' class='-cover-img lazyload img-fluid' alt='pg-soft' onerror='ImgError(this)'>
                                </picture>
                            </a>
                            <div class="-text-nav-menu"><?php echo loadnamegame($getname); ?></div>
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