angular.module("myapp",[]).controller("zplists",function($scope,$http){
    $http.get("index.php?m=index&f=zuoping&a=addcon").then(function (e) {
        $scope.data = e.data;
    });
    $scope.show=false;
    $scope.listbtn=function(id){
        var index=getindex($scope.data,id);
        $scope.current=$scope.data[index];
        $scope.show=true;
    }
    $scope.remove=function(){
        $scope.show=false;
    }
    function getindex(arr,id){
        for(var i=0;i<arr.length;i++){
            if(arr[i].sid==id){
                return i;
            }
        }
    }
})