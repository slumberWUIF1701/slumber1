$(function(){
	var myScroll = new IScroll('.zn_zpcon', {
		mouseWheel:true,     //鼠标能否滚动
		scrollbars:true,      //是否有滚动条
		bounce:true,    //是否反弹，默认为true
		click:true,   //是否可以点击。默认为false
		fadeScrollbars:true,
		interactiveScrollbars:true,	
	});
	$(".zn_everycon").click(function(){
		$("body").addClass("zn_click");
	})
	$(".zn_delbtn").click(function(){
		$("body").removeClass("zn_click");
	})



	var widths=0;
    $(".zn_guanzhu li").each(function(index,obj){
        widths+=$(obj).outerWidth()
    })
    $(".zn_guanzhu ul").css("width",widths);
    var left=0;
    mui(".mui-content").on("dragstart",".navbox",function(e){
        alert(1);
        left=parseInt($(".zn_guanzhu ul").css("marginLeft"))?parseInt($(".zn_guanzhu ul").css("marginLeft")):0;
    })
    mui(".mui-content").on("drag",".zn_guanzhu ul",function(e){
        /*
        e.detail.
            deltaX
        :
        25
        deltaY
            :
            0
        direction
            :
            "right"
            */
           alert(2);
        var lefts=left+e.detail.deltaX;
//         console.log($(window).width());
        if(lefts>0){
            lefts=0;
        }
        if(lefts<$(window).width()-widths){
            lefts=$(window).width()-widths
        }
       $(".zn_guanzhu ul").css("marginLeft",lefts)
    })

})
