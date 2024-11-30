import{c as F,h as C,r as q,ao as I,aH as A,aI as Q,H as B,d as R,g as V,b5 as j,y as g,I as D,al as H,b6 as O}from"./index.97c990ed.js";var K=F({name:"QSpace",setup(){const n=C("div",{class:"q-space"});return()=>n}}),M=F({name:"QForm",props:{autofocus:Boolean,noErrorFocus:Boolean,noResetFocus:Boolean,greedy:Boolean,onSubmit:Function},emits:["reset","validationSuccess","validationError"],setup(n,{slots:E,emit:f}){const P=V(),u=q(null);let i=0;const s=[];function d(e){const r=typeof e=="boolean"?e:n.noErrorFocus!==!0,l=++i,p=(t,o)=>{f(`validation${t===!0?"Success":"Error"}`,o)},x=t=>{const o=t.validate();return typeof o.then=="function"?o.then(a=>({valid:a,comp:t}),a=>({valid:!1,comp:t,err:a})):Promise.resolve({valid:o,comp:t})};return(n.greedy===!0?Promise.all(s.map(x)).then(t=>t.filter(o=>o.valid!==!0)):s.reduce((t,o)=>t.then(()=>x(o).then(a=>{if(a.valid===!1)return Promise.reject(a)})),Promise.resolve()).catch(t=>[t])).then(t=>{if(t===void 0||t.length===0)return l===i&&p(!0),!0;if(l===i){const{comp:o,err:a}=t[0];if(a!==void 0&&console.error(a),p(!1,o),r===!0){const h=t.find(({comp:S})=>typeof S.focus=="function"&&j(S.$)===!1);h!==void 0&&h.comp.focus()}}return!1})}function v(){i++,s.forEach(e=>{typeof e.resetValidation=="function"&&e.resetValidation()})}function m(e){e!==void 0&&g(e);const r=i+1;d().then(l=>{r===i&&l===!0&&(n.onSubmit!==void 0?f("submit",e):e!==void 0&&e.target!==void 0&&typeof e.target.submit=="function"&&e.target.submit())})}function b(e){e!==void 0&&g(e),f("reset"),D(()=>{v(),n.autofocus===!0&&n.noResetFocus!==!0&&c()})}function c(){H(()=>{if(u.value===null)return;const e=u.value.querySelector("[autofocus][tabindex], [data-autofocus][tabindex]")||u.value.querySelector("[autofocus] [tabindex], [data-autofocus] [tabindex]")||u.value.querySelector("[autofocus], [data-autofocus]")||Array.prototype.find.call(u.value.querySelectorAll("[tabindex]"),r=>r.tabIndex!==-1);e!=null&&e.focus({preventScroll:!0})})}I(O,{bindComponent(e){s.push(e)},unbindComponent(e){const r=s.indexOf(e);r!==-1&&s.splice(r,1)}});let y=!1;return A(()=>{y=!0}),Q(()=>{y===!0&&n.autofocus===!0&&c()}),B(()=>{n.autofocus===!0&&c()}),Object.assign(P.proxy,{validate:d,resetValidation:v,submit:m,reset:b,focus:c,getValidationComponents:()=>s}),()=>C("form",{class:"q-form",ref:u,onSubmit:m,onReset:b},R(E.default))}});export{K as Q,M as a};