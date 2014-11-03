function LottoController($scope,$http){
	$scope.Math = window.Math;
	$scope.token = window.token;
	$scope.rooms = [];
	$scope.lRooms = [];
	$scope.rRooms = [];
	$scope.roomsManager = [];
	$scope.onManager = null;
    $scope.dialogPointPannel = {};
	$url = 'api/room/getAllRoom?token='+$scope.token;
    $http.get($url,
            {headers:{"If-Modified-Since":"Thu,01 Jun 1970 00:00:00 GMT"}}
      ).success(function(data){
    	  $scope.rooms = data.data;
    	  $scope.rooms.forEach(function(value,index){
    		 if(index%2 != 0){
    			 $scope.rRooms.push(value);
    		 } else{
    			 $scope.lRooms.push(value);
    		 }
    		 var roomManager = new RoomManager($scope,$http,value, value.id);
	         roomManager.init();
	         $scope.roomsManager.push(roomManager);
    	  });
      }).error(function(xhr, status, error){});
    
    $scope.selectRoomManager = function(room){
    	$scope.roomsManager.forEach(function(value,index){
    		if(room.id == value.room.id){
    			$scope.onManager = value;
    		}
    	});
    	return $scope.onManager;
    }
    
    $scope.selectPoint = function(room, option, lable){
    	$scope.selectRoomManager(room);
    	$scope.onManager.showPointPannel($scope.dialogPointPannel, option,lable);
    	$("#boxPointer").show();
    }
    
    $scope.closePointDialog = function(){
    	$("#boxPointer").hide();
    };
}
LottoController.$inject = ['$scope','$http'];