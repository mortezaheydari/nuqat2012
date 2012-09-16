
// usage: log('inside coolFunc', this, arguments);
// paulirish.com/2009/log-a-lightweight-wrapper-for-consolelog/
window.log = function(){
  log.history = log.history || [];   // store logs to an array for reference
  log.history.push(arguments);
  if(this.console) {
    arguments.callee = arguments.callee.caller;
    var newarr = [].slice.call(arguments);
    (typeof console.log === 'object' ? log.apply.call(console.log, console, newarr) : console.log.apply(console, newarr));
  }
};

// make it safe to use console.log always
(function(b){function c(){}for(var d="assert,count,debug,dir,dirxml,error,exception,group,groupCollapsed,groupEnd,info,log,timeStamp,profile,profileEnd,time,timeEnd,trace,warn".split(","),a;a=d.pop();){b[a]=b[a]||c}})((function(){try
{console.log();return window.console;}catch(err){return window.console={};}})());


// place any jQuery/helper plugins in here, instead of separate, slower script files.



/* Prefix Free MT */

// StyleFix 1.0.1 & PrefixFree 1.0.4 / by Lea Verou / MIT license
(function(){function f(a,b){return[].slice.call((b||document).querySelectorAll(a))}if(window.addEventListener){var b=window.StyleFix={link:function(a){try{if(!/\bstylesheet\b/i.test(a.rel)||!a.sheet.cssRules)return}catch(c){return}var d=a.href||a.getAttribute("data-href"),g=d.replace(/[^\/]+$/,""),e=a.parentNode,h=new XMLHttpRequest;h.open("GET",d);h.onreadystatechange=function(){if(h.readyState===4){var c=h.responseText;if(c&&a.parentNode){c=b.fix(c,true,a);g&&(c=c.replace(/url\((?:'|")?(.+?)(?:'|")?\)/gi,
function(a,c){return!/^([a-z]{3,10}:|\/)/i.test(c)?'url("'+g+c+'")':a}),c=c.replace(RegExp("\\b(behavior:\\s*?url\\('?\"?)"+g,"gi"),"$1"));var d=document.createElement("style");d.textContent=c;d.media=a.media;d.disabled=a.disabled;d.setAttribute("data-href",a.getAttribute("href"));e.insertBefore(d,a);e.removeChild(a)}}};h.send(null);a.setAttribute("data-inprogress","")},styleElement:function(a){var c=a.disabled;a.textContent=b.fix(a.textContent,true,a);a.disabled=c},styleAttribute:function(a){var c=
a.getAttribute("style"),c=b.fix(c,false,a);a.setAttribute("style",c)},process:function(){f('link[rel~="stylesheet"]:not([data-inprogress])').forEach(StyleFix.link);f("style").forEach(StyleFix.styleElement);f("[style]").forEach(StyleFix.styleAttribute)},register:function(a,c){(b.fixers=b.fixers||[]).splice(c===void 0?b.fixers.length:c,0,a)},fix:function(a,c){for(var d=0;d<b.fixers.length;d++)a=b.fixers[d](a,c)||a;return a},camelCase:function(a){return a.replace(/-([a-z])/g,function(a,b){return b.toUpperCase()}).replace("-",
"")},deCamelCase:function(a){return a.replace(/[A-Z]/g,function(a){return"-"+a.toLowerCase()})}};(function(){setTimeout(function(){f('link[rel~="stylesheet"]').forEach(StyleFix.link)},10);document.addEventListener("DOMContentLoaded",StyleFix.process,false)})()}})();
(function(f){if(window.StyleFix&&window.getComputedStyle){var b=window.PrefixFree={prefixCSS:function(a,c){function d(c,d,g,e){c=b[c];c.length&&(c=RegExp(d+"("+c.join("|")+")"+g,"gi"),a=a.replace(c,e))}var g=b.prefix;d("functions","(\\s|:)","\\s*\\(","$1"+g+"$2(");d("keywords","(\\s|:)","(\\s|;|\\}||$)","$1"+g+"$2$3");d("properties","(^|\\{|\\s|;)","\\s*:","$1"+g+"$2:");if(b.properties.length){var e=RegExp("\\b("+b.properties.join("|")+")(?!:)","gi");d("valueProperties","\\b",":(.+?);",function(a){return a.replace(e,
g+"$1")})}c&&(d("selectors","","\\b",b.prefixSelector),d("atrules","@","\\b","@"+g+"$1"));return a=a.replace(RegExp("-"+g,"g"),"-")},prefixSelector:function(a){return a.replace(/^:{1,2}/,function(a){return a+b.prefix})},prefixProperty:function(a,c){var d=b.prefix+a;return c?StyleFix.camelCase(d):d}};(function(){var a={},c="",d=0,g=[],e=getComputedStyle(document.documentElement,null),h=document.createElement("div").style,j=function(b){g.indexOf(b)===-1&&g.push(b);if(b.indexOf("-")>-1){var e=b.split("-");
if(b.charAt(0)==="-"){var b=e[1],f=++a[b]||1;a[b]=f;for(d<f&&(c=b,d=f);e.length>3;)e.pop(),f=e.join("-"),StyleFix.camelCase(f)in h&&(b=g,b.indexOf(f)===-1&&b.push(f))}}};if(e.length>0)for(var i=0;i<e.length;i++)j(e[i]);else for(var f in e)j(StyleFix.deCamelCase(f));b.prefix="-"+c+"-";b.Prefix=StyleFix.camelCase(b.prefix);g.sort();b.properties=[];for(i=0;i<g.length;i++){f=g[i];if(f.charAt(0)!=="-")break;f.indexOf(b.prefix)===0&&(e=f.slice(b.prefix.length),StyleFix.camelCase(e)in h||b.properties.push(e))}b.Prefix==
"Ms"&&!("transform"in h)&&!("MsTransform"in h)&&"msTransform"in h&&b.properties.push("transform","transform-origin");b.properties.sort()})();(function(){function a(a,b){g[b]="";g[b]=a;return!!g[b]}var c={"linear-gradient":{property:"backgroundImage",params:"red, teal"},calc:{property:"width",params:"1px + 5%"},element:{property:"backgroundImage",params:"#foo"}},d={initial:"color","zoom-in":"cursor","zoom-out":"cursor",box:"display",flexbox:"display","inline-flexbox":"display"};c["repeating-linear-gradient"]=
c["repeating-radial-gradient"]=c["radial-gradient"]=c["linear-gradient"];b.functions=[];b.keywords=[];var g=document.createElement("div").style,e;for(e in c){var h=c[e],f=h.property,h=e+"("+h.params+")";!a(h,f)&&a(b.prefix+h,f)&&b.functions.push(e)}for(var i in d)f=d[i],!a(i,f)&&a(b.prefix+i,f)&&b.keywords.push(i)})();(function(){function a(a){g.textContent=a+"{}";return!!g.sheet.cssRules.length}var c={":read-only":null,":read-write":null,":any-link":null,"::selection":null},d={keyframes:"name",viewport:null,
document:'regexp(".")'};b.selectors=[];b.atrules=[];var g=f.appendChild(document.createElement("style")),e;for(e in c){var h=e+(c[e]?"("+c[e]+")":"");!a(h)&&a(b.prefixSelector(h))&&b.selectors.push(e)}for(var j in d)h=j+" "+(d[j]||""),!a("@"+h)&&a("@"+b.prefix+h)&&b.atrules.push(j);f.removeChild(g)})();b.valueProperties=["transition","transition-property"];f.className+=" "+b.prefix;StyleFix.register(b.prefixCSS)}})(document.documentElement);



/* End of Prefix Free MT */






	

/*
 * 	Easy Slider 1.7 - jQuery plugin
 *	written by Alen Grakalic	
 *	http://cssglobe.com/post/4004/easy-slider-15-the-easiest-jquery-plugin-for-sliding
 *
 *	Copyright (c) 2009 Alen Grakalic (http://cssglobe.com)
 *	Dual licensed under the MIT (MIT-LICENSE.txt)
 *	and GPL (GPL-LICENSE.txt) licenses.
 *
 *	Built for jQuery library
 *	http://jquery.com
 *
 */
 
/*
 *	markup example for $("#slider").easySlider();
 *	
 * 	<div id="slider">
 *		<ul>
 *			<li><img src="images/01.jpg" alt="" /></li>
 *			<li><img src="images/02.jpg" alt="" /></li>
 *			<li><img src="images/03.jpg" alt="" /></li>
 *			<li><img src="images/04.jpg" alt="" /></li>
 *			<li><img src="images/05.jpg" alt="" /></li>
 *		</ul>
 *	</div>
 *
 */

(function($) {

	$j.fn.easySlider = function(options){
	  
		// default configuration properties
		var defaults = {			
			prevId: 		'prevBtn',
			prevText: 		'Previous',
			nextId: 		'nextBtn',	
			nextText: 		'Next',
			controlsShow:	true,
			controlsBefore:	'',
			controlsAfter:	'',	
			controlsFade:	true,
			firstId: 		'firstBtn',
			firstText: 		'First',
			firstShow:		false,
			lastId: 		'lastBtn',	
			lastText: 		'Last',
			lastShow:		false,				
			vertical:		false,
			speed: 			1500,
			auto:			false,
			pause:			3000,
			continuous:		false, 
			numeric: 		false,
			numericId: 		'controls'
		}; 
		
		var options = $j.extend(defaults, options);  
				
		this.each(function() {  
			var obj = $j(this); 				
			var s = $j("li", obj).length;
			var w = $j("li", obj).width(); 
			var h = $j("li", obj).height(); 
			var clickable = true;
			obj.width(w); 
			obj.height(h); 
			obj.css("overflow","hidden");
			var ts = s-1;
			var t = 0;
			$j("ul", obj).css('width',s*w);			
			
			if(options.continuous){
				$j("ul", obj).prepend($j("ul li:last-child", obj).clone().css("margin-left","-"+ w +"px"));
				$j("ul", obj).append($j("ul li:nth-child(2)", obj).clone());
				$j("ul", obj).css('width',(s+1)*w);
			};				
			
			if(!options.vertical) $j("li", obj).css('float','left');
								
			if(options.controlsShow){
				var html = options.controlsBefore;				
				if(options.numeric){
					html += '<ol id="'+ options.numericId +'"></ol>';
				} else {
					if(options.firstShow) html += '<span id="'+ options.firstId +'"><a href=\"javascript:void(0);\">'+ options.firstText +'</a></span>';
					html += ' <span id="'+ options.prevId +'"><a href=\"javascript:void(0);\">'+ options.prevText +'</a></span>';
					html += ' <span id="'+ options.nextId +'"><a href=\"javascript:void(0);\">'+ options.nextText +'</a></span>';
					if(options.lastShow) html += ' <span id="'+ options.lastId +'"><a href=\"javascript:void(0);\">'+ options.lastText +'</a></span>';				
				};
				
				html += options.controlsAfter;						
				$j(obj).after(html);										
			};
			
			if(options.numeric){									
				for(var i=0;i<s;i++){						
					$j(document.createElement("li"))
						.attr('id',options.numericId + (i+1))
						.html('<a rel='+ i +' href=\"javascript:void(0);\">'+ (i+1) +'</a>')
						.appendTo($j("#"+ options.numericId))
						.click(function(){							
							animate($j("a",$j(this)).attr('rel'),true);
						}); 												
				};							
			} else {
				$j("a","#"+options.nextId).click(function(){		
					animate("next",true);
				});
				$j("a","#"+options.prevId).click(function(){		
					animate("prev",true);				
				});	
				$j("a","#"+options.firstId).click(function(){		
					animate("first",true);
				});				
				$j("a","#"+options.lastId).click(function(){		
					animate("last",true);				
				});				
			};
			
			function setCurrent(i){
				i = parseInt(i)+1;
				$j("li", "#" + options.numericId).removeClass("current");
				$j("li#" + options.numericId + i).addClass("current");
			};
			
			function adjust(){
				if(t>ts) t=0;		
				if(t<0) t=ts;	
				if(!options.vertical) {
					$j("ul",obj).css("margin-left",(t*w*-1));
				} else {
					$j("ul",obj).css("margin-left",(t*h*-1));
				}
				clickable = true;
				if(options.numeric) setCurrent(t);
			};
			
			function animate(dir,clicked){
				if (clickable){
					clickable = false;
					var ot = t;				
					switch(dir){
						case "next":
							t = (ot>=ts) ? (options.continuous ? t+1 : ts) : t+1;						
							break; 
						case "prev":
							t = (t<=0) ? (options.continuous ? t-1 : 0) : t-1;
							break; 
						case "first":
							t = 0;
							break; 
						case "last":
							t = ts;
							break; 
						default:
							t = dir;
							break; 
					};	
					var diff = Math.abs(ot-t);
					var speed = diff*options.speed;						
					if(!options.vertical) {
						p = (t*w*-1);
						$j("ul",obj).animate(
							{ marginLeft: p }, 
							{ queue:false, duration:speed, complete:adjust }
						);				
					} else {
						p = (t*h*-1);
						$j("ul",obj).animate(
							{ marginTop: p }, 
							{ queue:false, duration:speed, complete:adjust }
						);					
					};
					
					if(!options.continuous && options.controlsFade){					
						if(t==ts){
							$j("a","#"+options.nextId).hide();
							$j("a","#"+options.lastId).hide();
						} else {
							$j("a","#"+options.nextId).show();
							$j("a","#"+options.lastId).show();					
						};
						if(t==0){
							$j("a","#"+options.prevId).hide();
							$j("a","#"+options.firstId).hide();
						} else {
							$j("a","#"+options.prevId).show();
							$j("a","#"+options.firstId).show();
						};					
					};				
					
					if(clicked) clearTimeout(timeout);
					if(options.auto && dir=="next" && !clicked){;
						timeout = setTimeout(function(){
							animate("next",false);
						},diff*options.speed+options.pause);
					};
			
				};
				
			};
			// init
			var timeout;
			if(options.auto){;
				timeout = setTimeout(function(){
					animate("next",false);
				},options.pause);
			};		
			
			if(options.numeric) setCurrent(0);
		
			if(!options.continuous && options.controlsFade){					
				$j("a","#"+options.prevId).hide();
				$j("a","#"+options.firstId).hide();				
			};				
			
		});
	  
	};

})(jQuery);



/* Easy slider 1.7 ends here */