// $(".submitForm").submit(function(){
//     var $name = $('input[name="name"]').val();
//     var $tel = $('input[name="tel"]').val();
//     var $city = $('input[name="city"]').val();
//     var $email = $('input[name="email"]').val();
//
//     if( $name == "" || $city == "" ){
//         alert('请完整填写您的个人信息~');
//         return false;
//     }else if (!$tel.match(/^(((13[0-9]{1})|(14[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/) ) {
//         alert('手机号码填写不正确~');
//         $("this").focus().select();
//         return false;
//     }else if (!$email.match( /\w+[@]{1}\w+[.]\w+/) ) {
//         alert('邮箱填写不正确~');
//         $("this").focus().select();
//         return false;
//     }
// });
//
//
//
// var _hmt = _hmt || [];
// (function() {
//     var hm = document.createElement("script");
//     hm.src = "https://hm.baidu.com/hm.js?7de13e6251bf3a90becb289328ccccf4";
//     var s = document.getElementsByTagName("script")[0];
//     s.parentNode.insertBefore(hm, s);
// })();


//唯一不同：jQuery("#demo1") 放在index中
jQuery("#indexSlider").slide({ mainCell:".bd ul",effect:"top",autoPlay:true,triggerTime:0 });

$(".navList li a").each(function(){
    $this = $(this);
    if($this[0].href==String(window.location)){
        // console.log($this[1].href);
        // console.log(String(window.location));
        // console.log(window.location);

        $(".navList li a").removeClass("active");
        $this.addClass("active");
        //alert($this);
    }
});

$(".navList-foot li a").each(function(){
    $this = $(this);
    if($this[0].href==String(window.location)){
        //alert($this[0].href);
        //alert(String(window.location));
        //alert(window.location);
        $(".navList-foot li a").removeClass("active");
        $this.addClass("active");
        //alert($this);
    }
});