/**
 * Created by tomba on 08/02/2017.
 */

app.controller('HomepageController', function($scope, $http){

    //variables
    $scope.products = null;

    //used when page loads
    $scope.init = function()
    {
        $scope.getProducts();
    }

    //get the products.
    $scope.getProducts = function()
    {
        $http({
            'method' : 'GET',
            'url' : 'api/products'
        }).then(
            function success(response) {
                $scope.products = response.data;
            },
            function failed(response) {

            }
        );
    }
});