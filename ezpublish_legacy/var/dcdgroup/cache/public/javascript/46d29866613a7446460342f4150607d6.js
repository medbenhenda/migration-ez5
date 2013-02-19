
(function(a,b){function G(a){var b=F[a]={};return p.each(a.split(s),function(a,c){b[c]=!0}),b}function J(a,c,d){if(d===b&&a.nodeType===1){var e="data-"+c.replace(I,"-$1").toLowerCase();d=a.getAttribute(e);if(typeof d=="string"){try{d=d==="true"?!0:d==="false"?!1:d==="null"?null:+d+""===d?+d:H.test(d)?p.parseJSON(d):d}catch(f){}p.data(a,c,d)}else d=b}return d}function K(a){var b;for(b in a){if(b==="data"&&p.isEmptyObject(a[b]))continue;if(b!=="toJSON")return!1}return!0}function ba(){return!1}function bb(){return!0}function bh(a){return!a||!a.parentNode||a.parentNode.nodeType===11}function bi(a,b){do a=a[b];while(a&&a.nodeType!==1);return a}function bj(a,b,c){b=b||0;if(p.isFunction(b))return p.grep(a,function(a,d){var e=!!b.call(a,d,a);return e===c});if(b.nodeType)return p.grep(a,function(a,d){return a===b===c});if(typeof b=="string"){var d=p.grep(a,function(a){return a.nodeType===1});if(be.test(b))return p.filter(b,d,!c);b=p.filter(b,d)}return p.grep(a,function(a,d){return p.inArray(a,b)>=0===c})}function bk(a){var b=bl.split("|"),c=a.createDocumentFragment();if(c.createElement)while(b.length)c.createElement(b.pop());return c}function bC(a,b){return a.getElementsByTagName(b)[0]||a.appendChild(a.ownerDocument.createElement(b))}function bD(a,b){if(b.nodeType!==1||!p.hasData(a))return;var c,d,e,f=p._data(a),g=p._data(b,f),h=f.events;if(h){delete g.handle,g.events={};for(c in h)for(d=0,e=h[c].length;d<e;d++)p.event.add(b,c,h[c][d])}g.data&&(g.data=p.extend({},g.data))}function bE(a,b){var c;if(b.nodeType!==1)return;b.clearAttributes&&b.clearAttributes(),b.mergeAttributes&&b.mergeAttributes(a),c=b.nodeName.toLowerCase(),c==="object"?(b.parentNode&&(b.outerHTML=a.outerHTML),p.support.html5Clone&&a.innerHTML&&!p.trim(b.innerHTML)&&(b.innerHTML=a.innerHTML)):c==="input"&&bv.test(a.type)?(b.defaultChecked=b.checked=a.checked,b.value!==a.value&&(b.value=a.value)):c==="option"?b.selected=a.defaultSelected:c==="input"||c==="textarea"?b.defaultValue=a.defaultValue:c==="script"&&b.text!==a.text&&(b.text=a.text),b.removeAttribute(p.expando)}function bF(a){return typeof a.getElementsByTagName!="undefined"?a.getElementsByTagName("*"):typeof a.querySelectorAll!="undefined"?a.querySelectorAll("*"):[]}function bG(a){bv.test(a.type)&&(a.defaultChecked=a.checked)}function bY(a,b){if(b in a)return b;var c=b.charAt(0).toUpperCase()+b.slice(1),d=b,e=bW.length;while(e--){b=bW[e]+c;if(b in a)return b}return d}function bZ(a,b){return a=b||a,p.css(a,"display")==="none"||!p.contains(a.ownerDocument,a)}function b$(a,b){var c,d,e=[],f=0,g=a.length;for(;f<g;f++){c=a[f];if(!c.style)continue;e[f]=p._data(c,"olddisplay"),b?(!e[f]&&c.style.display==="none"&&(c.style.display=""),c.style.display===""&&bZ(c)&&(e[f]=p._data(c,"olddisplay",cc(c.nodeName)))):(d=bH(c,"display"),!e[f]&&d!=="none"&&p._data(c,"olddisplay",d))}for(f=0;f<g;f++){c=a[f];if(!c.style)continue;if(!b||c.style.display==="none"||c.style.display==="")c.style.display=b?e[f]||"":"none"}return a}function b_(a,b,c){var d=bP.exec(b);return d?Math.max(0,d[1]-(c||0))+(d[2]||"px"):b}function ca(a,b,c,d){var e=c===(d?"border":"content")?4:b==="width"?1:0,f=0;for(;e<4;e+=2)c==="margin"&&(f+=p.css(a,c+bV[e],!0)),d?(c==="content"&&(f-=parseFloat(bH(a,"padding"+bV[e]))||0),c!=="margin"&&(f-=parseFloat(bH(a,"border"+bV[e]+"Width"))||0)):(f+=parseFloat(bH(a,"padding"+bV[e]))||0,c!=="padding"&&(f+=parseFloat(bH(a,"border"+bV[e]+"Width"))||0));return f}function cb(a,b,c){var d=b==="width"?a.offsetWidth:a.offsetHeight,e=!0,f=p.support.boxSizing&&p.css(a,"boxSizing")==="border-box";if(d<=0||d==null){d=bH(a,b);if(d<0||d==null)d=a.style[b];if(bQ.test(d))return d;e=f&&(p.support.boxSizingReliable||d===a.style[b]),d=parseFloat(d)||0}return d+ca(a,b,c||(f?"border":"content"),e)+"px"}function cc(a){if(bS[a])return bS[a];var b=p("<"+a+">").appendTo(e.body),c=b.css("display");b.remove();if(c==="none"||c===""){bI=e.body.appendChild(bI||p.extend(e.createElement("iframe"),{frameBorder:0,width:0,height:0}));if(!bJ||!bI.createElement)bJ=(bI.contentWindow||bI.contentDocument).document,bJ.write("<!doctype html><html><body>"),bJ.close();b=bJ.body.appendChild(bJ.createElement(a)),c=bH(b,"display"),e.body.removeChild(bI)}return bS[a]=c,c}function ci(a,b,c,d){var e;if(p.isArray(b))p.each(b,function(b,e){c||ce.test(a)?d(a,e):ci(a+"["+(typeof e=="object"?b:"")+"]",e,c,d)});else if(!c&&p.type(b)==="object")for(e in b)ci(a+"["+e+"]",b[e],c,d);else d(a,b)}function cz(a){return function(b,c){typeof b!="string"&&(c=b,b="*");var d,e,f,g=b.toLowerCase().split(s),h=0,i=g.length;if(p.isFunction(c))for(;h<i;h++)d=g[h],f=/^\+/.test(d),f&&(d=d.substr(1)||"*"),e=a[d]=a[d]||[],e[f?"unshift":"push"](c)}}function cA(a,c,d,e,f,g){f=f||c.dataTypes[0],g=g||{},g[f]=!0;var h,i=a[f],j=0,k=i?i.length:0,l=a===cv;for(;j<k&&(l||!h);j++)h=i[j](c,d,e),typeof h=="string"&&(!l||g[h]?h=b:(c.dataTypes.unshift(h),h=cA(a,c,d,e,h,g)));return(l||!h)&&!g["*"]&&(h=cA(a,c,d,e,"*",g)),h}function cB(a,c){var d,e,f=p.ajaxSettings.flatOptions||{};for(d in c)c[d]!==b&&((f[d]?a:e||(e={}))[d]=c[d]);e&&p.extend(!0,a,e)}function cC(a,c,d){var e,f,g,h,i=a.contents,j=a.dataTypes,k=a.responseFields;for(f in k)f in d&&(c[k[f]]=d[f]);while(j[0]==="*")j.shift(),e===b&&(e=a.mimeType||c.getResponseHeader("content-type"));if(e)for(f in i)if(i[f]&&i[f].test(e)){j.unshift(f);break}if(j[0]in d)g=j[0];else{for(f in d){if(!j[0]||a.converters[f+" "+j[0]]){g=f;break}h||(h=f)}g=g||h}if(g)return g!==j[0]&&j.unshift(g),d[g]}function cD(a,b){var c,d,e,f,g=a.dataTypes.slice(),h=g[0],i={},j=0;a.dataFilter&&(b=a.dataFilter(b,a.dataType));if(g[1])for(c in a.converters)i[c.toLowerCase()]=a.converters[c];for(;e=g[++j];)if(e!=="*"){if(h!=="*"&&h!==e){c=i[h+" "+e]||i["* "+e];if(!c)for(d in i){f=d.split(" ");if(f[1]===e){c=i[h+" "+f[0]]||i["* "+f[0]];if(c){c===!0?c=i[d]:i[d]!==!0&&(e=f[0],g.splice(j--,0,e));break}}}if(c!==!0)if(c&&a["throws"])b=c(b);else try{b=c(b)}catch(k){return{state:"parsererror",error:c?k:"No conversion from "+h+" to "+e}}}h=e}return{state:"success",data:b}}function cL(){try{return new a.XMLHttpRequest}catch(b){}}function cM(){try{return new a.ActiveXObject("Microsoft.XMLHTTP")}catch(b){}}function cU(){return setTimeout(function(){cN=b},0),cN=p.now()}function cV(a,b){p.each(b,function(b,c){var d=(cT[b]||[]).concat(cT["*"]),e=0,f=d.length;for(;e<f;e++)if(d[e].call(a,b,c))return})}function cW(a,b,c){var d,e=0,f=0,g=cS.length,h=p.Deferred().always(function(){delete i.elem}),i=function(){var b=cN||cU(),c=Math.max(0,j.startTime+j.duration-b),d=1-(c/j.duration||0),e=0,f=j.tweens.length;for(;e<f;e++)j.tweens[e].run(d);return h.notifyWith(a,[j,d,c]),d<1&&f?c:(h.resolveWith(a,[j]),!1)},j=h.promise({elem:a,props:p.extend({},b),opts:p.extend(!0,{specialEasing:{}},c),originalProperties:b,originalOptions:c,startTime:cN||cU(),duration:c.duration,tweens:[],createTween:function(b,c,d){var e=p.Tween(a,j.opts,b,c,j.opts.specialEasing[b]||j.opts.easing);return j.tweens.push(e),e},stop:function(b){var c=0,d=b?j.tweens.length:0;for(;c<d;c++)j.tweens[c].run(1);return b?h.resolveWith(a,[j,b]):h.rejectWith(a,[j,b]),this}}),k=j.props;cX(k,j.opts.specialEasing);for(;e<g;e++){d=cS[e].call(j,a,k,j.opts);if(d)return d}return cV(j,k),p.isFunction(j.opts.start)&&j.opts.start.call(a,j),p.fx.timer(p.extend(i,{anim:j,queue:j.opts.queue,elem:a})),j.progress(j.opts.progress).done(j.opts.done,j.opts.complete).fail(j.opts.fail).always(j.opts.always)}function cX(a,b){var c,d,e,f,g;for(c in a){d=p.camelCase(c),e=b[d],f=a[c],p.isArray(f)&&(e=f[1],f=a[c]=f[0]),c!==d&&(a[d]=f,delete a[c]),g=p.cssHooks[d];if(g&&"expand"in g){f=g.expand(f),delete a[d];for(c in f)c in a||(a[c]=f[c],b[c]=e)}else b[d]=e}}function cY(a,b,c){var d,e,f,g,h,i,j,k,l=this,m=a.style,n={},o=[],q=a.nodeType&&bZ(a);c.queue||(j=p._queueHooks(a,"fx"),j.unqueued==null&&(j.unqueued=0,k=j.empty.fire,j.empty.fire=function(){j.unqueued||k()}),j.unqueued++,l.always(function(){l.always(function(){j.unqueued--,p.queue(a,"fx").length||j.empty.fire()})})),a.nodeType===1&&("height"in b||"width"in b)&&(c.overflow=[m.overflow,m.overflowX,m.overflowY],p.css(a,"display")==="inline"&&p.css(a,"float")==="none"&&(!p.support.inlineBlockNeedsLayout||cc(a.nodeName)==="inline"?m.display="inline-block":m.zoom=1)),c.overflow&&(m.overflow="hidden",p.support.shrinkWrapBlocks||l.done(function(){m.overflow=c.overflow[0],m.overflowX=c.overflow[1],m.overflowY=c.overflow[2]}));for(d in b){f=b[d];if(cP.exec(f)){delete b[d];if(f===(q?"hide":"show"))continue;o.push(d)}}g=o.length;if(g){h=p._data(a,"fxshow")||p._data(a,"fxshow",{}),q?p(a).show():l.done(function(){p(a).hide()}),l.done(function(){var b;p.removeData(a,"fxshow",!0);for(b in n)p.style(a,b,n[b])});for(d=0;d<g;d++)e=o[d],i=l.createTween(e,q?h[e]:0),n[e]=h[e]||p.style(a,e),e in h||(h[e]=i.start,q&&(i.end=i.start,i.start=e==="width"||e==="height"?1:0))}}function cZ(a,b,c,d,e){return new cZ.prototype.init(a,b,c,d,e)}function c$(a,b){var c,d={height:a},e=0;b=b?1:0;for(;e<4;e+=2-b)c=bV[e],d["margin"+c]=d["padding"+c]=a;return b&&(d.opacity=d.width=a),d}function da(a){return p.isWindow(a)?a:a.nodeType===9?a.defaultView||a.parentWindow:!1}var c,d,e=a.document,f=a.location,g=a.navigator,h=a.jQuery,i=a.$,j=Array.prototype.push,k=Array.prototype.slice,l=Array.prototype.indexOf,m=Object.prototype.toString,n=Object.prototype.hasOwnProperty,o=String.prototype.trim,p=function(a,b){return new p.fn.init(a,b,c)},q=/[\-+]?(?:\d*\.|)\d+(?:[eE][\-+]?\d+|)/.source,r=/\S/,s=/\s+/,t=/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,u=/^(?:[^#<]*(<[\w\W]+>)[^>]*$|#([\w\-]*)$)/,v=/^<(\w+)\s*\/?>(?:<\/\1>|)$/,w=/^[\],:{}\s]*$/,x=/(?:^|:|,)(?:\s*\[)+/g,y=/\\(?:["\\\/bfnrt]|u[\da-fA-F]{4})/g,z=/"[^"\\\r\n]*"|true|false|null|-?(?:\d\d*\.|)\d+(?:[eE][\-+]?\d+|)/g,A=/^-ms-/,B=/-([\da-z])/gi,C=function(a,b){return(b+"").toUpperCase()},D=function(){e.addEventListener?(e.removeEventListener("DOMContentLoaded",D,!1),p.ready()):e.readyState==="complete"&&(e.detachEvent("onreadystatechange",D),p.ready())},E={};p.fn=p.prototype={constructor:p,init:function(a,c,d){var f,g,h,i;if(!a)return this;if(a.nodeType)return this.context=this[0]=a,this.length=1,this;if(typeof a=="string"){a.charAt(0)==="<"&&a.charAt(a.length-1)===">"&&a.length>=3?f=[null,a,null]:f=u.exec(a);if(f&&(f[1]||!c)){if(f[1])return c=c instanceof p?c[0]:c,i=c&&c.nodeType?c.ownerDocument||c:e,a=p.parseHTML(f[1],i,!0),v.test(f[1])&&p.isPlainObject(c)&&this.attr.call(a,c,!0),p.merge(this,a);g=e.getElementById(f[2]);if(g&&g.parentNode){if(g.id!==f[2])return d.find(a);this.length=1,this[0]=g}return this.context=e,this.selector=a,this}return!c||c.jquery?(c||d).find(a):this.constructor(c).find(a)}return p.isFunction(a)?d.ready(a):(a.selector!==b&&(this.selector=a.selector,this.context=a.context),p.makeArray(a,this))},selector:"",jquery:"1.8.1",length:0,size:function(){return this.length},toArray:function(){return k.call(this)},get:function(a){return a==null?this.toArray():a<0?this[this.length+a]:this[a]},pushStack:function(a,b,c){var d=p.merge(this.constructor(),a);return d.prevObject=this,d.context=this.context,b==="find"?d.selector=this.selector+(this.selector?" ":"")+c:b&&(d.selector=this.selector+"."+b+"("+c+")"),d},each:function(a,b){return p.each(this,a,b)},ready:function(a){return p.ready.promise().done(a),this},eq:function(a){return a=+a,a===-1?this.slice(a):this.slice(a,a+1)},first:function(){return this.eq(0)},last:function(){return this.eq(-1)},slice:function(){return this.pushStack(k.apply(this,arguments),"slice",k.call(arguments).join(","))},map:function(a){return this.pushStack(p.map(this,function(b,c){return a.call(b,c,b)}))},end:function(){return this.prevObject||this.constructor(null)},push:j,sort:[].sort,splice:[].splice},p.fn.init.prototype=p.fn,p.extend=p.fn.extend=function(){var a,c,d,e,f,g,h=arguments[0]||{},i=1,j=arguments.length,k=!1;typeof h=="boolean"&&(k=h,h=arguments[1]||{},i=2),typeof h!="object"&&!p.isFunction(h)&&(h={}),j===i&&(h=this,--i);for(;i<j;i++)if((a=arguments[i])!=null)for(c in a){d=h[c],e=a[c];if(h===e)continue;k&&e&&(p.isPlainObject(e)||(f=p.isArray(e)))?(f?(f=!1,g=d&&p.isArray(d)?d:[]):g=d&&p.isPlainObject(d)?d:{},h[c]=p.extend(k,g,e)):e!==b&&(h[c]=e)}return h},p.extend({noConflict:function(b){return a.$===p&&(a.$=i),b&&a.jQuery===p&&(a.jQuery=h),p},isReady:!1,readyWait:1,holdReady:function(a){a?p.readyWait++:p.ready(!0)},ready:function(a){if(a===!0?--p.readyWait:p.isReady)return;if(!e.body)return setTimeout(p.ready,1);p.isReady=!0;if(a!==!0&&--p.readyWait>0)return;d.resolveWith(e,[p]),p.fn.trigger&&p(e).trigger("ready").off("ready")},isFunction:function(a){return p.type(a)==="function"},isArray:Array.isArray||function(a){return p.type(a)==="array"},isWindow:function(a){return a!=null&&a==a.window},isNumeric:function(a){return!isNaN(parseFloat(a))&&isFinite(a)},type:function(a){return a==null?String(a):E[m.call(a)]||"object"},isPlainObject:function(a){if(!a||p.type(a)!=="object"||a.nodeType||p.isWindow(a))return!1;try{if(a.constructor&&!n.call(a,"constructor")&&!n.call(a.constructor.prototype,"isPrototypeOf"))return!1}catch(c){return!1}var d;for(d in a);return d===b||n.call(a,d)},isEmptyObject:function(a){var b;for(b in a)return!1;return!0},error:function(a){throw new Error(a)},parseHTML:function(a,b,c){var d;return!a||typeof a!="string"?null:(typeof b=="boolean"&&(c=b,b=0),b=b||e,(d=v.exec(a))?[b.createElement(d[1])]:(d=p.buildFragment([a],b,c?null:[]),p.merge([],(d.cacheable?p.clone(d.fragment):d.fragment).childNodes)))},parseJSON:function(b){if(!b||typeof b!="string")return null;b=p.trim(b);if(a.JSON&&a.JSON.parse)return a.JSON.parse(b);if(w.test(b.replace(y,"@").replace(z,"]").replace(x,"")))return(new Function("return "+b))();p.error("Invalid JSON: "+b)},parseXML:function(c){var d,e;if(!c||typeof c!="string")return null;try{a.DOMParser?(e=new DOMParser,d=e.parseFromString(c,"text/xml")):(d=new ActiveXObject("Microsoft.XMLDOM"),d.async="false",d.loadXML(c))}catch(f){d=b}return(!d||!d.documentElement||d.getElementsByTagName("parsererror").length)&&p.error("Invalid XML: "+c),d},noop:function(){},globalEval:function(b){b&&r.test(b)&&(a.execScript||function(b){a.eval.call(a,b)})(b)},camelCase:function(a){return a.replace(A,"ms-").replace(B,C)},nodeName:function(a,b){return a.nodeName&&a.nodeName.toUpperCase()===b.toUpperCase()},each:function(a,c,d){var e,f=0,g=a.length,h=g===b||p.isFunction(a);if(d){if(h){for(e in a)if(c.apply(a[e],d)===!1)break}else for(;f<g;)if(c.apply(a[f++],d)===!1)break}else if(h){for(e in a)if(c.call(a[e],e,a[e])===!1)break}else for(;f<g;)if(c.call(a[f],f,a[f++])===!1)break;return a},trim:o&&!o.call("﻿ ")?function(a){return a==null?"":o.call(a)}:function(a){return a==null?"":a.toString().replace(t,"")},makeArray:function(a,b){var c,d=b||[];return a!=null&&(c=p.type(a),a.length==null||c==="string"||c==="function"||c==="regexp"||p.isWindow(a)?j.call(d,a):p.merge(d,a)),d},inArray:function(a,b,c){var d;if(b){if(l)return l.call(b,a,c);d=b.length,c=c?c<0?Math.max(0,d+c):c:0;for(;c<d;c++)if(c in b&&b[c]===a)return c}return-1},merge:function(a,c){var d=c.length,e=a.length,f=0;if(typeof d=="number")for(;f<d;f++)a[e++]=c[f];else while(c[f]!==b)a[e++]=c[f++];return a.length=e,a},grep:function(a,b,c){var d,e=[],f=0,g=a.length;c=!!c;for(;f<g;f++)d=!!b(a[f],f),c!==d&&e.push(a[f]);return e},map:function(a,c,d){var e,f,g=[],h=0,i=a.length,j=a instanceof p||i!==b&&typeof i=="number"&&(i>0&&a[0]&&a[i-1]||i===0||p.isArray(a));if(j)for(;h<i;h++)e=c(a[h],h,d),e!=null&&(g[g.length]=e);else for(f in a)e=c(a[f],f,d),e!=null&&(g[g.length]=e);return g.concat.apply([],g)},guid:1,proxy:function(a,c){var d,e,f;return typeof c=="string"&&(d=a[c],c=a,a=d),p.isFunction(a)?(e=k.call(arguments,2),f=function(){return a.apply(c,e.concat(k.call(arguments)))},f.guid=a.guid=a.guid||f.guid||p.guid++,f):b},access:function(a,c,d,e,f,g,h){var i,j=d==null,k=0,l=a.length;if(d&&typeof d=="object"){for(k in d)p.access(a,c,k,d[k],1,g,e);f=1}else if(e!==b){i=h===b&&p.isFunction(e),j&&(i?(i=c,c=function(a,b,c){return i.call(p(a),c)}):(c.call(a,e),c=null));if(c)for(;k<l;k++)c(a[k],d,i?e.call(a[k],k,c(a[k],d)):e,h);f=1}return f?a:j?c.call(a):l?c(a[0],d):g},now:function(){return(new Date).getTime()}}),p.ready.promise=function(b){if(!d){d=p.Deferred();if(e.readyState==="complete")setTimeout(p.ready,1);else if(e.addEventListener)e.addEventListener("DOMContentLoaded",D,!1),a.addEventListener("load",p.ready,!1);else{e.attachEvent("onreadystatechange",D),a.attachEvent("onload",p.ready);var c=!1;try{c=a.frameElement==null&&e.documentElement}catch(f){}c&&c.doScroll&&function g(){if(!p.isReady){try{c.doScroll("left")}catch(a){return setTimeout(g,50)}p.ready()}}()}}return d.promise(b)},p.each("Boolean Number String Function Array Date RegExp Object".split(" "),function(a,b){E["[object "+b+"]"]=b.toLowerCase()}),c=p(e);var F={};p.Callbacks=function(a){a=typeof a=="string"?F[a]||G(a):p.extend({},a);var c,d,e,f,g,h,i=[],j=!a.once&&[],k=function(b){c=a.memory&&b,d=!0,h=f||0,f=0,g=i.length,e=!0;for(;i&&h<g;h++)if(i[h].apply(b[0],b[1])===!1&&a.stopOnFalse){c=!1;break}e=!1,i&&(j?j.length&&k(j.shift()):c?i=[]:l.disable())},l={add:function(){if(i){var b=i.length;(function d(b){p.each(b,function(b,c){var e=p.type(c);e==="function"&&(!a.unique||!l.has(c))?i.push(c):c&&c.length&&e!=="string"&&d(c)})})(arguments),e?g=i.length:c&&(f=b,k(c))}return this},remove:function(){return i&&p.each(arguments,function(a,b){var c;while((c=p.inArray(b,i,c))>-1)i.splice(c,1),e&&(c<=g&&g--,c<=h&&h--)}),this},has:function(a){return p.inArray(a,i)>-1},empty:function(){return i=[],this},disable:function(){return i=j=c=b,this},disabled:function(){return!i},lock:function(){return j=b,c||l.disable(),this},locked:function(){return!j},fireWith:function(a,b){return b=b||[],b=[a,b.slice?b.slice():b],i&&(!d||j)&&(e?j.push(b):k(b)),this},fire:function(){return l.fireWith(this,arguments),this},fired:function(){return!!d}};return l},p.extend({Deferred:function(a){var b=[["resolve","done",p.Callbacks("once memory"),"resolved"],["reject","fail",p.Callbacks("once memory"),"rejected"],["notify","progress",p.Callbacks("memory")]],c="pending",d={state:function(){return c},always:function(){return e.done(arguments).fail(arguments),this},then:function(){var a=arguments;return p.Deferred(function(c){p.each(b,function(b,d){var f=d[0],g=a[b];e[d[1]](p.isFunction(g)?function(){var a=g.apply(this,arguments);a&&p.isFunction(a.promise)?a.promise().done(c.resolve).fail(c.reject).progress(c.notify):c[f+"With"](this===e?c:this,[a])}:c[f])}),a=null}).promise()},promise:function(a){return typeof a=="object"?p.extend(a,d):d}},e={};return d.pipe=d.then,p.each(b,function(a,f){var g=f[2],h=f[3];d[f[1]]=g.add,h&&g.add(function(){c=h},b[a^1][2].disable,b[2][2].lock),e[f[0]]=g.fire,e[f[0]+"With"]=g.fireWith}),d.promise(e),a&&a.call(e,e),e},when:function(a){var b=0,c=k.call(arguments),d=c.length,e=d!==1||a&&p.isFunction(a.promise)?d:0,f=e===1?a:p.Deferred(),g=function(a,b,c){return function(d){b[a]=this,c[a]=arguments.length>1?k.call(arguments):d,c===h?f.notifyWith(b,c):--e||f.resolveWith(b,c)}},h,i,j;if(d>1){h=new Array(d),i=new Array(d),j=new Array(d);for(;b<d;b++)c[b]&&p.isFunction(c[b].promise)?c[b].promise().done(g(b,j,c)).fail(f.reject).progress(g(b,i,h)):--e}return e||f.resolveWith(j,c),f.promise()}}),p.support=function(){var b,c,d,f,g,h,i,j,k,l,m,n=e.createElement("div");n.setAttribute("className","t"),n.innerHTML="  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>",c=n.getElementsByTagName("*"),d=n.getElementsByTagName("a")[0],d.style.cssText="top:1px;float:left;opacity:.5";if(!c||!c.length||!d)return{};f=e.createElement("select"),g=f.appendChild(e.createElement("option")),h=n.getElementsByTagName("input")[0],b={leadingWhitespace:n.firstChild.nodeType===3,tbody:!n.getElementsByTagName("tbody").length,htmlSerialize:!!n.getElementsByTagName("link").length,style:/top/.test(d.getAttribute("style")),hrefNormalized:d.getAttribute("href")==="/a",opacity:/^0.5/.test(d.style.opacity),cssFloat:!!d.style.cssFloat,checkOn:h.value==="on",optSelected:g.selected,getSetAttribute:n.className!=="t",enctype:!!e.createElement("form").enctype,html5Clone:e.createElement("nav").cloneNode(!0).outerHTML!=="<:nav></:nav>",boxModel:e.compatMode==="CSS1Compat",submitBubbles:!0,changeBubbles:!0,focusinBubbles:!1,deleteExpando:!0,noCloneEvent:!0,inlineBlockNeedsLayout:!1,shrinkWrapBlocks:!1,reliableMarginRight:!0,boxSizingReliable:!0,pixelPosition:!1},h.checked=!0,b.noCloneChecked=h.cloneNode(!0).checked,f.disabled=!0,b.optDisabled=!g.disabled;try{delete n.test}catch(o){b.deleteExpando=!1}!n.addEventListener&&n.attachEvent&&n.fireEvent&&(n.attachEvent("onclick",m=function(){b.noCloneEvent=!1}),n.cloneNode(!0).fireEvent("onclick"),n.detachEvent("onclick",m)),h=e.createElement("input"),h.value="t",h.setAttribute("type","radio"),b.radioValue=h.value==="t",h.setAttribute("checked","checked"),h.setAttribute("name","t"),n.appendChild(h),i=e.createDocumentFragment(),i.appendChild(n.lastChild),b.checkClone=i.cloneNode(!0).cloneNode(!0).lastChild.checked,b.appendChecked=h.checked,i.removeChild(h),i.appendChild(n);if(n.attachEvent)for(k in{submit:!0,change:!0,focusin:!0})j="on"+k,l=j in n,l||(n.setAttribute(j,"return;"),l=typeof n[j]=="function"),b[k+"Bubbles"]=l;return p(function(){var c,d,f,g,h="padding:0;margin:0;border:0;display:block;overflow:hidden;",i=e.getElementsByTagName("body")[0];if(!i)return;c=e.createElement("div"),c.style.cssText="visibility:hidden;border:0;width:0;height:0;position:static;top:0;margin-top:1px",i.insertBefore(c,i.firstChild),d=e.createElement("div"),c.appendChild(d),d.innerHTML="<table><tr><td></td><td>t</td></tr></table>",f=d.getElementsByTagName("td"),f[0].style.cssText="padding:0;margin:0;border:0;display:none",l=f[0].offsetHeight===0,f[0].style.display="",f[1].style.display="none",b.reliableHiddenOffsets=l&&f[0].offsetHeight===0,d.innerHTML="",d.style.cssText="box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;padding:1px;border:1px;display:block;width:4px;margin-top:1%;position:absolute;top:1%;",b.boxSizing=d.offsetWidth===4,b.doesNotIncludeMarginInBodyOffset=i.offsetTop!==1,a.getComputedStyle&&(b.pixelPosition=(a.getComputedStyle(d,null)||{}).top!=="1%",b.boxSizingReliable=(a.getComputedStyle(d,null)||{width:"4px"}).width==="4px",g=e.createElement("div"),g.style.cssText=d.style.cssText=h,g.style.marginRight=g.style.width="0",d.style.width="1px",d.appendChild(g),b.reliableMarginRight=!parseFloat((a.getComputedStyle(g,null)||{}).marginRight)),typeof d.style.zoom!="undefined"&&(d.innerHTML="",d.style.cssText=h+"width:1px;padding:1px;display:inline;zoom:1",b.inlineBlockNeedsLayout=d.offsetWidth===3,d.style.display="block",d.style.overflow="visible",d.innerHTML="<div></div>",d.firstChild.style.width="5px",b.shrinkWrapBlocks=d.offsetWidth!==3,c.style.zoom=1),i.removeChild(c),c=d=f=g=null}),i.removeChild(n),c=d=f=g=h=i=n=null,b}();var H=/(?:\{[\s\S]*\}|\[[\s\S]*\])$/,I=/([A-Z])/g;p.extend({cache:{},deletedIds:[],uuid:0,expando:"jQuery"+(p.fn.jquery+Math.random()).replace(/\D/g,""),noData:{embed:!0,object:"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000",applet:!0},hasData:function(a){return a=a.nodeType?p.cache[a[p.expando]]:a[p.expando],!!a&&!K(a)},data:function(a,c,d,e){if(!p.acceptData(a))return;var f,g,h=p.expando,i=typeof c=="string",j=a.nodeType,k=j?p.cache:a,l=j?a[h]:a[h]&&h;if((!l||!k[l]||!e&&!k[l].data)&&i&&d===b)return;l||(j?a[h]=l=p.deletedIds.pop()||++p.uuid:l=h),k[l]||(k[l]={},j||(k[l].toJSON=p.noop));if(typeof c=="object"||typeof c=="function")e?k[l]=p.extend(k[l],c):k[l].data=p.extend(k[l].data,c);return f=k[l],e||(f.data||(f.data={}),f=f.data),d!==b&&(f[p.camelCase(c)]=d),i?(g=f[c],g==null&&(g=f[p.camelCase(c)])):g=f,g},removeData:function(a,b,c){if(!p.acceptData(a))return;var d,e,f,g=a.nodeType,h=g?p.cache:a,i=g?a[p.expando]:p.expando;if(!h[i])return;if(b){d=c?h[i]:h[i].data;if(d){p.isArray(b)||(b in d?b=[b]:(b=p.camelCase(b),b in d?b=[b]:b=b.split(" ")));for(e=0,f=b.length;e<f;e++)delete d[b[e]];if(!(c?K:p.isEmptyObject)(d))return}}if(!c){delete h[i].data;if(!K(h[i]))return}g?p.cleanData([a],!0):p.support.deleteExpando||h!=h.window?delete h[i]:h[i]=null},_data:function(a,b,c){return p.data(a,b,c,!0)},acceptData:function(a){var b=a.nodeName&&p.noData[a.nodeName.toLowerCase()];return!b||b!==!0&&a.getAttribute("classid")===b}}),p.fn.extend({data:function(a,c){var d,e,f,g,h,i=this[0],j=0,k=null;if(a===b){if(this.length){k=p.data(i);if(i.nodeType===1&&!p._data(i,"parsedAttrs")){f=i.attributes;for(h=f.length;j<h;j++)g=f[j].name,g.indexOf("data-")===0&&(g=p.camelCase(g.substring(5)),J(i,g,k[g]));p._data(i,"parsedAttrs",!0)}}return k}return typeof a=="object"?this.each(function(){p.data(this,a)}):(d=a.split(".",2),d[1]=d[1]?"."+d[1]:"",e=d[1]+"!",p.access(this,function(c){if(c===b)return k=this.triggerHandler("getData"+e,[d[0]]),k===b&&i&&(k=p.data(i,a),k=J(i,a,k)),k===b&&d[1]?this.data(d[0]):k;d[1]=c,this.each(function(){var b=p(this);b.triggerHandler("setData"+e,d),p.data(this,a,c),b.triggerHandler("changeData"+e,d)})},null,c,arguments.length>1,null,!1))},removeData:function(a){return this.each(function(){p.removeData(this,a)})}}),p.extend({queue:function(a,b,c){var d;if(a)return b=(b||"fx")+"queue",d=p._data(a,b),c&&(!d||p.isArray(c)?d=p._data(a,b,p.makeArray(c)):d.push(c)),d||[]},dequeue:function(a,b){b=b||"fx";var c=p.queue(a,b),d=c.length,e=c.shift(),f=p._queueHooks(a,b),g=function(){p.dequeue(a,b)};e==="inprogress"&&(e=c.shift(),d--),e&&(b==="fx"&&c.unshift("inprogress"),delete f.stop,e.call(a,g,f)),!d&&f&&f.empty.fire()},_queueHooks:function(a,b){var c=b+"queueHooks";return p._data(a,c)||p._data(a,c,{empty:p.Callbacks("once memory").add(function(){p.removeData(a,b+"queue",!0),p.removeData(a,c,!0)})})}}),p.fn.extend({queue:function(a,c){var d=2;return typeof a!="string"&&(c=a,a="fx",d--),arguments.length<d?p.queue(this[0],a):c===b?this:this.each(function(){var b=p.queue(this,a,c);p._queueHooks(this,a),a==="fx"&&b[0]!=="inprogress"&&p.dequeue(this,a)})},dequeue:function(a){return this.each(function(){p.dequeue(this,a)})},delay:function(a,b){return a=p.fx?p.fx.speeds[a]||a:a,b=b||"fx",this.queue(b,function(b,c){var d=setTimeout(b,a);c.stop=function(){clearTimeout(d)}})},clearQueue:function(a){return this.queue(a||"fx",[])},promise:function(a,c){var d,e=1,f=p.Deferred(),g=this,h=this.length,i=function(){--e||f.resolveWith(g,[g])};typeof a!="string"&&(c=a,a=b),a=a||"fx";while(h--)d=p._data(g[h],a+"queueHooks"),d&&d.empty&&(e++,d.empty.add(i));return i(),f.promise(c)}});var L,M,N,O=/[\t\r\n]/g,P=/\r/g,Q=/^(?:button|input)$/i,R=/^(?:button|input|object|select|textarea)$/i,S=/^a(?:rea|)$/i,T=/^(?:autofocus|autoplay|async|checked|controls|defer|disabled|hidden|loop|multiple|open|readonly|required|scoped|selected)$/i,U=p.support.getSetAttribute;p.fn.extend({attr:function(a,b){return p.access(this,p.attr,a,b,arguments.length>1)},removeAttr:function(a){return this.each(function(){p.removeAttr(this,a)})},prop:function(a,b){return p.access(this,p.prop,a,b,arguments.length>1)},removeProp:function(a){return a=p.propFix[a]||a,this.each(function(){try{this[a]=b,delete this[a]}catch(c){}})},addClass:function(a){var b,c,d,e,f,g,h;if(p.isFunction(a))return this.each(function(b){p(this).addClass(a.call(this,b,this.className))});if(a&&typeof a=="string"){b=a.split(s);for(c=0,d=this.length;c<d;c++){e=this[c];if(e.nodeType===1)if(!e.className&&b.length===1)e.className=a;else{f=" "+e.className+" ";for(g=0,h=b.length;g<h;g++)~f.indexOf(" "+b[g]+" ")||(f+=b[g]+" ");e.className=p.trim(f)}}}return this},removeClass:function(a){var c,d,e,f,g,h,i;if(p.isFunction(a))return this.each(function(b){p(this).removeClass(a.call(this,b,this.className))});if(a&&typeof a=="string"||a===b){c=(a||"").split(s);for(h=0,i=this.length;h<i;h++){e=this[h];if(e.nodeType===1&&e.className){d=(" "+e.className+" ").replace(O," ");for(f=0,g=c.length;f<g;f++)while(d.indexOf(" "+c[f]+" ")>-1)d=d.replace(" "+c[f]+" "," ");e.className=a?p.trim(d):""}}}return this},toggleClass:function(a,b){var c=typeof a,d=typeof b=="boolean";return p.isFunction(a)?this.each(function(c){p(this).toggleClass(a.call(this,c,this.className,b),b)}):this.each(function(){if(c==="string"){var e,f=0,g=p(this),h=b,i=a.split(s);while(e=i[f++])h=d?h:!g.hasClass(e),g[h?"addClass":"removeClass"](e)}else if(c==="undefined"||c==="boolean")this.className&&p._data(this,"__className__",this.className),this.className=this.className||a===!1?"":p._data(this,"__className__")||""})},hasClass:function(a){var b=" "+a+" ",c=0,d=this.length;for(;c<d;c++)if(this[c].nodeType===1&&(" "+this[c].className+" ").replace(O," ").indexOf(b)>-1)return!0;return!1},val:function(a){var c,d,e,f=this[0];if(!arguments.length){if(f)return c=p.valHooks[f.type]||p.valHooks[f.nodeName.toLowerCase()],c&&"get"in c&&(d=c.get(f,"value"))!==b?d:(d=f.value,typeof d=="string"?d.replace(P,""):d==null?"":d);return}return e=p.isFunction(a),this.each(function(d){var f,g=p(this);if(this.nodeType!==1)return;e?f=a.call(this,d,g.val()):f=a,f==null?f="":typeof f=="number"?f+="":p.isArray(f)&&(f=p.map(f,function(a){return a==null?"":a+""})),c=p.valHooks[this.type]||p.valHooks[this.nodeName.toLowerCase()];if(!c||!("set"in c)||c.set(this,f,"value")===b)this.value=f})}}),p.extend({valHooks:{option:{get:function(a){var b=a.attributes.value;return!b||b.specified?a.value:a.text}},select:{get:function(a){var b,c,d,e,f=a.selectedIndex,g=[],h=a.options,i=a.type==="select-one";if(f<0)return null;c=i?f:0,d=i?f+1:h.length;for(;c<d;c++){e=h[c];if(e.selected&&(p.support.optDisabled?!e.disabled:e.getAttribute("disabled")===null)&&(!e.parentNode.disabled||!p.nodeName(e.parentNode,"optgroup"))){b=p(e).val();if(i)return b;g.push(b)}}return i&&!g.length&&h.length?p(h[f]).val():g},set:function(a,b){var c=p.makeArray(b);return p(a).find("option").each(function(){this.selected=p.inArray(p(this).val(),c)>=0}),c.length||(a.selectedIndex=-1),c}}},attrFn:{},attr:function(a,c,d,e){var f,g,h,i=a.nodeType;if(!a||i===3||i===8||i===2)return;if(e&&p.isFunction(p.fn[c]))return p(a)[c](d);if(typeof a.getAttribute=="undefined")return p.prop(a,c,d);h=i!==1||!p.isXMLDoc(a),h&&(c=c.toLowerCase(),g=p.attrHooks[c]||(T.test(c)?M:L));if(d!==b){if(d===null){p.removeAttr(a,c);return}return g&&"set"in g&&h&&(f=g.set(a,d,c))!==b?f:(a.setAttribute(c,""+d),d)}return g&&"get"in g&&h&&(f=g.get(a,c))!==null?f:(f=a.getAttribute(c),f===null?b:f)},removeAttr:function(a,b){var c,d,e,f,g=0;if(b&&a.nodeType===1){d=b.split(s);for(;g<d.length;g++)e=d[g],e&&(c=p.propFix[e]||e,f=T.test(e),f||p.attr(a,e,""),a.removeAttribute(U?e:c),f&&c in a&&(a[c]=!1))}},attrHooks:{type:{set:function(a,b){if(Q.test(a.nodeName)&&a.parentNode)p.error("type property can't be changed");else if(!p.support.radioValue&&b==="radio"&&p.nodeName(a,"input")){var c=a.value;return a.setAttribute("type",b),c&&(a.value=c),b}}},value:{get:function(a,b){return L&&p.nodeName(a,"button")?L.get(a,b):b in a?a.value:null},set:function(a,b,c){if(L&&p.nodeName(a,"button"))return L.set(a,b,c);a.value=b}}},propFix:{tabindex:"tabIndex",readonly:"readOnly","for":"htmlFor","class":"className",maxlength:"maxLength",cellspacing:"cellSpacing",cellpadding:"cellPadding",rowspan:"rowSpan",colspan:"colSpan",usemap:"useMap",frameborder:"frameBorder",contenteditable:"contentEditable"},prop:function(a,c,d){var e,f,g,h=a.nodeType;if(!a||h===3||h===8||h===2)return;return g=h!==1||!p.isXMLDoc(a),g&&(c=p.propFix[c]||c,f=p.propHooks[c]),d!==b?f&&"set"in f&&(e=f.set(a,d,c))!==b?e:a[c]=d:f&&"get"in f&&(e=f.get(a,c))!==null?e:a[c]},propHooks:{tabIndex:{get:function(a){var c=a.getAttributeNode("tabindex");return c&&c.specified?parseInt(c.value,10):R.test(a.nodeName)||S.test(a.nodeName)&&a.href?0:b}}}}),M={get:function(a,c){var d,e=p.prop(a,c);return e===!0||typeof e!="boolean"&&(d=a.getAttributeNode(c))&&d.nodeValue!==!1?c.toLowerCase():b},set:function(a,b,c){var d;return b===!1?p.removeAttr(a,c):(d=p.propFix[c]||c,d in a&&(a[d]=!0),a.setAttribute(c,c.toLowerCase())),c}},U||(N={name:!0,id:!0,coords:!0},L=p.valHooks.button={get:function(a,c){var d;return d=a.getAttributeNode(c),d&&(N[c]?d.value!=="":d.specified)?d.value:b},set:function(a,b,c){var d=a.getAttributeNode(c);return d||(d=e.createAttribute(c),a.setAttributeNode(d)),d.value=b+""}},p.each(["width","height"],function(a,b){p.attrHooks[b]=p.extend(p.attrHooks[b],{set:function(a,c){if(c==="")return a.setAttribute(b,"auto"),c}})}),p.attrHooks.contenteditable={get:L.get,set:function(a,b,c){b===""&&(b="false"),L.set(a,b,c)}}),p.support.hrefNormalized||p.each(["href","src","width","height"],function(a,c){p.attrHooks[c]=p.extend(p.attrHooks[c],{get:function(a){var d=a.getAttribute(c,2);return d===null?b:d}})}),p.support.style||(p.attrHooks.style={get:function(a){return a.style.cssText.toLowerCase()||b},set:function(a,b){return a.style.cssText=""+b}}),p.support.optSelected||(p.propHooks.selected=p.extend(p.propHooks.selected,{get:function(a){var b=a.parentNode;return b&&(b.selectedIndex,b.parentNode&&b.parentNode.selectedIndex),null}})),p.support.enctype||(p.propFix.enctype="encoding"),p.support.checkOn||p.each(["radio","checkbox"],function(){p.valHooks[this]={get:function(a){return a.getAttribute("value")===null?"on":a.value}}}),p.each(["radio","checkbox"],function(){p.valHooks[this]=p.extend(p.valHooks[this],{set:function(a,b){if(p.isArray(b))return a.checked=p.inArray(p(a).val(),b)>=0}})});var V=/^(?:textarea|input|select)$/i,W=/^([^\.]*|)(?:\.(.+)|)$/,X=/(?:^|\s)hover(\.\S+|)\b/,Y=/^key/,Z=/^(?:mouse|contextmenu)|click/,$=/^(?:focusinfocus|focusoutblur)$/,_=function(a){return p.event.special.hover?a:a.replace(X,"mouseenter$1 mouseleave$1")};p.event={add:function(a,c,d,e,f){var g,h,i,j,k,l,m,n,o,q,r;if(a.nodeType===3||a.nodeType===8||!c||!d||!(g=p._data(a)))return;d.handler&&(o=d,d=o.handler,f=o.selector),d.guid||(d.guid=p.guid++),i=g.events,i||(g.events=i={}),h=g.handle,h||(g.handle=h=function(a){return typeof p!="undefined"&&(!a||p.event.triggered!==a.type)?p.event.dispatch.apply(h.elem,arguments):b},h.elem=a),c=p.trim(_(c)).split(" ");for(j=0;j<c.length;j++){k=W.exec(c[j])||[],l=k[1],m=(k[2]||"").split(".").sort(),r=p.event.special[l]||{},l=(f?r.delegateType:r.bindType)||l,r=p.event.special[l]||{},n=p.extend({type:l,origType:k[1],data:e,handler:d,guid:d.guid,selector:f,namespace:m.join(".")},o),q=i[l];if(!q){q=i[l]=[],q.delegateCount=0;if(!r.setup||r.setup.call(a,e,m,h)===!1)a.addEventListener?a.addEventListener(l,h,!1):a.attachEvent&&a.attachEvent("on"+l,h)}r.add&&(r.add.call(a,n),n.handler.guid||(n.handler.guid=d.guid)),f?q.splice(q.delegateCount++,0,n):q.push(n),p.event.global[l]=!0}a=null},global:{},remove:function(a,b,c,d,e){var f,g,h,i,j,k,l,m,n,o,q,r=p.hasData(a)&&p._data(a);if(!r||!(m=r.events))return;b=p.trim(_(b||"")).split(" ");for(f=0;f<b.length;f++){g=W.exec(b[f])||[],h=i=g[1],j=g[2];if(!h){for(h in m)p.event.remove(a,h+b[f],c,d,!0);continue}n=p.event.special[h]||{},h=(d?n.delegateType:n.bindType)||h,o=m[h]||[],k=o.length,j=j?new RegExp("(^|\\.)"+j.split(".").sort().join("\\.(?:.*\\.|)")+"(\\.|$)"):null;for(l=0;l<o.length;l++)q=o[l],(e||i===q.origType)&&(!c||c.guid===q.guid)&&(!j||j.test(q.namespace))&&(!d||d===q.selector||d==="**"&&q.selector)&&(o.splice(l--,1),q.selector&&o.delegateCount--,n.remove&&n.remove.call(a,q));o.length===0&&k!==o.length&&((!n.teardown||n.teardown.call(a,j,r.handle)===!1)&&p.removeEvent(a,h,r.handle),delete m[h])}p.isEmptyObject(m)&&(delete r.handle,p.removeData(a,"events",!0))},customEvent:{getData:!0,setData:!0,changeData:!0},trigger:function(c,d,f,g){if(!f||f.nodeType!==3&&f.nodeType!==8){var h,i,j,k,l,m,n,o,q,r,s=c.type||c,t=[];if($.test(s+p.event.triggered))return;s.indexOf("!")>=0&&(s=s.slice(0,-1),i=!0),s.indexOf(".")>=0&&(t=s.split("."),s=t.shift(),t.sort());if((!f||p.event.customEvent[s])&&!p.event.global[s])return;c=typeof c=="object"?c[p.expando]?c:new p.Event(s,c):new p.Event(s),c.type=s,c.isTrigger=!0,c.exclusive=i,c.namespace=t.join("."),c.namespace_re=c.namespace?new RegExp("(^|\\.)"+t.join("\\.(?:.*\\.|)")+"(\\.|$)"):null,m=s.indexOf(":")<0?"on"+s:"";if(!f){h=p.cache;for(j in h)h[j].events&&h[j].events[s]&&p.event.trigger(c,d,h[j].handle.elem,!0);return}c.result=b,c.target||(c.target=f),d=d!=null?p.makeArray(d):[],d.unshift(c),n=p.event.special[s]||{};if(n.trigger&&n.trigger.apply(f,d)===!1)return;q=[[f,n.bindType||s]];if(!g&&!n.noBubble&&!p.isWindow(f)){r=n.delegateType||s,k=$.test(r+s)?f:f.parentNode;for(l=f;k;k=k.parentNode)q.push([k,r]),l=k;l===(f.ownerDocument||e)&&q.push([l.defaultView||l.parentWindow||a,r])}for(j=0;j<q.length&&!c.isPropagationStopped();j++)k=q[j][0],c.type=q[j][1],o=(p._data(k,"events")||{})[c.type]&&p._data(k,"handle"),o&&o.apply(k,d),o=m&&k[m],o&&p.acceptData(k)&&o.apply(k,d)===!1&&c.preventDefault();return c.type=s,!g&&!c.isDefaultPrevented()&&(!n._default||n._default.apply(f.ownerDocument,d)===!1)&&(s!=="click"||!p.nodeName(f,"a"))&&p.acceptData(f)&&m&&f[s]&&(s!=="focus"&&s!=="blur"||c.target.offsetWidth!==0)&&!p.isWindow(f)&&(l=f[m],l&&(f[m]=null),p.event.triggered=s,f[s](),p.event.triggered=b,l&&(f[m]=l)),c.result}return},dispatch:function(c){c=p.event.fix(c||a.event);var d,e,f,g,h,i,j,k,l,m,n=(p._data(this,"events")||{})[c.type]||[],o=n.delegateCount,q=[].slice.call(arguments),r=!c.exclusive&&!c.namespace,s=p.event.special[c.type]||{},t=[];q[0]=c,c.delegateTarget=this;if(s.preDispatch&&s.preDispatch.call(this,c)===!1)return;if(o&&(!c.button||c.type!=="click"))for(f=c.target;f!=this;f=f.parentNode||this)if(f.disabled!==!0||c.type!=="click"){h={},j=[];for(d=0;d<o;d++)k=n[d],l=k.selector,h[l]===b&&(h[l]=p(l,this).index(f)>=0),h[l]&&j.push(k);j.length&&t.push({elem:f,matches:j})}n.length>o&&t.push({elem:this,matches:n.slice(o)});for(d=0;d<t.length&&!c.isPropagationStopped();d++){i=t[d],c.currentTarget=i.elem;for(e=0;e<i.matches.length&&!c.isImmediatePropagationStopped();e++){k=i.matches[e];if(r||!c.namespace&&!k.namespace||c.namespace_re&&c.namespace_re.test(k.namespace))c.data=k.data,c.handleObj=k,g=((p.event.special[k.origType]||{}).handle||k.handler).apply(i.elem,q),g!==b&&(c.result=g,g===!1&&(c.preventDefault(),c.stopPropagation()))}}return s.postDispatch&&s.postDispatch.call(this,c),c.result},props:"attrChange attrName relatedNode srcElement altKey bubbles cancelable ctrlKey currentTarget eventPhase metaKey relatedTarget shiftKey target timeStamp view which".split(" "),fixHooks:{},keyHooks:{props:"char charCode key keyCode".split(" "),filter:function(a,b){return a.which==null&&(a.which=b.charCode!=null?b.charCode:b.keyCode),a}},mouseHooks:{props:"button buttons clientX clientY fromElement offsetX offsetY pageX pageY screenX screenY toElement".split(" "),filter:function(a,c){var d,f,g,h=c.button,i=c.fromElement;return a.pageX==null&&c.clientX!=null&&(d=a.target.ownerDocument||e,f=d.documentElement,g=d.body,a.pageX=c.clientX+(f&&f.scrollLeft||g&&g.scrollLeft||0)-(f&&f.clientLeft||g&&g.clientLeft||0),a.pageY=c.clientY+(f&&f.scrollTop||g&&g.scrollTop||0)-(f&&f.clientTop||g&&g.clientTop||0)),!a.relatedTarget&&i&&(a.relatedTarget=i===a.target?c.toElement:i),!a.which&&h!==b&&(a.which=h&1?1:h&2?3:h&4?2:0),a}},fix:function(a){if(a[p.expando])return a;var b,c,d=a,f=p.event.fixHooks[a.type]||{},g=f.props?this.props.concat(f.props):this.props;a=p.Event(d);for(b=g.length;b;)c=g[--b],a[c]=d[c];return a.target||(a.target=d.srcElement||e),a.target.nodeType===3&&(a.target=a.target.parentNode),a.metaKey=!!a.metaKey,f.filter?f.filter(a,d):a},special:{load:{noBubble:!0},focus:{delegateType:"focusin"},blur:{delegateType:"focusout"},beforeunload:{setup:function(a,b,c){p.isWindow(this)&&(this.onbeforeunload=c)},teardown:function(a,b){this.onbeforeunload===b&&(this.onbeforeunload=null)}}},simulate:function(a,b,c,d){var e=p.extend(new p.Event,c,{type:a,isSimulated:!0,originalEvent:{}});d?p.event.trigger(e,null,b):p.event.dispatch.call(b,e),e.isDefaultPrevented()&&c.preventDefault()}},p.event.handle=p.event.dispatch,p.removeEvent=e.removeEventListener?function(a,b,c){a.removeEventListener&&a.removeEventListener(b,c,!1)}:function(a,b,c){var d="on"+b;a.detachEvent&&(typeof a[d]=="undefined"&&(a[d]=null),a.detachEvent(d,c))},p.Event=function(a,b){if(this instanceof p.Event)a&&a.type?(this.originalEvent=a,this.type=a.type,this.isDefaultPrevented=a.defaultPrevented||a.returnValue===!1||a.getPreventDefault&&a.getPreventDefault()?bb:ba):this.type=a,b&&p.extend(this,b),this.timeStamp=a&&a.timeStamp||p.now(),this[p.expando]=!0;else return new p.Event(a,b)},p.Event.prototype={preventDefault:function(){this.isDefaultPrevented=bb;var a=this.originalEvent;if(!a)return;a.preventDefault?a.preventDefault():a.returnValue=!1},stopPropagation:function(){this.isPropagationStopped=bb;var a=this.originalEvent;if(!a)return;a.stopPropagation&&a.stopPropagation(),a.cancelBubble=!0},stopImmediatePropagation:function(){this.isImmediatePropagationStopped=bb,this.stopPropagation()},isDefaultPrevented:ba,isPropagationStopped:ba,isImmediatePropagationStopped:ba},p.each({mouseenter:"mouseover",mouseleave:"mouseout"},function(a,b){p.event.special[a]={delegateType:b,bindType:b,handle:function(a){var c,d=this,e=a.relatedTarget,f=a.handleObj,g=f.selector;if(!e||e!==d&&!p.contains(d,e))a.type=f.origType,c=f.handler.apply(this,arguments),a.type=b;return c}}}),p.support.submitBubbles||(p.event.special.submit={setup:function(){if(p.nodeName(this,"form"))return!1;p.event.add(this,"click._submit keypress._submit",function(a){var c=a.target,d=p.nodeName(c,"input")||p.nodeName(c,"button")?c.form:b;d&&!p._data(d,"_submit_attached")&&(p.event.add(d,"submit._submit",function(a){a._submit_bubble=!0}),p._data(d,"_submit_attached",!0))})},postDispatch:function(a){a._submit_bubble&&(delete a._submit_bubble,this.parentNode&&!a.isTrigger&&p.event.simulate("submit",this.parentNode,a,!0))},teardown:function(){if(p.nodeName(this,"form"))return!1;p.event.remove(this,"._submit")}}),p.support.changeBubbles||(p.event.special.change={setup:function(){if(V.test(this.nodeName)){if(this.type==="checkbox"||this.type==="radio")p.event.add(this,"propertychange._change",function(a){a.originalEvent.propertyName==="checked"&&(this._just_changed=!0)}),p.event.add(this,"click._change",function(a){this._just_changed&&!a.isTrigger&&(this._just_changed=!1),p.event.simulate("change",this,a,!0)});return!1}p.event.add(this,"beforeactivate._change",function(a){var b=a.target;V.test(b.nodeName)&&!p._data(b,"_change_attached")&&(p.event.add(b,"change._change",function(a){this.parentNode&&!a.isSimulated&&!a.isTrigger&&p.event.simulate("change",this.parentNode,a,!0)}),p._data(b,"_change_attached",!0))})},handle:function(a){var b=a.target;if(this!==b||a.isSimulated||a.isTrigger||b.type!=="radio"&&b.type!=="checkbox")return a.handleObj.handler.apply(this,arguments)},teardown:function(){return p.event.remove(this,"._change"),!V.test(this.nodeName)}}),p.support.focusinBubbles||p.each({focus:"focusin",blur:"focusout"},function(a,b){var c=0,d=function(a){p.event.simulate(b,a.target,p.event.fix(a),!0)};p.event.special[b]={setup:function(){c++===0&&e.addEventListener(a,d,!0)},teardown:function(){--c===0&&e.removeEventListener(a,d,!0)}}}),p.fn.extend({on:function(a,c,d,e,f){var g,h;if(typeof a=="object"){typeof c!="string"&&(d=d||c,c=b);for(h in a)this.on(h,c,d,a[h],f);return this}d==null&&e==null?(e=c,d=c=b):e==null&&(typeof c=="string"?(e=d,d=b):(e=d,d=c,c=b));if(e===!1)e=ba;else if(!e)return this;return f===1&&(g=e,e=function(a){return p().off(a),g.apply(this,arguments)},e.guid=g.guid||(g.guid=p.guid++)),this.each(function(){p.event.add(this,a,e,d,c)})},one:function(a,b,c,d){return this.on(a,b,c,d,1)},off:function(a,c,d){var e,f;if(a&&a.preventDefault&&a.handleObj)return e=a.handleObj,p(a.delegateTarget).off(e.namespace?e.origType+"."+e.namespace:e.origType,e.selector,e.handler),this;if(typeof a=="object"){for(f in a)this.off(f,c,a[f]);return this}if(c===!1||typeof c=="function")d=c,c=b;return d===!1&&(d=ba),this.each(function(){p.event.remove(this,a,d,c)})},bind:function(a,b,c){return this.on(a,null,b,c)},unbind:function(a,b){return this.off(a,null,b)},live:function(a,b,c){return p(this.context).on(a,this.selector,b,c),this},die:function(a,b){return p(this.context).off(a,this.selector||"**",b),this},delegate:function(a,b,c,d){return this.on(b,a,c,d)},undelegate:function(a,b,c){return arguments.length==1?this.off(a,"**"):this.off(b,a||"**",c)},trigger:function(a,b){return this.each(function(){p.event.trigger(a,b,this)})},triggerHandler:function(a,b){if(this[0])return p.event.trigger(a,b,this[0],!0)},toggle:function(a){var b=arguments,c=a.guid||p.guid++,d=0,e=function(c){var e=(p._data(this,"lastToggle"+a.guid)||0)%d;return p._data(this,"lastToggle"+a.guid,e+1),c.preventDefault(),b[e].apply(this,arguments)||!1};e.guid=c;while(d<b.length)b[d++].guid=c;return this.click(e)},hover:function(a,b){return this.mouseenter(a).mouseleave(b||a)}}),p.each("blur focus focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup error contextmenu".split(" "),function(a,b){p.fn[b]=function(a,c){return c==null&&(c=a,a=null),arguments.length>0?this.on(b,null,a,c):this.trigger(b)},Y.test(b)&&(p.event.fixHooks[b]=p.event.keyHooks),Z.test(b)&&(p.event.fixHooks[b]=p.event.mouseHooks)}),function(a,b){function $(a,b,c,d){c=c||[],b=b||q;var e,f,g,j,k=b.nodeType;if(k!==1&&k!==9)return[];if(!a||typeof a!="string")return c;g=h(b);if(!g&&!d)if(e=L.exec(a))if(j=e[1]){if(k===9){f=b.getElementById(j);if(!f||!f.parentNode)return c;if(f.id===j)return c.push(f),c}else if(b.ownerDocument&&(f=b.ownerDocument.getElementById(j))&&i(b,f)&&f.id===j)return c.push(f),c}else{if(e[2])return u.apply(c,t.call(b.getElementsByTagName(a),0)),c;if((j=e[3])&&X&&b.getElementsByClassName)return u.apply(c,t.call(b.getElementsByClassName(j),0)),c}return bk(a,b,c,d,g)}function _(a){return function(b){var c=b.nodeName.toLowerCase();return c==="input"&&b.type===a}}function ba(a){return function(b){var c=b.nodeName.toLowerCase();return(c==="input"||c==="button")&&b.type===a}}function bb(a,b,c){if(a===b)return c;var d=a.nextSibling;while(d){if(d===b)return-1;d=d.nextSibling}return 1}function bc(a,b,c,d){var e,g,h,i,j,k,l,m,n,p,r=!c&&b!==q,s=(r?"<s>":"")+a.replace(H,"$1<s>"),u=y[o][s];if(u)return d?0:t.call(u,0);j=a,k=[],m=0,n=f.preFilter,p=f.filter;while(j){if(!e||(g=I.exec(j)))g&&(j=j.slice(g[0].length),h.selector=l),k.push(h=[]),l="",r&&(j=" "+j);e=!1;if(g=J.exec(j))l+=g[0],j=j.slice(g[0].length),e=h.push({part:g.pop().replace(H," "),string:g[0],captures:g});for(i in p)(g=S[i].exec(j))&&(!n[i]||(g=n[i](g,b,c)))&&(l+=g[0],j=j.slice(g[0].length),e=h.push({part:i,string:g.shift(),captures:g}));if(!e)break}return l&&(h.selector=l),d?j.length:j?$.error(a):t.call(y(s,k),0)}function bd(a,b,e,f){var g=b.dir,h=s++;return a||(a=function(a){return a===e}),b.first?function(b){while(b=b[g])if(b.nodeType===1)return a(b)&&b}:f?function(b){while(b=b[g])if(b.nodeType===1&&a(b))return b}:function(b){var e,f=h+"."+c,i=f+"."+d;while(b=b[g])if(b.nodeType===1){if((e=b[o])===i)return b.sizset;if(typeof e=="string"&&e.indexOf(f)===0){if(b.sizset)return b}else{b[o]=i;if(a(b))return b.sizset=!0,b;b.sizset=!1}}}}function be(a,b){return a?function(c){var d=b(c);return d&&a(d===!0?c:d)}:b}function bf(a,b,c){var d,e,g=0;for(;d=a[g];g++)f.relative[d.part]?e=bd(e,f.relative[d.part],b,c):e=be(e,f.filter[d.part].apply(null,d.captures.concat(b,c)));return e}function bg(a){return function(b){var c,d=0;for(;c=a[d];d++)if(c(b))return!0;return!1}}function bh(a,b,c,d){var e=0,f=b.length;for(;e<f;e++)$(a,b[e],c,d)}function bi(a,b,c,d,e,g){var h,i=f.setFilters[b.toLowerCase()];return i||$.error(b),(a||!(h=e))&&bh(a||"*",d,h=[],e),h.length>0?i(h,c,g):[]}function bj(a,c,d,e){var f,g,h,i,j,k,l,m,n,o,p,q,r,s=0,t=a.length,v=S.POS,w=new RegExp("^"+v.source+"(?!"+A+")","i"),x=function(){var a=1,c=arguments.length-2;for(;a<c;a++)arguments[a]===b&&(n[a]=b)};for(;s<t;s++){f=a[s],g="",m=e;for(h=0,i=f.length;h<i;h++){j=f[h],k=j.string;if(j.part==="PSEUDO"){v.exec(""),l=0;while(n=v.exec(k)){o=!0,p=v.lastIndex=n.index+n[0].length;if(p>l){g+=k.slice(l,n.index),l=p,q=[c],J.test(g)&&(m&&(q=m),m=e);if(r=O.test(g))g=g.slice(0,-5).replace(J,"$&*"),l++;n.length>1&&n[0].replace(w,x),m=bi(g,n[1],n[2],q,m,r)}g=""}}o||(g+=k),o=!1}g?J.test(g)?bh(g,m||[c],d,e):$(g,c,d,e?e.concat(m):m):u.apply(d,m)}return t===1?d:$.uniqueSort(d)}function bk(a,b,e,g,h){a=a.replace(H,"$1");var i,k,l,m,n,o,p,q,r,s,v=bc(a,b,h),w=b.nodeType;if(S.POS.test(a))return bj(v,b,e,g);if(g)i=t.call(g,0);else if(v.length===1){if((o=t.call(v[0],0)).length>2&&(p=o[0]).part==="ID"&&w===9&&!h&&f.relative[o[1].part]){b=f.find.ID(p.captures[0].replace(R,""),b,h)[0];if(!b)return e;a=a.slice(o.shift().string.length)}r=(v=N.exec(o[0].string))&&!v.index&&b.parentNode||b,q="";for(n=o.length-1;n>=0;n--){p=o[n],s=p.part,q=p.string+q;if(f.relative[s])break;if(f.order.test(s)){i=f.find[s](p.captures[0].replace(R,""),r,h);if(i==null)continue;a=a.slice(0,a.length-q.length)+q.replace(S[s],""),a||u.apply(e,t.call(i,0));break}}}if(a){k=j(a,b,h),c=k.dirruns++,i==null&&(i=f.find.TAG("*",N.test(a)&&b.parentNode||b));for(n=0;m=i[n];n++)d=k.runs++,k(m)&&e.push(m)}return e}var c,d,e,f,g,h,i,j,k,l,m=!0,n="undefined",o=("sizcache"+Math.random()).replace(".",""),q=a.document,r=q.documentElement,s=0,t=[].slice,u=[].push,v=function(a,b){return a[o]=b||!0,a},w=function(){var a={},b=[];return v(function(c,d){return b.push(c)>f.cacheLength&&delete a[b.shift()],a[c]=d},a)},x=w(),y=w(),z=w(),A="[\\x20\\t\\r\\n\\f]",B="(?:\\\\.|[-\\w]|[^\\x00-\\xa0])+",C=B.replace("w","w#"),D="([*^$|!~]?=)",E="\\["+A+"*("+B+")"+A+"*(?:"+D+A+"*(?:(['\"])((?:\\\\.|[^\\\\])*?)\\3|("+C+")|)|)"+A+"*\\]",F=":("+B+")(?:\\((?:(['\"])((?:\\\\.|[^\\\\])*?)\\2|([^()[\\]]*|(?:(?:"+E+")|[^:]|\\\\.)*|.*))\\)|)",G=":(nth|eq|gt|lt|first|last|even|odd)(?:\\(((?:-\\d)?\\d*)\\)|)(?=[^-]|$)",H=new RegExp("^"+A+"+|((?:^|[^\\\\])(?:\\\\.)*)"+A+"+$","g"),I=new RegExp("^"+A+"*,"+A+"*"),J=new RegExp("^"+A+"*([\\x20\\t\\r\\n\\f>+~])"+A+"*"),K=new RegExp(F),L=/^(?:#([\w\-]+)|(\w+)|\.([\w\-]+))$/,M=/^:not/,N=/[\x20\t\r\n\f]*[+~]/,O=/:not\($/,P=/h\d/i,Q=/input|select|textarea|button/i,R=/\\(?!\\)/g,S={ID:new RegExp("^#("+B+")"),CLASS:new RegExp("^\\.("+B+")"),NAME:new RegExp("^\\[name=['\"]?("+B+")['\"]?\\]"),TAG:new RegExp("^("+B.replace("w","w*")+")"),ATTR:new RegExp("^"+E),PSEUDO:new RegExp("^"+F),CHILD:new RegExp("^:(only|nth|last|first)-child(?:\\("+A+"*(even|odd|(([+-]|)(\\d*)n|)"+A+"*(?:([+-]|)"+A+"*(\\d+)|))"+A+"*\\)|)","i"),POS:new RegExp(G,"ig"),needsContext:new RegExp("^"+A+"*[>+~]|"+G,"i")},T=function(a){var b=q.createElement("div");try{return a(b)}catch(c){return!1}finally{b=null}},U=T(function(a){return a.appendChild(q.createComment("")),!a.getElementsByTagName("*").length}),V=T(function(a){return a.innerHTML="<a href='#'></a>",a.firstChild&&typeof a.firstChild.getAttribute!==n&&a.firstChild.getAttribute("href")==="#"}),W=T(function(a){a.innerHTML="<select></select>";var b=typeof a.lastChild.getAttribute("multiple");return b!=="boolean"&&b!=="string"}),X=T(function(a){return a.innerHTML="<div class='hidden e'></div><div class='hidden'></div>",!a.getElementsByClassName||!a.getElementsByClassName("e").length?!1:(a.lastChild.className="e",a.getElementsByClassName("e").length===2)}),Y=T(function(a){a.id=o+0,a.innerHTML="<a name='"+o+"'></a><div name='"+o+"'></div>",r.insertBefore(a,r.firstChild);var b=q.getElementsByName&&q.getElementsByName(o).length===2+q.getElementsByName(o+0).length;return e=!q.getElementById(o),r.removeChild(a),b});try{t.call(r.childNodes,0)[0].nodeType}catch(Z){t=function(a){var b,c=[];for(;b=this[a];a++)c.push(b);return c}}$.matches=function(a,b){return $(a,null,null,b)},$.matchesSelector=function(a,b){return $(b,null,null,[a]).length>0},g=$.getText=function(a){var b,c="",d=0,e=a.nodeType;if(e){if(e===1||e===9||e===11){if(typeof a.textContent=="string")return a.textContent;for(a=a.firstChild;a;a=a.nextSibling)c+=g(a)}else if(e===3||e===4)return a.nodeValue}else for(;b=a[d];d++)c+=g(b);return c},h=$.isXML=function(a){var b=a&&(a.ownerDocument||a).documentElement;return b?b.nodeName!=="HTML":!1},i=$.contains=r.contains?function(a,b){var c=a.nodeType===9?a.documentElement:a,d=b&&b.parentNode;return a===d||!!(d&&d.nodeType===1&&c.contains&&c.contains(d))}:r.compareDocumentPosition?function(a,b){return b&&!!(a.compareDocumentPosition(b)&16)}:function(a,b){while(b=b.parentNode)if(b===a)return!0;return!1},$.attr=function(a,b){var c,d=h(a);return d||(b=b.toLowerCase()),f.attrHandle[b]?f.attrHandle[b](a):W||d?a.getAttribute(b):(c=a.getAttributeNode(b),c?typeof a[b]=="boolean"?a[b]?b:null:c.specified?c.value:null:null)},f=$.selectors={cacheLength:50,createPseudo:v,match:S,order:new RegExp("ID|TAG"+(Y?"|NAME":"")+(X?"|CLASS":"")),attrHandle:V?{}:{href:function(a){return a.getAttribute("href",2)},type:function(a){return a.getAttribute("type")}},find:{ID:e?function(a,b,c){if(typeof b.getElementById!==n&&!c){var d=b.getElementById(a);return d&&d.parentNode?[d]:[]}}:function(a,c,d){if(typeof c.getElementById!==n&&!d){var e=c.getElementById(a);return e?e.id===a||typeof e.getAttributeNode!==n&&e.getAttributeNode("id").value===a?[e]:b:[]}},TAG:U?function(a,b){if(typeof b.getElementsByTagName!==n)return b.getElementsByTagName(a)}:function(a,b){var c=b.getElementsByTagName(a);if(a==="*"){var d,e=[],f=0;for(;d=c[f];f++)d.nodeType===1&&e.push(d);return e}return c},NAME:function(a,b){if(typeof b.getElementsByName!==n)return b.getElementsByName(name)},CLASS:function(a,b,c){if(typeof b.getElementsByClassName!==n&&!c)return b.getElementsByClassName(a)}},relative:{">":{dir:"parentNode",first:!0}," ":{dir:"parentNode"},"+":{dir:"previousSibling",first:!0},"~":{dir:"previousSibling"}},preFilter:{ATTR:function(a){return a[1]=a[1].replace(R,""),a[3]=(a[4]||a[5]||"").replace(R,""),a[2]==="~="&&(a[3]=" "+a[3]+" "),a.slice(0,4)},CHILD:function(a){return a[1]=a[1].toLowerCase(),a[1]==="nth"?(a[2]||$.error(a[0]),a[3]=+(a[3]?a[4]+(a[5]||1):2*(a[2]==="even"||a[2]==="odd")),a[4]=+(a[6]+a[7]||a[2]==="odd")):a[2]&&$.error(a[0]),a},PSEUDO:function(a,b,c){var d,e;if(S.CHILD.test(a[0]))return null;if(a[3])a[2]=a[3];else if(d=a[4])K.test(d)&&(e=bc(d,b,c,!0))&&(e=d.indexOf(")",d.length-e)-d.length)&&(d=d.slice(0,e),a[0]=a[0].slice(0,e)),a[2]=d;return a.slice(0,3)}},filter:{ID:e?function(a){return a=a.replace(R,""),function(b){return b.getAttribute("id")===a}}:function(a){return a=a.replace(R,""),function(b){var c=typeof b.getAttributeNode!==n&&b.getAttributeNode("id");return c&&c.value===a}},TAG:function(a){return a==="*"?function(){return!0}:(a=a.replace(R,"").toLowerCase(),function(b){return b.nodeName&&b.nodeName.toLowerCase()===a})},CLASS:function(a){var b=x[o][a];return b||(b=x(a,new RegExp("(^|"+A+")"+a+"("+A+"|$)"))),function(a){return b.test(a.className||typeof a.getAttribute!==n&&a.getAttribute("class")||"")}},ATTR:function(a,b,c){return b?function(d){var e=$.attr(d,a),f=e+"";if(e==null)return b==="!=";switch(b){case"=":return f===c;case"!=":return f!==c;case"^=":return c&&f.indexOf(c)===0;case"*=":return c&&f.indexOf(c)>-1;case"$=":return c&&f.substr(f.length-c.length)===c;case"~=":return(" "+f+" ").indexOf(c)>-1;case"|=":return f===c||f.substr(0,c.length+1)===c+"-"}}:function(b){return $.attr(b,a)!=null}},CHILD:function(a,b,c,d){if(a==="nth"){var e=s++;return function(a){var b,f,g=0,h=a;if(c===1&&d===0)return!0;b=a.parentNode;if(b&&(b[o]!==e||!a.sizset)){for(h=b.firstChild;h;h=h.nextSibling)if(h.nodeType===1){h.sizset=++g;if(h===a)break}b[o]=e}return f=a.sizset-d,c===0?f===0:f%c===0&&f/c>=0}}return function(b){var c=b;switch(a){case"only":case"first":while(c=c.previousSibling)if(c.nodeType===1)return!1;if(a==="first")return!0;c=b;case"last":while(c=c.nextSibling)if(c.nodeType===1)return!1;return!0}}},PSEUDO:function(a,b,c,d){var e,g=f.pseudos[a]||f.pseudos[a.toLowerCase()];return g||$.error("unsupported pseudo: "+a),g[o]?g(b,c,d):g.length>1?(e=[a,a,"",b],function(a){return g(a,0,e)}):g}},pseudos:{not:v(function(a,b,c){var d=j(a.replace(H,"$1"),b,c);return function(a){return!d(a)}}),enabled:function(a){return a.disabled===!1},disabled:function(a){return a.disabled===!0},checked:function(a){var b=a.nodeName.toLowerCase();return b==="input"&&!!a.checked||b==="option"&&!!a.selected},selected:function(a){return a.parentNode&&a.parentNode.selectedIndex,a.selected===!0},parent:function(a){return!f.pseudos.empty(a)},empty:function(a){var b;a=a.firstChild;while(a){if(a.nodeName>"@"||(b=a.nodeType)===3||b===4)return!1;a=a.nextSibling}return!0},contains:v(function(a){return function(b){return(b.textContent||b.innerText||g(b)).indexOf(a)>-1}}),has:v(function(a){return function(b){return $(a,b).length>0}}),header:function(a){return P.test(a.nodeName)},text:function(a){var b,c;return a.nodeName.toLowerCase()==="input"&&(b=a.type)==="text"&&((c=a.getAttribute("type"))==null||c.toLowerCase()===b)},radio:_("radio"),checkbox:_("checkbox"),file:_("file"),password:_("password"),image:_("image"),submit:ba("submit"),reset:ba("reset"),button:function(a){var b=a.nodeName.toLowerCase();return b==="input"&&a.type==="button"||b==="button"},input:function(a){return Q.test(a.nodeName)},focus:function(a){var b=a.ownerDocument;return a===b.activeElement&&(!b.hasFocus||b.hasFocus())&&(!!a.type||!!a.href)},active:function(a){return a===a.ownerDocument.activeElement}},setFilters:{first:function(a,b,c){return c?a.slice(1):[a[0]]},last:function(a,b,c){var d=a.pop();return c?a:[d]},even:function(a,b,c){var d=[],e=c?1:0,f=a.length;for(;e<f;e=e+2)d.push(a[e]);return d},odd:function(a,b,c){var d=[],e=c?0:1,f=a.length;for(;e<f;e=e+2)d.push(a[e]);return d},lt:function(a,b,c){return c?a.slice(+b):a.slice(0,+b)},gt:function(a,b,c){return c?a.slice(0,+b+1):a.slice(+b+1)},eq:function(a,b,c){var d=a.splice(+b,1);return c?a:d}}},k=r.compareDocumentPosition?function(a,b){return a===b?(l=!0,0):(!a.compareDocumentPosition||!b.compareDocumentPosition?a.compareDocumentPosition:a.compareDocumentPosition(b)&4)?-1:1}:function(a,b){if(a===b)return l=!0,0;if(a.sourceIndex&&b.sourceIndex)return a.sourceIndex-b.sourceIndex;var c,d,e=[],f=[],g=a.parentNode,h=b.parentNode,i=g;if(g===h)return bb(a,b);if(!g)return-1;if(!h)return 1;while(i)e.unshift(i),i=i.parentNode;i=h;while(i)f.unshift(i),i=i.parentNode;c=e.length,d=f.length;for(var j=0;j<c&&j<d;j++)if(e[j]!==f[j])return bb(e[j],f[j]);return j===c?bb(a,f[j],-1):bb(e[j],b,1)},[0,0].sort(k),m=!l,$.uniqueSort=function(a){var b,c=1;l=m,a.sort(k);if(l)for(;b=a[c];c++)b===a[c-1]&&a.splice(c--,1);return a},$.error=function(a){throw new Error("Syntax error, unrecognized expression: "+a)},j=$.compile=function(a,b,c){var d,e,f,g=z[o][a];if(g&&g.context===b)return g;d=bc(a,b,c);for(e=0,f=d.length;e<f;e++)d[e]=bf(d[e],b,c);return g=z(a,bg(d)),g.context=b,g.runs=g.dirruns=0,g},q.querySelectorAll&&function(){var a,b=bk,c=/'|\\/g,d=/\=[\x20\t\r\n\f]*([^'"\]]*)[\x20\t\r\n\f]*\]/g,e=[],f=[":active"],g=r.matchesSelector||r.mozMatchesSelector||r.webkitMatchesSelector||r.oMatchesSelector||r.msMatchesSelector;T(function(a){a.innerHTML="<select><option selected=''></option></select>",a.querySelectorAll("[selected]").length||e.push("\\["+A+"*(?:checked|disabled|ismap|multiple|readonly|selected|value)"),a.querySelectorAll(":checked").length||e.push(":checked")}),T(function(a){a.innerHTML="<p test=''></p>",a.querySelectorAll("[test^='']").length&&e.push("[*^$]="+A+"*(?:\"\"|'')"),a.innerHTML="<input type='hidden'/>",a.querySelectorAll(":enabled").length||e.push(":enabled",":disabled")}),e=e.length&&new RegExp(e.join("|")),bk=function(a,d,f,g,h){if(!g&&!h&&(!e||!e.test(a)))if(d.nodeType===9)try{return u.apply(f,t.call(d.querySelectorAll(a),0)),f}catch(i){}else if(d.nodeType===1&&d.nodeName.toLowerCase()!=="object"){var j,k,l,m=d.getAttribute("id"),n=m||o,p=N.test(a)&&d.parentNode||d;m?n=n.replace(c,"\\$&"):d.setAttribute("id",n),j=bc(a,d,h),n="[id='"+n+"']";for(k=0,l=j.length;k<l;k++)j[k]=n+j[k].selector;try{return u.apply(f,t.call(p.querySelectorAll(j.join(",")),0)),f}catch(i){}finally{m||d.removeAttribute("id")}}return b(a,d,f,g,h)},g&&(T(function(b){a=g.call(b,"div");try{g.call(b,"[test!='']:sizzle"),f.push(S.PSEUDO.source,S.POS.source,"!=")}catch(c){}}),f=new RegExp(f.join("|")),$.matchesSelector=function(b,c){c=c.replace(d,"='$1']");if(!h(b)&&!f.test(c)&&(!e||!e.test(c)))try{var i=g.call(b,c);if(i||a||b.document&&b.document.nodeType!==11)return i}catch(j){}return $(c,null,null,[b]).length>0})}(),f.setFilters.nth=f.setFilters.eq,f.filters=f.pseudos,$.attr=p.attr,p.find=$,p.expr=$.selectors,p.expr[":"]=p.expr.pseudos,p.unique=$.uniqueSort,p.text=$.getText,p.isXMLDoc=$.isXML,p.contains=$.contains}(a);var bc=/Until$/,bd=/^(?:parents|prev(?:Until|All))/,be=/^.[^:#\[\.,]*$/,bf=p.expr.match.needsContext,bg={children:!0,contents:!0,next:!0,prev:!0};p.fn.extend({find:function(a){var b,c,d,e,f,g,h=this;if(typeof a!="string")return p(a).filter(function(){for(b=0,c=h.length;b<c;b++)if(p.contains(h[b],this))return!0});g=this.pushStack("","find",a);for(b=0,c=this.length;b<c;b++){d=g.length,p.find(a,this[b],g);if(b>0)for(e=d;e<g.length;e++)for(f=0;f<d;f++)if(g[f]===g[e]){g.splice(e--,1);break}}return g},has:function(a){var b,c=p(a,this),d=c.length;return this.filter(function(){for(b=0;b<d;b++)if(p.contains(this,c[b]))return!0})},not:function(a){return this.pushStack(bj(this,a,!1),"not",a)},filter:function(a){return this.pushStack(bj(this,a,!0),"filter",a)},is:function(a){return!!a&&(typeof a=="string"?bf.test(a)?p(a,this.context).index(this[0])>=0:p.filter(a,this).length>0:this.filter(a).length>0)},closest:function(a,b){var c,d=0,e=this.length,f=[],g=bf.test(a)||typeof a!="string"?p(a,b||this.context):0;for(;d<e;d++){c=this[d];while(c&&c.ownerDocument&&c!==b&&c.nodeType!==11){if(g?g.index(c)>-1:p.find.matchesSelector(c,a)){f.push(c);break}c=c.parentNode}}return f=f.length>1?p.unique(f):f,this.pushStack(f,"closest",a)},index:function(a){return a?typeof a=="string"?p.inArray(this[0],p(a)):p.inArray(a.jquery?a[0]:a,this):this[0]&&this[0].parentNode?this.prevAll().length:-1},add:function(a,b){var c=typeof a=="string"?p(a,b):p.makeArray(a&&a.nodeType?[a]:a),d=p.merge(this.get(),c);return this.pushStack(bh(c[0])||bh(d[0])?d:p.unique(d))},addBack:function(a){return this.add(a==null?this.prevObject:this.prevObject.filter(a))}}),p.fn.andSelf=p.fn.addBack,p.each({parent:function(a){var b=a.parentNode;return b&&b.nodeType!==11?b:null},parents:function(a){return p.dir(a,"parentNode")},parentsUntil:function(a,b,c){return p.dir(a,"parentNode",c)},next:function(a){return bi(a,"nextSibling")},prev:function(a){return bi(a,"previousSibling")},nextAll:function(a){return p.dir(a,"nextSibling")},prevAll:function(a){return p.dir(a,"previousSibling")},nextUntil:function(a,b,c){return p.dir(a,"nextSibling",c)},prevUntil:function(a,b,c){return p.dir(a,"previousSibling",c)},siblings:function(a){return p.sibling((a.parentNode||{}).firstChild,a)},children:function(a){return p.sibling(a.firstChild)},contents:function(a){return p.nodeName(a,"iframe")?a.contentDocument||a.contentWindow.document:p.merge([],a.childNodes)}},function(a,b){p.fn[a]=function(c,d){var e=p.map(this,b,c);return bc.test(a)||(d=c),d&&typeof d=="string"&&(e=p.filter(d,e)),e=this.length>1&&!bg[a]?p.unique(e):e,this.length>1&&bd.test(a)&&(e=e.reverse()),this.pushStack(e,a,k.call(arguments).join(","))}}),p.extend({filter:function(a,b,c){return c&&(a=":not("+a+")"),b.length===1?p.find.matchesSelector(b[0],a)?[b[0]]:[]:p.find.matches(a,b)},dir:function(a,c,d){var e=[],f=a[c];while(f&&f.nodeType!==9&&(d===b||f.nodeType!==1||!p(f).is(d)))f.nodeType===1&&e.push(f),f=f[c];return e},sibling:function(a,b){var c=[];for(;a;a=a.nextSibling)a.nodeType===1&&a!==b&&c.push(a);return c}});var bl="abbr|article|aside|audio|bdi|canvas|data|datalist|details|figcaption|figure|footer|header|hgroup|mark|meter|nav|output|progress|section|summary|time|video",bm=/ jQuery\d+="(?:null|\d+)"/g,bn=/^\s+/,bo=/<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/gi,bp=/<([\w:]+)/,bq=/<tbody/i,br=/<|&#?\w+;/,bs=/<(?:script|style|link)/i,bt=/<(?:script|object|embed|option|style)/i,bu=new RegExp("<(?:"+bl+")[\\s/>]","i"),bv=/^(?:checkbox|radio)$/,bw=/checked\s*(?:[^=]|=\s*.checked.)/i,bx=/\/(java|ecma)script/i,by=/^\s*<!(?:\[CDATA\[|\-\-)|[\]\-]{2}>\s*$/g,bz={option:[1,"<select multiple='multiple'>","</select>"],legend:[1,"<fieldset>","</fieldset>"],thead:[1,"<table>","</table>"],tr:[2,"<table><tbody>","</tbody></table>"],td:[3,"<table><tbody><tr>","</tr></tbody></table>"],col:[2,"<table><tbody></tbody><colgroup>","</colgroup></table>"],area:[1,"<map>","</map>"],_default:[0,"",""]},bA=bk(e),bB=bA.appendChild(e.createElement("div"));bz.optgroup=bz.option,bz.tbody=bz.tfoot=bz.colgroup=bz.caption=bz.thead,bz.th=bz.td,p.support.htmlSerialize||(bz._default=[1,"X<div>","</div>"]),p.fn.extend({text:function(a){return p.access(this,function(a){return a===b?p.text(this):this.empty().append((this[0]&&this[0].ownerDocument||e).createTextNode(a))},null,a,arguments.length)},wrapAll:function(a){if(p.isFunction(a))return this.each(function(b){p(this).wrapAll(a.call(this,b))});if(this[0]){var b=p(a,this[0].ownerDocument).eq(0).clone(!0);this[0].parentNode&&b.insertBefore(this[0]),b.map(function(){var a=this;while(a.firstChild&&a.firstChild.nodeType===1)a=a.firstChild;return a}).append(this)}return this},wrapInner:function(a){return p.isFunction(a)?this.each(function(b){p(this).wrapInner(a.call(this,b))}):this.each(function(){var b=p(this),c=b.contents();c.length?c.wrapAll(a):b.append(a)})},wrap:function(a){var b=p.isFunction(a);return this.each(function(c){p(this).wrapAll(b?a.call(this,c):a)})},unwrap:function(){return this.parent().each(function(){p.nodeName(this,"body")||p(this).replaceWith(this.childNodes)}).end()},append:function(){return this.domManip(arguments,!0,function(a){(this.nodeType===1||this.nodeType===11)&&this.appendChild(a)})},prepend:function(){return this.domManip(arguments,!0,function(a){(this.nodeType===1||this.nodeType===11)&&this.insertBefore(a,this.firstChild)})},before:function(){if(!bh(this[0]))return this.domManip(arguments,!1,function(a){this.parentNode.insertBefore(a,this)});if(arguments.length){var a=p.clean(arguments);return this.pushStack(p.merge(a,this),"before",this.selector)}},after:function(){if(!bh(this[0]))return this.domManip(arguments,!1,function(a){this.parentNode.insertBefore(a,this.nextSibling)});if(arguments.length){var a=p.clean(arguments);return this.pushStack(p.merge(this,a),"after",this.selector)}},remove:function(a,b){var c,d=0;for(;(c=this[d])!=null;d++)if(!a||p.filter(a,[c]).length)!b&&c.nodeType===1&&(p.cleanData(c.getElementsByTagName("*")),p.cleanData([c])),c.parentNode&&c.parentNode.removeChild(c);return this},empty:function(){var a,b=0;for(;(a=this[b])!=null;b++){a.nodeType===1&&p.cleanData(a.getElementsByTagName("*"));while(a.firstChild)a.removeChild(a.firstChild)}return this},clone:function(a,b){return a=a==null?!1:a,b=b==null?a:b,this.map(function(){return p.clone(this,a,b)})},html:function(a){return p.access(this,function(a){var c=this[0]||{},d=0,e=this.length;if(a===b)return c.nodeType===1?c.innerHTML.replace(bm,""):b;if(typeof a=="string"&&!bs.test(a)&&(p.support.htmlSerialize||!bu.test(a))&&(p.support.leadingWhitespace||!bn.test(a))&&!bz[(bp.exec(a)||["",""])[1].toLowerCase()]){a=a.replace(bo,"<$1></$2>");try{for(;d<e;d++)c=this[d]||{},c.nodeType===1&&(p.cleanData(c.getElementsByTagName("*")),c.innerHTML=a);c=0}catch(f){}}c&&this.empty().append(a)},null,a,arguments.length)},replaceWith:function(a){return bh(this[0])?this.length?this.pushStack(p(p.isFunction(a)?a():a),"replaceWith",a):this:p.isFunction(a)?this.each(function(b){var c=p(this),d=c.html();c.replaceWith(a.call(this,b,d))}):(typeof a!="string"&&(a=p(a).detach()),this.each(function(){var b=this.nextSibling,c=this.parentNode;p(this).remove(),b?p(b).before(a):p(c).append(a)}))},detach:function(a){return this.remove(a,!0)},domManip:function(a,c,d){a=[].concat.apply([],a);var e,f,g,h,i=0,j=a[0],k=[],l=this.length;if(!p.support.checkClone&&l>1&&typeof j=="string"&&bw.test(j))return this.each(function(){p(this).domManip(a,c,d)});if(p.isFunction(j))return this.each(function(e){var f=p(this);a[0]=j.call(this,e,c?f.html():b),f.domManip(a,c,d)});if(this[0]){e=p.buildFragment(a,this,k),g=e.fragment,f=g.firstChild,g.childNodes.length===1&&(g=f);if(f){c=c&&p.nodeName(f,"tr");for(h=e.cacheable||l-1;i<l;i++)d.call(c&&p.nodeName(this[i],"table")?bC(this[i],"tbody"):this[i],i===h?g:p.clone(g,!0,!0))}g=f=null,k.length&&p.each(k,function(a,b){b.src?p.ajax?p.ajax({url:b.src,type:"GET",dataType:"script",async:!1,global:!1,"throws":!0}):p.error("no ajax"):p.globalEval((b.text||b.textContent||b.innerHTML||"").replace(by,"")),b.parentNode&&b.parentNode.removeChild(b)})}return this}}),p.buildFragment=function(a,c,d){var f,g,h,i=a[0];return c=c||e,c=!c.nodeType&&c[0]||c,c=c.ownerDocument||c,a.length===1&&typeof i=="string"&&i.length<512&&c===e&&i.charAt(0)==="<"&&!bt.test(i)&&(p.support.checkClone||!bw.test(i))&&(p.support.html5Clone||!bu.test(i))&&(g=!0,f=p.fragments[i],h=f!==b),f||(f=c.createDocumentFragment(),p.clean(a,c,f,d),g&&(p.fragments[i]=h&&f)),{fragment:f,cacheable:g}},p.fragments={},p.each({appendTo:"append",prependTo:"prepend",insertBefore:"before",insertAfter:"after",replaceAll:"replaceWith"},function(a,b){p.fn[a]=function(c){var d,e=0,f=[],g=p(c),h=g.length,i=this.length===1&&this[0].parentNode;if((i==null||i&&i.nodeType===11&&i.childNodes.length===1)&&h===1)return g[b](this[0]),this;for(;e<h;e++)d=(e>0?this.clone(!0):this).get(),p(g[e])[b](d),f=f.concat(d);return this.pushStack(f,a,g.selector)}}),p.extend({clone:function(a,b,c){var d,e,f,g;p.support.html5Clone||p.isXMLDoc(a)||!bu.test("<"+a.nodeName+">")?g=a.cloneNode(!0):(bB.innerHTML=a.outerHTML,bB.removeChild(g=bB.firstChild));if((!p.support.noCloneEvent||!p.support.noCloneChecked)&&(a.nodeType===1||a.nodeType===11)&&!p.isXMLDoc(a)){bE(a,g),d=bF(a),e=bF(g);for(f=0;d[f];++f)e[f]&&bE(d[f],e[f])}if(b){bD(a,g);if(c){d=bF(a),e=bF(g);for(f=0;d[f];++f)bD(d[f],e[f])}}return d=e=null,g},clean:function(a,b,c,d){var f,g,h,i,j,k,l,m,n,o,q,r,s=b===e&&bA,t=[];if(!b||typeof b.createDocumentFragment=="undefined")b=e;for(f=0;(h=a[f])!=null;f++){typeof h=="number"&&(h+="");if(!h)continue;if(typeof h=="string")if(!br.test(h))h=b.createTextNode(h);else{s=s||bk(b),l=b.createElement("div"),s.appendChild(l),h=h.replace(bo,"<$1></$2>"),i=(bp.exec(h)||["",""])[1].toLowerCase(),j=bz[i]||bz._default,k=j[0],l.innerHTML=j[1]+h+j[2];while(k--)l=l.lastChild;if(!p.support.tbody){m=bq.test(h),n=i==="table"&&!m?l.firstChild&&l.firstChild.childNodes:j[1]==="<table>"&&!m?l.childNodes:[];for(g=n.length-1;g>=0;--g)p.nodeName(n[g],"tbody")&&!n[g].childNodes.length&&n[g].parentNode.removeChild(n[g])}!p.support.leadingWhitespace&&bn.test(h)&&l.insertBefore(b.createTextNode(bn.exec(h)[0]),l.firstChild),h=l.childNodes,l.parentNode.removeChild(l)}h.nodeType?t.push(h):p.merge(t,h)}l&&(h=l=s=null);if(!p.support.appendChecked)for(f=0;(h=t[f])!=null;f++)p.nodeName(h,"input")?bG(h):typeof h.getElementsByTagName!="undefined"&&p.grep(h.getElementsByTagName("input"),bG);if(c){q=function(a){if(!a.type||bx.test(a.type))return d?d.push(a.parentNode?a.parentNode.removeChild(a):a):c.appendChild(a)};for(f=0;(h=t[f])!=null;f++)if(!p.nodeName(h,"script")||!q(h))c.appendChild(h),typeof h.getElementsByTagName!="undefined"&&(r=p.grep(p.merge([],h.getElementsByTagName("script")),q),t.splice.apply(t,[f+1,0].concat(r)),f+=r.length)}return t},cleanData:function(a,b){var c,d,e,f,g=0,h=p.expando,i=p.cache,j=p.support.deleteExpando,k=p.event.special;for(;(e=a[g])!=null;g++)if(b||p.acceptData(e)){d=e[h],c=d&&i[d];if(c){if(c.events)for(f in c.events)k[f]?p.event.remove(e,f):p.removeEvent(e,f,c.handle);i[d]&&(delete i[d],j?delete e[h]:e.removeAttribute?e.removeAttribute(h):e[h]=null,p.deletedIds.push(d))}}}}),function(){var a,b;p.uaMatch=function(a){a=a.toLowerCase();var b=/(chrome)[ \/]([\w.]+)/.exec(a)||/(webkit)[ \/]([\w.]+)/.exec(a)||/(opera)(?:.*version|)[ \/]([\w.]+)/.exec(a)||/(msie) ([\w.]+)/.exec(a)||a.indexOf("compatible")<0&&/(mozilla)(?:.*? rv:([\w.]+)|)/.exec(a)||[];return{browser:b[1]||"",version:b[2]||"0"}},a=p.uaMatch(g.userAgent),b={},a.browser&&(b[a.browser]=!0,b.version=a.version),b.chrome?b.webkit=!0:b.webkit&&(b.safari=!0),p.browser=b,p.sub=function(){function a(b,c){return new a.fn.init(b,c)}p.extend(!0,a,this),a.superclass=this,a.fn=a.prototype=this(),a.fn.constructor=a,a.sub=this.sub,a.fn.init=function c(c,d){return d&&d instanceof p&&!(d instanceof a)&&(d=a(d)),p.fn.init.call(this,c,d,b)},a.fn.init.prototype=a.fn;var b=a(e);return a}}();var bH,bI,bJ,bK=/alpha\([^)]*\)/i,bL=/opacity=([^)]*)/,bM=/^(top|right|bottom|left)$/,bN=/^(none|table(?!-c[ea]).+)/,bO=/^margin/,bP=new RegExp("^("+q+")(.*)$","i"),bQ=new RegExp("^("+q+")(?!px)[a-z%]+$","i"),bR=new RegExp("^([-+])=("+q+")","i"),bS={},bT={position:"absolute",visibility:"hidden",display:"block"},bU={letterSpacing:0,fontWeight:400},bV=["Top","Right","Bottom","Left"],bW=["Webkit","O","Moz","ms"],bX=p.fn.toggle;p.fn.extend({css:function(a,c){return p.access(this,function(a,c,d){return d!==b?p.style(a,c,d):p.css(a,c)},a,c,arguments.length>1)},show:function(){return b$(this,!0)},hide:function(){return b$(this)},toggle:function(a,b){var c=typeof a=="boolean";return p.isFunction(a)&&p.isFunction(b)?bX.apply(this,arguments):this.each(function(){(c?a:bZ(this))?p(this).show():p(this).hide()})}}),p.extend({cssHooks:{opacity:{get:function(a,b){if(b){var c=bH(a,"opacity");return c===""?"1":c}}}},cssNumber:{fillOpacity:!0,fontWeight:!0,lineHeight:!0,opacity:!0,orphans:!0,widows:!0,zIndex:!0,zoom:!0},cssProps:{"float":p.support.cssFloat?"cssFloat":"styleFloat"},style:function(a,c,d,e){if(!a||a.nodeType===3||a.nodeType===8||!a.style)return;var f,g,h,i=p.camelCase(c),j=a.style;c=p.cssProps[i]||(p.cssProps[i]=bY(j,i)),h=p.cssHooks[c]||p.cssHooks[i];if(d===b)return h&&"get"in h&&(f=h.get(a,!1,e))!==b?f:j[c];g=typeof d,g==="string"&&(f=bR.exec(d))&&(d=(f[1]+1)*f[2]+parseFloat(p.css(a,c)),g="number");if(d==null||g==="number"&&isNaN(d))return;g==="number"&&!p.cssNumber[i]&&(d+="px");if(!h||!("set"in h)||(d=h.set(a,d,e))!==b)try{j[c]=d}catch(k){}},css:function(a,c,d,e){var f,g,h,i=p.camelCase(c);return c=p.cssProps[i]||(p.cssProps[i]=bY(a.style,i)),h=p.cssHooks[c]||p.cssHooks[i],h&&"get"in h&&(f=h.get(a,!0,e)),f===b&&(f=bH(a,c)),f==="normal"&&c in bU&&(f=bU[c]),d||e!==b?(g=parseFloat(f),d||p.isNumeric(g)?g||0:f):f},swap:function(a,b,c){var d,e,f={};for(e in b)f[e]=a.style[e],a.style[e]=b[e];d=c.call(a);for(e in b)a.style[e]=f[e];return d}}),a.getComputedStyle?bH=function(b,c){var d,e,f,g,h=a.getComputedStyle(b,null),i=b.style;return h&&(d=h[c],d===""&&!p.contains(b.ownerDocument,b)&&(d=p.style(b,c)),bQ.test(d)&&bO.test(c)&&(e=i.width,f=i.minWidth,g=i.maxWidth,i.minWidth=i.maxWidth=i.width=d,d=h.width,i.width=e,i.minWidth=f,i.maxWidth=g)),d}:e.documentElement.currentStyle&&(bH=function(a,b){var c,d,e=a.currentStyle&&a.currentStyle[b],f=a.style;return e==null&&f&&f[b]&&(e=f[b]),bQ.test(e)&&!bM.test(b)&&(c=f.left,d=a.runtimeStyle&&a.runtimeStyle.left,d&&(a.runtimeStyle.left=a.currentStyle.left),f.left=b==="fontSize"?"1em":e,e=f.pixelLeft+"px",f.left=c,d&&(a.runtimeStyle.left=d)),e===""?"auto":e}),p.each(["height","width"],function(a,b){p.cssHooks[b]={get:function(a,c,d){if(c)return a.offsetWidth===0&&bN.test(bH(a,"display"))?p.swap(a,bT,function(){return cb(a,b,d)}):cb(a,b,d)},set:function(a,c,d){return b_(a,c,d?ca(a,b,d,p.support.boxSizing&&p.css(a,"boxSizing")==="border-box"):0)}}}),p.support.opacity||(p.cssHooks.opacity={get:function(a,b){return bL.test((b&&a.currentStyle?a.currentStyle.filter:a.style.filter)||"")?.01*parseFloat(RegExp.$1)+"":b?"1":""},set:function(a,b){var c=a.style,d=a.currentStyle,e=p.isNumeric(b)?"alpha(opacity="+b*100+")":"",f=d&&d.filter||c.filter||"";c.zoom=1;if(b>=1&&p.trim(f.replace(bK,""))===""&&c.removeAttribute){c.removeAttribute("filter");if(d&&!d.filter)return}c.filter=bK.test(f)?f.replace(bK,e):f+" "+e}}),p(function(){p.support.reliableMarginRight||(p.cssHooks.marginRight={get:function(a,b){return p.swap(a,{display:"inline-block"},function(){if(b)return bH(a,"marginRight")})}}),!p.support.pixelPosition&&p.fn.position&&p.each(["top","left"],function(a,b){p.cssHooks[b]={get:function(a,c){if(c){var d=bH(a,b);return bQ.test(d)?p(a).position()[b]+"px":d}}}})}),p.expr&&p.expr.filters&&(p.expr.filters.hidden=function(a){return a.offsetWidth===0&&a.offsetHeight===0||!p.support.reliableHiddenOffsets&&(a.style&&a.style.display||bH(a,"display"))==="none"},p.expr.filters.visible=function(a){return!p.expr.filters.hidden(a)}),p.each({margin:"",padding:"",border:"Width"},function(a,b){p.cssHooks[a+b]={expand:function(c){var d,e=typeof c=="string"?c.split(" "):[c],f={};for(d=0;d<4;d++)f[a+bV[d]+b]=e[d]||e[d-2]||e[0];return f}},bO.test(a)||(p.cssHooks[a+b].set=b_)});var cd=/%20/g,ce=/\[\]$/,cf=/\r?\n/g,cg=/^(?:color|date|datetime|datetime-local|email|hidden|month|number|password|range|search|tel|text|time|url|week)$/i,ch=/^(?:select|textarea)/i;p.fn.extend({serialize:function(){return p.param(this.serializeArray())},serializeArray:function(){return this.map(function(){return this.elements?p.makeArray(this.elements):this}).filter(function(){return this.name&&!this.disabled&&(this.checked||ch.test(this.nodeName)||cg.test(this.type))}).map(function(a,b){var c=p(this).val();return c==null?null:p.isArray(c)?p.map(c,function(a,c){return{name:b.name,value:a.replace(cf,"\r\n")}}):{name:b.name,value:c.replace(cf,"\r\n")}}).get()}}),p.param=function(a,c){var d,e=[],f=function(a,b){b=p.isFunction(b)?b():b==null?"":b,e[e.length]=encodeURIComponent(a)+"="+encodeURIComponent(b)};c===b&&(c=p.ajaxSettings&&p.ajaxSettings.traditional);if(p.isArray(a)||a.jquery&&!p.isPlainObject(a))p.each(a,function(){f(this.name,this.value)});else for(d in a)ci(d,a[d],c,f);return e.join("&").replace(cd,"+")};var cj,ck,cl=/#.*$/,cm=/^(.*?):[ \t]*([^\r\n]*)\r?$/mg,cn=/^(?:about|app|app\-storage|.+\-extension|file|res|widget):$/,co=/^(?:GET|HEAD)$/,cp=/^\/\//,cq=/\?/,cr=/<script\b[^<]*(?:(?!<\/script>)<[^<]*)*<\/script>/gi,cs=/([?&])_=[^&]*/,ct=/^([\w\+\.\-]+:)(?:\/\/([^\/?#:]*)(?::(\d+)|)|)/,cu=p.fn.load,cv={},cw={},cx=["*/"]+["*"];try{cj=f.href}catch(cy){cj=e.createElement("a"),cj.href="",cj=cj.href}ck=ct.exec(cj.toLowerCase())||[],p.fn.load=function(a,c,d){if(typeof a!="string"&&cu)return cu.apply(this,arguments);if(!this.length)return this;var e,f,g,h=this,i=a.indexOf(" ");return i>=0&&(e=a.slice(i,a.length),a=a.slice(0,i)),p.isFunction(c)?(d=c,c=b):c&&typeof c=="object"&&(f="POST"),p.ajax({url:a,type:f,dataType:"html",data:c,complete:function(a,b){d&&h.each(d,g||[a.responseText,b,a])}}).done(function(a){g=arguments,h.html(e?p("<div>").append(a.replace(cr,"")).find(e):a)}),this},p.each("ajaxStart ajaxStop ajaxComplete ajaxError ajaxSuccess ajaxSend".split(" "),function(a,b){p.fn[b]=function(a){return this.on(b,a)}}),p.each(["get","post"],function(a,c){p[c]=function(a,d,e,f){return p.isFunction(d)&&(f=f||e,e=d,d=b),p.ajax({type:c,url:a,data:d,success:e,dataType:f})}}),p.extend({getScript:function(a,c){return p.get(a,b,c,"script")},getJSON:function(a,b,c){return p.get(a,b,c,"json")},ajaxSetup:function(a,b){return b?cB(a,p.ajaxSettings):(b=a,a=p.ajaxSettings),cB(a,b),a},ajaxSettings:{url:cj,isLocal:cn.test(ck[1]),global:!0,type:"GET",contentType:"application/x-www-form-urlencoded; charset=UTF-8",processData:!0,async:!0,accepts:{xml:"application/xml, text/xml",html:"text/html",text:"text/plain",json:"application/json, text/javascript","*":cx},contents:{xml:/xml/,html:/html/,json:/json/},responseFields:{xml:"responseXML",text:"responseText"},converters:{"* text":a.String,"text html":!0,"text json":p.parseJSON,"text xml":p.parseXML},flatOptions:{context:!0,url:!0}},ajaxPrefilter:cz(cv),ajaxTransport:cz(cw),ajax:function(a,c){function y(a,c,f,i){var k,s,t,u,w,y=c;if(v===2)return;v=2,h&&clearTimeout(h),g=b,e=i||"",x.readyState=a>0?4:0,f&&(u=cC(l,x,f));if(a>=200&&a<300||a===304)l.ifModified&&(w=x.getResponseHeader("Last-Modified"),w&&(p.lastModified[d]=w),w=x.getResponseHeader("Etag"),w&&(p.etag[d]=w)),a===304?(y="notmodified",k=!0):(k=cD(l,u),y=k.state,s=k.data,t=k.error,k=!t);else{t=y;if(!y||a)y="error",a<0&&(a=0)}x.status=a,x.statusText=""+(c||y),k?o.resolveWith(m,[s,y,x]):o.rejectWith(m,[x,y,t]),x.statusCode(r),r=b,j&&n.trigger("ajax"+(k?"Success":"Error"),[x,l,k?s:t]),q.fireWith(m,[x,y]),j&&(n.trigger("ajaxComplete",[x,l]),--p.active||p.event.trigger("ajaxStop"))}typeof a=="object"&&(c=a,a=b),c=c||{};var d,e,f,g,h,i,j,k,l=p.ajaxSetup({},c),m=l.context||l,n=m!==l&&(m.nodeType||m instanceof p)?p(m):p.event,o=p.Deferred(),q=p.Callbacks("once memory"),r=l.statusCode||{},t={},u={},v=0,w="canceled",x={readyState:0,setRequestHeader:function(a,b){if(!v){var c=a.toLowerCase();a=u[c]=u[c]||a,t[a]=b}return this},getAllResponseHeaders:function(){return v===2?e:null},getResponseHeader:function(a){var c;if(v===2){if(!f){f={};while(c=cm.exec(e))f[c[1].toLowerCase()]=c[2]}c=f[a.toLowerCase()]}return c===b?null:c},overrideMimeType:function(a){return v||(l.mimeType=a),this},abort:function(a){return a=a||w,g&&g.abort(a),y(0,a),this}};o.promise(x),x.success=x.done,x.error=x.fail,x.complete=q.add,x.statusCode=function(a){if(a){var b;if(v<2)for(b in a)r[b]=[r[b],a[b]];else b=a[x.status],x.always(b)}return this},l.url=((a||l.url)+"").replace(cl,"").replace(cp,ck[1]+"//"),l.dataTypes=p.trim(l.dataType||"*").toLowerCase().split(s),l.crossDomain==null&&(i=ct.exec(l.url.toLowerCase()),l.crossDomain=!(!i||i[1]==ck[1]&&i[2]==ck[2]&&(i[3]||(i[1]==="http:"?80:443))==(ck[3]||(ck[1]==="http:"?80:443)))),l.data&&l.processData&&typeof l.data!="string"&&(l.data=p.param(l.data,l.traditional)),cA(cv,l,c,x);if(v===2)return x;j=l.global,l.type=l.type.toUpperCase(),l.hasContent=!co.test(l.type),j&&p.active++===0&&p.event.trigger("ajaxStart");if(!l.hasContent){l.data&&(l.url+=(cq.test(l.url)?"&":"?")+l.data,delete l.data),d=l.url;if(l.cache===!1){var z=p.now(),A=l.url.replace(cs,"$1_="+z);l.url=A+(A===l.url?(cq.test(l.url)?"&":"?")+"_="+z:"")}}(l.data&&l.hasContent&&l.contentType!==!1||c.contentType)&&x.setRequestHeader("Content-Type",l.contentType),l.ifModified&&(d=d||l.url,p.lastModified[d]&&x.setRequestHeader("If-Modified-Since",p.lastModified[d]),p.etag[d]&&x.setRequestHeader("If-None-Match",p.etag[d])),x.setRequestHeader("Accept",l.dataTypes[0]&&l.accepts[l.dataTypes[0]]?l.accepts[l.dataTypes[0]]+(l.dataTypes[0]!=="*"?", "+cx+"; q=0.01":""):l.accepts["*"]);for(k in l.headers)x.setRequestHeader(k,l.headers[k]);if(!l.beforeSend||l.beforeSend.call(m,x,l)!==!1&&v!==2){w="abort";for(k in{success:1,error:1,complete:1})x[k](l[k]);g=cA(cw,l,c,x);if(!g)y(-1,"No Transport");else{x.readyState=1,j&&n.trigger("ajaxSend",[x,l]),l.async&&l.timeout>0&&(h=setTimeout(function(){x.abort("timeout")},l.timeout));try{v=1,g.send(t,y)}catch(B){if(v<2)y(-1,B);else throw B}}return x}return x.abort()},active:0,lastModified:{},etag:{}});var cE=[],cF=/\?/,cG=/(=)\?(?=&|$)|\?\?/,cH=p.now();p.ajaxSetup({jsonp:"callback",jsonpCallback:function(){var a=cE.pop()||p.expando+"_"+cH++;return this[a]=!0,a}}),p.ajaxPrefilter("json jsonp",function(c,d,e){var f,g,h,i=c.data,j=c.url,k=c.jsonp!==!1,l=k&&cG.test(j),m=k&&!l&&typeof i=="string"&&!(c.contentType||"").indexOf("application/x-www-form-urlencoded")&&cG.test(i);if(c.dataTypes[0]==="jsonp"||l||m)return f=c.jsonpCallback=p.isFunction(c.jsonpCallback)?c.jsonpCallback():c.jsonpCallback,g=a[f],l?c.url=j.replace(cG,"$1"+f):m?c.data=i.replace(cG,"$1"+f):k&&(c.url+=(cF.test(j)?"&":"?")+c.jsonp+"="+f),c.converters["script json"]=function(){return h||p.error(f+" was not called"),h[0]},c.dataTypes[0]="json",a[f]=function(){h=arguments},e.always(function(){a[f]=g,c[f]&&(c.jsonpCallback=d.jsonpCallback,cE.push(f)),h&&p.isFunction(g)&&g(h[0]),h=g=b}),"script"}),p.ajaxSetup({accepts:{script:"text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"},contents:{script:/javascript|ecmascript/},converters:{"text script":function(a){return p.globalEval(a),a}}}),p.ajaxPrefilter("script",function(a){a.cache===b&&(a.cache=!1),a.crossDomain&&(a.type="GET",a.global=!1)}),p.ajaxTransport("script",function(a){if(a.crossDomain){var c,d=e.head||e.getElementsByTagName("head")[0]||e.documentElement;return{send:function(f,g){c=e.createElement("script"),c.async="async",a.scriptCharset&&(c.charset=a.scriptCharset),c.src=a.url,c.onload=c.onreadystatechange=function(a,e){if(e||!c.readyState||/loaded|complete/.test(c.readyState))c.onload=c.onreadystatechange=null,d&&c.parentNode&&d.removeChild(c),c=b,e||g(200,"success")},d.insertBefore(c,d.firstChild)},abort:function(){c&&c.onload(0,1)}}}});var cI,cJ=a.ActiveXObject?function(){for(var a in cI)cI[a](0,1)}:!1,cK=0;p.ajaxSettings.xhr=a.ActiveXObject?function(){return!this.isLocal&&cL()||cM()}:cL,function(a){p.extend(p.support,{ajax:!!a,cors:!!a&&"withCredentials"in a})}(p.ajaxSettings.xhr()),p.support.ajax&&p.ajaxTransport(function(c){if(!c.crossDomain||p.support.cors){var d;return{send:function(e,f){var g,h,i=c.xhr();c.username?i.open(c.type,c.url,c.async,c.username,c.password):i.open(c.type,c.url,c.async);if(c.xhrFields)for(h in c.xhrFields)i[h]=c.xhrFields[h];c.mimeType&&i.overrideMimeType&&i.overrideMimeType(c.mimeType),!c.crossDomain&&!e["X-Requested-With"]&&(e["X-Requested-With"]="XMLHttpRequest");try{for(h in e)i.setRequestHeader(h,e[h])}catch(j){}i.send(c.hasContent&&c.data||null),d=function(a,e){var h,j,k,l,m;try{if(d&&(e||i.readyState===4)){d=b,g&&(i.onreadystatechange=p.noop,cJ&&delete cI[g]);if(e)i.readyState!==4&&i.abort();else{h=i.status,k=i.getAllResponseHeaders(),l={},m=i.responseXML,m&&m.documentElement&&(l.xml=m);try{l.text=i.responseText}catch(a){}try{j=i.statusText}catch(n){j=""}!h&&c.isLocal&&!c.crossDomain?h=l.text?200:404:h===1223&&(h=204)}}}catch(o){e||f(-1,o)}l&&f(h,j,l,k)},c.async?i.readyState===4?setTimeout(d,0):(g=++cK,cJ&&(cI||(cI={},p(a).unload(cJ)),cI[g]=d),i.onreadystatechange=d):d()},abort:function(){d&&d(0,1)}}}});var cN,cO,cP=/^(?:toggle|show|hide)$/,cQ=new RegExp("^(?:([-+])=|)("+q+")([a-z%]*)$","i"),cR=/queueHooks$/,cS=[cY],cT={"*":[function(a,b){var c,d,e,f=this.createTween(a,b),g=cQ.exec(b),h=f.cur(),i=+h||0,j=1;if(g){c=+g[2],d=g[3]||(p.cssNumber[a]?"":"px");if(d!=="px"&&i){i=p.css(f.elem,a,!0)||c||1;do e=j=j||".5",i=i/j,p.style(f.elem,a,i+d),j=f.cur()/h;while(j!==1&&j!==e)}f.unit=d,f.start=i,f.end=g[1]?i+(g[1]+1)*c:c}return f}]};p.Animation=p.extend(cW,{tweener:function(a,b){p.isFunction(a)?(b=a,a=["*"]):a=a.split(" ");var c,d=0,e=a.length;for(;d<e;d++)c=a[d],cT[c]=cT[c]||[],cT[c].unshift(b)},prefilter:function(a,b){b?cS.unshift(a):cS.push(a)}}),p.Tween=cZ,cZ.prototype={constructor:cZ,init:function(a,b,c,d,e,f){this.elem=a,this.prop=c,this.easing=e||"swing",this.options=b,this.start=this.now=this.cur(),this.end=d,this.unit=f||(p.cssNumber[c]?"":"px")},cur:function(){var a=cZ.propHooks[this.prop];return a&&a.get?a.get(this):cZ.propHooks._default.get(this)},run:function(a){var b,c=cZ.propHooks[this.prop];return this.options.duration?this.pos=b=p.easing[this.easing](a,this.options.duration*a,0,1,this.options.duration):this.pos=b=a,this.now=(this.end-this.start)*b+this.start,this.options.step&&this.options.step.call(this.elem,this.now,this),c&&c.set?c.set(this):cZ.propHooks._default.set(this),this}},cZ.prototype.init.prototype=cZ.prototype,cZ.propHooks={_default:{get:function(a){var b;return a.elem[a.prop]==null||!!a.elem.style&&a.elem.style[a.prop]!=null?(b=p.css(a.elem,a.prop,!1,""),!b||b==="auto"?0:b):a.elem[a.prop]},set:function(a){p.fx.step[a.prop]?p.fx.step[a.prop](a):a.elem.style&&(a.elem.style[p.cssProps[a.prop]]!=null||p.cssHooks[a.prop])?p.style(a.elem,a.prop,a.now+a.unit):a.elem[a.prop]=a.now}}},cZ.propHooks.scrollTop=cZ.propHooks.scrollLeft={set:function(a){a.elem.nodeType&&a.elem.parentNode&&(a.elem[a.prop]=a.now)}},p.each(["toggle","show","hide"],function(a,b){var c=p.fn[b];p.fn[b]=function(d,e,f){return d==null||typeof d=="boolean"||!a&&p.isFunction(d)&&p.isFunction(e)?c.apply(this,arguments):this.animate(c$(b,!0),d,e,f)}}),p.fn.extend({fadeTo:function(a,b,c,d){return this.filter(bZ).css("opacity",0).show().end().animate({opacity:b},a,c,d)},animate:function(a,b,c,d){var e=p.isEmptyObject(a),f=p.speed(b,c,d),g=function(){var b=cW(this,p.extend({},a),f);e&&b.stop(!0)};return e||f.queue===!1?this.each(g):this.queue(f.queue,g)},stop:function(a,c,d){var e=function(a){var b=a.stop;delete a.stop,b(d)};return typeof a!="string"&&(d=c,c=a,a=b),c&&a!==!1&&this.queue(a||"fx",[]),this.each(function(){var b=!0,c=a!=null&&a+"queueHooks",f=p.timers,g=p._data(this);if(c)g[c]&&g[c].stop&&e(g[c]);else for(c in g)g[c]&&g[c].stop&&cR.test(c)&&e(g[c]);for(c=f.length;c--;)f[c].elem===this&&(a==null||f[c].queue===a)&&(f[c].anim.stop(d),b=!1,f.splice(c,1));(b||!d)&&p.dequeue(this,a)})}}),p.each({slideDown:c$("show"),slideUp:c$("hide"),slideToggle:c$("toggle"),fadeIn:{opacity:"show"},fadeOut:{opacity:"hide"},fadeToggle:{opacity:"toggle"}},function(a,b){p.fn[a]=function(a,c,d){return this.animate(b,a,c,d)}}),p.speed=function(a,b,c){var d=a&&typeof a=="object"?p.extend({},a):{complete:c||!c&&b||p.isFunction(a)&&a,duration:a,easing:c&&b||b&&!p.isFunction(b)&&b};d.duration=p.fx.off?0:typeof d.duration=="number"?d.duration:d.duration in p.fx.speeds?p.fx.speeds[d.duration]:p.fx.speeds._default;if(d.queue==null||d.queue===!0)d.queue="fx";return d.old=d.complete,d.complete=function(){p.isFunction(d.old)&&d.old.call(this),d.queue&&p.dequeue(this,d.queue)},d},p.easing={linear:function(a){return a},swing:function(a){return.5-Math.cos(a*Math.PI)/2}},p.timers=[],p.fx=cZ.prototype.init,p.fx.tick=function(){var a,b=p.timers,c=0;for(;c<b.length;c++)a=b[c],!a()&&b[c]===a&&b.splice(c--,1);b.length||p.fx.stop()},p.fx.timer=function(a){a()&&p.timers.push(a)&&!cO&&(cO=setInterval(p.fx.tick,p.fx.interval))},p.fx.interval=13,p.fx.stop=function(){clearInterval(cO),cO=null},p.fx.speeds={slow:600,fast:200,_default:400},p.fx.step={},p.expr&&p.expr.filters&&(p.expr.filters.animated=function(a){return p.grep(p.timers,function(b){return a===b.elem}).length});var c_=/^(?:body|html)$/i;p.fn.offset=function(a){if(arguments.length)return a===b?this:this.each(function(b){p.offset.setOffset(this,a,b)});var c,d,e,f,g,h,i,j,k,l,m=this[0],n=m&&m.ownerDocument;if(!n)return;return(e=n.body)===m?p.offset.bodyOffset(m):(d=n.documentElement,p.contains(d,m)?(c=m.getBoundingClientRect(),f=da(n),g=d.clientTop||e.clientTop||0,h=d.clientLeft||e.clientLeft||0,i=f.pageYOffset||d.scrollTop,j=f.pageXOffset||d.scrollLeft,k=c.top+i-g,l=c.left+j-h,{top:k,left:l}):{top:0,left:0})},p.offset={bodyOffset:function(a){var b=a.offsetTop,c=a.offsetLeft;return p.support.doesNotIncludeMarginInBodyOffset&&(b+=parseFloat(p.css(a,"marginTop"))||0,c+=parseFloat(p.css(a,"marginLeft"))||0),{top:b,left:c}},setOffset:function(a,b,c){var d=p.css(a,"position");d==="static"&&(a.style.position="relative");var e=p(a),f=e.offset(),g=p.css(a,"top"),h=p.css(a,"left"),i=(d==="absolute"||d==="fixed")&&p.inArray("auto",[g,h])>-1,j={},k={},l,m;i?(k=e.position(),l=k.top,m=k.left):(l=parseFloat(g)||0,m=parseFloat(h)||0),p.isFunction(b)&&(b=b.call(a,c,f)),b.top!=null&&(j.top=b.top-f.top+l),b.left!=null&&(j.left=b.left-f.left+m),"using"in b?b.using.call(a,j):e.css(j)}},p.fn.extend({position:function(){if(!this[0])return;var a=this[0],b=this.offsetParent(),c=this.offset(),d=c_.test(b[0].nodeName)?{top:0,left:0}:b.offset();return c.top-=parseFloat(p.css(a,"marginTop"))||0,c.left-=parseFloat(p.css(a,"marginLeft"))||0,d.top+=parseFloat(p.css(b[0],"borderTopWidth"))||0,d.left+=parseFloat(p.css(b[0],"borderLeftWidth"))||0,{top:c.top-d.top,left:c.left-d.left}},offsetParent:function(){return this.map(function(){var a=this.offsetParent||e.body;while(a&&!c_.test(a.nodeName)&&p.css(a,"position")==="static")a=a.offsetParent;return a||e.body})}}),p.each({scrollLeft:"pageXOffset",scrollTop:"pageYOffset"},function(a,c){var d=/Y/.test(c);p.fn[a]=function(e){return p.access(this,function(a,e,f){var g=da(a);if(f===b)return g?c in g?g[c]:g.document.documentElement[e]:a[e];g?g.scrollTo(d?p(g).scrollLeft():f,d?f:p(g).scrollTop()):a[e]=f},a,e,arguments.length,null)}}),p.each({Height:"height",Width:"width"},function(a,c){p.each({padding:"inner"+a,content:c,"":"outer"+a},function(d,e){p.fn[e]=function(e,f){var g=arguments.length&&(d||typeof e!="boolean"),h=d||(e===!0||f===!0?"margin":"border");return p.access(this,function(c,d,e){var f;return p.isWindow(c)?c.document.documentElement["client"+a]:c.nodeType===9?(f=c.documentElement,Math.max(c.body["scroll"+a],f["scroll"+a],c.body["offset"+a],f["offset"+a],f["client"+a])):e===b?p.css(c,d,e,h):p.style(c,d,e,h)},c,g?e:b,g,null)}})}),a.jQuery=a.$=p,typeof define=="function"&&define.amd&&define.amd.jQuery&&define("jquery",[],function(){return p})})(window);
(function($) {
var _rootUrl = '/ezdemo_site_admin/', _serverUrl = _rootUrl + 'ezjscore/', _seperator = '@SEPERATOR$',
_prefUrl = _rootUrl + 'user/preferences';
if ( window.XMLHttpRequest && window.ActiveXObject )
$.ajaxSettings.xhr = function() { try { return new window.ActiveXObject('Microsoft.XMLHTTP'); } catch(e) {} };
function _ez( callArgs, post, callBack )
{
callArgs = callArgs.join !== undefined ? callArgs.join( _seperator ) : callArgs;
var url = _serverUrl + 'call/';
if ( post )
{
var _token = '', _tokenNode = document.getElementById('ezxform_token_js');
if ( _tokenNode ) _token = _tokenNode.getAttribute('title');
if ( post.join !== undefined )// support serializeArray() format
{
post.push( { 'name': 'ezjscServer_function_arguments', 'value': callArgs } );
post.push( { 'name': 'ezxform_token', 'value': _token } );
}
else if ( typeof(post) === 'string' )// string
{
post += ( post ? '&' : '' ) + 'ezjscServer_function_arguments=' + callArgs + '&ezxform_token=' + _token;
}
else // object
{
post['ezjscServer_function_arguments'] = callArgs;
post['ezxform_token'] = _token;
}
return $.post( url, post, callBack, 'json' );
}
return $.get( url + encodeURIComponent( callArgs ), {}, callBack, 'json' );
};
_ez.url = _serverUrl;
_ez.root_url = _rootUrl;
_ez.seperator = _seperator;
$.ez = _ez;
$.ez.setPreference = function( name, value )
{
var param = {'Function': 'set_and_exit', 'Key': name, 'Value': value};
_tokenNode = document.getElementById( 'ezxform_token_js' );
if ( _tokenNode )
param.ezxform_token = _tokenNode.getAttribute( 'title' );
return $.post( _prefUrl, param );
};
function _ezLoad( callArgs, post, selector, callBack )
{
callArgs = callArgs.join !== undefined ? callArgs.join( _seperator ) : callArgs;
var url = _serverUrl + 'call/';
if ( post )
{
post['ezjscServer_function_arguments'] = callArgs;
post['ezxform_token'] = jQuery('#ezxform_token_js').attr('title');
}
else
url += encodeURIComponent( callArgs );
return this.load( url + ( selector ? ' ' + selector : '' ), post, callBack );
};
$.fn.ez = _ezLoad;
})(jQuery);
typeof YUI!="undefined"&&(YUI._YUI=YUI);var YUI=function(){var e=0,t=this,n=arguments,r=n.length,i=function(e,t){return e&&e.hasOwnProperty&&e instanceof t},s=typeof YUI_config!="undefined"&&YUI_config;i(t,YUI)?(t._init(),YUI.GlobalConfig&&t.applyConfig(YUI.GlobalConfig),s&&t.applyConfig(s),r||t._setup()):t=new YUI;if(r){for(;e<r;e++)t.applyConfig(n[e]);t._setup()}return t.instanceOf=i,t};(function(){var e,t,n="3.7.1",r=".",i="http://yui.yahooapis.com/",s="yui3-js-enabled",o="yui3-css-stamp",u=function(){},a=Array.prototype.slice,f={"io.xdrReady":1,"io.xdrResponse":1,"SWF.eventHandler":1},l=typeof window!="undefined",c=l?window:null,h=l?c.document:null,p=h&&h.documentElement,d=p&&p.className,v={},m=(new Date).getTime(),g=function(e,t,n,r){e&&e.addEventListener?e.addEventListener(t,n,r):e&&e.attachEvent&&e.attachEvent("on"+t,n)},y=function(e,t,n,r){if(e&&e.removeEventListener)try{e.removeEventListener(t,n,r)}catch(i){}else e&&e.detachEvent&&e.detachEvent("on"+t,n)},b=function(){YUI.Env.windowLoaded=!0,YUI.Env.DOMReady=!0,l&&y(window,"load",b)},w=function(e,t){var n=e.Env._loader,r=["loader-base"],i=YUI.Env,s=i.mods;return n?(n.ignoreRegistered=!1,n.onEnd=null,n.data=null,n.required=[],n.loadType=null):(n=new e.Loader(e.config),e.Env._loader=n),s&&s.loader&&(r=[].concat(r,YUI.Env.loaderExtras)),YUI.Env.core=e.Array.dedupe([].concat(YUI.Env.core,r)),n},E=function(e,t){for(var n in t)t.hasOwnProperty(n)&&(e[n]=t[n])},S={success:!0};p&&d.indexOf(s)==-1&&(d&&(d+=" "),d+=s,p.className=d),n.indexOf("@")>-1&&(n="3.5.0"),e={applyConfig:function(e){e=e||u;var t,n,r=this.config,i=r.modules,s=r.groups,o=r.aliases,a=this.Env._loader;for(n in e)e.hasOwnProperty(n)&&(t=e[n],i&&n=="modules"?E(i,t):o&&n=="aliases"?E(o,t):s&&n=="groups"?E(s,t):n=="win"?(r[n]=t&&t.contentWindow||t,r.doc=r[n]?r[n].document:null):n!="_yuid"&&(r[n]=t));a&&a._config(e)},_config:function(e){this.applyConfig(e)},_init:function(){var e,t,r=this,s=YUI.Env,u=r.Env,a;r.version=n;if(!u){r.Env={core:["get","features","intl-base","yui-log","yui-later","loader-base","loader-rollup","loader-yui3"],loaderExtras:["loader-rollup","loader-yui3"],mods:{},versions:{},base:i,cdn:i+n+"/build/",_idx:0,_used:{},_attached:{},_missed:[],_yidx:0,_uidx:0,_guidp:"y",_loaded:{},_BASE_RE:/(?:\?(?:[^&]*&)*([^&]*))?\b(simpleyui|yui(?:-\w+)?)\/\2(?:-(min|debug))?\.js/,parseBasePath:function(e,t){var n=e.match(t),r,i;return n&&(r=RegExp.leftContext||e.slice(0,e.indexOf(n[0])),i=n[3],n[1]&&(r+="?"+n[1]),r={filter:i,path:r}),r},getBase:s&&s.getBase||function(t){var n=h&&h.getElementsByTagName("script")||[],i=u.cdn,s,o,a,f;for(o=0,a=n.length;o<a;++o){f=n[o].src;if(f){s=r.Env.parseBasePath(f,t);if(s){e=s.filter,i=s.path;break}}}return i}},u=r.Env,u._loaded[n]={};if(s&&r!==YUI)u._yidx=++s._yidx,u._guidp=("yui_"+n+"_"+u._yidx+"_"+m).replace(/\./g,"_").replace(/-/g,"_");else if(YUI._YUI){s=YUI._YUI.Env,u._yidx+=s._yidx,u._uidx+=s._uidx;for(a in s)a in u||(u[a]=s[a]);delete YUI._YUI}r.id=r.stamp(r),v[r.id]=r}r.constructor=YUI,r.config=r.config||{bootstrap:!0,cacheUse:!0,debug:!0,doc:h,fetchCSS:!0,throwFail:!0,useBrowserConsole:!0,useNativeES5:!0,win:c},h&&!h.getElementById(o)&&(t=h.createElement("div"),t.innerHTML='<div id="'+o+'" style="position: absolute !important; visibility: hidden !important"></div>',YUI.Env.cssStampEl=t.firstChild,h.body?h.body.appendChild(YUI.Env.cssStampEl):p.insertBefore(YUI.Env.cssStampEl,p.firstChild)),r.config.lang=r.config.lang||"en-US",r.config.base=YUI.config.base||r.Env.getBase(r.Env._BASE_RE);if(!e||!"mindebug".indexOf(e))e="min";e=e?"-"+e:e,r.config.loaderPath=YUI.config.loaderPath||"loader/loader"+e+".js"},_setup:function(e){var t,n=this,r=[],i=YUI.Env.mods,s=n.config.core||[].concat(YUI.Env.core);for(t=0;t<s.length;t++)i[s[t]]&&r.push(s[t]);n._attach(["yui-base"]),n._attach(r),n.Loader&&w(n)},applyTo:function(e,t,n){if(t in f){var r=v[e],i,s,o;if(r){i=t.split("."),s=r;for(o=0;o<i.length;o+=1)s=s[i[o]],s||this.log("applyTo not found: "+t,"warn","yui");return s&&s.apply(r,n)}return null}return this.log(t+": applyTo not allowed","warn","yui"),null},add:function(e,t,n,r){r=r||{};var i=YUI.Env,s={name:e,fn:t,version:n,details:r},o={},u,a,f,l=i.versions;i.mods[e]=s,l[n]=l[n]||{},l[n][e]=s;for(f in v)v.hasOwnProperty(f)&&(a=v[f],o[a.id]||(o[a.id]=!0,u=a.Env._loader,u&&(!u.moduleInfo[e]||u.moduleInfo[e].temp)&&u.addModule(r,e)));return this},_attach:function(e,t){var n,r,i,s,o,u,a,f=YUI.Env.mods,l=YUI.Env.aliases,c=this,h,p=YUI.Env._renderedMods,d=c.Env._loader,v=c.Env._attached,m=e.length,d,g,y,b=[];for(n=0;n<m;n++){r=e[n],i=f[r],b.push(r);if(d&&d.conditions[r])for(h in d.conditions[r])d.conditions[r].hasOwnProperty(h)&&(g=d.conditions[r][h],y=g&&(g.ua&&c.UA[g.ua]||g.test&&g.test(c)),y&&b.push(g.name))}e=b,m=e.length;for(n=0;n<m;n++)if(!v[e[n]]){r=e[n],i=f[r];if(l&&l[r]&&!i){c._attach(l[r]);continue}if(!i)d&&d.moduleInfo[r]&&(i=d.moduleInfo[r],t=!0),!t&&r&&r.indexOf("skin-")===-1&&r.indexOf("css")===-1&&(c.Env._missed.push(r),c.Env._missed=c.Array.dedupe(c.Env._missed),c.message("NOT loaded: "+r,"warn","yui"));else{v[r]=!0;for(h=0;h<c.Env._missed.length;h++)c.Env._missed[h]===r&&(c.message("Found: "+r+" (was reported as missing earlier)","warn","yui"),c.Env._missed.splice(h,1));if(d&&p&&p[r]&&p[r].temp){d.getRequires(p[r]),o=[];for(h in d.moduleInfo[r].expanded_map)d.moduleInfo[r].expanded_map.hasOwnProperty(h)&&o.push(h);c._attach(o)}s=i.details,o=s.requires,u=s.use,a=s.after,s.lang&&(o=o||[],o.unshift("intl"));if(o)for(h=0;h<o.length;h++)if(!v[o[h]]){if(!c._attach(o))return!1;break}if(a)for(h=0;h<a.length;h++)if(!v[a[h]]){if(!c._attach(a,!0))return!1;break}if(i.fn)if(c.config.throwFail)i.fn(c,r);else try{i.fn(c,r)}catch(w){return c.error("Attach error: "+r,w,r),!1}if(u)for(h=0;h<u.length;h++)if(!v[u[h]]){if(!c._attach(u))return!1;break}}}return!0},_delayCallback:function(e,t){var n=this,r=["event-base"];return t=n.Lang.isObject(t)?t:{event:t},t.event==="load"&&r.push("event-synthetic"),function(){var i=arguments;n._use(r,function(){n.on(t.event,function(){i[1].delayUntil=t.event,e.apply(n,i)},t.args)})}},use:function(){var e=a.call(arguments,0),t=e[e.length-1],n=this,r=0,i=[],s,o=n.Env,u=!0;n.Lang.isFunction(t)?(e.pop(),n.config.delayUntil&&(t=n._delayCallback(t,n.config.delayUntil))):t=null,n.Lang.isArray(e[0])&&(e=e[0]);if(n.config.cacheUse){while(s=e[r++])if(!o._attached[s]){u=!1;break}if(u)return e.length,n._notify(t,S,e),n}return n._loading?(n._useQueue=n._useQueue||new n.Queue,n._useQueue.add([e,t])):n._use(e,function(n,r){n._notify(t,r,e)}),n},_notify:function(e,t,n){if(!t.success&&this.config.loadErrorFn)this.config.loadErrorFn.call(this,this,e,t,n);else if(e){this.Env._missed&&this.Env._missed.length&&(t.msg="Missing modules: "+this.Env._missed.join(),t.success=!1);if(this.config.throwFail)e(this,t);else try{e(this,t)}catch(r){this.error("use callback error",r,n)}}},_use:function(e,t){this.Array||this._attach(["yui-base"]);var r,i,s,o,u=this,a=YUI.Env,f=a.mods,l=u.Env,c=l._used,h=a.aliases,p=a._loaderQueue,d=e[0],v=u.Array,m=u.config,g=m.bootstrap,y=[],b,E=[],S=!0,x=m.fetchCSS,T=function(e,t){var r=0,i=[],s,o,u,l,p;if(!e.length)return;if(h){o=e.length;for(r=0;r<o;r++)h[e[r]]&&!f[e[r]]?i=[].concat(i,h[e[r]]):i.push(e[r]);e=i}o=e.length;for(r=0;r<o;r++){s=e[r],t||E.push(s);if(c[s])continue;u=f[s],l=null,p=null,u?(c[s]=!0,l=u.details.requires,p=u.details.use):a._loaded[n][s]?c[s]=!0:y.push(s),l&&l.length&&T(l),p&&p.length&&T(p,1)}},N=function(n){var r=n||{success:!0,msg:"not dynamic"},i,s,o=!0,a=r.data;u._loading=!1,a&&(s=y,y=[],E=[],T(a),i=y.length,i&&[].concat(y).sort().join()==s.sort().join()&&(i=!1)),i&&a?(u._loading=!0,u._use(y,function(){u._attach(a)&&u._notify(t,r,a)})):(a&&(o=u._attach(a)),o&&u._notify(t,r,e)),u._useQueue&&u._useQueue.size()&&!u._loading&&u._use.apply(u,u._useQueue.next())};if(d==="*"){e=[];for(b in f)f.hasOwnProperty(b)&&e.push(b);return S=u._attach(e),S&&N(),u}return(f.loader||f["loader-base"])&&!u.Loader&&u._attach(["loader"+(f.loader?"":"-base")]),g&&u.Loader&&e.length&&(i=w(u),i.require(e),i.ignoreRegistered=!0,i._boot=!0,i.calculate(null,x?null:"js"),e=i.sorted,i._boot=!1),T(e),r=y.length,r&&(y=v.dedupe(y),r=y.length),g&&r&&u.Loader?(u._loading=!0,i=w(u),i.onEnd=N,i.context=u,i.data=e,i.ignoreRegistered=!1,i.require(e),i.insert(null,x?null:"js")):g&&r&&u.Get&&!l.bootstrapped?(u._loading=!0,s=function(){u._loading=!1,p.running=!1,l.bootstrapped=!0,a._bootstrapping=!1,u._attach(["loader"])&&u._use(e,t)},a._bootstrapping?p.add(s):(a._bootstrapping=!0,u.Get.script(m.base+m.loaderPath,{onEnd:s}))):(S=u._attach(e),S&&N()),u},namespace:function(){var e=arguments,t,n=0,i,s,o;for(;n<e.length;n++){t=this,o=e[n];if(o.indexOf(r)>-1){s=o.split(r);for(i=s[0]=="YAHOO"?1:0;i<s.length;i++)t[s[i]]=t[s[i]]||{},t=t[s[i]]}else t[o]=t[o]||{},t=t[o]}return t},log:u,message:u,dump:function(e){return""+e},error:function(e,t,n){var r=this,i;r.config.errorFn&&(i=r.config.errorFn.apply(r,arguments));if(!i)throw t||new Error(e);return r.message(e,"error",""+n),r},guid:function(e){var t=this.Env._guidp+"_"+ ++this.Env._uidx;return e?e+t:t},stamp:function(e,t){var n;if(!e)return e;e.uniqueID&&e.nodeType&&e.nodeType!==9?n=e.uniqueID:n=typeof e=="string"?e:e._yuid;if(!n){n=this.guid();if(!t)try{e._yuid=n}catch(r){n=null}}return n},destroy:function(){var e=this;e.Event&&e.Event._unload(),delete v[e.id],delete e.Env,delete e.config}},YUI.prototype=e;for(t in e)e.hasOwnProperty(t)&&(YUI[t]=e[t]);YUI.applyConfig=function(e){if(!e)return;YUI.GlobalConfig&&this.prototype.applyConfig.call(this,YUI.GlobalConfig),this.prototype.applyConfig.call(this,e),YUI.GlobalConfig=this.config},YUI._init(),l?g(window,"load",b):b(),YUI.Env.add=g,YUI.Env.remove=y,typeof exports=="object"&&(exports.YUI=YUI)})(),YUI.add("yui-base",function(e,t){function h(e,t,n){var r,i;t||(t=0);if(n||h.test(e))try{return l.slice.call(e,t)}catch(s){i=[];for(r=e.length;t<r;++t)i.push(e[t]);return i}return[e]}function p(){this._init(),this.add.apply(this,arguments)}var n=e.Lang||(e.Lang={}),r=String.prototype,i=Object.prototype.toString,s={"undefined":"undefined",number:"number","boolean":"boolean",string:"string","[object Function]":"function","[object RegExp]":"regexp","[object Array]":"array","[object Date]":"date","[object Error]":"error"},o=/\{\s*([^|}]+?)\s*(?:\|([^}]*))?\s*\}/g,u=/^\s+|\s+$/g,a=/\{\s*\[(?:native code|function)\]\s*\}/i;n._isNative=function(t){return!!(e.config.useNativeES5&&t&&a.test(t))},n.isArray=n._isNative(Array.isArray)?Array.isArray:function(e){return n.type(e)==="array"},n.isBoolean=function(e){return typeof e=="boolean"},n.isDate=function(e){return n.type(e)==="date"&&e.toString()!=="Invalid Date"&&!isNaN(e)},n.isFunction=function(e){return n.type(e)==="function"},n.isNull=function(e){return e===null},n.isNumber=function(e){return typeof e=="number"&&isFinite(e)},n.isObject=function(e,t){var r=typeof e;return e&&(r==="object"||!t&&(r==="function"||n.isFunction(e)))||!1},n.isString=function(e){return typeof e=="string"},n.isUndefined=function(e){return typeof e=="undefined"},n.isValue=function(e){var t=n.type(e);switch(t){case"number":return isFinite(e);case"null":case"undefined":return!1;default:return!!t}},n.now=Date.now||function(){return(new Date).getTime()},n.sub=function(e,t){return e.replace?e.replace(o,function(e,r){return n.isUndefined(t[r])?e:t[r]}):e},n.trim=r.trim?function(e){return e&&e.trim?e.trim():e}:function(e){try{return e.replace(u,"")}catch(t){return e}},n.trimLeft=r.trimLeft?function(e){return e.trimLeft()}:function(e){return e.replace(/^\s+/,"")},n.trimRight=r.trimRight?function(e){return e.trimRight()}:function(e){return e.replace(/\s+$/,"")},n.type=function(e){return s[typeof e]||s[i.call(e)]||(e?"object":"null")};var f=e.Lang,l=Array.prototype,c=Object.prototype.hasOwnProperty;e.Array=h,h.dedupe=function(e){var t={},n=[],r,i,s;for(r=0,s=e.length;r<s;++r)i=e[r],c.call(t,i)||(t[i]=1,n.push(i));return n},h.each=h.forEach=f._isNative(l.forEach)?function(t,n,r){return l.forEach.call(t||[],n,r||e),e}:function(t,n,r){for(var i=0,s=t&&t.length||0;i<s;++i)i in t&&n.call(r||e,t[i],i,t);return e},h.hash=function(e,t){var n={},r=t&&t.length||0,i,s;for(i=0,s=e.length;i<s;++i)i in e&&(n[e[i]]=r>i&&i in t?t[i]:!0);return n},h.indexOf=f._isNative(l.indexOf)?function(e,t,n){return l.indexOf.call(e,t,n)}:function(e,t,n){var r=e.length;n=+n||0,n=(n>0||-1)*Math.floor(Math.abs(n)),n<0&&(n+=r,n<0&&(n=0));for(;n<r;++n)if(n in e&&e[n]===t)return n;return-1},h.numericSort=function(e,t){return e-t},h.some=f._isNative(l.some)?function(e,t,n){return l.some.call(e,t,n)}:function(e,t,n){for(var r=0,i=e.length;r<i;++r)if(r in e&&t.call(n,e[r],r,e))return!0;return!1},h.test=function(e){var t=0;if(f.isArray(e))t=1;else if(f.isObject(e))try{"length"in e&&!e.tagName&&!e.alert&&!e.apply&&(t=2)}catch(n){}return t},p.prototype={_init:function(){this._q=[]},next:function(){return this._q.shift()},last:function(){return this._q.pop()},add:function(){return this._q.push.apply(this._q,arguments),this},size:function(){return this._q.length}},e.Queue=p,YUI.Env._loaderQueue=YUI.Env._loaderQueue||new p;var d="__",c=Object.prototype.hasOwnProperty,v=e.Lang.isObject;e.cached=function(e,t,n){return t||(t={}),function(r){var i=arguments.length>1?Array.prototype.join.call(arguments,d):String(r);if(!(i in t)||n&&t[i]==n)t[i]=e.apply(e,arguments);return t[i]}},e.getLocation=function(){var t=e.config.win;return t&&t.location},e.merge=function(){var e=0,t=arguments.length,n={},r,i;for(;e<t;++e){i=arguments[e];for(r in i)c.call(i,r)&&(n[r]=i[r])}return n},e.mix=function(t,n,r,i,s,o){var u,a,f,l,h,p,d;if(!t||!n)return t||e;if(s){s===2&&e.mix(t.prototype,n.prototype,r,i,0,o),f=s===1||s===3?n.prototype:n,d=s===1||s===4?t.prototype:t;if(!f||!d)return t}else f=n,d=t;u=r&&!o;if(i)for(l=0,p=i.length;l<p;++l){h=i[l];if(!c.call(f,h))continue;a=u?!1:h in d;if(o&&a&&v(d[h],!0)&&v(f[h],!0))e.mix(d[h],f[h],r,null,0,o);else if(r||!a)d[h]=f[h]}else{for(h in f){if(!c.call(f,h))continue;a=u?!1:h in d;if(o&&a&&v(d[h],!0)&&v(f[h],!0))e.mix(d[h],f[h],r,null,0,o);else if(r||!a)d[h]=f[h]}e.Object._hasEnumBug&&e.mix(d,f,r,e.Object._forceEnum,s,o)}return t};var f=e.Lang,c=Object.prototype.hasOwnProperty,m,g=e.Object=f._isNative(Object.create)?function(e){return Object.create(e)}:function(){function e(){}return function(t){return e.prototype=t,new e}}(),y=g._forceEnum=["hasOwnProperty","isPrototypeOf","propertyIsEnumerable","toString","toLocaleString","valueOf"],b=g._hasEnumBug=!{valueOf:0}.propertyIsEnumerable("valueOf"),w=g._hasProtoEnumBug=function(){}.propertyIsEnumerable("prototype"),E=g.owns=function(e,t){return!!e&&c.call(e,t)};g.hasKey=E,g.keys=f._isNative(Object.keys)?Object.keys:function(e){if(!f.isObject(e))throw new TypeError("Object.keys called on a non-object");var t=[],n,r,i;if(w&&typeof e=="function")for(r in e)E(e,r)&&r!=="prototype"&&t.push(r);else for(r in e)E(e,r)&&t.push(r);if(b)for(n=0,i=y.length;n<i;++n)r=y[n],E(e,r)&&t.push(r);return t},g.values=function(e){var t=g.keys(e),n=0,r=t.length,i=[];for(;n<r;++n)i.push(e[t[n]]);return i},g.size=function(e){try{return g.keys(e).length}catch(t){return 0}},g.hasValue=function(t,n){return e.Array.indexOf(g.values(t),n)>-1},g.each=function(t,n,r,i){var s;for(s in t)(i||E(t,s))&&n.call(r||e,t[s],s,t);return e},g.some=function(t,n,r,i){var s;for(s in t)if(i||E(t,s))if(n.call(r||e,t[s],s,t))return!0;return!1},g.getValue=function(t,n){if(!f.isObject(t))return m;var r,i=e.Array(n),s=i.length;for(r=0;t!==m&&r<s;r++)t=t[i[r]];return t},g.setValue=function(t,n,r){var i,s=e.Array(n),o=s.length-1,u=t;if(o>=0){for(i=0;u!==m&&i<o;i++)u=u[s[i]];if(u===m)return m;u[s[i]]=r}return t},g.isEmpty=function(e){return!g.keys(Object(e)).length},YUI.Env.parseUA=function(t){var n=function(e){var t=0;return parseFloat(e.replace(/\./g,function(){return t++==1?"":"."}))},r=e.config.win,i=r&&r.navigator,s={ie:0,opera:0,gecko:0,webkit:0,safari:0,chrome:0,mobile:null,air:0,phantomjs:0,air:0,ipad:0,iphone:0,ipod:0,ios:null,android:0,silk:0,accel:!1,webos:0,caja:i&&i.cajaVersion,secure:!1,os:null,nodejs:0},o=t||i&&i.userAgent,u=r&&r.location,a=u&&u.href,f;return s.userAgent=o,s.secure=a&&a.toLowerCase().indexOf("https")===0,o&&(/windows|win32/i.test(o)?s.os="windows":/macintosh|mac_powerpc/i.test(o)?s.os="macintosh":/android/i.test(o)?s.os="android":/symbos/i.test(o)?s.os="symbos":/linux/i.test(o)?s.os="linux":/rhino/i.test(o)&&(s.os="rhino"),/KHTML/.test(o)&&(s.webkit=1),/IEMobile|XBLWP7/.test(o)&&(s.mobile="windows"),/Fennec/.test(o)&&(s.mobile="gecko"),f=o.match(/AppleWebKit\/([^\s]*)/),f&&f[1]&&(s.webkit=n(f[1]),s.safari=s.webkit,/PhantomJS/.test(o)&&(f=o.match(/PhantomJS\/([^\s]*)/),f&&f[1]&&(s.phantomjs=n(f[1]))),/ Mobile\//.test(o)||/iPad|iPod|iPhone/.test(o)?(s.mobile="Apple",f=o.match(/OS ([^\s]*)/),f&&f[1]&&(f=n(f[1].replace("_","."))),s.ios=f,s.os="ios",s.ipad=s.ipod=s.iphone=0,f=o.match(/iPad|iPod|iPhone/),f&&f[0]&&(s[f[0].toLowerCase()]=s.ios)):(f=o.match(/NokiaN[^\/]*|webOS\/\d\.\d/),f&&(s.mobile=f[0]),/webOS/.test(o)&&(s.mobile="WebOS",f=o.match(/webOS\/([^\s]*);/),f&&f[1]&&(s.webos=n(f[1]))),/ Android/.test(o)&&(/Mobile/.test(o)&&(s.mobile="Android"),f=o.match(/Android ([^\s]*);/),f&&f[1]&&(s.android=n(f[1]))),/Silk/.test(o)&&(f=o.match(/Silk\/([^\s]*)\)/),f&&f[1]&&(s.silk=n(f[1])),s.android||(s.android=2.34,s.os="Android"),/Accelerated=true/.test(o)&&(s.accel=!0))),f=o.match(/(Chrome|CrMo|CriOS)\/([^\s]*)/),f&&f[1]&&f[2]?(s.chrome=n(f[2]),s.safari=0,f[1]==="CrMo"&&(s.mobile="chrome")):(f=o.match(/AdobeAIR\/([^\s]*)/),f&&(s.air=f[0]))),s.webkit||(/Opera/.test(o)?(f=o.match(/Opera[\s\/]([^\s]*)/),f&&f[1]&&(s.opera=n(f[1])),f=o.match(/Version\/([^\s]*)/),f&&f[1]&&(s.opera=n(f[1])),/Opera Mobi/.test(o)&&(s.mobile="opera",f=o.replace("Opera Mobi","").match(/Opera ([^\s]*)/),f&&f[1]&&(s.opera=n(f[1]))),f=o.match(/Opera Mini[^;]*/),f&&(s.mobile=f[0])):(f=o.match(/MSIE\s([^;]*)/),f&&f[1]?s.ie=n(f[1]):(f=o.match(/Gecko\/([^\s]*)/),f&&(s.gecko=1,f=o.match(/rv:([^\s\)]*)/),f&&f[1]&&(s.gecko=n(f[1]))))))),t||(typeof process=="object"&&process.versions&&process.versions.node&&(s.os=process.platform,s.nodejs=n(process.versions.node)),YUI.Env.UA=s),s},e.UA=YUI.Env.UA||YUI.Env.parseUA(),e.UA.compareVersions=function(e,t){var n,r,i,s,o,u;if(e===t)return 0;r=(e+"").split("."),s=(t+"").split(".");for(o=0,u=Math.max(r.length,s.length);o<u;++o){n=parseInt(r[o],10),i=parseInt(s[o],10),isNaN(n)&&(n=0),isNaN(i)&&(i=0);if(n<i)return-1;if(n>i)return 1}return 0},YUI.Env.aliases={anim:["anim-base","anim-color","anim-curve","anim-easing","anim-node-plugin","anim-scroll","anim-xy"],app:["app-base","app-content","app-transitions","lazy-model-list","model","model-list","model-sync-rest","router","view","view-node-map"],attribute:["attribute-base","attribute-complex"],autocomplete:["autocomplete-base","autocomplete-sources","autocomplete-list","autocomplete-plugin"],base:["base-base","base-pluginhost","base-build"],cache:["cache-base","cache-offline","cache-plugin"],collection:["array-extras","arraylist","arraylist-add","arraylist-filter","array-invoke"],controller:["router"],dataschema:["dataschema-base","dataschema-json","dataschema-xml","dataschema-array","dataschema-text"],datasource:["datasource-local","datasource-io","datasource-get","datasource-function","datasource-cache","datasource-jsonschema","datasource-xmlschema","datasource-arrayschema","datasource-textschema","datasource-polling"],datatable:["datatable-core","datatable-table","datatable-head","datatable-body","datatable-base","datatable-column-widths","datatable-message","datatable-mutable","datatable-sort","datatable-datasource"],"datatable-deprecated":["datatable-base-deprecated","datatable-datasource-deprecated","datatable-sort-deprecated","datatable-scroll-deprecated"],datatype:["datatype-number","datatype-date","datatype-xml"],"datatype-date":["datatype-date-parse","datatype-date-format"],"datatype-number":["datatype-number-parse","datatype-number-format"],"datatype-xml":["datatype-xml-parse","datatype-xml-format"],dd:["dd-ddm-base","dd-ddm","dd-ddm-drop","dd-drag","dd-proxy","dd-constrain","dd-drop","dd-scroll","dd-delegate"],dom:["dom-base","dom-screen","dom-style","selector-native","selector"],editor:["frame","editor-selection","exec-command","editor-base","editor-para","editor-br","editor-bidi","editor-tab","createlink-base"],event:["event-base","event-delegate","event-synthetic","event-mousewheel","event-mouseenter","event-key","event-focus","event-resize","event-hover","event-outside","event-touch","event-move","event-flick","event-valuechange"],"event-custom":["event-custom-base","event-custom-complex"],"event-gestures":["event-flick","event-move"],handlebars:["handlebars-compiler"],highlight:["highlight-base","highlight-accentfold"],history:["history-base","history-hash","history-hash-ie","history-html5"],io:["io-base","io-xdr","io-form","io-upload-iframe","io-queue"],json:["json-parse","json-stringify"],loader:["loader-base","loader-rollup","loader-yui3"],node:["node-base","node-event-delegate","node-pluginhost","node-screen","node-style"],pluginhost:["pluginhost-base","pluginhost-config"],querystring:["querystring-parse","querystring-stringify"],recordset:["recordset-base","recordset-sort","recordset-filter","recordset-indexer"],resize:["resize-base","resize-proxy","resize-constrain"],slider:["slider-base","slider-value-range","clickable-rail","range-slider"],text:["text-accentfold","text-wordbreak"],widget:["widget-base","widget-htmlparser","widget-skin","widget-uievents"]}},"3.7.1",{use:["yui-base","get","features","intl-base","yui-log","yui-later","loader-base","loader-rollup","loader-yui3"]}),YUI.add("get",function(e,t){var n=e.Lang,r,i,s;e.Get=i={cssOptions:{attributes:{rel:"stylesheet"},doc:e.config.linkDoc||e.config.doc,pollInterval:50},jsOptions:{autopurge:!0,doc:e.config.scriptDoc||e.config.doc},options:{attributes:{charset:"utf-8"},purgethreshold:20},REGEX_CSS:/\.css(?:[?;].*)?$/i,REGEX_JS:/\.js(?:[?;].*)?$/i,_insertCache:{},_pending:null,_purgeNodes:[],_queue:[],abort:function(e){var t,n,r,i,s;if(!e.abort){n=e,s=this._pending,e=null;if(s&&s.transaction.id===n)e=s.transaction,this._pending=null;else for(t=0,i=this._queue.length;t<i;++t){r=this._queue[t].transaction;if(r.id===n){e=r,this._queue.splice(t,1);break}}}e&&e.abort()},css:function(e,t,n){return this._load("css",e,t,n)},js:function(e,t,n){return this._load("js",e,t,n)},load:function(e,t,n){return this._load(null,e,t,n)},_autoPurge:function(e){e&&this._purgeNodes.length>=e&&this._purge(this._purgeNodes)},_getEnv:function(){var t=e.config.doc,n=e.UA;return this._env={async:t&&t.createElement("script").async===!0,cssFail:n.gecko>=9||n.compareVersions(n.webkit,535.24)>=0,cssLoad:(!n.gecko&&!n.webkit||n.gecko>=9||n.compareVersions(n.webkit,535.24)>=0)&&!(n.chrome&&n.chrome<=18),preservesScriptOrder:!!n.gecko||!!n.opera}},_getTransaction:function(t,r){var i=[],o,u,a,f;n.isArray(t)||(t=[t]),r=e.merge(this.options,r),r.attributes=e.merge(this.options.attributes,r.attributes);for(o=0,u=t.length;o<u;++o){f=t[o],a={attributes:{}};if(typeof f=="string")a.url=f;else{if(!f.url)continue;e.mix(a,f,!1,null,0,!0),f=f.url}e.mix(a,r,!1,null,0,!0),a.type||(this.REGEX_CSS.test(f)?a.type="css":(!this.REGEX_JS.test(f),a.type="js")),e.mix(a,a.type==="js"?this.jsOptions:this.cssOptions,!1,null,0,!0),a.attributes.id||(a.attributes.id=e.guid()),a.win?a.doc=a.win.document:a.win=a.doc.defaultView||a.doc.parentWindow,a.charset&&(a.attributes.charset=a.charset),i.push(a)}return new s(i,r)},_load:function(e,t,n,r){var i;return typeof n=="function"&&(r=n,n={}),n||(n={}),n.type=e,this._env||this._getEnv(),i=this._getTransaction(t,n),this._queue.push({callback:r,transaction:i}),this._next(),i},_next:function(){var e;if(this._pending)return;e=this._queue.shift(),e&&(this._pending=e,e.transaction.execute(function(){e.callback&&e.callback.apply(this,arguments),i._pending=null,i._next()}))},_purge:function(t){var n=this._purgeNodes,r=t!==n,i,s;while(s=t.pop()){if(!s._yuiget_finished)continue;s.parentNode&&s.parentNode.removeChild(s),r&&(i=e.Array.indexOf(n,s),i>-1&&n.splice(i,1))}}},i.script=i.js,i.Transaction=s=function(t,n){var r=this;r.id=s._lastId+=1,r.data=n.data,r.errors=[],r.nodes=[],r.options=n,r.requests=t,r._callbacks=[],r._queue=[],r._waiting=0,r.tId=r.id,r.win=n.win||e.config.win},s._lastId=0,s.prototype={_state:"new",abort:function(e){this._pending=null,this._pendingCSS=null,this._pollTimer=clearTimeout(this._pollTimer),this._queue=[],this._waiting=0,this.errors.push({error:e||"Aborted"}),this._finish()},execute:function(e){var t=this,n=t.requests,r=t._state,i,s,o,u;if(r==="done"){e&&e(t.errors.length?t.errors:null,t);return}e&&t._callbacks.push(e);if(r==="executing")return;t._state="executing",t._queue=o=[],t.options.timeout&&(t._timeout=setTimeout(function(){t.abort("Timeout")},t.options.timeout));for(i=0,s=n.length;i<s;++i)u=t.requests[i],u.async||u.type==="css"?t._insert(u):o.push(u);t._next()},purge:function(){i._purge(this.nodes)},_createNode:function(e,t,n){var i=n.createElement(e),s,o;r||(o=n.createElement("div"),o.setAttribute("class","a"),r=o.className==="a"?{}:{"for":"htmlFor","class":"className"});for(s in t)t.hasOwnProperty(s)&&i.setAttribute(r[s]||s,t[s]);return i},_finish:function(){var e=this.errors.length?this.errors:null,t=this.options,n=t.context||this,r,i,s;if(this._state==="done")return;this._state="done";for(i=0,s=this._callbacks.length;i<s;++i)this._callbacks[i].call(n,e,this);r=this._getEventData(),e?(t.onTimeout&&e[e.length-1].error==="Timeout"&&t.onTimeout.call(n,r),t.onFailure&&t.onFailure.call(n,r)):t.onSuccess&&t.onSuccess.call(n,r),t.onEnd&&t.onEnd.call(n,r)},_getEventData:function(t){return t?e.merge(this,{abort:this.abort,purge:this.purge,request:t,url:t.url,win:t.win}):this},_getInsertBefore:function(t){var n=t.doc,r=t.insertBefore,s,o,u;return r?typeof r=="string"?n.getElementById(r):r:(s=i._insertCache,u=e.stamp(n),(r=s[u])?r:(r=n.getElementsByTagName("base")[0])?s[u]=r:(r=n.head||n.getElementsByTagName("head")[0],r?(r.appendChild(n.createTextNode("")),s[u]=r.lastChild):s[u]=n.getElementsByTagName("script")[0]))},_insert:function(t){function c(){u._progress("Failed to load "+t.url,t)}function h(){f&&clearTimeout(f),u._progress(null,t)}var n=i._env,r=this._getInsertBefore(t),s=t.type==="js",o=t.node,u=this,a=e.UA,f,l;o||(s?l="script":!n.cssLoad&&a.gecko?l="style":l="link",o=t.node=this._createNode(l,t.attributes,t.doc)),s?(o.setAttribute("src",t.url),t.async?o.async=!0:(n.async&&(o.async=!1),n.preservesScriptOrder||(this._pending=t))):!n.cssLoad&&a.gecko?o.innerHTML=(t.attributes.charset?'@charset "'+t.attributes.charset+'";':"")+'@import "'+t.url+'";':o.setAttribute("href",t.url),s&&a.ie&&(a.ie<9||document.documentMode&&document.documentMode<9)?o.onreadystatechange=function(){/loaded|complete/.test(o.readyState)&&(o.onreadystatechange=null,h())}:!s&&!n.cssLoad?this._poll(t):(o.onerror=c,o.onload=h,!n.cssFail&&!s&&(f=setTimeout(c,t.timeout||3e3))),this._waiting+=1,this.nodes.push(o),r.parentNode.insertBefore(o,r)},_next:function(){if(this._pending)return;this._queue.length?this._insert(this._queue.shift()):this._waiting||this._finish()},_poll:function(t){var n=this,r=n._pendingCSS,i=e.UA.webkit,s,o,u,a,f,l;if(t){r||(r=n._pendingCSS=[]),r.push(t);if(n._pollTimer)return}n._pollTimer=null;for(s=0;s<r.length;++s){f=r[s];if(i){l=f.doc.styleSheets,u=l.length,a=f.node.href;while(--u>=0)if(l[u].href===a){r.splice(s,1),s-=1,n._progress(null,f);break}}else try{o=!!f.node.sheet.cssRules,r.splice(s,1),s-=1,n._progress(null,f)}catch(c){}}r.length&&(n._pollTimer=setTimeout(function(){n._poll.call(n)},n.options.pollInterval))},_progress:function(e,t){var n=this.options;e&&(t.error=e,this.errors.push({error:e,request:t})),t.node._yuiget_finished=t.finished=!0,n.onProgress&&n.onProgress.call(n.context||this,this._getEventData(t)),t.autopurge&&(i._autoPurge(this.options.purgethreshold),i._purgeNodes.push(t.node)),this._pending===t&&(this._pending=null),this._waiting-=1,this._next()}}},"3.7.1",{requires:["yui-base"]}),YUI.add("features",function(e,t){var n={};e.mix(e.namespace("Features"),{tests:n,add:function(e,t,r){n[e]=n[e]||{},n[e][t]=r},all:function(t,r){var i=n[t],s=[];return i&&e.Object.each(i,function(n,i){s.push(i+":"+(e.Features.test(t,i,r)?1:0))}),s.length?s.join(";"):""},test:function(t,r,i){i=i||[];var s,o,u,a=n[t],f=a&&a[r];return!f||(s=f.result,e.Lang.isUndefined(s)&&(o=f.ua,o&&(s=e.UA[o]),u=f.test,u&&(!o||s)&&(s=u.apply(e,i)),f.result=s)),s}});var r=e.Features.add;r("load","0",{name:"app-transitions-native",test:function(e){var t=e.config.doc,n=t?t.documentElement:null;return n&&n.style?"MozTransition"in n.style||"WebkitTransition"in n.style:!1},trigger:"app-transitions"}),r("load","1",{name:"autocomplete-list-keys",test:function(e){return!e.UA.ios&&!e.UA.android},trigger:"autocomplete-list"}),r("load","2",{name:"dd-gestures",test:function(e){return e.config.win&&"ontouchstart"in e.config.win&&!(e.UA.chrome&&e.UA.chrome<6)},trigger:"dd-drag"}),r("load","3",{name:"dom-style-ie",test:function(e){var t=e.Features.test,n=e.Features.add,r=e.config.win,i=e.config.doc,s="documentElement",o=!1;return n("style","computedStyle",{test:function(){return r&&"getComputedStyle"in r}}),n("style","opacity",{test:function(){return i&&"opacity"in i[s].style}}),o=!t("style","opacity")&&!t("style","computedStyle"),o},trigger:"dom-style"}),r("load","4",{name:"editor-para-ie",trigger:"editor-para",ua:"ie",when:"instead"}),r("load","5",{name:"event-base-ie",test:function(e){var t=e.config.doc&&e.config.doc.implementation;return t&&!t.hasFeature("Events","2.0")},trigger:"node-base"}),r("load","6",{name:"graphics-canvas",test:function(e){var t=e.config.doc,n=e.config.defaultGraphicEngine&&e.config.defaultGraphicEngine=="canvas",r=t&&t.createElement("canvas"),i=t&&t.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#BasicStructure","1.1");return(!i||n)&&r&&r.getContext&&r.getContext("2d")},trigger:"graphics"}),r("load","7",{name:"graphics-canvas-default",test:function(e){var t=e.config.doc,n=e.config.defaultGraphicEngine&&e.config.defaultGraphicEngine=="canvas",r=t&&t.createElement("canvas"),i=t&&t.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#BasicStructure","1.1");return(!i||n)&&r&&r.getContext&&r.getContext("2d")},trigger:"graphics"}),r("load","8",{name:"graphics-svg",test:function(e){var t=e.config.doc,n=!e.config.defaultGraphicEngine||e.config.defaultGraphicEngine!="canvas",r=t&&t.createElement("canvas"),i=t&&t.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#BasicStructure","1.1");return i&&(n||!r)},trigger:"graphics"}),r("load","9",{name:"graphics-svg-default",test:function(e){var t=e.config.doc,n=!e.config.defaultGraphicEngine||e.config.defaultGraphicEngine!="canvas",r=t&&t.createElement("canvas"),i=t&&t.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#BasicStructure","1.1");return i&&(n||!r)},trigger:"graphics"}),r("load","10",{name:"graphics-vml",test:function(e){var t=e.config.doc,n=t&&t.createElement("canvas");return t&&!t.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#BasicStructure","1.1")&&(!n||!n.getContext||!n.getContext("2d"))},trigger:"graphics"}),r("load","11",{name:"graphics-vml-default",test:function(e){var t=e.config.doc,n=t&&t.createElement("canvas");return t&&!t.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#BasicStructure","1.1")&&(!n||!n.getContext||!n.getContext("2d"))},trigger:"graphics"}),r("load","12",{name:"history-hash-ie",test:function(e){var t=e.config.doc&&e.config.doc.documentMode;return e.UA.ie&&(!("onhashchange"in e.config.win)||!t||t<8)},trigger:"history-hash"}),r("load","13",{name:"io-nodejs",trigger:"io-base",ua:"nodejs"}),r("load","14",{name:"scrollview-base-ie",trigger:"scrollview-base",ua:"ie"}),r("load","15",{name:"selector-css2",test:function(e){var t=e.config.doc,n=t&&!("querySelectorAll"in t);return n},trigger:"selector"}),r("load","16",{name:"transition-timer",test:function(e){var t=e.config.doc,n=t?t.documentElement:null,r=!0;return n&&n.style&&(r=!("MozTransition"in n.style||"WebkitTransition"in n.style)),r},trigger:"transition"}),r("load","17",{name:"widget-base-ie",trigger:"widget-base",ua:"ie"})},"3.7.1",{requires:["yui-base"]}),YUI.add("intl-base",function(e,t){var n=/[, ]/;e.mix(e.namespace("Intl"),{lookupBestLang:function(t,r){function a(e){var t;for(t=0;t<r.length;t+=1)if(e.toLowerCase()===r[t].toLowerCase())return r[t]}var i,s,o,u;e.Lang.isString(t)&&(t=t.split(n));for(i=0;i<t.length;i+=1){s=t[i];if(!s||s==="*")continue;while(s.length>0){o=a(s);if(o)return o;u=s.lastIndexOf("-");if(!(u>=0))break;s=s.substring(0,u),u>=2&&s.charAt(u-2)==="-"&&(s=s.substring(0,u-2))}}return""}})},"3.7.1",{requires:["yui-base"]}),YUI.add("yui-log",function(e,t){var n=e,r="yui:log",i="undefined",s={debug:1,info:1,warn:1,error:1};n.log=function(e,t,o,u){var a,f,l,c,h,p=n,d=p.config,v=p.fire?p:YUI.Env.globalEvents;return d.debug&&(o=o||"",typeof o!="undefined"&&(f=d.logExclude,l=d.logInclude,!l||o in l?l&&o in l?a=!l[o]:f&&o in f&&(a=f[o]):a=1),a||(d.useBrowserConsole&&(c=o?o+": "+e:e,p.Lang.isFunction(d.logFn)?d.logFn.call(p,e,t,o):typeof console!=i&&console.log?(h=t&&console[t]&&t in s?t:"log",console[h](c)):typeof opera!=i&&opera.postError(c)),v&&!u&&(v==p&&!v.getEvent(r)&&v.publish(r,{broadcast:2}),v.fire(r,{msg:e,cat:t,src:o})))),p},n.message=function(){return n.log.apply(n,arguments)}},"3.7.1",{requires:["yui-base"]}),YUI.add("yui-later",function(e,t){var n=[];e.later=function(t,r,i,s,o){t=t||0,s=e.Lang.isUndefined(s)?n:e.Array(s),r=r||e.config.win||e;var u=!1,a=r&&e.Lang.isString(i)?r[i]:i,f=function(){u||(a.apply?a.apply(r,s||n):a(s[0],s[1],s[2],s[3]))},l=o?setInterval(f,t):setTimeout(f,t);return{id:l,interval:o,cancel:function(){u=!0,this.interval?clearInterval(l):clearTimeout(l)}}},e.Lang.later=e.later},"3.7.1",{requires:["yui-base"]}),YUI.add("loader-base",function(e,t){YUI.Env[e.version]||function(){var t=e.version,n="/build/",r=t+n,i=e.Env.base,s="gallery-2012.09.12-20-02",o="2in3",u="4",a="2.9.0",f=i+"combo?",l={version:t,root:r,base:e.Env.base,comboBase:f,skin:{defaultSkin:"sam",base:"assets/skins/",path:"skin.css",after:["cssreset","cssfonts","cssgrids","cssbase","cssreset-context","cssfonts-context"]},groups:{},patterns:{}},c=l.groups,h=function(e,t,r){var s=o+"."+(e||u)+"/"+(t||a)+n,l=r&&r.base?r.base:i,h=r&&r.comboBase?r.comboBase:f;c.yui2.base=l+s,c.yui2.root=s,c.yui2.comboBase=h},p=function(e,t){var r=(e||s)+n,o=t&&t.base?t.base:i,u=t&&t.comboBase?t.comboBase:f;c.gallery.base=o+r,c.gallery.root=r,c.gallery.comboBase=u};c[t]={},c.gallery={ext:!1,combine:!0,comboBase:f,update:p,patterns:{"gallery-":{},"lang/gallery-":{},"gallerycss-":{type:"css"}}},c.yui2={combine:!0,ext:!1,comboBase:f,update:h,patterns:{"yui2-":{configFn:function(e){/-skin|reset|fonts|grids|base/.test(e.name)&&(e.type="css",e.path=e.path.replace(/\.js/,".css"),e.path=e.path.replace(/\/yui2-skin/,"/assets/skins/sam/yui2-skin"))}}}},p(),h(),YUI.Env[t]=l}();var n={},r=[],i=1024,s=YUI.Env,o=s._loaded,u="css",a="js",f="intl",l="sam",c=e.version,h="",p=e.Object,d=p.each,v=e.Array,m=s._loaderQueue,g=s[c],y="skin-",b=e.Lang,w=s.mods,E,S,x=function(e,t,n,r){var i=e+"/"+t;return r||(i+="-min"),i+="."+(n||u),i};YUI.Env._cssLoaded||(YUI.Env._cssLoaded={}),e.Env.meta=g,e.Loader=function(t){var n=this;t=t||{},E=g.md5,n.context=e,n.base=e.Env.meta.base+e.Env.meta.root,n.comboBase=e.Env.meta.comboBase,n.combine=t.base&&t.base.indexOf(n.comboBase.substr(0,20))>-1,n.comboSep="&",n.maxURLLength=i,n.ignoreRegistered=t.ignoreRegistered,n.root=e.Env.meta.root,n.timeout=0,n.forceMap={},n.allowRollup=!1,n.filters={},n.required={},n.patterns={},n.moduleInfo={},n.groups=e.merge(e.Env.meta.groups),n.skin=e.merge(e.Env.meta.skin),n.conditions={},n.config=t,n._internal=!0,n._populateCache(),n.loaded=o[c],n.async=!0,n._inspectPage(),n._internal=!1,n._config(t),n.forceMap=n.force?e.Array.hash(n.force):{},n.testresults=null,e.config.tests&&(n.testresults=e.config.tests),n.sorted=[],n.dirty=!0,n.inserted={},n.skipped={},n.tested={},n.ignoreRegistered&&n._resetModules()},e.Loader.prototype={_populateCache:function(){var t=this,n=g.modules,r=s._renderedMods,i;if(r&&!t.ignoreRegistered){for(i in r)r.hasOwnProperty(i)&&(t.moduleInfo[i]=e.merge(r[i]));r=s._conditions;for(i in r)r.hasOwnProperty(i)&&(t.conditions[i]=e.merge(r[i]))}else for(i in n)n.hasOwnProperty(i)&&t.addModule(n[i],i)},_resetModules:function(){var e=this,t,n;for(t in e.moduleInfo)if(e.moduleInfo.hasOwnProperty(t)){var r=e.moduleInfo[t],i=r.name,s=YUI.Env.mods[i]?YUI.Env.mods[i].details:null;s&&(e.moduleInfo[i]._reset=!0,e.moduleInfo[i].requires=s.requires||[],e.moduleInfo[i].optional=s.optional||[],e.moduleInfo[i].supersedes=s.supercedes||[]);if(r.defaults)for(n in r.defaults)r.defaults.hasOwnProperty(n)&&r[n]&&(r[n]=r.defaults[n]);delete r.langCache,delete r.skinCache,r.skinnable&&e._addSkin(e.skin.defaultSkin,r.name)}},REGEX_CSS:/\.css(?:[?;].*)?$/i,FILTER_DEFS:{RAW:{searchExp:"-min\\.js",replaceStr:".js"},DEBUG:{searchExp:"-min\\.js",replaceStr:"-debug.js"},COVERAGE:{searchExp:"-min\\.js",replaceStr:"-coverage.js"}},_inspectPage:function(){var e=this,t,n,r,i,s;for(s in e.moduleInfo)e.moduleInfo.hasOwnProperty(s)&&(t=e.moduleInfo[s],t.type&&t.type===u&&e.isCSSLoaded(t.name)&&(e.loaded[s]=!0));for(s in w)w.hasOwnProperty(s)&&(t=w[s],t.details&&(n=e.moduleInfo[t.name],r=t.details.requires,i=n&&n.requires,n?!n._inspected&&r&&i.length!=r.length&&delete n.expanded:n=e.addModule(t.details,s),n._inspected=!0))},_requires:function(e,t){var n,r,i,s,o=this.moduleInfo,a=o[e],f=o[t];if(!a||!f)return!1;r=a.expanded_map,i=a.after_map;if(i&&t in i)return!0;i=f.after_map;if(i&&e in i)return!1;s=o[t]&&o[t].supersedes;if(s)for(n=0;n<s.length;n++)if(this._requires(e,s[n]))return!0;s=o[e]&&o[e].supersedes;if(s)for(n=0;n<s.length;n++)if(this._requires(t,s[n]))return!1;return r&&t in r?!0:a.ext&&a.type==u&&!f.ext&&f.type==u?!0:!1},_config:function(t){var n,r,i,s,o,u,a,f=this;if(t)for(n in t)if(t.hasOwnProperty(n)){i=t[n];if(n=="require")f.require(i);else if(n=="skin")typeof i=="string"&&(f.skin.defaultSkin=t.skin,i={defaultSkin:i}),e.mix(f.skin,i,!0);else if(n=="groups"){for(r in i)if(i.hasOwnProperty(r)){a=r,u=i[r],f.addGroup(u,a);if(u.aliases)for(s in u.aliases)u.aliases.hasOwnProperty(s)&&f.addAlias(u.aliases[s],s)}}else if(n=="modules")for(r in i)i.hasOwnProperty(r)&&f.addModule(i[r],r);else if(n==="aliases")for(r in i)i.hasOwnProperty(r)&&f.addAlias(i[r],r);else n=="gallery"?this.groups.gallery.update(i,t):n=="yui2"||n=="2in3"?this.groups.yui2.update(t["2in3"],t.yui2,t):f[n]=i}o=f.filter,b.isString(o)&&(o=o.toUpperCase(),f.filterName=o,f.filter=f.FILTER_DEFS[o],o=="DEBUG"&&f.require("yui-log","dump"));if(f.filterName&&f.coverage&&f.filterName=="COVERAGE"&&b.isArray(f.coverage)&&f.coverage.length){var l=[];for(n=0;n<f.coverage.length;n++){var c=f.coverage[n];f.moduleInfo[c]&&f.moduleInfo[c].use?l=[].concat(l,f.moduleInfo[c].use):l.push(c)}f.filters=f.filters||{},e.Array.each(l,function(e){f.filters[e]=f.FILTER_DEFS.COVERAGE}),f.filterName="RAW",f.filter=f.FILTER_DEFS[f.filterName]}f.lang},formatSkin:function(e,t){var n=y+e;return t&&(n=n+"-"+t),n},_addSkin:function(e,t,n){var r,i,s,o,u=this.moduleInfo,a=this.skin,f=u[t]&&u[t].ext;return t&&(s=this.formatSkin(e,t),u[s]||(r=u[t],i=r.pkg||t,o={skin:!0,name:s,group:r.group,type:"css",after:a.after,path:(n||i)+"/"+a.base+e+"/"+t+".css",ext:f},r.base&&(o.base=r.base),r.configFn&&(o.configFn=r.configFn),this.addModule(o,s))),s},addAlias:function(e,t){YUI.Env.aliases[t]=e,this.addModule({name:t,use:e})},addGroup:function(e,t){var n=e.modules,r=this,i,s;t=t||e.name,e.name=t,r.groups[t]=e;if(e.patterns)for(i in e.patterns)e.patterns.hasOwnProperty(i)&&(e.patterns[i].group=t,r.patterns[i]=e.patterns[i]);if(n)for(i in n)n.hasOwnProperty(i)&&(s=n[i],typeof s=="string"&&(s={name:i,fullpath:s}),s.group=t,r.addModule(s,i))},addModule:function(t,n){n=n||t.name,typeof t=="string"&&(t={name:n,fullpath:t}),this.moduleInfo[n]&&this.moduleInfo[n].temp&&(t=e.merge(this.moduleInfo[n],t)),t.name=n;if(!t||!t.name)return null;if(!t.type){t.type=a;var r=t.path||t.fullpath;r&&this.REGEX_CSS.test(r)&&(t.type=u)}!t.path&&!t.fullpath&&(t.path=x(n,n,t.type)),t.supersedes=t.supersedes||t.use,t.ext="ext"in t?t.ext:this._internal?!1:!0;var i=t.submodules,o,f,l,c,p,d,m,g,y,b,w,E,S,T,N,C,k,L,A,O,M=this.conditions,_;this.moduleInfo[n]=t,t.requires=t.requires||[];if(this.requires)for(o=0;o<this.requires.length;o++)t.requires.push(this.requires[o]);if(t.group&&this.groups&&this.groups[t.group]){O=this.groups[t.group];if(O.requires)for(o=0;o<O.requires.length;o++)t.requires.push(O.requires[o])}t.defaults||(t.defaults={requires:t.requires?[].concat(t.requires):null,supersedes:t.supersedes?[].concat(t.supersedes):null,optional:t.optional?[].concat(t.optional):null}),t.skinnable&&t.ext&&t.temp&&(L=this._addSkin(this.skin.defaultSkin,n),t.requires.unshift(L)),t.requires.length&&(t.requires=this.filterRequires(t.requires)||[]);if(!t.langPack&&t.lang){b=v(t.lang);for(y=0;y<b.length;y++)N=b[y],w=this.getLangPackName(N,n),d=this.moduleInfo[w],d||(d=this._addLangPack(N,t,w))}if(i){c=t.supersedes||[],f=0;for(o in i)if(i.hasOwnProperty(o)){p=i[o],p.path=p.path||x(n,o,t.type),p.pkg=n,p.group=t.group,p.supersedes&&(c=c.concat(p.supersedes)),d=this.addModule(p,o),c.push(o);if(d.skinnable){t.skinnable=!0,k=this.skin.overrides;if(k&&k[o])for(y=0;y<k[o].length;y++)L=this._addSkin(k[o][y],o,n),c.push(L);L=this._addSkin(this.skin.defaultSkin,o,n),c.push(L)}if(p.lang&&p.lang.length){b=v(p.lang);for(y=0;y<b.length;y++)N=b[y],w=this.getLangPackName(N,n),E=this.getLangPackName(N,o),d=this.moduleInfo[w],d||(d=this._addLangPack(N,t,w)),S=S||v.hash(d.supersedes),E in S||d.supersedes.push(E),t.lang=t.lang||[],T=T||v.hash(t.lang),N in T||t.lang.push(N),w=this.getLangPackName(h,n),E=this.getLangPackName(h,o),d=this.moduleInfo[w],d||(d=this._addLangPack(N,t,w)),E in S||d.supersedes.push(E)}f++}t.supersedes=v.dedupe(c),this.allowRollup&&(t.rollup=f<4?f:Math.min(f-1,4))}m=t.plugins;if(m)for(o in m)m.hasOwnProperty(o)&&(g=m[o],g.pkg=n,g.path=g.path||x(n,o,t.type),g.requires=g.requires||[],g.group=t.group,this.addModule(g,o),t.skinnable&&this._addSkin(this.skin.defaultSkin,o,n));if(t.condition){l=t.condition.trigger,YUI.Env.aliases[l]&&(l=YUI.Env.aliases[l]),e.Lang.isArray(l)||(l=[l]);for(o=0;o<l.length;o++)_=l[o],A=t.condition.when,M[_]=M[_]||{},M[_][n]=t.condition,A&&A!="after"?A=="instead"&&(t.supersedes=t.supersedes||[],t.supersedes.push(_)):(t.after=t.after||[],t.after.push(_))}return t.supersedes&&(t.supersedes=this.filterRequires(t.supersedes)),t.after&&(t.after=this.filterRequires(t.after),t.after_map=v.hash(t.after)),t.configFn&&(C=t.configFn(t),C===!1&&(delete this.moduleInfo[n],delete s._renderedMods[n],t=null)),t&&(s._renderedMods||(s._renderedMods={}),s._renderedMods[n]=e.mix(s._renderedMods[n]||{},t),s._conditions=M),t},require:function(t){var n=typeof t=="string"?v(arguments):t;this.dirty=!0,this.required=e.merge(this.required,v.hash(this.filterRequires(n))),this._explodeRollups()},_explodeRollups:function(){var e=this,t,n,r,i,s,o,u,a=e.required;if(!e.allowRollup){for(r in a)if(a.hasOwnProperty(r)){t=e.getModule(r);if(t&&t.use){o=t.use.length;for(i=0;i<o;i++){n=e.getModule(t.use[i]);if(n&&n.use){u=n.use.length;for(s=0;s<u;s++)a[n.use[s]]=!0}else a[t.use[i]]=!0}}}e.required=a}},filterRequires:function(t){if(t){e.Lang.isArray(t)||(t=[t]),t=e.Array(t);var n=[],r,i,s,o;for(r=0;r<t.length;r++){i=this.getModule(t[r]);if(i&&i.use)for(s=0;s<i.use.length;s++)o=this.getModule(i.use[s]),o&&o.use&&o.name!==i.name?n=e.Array.dedupe([].concat(n,this.filterRequires(o.use))):n.push(i.use[s]);else n.push(t[r])}t=n}return t},getRequires:function(t){if(!t)return r;if(t._parsed)return t.expanded||r;var n,i,s,o,u,a,l=this.testresults,c=t.name,m,g=w[c]&&w[c].details,y,b,E,S,x,T,N,C,k,L,A,O,M=t.lang||t.intl,_=this.moduleInfo,D=e.Features&&e.Features.tests.load,P,H;t.temp&&g&&(N=t,t=this.addModule(g,c),t.group=N.group,t.pkg=N.pkg,delete t.expanded),H=!!this.lang&&t.langCache!==this.lang||t.skinCache!==this.skin.defaultSkin;if(t.expanded&&!H)return t.expanded;y=[],P={},T=this.filterRequires(t.requires),t.lang&&(y.unshift("intl"),T.unshift("intl"),M=!0),C=this.filterRequires(t.optional),t._parsed=!0,t.langCache=this.lang,t.skinCache=this.skin.defaultSkin;for(n=0;n<T.length;n++)if(!P[T[n]]){y.push(T[n]),P[T[n]]=!0,i=this.getModule(T[n]);if(i){o=this.getRequires(i),M=M||i.expanded_map&&f in i.expanded_map;for(s=0;s<o.length;s++)y.push(o[s])}}T=this.filterRequires(t.supersedes);if(T)for(n=0;n<T.length;n++)if(!P[T[n]]){t.submodules&&y.push(T[n]),P[T[n]]=!0,i=this.getModule(T[n]);if(i){o=this.getRequires(i),M=M||i.expanded_map&&f in i.expanded_map;for(s=0;s<o.length;s++)y.push(o[s])}}if(C&&this.loadOptional)for(n=0;n<C.length;n++)if(!P[C[n]]){y.push(C[n]),P[C[n]]=!0,i=_[C[n]];if(i){o=this.getRequires(i),M=M||i.expanded_map&&f in i.expanded_map;for(s=0;s<o.length;s++)y.push(o[s])}}m=this.conditions[c];if(m){t._parsed=!1;if(l&&D)d(l,function(e,t){var n=D[t].name;!P[n]&&D[t].trigger==c&&e&&D[t]&&(P[n]=!0,y.push(n))});else for(n in m)if(m.hasOwnProperty(n)&&!P[n]){x=m[n],S=x&&(!x.ua&&!x.test||x.ua&&e.UA[x.ua]||x.test&&x.test(e,T));if(S){P[n]=!0,y.push(n),i=this.getModule(n);if(i){o=this.getRequires(i);for(s=0;s<o.length;s++)y.push(o[s])}}}}if(t.skinnable){L=this.skin.overrides;for(n in YUI.Env.aliases)YUI.Env.aliases.hasOwnProperty(n)&&e.Array.indexOf(YUI.Env.aliases[n],c)>-1&&(A=n);if(L&&(L[c]||A&&L[A])){O=c,L[A]&&(O=A);for(n=0;n<L[O].length;n++)k=this._addSkin(L[O][n],c),this.isCSSLoaded(k,this._boot)||y.push(k)}else k=this._addSkin(this.skin.defaultSkin,c),this.isCSSLoaded(k,this._boot)||y.push(k)}return t._parsed=!1,M&&(t.lang&&!t.langPack&&e.Intl&&(a=e.Intl.lookupBestLang(this.lang||h,t.lang),u=this.getLangPackName(a,c),u&&y.unshift(u)),y.unshift(f)),t.expanded_map=v.hash(y),t.expanded=p.keys(t.expanded_map),t.expanded},isCSSLoaded:function(t,n){if(!t||!YUI.Env.cssStampEl||!n&&this.ignoreRegistered)return!1;var r=YUI.Env.cssStampEl,i=!1,s=YUI.Env._cssLoaded[t],o=r.currentStyle;return s!==undefined?s:(r.className=t,o||(o=e.config.doc.defaultView.getComputedStyle(r,null)),o&&o.display==="none"&&(i=!0),r.className="",YUI.Env._cssLoaded[t]=i,i)},getProvides:function(t){var r=this.getModule(t),i,s;return r?(r&&!r.provides&&(i={},s=r.supersedes,s&&v.each(s,function(t){e.mix(i,this.getProvides(t))},this),i[t]=!0,r.provides=i),r.provides):n},calculate:function(e,t){if(e||t||this.dirty)e&&this._config(e),this._init||this._setup(),this._explode(),this.allowRollup?this._rollup():this._explodeRollups(),this._reduce(),this._sort()},_addLangPack:function(t,n,r){var i=n.name,s,o,u=this.moduleInfo[r];return u||(s=x(n.pkg||i,r,a,!0),o={path:s,intl:!0,langPack:!0,ext:n.ext,group:n.group,supersedes:[]},n.root&&(o.root=n.root),n.base&&(o.base=n.base),n.configFn&&(o.configFn=n.configFn),this.addModule(o,r),t&&(e.Env.lang=e.Env.lang||{},e.Env.lang[t]=e.Env.lang[t]||{},e.Env.lang[t][i]=!0)),this.moduleInfo[r]},_setup:function(){var t=this.moduleInfo,n,r,i,o,u,a;for(n in t)t.hasOwnProperty(n)&&(o=t[n],o&&(o.requires=v.dedupe(o.requires),o.lang&&(a=this.getLangPackName(h,n),this._addLangPack(null,o,a))));u={},this.ignoreRegistered||e.mix(u,s.mods),this.ignore&&e.mix(u,v.hash(this.ignore));for(i in u)u.hasOwnProperty(i)&&e.mix(u,this.getProvides(i));if(this.force)for(r=0;r<this.force.length;r++)this.force[r]in u&&delete u[this.force[r]];e.mix(this.loaded,u),this._init=!0},getLangPackName:function(e,t){return"lang/"+t+(e?"_"+e:"")},_explode:function(){var t=this.required,n,r,i={},s=this,o;s.dirty=!1,s._explodeRollups(),t=s.required;for(o in t)if(t.hasOwnProperty(o)&&!i[o]){i[o]=!0,n=s.getModule(o);if(n){var u=n.expound;u&&(t[u]=s.getModule(u),r=s.getRequires(t[u]),e.mix(t,v.hash(r))),r=s.getRequires(n),e.mix(t,v.hash(r))}}},_patternTest:function(e,t){return e.indexOf(t)>-1},getModule:function(t){if(!t)return null;var n,r,i,s=this.moduleInfo[t],o=this.patterns;if(!s||s&&s.ext)for(i in o)if(o.hasOwnProperty(i)){n=o[i],n.test||(n.test=this._patternTest);if(n.test(t,i)){r=n;break}}return s?r&&s&&r.configFn&&!s.configFn&&(s.configFn=r.configFn,s.configFn(s)):r&&(n.action?n.action.call(this,t,i):(s=this.addModule(e.merge(r),t),r.configFn&&(s.configFn=r.configFn),s.temp=!0)),s},_rollup:function(){},_reduce:function(e){e=e||this.required;var t,n,r,i,s=this.loadType,o=this.ignore?v.hash(this.ignore):!1;for(t in e)if(e.hasOwnProperty(t)){i=this.getModule(t),((this.loaded[t]||w[t])&&!this.forceMap[t]&&!this.ignoreRegistered||s&&i&&i.type!=s)&&delete e[t],o&&o[t]&&delete e[t],r=i&&i.supersedes;if(r)for(n=0;n<r.length;n++)r[n]in e&&delete e[r[n]]}return e},_finish:function(e,t){m.running=!1;var n=this.onEnd;n&&n.call(this.context,{msg:e,data:this.data,success:t}),this._continue()},_onSuccess:function(){var t=this,n=e.merge(t.skipped),r,i=[],s=t.requireRegistration,o,u,f,l;for(f in n)n.hasOwnProperty(f)&&delete t.inserted[f];t.skipped={};for(f in t.inserted)t.inserted.hasOwnProperty(f)&&(l=t.getModule(f),!l||!s||l.type!=a||f in YUI.Env.mods?e.mix(t.loaded,t.getProvides(f)):i.push(f));r=t.onSuccess,u=i.length?"notregistered":"success",o=!i.length,r&&r.call(t.context,{msg:u,data:t.data,success:o,failed:i,skipped:n}),t._finish(u,o)},_onProgress:function(e){var t=this,n;if(e.data&&e.data.length)for(n=0;n<e.data.length;n++)e.data[n]=t.getModule(e.data[n].name);t.onProgress&&t.onProgress.call(t.context,{name:e.url,data:e.data})},_onFailure:function(e){var t=this.onFailure,n=[],r=0,i=e.errors.length;for(r;r<i;r++)n.push(e.errors[r].error);n=n.join(","),t&&t.call(this.context,{msg:n,data:this.data,success:!1}),this._finish(n,!1)},_onTimeout:function(){var e=this.onTimeout;e&&e.call(this.context,{msg:"timeout",data:this.data,success:!1})},_sort:function(){var e=p.keys(this.required),t={},n=0,r,i,s,o,u,a,f;for(;;){r=e.length,a=!1;for(o=n;o<r;o++){i=e[o];for(u=o+1;u<r;u++){f=i+e[u];if(!t[f]&&this._requires(i,e[u])){s=e.splice(u,1),e.splice(o,0,s[0]),t[f]=!0,a=!0;break}}if(a)break;n++}if(!a)break}this.sorted=e},_insert:function(t,n,r,i){t&&this._config(t),!i;var s=this.resolve(!i),o=this,f=0,l=0,c={},h;o._refetch=[],r&&(s[r===a?u:a]=[]),s.js.length&&f++,s.css.length&&f++;var p=function(t){l++;var n={},r=0,i=0,s="",u;if(t&&t.errors)for(r=0;r<t.errors.length;r++)t.errors[r].request?s=t.errors[r].request.url:s=t.errors[r],n[s]=s;if(t&&t.data&&t.data.length&&t.type==="success")for(r=0;r<t.data.length;r++){o.inserted[t.data[r].name]=!0;if(t.data[r].lang||t.data[r].skinnable)delete o.inserted[t.data[r].name],o._refetch.push(t.data[r].name)}if(l===f){o._loading=null;if(o._refetch.length){for(r=0;r<o._refetch.length;r++){h=o.getRequires(o.getModule(o._refetch[r]));for(i=0;i<h.length;i++)o.inserted[h[i]]||(c[h[i]]=h[i])}c=e.Object.keys(c),c.length&&(o.require(c),t=null,o._insert())}t&&t.fn&&(u=t.fn,delete t.fn,u.call(o,t))}};this._loading=!0;if(!s.js.length&&!s.css.length){l=-1,p({fn:o._onSuccess});return}s.css.length&&e.Get.css(s.css,{data:s.cssMods,attributes:o.cssAttributes,insertBefore:o.insertBefore,charset:o.charset,timeout:o.timeout,context:o,onProgress:function(e){o._onProgress.call(o,e)},onTimeout:function(e){o._onTimeout.call(o,e)},onSuccess:function(e){e.type="success",e.fn=o._onSuccess,p.call(o,e)},onFailure:function(e){e.type="failure",e.fn=o._onFailure,p.call(o,e)}}),s.js.length&&e.Get.js(s.js,{data:s.jsMods,insertBefore:o.insertBefore,attributes:o.jsAttributes,charset:o.charset,timeout:o.timeout,autopurge:!1,context:o,async:o.async,onProgress:function(e){o._onProgress.call(o,e)},onTimeout:function(e){o._onTimeout.call(o,e)},onSuccess:function(e){e.type="success",e.fn=o._onSuccess,p.call(o,e)},onFailure:function(e){e.type="failure",e.fn=o._onFailure,p.call(o,e)}})},_continue:function(){!m.running&&m.size()>0&&(m.running=!0,m.next()())},insert:function(t,n,r){var i=this,s=e.merge(this);delete s.require,delete s.dirty,m.add(function(){i._insert(s,t,n,r)}),this._continue()},loadNext:function(e){return},_filter:function(e,t,n){var r=this.filter,i=t&&t in this.filters,s=i&&this.filters[t],o=n||(this.moduleInfo[t]?this.moduleInfo[t].group:null);return o&&this.groups[o]&&this.groups[o].filter&&(s=this.groups[o].filter,i=!0),e&&(i&&(r=b.isString(s)?this.FILTER_DEFS[s.toUpperCase()]||null:s),r&&(e=e.replace(new RegExp(r.searchExp,"g"),r.replaceStr))),e},_url:function(e,t,n){return this._filter((n||this.base||"")+e,t)},resolve:function(e,t){var r,s,o,f,c,h,p,d,v,m,g,y,w,E,S,x,T,N=[],C,k,A={},O=this,M,_,D=[],P=O.ignoreRegistered?{}:O.inserted,H={js:[],jsMods:[],css:[],cssMods:[]},B=O.loadType||"js";(O.skin.overrides||O.skin.defaultSkin!==l||O.ignoreRegistered)&&O._resetModules(),e&&O.calculate(),t=t||O.sorted;var j=function(e){if(e){d=e.group&&O.groups[e.group]||n,d.async===!1&&(e.async=d.async),f=e.fullpath?O._filter(e.fullpath,t[s]):O._url(e.path,t[s],d.base||e.base);if(e.attributes||e.async===!1)f={url:f,async:e.async},e.attributes&&(f.attributes=e.attributes);H[e.type].push(f),H[e.type+"Mods"].push(e)}};r=t.length,S=O.comboBase,f=S,w={};for(s=0;s<r;s++){y=S,o=O.getModule(t[s]),v=o&&o.group,d=O.groups[v];if(v&&d){if(!d.combine||o.fullpath){j(o);continue}o.combine=!0,d.comboBase&&(y=d.comboBase),"root"in d&&b.isValue(d.root)&&(o.root=d.root),o.comboSep=d.comboSep||O.comboSep,o.maxURLLength=d.maxURLLength||O.maxURLLength}else if(!O.combine){j(o);continue}w[y]=w[y]||[],w[y].push(o)}for(m in w)if(w.hasOwnProperty(m)){A[m]=A[m]||{js:[],jsMods:[],css:[],cssMods:[]},f=m,E=w[m],r=E.length;if(r)for(s=0;s<r;s++){if(P[E[s]])continue;o=E[s],o&&(o.combine||!o.ext)?(A[m].comboSep=o.comboSep,A[m].group=o.group,A[m].maxURLLength=o.maxURLLength,g=(b.isValue(o.root)?o.root:O.root)+(o.path||o.fullpath),g=O._filter(g,o.name),A[m][o.type].push(g),A[m][o.type+"Mods"].push(o)):E[s]&&j(E[s])}}for(m in A){x=m,M=A[x].comboSep||O.comboSep,_=A[x].maxURLLength||O.maxURLLength;for(B in A[x])if(B===a||B===u){T=A[x][B],E=A[x][B+"Mods"],r=T.length,C=x+T.join(M),k=C.length,_<=x.length&&(_=i);if(r)if(k>_){N=[];for(t=0;t<r;t++)N.push(T[t]),C=x+N.join(M),C.length>_&&(o=N.pop(),C=x+N.join(M),H[B].push(O._filter(C,null,A[x].group)),N=[],o&&N.push(o));N.length&&(C=x+N.join(M),H[B].push(O._filter(C,null,A[x].group)))}else H[B].push(O._filter(C,null,A[x].group));H[B+"Mods"]=H[B+"Mods"].concat(E)}}return A=null,H},load:function(e){if(!e)return;var t=this,n=t.resolve(!0);t.data=n,t.onEnd=function(){e.apply(t.context||t,arguments)},t.insert()}}},"3.7.1",{requires:["get","features"]}),YUI.add("loader-rollup",function(e,t){e.Loader.prototype._rollup=function(){var e,t,n,r,i=this.required,s,o=this.moduleInfo,u,a,f;if(this.dirty||!this.rollups){this.rollups={};for(e in o)o.hasOwnProperty(e)&&(n=this.getModule(e),n&&n.rollup&&(this.rollups[e]=n))}for(;;){u=!1;for(e in this.rollups)if(this.rollups.hasOwnProperty(e)&&!i[e]&&(!this.loaded[e]||this.forceMap[e])){n=this.getModule(e),r=n.supersedes||[],s=!1;if(!n.rollup)continue;a=0;for(t=0;t<r.length;t++){f=o[r[t]];if(this.loaded[r[t]]&&!this.forceMap[r[t]]){s=!1;break}if(i[r[t]]&&n.type==f.type){a++,s=a>=n.rollup;if(s)break}}s&&(i[e]=!0,u=!0,this.getRequires(n))}if(!u)break}}},"3.7.1",{requires:["loader-base"]}),YUI.add("loader-yui3",function(e,t){YUI.Env[e.version].modules=YUI.Env[e.version].modules||{"align-plugin":{requires:["node-screen","node-pluginhost"]},anim:{use:["anim-base","anim-color","anim-curve","anim-easing","anim-node-plugin","anim-scroll","anim-xy"]},"anim-base":{requires:["base-base","node-style"]},"anim-color":{requires:["anim-base"]},"anim-curve":{requires:["anim-xy"]},"anim-easing":{requires:["anim-base"]},"anim-node-plugin":{requires:["node-pluginhost","anim-base"]},"anim-scroll":{requires:["anim-base"]},"anim-shape":{requires:["anim-base","anim-easing","anim-color","matrix"]},"anim-shape-transform":{use:["anim-shape"]},"anim-xy":{requires:["anim-base","node-screen"]},app:{use:["app-base","app-content","app-transitions","lazy-model-list","model","model-list","model-sync-rest","router","view","view-node-map"]},"app-base":{requires:["classnamemanager","pjax-base","router","view"]},"app-content":{requires:["app-base","pjax-content"]},"app-transitions":{requires:["app-base"]},"app-transitions-css":{type:"css"},"app-transitions-native":{condition:{name:"app-transitions-native",test:function(e){var t=e.config.doc,n=t?t.documentElement:null;return n&&n.style?"MozTransition"in n.style||"WebkitTransition"in n.style:!1},trigger:"app-transitions"},requires:["app-transitions","app-transitions-css","parallel","transition"]},"array-extras":{requires:["yui-base"]},"array-invoke":{requires:["yui-base"]},arraylist:{requires:["yui-base"]},"arraylist-add":{requires:["arraylist"]},"arraylist-filter":{requires:["arraylist"]},arraysort:{requires:["yui-base"]},"async-queue":{requires:["event-custom"]},attribute:{use:["attribute-base","attribute-complex"]},"attribute-base":{requires:["attribute-core","attribute-events","attribute-extras"]},"attribute-complex":{requires:["attribute-base"]},"attribute-core":{requires:["oop"]},"attribute-events":{requires:["event-custom"]},"attribute-extras":{requires:["oop"]},autocomplete:{use:["autocomplete-base","autocomplete-sources","autocomplete-list","autocomplete-plugin"]},"autocomplete-base":{optional:["autocomplete-sources"],requires:["array-extras","base-build","escape","event-valuechange","node-base"]},"autocomplete-filters":{requires:["array-extras","text-wordbreak"]},"autocomplete-filters-accentfold":{requires:["array-extras","text-accentfold","text-wordbreak"]},"autocomplete-highlighters":{requires:["array-extras","highlight-base"]},"autocomplete-highlighters-accentfold":{requires:["array-extras","highlight-accentfold"]},"autocomplete-list":{after:["autocomplete-sources"],lang:["en"],requires:["autocomplete-base","event-resize","node-screen","selector-css3","shim-plugin","widget","widget-position","widget-position-align"],skinnable:!0},"autocomplete-list-keys":{condition:{name:"autocomplete-list-keys",test:function(e){return!e.UA.ios&&!e.UA.android},trigger:"autocomplete-list"},requires:["autocomplete-list","base-build"]},"autocomplete-plugin":{requires:["autocomplete-list","node-pluginhost"]},"autocomplete-sources":{optional:["io-base","json-parse","jsonp","yql"],requires:["autocomplete-base"]},base:{use:["base-base","base-pluginhost","base-build"]},"base-base":{after:["attribute-complex"],requires:["base-core","attribute-base"]},"base-build":{requires:["base-base"]},"base-core":{requires:["attribute-core"]},"base-pluginhost":{requires:["base-base","pluginhost"]},button:{requires:["button-core","cssbutton","widget"]},"button-core":{requires:["attribute-core","classnamemanager","node-base"]},"button-group":{requires:["button-plugin","cssbutton","widget"]},"button-plugin":{requires:["button-core","cssbutton","node-pluginhost"]},cache:{use:["cache-base","cache-offline","cache-plugin"]},"cache-base":{requires:["base"]},"cache-offline":{requires:["cache-base","json"]},"cache-plugin":{requires:["plugin","cache-base"]},calendar:{lang:["de","en","fr","ja","nb-NO","pt-BR","ru","zh-HANT-TW"],requires:["calendar-base","calendarnavigator"],skinnable:!0},"calendar-base":{lang:["de","en","fr","ja","nb-NO","pt-BR","ru","zh-HANT-TW"],requires:["widget","substitute","datatype-date","datatype-date-math","cssgrids"],skinnable:!0},calendarnavigator:{requires:["plugin","classnamemanager","datatype-date","node","substitute"],skinnable:!0},charts:{requires:["charts-base"]},"charts-base":{requires:["dom","datatype-number","datatype-date","event-custom","event-mouseenter","event-touch","widget","widget-position","widget-stack","graphics"]},"charts-legend":{requires:["charts-base"]},classnamemanager:{requires:["yui-base"]},"clickable-rail":{requires:["slider-base"]},collection:{use:["array-extras","arraylist","arraylist-add","arraylist-filter","array-invoke"]},console:{lang:["en","es","ja"],requires:["yui-log","widget"],skinnable:!0},"console-filters":{requires:["plugin","console"],skinnable:!0},controller:{use:["router"]},cookie:{requires:["yui-base"]},"createlink-base":{requires:["editor-base"]},cssbase:{after:["cssreset","cssfonts","cssgrids","cssreset-context","cssfonts-context","cssgrids-context"],type:"css"},"cssbase-context":{after:["cssreset","cssfonts","cssgrids","cssreset-context","cssfonts-context","cssgrids-context"],type:"css"},cssbutton:{type:"css"},cssfonts:{type:"css"},"cssfonts-context":{type:"css"},cssgrids:{optional:["cssreset","cssfonts"],type:"css"},"cssgrids-base":{optional:["cssreset","cssfonts"],type:"css"},"cssgrids-units":{optional:["cssreset","cssfonts"],requires:["cssgrids-base"],type:"css"},cssreset:{type:"css"},"cssreset-context":{type:"css"},dataschema:{use:["dataschema-base","dataschema-json","dataschema-xml","dataschema-array","dataschema-text"]},"dataschema-array":{requires:["dataschema-base"]},"dataschema-base":{requires:["base"]},"dataschema-json":{requires:["dataschema-base","json"]},"dataschema-text":{requires:["dataschema-base"]},"dataschema-xml":{requires:["dataschema-base"]},datasource:{use:["datasource-local","datasource-io","datasource-get","datasource-function","datasource-cache","datasource-jsonschema","datasource-xmlschema","datasource-arrayschema","datasource-textschema","datasource-polling"]},"datasource-arrayschema":{requires:["datasource-local","plugin","dataschema-array"]},"datasource-cache":{requires:["datasource-local","plugin","cache-base"]},"datasource-function":{requires:["datasource-local"]},"datasource-get":{requires:["datasource-local","get"]},"datasource-io":{requires:["datasource-local","io-base"]},"datasource-jsonschema":{requires:["datasource-local","plugin","dataschema-json"]},"datasource-local":{requires:["base"]},"datasource-polling":{requires:["datasource-local"]},"datasource-textschema":{requires:["datasource-local","plugin","dataschema-text"]},"datasource-xmlschema":{requires:["datasource-local","plugin","dataschema-xml"]},datatable:{use:["datatable-core","datatable-table","datatable-head","datatable-body","datatable-base","datatable-column-widths","datatable-message","datatable-mutable","datatable-sort","datatable-datasource"]},"datatable-base":{requires:["datatable-core","datatable-table","datatable-head","datatable-body","base-build","widget"],skinnable:!0},"datatable-base-deprecated":{requires:["recordset-base","widget","substitute","event-mouseenter"],skinnable:!0},"datatable-body":{requires:["datatable-core","view","classnamemanager"]},"datatable-column-widths":{requires:["datatable-base"]},"datatable-core":{requires:["escape","model-list","node-event-delegate"]},"datatable-datasource":{requires:["datatable-base","plugin","datasource-local"]},"datatable-datasource-deprecated":{requires:["datatable-base-deprecated","plugin","datasource-local"]},"datatable-deprecated":{use:["datatable-base-deprecated","datatable-datasource-deprecated","datatable-sort-deprecated","datatable-scroll-deprecated"]},"datatable-head":{requires:["datatable-core","view","classnamemanager"]},"datatable-message":{lang:["en"],requires:["datatable-base"],skinnable:!0},"datatable-mutable":{requires:["datatable-base"]},"datatable-scroll":{requires:["datatable-base","datatable-column-widths","dom-screen"],skinnable:!0},"datatable-scroll-deprecated":{requires:["datatable-base-deprecated","plugin"]},"datatable-sort":{lang:["en"],requires:["datatable-base"],skinnable:!0},"datatable-sort-deprecated":{lang:["en"],requires:["datatable-base-deprecated","plugin","recordset-sort"]},"datatable-table":{requires:["datatable-core","datatable-head","datatable-body","view","classnamemanager"]},datatype:{use:["datatype-date","datatype-number","datatype-xml"]},"datatype-date":{use:["datatype-date-parse","datatype-date-format","datatype-date-math"]},"datatype-date-format":{lang:["ar","ar-JO","ca","ca-ES","da","da-DK","de","de-AT","de-DE","el","el-GR","en","en-AU","en-CA","en-GB","en-IE","en-IN","en-JO","en-MY","en-NZ","en-PH","en-SG","en-US","es","es-AR","es-BO","es-CL","es-CO","es-EC","es-ES","es-MX","es-PE","es-PY","es-US","es-UY","es-VE","fi","fi-FI","fr","fr-BE","fr-CA","fr-FR","hi","hi-IN","id","id-ID","it","it-IT","ja","ja-JP","ko","ko-KR","ms","ms-MY","nb","nb-NO","nl","nl-BE","nl-NL","pl","pl-PL","pt","pt-BR","ro","ro-RO","ru","ru-RU","sv","sv-SE","th","th-TH","tr","tr-TR","vi","vi-VN","zh-Hans","zh-Hans-CN","zh-Hant","zh-Hant-HK","zh-Hant-TW"]},"datatype-date-math":{requires:["yui-base"]},"datatype-date-parse":{},"datatype-number":{use:["datatype-number-parse","datatype-number-format"]},"datatype-number-format":{},"datatype-number-parse":{},"datatype-xml":{use:["datatype-xml-parse","datatype-xml-format"]},"datatype-xml-format":{},"datatype-xml-parse":{},dd:{use:["dd-ddm-base","dd-ddm","dd-ddm-drop","dd-drag","dd-proxy","dd-constrain","dd-drop","dd-scroll","dd-delegate"]},"dd-constrain":{requires:["dd-drag"]},"dd-ddm":{requires:["dd-ddm-base","event-resize"]},"dd-ddm-base":{requires:["node","base","yui-throttle","classnamemanager"]},"dd-ddm-drop":{requires:["dd-ddm"]},"dd-delegate":{requires:["dd-drag","dd-drop-plugin","event-mouseenter"]},"dd-drag":{requires:["dd-ddm-base"]},"dd-drop":{requires:["dd-drag","dd-ddm-drop"]},"dd-drop-plugin":{requires:["dd-drop"]},"dd-gestures":{condition:{name:"dd-gestures",test:function(e){return e.config.win&&"ontouchstart"in e.config.win&&!(e.UA.chrome&&e.UA.chrome<6)},trigger:"dd-drag"},requires:["dd-drag","event-synthetic","event-gestures"]},"dd-plugin":{optional:["dd-constrain","dd-proxy"],requires:["dd-drag"]},"dd-proxy":{requires:["dd-drag"]},"dd-scroll":{requires:["dd-drag"]},dial:{lang:["en","es"],requires:["widget","dd-drag","event-mouseenter","event-move","event-key","transition","intl"],skinnable:!0},dom:{use:["dom-base","dom-screen","dom-style","selector-native","selector"]},"dom-base":{requires:["dom-core"]},"dom-core":{requires:["oop","features"]},"dom-deprecated":{requires:["dom-base"]},"dom-screen":{requires:["dom-base","dom-style"]},"dom-style":{requires:["dom-base"]},"dom-style-ie":{condition:{name:"dom-style-ie",test:function(e){var t=e.Features.test,n=e.Features.add,r=e.config.win,i=e.config.doc,s="documentElement",o=!1;return n("style","computedStyle",{test:function(){return r&&"getComputedStyle"in r}}),n("style","opacity",{test:function(){return i&&"opacity"in i[s].style}}),o=!t("style","opacity")&&!t("style","computedStyle"),o},trigger:"dom-style"},requires:["dom-style"]},dump:{requires:["yui-base"]},editor:{use:["frame","editor-selection","exec-command","editor-base","editor-para","editor-br","editor-bidi","editor-tab","createlink-base"]},"editor-base":{requires:["base","frame","node","exec-command","editor-selection"]},"editor-bidi":{requires:["editor-base"]},"editor-br":{requires:["editor-base"]},"editor-lists":{requires:["editor-base"]},"editor-para":{requires:["editor-para-base"]},"editor-para-base":{requires:["editor-base"]},"editor-para-ie":{condition:{name:"editor-para-ie",trigger:"editor-para",ua:"ie",when:"instead"},requires:["editor-para-base"]},"editor-selection":{requires:["node"]},"editor-tab":{requires:["editor-base"]},escape:{requires:["yui-base"]},event:{after:["node-base"],use:["event-base","event-delegate","event-synthetic","event-mousewheel","event-mouseenter","event-key","event-focus","event-resize","event-hover","event-outside","event-touch","event-move","event-flick","event-valuechange","event-tap"]},"event-base":{after:["node-base"],requires:["event-custom-base"]},"event-base-ie":{after:["event-base"],condition:{name:"event-base-ie",test:function(e){var t=e.config.doc&&e.config.doc.implementation;return t&&!t.hasFeature("Events","2.0")},trigger:"node-base"},requires:["node-base"]},"event-contextmenu":{requires:["event-synthetic","dom-screen"]},"event-custom":{use:["event-custom-base","event-custom-complex"]},"event-custom-base":{requires:["oop"]},"event-custom-complex":{requires:["event-custom-base"]},"event-delegate":{requires:["node-base"]},"event-flick":{requires:["node-base","event-touch","event-synthetic"]},"event-focus":{requires:["event-synthetic"]},"event-gestures":{use:["event-flick","event-move"]},"event-hover":{requires:["event-mouseenter"]},"event-key":{requires:["event-synthetic"]},"event-mouseenter":{requires:["event-synthetic"]},"event-mousewheel":{requires:["node-base"]},"event-move":{requires:["node-base","event-touch","event-synthetic"]},"event-outside":{requires:["event-synthetic"]},"event-resize":{requires:["node-base","event-synthetic"]},"event-simulate":{requires:["event-base"]},"event-synthetic":{requires:["node-base","event-custom-complex"]},"event-tap":{requires:["node-base","event-base","event-touch","event-synthetic"]},"event-touch":{requires:["node-base"]},"event-valuechange":{requires:["event-focus","event-synthetic"]},"exec-command":{requires:["frame"]},features:{requires:["yui-base"]},file:{requires:["file-flash","file-html5"]},"file-flash":{requires:["base"]},"file-html5":{requires:["base"]},frame:{requires:["base","node","selector-css3","yui-throttle"]},"gesture-simulate":{requires:["async-queue","event-simulate","node-screen"]},get:{requires:["yui-base"]},graphics:{requires:["node","event-custom","pluginhost","matrix","classnamemanager"]},"graphics-canvas":{condition:{name:"graphics-canvas",test:function(e){var t=e.config.doc,n=e.config.defaultGraphicEngine&&e.config.defaultGraphicEngine=="canvas",r=t&&t.createElement("canvas"),i=t&&t.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#BasicStructure","1.1");return(!i||n)&&r&&r.getContext&&r.getContext("2d")},trigger:"graphics"},requires:["graphics"]},"graphics-canvas-default":{condition:{name:"graphics-canvas-default",test:function(e){var t=e.config.doc,n=e.config.defaultGraphicEngine&&e.config.defaultGraphicEngine=="canvas",r=t&&t.createElement("canvas"),i=t&&t.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#BasicStructure","1.1");return(!i||n)&&r&&r.getContext&&r.getContext("2d")},trigger:"graphics"}},"graphics-svg":{condition:{name:"graphics-svg",test:function(e){var t=e.config.doc,n=!e.config.defaultGraphicEngine||e.config.defaultGraphicEngine!="canvas",r=t&&t.createElement("canvas"),i=t&&t.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#BasicStructure","1.1");return i&&(n||!r)},trigger:"graphics"},requires:["graphics"]},"graphics-svg-default":{condition:{name:"graphics-svg-default",test:function(e){var t=e.config.doc,n=!e.config.defaultGraphicEngine||e.config.defaultGraphicEngine!="canvas",r=t&&t.createElement("canvas"),i=t&&t.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#BasicStructure","1.1");return i&&(n||!r)},trigger:"graphics"}},"graphics-vml":{condition:{name:"graphics-vml",test:function(e){var t=e.config.doc,n=t&&t.createElement("canvas");return t&&!t.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#BasicStructure","1.1")&&(!n||!n.getContext||!n.getContext("2d"))},trigger:"graphics"},requires:["graphics"]},"graphics-vml-default":{condition:{name:"graphics-vml-default",test:function(e){var t=e.config.doc,n=t&&t.createElement("canvas");return t&&!t.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#BasicStructure","1.1")&&(!n||!n.getContext||!n.getContext("2d"))},trigger:"graphics"}},handlebars:{use:["handlebars-compiler"]},"handlebars-base":{requires:["escape"]},"handlebars-compiler":{requires:["handlebars-base"]},highlight:{use:["highlight-base","highlight-accentfold"]},"highlight-accentfold":{requires:["highlight-base","text-accentfold"]},"highlight-base":{requires:["array-extras","classnamemanager","escape","text-wordbreak"]},history:{use:["history-base","history-hash","history-hash-ie","history-html5"]},"history-base":{requires:["event-custom-complex"]},"history-hash":{after:["history-html5"],requires:["event-synthetic","history-base","yui-later"]},"history-hash-ie":{condition:{name:"history-hash-ie",test:function(e){var t=e.config.doc&&e.config.doc.documentMode;return e.UA.ie&&(!("onhashchange"in e.config.win)||!t||t<8)},trigger:"history-hash"},requires:["history-hash","node-base"]},"history-html5":{optional:["json"],requires:["event-base","history-base","node-base"]},imageloader:{requires:["base-base","node-style","node-screen"]},intl:{requires:["intl-base","event-custom"]},"intl-base":{requires:["yui-base"]},io:{use:["io-base","io-xdr","io-form","io-upload-iframe","io-queue"]},"io-base":{requires:["event-custom-base","querystring-stringify-simple"]},"io-form":{requires:["io-base","node-base"]},"io-nodejs":{condition:{name:"io-nodejs",trigger:"io-base",ua:"nodejs"},requires:["io-base"]},"io-queue":{requires:["io-base","queue-promote"]},"io-upload-iframe":{requires:["io-base","node-base"]},"io-xdr":{requires:["io-base","datatype-xml-parse"]},json:{use:["json-parse","json-stringify"]},"json-parse":{requires:["yui-base"]},"json-stringify":{requires:["yui-base"]},jsonp:{requires:["get","oop"]},"jsonp-url":{requires:["jsonp"]},"lazy-model-list":{requires:["model-list"]},loader:{use:["loader-base","loader-rollup","loader-yui3"]},"loader-base":{requires:["get","features"]},"loader-rollup":{requires:["loader-base"]},"loader-yui3":{requires:["loader-base"]},matrix:{requires:["yui-base"]},model:{requires:["base-build","escape","json-parse"]},"model-list":{requires:["array-extras","array-invoke","arraylist","base-build","escape","json-parse","model"]},"model-sync-rest":{requires:["model","io-base","json-stringify"]},node:{use:["node-base","node-event-delegate","node-pluginhost","node-screen","node-style"]},"node-base":{requires:["event-base","node-core","dom-base"]},"node-core":{requires:["dom-core","selector"]},"node-deprecated":{requires:["node-base"]},"node-event-delegate":{requires:["node-base","event-delegate"]},"node-event-html5":{requires:["node-base"]},"node-event-simulate":{requires:["node-base","event-simulate","gesture-simulate"]},"node-flick":{requires:["classnamemanager","transition","event-flick","plugin"],skinnable:!0},"node-focusmanager":{requires:["attribute","node","plugin","node-event-simulate","event-key","event-focus"]},"node-load":{requires:["node-base","io-base"]},"node-menunav":{requires:["node","classnamemanager","plugin","node-focusmanager"],skinnable:!0},"node-pluginhost":{requires:["node-base","pluginhost"]},"node-screen":{requires:["dom-screen","node-base"]},"node-scroll-info":{requires:["base-build","dom-screen","event-resize","node-pluginhost","plugin"]},"node-style":{requires:["dom-style","node-base"]},oop:{requires:["yui-base"]},overlay:{requires:["widget","widget-stdmod","widget-position","widget-position-align","widget-stack","widget-position-constrain"],skinnable:!0},panel:{requires:["widget","widget-autohide","widget-buttons","widget-modality","widget-position","widget-position-align","widget-position-constrain","widget-stack","widget-stdmod"],skinnable:!0},parallel:{requires:["yui-base"]},pjax:{requires:["pjax-base","pjax-content"]},"pjax-base":{requires:["classnamemanager","node-event-delegate","router"]},"pjax-content":{requires:["io-base","node-base","router"]},"pjax-plugin":{requires:["node-pluginhost","pjax","plugin"]},plugin:{requires:["base-base"]},pluginhost:{use:["pluginhost-base","pluginhost-config"]},"pluginhost-base":{requires:["yui-base"]},"pluginhost-config":{requires:["pluginhost-base"]},profiler:{requires:["yui-base"]},querystring:{use:["querystring-parse","querystring-stringify"]},"querystring-parse":{requires:["yui-base","array-extras"]},"querystring-parse-simple":{requires:["yui-base"]},"querystring-stringify":{requires:["yui-base"]},"querystring-stringify-simple":{requires:["yui-base"]},"queue-promote":{requires:["yui-base"]},"range-slider":{requires:["slider-base","slider-value-range","clickable-rail"]},recordset:{use:["recordset-base","recordset-sort","recordset-filter","recordset-indexer"]},"recordset-base":{requires:["base","arraylist"]},"recordset-filter":{requires:["recordset-base","array-extras","plugin"]},"recordset-indexer":{requires:["recordset-base","plugin"]},"recordset-sort":{requires:["arraysort","recordset-base","plugin"]},resize:{use:["resize-base","resize-proxy","resize-constrain"]},"resize-base":{requires:["base","widget","event","oop","dd-drag","dd-delegate","dd-drop"],skinnable:!0},"resize-constrain":{requires:["plugin","resize-base"]},"resize-plugin":{optional:["resize-constrain"],requires:["resize-base","plugin"]},"resize-proxy":{requires:["plugin","resize-base"]},router:{optional:["querystring-parse"],requires:["array-extras","base-build","history"]},scrollview:{requires:["scrollview-base","scrollview-scrollbars"]},"scrollview-base":{requires:["widget","event-gestures","event-mousewheel","transition"],skinnable:!0},"scrollview-base-ie":{condition:{name:"scrollview-base-ie",trigger:"scrollview-base",ua:"ie"},requires:["scrollview-base"]},"scrollview-list":{requires:["plugin","classnamemanager"],skinnable:!0},"scrollview-paginator":{requires:["plugin","classnamemanager"]},"scrollview-scrollbars":{requires:["classnamemanager","transition","plugin"],skinnable:!0},selector:{requires:["selector-native"]},"selector-css2":{condition:{name:"selector-css2",test:function(e){var t=e.config.doc,n=t&&!("querySelectorAll"in t);return n},trigger:"selector"},requires:["selector-native"]},"selector-css3":{requires:["selector-native","selector-css2"]},"selector-native":{requires:["dom-base"]},"shim-plugin":{requires:["node-style","node-pluginhost"]},slider:{use:["slider-base","slider-value-range","clickable-rail","range-slider"]},"slider-base":{requires:["widget","dd-constrain","event-key"],skinnable:!0},"slider-value-range":{requires:["slider-base"]},sortable:{requires:["dd-delegate","dd-drop-plugin","dd-proxy"]},"sortable-scroll":{requires:["dd-scroll","sortable"]},stylesheet:{requires:["yui-base"]},substitute:{optional:["dump"],requires:["yui-base"]},swf:{requires:["event-custom","node","swfdetect","escape"]},swfdetect:{requires:["yui-base"]},tabview:{requires:["widget","widget-parent","widget-child","tabview-base","node-pluginhost","node-focusmanager"],skinnable:!0},"tabview-base":{requires:["node-event-delegate","classnamemanager","skin-sam-tabview"]},"tabview-plugin":{requires:["tabview-base"]},test:{requires:["event-simulate","event-custom","json-stringify"]},"test-console":{requires:["console-filters","test"],skinnable:!0},text:{use:["text-accentfold","text-wordbreak"]},"text-accentfold":{requires:["array-extras","text-data-accentfold"]},"text-data-accentfold":{requires:["yui-base"]},"text-data-wordbreak":{requires:["yui-base"]},"text-wordbreak":{requires:["array-extras","text-data-wordbreak"]},transition:{requires:["node-style"]},"transition-timer":{condition:{name:"transition-timer",test:function(e){var t=e.config.doc,n=t?t.documentElement:null,r=!0;return n&&n.style&&(r=!("MozTransition"in n.style||"WebkitTransition"in n.style)),r},trigger:"transition"},requires:["transition"]},uploader:{requires:["uploader-html5","uploader-flash"]},"uploader-deprecated":{requires:["event-custom","node","base","swf"]},"uploader-flash":{requires:["swf","widget","substitute","base","cssbutton","node","event-custom","file-flash","uploader-queue"]},"uploader-html5":{requires:["widget","node-event-simulate","substitute","file-html5","uploader-queue"]},"uploader-queue":{requires:["base"]},view:{requires:["base-build","node-event-delegate"]},"view-node-map":{requires:["view"]},widget:{use:["widget-base","widget-htmlparser","widget-skin","widget-uievents"]},"widget-anim":{requires:["anim-base","plugin","widget"]},"widget-autohide":{requires:["base-build","event-key","event-outside","widget"]},"widget-base":{requires:["attribute","base-base","base-pluginhost","classnamemanager","event-focus","node-base","node-style"],skinnable:!0},"widget-base-ie":{condition:{name:"widget-base-ie",trigger:"widget-base",ua:"ie"},requires:["widget-base"]},"widget-buttons":{requires:["button-plugin","cssbutton","widget-stdmod"]},"widget-child":{requires:["base-build","widget"]},"widget-htmlparser":{requires:["widget-base"]},"widget-locale":{requires:["widget-base"]},"widget-modality":{requires:["base-build","event-outside","widget"],skinnable:!0},"widget-parent":{requires:["arraylist","base-build","widget"]},"widget-position":{requires:["base-build","node-screen","widget"]},"widget-position-align":{requires:["widget-position"]},"widget-position-constrain":{requires:["widget-position"]},"widget-skin":{requires:["widget-base"]},"widget-stack":{requires:["base-build","widget"],skinnable:!0},"widget-stdmod":{requires:["base-build","widget"]},"widget-uievents":{requires:["node-event-delegate","widget-base"]},yql:{requires:["jsonp","jsonp-url"]},yui:{},"yui-base":{},"yui-later":{requires:["yui-base"]},"yui-log":{requires:["yui-base"]},"yui-throttle":{requires:["yui-base"]}},YUI.Env[e.version].md5="5fe7d71505fef8108b090c35db73bcde"},"3.7.1",{requires:["loader-base"]}),YUI.add("yui",function(e,t){},"3.7.1",{use:["yui-base","get","features","intl-base","yui-log","yui-later","loader-base","loader-rollup","loader-yui3"]});
var YUI3_config = {"base":"\/extension\/ezjscore\/design\/standard\/lib\/yui\/3.7.1\/build\/","combine":false,"modules":{}};
YUI( YUI3_config ).add('io-ez', function( Y )
{
var _rootUrl = '/ezdemo_site_admin/', _serverUrl = _rootUrl + 'ezjscore/', _seperator = '@SEPERATOR$', _configBak,
_prefUrl = _rootUrl + 'user/preferences';
function _ez( callArgs, c )
{
callArgs = callArgs.join !== undefined ? callArgs.join( _seperator ) : callArgs;
var url = _serverUrl + 'call/';
if ( c === undefined )
c = {on:{}, data: '', headers: {}, method: 'POST'};
else
c = Y.merge( {on:{}, data: '', headers: {}, method: 'POST'}, c );
var _token = '', _tokenNode = document.getElementById('ezxform_token_js');
if ( _tokenNode ) _token = '&ezxform_token=' + _tokenNode.getAttribute('title');
if ( c.method === 'POST' )
c.data += ( c.data ? '&' : '' ) + 'ezjscServer_function_arguments=' + callArgs + _token;
else
url += encodeURIComponent( callArgs );
c.headers.Accept = 'application/json,text/javascript,*/*';
if ( c.on.success !== undefined )
c.on.successCallback = c.on.success;
c.on.success = _ioezSuccess;
_configBak = c;
return Y.io( url, c );
}
function _ioezSuccess( id, o )
{
if ( o.responseJSON === undefined )
{
var returnObject = {'responseJSON': Y.JSON.parse( o.responseText ),
'readyState': o.readyState,
'responseText': o.responseText,
'responseXML': o.responseXML,
'status': o.status,
'statusText': o.statusText
};
}
else
{
var returnObject = o;
}
var c = _configBak;
if ( c.on.successCallback !== undefined )
{
if ( c.arguments !== undefined )
c.on.successCallback( id, returnObject, c.arguments );
else
c.on.successCallback( id, returnObject, null );
}
else if ( window.console !== undefined )
{
if ( returnObject.responseJSON.error_text )
window.console.error( 'Y.ez(): ' + returnObject.responseJSON.error_text );
else
window.console.log( 'Y.ez(): ' + returnObject.responseJSON.content );
}
_configBak.on.success = _configBak.on.successCallback;
_configBak.on.successCallback = undefined;
}
_ez.url = _serverUrl;
_ez.root_url = _rootUrl;
_ez.seperator = _seperator;
Y.io.ez = _ez;
Y.io.ez.setPreference = function( name, value )
{
var c = {on:{}, data:'', headers: {}, method: 'POST'},
_tokenNode = document.getElementById( 'ezxform_token_js' );
c.data = 'Function=set_and_exit&Key=' + encodeURIComponent( name ) + '&Value=' + encodeURIComponent( value );
if ( _tokenNode )
c.data += '&ezxform_token=' + _tokenNode.getAttribute( 'title' );
return Y.io( _prefUrl, c );
}
}, '3.0.0' ,{requires:['io-base', 'json-parse']});
function ezjs_toggleCheckboxes( formname, checkboxname )
{
with ( formname )
{
for ( var i = 0, l = elements.length; i < l; i++ )
{
if ( elements[i].type === 'checkbox' && elements[i].name == checkboxname && elements[i].disabled == false )
{
if ( elements[i].checked == true )
{
elements[i].checked = false;
}
else
{
elements[i].checked = true;
}
}
}
}
}
function eZImagePreloader()
{
this.setupEventHandlers( eZImagePreloader.prototype.onImageLoad,
eZImagePreloader.prototype.onImageError,
eZImagePreloader.prototype.onImageAbort );
}
eZImagePreloader.prototype.preloadImageList = function( imageList )
{
this.nImagesCount           = imageList.length;
this.nProcessedImagesCount  = 0;
this.nLoadedImagesCount     = 0;
this.bPreloadDone           = false;
for ( var i in imageList )
{
if ( typeof imageList[i] != 'function' )
{
this.preload( imageList[i] );
}
}
}
eZImagePreloader.prototype.preload = function( imageFilePath )
{
var image = new Image;
image.onload  = this.onImageLoadEvent;
image.onerror = this.onImageErrorEvent;
image.onabort = this.onImageAbortEvent;
image.preloader = this;
image.bLoaded = false;
image.bError  = false;
image.bAbort  = false;
image.src = imageFilePath;
}
eZImagePreloader.prototype.setupEventHandlers = function( onLoad, onError, onAbort )
{
this.onImageLoadEvent = onLoad;
this.onImageErrorEvent = onError;
this.onImageAbortEvent = onAbort;
}
eZImagePreloader.prototype.onImageLoad = function()
{
this.bLoaded = true;
this.preloader.nLoadedImagesCount++;
this.preloader.onComplete();
}
eZImagePreloader.prototype.onImageError = function()
{
this.bError = true;
this.preloader.onComplete();
}
eZImagePreloader.prototype.onImageAbort = function()
{
this.bAbort = true;
this.preloader.onComplete();
}
eZImagePreloader.prototype.onComplete = function( imageList )
{
this.nProcessedImagesCount++;
if ( this.nProcessedImagesCount == this.nImagesCount )
{
this.bPreloadDone = true;
}
}
function ezjslib_preloadImageList( filepathList )
{
var preloader = new eZImagePreloader();
preloader.preloadImageList( filepathList );
}
var CurrentSubstituteValues = -1;
(function()
{
var EZPOPMENU_OFFSET = 8, EZPOPMENU_SUBOFFSET = 4, EZPOPMENU_SUBTOPOFFSET = 4;
var CurrentDisableIDList = [];
var CurrentDisableMenuID = -1;
var CurrentDisabledMenusItems = {}, DefaultDisabledMenuItemCSSClass = 'menu-item-disabled';;
var VisibleMenus = [];
function _initOffsets( offsetX, offsetY )
{
EZPOPMENU_OFFSET = offsetX;
EZPOPMENU_SUBTOPOFFSET = offsetY;
}
function _setSubstituteValue( key, value )
{
if ( CurrentSubstituteValues != -1 )
{
CurrentSubstituteValues[key] = value;
}
}
function _showTopLevel( event, menuID, substituteValues, menuHeader, disableIDList, disableMenuID )
{
if ( !document.getElementById( menuID ) ) return;
var mousePos = _mouseHandler( event ); // register new mouse position
if ( substituteValues != -1 ) // new topmenu
{
_hideAll();
CurrentSubstituteValues = substituteValues;
}
if ( disableIDList && disableIDList != -1 )
{
CurrentDisableIDList = disableIDList.push !== undefined ? disableIDList : [disableIDList];
}
CurrentDisableMenuID = disableMenuID;
_doItemSubstitution( menuID, menuHeader );
_makeVisible( menuID );
_moveTopLevelOnScreen( menuID, mousePos );
}
function _showSubLevel( event, menuID, overItem )
{
if ( !document.getElementById( menuID ) ) return;
_doItemSubstitution( menuID );
_hideHigher( menuArray[menuID]['depth'] - 1 ); //hide all other submenus
_makeVisible( menuID );
_moveSubLevelOnScreen( menuID, overItem );
}
function _makeVisible( menuID )
{
var el = document.getElementById( menuID );
if ( el ) el.style.display = 'block';
VisibleMenus[menuArray[menuID]['depth']] = menuID;
document.getElementById( menuID ).onmouseover = function() { document.onmousedown = null; }
document.getElementById( menuID ).onmouseout = function() { document.onmousedown = _hideAll; }
document.onmousedown = _hideAll;
}
function _doItemSubstitution( menuID, menuHeader )
{
for ( var i in menuArray[menuID]['elements'] )
{
var hrefElement = document.getElementById( i );
if ( !hrefElement )
{
continue;
}
var replaceString = menuArray[menuID]['elements'][i]['url'];
if ( replaceString )
{
replaceString = _substituteString( replaceString, CurrentSubstituteValues );
hrefElement.setAttribute( "href", replaceString );
}
var loopingVariable = menuArray[menuID]['elements'][i]['variable'];
if ( loopingVariable )
{
var content = '';
for ( var localVariableIndex in CurrentSubstituteValues[loopingVariable] )
{
var localVariable = CurrentSubstituteValues[loopingVariable][localVariableIndex];
if ( typeof localVariable != 'object' )
continue;
var partialContent = menuArray[menuID]['elements'][i]['content'];
for ( var substItem in CurrentSubstituteValues )
{
if ( typeof CurrentSubstituteValues[substItem] != 'object' && typeof CurrentSubstituteValues[substItem] != 'function' )
{
partialContent = partialContent.replace( substItem, CurrentSubstituteValues[substItem] );
}
}
for ( var localItem in localVariable )
{
partialContent = partialContent.replace( '%' + localItem + '%', localVariable[localItem] );
}
content += partialContent;
}
hrefElement.innerHTML = content;
}
var disabledForElement = false;
if ( typeof( menuArray[menuID]['elements'][i]['disabled_for'] ) != 'undefined' && CurrentDisableIDList )
{
for ( var disI = 0, disL = CurrentDisableIDList.length; disI < disL; disI++ )
{
if ( disabledForElement = menuArray[menuID]['elements'][i]['disabled_for'][ CurrentDisableIDList[disI] ] === 'yes'  )
break;
}
}
if ( typeof( menuArray[menuID]['elements'][i]['disabled_class'] ) != 'undefined' &&
( disabledForElement ||
( CurrentDisableMenuID && hrefElement.id == CurrentDisableMenuID ) ) )
{
CurrentDisabledMenusItems[hrefElement.id] = new Array();
CurrentDisabledMenusItems[hrefElement.id]['className'] = hrefElement.className;
CurrentDisabledMenusItems[hrefElement.id]['href'] = hrefElement.href;
CurrentDisabledMenusItems[hrefElement.id]['onmouseover'] = hrefElement.onmouseover;
CurrentDisabledMenusItems[hrefElement.id]['onclick'] = hrefElement.onclick;
hrefElement.className = menuArray[menuID]['elements'][i]['disabled_class'];
hrefElement.setAttribute( "href", '#' );
hrefElement.onmouseover = "";
hrefElement.onclick = "";
}
else if ( typeof( menuArray[menuID]['elements'][i]['disabled_class'] ) != 'undefined' &&
hrefElement.className == menuArray[menuID]['elements'][i]['disabled_class'] )
{
if ( typeof( CurrentDisabledMenusItems[hrefElement.id] ) != 'undefined' )
{
hrefElement.className = CurrentDisabledMenusItems[hrefElement.id]['className'];
hrefElement.href = CurrentDisabledMenusItems[hrefElement.id]['href'];
hrefElement.onmouseover = CurrentDisabledMenusItems[hrefElement.id]['onmouseover'];
hrefElement.onclick = CurrentDisabledMenusItems[hrefElement.id]['onclick'];
}
}
}
if ( menuHeader && typeof( menuArray[menuID]['headerID'] ) != 'undefined' )
{
var header = document.getElementById( menuArray[menuID]['headerID'] );
if ( header ) header.innerHTML = menuHeader;
}
}
function _substituteString( replaceString, substituteValues )
{
for ( var substItem in substituteValues )
{
if ( typeof substituteValues[substItem] != 'object' && typeof substituteValues[substItem] != 'function' )
{
replaceString = replaceString.replace( substItem, substituteValues[substItem] );
}
}
return replaceString;
}
function _moveTopLevelOnScreen( menuID, mousePos )
{
var menuElement = document.getElementById( menuID ), screenData = _getScreenProperties();
var newX = 0; var newY = 0;
if ( (screenData.ScrollY + screenData.Height) < ( mousePos.y + EZPOPMENU_OFFSET + menuElement.offsetHeight ) )
newY = mousePos.y - EZPOPMENU_OFFSET - menuElement.offsetHeight;
else if ( screenData.ScrollY > EZPOPMENU_OFFSET + mousePos.y )
newY = screenData.ScrollY;
else
newY = mousePos.y + EZPOPMENU_OFFSET;
if ( (screenData.ScrollX + screenData.Width) < ( mousePos.x + EZPOPMENU_OFFSET + menuElement.offsetWidth ) )
newX = mousePos.x - EZPOPMENU_OFFSET - menuElement.offsetWidth;
else if ( screenData.ScrollX > EZPOPMENU_OFFSET + mousePos.x )
newX = screenData.ScrollX;
else
newX = mousePos.x + EZPOPMENU_OFFSET;
menuElement.style.left = newX + "px";
menuElement.style.top = newY + "px";
}
function _mouseHandler( e )
{
if ( !e )e = window.event;
if ( e.pageX || e.pageY )//DOM
return { 'x': e.pageX, 'y': e.pageY };
else if ( e.clientX || e.clientY ) // IE needs special treatment
return { 'x': e.clientX + document.documentElement.scrollLeft, 'y': e.clientY + document.documentElement.scrollTop };
return { 'x': 0, 'y': 0 };
}
function _moveSubLevelOnScreen( menuID, alignItem )
{
var menuElement = document.getElementById( menuID ), screenData = _getScreenProperties();
var newX = 0; var newY = 0;
alignElement = document.getElementById( alignItem );
parentElement = document.getElementById( VisibleMenus[menuArray[menuID]['depth'] - 1] );
if ( alignElement && parentElement )
{
newX = parseInt( parentElement.style.left ) + menuElement.offsetWidth - EZPOPMENU_SUBOFFSET;
newY = parseInt( parentElement.style.top ) + alignElement.offsetTop + EZPOPMENU_SUBTOPOFFSET;
}
if ( ( screenData.ScrollY + screenData.Height ) < ( newY + menuElement.offsetHeight ) )
newY = screenData.ScrollY + screenData.Height - menuElement.offsetHeight;
else if ( screenData.ScrollY > newY )
newY = screenData.ScrollY;
if ( ( screenData.ScrollX + screenData.Width ) < ( newX + menuElement.offsetWidth ) )
{
newX = parseInt( parentElement.style.left ) + EZPOPMENU_SUBOFFSET - menuElement.offsetWidth;
}
menuElement.style.left = newX + "px";
menuElement.style.top = newY + "px";
}
function _submitForm( formID, customSubstitute )
{
var formElement = document.getElementById( formID );
if ( formElement )
{
var children = formElement.childNodes,
origValue = '', resetInputs = [];
for ( var i = 0, l = children.length; i < l; i++)
{
if ( children[i].type == 'hidden' )
{
for ( var substItem in CurrentSubstituteValues )
{
origValue = children[i].value;
children[i].value = children[i].value.replace( substItem, CurrentSubstituteValues[substItem] );
if ( customSubstitute )
{
for ( var j = 0, jl = customSubstitute.length; j < jl; j += 2 )
{
children[i].value = children[i].value.replace( '%'+customSubstitute[j]+'%', customSubstitute[j+1] );
}
}
if ( origValue != children[i].value )
{
resetInputs.push(
{ 'input': children[i], 'originalValue': origValue }
);
}
}
}
}
formElement.submit();
for( var i = 0; i != resetInputs.length; i++ )
{
resetInputs[i].input.value = resetInputs[i].originalValue;
}
}
}
function _hide( id )
{
var level = menuArray[id]['depth'];
_hideHigher( level - 1 );
}
function _hideAll()
{
document.onmousedown = null;
_hideHigher( -1 );
}
function _hideHigher( level, el )
{
for ( var i = level + 1, l = VisibleMenus.length; i < l && VisibleMenus[i] != 'none' ; i++ )
{
el = document.getElementById( VisibleMenus[i] );
if ( el ) el.style.display = 'none';
VisibleMenus[i] = 'none';
}
}
function _mouseOver( id )
{
_hideHigher( menuArray[id]['depth'] );
}
function _createAArray( flat )
{
var resultArray = {};
if ( flat.length % 2 != 0 ) return resultArray;
for ( var i = 0, l = flat.length; i < l; i += 2 )
{
resultArray[flat[i]] = flat[i+1];
}
return resultArray;
}
function _SubstituteAndRedirect( href )
{
for ( var substItem in CurrentSubstituteValues )
{
href = href.replace( substItem, CurrentSubstituteValues[substItem] );
}
location.href = href;
}
function _getScreenProperties()
{
var result = { 'ScrollX': 0, 'ScrollY': 0, 'Height': 0, 'Width': 0 };
if ( typeof( window.innerWidth ) == 'number' )// all but IE
{
result.Width = window.innerWidth;
result.Height = window.innerHeight;
}
else if ( document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight ) )// IE 6
{
result.Width = document.documentElement.clientWidth;
result.Height = document.documentElement.clientHeight;
}
else if ( document.body && ( document.body.clientWidth || document.body.clientHeight ) )// IE 4
{
result.Width = document.body.clientWidth;
result.Height = document.body.clientHeight;
}
if ( document.body && ( document.body.scrollLeft || document.body.scrollTop ) )// DOM
{
result.ScrollY = document.body.scrollTop;
result.ScrollX = document.body.scrollLeft;
}
else if ( document.documentElement && ( document.documentElement.scrollLeft || document.documentElement.scrollTop ) )// IE6
{
result.ScrollY = document.documentElement.scrollTop;
result.ScrollX = document.documentElement.scrollLeft;
}
else if ( typeof( window.pageYOffset ) == 'number' )// Netscape compliant
{
result.ScrollY = window.pageYOffset;
result.ScrollX = window.pageXOffset;
}
return result;
}
window.ezpopup_SubstituteAndRedirect = _SubstituteAndRedirect;
window.ez_createAArray = _createAArray;
window.ezpopmenu_mouseOver = _mouseOver;
window.ezpopmenu_showTopLevel = _showTopLevel;
window.ezpopmenu_hideAll = _hideAll;
window.ezpopmenu_hide = _hide;
window.ezpopmenu_submitForm = _submitForm;
window.ezpopmenu_showSubLevel = _showSubLevel;
if ( window.menuArray === undefined )
{
window.menuArray = {};
}
})();// Scope end
jQuery(function( $ )
{
var spaceBetweenColumns = 10; // space between leftmenu and maincontent in pixel
var leftMenuDrag = {
elements : false,
timeout : null,
down: function( e )
{
leftMenuDrag.elements = [ $( '#leftmenu' ), $( '#maincontent' ) ];
if ( leftMenuDrag.timeout !== null )
{
clearTimeout( leftMenuDrag.timeout );
leftMenuDrag.timeout = null;
}
},
up: function( e )
{
if ( leftMenuDrag.elements )
{
leftMenuDrag.elements = false;
leftMenuDrag.timeout = setTimeout( leftMenuDrag.save, 500 );
}
},
on: function( e )
{
if ( leftMenuDrag.elements  )
{
var els = leftMenuDrag.elements, offset = els[0].offset().left, pos = e.pageX, size = pos - offset;
if ( size < 20 ) size = 20;
els[0].css( 'width', ( size )  + 'px' );
els[1].css( 'marginLeft', ( size + 10 ) + 'px' );
$( '#left-panels-separator' ).css( 'left', (parseInt($('#leftmenu').css( 'width'),10) - 20) + 'px' );
}
},
save: function()
{
var px  = $( '#leftmenu' ).width();
var url = $.ez.url.replace( 'ezjscore/', 'user/preferences/' ) + 'set_and_exit/admin_left_menu_size/' + leftMenuDrag.em( px ) + 'em';
var _token = '', _tokenNode = document.getElementById('ezxform_token_js');
if ( _tokenNode ) _token = 'ezxform_token=' + _tokenNode.getAttribute('title');
$.post( url, _token, function(){} );
},
em: function( px )
{
var test = jQuery('<div style="display: none; font-size: 1em; margin: 0; padding:0; height: auto; line-height: 1; border:0;">&nbsp;</div>').appendTo('#columns'), scale = test.height();
test.remove();
return (px / scale).toFixed(8);
}
};
var wl = $('#widthcontrol-links'), wh = $('#widthcontrol-handler');
var $leftmenu = $('#leftmenu'),
outerWidth = $leftmenu.outerWidth(),
innerWidth = $leftmenu.innerWidth(),
margin = parseInt($leftmenu.css('marginLeft'), 10),
leftmenuDesignMargin = parseInt($('#leftmenu-design').css('marginRight'), 10);
if ( wl.length && wh.length )
{
wl.addClass( 'hide' );
wh.removeClass( 'hide' ) ;
wh.bind( 'mousedown', leftMenuDrag.down );
$( document ).bind('mouseup click', leftMenuDrag.up );
$( document ).bind('mousemove', leftMenuDrag.on );
$leftmenu.addClass( 'widthcontroled' );
}
if ( $leftmenu.length )
{
if ( !margin )
margin = 0;
$( '#maincontent' ).css( 'marginLeft', (outerWidth + margin + spaceBetweenColumns) + 'px' );
$( '#left-panels-separator' ).css( 'left', (innerWidth + margin - leftmenuDesignMargin) + 'px' );
}
});
function ContentStructureMenu( params, i18n )
{
this.cookieName     = "contentStructureMenu";
this.cookieValidity = 3650; // days
this.cookie         = params.useCookie ? _getCookie( this.cookieName ) : '';
this.open           = ( this.cookie )? this.cookie.split( '/' ): [];
this.autoOpenPath   = params.path;
this.updateCookie = function()
{
if ( !params.useCookie )
return;
this.cookie = this.open.join('/');
expireDate  = new Date();
expireDate.setTime( expireDate.getTime() + this.cookieValidity * 86400000 );
_setCookie( this.cookieName, this.cookie, expireDate );
};
this.setOpen = function( nodeID )
{
if ( jQuery.inArray( '' + nodeID, this.open ) !== -1 )
{
return;
}
this.open[this.open.length] = nodeID;
this.updateCookie();
};
this.setClosed = function( nodeID )
{
var openIndex = jQuery.inArray( '' + nodeID, this.open );
if ( openIndex !== -1 )
{
this.open.splice( openIndex, 1 );
this.updateCookie();
}
};
this.generateEntry = function( item, lastli, rootNode )
{
var liclass = '';
if ( lastli )
{
liclass += ' lastli';
}
if ( params.path && ( params.path[params.path.length-1] == item.node_id || ( !item.has_children && jQuery.inArray( item.node_id, params.path ) !== -1 ) ) )
{
liclass += ' currentnode';
}
var html = '<li id="n'+item.node_id+'"'
+ ( ( liclass )? ' class="' + liclass + '"':
'' )
+ '>';
if ( item.has_children && !rootNode )
{
html += '<a class="openclose-open" id="a'
+ item.node_id
+ '" href="#" onclick="this.blur(); return treeMenu.load( this, '
+ item.node_id
+ ', '
+ item.modified_subnode
+' )"><\/a>';
}
var languages = "[";
var firstLanguage = true;
for ( var j = 0; j < item.languages.length; j++ )
{
if ( params.languages[item.languages[j]] )
{
if ( !firstLanguage )
{
languages += ",";
}
firstLanguage = false;
languages += "{locale:'"
+ item.languages[j].replace(/'/g,"\\'")
+ "',name:'"
+ params.languages[item.languages[j]].replace(/'/g,"\\'")
+ "'}";
}
}
languages += "]";
var canCreateClasses = false;
var classes = "[";
if ( params.createHereMenu != 'disabled' )
{
if ( params.createHereMenu == 'full' )
{
var classList = item.class_list;
for ( var j = 0; j < classList.length; j++ )
{
if ( params.classes[classList[j]] )
{
if ( canCreateClasses )
{
classes += ",";
}
canCreateClasses = true;
classes += "{classID:'"
+ classList[j]
+ "',name:'"
+ String(params.classes[classList[j]].name).replace(/'/g,"\\'").replace(/>/g,'&gt;').replace(/"/g,'&quot;')
+ "'}";
}
}
}
else
{
for ( j in params.classes )
{
if ( canCreateClasses )
{
classes += ",";
}
canCreateClasses = true;
classes += "{classID:'"
+ j
+ "',name:'"
+ String(params.classes[j].name).replace(/'/g,"\\'").replace(/>/g,'&gt;').replace(/"/g,'&quot;')
+ "'}";
}
}
}
classes += "]";
var classIdentifier = params.classes[item.class_id].identifier;
var icon = ( params.iconsList[classIdentifier] )? params.iconsList[classIdentifier]: params.iconsList['__default__'];
if ( params.context != 'browse' && item.node_id > 1 )
{
html += '<a class="nodeicon" href="#" onclick="ezpopmenu_showTopLevel( event, \'ContextMenu\', {\'%nodeID%\':'
+ item.node_id
+ ', \'%objectID%\':'
+ item.object_id
+ ', \'%languages%\':'
+ languages
+ ', \'%classList%\':'
+ classes
+ ' }, \''
+ String(item.name).replace(/'/g,"\\'").replace(/>/g,'&gt;').replace(/"/g,'&quot;')
+ '\', '
+ item.node_id
+ ', '
+ ( ( canCreateClasses )? '-1':
'\'menu-create-here\'' )
+ ' ); return false"><img src="'
+ icon
+ '" alt="" title="['
+ params.classes[item.class_id].name.replace(/>/g,'&gt;').replace(/"/g, '&quot;')
+ '] ' + i18n.expand + '" width="16" height="16" /><\/a>';
}
else
{
html += '<img src="'
+ icon
+ '" alt="" width="16" height="16" />';
}
html += '&nbsp;<a class="image-text" href="'
+ ( ( params.action )? params.action + '/' + item.node_id : item.url )
+ '"';
if ( params.showTips )
{
html += ' title="' + i18n.node_id + ': '
+ item.node_id
+ ', ' + i18n.object_id + ': '
+ item.object_id
+ ', ' + i18n.visibility + ': '
+ ( item.is_hidden ? i18n.hidden: ( item.is_invisible ? i18n.hiddenbyparent : i18n.visible ) )
+ '"';
}
html += '><span class="node-name-'
+ ( ( item.is_hidden )? 'hidden':
( item.is_invisible )? 'hiddenbyparent':
'normal' )
+ '">'
+ item.name
+ '<\/span>';
if ( item.is_hidden )
{
html += '<span class="node-hidden"> (' + i18n.hidden + ')<\/span>';
}
else if ( item.is_invisible )
{
html += '<span class="node-hiddenbyparent"> (' + i18n.hiddenbyparent + ')<\/span>';
}
html += '<\/a>';
html += '<div id="c'
+ item.node_id
+ '"><\/div>';
html += '<\/li>';
return html;
};
this.load = function( aElement, nodeID, modifiedSubnode )
{
var divElement = document.getElementById('c' + nodeID);
if ( !divElement )
{
return false;
}
if ( divElement.className == 'hidden' )
{
divElement.className = 'loaded';
if ( aElement )
{
aElement.className = 'openclose-close';
}
this.setOpen( nodeID );
return false;
}
if ( divElement.className == 'loaded' )
{
divElement.className = 'hidden';
if ( aElement )
{
aElement.className = 'openclose-open';
}
this.setClosed( nodeID );
return false;
}
if ( divElement.className == 'busy' )
{
return false;
}
var url = params.contentTreeUrl + nodeID
+ "/" + modifiedSubnode
+ "/" + params.expiry
+ "/" + params.perm;
divElement.className = 'busy';
if ( aElement )
{
aElement.className = "openclose-busy";
}
var thisThis = this, request = jQuery.ajax({
'url': url,
'dataType': 'json',
'success': function( data, textStatus )
{
var html = '<ul>', items = [];
for ( var i = 0, l = data.children_count; i < l; i++ )
{
if ( jQuery.inArray( data.children[i].node_id, params.hideNodes ) === -1 )
{
items.push( data.children[i] );
}
}
for ( var i = 0, l = items.length; i < l; i++ )
{
html += thisThis.generateEntry( items[i], i == l - 1, false );
}
html += '<\/ul>';
divElement.innerHTML += html;
divElement.className = 'loaded';
if ( aElement )
{
aElement.className = 'openclose-close';
}
thisThis.setOpen( nodeID );
thisThis.openUnder( nodeID );
return;
},
'error': function( xhr, textStatus, errorThrown )
{
divElement.className = 'error';
if (aElement) aElement.className = 'openclose-error';
function setErrorText( txt )
{
if (aElement) aElement.title = txt;
else divElement.innerHTML = '<span></span>' + txt;
}
switch( xhr.status )
{
case 403:
{
setErrorText( i18n.disabled );
} break;
case 404:
{
setErrorText( i18n.not_exist );
} break;
default:
{
setErrorText( i18n.internal_error );
}
}
if (aElement) aElement.onclick = function()
{
return false;
};
}
});
return false;
};
this.openUnder = function( parentNodeID )
{
var divElement = document.getElementById( 'c' + parentNodeID );
if ( !divElement )
{
return;
}
var ul = divElement.getElementsByTagName( 'ul' )[0];
if ( !ul )
{
return;
}
var children = ul.childNodes;
for ( var i = 0; i < children.length; i++ )
{
var liCandidate = children[i];
if ( liCandidate.nodeType == 1 && liCandidate.id )
{
var nodeID = liCandidate.id.substr( 1 ), openIndex = jQuery.inArray( nodeID, this.autoOpenPath );
if ( this.autoOpen && openIndex !== -1 )
{
this.autoOpenPath.splice( openIndex, 1 );
this.setOpen( nodeID );
}
if ( jQuery.inArray( nodeID, this.open ) !== -1 )
{
var aElement = document.getElementById( 'a' + nodeID );
if ( aElement )
{
aElement.onclick();
}
}
}
}
};
this.collapse = function( parentNodeID )
{
var divElement = document.getElementById( 'c' + parentNodeID );
if ( !divElement )
{
return;
}
var aElements = divElement.getElementsByTagName( 'a' );
for ( var index in aElements )
{
var aElement = aElements[index];
if ( aElement.className == 'openclose-close' )
{
var nodeID        = aElement.id.substr( 1 );
var subdivElement = document.getElementById( 'c' + nodeID );
if ( subdivElement )
{
subdivElement.className = 'hidden';
}
aElement.className = 'openclose-open';
this.setClosed( nodeID );
}
}
var aElement = document.getElementById( 'a' + parentNodeID );
if ( aElement )
{
divElement.className = 'hidden';
aElement.className   = 'openclose-open';
this.setClosed( parentNodeID );
}
};
function _setCookie( name, value, expires, path )
{
document.cookie = name + '=' + escape(value) + ( expires ? '; expires=' + expires.toUTCString(): '' ) + '; path='+ (path ? path : '/');
}
function _getCookie( name )
{
var n = name + '=', c = document.cookie, start = c.indexOf( n ), end = c.indexOf( ";", start );
if ( start !== -1 )
{
return unescape( c.substring( start + n.length, ( end === -1 ? c.length : end ) ) );
}
return null;
}
function _delCookie( name )
{
_setCookie( name, '', ( new Date() - 86400000 ) );
}
}
YUI(YUI3_config).use('event', 'node-screen', 'node-style', 'selector-css3', 'transition', function (Y) {
Y.on('domready', function() {
var toolbar, formY, form, fixed = true, firstInput, columns,
toolbarHeight, toTop = Y.one('.scroll-to-top');
var handleScroll = function () {
if ( !fixed && toolbar.get('docScrollY') > formY ) {
toolbar.addClass('controlbar-fixed');
fixed = true;
} else if ( toolbar.get('docScrollY') > (formY+20) && toTop ) {
toTop.show('fadeIn', {opacity: 0.6, duration: 0.5});
} else if ( fixed && toolbar.get('docScrollY') < formY ) {
toolbar.removeClass('controlbar-fixed');
fixed = false;
if ( toTop )
toTop.hide('fadeOut', {opacity: 0, duration: 0.5});
}
}
if ( toTop ) {
toTop.setStyle('opacity', 0);
toTop.on('click', function (e) {
toTop.hide('fadeOut', {opacity: 0, duration: 0.5});
});
}
toolbar = Y.one('#controlbar-top');
form = Y.one('#editform,#ClassEdit');
columns = Y.one('#columns');
if ( form && toolbar ) {
toolbarHeight = parseInt(toolbar.getStyle('height')) + parseInt(toolbar.getStyle('top'));
formY = parseInt(columns.getY()) - toolbarHeight;
Y.on('scroll', handleScroll);
if ( form.get('docScrollY') < formY ) {
window.scrollTo(0, formY + 1, 0);
firstInput = form.one('input[type=text]:enabled');
if ( firstInput )
firstInput.focus();
}
handleScroll();
}
});
});
YUI(YUI3_config).add('ezmodalwindow', function (Y) {
function eZModalWindow(conf) {
this.conf = Y.merge(eZModalWindow.DEFAULT_CONFIG, conf);
this.window = Y.one(this.conf.window);
this.isOpen = false;
this.closeCallback = {};
this.mask = null;
if ( !Y.UA.ie || Y.UA.ie > 6 ) {
this.mask = Y.one(this.conf.mask);
}
this.overlay = new Y.Overlay({
srcNode: this.conf.window,
width: this.conf.width,
centered: this.conf.centered,
visible: false,
zIndex: this.conf.zIndex
});
this.overlay.render();
this.window.show();
var that = this;
this.window.delegate('click', function (e) {
e.preventDefault();
that.close();
}, this.conf.close);
Y.one(document).on('keydown', function (e) {
if ( e.charCode === 27 ) {
that.close();
}
});
};
eZModalWindow.DEFAULT_CONFIG = {
content: '.window-content',
close: '.window-close, .window-cancel',
title: 'h2 span',
centered: true,
xy: [],
zIndex: 50,
mask: '#overlay-mask',
maskOpacity: 0.5
};
eZModalWindow.prototype.onClose = function (fn, context) {
this.closeCallback = {
fn: fn,
context: context
};
};
eZModalWindow.prototype.open = function () {
this.overlay.reset();
if ( this.conf.xy && this.conf.xy.join ) {
var x = this.conf.xy[0],
y = this.conf.xy[1];
if ( x == 'centered' ) {
x = (Y.DOM.winWidth() - this.overlay.get('width')) / 2;
}
y = Y.DOM.docScrollY() + y;
this.overlay.set('xy', [x, y]);
}
if ( this.mask ) {
this.mask.show();
var anim = new Y.Anim({
node: this.mask,
to: {
opacity: this.conf.maskOpacity
},
duration: 0.4
});
anim.run();
}
this.overlay.show();
this.isOpen = true;
};
eZModalWindow.prototype.setContent = function (content) {
this.getContentNode().setContent(content);
};
eZModalWindow.prototype.getContentNode = function () {
return this.window.one(this.conf.content);
};
eZModalWindow.prototype.setTitle = function (title) {
this.window.one(this.conf.title).setContent(title);
};
eZModalWindow.prototype.empty = function () {
return !this.getContentNode().hasChildNodes();
};
eZModalWindow.prototype.close = function (keepContent) {
var that = this;
this.overlay.hide();
if ( this.mask ) {
var anim = new Y.Anim({
node: this.mask,
to: {
opacity: 0
},
duration: 0.2
});
anim.run();
anim.on('end', function () {
that.mask.hide();
});
}
this.isOpen = false;
if ( !keepContent ) {
this.setContent('');
}
if ( this.closeCallback.fn && this.closeCallback.fn.call ) {
var context = this;
if ( this.closeCallback.context ) {
context = this.closeCallback.context;
}
this.closeCallback.fn.call(context);
}
};
Y.namespace('eZ');
Y.eZ.ModalWindow = eZModalWindow;
}, '1.0.0', {
requires: [
'node', 'overlay', 'dom-base', 'anim'
]
});
YUI(YUI3_config).add('ezajaxuploader', function (Y) {
function eZAjaxUploader(modalWindow, conf) {
this.conf = Y.merge(eZAjaxUploader.DEFAULT_CONFIG, conf);
this.modalWindow = modalWindow;
this.lastMetaData = false;
this.windowEvents = [];
var that = this;
this.defaultAjaxConfiguration = {
on:{
start: function () {
that.waitAjax();
},
end: function () {
that.endAjax();
},
success: function (transactionId, data) {
var input;
if ( data.responseJSON.error_text != "" ) {
that.displayError(data.responseJSON.error_text);
} else {
that.lastMetaData = data.responseJSON.content.meta_data;
that.modalWindow.setContent(data.responseJSON.content.html);
}
}
},
method: 'POST'
};
};
eZAjaxUploader.HANDLER_FIELD_NAME = "AjaxUploadHandlerData";
eZAjaxUploader.HAD_DEFAULT_VALUE = "had-default-value";
eZAjaxUploader.DEFAULT_CONFIG = {
requiredInput: 'input.input-required',
labelErrorClass: 'message-error',
validationErrorText: "Some required fields are empty.",
parseJSONErrorText: "Unable to parse the JSON response.",
validationErrorTextElement: '.ajaxuploader-error',
errorTemplate: '<div class="message-error">%message</div>',
defaultValuedInputClass: 'has-default-value',
loading:{
opacity: 0.2,
loader: "#ajaxuploader-loader",
zIndex:51
}
};
eZAjaxUploader.prototype.displayError = function (errorText) {
var e = Y.Node.create(this.conf.errorTemplate),
contentNode = this.modalWindow.getContentNode();
e.setContent(e.get('innerHTML').replace('%message', errorText));
contentNode.setContent(e);
};
eZAjaxUploader.prototype.waitAjax = function () {
var contentNode = this.modalWindow.getContentNode(),
xy = contentNode.getXY(),
height = parseInt(contentNode.getStyle('height')),
width = parseInt(contentNode.getStyle('width')),
img = Y.one(this.conf.loading.loader);
xy[0] = xy[0] + (width/2);
xy[1] = xy[1] + (height/4);
contentNode.setStyle('opacity', this.conf.loading.opacity);
img.show();
img.setStyle('zIndex', this.conf.loading.zIndex)
img.setXY(xy)
};
eZAjaxUploader.prototype.endAjax = function () {
var contentNode = this.modalWindow.getContentNode();
contentNode.setStyle('opacity', 1);
Y.one(this.conf.loading.loader).hide();
};
eZAjaxUploader.prototype.delegateWindowEvents = function () {
var contentNode = this.modalWindow.getContentNode();
var that = this, sub, defaultValues = {};
var clearDefaultValueHint = function (e) {
defaultValues[this.generateID()] = this.get('value');
this.set('value', '');
this.removeClass(that.conf.defaultValuedInputClass).addClass(eZAjaxUploader.HAD_DEFAULT_VALUE);
};
sub = contentNode.delegate(
'click', clearDefaultValueHint, '.' + this.conf.defaultValuedInputClass
);
this.windowEvents.push(sub);
var restoreDefaultValueHint = function(e) {
var id = this.generateID();
if ( this.get('value') == '' && defaultValues[id] ) {
this.set('value', defaultValues[id]);
this.addClass(that.conf.defaultValuedInputClass);
}
};
sub = contentNode.delegate(
'blur', restoreDefaultValueHint, '.' + eZAjaxUploader.HAD_DEFAULT_VALUE
);
this.windowEvents.push(sub);
var highlightSubmitButton = function (e) {
contentNode.one('input[type="submit"]').addClass('defaultbutton');
contentNode.one(that.conf.validationErrorTextElement).setContent('');
};
sub = contentNode.delegate(
'click', highlightSubmitButton, this.conf.location.browse + ' input[type="radio"]'
);
this.windowEvents.push(sub);
sub = contentNode.delegate('change', highlightSubmitButton, 'input[type="file"]');
this.windowEvents.push(sub);
var formPreSubmit = function (e) {
var valid = true,
hiddenPlace = contentNode.one('form p'),
form = this.ancestor('form', false);
contentNode.all(that.conf.requiredInput).each(function () {
if ( !this.get('value') ) {
contentNode.all('label[for="' + this.get('id') + '"]').addClass(that.conf.labelErrorClass);
valid = false;
}
});
if ( !valid ) {
contentNode.one(that.conf.validationErrorTextElement).setContent(that.conf.validationErrorText);
e.halt(true);
return;
}
contentNode.all('label').removeClass(that.conf.labelErrorClass);
contentNode.all('.has-default-value').set('value', '');
contentNode.one(that.conf.validationErrorTextElement).setContent("");
for(var k in that.conf.target) {
hiddenPlace.append('<input type="hidden" name="' + eZAjaxUploader.HANDLER_FIELD_NAME + '[' + k + ']" value="' + that.conf.target[k] + '" />');
}
if ( that.conf.token )
hiddenPlace.append('<input type="hidden" name="ezxform_token" value="' + that.conf.token + '" />');
};
sub = contentNode.delegate(
'click', formPreSubmit, 'form input[type="submit"]'
);
this.windowEvents.push(sub);
var upload = function (e) {
e.halt(true);
that.waitAjax()
form = this.ancestor('form', false);
var c = Y.clone(that.defaultAjaxConfiguration, true),
ioCompleteSub = false;
c.form = {
id: form,
upload: true
};
c.on.success = undefined;
ioCompleteSub = Y.on('io:complete', function (transactionId, data) {
var json;
ioCompleteSub.detach();
try {
json = Y.JSON.parse(data.responseText);
} catch (e) {
that.displayError(that.conf.parseJSONErrorText);
that.endAjax();
return;
}
if ( json.error_text ) {
that.displayError(json.error_text);
} else {
that.modalWindow.setContent(decodeURIComponent(json.html));
}
that.endAjax();
});
Y.io(Y.io.ez.url + 'call/' + that.conf.upload.action, c);
};
sub = contentNode.delegate(
'click', upload, this.conf.upload.form + ' input[type="submit"]'
);
this.windowEvents.push(sub);
var postLocation = function (e) {
var c = Y.clone(that.defaultAjaxConfiguration, true),
form = this.ancestor('form', false),
radios = contentNode.all('input[type="radio"]'),
checked = false;
radios.each(function () {
if ( this.get('checked') ) {
checked = true;
}
});
if ( !checked ) {
contentNode.one(that.conf.validationErrorTextElement).setContent(that.conf.location.required);
e.halt(true);
return;
}
c.form = {
id: form
};
Y.io.ez(that.conf.location.action, c);
e.halt();
};
sub = contentNode.delegate(
'click', postLocation, this.conf.location.form + ' input[type="submit"]'
);
this.windowEvents.push(sub);
var browse = function (e) {
var c = Y.clone(that.defaultAjaxConfiguration, true),
placeholder = contentNode.one(that.conf.location.browse);
e.halt(true);
c.on.success = function (transactionId, data) {
if ( data.responseJSON.error_text != "" ) {
that.displayError(data.responseJSON.error_text);
} else {
that.lastMetaData = data.responseJSON.content.meta_data;
placeholder.setContent(data.responseJSON.content.html);
contentNode.one('input[type="submit"]').removeClass('defaultbutton').addClass('button');
}
};
c.method = 'GET';
Y.io.ez(e.currentTarget.getAttribute('href'), c);
};
sub = contentNode.delegate(
'click', browse, this.conf.location.browse + ' a'
);
this.windowEvents.push(sub);
var endForm = function (e) {
e.halt();
that.conf.preview.callback.call(that);
};
sub = contentNode.delegate(
'click', endForm, this.conf.preview.form + ' input[type="submit"]'
);
this.windowEvents.push(sub);
var formLastBeforeSubmit = function (e) {
this.addClass('button-disabled').removeClass('defaultbutton').removeClass('button').set('disabled', 'disabled');
};
sub = contentNode.delegate(
'click', formLastBeforeSubmit, 'form input[type="submit"]'
);
this.windowEvents.push(sub);
};
eZAjaxUploader.prototype.detachWindowEvents = function () {
for (var i = 0; i != this.windowEvents.length; i++) {
this.windowEvents[i].detach();
}
};
eZAjaxUploader.prototype.buildPostString = function () {
var res = '';
for (var k in this.conf.target) {
if ( res != '' )
res += '&';
res += eZAjaxUploader.HANDLER_FIELD_NAME + '[' + k + ']=' + this.conf.target[k];
}
return res;
};
eZAjaxUploader.prototype.cleanup = function () {
this.detachWindowEvents();
this.endAjax();
};
eZAjaxUploader.prototype.open = function () {
var c = Y.clone(this.defaultAjaxConfiguration, true);
this.delegateWindowEvents();
this.modalWindow.setTitle(this.conf.title);
this.modalWindow.open();
this.modalWindow.onClose(this.cleanup, this);
c.data = this.buildPostString();
Y.io.ez(this.conf.open.action, c);
};
Y.namespace('eZ');
Y.eZ.AjaxUploader = eZAjaxUploader;
}, '1.0.0', {
requires: [
'ezmodalwindow', 'io-ez', 'io-form', 'io-upload-iframe', 'json-parse'
]
});
YUI(YUI3_config).add('ezcollapsiblemenu', function (Y) {
Y.namespace('eZ');
function doTransition(elements, type, endCallback) {
var el, transitionConf, e;
for(var i=0; i!=elements.length; i++) {
el = elements[i];
e = Y.one(el.selector);
if ( !e )
continue;
transitionConf = {duration: el.duration};
for(var k in el[type]) {
if ( el[type][k].call ) {
transitionConf[k] = el[type][k].call();
} else {
transitionConf[k] = el[type][k];
}
}
if ( i == 0 && endCallback ) {
e.transition(transitionConf, endCallback);
} else {
e.transition(transitionConf);
}
}
}
function eZCollapsibleMenu(conf) {
var that = this;
this.conf = conf;
Y.all(this.conf.link).on('click', function (e) {
e.preventDefault();
if ( that.conf.collapsed == 1 ) {
that.uncollapse();
} else {
that.collapse();
}
});
}
eZCollapsibleMenu.prototype.collapse = function () {
if ( this.conf.beforecollapse ) {
this.conf.beforecollapse.call(this);
}
doTransition(this.conf.elements, 'collapsedStyle', this.conf.aftercollapse);
this.conf.collapsed = 1;
this._setLinkContent();
if ( this.conf.callback ) {
this.conf.callback.call(this);
}
}
eZCollapsibleMenu.prototype.uncollapse = function () {
if ( this.conf.beforeuncollapse ) {
this.conf.beforeuncollapse.call(this);
}
doTransition(this.conf.elements, 'fullStyle', this.conf.afteruncollapse);
this.conf.collapsed = 0;
this._setLinkContent();
if ( this.conf.callback ) {
this.conf.callback.call(this);
}
}
eZCollapsibleMenu.prototype._setLinkContent = function () {
if ( Y.Lang.isArray(this.conf.content) ) {
Y.one(this.conf.link).setContent(
this.conf.content[this.conf.collapsed]
);
}
}
Y.eZ.CollapsibleMenu = eZCollapsibleMenu;
}, '1.0.0', {
requires: [
'transition', 'event'
]
});
YUI(YUI3_config).add('ezautosubmit', function (Y) {
Y.namespace('eZ');
var defaultConfig = {
interval: 300,
trackUserInput: true,
ignoreClass: false
};
function serializeForm(id, ignoreClass) {
var data = [], eUC = encodeURIComponent,
item = 0,
e, f, n, v, i, il, j, jl, o,
form = Y.one(id), f = form.getDOMNode(),
searchClass = ' ' + ignoreClass + ' ';
for (i = 0, il = f.elements.length; i < il; ++i) {
e = f.elements[i];
if ( ignoreClass && (' ' + e.className + ' ').indexOf(searchClass) > -1 ) {
continue;
}
n = eUC(e.name) + '=';
v = eUC(e.value);
switch (e.type) {
case 'select-one':
if (e.selectedIndex > -1) {
o = e.options[e.selectedIndex];
data[item++] = n + eUC(o.attributes.value && o.attributes.value.specified ? o.value : o.text);
}
break;
case 'select-multiple':
if (e.selectedIndex > -1) {
for (j = e.selectedIndex, jl = e.options.length; j < jl; ++j) {
o = e.options[j];
if (o.selected) {
data[item++] = n + eUC(o.attributes.value && o.attributes.value.specified ? o.value : o.text);
}
}
}
break;
case 'radio':
case 'checkbox':
if (e.checked) {
data[item++] = n + v;
}
break;
case undefined:
case 'reset':
case 'button':
break;
case 'file':
case 'submit':
default:
data[item++] = n + v;
}
}
return data.join('&');
}
function eZAutoSubmit(conf) {
var that = this;
this.conf = Y.merge(defaultConfig, conf);
this.conf.interval = parseInt(this.conf.interval);
if ( !this.conf.interval ) {
this.conf.interval = defaultConfig.interval;
}
this.timer = false;
this.started = false;
this.state = '';
this.ajaxConfiguration = {
form:{
id: Y.one(this.conf.form),
upload: true
},
method: 'POST'
};
this.ajax = false;
this.ajaxSubscription = false;
Y.on('domready', function () {
that.fire('init');
});
Y.on('autosubmit:forcesave', function () {
that.submit('AutoSubmitForced=' + new Date().getTime());
});
}
eZAutoSubmit.prototype.start = function () {
var that = this;
if ( this.started ) {
return;
}
Y.on('domready', function () {
that.timer = Y.later(that.conf.interval * 1000, that, that.submit, [], true);
that.started = true;
that.state = serializeForm(that.conf.form, that.conf.ignoreClass);
if ( that.conf.trackUserInput ) {
Y.one(that.conf.form).delegate('blur', function (e) {
if ( !that.conf.ignoreClass || !e.target.hasClass(that.conf.ignoreClass) ) {
that.submit();
}
}, 'input, select, textarea, iframe');
}
Y.one(that.conf.form).on('submit', function () {
that.stop();
});
});
}
eZAutoSubmit.prototype.stop = function () {
if ( this.started ) {
this.timer.cancel();
this.started = false;
if ( this.ajax ) {
this.ajax.abort();
this.ajax = false;
}
if ( this.ajaxSubscription ) {
this.ajaxSubscription.detach();
}
}
}
eZAutoSubmit.prototype.submit = function (fields) {
var that = this,
formState = serializeForm(this.conf.form, this.conf.ignoreClass),
originalFormState = formState,
ajaxConf = Y.clone(this.ajaxConfiguration, true);
ajaxConf.form.id = Y.one(this.conf.form);
if ( !this.started ) {
return;
}
if ( fields ) {
formState += '&' + fields;
}
if ( this.state != formState ) {
if ( this.ajax && this.ajax.isInProgress() ) {
this.ajaxSubscription.detach();
this.ajax.abort();
this.ajax = false;
}
this.ajaxSubscription = Y.on('io:complete', function (tId, data) {
var json, error = false;
that.ajaxSubscription.detach();
if ( Y.Lang.isUndefined(data.responseText) ) {
that.fire('abort');
return;
}
try {
json = Y.JSON.parse(data.responseText);
} catch(e) {
error = true;
}
if ( error || json.error_text ) {
that.fire('error', {json: json});
} else {
that.fire('success', {json: json});
}
});
this.state = originalFormState;
this.fire('beforesave');
if ( fields ) {
ajaxConf.data = fields;
}
this.ajax = Y.io(this.conf.action, ajaxConf);
} else {
this.fire('nochange');
}
}
Y.augment(eZAutoSubmit, Y.EventTarget, true, null, {emitFacade: true});
Y.eZ.AutoSubmit = eZAutoSubmit;
}, '1.0.0', {
requires: [
'event', 'event-custom', 'node-event-delegate', 'io-form', 'io-upload-iframe', 'yui-later', 'json-parse'
]
});
YUI(YUI3_config).add('ezcontentpreview', function (Y) {
Y.namespace('eZ');
var defaultConf = {
previewTemplate: '<div id="content-preview" class="unsaved"><div id="preview-iframe"></div><div class="loader">%loading</div><div class="error">%error</div></div>',
elementTemplate: '<a id="preview-spacer"><span>%preview</span></a><a id="preview-link"><span>%preview</span></a>',
place: '#content-preview',
preview: '#preview-iframe',
element: '#preview-link',
buttonPlace: '#controlbar-top .button-right',
texts: {
loading: 'Loading...',
preview: 'Preview',
error: 'An error occured'
},
topPosition: '0px'
};
function eZContentPreview(conf) {
this.conf = Y.merge(defaultConf, conf);
var conf = this.conf,
prTpl = this.conf.previewTemplate,
elTpl = this.conf.elementTemplate;
this.conf.previewTemplate = prTpl.replace('%loading', conf.texts.loading)
.replace('%error', conf.texts.error);
this.conf.elementTemplate= elTpl.replace(/%preview/g, conf.texts.preview);
}
eZContentPreview.prototype.init = function () {
var that = this,
button = Y.one(this.conf.buttonPlace);
button.append(this.conf.elementTemplate)
.append(this.conf.previewTemplate);
var link = Y.one(this.conf.element),
place = Y.one(this.conf.place),
preview = Y.one(this.conf.preview);
this.place = place;
this.link = link;
this.preview = preview;
this._initStyles();
this._initEvents();
this.collapsible = new Y.eZ.CollapsibleMenu({
link: that.conf.element,
content: false,
collapsed: 1,
beforeuncollapse: function () {
that.initPreview();
},
aftercollapse: function () {
that.resetPreview();
},
beforecollapse: function () {
that.place.get('children').transition({
duration: 0.5,
opacity: 0
});
},
elements: [{
selector: this.conf.place,
duration: 0.7,
fullStyle:{
height: function () {
return (link.get('winHeight') - parseInt(that.conf.topPosition)) + 'px';
}
},
collapsedStyle:{
height:0
}
}, {
selector: this.conf.place + ' iframe',
duration: 0.8,
fullStyle:{
height: function () {
return that.getIframeHeight();
}
},
collapsedStyle:{
height:0
}
}]
});
this.loading();
}
eZContentPreview.prototype.close = function () {
this.collapsible.collapse();
}
eZContentPreview.prototype.loading = function () {
this.place.removeClass('error')
.addClass('loading');
}
eZContentPreview.prototype.getIframeHeight = function () {
var header, height, iframe, offset = 0;
iframe = this.place.one('iframe');
this.preview.get('children').each(function (element) {
if ( element.get('tagName').toLowerCase() != 'iframe' ) {
offset += parseInt(element.get('offsetHeight'));
}
});
height = parseInt(this.place.get('winHeight'))
- parseInt(this.conf.topPosition)
- offset
- parseInt(iframe.getComputedStyle('marginTop'))
- parseInt(iframe.getComputedStyle('marginBottom'));
return height + 'px';
}
eZContentPreview.prototype.initPreview = function () {
this.link.addClass('previewed');
this.place.addClass('previewed');
this.place.get('children').setStyle('opacity', 1);
if ( this.place.hasClass('unsaved') || this.place.hasClass('error') ) {
this.place.removeClass('unsaved');
Y.fire('autosubmit:forcesave');
}
}
eZContentPreview.prototype.resetPreview = function () {
this.link.removeClass('previewed');
this.place.removeClass('previewed');
this.place.get('children').setStyle('opacity', 1);
}
eZContentPreview.prototype.setContent = function (content) {
this.place.removeClass('loading');
this.preview.setContent(content);
if ( this.place.hasClass('previewed') ) {
this.place.one('iframe').transition({
duration: 0.4,
height: this.getIframeHeight()
});
}
}
eZContentPreview.prototype.error = function (err) {
var msg = this.conf.texts.error;
if ( err ) {
msg += ': ' + err;
}
this.place.one('.error').setContent(msg);
this.place.removeClass('loading')
.addClass('error');
}
eZContentPreview.prototype._initStyles = function () {
this.link.setStyles({
height: this.conf.topPosition
});
this.place.setStyle(
'top', this.conf.topPosition
);
}
eZContentPreview.prototype._initEvents = function () {
var that = this;
this.preview.delegate('click', function (e) {
var sa = e.target.get('value'),
iframe = that.preview.one('iframe'),
urlArray = iframe.get('src').split('/'),
currentSA = urlArray.pop();
if ( currentSA != sa ) {
var loader = that.preview.one('#iframe-loader');
loader.show('fadeIn');
urlArray.push(sa);
iframe.on('load', function () {
loader.hide('fadeOut');
});
iframe.set('src', urlArray.join('/'));
}
},
'select');
this.preview.delegate('click', function (e) {
that.close();
e.preventDefault();
},
'a.close');
}
Y.eZ.ContentPreview = eZContentPreview
}, '1.0.0', {
requires: [
'transition', 'ezcollapsiblemenu', 'node-screen', 'node-event-delegate'
]
});
jQuery(function( $ )
{
var NodeTab = {
timeout : null,
click : function( e )
{
NodeTab.open( e.target.parentNode.id, true );
var link = document.getElementById('maincontent-show');
if ( link )
{
NodeTab.toggle( $('div.tab-block ul.tabs'), $('div.tab-block div.tabs-content'), link );
}
return false;
},
toggleClick : function( e )
{
NodeTab.toggle( $('div.tab-block ul.tabs'), $('div.tab-block div.tabs-content'), e.target );
return false;
},
toggle : function( ul, div, link )
{
if ( ul.hasClass('disabled') )
{
ul.removeClass('disabled');
div.removeClass('disabled');
NodeTab.saveTabState( 1 );
link.innerHTML = '&nbsp;';
link.id = 'maincontent-hide';
}
else
{
ul.addClass('disabled');
div.addClass('disabled');
NodeTab.saveTabState( 0 );
link.innerHTML = '&nbsp;';
link.id = 'maincontent-show';
}
return false;
},
open : function( id, save )
{
var li = $( '#' + id );
if ( li.size() && !li.hasClass('selected') )
{
if ( NodeTab.timeout !== null )
{
clearTimeout( NodeTab.timeout );
NodeTab.timeout = null;
}
var block = $( li[0].parentNode.parentNode.parentNode );
block.find("ul.tabs li.selected").removeClass('selected');
block.find("div.tab-content.selected").addClass('hide').removeClass('selected');
li.addClass('selected');
$( '#' + id + '-content' ).addClass('selected').removeClass('hide');
if ( save ) NodeTab.timeout = setTimeout( function(){ NodeTab.saveOpenTab( id ) }, 400 );
}
},
saveTabState : function( intBool )
{
var url = $.ez.url.replace( 'ezjscore/', 'user/preferences/set_and_exit/admin_navigation_content/' ) + intBool;
var _token = '', _tokenNode = document.getElementById('ezxform_token_js');
if ( _tokenNode ) _token = 'ezxform_token=' + _tokenNode.getAttribute('title');
$.post( url, _token, function(){} );
},
saveOpenTab : function( id )
{
if ( id.indexOf( 'node-tab-' ) === 0 )
{
expireDate  = new Date();
expireDate.setTime( expireDate.getTime() + 365 * 86400000 );
NodeTab.setCookie( 'adminNavigationTab', id.split('tab-')[1], expireDate );
}
},
setCookie: function( name, value, expires, path )
{
document.cookie = name + '=' + escape(value) + ( expires ? '; expires=' + expires.toUTCString(): '' ) + '; path='+ (path ? path : '/');
},
getCookie: function( name )
{
var n = name + '=', c = document.cookie, start = c.indexOf( n ), end = c.indexOf( ";", start );
if ( start !== -1 )
{
return unescape( c.substring( start + n.length, ( end === -1 ? c.length : end ) ) );
}
return null;
}
};
$('div.tab-block ul.tabs li a').click( NodeTab.click );
$('#maincontent-hide').click( NodeTab.toggleClick );
var openTab = NodeTab.getCookie( 'adminNavigationTab' );
if ( openTab && $('div.tab-block ul.tabs.tabs-by-cookie #node-tab-' + openTab).size() )
{
NodeTab.open( 'node-tab-' + openTab );
}
});
