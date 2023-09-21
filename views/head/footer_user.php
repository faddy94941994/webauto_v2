<?php
$id_mb = $Get_Profile->id_mb;
$name_mb = $Get_Profile->name_mb;
$username_mb = $Get_Profile->username_mb;
$password_mb = $Get_Profile->password_mb;
$bank_mb = $Get_Profile->bank_mb;
$bankacc_mb = $Get_Profile->bankacc_mb;
$phone_mb = $Get_Profile->phone_mb;
$status_mb = $Get_Profile->status_mb;
$confirm_mb = $Get_Profile->confirm_mb;
$aff = $Get_Profile->aff;
$status = $Get_Profile->status;
$password_ufa = $Get_Profile->password_ufa;
$ip = $Get_Profile->ip;
$phone_true = $Get_Profile->phone_true;

$usernameufa = $UsernameAgent;

$set_wd = $Get_Setting->set_wd;
?>

<div id="account-actions" class="">
            <div class="x-button-actions" id="account-actions-mobile">
               <div class="-outer-wrapper">
                  <div class="-left-wrapper">
                     <a href="<?php echo $Get_Setting->lineoa; ?>" class="-item-wrapper -line" target="_blank" rel="noopener noreferrer">
                        <picture>
                           <source type="image/webp" srcset="assets2/build/web/igame-index-lobby-wm/img/footer-menu-ic-left-1.webp">
                           <source type="image/png" srcset="assets2/build/web/igame-index-lobby-wm/img/footer-menu-ic-left-1.png">
                           <img src="assets2/build/web/igame-index-lobby-wm/img/footer-menu-ic-left-1.png" class="-ic-img" alt="รูปไอคอนไลน์" width="34" height="34">
                        </picture>
                        <span class="-text">Line</span>
                     </a>
                     <a href="promotions" class="-item-wrapper -promotion">
                        <picture>
                           <source type="image/webp" srcset="assets2/build/web/igame-index-lobby-wm/img/footer-menu-ic-left-2.webp">
                           <source type="image/png" srcset="assets2/build/web/igame-index-lobby-wm/img/footer-menu-ic-left-2.png">
                           <img src="assets2/build/web/igame-index-lobby-wm/img/footer-menu-ic-left-2.png" class="-ic-img" alt="รูปไอคอนไลน์" width="34" height="34">
                        </picture>
                        <span class="-text">โปรโมชั่น</span>
                     </a>
                  </div>
                  <a href="/" class="-center-wrapper">
                     <div class="-selected">
                        <span class="-text">หน้าแรก</span>
                        <img src="assets2/build/web/igame-index-lobby-wm/img/curve-top.png" class="-top-curve" alt="คาสิโนออนไลน์อันดับ 1">
                        <img src="assets2/build/web/igame-index-lobby-wm/img/curve-bottom.png" class="-bottom-curve" alt="คาสิโนออนไลน์อันดับ 1">
                     </div>
                  </a>
                  <div class="-fake-center-bg-wrapper">
                     <svg viewBox="-10 -1 30 12">
                            <defs>
            <linearGradient id="rectangleGradient" x1="0%" y1="0%" x2="0%" y2="100%">
                <stop offset="20%" stop-color="#2c0005"></stop>
                <stop offset="100%" stop-color="#2c0005"></stop>
            </linearGradient>
        </defs>
    
                    <path d="M-10 -1 H30 V12 H-10z M 5 5 m -5, 0 a 5,5 0 1,0 10,0 a 5,5 0 1,0 -10,0z"></path>
                </svg>
                  </div>
                  <ul class="navbar-nav -sub-menu-lobby-wrapper">
                     <li class="nav-item -casino">
                        <button class="nav-link" data-ajax-game-load="/_ajax_/%E0%B8%9A%E0%B8%B2%E0%B8%84%E0%B8%B2%E0%B8%A3%E0%B9%88%E0%B8%B2" data-target=".js-game-container" data-href-push-state="/%E0%B8%9A%E0%B8%B2%E0%B8%84%E0%B8%B2%E0%B8%A3%E0%B9%88%E0%B8%B2" data-menu-container=".js-menu-container" data-loading="_onLoading_" data-menu-mobile-container=".js-menu-mobile-container" data-menu-mobile="data-menu-mobile" data-category="casino">
                           <div class="-nav-icon-bg" style="background-image:url('assets2/build/web/igame-index-lobby-wm/img/ic-nav-menu-all.png')"></div>
                           <span class="-text">
                           บาคาร่า
                           </span>
                        </button>
                     </li>
                     <li class="nav-item -slot">
                        <button class="nav-link" data-ajax-game-load="/_ajax_/%E0%B8%84%E0%B8%B2%E0%B8%AA%E0%B8%B4%E0%B9%82%E0%B8%99%E0%B8%AA%E0%B8%A5%E0%B9%87%E0%B8%AD%E0%B8%95" data-target=".js-game-container" data-href-push-state="/%E0%B8%84%E0%B8%B2%E0%B8%AA%E0%B8%B4%E0%B9%82%E0%B8%99%E0%B8%AA%E0%B8%A5%E0%B9%87%E0%B8%AD%E0%B8%95" data-menu-container=".js-menu-container" data-loading="_onLoading_" data-menu-mobile-container=".js-menu-mobile-container" data-menu-mobile="data-menu-mobile" data-category="slot">
                           <div class="-nav-icon-bg" style="background-image:url('assets2/build/web/igame-index-lobby-wm/img/ic-nav-menu-all.png')"></div>
                           <span class="-text">
                           คาสิโน
                           </span>
                        </button>
                     </li>
                     <li class="nav-item -skill-game">
                        <button class="nav-link" data-ajax-game-load="/_ajax_/skill-game" data-target=".js-game-container" data-href-push-state="/skill-game" data-menu-container=".js-menu-container" data-loading="_onLoading_" data-menu-mobile-container=".js-menu-mobile-container" data-menu-mobile="data-menu-mobile" data-category="skill-game">
                           <div class="-nav-icon-bg" style="background-image:url('assets2/build/web/igame-index-lobby-wm/img/ic-nav-menu-all.png')"></div>
                           <span class="-text">
                           SKILL<br>GAME
                           </span>
                        </button>
                     </li>
                     <li class="nav-item -sport">
                        <button class="nav-link" data-ajax-game-load="/_ajax_/sport" data-target=".js-game-container" data-href-push-state="/sport" data-menu-container=".js-menu-container" data-loading="_onLoading_" data-menu-mobile-container=".js-menu-mobile-container" data-menu-mobile="data-menu-mobile" data-category="sport">
                           <div class="-nav-icon-bg" style="background-image:url('assets2/build/web/igame-index-lobby-wm/img/ic-nav-menu-all.png')"></div>
                           <span class="-text">
                           SPORT
                           </span>
                        </button>
                     </li>
                     <li class="nav-item -fishing-game">
                        <button class="nav-link" data-ajax-game-load="/_ajax_/%E0%B8%A2%E0%B8%B4%E0%B8%87%E0%B8%9B%E0%B8%A5%E0%B8%B2" data-target=".js-game-container" data-href-push-state="/%E0%B8%A2%E0%B8%B4%E0%B8%87%E0%B8%9B%E0%B8%A5%E0%B8%B2" data-menu-container=".js-menu-container" data-loading="_onLoading_" data-menu-mobile-container=".js-menu-mobile-container" data-menu-mobile="data-menu-mobile" data-category="fishing-game">
                           <div class="-nav-icon-bg" style="background-image:url('assets2/build/web/igame-index-lobby-wm/img/ic-nav-menu-all.png')"></div>
                           <span class="-text">
                           FISHING
                           </span>
                        </button>
                     </li>
                  </ul>
                  <div class="-right-wrapper">
                     <a href="register" class="-item-wrapper -shimmer -register"data-toggle="modal" data-target="#depositModal">
                        <picture>
                           <source type="image/webp" srcset="assets2/build/images/footer-menu-ic-right-1.webp">
                           <source type="image/png" srcset="assets2/build/images/footer-menu-ic-right-1.webp">
                           <img src="assets2/build/images/footer-menu-ic-right-1.webp" class="-ic-img" alt="รูปไอคอนไลน์" width="34" height="34">
                        </picture>
                        <span class="-text d-none d-sm-inline-block">ฝากเงิน</span>
                        <span class="-text d-sm-none">ฝากเงิน</span>
                     </a>
                     <a href="login" class="-item-wrapper -login" data-toggle="modal" data-target="#withdrawModal">
                        <picture>
                           <source type="image/webp" srcset="assets2/build/images/footer-menu-ic-right-2.webp">
                           <source type="image/png" srcset="assets2/build/images/footer-menu-ic-right-2.webp">
                           <img src="assets2/build/images/footer-menu-ic-right-2.webp" class="-ic-img" alt="รูปไอคอนไลน์" width="34" height="34">
                        </picture>
                        <span class="-text d-none d-sm-inline-block">ถอนเงิน</span>
                        <span class="-text d-sm-none">ถอนเงิน</span>
                     </a>
                  </div>
                  <div class="-fully-overlay js-footer-lobby-overlay"></div>
               </div>
            </div>
         </div>
         <div class="x-modal modal -alert-modal" id="alertModal" tabindex="-1" role="dialog" aria-hidden="true" data-loading-container=".js-modal-content" data-ajax-modal-always-reload="true" data-animatable="fadeInRight" data-delay="700" data-dismiss-alert="true">
            <div class="modal-dialog -modal-size  " role="document">
               <div class="modal-content -modal-content">
                  <button type="button" class="close f-1 " data-dismiss="modal" aria-label="Close">
                  <i class="fas fa-times"></i>
                  </button>
                  <div class="modal-body -modal-body">
                     <div class="d-flex -alert-body">
                        <div class="text-center mr-3 -alert-body-wrapper">
                           <img data-src="assets2/build/web/igame-index-lobby-wm/img/ic-alert-success.png" alt="SUCCESS" class="-img-alert js-ic-success img-fluid lazyload">
                           <img data-src="assets2/build/web/igame-index-lobby-wm/img/ic-alert-failed.png" alt="FAIL" class="-img-alert js-ic-fail img-fluid lazyload">
                        </div>
                        <div class="my-auto js-modal-content -title"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="x-modal modal " id="loginModal" tabindex="-1" role="dialog" aria-hidden="true" data-loading-container=".js-modal-content" data-ajax-modal-always-reload="true">
          
                  <div class="modal-body -modal-body">
                     <div class="x-form-register -register mt-0">
                        <div class="row -animatable-container">
                           <div class="col order-1 text-center pr-lg-0 mx-auto js-slide-term-and-condition-content x-slide-left-content x-slide-left-content-term -hide">
                              <h3 class="x-title-modal mx-auto text-center ">
                                 Term and condition
                              </h3>
                              <div class="-fake-inner-body">
                                 <div class="-term-and-condition-content js-term-and-condition">
                                    <div class="x-term-and-condition">
                                       <div class="-block-content-term-and-condition -register-modal">
                                          <div class="-inner-wrapper">
                                             <h1 class="f-4">ข้อตกลงในการใช้งาน</h1>
                                             <ul class="list-unstyled -detail">
                                                <li>สมาชิกต้องกรอกข้อมูลจริงให้สมบูรณ์และสามารถติดต่อได้ เพื่อเปิดบัญชี WM Casino (บริษัทจำกัดคนละบัญชีเท่านั้น)</li>
                                                <li>ชื่อ-นามสกุล กับ ชื่อในข้อมูลธนาคารที่ให้สำหรับการฝาก/ถอน ต้องตรงกัน (บริษัทอนุมัติเฉพาะรายการที่ข้อมูลตรงกับข้อมูลสมาชิกเท่านั้น หากมีข้อผิดพลาดจากสมาชิกบริษัทจะไม่รับผิดชอบใดๆ)</li>
                                                <li>ทุกข้อเสนอจำกัดสำหรับหนึ่ง บุคคล, ชื่อ หรือ สกุล , ที่อยุ่ , อีเมล์ , เบอร์โทรศัพท์, บัญชีธนาคาร , IP แอดเดรส เดียวเท่านั้น (บริษัทมีระบบตรวจสอบ การใช้ข้อมูล การเข้าใช้ ที่ซ้ำซ้อนกัน)</li>
                                                <li>สมาชิกที่ต้องการเปลี่ยนแปลงข้อมูล จะต้องไม่ติดกิจกรรมใดๆ และเคยฝากเงินแล้วเท่านั้น</li>
                                                <li>สมาชิกต้องวางเดิมพัน จึงจะสามารถถอนเงินได้ ( ไม่สามารถฝาก และถอนเงินทันทีโดยที่ไม่วางเดิมพัน )</li>
                                                <li>ในกรณีตรวจพบว่าสมาชิก ฝาก/ถอน ผิดปกติเพื่อก่อกวน เอาเปรียบบริษัท หรือคาดว่าเป็นมิจฉาชีพ ทีมงานขอสงวนสิทธิ์ในการระงับยูสเซอร์ตรวจสอบ และตัดสิน</li>
                                                <li>ในกรณีตรวจพบว่าท่านสมาชิกมีการละเมิดข้อกำหนดเงื่อนไข หรือมีการกระทำผิดกติกาในการเข้าร่วมโปรโมชั่นเพื่อให้ได้มาซึ่งเครดิต, โบนัสพิเศษ, เทิร์นโอเวอร์ ในทางทุจจริต ทางเราขอสงวนสิทธิ์ในการระงับใช้บัญชีนั้นๆ ทันที และเครดิตที่ได้มาไม่สามารถถอนได้</li>
                                                <li>บริษัทขอสงวนสิทธิ์ในการแก้ไขหรือ ยกเลิกโปรโมชั่นสำหรับท่านสมาชิก ได้โดยอัพเดทหน้าเว็บไซต์ และไม่ต้องแจ้งให้ทราบล่วงหน้า</li>
                                                <li>บริษัทขอสงวนสิทธิ์โดยใช้ดุลยพินิจแต่เพียงผู้เดียวในการทำให้เงินรางวัลเป็นโมฆะและริบยอดเงินใดก็ตามในบัญชีการเดิมพันของคุณ ในการสิ้นสุดข้อตกลงและ/หรือระงับการให้บริการ/ปิดการใช้งานบัญชี</li>
                                                <li>หากเราระบุได้ว่าคุณมีบัญชีกับเรามากกว่าหนึ่งบัญชี</li>
                                                <li>หากคุณกำลังละเมิดข้อกำหนดใดๆ ของข้อตกลงนี้</li>
                                                <li>หาก บริษัททราบว่าคุณได้วางเดิมพันกับเว็บไซต์วางเดิมพันออนไลน์หรือใช้บริการใดก็ตามและถูกสงสัยว่าได้ฉ้อโกง สมรู้ร่วมคิด หรือกิจกรรมที่ไม่เหมาะสมหรือมิชอบด้วยกฎหมาย</li>
                                                <li>หาก คุณไม่สามารถจัดเตรียมข้อมูลการยืนยันตัวตนตามที่ร้องขอ</li>
                                                <li>หากบริษัท ไม่สามารถทำการตรวจสอบ หรือข้อมูลที่ท่านให้มานั้นไม่ถูกต้อง, ข้อมูลเท็จ หรือข้อมูลไม่สมบูรณ์ ทางเราขอสงวนสิทธิ์ที่จะทำการปฏิเสธโดยไม่มีการแจ้งให้ทราบล่วงหน้า หรือไม่รับผิดชอบใดๆในบัญชีของท่าน</li>
                                                <li>หาก คุณฝากเงินด้วยเงินที่ได้มาด้วยการทุจริตหรือมิชอบด้วยกฎหมายหรือได้มาอย่างไม่ถูกต้อง</li>
                                                <li>หากบริษัท สงสัยว่าบัญชีของท่านมีความเกี่ยวข้องกับการฉ้อโกงหรือการกระทำที่เป็นทุจริต</li>
                                                <li>หากบริษัท สงสัยว่าท่าน หรือสมรู้ร่วมคิดกับบุคคลอื่นๆ เพื่อที่จะทำการอย่างใดอย่างหนึ่ง หรือพยายามฉ้อโกงทางเว็บ</li>
                                                <li>หากบริษัท ได้รับแจ้งว่าท่านได้มีการปลอม หรือแทรกแซง หรือดำเนินการขั้นตอนเพื่อทำการปกปิดหรือแทรกแซงในทางใด ๆ ในเรื่องของ IP ในอุปกรณ์ที่ใช้ในการเข้าถึงเว็บไซต์ เช่น Virtual Private Network "VPN"</li>
                                                <li>หากคุณได้มีการใช้โปรแกรม VPN หรือวิธีการใดๆ ที่พยายามจะปลอมแปลง หรือซ่อนตัวตนที่แท้จริงของท่าน หรือการตรวจสอบตามขอบเขตอำนาจด้านการพนัน</li>
                                             </ul>
                                             <b>**บริษัท WM Casino เป็นผู้ตัดสินเพียงผู้เดียวและคำตัดสินใจถือเป็นที่สิ้นสุด**</b>
                                          </div>
                                       </div>
                                       <div class="text-center d-lg-none">
                                          <a href="#close-term-and-condition" class="js-get-term-and-condition btn -submit btn-primary my-0 my-lg-3">
                                          <span>ย้อนกลับ</span>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div data-animatable="fadeInRegister" data-offset="0" class="col order-lg-2 order-0 -form  fadeInRegister">
                              <div class="x-modal-separator-container ">
                                 <div class="-top ">
                                    <h3 class="x-title-modal mx-auto text-center ">
                                       กรอกเบอร์โทรศัพท์
                                    </h3>
                                    <div class="-fake-inner-body">
                                       <div class="x-step-register">
                                          <div class="px-0 m-auto -container-wrapper">
                                             <div class="-step-box-outer step-active"></div>
                                             <div class="-step-box-outer "></div>
                                             <div class="-step-box-outer "></div>
                                             <div class="-step-box-outer "></div>
                                          </div>
                                       </div>
                                       <form novalidate="" name="request_otp" method="post" data-ajax-form="/_ajax_/request-otp" data-container="#registerModal">
                                          <div class="-img-container">
                                             <img src="assets2/build/web/igame-index-lobby-wm/img/register-icon-first-step.png" alt="สมัครสมาชิก" class="img-fluid -ic-register" width="150" height="150">
                                          </div>
                                          <div class="-x-input-icon mb-3 text-center">
                                             <img src="assets2/build/web/igame-index-lobby-wm/img/ic-input-phone.png" class="-icon" alt="SA Casino phone icon" width="10" height="14">
                                             <input type="text" id="request_otp_phoneNumber" name="request_otp[phoneNumber]" required="required" pattern="[0-9]*" class="x-form-control form-control" placeholder="กรุณากรอกเบอร์โทรศัพท์" autofocus="autofocus" autocomplete="on" inputmode="text">        
                                          </div>
                                          <div class="m-auto -term-and-condition-check-box">
                                             <div class="x-checkbox-primary d-flex justify-content-center mt-3">
                                                <div class="form-check">        <input type="checkbox" id="request_otp_termAndCondition" name="request_otp[termAndCondition]" class="x-form-control js-term-check-box form-check-input" value="1">
                                                   <label class="form-check-label" for="request_otp_termAndCondition">        </label>
                                                </div>
                                                <span class="x-text-with-link-component">
                                                <label class="-text-message mt-1" for="request_otp_termAndCondition">ยอมรับเงื่อนไข</label>
                                                <a href="#term-and-condition" class="-link-message js-get-term-and-condition" target="_self" rel="noopener noreferrer">
                                                <u>Term &amp; Condition</u>
                                                </a>
                                                </span>
                                             </div>
                                          </div>
                                          <div class="text-center">
                                             <button type="submit" class="btn  -submit js-submit-accept-term btn-primary mt-lg-3 mt-0" disabled="">
                                             ยืนยัน
                                             </button>
                                          </div>
                                          <input type="hidden" id="request_otp__token" name="request_otp[_token]" value="ds26nEjb1GacmW8racC7ScvGiCgTEnPl5xKWBzZyMWc">        
                                       </form>
                                    </div>
                                 </div>
                                 <div class="-bottom ">
                                    <div class="x-admin-contact text-center ">
                                       <span class="x-text-with-link-component">
                                       <label class="-text-message ">พบปัญหา</label>
                                       <a href="<?php echo $Get_Setting->lineoa; ?>" class="-link-message " target="_blank" rel="noopener noreferrer">
                                       <u>ติดต่อฝ่ายบริการลูกค้า</u>
                                       </a>
                                       </span>
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
         <div class="x-modal modal " id="resetPasswordModal" tabindex="-1" role="dialog" aria-hidden="true"  data-container="#resetPasswordModal">
            <div class="modal-dialog -modal-size modal-dialog-centered modal-dialog-scrollable " role="document">
               <div class="modal-content -modal-content">
                  <button type="button" class="close f-1 " data-dismiss="modal" aria-label="Close">
                  <i class="fas fa-times"></i>
                  </button>
                  <div class="modal-header -modal-header">
                     <h3 class="x-title-modal m-auto">
                        ลืมรหัสผ่าน
                     </h3>
                  </div>
                  <div class="modal-body -modal-body">
                     <div class="x-modal-separator-container ">
                        <div class="-top ">
                           <form novalidate="" name="phone_number" method="post" data-ajax-form="/_ajax_/reset-password" data-container="#resetPasswordModal">
                              <div class="text-center d-flex flex-column">
                                 <div class="text-center -img-container">
                                    <img src="assets2/build/web/igame-index-lobby-wm/img/ic-reset-password.png" alt="ลืมรหัสผ่าน" class="img-fluid -ic-register" width="160" height="101">
                                 </div>
                                 <div class="-x-input-icon mb-3 flex-column text-center">
                                    <img src="assets2/build/web/igame-index-lobby-wm/img/ic-input-phone.png" class="-icon img-fluid" alt="SA Casino phone icon" width="10" height="14">
                                    <input type="text" id="phone_number_phoneNumber" name="phone_number[phoneNumber]" required="required" pattern="[0-9]*" class="x-form-control form-control" placeholder="เบอร์โทรศัพท์ที่เคยลงทะเบียน" autofocus="autofocus" autocomplete="on" inputmode="text">        
                                 </div>
                                 <div class="text-center">
                                    <button type="submit" class="btn -submit btn-primary my-lg-3 mt-0">
                                    ยืนยัน
                                    </button>
                                 </div>
                              </div>
                              <input type="hidden" id="phone_number__token" name="phone_number[_token]" value="HqmR014dfy9ntoczFlsBdXJxpTTrQApRUP7nq2Q8zsc">        
                           </form>
                        </div>
                        <div class="-bottom ">
                           <div class="x-admin-contact ">
                              <span class="x-text-with-link-component">
                              <label class="-text-message ">พบปัญหา</label>
                              <a href="<?php echo $Get_Setting->lineoa; ?>" class="-link-message " target="_blank" rel="noopener noreferrer">
                              <u>ติดต่อฝ่ายบริการลูกค้า</u>
                              </a>
                              </span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="x-modal modal " id="alertModal" tabindex="-1" role="dialog" aria-hidden="true" data-loading-container=".js-modal-content" data-ajax-modal-always-reload="true">
            <div class="modal-dialog -modal-size  " role="document">
               <div class="modal-content -modal-content">
                  <button type="button" class="close f-1 " data-dismiss="modal" aria-label="Close">
                  <i class="fas fa-times"></i>
                  </button>
                  <div class="modal-header -modal-header">
                     <h3 class="x-title-modal d-inline-block m-auto">
                        <span>แจ้งเตือน</span>
                     </h3>
                  </div>
                  <div class="modal-body -modal-body">
                     <div class="text-center my-3">
                        <img data-src="assets2/build/web/igame-index-lobby-wm/img/ic-alert-success.png" alt="SUCCESS" class="js-ic-success -img img-fluid lazyload" width="100" height="100">
                        <img data-src="assets2/build/web/igame-index-lobby-wm/img/ic-alert-failed.png" alt="FAIL" class="js-ic-fail -img img-fluid lazyload" width="100" height="100">
                     </div>
                     <div class="js-modal-content text-center f-4"></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="x-right-sidebar-container">
         </div>
         <div class="x-modal modal " id="themeSwitcherModal" tabindex="-1" role="dialog" aria-hidden="true" data-loading-container=".js-modal-content" data-ajax-modal-always-reload="true">
            <div class="modal-dialog -modal-size modal-dialog-centered modal-dialog-scrollable modal-dialog-centered modal-dialog-scrollable" role="document">
               <div class="modal-content -modal-content">
                  <div class="modal-body -modal-body">
                     <div class="x-theme-switcher">
                        <ul class="nav">
                           <li class="nav-item -sa " data-animatable="fadeInUp" data-delay="100">
                              <a href="/" class="nav-link" rel="ugc,nofollow">
                                 <img src="assets2/build/web/shared/img/logo-sa-1.png" alt="SA Casino คาสิโนออนไลน์ สล็อตออนไลน์ ดีที่สุดในประเทศไทย logo png" class="-logo" width="50" height="50">
                                 <div class="-text">SA Casino</div>
                              </a>
                           </li>
                           <li class="nav-item -wm -active" data-animatable="fadeInUp" data-delay="100">
                              <a href="/" class="nav-link" rel="ugc,nofollow">
                                 <img src="assets2/build/web/shared/img/logo-wm-1.png" alt="WM Casino คาสิโนออนไลน์ สล็อตออนไลน์ ดีที่สุดในประเทศไทย logo png" class="-logo" width="50" height="50">
                                 <div class="-text">WM Casino</div>
                              </a>
                           </li>
                           <li class="nav-item -sexy " data-animatable="fadeInUp" data-delay="100">
                              <a href="/" class="nav-link" rel="ugc,nofollow">
                                 <img src="assets2/build/web/shared/img/logo-sexy-1.png" alt="Sexy Gaming คาสิโนออนไลน์ สล็อตออนไลน์ ดีที่สุดในประเทศไทย logo png" class="-logo" width="50" height="50">
                                 <div class="-text">Sexy Gaming</div>
                              </a>
                           </li>
                           <li class="nav-item -dream " data-animatable="fadeInUp" data-delay="100">
                              <a href="/" class="nav-link" rel="ugc,nofollow">
                                 <img src="assets2/build/web/shared/img/logo-dream-1.png" alt="Dream Gaming คาสิโนออนไลน์ สล็อตออนไลน์ ดีที่สุดในประเทศไทย logo png" class="-logo" width="50" height="50">
                                 <div class="-text">Dream Gaming</div>
                              </a>
                           </li>
                           <li class="nav-item -pretty " data-animatable="fadeInUp" data-delay="100">
                              <a href="/" class="nav-link" rel="ugc,nofollow">
                                 <img src="assets2/build/web/shared/img/logo-pretty-1.png" alt="Pretty Gaming คาสิโนออนไลน์ สล็อตออนไลน์ ดีที่สุดในประเทศไทย logo png" class="-logo" width="50" height="50">
                                 <div class="-text">Pretty Gaming</div>
                              </a>
                           </li>
                           <li class="nav-item -ae " data-animatable="fadeInUp" data-delay="100">
                              <a href="/" class="nav-link" rel="ugc,nofollow">
                                 <img src="assets2/build/web/shared/img/logo-ae-1.png" alt="AE Sexy คาสิโนออนไลน์ สล็อตออนไลน์ ดีที่สุดในประเทศไทย logo png" class="-logo" width="50" height="50">
                                 <div class="-text">AE Sexy</div>
                              </a>
                           </li>
                           <li class="nav-item -allbet " data-animatable="fadeInUp" data-delay="100">
                              <a href="/" class="nav-link" rel="ugc,nofollow">
                                 <img src="assets2/build/web/shared/img/logo-allbet-1.png" alt="Allbet คาสิโนออนไลน์ สล็อตออนไลน์ ดีที่สุดในประเทศไทย logo png" class="-logo" width="50" height="50">
                                 <div class="-text">Allbet</div>
                              </a>
                           </li>
                           <li class="nav-item -eg " data-animatable="fadeInUp" data-delay="100">
                              <a href="/" class="nav-link" rel="ugc,nofollow">
                                 <img src="assets2/build/web/shared/img/logo-eg.png" alt="Evo Gaming คาสิโนออนไลน์ สล็อตออนไลน์ ดีที่สุดในประเทศไทย logo png" class="-logo" width="50" height="50">
                                 <div class="-text">Evo Gaming</div>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>


<!-- หน้าโปรโมชั่น -->
         <div class="x-modal modal -hello-popup" id="promotionSuggestionModal" tabindex="-1" role="dialog" data-loading-container=".js-modal-content" data-ajax-modal-always-reload="true" style="padding-right: 6px;" aria-modal="true">
            <div class="modal-dialog -modal-size modal-dialog-centered modal-dialog-scrollable -no-fixed-button" role="document">
               <div class="modal-content -modal-content">
                  <button type="button" class="close f-1 " data-dismiss="modal" aria-label="Close">
                  <i class="fas fa-times"></i>
                  </button>
                  <!-- <div class="modal-header border-bottom-0">
                     <img alt="โปรโมชั่น Welcome Back ยินดีต้อนรับกลับ" class="-logo js-modal-header-image  fadeInModal" width="700" height="300" data-animatable="fadeInModal" data-offset="0" src="assets2/build/web/igame-index-lobby-wm/img/hello-popup-title.png">
                  </div> -->
                  <div class="modal-body -modal-body">
                     <div class="js-modal-content">
                        <div class="x-promotion-hello-modal-body">
                           <div class="-promotion-list-wrapper">
                              <div class="-promotion-list-item ">
                                 <a href="https://www.facebook.com/profile.php?id=100056862386320" class="btn -btn js-promotion-apply  fadeIn"  data-offset="0">
                                    <div class="-badge-wrapper">
                                       <img src="assets2/build/web/igame-index-lobby-wm/img/hello-badge-bg.png" class="-img" alt="ยินดีต้อนรับ สู่เว็บอันดับ 1" width="130" height="33">
                                       <span class="-title">แนะนำ</span>
                                    </div>
                                    <!-- <img src="assets2/build/web/shared/img/hello-promotion-thumbnail-1.png" class="-thumbnail" alt="ยินดีต้อนรับ สู่เว็บอันดับ 1 ฝาก  1,000 รับ 100" width="140" height="140"> -->

                                    <div class="-content" style="margin-top:20px">
                                       <span class="-text -deposit">ติดต่อทำเว็ปหรือซื้อขายได้ที่</span>
                                       <span class="-text -deposit">เฟสบุ๊คและไลน์</span>
                                       <span class="-text -bonus">
                                       <img src="assets2/build/web/shared/img/hello-stars.png" class="-ic-star" alt="ยินดีต้อนรับ สู่เว็บอันดับ 1">
                                       <i>ด้านล่าง เท่านั้น</i>
                                       </span>
                                    </div>
                                    <img src="assets2/build/web/shared/img/hello-promotion-light-top.png" class="-light -top" alt="ยินดีต้อนรับ สู่เว็บอันดับ 1">
                                    <img src="assets2/build/web/shared/img/hello-promotion-light-bottom.png" class="-light -bottom" alt="ยินดีต้อนรับ สู่เว็บอันดับ 1">
                                 </a><br>
                              <center><a href="https://www.facebook.com/profile.php?id=100056862386320" type="btn" class="btn btn-primary">ลิ้งค์เฟสบุ๊ค</a>
                              <a href="http://line.me/ti/p/~lllsasorilll" type="btn" class="btn btn-primary">ลิ้งค์ไลน์</a></center><br>
                              <a href="https://www.facebook.com/profile.php?id=100056862386320" class="btn -btn js-promotion-apply  fadeIn"  data-offset="0">
                                    <!-- <div class="-badge-wrapper">
                                       <img src="assets2/build/web/igame-index-lobby-wm/img/hello-badge-bg.png" class="-img" alt="ยินดีต้อนรับ สู่เว็บอันดับ 1" width="130" height="33">
                                       <span class="-title">โปรดระวัง</span>
                                    </div> -->
                                    <!-- <img src="assets2/build/web/shared/img/hello-promotion-thumbnail-1.png" class="-thumbnail" alt="ยินดีต้อนรับ สู่เว็บอันดับ 1 ฝาก  1,000 รับ 100" width="140" height="140"> -->
                                    <div class="-content">
                                       <span class="-text -deposit">โปรดระวังผู้แอบอ้าง</span>
                                       <span class="-text -deposit">กรุณาติดต่อตามลิ้งค์เท่านั้น</span>
                                       <!-- <span class="-text -bonus">
                                       <img src="assets2/build/web/shared/img/hello-stars.png" class="-ic-star" alt="ยินดีต้อนรับ สู่เว็บอันดับ 1">
                                       <i>ภูจิตา ภูลลิน เท่านั้น</i>
                                       </span> -->
                                    </div>
                                    <img src="assets2/build/web/shared/img/hello-promotion-light-top.png" class="-light -top" alt="ยินดีต้อนรับ สู่เว็บอันดับ 1">
                                    <img src="assets2/build/web/shared/img/hello-promotion-light-bottom.png" class="-light -bottom" alt="ยินดีต้อนรับ สู่เว็บอันดับ 1">
                                 </a>
                              </div>
                           </div>
                           <ul class="list-group list-group-horizontal -service-list-container  fadeInUp" data-animatable="fadeInUp" data-offset="0">
                              <li class="list-group-item -service-list-item">
                                 <img src="assets2/img/รับทำเว็ป.jpg" class="-thumbnail" alt="ยินดีต้อนรับ สู่เว็บอันดับ 1" width="100%" height="100%">
                                 
                              </li>
                              <li class="list-group-item -service-list-item">
                                 <img src="assets2/img/รายละเอียด.jpg" class="-thumbnail" alt="ยินดีต้อนรับ สู่เว็บอันดับ 1" width="100" height="100">
                                 
                              </li>
                           </ul>
                              <!-- <li class="list-group-item -service-list-item">
                                 <img src="assets2/build/web/shared/img/hello-zean.png" class="-thumbnail" alt="ยินดีต้อนรับ สู่เว็บอันดับ 1" width="100" height="100">
                                 <span class="-text">เซียนนำเล่น <br> ไลฟ์สดทุกวัน</span>
                              </li>
                              <li class="list-group-item -service-list-item">
                                 <img src="assets2/build/web/shared/img/hello-ranking.png" class="-thumbnail" alt="ยินดีต้อนรับ สู่เว็บอันดับ 1" width="100" height="100">
                                 <span class="-text">ลุ้นรับรางวัล <br> 400,000 ทุกสัปดาห์</span>
                              </li>
                              <li class="list-group-item -service-list-item">
                                 <img src="assets2/build/web/shared/img/hello-return.png" class="-thumbnail" alt="ยินดีต้อนรับ สู่เว็บอันดับ 1" width="100" height="100">
                                 <span class="-text">ได้ให้เพิ่ม <br> เสียให้คืนทุกสัปดาห์</span>
                              </li>
                           </ul> -->
                           <div class="-effect -item-1">
                              <img src="assets2/build/web/igame-index-lobby-wm/img/welcome-back-effect-1.png" class="-img  fadeIn" alt="รูปเหรียญโปรโมชั่นต้อนรับกลับ" data-animatable="fadeIn" data-offset="0" data-delay="100">
                           </div>
                           <div class="-effect -item-2">
                              <img src="assets2/build/web/igame-index-lobby-wm/img/welcome-back-effect-2.png" class="-img  fadeIn" alt="รูปเหรียญโปรโมชั่นต้อนรับกลับ" data-animatable="fadeIn" data-offset="0" data-delay="200">
                           </div>
                           <div class="-effect -item-3">
                              <img src="assets2/build/web/igame-index-lobby-wm/img/welcome-back-effect-3.png" class="-img  fadeIn" alt="รูปเหรียญโปรโมชั่นต้อนรับกลับ" data-animatable="fadeIn" data-offset="0" data-delay="300">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
<!-- หน้าโปรโมชั่น -->
<!-- หน้าเลือกโปรก่อนเติม -->
         <div class="x-modal modal chooseprodps show" id="depositChoosePromotionModal" tabindex="-1" role="dialog" data-container="#depositChoosePromotionModal" style="padding-right: 6px;" aria-modal="true">
            <div class="modal-dialog -modal-size modal-dialog-centered modal-dialog-scrollable         -modal-bigger -modal-deposit-promotion -no-fixed-button
               " role="document">
               <div class="modal-content -modal-content">
                  <button type="button" class="close f-1 " data-dismiss="modal" aria-label="Close">
                  <i class="fas fa-times"></i>
                  </button>
                  <div class="modal-header -modal-header">
                     <h3 class="x-title-modal m-auto">
                        เลือกโปรโมชั่น
                     </h3>
                  </div>
                  <div class="modal-body -modal-body">
                     <div class="x-deposit-promotion d-flex flex-column">
                        <div class="-promotion-container row">
                           <a href="#deposit" class="col-md-4 col-sm-6 col-12 js-account-approve-aware js-cancel-promotion -promotion-card-link cancel-probtn" data-toggle="modal" data-target="#depositModal">
                              <div class="x-card card -pure-deposit">
                                 <div class="-img-container">
                                    <img src="assets2/build/web/igame-index-lobby-wm/img/ic-promotion-not-received.png" alt="บาคาร่า คาสิโน สล็อตออนไลน์ promotion default" class="-img-no-accept-promotion -img img-fluid">
                                 </div>
                                 <div class="card-body">
                                    <img src="assets2/build/web/igame-index-lobby-wm/img/text-no-accept-promotion.png" alt="บาคาร่า คาสิโน สล็อตออนไลน์ promotion default" class="-img-text-no-accept-promotion img-fluid">
                                 </div>
                                 <div class="card-footer">
                                    <button class="btn -btn -cancel-promotion-btn">
                                    <span>ไม่รับโปรโมชั่น</span>
                                    </button>
                                 </div>
                              </div>
                           </a>
                           <!-- <div class="col-md-4 col-sm-6 col-12 -promotion-card-link -real-content">
                              <a href="#0" class="d-block h-100 confirm-probtn" data-toggle="modal" data-target="#ProDetailModal">
                                 <div class="x-card card -promotion">
                                    <div class="-img-container ">
                                       <img data-src="https://wm.bet/media/cache/strip/202110/promotion/91f42dd6c7856b300212e4fe7b39ca37.png" class="-img-promotion -img img-fluid ls-is-cached lazyloaded" alt="ฝาก 1000 ฟรี 100 ไม่ติดเงื่อนไข" width="500" height="500" src="https://wm.bet/media/cache/strip/202110/promotion/91f42dd6c7856b300212e4fe7b39ca37.png">
                                    </div>
                                    <div class="card-body">
                                       <img data-src="https://wm.bet/media/cache/strip/202110/promotion/465ff7aaef749f6108ddbd0370c9c53d.png" class="-img-text-promotion img-fluid ls-is-cached lazyloaded" alt="ฝาก 1000 ฟรี 100 ไม่ติดเงื่อนไข" width="350" height="120" src="https://wm.bet/media/cache/strip/202110/promotion/465ff7aaef749f6108ddbd0370c9c53d.png">
                                    </div>
                                    <div class="card-footer">
                                       <button class="btn -btn -get-promotion-btn" >
                                       <span>ยืนยัน</span>
                                       </button>
                                    </div>
                                 </div>
                              </a>
                           </div>
                           <div class="col-md-4 col-sm-6 col-12 -promotion-card-link -real-content">
                              <a href="#0" class="d-block h-100 confirm-probtn" data-toggle="modal" data-target="#ProDetailModal">
                                 <div class="x-card card -promotion">
                                    <div class="-img-container ">
                                       <img data-src="https://wm.bet/media/cache/strip/202110/promotion/340959325596f065e86cf814776ed689.png" class="-img-promotion -img img-fluid ls-is-cached lazyloaded" alt="ฟรี 2% ทุกยอดฝาก" width="500" height="500" src="https://wm.bet/media/cache/strip/202110/promotion/340959325596f065e86cf814776ed689.png">
                                    </div>
                                    <div class="card-body">
                                       <img data-src="https://wm.bet/media/cache/strip/202110/promotion/cc05e887f63f3e822ea3d0c34a303d47.png" class="-img-text-promotion img-fluid ls-is-cached lazyloaded" alt="ฟรี 2% ทุกยอดฝาก" width="350" height="120" src="https://wm.bet/media/cache/strip/202110/promotion/cc05e887f63f3e822ea3d0c34a303d47.png"> -->
                                    </div>
                                    <div class="card-footer">
                                       <button class="btn -btn -get-promotion-btn">
                                       <span>ยืนยัน</span>
                                       </button>
                                    </div>
                                 </div>
                              </a>
                           </div>
                        </div>
                        <div class="my-3 mt-auto">
                           <div class="x-admin-contact -bg -no-fixed">
                              <span class="x-text-with-link-component">
                              <label class="-text-message ">ติดปัญหา</label>
                              <a href="<?php echo $Get_Setting->lineoa; ?>" class="-link-message " target="_blank" rel="noopener noreferrer">
                              <u>ติดต่อฝ่ายบริการลูกค้า</u>
                              </a>
                              </span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
<!-- หน้าเลือกโปรก่อนเติม -->
<!-- เติมเงิน -->
         <div class="x-modal modal show" id="depositModal" tabindex="-1" role="dialog" style=" padding-right: 6px;" aria-modal="true">
            <div class="modal-dialog -modal-size modal-dialog-centered modal-dialog-scrollable -modal-deposit" role="document">
            <div class="modal-content -modal-content" style="
    padding-bottom: 0px;
    margin-top: 50px;
">
                  <button type="button" class="close f-1 " data-dismiss="modal" aria-label="Close">
                  <i class="fas fa-times"></i>
                  </button>
                  <div class="modal-header -modal-header">
                     <h3 class="x-title-modal m-auto">
                        ฝากเงิน
                     </h3>
                  </div>
                  <div class="modal-body -modal-body">
                     <div class="x-deposit-form">
                        <div class="row -deposit-container">
                           <div data-animatable="fadeInModal" class="col-lg order-lg-2 -form order-0  fadeInModal">
                              <div class="-deposit-notice-inner-wrapper">
                                 <div class="x-deposit-notice  ">
                                    <div class="-noted">
                                       <div class="-text-wrapper">หากต้องการรับโปรโมชั่น  <br class="d-none d-md-block">ต้องเลือกโปรโมชั่นก่อนโอนเงินนะคะ</div>
                      <div class="form-group ">
        
     
    
        <center><label class="control-label requiredField" for="pro">
            เลือกรับโปรโมชั่นที่ท่านต้องการ
            <span class="asteriskField">
                *
            </span>
        </label></center>
        <select id="promotion_dp" class="form-control" style=" font-family: 'Mitr', sans-serif; font-size: 0.8em" required="required">
            <option></option>
            <!-- <option value="ไม่รับโบนัส">ไม่รับโบนัส ไม่ต้องทำเทิร์น</option> -->
            
            <?php
						  $get_check_pro = $class->check_pro();
						  $show_pro1 = $class->show_pro1();
						  $show_pro2 = $class->show_pro2();
						  if ($get_check_pro > 0) {
							  foreach ($show_pro1 as  $row) {
								echo '<option value="'.$row["name_pro"].'">'.$row["name_pro"].' '.$row["time_pro"].'</option>';
							  }
						  }else{					 
							  foreach ($show_pro2 as  $row) {
								  echo '<option value="'.$row["name_pro"].'">'.$row["name_pro"].' '.$row["time_pro"].'</option>';
							  }
						  }
						?>

        </select>
    </div>
    
    <center><button type="button" id="submit_deposit" class="btn btn-success">ยืนยันรับโปรโมชั่น</button></center><br><br>

                                    </div> 

                               
                             
                                    <?php 
                                  $querybank1 = "SELECT * FROM bank WHERE bankfor LIKE '%ฝาก%' AND status_bank ='เปิด'";
                                  $resultbank1 = $class->Query_Mysqli($querybank1);
               
                                 ?>
                                 <?php
                                 while($bank1 = mysqli_fetch_array($resultbank1)) { ?>
                                    <div class="-bank-info">
                                       <?php echo "<img src='/assets/img/icon_bank/".$bank1['name_bank'].".png'style='margin-bottom: 5px;'" ."class='-img' alt='Notice alert image png'>"; ?>
                                       
                                       <div class="-details">
                                          <div class="-normal-text">เลขบัญชี : <?php echo $bank1['bankacc_bank']; ?></div>
                                          <div class="-normal-text">ธนาคาร : <?php echo $bank1['name_bank']; ?></div>
                                          <div class="-normal-text">ชื่อบัญชี : <?php echo $bank1['nameacc_bank']; ?></div>
                                       </div>
                                       <button class="btn btn-success -btn js-copy-to-clipboard" data-container="depositModal" data-message="คัดลอกแล้ว" data-copy-me="<?php echo $bank1['bankacc_bank']; ?>">คัดลอก</button>
                                    </div><?php } ?>
                                    <a href="<?php echo $Get_Setting->lineoa; ?>"  type="button" class="btn btn-block btn-primary -submit mt-4">ติดต่อแอดมิน</a>

                                    <!-- <button type="button" class="btn btn-block btn-primary -submit mt-4 js-deposit-notice-confirm">ติดต่อแอดมิน</button> -->
                                    <div class="mt-4">
                                       <div class="x-admin-contact -no-fixed">
                                          <span class="x-text-with-link-component">
                                          <label class="-text-message ">หากพบปัญหา</label>
                                          <a href="<?php echo $Get_Setting->lineoa; ?>" class="-link-message " target="_blank" rel="noopener noreferrer">
                                          <u>ติดต่อฝ่ายบริการลูกค้า</u>
                                          </a>
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="-deposit-form-inner-wrapper d-none">
                                 <form novalidate="" name="deposit" method="post" data-ajax-form="/account/_ajax_/deposit" data-container="#depositModal">
                                    <div class="-modal-body-top">
                                       <div class="text-center d-flex flex-column">
                                          <div class="m-auto">
                                             <img src="assets2/build/web/igame-index-lobby-wm/img/ic-deposit-heading.png" class="img-fluid -ic-deposit" alt="ฝากเงินออโต้ 24 ชั่วโมง คาสืโนออนไลน์" width="140" height="140">
                                          </div>
                                       </div>
                                       <div class="-promotion-intro-deposit">
                                          <a href="#deposit-choose-promotion" class="-deposit-back-btn js-account-approve-aware btn -back-btn" data-toggle="modal" data-target="#depositChoosePromotionModal" data-dismiss="modal">
                                             <div class="-text">ต้องการรับโปรโมชั่น</div>
                                          </a>
                                          <div class="js-promotion-active-html">
                                          </div>
                                       </div>
                                       <div class="-x-input-icon x-input-operator mb-4 flex-column">
                                          <button type="button" class="-icon-left -btn-icon js-adjust-amount-by-operator" data-operator="-" data-value="10">
                                          <i class="fas fa-minus-circle"></i>
                                          </button>
                                          <input type="text" id="deposit_amount" name="deposit[amount]" required="required" pattern="[0-9]*" class="x-form-control -text-big text-center js-deposit-input-amount form-control" placeholder="เงินฝากขั้นต่ำ 100" inputmode="text">        
                                          <button type="button" class="-icon-right -btn-icon js-adjust-amount-by-operator" data-operator="+" data-value="10">
                                          <i class="fas fa-plus-circle"></i>
                                          </button>
                                       </div>
                                       <div class="x-select-amount js-quick-amount" data-target-input="#deposit_amount">
                                          <div class="-amount-container">
                                             <button type="button" class="btn btn-block -btn-select-amount" data-amount="100">
                                             <img src="assets2/build/web/igame-index-lobby-wm/img/deposit-coin.png" class="-deposit-coin" alt="SA Casino select amount image">
                                             <span class="-no">100</span>
                                             </button>
                                          </div>
                                          <div class="-amount-container">
                                             <button type="button" class="btn btn-block -btn-select-amount" data-amount="300">
                                             <img src="assets2/build/web/igame-index-lobby-wm/img/deposit-coin.png" class="-deposit-coin" alt="SA Casino select amount image">
                                             <span class="-no">300</span>
                                             </button>
                                          </div>
                                          <div class="-amount-container">
                                             <button type="button" class="btn btn-block -btn-select-amount" data-amount="500">
                                             <img src="assets2/build/web/igame-index-lobby-wm/img/deposit-coin.png" class="-deposit-coin" alt="SA Casino select amount image">
                                             <span class="-no">500</span>
                                             </button>
                                          </div>
                                          <div class="-amount-container">
                                             <button type="button" class="btn btn-block -btn-select-amount" data-amount="1000">
                                             <img src="assets2/build/web/igame-index-lobby-wm/img/deposit-coin.png" class="-deposit-coin" alt="SA Casino select amount image">
                                             <span class="-no">1000</span>
                                             </button>
                                          </div>
                                          <div class="-amount-container">
                                             <button type="button" class="btn btn-block -btn-select-amount" data-amount="5000">
                                             <img src="assets2/build/web/igame-index-lobby-wm/img/deposit-coin.png" class="-deposit-coin" alt="SA Casino select amount image">
                                             <span class="-no">5000</span>
                                             </button>
                                          </div>
                                          <div class="-amount-container">
                                             <button type="button" class="btn btn-block -btn-select-amount" data-amount="10000">
                                             <img src="assets2/build/web/igame-index-lobby-wm/img/deposit-coin.png" class="-deposit-coin" alt="SA Casino select amount image">
                                             <span class="-no">10000</span>
                                             </button>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="text-center">
                                       <button type="submit" class="btn -submit btn-primary my-0 my-lg-3">
                                       ยืนยัน
                                       </button>
                                    </div>
                                    <div class="x-admin-contact ">
                                       <span class="x-text-with-link-component">
                                       <label class="-text-message ">พบปัญหา</label>
                                       <a href="<?php echo $Get_Setting->lineoa; ?>" class="-link-message " target="_blank" rel="noopener noreferrer">
                                       <u>ติดต่อฝ่ายบริการลูกค้า</u>
                                       </a>
                                       </span>
                                    </div>
                                    <input type="hidden" id="deposit__token" name="deposit[_token]" value="d8iYDTklPETlCIEBA5CM4b1J9xZS1ZFfMKUoJ-c21fE">        
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
<!-- เติมเงิน -->
<!-- หน้าถอนเงิน -->
         <div class="x-modal modal show" id="withdrawModal" tabindex="-1" role="dialog" data-container="#withdrawModal" style=" padding-right: 6px;" aria-modal="true">
            <div class="modal-dialog -modal-size modal-dialog-centered modal-dialog-scrollable -modal-mobile" role="document">
            <div class="modal-content -modal-content" style="
    padding-bottom: 0px;
    margin-top: 50px;
">
                  <button type="button" class="close f-1 " data-dismiss="modal" aria-label="Close">
                  <i class="fas fa-times"></i>
                  </button>
                  <div class="modal-header -modal-header">
                     <h3 class="x-title-modal m-auto">
                        ถอนเงิน
                     </h3>
                  </div>
                  <div class="modal-body -modal-body">
                     <div class="x-withdraw-form">
                       
                           <div data-animatable="fadeInModal" class="-animatable-container  fadeInModal">
                              <div class="text-center d-flex flex-column">
                                 <div class="m-auto">
                                    <img src="assets2/build/web/igame-index-lobby-wm/img/ic-withdraw-heading.png" class="img-fluid -ic-withdraw" alt="ถอนเงินออโต้ 24 ชั่วโมง คาสืโนออนไลน์" width="140" height="140">
                                 </div>
								 <?php
									$get_deposit_latest = $class->deposit_latest();
									if (empty($get_deposit_latest)) {
										$lastpro = "";
										$get_turnover = 0;
									}else{
										$lastpro = $get_deposit_latest->promotion_dp;
										$get_turnover = $get_deposit_latest->turnover;
									}
									?>
            <div class="headerbankdt mt-3 mb-1">
                                          ยอดเงินคงเหลือ : <font color="#fff200"><?php echo $_SESSION["Balance"];  ?></font><br>
                  ยอดเทิร์นโอเวอร์ : <font color="#fff200"><?php echo $_SESSION["Balance"];  ?></font> / <?php echo $get_turnover; ?>
               </div>

                                 <div class="-x-input-icon x-input-operator mb-3 flex-column">
                                    <button type="button" class="-icon-left -btn-icon js-adjust-amount-by-operator" data-operator="-" data-value="10">
                                    <i class="fas fa-minus-circle"></i>
                                    </button>
                                    <input type="text" id="amount_wd" required="required" pattern="[0-9]*" class="x-form-control -text-big text-center js-withdraw-input-amount form-control" placeholder="เงินถอนขั้นต่ำ <?php echo $set_wd; ?>" inputmode="text">        
                                    <button type="button" class="-icon-right -btn-icon js-adjust-amount-by-operator" data-operator="+" data-value="10">
                                    <i class="fas fa-plus-circle"></i>
                                    </button>
                                 </div>
                              </div>

             
                              <div class="text-center">
                                 <button type="button" id="submit_withdraw" class="btn -submit btn-primary my-0 my-lg-3">
                                 ยืนยัน
                                 </button>
                              </div>
                              <div class="x-admin-contact  ">
                                 <span class="x-text-with-link-component">
                                 <label class="-text-message ">พบปัญหา</label>
                                 <a href="<?php echo $Get_Setting->lineoa; ?>" class="-link-message " target="_blank" rel="noopener noreferrer">
                                 <u>ติดต่อฝ่ายบริการลูกค้า</u>
                                 </a>
                                 </span>
                              </div>
                           </div>       
                      
                     </div>
                  </div>
               </div>
            </div>
         </div>
<!-- หน้าถอนเงิน -->








<div class="x-modal modal -v2 show" id="accountModalMobile" tabindex="-1" role="dialog"  data-container="#accountModalMobile" aria-modal="true">
   <div class="modal-dialog -modal-size  modal-dialog-centered modal-dialog-scrollable -modal-mobile -no-fixed-button" role="document">
   <div class="modal-content -modal-content" style="
    padding-bottom: 0px;
    margin-top: 50px;
">
         <button type="button" class="close f-1 " data-dismiss="modal" aria-label="Close">
         <i class="fas fa-times"></i>
         </button>
         <div class="modal-header -modal-header">
            <div class="x-modal-mobile-header">
               <div class="-header-mobile-container">
                  <h3 class="x-title-modal mx-auto text-center d-inline-block">
                     ข้อมูลบัญชี
                  </h3>
               </div>
            </div>
         </div>
         <div class="modal-body -modal-body">
            <div class="x-account-profile -v2">
               <div data-animatable="fadeInModal" class="-profile-container  fadeInModal">
                  <div class="text-center">
                     <div class="my-3">
                        <div class="x-profile-image">
                           <!-- <img class="img-fluid -profile-image" src="https://wm.bet/media/cache/strip/202006/block/efd5aee5c16d9b646236b68724fa1c97.png" alt="Profile image บาคาร่าออนไลน์ คาสิโนออนไลน์ สล็อตออนไลน์"> -->
                        </div>
                     </div>
                     <div class="my-3">
                        <div class="-text-username">Username:  <?php echo($usernameufa); ?></div>
                      <!--   <a href="#0" class="-link-change-password" data-toggle="collapse" data-target=".js-change-password-collapse"><u>เปลี่ยนรหัสผ่าน</u></a> -->
                        <div class="x-checkbox-primary">
                           <form novalidate="" name="set_un_subscribe_sms" method="post" data-ajax-form="/account/_ajax_/set-sms-subscribe">
                              <input type="hidden" name="_method" value="PUT">
                             <!--  <div id="sms212518001">
                                 <div class="form-group">
                                    <div class="form-check">        <input type="checkbox" id="set_un_subscribe_sms_subscribedToNewsletter" name="set_un_subscribe_sms[subscribedToNewsletter]" required="required" class="form-check-input" value="1" checked="checked">
                                       <label class="form-check-label required" for="set_un_subscribe_sms_subscribedToNewsletter">ติ๊กเพื่อยกเลิกรับ SMS        </label>
                                    </div>
                                 </div>
                              </div> -->
                              <input type="hidden" id="set_un_subscribe_sms__token" name="set_un_subscribe_sms[_token]" value="8J6u6HjOHs6L5XTuw09B7JKI95GYSLv6pPYrraSL1ks">        
                           </form>
                        </div>
                     </div>
                     <div data-ajax-collapse="/account/_ajax_/change-password" class="collapse -change-password-container js-change-password-collapse">
                        <div class="js-collapse-content"></div>
                     </div>
                  </div>
                  <div class="-bank-info-container">
                     <div class="x-customer-bank-info-container -v2">
                        <div class="media m-auto">
                           <img src="assets2/logobank/<?php echo($bank_mb); ?>.png" class="-img rounded-circle" width="50" height="50" alt="bank-bay">
                           <div class="-content-wrapper">
                              <span class="-name"><?php echo($name_mb); ?></span>
                              <span class="-number"><?php echo($bankacc_mb); ?></span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="mt-5">
                     <div class="x-admin-contact -no-fixed">
                        <span class="x-text-with-link-component">
                        <label class="-text-message ">*ต้องการเปลี่ยนบัญชี กรุณา</label>
                        <a href="<?php echo $Get_Setting->lineoa; ?>" class="-link-message " target="_blank" rel="noopener noreferrer">
                        <u>ติดต่อฝ่ายบริการลูกค้า</u>
                        </a>
                        </span>
                     </div>
                  </div>
                  <div class="js-has-info"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>






<div class="x-modal modal -v2 show" id="providerUserModalMobile" tabindex="-1" role="dialog" data-container="#providerUserModalMobile" aria-modal="true">
   <div class="modal-dialog -modal-size  modal-dialog-centered modal-dialog-scrollable -modal-mobile -no-fixed-button" role="document">
   <div class="modal-content -modal-content" style="
    padding-bottom: 0px;
    margin-top: 50px;
">
         <button type="button" class="close f-1 " data-dismiss="modal" aria-label="Close">
         <i class="fas fa-times"></i>
         </button>
         <div class="modal-header -modal-header">
            <div class="x-modal-mobile-header">
               <div class="-header-mobile-container">
                  <h3 class="x-title-modal mx-auto text-center d-inline-block">
                     ประวัติฝาก-ถอน
                  </h3>
               </div>
            </div>
         </div>
         <div class="modal-body -modal-body">
            <div id="accountProviderUser" class="x-account-provider -has-provider">
               <div data-animatable="fadeInModal" class="-account-provider-container  fadeInModal">
                  <div class="-account-provider-inner -scroll x-account-provider-v2">
                     <div class="-provider-row-wrapper">
                        <div class="m-auto ">
                        <h3 class="m-auto text-white d-inline-block">
                           ฝาก 10 รายการล่าสุด
                           <hr class="x-hr-border-glow">
                        </h3>
                     
                        <table class="table table-striped mt-2" >

                           <thead>
                              <tr>
                                 
                                 <th>วันเวลา</th>
                                 <th>สถานะ</th>
                                 <th>ยอดเงิน</th>
                                 <th>โปรโมชั่น</th>
                              </tr>
                           </thead>
                     <?php
                        $querywd = "SELECT * FROM deposit WHERE id_dp = '$id_mb' AND confirm_dp != 'ยกเลิก' ORDER BY id DESC limit 10";
                        $wdwdwd = $class->Query_Mysqli($querywd);
                        // echo $querywd;
                     ?>
                    <?php foreach ($wdwdwd as $rowwd){ ?>
                           <tbody>
                                
                                 <tr>

                                    <td><?php echo $rowwd['date_dp']; ?></td>
                                    <td><?php
                             
                                if ($rowwd["confirm_dp"]=="รอดำเนินการ") {
                                    echo"<span style='background: #c98e15;'>รอดำเนินการ</span>";
                                }
                                    elseif ($rowwd["confirm_dp"]=="อนุมัติ") {
                                        echo"<span style='background: #017a13;'>สำเร็จ</span>";
                                    }
                                    elseif ($rowwd["confirm_dp"]=="ปฏิเสธ") {
                                        echo"<span style='background: #db1b1b;'>ไม่สำเร็จ</span>";
                                    }?></td>
                                    <td><?php echo $rowwd['amount_dp']; ?></td>
                                    <td><?php echo $rowwd['promotion_dp']; ?></td>
                                 </tr>
                                
                              </tbody><?php } ?>
                           </table>
                           <h3 class="m-auto text-white d-inline-block">
                              ถอน 10 รายการล่าสุด
                              <hr class="x-hr-border-glow">
                           </h3>


                           <table class="table table-striped mt-2" >
                              <thead>
                                 <tr>
                                    
                                    <th>วันเวลา</th>
                                    <th>สถานะ</th>
                                    <th>ยอดเงิน</th>
                                    <th>หมายเหตุ</th>
                                 </tr>
                              </thead>
                              <?php
        $querywd = "SELECT * FROM withdraw WHERE username_wd = '$username_mb' AND amount_wd != '' ORDER BY id DESC limit 20";
        $wdwdwd = $class->Query_Mysqli($querywd);
        // echo $querywd;
        ?>
        <?php foreach ($wdwdwd as $rowwd){ ?>
                              <tbody>
                                 
                                    <tr>
                                       <td><?php echo $rowwd['date_wd']; ?></td>
                                       <td><?php
                             
                                if ($rowwd["confirm_wd"]=="รอดำเนินการ") {
                                    echo"<span style='background: #c98e15;'>รอดำเนินการ</span>";
                                }
                                    elseif ($rowwd["confirm_wd"]=="อนุมัติ") {
                                        echo"<span style='background: #017a13;'>สำเร็จ</span>";
                                    }
                                    elseif ($rowwd["confirm_wd"]=="ปฏิเสธ") {
                                        echo"<span style='background: #db1b1b;'>ไม่สำเร็จ</span>";
                                    }
                                ?></td>
                                       <td><?php echo $rowwd['amount_wd']; ?></td>
                                       <td><?php echo $rowwd['note_wd']; ?></td>
                                     
                                    </tr>
                                 
                                 </tbody><?php } ?>
                              </table>



                           </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>





<div class="x-modal modal -v2 show" id="couponModalMobile" tabindex="-1" role="dialog" data-container="#couponModalMobile" aria-modal="true">
   <div class="modal-dialog -modal-size  modal-dialog-centered modal-dialog-scrollable -modal-mobile" role="document">
     
   <div class="modal-content -modal-content" style="
    padding-bottom: 0px;
    margin-top: 50px;
">
         <button type="button" class="close f-1 " data-dismiss="modal" aria-label="Close">
         <i class="fas fa-times"></i>
         </button>
         <div class="modal-header -modal-header">
            <div class="x-modal-mobile-header">
               <div class="-header-mobile-container">
                  <h3 class="x-title-modal mx-auto text-center d-inline-block">
                     แนะนำเพื่อน

                  </h3>
               </div><br>
               <div class="text-center">
                
                     <button class="btn btn-success -btn js-copy-to-clipboard" data-container="couponModalMobile" data-message="คัดลอกแล้ว" data-copy-me="<?php echo $Get_Setting->link_aff; ?>?aff=<?php echo $username_mb; ?>">คัดลอกลิ้งค์แนะนำเพื่อนของท่าน</button>
                 
           
               </div>
            </div>
         </div>
         <div class="modal-body -modal-body">
            <div class="x-promotion-return-by-user-container">
               <div class="-group-round-container -no-data">
                  <div class="-date-range-container text-center">
                     สามารถรับได้เดือนละ 1 ครั้ง จากยอดฝากเพื่อนทั้งเดือน<br>
                     รายได้ของท่านที่กดรับได้ : <font color="#fff200"><?php
                        $month_dp = date('Y-m',strtotime('-1 month')) ;
                        $aff5 = $username_mb;
                        $query = "SELECT SUM(amount_dp) FROM deposit WHERE confirm_dp = 'อนุมัติ' AND aff_dp = '$aff5' AND date_dp LIKE '%$month_dp%' AND promotion_dp NOT LIKE '%เครดิตฟรี%'";
                        $result = $class->Query_Mysqli($query);
                        while($row = mysqli_fetch_array($result)){
                        echo $row['SUM(amount_dp)'] * $Get_Setting->affcashback / 100;
                        
                        } ?></font><br>
                     รายได้ของท่านปัจจุบัน(เดือนนี้) : <font color="#fff200"><?php
                                                                $month_dp = date('Y-m') ;
                                                                $aff5 = $username_mb;
                                                                $query = "SELECT SUM(amount_dp) FROM deposit WHERE confirm_dp = 'อนุมัติ' AND aff_dp = '$aff5' AND date_dp LIKE '%$month_dp%' AND promotion_dp NOT LIKE '%เครดิตฟรี%'";
                                                                $result = $class->Query_Mysqli($query);
                                                                while($row = mysqli_fetch_array($result)){
                                                                echo $row['SUM(amount_dp)'] * $Get_Setting->affcashback / 100;
                                                                
                                                                } ?></font><br>
                     จำนวนเพื่อนทั้งหมด : <font color="#fff200"><?php
                                                                   $aff5 = $username_mb;
                                                                   $query3 = "SELECT * FROM member WHERE aff = '$aff5' ";
                                                                   $result3 = $class->Query_Mysqli($query3);
                                                                   $nrow = mysqli_num_rows($result3);
                                                                   echo $nrow;
                                                                   ?></font>
                  </div>
               </div>
               <div class="text-center">
                  <button type="button" class="btn btn-primary -promotion-return-btn submit_withdrawaff">
                  <span class="-text-btn">กดรับค่าแนะนำเพื่อน</span>
                  </button>
               </div>
             <!--   <div class="-description-container">
                  <div>
                     คุณไม่เข้าเงื่อนไขการรับโบนัส
                  </div>
                  <div>
                     <span class="-text-description">โปรดอ่านเงื่อนไขการเข้าร่วม</span>ด้านล่างค่ะ
                  </div>
               </div> -->
               <div class="-condition-container">
                  <div class="-condition-title"><u>โปรดอ่านเงื่อนไข</u></div>
                  <div class="x-promotion-content">
                     <h2><strong>ได้รับรายได้ <?php echo $Get_Setting->affcashback; ?>% จากยอดฝากเพื่อน</strong></h2>
                     <p>► คำนวณยอดใน 1 เดือน (ตั้งแต่วันที่ 1 ถึง สิ้นเดือน)<br>
                        ► รายได้สามารถกดรับได้ในเดือนถัดไป<br>
                        ► รายได้จะสามารถกดรับได้ที่หน้าเว็บ<br>
                        
                        ► หากท่านไม่กดรับภายในเวลาที่กำหนด ถือว่าสละสิทธิ์&nbsp;<br>
                        &nbsp;<a href="/term-and-condition">เงื่อนไขและกติกาพื้นฐานจะถูกนำมาใช้กับโปรโมชั่นนี้</a>
                     </p>
                  </div>
               </div>
               <div class="my-3">
                  <div class="x-admin-contact -no-fixed">
                     <span class="x-text-with-link-component">
                     <label class="-text-message ">ติดปัญหา</label>
                     <a href="<?php echo $Get_Setting->lineoa; ?>" class="-link-message " target="_blank" rel="noopener noreferrer">
                     <u>ติดต่อฝ่ายบริการลูกค้า</u>
                     </a>
                     </span>
                  </div>
               </div>
                 <div class="m-auto ">
                        <center><h3 class="m-auto text-white d-inline-block">
                           ประวัติรับค่าแนะนำเพื่อน
                           <hr class="x-hr-border-glow">
                        </h3></center>
                     
                        <table class="table table-striped mt-2" >

                           <thead>
                              <tr>
                                 
                                 <th>วันเวลา</th>
                                 <th>สถานะ</th>
                                 <th>ยอดเงิน</th>
                                 
                              </tr>
                           </thead>
                     <?php
                    $queryaff = "SELECT * FROM withdrawaff WHERE id_aff=$id_mb ORDER BY id DESC limit 5";
                    $wdwdaff = $class->Query_Mysqli($queryaff);
                    // echo $querywd;
                    ?>
                    <?php foreach ($wdwdaff as $rowaff){ ?>
                           <tbody>
                                
                                 <tr>

                                    <td><?php echo $rowaff['date_aff']; ?></td>
                                    <td><?php
                             
                                if ($rowaff["confirm_aff"]=="รอดำเนินการ") {
                                    echo"<span style='background: #c98e15;'>รอดำเนินการ</span>";
                                }
                                    elseif ($rowaff["confirm_aff"]=="อนุมัติ") {
                                        echo"<span style='background: #017a13;'>สำเร็จ</span>";
                                    }
                                    elseif ($rowaff["confirm_aff"]=="ปฏิเสธ") {
                                        echo"<span style='background: #db1b1b;'>ไม่สำเร็จ</span>";
                                    }?></td>
                                    <td><?php echo $rowaff['amount_aff']; ?></td>
                                    
                                 </tr>
                                
                              </tbody><?php } ?>
                           </table>
                           


                           </div>
            </div>
         </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>





<div class="x-modal modal -v2 show" id="joinPromotionModalMobile" tabindex="-1" role="dialog" data-container="#joinPromotionModalMobile" aria-modal="true">
   <div class="modal-dialog -modal-size  modal-dialog-centered modal-dialog-scrollable -modal-mobile -no-fixed-button -no-padding-x" role="document">
   <div class="modal-content -modal-content" style="
    padding-bottom: 0px;
    margin-top: 50px;
">
         <button type="button" class="close f-1 " data-dismiss="modal" aria-label="Close">
         <i class="fas fa-times"></i>
         </button>
         <div class="modal-header -modal-header">
            <div class="x-modal-mobile-header">
               <div class="-header-mobile-container">
                  <h3 class="x-title-modal mx-auto text-center d-inline-block">
                     การเข้าร่วมโปรโมชั่น
                  </h3>
               </div>
            </div>
         </div>
         <div class="modal-body -modal-body">
            <div class="x-account-promotion text-center -v2">
               <div class="-account-promotion-container  fadeInModal" data-animatable="fadeInModal">
                  <div class="-default-img-container">
                     <img src="assets2/build/web/igame-index-lobby-wm/img/ic-default-join-promotion.png" alt="บาคาร่า คาสิโน สล็อตออนไลน์ Icon Default Promotion" width="150" height="150" class="img-fluid -default-img">
                  </div>
                  <div class="m-auto ">
                        <h3 class="m-auto text-white d-inline-block">
                           โปรโมชั่น 10 รายการล่าสุด
                           <hr class="x-hr-border-glow">
                        </h3>
                     
                        <table class="table table-striped mt-2" >

                           <thead>
                              <tr>
                                 
                                 <th>วันเวลา</th>
                                 <th>สถานะ</th>
                                 <th>โปรโมชั่น</th>
                                 <th>หมายเหตุ</th>
                              </tr>
                           </thead>
                     <?php
                        $querywd = "SELECT * FROM deposit WHERE id_dp= '$id_mb' AND promotion_dp!='ไม่รับโบนัส' AND confirm_dp != 'ยกเลิก' ORDER BY id DESC";
                        $wdwdwd = $class->Query_Mysqli($querywd);
                        // echo $querywd;
                     ?>
                    <?php foreach ($wdwdwd as $rowwd){ ?>
                           <tbody>
                                
                                 <tr>

                                    <td><?php echo $rowwd['date_dp']; ?></td>
                                    <td><?php
                             
                                if ($rowwd["confirm_dp"]=="รอดำเนินการ") {
                                    echo"<span style='background: #c98e15;'>รอดำเนินการ</span>";
                                }
                                    elseif ($rowwd["confirm_dp"]=="อนุมัติ") {
                                        echo"<span style='background: #017a13;'>สำเร็จ</span>";
                                    }
                                    elseif ($rowwd["confirm_dp"]=="ปฏิเสธ") {
                                        echo"<span style='background: #db1b1b;'>ไม่สำเร็จ</span>";
                                    }
                                ?></td>
                                    <td><?php echo $rowwd['promotion_dp']; ?></td>
                                    <td><?php echo $rowwd['note_dp']; ?></td>
                                 </tr>
                                
                              </tbody><?php } ?>
                           </table>
                        </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>




<?php
$winlose = $Load_Master->Master_TurnOver($_SESSION["UsernameUFA"]);
if ($winlose == "error") {
	$winlose = 0;
}
$winlose3 = $winlose*-$Get_Setting->cashback / 100;
$winlose2= (floor ($winlose3));
?>


<div class="x-modal modal -v2 show" id="promotionReturnByUserModalMobile" tabindex="-1" role="dialog" data-container="#promotionReturnByUserModalMobile" aria-modal="true">
   <div class="modal-dialog -modal-size  modal-dialog-centered modal-dialog-scrollable -modal-mobile -no-fixed-button" role="document">
   <div class="modal-content -modal-content" style="
    padding-bottom: 0px;
    margin-top: 50px;
">
         <button type="button" class="close f-1 " data-dismiss="modal" aria-label="Close">
         <i class="fas fa-times"></i>
         </button>
         <div class="modal-header -modal-header">
            <div class="x-modal-mobile-header">
               <div class="-header-mobile-container">
                  <h3 class="x-title-modal mx-auto text-center d-inline-block">
                     ขอรับโบนัสเงินคืน
                  </h3>
               </div>
            </div>
         </div>
         <div class="modal-body -modal-body">
            <div class="x-promotion-return-by-user-container">
               <div class="-group-round-container -no-data">
				  <div class="-date-range-container text-center">
                     โบนัสยอดเสียสามารถรับได้ทุกวันหลังเที่ยงคืน <br>
                     ยอดเสียของท่านทั้งหมด : <font color="#fff200"><?php 
                     if ($winlose>=0) {
                        echo 'ท่านไม่มียอดเสีย';
                     }else{
                     echo $winlose; }?></font><br>
                     ยอดเงินที่ได้คืน : <font color="#fff200"><?php 
                     if ($winlose>=0) {
                        echo 'วันนี้ท่านไม่ได้รับเงินคืน';
                     }else{
                     echo $winlose2; }?></font>
                  </div>
				  
               </div>
               <div class="text-center">
                  <button type="button" class="btn btn-primary -promotion-return-btn submit_cashback">
                  <span class="-text-btn">กดรับยอดเสีย</span>
                  </button>
               </div>
             <!--   <div class="-description-container">
                  <div>
                     คุณไม่เข้าเงื่อนไขการรับโบนัส
                  </div>
                  <div>
                     <span class="-text-description">โปรดอ่านเงื่อนไขการเข้าร่วม</span>ด้านล่างค่ะ
                  </div>
               </div> -->
               <div class="-condition-container">
                  <div class="-condition-title"><u>โปรดอ่านเงื่อนไข</u></div>
                  <div class="x-promotion-content">
                     <h2><strong>เล่นเสียให้คืน <?php echo $Get_Setting->cashback; ?>% ทุกวัน</strong></h2>
                     <p>► คำนวณยอดใน 1 วัน (ตั้งแต่ 00:01 น. ถึง  23:59 น.)<br>
                        
                        ► โบนัสจะได้รับทุกวันสามารถกดรับโบนัสได้ที่หน้าเว็บ<br>
                        ► โบนัสที่ได้รับไม่ต้องทำเทิร์นโอเวอร์ ถอนได้ทันที!<br>
                        
                        ► เมื่อรับโปรโมชั่น เครดิตจะมีอายุการใช้งาน 3 วัน จากนั้นเครดิตคืนยอดเสียจะถูกปรับเป็น 0&nbsp;<br>
                        &nbsp;<a href="/term-and-condition">เงื่อนไขและกติกาพื้นฐานจะถูกนำมาใช้กับโปรโมชั่นนี้</a>
                     </p>
                  </div>
               </div>
               <div class="my-3">
                  <div class="x-admin-contact -no-fixed">
                     <span class="x-text-with-link-component">
                     <label class="-text-message ">ติดปัญหา</label>
                     <a href="<?php echo $Get_Setting->lineoa; ?>" class="-link-message " target="_blank" rel="noopener noreferrer">
                     <u>ติดต่อฝ่ายบริการลูกค้า</u>
                     </a>
                     </span>
                  </div>
               </div>
                 <div class="m-auto ">
                        <center><h3 class="m-auto text-white d-inline-block">
                           ประวัติรับยอดเสีย
                           <hr class="x-hr-border-glow">
                        </h3></center>
                     
                        <table class="table table-striped mt-2" >

                           <thead>
                              <tr>
                                 
                                 <th>วันเวลา</th>
                                 <th>สถานะ</th>
                                 <th>ยอดเงิน</th>
                                 
                              </tr>
                           </thead>
                     <?php
                        $querywd = "SELECT * FROM withdraw WHERE id_wd=$id_mb AND amount_cashback!='' ORDER BY id DESC limit 10";
                        $wdwdwd = $class->Query_Mysqli($querywd);
                        // echo $querywd;
                     ?>
                    <?php foreach ($wdwdwd as $rowwd){ ?>
                           <tbody>
                                
                                 <tr>

                                    <td><?php echo $rowwd['date_wd']; ?></td>
                                    <td><?php
                             
                                if ($rowwd["confirm_wd"]=="รอดำเนินการ") {
                                    echo"<span style='background: #c98e15;'>รอดำเนินการ</span>";
                                }
                                    elseif ($rowwd["confirm_wd"]=="อนุมัติ") {
                                        echo"<span style='background: #017a13;'>สำเร็จ</span>";
                                    }
                                    elseif ($rowwd["confirm_wd"]=="ปฏิเสธ") {
                                        echo"<span style='background: #db1b1b;'>ไม่สำเร็จ</span>";
                                    }?></td>
                                    <td><?php echo $rowwd['amount_cashback']; ?></td>
                                    
                                 </tr>
                                
                              </tbody><?php } ?>
                           </table>
                           


                           </div>
            </div>
         </div>
      </div>
   </div>

</div>

<div class="x-modal modal -v2 show" id="spinModalMobile" tabindex="-1" role="dialog" data-container="#creditfreeModalMobile" aria-modal="true">
   <div class="modal-dialog -modal-size  modal-dialog-centered modal-dialog-scrollable -modal-mobile -no-fixed-button" role="document">
   <div class="modal-content -modal-content" style="margin-top: 1px; top: 50px;"type="button" class="close f-1 " data-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
         <div class="modal-header -modal-header">
            <div class="x-modal-mobile-header">
               <div class="-header-mobile-container">

         <?php 
          $sql66 = "SELECT * FROM activity ORDER BY id DESC LIMIT 1 ";
          $result66 = $class->Query_Mysqli($sql66);
          $row66 = mysqli_fetch_array($result66);
          
          extract($row66);
          //$amount = $row66['credit_at'];
          $numat = $row66['amount_at'];

         $check99 = "SELECT  * FROM deposit  WHERE  confirm_dp = 'อนุมัติ' AND amount_dp='กิจกรรม'";
         $result19 = $class->Query_Mysqli($check99);
         $num99=mysqli_num_rows($result19);

          ?>
                  <h3 class="x-title-modal mx-auto text-center d-inline-block">
                     หมุนวงล้อ
                  </h3><br>
                   <h3 class="x-title-modal mx-auto text-center d-inline-block">
                     <span>สิทธิ์หมุนวงล้อ : <font color="#fff200" id="spincredit">


                <?php 
                $sql669 = "SELECT * FROM member WHERE username_mb='$username_mb'";
          $result669 = $class->Query_Mysqli($sql669);
          $row669 = mysqli_fetch_array($result669);
          extract($row669);


                if ($creditspin=='') {
                   echo 0;
                }else{
                echo $creditspin;
            }?> 
                </font>
             พ้อยด์ของท่าน : <font color="#fff200" id="spinpoint">
                            
                            <?php 
                                if ($point=='') {
                                   echo 0;
                                }else{
                                echo $point;
                            }?> </font></span>



                            
                  </h3>

               </div>
            </div>
         </div>
         <div class="modal-body -modal-body">
            <div class="x-promotion-return-by-user-container">
<center><button type="button" class="btn btn-success Submit_Change_Spinner">แลกรางวัล</button></center><br>
                             



<div class="row">
<div class="col-12 text-center">


<div class="wheel-with-image"></div>

<div class="d-grid">
<button class="btn btn-success shadow-sm py-2 wheel-with-image-spin-button">หมุนวงล้อ</button>
</div> 


</div>
</div>
  

                   
                  
               </div>
               <br>
          
               <div class="-condition-container">
                  <div class="-condition-title"><u>โปรดอ่านเงื่อนไข</u></div>
                  <div class="x-promotion-content">
                     <h2><strong>หมุนวงล้อ</strong></h2>
                     <p>► ยอดฝาก  : <font color="#fff200" id="spinpoint">
                            <?php echo $Get_Setting->dp_creditspin; ?> บาทขึ้นไป
                            </font> ต่อ 1 บิล ได้ 1 สิทธิ์การหมุน<br>
                        ► 1 พ้อยด์ แลกได้  : <font color="#fff200" id="spinpoint">
                            
                            <?php echo $Get_Setting->change_point; ?> เครดิต
                            </font><br>
                       
                      
                        &nbsp;<a href="/term-and-condition">เงื่อนไขและกติกาพื้นฐานจะถูกนำมาใช้กับโปรโมชั่นนี้</a>
                     </p>
                  </div>
               </div>

<div class="m-auto ">
                        <center><h3 class="m-auto text-white d-inline-block">
                           ประวัติหมุนวงล้อ
                           <hr class="x-hr-border-glow">
                        </h3></center>
                     
                        <table class="table table-striped mt-2" >

                           <thead>
                              <tr>
                                 
                                 <th>วันเวลา</th>
                                 <th>รางวัล</th>
                            
                                 
                              </tr>
                           </thead>
                     <?php
                        $queryspin = "SELECT * FROM history_spin WHERE username='$username_mb' ORDER BY id DESC limit 10";
                        $spin = $class->Query_Mysqli($queryspin);
                        // echo $querywd;
                     ?>
                    <?php foreach ($spin as $rowspin){ ?>
                           <tbody>
                                
                                 <tr>

                                    <td><?php echo $rowspin['time']; ?></td>
                                    
                                    <td><?php echo $rowspin['reward']; ?></td>
                                    
                                 </tr>
                                
                              </tbody><?php } ?>
                           </table>
                           


                           </div>




               <div class="my-3">
                  <div class="x-admin-contact -no-fixed">
                     <span class="x-text-with-link-component">
                     <label class="-text-message ">ติดปัญหา</label>
                     <a href="<?php echo $Get_Setting->lineoa; ?>" class="-link-message " target="_blank" rel="noopener noreferrer">
                     <u>ติดต่อฝ่ายบริการลูกค้า</u>
                     </a>
                     </span>
                  </div>
               </div>
               
            </div>
         </div>
     </div>
   </div>









<!-- หน้าข้อมูลบัญชี -->
         <div class="x-modal modal show" id="accountModal22" tabindex="-1" role="dialog"  data-container="#accountModal" style="padding-right: 6px;" aria-modal="true">
            <div class="modal-dialog -modal-size modal-dialog-centered modal-dialog-scrollable -modal-big -modal-main-account" role="document">
               <div class="modal-content -modal-content">
                  <button type="button" class="close f-1 " data-dismiss="modal" aria-label="Close">
                  <i class="fas fa-times"></i>
                  </button>
                  <div class="modal-body -modal-body">
                     <div class="x-modal-account-menu">
                        <ul class="navbar-nav">
                           <li class="nav-item -account-profile tabaccount active"  onclick="openAccout(event, 'mainaccount')">
                              <button type="button" class="nav-link js-close-account-sidebar" data-container="#accountModal" >
                              <img class="img-fluid -icon-image" src="assets2/build/web/igame-index-lobby-wm/img/ic-menu-account-user.png" alt="icon user" width="34" height="34">
                              <span class="-text-menu">ข้อมูลบัญชี</span>
                              </button>
                           </li>
                           <li class="nav-item -account-provider tabaccount" onclick="openAccout(event, 'appaccount')">
                              <button type="button" class="nav-link js-close-account-sidebar" data-container="#accountModal">
                              <img class="img-fluid -icon-image" src="assets2/build/web/igame-index-lobby-wm/img/ic-menu-account-provider.png" alt="icon phone" width="34" height="34">
                              <span class="-text-menu">ประวัติฝาก-ถอน</span>
                              </button>
                           </li>
                           <li class="nav-item -coupon tabaccount" onclick="openAccout(event, 'couponaccount')">
                              <button type="button" class="nav-link js-close-account-sidebar js-account-approve-aware" data-container="#accountModal" >
                              <img class="img-fluid -icon-image" src="assets2/build/web/igame-index-lobby-wm/img/ic-menu-account-coupon.png" alt="icon coupon" width="34" height="34">
                              <span class="-text-menu">แนะนำเพื่อน</span>
                              </button>
                           </li>
                           <li class="nav-item -join-promotion tabaccount" onclick="openAccout(event, 'proaccount')">
                              <button type="button" class="nav-link js-close-account-sidebar"data-container="#accountModal">
                              <img class="img-fluid -icon-image" src="assets2/build/web/igame-index-lobby-wm/img/ic-menu-account-promotion.png" alt="icon promotion" width="34" height="34">
                              <span class="-text-menu">โปรโมชั่นที่เข้าร่วม</span>
                              </button>
                           </li>
                           <li class="nav-item -promotion-return-by-user tabaccount" onclick="openAccout(event, 'bonusaccount')">
                              <button type="button" class="nav-link js-close-account-sidebar js-account-approve-aware"  data-container="#accountModal">
                              <img class="img-fluid -icon-image" src="assets2/build/web/igame-index-lobby-wm/img/ic-menu-account-bonus.png" alt="ขอรับโบนัสเงินคืน" width="34" height="34">
                              <span class="-text-menu">ขอรับโบนัสเงินคืน</span>
                              </button>
                           </li>
                           <li class="nav-item -promotion-return-by-user tabaccount" onclick="openAccout(event, 'spin')">
                              <button type="button" id="open-spinner" class="nav-link js-close-account-sidebar js-account-approve-aware"  data-container="#accountModal">
                              <img class="img-fluid -icon-image" src="assets2/build/web/igame-index-lobby-wm/img/spin22.png" alt="หมุนวงล้อ" width="34" height="34">
                              <span class="-text-menu">หมุนวงล้อ</span>
                              </button>
                           </li>
                           <li class="nav-item js-close-account-sidebar -logout">
                              <a href="logout" class="nav-link js-require-confirm" data-title="ต้องการออกจากระบบ ?">
                              <img class="img-fluid -icon-image" src="assets2/build/web/igame-index-lobby-wm/img/ic-menu-account-logout.png" alt="icon logout" width="34" height="34">
                              <span class="-text-menu">ออกจากระบบ</span>
                              </a>
                           </li>
                        </ul>
                     </div>
                     <div class="js-profile-account-modal -layout-account" id="mainaccount" style="display: block;">
                        <div class="x-account-profile">
                           <div data-animatable="fadeInModal" class="-profile-container  fadeInModal">
                              <h3 class="x-title-modal mx-auto text-center ">
                                 ข้อมูลบัญชี
                              </h3>
                              <div class="text-center">
                                 <div class="my-3">
                                    <div class="x-profile-image">
                                       <!-- <img class="img-fluid -profile-image" src="https://wm.bet/media/cache/strip/202006/block/efd5aee5c16d9b646236b68724fa1c97.png" alt="Profile image บาคาร่าออนไลน์ คาสิโนออนไลน์ สล็อตออนไลน์"> -->
                                    </div>
                                 </div>
                                 <div class="my-3">
                                    <div class="-text-username">Username:  <?php echo($usernameufa); ?></div>
                                    <!-- <a href="#0" class="-link-change-password" data-toggle="collapse" data-target=".js-change-password-collapse"><u>เปลี่ยนรหัสผ่าน</u></a> -->
                                    <div class="x-checkbox-primary">


                                       <div class="-change-password-container js-change-password-collapse collapse d-none" style="">
                                          <div class="js-collapse-content">
                                             <form novalidate="" name="sylius_user_change_password" method="post" >
                                                <div class="form-group mt-3">
                                                   <input type="password" id="sylius_user_change_password_currentPassword" name="sylius_user_change_password[currentPassword]" required="required" placeholder="รหัสผ่านปัจจุบัน" class="x-form-control form-control">        
                                                </div>
                                                <div class="form-group">
                                                   <input type="password" id="sylius_user_change_password_newPassword_first" name="sylius_user_change_password[newPassword][first]" required="required" placeholder="รหัสผ่านใหม่" class="x-form-control form-control">        
                                                </div>
                                                <div class="form-group">
                                                   <input type="password" id="sylius_user_change_password_newPassword_second" name="sylius_user_change_password[newPassword][second]" required="required" placeholder="การยืนยัน" class="x-form-control form-control">        
                                                </div>
                                                <button type="submit" class="btn btn-block -submit">
                                                <span>ยืนยัน</span>
                                                </button>
                                                <input type="hidden" id="sylius_user_change_password__token" name="sylius_user_change_password[_token]" value="ndtkTgHLOmCIuMt1c0Ym1o4vwtUNkWQ1lWVKZ4TKYys">        
                                             </form>
                                          </div>
                                       </div>




                                       <form novalidate="" name="set_un_subscribe_sms" method="post" data-ajax-form="/account/_ajax_/set-sms-subscribe">
                                          <input type="hidden" name="_method" value="PUT">
                                       <!--    <div id="sms1208884758">
                                             <div class="form-group">
                                                <div class="form-check">        <input type="checkbox" id="set_un_subscribe_sms_subscribedToNewsletter" name="set_un_subscribe_sms[subscribedToNewsletter]" required="required" class="form-check-input" value="1">
                                                   <label class="form-check-label required" for="set_un_subscribe_sms_subscribedToNewsletter">ติ๊กเพื่อยกเลิกรับ SMS        </label>
                                                </div>
                                             </div>
                                          </div> -->
                                          <input type="hidden" id="set_un_subscribe_sms__token" name="set_un_subscribe_sms[_token]" value="8J6u6HjOHs6L5XTuw09B7JKI95GYSLv6pPYrraSL1ks">        
                                       </form>
                                    </div>
                                 </div>
                                 <div  class="collapse -change-password-container js-change-password-collapse">
                                    <div class="js-collapse-content"></div>
                                 </div>
                              </div>
                              <div class="-bank-info-container">
                                 <div class="media">
                                    <img src="assets2/logobank/<?php echo($bank_mb); ?>.png" alt="betingsoft" width="50px" class="mr-3 rounded-circle">
                                    <div class="media-body text-left">
                                       <div class="f-6"><?php echo($bankacc_mb); ?></div>
                                       <b><?php echo($name_mb); ?></b>
                                    </div>
                                 </div>
                              </div>
                              <div class="mt-5">
                                 <div class="x-admin-contact -no-fixed">
                                    <span class="x-text-with-link-component">
                                    <label class="-text-message ">*ต้องการเปลี่ยนบัญชี กรุณา</label>
                                    <a href="<?php echo $Get_Setting->lineoa; ?>" class="-link-message " target="_blank" rel="noopener noreferrer">
                                    <u>ติดต่อฝ่ายบริการลูกค้า</u>
                                    </a>
                                    </span>
                                 </div>
                              </div>
                              <div class="js-has-info"></div>
                           </div>
                        </div>
                     </div>



                     <div class="js-profile-account-modal -layout-account" id="appaccount">
                        <div id="accountProviderUser" class="x-account-provider -has-provider">
                           <div data-animatable="fadeInModal" class="-account-provider-container  fadeInModal">
                              <h3 class="x-title-modal mx-auto text-center ">
                                 ประวัติฝาก-ถอน
                              </h3> 
                              <div class="-account-provider-inner -scroll x-account-provider-v2">
                                 <div class="-provider-row-wrapper">

                                    <div class="m-auto ">
                        <h3 class="m-auto text-white d-inline-block">
                           ฝาก 10 รายการล่าสุด
                           <hr class="x-hr-border-glow">
                        </h3>
                     
                        <table class="table table-striped mt-2" style="
    color: wheat;">

                           <thead>
                              <tr>
                                 
                                 <th>วันเวลา</th>
                                 <th>สถานะ</th>
                                 <th>ยอดเงิน</th>
                                 <th>โปรโมชั่น</th>
                              </tr>
                           </thead>
                     <?php
                        $querywd = "SELECT * FROM deposit WHERE id_dp= '$id_mb' AND confirm_dp != 'ยกเลิก' ORDER BY id DESC limit 10";
                        $wdwdwd = $class->Query_Mysqli($querywd);
                        // echo $querywd;
                     ?>
                    <?php foreach ($wdwdwd as $rowwd){ ?>
                           <tbody>
                                
                                 <tr>

                                    <td><?php echo $rowwd['date_dp']; ?></td>
                                    <td><?php
                             
                                if ($rowwd["confirm_dp"]=="รอดำเนินการ") {
                                    echo"<span style='background: #c98e15;'>รอดำเนินการ</span>";
                                }
                                    elseif ($rowwd["confirm_dp"]=="อนุมัติ") {
                                        echo"<span style='background: #017a13;'>สำเร็จ</span>";
                                    }
                                    elseif ($rowwd["confirm_dp"]=="ปฏิเสธ") {
                                        echo"<span style='background: #db1b1b;'>ไม่สำเร็จ</span>";
                                    }?></td>
                                    <td><?php echo $rowwd['amount_dp']; ?></td>
                                    <td><?php echo $rowwd['promotion_dp']; ?></td>
                                 </tr>
                                
                              </tbody><?php } ?>
                           </table>
                           <h3 class="m-auto text-white d-inline-block">
                              ถอน 10 รายการล่าสุด
                              <hr class="x-hr-border-glow">
                           </h3>


                           <table class="table table-striped mt-2" >
                              <thead>
                                 <tr>
                                    
                                    <th>วันเวลา</th>
                                    <th>สถานะ</th>
                                    <th>ยอดเงิน</th>
                                    <th>หมายเหตุ</th>
                                 </tr>
                              </thead>
                              <?php
        $querywd = "SELECT * FROM withdraw WHERE username_wd = '$username_mb' AND amount_wd != '' ORDER BY id DESC limit 20";
        $wdwdwd = $class->Query_Mysqli($querywd);
        // echo $querywd;
        ?>
        <?php foreach ($wdwdwd as $rowwd){ ?>
                              <tbody>
                                 
                                    <tr>
                                       <td><?php echo $rowwd['date_wd']; ?></td>
                                       <td><?php
                             
                                if ($rowwd["confirm_wd"]=="รอดำเนินการ") {
                                    echo"<span style='background: #c98e15;'>รอดำเนินการ</span>";
                                }
                                    elseif ($rowwd["confirm_wd"]=="อนุมัติ") {
                                        echo"<span style='background: #017a13;'>สำเร็จ</span>";
                                    }
                                    elseif ($rowwd["confirm_wd"]=="ปฏิเสธ") {
                                        echo"<span style='background: #db1b1b;'>ไม่สำเร็จ</span>";
                                    }
                                ?></td>
                                       <td><?php echo $rowwd['amount_wd']; ?></td>
                                       <td><?php echo $rowwd['note_wd']; ?></td>
                                     
                                    </tr>
                                 
                                 </tbody><?php } ?>
                              </table>



                           </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>



                     <div class="js-profile-account-modal -layout-account" id="couponaccount">
                        <div class="x-account-coupon">
                           <div data-animatable="fadeInModal" class="-coupon-container  fadeInModal">
                              <h3 class="x-title-modal mx-auto text-center ">
                                 แนะนำเพื่อน
                              </h3>
                              <br>
               <div class="text-center">
                
                     <button class="btn btn-success -btn js-copy-to-clipboard" data-container="couponaccount" data-message="คัดลอกแล้ว" data-copy-me="<?php echo $Get_Setting->link_aff; ?>?aff=<?php echo $username_mb; ?>">คัดลอกลิ้งค์แนะนำเพื่อนของท่าน</button>
                 
           
               </div><br>
               <?php $month_dp = date('Y-m',strtotime('-1 month')) ;
                     $aff5 = $username_mb;
                     $query = "SELECT SUM(amount_dp) FROM deposit WHERE confirm_dp = 'อนุมัติ' AND aff_dp = '$aff5' AND date_dp LIKE '%$month_dp%' AND promotion_dp NOT LIKE '%เครดิตฟรี%'";
                     $result = $class->Query_Mysqli($query);
                        while($row = mysqli_fetch_array($result)){
                     $row['SUM(amount_dp)'] * $Get_Setting->affcashback / 100;
                     $sum_amount_aff2 = $row['SUM(amount_dp)'] * $Get_Setting->affcashback / 100;
                     $sum_amount_aff  = floor($sum_amount_aff2);
               } ?>
               <div class="-date-range-container text-center">
                     สามารถรับได้เดือนละ 1 ครั้ง จากยอดฝากเพื่อนทั้งเดือน<br>
                     รายได้ของท่านที่กดรับได้ : <font color="#fff200"><?php echo ($sum_amount_aff);?></font><br>
                     รายได้ของท่านปัจจุบัน(เดือนนี้) : <font color="#fff200"><?php
                                                                $month_dp = date('Y-m') ;
                                                                $aff5 = $username_mb;
                                                                $query = "SELECT SUM(amount_dp) FROM deposit WHERE confirm_dp = 'อนุมัติ' AND aff_dp = '$aff5' AND date_dp LIKE '%$month_dp%' AND promotion_dp NOT LIKE '%เครดิตฟรี%'";
                                                                $result = $class->Query_Mysqli($query);
                                                                while($row = mysqli_fetch_array($result)){
                                                                echo $row['SUM(amount_dp)'] * $Get_Setting->affcashback / 100;
                                                                
                                                                } ?></font><br>
                     จำนวนเพื่อนทั้งหมด : <font color="#fff200"><?php
                                                                   $aff5 = $username_mb;
                                                                   $query3 = "SELECT * FROM member WHERE aff = '$aff5' ";
                                                                   $result3 = $class->Query_Mysqli($query3);
                                                                   $nrow = mysqli_num_rows($result3);
                                                                   echo $nrow;
                                                                   ?></font>
                  </div>



              <br> <div class="text-center">
                  <button type="button" class="btn btn-primary -promotion-return-btn submit_withdraw_aff">
                  <span class="-text-btn">กดรับค่าแนะนำเพื่อน</span>
                  </button>
               </div>
             <!--   <div class="-description-container">
                  <div>
                     คุณไม่เข้าเงื่อนไขการรับโบนัส
                  </div>
                  <div>
                     <span class="-text-description">โปรดอ่านเงื่อนไขการเข้าร่วม</span>ด้านล่างค่ะ
                  </div>
               </div> -->
               <br>
               <div class="-condition-container">
                  <div class="-condition-title"><u>โปรดอ่านเงื่อนไข</u></div>
                  <div class="x-promotion-content">
                     <h2><strong>ได้รับรายได้ <?php echo $Get_Setting->affcashback; ?>% จากยอดฝากเพื่อน</strong></h2>
                     <p>► คำนวณยอดใน 1 เดือน (ตั้งแต่วันที่ 1 ถึง สิ้นเดือน)<br>
                        ► รายได้สามารถกดรับได้ในเดือนถัดไป<br>
                        ► รายได้จะสามารถกดรับได้ที่หน้าเว็บ<br>
                        
                        ► หากท่านไม่กดรับภายในเวลาที่กำหนด ถือว่าสละสิทธิ์&nbsp;<br>
                        &nbsp;<a href="/term-and-condition">เงื่อนไขและกติกาพื้นฐานจะถูกนำมาใช้กับโปรโมชั่นนี้</a>
                     </p>
                  </div>
               </div>
               <div class="my-3">
                  <div class="x-admin-contact -no-fixed">
                     <span class="x-text-with-link-component">
                     <label class="-text-message ">ติดปัญหา</label>
                     <a href="<?php echo $Get_Setting->lineoa; ?>" class="-link-message " target="_blank" rel="noopener noreferrer">
                     <u>ติดต่อฝ่ายบริการลูกค้า</u>
                     </a>
                     </span>
                  </div>
               </div>
                 <div class="m-auto ">
                        <center><h3 class="m-auto text-white d-inline-block">
                           ประวัติรับค่าแนะนำเพื่อน
                           <hr class="x-hr-border-glow">
                        </h3></center>
                     
                        <table class="table table-striped mt-2" >

                           <thead>
                              <tr>
                                 
                                 <th>วันเวลา</th>
                                 <th>สถานะ</th>
                                 <th>ยอดเงิน</th>
                                 
                              </tr>
                           </thead>
                     <?php
                    $queryaff = "SELECT * FROM withdrawaff WHERE id_aff=$id_mb ORDER BY id DESC limit 5";
                    $wdwdaff = $class->Query_Mysqli($queryaff);
                    // echo $querywd;
                    ?>
                    <?php foreach ($wdwdaff as $rowaff){ ?>
                           <tbody>
                                
                                 <tr>

                                    <td><?php echo $rowaff['date_aff']; ?></td>
                                    <td><?php
                             
                                if ($rowaff["confirm_aff"]=="รอดำเนินการ") {
                                    echo"<span style='background: #c98e15;'>รอดำเนินการ</span>";
                                }
                                    elseif ($rowaff["confirm_aff"]=="อนุมัติ") {
                                        echo"<span style='background: #017a13;'>สำเร็จ</span>";
                                    }
                                    elseif ($rowaff["confirm_aff"]=="ปฏิเสธ") {
                                        echo"<span style='background: #db1b1b;'>ไม่สำเร็จ</span>";
                                    }?></td>
                                    <td><?php echo $rowaff['amount_aff']; ?></td>
                                    
                                 </tr>
                                
                              </tbody><?php } ?>
                           </table>
                           


                           </div>

                             
                           </div>

                        </div>

                     </div>


                     <div class="js-profile-account-modal -layout-account" id="proaccount">
                        <div class="x-account-promotion text-center -v2">
                           <div class="-account-promotion-container  fadeInModal" data-animatable="fadeInModal">
                              <h3 class="x-title-modal mx-auto text-center ">
                                 การเข้าร่วมโปรโมชั่น
                              </h3>
                              <div class="-default-img-container">
                                 <img src="assets2/build/web/igame-index-lobby-wm/img/ic-default-join-promotion.png" alt="บาคาร่า คาสิโน สล็อตออนไลน์ Icon Default Promotion" width="150" height="150" class="img-fluid -default-img">
                              </div>
                              <div class="m-auto ">
                        <h3 class="m-auto text-white d-inline-block">
                           โปรโมชั่น 10 รายการล่าสุด
                           <hr class="x-hr-border-glow">
                        </h3>
                     
                        <table class="table table-striped mt-2" >

                           <thead>
                              <tr>
                                 
                                 <th>วันเวลา</th>
                                 <th>สถานะ</th>
                                 <th>โปรโมชั่น</th>
                                 <th>หมายเหตุ</th>
                              </tr>
                           </thead>
                     <?php
                        $querywd = "SELECT * FROM deposit WHERE id_dp= '$id_mb' AND promotion_dp!='ไม่รับโบนัส' AND confirm_dp != 'ยกเลิก' ORDER BY id DESC";
                        $wdwdwd = $class->Query_Mysqli($querywd);
                        // echo $querywd;
                     ?>
                    <?php foreach ($wdwdwd as $rowwd){ ?>
                           <tbody>
                                
                                 <tr>

                                    <td><?php echo $rowwd['date_dp']; ?></td>
                                    <td><?php
                             
                                if ($rowwd["confirm_dp"]=="รอดำเนินการ") {
                                    echo"<span style='background: #c98e15;'>รอดำเนินการ</span>";
                                }
                                    elseif ($rowwd["confirm_dp"]=="อนุมัติ") {
                                        echo"<span style='background: #017a13;'>สำเร็จ</span>";
                                    }
                                    elseif ($rowwd["confirm_dp"]=="ปฏิเสธ") {
                                        echo"<span style='background: #db1b1b;'>ไม่สำเร็จ</span>";
                                    }
                                ?></td>
                                    <td><?php echo $rowwd['promotion_dp']; ?></td>
                                    <td><?php echo $rowwd['note_dp']; ?></td>
                                 </tr>
                                
                              </tbody><?php } ?>
                           </table>
                        </div>
                           </div>
                        </div>
                     </div>


           <div class="js-profile-account-modal -layout-account" id="bonusaccount">
                        <h3 class="x-title-modal mx-auto text-center mt-0 mb-2">
                           ขอรับโบนัสเงินคืน
                        </h3>
                        <div class="x-promotion-return-by-user-container">
               <div class="-group-round-container -no-data">
                  <div class="-date-range-container text-center">
                     โบนัสยอดเสียสามารถรับได้ทุกวันหลังเที่ยงคืน <br>
                     ยอดเสียของท่านทั้งหมด : <font color="#fff200"><?php 
                     if ($winlose>=0) {
                        echo 'ท่านไม่มียอดเสีย';
                     }else{
                     echo $winlose; }?></font><br>
                     ยอดเงินที่ได้คืน : <font color="#fff200"><?php 
                     if ($winlose>=0) {
                        echo 'วันนี้ท่านไม่ได้รับเงินคืน';
                     }else{
                     echo $winlose2; }?></font>
                  </div>
               </div>
               <div class="text-center">
                  <button type="button" class="btn btn-primary -promotion-return-btn submit_cashback">
                  <span class="-text-btn">กดรับยอดเสีย</span>
                  </button>
               </div>
             <!--   <div class="-description-container">
                  <div>
                     คุณไม่เข้าเงื่อนไขการรับโบนัส
                  </div>
                  <div>
                     <span class="-text-description">โปรดอ่านเงื่อนไขการเข้าร่วม</span>ด้านล่างค่ะ
                  </div>
               </div> -->
               <div class="-condition-container">
                  <div class="-condition-title"><u>โปรดอ่านเงื่อนไข</u></div>
                  <div class="x-promotion-content">
                     <h2><strong>เล่นเสียให้คืน <?php echo $Get_Setting->cashback; ?>% ทุกวัน</strong></h2>
                     <p>► คำนวณยอดใน 1 วัน (ตั้งแต่ 00:01 น. ถึง  23:59 น.)<br>
                        
                        ► โบนัสจะได้รับทุกวันสามารถกดรับโบนัสได้ที่หน้าเว็บ<br>
                        ► โบนัสที่ได้รับไม่ต้องทำเทิร์นโอเวอร์ ถอนได้ทันที!<br>
                        
                        ► เมื่อรับโปรโมชั่น เครดิตจะมีอายุการใช้งาน 3 วัน จากนั้นเครดิตคืนยอดเสียจะถูกปรับเป็น 0&nbsp;<br>
                        &nbsp;<a href="/term-and-condition">เงื่อนไขและกติกาพื้นฐานจะถูกนำมาใช้กับโปรโมชั่นนี้</a>
                     </p>
                  </div>
               </div>
               <div class="my-3">
                  <div class="x-admin-contact -no-fixed">
                     <span class="x-text-with-link-component">
                     <label class="-text-message ">ติดปัญหา</label>
                     <a href="<?php echo $Get_Setting->lineoa; ?>" class="-link-message " target="_blank" rel="noopener noreferrer">
                     <u>ติดต่อฝ่ายบริการลูกค้า</u>
                     </a>
                     </span>
                  </div>
               </div>
                 <div class="m-auto ">
                        <center><h3 class="m-auto text-white d-inline-block">
                           ประวัติรับยอดเสีย
                           <hr class="x-hr-border-glow">
                        </h3></center>
                     
                        <table class="table table-striped mt-2" >

                           <thead>
                              <tr>
                                 
                                 <th>วันเวลา</th>
                                 <th>สถานะ</th>
                                 <th>ยอดเงิน</th>
                                 
                              </tr>
                           </thead>
                     <?php
                        $querywd = "SELECT * FROM withdraw WHERE id_wd=$id_mb AND amount_cashback!='' ORDER BY id DESC limit 10";
                        $wdwdwd = $class->Query_Mysqli($querywd);
                        // echo $querywd;
                     ?>
                    <?php foreach ($wdwdwd as $rowwd){ ?>
                           <tbody>
                                
                                 <tr>

                                    <td><?php echo $rowwd['date_wd']; ?></td>
                                    <td><?php
                             
                                if ($rowwd["confirm_wd"]=="รอดำเนินการ") {
                                    echo"<span style='background: #c98e15;'>รอดำเนินการ</span>";
                                }
                                    elseif ($rowwd["confirm_wd"]=="อนุมัติ") {
                                        echo"<span style='background: #017a13;'>สำเร็จ</span>";
                                    }
                                    elseif ($rowwd["confirm_wd"]=="ปฏิเสธ") {
                                        echo"<span style='background: #db1b1b;'>ไม่สำเร็จ</span>";
                                    }?></td>
                                    <td><?php echo $rowwd['amount_cashback']; ?></td>
                                    
                                 </tr>
                                
                              </tbody><?php } ?>
                           </table>
                           


                     </div>
                     
                  </div>


                  


               </div>
         
         <div class="js-profile-account-modal -layout-account text-center" id="spin">
                        <?php 
          $sql66 = "SELECT * FROM activity ORDER BY id DESC LIMIT 1 ";
          $result66 = $class->Query_Mysqli($sql66);
          $row66 = mysqli_fetch_array($result66);
          
          extract($row66);
          //$amount = $row66['credit_at'];
          $numat = $row66['amount_at'];

         $check99 = "SELECT * FROM deposit WHERE confirm_dp = 'อนุมัติ' AND amount_dp='กิจกรรม'";
         $result19 = $class->Query_Mysqli($check99);
         $num99=mysqli_num_rows($result19);

          ?>
                  <h3 class="x-title-modal mx-auto text-center d-inline-block">
                     หมุนวงล้อ
                  </h3><br>
                   <h3 class="x-title-modal mx-auto text-center d-inline-block">
                     <span>สิทธิ์หมุนวงล้อ : <font color="#fff200" id="spincredit">
                        <?php 
                $sql669 = "SELECT * FROM member WHERE username_mb='$username_mb'";
				$result669 = $class->Query_Mysqli($sql669);
          $row669 = mysqli_fetch_array($result669);
          extract($row669);


                if ($creditspin=='') {
                   echo 0;
                }else{
                echo $creditspin;
            }?>
                </font></span>
                <center><span>พ้อยด์ของท่าน : <font color="#fff200" id="spinpoint">
                            
                            <?php 
                                if ($point=='') {
                                   echo 0;
                                }else{
                                echo $point;
                            }?> 
                            
                            </font></span></center>
                            <center class="mb-4" ><button type="button" class="btn btn-success py-1 Submit_Change_Spinner">แลกรางวัล</button></center><br>
                            
                        <div class="x-promotion-return-by-user-container">


<div class="row">
<div class="col-12 text-center">


<div class="wheel-with-image my-2"></div>

<div class="d-grid">
<button class="btn btn-success shadow-sm py-2 wheel-with-image-spin-button">หมุนวงล้อ</button>
</div> 


</div>
</div>

               </div>
             <br>

               <div class="-condition-container">
                  <div class="-condition-title"><u>โปรดอ่านเงื่อนไข</u></div>
                  <div class="x-promotion-content">
                     <h2><strong>หมุนวงล้อ</strong></h2>
                     <p>► ยอดฝาก  : <font color="#fff200" id="spinpoint">
                            <?php echo $Get_Setting->dp_creditspin; ?> บาทขึ้นไป
                            </font> ต่อ 1 บิล ได้ 1 สิทธิ์การหมุน<br>
                        ► 1 พ้อยด์ แลกได้  : <font color="#fff200" id="spinpoint">
                            
                            <?php echo $Get_Setting->change_point; ?> เครดิต
                            </font><br>
                       
                      
                        &nbsp;<a href="/term-and-condition">เงื่อนไขและกติกาพื้นฐานจะถูกนำมาใช้กับโปรโมชั่นนี้</a>
                     </p>
                  </div>
               </div>
               <div class="my-3">
                  <div class="x-admin-contact -no-fixed">
                     <span class="x-text-with-link-component">
                     <label class="-text-message ">ติดปัญหา</label>
                     <a href="<?php echo $Get_Setting->lineoa; ?>" class="-link-message " target="_blank" rel="noopener noreferrer">
                     <u>ติดต่อฝ่ายบริการลูกค้า</u>
                     </a>
                     </span>
                  </div>
               </div>
           
                     
                  </div>

            </div>
         </div>
<!-- หน้าข้อมูลบัญชี -->
<!-- รายละเอียดโปร -->
         <div  id="ProDetailModal" tabindex="-1" class="modal x-modal -promotion-detail-modal promotion-detail-modal-149 show" aria-modal="true">
            <div class="modal-dialog -modal-size modal-dialog-centered modal-dialog-scrollable -modal-mobile" role="document">
               <div class="modal-content -modal-content">
                  <button type="button" class="close f-1 " data-dismiss="modal" aria-label="Close">
                  <i class="fas fa-times"></i>
                  </button>
                  <div class="modal-body -modal-body">
                     <div class="container">
                        <div class="row">
                           <div class="col-12 mt-4">
                              <div class="x-page-title-component -midsize">
                                 <div class="-inner-wrapper">
                                    <div class="-title">โปรโมชั่น</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="d-flex flex-column">
                        <div class="-real-content">
                           <div class="x-card card -card-promotion-detail ">
                              <div class="card-body">
                                 <div class="-title">ฝาก 1000 ฟรี 100 ไม่ติดเงื่อนไข</div>
                                 <div class="-img-container">
                                    <!-- <img src="https://wm.bet/media/cache/strip/202110/promotion/49e2ee57ff132948a3c3b93c9118281b.jpg" alt="ฝาก 1000 ฟรี 100 ไม่ติดเงื่อนไข" class="-img-promotion img-fluid" width="398" height="143"> -->
                                 </div>
                                 <div class="x-promotion-content">
                                    <h2><strong>ฝาก 1000 ฟรี 100 ไม่ติดเงื่อนไข</strong></h2>
                                    <p>► สงวน 1 สิทธิ์ต่อ 1 ท่านเท่านั้น<br>
                                       ► ฝากเงิน 1000 บาท&nbsp;รับฟรีอีก 100&nbsp;บาท ทันที<br>
                                       ► ไม่ติดเงื่อนไข ถอนได้ไม่จำกัดยอด<br>
                                       ► ไม่สามารถเล่นเกมประเภท "ยิงปลา" ได้<br>
                                       ► หากพบว่ากระทำการทุจริตไม่ว่ากรณีใดๆทั้งสิ้นที่นำมาซึ่งเทิร์นโอเวอร์ผิดปกติ การเดิมพันทั้งสองฝั่งทางทีมงาน จะทำการยึดคืนเครดิตทั้งหมด<br>
                                       &nbsp;<a href="/term-and-condition">เงื่อนไขและกติกาพื้นฐานจะถูกนำมาใช้กับโปรโมชั่นนี้</a>
                                    </p>
                                 </div>
                              </div>
                              <div class="card-footer">
                                 <button class="btn -btn -get-promotion-btn  " data-toggle="modal" data-target="#depositModal"  >
                                 <span>รับโปรโมชั่น</span>
                                 </button>
                              </div>
                           </div>
                        </div>
                        <a href="#deposit-choose-promotion" class="js-account-approve-aware btn -back-btn" data-toggle="modal" data-target="#depositChoosePromotionModal" data-dismiss="modal">
                           <i class="fas fa-arrow-left"></i>
                           <div class="f-6 -text">ย้อนกลับ</div>
                        </a>
                        <div class="mx-3 mb-3">
                           <div class="x-admin-contact -no-fixed">
                              <span class="x-text-with-link-component">
                              <label class="-text-message ">ติดปัญหา</label>
                              <a href="<?php echo $Get_Setting->lineoa; ?>" class="-link-message " target="_blank" rel="noopener noreferrer">
                              <u>ติดต่อฝ่ายบริการลูกค้า</u>
                              </a>
                              </span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
<!-- รายละเอียดโปร -->

<!-- Alert -->
<div class="x-right-sidebar-container">
   <div class="x-notification-entrance-container js-notification-entry">
      <a href="#notificationCenter" class="-link-wrapper " data-toggle="modal" data-target="#notificationCenterModal">
         <div class="-img-wrapper">
            <img src="assets2/build/web/igame-index-lobby-wm/img/notification-ic-bell.png" class="-img" alt="Notification bell image png" width="40" height="44">
         </div>
      </a>
   </div>
</div>
<!-- Alert -->
<!-- Alert List -->
<div class="x-modal modal show" id="notificationCenterModal" tabindex="-1" role="dialog"  style=" padding-right: 6px;" aria-modal="true">
   <div class="modal-dialog -modal-size modal-dialog-centered modal-dialog-scrollable " role="document">
      <div class="modal-content -modal-content">
         <button type="button" class="close f-1 " data-dismiss="modal" aria-label="Close">
         <i class="fas fa-times"></i>
         </button>
         <div class="modal-header -modal-header">
            <div class="-outer-wrapper">
               <img src="assets2/build/web/igame-index-lobby-wm/img/notification-title-bg.png" class="-title-bg" alt="Notification bg image png" width="320" height="64">
               <h3 class="x-title-modal">
                  <img src="assets2/build/web/igame-index-lobby-wm/img/notification-ic-bell.png" class="-ic-title" alt="Notification icon bell image png" width="40" height="40">
                  <span class="-text">กระดานแจ้งเตือน</span>
               </h3>
            </div>
         </div>
         <div class="modal-body -modal-body">
            <div class="x-notification-center-render-container">
               <div class="x-notification-history-list-container js-infinite-scroll-list-container">
                  <div class="wg-container wg-container__wg_inbox wg--loaded">
                     <div class="wg-content">
                        <div class="x-notification-list-item-wrapper -global ">
                           <img src="assets2/build/web/igame-index-lobby-wm/img/notification-ic-alert.png" class="-ic-img" alt="Notification icon image png" width="70" height="70">
                           <div class="-details-wrapper">
                              <div class="-title">ขณะนี้ธนาคารขัดข้อง</div>
                              <p class="-description">ขออภัยในความไม่สะดวกค่ะ</p>
                              <span class="-datetime">2 เดือนที่แล้ว</span>
                           </div>
                           <div class="-actions-wrapper">
                              <button type="button" class="btn -delete-btn js-notification-remove-item" aria-label="Remove item 3699921" data-remove-url="/account/_ajax_/notifitaion/3699921/remove">
                              <i class="fas fa-trash-alt"></i>
                              </button>
                           </div>
                        </div>
                        <div class="x-notification-list-item-wrapper -global ">
                           <img src="assets2/build/web/igame-index-lobby-wm/img/notification-ic-alert.png" class="-ic-img" alt="Notification icon image png" width="70" height="70">
                           <div class="-details-wrapper">
                              <div class="-title">ยิ่งชวนยิ่งได้</div>
                              <p class="-description">แนะนำเพื่อนมาเล่น รับสูงสุด 300 บาท ชวนครบ 10 คน รับเพิ่มทันทีอีก 1000 บาท  สอบถามเพิ่มเติมได้ที่ฝ่ายบริการ @betsup</p>
                              <span class="-datetime">3 เดือนที่แล้ว</span>
                           </div>
                           <div class="-actions-wrapper">
                              <button type="button" class="btn -delete-btn js-notification-remove-item" aria-label="Remove item 3110659" data-remove-url="/account/_ajax_/notifitaion/3110659/remove">
                              <i class="fas fa-trash-alt"></i>
                              </button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <button type="button" class="-delete-all-btn js-notification-remove-all" data-remove-url="/account/_ajax_/notifitaion/remove-all">
               <i class="fas fa-trash-alt"></i>
               <span class="-text">ลบทั้งหมด</span>
               </button>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Alert List -->








<!-- เลือกโปรก่อนเล่นเกม -->
         <div class="x-modal modal show" id="gameproselect" tabindex="-1" role="dialog" style=" padding-right: 6px;" aria-modal="true">
            <div class="modal-dialog -modal-size modal-dialog-centered modal-dialog-scrollable -modal-deposit" role="document">
               <div class="modal-content -modal-content">
                  <button type="button" class="close f-1 " data-dismiss="modal" aria-label="Close">
                  <i class="fas fa-times"></i>
                  </button>
                  <div class="modal-header -modal-header">
                     <h3 class="x-title-modal m-auto">
                        เข้าสู่เกม
                     </h3>
                  </div>
                  <div class="showgamepro">
                     <img src="assets2/build/admin/img/sexy-bac/ezc-sexy-bac-direct-COSPLAY.webp?v=5">
                  </div>
                  <div class="modal-body -modal-body">
                     <div class="x-deposit-form">
                        <div class="row -deposit-container">
                           <div data-animatable="fadeInModal" class="col-lg order-lg-2 -form order-0  fadeInModal">
                             
                              <div class="-deposit-form-inner-wrapper d-block">
                                 <form novalidate="" name="deposit" method="post" data-ajax-form="/account/_ajax_/deposit" data-container="#depositModal">
                                    <div class="-modal-body-top">
                                       <div class="text-center d-flex flex-column">
                                          <div class="m-auto">
                                            
                                          </div>
                                       </div>
                                       <div class="-x-input-icon x-input-operator mb-4 flex-column">
                                          <button type="button" class="-icon-left -btn-icon js-adjust-amount-by-operator" data-operator="-" data-value="10">
                                          <i class="fas fa-minus-circle"></i>
                                          </button>
                                          <input type="text" id="deposit_amount" name="deposit[amount]" required="required" pattern="[0-9]*" class="x-form-control -text-big text-center js-deposit-input-amount form-control" placeholder="เงินฝากขั้นต่ำ 10" inputmode="text">        
                                          <button type="button" class="-icon-right -btn-icon js-adjust-amount-by-operator" data-operator="+" data-value="10">
                                          <i class="fas fa-plus-circle"></i>
                                          </button>
                                       </div>
                                      
                                    </div>



<!-- เลือกโปร ก่อนเล่นเกม -->

<div class="selectprogame">

<!-- ไม่รับโบนัส -->
   <input type="radio" name="choiceprogame" id="choose-1" value="1" checked />
   <label for="choose-1">
   <img src="https://njoy1688.com/images/slide/No_Bonus.png" />
   </label>
<!-- ไม่รับโบนัส -->

<!-- โปร 1 -->
   <input type="radio" name="choiceprogame" id="choose-2" value="2"/>
   <label for="choose-2">
   <img src="https://uagbet.com/wp-content/uploads/2020/01/Artboard-3-1024x1024.png" />
   </label>
<!-- โปร 1 -->

<!-- โปร 2 -->
   <input type="radio" name="choiceprogame" id="choose-3" value="3"/>
   <label for="choose-3">
   <!-- <img src="https://casinobet89.bet/wp-content/uploads/2020/07/%E0%B9%82%E0%B8%9B%E0%B8%A3%E0%B9%82%E0%B8%A1%E0%B8%8A%E0%B8%B1%E0%B9%88%E0%B8%991.jpg" /> -->
   </label>
<!-- โปร 2 -->
</div>
                                    
<!-- เลือกโปร ก่อนเล่นเกม -->





                                    <div class="text-center">
                                       <button type="submit" class="btn -submit btn-primary my-0 my-lg-3">
                                       ยืนยัน
                                       </button>
                                    </div>
                                  
                                    <input type="hidden" id="deposit__token" name="deposit[_token]" value="d8iYDTklPETlCIEBA5CM4b1J9xZS1ZFfMKUoJ-c21fE">        
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>






                  </div>
               </div>
            </div>
         </div>
<!-- เลือกโปรก่อนเล่นเกม -->




















         <div class="d-lg-none">
            <div class="x-modal modal " id="bookmarkModal" tabindex="-1" role="dialog" aria-hidden="true" data-loading-container=".js-modal-content" data-ajax-modal-always-reload="true">
               <div class="modal-dialog -modal-size modal-dialog-centered modal-dialog-scrollable         -no-fixed-button
                  " role="document">
                  <div class="modal-content -modal-content">
                     <button type="button" class="close f-1 " data-dismiss="modal" aria-label="Close">
                     <i class="fas fa-times"></i>
                     </button>
                     <div class="modal-header -modal-header">
                        <h3 class="x-title-modal d-inline-block m-auto">
                           <span>Bookmark</span>                            
                        </h3>
                     </div>
                     <div class="modal-body -modal-body">
                        <div class="x-bookmark-modal-container">
                           <nav>
                              <div class="nav nav-tabs x-bookmark-tabs-header-wrapper" id="nav-tab" role="tablist">
                                 <a class="nav-link active" id="nav-android-tab" data-toggle="tab" href="#nav-android" role="tab" aria-controls="nav-android" aria-selected="true">Android</a>
                                 <a class="nav-link " id="nav-ios-tab" data-toggle="tab" href="#nav-ios" role="tab" aria-controls="nav-ios" aria-selected="true">iOS</a>
                              </div>
                           </nav>
                           <div class="tab-content x-bookmark-tabs-content-wrapper" id="nav-tabContent">
                              <div class="tab-pane fade show active" id="nav-android" role="tabpanel" aria-labelledby="nav-android-tab">
                                 <div class="-slide-wrapper -bookmark-slider-for-android" data-slickable="{&quot;arrows&quot;:false,&quot;dots&quot;:true,&quot;slidesToShow&quot;:1,&quot;fade&quot;:true,&quot;infinite&quot;:true,&quot;autoplay&quot;:false,&quot;asNavFor&quot;:&quot;.-bookmark-slider-nav-android&quot;}">
                                    <div class="-slide-inner-wrapper">
                                       <img src="assets2/build/web/igame-index-lobby-wm/img/bookmark-android-1.png" class="-img" alt="บาคาร่าออนไลน์ คาสิโนออนไลน์ อันดับ 1 ของไทย">
                                    </div>
                                    <div class="-slide-inner-wrapper">
                                       <img src="assets2/build/web/igame-index-lobby-wm/img/bookmark-android-2.png" class="-img" alt="บาคาร่าออนไลน์ คาสิโนออนไลน์ อันดับ 1 ของไทย">
                                    </div>
                                    <div class="-slide-inner-wrapper">
                                       <img src="assets2/build/web/igame-index-lobby-wm/img/bookmark-android-3.png" class="-img" alt="บาคาร่าออนไลน์ คาสิโนออนไลน์ อันดับ 1 ของไทย">
                                    </div>
                                    <div class="-slide-inner-wrapper">
                                       <img src="assets2/build/web/igame-index-lobby-wm/img/bookmark-android-4.png" class="-img" alt="บาคาร่าออนไลน์ คาสิโนออนไลน์ อันดับ 1 ของไทย">
                                    </div>
                                 </div>
                                 <div class="-slide-wrapper -bookmark-slider-nav-android" data-slickable="{&quot;arrows&quot;:false,&quot;dots&quot;:false,&quot;slidesToShow&quot;:1,&quot;fade&quot;:true,&quot;infinite&quot;:true,&quot;autoplay&quot;:false,&quot;asNavFor&quot;:&quot;.-bookmark-slider-for-android&quot;}">
                                    <div class="-slide-inner-wrapper px-3 pt-3">
                                       <div class="-content-wrapper">
                                          <div class="-number">1</div>
                                          <div class="-description">เข้า Google Chrome แล้ว<br> Search "wm.bet" เข้าสู่หน้าเว็บ</div>
                                       </div>
                                    </div>
                                    <div class="-slide-inner-wrapper px-3 pt-3">
                                       <div class="-content-wrapper">
                                          <div class="-number">2</div>
                                          <div class="-description">กดที่ <i class="fas fa-ellipsis-v"></i><br> เลือก "เพิ่มลงในหน้าจอหลัก"</div>
                                       </div>
                                    </div>
                                    <div class="-slide-inner-wrapper px-3 pt-3">
                                       <div class="-content-wrapper">
                                          <div class="-number">3</div>
                                          <div class="-description">กด "เพิ่ม" ทางลัดเข้าสู่เกมส์<br> ลงในหน้าจอโฮม</div>
                                       </div>
                                    </div>
                                    <div class="-slide-inner-wrapper px-3 pt-3">
                                       <div class="-content-wrapper">
                                          <div class="-number">4</div>
                                          <div class="-description">ตรวจสอบหน้า<br> โฮมสกรีนว่ามีไอคอนขึ้นแล้ว</div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane fade " id="nav-ios" role="tabpanel" aria-labelledby="nav-ios-tab">
                                 <div class="-slide-wrapper -bookmark-slider-for-ios" data-slickable="{&quot;arrows&quot;:false,&quot;dots&quot;:true,&quot;slidesToShow&quot;:1,&quot;fade&quot;:true,&quot;infinite&quot;:true,&quot;autoplay&quot;:false,&quot;asNavFor&quot;:&quot;.-bookmark-slider-nav-ios&quot;}">
                                    <div class="-slide-inner-wrapper">
                                       <img src="assets2/build/web/igame-index-lobby-wm/img/bookmark-ios-1.png" class="-img" alt="บาคาร่าออนไลน์ คาสิโนออนไลน์ อันดับ 1 ของไทย">
                                    </div>
                                    <div class="-slide-inner-wrapper">
                                       <img src="assets2/build/web/igame-index-lobby-wm/img/bookmark-ios-2.png" class="-img" alt="บาคาร่าออนไลน์ คาสิโนออนไลน์ อันดับ 1 ของไทย">
                                    </div>
                                    <div class="-slide-inner-wrapper">
                                       <img src="assets2/build/web/igame-index-lobby-wm/img/bookmark-ios-3.png" class="-img" alt="บาคาร่าออนไลน์ คาสิโนออนไลน์ อันดับ 1 ของไทย">
                                    </div>
                                    <div class="-slide-inner-wrapper">
                                       <img src="assets2/build/web/igame-index-lobby-wm/img/bookmark-ios-4.png" class="-img" alt="บาคาร่าออนไลน์ คาสิโนออนไลน์ อันดับ 1 ของไทย">
                                    </div>
                                 </div>
                                 <div class="-slide-wrapper -bookmark-slider-nav-ios" data-slickable="{&quot;arrows&quot;:false,&quot;dots&quot;:false,&quot;slidesToShow&quot;:1,&quot;fade&quot;:true,&quot;infinite&quot;:true,&quot;autoplay&quot;:false,&quot;asNavFor&quot;:&quot;.-bookmark-slider-for-ios&quot;}">
                                    <div class="-slide-inner-wrapper px-3 pt-3">
                                       <div class="-content-wrapper">
                                          <div class="-number">1</div>
                                          <div class="-description">เข้า Google Chrome แล้ว<br> Search "wm.bet" เข้าสู่หน้าเว็บ</div>
                                       </div>
                                    </div>
                                    <div class="-slide-inner-wrapper px-3 pt-3">
                                       <div class="-content-wrapper">
                                          <div class="-number">2</div>
                                          <div class="-description">กดที่ <i class="fas fa-ellipsis-v"></i><br> เลือก "เพิ่มลงในหน้าจอหลัก"</div>
                                       </div>
                                    </div>
                                    <div class="-slide-inner-wrapper px-3 pt-3">
                                       <div class="-content-wrapper">
                                          <div class="-number">3</div>
                                          <div class="-description">กด "เพิ่ม" ทางลัดเข้าสู่เกมส์<br> ลงในหน้าจอโฮม</div>
                                       </div>
                                    </div>
                                    <div class="-slide-inner-wrapper px-3 pt-3">
                                       <div class="-content-wrapper">
                                          <div class="-number">4</div>
                                          <div class="-description">ตรวจสอบหน้า<br> โฮมสกรีนว่ามีไอคอนขึ้นแล้ว</div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <script>
                           Bonn.boots.push(function () {
                               const $bookmarkModal = $('#bookmarkModal')
                               if (!$bookmarkModal.length) {
                                   return
                               }
                           
                               const $slideWrapper = $bookmarkModal.find('.-slide-wrapper');
                               const slickSetPosition = () => $slideWrapper.slick('setPosition')
                           
                               // WATCHING ON MODAL WAS OPENED
                               $bookmarkModal.on('shown.bs.modal', function (e) {
                                   slickSetPosition()
                               })
                           
                               // WATCHING ON TAB WAS TOGGLED
                               $bookmarkModal.find('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                                   slickSetPosition()
                               });
                           })
                        </script>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <script id="b-loading" type="text/template">
            <div class="x-dice-container py-5 m-auto d-flex">
            <div id="dice" class="mx-auto">
            <div class="side front">
                <div class="dot center bg-danger"></div>
            </div>
            <div class="side front inner"></div>
            <div class="side top">
                <div class="dot dtop dleft"></div>
                <div class="dot dbottom dright"></div>
            </div>
            <div class="side top inner"></div>
            <div class="side right">
                <div class="dot dtop dleft"></div>
                <div class="dot center"></div>
                <div class="dot dbottom dright"></div>
            </div>
            <div class="side right inner"></div>
            <div class="side left">
                <div class="dot dtop dleft"></div>
                <div class="dot dtop dright"></div>
                <div class="dot dbottom dleft"></div>
                <div class="dot dbottom dright"></div>
            </div>
            <div class="side left inner"></div>
            <div class="side bottom">
                <div class="dot center"></div>
                <div class="dot dtop dleft"></div>
                <div class="dot dtop dright"></div>
                <div class="dot dbottom dleft"></div>
                <div class="dot dbottom dright"></div>
            </div>
            <div class="side bottom inner"></div>
            <div class="side back">
                <div class="dot dtop dleft"></div>
                <div class="dot dtop dright"></div>
                <div class="dot dbottom dleft"></div>
                <div class="dot dbottom dright"></div>
                <div class="dot center dleft"></div>
                <div class="dot center dright"></div>
            </div>
            <div class="side back inner"></div>
            <div class="side cover x"></div>
            <div class="side cover y"></div>
            <div class="side cover z"></div>
            </div>
            </div>
         </script>
         <script id="loading" type="text/template">
            <div class="x-dice-container py-5 m-auto d-flex">
            <div id="dice" class="mx-auto">
            <div class="side front">
                <div class="dot center bg-danger"></div>
            </div>
            <div class="side front inner"></div>
            <div class="side top">
                <div class="dot dtop dleft"></div>
                <div class="dot dbottom dright"></div>
            </div>
            <div class="side top inner"></div>
            <div class="side right">
                <div class="dot dtop dleft"></div>
                <div class="dot center"></div>
                <div class="dot dbottom dright"></div>
            </div>
            <div class="side right inner"></div>
            <div class="side left">
                <div class="dot dtop dleft"></div>
                <div class="dot dtop dright"></div>
                <div class="dot dbottom dleft"></div>
                <div class="dot dbottom dright"></div>
            </div>
            <div class="side left inner"></div>
            <div class="side bottom">
                <div class="dot center"></div>
                <div class="dot dtop dleft"></div>
                <div class="dot dtop dright"></div>
                <div class="dot dbottom dleft"></div>
                <div class="dot dbottom dright"></div>
            </div>
            <div class="side bottom inner"></div>
            <div class="side back">
                <div class="dot dtop dleft"></div>
                <div class="dot dtop dright"></div>
                <div class="dot dbottom dleft"></div>
                <div class="dot dbottom dright"></div>
                <div class="dot center dleft"></div>
                <div class="dot center dright"></div>
            </div>
            <div class="side back inner"></div>
            <div class="side cover x"></div>
            <div class="side cover y"></div>
            <div class="side cover z"></div>
            </div>
            </div>
         </script>
      </div>
<?php
if(isset($_SESSION['id_mb'])){
?>

  
<script type="text/javascript">
var Class_StartGame = document.querySelectorAll('.ClassStartGame');
		Class_StartGame.forEach(function(element) {
			
			element.addEventListener('click', function() {
			
				Swal.fire({
					title: "กรุณารอสักครู่",
					allowOutsideClick: false,
					didOpen: () => {
						Swal.showLoading()
				  }
				})
				
				var Date_Namegame = $(this).data('namegame');
				var Date_Codegame = $(this).data('codegame');
				$.ajax({
					url: 'api/v2/StartGame',
					type: 'POST',
					data: {
					   'NameGame' : Date_Namegame,
					   'CodeGame' : Date_Codegame
					},
					success: function(data){
						var obj = JSON.parse(data);
						if (obj.status=="success"){
							window.location.href = obj.launch_url;
						}
						if (obj.status=="error"){
							Swal.fire({
								icon: 'error',
								text: 'กรุณาลองใหม่ภายหลัง',
								confirmButtonText: ' ปิด ',
								confirmButtonColor: '#DC3545',
							})
						}
					}
				});
				
				
			})
			
		})
		
		
var Class_StartGame_New = document.querySelectorAll('.ClassStartGameNew');
Class_StartGame_New.forEach(function(element) {
	
	element.addEventListener('click', function() {

		
		var Date_Namegame = $(this).data('namegame');
		var Date_Codegame = $(this).data('codegame');
		Swal.fire({
			title: "กรุณารอสักครู่",
			allowOutsideClick: false,
			didOpen: () => {
				Swal.showLoading()
		  }
		})
		
		$.ajax({
			url: 'api/v2/StartGameNew',
			type: 'POST',
			data: {
			   'NameGame' : Date_Namegame,
			   'CodeGame' : Date_Codegame
			},
			success: function(data){
				var obj = JSON.parse(data);
				if (obj.status=="success"){
					window.location.href = obj.launch_url;
				}
				if (obj.status=="error"){
					Swal.fire({
                        icon: 'error',
                        text: 'กรุณาลองใหม่ภายหลัง',
                        confirmButtonText: ' ปิด ',
                        confirmButtonColor: '#DC3545',
                    })
				}
			}
		});
		
		
	})
	
})
</script>
	  
	  
<script type="text/javascript" >
    $('#submit_deposit').click(function(e) {
        e.preventDefault();
		$('#submit_deposit').addClass("disabled");
        var promotion_dp = $("#promotion_dp").val();
        $.ajax({
            type: "POST",
            url: "api/v2/deposit_dp",
            data: {
                promotion_dp: promotion_dp
            },
            success: function(data) {
				$('#submit_deposit').removeClass("disabled");
                var obj = JSON.parse(data);
                if (obj.status == "success") {
                    Swal.fire({
                        icon: 'success',
                        text: obj.info,
                        confirmButtonText: 'ตกลง',
                        confirmButtonColor: '#00C851',
                    }).then((result) => {
						window.location.reload();
                    })
                } else {
                    Swal.fire({
                        icon: 'error',
                        text: obj.info,
                        confirmButtonText: ' ปิด ',
                        confirmButtonColor: '#DC3545',
                    })
                }
            }
        });
    });
</script>

<script type="text/javascript" >
    $('#submit_withdraw').click(function(e) {
        e.preventDefault();
		$('#submit_withdraw').addClass("disabled");
        var amount_wd = $("#amount_wd").val();
        $.ajax({
            type: "POST",
            url: "api/v2/withdraw_wd",
            data: {
                amount_wd: amount_wd
            },
            success: function(data) {
				$('#submit_withdraw').removeClass("disabled");
                var obj = JSON.parse(data);
                if (obj.status == "success") {
                    Swal.fire({
                        icon: 'success',
                        text: obj.info,
						confirmButtonText: 'ตกลง',
                        confirmButtonColor: '#00C851',
                    }).then((result) => {
						window.location.reload();
                    })
                } else {
                    Swal.fire({
                        icon: 'error',
                        text: obj.info,
						confirmButtonText: ' ปิด ',
                        confirmButtonColor: '#DC3545',
                    })
                }
            }
        });
    });
</script>

<script type="text/javascript" >
    $('.submit_withdraw_aff').click(function(e) {
        e.preventDefault();
		$('.submit_withdraw_aff').addClass("disabled");
        $.ajax({
            type: "POST",
            url: "api/v2/withdraw_aff",
            data: {
            },
            success: function(data) {
				$('.submit_withdrawaff').removeClass("disabled");
                var obj = JSON.parse(data);
                if (obj.status == "success") {
                    Swal.fire({
                        icon: 'success',
                        text: obj.info,
                        confirmButtonColor: '#00C851',
                    }).then((result) => {
						window.location.reload();
					})
                } else {
                    Swal.fire({
                        icon: 'error',
                        text: obj.info,
                        confirmButtonColor: '#00C851',
                    })
                }
            }
        });
    });
</script>

<script type="text/javascript" >
    $('.submit_cashback').click(function(e) {
        e.preventDefault();
		$('.submit_cashback').addClass("disabled");
        $.ajax({
            type: "POST",
            url: "api/v2/withdraw_cashback",
            data: {
            },
            success: function(data) {
				$('.submit_cashback').removeClass("disabled");
                var obj = JSON.parse(data);
                if (obj.status == "success") {
                    Swal.fire({
                        icon: 'success',
                        text: obj.info,
                        confirmButtonColor: '#00C851',
                    }).then((result) => {
						window.location.reload();
					})
                } else {
                    Swal.fire({
                        icon: 'error',
                        text: obj.info,
                        confirmButtonColor: '#00C851',
                    })
                }
            }
        });
    });
</script>

<script type="text/javascript" >
$('.Submit_Change_Spinner').click(function(e) {
    e.preventDefault();
	$('.Submit_Change_Spinner').addClass("disabled");
    $.ajax({
        type: "POST",
        url: "api/v2/ChangeSpinner",
        data: {
			
        },
        success: function(data) {
		$('.Submit_Change_Spinner').removeClass("disabled");
            var obj = JSON.parse(data);
            if (obj.status == "success") {
                Swal.fire({
                    icon: 'success',
                    text: 'แลกพ้อยด์ สำเร็จ',
                    confirmButtonColor: '#00C851',
                }).then((result) => {
					window.location.reload();
				})
            } else {
                Swal.fire({
                    icon: 'error',
                    text: obj.info,
                    confirmButtonColor: '#00C851',
                })
            }
        }
    });
});
</script>





<script type="text/javascript">
window.dispatchEvent(new Event('resize'))
var colorspinner1 = "#4a0404";
var colorspinner2 = "#820000";

var Image1 = "<?php echo $Get_Setting->Image1; ?>";
var Image2 = "<?php echo $Get_Setting->Image2; ?>";
var Image3 = "<?php echo $Get_Setting->Image3; ?>";
var Image4 = "<?php echo $Get_Setting->Image4; ?>";
var Image5 = "<?php echo $Get_Setting->Image5; ?>";
var Image6 = "<?php echo $Get_Setting->Image6; ?>";
var Image7 = "<?php echo $Get_Setting->Image7; ?>";
var Image8 = "<?php echo $Get_Setting->Image8; ?>";
var ImageCenter = "<?php echo $Get_Setting->ImageCenter; ?>";
</script>
 
 

 
<?php } ?>	  
	  
      <script src="assets2/build/runtime.1ba6bf05-1.js"></script>
      <script src="assets2/build/0.e84cf97a-1.js"></script>
      <script src="assets2/build/1.6d41e196-1.js"></script>
      <script src="assets2/build/web/igame-index-lobby-wm/app.bee4588b.js"></script>
      <script src="assets2/js/js.js"></script>
     <script src="assets2/package/dist/sweetalert2.min.js"></script>
   
   

<script src="assets/spinner/superwheel1.js"></script>
<script src="assets/spinner/main1.js"></script>
<script src="assets/spinner/cryptojs-aes.min.js"></script>
<script src="assets/spinner/cryptojs-aes-format.js"></script>
<script src="assets/js/jquery.cookie.js"></script>


<script type="text/javascript">
$(document).ready(function(){

//แสดงยอกเงินเข้า
function Check_Deposit(value){
	if (value > sessionStorage.getItem("CountDeposit")) {
		sessionStorage.setItem("CountDeposit", value);
		Swal.fire({
			icon: 'success',
			title: 'รายการฝากสำเร็จ',
			showConfirmButton: true,
      }).then((result) => {
							window.location.href='wallet';
		})
	}else{
		sessionStorage.setItem("CountDeposit", value);
	}
}	
	
function LoadBalance(){
	
	if (!$.cookie('LoadBalance')) {
		var datealert = new Date();
		datealert.setTime(datealert.getTime() + (32 * 1000));
		$.cookie("LoadBalance", true, { expires: datealert }); 
		
		$.ajax({
        type: "POST",
        url: "api/v2/refresh_balance",
        data: {},
        success: function(data) {
            var obj = JSON.parse(data);
			$('#id_Balance_1').text(obj.Balance);
			$('#id_Balance_2').text(obj.Balance);
			$('#id_Balance_3').text(obj.Balance);
			
			$('#id_Deposit_All').text(obj.Deposit_All);
			$('#id_Withdraw_All').text(obj.Withdraw_All);
			
			if (sessionStorage.getItem('CountDeposit')) {
				Check_Deposit(obj.CountDeposit);
			}else{
				sessionStorage.setItem("CountDeposit", obj.CountDeposit);
			}
			
        }
    });	
	}
	
}
	
LoadBalance();
setInterval(LoadBalance, 1000);
	
});
</script>

   
   
   </body>
</html>