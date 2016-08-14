// script.js

    // create the module and name it scotchApp
        // also include ngRoute for all our routing needs
    var scotchApp = angular.module('scotchApp', ['ngRoute']);

    // configure our routes
    scotchApp.config(function($routeProvider) {
        $routeProvider

            // route for the home page
            .when('IT_355/a2/home', {
                templateUrl : '/IT_355/a2/home.html',
                controller  : 'mainController'
            })

            // route for the about page
            .when('IT_355/a2/about', {
                templateUrl : '/IT_355/a2/about.html',
                controller  : 'mainController'
            })

    });

    // create the controller and inject Angular's $scope
    scotchApp.controller('mainController', function($scope) {
        // create a message to display in our view
        $scope.message = "Welcome to Emotions Count";
    });

    scotchApp.controller('aboutController', function($scope) {
        $scope.message = "In our ever-changing and busy world, the emotional needs of our children should be a primary focus both at home and at school."
  ."Connecting the two entities in a mission to provide balance and support for the whole child is an essential component that cannot be overlooked."
  ."Empowering students with the tools to feel emotionally safe and successful will better equip them to manage emotions and become active problem solvers in their everyday lives."
  ."In a time when state testing and Common Core State Standards are a driving force in our school system, we must ask ourselves one important question: is the emotional health & happiness of our children a top priority?"
  ."Emotions Count offers teachers, parents, and students a tool for open communication and an efficient method for collecting data to outline strategies to support the emotional needs of children of all ages."
  ."Students will complete a brief online screener with questions regarding their perceptions of emotional triggers, such as bullying on the playground, their own academic success, relationships with peers, as well as other key areas."
  ."Personal outcome scores will provide valuable insight into the children’s current emotional health and overall well-being."
  ."Furthermore, using the data collected, the program provides specific strategies to guide teachers and parents to create individualized systems of ongoing support and guidance. This cumulative effort will recognize that emotional health counts and forever plays an integral part in one's health and happiness.";
    });
