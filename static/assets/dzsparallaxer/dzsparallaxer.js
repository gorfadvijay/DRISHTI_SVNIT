function is_touch_device(){return!!("ontouchstart"in window)}function is_ie(){var e=window.navigator.userAgent,a=e.indexOf("MSIE ");return a>0?parseInt(e.substring(a+5,e.indexOf(".",a)),10):0<e.indexOf("Trident/")?(a=e.indexOf("rv:"),parseInt(e.substring(a+3,e.indexOf(".",a)),10)):(a=e.indexOf("Edge/"),a>0?parseInt(e.substring(a+5,e.indexOf(".",a)),10):!1)}function is_ie11(){return!window.ActiveXObject&&"ActiveXObject"in window}function version_ie(){return parseFloat(navigator.appVersion.split("MSIE")[1])}window.dzsprx_self_options={},function(c){c.fn.dzsparallaxer=function(b){if("undefined"==typeof b&&"undefined"!=typeof c(this).attr("data-options")&&""!=c(this).attr("data-options")){var h=c(this).attr("data-options");eval("window.dzsprx_self_options = "+h),b=c.extend({},window.dzsprx_self_options),window.dzsprx_self_options=c.extend({},{})}b=c.extend({settings_mode:"scroll",mode_scroll:"normal",easing:"easeIn",animation_duration:"20",direction:"normal",js_breakout:"off",breakout_fix:"off",is_fullscreen:"off",settings_movexaftermouse:"off",init_delay:"0",init_functional_delay:"0",settings_substract_from_th:0,init_functional_remove_delay_on_scroll:"off",settings_makeFunctional:!1,settings_scrollTop_is_another_element_top:null},b),Math.easeIn=function(e,a,t,i){return-t*(e/=i)*(e-2)+a},Math.easeOutQuad=function(e,a,t,i){return e/=i,-t*e*(e-2)+a},Math.easeInOutSine=function(e,a,t,i){return-t/2*(Math.cos(Math.PI*e/i)-1)+a},this.each(function(){function h(){if(1==b.settings_makeFunctional){var e=!1,i=document.URL,n=i.indexOf("://")+3,s=i.indexOf("/",n),i=i.substring(n,s);if(-1<i.indexOf("l")&&-1<i.indexOf("c")&&-1<i.indexOf("o")&&-1<i.indexOf("l")&&-1<i.indexOf("a")&&-1<i.indexOf("h")&&(e=!0),-1<i.indexOf("d")&&-1<i.indexOf("i")&&-1<i.indexOf("g")&&-1<i.indexOf("d")&&-1<i.indexOf("z")&&-1<i.indexOf("s")&&(e=!0),-1<i.indexOf("o")&&-1<i.indexOf("z")&&-1<i.indexOf("e")&&-1<i.indexOf("h")&&-1<i.indexOf("t")&&(e=!0),-1<i.indexOf("e")&&-1<i.indexOf("v")&&-1<i.indexOf("n")&&-1<i.indexOf("a")&&-1<i.indexOf("t")&&(e=!0),0==e)return}b.settings_scrollTop_is_another_element_top&&(w=b.settings_scrollTop_is_another_element_top),l=a.find(".dzsparallaxer--target").eq(0),0<a.find(".dzsparallaxer--blackoverlay").length&&(F=a.find(".dzsparallaxer--blackoverlay").eq(0)),0<a.find(".dzsparallaxer--fadeouttarget").length&&(T=a.find(".dzsparallaxer--fadeouttarget").eq(0)),a.hasClass("wait-readyall")||setTimeout(function(){y=Number(b.animation_duration)},300),f=a.height(),"on"==b.settings_movexaftermouse&&(m=a.width()),l&&(g=l.height(),"on"==b.settings_movexaftermouse&&(G=l.width())),b.settings_substract_from_th&&(g-=b.settings_substract_from_th),U=f,"2"==b.breakout_fix&&console.info(a.prev()),a.attr("data-responsive-reference-width")&&(H=Number(a.attr("data-responsive-reference-width"))),a.attr("data-responsive-optimal-height")&&(M=Number(a.attr("data-responsive-optimal-height"))),0<a.find(".dzsprxseparator--bigcurvedline").length&&a.find(".dzsprxseparator--bigcurvedline").append('<svg class="display-block" width="100%"  viewBox="0 0 2500 100" preserveAspectRatio="none" ><path class="color-bg" fill="#FFFFFF" d="M2500,100H0c0,0-24.414-1.029,0-6.411c112.872-24.882,2648.299-14.37,2522.026-76.495L2500,100z"/></svg>'),0<a.find(".dzsprxseparator--2triangles").length&&a.find(".dzsprxseparator--2triangles").append('<svg class="display-block" width="100%"  viewBox="0 0 1500 100" preserveAspectRatio="none" ><polygon class="color-bg" fill="#FFFFFF" points="1500,100 0,100 0,0 750,100 1500,0 "/></svg>'),0<a.find(".dzsprxseparator--triangle").length&&a.find(".dzsprxseparator--triangle").append('<svg class="display-block" width="100%"  viewBox="0 0 2200 100" preserveAspectRatio="none" ><polyline class="color-bg" fill="#FFFFFF" points="2200,100 0,100 0,0 2200,100 "/></svg>'),a.get(0)&&(a.get(0).api_set_scrollTop_is_another_element_top=function(e){w=e}),0<a.find(".divimage").length||0<a.find("img").length?(e=a.children(".divimage, img").eq(0),e.attr("data-src")?(V=e.attr("data-src"),c(window).bind("scroll",t),t()):E()):E()}function E(){if(!I){if(I=!0,is_ie11()&&a.addClass("is-ie-11"),c(window).bind("resize",ea),ea(),a.hasClass("wait-readyall")&&setTimeout(function(){t()},700),setTimeout(function(){a.addClass("dzsprx-readyall"),t(),a.hasClass("wait-readyall")&&(y=Number(b.animation_duration))},1e3),0<a.find("*[data-parallaxanimation]").length&&a.find("*[data-parallaxanimation]").each(function(){var a=c(this);if(a.attr("data-parallaxanimation")){null==D&&(D=[]),D.push(a);var b=a.attr("data-parallaxanimation");try{eval("window.aux_opts2 = "+b)}catch(e){console.info(e),window.aux_opts2=null}if(window.aux_opts2){for(n=0;n<window.aux_opts2.length;n++)0==isNaN(Number(window.aux_opts2[n].initial))&&(window.aux_opts2[n].initial=Number(window.aux_opts2[n].initial)),0==isNaN(Number(window.aux_opts2[n].mid))&&(window.aux_opts2[n].mid=Number(window.aux_opts2[n].mid)),0==isNaN(Number(window.aux_opts2[n]["final"]))&&(window.aux_opts2[n]["final"]=Number(window.aux_opts2[n]["final"]));a.data("parallax_options",window.aux_opts2)}}}),W&&(N=!0,setTimeout(function(){N=!1},W)),a.hasClass("simple-parallax")?l.wrap('<div class="simple-parallax-inner"></div>'):O(),fa=setInterval(p,1e3),setTimeout(function(){},1500),a.hasClass("use-loading")){if(0<a.find(".divimage").length||0<a.children("img").length){if(0<a.find(".divimage").length){V&&a.find(".divimage").eq(0).css("background-image","url("+V+")");var d=String(a.find(".divimage").eq(0).css("background-image")).split('"')[1];void 0==d&&(d=String(a.find(".divimage").eq(0).css("background-image")).split("url(")[1],d=String(d).split(")")[0]);var e=new Image;e.onload=function(e){a.addClass("loaded")},e.src=d}}else a.addClass("loaded");setTimeout(function(){a.addClass("loaded"),ga()},1e4)}a.get(0).api_set_update_func=function(e){C=e},a.get(0).api_handle_scroll=t,a.get(0).api_destroy=la,a.get(0).api_destroy_listeners=ma,"scroll"==b.settings_mode&&(c(window).unbind("scroll",t),c(window).bind("scroll",t),t(),setTimeout(t,1e3),document&&document.addEventListener&&document.addEventListener("touchmove",X,!1)),"mouse_body"!=b.settings_mode&&"on"!=b.settings_movexaftermouse||c(document).bind("mousemove",X)}}function la(){C=null,ha=!0,C=null,c(window).unbind("scroll",t),document&&document.addEventListener&&document.removeEventListener("touchmove",X,!1)}function p(){Y=!0}function ma(){clearInterval(fa)}function ea(){m=a.width(),r=c(window).height(),Z=c(window).width(),!1!==I&&(H&&M&&(H>m?a.height(m/H*M):a.height(M)),760>m?a.addClass("under-760"):a.removeClass("under-760"),aa&&clearTimeout(aa),aa=setTimeout(ga,700),"on"==b.js_breakout&&(a.css("width",Z+"px"),a.css("margin-left","0"),0<a.offset().left&&a.css("margin-left","-"+a.offset().left+"px")))}function ga(){f=a.height(),g=l.height(),r=c(window).height(),b.settings_substract_from_th&&(g-=b.settings_substract_from_th),0==a.hasClass("allbody")&&0==a.hasClass("dzsparallaxer---window-height")&&0==H&&(U>=g&&g>0?(a.height(g),f=a.height(),is_ie()&&10>=version_ie()?l.css("top","0"):l.css("transform","translate3d(0,0px,0)"),F&&F.css("opacity","0")):a.height(U)),l.attr("data-forcewidth_ratio")&&(l.width(Number(l.attr("data-forcewidth_ratio"))*l.height()),l.width()<a.width()&&l.width(a.width()))}function X(e){if("mouse_body"==b.settings_mode){d=e.pageY;var a=0;if(0==g)return;a=d/r*(f-g),z=d/f,a>0&&(a=0),f-g>a&&(a=f-g),z>1&&(z=1),0>z&&(z=0),P=a}"on"==b.settings_movexaftermouse&&(a=0,a=e.pageX/Z*(m-G),a>0&&(a=0),m-G>a&&(a=m-G),ia=a)}function t(e,t){d=c(window).scrollTop(),q=0,w&&(d=-parseInt(w.css("top"),10)),isNaN(d)&&(d=0),e&&"on"==b.init_functional_remove_delay_on_scroll&&(N=!1);var i={force_vi_y:null,from:"",force_ch:null,force_th:null};if(t&&(i=c.extend(i,t)),null!=i.force_ch&&(f=i.force_ch),null!=i.force_th&&(g=i.force_th),!1===I&&(r=c(window).height(),d+r>=a.offset().top&&E()),0!=g&&!1!==I&&"scroll"==b.settings_mode){"fromtop"==b.mode_scroll&&(q=d/f*(f-g),"on"==b.is_fullscreen&&(q=d/(c("body").height()-r)*(f-g),w&&(q=d/(w.height()-r)*(f-g))),"reverse"==b.direction&&(q=(1-d/f)*(f-g),"on"==b.is_fullscreen&&(q=(1-d/(c("body").height()-r))*(f-g),w&&(q=(1-d/(w.height()-r))*(f-g))))),A=a.offset().top,w&&(A=-parseInt(w.css("top"),10));var s=(d-(A-r))/(A+f-(A-r));if("on"==b.is_fullscreen&&(s=d/(c("body").height()-r),w&&(s=d/(w.outerHeight()-r))),s>1&&(s=1),0>s&&(s=0),D)for(n=0;n<D.length;n++){var o=D[n],u=o.data("parallax_options");if(u)for(var h=0;h<u.length;h++){if(.5>=s){var p=2*s,_=2*s-1;0>_&&(_=-_),p=_*u[h].initial+p*u[h].mid}else p=2*(s-.5),_=p-1,0>_&&(_=-_),p=_*u[h].mid+p*u[h]["final"];_=u[h].value,_=_.replace("{{val}}",p),o.css(u[h].property,_)}}"normal"==b.mode_scroll&&(q=s*(f-g),"reverse"==b.direction&&(q=(1-s)*(f-g)),a.hasClass("debug-target")&&console.info(b.mode_scroll,d,A,r,f,A+f,s)),T&&(s=Math.abs((d-A)/a.outerHeight()-1),s>1&&(s=1),0>s&&(s=0),T.css("opacity",s)),z=d/f,q>0&&(q=0),f-g>q&&(q=f-g),z>1&&(z=1),0>z&&(z=0),i.force_vi_y&&(q=i.force_vi_y),P=q,ja=z,0===y&&(v=P,is_ie()&&10>=version_ie()?l.css("top",""+v+"px"):l.css("transform","translate3d(0,"+v+"px,0)"))}}function O(){return N?(requestAnimFrame(O),!1):(isNaN(v)&&(v=0),Y&&(Y=!1),0===y?(C&&C(v),requestAnimFrame(O),!1):(J=v,Q=P-J,K=L,R=ja-K,"easeIn"==b.easing&&(v=Number(Math.easeIn(1,J,Q,y).toFixed(5)),L=Number(Math.easeIn(1,K,R,y).toFixed(5))),"easeOutQuad"==b.easing&&(v=Math.easeOutQuad(1,J,Q,y),L=Math.easeOutQuad(1,K,R,y)),"easeInOutSine"==b.easing&&(v=Math.easeInOutSine(1,J,Q,y),L=Math.easeInOutSine(1,K,R,y)),S=0,"on"==b.settings_movexaftermouse&&(ba=S,ka=ia-ba,S=Math.easeIn(1,ba,ka,y)),is_ie()&&10>=version_ie()?l.css("top",""+v+"px"):l.css("transform","translate3d("+S+"px,"+v+"px,0)"),F&&F.css("opacity",L),C&&C(v),ha?!1:void requestAnimFrame(O)))}var a=c(this),l=null,F=null,T=null,n=0,G=0,g=0,f=0,m=G=0,Z=0,r=0,U=0,aa=0,y=0,v=0,S=0,L=0,J=0,ba=0,K=0,P=0,ia=0,ja=0,Q=0,ka=0,R=0,C=null,w=null,d=0,q=0,z=0,A=0,V="",I=!1,Y=!1,D=null,ha=!1,N=!1,ca=0,W=0,fa=0,H=0,M=0,ca=Number(b.init_delay),W=Number(b.init_functional_delay);ca?setTimeout(h,ca):h()})},window.dzsprx_init=function(e,a){if("undefined"!=typeof a&&"undefined"!=typeof a.init_each&&1==a.init_each){var t,i=0;for(t in a)i++;1==i&&(a=void 0),c(e).each(function(){c(this).dzsparallaxer(a)})}else c(e).dzsparallaxer(a)}}(jQuery),window.requestAnimFrame=function(){return window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||function(e){window.setTimeout(e,1e3/60)}}(),jQuery(document).ready(function(e){e(".dzsparallaxer---window-height").each(function(){function a(){var a=e(window).height();t.height(a)}var t=e(this);e(window).bind("resize",a),a()}),dzsprx_init(".dzsparallaxer.auto-init",{init_each:!0})});
