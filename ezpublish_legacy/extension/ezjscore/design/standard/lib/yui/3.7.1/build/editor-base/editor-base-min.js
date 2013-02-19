/*
YUI 3.7.1 (build 5627)
Copyright 2012 Yahoo! Inc. All rights reserved.
Licensed under the BSD License.
http://yuilibrary.com/license/
*/
YUI.add("editor-base",function(e,t){var n=function(){n.superclass.constructor.apply(this,arguments)},r=":last-child",i="body";e.extend(n,e.Base,{frame:null,initializer:function(){var t=(new e.Frame({designMode:!0,title:n.STRINGS.title,use:n.USE,dir:this.get("dir"),extracss:this.get("extracss"),linkedcss:this.get("linkedcss"),defaultblock:this.get("defaultblock"),host:this})).plug(e.Plugin.ExecCommand);t.after("ready",e.bind(this._afterFrameReady,this)),t.addTarget(this),this.frame=t,this.publish("nodeChange",{emitFacade:!0,bubbles:!0,defaultFn:this._defNodeChangeFn})},destructor:function(){this.frame.destroy(),this.detachAll()},copyStyles:function(t,n){if(t.test("a"))return;var r=["color","fontSize","fontFamily","backgroundColor","fontStyle"],i={};e.each(r,function(e){i[e]=t.getStyle(e)}),t.ancestor("b,strong")&&(i.fontWeight="bold"),t.ancestor("u")&&(i.textDecoration||(i.textDecoration="underline")),n.setStyles(i)},_lastBookmark:null,_resolveChangedNode:function(e){var t=this.getInstance(),n,s,o;if(e&&e.test(i)){var u=new t.EditorSelection;u&&u.anchorNode&&(e=u.anchorNode)}if(t&&e&&e.test("html")){n=t.one(i).one(r);while(!o)n?(s=n.one(r),s?n=s:o=!0):o=!0;n&&(n.test("br")&&(n.previous()?n=n.previous():n=n.get("parentNode")),n&&(e=n))}return e||(e=t.one(i)),e},_defNodeChangeFn:function(t){var r=(new Date).getTime(),i=this.getInstance(),s,o,u=i.EditorSelection.DEFAULT_BLOCK_TAG;if(e.UA.ie)try{s=i.config.doc.selection.createRange(),s.getBookmark&&(this._lastBookmark=s.getBookmark())}catch(a){}t.changedNode=this._resolveChangedNode(t.changedNode);switch(t.changedType){case"keydown":e.UA.gecko||!n.NC_KEYS[t.changedEvent.keyCode]&&!t.changedEvent.shiftKey&&!t.changedEvent.ctrlKey&&t.changedEvent.keyCode!==13;break;case"tab":!t.changedNode.test("li, li *")&&!t.changedEvent.shiftKey&&(t.changedEvent.frameEvent.preventDefault(),e.UA.webkit?this.execCommand("inserttext","  "):e.UA.gecko?this.frame.exec._command("inserthtml",n.TABKEY):e.UA.ie&&this.execCommand("inserthtml",n.TABKEY));break;case"backspace-up":e.UA.webkit&&t.changedNode&&t.changedNode.set("innerHTML",t.changedNode.get("innerHTML"))}if(e.UA.webkit&&t.commands&&(t.commands.indent||t.commands.outdent)){var f=i.all(".webkit-indent-blockquote, blockquote");f.size()&&f.setStyle("margin","")}var l=this.getDomPath(t.changedNode,!1),c={},h,p,d=[],v="",m="";t.commands&&(c=t.commands);var g=!1;e.each(l,function(t){var r=t.tagName.toLowerCase(),s=n.TAG2CMD[r];s&&(c[s]=1);var o=t.currentStyle||t.style;""+o.fontWeight=="normal"&&(g=!0),""+o.fontWeight=="bold"&&(c.bold=1),e.UA.ie&&o.fontWeight>400&&(c.bold=1),o.fontStyle=="italic"&&(c.italic=1),o.textDecoration.indexOf("underline")>-1&&(c.underline=1),o.textDecoration.indexOf("line-through")>-1&&(c.strikethrough=1);var u=i.one(t);if(u.getStyle("fontFamily")){var a=u.getStyle("fontFamily").split(",")[0].toLowerCase();a&&(h=a),h&&(h=h.replace(/'/g,"").replace(/"/g,""))}p=n.NORMALIZE_FONTSIZE(u);var f=t.className.split(" ");e.each(f,function(e){e!==""&&e.substr(0,4)!=="yui_"&&d.push(e)}),v=n.FILTER_RGB(u.getStyle("color"));var l=n.FILTER_RGB(o.backgroundColor);l!=="transparent"&&l!==""&&(m=l)}),g&&(delete c.bold,delete c.italic),t.dompath=i.all(l),t.classNames=d,t.commands=c,t.fontFamily||(t.fontFamily=h),t.fontSize||(t.fontSize=p),t.fontColor||(t.fontColor=v),t.backgroundColor||(t.backgroundColor=m);var y=(new Date).getTime()},getDomPath:function(e,t){var n=[],r,i=this.frame.getInstance();r=i.Node.getDOMNode(e);while(r!==null){if(r===i.config.doc.documentElement||r===i.config.doc||!r.tagName){r=null;break}if(!i.DOM.inDoc(r)){r=null;break}r.nodeName&&r.nodeType&&r.nodeType==1&&n.push(r);if(r==i.config.doc.body){r=null;break}r=r.parentNode}return n.length===0&&(n[0]=i.config.doc.body),t?i.all(n.reverse()):n.reverse()},_afterFrameReady:function(){var t=this.frame.getInstance();this.frame.on("dom:mouseup",e.bind(this._onFrameMouseUp,this)),this.frame.on("dom:mousedown",e.bind(this._onFrameMouseDown,this)),this.frame.on("dom:keydown",e.bind(this._onFrameKeyDown,this)),e.UA.ie&&(this.frame.on("dom:activate",e.bind(this._onFrameActivate,this)),this.frame.on("dom:beforedeactivate",e.bind(this._beforeFrameDeactivate,this))),this.frame.on("dom:keyup",e.bind(this._onFrameKeyUp,this)),this.frame.on("dom:keypress",e.bind(this._onFrameKeyPress,this)),this.frame.on("dom:paste",e.bind(this._onPaste,this)),t.EditorSelection.filter(),this.fire("ready")},_beforeFrameDeactivate:function(e){if(e.frameTarget.test("html"))return;var t=this.getInstance(),n=t.config.doc.selection.createRange();n.compareEndPoints&&!n.compareEndPoints("StartToEnd",n)&&n.pasteHTML('<var id="yui-ie-cursor">')},_onFrameActivate:function(e){if(e.frameTarget.test("html"))return;var t=this.getInstance(),n=new t.EditorSelection,r=n.createRange(),i=t.all("#yui-ie-cursor");i.size()&&i.each(function(e){e.set("id","");if(r.moveToElementText)try{r.moveToElementText(e._node);var t=r.move("character",-1);t===-1&&r.move("character",1),r.select(),r.text=""}catch(n){}e.remove()})},_onPaste:function(e){this.fire("nodeChange",{changedNode:e.frameTarget,changedType:"paste",changedEvent:e.frameEvent})},_onFrameMouseUp:function(e){this.fire("nodeChange",{changedNode:e.frameTarget,changedType:"mouseup",changedEvent:e.frameEvent})},_onFrameMouseDown:function(e){this.fire("nodeChange",{changedNode:e.frameTarget,changedType:"mousedown",changedEvent:e.frameEvent})},_currentSelection:null,_currentSelectionTimer:null,_currentSelectionClear:null,_onFrameKeyDown:function(t){var r,i;this._currentSelection?i=this._currentSelection:(this._currentSelectionTimer&&this._currentSelectionTimer.cancel(),this._currentSelectionTimer=e.later(850,this,function(){this._currentSelectionClear=!0}),r=this.frame.getInstance(),i=new r.EditorSelection(t),this._currentSelection=i),r=this.frame.getInstance(),i=new r.EditorSelection,this._currentSelection=i,i&&i.anchorNode&&(this.fire("nodeChange",{changedNode:i.anchorNode,changedType:"keydown",changedEvent:t.frameEvent}),n.NC_KEYS[t.keyCode]&&(this.fire("nodeChange",{changedNode:i.anchorNode,changedType:n.NC_KEYS[t.keyCode],changedEvent:t.frameEvent}),this.fire("nodeChange",{changedNode:i.anchorNode,changedType:n.NC_KEYS[t.keyCode]+"-down",changedEvent:t.frameEvent})))},_onFrameKeyPress:function(e){var t=this._currentSelection;t&&t.anchorNode&&(this.fire("nodeChange",{changedNode:t.anchorNode,changedType:"keypress",changedEvent:e.frameEvent}),n.NC_KEYS[e.keyCode]&&this.fire("nodeChange",{changedNode:t.anchorNode,changedType:n.NC_KEYS[e.keyCode]+"-press",changedEvent:e.frameEvent}))},_onFrameKeyUp:function(e){var t=this.frame.getInstance(),r=new t.EditorSelection(e);r&&r.anchorNode&&(this.fire("nodeChange",{changedNode:r.anchorNode,changedType:"keyup",selection:r,changedEvent:e.frameEvent}),n.NC_KEYS[e.keyCode]&&this.fire("nodeChange",{changedNode:r.anchorNode,changedType:n.NC_KEYS[e.keyCode]+"-up",selection:r,changedEvent:e.frameEvent})),this._currentSelectionClear&&(this._currentSelectionClear=this._currentSelection=null)},execCommand:function(e,t){var n=this.frame.execCommand(e,t),r=this.frame.getInstance(),i=new r.EditorSelection,s={},o={changedNode:i.anchorNode,changedType:"execcommand",nodes:n};switch(e){case"forecolor":o.fontColor=t;break;case"backcolor":o.backgroundColor=t;break;case"fontsize":o.fontSize=t;break;case"fontname":o.fontFamily=t}return s[e]=1,o.commands=s,this.fire("nodeChange",o),n},getInstance:function(){return this.frame.getInstance()},render:function(e){return this.frame.set("content",this.get("content")),this.frame.render(e),this},focus:function(e){return this.frame.focus(e),this},show:function(){return this.frame.show(),this},hide:function(){return this.frame.hide(),this},getContent:function(){var e="",t=this.getInstance();return t&&t.EditorSelection&&(e=t.EditorSelection.unfilter()),e=e.replace(/ _yuid="([^>]*)"/g,""),e}},{NORMALIZE_FONTSIZE:function(e){var t=e.getStyle("fontSize"),n=t;switch(t){case"-webkit-xxx-large":t="48px";break;case"xx-large":t="32px";break;case"x-large":t="24px";break;case"large":t="18px";break;case"medium":t="16px";break;case"small":t="13px";break;case"x-small":t="10px"}return n!==t&&e.setStyle("fontSize",t),t},TABKEY:'<span class="tab">&nbsp;&nbsp;&nbsp;&nbsp;</span>',FILTER_RGB:function(e){if(e.toLowerCase().indexOf("rgb")!=-1){var t=new RegExp("(.*?)rgb\\s*?\\(\\s*?([0-9]+).*?,\\s*?([0-9]+).*?,\\s*?([0-9]+).*?\\)(.*?)","gi"),n=e.replace(t,"$1,$2,$3,$4,$5").split(",");if(n.length==5){var r=parseInt(n[1],10).toString(16),i=parseInt(n[2],10).toString(16),s=parseInt(n[3],10).toString(16);r=r.length==1?"0"+r:r,i=i.length==1?"0"+i:i,s=s.length==1?"0"+s:s,e="#"+r+i+s}}return e},TAG2CMD:{b:"bold",strong:"bold",i:"italic",em:"italic",u:"underline",sup:"superscript",sub:"subscript",img:"insertimage",a:"createlink",ul:"insertunorderedlist",ol:"insertorderedlist"},NC_KEYS:{8:"backspace",9:"tab",13:"enter",32:"space",33:"pageup",34:"pagedown",35:"end",36:"home",37:"left",38:"up",39:"right",40:"down",46:"delete"},USE:["substitute","node","selector-css3","editor-selection","stylesheet"],NAME:"editorBase",STRINGS:{title:"Rich Text Editor"},ATTRS:{content:{value:'<br class="yui-cursor">',setter:function(t){return t.substr(0,1)==="\n"&&(t=t.substr(1)),t===""&&(t='<br class="yui-cursor">'),t===" "&&e.UA.gecko&&(t='<br class="yui-cursor">'),this.frame.set("content",t)},getter:function(){return this.frame.get("content")}},dir:{writeOnce:!0,value:"ltr"},linkedcss:{value:"",setter:function(e){return this.frame&&this.frame.set("linkedcss",e),e}},extracss:{value:!1,setter:function(e){return this.frame&&this.frame.set("extracss",e),e}},defaultblock:{value:"p"}}}),e.EditorBase=n},"3.7.1",{requires:["base","frame","node","exec-command","editor-selection"]});
