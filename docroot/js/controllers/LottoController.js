function LottoController($scope,$http){
	$scope.token = window.token;
	$scope.rooms = [];
	$scope.lRooms = [];
	$scope.rRooms = [];
	
	$url = 'api/room/getAllRoom?token='+$scope.token;
    $http.get($url,
            {headers:{"If-Modified-Since":"Thu,01 Jun 1970 00:00:00 GMT"}}
      ).success(function(data){
    	  $scope.rooms = data.data;
    	  $scope.rooms.forEach(function(value,index){
    		 if(index%2 != 0){
    			 $scope.lRooms.push(value);
    		 } else{
    			 $scope.rRooms.push(value);
    		 }
    	  });
    	  $scope.InitaRoomManager();
      }).error(function(xhr, status, error){
          
      });
    
    $scope.InitaRoomManager = function(){
    	
    };
}
LottoController.$inject = ['$scope','$http'];