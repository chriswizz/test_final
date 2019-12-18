$(document).ready(function() {


    var userFeed = new Instafeed({
        get: 'user',
        userId: '5814639502',
        limit: 12,
        resolution: 'standard_resolution',
        accessToken: '5814639502.1677ed0.f24df5860c03484faabd61d16111cb0a',
        sortBy: 'most-recent',
        template: '<div class="col-lg-3 instaimg content"><a href="{{image}}" title="{{caption}}" target="_blank"><div class="content-overlay"></div><img src="{{image}}" alt="{{caption}}" class="img-fluid content-image rounded"/><div class="content-details fadeIn-bottom"><p class="content-text">{{caption}}</p></div></a></div>',
    });


    userFeed.run();

    
    // This will create a single gallery from all elements that have class "gallery-item"
    $('.gallery').magnificPopup({
        type: 'image',
        delegate: 'a',
        gallery: {
        enabled: true
        }
    });

});
