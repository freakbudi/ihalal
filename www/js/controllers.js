angular.module('starter.controllers', [])


.controller('scanCtrl',function($scope){

})

// Dashboard Control------------------------------------------------------------
.controller('DashCtrl', function($scope,$http, timelineService) {
  $scope.baseImageUrl='http://localhost/a/server_side/gambar_content/'
  $scope.showData = function() {
    timelineService.getAll().success(function(data) {
          $scope.timelineData = data;
      }).finally(function() {
          $scope.$broadcast('scroll.refreshComplete');
      });
  };
  $scope.showData();

  $scope.reload = function (){
      $state.go('tab.timeline');
  };

  $scope.delete = function (datateman){
      temanService.delete(datateman.id);
      $scope.datatemans.splice($scope.datatemans.indexOf(datateman),1);
  };
})

// Timeline Control-------------------------------------------------------------
.controller('timelineCtrl',function($scope, $http, timelineService,$rootScope) {
  $rootScope.baseImageUrl='http://localhost/a/server_side/';
  $scope.showData = function() {
    timelineService.getAll().success(function(data) {
          $scope.timelineData = data;
      }).finally(function() {
          $scope.$broadcast('scroll.refreshComplete');
      });
  };
  $scope.showData();

  $scope.reload = function (){
      $state.go('tab.timeline');
  };

  $scope.delete = function (datateman){
      temanService.delete(datateman.id);
      $scope.datatemans.splice($scope.datatemans.indexOf(datateman),1);
  };
})

// Timeline Detail--------------------------------------------------------------
.controller('timelineDetailCtrl',function($scope,$stateParams,$http,timelineService,$rootScope,$state){

  $scope.showDataId = function() {
    timelineService.getId($stateParams.id_content).success(function(detailTimelines) {
          $scope.detailTimelines = detailTimelines;
          console.log($scope.detailTimelines);
      });

  };
  $scope.showDataId();

  $scope.back = function (){
      $state.go('tab.timeline');
  };

})

// Post Control-----------------------------------------------------------------
.controller('postinganCtrl',function($scope,$stateParams,$ionicPopup,$ionicModal,$state,timelineService){
  $scope.backposting = function (){
      $state.go('tab.timeline');
  };
})

// .controller('timelineCtrl', function($scope, $ionicModal) {
//   console.log('timelineCtrl');
//   $ionicModal.fromTemplateUrl('templates/Post.html', {
//       scope: $scope,
//       animation: 'slide-in-up'
//     }).then(function(modal) {
//       $scope.modal = modal;
//     });
//   $scope.openModal = function(){
//     $scope.modal.show();
//   }
//   $scope.closeModal = function(){
//     $scope.modal.hide();
//   }
// });

.controller('AccountCtrl', function($scope) {
  $scope.settings = {
    enableFriends: true
  };
});
