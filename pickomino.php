<?php
require 'app/assets/php/core.inc.php';
require 'app/assets/php/connect.inc.php';
require 'app/assets/php/password.php';
?>
<!DOCTYPE html>
<html lang="en" ng-app="pickominoGame" class='container-game'>
<head>
	<meta charset="utf-8" />
	<title>Angular Pickomino</title>
	<link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="node_modules/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="app/assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="app/assets/css/board.css">
</head>
<body>
	<?php
		if(loggedin()){
			$firstname = getuserfield('firstname');
			$lastname = getuserfield('lastname');
			$user_id = getuserfield('id');
		}else{
			$user_id = -1;	
			$firstname = null;
		}
	?>		
	
	<div ng-controller="LoginController as loginCtrl" ng-init="loginCtrl.setUser('<?php echo $user_id ?>', '<?php echo $firstname ?>')">
	</div>
	
	<div>
		<game-header></game-header>
	
		<game-body></game-body>
	
		<common-footer></common-footer>
	</div>
	
	<!-- Vendors -->
	<script src="node_modules/jquery/dist/jquery.js"></script>
	<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
	<script src="node_modules/angular/angular.js"></script>
	<script src="node_modules/angular-touch/angular-touch.js"></script>
	<script src="node_modules/angular-animate/angular-animate.js"></script>
	<script src="node_modules/ui-bootstrap/ui-bootstrap-tpls-1.2.4.js"></script>
	
	<script src="app/app.module.js"></script>
	
	<!-- Directives -->
	<script src="app/assets/js/directives/common-header.js"></script>
	<script src="app/assets/js/directives/game-header.js"></script>
	<script src="app/assets/js/directives/game-body.js"></script>
	<script src="app/assets/js/directives/game-login.js"></script>
	<script src="app/assets/js/directives/game-registration.js"></script>
	<script src="app/assets/js/directives/game-setup.js"></script>
	<script src="app/assets/js/directives/game-board.js"></script>
	<script src="app/assets/js/directives/game-grill-worms.js"></script>
	<script src="app/assets/js/directives/game-player-options.js"></script>
	<script src="app/assets/js/directives/game-active-dice.js"></script>
	<script src="app/assets/js/directives/game-frozen-dice.js"></script>
	<script src="app/assets/js/directives/game-player-worms.js"></script>
	<script src="app/assets/js/directives/tutorial-board.js"></script>
	<script src="app/assets/js/directives/common-footer.js"></script>
	<script src="app/assets/js/directives/tooltip.js"></script>
	
	<!-- Services -->
	<script src="app/assets/js/services/set-dice-image.js"></script>
	<script src="app/assets/js/services/set-worm-image.js"></script>
	<script src="app/assets/js/services/get-worm-type.js"></script>
	<script src="app/assets/js/services/active-dice-array.js"></script>
	<script src="app/assets/js/services/frozen-dice-array.js"></script>
	<script src="app/assets/js/services/freeze-dice-action.js"></script>
	<script src="app/assets/js/services/take-worm-action.js"></script>
	<script src="app/assets/js/services/steal-worm-action.js"></script>
	<script src="app/assets/js/services/grill-worms-array.js"></script>
	<script src="app/assets/js/services/game-action.js"></script>
	<script src="app/assets/js/services/player-notification.js"></script>
	<script src="app/assets/js/services/player-worms-array.js"></script>
	<script src="app/assets/js/services/check-valid-dice-freeze.js"></script>
	<script src="app/assets/js/services/check-valid-worm-take.js"></script>
	<script src="app/assets/js/services/check-valid-worm-steal.js"></script>
	<script src="app/assets/js/services/active-dice-filter.js"></script>
	<script src="app/assets/js/services/random-dice.js"></script>
	<script src="app/assets/js/services/roll-dice.js"></script>
	<script src="app/assets/js/services/bunk-penalty.js"></script>
	<script src="app/assets/js/services/game-state.js"></script>
	<script src="app/assets/js/services/set-player-number.js"></script>
	
	<!-- Controllers -->
	<script src="app/assets/js/controllers/game-login-controller.js"></script>
	<script src="app/assets/js/controllers/game-header-controller.js"></script>
	<script src="app/assets/js/controllers/game-registration-controller.js"></script>
	<script src="app/assets/js/controllers/game-setup-controller.js"></script>
	<script src="app/assets/js/controllers/game-player-options-controller.js"></script>
	<script src="app/assets/js/controllers/game-grill-worms-controller.js"></script>
	<script src="app/assets/js/controllers/game-active-dice-controller.js"></script>
	<script src="app/assets/js/controllers/game-frozen-dice-controller.js"></script>
	<script src="app/assets/js/controllers/game-player-worms-layout-controller.js"></script>
	<script src="app/assets/js/controllers/game-player-one-worms-controller.js"></script>
	<script src="app/assets/js/controllers/game-player-two-worms-controller.js"></script>
	<script src="app/assets/js/controllers/game-body-controller.js"></script>
	<script src="app/assets/js/controllers/tutorial-action-controller.js"></script>
	<script>
		$(function() {
			$('.nav-tabs a').click(function (e) {
				e.preventDefault();
				$(this).tab('show');
			});
		});
	</script>		
	
</body>
</html>