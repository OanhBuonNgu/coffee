jQuery(document).ready(function(){
	var banner=jQuery('[data-plugin="banner"]');
	var masonryHighlight=jQuery('[data-plugin="masonry-highlight"]');
	var masonryHighlightLazy=jQuery('[data-plugin="masonry-highlight"] [data-masonry-lazy]');
	var masonryFollow=jQuery('[data-plugin="masonry-follow"]');
	var masonryFollowLazy=jQuery('[data-plugin="masonry-follow"] [data-masonry-lazy]');
	var followPopup=jQuery('[data-plugin="follow-popup"]');
	var parallaxMove=jQuery('[data-plugin="parallax-move"]');
	jQuery(window).on('scroll resize',function()
		{
		var sctop=jQuery(window).scrollTop();
		var parallaxTop=sctop*0.25+'px';
		parallaxMove.css(
			{
			'transform':'translateY('+parallaxTop+')','-moz-transform':'translateY('+parallaxTop+')','-webkit-transform':'translateY('+parallaxTop+')'
		}
		)
	}
	).trigger('scroll');
	banner.slick(
		{
		fade:true,autoplay:true,autoplaySpeed:6000,speed:2000,pauseOnHover:false,pauseOnFocus:false
	}
	);
	if(jQuery('body').hasClass('pc'))
		{
		jQuery(window).on('scroll',function()
			{
			var sctop=jQuery(window).scrollTop();
			var bannerTop=0-sctop/3;
			banner.css('top',bannerTop)
		}
		).trigger('scroll')
	}
	masonryHighlightLazy.Lazy(
		{
		effect:'fadeIn',effectTime:500,afterLoad:function(element)
			{
			jQuery(element).attr('data-loaded',true)
		}
	}
	);
	masonryFollow.masonry(
		{
		itemSelect:'[data-plugin="masonry-follow-item"]',columnWidth:'[data-plugin="masonry-follow-item"]',gutter:0,transitionDuration:0
	}
	);
	masonryFollowLazy.Lazy(
		{
		effect:'fadeIn',effectTime:500,afterLoad:function(element)
			{
			jQuery(element).attr('data-loaded',true);
			setTimeout(function()
				{
				masonryFollow.masonry('layout')
			}
			,10)
		}
	}
	);
	var followCount=jQuery('.follow-list li').length;
	// followPopup.magnificPopup(
	// 	{
	// 	type:'ajax',removalDelay:300,mainClass:'mfp-fade',closeOnBgClick:false,callbacks:
	// 		{
	// 		open:function()
	// 			{
	// 			jQuery(this.container).addClass('index-follow-popup')
	// 		}
	// 		,ajaxContentAdded:function()
	// 			{
	// 			console.log(this);
	// 			var current=this.index;
	// 			if(current>0)jQuery(this.container).find('.mfp-content .wrap').append('<a href="javascript:void(0);
	// 			" title="上一則動態" data-follow-index="'+(current-1)+'" class="jump-prev"><span class="sr-only">上一則動態</span></a>');
	// 			if(current<followCount-1)jQuery(this.container).find('.mfp-content .wrap').append('<a href="javascript:void(0);
	// 			" title="下一則動態" data-follow-index="'+(current+1)+'" class="jump-next"><span class="sr-only">下一則動態</span></a>')
	// 		}
	// 	}
	// }
	// );
	jQuery(document).on('click','.index-follow-popup .jump-prev, .index-follow-popup .jump-next',function(event)
		{
		var followId=jQuery(this).data('follow-index');
		jQuery('.follow-list li:eq('+followId+') > a').trigger('click')
	}
	)
});

// jQuery('.follow-list').masonry({
// 	columnWidth: 80,
// 	itemSelector: '.grid-item',
// 	fitWidth: true,
// });

jQuery(function()
	{
	
}
);

jQuery(function()
	{
	var parallaxMove=jQuery('[data-plugin="parallax-move"]');
	var parallaxOpacity=jQuery('[data-plugin="parallax-opacity"]');
	var scrollView=jQuery('[data-plugin="scroll-view"]');
	scrollView.scrollView(
		{
		threshold:-100
	}
	);
	jQuery(window).on('scroll resize',function()
		{
		var sctop=jQuery(window).scrollTop();
		var parallaxTop=sctop*0.25+'px';
		parallaxMove.css(
			{
			'transform':'translateY('+parallaxTop+')','-moz-transform':'translateY('+parallaxTop+')','-webkit-transform':'translateY('+parallaxTop+')'
		}
		)
	}
	).trigger('scroll')
}
);

jQuery(function()
	{
	var item=jQuery('.mp_timeline .list .item');
	item.scrollView(
		{
			threshold:-100
		}
	);

}
);
jQuery(document).ready(function() {
    jQuery('a[href*="#"]:not(a[data-vc-tabs])').on('click', function(e){
    	var header_height = jQuery('.header').height();
    	var current_url  = window.location.href;
    	n = current_url.indexOf("#");
    	if(n!=-1){
    		current_url = current_url.substring(n,-1);
    	}
    	
    	var url = jQuery(this).attr('href');
    	m = url.indexOf("#");
    	if(m != -1){
    		url = url.substring(m,-1);
    	}
    	
    	console.log(n);
    	console.log(m);
    	console.log(current_url);
    	console.log(url);
    	if(url==current_url){
    		e.preventDefault();
	        jQuery('html, body').animate({
	            scrollTop : jQuery(this.hash).offset().top - header_height
	        }, 500);
    	}
        
    });
});
jQuery(document).ready(function() {
    if (window.location.hash) {
        var hash = window.location.hash;
        var header_height = jQuery('.header').height();
        jQuery('html, body').animate({
            scrollTop :  jQuery(hash).offset().top - header_height
        }, 500);
    };
});