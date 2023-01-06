<!DOCTYPE html>
<html lang="vi" class="no-js no-svg">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="shortcut icon" href="{{asset('image/favicon.ico')}}" type="image/x-icon" />
    <title>Mr. Brown &#8211; Chất bạn cần, Gu bạn thích</title>
    <meta name='robots' content='noindex,follow' />
    <link rel='dns-prefetch' href='//s.w.org' />
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='wp-block-library-css' href={{asset('css/style.min.css?ver=5.1.14')}} type='text/css' media='all' />
    <link rel='stylesheet' id='contact-form-7-css' href={{asset('css/styles.css?ver=5.1.3')}} type='text/css' media='all' />
    <link rel='stylesheet' id='core-css' href={{asset('css/core.css?ver=1.0')}} type='text/css' media='all' />
    <link rel='stylesheet' id='plugin-slick-css' href={{asset('css/plugin-slick.min.css?ver=1.0')}} type='text/css' media='all' />
    <link rel='stylesheet' id='tn_style-css' href={{asset('css/style.css?ver=1.0')}} type='text/css' media='all' />
    <link rel='stylesheet' id='js_composer_front-css' href={{asset('css/js_composer.min.css?ver=5.7')}} type='text/css' media='all' />
    <script type='text/javascript' src={{asset('js/jquery-2.2.4.min.js?ver=2.2.4')}}></script>
    <link rel='shortlink' href='http://dev1.mypagevn.com/mrbrown/' />
    <link rel="alternate" type="application/json+oembed" href="http://dev1.mypagevn.com/mrbrown/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fdev1.mypagevn.com%2Fmrbrown%2F" />
    <link rel="alternate" type="text/xml+oembed" href="http://dev1.mypagevn.com/mrbrown/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fdev1.mypagevn.com%2Fmrbrown%2F&#038;format=xml" />
    <style type="text/css" data-type="vc_custom-css">
        #index .inner .bg-r {
            z-index: 4;
        }
    </style>
</head>

<body data-name="index" class="home page-template-default page page-id-10 wpb-js-composer js-comp-ver-5.7 vc_responsive">

    {{--Header viết ở đây--}}
    @include('theme.components.header')
    {{--Đóng header--}}
    {{--Banner viết ở đây--}}

    @include('theme.components.banner')
    {{-- Đóng Banner --}}

    {{--Conten viết ở đây--}}
    @yield('content')
    {{-- Hết content --}}

    {{--footer viết ở đây--}}
    @include('theme.components.footer')
    <!-- #colophon -->
   <a href="javascript:void(0);" title="Back to top of page" class="go-top" data-scroll-view="init">TOP</a>
    <script type='text/javascript'>

        var wpcf7 = {
            "apiSettings": {
                "root": "http:\/\/dev1.mypagevn.com\/mrbrown\/wp-json\/contact-form-7\/v1",
                "namespace": "contact-form-7\/v1"
            }
        };
    </script>
    <script type='text/javascript' src={{asset('js/scripts.js?ver=5.1.3')}}></script>
    <script type='text/javascript' src={{asset('js/mobiledetect-1.4.1.min.js?ver=1.4.1')}}></script>
    <script type='text/javascript' src={{asset('js/jquery.lazy-1.7.6.min.js?ver=1.9.0')}}></script>
    <script type='text/javascript' src={{asset('js/jquery.easing-1.4.1.min.js?ver=1.9.0')}}></script>
    <script type='text/javascript' src={{asset('js/jquery.scrollview-1.5.min.js?ver=1.5')}}></script>
    <script type='text/javascript' src={{asset('js/bootstrap-3.3.7.min.js?ver=3.3.7')}}></script>
    <script type='text/javascript' src={{asset('js/jquery.mousewheel-3.1.13.min.js?ver=3.3.7')}}></script>
    <script type='text/javascript' src={{asset('js/jquery.slick-1.9.0.min.js?ver=1.9.0')}}></script>
    <script type='text/javascript' src={{asset('js/imagesloaded.min.js?ver=3.2.0')}}></script>
    <script type='text/javascript' src={{asset('js/masonry.min.js?ver=3.3.2')}}></script>
    <script type='text/javascript' src={{asset('js/jquery.masonry.min.js?ver=3.1.2b')}}></script>
    <script type='text/javascript' src={{asset('js/common.js?ver=1.0')}}></script>
    <script type='text/javascript' src={{asset('js/scripts1.js?ver=1.0')}}></script>
    <script type='text/javascript' src={{asset('js/wp-embed.min.js?ver=5.1.14')}}></script>
    <script type='text/javascript' src={{asset('js/js_composer_front.min.js?ver=5.7')}}></script>

</body>

</html>
