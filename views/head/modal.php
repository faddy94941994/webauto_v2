<?php if(isset($_SESSION['id_mb'])){ ?>
<div class="modal fade" id="menumodal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content shadow-gold">
      <div class="modal-body">
        <h3 class="mb-2">ข้อมูลบัญชี</h3>
        <div class="position-absolute end-0 top-0 p-2 z-index-1 ">
          <button type="button" class=" btn btn-sm btn-26 roudned-circle shadow-sm shadow-danger text-white bg-danger" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <hr>
        <div class="px-5">
          <div class="card shadow-sm shadow-purple bg-dc mb-3">
            <div class="card-body">
              <div class="row mb-4">
                <div class="col-auto align-self-center">
                  <figure class="text-center avatar-50 avatar image-shadow">
                    <img src="/assets/img/icon_bank/
												<?php echo $Get_Profile->bank_mb; ?>.png" alt="">
                  </figure>
                </div>
                <div class="col align-self-center text-end">
                  <p class="small">
                    <span class="text-muted size-13">บัญชี</span>
                    <br>
                    <span class=""> <?php echo $Get_Profile->bank_mb; ?> </span>
                  </p>
                </div>
              </div>
              <h6 class="fw-normal mb-3"> <?php echo $Get_Profile->bankacc_mb; ?> </h6>
              <div class="row">
                <div class="col-auto">
                  <p class="mb-0 text-muted size-13">วันที่สมัคร</p>
                  <p> <?php echo date("d/m/Y", strtotime($Get_Profile->date_mb)); ?> </p>
                </div>
                <div class="col text-end">
                  <p class="mb-0 text-muted size-13">ชื่อบัญชี</p>
                  <p> <?php echo $Get_Profile->name_mb; ?> </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center mb-4">
          <div class="col-12">
            <div class="card">
              <div class="card-body p-0">
                <ul class="list-group list-group-flush bg-none">
                  <li class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <div class="avatar avatar-44 shadow-sm border-0 card rounded-15">
                          <img src="assets/img/icon_img/success.png" alt="" class="img-fluid mx-auto">
                        </div>
                      </div>
                      <div class="col align-self-center ps-0">
                        <p>UserID</p>
                      </div>
                      <div class="col align-self-center text-end">
                        <p> <?php echo $Get_Profile->username_mb; ?> </p>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <div class="avatar avatar-44 shadow-sm border-0 card rounded-15">
                          <img src="assets/img/icon_img/businessman.png" alt="" class="img-fluid mx-auto">
                        </div>
                      </div>
                      <div class="col align-self-center ps-0">
                        <p>ชื่อนามสกุล</p>
                      </div>
                      <div class="col align-self-center text-end">
                        <p> <?php echo $Get_Profile->name_mb; ?> </p>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <div class="avatar avatar-44 shadow-sm border-0 card rounded-15">
                          <img src="assets/img/icon_img/smartphone.png" alt="" class="img-fluid mx-auto">
                        </div>
                      </div>
                      <div class="col align-self-center ps-0">
                        <p>เบอร์โทร</p>
                      </div>
                      <div class="col align-self-center text-end">
                        <p> <?php echo $Get_Profile->phone_mb; ?> </p>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <div class="avatar avatar-44 shadow-sm border-0 card rounded-15">
                          <img src="assets/img/icon_img/profits.png" alt="" class="img-fluid mx-auto">
                        </div>
                      </div>
                      <div class="col align-self-center ps-0">
                        <p>ยอดฝากรวมทั้งหมด</p>
                      </div>
                      <div class="col align-self-center text-end">
                        <p id="id_Deposit_All">0</p>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="row">
                      <div class="col-auto">
                        <div class="avatar avatar-44 shadow-sm border-0 card rounded-15">
                          <img src="assets/img/icon_img/loss.png" alt="" class="img-fluid mx-auto">
                        </div>
                      </div>
                      <div class="col align-self-center ps-0">
                        <p>ยอดถอนรวมทั้งหมด</p>
                      </div>
                      <div class="col align-self-center text-end">
                        <p id="id_Withdraw_All">0</p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php }else{ ?>


<?php } ?>