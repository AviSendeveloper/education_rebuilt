if(void 0===SignUpGenius)var SignUpGenius={};(SignUpGenius={vars:{},tests:{isUsingRetina:1<window.devicePixelRatio},config:{},main:{init:function(){this.initScripts(),this.registerEvents()},initScripts:function(){SignUpGenius.videothumbs.init(),SignUpGenius.modals.init(),$("body").addClass("ready")},registerEvents:function(){$(document).on("click","a[href='#']",function(i){i.preventDefault()})},isTouchDevice:function(){return Modernizr.touch},isMobileDevice:function(){return $.browser.mobile},phones:function(){}}}).videothumbs={init:function(){},loadThumb:function(t){$.ajax({type:"GET",url:"//vimeo.com/api/v2/video/"+t+".json",jsonp:"callback",dataType:"jsonp",success:function(i){var a=i[0].thumbnail_large,n=i[0].title;$("#vimeo-"+t).append('<img src="'+a+'" title="'+n+'"/>')}})}},SignUpGenius.modals={init:function(){$(".modal-inline").magnificPopup({type:"inline",removalDelay:300,mainClass:"mfp-fade"}),$(".modal-video").magnificPopup({type:"iframe",mainClass:"mfp-fade",removalDelay:300,tLoading:""}),$(".modal-iframe").magnificPopup({type:"iframe",mainClass:"mfp-fade",removalDelay:300,tLoading:""}),$(".bio").on("click",function(){var i=$(this).data("bulb-x"),a=$(this).data("bulb-y"),n=$(this).data("image")+"-closeup-2x.jpg",t=$(this).data("name"),e=$(this).data("title"),s=$(this).find(".bio-description").html();$.magnificPopup.open({mainClass:"mfp-fade",removalDelay:300,items:{src:'<div id="dottie" class="white-popup team-bio"><div class="row"><div class="col-sm-6"><div class="lightbulb" style="right:'+i+"; top:"+a+'" ><img class="bottom" src="/img/staff-pic-thumbnails/lightbulb-2x.png"></div><div class="team-pic"><img class="bottom" src="/img/staff-pic-thumbnails/'+n+'"></div></div><div class="col-sm-6"><div class="team-name h1">'+t+'</div><div class="team-title h3">'+e+"</div><p>"+s+"</p></div></div></div>"},type:"inline"})}),$(".modal-gallery").each(function(){}),$(".gallery-item").magnificPopup({type:"image",mainClass:"mfp-fade",removalDelay:300,gallery:{enabled:!0,navigateByImgClick:!0,arrowMarkup:'<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>',tPrev:"Previous (Left arrow key)",tNext:"Next (Right arrow key)",tCounter:'<span class="mfp-counter">%curr% <span class="gamma">/</span> %total%</span>'},tLoading:'<div class="preloader"><span></span><span></span><span></span><span></span><span></span></div>'}),$(".gallery-item").on("click",function(i){i.preventDefault()}),$(".gallery-trigger").on("click",function(i){i.preventDefault(),$(".gallery-item").first().trigger("click")}),$(".close-modal").click(function(){$.magnificPopup.close()})}},$(function(){SignUpGenius.main.init(),console.log("App ready")}),$(document).ready(function(){});