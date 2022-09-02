(function () {

    SUGApp.config(['$routeProvider', '$compileProvider', function ($routeProvider, $compileProvider) {
        $compileProvider.aHrefSanitizationWhitelist(/^\s*(http|https|mailto|data):/);
        $routeProvider
            .when('/', {
                templateUrl: '/view/main/public-integrations.html',
                controller: 'publicIntegrationController'
            })
            .otherwise({
                redirectTo: '/'
            });
    }]);

}());

(function () {
    /* Controller */
    SUGApp.controller('publicIntegrationController', publicIntegrationController);
    publicIntegrationController.$inject = ['$scope','$filter','$location','$modal','$q','$timeout','$window','sugCacheFactory','SUGUtilities','integrationService'];
    function publicIntegrationController(   $scope, $filter, $location, $modal, $q, $timeout, $window, sugCacheFactory, SUGUtilities, integrationService ) {

		function init() {
			$scope.integrations = integrationService.getPublicIntegrations();

			var data = {
				'link':'/features',
				'clickmeterlink':'http://signupgeni.us/k8nu'
			};
			integrationService.getlink(data).then(function (response) {
                if (SUGUtilities.ajaxResultInvalid(response)) {
                    // invalid response, set the value to the basic link (without click tracking) without worrying about displaying an error message
					$scope.featurelink = data.link;
				} else {
                    // successful - set some vars later use
					var r = SUGUtilities.lowerCaseKeys(response);
					$scope.featurelink = r.data.data;
				}
			});

		}

		// This is a duplicate of the getIntegration function from the integrationController. It is included here so there is no impact on Phil's work in the Settings >integrations page.
        /**
         * Helper method to return one of the Integration object models from the data array
         * @param {string} key - REQUIRED; the integration's classname value
         */
        var getIntegration = function( key ){
            var integration = $filter('filter')($scope.integrations, {'classname':key});
            return integration.length ? integration[0] : {};
		};

		// This is a duplicate of the learnmore function from the integrationController, with a the inclusion of the target argument and code to make the href target optional.
        /**
         * Method loads data for the specified integration and
         * opens a learn more modal with additional details.
         * @param {string} key - REQUIRED; NPE integration reference key
         */
        $scope.learnmore = function( key, target ){
            var integration = getIntegration(key);
			var targetValue = target && target.length ? ' target="'+target+'"' : "";

            if( Object.keys(integration).length ){
                var learnMoreBtn = '';

                if(typeof integration.learnmorelink !== 'undefined' && integration.learnmorelink.toString().length ){
                    learnMoreBtn =  '<div align="center" style="margin-top:20px">' +
                                    '<a href=' + integration.learnmorelink + ' class="btn btn-lg btn-orange"' + targetValue +'>' + integration.learnmorebtn + '</a>' +
                                    '</div>';
                }

                $.magnificPopup.open({
                    mainClass: 'mfp-fade',
                    removalDelay: 300,
                    items: {
                        src: 	'<div id="feature" class="white-popup modal-tiny">' +
                                    '<div class="feat-pic" align="center">' +
                                    '<img class="img-responsive zoom-in" src="' + integration.modalimage + '"></div>' +
                                    '<p class="feat-desc">' + integration.fulldesc + '</p>' + learnMoreBtn +
                                '</div>'
                    },
                    type: 'inline'
                });

            }
        };


        init();

    }
}());
