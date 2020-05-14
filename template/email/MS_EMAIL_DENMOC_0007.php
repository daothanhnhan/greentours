<div class="gb-thongtingdatve">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="gb-thongtingdatve-left">
                    <div class="select-seat">
                        <h3 class="trip-info">Thông tin chuyến đi</h3>
                        <ul>
                            <li><strong>Chuyến đi</strong></li>
                            <li>Ngày đi: <strong class="startDate">17/11/2018</strong></li>
                            <li>Tuyến đường: <strong class="routeName">Mộc Châu  - Hà Nội</strong></li>
                            <li>Giờ xuất phát: <strong class="intime">14:30</strong></li>
                        </ul>
                    </div>
                    <div class="select-seat" id="select-seat-round" style="display: none">
                        <h3 class="trip-info">Thông tin chuyến về</h3>
                        <ul>
                            <li><strong>Chuyến về</strong></li>
                            <li>Ngày đi: <strong class="startDateReturn"></strong></li>
                            <li>Tuyến đường: <strong class="routeNameReturn"> Hà Nội - Mộc Châu  </strong></li>
                            <li>Giờ xuất phát: <strong class="intimeReturn"></strong></li>
                        </ul>
                    </div>
                    <div class="select-seat">
                        <h3 class="trip-info">Thông tin hành khách</h3>
                        <p>Quý khách vui lòng nhập thông tin chính xác </p>
                        <div class="row form-customer">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="fullname">Họ và tên (<span class="required">*</span>)</label>
                                    <input type="text" placeholder="Họ và tên" class="form-control" name="fullname" id="fullname" autofocus="" required="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="phoneNumber">Số điện thoại (<span class="required">*</span>)</label>
                                    <input type="text" placeholder="Số điện thoại" class="form-control" name="phoneNumber" id="phoneNumber" required="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="phoneNumber">Email</label>
                                    <input type="email" placeholder="Email" class="form-control" name="email" id="email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="phoneNumber">Ghi chú</label>
                                    <textarea placeholder="Các yêu cầu đặc biệt không thể được đảm bảo nhưng nhà xe sẽ cố gắng hết sức để đáp ứng yêu cầu của bạn" name="note" class="form-control" id="note" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="gb-thongtingdatve-right">
                    <!--THÔNG TIN ĐẶT VÉ-->
                    <div class="customer-info">
                        <h4 class="trip-info" style="text-transform: uppercase; padding-left: 0px;">Chi tiết giá vé</h4>
                        <div class="total-title">
                            <h4>Lượt đi</h4>
                            <div class="total-inside">
                                <div class="total-inside-item">
                                    Ghế đã chọn: <span class="seatlist" id="ghedi"></span> <br>
                                </div>
                                <div class="total-inside-item">
                                    Giá người lớn: <span class="price" id="adultMoneyOneway">0 VND</span> <br>
                                </div>
                                <div class="total-inside-item">
                                    Giá trẻ em: <span class="price" id="babyMoneyOneWay">0 VND</span> <br>
                                </div>
                                <div class="total-inside-item">
                                    Phí trung chuyển: <span class="price" id="transshipmentPriceOneway">0 VND</span> <br>
                                </div>
                            </div>
                            <div class="subtotal">
                                Tổng tiền lượt đi<br>
                                <strong id="totalMoneyOneway">0 VND</strong>
                            </div>
                        </div>
                        <div class="total-title" id="total-round" style="">
                            <h4>Lượt về</h4>
                            <div class="total-inside">
                                <div class="total-inside-item">
                                    Ghế đã chọn: <span class="seatlist" id="gheve"></span> <br>
                                </div>
                                <div class="total-inside-item">
                                    Giá người lớn: <span class="price" id="adultMoneyReturn">0 VND</span> <br>
                                </div>
                                <div class="total-inside-item">
                                    Giá trẻ em: <span class="price" id="babyMoneyReturn">0 VND</span> <br>
                                </div>
                                <div class="total-inside-item">
                                    Phí trung chuyển: <span class="price" id="transshipmentPriceReturn">0 VND</span> <br>
                                </div>
                            </div>
                            <div class="subtotal">
                                Tổng tiền lượt về<br>
                                <strong id="totalMoneyReturn">0 VND</strong>
                            </div>
                        </div>
                        <div id="total">
                            Tổng tiền<br>
                            <strong id="totalMoney">0 VND</strong>
                        </div>
                    </div>

                    <!--THANH TOÁN-->
                    <div class="payment">
                        <div class="payment-dialog">
                            <h3>Thanh toán</h3>
                            <div class="payment-form">
                                <div class="radio">
                                    <label class="radio">
                                        <input type="radio" checked="checked" class="paymenttype" name="paymenttype" value="1"> Thanh toán bằng thẻ nội địa
                                    </label>

                                    <div class="test" style="display: block">
                                        <label class="radio">
                                            <input type="radio" class="paymenttype" name="paymenttype" value="2">
                                            Thanh toán qua Megabank
                                        </label>
                                    </div>


                                    <label class="radio">
                                        <input type="radio" class="paymenttype" name="paymenttype" value="5">
                                        Thanh toán tại quầy
                                    </label>
                                    <label class="radio" id="radiochuyenkhoan" style="">
                                        <input type="radio" class="paymenttype" name="paymenttype" value="6">
                                        Chuyển khoản
                                    </label>
                                </div>
                                <center>
                                    <button type="button" id="hoanthanhbtn" class="btn">Xác nhận đặt
                                        vé
                                    </button>
                                    <button type="button" style="display: none" id="btnchuyenkhoan" class="btn" data-toggle="modal" data-target="#chuyenkhoan">
                                        Thông tin chuyển khoản
                                    </button>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>