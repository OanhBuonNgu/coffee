$(function() {

  var win = $(window), body = $('body');

  // Mobile Detect
  var md = new MobileDetect(window.navigator.userAgent);
  if (md.mobile()) body.addClass('mb');
  else body.addClass('pc');

  // Definitions
  var lazyElem = $('[data-lazy]');
  var responsiveImg = $('[data-responsive-image]');
  var header = $('.header');
  var navSwitch = header.find('.nav-switch');
  var navMenu = header.find('.nav-menu');
  var navMain = header.find('.menu-main > li > a');
  var navMainSub = header.find('.menu-main > li > .sub-menu > li > a');
  var goTop = $('.go-top');
  var pageBanner = $('.p-banner');
  var pager = $('[data-plugin="pager"]');

  // Plugin: Lazyload
  if (lazyElem.length > 0) {
    lazyElem.Lazy({
      effect: 'fadeIn',
      effectTime: 500,
      afterLoad: function(element) {
        $(element).attr('data-loaded', true);
      }
    });
  }

  // Plugin: Responsive Images
  if (responsiveImg.length > 0) {
    $('head').append('<style type="text/css" id="responsive-image-style"></style>');
    responsiveImg.each(function(i,element) {
      var elem = $(element);
      var addClassName = 'responsive-image-'+i;
      var image = elem.data('responsive-image');
      var appendRule = '';
      if (elem.data('responsive-display-max') != null && elem.data('responsive-display-max') != "" && elem.data('responsive-display-max') != "undefined") {
        var mediaQueryMax = elem.data('responsive-display-max');
        if (elem.data('responsive-display-min') != null && elem.data('responsive-display-min') != "" && elem.data('responsive-display-min') != "undefined") {
          var mediaQueryMin = elem.data('responsive-display-min');
          appendRule+= '@media (max-width: '+mediaQueryMax+'px) and (min-width: '+mediaQueryMin+'px) { .'+addClassName+' { background-image: url('+image+'); } }';
        } else {
          appendRule+= '@media (max-width: '+mediaQueryMax+'px) { .'+addClassName+' { background-image: url('+image+'); } }';
          appendRule+= '@media (min-width: '+(mediaQueryMax+1)+'px) { .'+addClassName+' { display: none; } }';
        }
      } else if (elem.data('responsive-display-min') != null && elem.data('responsive-display-min') != "" && elem.data('responsive-display-min') != "undefined") {
        var mediaQueryMin = elem.data('responsive-display-min');
        appendRule+= '@media (min-width: '+mediaQueryMin+'px) { .'+addClassName+' { background-image: url('+image+'); } }';
        appendRule+= '@media (max-width: '+(mediaQueryMin-1)+'px) { .'+addClassName+' { display: none; } }';
      }
      if (elem.data('responsive-display-ratio') != null && elem.data('responsive-display-ratio') != "" && elem.data('responsive-display-ratio') != "undefined") {
        var pb = 1/parseFloat(elem.data('responsive-display-ratio')) * 100 + '%';
        appendRule+= '.'+addClassName+' { height: 0; padding-bottom: '+pb+'; background-size: cover;}';
      } else if (elem.data('responsive-display-height') != null && elem.data('responsive-display-height') != "" && elem.data('responsive-display-height') != "undefined") {
        appendRule+= '.'+addClassName+' { height: '+elem.data('responsive-display-height')+'; background-position: center;}';
      }
      elem.addClass(addClassName);
      $('#responsive-image-style').append(appendRule);
    });
  }

  // Header
  if ($('[data-header-scrollview-start]').length > 0) {
    header.scrollView({
      start: $('[data-header-scrollview-start]').outerHeight(),
      threshold: 0,
      repeat: true
    });
  } else {
    header.scrollView({
      start: 100,
      threshold: 0,
      repeat: true
    });
  }

  // Nav switch
  navSwitch.on('click', function() {
    if (!header.hasClass('on-nav')) {
      body.append('<div class="nav-cover" style="position: fixed; z-index: 50; width: 100%; height: 0; background: rgba(0,0,0,.5); left: 0; bottom: 0; opacity: 0;"></div>');
      $('.nav-cover').stop().animate({
        'opacity': 1,
        'height': '100%'
      }, 500);
      header.addClass('on-nav');
      // header.addClass('on-nav').stop().animate({'left': '-200px'}, 500);
    } else {
      $('.nav-cover').stop().animate({
        'opacity': 0,
        'height': '0'
      }, 500, function() {
        $('.nav-cover').remove();
      });
      header.removeClass('on-nav');
      // header.removeClass('on-nav').stop().animate({'left': 0}, 500);
    }
  });

  // Nav main menu
  navMain.on('click', function(event) {
    var li = $(this).parent('li');
    if (navSwitch.is(':visible') && li.find('.sub-menu').length > 0) {
      event.preventDefault();
      if (!li.hasClass('open')) {
        navMenu.find('.menu-main > li').removeClass('open');
        li.addClass('open');
      } else {
        li.removeClass('open');
      }
    }
  });

  // Nav main menu
  navMainSub.on('click', function(event) {
    var li = $(this).parent('li');
    if (navSwitch.is(':visible') && li.find('.sub-menu').length > 0) {
      event.preventDefault();
      if (!li.hasClass('open')) {
        navMenu.find('.menu-main > li > .sub-menu > li').removeClass('open');
        li.addClass('open');
      } else {
        li.removeClass('open');
      }
    }
  });

  // Go top
  goTop.scrollView({
    start: 100,
    threshold: 0,
    repeat: true
  });
  goTop.on('click', function() {
    $('html, body').stop().animate({scrollTop: 0}, 800);
  });

  // Page banner
  if (pageBanner.length > 0) {
    if ($('body').hasClass('pc')) {
      win.on('scroll', function() {
        var sctop = win.scrollTop();
        var bannerTop = 0 - sctop/3;
        pageBanner.find('.pic').css('top', bannerTop);
      }).trigger('scroll');
    }
  }

  // Plugin: Pager
  if (pager.length > 0) {
    pager.pager();
  }

  // Scroll over all banner
  if ($('[data-scroll-over-banner]').length > 0) {
    if (body.hasClass('pc')) {
      $('[data-header-scrollview-start]').on('mousewheel', function(event) {
        var sctop = win.scrollTop();
        if (event.deltaY < 0 && sctop < win.height()) {
          event.preventDefault();
          $('html, body').stop().animate({scrollTop: win.height() - header.outerHeight()}, 800);
        }
      });
    }
  }

});

// Pager
$.fn.pager = function(options) {
  var $selector = $(this);
  var defaults = {
    responsive: [
      {
        breakpoint: 768,
        showNum: 5
      },
      {
        breakpoint: 480,
        showNum: 3
      },
      {
        breakpoint: 1,
        showNum: 1
      }
    ]
  };
  var settings = $.extend({}, defaults, options);

  $selector.each(function(i,element) {
    var $this = $(element);
    var current = parseInt($this.data('current-page'));
    var total = parseInt($this.data('total-page'));
    var url = $this.data('url');
		var pageKey = $this.data('page-key');

		var parameter =  ($this.data('pass-parameter')!= null && $this.data('pass-parameter') != "" && $this.data('pass-parameter') != "undefined")
									? $this.data('pass-parameter')
									: '';

		$this.addClass('p-pager').attr('data-bp','');
    $(window).on('resize', function() {
      var vw = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
      var nowBp = parseInt($this.attr('data-bp'));
      for (var j=0; j<settings.responsive.length; j++) {
        if (vw >= settings.responsive[j].breakpoint) {
          var showNums = (settings.responsive[j].showNum<1) ? 1 : (Math.floor(settings.responsive[j].showNum));
          var bp = j;
          break;
        }
      }
      if (bp != nowBp) {
        $this.empty();
        var appendHtml = '';
        if (current == 1) {
          appendHtml+= '<a href="javascript:void(0);" title="上一頁" class="prev disabled"><span class="sr-only">上一頁</span></a>';
        } else {
          var prevPage = current-1;
          appendHtml+= '<a href="'+url+'?'+parameter+'&'+pageKey+'='+prevPage+'" title="上一頁" class="prev"><span class="sr-only">上一頁</span></a>';
        }
        // 如果總頁數<=顯示頁數: 全顯示
        // 如果目前頁數在前showNum一半內
        if (total <= showNums || current <= Math.floor(showNums/2)) {
          if (total <= showNums) showNums = total;
          for (var k=1; k<(showNums+1); k++) {
            var dk = k;
            if (k == current) {
              appendHtml+= '<a href="'+url+'?'+parameter+'&'+pageKey+'='+k+'" title="第'+dk+'頁" class="num current">'+dk+'</a>';
            } else {
              appendHtml+= '<a href="'+url+'?'+parameter+'&'+pageKey+'='+k+'" title="第'+dk+'頁" class="num">'+dk+'</a>';
            }
          }
        }
        // 如果目前頁數在後showNums一半內
        else if (current >= total-Math.floor(showNums/2)) {
          for (var k=(total-showNums+1); k<(total+1); k++) {
            var dk = k;
            if (k == current) {
              appendHtml+= '<a href="'+url+'?'+parameter+'&'+pageKey+'='+k+'" title="第'+dk+'頁" class="num current">'+dk+'</a>';
            } else {
              appendHtml+= '<a href="'+url+'?'+parameter+'&'+pageKey+'='+k+'" title="第'+dk+'頁" class="num">'+dk+'</a>';
            }
          }
        }
        // 其他
        else {
          var prevDiff = Math.floor((showNums-1)/2);
          var nextDiff = Math.ceil((showNums-1)/2);
          for (var k=(current-prevDiff); k<(current+nextDiff+1); k++) {
            var dk = k;
            if (k == current) {
              appendHtml+= '<a href="'+url+'?'+parameter+'&'+pageKey+'='+k+'" title="第'+dk+'頁" class="num current">'+dk+'</a>';
            } else {
              appendHtml+= '<a href="'+url+'?'+parameter+'&'+pageKey+'='+k+'" title="第'+dk+'頁" class="num">'+dk+'</a>';
            }
          }
        }
        if (current == total) {
          appendHtml+= '<a href="javascript:void(0);" title="下一頁" class="next disabled"><span class="sr-only">下一頁</span></a>';
        } else {
          var nextPage = current+1;
          appendHtml+= '<a href="'+url+'?'+parameter+'&'+pageKey+'='+nextPage+'" title="下一頁" class="next"><span class="sr-only">下一頁</span></a>';
        }
        $this.append(appendHtml).attr('data-bp', bp);
      }
    }).trigger('resize');
  });
};