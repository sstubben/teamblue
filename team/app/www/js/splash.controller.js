angular.module('starter')
	.controller('SplashCtrl', function($rootScope,$scope, $timeout, $state) {
		$timeout(function(){
			$state.go("home"); 
		}, 3500); 
});