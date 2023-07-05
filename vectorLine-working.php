     <style>
/*font-family: 'Roboto', sans-serif;*/
/* Caption */
.top_slider .slide1 {
    height:100%;
    background-image:url(../images/slider/slide1_bg.jpg);
    background-size:cover;
    background-attachment:fixed !important;
}
dasdfasdfsad
.top_slider .slide1 .flex_caption1 {
    position:absolute;
    z-index:30;
    left:50%;
    top:45%;
    width:100%;
    margin-left:-585px;
    color:#333;
    transform: translateY(-50%);
    -o-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -webkit-transform: translateY(-50%);
}
.top_slider .slide1 .flex_caption1 .title1 {margin-bottom:15px; display:inline-block; font-weight:500; line-height:80px; font-size:80px;}
.top_slider .slide1 .flex_caption1 .title2 {margin-bottom:15px; display:inline-block; font-weight:100; line-height:80px; font-size:80px;}
.top_slider .slide1 .flex_caption1 .title3 {margin-bottom:15px; display:inline-block; font-weight:100; line-height:80px; font-size:80px;}
.top_slider .slide1 .flex_caption1 .title4 {margin-bottom:15px; width:680px; font-weight:300; line-height:34px; font-size:26px;}



.top_slider .slide2 {
    height:100%;
    background-image:url(../images/slider/slide2_bg.jpg);
    background-size:cover;
    background-attachment:fixed !important;
}

.top_slider .slide2 .flex_caption1 {
    position:absolute;
    z-index:30;
    left:50%;
    top:45%;
    width:100%;
    margin-left:-585px;
    color:#fff;
    transform: translateY(-50%);
    -o-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -webkit-transform: translateY(-50%);
}
.top_slider .slide2 .flex_caption1 .title1 {margin-bottom:15px; display:inline-block; font-weight:500; line-height:80px; font-size:80px;}
.top_slider .slide2 .flex_caption1 .title2 {margin-bottom:15px; display:inline-block; font-weight:100; line-height:80px; font-size:80px;}
.top_slider .slide2 .flex_caption1 .title3 {margin-bottom:15px; display:inline-block; font-weight:100; line-height:80px; font-size:80px;}
.top_slider .slide2 .flex_caption1 .title4 {margin-bottom:15px; width:680px; font-weight:300; line-height:34px; font-size:26px;}


.top_slider .slide3 {
    height:100%;
    background-image:url(../images/slider/slide3_bg.jpg);
    background-repeat:no-repeat;
    background-size:cover;
}

.top_slider .slide3 .flex_caption1 {
    position:absolute;
    z-index:30;
    left:50%;
    top:45%;
    width:100%;
    margin-left:-585px;
    color:#fff;
    transform: translateY(-50%);
    -o-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -webkit-transform: translateY(-50%);
}
.top_slider .slide3 .flex_caption1 .title1 {margin-bottom:15px; display:inline-block; font-weight:500; line-height:80px; font-size:80px;}
.top_slider .slide3 .flex_caption1 .title2 {margin-bottom:15px; display:inline-block; font-weight:100; line-height:80px; font-size:80px;}
.top_slider .slide3 .flex_caption1 .title3 {margin-bottom:15px; display:inline-block; font-weight:100; line-height:80px; font-size:80px;}
.top_slider .slide3 .flex_caption1 .title4 {margin-bottom:15px; width:680px; font-weight:300; line-height:34px; font-size:26px;}





/* Flex Caption Effect */
.FadeIn, .FromTop, .FromRight, .FromBottom, .FromLeft {opacity: 0; transition: all 0.7s ease-in-out; -webkit-transition: all 0.7s ease-in-out;}
.captionDelay1 {transition-delay: 0.1s; -webkit-transition-delay: 0.1s;}
.captionDelay2 {transition-delay: 0.2s; -webkit-transition-delay: 0.2s;}
.captionDelay3 {transition-delay: 0.3s; -webkit-transition-delay: 0.3s;}
.captionDelay4 {transition-delay: 0.4s; -webkit-transition-delay: 0.4s;}
.captionDelay5 {transition-delay: 0.5s; -webkit-transition-delay: 0.5s;}
.captionDelay6 {transition-delay: 0.6s; -webkit-transition-delay: 0.6s;}
.captionDelay7 {transition-delay: 0.7s; -webkit-transition-delay: 0.7s;}
.captionDelay8 {transition-delay: 0.8s; -webkit-transition-delay: 0.8s;}
.captionDelay9 {transition-delay: 0.9s; -webkit-transition-delay: 0.9s;}
.captionDelay10 {transition-delay: 1s; -webkit-transition-delay: 1s;}
.captionDelay11{transition-delay: 1.1s; -webkit-transition-delay: 1.1s;}
.captionDelay12 {transition-delay: 1.2s; -webkit-transition-delay: 1.2s;}

.flexslider li.flex-active-slide .FadeIn {opacity: 1;}
.flexslider li .FromTop {transform: translateY(-100%); -o-transform: translateY(-100%); -ms-transform: translateY(-100%); -webkit-transform: translateY(-100%);}
.flexslider li.flex-active-slide .FromTop {opacity: 1; transform: translateY(0); -o-transform: translateY(0%); -ms-transform: translateY(0); -webkit-transform: translateY(0);}
.flexslider li .FromBottom {transform: translateY(100%); -o-transform: translateY(100%); -ms-transform: translateY(100%); -webkit-transform: translateY(100%);}
.flexslider li.flex-active-slide .FromBottom {opacity: 1; transform: translateY(0); -o-transform: translateY(0); -ms-transform: translateY(0); -webkit-transform: translateY(0);}
.flexslider li .FromLeft {transform: translateX(-100%); -o-transform: translateX(-100%); -ms-transform: translateX(-100%); -webkit-transform: translateX(-100%);}
.flexslider li.flex-active-slide .FromLeft {opacity: 1; transform: translateX(0); -o-transform: translateX(0); -ms-transform: translateX(0); -webkit-transform: translateX(0);}
.flexslider li .FromRight {transform: translateX(100%); -o-transform: translateX(100%); -ms-transform: translateX(100%); -webkit-transform: translateX(100%);}
.flexslider li.flex-active-slide .FromRight {opacity: 1; transform: translateX(0); -o-transform: translateX(0); -ms-transform: translateX(0); -webkit-transform: translateX(0);}

     </style>


<div class="flexslider top_slider">
                <ul class="slides">
                    <li class="slide1">
                        <div class="flex_caption1">
                            <p class="title1 captionDelay2 FromTop">Creative</p>
                            <p class="title2 captionDelay4 FromTop">White</p>
                            <p class="title3 captionDelay6 FromTop">Templates</p>
                            <p class="title4 captionDelay7 FromBottom">The template is suitable for any company and the direction that appreciates style, purity and quality of the web site.</p>
                        </div>
                        <a class="slide_btn FromRight" href="javascript:void(0);" >Read More</a>
                    <li class="slide2">
                        <div class="flex_caption1">
                            <p class="title1 captionDelay6 FromLeft">Responsive</p>
                            <p class="title2 captionDelay4 FromLeft">Design</p>
                            <p class="title3 captionDelay2 FromLeft">Theme</p>
                            <p class="title4 captionDelay7 FromLeft">The template is suitable for any company and the direction that appreciates style, purity and quality of the web site.</p>
                        </div>
                        <a class="slide_btn FromRight" href="javascript:void(0);" >Read More</a>
                    </li>
                    <li class="slide3">
                        <div class="flex_caption1">
                            <p class="title1 captionDelay1 FromBottom">Amazing</p>
                            <p class="title2 captionDelay2 FromBottom">Video</p>
                            <p class="title3 captionDelay3 FromBottom">Background</p>
                            <p class="title4 captionDelay5 FromBottom">The template is suitable for any company and the direction that appreciates style, purity and quality of the web site.</p>
                        </div>
                        <a class="slide_btn FromRight" href="javascript:void(0);" >Read More</a>

                        <!-- VIDEO BACKGROUND -->
                        <a id="P2" class="player" data-property="{videoURL:'tDvBwPzJ7dY',containment:'.top_slider .slide3',autoPlay:true, mute:true, startAt:0, opacity:1}" ></a>
                        <!-- //VIDEO BACKGROUND -->
                    </li>
                </ul>
</div>
