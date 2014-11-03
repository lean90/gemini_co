<section class="content-header">
    <h1>
        Lotto games
        <small>Chơi game chọn số</small>
    </h1>
</section>

<!-- Main content -->
<section class="content" ng-controller="LottoController">
    <div class="row">
        <div class="col-md-6">
            <div class="box box-primary" ng-repeat="room in lRooms" id="room.id">
                <div class="box-header">
                    <h3 class="box-title">{{room.roomName}}</h3>
                </div>
                <div class="box-body chart-responsive lotto-box-title">
                    <h4 class="box-game-turn">Lượt rút số : {{room.turn.turnNumber}}</h4>
                    <h3 class="box-game-time"><span class="des">Ván kế tiếp </span>{{room.clockLabel}}</h3>
                </div>
                <div class="box-body chart-responsive">
                    <div class="lotto-box x2" ng-click="selectPoint(room,'factorTai','Tài')">
                        <span class="bet-type">Tài</span>
                        <span class="odds-value">{{room.turn.factorTai}}</span>
                    </div>
                    <div class="lotto-box x1" ng-click="selectPoint(room,'factorTong810','Tổng 810')">
                        <span class="bet-type">Tổng 810</span>
                        <span class="odds-value">{{room.turn.factorTong810}}</span>
                    </div>
                    <div class="lotto-box x2" ng-click="selectPoint(room,'factorXiu','Xỉu')">
                        <span class="bet-type">Xỉu</span>
                        <span class="odds-value">{{room.turn.factorXiu}}</span>
                    </div>
                    
                    <div class="lotto-box x2" ng-click="selectPoint(room,'factorCacSoLe','các số lẻ')">
                        <span class="bet-type">Các số lẻ</span>
                        <span class="odds-value">{{room.turn.factorCacSoLe}}</span>
                    </div>
                    <div class="lotto-box x1" ng-click="selectPoint(room,'factorCacSoHoa','Hòa')">
                        <span class="bet-type">Hòa</span>
                        <span class="odds-value">{{room.turn.factorCacSoHoa}}</span>
                    </div>
                    <div class="lotto-box x2" ng-click="selectPoint(room,'factorCacSoChan','Các số chẵn')">
                        <span class="bet-type">Các số chẵn</span>
                        <span class="odds-value">{{room.turn.factorCacSoChan}}</span>
                    </div>
                    <div class="lotto-box x1" ng-click="selectPoint(room,'factorLe','Lẻ')">
                        <span class="bet-type">Lẻ</span>
                        <span class="odds-value">{{room.turn.factorLe}}</span>
                    </div>
                    <div class="lotto-box x2" ng-click="selectPoint(room,'factorChan','Chẵn')">
                        <span class="bet-type">Chẵn</span>
                        <span class="odds-value">{{room.turn.factorChan}}</span>
                    </div>
                    <div class="lotto-box x2" ng-click="selectPoint(room,'factorNgocCau','Ngọc cầu')">
                        <span class="bet-type">Ngọc cầu</span>
                        <span class="odds-value"></span>
                    </div>
                    <div class="lotto-box x2" ng-click="selectPoint(room,'factorTren','Trên')">
                        <span class="bet-type">Trên</span>
                        <span class="odds-value">{{room.turn.factorTren}}</span>
                    </div>
                    <div class="lotto-box x2" ng-click="selectPoint(room,'factorDuoi','Dưới')">
                        <span class="bet-type">Dưới</span>
                        <span class="odds-value">{{room.turn.factorDuoi}}</span>
                    </div>
                    <div class="lotto-box x1" ng-click="selectPoint(room,'factorHoa','Hòa')">
                        <span class="bet-type">Hòa</span>
                        <span class="odds-value">{{room.turn.factorHoa}}</span>
                    </div>
                    <div class="lotto-box x1" ng-click="selectPoint(room,'factorNhKim','Ngũ hành Kim')">
                        <span class="bet-type">Kim</span>
                        <span class="odds-value">{{room.turn.factorNhKim}}</span>
                    </div>
                    <div class="lotto-box x1" ng-click="selectPoint(room,'factorNhMoc','Ngũ hành Mộc')">
                        <span class="bet-type" >Mộc</span>
                        <span class="odds-value">{{room.turn.factorNhMoc}}</span>
                    </div>
                    <div class="lotto-box x1" ng-click="selectPoint(room,'factorNhThuy','Ngũ hành Thủy')">
                        <span class="bet-type">Thủy</span>
                        <span class="odds-value">{{room.factorNhThuy}}</span>
                    </div>
                    <div class="lotto-box x1" ng-click="selectPoint(room,'factorNhHoa','Ngũ hành Hỏa')">
                        <span class="bet-type">Hỏa</span>
                        <span class="odds-value">{{room.turn.factorNhHoa}}</span>
                    </div>
                    <div class="lotto-box x1" ng-click="selectPoint(room,'factorNhTho','Ngũ hành Thổ')">
                        <span class="bet-type">Thổ</span>
                        <span class="odds-value">{{room.turn.factorNhTho}}</span>
                    </div>
                    <div class="lotto-box x1" ng-click="selectPoint(room,'factorLienHoanTaiLe','Tài lẻ')">
                        <span class="bet-type small">Tài/Lẻ</span>
                        <span class="odds-value">{{room.turn.factorLienHoanTaiLe}}</span>
                    </div>
                    <div class="lotto-box x1" ng-click="selectPoint(room,'factorLienHoanTaiChan','Tài chẵn')">
                        <span class="bet-type small">Tài/Chẵn</span>
                        <span class="odds-value">{{room.turn.factorLienHoanTaiChan}}</span>
                    </div>
                    <div class="lotto-box x1" ng-click="selectPoint(room,'factorLienHoanXiuLe','Xỉu lẻ')">
                        <span class="bet-type small">Xỉu/Lẻ</span>
                        <span class="odds-value">{{room.turn.factorLienHoanXiuLe}}</span>
                    </div>
                    <div class="lotto-box x2" ng-click="selectPoint(room,'factorLienHoanXiuChan','Xỉu chẵn')">
                        <span class="bet-type">Xỉu/Chẵn</span>
                        <span class="odds-value">{{room.turn.factorLienHoanXiuChan}}</span>
                    </div>
                </div>
                <div class="box-body chart-responsive lotto-box-result">
                    
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="box box-primary" ng-repeat="room in rRooms">
                <div class="box-header">
                    <h3 class="box-title">{{room.roomName}}</h3>
                </div>
                <div class="box-body chart-responsive lotto-box-title">
                    <h4 class="box-game-turn">Lượt rút số : {{room.turn.turnNumber}}</h4>
                    <h3 class="box-game-time"><span class="des">Ván kế tiếp </span>{{room.clockLabel}}</h3>
                </div>
                <div class="box-body chart-responsive">
                    <div class="lotto-box x2">
                        <span class="bet-type">Tài</span>
                        <span class="odds-value">{{room.turn.factorTai}}</span>
                    </div>
                    <div class="lotto-box x1">
                        <span class="bet-type">Tổng 810</span>
                        <span class="odds-value">{{room.turn.factorTai}}</span>
                    </div>
                    <div class="lotto-box x2">
                        <span class="bet-type">Xỉu</span>
                        <span class="odds-value">{{room.turn.factorTai}}</span>
                    </div>
                    
                    <div class="lotto-box x2">
                        <span class="bet-type">Các số lẻ</span>
                        <span class="odds-value">{{room.turn.factorCacSoLe}}</span>
                    </div>
                    <div class="lotto-box x1">
                        <span class="bet-type">Hòa</span>
                        <span class="odds-value">{{room.turn.factorCacSoHoa}}</span>
                    </div>
                    <div class="lotto-box x2">
                        <span class="bet-type">Các số chẵn</span>
                        <span class="odds-value">{{room.turn.factorCacSoChan}}</span>
                    </div>
                    <div class="lotto-box x1">
                        <span class="bet-type">Lẻ</span>
                        <span class="odds-value">{{room.turn.factorLe}}</span>
                    </div>
                    <div class="lotto-box x2">
                        <span class="bet-type">Chẵn</span>
                        <span class="odds-value">{{room.turn.factorChan}}</span>
                    </div>
                    <div class="lotto-box x2">
                        <span class="bet-type">Ngọc cầu</span>
                        <span class="odds-value"></span>
                    </div>
                    <div class="lotto-box x2">
                        <span class="bet-type">Trên</span>
                        <span class="odds-value">{{room.turn.factorHoa}}</span>
                    </div>
                    <div class="lotto-box x2">
                        <span class="bet-type">Dưới</span>
                        <span class="odds-value">{{room.turn.factorTren}}</span>
                    </div>
                    <div class="lotto-box x1">
                        <span class="bet-type">Hòa</span>
                        <span class="odds-value">{{room.turn.factorHoa}}</span>
                    </div>
                    <div class="lotto-box x1">
                        <span class="bet-type">Kim</span>
                        <span class="odds-value">{{room.turn.factorNhKim}}</span>
                    </div>
                    <div class="lotto-box x1">
                        <span class="bet-type">Mộc</span>
                        <span class="odds-value">{{room.turn.factorNhMoc}}</span>
                    </div>
                    <div class="lotto-box x1">
                        <span class="bet-type">Thủy</span>
                        <span class="odds-value">{{room.factorNhThuy}}</span>
                    </div>
                    <div class="lotto-box x1">
                        <span class="bet-type">Hỏa</span>
                        <span class="odds-value">{{room.turn.factorNhHoa}}</span>
                    </div>
                    <div class="lotto-box x1">
                        <span class="bet-type">Thổ</span>
                        <span class="odds-value">{{room.turn.factorNhTho}}</span>
                    </div>
                    <div class="lotto-box x1">
                        <span class="bet-type small">Tài/Lẻ</span>
                        <span class="odds-value">{{room.turn.factorLienHoanTaiLe}}</span>
                    </div>
                    <div class="lotto-box x1">
                        <span class="bet-type small">Tài/Chẵn</span>
                        <span class="odds-value">{{room.turn.factorLienHoanTaiChan}}</span>
                    </div>
                    <div class="lotto-box x1">
                        <span class="bet-type small">Xỉu/Lẻ</span>
                        <span class="odds-value">{{room.turn.factorLienHoanXiuLe}}</span>
                    </div>
                    <div class="lotto-box x2">
                        <span class="bet-type">Xỉu/Chẵn</span>
                        <span class="odds-value">{{room.turn.factorLienHoanXiuChan}}</span>
                    </div>
                </div>
                <div class="box-body chart-responsive lotto-box-result">
                </div>
            </div>
        </div>
    </div>
    <div id="boxPointer" class="login-pagemark" style="display: none;">
        <div class="form-box" id="login-box">
            <div class="header">Đặt cược</div>
            <form id="frm-main" method="post">
                <div class="body bg-gray " >
                    <div class="form-group  text-center no-padding no-margin" ><span>Phòng : {{dialogPointPannel.roomName}}</span></span><br/>Lượt rút số : {{dialogPointPannel.turnNumber}}</div>
                    <div class="form-group  text-left no-padding no-margin">
                        <br/>
                        <div class="form-group  text-center no-padding no-margin" style="border:solid 1px #3d9970">
                                    {{dialogPointPannel.selectedName}} @ <span style="color:red;font-weight: bold;">{{dialogPointPannel.selectedFactor}}</span>
                        </div>
                    </div>
                    <div class="form-group  text-center no-padding no-margin">
                        <table class="table" style="background-color: white;margin-top:10px">
                            <tr>
                                <td class="text-left">Tiền cược (VND)</td><td class="text-left"> 
                                    <input type="text" ng-model="dialogPointPannel.input" fcsa-number="{  }" /> 
                                </td>
                            </tr>
                            <tr>
                                <td class="text-left">Ước tính </td><td class="text-left"> <span >{{ Math.ceil( dialogPointPannel.input * dialogPointPannel.selectedFactor )| number}} VND</span></td>
                            </tr>
                            <tr>
                                <td class="text-left">Cược tốt thiểu </td><td class="text-left"> {{dialogPointPannel.min | number}} </td>
                            </tr>
                            <tr>
                                <td class="text-left">Cược tốt đa </td><td class="text-left"> {{dialogPointPannel.max | number}} </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="footer text-center">                                                               
                    <button id="btn-frm-main" type="submit" class="btn bg-olive ">Đặt cược</button>
                    <button id="btn-frm-main" type="submit" class="btn " ng-click="closePointDialog()">Đóng</button>
                </div>
            </form>
        </div>
    </div>
</section>

<script type="text/javascript">
    window.token = <?php echo json_encode($token);?>; 
</script>