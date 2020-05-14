<link rel="stylesheet" href="/plugin/datetimepicker/bootstrap-datepicker3.css">
<link href="/plugin/datetimepicker/bootstrap-datetimepicker.min.css">

<div class="gb-datve-labon">
    <div class="container">
        <div class="tabbable-panel">
            <div class="tabbable-line">
                <ul class="nav nav-tabs ">
                    <li class="active">
                        <a href="#tab_default_1" data-toggle="tab">Hai chiều</a>
                    </li>
                    <li>
                        <a href="#tab_default_2" data-toggle="tab">Một chiều</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_default_1">
                        <form action="index.php">
                            <input type="hidden" name="page" value="booking">
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Tuyến đường</label>
                                        <select class="form-control" name="route">
                                            <option value="Hanoi to sapa">Hanoi to sapa</option>
                                            <option value="Sapa to Hanoi">Sapa to Hanoi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Loại xe</label>
                                        <select class="form-control" name="bus">
                                            <option value="Bus 40 seats">Bus 40 seats</option>
                                            <option value="Limousine 10 searts">Limousine 10 searts</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Hành khách</label>
                                        <select class="form-control" name="passengers">
                                            <?php for ($i=1;$i<=28;$i++) { ?>
                                                <option value="<?= $i ?>"><?= $i ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Ngày khởi hành</label>
                                        <div class="input-group date date-check-in" data-date="12-February-2017" data-date-format="mmmm-dd-yyyy">
                                            <input name="date1" class="form-control" type="text" id="date" value="12-February-2017">
                                            <span class="input-group-addon btn"><span class="ti-calendar" id="ti-calendar1"><i class="fa fa-calendar" aria-hidden="true"></i></span></span>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Ngày trở lại</label>
                                        <div class="input-group date date-check-out" data-date="12-February-2017" data-date-format="mmmm-dd-yyyy">
                                            <input name="date2" class="form-control" type="text" id="date" value="12-February-2017">
                                            <span class="input-group-addon btn"><span class="ti-calendar" id="ti-calendar2"><i class="fa fa-calendar" aria-hidden="true"></i></span></span>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <button class="btn btn-datcho">Đặt chỗ</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="tab_default_2">
                        <form action="index.php">
                            <input type="hidden" name="page" value="booking">
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Tuyển đường</label>
                                        <select class="form-control" name="route">
                                            <option value="Hanoi to sapa">Hanoi to sapa</option>
                                            <option value="Sapa to Hanoi">Sapa to Hanoi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Loại xe</label>
                                        <select class="form-control" name="bus">
                                            <option value="Bus 40 seats">Bus 40 seats</option>
                                            <option value="Limousine 10 searts">Limousine 10 searts</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Khách hàng</label>
                                        <select class="form-control" name="passengers">
                                            <?php for ($i=1;$i<=28;$i++) { ?>
                                                <option value="<?= $i ?>"><?= $i ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Ngày khởi hành</label>
                                        <div class="input-group date date-check-in" data-date="12-February-2017" data-date-format="mmmm-dd-yyyy">
                                            <input name="date1" class="form-control" type="text" id="date" value="12-February-2017">
                                            <span class="input-group-addon btn"><span class="ti-calendar" id="ti-calendar1"><i class="fa fa-calendar" aria-hidden="true"></i></span></span>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <button class="btn btn-datcho">Đặt chỗ</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="gb-datve-labon-list">
    <div class="container">
        <div id="trip-oneway" style="">
            <h3 class="chooseticket">1. Lựa chọn chuyến đi</h3>
            <h4 class="trip">
                <strong class="start">Mộc Châu  </strong>
                <span class="scb-to"> Tới: </span>
                <strong class="end"> Hà Nội</strong>
            </h4>
            <div class="oneway-info">
                <span class="fdate-highlight">
                    Ngày đi: <strong class="startDate">05/11/2018</strong>
                </span>
            </div>
            <div class="table-responsive list-trip">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Chuyến xe</th>
                        <th>Khởi hành</th>
                        <th>Đến</th>
                        <th>Ghế trống</th>
                        <th>Giá vé</th>
                    </tr>
                    </thead>
                    <tbody id="list-oneway">
                    <tr>
                        <td>Mộc Châu  - Hà Nội</td>
                        <td><strong>14:30 05/11/2018</strong></td>
                        <td><strong>19:30, 05/11/2018</strong></td>
                        <td><strong>0</strong></td>
                        <td class="table-price"><strong>220,000 VND</strong></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div id="trip-round" style="">
            <h3 class="chooseticket">2. Lựa chọn chuyến về</h3>
            <h4 class="trip">
                <strong class="end"> Mộc Châu</strong>
                <span class="scb-to"> Tới: </span>
                <strong class="start">Hà Nội  </strong>
            </h4>
            <div class="oneway-info">
                <span class="fdate-highlight">
                    Ngày đi: <strong class="endDate">05/11/2018</strong>
                </span>
            </div>
            <div class="table-responsive list-trip">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Chuyến xe</th>
                        <th>Khởi hành</th>
                        <th>Đến</th>
                        <th>Ghế trống</th>
                        <th>Giá vé</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Mộc Châu  - Hà Nội</td>
                        <td><strong>14:30 05/11/2018</strong></td>
                        <td><strong>19:30, 05/11/2018</strong></td>
                        <td><strong>0</strong></td>
                        <td class="table-price"><strong>220,000 VND</strong></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!--TIẾP TỤC-->
        <div class="btn-tieptuc">
            <a href="thong-tin-dat-ve" class="btn">Tiếp tục</a>
        </div>
    </div>
</div>

<script src="/plugin/datetimepicker/bootstrap-datepicker.min.js"></script>
<script src="/plugin/datetimepicker/bootstrap-datepicker.tr.min.js"></script>
<script src="/plugin/datetimepicker/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script src="/plugin/datetimepicker/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
<script src="/plugin/datetimepicker/moment.min.js"></script>
<script>

    $(document).ready(function () {
        //=============Calendar=============
        moment.locale('tr');
        var date = new Date();
        var bugun = moment(date).format("DD/MM/YYYY");

        var date_input1=$('input[name="date1"]'); //our date input has the name "date"
        var date_input2=$('input[name="date2"]');
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        var options={
            container: container,
            todayHighlight: true,
            autoclose: true,
            format: 'dd/mm/yyyy',
            language: 'tr'
        };
        date_input1.val(bugun);
        date_input2.val(bugun);
        date_input1.datepicker(options).on('focus', function(date_input){
        });
        date_input2.datepicker(options).on('focus', function(date_input){
        });


        date_input1.change(function () {
            var deger = $(this).val();
        });
        date_input2.change(function () {
            var deger = $(this).val();
        });


        $('.date-check-in').find('#ti-calendar1').on('click', function(){

            if( !date_input1.data('datepicker').picker.is(":visible"))
            {
                date_input1.trigger('focus');
            } else {
            }
        });
        $('.date-check-out').find('#ti-calendar2').on('click', function(){

            if( !date_input2.data('datepicker').picker.is(":visible"))
            {
                date_input2.trigger('focus');
            } else {
            }
        });
    });
</script>
