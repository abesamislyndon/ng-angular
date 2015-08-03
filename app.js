var app = angular.module("myapp", []);

app.controller("myController", function($scope, $http)
{

 getProject();  

  function getProject(){

      $http.post("http://localhost/angular/getProjects.php").success(function(data){
      $scope.projects = data; //the data are stored in projects

 });
}
});