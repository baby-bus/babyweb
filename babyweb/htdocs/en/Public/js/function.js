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
		  interval: 5000
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
    	var options={
                url:"save",   
                type:"post",
                dataType:'json',
                beforeSubmit: showRequest,
                success:function(mes){
                    if(mes.status){
                    	toastr.success('职位申请成功!');
                    	$("#my_form").resetForm();
                    	$('#myModal').modal('hide');
                    }else{
                    	toastr.error(mes.info,"操作失败");
                    	$("#my_form").resetForm();
                    	$('#myModal').modal('hide');
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
        	toastr.error("文件格式不正确！请上传以下格式doc,docx,wps,rar,zip","操作失败");
        	return false; 
        } 
        if($("#job_select option:selected").val()=="选择申请岗位"){
        	toastr.error("请选择岗位","操作失败");
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
	
	

	
	//===============上传校验==============================================	
	
outerheight();
//=====================================产品页相关Start==========================================
	 function scroll(class_name){
		 $(class_name).infinitescroll({
		        navSelector: "#navigation",     //页面分页元素--成功后自动隐藏
		        nextSelector: "#navigation",
		        itemSelector: ".border " , 
				loading: {
				finishedMsg: "Updated!",
	            img: "/Public/images/product/loading.gif",
	            msgText:"Updating..."			//加载时显示的文字
				},
				extraScrollPx: 150,                                            //离网页底部多少像素时触发ajax
				errorCallback: function(){
					//alert("出错！")
				},                             //加载完数据后的回调函数，可选
		        
		    },function(){
		   	outerheight();
		   });
	 }
	

	 function product_label(class_1,class_2,class_3){
		  $(".breadcrumb li").remove();
		  $(".breadcrumb").append("<li>"+class_1+"&nbsp;</li>");
		  if(class_2){
			  $(".breadcrumb").append("<li>"+class_2+"&nbsp;</li>");
		  }
		  if(class_3){
			  $(".breadcrumb").append("<li>"+class_3+"&nbsp;</li>");
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
		  $(".describe").each(function (i) {
		//超出3行 添加省略号！
            var divH = $(this).height();
            var $p = $("span", $(this)).eq(0);
            while ($p.outerHeight() > divH) {
                $p.text($p.text().replace(/(\s)*([a-zA-Z0-9]+|\W)(\.\.\.)?$/, "..."));
            };
        });
	 }
	  function search_keyword(){
		  var keyword = $("#president_flexselect").val();
		  if(keyword){
			  $.post(web_url+"/index.php/Product/search",{search_word:keyword},function(data){
				  product_label("Apps","Find Apps");
				  if(data.length > 1){
					  $("#navigation").attr('href',web_url+"index.php/Product/search/search_word="+keyword+"/page/2.html");
					  progoto(data,1);	
				  }else{
					  $(".product_list div").remove();
					  $(".product_list").append("<div class='row'><div class='col-xs-12 text-center search_error'><img src='/Public/images/Public/search_error.png' /><P><a href='"+web_url+"/product'>No result found! </a></P></div></div>");	
				  }
			  },'html')
		  }
	  }
	  $(".educate li").click(function(){
		  var cata_id = $(this).attr('data-value');
		  var label = $(this).attr('data-label');
		  var title = $(this).attr('data-title');
		  product_label("Apps",label,title);
		  if(typeof(cata_id)!="undefined"){
			  $.get(web_url+"/index.php/Product/search/cata_id/"+cata_id,function(data){
				  $("#navigation").attr('href',web_url+"/index.php/Product/search/cata_id/"+cata_id+"/page/2.html");
				  progoto(data,1);
			  },'html')
		  }
	  })
	  $("#new_product").click(function(){
		  product_label("Apps","New Apps");
		  $.get(web_url+"/index.php/Product/search/",function(data){
			  progoto(data,0);
		  },'html')
	  })
	  $("#hot_product").click(function(){
		  product_label("Apps","Hot Apps");
		  $.get(web_url+"/index.php/Product/search/is_hot/1",function(data){
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
		

});