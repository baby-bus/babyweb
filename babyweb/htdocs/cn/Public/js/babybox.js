function allOpenApp(iosUrl, androidUrl, appkey) {
	var isIDevicePhone = (/iphone|ipod/gi).test(navigator.platform);
	var isIDeviceIpad = !isIDevicePhone && (/ipad/gi).test(navigator.platform);
	var isIDevice = isIDevicePhone || isIDeviceIpad;
	var isAndroid = !isIDevice && (/android/gi).test(navigator.userAgent);
	var isIEMobile = !isIDevice && !isAndroid && (/IEMobile/gi).test(navigator.userAgent);

	var redirect = function() {
		if (isIDevice) {
			var msg = isIDeviceIpad ? "检测到您正在使用iPad, 是否直接前往AppStore下载?" : "检测到您正在使用iPhone, 是否直接前往AppStore下载?";
			if (confirm(msg)) {
				//itms-apps://苹果下载地址
				window.location = iosUrl;
				return;
			};
			//if the device is ipad, break redirect.
			if (isIDeviceIpad) {
				return;
			}
		}
	};

	if (isIDevice) {
		var timeStamp = Date.now();
		// 判断锁死时间，暂测APP启动时间为1200ms
		setTimeout(function() {
			if (Date.now() - timeStamp < 2000) {redirect();} //手动时间一般会大于1000ms,再加上延时的1200，如果小于2000说明没有成功启动客户端

		}, 1200);
		//应用本地路径  app://
		window.location = appkey + "://";
		return;
	} else if (isAndroid) {
		//window.js2java.back();
		activity.openApp(androidUrl, appkey);
		return;
	}
}

        

function scroll(class_name) {
	$(class_name).infinitescroll({
		navSelector: "#navigation", //页面分页元素--成功后自动隐藏
		nextSelector: "#navigation",
		itemSelector: ".border ",
		loading: {
			finishedMsg: "没有新动画了...",
			img: "/Public/images/product/loading.gif",
			msgText: "正在加载动画..." //加载时显示的文字
		},
		extraScrollPx: 150, //离网页底部多少像素时触发ajax
		errorCallback: function() {
			//alert("出错！")
		}, //加载完数据后的回调函数，可选
	});
}