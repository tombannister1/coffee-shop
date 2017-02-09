/**
 * Created by tomba on 08/02/2017.
 */

app.controller('HomepageController', function($scope, $http){

    //variables
    $scope.products = null;
    $scope.product_of_the_day = null;

    //used when page loads
    $scope.init = function()
    {
        $scope.getProducts();
        $scope.getProductOfDay();
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
    $scope.getProductOfDay = function()
    {
        $http({
            'method' : 'GET',
            'url' : 'api/product-of-day'
        }).then(
            function success(response) {
                $scope.product_of_the_day = response.data;
            },
            function failed(response) {

            }
        );
    }
});