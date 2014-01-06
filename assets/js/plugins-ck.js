// Avoid `console` errors in browsers that lack a console.
(!window.console||!console.log)&&function(){var e=function(){},t=["assert","clear","count","debug","dir","dirxml","error","exception","group","groupCollapsed","groupEnd","info","log","markTimeline","profile","profileEnd","markTimeline","table","time","timeEnd","timeStamp","trace","warn"],n=t.length,r=window.console={};while(n--)r[t[n]]=e}();$(function(){$("a[href*=#]:not([href=#])").click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var e=$(this.hash);e=e.length?e:$("[name="+this.hash.slice(1)+"]");if(e.length){$("html,body").animate({scrollTop:e.offset().top},1e3);return!1}}})});(function(e){var t={topSpacing:0,bottomSpacing:0,className:"is-sticky",wrapperClassName:"sticky-wrapper"},n=e(window),r=e(document),i=[],s=n.height(),o=function(){var e=n.scrollTop(),t=r.height(),o=t-s,u=e>o?o-e:0;for(var a=0;a<i.length;a++){var f=i[a],l=f.stickyWrapper.offset().top,c=l-f.topSpacing-u;if(e<=c){if(f.currentTop!==null){f.stickyElement.css("position","").css("top","").removeClass(f.className);f.stickyElement.parent().removeClass(f.className);f.currentTop=null}}else{var h=t-f.stickyElement.outerHeight()-f.topSpacing-f.bottomSpacing-e-u;h<0?h+=f.topSpacing:h=f.topSpacing;if(f.currentTop!=h){f.stickyElement.css("position","fixed").css("top",h).addClass(f.className);f.stickyElement.parent().addClass(f.className);f.currentTop=h}}}},u=function(){s=n.height()},a={init:function(n){var r=e.extend(t,n);return this.each(function(){var t=e(this);stickyId=t.attr("id");wrapper=e("<div></div>").attr("id",stickyId+"-sticky-wrapper").addClass(r.wrapperClassName);t.wrapAll(wrapper);var n=t.parent();n.css("height",t.outerHeight());i.push({topSpacing:r.topSpacing,bottomSpacing:r.bottomSpacing,stickyElement:t,currentTop:null,stickyWrapper:n,className:r.className})})},update:o};if(window.addEventListener){window.addEventListener("scroll",o,!1);window.addEventListener("resize",u,!1)}else if(window.attachEvent){window.attachEvent("onscroll",o);window.attachEvent("onresize",u)}e.fn.sticky=function(t){if(a[t])return a[t].apply(this,Array.prototype.slice.call(arguments,1));if(typeof t=="object"||!t)return a.init.apply(this,arguments);e.error("Method "+t+" does not exist on jQuery.sticky")};e(function(){setTimeout(o,0)})})(jQuery);(function(e){var t=!1,n=!1,r={isUrl:function(e){var t=RegExp("^(https?:\\/\\/)?((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|((\\d{1,3}\\.){3}\\d{1,3}))(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*(\\?[;&a-z\\d%_.~+=-]*)?(\\#[-a-z\\d_]*)?$","i");return t.test(e)?!0:!1},loadContent:function(e,t){e.html(t)},addPrefix:function(e){var t=e.attr("id"),n=e.attr("class");"string"==typeof t&&""!==t&&e.attr("id",t.replace(/([A-Za-z0-9_.\-]+)/g,"sidr-id-$1")),"string"==typeof n&&""!==n&&"sidr-inner"!==n&&e.attr("class",n.replace(/([A-Za-z0-9_.\-]+)/g,"sidr-class-$1")),e.removeAttr("style")},execute:function(r,s,o){"function"==typeof s?(o=s,s="sidr"):s||(s="sidr");var u,a,f,l=e("#"+s),c=e(l.data("body")),h=e("html"),p=l.outerWidth(!0),d=l.data("speed"),v=l.data("side");if("open"===r||"toogle"===r&&!l.is(":visible")){if(l.is(":visible")||t)return;if(n!==!1)return i.close(n,function(){i.open(s)}),void 0;t=!0,"left"===v?(u={left:p+"px"},a={left:"0px"}):(u={right:p+"px"},a={right:"0px"}),f=h.scrollTop(),h.css("overflow-x","hidden").scrollTop(f),c.css({width:c.width(),position:"absolute"}).animate(u,d),l.css("display","block").animate(a,d,function(){t=!1,n=s,"function"==typeof o&&o(s)})}else{if(!l.is(":visible")||t)return;t=!0,"left"===v?(u={left:0},a={left:"-"+p+"px"}):(u={right:0},a={right:"-"+p+"px"}),f=h.scrollTop(),h.removeAttr("style").scrollTop(f),c.animate(u,d),l.animate(a,d,function(){l.removeAttr("style"),c.removeAttr("style"),e("html").removeAttr("style"),t=!1,n=!1,"function"==typeof o&&o(s)})}}},i={open:function(e,t){r.execute("open",e,t)},close:function(e,t){r.execute("close",e,t)},toogle:function(e,t){r.execute("toogle",e,t)}};e.sidr=function(t){return i[t]?i[t].apply(this,Array.prototype.slice.call(arguments,1)):"function"!=typeof t&&"string"!=typeof t&&t?(e.error("Method "+t+" does not exist on jQuery.sidr"),void 0):i.toogle.apply(this,arguments)},e.fn.sidr=function(t){var n=e.extend({name:"sidr",speed:200,side:"left",source:null,renaming:!0,body:"body"},t),s=n.name,u=e("#"+s);if(0===u.length&&(u=e("<div />").attr("id",s).appendTo(e("body"))),u.addClass("sidr").addClass(n.side).data({speed:n.speed,side:n.side,body:n.body}),"function"==typeof n.source){var a=n.source(s);r.loadContent(u,a)}else if("string"==typeof n.source&&r.isUrl(n.source))e.get(n.source,function(e){r.loadContent(u,e)});else if("string"==typeof n.source){var f="",l=n.source.split(",");if(e.each(l,function(t,n){f+='<div class="sidr-inner">'+e(n).html()+"</div>"}),n.renaming){var c=e("<div />").html(f);c.find("*").each(function(t,n){var i=e(n);r.addPrefix(i)}),f=c.html()}r.loadContent(u,f)}else null!==n.source&&e.error("Invalid Sidr Source");return this.each(function(){var t=e(this),n=t.data("sidr");n||(t.data("sidr",s),t.click(function(e){e.preventDefault(),i.toogle(s)}))})}})(jQuery);jQuery(document).ready(function(e){e(".older a").on("click",function(t){t.preventDefault();e(".navigation").prepend('<div class="loader">&nbsp;</div>');var n=e(this).attr("href"),r="#work_items",i=".navigation",s=".navigation .older a",o=e(s).attr("href");e.get(n+"",function(t){var n=(new Date).getTime(),u=e(r,t).wrapInner("").html();e(".navigation .loader").remove();o=e(s,t).attr("href");e(i).before(u);e("#rtz-"+n).hide().fadeIn("slow");if(o)e(".older a").attr("href",o);else{e(".older a").remove();e(".older").append('<div class="btn disabled">no more posts</div>')}e("#work_items .navigation:last").remove()})})});