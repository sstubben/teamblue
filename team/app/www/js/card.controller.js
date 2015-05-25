angular.module('starter')
	.controller('CardCtrl', function($rootScope,$scope, TDCardDelegate) {
		$scope.selectedItem = $rootScope.selectedItem;
	  $scope.cardSwipedLeft = function(index) {
	    $scope.addCard();
	  };
	  $scope.cardSwipedRight = function(index) {
	    $scope.addCard();
	  };
	  $scope.dislike = function(e){
	  	TDCardDelegate.$getByHandle('friends').getFirstCard().swipe('left'); 
	  	$scope.addCard();
      }
});