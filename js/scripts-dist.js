/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var element,id=location.hash.substring(1);/^[A-z0-9_-]+$/.test(id)&&(element=document.getElementById(id))&&(/^(?:a|select|input|button|textarea)$/i.test(element.tagName)||(element.tabIndex=-1),element.focus())},!1);var Chameleon={noOfColors:12,duration:6,init:function(){Chameleon.bodyElement=jQuery("body"),Chameleon.colorT=0,Chameleon.changeColor()},changeColor:function(){Chameleon.bodyElement.removeClass("color"+Chameleon.colorT%Chameleon.noOfColors),Chameleon.colorT++,Chameleon.bodyElement.addClass("color"+Chameleon.colorT%Chameleon.noOfColors),setTimeout(Chameleon.changeColor,1e3*Chameleon.duration)}};Chameleon.init();