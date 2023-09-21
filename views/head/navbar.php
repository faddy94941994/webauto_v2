<?php if(isset($_SESSION['id_mb'])){ ?>
<div class="sidebar-wrap sidebar-overlay">
        <div class="closemenu text-muted">Close Menu</div>
        <div class="sidebar text-white-light1">
            <div class="row my-3 border-bottom">
                <div class="col-12 profile-sidebar ">
                    <div class="clearfix"></div>
                    
                    <div class="row mt-3">
                        <div class="col-auto">
                            <figure class="avatar avatar-70 rounded-20 p-1">
                                <img src="assets/img/icon_img/coin.png" alt="" class="image-shadow-white">
                            </figure>
                        </div>
                        <div class="col px-0 align-self-center">
                            <h5 class="mb-2"><?php echo $Get_Profile->name_mb; ?></h5>
							<p class="mb-0 text-color-theme">ยอดเงินคงเหลือ</p>
                            <p class="text-muted small"><span id="id_Balance_1"><?php if($_SESSION["Balance"] == '0') { echo '0.00'; }else{ echo $_SESSION["Balance"]; } ?></span> บาท</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- user emnu navigation -->
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-pills">
					
						<li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#menumodal" id="centermenubtn">
                                <div class="avatar avatar-40 icon-dc"><img src="https://cdn-icons-png.flaticon.com/512/998/998376.png" class="rounded-10 image-shadow-white"></div>
                                <div class="col">ข้อมูลบัญชี</div>
                            </a>
                        </li>
						
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/wallet">
                                <div class="avatar avatar-40 icon-dc"><img src="assets/img/icon_img/wallet.png" class="image-shadow-white"></div>
                                <div class="col">กระเป๋า</div>
                            </a>
                        </li>
						<li class="nav-item">
                            <a class="nav-link" href="spinner">
                                <div class="avatar avatar-40 icon-dc"><img src="assets/img/icon_img/roulette.png" class="image-shadow-white"></div>
                                <div class="col">หมุนวงล้อ</div>
                            </a>
                        </li>
						

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0)" role="button"
                                aria-expanded="false">
                                <div class="avatar avatar-40 icon-dc"><img src="assets/img/icon_img/wallet2.png" class="image-shadow-white"></div>
                                <div class="col">ฝาก - ถอน</div>
                                <div class="arrow"><i class="bi bi-chevron-down plus"></i> <i
                                        class="bi bi-chevron-up minus"></i>
                                </div>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item nav-link" href="deposit">
                                        <div class="avatar avatar-40 icon-dc"><img src="assets/img/icon_img/profits.png" class="image-shadow-white"></div>
                                        <div class="col align-self-center">ฝากเงิน</div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item nav-link" href="withdraw">
                                        <div class="avatar avatar-40 icon-dc"><img src="assets/img/icon_img/loss.png" class="image-shadow-white"></div>
                                        <div class="col align-self-center">ถอนเงิน</div>
                                    </a>
                                </li>
								
								<li>
                                    <a class="dropdown-item nav-link" href="deposithistory">
                                        <div class="avatar avatar-40 icon-dc"><img src="assets/img/icon_img/tasks.png" class="image-shadow-white"></div>
                                        <div class="col align-self-center">รายการฝาก</div>
                                    </a>
                                </li>
								<li>
                                    <a class="dropdown-item nav-link" href="withdrawhistory">
                                        <div class="avatar avatar-40 icon-dc"><img src="assets/img/icon_img/tasks.png" class="image-shadow-white"></div>
                                        <div class="col align-self-center">รายการถอน</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="promotion">
                                <div class="avatar avatar-40 icon-dc"><img src="assets/img/icon_img/black-friday.png" class="image-shadow-white"></div>
                                <div class="col">โปรโมชั่น</div>
                            </a>
                        </li>
						<li class="nav-item">
                            <a class="nav-link" href="diamond">
                                <div class="avatar avatar-40 icon-dc"><img src="assets/img/icon_img/diamond.png" class="image-shadow-white"></div>
                                <div class="col">รับเพชรฟรี</div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" target="_blank" href="<?php echo $Get_Setting->lineoa; ?>">
                                <div class="avatar avatar-40 icon-dc"><img src="assets/img/icon_img/line.png" class="image-shadow-white"></div>
                                <div class="col">ติดต่อพนักงาน</div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link check-out" href="javascript:void(0)">
                                <div class="avatar avatar-40 icon-dc"><img src="assets/img/icon_img/power-off.png" class="image-shadow-white"></div>
                                <div class="col">ออกจากระบบ</div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <main class="h-100">
        <header class="header position-fixed">
            <div class="row">
                <div class="col-2 col-md-2">
                    <a href="javascript:void(0)" target="_self" class="btn btn-light btn-44 menu-btn">
                       <img src="assets/img/icon_img/shape.png" alt="" style="height: 30px;" class="img-fluid mx-auto">
                    </a>
                </div>
                <div class="col-8 col-md-8 text-center text-white-light1">
					<a href="/">
						<img src="<?php echo $Get_Setting->logo_web; ?>" style="height: 50px; width: 130px;" class="img-fluid mx-auto image-shadow">
					</a>	
                </div>
                <div class="col-2 col-md-2">
					<div class="position-absolute end-0 top-0 me-2">
                        <div class="tag-coin ps-coin text-white-light1">
                            <img src="assets/img/icon_img/coin.png" class="avatar avatar-coin position-absolute start-0"><span id="id_Balance_2"><?php if($_SESSION["Balance"] == '0') { echo '0.00'; }else{ echo $_SESSION["Balance"]; } ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
<?php }else{ ?>
<div class="sidebar-wrap sidebar-overlay">
        <div class="closemenu text-muted">Close Menu</div>
        <div class="sidebar text-white-light1">
            <div class="row my-3 border-bottom">
                <div class="col-12 profile-sidebar ">
                    <div class="clearfix"></div>
                    
                    <div class="row mt-1">
					
						<a href="/">
							<div class="col-12 d-flex justify-content-center">
								<img src="<?php echo $Get_Setting->logo_web; ?>" style="height: 60px; width: 70%;" class="img-fluid mx-auto image-shadow">
							</div>
						</a>
						
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-pills">
						
						<li class="nav-item">
                            <a class="nav-link" href="login">
                                <div class="avatar avatar-40 icon-dc"><img src="assets/img/icon_img/privacy.png" class="image-shadow-white"></div>
                                <div class="col">เข้าสู่ระบบ</div>
                            </a>
                        </li>
						
						<li class="nav-item">
                            <a class="nav-link" href="register">
                                <div class="avatar avatar-40 icon-dc"><img src="assets/img/icon_img/gambler.png" class="image-shadow-white"></div>
                                <div class="col">สมัครสมาชิก</div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" target="_blank" href="<?php echo $Get_Setting->lineoa; ?>">
                                <div class="avatar avatar-40 icon-dc"><img src="assets/img/icon_img/line.png" class="image-shadow-white"></div>
                                <div class="col">ติดต่อพนักงาน</div>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div> 
    <main class="h-100">
        <header class="header position-fixed">
            <div class="row">
                <div class="col-2 col-md-2">
                    <a href="javascript:void(0)" target="_self" class="btn btn-light btn-44 menu-btn">
                       <img src="assets/img/icon_img/shape.png" alt="" style="height: 30px;" class="img-fluid mx-auto">
                    </a>
                </div>
                <div class="col-8 col-md-8 text-center text-white-light1">
					<a href="/"><img src="<?php echo $Get_Setting->logo_web; ?>" style="height: 50px; width: 130px;" class="img-fluid mx-auto image-shadow"></a>
                </div>
                <div class="col-2 col-md-2">
					<div class="position-absolute end-0 top-0 me-3">
						<div class="dropdown">
							<button class="btn btn-light btn-44" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
								<img src="assets/img/icon_img/businessman.png" alt="" style="height: 30px;" class="img-fluid mx-auto">
							</button>
							<ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
								<li><a class="dropdown-item" href="login"><img src="assets/img/icon_img/privacy.png" alt="" style="height: 30px;" class="img-fluid mx-auto"> เข้าสู่ระบบ</a></li>
								<li><hr class="dropdown-divider"></li>
								<li><a class="dropdown-item" href="register"><img src="assets/img/icon_img/gambler.png" alt="" style="height: 30px;" class="img-fluid mx-auto"> สมัครสมาชิก</a></li>
							</ul>
						</div>
                    </div>
                </div>
            </div>
        </header>

<?php } ?>		