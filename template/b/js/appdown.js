
console.log=function(){}


function ppsr(exp){$.cookie('appdw', 'ok', {expires: exp, path: '/'});if(exp>1){window.open("http://cms.xiantian.fun/");} }

$(document).ready(function(){

  $(".md-layer a").click(function(){

	$(".md-shade").remove();

	$(".md-layer").remove();

  });

 });

  window.onload = function () {

                    var minSize = 5; //最小字体

                    var maxSize = 50;//最大字体

                    var newOne = 10000000000; //生成雪花间隔

                    var flakColor = "#fff"; //雪花颜色

                    var flak = $("<div class='xh'></div>").css({position:"absolute","top":"0px"}).html("❆");//定义一个雪花

                    var dhight = $(window).height(); //定义视图高度

                    var dw =$(window).width(); //定义视图宽度

                    setInterval(function(){

                    var sizeflak = minSize+Math.random()*maxSize; //产生大小不等的雪花

                    var startLeft = Math.random()*dw; //雪花生成是随机的left值

                    var startopcity = 0.7+Math.random()*0.3; //随机透明度

                    var endpositionTop= dhight-100; //雪花停止top的位置

                    var endLeft= Math.random()*dw; //雪花停止的left位置

                    var durationfull = 5000+Math.random()*5000; //雪花飘落速度不同

                    flak.clone().appendTo($("body")).css({

                    "left":startLeft ,

                    "opacity":startopcity,

                    "font-size":sizeflak,

                    "color":flakColor

                    }).animate({

                    "top":endpositionTop,

                    "left":endLeft,

                    "apacity":0.1

                    },durationfull,function(){

                    $(this).remove()

                    });

                    },newOne);

    var $wrap = $(".wrapper");

    init();

    function init() {

        /*图片加载延迟执行，不延迟，第二次进入的速度快会直接闪现出现*/

        setTimeout(function () {

            $wrap.removeClass("init");

        }, 200)



        /*执行事件函数*/

        bindEvent();

    }

    

    function bindEvent() {

        $(".item").on("click", function () {

            $(this).addClass("active");

            $wrap.addClass("startShowItem");

            

        })

        $(".close").on("click", function (e) {

            e.stopPropagation();

            console.log(123)

            $(".active").removeClass("active");

            $wrap.removeClass("startShowItem");

            

        })

    }

}();



