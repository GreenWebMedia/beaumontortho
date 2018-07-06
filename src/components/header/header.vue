<template lang='pug' src='./header.pug'></template>

<script>
import Navigation from 'components/navigation/navigation'

export default {
  name: 'header',
  computed: {
    props () {
      return this.$store.state.pages.header
    },
    loading () {
      return this.$store.state.loading
    }
  },
  components: {
    Navigation
  }
}
</script>

<style>
*{ -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; margin: 0; padding: 0;}
body, html, div, img, a, p, ul, li, ol, h1, h2, h3, h4, h5, h6{ margin: 0; padding: 0;font-family: 'Lato', sans-serif;}
body{font-size: 15px;}
.home_content{line-height: 1px;}
.clear{ clear: both;}
a{text-decoration:none;color: #1E408D;}
h1 {font-size: 44px;font-family: 'Alex Brush', cursive;line-height: 1;color: #0F1E84;margin: 0 0 10px;font-weight:normal;}
h2 {font-size: 28px; margin: 0 0 6px;line-height: 1;font-family: 'Lato' , sans-serif;color: #0F1E84;font-weight:normal;}
p{color: #000;}
p, li {line-height: 25px;}
p, ol, ul, hr {margin: 0 0 21px;}
ul, ol {padding: 0 0 0 2em; margin: 0 0 21px 30px;}
ul li {list-style-type: disc;font: 15px/21px 'Lato', sans-serif;color:#000;}
ol li, ul li {margin: 0 0 0.5em;padding: 0em;}
.wrapper{width: 998px;margin: 0 auto;}
.outerwrap{width: 100%;float:left; position: relative;background: url(https://beaumontortho.com/wp-content/uploads/2018/06/bg_container.png) no-repeat center top;}
header.site_header{width: 100%;float: left;text-align: center;position:relative;}
header.site_header .left{float: left;}
header.site_header .left .h_address{width: 245px;height: 100px;margin-top: 44px;display: block;float: left;color: #fff; 
background: url(https://beaumontortho.com/wp-content/uploads/2018/06/h_redbox.png) no-repeat center top;padding: 24px 0 0 25px;font-weight: 300;text-align: left;font-size: 20px;line-height:22px;}
header.site_header .left .h_address span{font-family: 'Lato', sans-serif;}
header.site_header .right{float:right;}
header.site_header .right .h_phone{width: 245px;height: 100px;margin-top: 44px;padding: 7px 0 0 0;float: right;display: block; float: left;text-align: right;
background: url(https://beaumontortho.com/wp-content/uploads/2018/06/h_redbox.png) no-repeat center top;font-size: 26px;line-height:30px;font-weight: 300;color: #fff;text-align: center;}
header.site_header .right .h_phone p{font-size: 26px;line-height:30px;font-weight: 300;color: #fff;}
header.site_header .right .h_phone a {font-size: 14px;font-weight: 700; line-height: 15px; color: #fff; display: block;}
header.site_header .middle{float:left;}
header.site_header .middle a{display:block;}
header.site_header .tophead{float:left;width:100%;clear:both;margin-top: -3px;}
header.site_header .homeslider{float:left;width:100%;clear:both;height: 310px;position:relative;top:-4px;}
header.site_header .homeslider .innerslide{float:left;width:100%;clear:both;height: 310px;padding: 0 8px;}
header.site_header .homeslider .innerslide img{float: left;}
header.site_header .homeslider .home_social{position: absolute;bottom: 71px;right: 13px;z-index: 999999;}
header.site_header .homeslider .blogger_link {width: 53px;height: 52px;background: url(https://beaumontortho.com/wp-content/uploads/2018/06/blogger.png) no-repeat center top;float:right;}
header.site_header .homeslider .fb_link {width: 53px;height: 52px;background: url(https://beaumontortho.com/wp-content/uploads/2018/06/fb.png) no-repeat center top;float:right;margin-right: -11px;cursor:pointer;}
header.site_header .test{position: absolute;bottom: 20px;left: 0;width: 100%;z-index:999999999;}
header.site_header .navigation{float:left;width:100%;clear:both;height: 50px;background: url(https://beaumontortho.com/wp-content/uploads/2018/06/bg_nav.png) no-repeat center top;text-align:center;}
header.site_header .navigation li{display:inline-block;position: relative;}
header.site_header .navigation li .dropdown{position:absolute;content:"";right:8px;top:13px;width:30px;height:40px;display:none;}
header.site_header .navigation li .dropdown:after { width: 0;  height: 0;  border-left: 12px solid transparent; border-right: 12px solid transparent; border-top: 12px solid #000;position:absolute;content:"";right:0;top:0;
}
header.site_header .navigation li a {display: block;font-weight:700;line-height:50px;font-size:18px;color: #fff;padding: 0 18px;margin: 0 2px;text-shadow: 1px 1px 2px #858585;}
header.site_header .navigation .submenu{display:none;background: url(https://beaumontortho.com/wp-content/uploads/2018/06/bg_subnav.png) no-repeat center top;
position: absolute;top: 50px;left: 50%;margin: 0 0 0 -95px;width: 190px;padding: 15px 0 20px;}
header.site_header .navigation .submenu li a{font-size: 14px;color: #fff;width: 190px;line-height: 1.8;
height: auto;background: none;text-shadow: none;padding: 0 10px;margin: 0;text-shadow: none;font-weight: 400;}
header.site_header .navigation .submenu li:hover a{color: #dc2323;background: #3a0707;}
header.site_header .navigation li:hover > a{background: url(https://beaumontortho.com/wp-content/uploads/2018/06/nav_hover_repeat.png) repeat-x top left;}
header.site_header .navigation li:hover .submenu{display:block;}
header.site_header .navigation .submenu li{margin-bottom: 0;float:left;width:100%;}

/*concent_css_start*/
#content_center{padding: 0 10px;float:left;width: 100%;}
.concent{float:left;width:100%;clear:both;padding:10px 4px;}
.concent .allcalls{float:left;width:100%;clear:both;margin-bottom:25px;}
.concent .allcalls a{float:left;width: 230px;height: 160px;margin-left: 10px;}
.concent .allcalls a.call_unique {background: url(https://beaumontortho.com/wp-content/uploads/2018/06/call_why.png) no-repeat center top;}
.concent .allcalls a.call_unique:hover {background-position: 0px -160px;}
.concent .allcalls a.call_doctor {background: url(https://beaumontortho.com/wp-content/uploads/2018/06/call_doctor.png) no-repeat center top;}
.concent .allcalls a.call_doctor:hover {background-position: 0px -160px;}
.concent .allcalls a.call_finance {background: url(https://beaumontortho.com/wp-content/uploads/2018/06/call_finance.png) no-repeat center top;}
.concent .allcalls a.call_finance:hover{background-position: 0px -160px;}
.concent .allcalls a.call_visit {background: url(https://beaumontortho.com/wp-content/uploads/2018/06/call_visit.png) no-repeat center top;}
.concent .allcalls a.call_visit:hover{background-position: 0px -160px;}
.welcome{float:left;width:100%;clear:both;padding:0 0 0 38px;}
.welcome .bea{float:left;width:100%;clear:both;}
.welcome .left{float: left;width: 623px;}
.welcome .left ul li a{color:#000;}
.welcome .left ul li a:hover{color: #B21911;}
.welcome .mid_text{float:left;width:100%;clear:both;}
.welcome .right{width:256px;float:right;}
.welcome .callouts2{float:left;width:100%;clear:both;text-align:center;margin-bottom:5px;}
.welcome .callouts2 a {display: inline-block;width: 226px;height: 55px;font: 14px/49px 'Lato', sans-serif;color: #fff;text-align:left;padding-left: 21px;}
.welcome .callouts2 .call_forms {background: url(https://beaumontortho.com/wp-content/uploads/2018/06/call_forms.png) no-repeat center top;margin-bottom: 5px;}
.welcome .callouts2 .call_app {background: url(https://beaumontortho.com/wp-content/uploads/2018/06/call_app.png) no-repeat center top;}
.welcome .callouts2 a:hover { background-position: 0px -55px;color: #fff;}
.welcome .r_links{float:left;width:100%;clear:both;text-align:center;}
.welcome .r_links a{display: block;padding-top:10px;}
/*concent_css_end*/

/*footer_css_start*/
.footer{float:left;width:100%;clear:both;padding: 35px 0 0 0;min-height: 215px;background: url(https://beaumontortho.com/wp-content/uploads/2018/06/footx.jpg) repeat-x top left;}
.footer .f_links{float:left;width:100%;clear:both;}
.footer .f_links a{display:inline-block;}
.f_address{float:left;width:100%;clear:both;height: 75px;font: 32px/75px 'Lato', sans-serif;font-weight: 300;text-shadow: 1px 1px 2px #000;color: #fff;
text-align: center;margin-top: 10px;background: url(https://beaumontortho.com/wp-content/uploads/2018/06/f_address_bg.png) no-repeat center top;background-size:95%;}
.footer .seo{float:left;width:100%;clear:both;padding:10px 0;text-align:center;font-family: Arial, Helvetica, sans-serif;font-size: 10px;color: #D5D5D5;line-height: 25px;}
.footer .seo a{color: #D5D5D5;}
.f_address span{font: 32px/75px 'Lato', sans-serif;font-weight: 300;}
/*footer_css_end*/
.photort{float: right;margin: 5px 0 10px 20px;border: 2px solid #0F2658;}
.fonttwenty{font-size:22px;}
.strongcl{font: 700 15px/21px 'Lato', sans-serif;}
.mpiframe{margin-top:25px;box-shadow: 0 0 5px rgba(0,0,0,0.4);}
.main-form{float:left;width: 623px;margin-bottom:30px}
.main-form .formboxes{float: left;width: 100%;margin-bottom: 4px;}
.main-form .allrt{float: left;width: 100%;line-height: 27px;}
.main-form input{float: left;width: 100%;clear: both;}
.main-form .innerapp{width: 374px;margin: 0 auto;}
.main-form .formboxes input{border: 1px solid #abadb3;padding: 5px;
-webkit-box-shadow: inset 1px 1px 2px rgba(0,0,0,0.2);box-shadow: inset 1px 1px 2px rgba(0,0,0,0.2);line-height: 1;font-family: Verdana, Geneva, sans-serif;font-size: 12px;}
.main-form .formboxes select{border: 1px solid #abadb3;padding: 5px;
-webkit-box-shadow: inset 1px 1px 2px rgba(0,0,0,0.2);box-shadow: inset 1px 1px 2px rgba(0,0,0,0.2);line-height: 1;font-family: Verdana, Geneva, sans-serif;font-size: 12px;width: 100%;}
.main-form .formboxes .allrt span{color: #f00;margin-right: 5px;}
.main-form .formboxes .allrt{font-family: Verdana, Geneva, sans-serif;
font-size: 12px;color: #000;font-weight: bold;line-height: 1.7;}
.main-form .formboxes .buttonallrt{text-align:center;}
.main-form .formboxes .buttonallrt input[type='submit']{display:inline-block;margin-top: 6px;font-size: 12px;line-height: 20px;text-align: center;font-family: Verdana, Geneva, sans-serif;font-weight: normal;border-radius: 2px;padding: 2px 10px;border: 1px solid #ccc;width: auto;float: none;}
.main-form .formboxes .buttonallrt input[type='submit']:hover{background: #aa1b1b;color:#fff;}
.main-form .formboxes textarea{border: 1px solid #abadb3;padding: 5px;
-webkit-box-shadow: inset 1px 1px 2px rgba(0,0,0,0.2);box-shadow: inset 1px 1px 2px rgba(0,0,0,0.2);line-height: 1;height: 89px;width:100%;font-family: Verdana, Geneva, sans-serif;font-size: 12px;}
.clearboth{clear:both;}
.main-form .formboxes.radioformbox .allrt{width:auto;margin-right: 15px;}
.main-form .formboxes.radioformbox .radies{float:left;line-height: 17px;margin-right: 15px;}
.main-form .formboxes.radioformbox .radies input{width: auto;
float: left;position:relative;top: 3px;margin-right: 3px;}
.main-form.nextmainform h2{margin-top:40px;}
.welcome.allfrmptags p{font-family: Verdana, Geneva, sans-serif;font-size: 12px;line-height: 25px;}
.welcome.allfrmptags .left.beauton p{font-size:15px;}
p em{font: 15px/25px 'Lato', sans-serif;font-style: italic;}
.s_forms li{list-style:none;background: url(https://beaumontortho.com/wp-content/uploads/2018/06/secured.png) no-repeat left center;height: 24px;margin-bottom: 5px;padding: 5px 0 0 28px;}
.welcome .left .s_forms li a{color: #1E408D;}
strong.misplaceds{font:700 15px/25px 'Lato', sans-serif;margin-top:21px;display:inline-block;}
.laater li strong{font-family: 'Lato', sans-serif;}
.dd-articles {padding: 10px; background: #e4f3fd; border: 1px solid #ccc;
    font: 15px/21px 'Lato', sans-serif;}
.dd-articles .dd-left {float: left;margin: 5px 10px 5px 0;}  
.dd-article .dd-title {color: #1E408D; font-weight: bold;display: block;}  
.dd-article .dd-title:hover{color: #B21911;}
.welcome.phasewelcome strong.misplaceds{margin-top:0;}
.welcome.gamewelcome .left a{margin: 0 10px 20px;display:inline-block;}
.welcome.gamewelcome .left h1{text-align:left;}
.welcome.gamewelcome .left{padding: 0 20px;text-align: center;}
.header-slider-inner{position:relative;}
header.site_header .homeslider .innerslide img{position: absolute;
    left: 0;top: 0;transition: opacity .5s ease-in 0s;}
.popvd{position:absolute;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.8);display:none;z-index:999999999;}
.popvd1{height: 395px;position: fixed;
width: 625px;left: 50%;top: 44%;-webkit-transform:translate(-50%, -44%);-moz-transform:translate(-50%, -44%);transform:translate(-50%, -44%);}
.popvd1 span{position:absolute;top: 25px;background: rgba(155, 155, 155, 1);height: 35px;width: 35px;border-radius: 50%;text-align: center;font-size: 30px;font-weight: 700;color: #fff;line-height: 32px;right: -13px;cursor: pointer;}
.brussvd{position:relative;width:623px;height:375px;}
.brussvd video{cursor:pointer;}
.popvd1.popvd1_next{top: 50%;-webkit-transform:translate(-50%, -70%);-moz-transform:translate(-50%, -70%);transform:translate(-50%, -70%);}
.popvd1.popvd1_next img{border: 10px solid #fff;}
.popvd1.popvd1_next span{top:10px;right:-22px;background: #000;
border: 2px solid #fff;height: 25px;width: 25px;font-size: 20px;line-height:20px;}
.photort.photort1{cursor:pointer;}
.welcome.phasewelcome.prphasewelcome em{font-style: italic;}
.welcome.phasewelcome.prphasewelcome ul li{line-height:25px;}
.welcome.phasewelcome.prphasewelcome p{font-size:15px;}
.Sitemap ul > li{list-style:none;}
.Sitemap ul > li > a{font-weight:700;}
.Sitemap ul > li:hover > a{color:#000;}
.welcome .left .Sitemap ul li a:hover {color: #000;}
.Sitemap ul > li .submenu a{font-weight:normal;}
.welcome .left .Sitemap ul > li .submenu li:hover a{color: #B21911;}
.welcome .left .Sitemap ul > li .submenu li a{color: #1E408D;font-size:12px;font-family: Verdana, Geneva, sans-serif;}
.welcome .left .Sitemap ul > li .submenu li{margin-bottom:5px;}
.togglebt{position: absolute;right: 0;top: 13px;height: 50px;width: 50px;display:none;}
.togglebt span{height: 5px;float: left;width: 35px;background: #1c3f8f;margin-bottom:4px;z-index: 99999;}
.back-bar{position: fixed;right: 0;width: 80px;bottom: 0;
height: 80px;display:none;}
.back-bar a{background: url(https://beaumontortho.com/wp-content/uploads/2018/06/Untitled-5.jpg) no-repeat center top;width:80px;height:80px;display:block;text-indent:-99999em;background-position: 0 0;cursor:pointer;}
.back-bar a:hover{background-position: 0 -90px;}
.back-bar.on{display:block;}
header.site_header .navigation li.funtabbar{display:none;}
.Sitemap ul > li.funtabbar{display:none;}
header.site_header .test ul{margin: 0;padding: 0;}
.welcome .left .laater.laater_blue li a{color: #1E408D;}
.welcome .left .laater.laater_blue li a:hover{color:#B21911;}
header.site_header .right .h_phone span{    font-weight: 300;font-family: Lato,sans-serif;}
.welcome .left .class-blue li a{color: #1E408D;}
.welcome .left .class-blue li a:hover{color:#B21911;}

@media (max-width:995px){
 .wrapper{width:96%;}
 header.site_header .homeslider .innerslide img{width:100%;} 
 header.site_header .middle{width: 42%;float: none;display: inline-block;padding-top: 30px;}
 header.site_header .middle img{width:100%;}
 header.site_header .left .h_address{width: 227px;padding: 24px 0 0 12px;}
 header.site_header .right .h_phone p{font-size:23px;}
 header.site_header .right .h_phone{width:195px;}
 .header-slider-inner img{height:310px;}
 header.site_header .navigation ul{margin:0;padding:0;}
 header.site_header .navigation li a{font-size:17px;}
 .concent .allcalls{text-align:center;}
 .concent .allcalls a{float:none;display:inline-block;margin-bottom: 10px;}
 .welcome .right{width:100%;}
 .welcome{padding: 0;}
 .footer .f_links a{width:24%;}

 .f_address{font-size:22px;background-image:none;background-size: 90%;margin-top: 0;}
.f_address span{font-size:22px;padding-top: 9px;display:inline-block;}
}
@media (max-width:767px){
header.site_header .test .navigation{display:none;}
header.site_header .test{top:0;bottom:inherit;}
header.site_header .tophead{padding-top:50px;} 
header.site_header .left {float: left;width: 100%;}
header.site_header .left .h_address {width: 100%;
padding: 5px 0 ;height: auto; margin: 0; background: #9a1f28;
text-align: center;}
header.site_header .left br{display:none;} 

header.site_header .right {float: left;width: 100%;margin-top: 5px;}
header.site_header .right .h_phone {width: 100%;
padding: 5px 0 ;height: auto; margin: 0; background: #9a1f28;
text-align: center;}
header.site_header .right br{display:none;} 
header.site_header .right span p{margin-bottom:0;}
header.site_header .right .h_phone a { font-size: 14px;
font-weight: 700;line-height: 29px;color: #fff; float: right;
padding-right: 20px;}
header.site_header .middle {padding-top: 0px;padding-bottom: 7px;
}
.header-slider-inner img{height:auto;}
.welcome .left{width:100%;}
.f_address {font-size: 20px;background: #991e27;line-height: 81px;}
header.site_header .homeslider, header.site_header .homeslider .innerslide{height:250px;}
header.site_header .homeslider .innerslide img{height:250px;}
.togglebt{display:block;cursor:pointer;}
header.site_header .test .navigation {display: none;
background: #fff;position: absolute;top: 44px;left: 0;z-index: 99;
}
header.site_header .navigation ul {margin: 0;
padding: 0;float:left;width:100%;position: relative;z-index: 9999999;background: #ffff;}
header.site_header .navigation li{border-bottom: 1px solid #ccc;float:left;width:100%;margin:0;}
header.site_header .navigation li a{color:#000;line-height: 39px;}
.main-form{width:100%;}
.main-form .innerapp{width:70%;}
header.site_header .navigation .submenu li a{text-align:center;width:100%;}
header.site_header .navigation li .dropdown{display:block;}
header.site_header .navigation li:hover .submenu{display:none;}
header.site_header .navigation .submenu{position: relative;
left: 0;margin: 0 auto;top: 0;width: 100%;background-repeat: repeat;text-align: center;}
.f_address span{padding-top: 0;display:inline-block;}
.footer .f_links a img{width:100%;}
}
@media (max-width:639px){
header.site_header .middle{width: 95%;}
header.site_header .homeslider, header.site_header .homeslider .innerslide{height:250px;} 
header.site_header .right .h_phone a{float:none;padding-right:0;}
.footer{min-height: 232px;}
.f_address {font-size: 15px;}
.f_address span{font-size: 15px;}
.footer .seo{line-height: 55px;} 
.main-form .innerapp{width:100%;}
}

@media (max-width:479px){
.f_address span{background:#991e27;font-size:18px;font-weight:bold;line-height:25px;padding:35px 0 35px;}
.footer .seo {line-height: 20px;padding-top: 49px;} 
header.site_header .homeslider .home_social{bottom:50px;}
header.site_header .right .h_phone p{font-size:17px;}
header.site_header .left .h_address{font-size:19px;}
.captcha{-webkit-transform: scale(0.7);-moz-transform: scale(0.7);transform: scale(0.7);}
}
@media (max-width:396px){
header.site_header .homeslider .home_social{bottom:0;}
 header.site_header .homeslider, header.site_header .homeslider .innerslide{height:170px;}
header.site_header .homeslider .innerslide img{height:170px;}

}

</style>

