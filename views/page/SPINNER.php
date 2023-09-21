


<div class="container">
<div class="-sub-description-inner-wrapper">
<div class="row">
<div class="col-9 col-md-12 text-center">
<h3>หมุนวงล้อ</h3>


<span class="fw-bold">สิทธิ์หมุนวงล้อ <font color="#fff200"><?php if($Get_Profile->creditspin == ""){ echo "0"; }else{  echo $Get_Profile->creditspin; } ?></font> ครั้ง</span><br>
<span class="fw-bold">พ้อยด์ของท่าน <font color="#fff200"><?php if($_SESSION["point"] == '') { echo '0'; }else{ echo $_SESSION["point"]; } ?></font></span>
<div class="d-grid">
<button class="btn btn-sm btn-success shadow-sm py-1 Submit_Change_Spinner">แลกรางวัล</button>
</div> 

<div class="wheel-with-image"></div>

<div class="d-grid">
<button class="btn btn-success shadow-sm py-2 wheel-with-image-spin-button">หมุนวงล้อ</button>
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
                                   
</div>
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
   $(".nav-link.-spinner-game").addClass("active");
</script>
<!-- Check Link Active -->