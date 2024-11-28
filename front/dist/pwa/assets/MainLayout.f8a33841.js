import{c as ve,a as h,h as M,d as $e,i as Te,e as V,r as D,w as g,o as De,f as Je,g as Me,l as Qe,j as Ze,k as I,n as et,m as tt,p as R,q as oe,s as we,t as ne,v as fe,x as ie,y as at,z as lt,A as rt,B as ut,C as ot,E as nt,F as it,G as st,H as dt,I as _e,J as Ee,K as Ce,L as ct,_ as ft,M as vt,O as j,P as se,Q as f,R as o,S as K,T as ke,U as H,V as Q,W,X as qe,Y as mt,Z as ht,$ as pt,a0 as xe}from"./index.248e54b0.js";import{c as yt,b as G,Q as bt,a as gt,d as Be,e as N,f as O,g as E}from"./format.ab99b20b.js";import{Q as wt}from"./QToolbar.6fe2e5f9.js";import{Q as _t,a as Ct,b as kt}from"./QLayout.a62be002.js";import{C as qt}from"./ClosePopup.4c1f6cde.js";var xt=ve({name:"QToolbarTitle",props:{shrink:Boolean},setup(t,{slots:r}){const n=h(()=>"q-toolbar__title ellipsis"+(t.shrink===!0?" col-shrink":""));return()=>M("div",{class:n.value},$e(r.default))}}),Bt=ve({name:"QHeader",props:{modelValue:{type:Boolean,default:!0},reveal:Boolean,revealOffset:{type:Number,default:250},bordered:Boolean,elevated:Boolean,heightHint:{type:[String,Number],default:50}},emits:["reveal","focusin"],setup(t,{slots:r,emit:n}){const{proxy:{$q:w}}=Me(),e=Te(Qe,V);if(e===V)return console.error("QHeader needs to be child of QLayout"),V;const l=D(parseInt(t.heightHint,10)),i=D(!0),s=h(()=>t.reveal===!0||e.view.value.indexOf("H")!==-1||w.platform.is.ios&&e.isContainer.value===!0),b=h(()=>{if(t.modelValue!==!0)return 0;if(s.value===!0)return i.value===!0?l.value:0;const d=l.value-e.scroll.value.position;return d>0?d:0}),v=h(()=>t.modelValue!==!0||s.value===!0&&i.value!==!0),u=h(()=>t.modelValue===!0&&v.value===!0&&t.reveal===!0),q=h(()=>"q-header q-layout__section--marginal "+(s.value===!0?"fixed":"absolute")+"-top"+(t.bordered===!0?" q-header--bordered":"")+(v.value===!0?" q-header--hidden":"")+(t.modelValue!==!0?" q-layout--prevent-focus":"")),_=h(()=>{const d=e.rows.value.top,B={};return d[0]==="l"&&e.left.space===!0&&(B[w.lang.rtl===!0?"right":"left"]=`${e.left.size}px`),d[2]==="r"&&e.right.space===!0&&(B[w.lang.rtl===!0?"left":"right"]=`${e.right.size}px`),B});function p(d,B){e.update("header",d,B)}function m(d,B){d.value!==B&&(d.value=B)}function L({height:d}){m(l,d),p("size",d)}function C(d){u.value===!0&&m(i,!0),n("focusin",d)}g(()=>t.modelValue,d=>{p("space",d),m(i,!0),e.animate()}),g(b,d=>{p("offset",d)}),g(()=>t.reveal,d=>{d===!1&&m(i,t.modelValue)}),g(i,d=>{e.animate(),n("reveal",d)}),g(e.scroll,d=>{t.reveal===!0&&m(i,d.direction==="up"||d.position<=t.revealOffset||d.position-d.inflectionPoint<100)});const y={};return e.instances.header=y,t.modelValue===!0&&p("size",l.value),p("space",t.modelValue),p("offset",b.value),De(()=>{e.instances.header===y&&(e.instances.header=void 0,p("size",0),p("offset",0),p("space",!1))}),()=>{const d=Je(r.default,[]);return t.elevated===!0&&d.push(M("div",{class:"q-layout__shadow absolute-full overflow-hidden no-pointer-events"})),d.push(M(_t,{debounce:0,onResize:L})),M("header",{class:q.value,style:_.value,onFocusin:C},d)}}});const me={left:!0,right:!0,up:!0,down:!0,horizontal:!0,vertical:!0},Lt=Object.keys(me);me.all=!0;function Le(t){const r={};for(const n of Lt)t[n]===!0&&(r[n]=!0);return Object.keys(r).length===0?me:(r.horizontal===!0?r.left=r.right=!0:r.left===!0&&r.right===!0&&(r.horizontal=!0),r.vertical===!0?r.up=r.down=!0:r.up===!0&&r.down===!0&&(r.vertical=!0),r.horizontal===!0&&r.vertical===!0&&(r.all=!0),r)}const Ot=["INPUT","TEXTAREA"];function Oe(t,r){return r.event===void 0&&t.target!==void 0&&t.target.draggable!==!0&&typeof r.handler=="function"&&Ot.includes(t.target.nodeName.toUpperCase())===!1&&(t.qClonedBy===void 0||t.qClonedBy.indexOf(r.uid)===-1)}function de(t,r,n){const w=fe(t);let e,l=w.left-r.event.x,i=w.top-r.event.y,s=Math.abs(l),b=Math.abs(i);const v=r.direction;v.horizontal===!0&&v.vertical!==!0?e=l<0?"left":"right":v.horizontal!==!0&&v.vertical===!0?e=i<0?"up":"down":v.up===!0&&i<0?(e="up",s>b&&(v.left===!0&&l<0?e="left":v.right===!0&&l>0&&(e="right"))):v.down===!0&&i>0?(e="down",s>b&&(v.left===!0&&l<0?e="left":v.right===!0&&l>0&&(e="right"))):v.left===!0&&l<0?(e="left",s<b&&(v.up===!0&&i<0?e="up":v.down===!0&&i>0&&(e="down"))):v.right===!0&&l>0&&(e="right",s<b&&(v.up===!0&&i<0?e="up":v.down===!0&&i>0&&(e="down")));let u=!1;if(e===void 0&&n===!1){if(r.event.isFirst===!0||r.event.lastDir===void 0)return{};e=r.event.lastDir,u=!0,e==="left"||e==="right"?(w.left-=l,s=0,l=0):(w.top-=i,b=0,i=0)}return{synthetic:u,payload:{evt:t,touch:r.event.mouse!==!0,mouse:r.event.mouse===!0,position:w,direction:e,isFirst:r.event.isFirst,isFinal:n===!0,duration:Date.now()-r.event.time,distance:{x:s,y:b},offset:{x:l,y:i},delta:{x:w.left-r.event.lastX,y:w.top-r.event.lastY}}}}let St=0;var ce=Ze({name:"touch-pan",beforeMount(t,{value:r,modifiers:n}){if(n.mouse!==!0&&I.has.touch!==!0)return;function w(l,i){n.mouse===!0&&i===!0?at(l):(n.stop===!0&&ne(l),n.prevent===!0&&we(l))}const e={uid:"qvtp_"+St++,handler:r,modifiers:n,direction:Le(n),noop:et,mouseStart(l){Oe(l,e)&&tt(l)&&(R(e,"temp",[[document,"mousemove","move","notPassiveCapture"],[document,"mouseup","end","passiveCapture"]]),e.start(l,!0))},touchStart(l){if(Oe(l,e)){const i=l.target;R(e,"temp",[[i,"touchmove","move","notPassiveCapture"],[i,"touchcancel","end","passiveCapture"],[i,"touchend","end","passiveCapture"]]),e.start(l)}},start(l,i){if(I.is.firefox===!0&&oe(t,!0),e.lastEvt=l,i===!0||n.stop===!0){if(e.direction.all!==!0&&(i!==!0||e.modifiers.mouseAllDir!==!0&&e.modifiers.mousealldir!==!0)){const v=l.type.indexOf("mouse")!==-1?new MouseEvent(l.type,l):new TouchEvent(l.type,l);l.defaultPrevented===!0&&we(v),l.cancelBubble===!0&&ne(v),Object.assign(v,{qKeyEvent:l.qKeyEvent,qClickOutside:l.qClickOutside,qAnchorHandled:l.qAnchorHandled,qClonedBy:l.qClonedBy===void 0?[e.uid]:l.qClonedBy.concat(e.uid)}),e.initialEvent={target:l.target,event:v}}ne(l)}const{left:s,top:b}=fe(l);e.event={x:s,y:b,time:Date.now(),mouse:i===!0,detected:!1,isFirst:!0,isFinal:!1,lastX:s,lastY:b}},move(l){if(e.event===void 0)return;const i=fe(l),s=i.left-e.event.x,b=i.top-e.event.y;if(s===0&&b===0)return;e.lastEvt=l;const v=e.event.mouse===!0,u=()=>{w(l,v);let p;n.preserveCursor!==!0&&n.preservecursor!==!0&&(p=document.documentElement.style.cursor||"",document.documentElement.style.cursor="grabbing"),v===!0&&document.body.classList.add("no-pointer-events--children"),document.body.classList.add("non-selectable"),yt(),e.styleCleanup=m=>{if(e.styleCleanup=void 0,p!==void 0&&(document.documentElement.style.cursor=p),document.body.classList.remove("non-selectable"),v===!0){const L=()=>{document.body.classList.remove("no-pointer-events--children")};m!==void 0?setTimeout(()=>{L(),m()},50):L()}else m!==void 0&&m()}};if(e.event.detected===!0){e.event.isFirst!==!0&&w(l,e.event.mouse);const{payload:p,synthetic:m}=de(l,e,!1);p!==void 0&&(e.handler(p)===!1?e.end(l):(e.styleCleanup===void 0&&e.event.isFirst===!0&&u(),e.event.lastX=p.position.left,e.event.lastY=p.position.top,e.event.lastDir=m===!0?void 0:p.direction,e.event.isFirst=!1));return}if(e.direction.all===!0||v===!0&&(e.modifiers.mouseAllDir===!0||e.modifiers.mousealldir===!0)){u(),e.event.detected=!0,e.move(l);return}const q=Math.abs(s),_=Math.abs(b);q!==_&&(e.direction.horizontal===!0&&q>_||e.direction.vertical===!0&&q<_||e.direction.up===!0&&q<_&&b<0||e.direction.down===!0&&q<_&&b>0||e.direction.left===!0&&q>_&&s<0||e.direction.right===!0&&q>_&&s>0?(e.event.detected=!0,e.move(l)):e.end(l,!0))},end(l,i){if(e.event!==void 0){if(ie(e,"temp"),I.is.firefox===!0&&oe(t,!1),i===!0)e.styleCleanup!==void 0&&e.styleCleanup(),e.event.detected!==!0&&e.initialEvent!==void 0&&e.initialEvent.target.dispatchEvent(e.initialEvent.event);else if(e.event.detected===!0){e.event.isFirst===!0&&e.handler(de(l===void 0?e.lastEvt:l,e).payload);const{payload:s}=de(l===void 0?e.lastEvt:l,e,!0),b=()=>{e.handler(s)};e.styleCleanup!==void 0?e.styleCleanup(b):b()}e.event=void 0,e.initialEvent=void 0,e.lastEvt=void 0}}};if(t.__qtouchpan=e,n.mouse===!0){const l=n.mouseCapture===!0||n.mousecapture===!0?"Capture":"";R(e,"main",[[t,"mousedown","mouseStart",`passive${l}`]])}I.has.touch===!0&&R(e,"main",[[t,"touchstart","touchStart",`passive${n.capture===!0?"Capture":""}`],[t,"touchmove","noop","notPassiveCapture"]])},updated(t,r){const n=t.__qtouchpan;n!==void 0&&(r.oldValue!==r.value&&(typeof value!="function"&&n.end(),n.handler=r.value),n.direction=Le(r.modifiers))},beforeUnmount(t){const r=t.__qtouchpan;r!==void 0&&(r.event!==void 0&&r.end(),ie(r,"main"),ie(r,"temp"),I.is.firefox===!0&&oe(t,!1),r.styleCleanup!==void 0&&r.styleCleanup(),delete t.__qtouchpan)}});const Se=150;var $t=ve({name:"QDrawer",inheritAttrs:!1,props:{...lt,...rt,side:{type:String,default:"left",validator:t=>["left","right"].includes(t)},width:{type:Number,default:300},mini:Boolean,miniToOverlay:Boolean,miniWidth:{type:Number,default:57},noMiniAnimation:Boolean,breakpoint:{type:Number,default:1023},showIfAbove:Boolean,behavior:{type:String,validator:t=>["default","desktop","mobile"].includes(t),default:"default"},bordered:Boolean,elevated:Boolean,overlay:Boolean,persistent:Boolean,noSwipeOpen:Boolean,noSwipeClose:Boolean,noSwipeBackdrop:Boolean},emits:[...ut,"onLayout","miniState"],setup(t,{slots:r,emit:n,attrs:w}){const e=Me(),{proxy:{$q:l}}=e,i=ot(t,l),{preventBodyScroll:s}=ct(),{registerTimeout:b,removeTimeout:v}=nt(),u=Te(Qe,V);if(u===V)return console.error("QDrawer needs to be child of QLayout"),V;let q,_=null,p;const m=D(t.behavior==="mobile"||t.behavior!=="desktop"&&u.totalWidth.value<=t.breakpoint),L=h(()=>t.mini===!0&&m.value!==!0),C=h(()=>L.value===!0?t.miniWidth:t.width),y=D(t.showIfAbove===!0&&m.value===!1?!0:t.modelValue===!0),d=h(()=>t.persistent!==!0&&(m.value===!0||Ve.value===!0));function B(a,c){if(ze(),a!==!1&&u.animate(),x(0),m.value===!0){const k=u.instances[U.value];k!==void 0&&k.belowBreakpoint===!0&&k.hide(!1),$(1),u.isContainer.value!==!0&&s(!0)}else $(0),a!==!1&&le(!1);b(()=>{a!==!1&&le(!0),c!==!0&&n("show",a)},Se)}function he(a,c){Pe(),a!==!1&&u.animate(),$(0),x(z.value*C.value),re(),c!==!0?b(()=>{n("hide",a)},Se):v()}const{show:J,hide:A}=it({showing:y,hideOnRouteChange:d,handleShow:B,handleHide:he}),{addToHistory:ze,removeFromHistory:Pe}=st(y,A,d),X={belowBreakpoint:m,hide:A},S=h(()=>t.side==="right"),z=h(()=>(l.lang.rtl===!0?-1:1)*(S.value===!0?1:-1)),pe=D(0),P=D(!1),Z=D(!1),ye=D(C.value*z.value),U=h(()=>S.value===!0?"left":"right"),ee=h(()=>y.value===!0&&m.value===!1&&t.overlay===!1?t.miniToOverlay===!0?t.miniWidth:C.value:0),te=h(()=>t.overlay===!0||t.miniToOverlay===!0||u.view.value.indexOf(S.value?"R":"L")!==-1||l.platform.is.ios===!0&&u.isContainer.value===!0),F=h(()=>t.overlay===!1&&y.value===!0&&m.value===!1),Ve=h(()=>t.overlay===!0&&y.value===!0&&m.value===!1),Ae=h(()=>"fullscreen q-drawer__backdrop"+(y.value===!1&&P.value===!1?" hidden":"")),Fe=h(()=>({backgroundColor:`rgba(0,0,0,${pe.value*.4})`})),be=h(()=>S.value===!0?u.rows.value.top[2]==="r":u.rows.value.top[0]==="l"),Ie=h(()=>S.value===!0?u.rows.value.bottom[2]==="r":u.rows.value.bottom[0]==="l"),He=h(()=>{const a={};return u.header.space===!0&&be.value===!1&&(te.value===!0?a.top=`${u.header.offset}px`:u.header.space===!0&&(a.top=`${u.header.size}px`)),u.footer.space===!0&&Ie.value===!1&&(te.value===!0?a.bottom=`${u.footer.offset}px`:u.footer.space===!0&&(a.bottom=`${u.footer.size}px`)),a}),We=h(()=>{const a={width:`${C.value}px`,transform:`translateX(${ye.value}px)`};return m.value===!0?a:Object.assign(a,He.value)}),Ne=h(()=>"q-drawer__content fit "+(u.isContainer.value!==!0?"scroll":"overflow-auto")),Xe=h(()=>`q-drawer q-drawer--${t.side}`+(Z.value===!0?" q-drawer--mini-animate":"")+(t.bordered===!0?" q-drawer--bordered":"")+(i.value===!0?" q-drawer--dark q-dark":"")+(P.value===!0?" no-transition":y.value===!0?"":" q-layout--prevent-focus")+(m.value===!0?" fixed q-drawer--on-top q-drawer--mobile q-drawer--top-padding":` q-drawer--${L.value===!0?"mini":"standard"}`+(te.value===!0||F.value!==!0?" fixed":"")+(t.overlay===!0||t.miniToOverlay===!0?" q-drawer--on-top":"")+(be.value===!0?" q-drawer--top-padding":""))),Ue=h(()=>{const a=l.lang.rtl===!0?t.side:U.value;return[[ce,Ke,void 0,{[a]:!0,mouse:!0}]]}),Ye=h(()=>{const a=l.lang.rtl===!0?U.value:t.side;return[[ce,ge,void 0,{[a]:!0,mouse:!0}]]}),Re=h(()=>{const a=l.lang.rtl===!0?U.value:t.side;return[[ce,ge,void 0,{[a]:!0,mouse:!0,mouseAllDir:!0}]]});function ae(){Ge(m,t.behavior==="mobile"||t.behavior!=="desktop"&&u.totalWidth.value<=t.breakpoint)}g(m,a=>{a===!0?(q=y.value,y.value===!0&&A(!1)):t.overlay===!1&&t.behavior!=="mobile"&&q!==!1&&(y.value===!0?(x(0),$(0),re()):J(!1))}),g(()=>t.side,(a,c)=>{u.instances[c]===X&&(u.instances[c]=void 0,u[c].space=!1,u[c].offset=0),u.instances[a]=X,u[a].size=C.value,u[a].space=F.value,u[a].offset=ee.value}),g(u.totalWidth,()=>{(u.isContainer.value===!0||document.qScrollPrevented!==!0)&&ae()}),g(()=>t.behavior+t.breakpoint,ae),g(u.isContainer,a=>{y.value===!0&&s(a!==!0),a===!0&&ae()}),g(u.scrollbarWidth,()=>{x(y.value===!0?0:void 0)}),g(ee,a=>{T("offset",a)}),g(F,a=>{n("onLayout",a),T("space",a)}),g(S,()=>{x()}),g(C,a=>{x(),ue(t.miniToOverlay,a)}),g(()=>t.miniToOverlay,a=>{ue(a,C.value)}),g(()=>l.lang.rtl,()=>{x()}),g(()=>t.mini,()=>{t.noMiniAnimation||t.modelValue===!0&&(je(),u.animate())}),g(L,a=>{n("miniState",a)});function x(a){a===void 0?_e(()=>{a=y.value===!0?0:C.value,x(z.value*a)}):(u.isContainer.value===!0&&S.value===!0&&(m.value===!0||Math.abs(a)===C.value)&&(a+=z.value*u.scrollbarWidth.value),ye.value=a)}function $(a){pe.value=a}function le(a){const c=a===!0?"remove":u.isContainer.value!==!0?"add":"";c!==""&&document.body.classList[c]("q-body--drawer-toggle")}function je(){_!==null&&clearTimeout(_),e.proxy&&e.proxy.$el&&e.proxy.$el.classList.add("q-drawer--mini-animate"),Z.value=!0,_=setTimeout(()=>{_=null,Z.value=!1,e&&e.proxy&&e.proxy.$el&&e.proxy.$el.classList.remove("q-drawer--mini-animate")},150)}function Ke(a){if(y.value!==!1)return;const c=C.value,k=G(a.distance.x,0,c);if(a.isFinal===!0){k>=Math.min(75,c)===!0?J():(u.animate(),$(0),x(z.value*c)),P.value=!1;return}x((l.lang.rtl===!0?S.value!==!0:S.value)?Math.max(c-k,0):Math.min(0,k-c)),$(G(k/c,0,1)),a.isFirst===!0&&(P.value=!0)}function ge(a){if(y.value!==!0)return;const c=C.value,k=a.direction===t.side,Y=(l.lang.rtl===!0?k!==!0:k)?G(a.distance.x,0,c):0;if(a.isFinal===!0){Math.abs(Y)<Math.min(75,c)===!0?(u.animate(),$(1),x(0)):A(),P.value=!1;return}x(z.value*Y),$(G(1-Y/c,0,1)),a.isFirst===!0&&(P.value=!0)}function re(){s(!1),le(!0)}function T(a,c){u.update(t.side,a,c)}function Ge(a,c){a.value!==c&&(a.value=c)}function ue(a,c){T("size",a===!0?t.miniWidth:c)}return u.instances[t.side]=X,ue(t.miniToOverlay,C.value),T("space",F.value),T("offset",ee.value),t.showIfAbove===!0&&t.modelValue!==!0&&y.value===!0&&t["onUpdate:modelValue"]!==void 0&&n("update:modelValue",!0),dt(()=>{n("onLayout",F.value),n("miniState",L.value),q=t.showIfAbove===!0;const a=()=>{(y.value===!0?B:he)(!1,!0)};if(u.totalWidth.value!==0){_e(a);return}p=g(u.totalWidth,()=>{p(),p=void 0,y.value===!1&&t.showIfAbove===!0&&m.value===!1?J(!1):a()})}),De(()=>{p!==void 0&&p(),_!==null&&(clearTimeout(_),_=null),y.value===!0&&re(),u.instances[t.side]===X&&(u.instances[t.side]=void 0,T("size",0),T("offset",0),T("space",!1))}),()=>{const a=[];m.value===!0&&(t.noSwipeOpen===!1&&a.push(Ee(M("div",{key:"open",class:`q-drawer__opener fixed-${t.side}`,"aria-hidden":"true"}),Ue.value)),a.push(Ce("div",{ref:"backdrop",class:Ae.value,style:Fe.value,"aria-hidden":"true",onClick:A},void 0,"backdrop",t.noSwipeBackdrop!==!0&&y.value===!0,()=>Re.value)));const c=L.value===!0&&r.mini!==void 0,k=[M("div",{...w,key:""+c,class:[Ne.value,w.class]},c===!0?r.mini():$e(r.default))];return t.elevated===!0&&y.value===!0&&k.push(M("div",{class:"q-layout__shadow absolute-full overflow-hidden no-pointer-events"})),a.push(Ce("aside",{ref:"content",class:Xe.value,style:We.value},k,"contentclose",t.noSwipeClose!==!0&&m.value===!0,()=>Ye.value)),M("div",{class:"q-drawer-container"},a)}}});const Tt={name:"MainLayout",data(){return{leftDrawerOpen:!1,linksList:[{title:"Principal",icon:"home",link:"/"},{title:"Usuarios",icon:"people",link:"/usuarios"},{title:"Gestion",icon:"settings",link:"/gestion"},{title:"Almacen",icon:"store",link:"/almacen"},{title:"Poa",icon:"assignment",link:"/poa"}]}},methods:{logout(){this.$alert.dialog("\xBFDesea salir del sistema?").onOk(()=>{this.$store.isLogged=!1,this.$store.user={},localStorage.removeItem("tokenEducation"),this.$router.push("/login")})},toggleLeftDrawer(){this.leftDrawerOpen=!this.leftDrawerOpen}},computed:{rutaActual(){return this.$route.path}}},Dt={class:"text-bold"};function Mt(t,r,n,w,e,l){const i=vt("router-view");return j(),se(Ct,{view:"hHh Lpr lFf"},{default:f(()=>[o(Bt,{class:"bg-white text-primary",bordered:""},{default:f(()=>[o(wt,null,{default:f(()=>[o(K,{flat:"",dense:"",round:"",icon:"menu","aria-label":"Menu",onClick:l.toggleLeftDrawer},null,8,["onClick"]),o(xt,null,{default:f(()=>[o(K,{"no-caps":"",flat:"",dense:"",round:"",icon:"o_search"})]),_:1}),ke("div",null,[o(bt,{flat:""},{default:f(()=>[o(K,{"no-caps":"",icon:"o_notifications"}),o(K,{"no-caps":"",icon:"o_account_circle"},{default:f(()=>[o(gt,null,{default:f(()=>[o(Be,null,{default:f(()=>[o(N,{clickable:""},{default:f(()=>[o(O,{avatar:""},{default:f(()=>[o(H,{name:"account_circle"})]),_:1}),o(O,null,{default:f(()=>[o(E,null,{default:f(()=>[Q(W(t.$store.user.name),1)]),_:1}),o(E,{caption:""},{default:f(()=>[Q(W(t.$store.user.role),1)]),_:1})]),_:1})]),_:1}),o(qe),Ee((j(),se(N,{clickable:"",onClick:l.logout},{default:f(()=>[o(O,{avatar:""},{default:f(()=>[o(H,{name:"exit_to_app"})]),_:1}),o(O,null,{default:f(()=>[o(E,null,{default:f(()=>r[1]||(r[1]=[Q("Salir")])),_:1})]),_:1})]),_:1},8,["onClick"])),[[qt]])]),_:1})]),_:1})]),_:1})]),_:1})])]),_:1})]),_:1}),o($t,{modelValue:e.leftDrawerOpen,"onUpdate:modelValue":r[0]||(r[0]=s=>e.leftDrawerOpen=s),"show-if-above":"",width:200,breakpoint:500,class:"bg-primary text-white"},{default:f(()=>[o(Be,null,{default:f(()=>[o(N,null,{default:f(()=>[o(O,{avatar:""},{default:f(()=>[o(H,{name:"account_circle"})]),_:1}),o(O,null,{default:f(()=>[o(E,null,{default:f(()=>[Q(W(t.$store.user.name)+" ",1),ke("span",Dt,W(t.$store.user.role),1)]),_:1})]),_:1})]),_:1}),o(qe,{class:"bg-white",inset:""}),o(E,{header:"",class:"text-white"},{default:f(()=>r[2]||(r[2]=[Q(" Opciones ")])),_:1}),(j(!0),mt(pt,null,ht(e.linksList,s=>(j(),se(N,{key:s.title,clickable:"",to:s.link,exact:"",class:"text-grey","active-class":"menu"},{default:f(()=>[o(O,{avatar:""},{default:f(()=>[o(H,{name:t.$route.path===s.link?"o_"+s.icon:s.icon,class:xe(t.$route.path===s.link?"text-white":"")},null,8,["name","class"])]),_:2},1024),o(O,null,{default:f(()=>[o(E,{class:xe(t.$route.path===s.link?"text-white text-bold":"")},{default:f(()=>[Q(W(s.title),1)]),_:2},1032,["class"])]),_:2},1024)]),_:2},1032,["to"]))),128)),o(N,{clickable:"",class:"text-red",onClick:l.logout},{default:f(()=>[o(O,{avatar:""},{default:f(()=>[o(H,{name:"exit_to_app"})]),_:1}),o(O,null,{default:f(()=>[o(E,null,{default:f(()=>r[3]||(r[3]=[Q("Salir")])),_:1})]),_:1})]),_:1},8,["onClick"])]),_:1})]),_:1},8,["modelValue"]),o(kt,{class:"bg-grey-3"},{default:f(()=>[o(i)]),_:1})]),_:1})}var Ft=ft(Tt,[["render",Mt]]);export{Ft as default};