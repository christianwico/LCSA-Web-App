var app = angular.module('dashboardApp', []);

app.controller('pageController', function($scope) {
    this.site = {
        id: 0,
        title: "INDEX"
    };

    $scope.pageTitle = this.site.title;
});