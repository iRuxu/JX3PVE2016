H.ready(["jquery"],function(){jQuery(function(e){e("#c-header-wxtg").on("click",function(){e("#c-header-wx").slideToggle()}),e("#c-header-username").on("click",function(n){n.preventDefault(),e(this).toggleClass("on"),e("#c-header-os").toggle()});var n=e(".user-qiandao");n.on("click",function(){{var n=e(this);setTimeout(function(){n.hide()},200)}});var c=e("#bdcs");c.find("#bdcs-search-form-submit").val("");var o=e("#c-header-fmenu"),a=e(window),i=0;a.on("scroll",function(){i=a.scrollTop(),i>100?o.fadeIn():o.fadeOut()})})});