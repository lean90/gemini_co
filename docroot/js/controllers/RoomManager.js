function RoomManager($scope, $http, $room)
{
	this.init = function(){
		this.mainInterval = window.setInterval(this.checker,999);
	};
	
	this.checker = function(){
		$room.turn.timeLeftInSeconds --;
		$room.clockLabel = Math.floor($room.turn.timeLeftInSeconds/60)+ ":"+Math.abs($room.turn.timeLeftInSeconds%60);
		if (!$scope.$$phase) $scope.$apply();
	};
}