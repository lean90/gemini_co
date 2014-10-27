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
                    <h4 class="box-game-turn">Lượt rút số : XXXX</h4>
                    <h3 class="box-game-time"><span class="des">Ván kế tiếp </span>XX:XX</h3>
                </div>
                <div class="box-body chart-responsive">
                    <div class="lotto-box x2">
                        <span class="bet-type">Tài</span>
                        <span class="odds-value">{{room.factorTai}}</span>
                    </div>
                    <div class="lotto-box x1">
                        <span class="bet-type">Tổng 810</span>
                        <span class="odds-value">{{room.factorTai}}</span>
                    </div>
                    <div class="lotto-box x2">
                        <span class="bet-type">Xỉu</span>
                        <span class="odds-value">{{room.factorTai}}</span>
                    </div>
                    
                    <div class="lotto-box x2">
                        <span class="bet-type">Các số lẻ</span>
                        <span class="odds-value">2.3</span>
                    </div>
                    <div class="lotto-box x1">
                        <span class="bet-type">Hòa</span>
                        <span class="odds-value">4.3</span>
                    </div>
                    <div class="lotto-box x2">
                        <span class="bet-type">Các số chẵn</span>
                        <span class="odds-value">2.3</span>
                    </div>
                    <div class="lotto-box x1">
                        <span class="bet-type">Lẻ</span>
                        <span class="odds-value">1.95</span>
                    </div>
                    <div class="lotto-box x2">
                        <span class="bet-type">Chẵn</span>
                        <span class="odds-value">1.95</span>
                    </div>
                    <div class="lotto-box x2">
                        <span class="bet-type">Ngọc cầu</span>
                        <span class="odds-value"></span>
                    </div>
                    <div class="lotto-box x2">
                        <span class="bet-type">Trên</span>
                        <span class="odds-value">2.3</span>
                    </div>
                    <div class="lotto-box x2">
                        <span class="bet-type">Dưới</span>
                        <span class="odds-value">2.3</span>
                    </div>
                    <div class="lotto-box x1">
                        <span class="bet-type">Hòa</span>
                        <span class="odds-value">4.3</span>
                    </div>
                    <div class="lotto-box x1">
                        <span class="bet-type">Kim</span>
                        <span class="odds-value">9.2</span>
                    </div>
                    <div class="lotto-box x1">
                        <span class="bet-type">Mộc</span>
                        <span class="odds-value">4.6</span>
                    </div>
                    <div class="lotto-box x1">
                        <span class="bet-type">Thủy</span>
                        <span class="odds-value">2.4</span>
                    </div>
                    <div class="lotto-box x1">
                        <span class="bet-type">Hỏa</span>
                        <span class="odds-value">4.6</span>
                    </div>
                    <div class="lotto-box x1">
                        <span class="bet-type">Thổ</span>
                        <span class="odds-value">9.2</span>
                    </div>
                    <div class="lotto-box x1">
                        <span class="bet-type small">Tài/Lẻ</span>
                        <span class="odds-value">3.7</span>
                    </div>
                    <div class="lotto-box x1">
                        <span class="bet-type small">Tài/Chẵn</span>
                        <span class="odds-value">3.7</span>
                    </div>
                    <div class="lotto-box x1">
                        <span class="bet-type small">Xỉu/Lẻ</span>
                        <span class="odds-value">3.7</span>
                    </div>
                    <div class="lotto-box x2">
                        <span class="bet-type">Xỉu/Chẵn</span>
                        <span class="odds-value">3.7</span>
                    </div>
                </div>
                <div class="box-body chart-responsive lotto-box-result">
                    
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Phòng Hà Nội</h3>
                </div>
                <div class="box-body chart-responsive lotto-box-title">
                    <h4 class="box-game-turn">Lượt rút số : 10021</h4>
                    <h3 class="box-game-time"><span class="des">Ván kế tiếp </span>03:01</h3>
                </div>
                <div class="box-body chart-responsive">
                    <div class="lotto-box x2">
                        <span class="bet-type">Tài</span>
                        <span class="odds-value">1.95</span>
                    </div>
                    <div class="lotto-box x1">
                        <span class="bet-type">Tổng 810</span>
                        <span class="odds-value">108</span>
                    </div>
                    <div class="lotto-box x2">
                        <span class="bet-type">Xỉu</span>
                        <span class="odds-value">1.95</span>
                    </div>
                    
                    <div class="lotto-box x2">
                        <span class="bet-type">Các số lẻ</span>
                        <span class="odds-value">2.3</span>
                    </div>
                    <div class="lotto-box x1">
                        <span class="bet-type">Hòa</span>
                        <span class="odds-value">4.3</span>
                    </div>
                    <div class="lotto-box x2">
                        <span class="bet-type">Các số chẵn</span>
                        <span class="odds-value">2.3</span>
                    </div>
                    <div class="lotto-box x1">
                        <span class="bet-type">Lẻ</span>
                        <span class="odds-value">1.95</span>
                    </div>
                    <div class="lotto-box x2">
                        <span class="bet-type">Chẵn</span>
                        <span class="odds-value">1.95</span>
                    </div>
                    <div class="lotto-box x2">
                        <span class="bet-type">Ngọc cầu</span>
                        <span class="odds-value"></span>
                    </div>
                    <div class="lotto-box x2">
                        <span class="bet-type">Trên</span>
                        <span class="odds-value">2.3</span>
                    </div>
                    <div class="lotto-box x2">
                        <span class="bet-type">Dưới</span>
                        <span class="odds-value">2.3</span>
                    </div>
                    <div class="lotto-box x1">
                        <span class="bet-type">Hòa</span>
                        <span class="odds-value">4.3</span>
                    </div>
                    <div class="lotto-box x1">
                        <span class="bet-type">Kim</span>
                        <span class="odds-value">9.2</span>
                    </div>
                    <div class="lotto-box x1">
                        <span class="bet-type">Mộc</span>
                        <span class="odds-value">4.6</span>
                    </div>
                    <div class="lotto-box x1">
                        <span class="bet-type">Thủy</span>
                        <span class="odds-value">2.4</span>
                    </div>
                    <div class="lotto-box x1">
                        <span class="bet-type">Hỏa</span>
                        <span class="odds-value">4.6</span>
                    </div>
                    <div class="lotto-box x1">
                        <span class="bet-type">Thổ</span>
                        <span class="odds-value">9.2</span>
                    </div>
                    <div class="lotto-box x1">
                        <span class="bet-type small">Tài/Lẻ</span>
                        <span class="odds-value">3.7</span>
                    </div>
                    <div class="lotto-box x1">
                        <span class="bet-type small">Tài/Chẵn</span>
                        <span class="odds-value">3.7</span>
                    </div>
                    <div class="lotto-box x1">
                        <span class="bet-type small">Xỉu/Lẻ</span>
                        <span class="odds-value">3.7</span>
                    </div>
                    <div class="lotto-box x2">
                        <span class="bet-type">Xỉu/Chẵn</span>
                        <span class="odds-value">3.7</span>
                    </div>
                </div>
                <div class="box-body chart-responsive lotto-box-result">
                    
                </div>
            </div>
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">Phòng Đà Nẵng</h3>
                </div>
                <div class="box-body chart-responsive">
                    
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    window.token = <?php echo json_encode($token);?>; 
</script>