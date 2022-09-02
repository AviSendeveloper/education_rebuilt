/**
 * Directive for chat widget
 * At the moment, the controller is based on collect money chat
 * This can be extended later on so that we can use other chat types
 **/
(function(){

    SUGApp.directive('chatWidget', function(){
        return {
            restrict: 'EA',
    		transclude: true,
            scope: {
                type 	: '@type',
                service : '@service'
            },
            templateUrl: "/view/templates/chatwidget.html",
            replace: true,
            controller: ['$scope', 'SUGUtilities', '$timeout', '$location',
    			function( $scope, SUGUtilities, timeout, loc ){
                    // variables for chat
                    $scope.displayChatModal = false;
                    $scope.chatSupportImg = '';
                    $scope.member_name = '';
                    $scope.member_email = '';
                    $scope.memberid = 0;
                    $scope.label = '';
                    $scope.chatsrc = 'https://signupgenius.desk.com/customer/widget/chats/new?q=c$p&h=' + loc.host();
                    $scope.chatid = 0;
                    $scope.hasPayments = false;
                    $scope.chatmessage = 'Need help?';
                    $scope.chatwidgetname = '';
                    $scope.chattype = $scope.type.toString().toLowerCase();
                    $scope.chatService = $scope.service.toString().toLowerCase();

                    // setup
                    switch( $scope.chattype ){
                        case 'collectpayment':
                            $scope.tag = 'Collect Payment Inquiry';
                            $scope.label = encodeURIComponent($scope.tag);
                            $scope.chatmessage = 'Have a question? Chat with a payments expert!';
                            $scope.chatwidgetname = 'Collect $ Page Chat';
                            $scope.chatsrc = 'https://signupgenius.desk.com/customer/widget/chats/new?q=c$p&ticket[labels_new]=' + $scope.label + '&h=' + loc.host();
                            break;
                        case 'pricing':
                            $scope.tag = 'Pricing Inquiry';
                            $scope.label = encodeURIComponent($scope.tag);
                            $scope.chatmessage = 'Have a question? Chat with a pricing expert!';
                            $scope.chatwidgetname = 'Pricing Page Chat';
                            $scope.chatsrc = 'https://signupgenius.desk.com/customer/widget/chats/new?q=p$p&ticket[labels_new]=' + $scope.label + '&h=' + loc.host();
                            break;
                    }

                    /* Handle Chat Determine if chat is available Show chat modal button */
                    $scope.chatNow = function(){

                        // if this is collect payment
                        if( $scope.chattype === 'collectpayment' ){
                            // check member
                            SUGUtilities.APISyncCall("post", "", {"memberonly":true}, "m.getMemberInfo", 15000)
                                .then( function(response){
                                    var r = SUGUtilities.lowerCaseKeys(response);
                                    var minfo = angular.isDefined(r.data.data) ? r.data.data : {"fullname":"","email":"","haspayments":false};
                                    $scope.member_name = angular.isDefined(minfo.fullname) ? minfo.fullname : '';
                                    $scope.member_email = angular.isDefined(minfo.email) ? minfo.email : '';
                                    $scope.hasPayments = angular.isDefined(minfo.haspayments) ? minfo.haspayments : false;
                                    if( !$scope.hasPayments )
                                        return SUGUtilities.APISyncCall("post", "", {chatwidgetname:$scope.chatwidgetname}, "t.showChatWidget", 15000);
                                })
                                .then( function(widget){
                                    if( !angular.isDefined(widget) )
                                        return false;

                                    if ( ajaxResultInvalid(widget)) {
                                        // invalid response, show error
                                        return false;
                                    }
                                    else {
                                        var r = SUGUtilities.lowerCaseKeys(widget);
                                        if( angular.isDefined(r.data.data) && r.data.data ){  // show chat option
                                            // set chat support rep image
                                            setSupportImage();
                                            // launch chat modal
                                            $scope.displayChatModal = true;
                                            // play sound
                                            playChatSound();
                                            // get chatwidgetid
                                            $scope.getChatWidgetId(); // c1
                                        }
                                    }
                                });
                        } // end if collectpayment

                        // if this is pricing
                        if( $scope.chattype === 'pricing' ){
                            // check member
                            SUGUtilities.APISyncCall("post", "", {"memberonly":true}, "m.getMemberInfo", 15000)
                                .then( function(response){
                                    var r = SUGUtilities.lowerCaseKeys(response);
                                    var minfo = angular.isDefined(r.data.data) ? r.data.data : {"fullname":"","email":""};
                                    $scope.member_name = angular.isDefined(minfo.fullname) ? minfo.fullname : '';
                                    $scope.member_email = angular.isDefined(minfo.email) ? minfo.email : '';
                                    return SUGUtilities.APISyncCall("post", "", {chatwidgetname:$scope.chatwidgetname}, "t.showChatWidget", 15000);
                                })
                                .then( function(widget){
                                    if( !angular.isDefined(widget) )
                                        return false;

                                    if ( ajaxResultInvalid(widget)) {
                                        // invalid response, show error
                                        return false;
                                    }
                                    else {
                                        var r = SUGUtilities.lowerCaseKeys(widget);
                                        if( angular.isDefined(r.data.data) && r.data.data ){  // show chat option
                                            // set chat support rep image
                                            setSupportImage();
                                            // launch chat modal
                                            $scope.displayChatModal = true;
                                            // play sound
                                            playChatSound();
                                            // get chatwidgetid
                                            $scope.getChatWidgetId(); // c1
                                        }
                                    }
                                });
                        } // end if pricing

                        // add new logic for other chat types

                    };


                    // helper method opens the chat window
                    $scope.showChatWidget = function(){

                        if( $scope.chatService === 'zendesk'){
                            if( typeof $zopim !== 'undefined' ){
                                $zopim.livechat.window.show();
                                $zopim.livechat.addTags($scope.tag);
                                $scope.displayChatModal = false;
                            }
                            else {
                                SUGUtilities.showMagnificAlert("U-oh! Looks like the chat functionality is not working at this time. Please try again later.");
                            }

                        }
                        else {
                            // concat name and email when applicable
                            if( $scope.member_email !== '' )
                                $scope.chatsrc += '&interaction[email]=' + $scope.member_email;
                            if( $scope.member_name !== '' )
                                $scope.chatsrc += '&interaction[name]=' + encodeURIComponent($scope.member_name);

                            // close the chat button
                            $scope.displayChatModal = false;

                            // open chat window
                            $.magnificPopup.open({
                                id : 'chatframeId',
                                mainClass: 'mfp-fade',
                                removalDelay: 300,
                                items: {
                                    src: $scope.chatsrc
                                },
                                type: 'iframe',
                                closeOnBgClick: false,

                                callbacks: {
                                    close: function() {
                                        $scope.displayChatModal = true;
                                    }
                                  }
                            });
                        }

                    };

                    // helper method to get the chat widget id
                    $scope.getChatWidgetId = function(){
                        SUGUtilities.APISyncCall("post", "", {chatwidgetname:$scope.chatwidgetname}, "t.getChatWidgetIdByName", 15000)
                            .then(function(response){
                            // Test for malformed response
                            if (ajaxResultInvalid(response)) {
                                // invalid response, show error
                                return false;
                            }
                            else {
                                var r = SUGUtilities.lowerCaseKeys(response);
                                // get chat ID
                                $scope.chatid = ( r.data.data ) ? r.data.data : 0;
                                $scope.chatsrc += '&cid=' + $scope.chatid;
                                $scope.recordHistory(); //c2
                            }
                        });
                    };

                    // helper method for recording history when applicable
                    $scope.recordHistory = function(){
                        // if the memberid is defined then we'll record it
                        if( $scope.memberid > 0 ){
                            var data = {
                                'memberid' : $scope.memberid,
                                'chatwidgetid' : $scope.chatid
                            };
                            SUGUtilities.APISyncCall("post", "", data, "t.recordChatHistory", 15000)
                                .then(function(response){
                                // this is non blocking requrest. we do nothing.
                            });
                        }
                    };


                    /* Close chat button Hide chat modal button*/
                    $scope.hideChatModal = function(){
                        $scope.displayChatModal = false;
                    };


                    /*
                     Get Chat Image
                     Select image of support rep randomly
                     */
                     var setSupportImage = function(){
                        var supportImages = [
                            'amanda-primary-2x.jpg',
                            'steven-primary-2x.jpg',
                            'mark-primary-2x.jpg',
                            'teresa-primary-2x.jpg',
                            'kelly-primary-2x.jpg',
                            'betsy-primary-2x.jpg',
                            'debbie-primary-2x.jpg'
                        ];
                        // assign image
                        $scope.chatSupportImg = '/images/staff-pic-thumbnails/';
                        $scope.chatSupportImg += supportImages[Math.floor((Math.random() * supportImages.length))];
                    };

                    /*
                     Play sound
                     Used when chat modal button is displayed
                     */
                     var playChatSound = function() {
                        var audio = new Audio('/assets/button-35.mp3');
                        audio.play();
                    };

                    /** helpers **/
                    var ajaxResultInvalid = function (result) {
                        return (typeof result.data === 'undefined' || !result.data.SUCCESS);
                    };


                    // delay chat
                    timeout(function(){
                        $scope.chatNow();
                    }, 3000);

    		}]
    	};
    });
}());
