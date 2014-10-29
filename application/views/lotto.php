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
            <div class="box box-primary" ng-repeat="room in lRooms">
                <div class="box-header">
                    <h3 class="box-title">{{room.roomName}}</h3>
                </div>
                <div class="box-body chart-responsive lotto-box-title">
                    <h4 class="box-game-turn">Lượt rút số : {{room.turn.id}}</h4>
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
        <div class="col-md-6">
            <div class="box box-primary" ng-repeat="room in rRooms">
                <div class="box-header">
                    <h3 class="box-title">{{room.roomName}}</h3>
                </div>
                <div class="box-body chart-responsive lotto-box-title">
                    <h4 class="box-game-turn">Lượt rút số : {{room.turn.id}}</h4>
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
</section>
<script type="text/javascript">
    window.token = <?php echo json_encode($token);?>; 
</script>