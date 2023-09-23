</main>
<?php if(isset($_SESSION['id_mb'])){ ?>
    <footer class="footer">
        <div class="container">
            <ul class="nav nav-pills nav-justified">
                <li class="nav-item">
                    <a class="nav-link text-white-light" href="deposit">
                        <span class="text-nowrap">
                            <img src="assets/img/icon_img/profits.png" alt="" style="height: 30px;" class="img-fluid mx-auto">
                            <p class="size-13">ฝากเงิน</p>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white-light" href="withdraw">
                        <span class="text-nowrap">
                            <img src="assets/img/icon_img/loss.png" alt="" style="height: 30px;" class="img-fluid mx-auto">
                            <p class="size-13">ถอนเงิน</p>
                        </span>
                    </a>
                </li>
                <li class="nav-item centerbutton">
                    <a href="game" class="nav-link mb-0">
                        <span class="theme-radial-gradient shadow-sm shadow-golds text-nowrap">
                            <img src="assets/img/icon_img/jackpot.png" alt="" style="height: 45px;" class="pulse2">
							<p class="size-1rem text-white-light">เข้าเกมส์</p>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white-light" href="diamond">
                        <span class="text-nowrap">
                            <img src="assets/img/icon_img/diamond.png" alt="" style="height: 30px;" class="img-fluid mx-auto wobble-vertical">
                            <p class="size-13">รับเพชรฟรี</p>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white-light" href="/wallet">
                        <span class="text-nowrap">
                            <img src="assets/img/icon_img/wallet.png" alt="" style="height: 30px;" class="img-fluid mx-auto">
                            <p class="size-13">กระเป๋า</p>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </footer>
<?php }else{ ?>

	<!-- Disable footer in line -->
<!--<footer class="footer">
        <div class="container">
            <ul class="nav nav-pills nav-justified">
                <li class="nav-item">
                    <a class="nav-link text-white-light" href="login">
                        <span class="text-nowrap">
                            <img src="assets/img/icon_img/privacy.png" alt="" style="height: 30px;" class="img-fluid mx-auto">
                            <p class="size-13">เข้าสู่ระบบ</p>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white-light" href="register">
                        <span class="text-nowrap">
                            <img src="assets/img/icon_img/gambler.png" alt="" style="height: 30px;" class="img-fluid mx-auto">
                            <p class="size-13">สมัครสมาชิก</p>
                        </span>
                    </a>
                </li>
                <li class="nav-item centerbutton">
                    <a href="login" class="nav-link mb-0">
                        <span class="theme-radial-gradient shadow-sm shadow-golds text-nowrap">
                            <img src="assets/img/icon_img/jackpot.png" alt="" style="height: 45px;" class="pulse2">
							<p class="size-1rem text-white-light">เข้าเกมส์</p>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white-light" href="creditfree">
                        <span class="text-nowrap">
                            <img src="assets/img/icon_img/gift.png" alt="" style="height: 30px;" class="img-fluid mx-auto wobble-top">
                            <p class="size-13">เครดิตฟรี</p>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white-light" href="promotion">
                        <span class="text-nowrap">
                            <img src="assets/img/icon_img/black-friday.png" alt="" style="height: 30px;" class="img-fluid mx-auto">
                            <p class="size-13">โปรโมชั่น</p>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </footer> -->
	<!-- Disable footer end line -->

<?php } ?>	