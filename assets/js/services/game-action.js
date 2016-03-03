angular.module('pickominoGame')				

.factory("GameAction", [
	'FrozenDiceArray', 
	'ActiveDiceArray', 
	'GrillWormsArray',
	'CheckValidDiceFreeze',
	'CheckValidWormTake',
	function GameActionFactory(FrozenDiceArray, ActiveDiceArray, GrillWormsArray, CheckValidDiceFreeze, CheckValidWormTake){
	
		var gameActionStatus = {
			gameSetup: true,
			roll: false,
			freezeDice: false,
			takeWorm: false,
			bunk: false,
			gameOver: false,
			numPlayers: 1,
			activePlayer: 0,
			nonActivePlayer: 1
		};
		
		return {
			status: gameActionStatus,
		
			setStatus: function(action, status){
				gameActionStatus[action] = status;		
			},
			
			checkMoveAvailable: function(){
				var canDiceFreeze = false;
				var canTakeWorm = false;
				for(var x=0; x<ActiveDiceArray.array.length; x++){
					if(CheckValidDiceFreeze.validate(ActiveDiceArray.array[x].value)){
						canDiceFreeze = true;
						ActiveDiceArray.array[x].canFreeze = true;
					}else{
						ActiveDiceArray.array[x].canFreeze = false;
					}
				}
				//canTakeWorm = CheckValidWormTake.validate(FrozenDiceArray.frozenStatus.sum);
				if(!canDiceFreeze){
					gameActionStatus.bunk=true;
				}
			},
			
			switchPlayer: function(){
				if(gameActionStatus.numPlayers>1){
					switch(gameActionStatus.activePlayer){
						case 0:
							gameActionStatus.activePlayer = 1;
							gameActionStatus.nonActivePlayer = 0;
							break;
						case 1:
							gameActionStatus.activePlayer = 0;
							gameActionStatus.nonActivePlayer = 1;
							break;
					}
				}
			}
		};
}]);		