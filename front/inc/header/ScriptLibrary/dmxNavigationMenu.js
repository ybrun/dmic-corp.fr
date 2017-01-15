/*
 Universal CSS Navigation Menu
 Version: 1.0.8
 (c) 2012 DMXzone.com
 @build 15-05-2012 14:44:29
*/
(function(a){function F(b){var a=window.location;if(-1===b.indexOf("://"))if("/"===b.charAt(0))b=a.protocol+"//"+a.host+b;else if("#"===b.charAt(0))b=a.protocol+"//"+a.host+a.pathname+a.search+b;else{for(var b=(a.pathname.substring(0,a.pathname.lastIndexOf("/")+1)+b).split("/"),e=b.length-1;0<e;--e)".."===b[e]&&b.splice(e-1,2);b=a.protocol+"//"+a.host+b.join("/")}this.href=b;this.hash=this.search=this.pathname=this.host=this.port=this.hostname=this.protocol="";a=b.indexOf("//");if(-1<a&&(this.protocol=
b.substring(0,a),b=b.substring(a+2),a=b.indexOf("/"),-1===a&&(a=b.length),this.host=b.substring(0,a),b=b.substring(a),a=this.host.split(":"),this.hostname=a[0],1<a.length))this.port=a[1];a=b.indexOf("?");if(-1<a){if(this.pathname=b.substring(0,a),this.search=b.substring(a),a=this.search.indexOf("#"),-1<a&&(this.hash=this.search.substring(a),this.search=this.search.substring(0,a)),1===this.search.length&&(this.search=""),1===this.hash.length)this.hash=""}else this.pathname=b,a=b.indexOf("#"),-1<a&&
(this.hash=b.substring(a),this.pathname=b.substring(0,a),1===this.hash.length&&(this.hash=""));this.toString=function(){return this.href}}a.fn.extend({dmxNavigationMenu:function(b){return this.each(function(){a.extend(this,new a.dmxNavigationMenu(this,b))})}});a.fn.hoverIntent=function(b,c){var e={sensitivity:7,interval:100,timeout:0},e=a.extend(e,c?{over:b,out:c}:b),k,i,m,j,q=function(a){k=a.pageX;i=a.pageY},p=function(b,c){c.hoverIntent_t=clearTimeout(c.hoverIntent_t);if(Math.abs(m-k)+Math.abs(j-
i)<e.sensitivity)return a(c).unbind("mousemove",q),c.hoverIntent_s=1,e.over.apply(c,[b]);m=k;j=i;c.hoverIntent_t=setTimeout(function(){p(b,c)},e.interval)},v=function(b){for(var c=("mouseover"==b.type?b.fromElement:b.toElement)||b.relatedTarget;c&&c!=this;)try{c=c.parentNode}catch(k){c=this}if(c==this)return!1;var i=a.extend({},b),g=this;g.hoverIntent_t&&(g.hoverIntent_t=clearTimeout(g.hoverIntent_t));"mouseover"==b.type?(m=i.pageX,j=i.pageY,a(g).bind("mousemove",q),1!=g.hoverIntent_s&&(g.hoverIntent_t=
setTimeout(function(){p(i,g)},e.interval))):(a(g).unbind("mousemove",q),1==g.hoverIntent_s&&(g.hoverIntent_t=setTimeout(function(){g.hoverIntent_t=clearTimeout(g.hoverIntent_t);g.hoverIntent_s=0;e.out.apply(g,[i])},e.timeout)))};return this.mouseover(v).mouseout(v)};a.fn.extend({fixPNG:function(){return void 0==window.XMLHttpRequest&&void 0!=ActiveXObject?this.each(function(){if("IMG"==this.nodeName){var b=a(this),c=b.attr("src");if(/\.png$/i.test(c)){var c=b.attr("id")?'id="'+b.attr("id")+'" ':"",
e=this.className?'class="'+this.className+'" ':"",b=b.attr("title")?'title="'+b.attr("title")+'" ':'title="'+b.attr("alt")+'" ',k=this.style.cssText+";display:inline-block;";"left"==this.align&&(k+="float:left;");"right"==this.align&&(k+="float:right");this.parentElement.href&&(k+="cursor:hand;");this.outerHTML="<span "+c+e+b+' style="width:'+this.getAttribute("width",2)+"px;height:"+this.getAttribute("height",2)+"px;"+k+"filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='"+this.src+"', sizingMethod='scale');\"></span>"}}}):
this}});a.dmxNavigationMenu=function(b,c){function e(b,d){if(a.isArray(b)){for(var c=0;c<b.length;++c)if(!e(b[c],d))return!1;return!0}for(c=0;c<d.length;++c)if(d[c]===b)return!0;return!1}function k(a,b){for(;a!=b&&a.parentNode;)a=a.parentNode;return a==b}function i(n){a(".contextMenu").hide().find(".active").each(function(){a(this).removeClass("active");a(">ul",this).stop(!0,!0).hide()});if(n.target&&!k(n.target,f.get(0))&&n.which=={left:1,middle:2,right:3}[c.contextButton]){var d,l,o=a(window).width(),
e=a(window).height(),h=a(n.target).offset(),r=h.top-a(document).scrollTop(),g=e-(r+a(n.target).outerHeight()),i=h.left-a(document).scrollLeft(),j=o-(i+a(n.target).outerWidth());switch(c.contextPosition){case "top":d=h.top-a(b).outerHeight();l=h.left;r<a(b).outerHeight(!0)&&g>r&&(d=h.top+a(n.target).outerHeight());o-i<a(b).outerWidth(!0)&&(l=h.left-(i-(o-a(b).outerWidth(!0))));break;case "bottom":d=h.top+a(n.target).outerHeight();l=h.left;g<a(b).outerHeight(!0)&&r>g&&(d=h.top-a(b).outerHeight(!0));
o-i<a(b).outerWidth(!0)&&(l=h.left-(i-(o-a(b).outerWidth(!0))));break;case "left":d=h.top;l=h.left-a(b).outerWidth();e-r<a(b).outerHeight(!0)&&(d=h.top-(r-(e-a(b).outerHeight(!0))));j<a(b).outerWidth(!0)&&j>i&&(l=h.left+a(n.target).outerWidth());break;case "right":d=h.top;l=h.left+a(n.target).outerWidth();e-r<a(b).outerHeight(!0)&&(d=h.top-(r-(e-a(b).outerHeight(!0))));j<a(b).outerWidth(!0)&&i>j&&(l=h.left-a(b).outerWidth(!0));break;default:d=n.pageY,l=n.pageX}a(b).css({top:d,left:l}).show();return!1}}
function m(c){c.target&&!k(c.target,f.get(0))&&a(b).hide().find(".active").each(function(){a(this).removeClass("active");a(">ul",this).stop(!0,!0).hide()})}function j(){f.find(".hover").removeClass("hover");f.find("a[tabindex=0]").attr("tabindex",-1);a(this).attr("tabindex",0).parent("li").addClass("hover");a(this).addClass("hover")}function q(b){var d=a(b.target),c=d.parent(),o=d.closest("ul.sub,ul.mega,ul.menu");if(0<o.length){if(o.hasClass("horizontal"))switch(b.which){case 37:p(d);break;case 39:v(d);
break;case 38:case 40:1===a(">ul",c).length&&(c.siblings(".active").each(function(){a(this).removeClass("active");a(">ul",this).stop(!0,!0).hide()}),c.addClass("active"),s(c),40===b.which?c.find(">ul>li:has(>a):first>a").trigger("focus"):c.find(">ul>li:has(>a):last>a").trigger("focus"))}else switch(b.which){case 38:p(d);break;case 40:v(d);break;case 37:f.hasClass("sub_left")?1===a(">ul",c).length&&(c.siblings(".active").each(function(){a(this).removeClass("active");a(">ul",this).stop(!0,!0).hide()}),
c.addClass("active"),s(c),c.find(">ul>li>a:first").trigger("focus")):(d=c.parents("li").eq(0),d.closest("ul").hasClass("menu")&&f.hasClass("horizontal")?p(d.find(">a")):d.find(">a").trigger("focus"),g(d));break;case 39:f.hasClass("sub_left")?(d=c.parents("li").eq(0),d.find(">a").trigger("focus"),g(d)):1===a(">ul",c).length&&(c.siblings(".active").each(function(){a(this).removeClass("active");a(">ul",this).stop(!0,!0).hide()}),c.addClass("active"),s(c),c.find(">ul>li>a:first").trigger("focus"))}27===
b.keyCode&&(o.hasClass("menu")?g(o.parents("li").eq(0)):f.find("ul.sub,ul.mega").each(function(){g(a(this).parents("li").eq(0))}),b.stopPropagation())}}function p(a){var b=a.parent(),a=b.parent().children(":has(>a)"),b=a.index(b)-1;0>b&&(b=a.length-1);a.eq(b).find(">a").trigger("focus")}function v(a){var b=a.parent(),a=b.parent().children(":has(>a)"),b=a.index(b)+1;b>=a.length&&(b=0);a.eq(b).find(">a").trigger("focus")}function G(){f.find("a.selected").removeClass("selected");a(this).addClass("selected");
f.find("a.selected").parents("ul").parent().find(">a").addClass("selected")}function D(b){if(!b.originalTarget||k(b.originalTarget,b.currentTarget)){b.stopPropagation();var c=a(b.currentTarget),l=0<c.find(">ul.sub,>ul.mega").length?!0:!1,o=!c.hasClass("active");b.currentTarget!=document?c.siblings(".active").each(function(){a(this).trigger("click")}):f.find(">li.active").each(function(){a(this).trigger("click")});if(l)return o?(c.addClass("active"),s(c)):(c.removeClass("active"),c.find(".active").each(function(){a(this).removeClass("active");
a(">ul",this).stop(!0,!0).hide()}),g(c)),!1}}function A(b){var c=a(b.currentTarget),l=0<c.find(">ul.sub,>ul.mega").length?!0:!1;(b="mouseover"==b.type?!0:!1)&&c.siblings(".active").each(function(){this.hoverIntent_t=clearTimeout(this.hoverIntent_t);this.hoverIntent_s=0;var b=new a.Event("mouseout");b.currentTarget=this;A(b)});l&&(b?(c.addClass("active"),s(c)):(c.removeClass("active"),c.find(".active").each(function(){this.hoverIntent_t=clearTimeout(this.hoverIntent_t);this.hoverIntent_s=0;a(this).removeClass("active");
a(">ul",this).stop(!0,!0).hide()}),g(c)))}function s(b){var d=b.find(">ul.sub,>ul.mega"),l,e,i=a(window).width();e=a(window).height();s&&d.show();var h=d.offsetParent();s&&d.hide();l=h.offset();var g=l.top-a(document).scrollTop(),k=e-(g+h.outerHeight()),j=l.left-a(document).scrollLeft(),m=i-(j+h.outerWidth());d.parents("ul:first").hasClass("horizontal")?(f.hasClass("main_up")?(d.data("direction","up"),l="-"+d.outerHeight(!0)+"px",g<d.outerHeight(!0)&&k>g&&(l=h.outerHeight()+"px",d.data("direction",
"down"))):(d.data("direction","down"),l=h.outerHeight()+"px",k<d.outerHeight(!0)&&g>k&&(l="-"+d.outerHeight(!0)+"px",d.data("direction","up"))),f.hasClass("sub_left"))?(e=h.outerWidth()-d.outerWidth(!0)+"px",i-m<d.outerWidth(!0)&&(e="-"+j+"px")):(e="0px",i-j<d.outerWidth(!0)&&(e="-"+(j-(i-d.outerWidth(!0)))+"px")):(f.hasClass("main_up")?(l="-"+(d.outerHeight(!0)-h.outerHeight())+"px",0>g-(d.outerHeight(!0)-h.outerHeight())&&(l="-"+g+"px")):(l="0px",e-g<d.outerHeight(!0)&&(l="-"+(g-(e-d.outerHeight(!0)))+
"px")),f.hasClass("sub_left"))?(d.data("direction","left"),e="-"+(d.outerWidth()-5)+"px",j<d.outerWidth(!0)-5&&m>j&&(e=h.outerWidth()-5+"px",d.data("direction","right"))):(d.data("direction","right"),e=h.outerWidth()-5+"px",m<d.outerWidth(!0)-5&&j>m&&(e="-"+(d.outerWidth(!0)-5)+"px",d.data("direction","left")));d.css({top:l,left:e,bottom:"auto",right:"auto"});b.hasClass("main")?(effect=c.mainShowEffect,duration=c.mainShowDuration,easing=c.mainShowEasing):(effect=c.subShowEffect,duration=c.subShowDuration,
easing=c.subShowEasing);if(a.dmxNavigationMenu.effects[effect])a.dmxNavigationMenu.effects[effect](d,!0,duration,easing);else d.show();c.useAria&&d.attr("aria-hidden","false")}function g(b){var d=b.find(">ul.sub,>ul.mega");b.hasClass("main")?(effect=c.mainHideEffect,duration=c.mainHideDuration,easing=c.mainHideEasing):(effect=c.subHideEffect,duration=c.subHideDuration,easing=c.subHideEasing);if(a.dmxNavigationMenu.effects[effect])a.dmxNavigationMenu.effects[effect](d,!1,duration,easing);else d.hide();
c.useAria&&d.attr("aria-hidden","true")}c=a.extend({},a.dmxNavigationMenu.defaults,c);a(b).addClass("dmxNavigationMenu");a("img",b).fixPNG();a(b).hasClass("contextMenu")&&("right"==c.contextButton&&(document.oncontextmenu=function(){return!1}),a(c.contextTarget).attr("role","menubutton").attr("aria-haspopup","true").bind("mousedown",i),a(document).bind("mousedown",m),a(b).appendTo("body").css({position:"absolute"}).hide());var f=a(">ul",b),w=f.children("li");c.useAria&&(a(b).hasClass("contextMenu")?
f.attr({role:"menu","aria-hidden":"true"}):f.hasClass("horizontal")?f.attr("role","menubar"):f.attr("role","menu"),f.find("ul.sub, ul.mega").attr({role:"menu","aria-hidden":"true"}),f.find("li").attr("role","decoration"),f.find("li > a").attr({role:"menuitem",tabindex:"-1"}).eq(0).attr("tabindex","0"),f.find("a + ul").prev().attr("aria-haspopup","true"),c.keyboard=!0);a("ul.icon-top>li>a:not(.icon-left)",b).addClass("icon-top");a("li:not([class],:has(>a))",b).addClass("label");w.addClass("main");
if(c.showSelected){for(var w=a("a",b),x=[],B=0;B<w.length;++B){var C=w.eq(B),t=C.attr("href");if(t&&!(2>t.length)){var y=window.location,u=new F(t);if(y.toString()===u.toString()){x=[];C.addClass("selected");break}if(!(-1<t.indexOf("://")&&y.hostname!==u.hostName)&&y.pathname===u.pathname){var z=0,t=0,z=y.search.substring(1).replace("&amp;","&").split("&"),E=u.search.substring(1).replace("&amp;","&").split("&");e(E,z)&&(z=E.length,0<u.hash.length&&u.hash===y.hash&&(t=1),x.push({j:C,q:z,h:t}))}}}0<
x.length&&(x.sort(function(b,a){return b.q==a.q?b.h==a.h?0:b.h<a.h?1:-1:b.q<a.q?1:-1}),x[0].j.addClass("selected"));f.find("a.selected").parents("ul").parent().find(">a").addClass("selected");w.bind("click.menu",G)}f.find("ul").each(function(){var b=a(this).attr("style");/\bwidth\b/i.test(b)||a(this).css({width:c.menuWidth})});f.find("ul.mega").each(function(){var b=a(">li",this),d=a(this).attr("class").match(/\bcols-(\d+)\b/),e=d&&d.length>1?parseInt(d[1]):b.index(b.filter(function(){return this.style.clear==
"left"}));e==-1?e=b.length:b.css({clear:""}).filter(":nth-child("+e+"n)+li").css({clear:"left"});for(var g=[],d=0;d<e;++d)g[d]=0;var d=b.eq(0).find(">ul").eq(0),f=parseFloat(d.css("paddingLeft"))||0,f=f+(parseFloat(d.css("paddingRight"))||0),f=f+(parseFloat(d.css("borderLeftWidth"))||0),f=f+(parseFloat(d.css("borderRightWidth"))||0),f=f+(parseFloat(d.css("marginLeft"))||0),f=f+(parseFloat(d.css("marginRight"))||0);b.each(function(b){var d=parseFloat(a(">ul",this).css("width"))||c.menuWidth;g[b%e]<
d&&(g[b%e]=d)}).each(function(b){a(this).width(g[b%e]+f)});var h=e*f;a.each(g,function(){h=h+this});a(this).css({width:h})});f.find("li:has(>ul.mega,>ul.sub)>a").each(function(){var b=a(this).addClass("expandable");b.is(":has(span[class^=sub_])")||(b.closest("ul").hasClass("horizontal")?b.append('<span class="sub_down"></span>'):b.append('<span class="sub_right"></span>'))});a("ul.sub,ul.mega",b).hide();f.find("li.active>ul").show();c.showOnMouseOver?f.find("li").hoverIntent({over:A,out:A,timeout:c.timeout}):
(f.find("li").click(D),a(document).click(D));c.keyboard&&(f.find("li>a").mouseover(function(){a(this).focus()}),f.find("li>a").focus(j),f.bind("keydown",q))};a.dmxNavigationMenu.effects={fade:function(b,a,e,k){b.stop(!0,!0).animate({opacity:a?"show":"hide"},{duration:e,easing:k})},slide:function(b,a,e,k){b.stop(!0,!0);var i="down"==b.data("direction")||"right"==b.data("direction");a&&b.show();var m=parseFloat(b.css("top")),j=parseFloat(b.css("left"));a&&b.hide();var q=b.outerWidth(!0),p=b.outerHeight(!0);
b.parents("ul:first").hasClass("horizontal")?(a&&!i&&b.css({top:m+p}),b.animate({height:a?"show":"hide",marginTop:a?"show":"hide",marginBottom:a?"show":"hide",paddingTop:a?"show":"hide",paddingBottom:a?"show":"hide",top:i?m:(a?"-=":"+=")+p+"px"},{duration:e,easing:k})):(a&&!i&&b.css({left:j+q}),b.animate({width:a?"show":"hide",marginLeft:a?"show":"hide",marginRight:a?"show":"hide",paddingLeft:a?"show":"hide",paddingRight:a?"show":"hide",left:i?j:(a?"-=":"+=")+q+"px"},{duration:e,easing:k}))},jump:function(b,
a,e,k){b.stop(!0,!0);var i="down"==b.data("direction")||"right"==b.data("direction"),m=i?"+=100px":"-=100px";if(b.parents("ul:first").hasClass("horizontal")){a&&b.show();var j=parseFloat(b.css("top"));a&&b.hide();a&&b.css({top:i?j+100:j-100});b.animate({top:a?j:m,opacity:a?"show":"hide"},{duration:e,easing:k})}else a&&b.show(),j=parseFloat(b.css("left")),a&&b.hide(),a&&b.css({left:i?j+100:j-100}),b.animate({left:a?j:m,opacity:a?"show":"hide"},{duration:e,easing:k})}};a.dmxNavigationMenu.defaults=
{menuWidth:150,timeout:500,showSelected:!0,showOnMouseOver:!0,keyboard:!1,useAria:!1,contextTarget:document,contextPosition:"mouse",contextButton:"right",mainShowEffect:"show",mainShowDuration:"",mainShowEasing:"swing",mainHideEffect:"hide",mainHideDuration:"",mainHideEasing:"swing",subShowEffect:"show",subShowDuration:"",subShowEasing:"swing",subHideEffect:"hide",subHideDuration:"",dubHideEasing:"swing"}})(jQuery);