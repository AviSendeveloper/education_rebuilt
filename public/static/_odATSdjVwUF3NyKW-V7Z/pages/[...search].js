(window.webpackJsonp=window.webpackJsonp||[]).push([[18,30],{"/gfZ":function(e,t,n){"use strict";n.r(t),n.d(t,"default",(function(){return Me}));var a=n("o0o1"),r=n.n(a),l=n("q1tI"),i=n.n(l),c=n("nOHt"),o=n("tXcZ"),s=n("GEyG"),u=n("iuhU"),d=n("ZMKu"),p=n("WU0k"),m=n.n(p),f=i.a.createElement;var v=function(e){var t=e.title,n=e.children;return f("div",{className:Object(u.a)(m.a.root,"typography-small")},f("div",{className:m.a.wrapper},f(d.a,{exitBeforeEnter:!0,initial:!1},f(d.b.h1,{key:t,className:m.a.title,initial:{y:50,opacity:0},animate:{y:0,opacity:1},exit:{y:-50,opacity:0},transition:{duration:.2}},t))),n)},h=n("KQm4"),g=n("KDD8"),b=(n("m598"),n("RUI9")),y=n.n(b),N=i.a.createElement,k={exit:{transition:{staggerChildren:.02,staggerDirection:-1}}},O={initial:{scale:.96,y:30,opacity:0},enter:{scale:1,y:0,opacity:1,transition:{duration:.5,ease:[.48,.15,.25,.96]}},exit:{scale:.6,y:100,opacity:0,transition:{duration:.2,ease:[.48,.15,.25,.96]}}};function j(e){var t=e.results,n=void 0===t?[]:t,a=e.selected,r=e.handleSelected,l=e.setShowOnlySelected,o=Object(c.useRouter)(),p=n.map((function(e,t){var n="".concat(e.type,":").concat(e.id),l=Object(u.a)(y.a.result,e.type,{"premium-only":e.premium}),i=1===t,c=N(s.f,{checked:-1!==a.indexOf(e),onChange:function(t){var n=a.slice();if(t){if(a.length>=50)return void alert("Cannot select over 50!");n.push(e),r([].concat(Object(h.a)(a),[e]))}else{for(var l=0;l<n.length;l++)n[l].id===e.id&&n.splice(l,1);r(n)}},onClick:function(e){e.stopPropagation()}}),o=-1===a.indexOf(e)?"":"selected";return N(d.b.div,{key:n,whileTap:{scale:.95},variants:O,className:l},N("div",{className:i?y.a.contentCardWrapperForTooltip:""},i&&N(s.w,{text:"Click the checkbox for the options to print and add to Assignments and Collections.",localStorageKey:"haveShownSelectTooltip",hideAfterInMilliseconds:9500,style:{container:"ttContainer",box:"ttBox",triangle:"ttTriangle"}}),N(g.a,{href:e.url},N(s.e,{id:e.id,type:e.type,title:e.title,description:e.description,href:e.url,grade:e.grade,subject:e.subject,isPremium:e.premium,isEL:e.el,isNew:e.new,isAdminOnly:!1,withinGrid:!0,className:o},e.thumbnail&&N(s.n,{src:e.thumbnail}),c))))}));if(!n.length)return N(i.a.Fragment,null,N("h2",null,"Sorry, no results match your search."),"You can ",N(g.a,{href:"/resources/"},"remove all filters")," and try again.");var m=a===n?N("div",{className:y.a.viewAll,onClick:function(){l(!1)}},"Back to View All"):"";return N(d.a,{exitBeforeEnter:!0,initial:!1},N(d.b.div,{key:o.asPath,className:y.a.list,initial:"initial",animate:"enter",exit:"exit",variants:k},m,p))}var w=n("MidP"),x=n.n(w),S=i.a.createElement;var C=function(e){var t=e.children;return S("div",{className:Object(u.a)("page-width",x.a.root)},t)},E=n("Baq9"),T=n.n(E),F=i.a.createElement;var P=function(e){var t=e.children,n=e.title,a=e.description;return F(i.a.Fragment,null,(a||t)&&n&&F("h3",{className:T.a.title},n),a&&F("div",{className:T.a.description,dangerouslySetInnerHTML:{__html:a}}),t)},L=i.a.createElement,A=function(e){var t=e.suggestions,n=e.onClick;return t.length?L("div",{className:"did-you-mean"},L("span",null,"Did you mean: "),t.map((function(e,t){return L("strong",{key:e},t>0?", ":"",L("a",{onClick:function(){return n(e)}},e))}))):null},I=(n("P1o4"),n("uY55")),R=n.n(I),q=i.a.createElement;var U=function(e){var t=e.title,n=e.children,a=i.a.Children.count(n);return q("div",{className:R.a.root},q("h4",{className:R.a.title},t,": "),i.a.Children.map(n,(function(e,t){return q(i.a.Fragment,null,e,t<a-1&&", ")})))},D=n("2KTk"),M=n.n(D),_=i.a.createElement;function B(e){var t=e.filters,n=e.clickFilterChip,a=t.map((function(e,t){var a="q"!==e.group?"Remove filter: ".concat(e.display.toUpperCase()):"Remove search term",r=e.display;return _("div",{className:M.a.chip,title:a,onClick:function(){return n(e.href)},key:"remove-filter-".concat(t),role:"link"},r,_(s.m,{name:"cancel-circled"}))}));return _(i.a.Fragment,null,a)}var W=n("ODXe"),z=n("eTwv"),K=n.n(z),H=i.a.createElement,G={popularity:"Popularity",dateCreated:"Most Recent",title:"Title",relevance:"Relevance"};function V(e){var t=e.selectedSort,n=void 0===t?"popularity":t,a=e.clickSort;return H("div",{className:K.a.controls},H("div",{className:K.a.sortByWrapper},H("div",{className:K.a.sortBy},H("span",{className:K.a.text},"Sort by"),H("select",{className:K.a.select,"aria-label":"sort by",value:n,onChange:function(e){"function"===typeof a&&a(e.target.value)}},Object.entries(G).map((function(e,t){var n=Object(W.a)(e,2),a=n[0],r=n[1];return H("option",{value:a,key:"sort-by-option-".concat(t)},r)}))))))}var Z=n("L6pY"),X=n("2Vvm"),Y=n("jWxZ"),J=n("5Hjz"),Q=n("a6RD"),$=n.n(Q),ee=n("9kC7"),te=n.n(ee),ne=n("XelY"),ae=i.a.createElement,re=$()((function(){return Promise.all([n.e(1),n.e(8),n.e(12),n.e(0)]).then(n.bind(null,"anq9"))}),{ssr:!1,loadableGenerated:{webpack:function(){return["anq9"]},modules:["../../AssignmentsModal"]}});function le(e){var t=e.selected,n=Object(l.useContext)(J.c),a=n.isPremium,r=n.memberId,i=n.ready,c=Object(l.useContext)(Z.b),o=c.setModalIsOpen,u=c.setSelectedContent,d=Object(l.useState)(!1),p=d[0],m=d[1],f=Object(l.useState)([]),v=f[0],h=f[1],g=function(e){switch(e){case"print-all":!function(){if(i)if(a){var e=[],n=["worksheet"];if(t.forEach((function(t){n.includes(t.type)&&e.push({type:t.type,id:String(t.id)})})),e.length>0){for(var l="/api/collections/printContent?content=",c=0;c<e.length;c++)l+=e[c].type+"|"+e[c].id+",";window.open(l,"_blank"),Object(ne.a)("Downloaded Set",{section:"Search Results Page",count:t.filter((function(e){return"worksheet"===e.type})).length})}else alert("Nothing is printable in your selected contents!")}else r?Object(X.a)({cid:null,title:"Unlock Print All",text:"Print All is available to Premium members only. Upgrade to unlock the feature."}):Object(Y.b)("print-all")}();break;case"add-to-collection":o(!0),u(t);break;case"add-to-assignment":!function(){if(i)if(a){var e=[],n=["game","song","story","worksheet"];t.forEach((function(t){"guided-lesson"===t.type&&t.meta.exercises?t.meta.exercises.forEach((function(t){e.push({type:"exercise",internalName:t})})):n.includes(t.type)&&e.push({type:"worksheet"!==t.type?"exercise":"worksheet",internalName:String(t.id)})})),0===e.length?alert("Nothing is assignable in your selected contents!"):(m(!0),h(e))}else r?Object(X.a)({cid:null,title:"Unlock Assignments",text:"Assignments are available to Premium members only. Upgrade to assign worksheets, games, and more to your child."}):Object(Y.b)("assign")}()}document.querySelectorAll("#ms-actions option")[0].selected=!0};return ae("div",{className:te.a.multiSelectionActions},ae(s.w,{text:"Click here for printing, Assignments, and Collections.",localStorageKey:"haveShownActionsTooltip",hideAfterInMilliseconds:9500,style:{container:te.a.ttContainer,box:te.a.ttBox,triangle:te.a.ttTriangle}}),ae("div",{className:"form sorting-options"},ae("div",{className:"input-row"},ae("select",{id:"ms-actions",className:"select-value ms-actions",style:{border:"3px solid #5672c4",height:"40px",boxShadow:"0 1px 3px 0 rgba(0, 0, 0, 0.12), 0 1px 2px 0 rgba(0, 0, 0, 0.24)"},onChange:function(e){g(e.target.value)}},ae("option",null,"Actions"),ae("option",{value:"print-all"},"Print All"),ae("option",{value:"add-to-assignment"},"Add to Assignment"),ae("option",{value:"add-to-collection"},"Add to Collection")))),ae(re,{onClose:function(){return m(!1)},isOpen:p,itemsToAdd:v}))}var ie=n("F8O3"),ce=n("Q+Hg"),oe=n.n(ce),se=i.a.createElement;function ue(e){var t=e.selected,n=e.unSelect,a=t.length>1?"s":"",r=t.length+" selection"+a;return se("div",{className:Object(u.a)(M.a.chip,M.a.selected),title:"Un-selected",onClick:function(){n([])},role:"link"},r,se(s.m,{name:"cancel-circled"}))}var de=n("rePB"),pe=n("QHaV"),me=n.n(pe),fe=n("jCCm"),ve=n.n(fe),he=n("ht7d"),ge=n.n(he),be=i.a.createElement;function ye(e){var t=e.selected,n=e.unSelect,a=e.showOnlySelected,r=e.setShowOnlySelected,l=t.length>1?"s":"",i=t.length+" selection"+l,c=a?"View all":"View "+i,o=t?"cancel-circled":null,d=t?me.a.removeIcon:null,p=Object(u.a)(ve.a.link,ve.a.selection,Object(de.a)({},ve.a.selected,t));return be("div",{className:Object(u.a)(me.a.searchFilter)},be("ul",{className:Object(u.a)(ge.a.facets,ge.a.topLevel)},be("li",{className:ve.a.facet},be("div",{className:p,role:"link",title:"Un-selected",tabIndex:"0"},be(s.m,{name:o,className:Object(u.a)(ve.a.icon,d),onClick:function(){n([])}}),t.length," selected")),be("li",{className:ve.a.facet},be("a",{className:"Facet-module_link",onClick:function(){return r(!a)}},c))))}var Ne=i.a.createElement,ke=function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:[];return e.filter((function(e){return"contentType"!==e.group}))};function Oe(e){var t=e.total,n=void 0===t?0:t,a=e.allFacets,c=void 0===a?[]:a,o=e.filter,d=e.currentFilters,p=e.urlPath,m=e.onFilter,f=e.selected,v=void 0===f?[]:f,h=e.unSelect,g=e.showOnlySelected,b=e.setShowOnlySelected,y=Object(l.useState)(!1),N=y[0],k=y[1],O=function(e,t){if(1===e)return"1 result";var n=e.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g,"$1,");return t.length?"".concat(n," filtered results"):"".concat(n," results")};return Ne(i.a.Fragment,null,Ne("div",{className:Object(u.a)(oe.a.overlay,N&&oe.a.open)}),Ne("div",{className:oe.a.container},Ne(s.j,{onClick:function(){k(!N)}}),Ne("div",{className:oe.a.numberWrapperMobile},Ne("span",{className:Object(u.a)(oe.a.numberText,oe.a.numberMobile)},O(n,d))),Ne("div",{className:oe.a.topFiltersWrapper},Ne("div",{className:oe.a.topFilters},Ne("span",{className:oe.a.numberWrapper},Ne("span",{className:oe.a.numberText},O(n,d))),Ne(B,{filters:ke(d),clickFilterChip:m}),v.length>0&&Ne(ue,{selected:v,unSelect:h}))),v.length>0&&Ne(le,{selected:v}),Ne(V,{selectedSort:o.sort,clickSort:function(e){var t=Object(ie.b)(p,{sort:e});m(t)}})),Ne("div",{className:oe.a.searchFilterContainer},v.length>0&&Ne(ye,{selected:v,unSelect:h,showOnlySelected:g,setShowOnlySelected:b}),Ne(s.i,{allFacets:c,onClick:function(e,t){return r.a.async((function(n){for(;;)switch(n.prev=n.next){case 0:e.preventDefault(),m(t);case 2:case"end":return n.stop()}}))},open:N,closeFilterWrap:function(){return k(!1)},clearFilters:function(){k(!1),m("/resources/")}})))}Oe.displayName="SearchFilters";var je=Oe,we=n("27e9"),xe=n.n(we),Se=i.a.createElement,Ce=function(e){var t=e.href,n=!1===window.navigator.onLine?"Please check your internet connection and try again.":"There was an error searching. Please try again.";return Se("div",{className:xe.a.container},Se("p",{className:xe.a.error},n),Se(g.a,{href:t},Se(s.b,{color:"primary"},"Try Again")))},Ee=n("Nnvl"),Te=n.n(Ee),Fe=n("1KdK"),Pe=i.a.createElement,Le={activity:"activities","science-fair":"science projects","lesson-plans":"lesson plans","guided-lessons":"guided lessons"},Ae={contentType:"types",grade:"grades",el:"el",subject:"subjects",topic:"topics",standard:"standards"},Ie=function(e){var t,n,a=null!==(t=null!==(n=Le[e.contentType])&&void 0!==n?n:null===e||void 0===e?void 0:e.contentType)&&void 0!==t?t:"entire library";return"Search ".concat(a)},Re=function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:[];return(e=e.filter((function(e){return"contentType"===e.internalName}))).length>0?e[0].children:e},qe=function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:[];return e.filter((function(e){return"contentType"!==e.internalName}))},Ue=function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:null,t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:[],n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:"subject";if(!e||!t||0===t.length)return null;var a=t.filter((function(e){return e.internalName===n}));a=a.length>0?a[0].children:a;for(var r=[],l=0,i=Object.keys(a);l<i.length;l++){var c=i[l];r.push([a[c],a[c]])}for(var o=null;r.length>0;){var s,u;if((null===(s=(o=r.shift())[1])||void 0===s?void 0:s.urlName)===e)return o[0];(null===(u=o[1])||void 0===u?void 0:u.children)&&o[1].children.forEach((function(e){return r.push([o[0],e])}))}return null},De=null;function Me(e){var t=e.total,n=void 0===t?0:t,a=e.pages,d=void 0===a?0:a,p=e.urlPath,m=e.meta,f=e.filter,h=void 0===f?{}:f,b=e.currentFilters,y=void 0===b?[]:b,N=e.facets,k=void 0===N?[]:N,O=e.results,w=void 0===O?[]:O,x=e.suggestions,S=void 0===x?[]:x,E=e.replaceUrl,T=void 0!==E&&E,F=e.error,L=void 0!==F&&F,I=Object(c.useRouter)(),R=I.asPath,q=Object(l.useState)([]),D=q[0],M=q[1],_=Object(l.useState)(!1),B=_[0],W=_[1],z=Object(l.useRef)(null),K=function(e){0===e.length&&W(!1),M(e)};i.a.useEffect((function(){T&&I.replace("/[...search]",p),K(D),W(!1)}),[T,R]),i.a.useEffect((function(){if(!L&&!T){var e=De;if(De=null,"pagination"!==e){if(!e){var t=location.search.match(/[?&]cid=([0-9.]+)/);e="11.74"===(t=t?t[1]:null)?"topnav":"11.75"===t?"emphasized-topnav":"pageview"}var a={nextjs:!0,num_results:n,didyoumean:!!S.length,trigger:e,q:h.q,page:h.page,sort:h.sort};k.forEach((function(e){var t=e.internalName;h[t]?a[Ae[t]]=JSON.stringify([h[t]]):a[Ae[t]]="[]"})),Object(ne.a)("Search",a)}}}),[p,n,S,h]);var H=function(e,t){return r.a.async((function(n){for(;;)switch(n.prev=n.next){case 0:return e.preventDefault(),De="filter",n.next=4,r.a.awrap(Object(g.b)(I,t));case 4:case"end":return n.stop()}}))},G=Re(k),V=B?D:w,X=B?1:d;return Pe("div",null,Pe(o.a,{description:m.metaDescription,index:m.index,path:p},Pe("title",null,m.metaTitle),1*h.page===2&&Pe("link",{rel:"prev",href:Object(ie.b)(p,{page:null})}),h.page>2&&Pe("link",{rel:"prev",href:Object(ie.b)(p,{page:h.page-1})}),h.page<X&&Pe("link",{rel:"next",href:Object(ie.b)(p,{page:1*h.page+1})})),Pe("div",{id:"unified-search-results",ref:z},Pe("div",{className:Te.a.searchResults},Pe(v,{title:m.title,contextualLinksTitle:m.contextualLinksTitle||"",contextualLinks:m.contextualLinks||[]},Pe(s.t,{className:Te.a.search,title:m.title,onSubmit:function(e){var t;return r.a.async((function(n){for(;;)switch(n.prev=n.next){case 0:return t=Object(ie.b)(p,{q:e}),De="autocomplete",n.next=4,r.a.awrap(Object(g.b)(I,t));case 4:case"end":return n.stop()}}))},placeholder:Ie(h)}),m.contextualLinks&&m.contextualLinks.length>0&&Pe(U,{title:m.contextualLinksTitle},m.contextualLinks.map((function(e){return Pe(g.a,{href:e.url,key:e.url},e.title)})))),Pe("div",{className:Te.a.tabs,role:"navigation"},Pe(s.l,{max:5},G.map((function(e){return Pe(s.u,{key:e.display,href:e.href,selected:e.selected,disabled:e.disabled,onClick:H},e.display)})))),Pe(Z.a,null,!L&&Pe(je,{total:n,allFacets:qe(k),filter:h,currentFilters:y,urlPath:p,onFilter:function(e){return r.a.async((function(t){for(;;)switch(t.prev=t.next){case 0:if(null!=e){t.next=2;break}return t.abrupt("return");case 2:return e=Object(ie.b)(e,{page:null}),De="filter",t.next=6,r.a.awrap(Object(g.b)(I,e));case 6:case"end":return t.stop()}}))},selected:D,unSelect:K,showOnlySelected:B,setShowOnlySelected:W}),Pe("div",{className:Object(u.a)(Te.a.results,L&&Te.a.hasError)},L&&Pe(Ce,{href:p}),Pe(A,{suggestions:S,onClick:function(e){var t;return r.a.async((function(n){for(;;)switch(n.prev=n.next){case 0:return t=Object(ie.b)(p,{q:e}),De="didyoumean",n.next=4,r.a.awrap(Object(g.b)(I,t));case 4:case"end":return n.stop()}}))}}),!L&&Pe(j,{results:V,selected:D,handleSelected:K,setShowOnlySelected:W}),!L&&Pe(s.s,{pages:X,current:parseInt(h.page),generateUrl:function(e){return Object(ie.b)(p,{page:e>1?e:null})},onClick:function(e,t){e.preventDefault();var n=Object(ie.b)(p,{page:parseInt(t)});De="pagination",Object(g.b)(I,n).then(),null!=z.current&&z.current.scrollIntoView({behavior:"smooth"})}}))),Pe("div",{className:Te.a.clear}),Pe(C,null,Pe(P,{title:m.title,description:m.description}),Pe(P,{title:m.bottomTitle,description:m.bottomDescription})))),Pe(Fe.a,null,Pe("a",{href:"/secure/meta/searchpage.php?url=".concat(p),target:"_blank"},"Edit Meta Info"),Pe("a",{href:"/secure/export-srp.php?path=".concat(p),target:"_blank"},"Export Table")))}Me.getInitialProps=function(e){var t,n,a,l,i,c,o,s,u,d,p,m,f,v,h,g,b,y,N,k;return r.a.async((function(O){for(;;)switch(O.prev=O.next){case 0:if(u=e.asPath,d=e.req,p=e.res,f=u.replace(/^[^?]+[?]?/,"").split("&").filter((function(e){return e.match(/^(page|sort|q|facets(\[|%5B)(types|grades)(\]|%5D))=/)})).join("&"),v=u.replace(/\?.*$/,""),f.length&&(v+="?"+decodeURIComponent(f)),O.prev=4,void 0===d){O.next=17;break}return O.next=8,r.a.awrap(Object(ie.a)(d).search(v,!0));case 8:if(!("redirect"in(m=O.sent))){O.next=15;break}return h=m.redirect,g=[],Object.keys(d.query).forEach((function(e){e.match(/^(cid$|utm_)/)&&d.query[e]&&g.push(e+"="+d.query[e])})),g.length&&(h+=(h.match(/\?/)?"&":"?")+g.join("&")),O.abrupt("return",p.redirect(301,h));case 15:O.next=21;break;case 17:return O.next=19,r.a.awrap(Object(ie.a)().search(v));case 19:(m=O.sent).redirect&&(m=Object.assign({},m,{replaceUrl:!0}));case 21:O.next=27;break;case 23:O.prev=23,O.t0=O.catch(4),console.error(O.t0),m={urlPath:v,meta:{title:"Search Our Content Library",metaTitle:"Learning Library"},error:!0};case 27:return m.navProps={page:"search",withSubNav:!1},b=null,(null===(t=m)||void 0===t?void 0:null===(n=t.filter)||void 0===n?void 0:n.contentType)&&(b=Re(null===(y=m)||void 0===y?void 0:y.facets).filter((function(e){return e.urlName===m.filter.contentType})),b=null===(N=b)||void 0===N?void 0:null===(k=N[0])||void 0===k?void 0:k.nesting),m.footerProps={grades:(null===(a=m)||void 0===a?void 0:null===(l=a.filter)||void 0===l?void 0:l.grade)?[m.filter.grade]:[],subjects:[null===(i=Ue(null===(c=m)||void 0===c?void 0:null===(o=c.filter)||void 0===o?void 0:o.subject,null===(s=m)||void 0===s?void 0:s.facets,"subject"))||void 0===i?void 0:i.urlName],contentType:b,pageType:"Search"},O.abrupt("return",m);case 32:case"end":return O.stop()}}),null,null,[[4,23]])}},NS3E:function(e,t,n){(window.__NEXT_P=window.__NEXT_P||[]).push(["/[...search]",function(){return n("/gfZ")}])},P1o4:function(e,t,n){"use strict";n.r(t),n.d(t,"screens",(function(){return C}));var a=n("o0o1"),r=n.n(a),l=n("q1tI"),i=n.n(l),c=n("GEyG"),o=n("5Hjz"),s=n("wH4u"),u=n.n(s),d=n("jWxZ"),p=i.a.createElement;function m(e){var t=e.closeModal;return p("div",{className:u.a.container},p("div",{className:u.a.roly},p(c.n,{src:"https://cdn.education.com/files/static/collections/roly-collections.png",alt:"Roly"})),p("div",{className:u.a.text},p("h3",null,"Sign up to start collecting!"),p("p",null,"Bookmark this to easily find it later. Then send your curated collection to your children, or put together your own custom lesson plan."),p("div",{className:u.a.buttons},p("a",{href:"/?reg-trigger=signup",onClick:function(e){e.preventDefault(),t(),Object(d.b)("collections",{signUp:{title:null}})}},p(c.b,{className:u.a.signup,size:"large",color:"teal"},"Sign up")),p("a",{href:"/?reg-trigger=login",onClick:function(e){e.preventDefault(),t(),Object(d.a)("collections")}},p(c.b,{className:u.a.login,size:"large",color:"tertiary"},"Log in")))))}var f=n("BzvE"),v=n.n(f),h=i.a.createElement;function g(e){var t=e.collections,n=e.selectCollection,a=e.showCreate,r=t?Object.values(t).map((function(e){var t=e.thumbnail&&e.thumbnail.length?h(c.n,{src:e.thumbnail,className:v.a.img,alt:e.title}):h("div",{className:v.a.img}),a=Object.keys(e.content).length,r="".concat(a," ").concat(1===a?"item":"items");return h("li",{className:v.a.item,key:e.id,onClick:function(){return n(e.id)}},t,h("div",null,h("strong",null,e.title),h("br",null),h("span",{className:v.a.count},r)))})):[];return h(i.a.Fragment,null,h("h2",null,"Choose collection"),h("ul",{className:v.a.list},h("li",{className:v.a.item,onClick:a},h(c.m,{name:"plus-light",className:v.a.img}),h("strong",null,"Create new collection")),r.length>0&&h(i.a.Fragment,null,h("li",{className:v.a.divider}),r)))}var b=n("dSxp"),y=n.n(b),N=n("iuhU"),k=(n("jgR8"),i.a.createElement);function O(e){var t=e.createCollection,n=e.showList,a=Object(l.useState)(""),r=a[0],o=a[1],s=Object(l.useState)(!1),u=s[0],d=s[1],p=Object(l.useState)(!1),m=p[0],f=p[1];Object(l.useEffect)((function(){d(!!r)}),[r]);return k(i.a.Fragment,null,k("h2",null,"Create new collection"),k("div",{className:"form"},k("div",{className:"input-row"},k("label",{className:Object(N.a)("floating",{focus:m},{"not-empty":u})},k("span",null,"Collection name"),k("input",{name:"title",type:"text",value:r,maxLength:30,onChange:function(e){o(e.target.value)},onFocus:function(){f(!0),d(!0)},onBlur:function(){f(!1),d((null===r||void 0===r?void 0:r.length)>0)}})))),k("div",{className:y.a.actions},k(c.b,{className:y.a.button,onClick:function(){return t(r)}},"Save"),k(c.b,{className:y.a.button,color:"secondary",onClick:n},"Cancel")))}var j=n("L6pY"),w=n("oNLS"),x=n.n(w),S=i.a.createElement,C={LIST:"list",CREATE:"create"};t.default=function(){var e=Object(l.useContext)(o.c).memberId,t=Object(l.useContext)(j.b),n=t.ready,a=t.collections,i=t.modalIsOpen,s=t.setModalIsOpen,u=t.createCollection,d=t.setCurrentCollectionId,p=t.trackFeatureWall,f=t.selectedContent,v=t.collectContent,h=t.addToCollection,b=Object(l.useState)(C.LIST),y=b[0],N=b[1],k=Object(l.useState)(null),w=k[0],E=k[1];if(!n)return null;var T=function(){return s(!1)};if(!e)return i&&p(),S(c.r,{open:i,onClose:T,size:"large"},S(m,{closeModal:T}));var F=function(e){E(null);try{d(e),null!=f&&1===f.length&&"collectSingle"===f[0].flag?v(f[0].type,f[0].id,f[0].model,e):h(f,e),T()}catch(t){console.error(t),E("There was an error selecting the collection")}},P=function(e){var t;return r.a.async((function(n){for(;;)switch(n.prev=n.next){case 0:return E(null),n.prev=1,n.next=4,r.a.awrap(u(e));case 4:t=n.sent,F(t.id),N(C.LIST),T(),n.next=14;break;case 10:n.prev=10,n.t0=n.catch(1),console.error(n.t0),E("There was an error creating the collection");case 14:case"end":return n.stop()}}),null,null,[[1,10]])},L=function(){E(null),N(C.LIST)};return S(c.r,{open:i,onClose:T,size:"medium"},null!==w&&S("span",{className:x.a.error},w),function(){switch(y){case C.LIST:return S(g,{collections:a,selectCollection:F,showCreate:function(){return N(C.CREATE)}});case C.CREATE:return S(O,{createCollection:P,showList:L})}}())}}},[["NS3E",3,1,16,2,5,4,6,7,9,10,15,0]]]);
//# sourceMappingURL=[...search].js.map