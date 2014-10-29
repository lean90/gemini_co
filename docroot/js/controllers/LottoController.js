function LottoController($scope,$http){
	$scope.token = window.token;
	$scope.rooms = [];
	$scope.lRooms = [];
	$scope.rRooms = [];
	$scope.roomsManager = [];
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
    		 var roomManager = new RoomManager($scope,$http,value);
	         roomManager.init();
    	  });
      }).error(function(xhr, status, error){
          
      });
}
LottoController.$inject = ['$scope','$http'];