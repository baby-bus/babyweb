$(document).ready(function() {
    $(window).scroll(function() {      
        if($(window).scrollTop() >= 100){
            $('.actGotop').fadeIn(300); 
        }else{    
            $('.actGotop').fadeOut(300);    
        }  
    });
	//==========首页焦点图调用============================
	  if ($(".carousel-inner").find(".item").length<2) {
	 	$(".carousel-indicators").css("display","none");
	 	$(".carousel-control").css("display","none");
	  }	
      $("#owl-demo").owlCarousel({
      navigation : false,
	  pagination : true,
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem : true

      });
      $('.carousel').carousel({
		  interval: 10000
		})
  	//======================================
     //=======================下载banner点击===
  	$('.down').click(function(){
  		$('html,body').animate({scrollTop:$("#down").offset().top-100},1000);});	
  		
  		$('.guide').click(function(){
  		$('html,body').animate({scrollTop:$("#guide").offset().top-100},1000);});	
  		
  		$('.faq').click(function(){
  		$('html,body').animate({scrollTop:$("#faq").offset().top-100},1000);});	 
     //==============================================
    $('.actGotop').click(function(){
    $('html,body').animate({scrollTop: '0px'}, 800);});   
	$("#form_submit_check").click(function() {
		var $btn = $(this).button('loading')
    	var options={
                url:"save",   
                type:"post",
                dataType:'json',
                beforeSubmit: showRequest,
                success:function(mes){
                
                    if(mes.status){
                    	toastr.success('职位申请成功!');
                    	$("#form_submit_check").button('reset');
                    	$("#my_form").resetForm();
                    	
                    	
                    }else{             
                    	toastr.error("网络超时提交失败");
                    	$("#form_submit_check").button('reset');
                    	$("#my_form").resetForm();
                    	
                    }
                }  
         };
         $("#my_form").ajaxSubmit(options);        
		 return false;
	       
	}); 
	
	function showRequest(){
		var filepath=$("input[name='checkFile']").val(); 
        var extStart=filepath.lastIndexOf("."); 
        var ext=filepath.substring(extStart,filepath.length).toUpperCase(); 
        if(ext!=".DOC"&&ext!=".DOCX"&&ext!=".WPS"&&ext!=".RAR"&&ext!=".ZIP"){ 
        	toastr.error("文件格式不正确！请上传以下格式doc,docx,wps,rar,zip");
        	setInterval("$(\"#form_submit_check\").button('reset')",1000);
        	return false; 
        } 
        if($("#job_select option:selected").val()=="选择申请岗位"){
        	toastr.error("请选择岗位");
        	setInterval("$(\"#form_submit_check\").button('reset')",1000);
        	return false;
        }
	}
	//===============上传校验结束=============================================
	
	//==============================================首页效果=============
	
	$(".indexicon .font-center").mouseenter(function () {
        $(this).children("img").stop();    
        $(this).children("img").addClass("pulse");

       }).mouseleave(function () {

   		$(this).children("img").removeClass("pulse");

       });
	//==============================================
	$('a').tooltip();
   $.showDiv = function(num1){
       $("."+num1).fadeIn(2000,function(){ $.hideDiv(num1);});
    }//===================淡入======================
   $.hideDiv = function(num1){
   	$("."+num1).fadeOut(2000,function(){ $.showDiv(num1);});
   }//===================淡出=====================
   //屏幕高度执行wow.js插件  页面动画
   if ($(window).width()>750) {
   	new WOW().init();
   	$(".b_download_rocket").animate({bottom:20,left:100,opacity:1},1000,'swing');
   	$.showDiv("b_download_ris");
   	
   }else if($(window).width()<750){

   	$(".b_download_rocket").animate({top:20,left:10,opacity:1},1000,'swing');
   }
	
	$('.android').click(function(){
	$('html,body').animate({scrollTop:$("#android").offset().top-100},1000);});	
	
	$('.ios').click(function(){
	$('html,body').animate({scrollTop:$("#ios").offset().top-100},1000);});	
	
	$('.faq').click(function(){
	$('html,body').animate({scrollTop:$("#faq").offset().top-100},1000);});	
	
	
	toastr.options = {
			  "closeButton": true,
			  "positionClass": "toast-top-right",
			  "onclick": null,
			  "showDuration": "300",
			  "hideDuration": "1000",
			  "timeOut": "1000",
			  "extendedTimeOut": "1000",
			  "showEasing": "swing",
			  "hideEasing": "linear",
			  "showMethod": "fadeIn",
			  "hideMethod": "fadeOut"
	}
	
	//===============上传校验==============================================	
	

//=====================================产品页相关Start==========================================
	 function scroll(class_name){
		 $(class_name).infinitescroll({
		        navSelector: "#navigation",     //页面分页元素--成功后自动隐藏
		        nextSelector: "#navigation",
		        itemSelector: ".border " , 
				loading: {
				finishedMsg: "没有新数据了...",
	            img: "/Public/images/product/loading.gif",
	            msgText:"正在加载……"			//加载时显示的文字
				},
				extraScrollPx: 150,                                            //离网页底部多少像素时触发ajax
				errorCallback: function(){
					//alert("出错！")
				},                             //加载完数据后的回调函数，可选
		        
		    }); 
	 }
	

	 function product_label(class_1,class_2,class_3){
		  $(".breadcrumb li").remove();
		  $(".breadcrumb").append("<li>"+class_1+"</li>");
		  if(class_2){
			  $(".breadcrumb").append("<li>"+class_2+"</li>");
		  }
		  if(class_3){
			  $(".breadcrumb").append("<li>"+class_3+"</li>");
		  }
	  }
	 /**
	  * 选择类别时的设置
	  */
	 function progoto(data,is_not_new){
		  $(".product_list div").remove();
		  $(".product_list").append("<div class='row infinitescroll'></div>")
		  $(".infinitescroll").html(data);
		  $('a').tooltip();
		  if($(window).width() < 768){
			  $('html,body').animate({scrollTop:$("#product").offset().top-50},1000);  
		  }
		  if(is_not_new){ //最新不进行滚动
			  scroll(".infinitescroll");
		  }
	 }
	  function search_keyword(){
		  var keyword = $("#president_flexselect").val();
		  if(keyword){
			  $.post(web_url+"/index.php/Product/search",{search_word:keyword},function(data){
				  product_label("产品","搜索产品");
				  if(data.length > 1){
					  $("#navigation").attr('href',web_url+"index.php/Product/search/search_word="+keyword+"/page/2.html");
					  progoto(data,1);	
				  }else{
					  $(".product_list div").remove();
					  $(".product_list").append("<div class='row'><div class='col-xs-12 text-center search_error'><img src='/Public/images/Public/search_error.png' /><P>你要找的也是我们正要开发的，再看看<a href='"+web_url+"/product'>其他的产品</a>吧！</P></div></div>");	
				  }
			  },'html')
		  }
	  }
	  $(".educate li").click(function(){
		  var cata_id = $(this).attr('data-value');
		  var label = $(this).attr('data-label');
		  var title = $(this).attr('data-title');
		  product_label("产品",label,title);
		  if(typeof(cata_id)!="undefined"){
			  $.get(web_url+"/index.php/Product/search/cata_id/"+cata_id,function(data){
				  $("#navigation").attr('href',web_url+"/index.php/Product/search/cata_id/"+cata_id+"/page/2.html");
				  progoto(data,1);
			  },'html')
		  }
	  })
	  $("#new_product").click(function(){
		  product_label("产品","最新产品");
		  $.get(web_url+"/index.php/Product/search/is_new/1",function(data){
			  progoto(data,0);
		  },'html')
	  })
	  //===================================//
	  $('#president_flexselect').bind('keypress',function(event){
	        if(event.keyCode == "13")    
	        {
	        	search_keyword();
	        }
	    });
	  $("#search").click(function(){
		  search_keyword();
	  })
	  
	  //=====================================//
	

//=====================================产品页相关End==========================================	
	//视频播放列表
			$(".video-container .playbutton").click(function() {
				$(this).hide();
				$(this).siblings("img").hide();
				$(this).siblings("iframe").show();
//				$(this).children("span").fadeIn();
			})
	
//+++++++++++++++++++++++++++++++++++++++++++++++//
	  

	
	
	var heightOne=$(".one").height();
	if(!heightOne){
		$(".navbar-fixed-top").headroom({
		"tolerance": 5,
		"offset": 450,
		"classes": {
	    "initial": "animated",
	    "pinned": "headroom--pinned",
	    "unpinned": "headroom--unpinned"
	}
	});
	}
	
	$(".navbar-fixed-top").headroom({
	"tolerance": 5,
	"offset": heightOne-200,
	"classes": {
	    "initial": "animated",
	    "pinned": "headroom--pinned",
	    "unpinned": "headroom--unpinned"
	}
	});

    $("#job_select").change(function(){
        var checkValue=$("#job_select").val();
        var splitstr =checkValue.split(',');
        $("#job_id").val(splitstr[0]);
        $("#job_class_id").val(splitstr[1]);
    })
});