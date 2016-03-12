angular.module('pickominoGame')		
	
.controller("LoginController", [
	'GameAction',
	'GameState',
	'$http',
	function(GameAction, GameState, $http){
		this.gameStatus = GameAction.status;
		
		this.setUser = function(userID){
			GameAction.setStatus('userID', userID);
			GameAction.setStatus('gameLogin', false);
		};
		
		this.register = function(){
			GameAction.setStatus('gameRegistration', true);
			GameAction.setStatus('gameLogin', false);
		};
	}
]);	