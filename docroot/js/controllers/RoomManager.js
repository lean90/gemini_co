function RoomManager($scope, $http, $room, pannelId)
{
	this.pannelId = pannelId;
	this.room = $room;
	this.init = function(){
		this.mainInterval = window.setInterval(this.checker,999);
	};
	
	this.checker = function(){
		$room.turn.timeLeftInSeconds --;
		$room.clockLabel = Math.floor($room.turn.timeLeftInSeconds/60)+ ":"+Math.abs($room.turn.timeLeftInSeconds%60);
		if (!$scope.$$phase) $scope.$apply();
	};
	
	this.showPointPannel = function(dialogScope, option, optionName){
		dialogScope.roomName = this.room.roomName;
		for(var key in this.room.turn) {
			if(option == key){
				dialogScope.selectedFactor = this.room.turn[key];
			}
		}
		dialogScope.selectedName = optionName;
		dialogScope.turnNumber = this.room.turn.turnNumber;
		dialogScope.max = this.room.turn.maxValue;
		dialogScope.min = this.room.turn.minValue;
		dialogScope.current = dialogScope.input * dialogScope.selectedFactor;
		
	};
}