@extends('theme.components.layout')
@section('content')
<div class="inner">
    @if (session('msg_success'))
        <div class="the-alert success">
            <span class="close-btn" onclick="this.parentElement.style.display='none';">&times;</span>
            {{ session('msg_success') }}
        </div>
    @endif
    <div class="container container-1630">

        <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid highlight">
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                        <h2 style="text-align: center" class="vc_custom_heading">Highlight</h2>
                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="highlight_box">
                                            <a href="blog-detail.html" target="_blank">
                                                <div class="pic">
                                                    <img src="{{asset('image/gif-2-SKU-ver-2.jpg')}}" alt="Mr. Brown Coffee - Bao bì mới, hương vị mới" class="img-responsive">
                                                </div>
                                                <div class="text">
                                                    <h3 class="title">Mr. Brown Coffee - Bao bì mới, hương vị mới</h3>
                                                    <p class="description"></p>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="highlight_box">
                                            <a href="blog-detail.html" target="_blank">
                                                <div class="pic">
                                                    <img src="{{asset('image/40-nam-e1560742549868.jpg')}}" alt="Kỷ niệm 40 năm thành lập Tập đoàn King Car" class="img-responsive">
                                                </div>
                                                <div class="text">
                                                    <h3 class="title">Kỷ niệm 40 năm thành lập Tập đoàn King Car</h3>
                                                    <p class="description"></p>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="highlight_box">
                                            <a href="blog-detail.html" target="_blank">
                                                <div class="pic">
                                                    <img src="{{asset('image/roadshow-mrbrown-34-1-e1560743922811.jpg')}}" alt="Roadshow nhãn hàng Cà phê lon Mr. Brown" class="img-responsive">
                                                </div>
                                                <div class="text">
                                                    <h3 class="title">Roadshow nhãn hàng Cà phê lon Mr. Brown</h3>
                                                    <p class="description"></p>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="highlight_box">
                                            <a href="#" target="_blank">
                                                <div class="pic">
                                                    <img src="{{asset('image/tang-binh-nuoc-20.jpg')}}" alt="Mr.Brown khuyến mãi chào mừng Phụ Nữ Việt Nam 20/10" class="img-responsive">
                                                </div>
                                                <div class="text">
                                                    <h3 class="title">Mr.Brown khuyến mãi chào mừng Phụ Nữ Việt Nam 20/10</h3>
                                                    <p class="description"></p>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="highlight_box">
                                            <a href="#" target="_blank">
                                                <div class="pic">
                                                    <img src="{{asset('image/quay-thuong-circlek-2.jpg')}}" alt="Chương trình trúng thưởng ``Rung cây cà phê - Rinh ngay quà xinh``" class="img-responsive">
                                                </div>
                                                <div class="text">
                                                    <h3 class="title">Chương trình trúng thưởng ``Rung cây cà phê - Rinh ngay quà xinh``</h3>
                                                    <p class="description"></p>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="highlight_box">
                                            <a href="#" target="_blank">
                                                <div class="pic">
                                                    <img src="{{asset('image/launching-mrbrown-cafe-e1560750651107.jpg')}}" alt="Sự kiện ra mắt cà phê viên nén cao cấp – Mr.Brown Café" class="img-responsive">
                                                </div>
                                                <div class="text">
                                                    <h3 class="title">Sự kiện ra mắt cà phê viên nén cao cấp – Mr.Brown Café</h3>
                                                    <p class="description"></p>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper"></div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="vc_row-full-width vc_clearfix"></div>
        <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid">
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                        <h2 style="text-align: center" class="vc_custom_heading">FOLLOW US ON FACEBOOK</h2>
                        <div class="follow">
                            <ul class="follow-list reset" data-plugin="masonry-follow">
                                <li data-plugin="masonry-follow-item">
                                    <a href="https://www.facebook.com/MrBrownVietnam/videos/294755208141810/" target="_blank" title="">
                                        <img class="img-responsive" src="image/blank.png" data-src="{{asset('image/gif-2-SKU-ver-2.jpg')}}" class="img-pc" data-masonry-lazy />
                                    </a>
                                </li>
                                <li data-plugin="masonry-follow-item">
                                    <a href="https://www.facebook.com/MrBrownVietnam/photos/a.642260939292378/1096280547223746/?type=3&theater" target="_blank" title="">
                                        <img class="img-responsive" src="image/blank.png" data-src="{{asset('image/30.04.jpg')}}" class="img-pc" data-masonry-lazy />
                                    </a>
                                </li>
                                <li data-plugin="masonry-follow-item">
                                    <a href="https://www.facebook.com/MrBrownVietnam/videos/988063241400838/" target="_blank" title="">
                                        <img class="img-responsive" src="image/blank.png" data-src="{{asset('image/gif-3.png')}}" class="img-pc" data-masonry-lazy />
                                    </a>
                                </li>
                                <li data-plugin="masonry-follow-item">
                                    <a href="https://www.facebook.com/MrBrownVietnam/photos/a.642260939292378/1068808589970942/?type=3&eid=ARANk3e1PpZoAk8BBwrvgZQv3Fe_AqHgQl5a816HAFWfpgxfIYDpl50pZbzf1SsoUtEVconoqAlEjvxJ&__xts__%5B0%5D=68.ARCeLM3iSjDuoOttUVI9UuGBZvPG7TJZBV3zsbrzcCTYsMJZoQ9pCYQ2Kod4XNkC6hR4ev730dOo-6NB9DtSfZKhpiaK_ekboZELBtSYELS2OLezMEPjG-YAzLXF80GLnSqcp5SokYUDvDQSRm3Y2U-TODbZpJL8RUkwVvPq144pw8mwPOWzyvnl7Mb0KwqfnQeBKfNNDAI9zr_G1EpkU2lvaATEJfhe87HJqJXVrEUhJgzyNRotVT-53guJabsOeVuv3nR_xt4pVY-IvHoLoMfpqTFNg-bPcnqkmLl4pExIAOX5TuwXZxbPvtEG5fdvjfYOBFiZDWJ4F5o5y1mUlzdESA&__tn__=EEHH-R"
                                       target="_blank" title="">
                                        <img class="img-responsive" src="image/blank.png" data-src="{{asset('image/take-photo-HW.jpg')}}" class="img-pc" data-masonry-lazy />
                                    </a>
                                </li>
                                <li data-plugin="masonry-follow-item">
                                    <a href="https://www.facebook.com/MrBrownVietnam/photos/a.642260939292378/1060124367506031/?type=3&eid=ARBgBJp-7qMZG2oZiD7NzBad0OjCp1gXfKWBH9724TwQBFCiP1Qd1pjBlWWcmj-HBySnwXnUVrdvIA7m&__xts__%5B0%5D=68.ARAiIpcs43QG-tqVP6IxYSKpdlzZHr31kcrAbi6_MvKxOONOzGsx_1Tb4btBqlSrChv1DsfkIpNdODy8rvWI9LA-3_1T3VPmkjXrP2c5OEAEzP0OBGgBlZOHZ17N0U0KcSwpHQZJZxFiMh-_zyrlcuiALuP--vSaUGKi-nZcXUBEI9d1lqsMK5UcNbQd6r2De1hbRx4gdB3rYSXVcTDIfwu7jOFfSgk9DYNgpcZeBXUoliW7oiIcuReLnK0PbmvlX5kh83yIsEp2KihPO5LVzQuvfqLmO_PoEsyWSSrrtdkA_mJEEGyx54j7m0IdkRKQ0zIqbW5dSoPT_XsikauPNrgIEg&__tn__=EHH-R"
                                       target="_blank" title="">
                                        <img class="img-responsive" src="image/blank.png" data-src="{{asset('image/op-lung-dt-FB.jpg')}}" class="img-pc" data-masonry-lazy />
                                    </a>
                                </li>
                                <li data-plugin="masonry-follow-item">
                                    <a href="https://www.facebook.com/MrBrownVietnam/photos/a.642260939292378/966707190181083/?type=3&theater" target="_blank" title="">
                                        <img class="img-responsive" src="image/blank.png" data-src="{{asset('image/trick-or-treat.jpg')}}" class="img-pc" data-masonry-lazy />
                                    </a>
                                </li>
                                <li data-plugin="masonry-follow-item">
                                    <a href="https://www.facebook.com/MrBrownVietnam/photos/a.642260939292378/941980289320440/?type=3&theater" target="_blank" title="">
                                        <img class="img-responsive" src="image/blank.png" data-src="{{asset('image/trung-thu.jpg')}}" class="img-pc" data-masonry-lazy />
                                    </a>
                                </li>
                                <li data-plugin="masonry-follow-item">
                                    <a href="https://www.facebook.com/MrBrownVietnam/photos/a.642260939292378/878165435701926/?type=3&theater" target="_blank" title="">
                                        <img class="img-responsive" src="image/blank.png" data-src="{{asset('image/Hello-weekend.jpg')}}" class="img-pc" data-masonry-lazy />
                                    </a>
                                </li>
                                <li data-plugin="masonry-follow-item">
                                    <a href="instagram.com/oanhuntranic"
                                       target="_blank" title="">
                                        <img class="img-responsive" src="image/blank.png" data-src="{{asset('image/14.02.jpg')}}" class="img-pc" data-masonry-lazy />
                                    </a>
                                </li>
                                <li data-plugin="masonry-follow-item">
                                    <a href="https://www.facebook.com/oanhuntranic"
                                       target="_blank" title="">
                                        <img class="img-responsive" src="image/blank.png" data-src="{{asset('image/check-in-noel.jpg')}}" class="img-pc" data-masonry-lazy />
                                    </a>
                                </li>
                                <li data-plugin="masonry-follow-item">
                                    <a href="#" target="_blank" title="">
                                        <img class="img-responsive" src="image/blank.png" data-src="{{asset('image/mr.-brown.jpg')}}" class="img-pc" data-masonry-lazy />
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="vc_row-full-width vc_clearfix"></div>

    </div>
    <style type="text/css">
        #index .inner .bg-r {
            background: url({{asset('image/index_highlight_beans_r.png')}}) no-repeat;
            width: 150px;
            height: 240px;
            top: 11%;
        }
    </style>
    <style type="text/css">
        #index .inner .bg-l {
            background: url({{asset('image/index_highlight_beans_l.png')}}) no-repeat;
            width: 300px;
            height: 320px;
            top: 50%;
        }
    </style>
    <div class="bg-r" data-plugin="parallax-move"></div>
    <div class="bg-l" data-plugin="parallax-move"></div>
</div>
@endsection
