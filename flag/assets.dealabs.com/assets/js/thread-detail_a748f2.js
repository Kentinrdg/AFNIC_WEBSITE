webpackJsonp([13,4],{"+kDd":function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var o=d(n("GvPl")),a=d(n("kXJu")),i=d(n("mN/L")),r=d(n("gQpc")),l=d(n("Bxha")),s=d(n("Mw08")),u=(d(n("Pk3k")),d(n("dbj0")));function d(e){return e&&e.__esModule?e:{default:e}}var c={},f=(0,o.default)("main"),h=(window.location.href,null),p=null;function y(e){27!==e.keyCode||l.default.observer.count||c.remove()}c.defaults={bodyOverflowClass:"body-overflow",mainHideClass:"main--hide",mainBlurClass:"main--blur",preventDefault:!1},c.isFeatureEnabled=function(){return"true"===window.VWO_thread_details_quick_view},c.remove=function(){c.isFeatureEnabled()&&h&&(h.remove(),h=null,a.default.supportsBodyOverlay()?(f.removeClass(c.defaults.mainBlurClass),(0,o.default)(document.body).removeClass(c.defaults.bodyOverflowClass)):(f.removeClass(c.defaults.mainHideClass),window.scroll(0,p)),u.default.$doc.off("keyup",y))},c.create=function(e,t,d){if(c.isFeatureEnabled()){d.preventDefault(),p=window.pageYOffset,h&&c.remove(),l.default.observer.count&&(0,o.default)("."+l.default.REFERENCE_NAME).trigger("layer-destroy");var v=r.default.process(o.default.ajax({url:t.endpoint,dataType:"json",cache:!1}),{$trigger:e}).always((h=(0,o.default)(s.default.renderScriptTpl((0,o.default)("#template-quick-view"),{QUICK_VIEW_REMOVE_DIRECTIVE:"quick-view-remove"})),a.default.supportsBodyOverlay()?((0,o.default)(document.body).addClass(c.defaults.bodyOverflowClass),h.css("top",p+"px"),f.addClass(c.defaults.mainBlurClass)):(window.scroll(0,0),f.addClass(c.defaults.mainHideClass)),h.appendTo(document.body),void u.default.$doc.on("keyup",y)));h.find(".js-quickView-content").one(a.default.animationend,function(e){v.then(function(e){h.find(".js-quickView-content-body").html(e.data.content),a.default.supportsBodyOverlay()||(0,o.default)(".js-thread-content-quickView").css({transform:"scale(1)"})}).then(function(){n.e(4).then(n.bind(null,"yyJY")).then(function(){i.default.triggerChilds(h,"init")})})})}},i.default.add("quick-view","click",c.create,c.defaults),i.default.add("quick-view-remove","click",c.remove),t.default=c},"/7FE":function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var o=l(n("GvPl")),a=l(n("dbj0")),i=l(n("kXJu")),r=l(n("mN/L"));function l(e){return e&&e.__esModule?e:{default:e}}n("qo9O");var s={},u=i.default.transitionend&&i.default.animationend?[i.default.transitionend,i.default.animationend].join(" "):"";s.removeWithEvent=function(e,t){var n=e.parent();e.remove(),n.triggerAll("domChanged"+(t?" "+t:""))},s.removeAnimated=function(e,t,n){var o=s.removeWithEvent.bind(null,e,n);t&&u?(e.toggleClass(t),e.one(u,o)):o()},s.handler=function(e,t){a.default.findTargets(e,t.target).each(function(){var e=(0,o.default)(this);t.className&&e.is(":visible")?s.removeAnimated(e,t.className,t.endEvent):s.removeWithEvent(e,t.endEvent)})},r.default.add("remove","click remove",s.handler,{events:["click"]}),t.default=s},"/bOr":function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var o=function(){function e(e,t){for(var n=0;n<t.length;n++){var o=t[n];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(e,o.key,o)}}return function(t,n,o){return n&&e(t.prototype,n),o&&e(t,o),t}}(),a=l(n("GvPl")),i=l(n("dbj0")),r=l(n("kFRu"));function l(e){return e&&e.__esModule?e:{default:e}}function s(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}var u={},d=u.ElementBoundary=function(){function e(t,n){s(this,e),this.$context=t,this.target="$window",this.edge="top",this.offset=0,a.default.extend(this,n),this.$elem=i.default.findTargets(t,this.target)}return o(e,[{key:"get",value:function(){var e=this.$elem[0],t=e&&i.default.rect(e);return t&&(t.width()||t.height())?t[this.edge]+this.offset:NaN}}]),e}(),c=u.presets={layer:{top:{edge:"top",offset:10},right:{edge:"right",offset:-10},bottom:{edge:"bottom",offset:-10},left:{edge:"left",offset:10},x:"50%",y:"50%"},modal:{preset:"layer",maxWidth:"100%"},menu:{top:{edge:"bottom"},left:{edge:"left"},right:{edge:"right"},bottom:{edge:"bottom"},x:0,y:0,yForce:!0},n:{preset:"layer",bottom:{target:"$self",edge:"top",offset:-16},xContext:"$self",xContain:8,y:"100%",yForce:!0},e:{preset:"layer",left:{target:"$self",edge:"right",offset:16},x:0,xForce:!0,yContext:"$self",yContain:12},s:{preset:"layer",top:{target:"$self",edge:"bottom",offset:16},xContext:"$self",xContain:8,y:0,yForce:!0},w:{preset:"layer",right:{target:"$self",edge:"left",offset:-16},x:"100%",xForce:!0,yContext:"$self",yContain:12}};u.smartPresets={clockwise:["n","e","s","w"],n:["n","s"],e:["e","w"],s:["s","n"],w:["w","e"]};var f={name:null,width:null,minWidth:null,maxWidth:null,height:null,maxHeight:null,x:0,xContext:null,xForce:!1,xContain:null,y:0,yContext:null,yForce:!1,yContain:null};u.Layout=function(){function e(t,n,o,i){s(this,e),this.$layer=t,this.$content=n,this.$context=o,i=function e(t){var n=a.default.extend(!0,{},"string"==typeof t?c[t]:t),o=n.preset;return n.name||"string"!=typeof t||(n.name=t),o&&c[o]&&(n.name||(n.name=o),delete n.preset,n=a.default.extend(!0,{},e(c[o]),n)),n}(i),this.top=new d(o,i.top),this.right=new d(o,i.right),this.bottom=new d(o,i.bottom),this.left=new d(o,i.left),Object.keys(f).forEach(function(e){this[e]=e in i?i[e]:f[e]},this)}return o(e,[{key:"setLayerSize",value:function(e){var t,n,o;return this.$layer.css({width:e.width(),height:""}),this.$layer[0].style.display="none",n=this.$layer[0].offsetWidth,this.$layer[0].style.display="block",t=i.default.rect(this.$content[0]),n=null!==this.width?this.evalVal(e.width(),this.width):t.width(),null!==this.maxWidth&&(n=Math.min(n,this.evalVal(e.width(),this.maxWidth))),null!==this.minWidth&&(n=Math.max(n,this.evalVal(e.width(),this.minWidth))),n!==e.width()&&(this.$layer.css("width",n),t=i.default.rect(this.$content[0])),o=null!==this.height?this.evalVal(e.height(),this.height):t.height(),null!==this.maxHeight&&(o=Math.min(o,this.evalVal(e.height(),this.maxHeight))),o!==t.height()&&this.$layer.css("height",o),[n,o]}},{key:"getLayerPos",value:function(e,t){var n=null!==this.xContext?i.default.rect(i.default.findTargets(this.$context,this.xContext)[0]):e,o=null!==this.yContext?i.default.rect(i.default.findTargets(this.$context,this.yContext)[0]):e,a=n.left+this.evalVal(n.width()-t[0],this.x),r=o.top+this.evalVal(o.height()-t[1],this.y);return this.xForce||(a<e.left?a=e.left:a+t[0]>e.right&&(a=e.right-t[0])),this.yForce||(r<e.top?r=e.top:r+t[1]>e.bottom&&(r=e.bottom-t[1])),[r,a]}},{key:"evalVal",value:function(e,t){return/%$/.test(t)?e*t.slice(0,-1)/100:Number(t)}},{key:"getSpaceRect",value:function(){return new r.default(this.top.get(),this.right.get(),this.bottom.get(),this.left.get())}},{key:"getContainRect",value:function(e){var t;return null===this.xContain&&null===this.yContain||(t=i.default.rect(this.$context[0])),new r.default(null!==this.yContain?Math.min(e.top,t.top-this.yContain):e.top,null!==this.xContain?Math.max(e.right,t.right+this.xContain):e.right,null!==this.yContain?Math.max(e.bottom,t.bottom+this.yContain):e.bottom,null!==this.xContain?Math.min(e.left,t.left-this.xContain):e.left)}},{key:"get",value:function(e){var t=this.setLayerSize(e),n=this.getLayerPos(e,t);return{name:this.name||"default",rect:new r.default(n[0],n[1]+t[0],n[0]+t[1],n[1])}}}]),e}(),u.SmartLayout=function(){function e(t,n,o,a){s(this,e);var i="string"==typeof a?u.smartPresets[a]:a;this.$layer=t,this.$content=n,this.$context=o,this.layouts=i.map(function(e){return new u.Layout(t,n,o,e)})}return o(e,[{key:"get",value:function(){var e=null,t=0;return this.layouts.some(function(n){var o=n.getSpaceRect(),a=n.getContainRect(o),i=n.get(a),r=i.rect.containment(o);return 100===r?(e=i,!0):((!e||r>t)&&(e=i,t=r),!1)}),e}}]),e}(),t.default=u},"/t5x":function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var o,a=function(){function e(e,t){for(var n=0;n<t.length;n++){var o=t[n];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(e,o.key,o)}}return function(t,n,o){return n&&e(t.prototype,n),o&&e(t,o),t}}(),i=n("GvPl"),r=(o=i)&&o.__esModule?o:{default:o};function l(e,t){return e[t]||(e[t]=r.default.Callbacks())}var s=function(){function e(){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),this.callbackMap={}}return a(e,[{key:"on",value:function(e,t){return l(this.callbackMap,e).add(t),this}},{key:"one",value:function(e,t){var n=l(this.callbackMap,e);return n.add(t),n.add(function(){n.remove(t)}),this}},{key:"off",value:function(e,t){return l(this.callbackMap,e).remove(t),this}},{key:"fire",value:function(e){var t=this,n=arguments,o=e.split(" ");return Object.keys(t.callbackMap).forEach(function(e){o.some(function(e,t){return e===t||0===t.indexOf(e)&&"."===t.charAt(e.length)}.bind(null,e))&&t.callbackMap[e].fireWith(t,n)}),t}}]),e}();t.default=s},"6CQq":function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var o=d(n("GvPl")),a=d(n("mN/L")),i=d(n("Pk3k")),r=d(n("ralI")),l=d(n("+kDd")),s=d(n("dbj0")),u=d(n("dNkM"));function d(e){return e&&e.__esModule?e:{default:e}}var c={handler:function(e,t){return l.default.isFeatureEnabled&&l.default.remove(),r.default.createAsync(e,t,u.default.get("modal",e,t)).always(i.default.init(e,t.seal)).always(s.default.tmpClass(e,t.triggerClass))},create:function(e,t){return new r.default.Popover(s.default.$win,o.default.extend({},c.defaults,t),e)},createAsync:function(e){return e=o.default.extend({},c.defaults,e),r.default.createAsync(s.default.$win,e,u.default.get("modal",s.default.$win,e))},defaults:{target:"#template-modalLoader",method:"get",layout:["modal"],modifier:"modal fade",hideTransition:!0,triggerClass:"",seal:{},modal:!0,noArrow:!0,reposition:!1,close:!0}};a.default.add("modal","click",c.handler,c.defaults),a.default.add("modal-close","click",function(e){e.trigger("layer-destroy")},{preventDefault:!1}),t.default=c},Bxha:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var o=function(){function e(e,t){for(var n=0;n<t.length;n++){var o=t[n];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(e,o.key,o)}}return function(t,n,o){return n&&e(t.prototype,n),o&&e(t,o),t}}(),a=d(n("GvPl")),i=d(n("dbj0")),r=d(n("mN/L")),l=d(n("/t5x")),s=d(n("/7FE")),u=d(n("/bOr"));function d(e){return e&&e.__esModule?e:{default:e}}var c,f,h={REFERENCE_NAME:"js-layer"},p=(c=new l.default,f=void 0,c.count=0,c.on("create",function(){c.count+=1}),c.on("destroy",function(){c.count-=1}),c.nextZIndex=function(e){return f=c.count>1?f+1:e},c);h.observer=p,h.Layer=function(e){function t(e,n,o,i){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,t);var r=function(e,t){if(!e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return!t||"object"!=typeof t&&"function"!=typeof t?e:t}(this,(t.__proto__||Object.getPrototypeOf(t)).call(this));return r.options=a.default.extend({rootClass:e},t.defaults,i),r.type=e,r.$trigger=n,r.currentLayout=null,r.$elem=null,r.$content=null,r.$cover=null,r.destroy=r.destroy.bind(r),r.position=r.position.bind(r),r.updateDimensions=r.updateDimensions.bind(r),r.assign(),r.createElem(),r.zIndex=p.nextZIndex(r.options.zIndex),r.layout=new u.default.SmartLayout(r.$elem,r.$content,n,r.options.layout),r.position=r.position.bind(r),r.show(o),r.addHandler(),r.positionTimeout=0,r.options.continuousPosition&&r.continuousPosition(r.options.continuousPosition),r}return function(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function, not "+typeof t);e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,enumerable:!1,writable:!0,configurable:!0}}),t&&(Object.setPrototypeOf?Object.setPrototypeOf(e,t):e.__proto__=t)}(t,l.default),o(t,[{key:"isActive",value:function(){return Boolean(this.$elem)}},{key:"update",value:function(e){this.isActive()&&(this.$content.children().detach(),this.$content.append(e),this.position(),this.fire("updated"),setTimeout(r.default.triggerChilds.bind(null,this.$content,"init"),0))}},{key:"position",value:function(){var e,t;this.isActive()&&(t=this.options.rootClass,e=this.currentLayout,this.$content.removeClass(t+"-content--expand"),this.currentLayout=this.layout.get(),this.currentLayout.rect.isValid()?(this.$content.addClass(t+"-content--expand"),e&&e.name===this.currentLayout.name||(e&&this.$elem.removeClass(t+"--layout-"+e.name),this.$elem.addClass(t+"--layout-"+this.currentLayout.name)),i.default.applyRect(this.$elem[0],this.currentLayout.rect,this.options.fixed)):this.destroy())}},{key:"updateDimensions",value:function(){var e,t;this.isActive()&&(e=this.options.rootClass,this.$content.removeClass(e+"-content--expand").addClass("height--all-auto"),t=this.$content[0].getBoundingClientRect(),i.default.applyProps(this.$elem[0],{width:t.width,height:t.height}),this.$content.addClass(e+"-content--expand").removeClass("height--all-auto"))}},{key:"continuousPosition",value:function(e){var t=this;function n(){clearInterval(t.positionTimeout),t.positionTimeout=0}t.positionTimeout&&n(),t.isActive()&&(t.positionTimeout=setInterval(t.position.bind(t),48),setTimeout(n,e))}},{key:"destroy",value:function(){this.isActive()&&(this.fire("beforeDestroy"),r.default.triggerChilds(this.$content,"destroy"),this.destroyElem(),this.unassign(),this.fire("destroyed"))}},{key:"createElem",value:function(){var e=this.options,t=e.rootClass,n=(0,a.default)('<section\n\t\t\t\t\t\t\tclass="'+h.REFERENCE_NAME+" "+t+'"\n\t\t\t\t\t\t\tstyle="position:'+(e.fixed?"fixed":"absolute")+'; top:0; left:0;"\n\t\t\t\t\t\t\trole="dialog"></section>');return e.modifier&&n.addClass(t+"--"+e.modifier.split(" ").join(" "+t+"--")),this.$elem=n,this.$content=(0,a.default)('<div class="'+t+'-content"/>'),e.contentClass&&this.$content.addClass(e.contentClass),n.append(this.$content),e.modal&&(this.$cover=(0,a.default)('<div class="'+t+'-cover"/>'),n.append(this.$cover),e.close&&this.$cover.on("click",this.destroy)),n.data("layer",this),n.appendTo(document.body)}},{key:"destroyElem",value:function(){s.default.removeAnimated(this.$elem,this.options.hideTransition?this.options.rootClass+"--visible":null),this.$elem.data("layer",null),this.$elem=null,this.$content=null,this.$cover=null,this.options.toggleClass&&(this.options.parentToggle?this.$trigger.parent():this.$trigger).removeClass(this.options.toggleClass)}},{key:"assign",value:function(){p.fire("create."+this.type),this.options.multiple||p.on("create."+this.type,this.destroy)}},{key:"unassign",value:function(){this.options.multiple||p.off("create."+this.type,this.destroy),p.fire("destroy."+this.type)}},{key:"show",value:function(e){this.update(e),this.$elem.css("z-index",this.zIndex).addClass(this.options.rootClass+"--visible"),this.options.toggleClass&&(this.options.parentToggle?this.$trigger.parent():this.$trigger).addClass(this.options.toggleClass)}},{key:"addHandler",value:function(){var e=this,t=e.options,n=i.default.$win.width();function o(t){27===t.keyCode&&e.destroy()}function a(t){t.stopPropagation(),e.destroy()}function r(){var t=i.default.$win.width();n!==t&&(n=t,e.position())}e.$elem.on("layer-destroy",a),e.$elem.on("layer-position domChanged",e.position),e.$elem.on("layer-dimensions",e.updateDimensions),t.reposition?i.default.$win.on("throttledScroll throttledResize",e.position):i.default.$win.on("throttledResize",r),t.close&&i.default.$doc.on("keyup",o),e.one("beforeDestroy",function(){e.$elem.off("layer-destroy",a),e.$elem.off("layer-position",e.position),e.$elem.off("domChanged",e.position),e.$elem.off("layer-dimensions",e.updateDimensions),t.reposition?i.default.$win.off("throttledScroll throttledResize",e.position):i.default.$win.off("throttledResize",r),t.close&&i.default.$doc.off("keyup",o)})}}]),t}(),h.Layer.defaults={modifier:"default",reposition:!0,continuousPosition:0,multiple:!1,zIndex:1e3},t.default=h},JViC:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.default=window.RedactorPlugins||(window.RedactorPlugins={})},QOwo:function(e,t,n){"use strict";var o=i(n("B7lj")),a=i(n("yKAf"));function i(e){return e&&e.__esModule?e:{default:e}}o.default.component("vue-group-list",{mixins:[a.default]})},XO2O:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var o={off:0,toOn:1,on:2,toOff:3},a=function(e,t,n,a){var i=o.off,r=function(){},l=function(){},s={getState:function(){return i},setState:function(e){i=e},delayedOn:function(){s.getState()===o.off?(s.setState(o.toOn),r=clearTimeout.bind(window,setTimeout(s.on,n))):s.getState()===o.toOff&&s.on()},delayedOff:function(){s.getState()===o.on?(s.setState(o.toOff),l=clearTimeout.bind(window,setTimeout(s.off,a))):s.getState()===o.toOn&&s.off()},on:function(t,n){var a=t||r,i=n||l;s.getState()===o.toOn?(a(),e(s)):s.getState()===o.toOff?i():s.getState()===o.off&&e(s),s.setState(o.on)},off:function(e,n){var a=e||r,i=n||l;s.getState()===o.toOn?a():s.getState()===o.toOff?(i(),t(s)):s.getState()===o.on&&t(s),s.setState(o.off)}};return"number"!=typeof a&&(a=n),s};a.states=o,t.default=a},ayvy:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var o,a=n("dbj0"),i=(o=a)&&o.__esModule?o:{default:o};t.default={props:{wayPoint:{type:Number,default:100}},data:function(){return{wayPointTriggered:!1}},attached:function(){var e=this,t=function(){e.wayPointTriggered=i.default.scrolledBeyond(e.wayPoint,window)};i.default.$win.on("throttledResize throttledScroll",t),t()}}},dNkM:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var o=l(n("GvPl")),a=l(n("gQpc")),i=l(n("Mw08")),r=l(n("dbj0"));function l(e){return e&&e.__esModule?e:{default:e}}var s={renderTpl:function(e,t){return t.tplData?i.default.render(e,t.tplData):e},cache:function(e,t,n,o){n.cachedContent=o,t.data(e,n)},get:function(e,t,n){var i=n.cachedContent,l=i?n.cachedContent:(0,o.default)(s.renderTpl("string"==typeof n.target?r.default.findTargets(t,n.target).html():n.content?/^<\w/.test(n.content)?n.content:document.createTextNode(n.content):"",n)),u=!i&&n.endpoint?a.default.process(o.default.ajax(n.endpoint,{type:n.method||"post",data:n.params}),{$trigger:t}).then(function(a){var r=(0,o.default)(s.renderTpl(a.data.content,n));return!i&&n.cache&&s.cache(e,t,n,r),r}):null;return u||i||!n.cache||s.cache(e,t,n,l),{sync:l,async:u}}};t.default=s},hTZ9:function(e,t,n){"use strict";var o=v(n("GvPl")),a=v(n("mN/L")),i=v(n("gQpc")),r=v(n("Pk3k")),l=v(n("dbj0")),s=v(n("WgW3")),u=v(n("ufNw")),d=v(n("JViC")),c=v(n("Mw08")),f=v(n("N18+")),h=v(n("ralI")),p=v(n("6CQq")),y=v(n("lSv7"));function v(e){return e&&e.__esModule?e:{default:e}}d.default.quote=function(){return{init:function(){var e={name:"quote",html:function(e,t){return c.default.render((0,o.default)(e.opts.quote.template).html(),t)},onClick:function(e,t){h.default.clickHandler(t,o.default.extend({},l.default.$win.height()<600?p.default.defaults:{layout:[{preset:"n",x:0},{preset:"s",x:0}],close:!1,reTrigger:"ignore"},{target:"#template-quotePopover",tplData:e}))}},t=o.default.extend({},e,{name:"legacy_quote"});this.shortcode.instance.registerType(e),this.shortcode.instance.registerType(t)}}},a.default.add("quote-add","click",function(e,t){var n=u.default.last(".redactor-editor")||(0,o.default)(".redactor-editor"),a=f.default.getTextarea(n);f.default.initRedactor(a).done(function(n){i.default.process(o.default.get(t.endpoint),{$trigger:e}).always(r.default.init(e,t.seal)).always(l.default.tmpClass(e,t.className)).done(function(t){var a,i=t.data.shortcode;a=n.shortcode.instance.add(i),n.$editor.scrollTop(a.position().top),e.closest(".js-quickView-content").length||l.default.$win.scrollTop(a.offset().top),n.caret.setAfter((0,o.default)("<br><br>").insertAfter(a)[1])})})},{className:"",seal:{cover:!1}}),a.default.add("quote-update","click",function(e,t){var n=y.default.find(t.id),o=n.data(n.embed(t.id));o&&(o.content=s.default.escapeHtml(l.default.findTargets(e,t.textarea).val()),n.set(o)),e.trigger("layer-destroy")}),a.default.add("quote-del","click",function(e,t){var n=y.default.find(t.id);n&&n.del(t.id),e.trigger("layer-destroy")})},iD3a:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var o=r(n("GvPl")),a=r(n("mN/L")),i=r(n("dbj0"));function r(e){return e&&e.__esModule?e:{default:e}}function l(e,t){return e.each(function(){i.default.findTargets((0,o.default)(this),t.target).toggleClass(t.className,void 0!==t.state?t.state:t.invert?!this.checked:this.checked)})}function s(e,t){(t||a.default.params("toggle",e)).toggles.forEach(function(t){l(e,t)})}a.default.add("toggle","click touchstart touchend change toggle",function(e,t,n){t.ignoreNested&&(0,o.default)(n.target).closest("a,button").closest(e).length||("radio"===e.prop("type")?(0,o.default)(e.prop("form")[e.prop("name")]).each(function(){s((0,o.default)(this))}):s(e,t),t.ignoreChanged||e.trigger("domChanged"))},{events:["click"]}),t.default={toggle:l,toggles:s}},lSv7:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var o=function(){function e(e,t){for(var n=0;n<t.length;n++){var o=t[n];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(e,o.key,o)}}return function(t,n,o){return n&&e(t.prototype,n),o&&e(t,o),t}}(),a=s(n("GvPl")),i=s(n("JViC")),r=s(n("WgW3")),l=s(n("wV3P"));function s(e){return e&&e.__esModule?e:{default:e}}var u={};i.default.shortcode=function(){return{instance:null,init:function(){this.shortcode.instance=new u.Shortcode(this)}}};var d=1;u.Shortcode=function(){function e(t){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e);var n,o=this;o.redactor=t,o.$form=(0,a.default)(t.$element[0].form),o.$form.on("submit",o.updateForm.bind(o)),o.namespace=t.opts.shortcodeNamespace,n=o.readForm(),o.types={},t.replacer.add({regexp:/\[shortcode id="([^"]+)"\/]/g,replacer:function(e,t,a,i){return o.html(n[i])}}),t.code.syncTransformers.push(function(e){return e.find("[data-embed]").each(function(){var e=(0,a.default)(this);e.replaceWith(o.marker(e.data("embed")))}),e}),t.$editor.on("click","[data-embed]",function(){var e=(0,a.default)(this),n=o.data(e),i=o.getType(n);i.onClick&&i.onClick(n,e,t)})}return o(e,[{key:"readForm",value:function(){return this.$form.find('input[name^="'+this.namespace+'["]').get().reduce(function(e,t){return l.default.inputToJson(t.name,t.value,e)},{})[this.namespace]||{}}},{key:"updateForm",value:function(){var e=this.embeds().get().map(function(e){return this.data((0,a.default)(e))},this);this.$form.find('input[name^="'+this.namespace+'["]').remove(),e.length&&this.$form.append(e.reduce(function(e,t){return e.concat(l.default.jsonToInputs(t,[],this.namespace+"["+t.id+"]"))}.bind(this),[]))}},{key:"registerType",value:function(e){this.types[e.name]=e}},{key:"getType",value:function(e){return e&&this.types[e.type]||null}},{key:"add",value:function(e){return e.id="new"+d,d+=1,(0,a.default)(this.redactor.insert.node((0,a.default)(this.html(e))))}},{key:"set",value:function(e){this.embed(e.id).replaceWith(this.html(e)),this.redactor.replacer.format("shortcode"),this.redactor.code.sync()}},{key:"del",value:function(e){this.embed(e).remove(),this.redactor.code.sync()}},{key:"marker",value:function(e){return'[shortcode id="'+e+'"/]'}},{key:"html",value:function(e){var t=this.getType(e);return t?t.html(this.redactor,a.default.extend({attr:' data-embed="'+e.id+'" data-embed-obj="'+r.default.escapeHtml(JSON.stringify(e))+'" contenteditable="false"'},e)):""}},{key:"embed",value:function(e){return this.redactor.$editor.find('[data-embed="'+e+'"]')}},{key:"embeds",value:function(){return this.redactor.$editor.find("[data-embed]")}},{key:"data",value:function(e){return e.data("embed-obj")}}]),e}(),u.find=function(e){var t=(0,a.default)('[data-embed="'+e+'"]').closest(".redactor-box").find("textarea").data("redactor");return t?t.shortcode.instance:null},u.isChild=function(e){return Boolean((0,a.default)(e).closest("[data-embed]").length)},t.default=u},mrYL:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var o=d(n("8lo7")),a=d(n("GvPl")),i=d(n("mN/L")),r=d(n("6CQq")),l=d(n("QDjS")),s=d(n("gMUv")),u=d(n("NIlN"));function d(e){return e&&e.__esModule?e:{default:e}}var c=o.default.config("directives/idealo-links"),f=c.hashModalData,h=c.triggerData,p=c.trackData,y=c.trackOptions;function v(e,t){var n=f.endpoint+"?itemId="+t.itemId,o=f.hash+t.itemId,i=t.itemId;l.default.handler(e,a.default.extend({endpoint:n,hash:o,endEvent:f.endEvent},r.default.defaults)),u.default.handler(e,a.default.extend({id:i},p),y),e.on(f.endEvent,function(){s.default.handler(e,h)})}c.enabled&&i.default.add("idealo-links","click",v),t.default={handler:v}},q6LA:function(e,t,n){"use strict";var o=i(n("B7lj")),a=i(n("ayvy"));function i(e){return e&&e.__esModule?e:{default:e}}o.default.component("vue-move-to-top",{template:"#vue-move-to-top",mixins:[a.default],methods:{moveToTop:function(){window.scrollTo(0,0)}}})},qbJK:function(e,t,n){"use strict";var o=i(n("B7lj")),a=i(n("ayvy"));function i(e){return e&&e.__esModule?e:{default:e}}o.default.component("vue-thread-vote-bar",{template:"#thread-vote-bar",mixins:[a.default]})},ralI:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var o=function(){function e(e,t){for(var n=0;n<t.length;n++){var o=t[n];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(e,o.key,o)}}return function(t,n,o){return n&&e(t.prototype,n),o&&e(t,o),t}}(),a=function e(t,n,o){null===t&&(t=Function.prototype);var a=Object.getOwnPropertyDescriptor(t,n);if(void 0===a){var i=Object.getPrototypeOf(t);return null===i?void 0:e(i,n,o)}if("value"in a)return a.value;var r=a.get;return void 0!==r?r.call(o):void 0},i=f(n("GvPl")),r=f(n("mN/L")),l=f(n("Bxha")),s=f(n("iD3a")),u=f(n("dbj0")),d=f(n("XO2O")),c=f(n("dNkM"));function f(e){return e&&e.__esModule?e:{default:e}}n("qo9O");var h={},p="popover-instance",y=function(e){function t(e,n,o){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,t);var a=function(e,t){if(!e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return!t||"object"!=typeof t&&"function"!=typeof t?e:t}(this,(t.__proto__||Object.getPrototypeOf(t)).call(this,n.type||"popover",e,o,n));return e.data(p,a),a.one("destroyed",function(){e.data(p,null),e.trigger("popover.close"),n.toggles&&s.default.toggles(e,n)}),a}return function(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function, not "+typeof t);e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,enumerable:!1,writable:!0,configurable:!0}}),t&&(Object.setPrototypeOf?Object.setPrototypeOf(e,t):e.__proto__=t)}(t,l.default.Layer),o(t,[{key:"createElem",value:function(){var e=a(t.prototype.__proto__||Object.getPrototypeOf(t.prototype),"createElem",this).call(this);return this.$arrow=null,this.options.noArrow||(this.$arrow=(0,i.default)('<span class="'+this.options.rootClass+'-arrow"/>'),e.append(this.$arrow)),e}},{key:"destroyElem",value:function(){this.$arrow=null,a(t.prototype.__proto__||Object.getPrototypeOf(t.prototype),"destroyElem",this).call(this)}},{key:"update",value:function(e){if(this.options.transferVueData){var n=this.$trigger.closest("[data-vue]");if(n.length){var o={vueContainer:"#"+u.default.ensureId(n)};e=(0,i.default)('<div class="js-vue" data-handler="vue" data-vue="'+JSON.stringify(o).replace(/"/g,"&quot;")+'"/>').append(e)}}a(t.prototype.__proto__||Object.getPrototypeOf(t.prototype),"update",this).call(this,e)}},{key:"position",value:function(){if(a(t.prototype.__proto__||Object.getPrototypeOf(t.prototype),"position",this).call(this),!this.options.noArrow&&this.isActive()){var e=this.currentLayout,n=u.default.rect(this.$trigger[0]),o=this.$arrow,i=u.default.rect(o[0]),r=void 0,l=void 0,s=void 0;switch(e.name){case"e":r=n.height()<e.rect.height()?n:e.rect,l=-i.width(),s=r.top+r.height()/2-e.rect.top-i.height()/2;break;case"w":r=n.height()<e.rect.height()?n:e.rect,l=e.rect.width()-1,s=r.top+r.height()/2-e.rect.top-i.height()/2;break;case"n":r=n.width()<e.rect.width()?n:e.rect,s=e.rect.height()-1,l=r.left+r.width()/2-e.rect.left-i.width()/2;break;case"s":r=n.width()<e.rect.width()?n:e.rect,s=-i.height(),l=r.left+r.width()/2-e.rect.left-i.width()/2}o.css({left:l,top:s})}}}],[{key:"getInstance",value:function(e){return e.data(p)}}]),t}();h.Popover=y,h.createAsync=function(e,t,n){var o=null;function a(n){return new h.Popover(e,t,n)}return n.sync&&(o=i.default.Deferred().resolve(a(n.sync)).promise()),n.async&&(o||(o=n.async.then(a)),i.default.when(o,n.async).done(function(n,o){e.trigger("popover.beforeContentLoaded"),n.update(o),e.trigger("popover.contentLoaded"),t.endEvent&&e.triggerAll(t.endEvent)})),o},h.handler=function(e,t,n){h[{mouseenter:"mouseHandler",click:"clickHandler",popover:"clickHandler"}[n.type]](e,t)},h.clickHandler=function(e,t){var n=h.Popover.getInstance(e);return!n||"close"!==t.reTrigger&&"reopen"!==t.reTrigger||n.destroy(),n&&"reopen"!==t.reTrigger?null:(t.toggles&&s.default.toggles(e,t),h.createAsync(e,t,c.default.get("popover",e,t)).done(function(n){if(n.isActive()&&t.close){n.one("destroyed",u.default.outside((0,i.default)([e[0],n.$elem[0]]),"click",function(e){t.excludeClose&&(0,i.default)(e.target).closest(t.excludeClose).length||n.destroy()}))}}))},h.mouseHandler=function(e,t){var n=e.data("popover-switch");function o(){var t=h.Popover.getInstance(e);return t&&(t.$elem.off("mouseleave",n.delayedOff).off("mouseenter",n.delayedOn),t.off("beforeDestroy",o)),t}n||(n=(0,d.default)(function(){h.createAsync(e,t,c.default.get("popover",e,t)).done(function(e){e.isActive()&&(e.$elem.on("mouseleave",n.delayedOff).on("mouseenter",n.delayedOn),e.on("beforeDestroy",o))})},function(){var e=o();e&&e.destroy()},t.openDelay,t.closeDelay),e.on("mouseleave",n.delayedOff).data("popover-switch",n)),n.delayedOn()},r.default.add("popover","click mouseenter popover",h.handler,{events:["click"],close:!0,method:"get",reTrigger:"close",openDelay:200,closeDelay:200,excludeClose:".pika-single"}),r.default.add("popover-close","click change",function(e){e.trigger("layer-destroy")},{events:["click"],preventDefault:!1}),t.default=h},ufNw:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var o,a=n("GvPl"),i=(o=a)&&o.__esModule?o:{default:o};var r={history:[],max:100};(0,i.default)(document).on("focusin",function(e){r.history.unshift(e)>r.max&&(r.history.length=r.max)}),t.default={last:function(e){var t=null;return r.history.some(function(n){var o;return!(!i.default.contains(document,n.target)||!(o=(0,i.default)(n.target)).is(e)||(t=o,0))}),t},reset:function(){r.history=[]}}},yKAf:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var o,a=n("dbj0"),i=(o=a)&&o.__esModule?o:{default:o};t.default={data:function(){return{overflowed:!1}},attached:function(){var e=this,t=function(){e.overflowed=i.default.overflowed(e.$el)};i.default.$win.on("throttledResize",t),t()}}},yyJY:function(e,t,n){"use strict";n("hTZ9"),n("N18+"),n("kDgO"),n("ZRpi"),n("q6LA"),n("fOCx"),n("Jrte"),n("mrYL"),n("QOwo"),n("qbJK")}},["yyJY"]);