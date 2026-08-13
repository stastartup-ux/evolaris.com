
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>EVOLARIS — Full-stack и AI-разработка</title>
<meta name="description" content="EVOLARIS — IT-студия полного цикла. Веб-приложения, AI и RAG-системы, CRM, e-commerce, мобильные приложения. От идеи до продакшена силами одной команды.">
<link rel="icon" href="images/image_c6b942e3.webp" type="image/webp">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;500;600&family=IBM+Plex+Sans:ital,wght@0,400;0,500;0,600;1,400&family=Unbounded:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<style>
/* ============================================================
   EVOLARIS — design tokens
   ============================================================ */
:root{
  --bg-void:#080b16;
  --bg-elevated:#0d1330;
  --bg-elevated-2:#0f1428;
  --bg-panel:#0b1024;
  --cyan:#4fc7ec;
  --cyan-dim:#3a94ac;
  --magenta:#c04fe0;
  --magenta-dim:#8a4aa8;
  --violet:#8f6ae0;
  --ink-100:#f3f5fc;
  --ink-300:#c7cce3;
  --ink-400:#a8afc9;
  --ink-600:#767db8;
  --ink-700:#565c82;
  --line:rgba(154,172,230,0.16);
  --line-bright:rgba(190,205,255,0.34);
  --grad-accent:linear-gradient(120deg,var(--cyan) 0%,var(--violet) 52%,var(--magenta) 100%);
  --grad-accent-soft:linear-gradient(120deg,rgba(79,199,236,0.35),rgba(192,79,224,0.35));
  --cut:18px;
  --radius-sm:10px;
  --container:1240px;
  --ff-display:'Unbounded',system-ui,sans-serif;
  --ff-body:'IBM Plex Sans',system-ui,sans-serif;
  --ff-mono:'IBM Plex Mono',ui-monospace,'SFMono-Regular',monospace;
  --ease:cubic-bezier(.22,.68,.35,1);
}

*,*::before,*::after{box-sizing:border-box;}
html{scroll-behavior:smooth;}
@media (prefers-reduced-motion:reduce){
  html{scroll-behavior:auto;}
}
body{
  margin:0;
  background:
    radial-gradient(ellipse 900px 620px at 12% -8%, rgba(79,199,236,0.16), transparent 60%),
    radial-gradient(ellipse 820px 720px at 92% 10%, rgba(192,79,224,0.15), transparent 60%),
    radial-gradient(ellipse 760px 560px at 46% 55%, rgba(79,199,236,0.07), transparent 65%),
    radial-gradient(ellipse 900px 700px at 84% 96%, rgba(192,79,224,0.13), transparent 60%),
    var(--bg-void);
  background-attachment:fixed;
  color:var(--ink-300);
  font-family:var(--ff-body);
  font-size:16px;
  line-height:1.6;
  -webkit-font-smoothing:antialiased;
  overflow-x:hidden;
}
h1,h2,h3,h4{
  font-family:var(--ff-display);
  color:var(--ink-100);
  margin:0;
  line-height:1.14;
  font-weight:600;
  letter-spacing:-0.01em;
}
p{margin:0;}
ul,ol{list-style:none;margin:0;padding:0;}
a{color:inherit;text-decoration:none;}
img{max-width:100%;display:block;}
button{font:inherit;color:inherit;background:none;border:0;cursor:pointer;}
svg{display:block;}

::selection{background:rgba(192,79,224,0.35);color:#fff;}

/* focus visibility */
a:focus-visible,button:focus-visible,input:focus-visible,textarea:focus-visible{
  outline:2px solid var(--cyan);
  outline-offset:3px;
  border-radius:4px;
}

/* starfield canvas */
#stars{
  position:fixed;
  inset:0;
  width:100%;
  height:100%;
  z-index:0;
  pointer-events:none;
}

.site{
  position:relative;
  z-index:1;
}

.container{
  max-width:var(--container);
  margin-inline:auto;
  padding-inline:clamp(1.25rem,4vw,3rem);
}

.skip-link{
  position:absolute;
  left:1rem;
  top:-60px;
  background:var(--bg-elevated);
  color:var(--ink-100);
  padding:0.75rem 1.25rem;
  border-radius:8px;
  border:1px solid var(--line-bright);
  z-index:200;
  transition:top .2s var(--ease);
  font-family:var(--ff-mono);
  font-size:0.85rem;
}
.skip-link:focus{top:1rem;}

/* ---------- eyebrow / section header pattern ---------- */
.eyebrow{
  display:inline-flex;
  align-items:center;
  gap:0.6em;
  font-family:var(--ff-mono);
  font-size:0.72rem;
  letter-spacing:0.18em;
  text-transform:uppercase;
  color:var(--cyan);
  margin:0 0 1rem;
}
.eyebrow::before{
  content:"";
  width:7px;height:7px;
  background:var(--grad-accent);
  clip-path:polygon(50% 0%,100% 50%,50% 100%,0% 50%);
  flex:none;
}
.section-head{
  max-width:640px;
  margin-bottom:clamp(2.25rem,5vw,3.5rem);
}
.section-head h2{
  font-size:clamp(1.9rem,3.4vw,2.65rem);
  margin-bottom:0.85rem;
}
.section-head p{
  font-size:1.05rem;
  color:var(--ink-400);
}
.section-head.center{
  margin-inline:auto;
  text-align:center;
}
.section-head.center .eyebrow{margin-inline:auto;}

section{
  position:relative;
  padding-block:clamp(4rem,9vw,7rem);
}
.section-alt{
  background:linear-gradient(180deg,transparent, rgba(13,19,48,0.4) 12%, rgba(13,19,48,0.4) 88%, transparent);
  border-top:1px solid var(--line);
  border-bottom:1px solid var(--line);
}

/* ---------- buttons ---------- */
.btn{
  display:inline-flex;
  align-items:center;
  justify-content:center;
  gap:0.6em;
  font-family:var(--ff-body);
  font-weight:600;
  font-size:0.98rem;
  padding:0.95rem 1.7rem;
  clip-path:polygon(14px 0,100% 0,100% calc(100% - 14px),calc(100% - 14px) 100%,0 100%,0 14px);
  transition:transform .25s var(--ease), box-shadow .25s var(--ease), filter .25s var(--ease);
  white-space:nowrap;
}
.btn-primary{
  background:var(--grad-accent);
  color:#050710;
}
.btn-primary:hover{
  filter:brightness(1.08) saturate(1.1);
  box-shadow:0 8px 30px -6px rgba(192,79,224,0.55), 0 8px 30px -6px rgba(79,199,236,0.35);
}
.btn-primary:active{transform:translateY(1px);}
.btn-ghost{
  background:rgba(255,255,255,0.03);
  color:var(--ink-100);
  border:1px solid var(--line-bright);
}
.btn-ghost:hover{
  border-color:var(--cyan);
  background:rgba(79,199,236,0.06);
}
.btn-sm{padding:0.7rem 1.25rem;font-size:0.88rem;}

/* ============================================================
   HEADER / NAV
   ============================================================ */
.header{
  position:fixed;
  top:0;left:0;right:0;
  z-index:100;
  background:rgba(8,11,22,0.66);
  backdrop-filter:blur(16px) saturate(140%);
  -webkit-backdrop-filter:blur(16px) saturate(140%);
  border-bottom:1px solid var(--line);
}
.header .container{
  display:flex;
  align-items:center;
  justify-content:space-between;
  padding-block:0.85rem;
}
.brand{
  display:flex;
  align-items:center;
  gap:0.65rem;
}
.brand__mark{
  width:38px;height:38px;
  border-radius:50%;
  flex:none;
  box-shadow:0 0 0 1px var(--line-bright), 0 0 18px -2px rgba(79,199,236,0.55);
}
.brand__name{
  font-family:var(--ff-display);
  font-weight:700;
  font-size:1.12rem;
  letter-spacing:0.03em;
  color:var(--ink-100);
}
.nav{
  display:flex;
  align-items:center;
  gap:2.1rem;
}
.nav__links{
  display:flex;
  align-items:center;
  gap:1.9rem;
}
.nav__links a{
  font-size:0.92rem;
  color:var(--ink-300);
  position:relative;
  padding-block:0.3rem;
  transition:color .2s var(--ease);
}
.nav__links a::after{
  content:"";
  position:absolute;
  left:0;bottom:0;
  width:0%;height:1.5px;
  background:var(--grad-accent);
  transition:width .25s var(--ease);
}
.nav__links a:hover{color:var(--ink-100);}
.nav__links a:hover::after{width:100%;}
.nav__toggle{
  display:none;
  width:40px;height:40px;
  align-items:center;
  justify-content:center;
  border:1px solid var(--line-bright);
  border-radius:8px;
  flex:none;
}
.nav__toggle span,.nav__toggle span::before,.nav__toggle span::after{
  content:"";
  display:block;
  width:18px;height:1.6px;
  background:var(--ink-100);
  position:relative;
  transition:transform .25s var(--ease), opacity .25s var(--ease);
}
.nav__toggle span::before{position:absolute;top:-6px;}
.nav__toggle span::after{position:absolute;top:6px;}
.nav__toggle[aria-expanded="true"] span{background:transparent;}
.nav__toggle[aria-expanded="true"] span::before{transform:translateY(6px) rotate(45deg);}
.nav__toggle[aria-expanded="true"] span::after{transform:translateY(-6px) rotate(-45deg);}

@media (max-width:860px){
  .nav__links{
    position:fixed;
    top:66px;left:0;right:0;
    flex-direction:column;
    align-items:flex-start;
    gap:0;
    background:rgba(8,10,20,0.97);
    border-bottom:1px solid var(--line);
    padding:0.5rem clamp(1.25rem,4vw,3rem) 1.25rem;
    transform:translateY(-8px);
    opacity:0;
    pointer-events:none;
    transition:opacity .22s var(--ease), transform .22s var(--ease);
  }
  .nav__links[data-open="true"]{
    opacity:1;
    transform:translateY(0);
    pointer-events:auto;
  }
  .nav__links a{
    width:100%;
    padding-block:0.9rem;
    border-bottom:1px solid var(--line);
    font-size:1rem;
  }
  .nav__cta{display:none;}
  .nav__toggle{display:flex;}
}

/* ============================================================
   HERO
   ============================================================ */
.hero{
  padding-top:clamp(7.5rem,14vw,9.5rem);
  padding-bottom:clamp(4rem,8vw,6rem);
}
.hero .container{
  display:grid;
  grid-template-columns:1.05fr 0.95fr;
  gap:clamp(2.5rem,5vw,4rem);
  align-items:center;
}
.hero__eyebrow{margin-bottom:1.4rem;}
.hero h1{
  font-size:clamp(2.35rem,4.6vw,3.85rem);
  font-weight:700;
  margin-bottom:1.4rem;
}
.hero h1 em{
  font-style:normal;
  background:var(--grad-accent);
  -webkit-background-clip:text;
  background-clip:text;
  color:transparent;
}
.hero__sub{
  font-size:1.12rem;
  color:var(--ink-400);
  max-width:34em;
  margin-bottom:2.2rem;
}
.hero__cta{
  display:flex;
  flex-wrap:wrap;
  gap:1rem;
  margin-bottom:2.6rem;
}
.hero__trust{
  display:flex;
  flex-wrap:wrap;
  gap:1.75rem 2.4rem;
  padding-top:1.8rem;
  border-top:1px solid var(--line);
}
.hero__trust li{
  display:flex;
  flex-direction:column;
  gap:0.3rem;
  max-width:15rem;
}
.hero__trust strong{
  font-family:var(--ff-display);
  font-size:1.6rem;
  font-weight:700;
  background:var(--grad-accent);
  -webkit-background-clip:text;
  background-clip:text;
  color:transparent;
}
.hero__trust span{
  font-family:var(--ff-mono);
  font-size:0.74rem;
  letter-spacing:0.03em;
  color:var(--ink-400);
  line-height:1.45;
}
.hero__trust .note{
  font-family:var(--ff-body);
  font-size:0.92rem;
  color:var(--ink-300);
  max-width:16rem;
  padding-top:0.15rem;
}

/* ---- signature: stack diagram ---- */
.stackviz{
  position:relative;
  display:flex;
  flex-direction:column;
  align-items:center;
}
.stackviz__logo{
  position:relative;
  width:clamp(120px,15vw,168px);
  margin-bottom:0.5rem;
  animation:floatY 7s ease-in-out infinite;
}
.stackviz__logo img{
  width:100%;
  border-radius:50%;
  position:relative;
  z-index:2;
  box-shadow:0 0 0 1px var(--line-bright);
}
.stackviz__logo::before{
  content:"";
  position:absolute;
  inset:-30%;
  background:radial-gradient(circle, rgba(120,170,235,0.42), rgba(150,90,220,0.18) 45%, transparent 72%);
  filter:blur(18px);
  z-index:1;
  animation:pulseGlow 4.2s ease-in-out infinite;
}
@keyframes floatY{
  0%,100%{transform:translateY(0);}
  50%{transform:translateY(-12px);}
}
@keyframes pulseGlow{
  0%,100%{opacity:0.65;transform:scale(1);}
  50%{opacity:1;transform:scale(1.08);}
}

.stackviz__body{
  position:relative;
  width:100%;
  padding-left:34px;
}
.stackviz__spine{
  position:absolute;
  left:13px;top:6px;bottom:6px;
  width:2px;
  background:linear-gradient(180deg,var(--cyan),var(--violet) 55%,var(--magenta));
  opacity:0.4;
}
.stackviz__pulse{
  position:absolute;
  left:13px;top:0;
  width:9px;height:9px;
  margin-left:-3.5px;
  border-radius:50%;
  background:#eaf8ff;
  box-shadow:0 0 10px 3px rgba(120,200,255,0.9), 0 -22px 22px -4px rgba(79,199,236,0.65);
  animation:travel 3.6s linear infinite;
}
@keyframes travel{
  0%{top:0%; opacity:0;}
  8%{opacity:1;}
  92%{opacity:1;}
  100%{top:100%; opacity:0;}
}
.stackviz__layers{
  display:flex;
  flex-direction:column;
  gap:0.85rem;
}
.stackviz__layer{
  position:relative;
  display:flex;
  align-items:center;
  gap:0.9rem;
}
.stackviz__node{
  position:absolute;
  left:-34px;
  width:13px;height:13px;
  border-radius:50%;
  background:var(--bg-void);
  border:2px solid var(--cyan);
  flex:none;
  z-index:2;
}
.stackviz__layer:nth-child(2) .stackviz__node{border-color:#a186e8;}
.stackviz__layer:nth-child(3) .stackviz__node{border-color:#b364e2;}
.stackviz__layer:nth-child(4) .stackviz__node{border-color:var(--magenta);}
.stackviz__card{
  flex:1;
  background:var(--bg-elevated);
  border:1px solid var(--line);
  clip-path:polygon(var(--cut) 0,100% 0,100% calc(100% - var(--cut)),calc(100% - var(--cut)) 100%,0 100%,0 var(--cut));
  padding:0.95rem 1.15rem;
  transition:border-color .25s var(--ease), background .25s var(--ease);
}
.stackviz__layer:hover .stackviz__card{
  border-color:var(--line-bright);
  background:var(--bg-elevated-2);
}
.stackviz__name{
  display:block;
  font-family:var(--ff-display);
  font-size:0.98rem;
  font-weight:600;
  color:var(--ink-100);
  margin-bottom:0.25rem;
}
.stackviz__tags{
  display:block;
  font-family:var(--ff-mono);
  font-size:0.72rem;
  color:var(--ink-600);
  letter-spacing:0.01em;
}

@media (prefers-reduced-motion:reduce){
  .stackviz__logo,.stackviz__logo::before,.stackviz__pulse{animation:none;}
  .stackviz__pulse{display:none;}
}

@media (max-width:980px){
  .hero .container{grid-template-columns:1fr;}
  .stackviz{margin-top:1rem;max-width:420px;margin-inline:auto;}
}
@media (max-width:520px){
  .hero__trust{gap:1.4rem;}
}

/* ============================================================
   ICON SPRITE GRADIENT
   ============================================================ */
.icon{width:26px;height:26px;flex:none;}
.icon path,.icon circle,.icon rect{
  stroke:url(#iconGrad);
  fill:none;
  stroke-width:1.6;
  stroke-linecap:round;
  stroke-linejoin:round;
}

/* ============================================================
   FACET CARD (shared)
   ============================================================ */
.facet{
  position:relative;
  background:var(--bg-elevated);
  border:1px solid var(--line);
  clip-path:polygon(22px 0,100% 0,100% calc(100% - 22px),calc(100% - 22px) 100%,0 100%,0 22px);
  padding:1.9rem 1.9rem 2.1rem;
  transition:border-color .3s var(--ease), transform .3s var(--ease), box-shadow .3s var(--ease);
}
.facet::before{
  content:"";
  position:absolute;
  top:0;left:0;right:0;
  height:2px;
  background:var(--grad-accent);
  opacity:0;
  transition:opacity .3s var(--ease);
}
.facet:hover{
  border-color:var(--line-bright);
  transform:translateY(-4px);
  box-shadow:0 18px 40px -18px rgba(79,199,236,0.25), 0 18px 40px -18px rgba(192,79,224,0.2);
}
.facet:hover::before{opacity:1;}

/* ============================================================
   SERVICES
   ============================================================ */
.services__grid{
  display:grid;
  grid-template-columns:repeat(3,1fr);
  gap:1.4rem;
}
.service{display:flex;flex-direction:column;gap:1rem;}
.service .icon{margin-bottom:0.3rem;}
.service h3{
  font-size:1.14rem;
  font-weight:600;
}
.service p{font-size:0.94rem;color:var(--ink-400);}
.service__tags{
  display:flex;flex-wrap:wrap;gap:0.45rem;
  margin-top:0.3rem;
}
.tag{
  font-family:var(--ff-mono);
  font-size:0.7rem;
  letter-spacing:0.02em;
  color:var(--ink-300);
  border:1px solid var(--line);
  padding:0.3rem 0.6rem;
  border-radius:5px;
  background:rgba(255,255,255,0.02);
}

@media (max-width:980px){.services__grid{grid-template-columns:repeat(2,1fr);}}
@media (max-width:620px){.services__grid{grid-template-columns:1fr;}}

/* ============================================================
   PROCESS
   ============================================================ */
.process{
  display:grid;
  grid-template-columns:repeat(6,1fr);
  gap:0;
  position:relative;
}
.process::before{
  content:"";
  position:absolute;
  top:19px;left:0;right:0;
  height:2px;
  background:linear-gradient(90deg,var(--cyan),var(--violet) 50%,var(--magenta));
  opacity:0.35;
}
.process__step{
  position:relative;
  padding-right:1.1rem;
  padding-top:3.6rem;
}
.process__num{
  position:absolute;
  top:0;left:0;
  width:40px;height:40px;
  display:flex;align-items:center;justify-content:center;
  font-family:var(--ff-mono);
  font-size:0.82rem;
  font-weight:600;
  color:var(--bg-void);
  background:var(--grad-accent);
  clip-path:polygon(50% 0%,100% 25%,100% 75%,50% 100%,0% 75%,0% 25%);
  z-index:2;
}
.process__step h3{
  font-size:1rem;
  font-weight:600;
  margin-bottom:0.5rem;
}
.process__step p{
  font-size:0.87rem;
  color:var(--ink-400);
}

@media (max-width:980px){
  .process{grid-template-columns:repeat(3,1fr);gap:2.4rem 0;}
  .process::before{display:none;}
}
@media (max-width:620px){
  .process{grid-template-columns:1fr;gap:1.8rem;}
  .process__step{padding-right:0;}
}

/* ============================================================
   TEAM
   ============================================================ */
.team__grid{
  display:grid;
  grid-template-columns:repeat(2,1fr);
  gap:1.4rem;
}
.member{display:flex;gap:1.3rem;}
.member__avatar{
  flex:none;
  width:64px;height:64px;
  display:flex;align-items:center;justify-content:center;
  font-family:var(--ff-display);
  font-weight:700;
  font-size:1.05rem;
  color:#050710;
  background:var(--grad-accent);
  clip-path:polygon(50% 0%,100% 25%,100% 75%,50% 100%,0% 75%,0% 25%);
}
.member__role{
  font-family:var(--ff-mono);
  font-size:0.72rem;
  letter-spacing:0.06em;
  text-transform:uppercase;
  color:var(--cyan);
  margin-bottom:0.35rem;
  display:block;
}
.member h3{
  font-size:1.08rem;
  margin-bottom:0.55rem;
}
.member p{
  font-size:0.9rem;
  color:var(--ink-400);
  margin-bottom:0.75rem;
}
.member .service__tags{margin-top:0;}

@media (max-width:760px){
  .team__grid{grid-template-columns:1fr;}
}

/* ============================================================
   PORTFOLIO
   ============================================================ */
.portfolio__grid{
  display:grid;
  grid-template-columns:repeat(2,1fr);
  gap:1.4rem;
}
.browser{
  border:1px solid var(--line);
  border-radius:12px;
  overflow:hidden;
  background:var(--bg-elevated);
  transition:border-color .3s var(--ease), transform .3s var(--ease), box-shadow .3s var(--ease);
}
.browser:hover{
  border-color:var(--line-bright);
  transform:translateY(-4px);
  box-shadow:0 18px 40px -18px rgba(79,199,236,0.25), 0 18px 40px -18px rgba(192,79,224,0.2);
}
.browser__bar{
  display:flex;
  align-items:center;
  gap:0.9rem;
  padding:0.7rem 0.9rem;
  background:var(--bg-elevated-2);
  border-bottom:1px solid var(--line);
}
.browser__dots{display:flex;gap:5px;flex:none;}
.browser__dots span{
  width:8px;height:8px;border-radius:50%;
  background:rgba(160,180,235,0.28);
}
.browser__url{
  flex:1;
  display:flex;
  align-items:center;
  gap:0.5rem;
  background:rgba(255,255,255,0.03);
  border:1px solid var(--line);
  border-radius:6px;
  padding:0.35rem 0.7rem;
  font-family:var(--ff-mono);
  font-size:0.76rem;
  color:var(--ink-400);
  min-width:0;
}
.browser__url svg{flex:none;width:12px;height:12px;opacity:0.6;}
.browser__url span{
  overflow:hidden;text-overflow:ellipsis;white-space:nowrap;
}
.browser__link{
  flex:none;
  color:var(--ink-600);
  transition:color .2s var(--ease);
}
.browser:hover .browser__link{color:var(--cyan);}
.browser__preview{
  position:relative;
  padding:2.1rem 1.6rem;
  min-height:150px;
  display:flex;
  flex-direction:column;
  justify-content:flex-end;
  gap:0.6rem;
  background:
    radial-gradient(circle at 20% 20%, rgba(79,199,236,0.16), transparent 55%),
    radial-gradient(circle at 85% 80%, rgba(192,79,224,0.16), transparent 55%),
    repeating-linear-gradient(115deg, rgba(255,255,255,0.025) 0 1px, transparent 1px 26px);
}
.browser__preview h3{font-size:1.12rem;}
.browser__preview p{font-size:0.88rem;color:var(--ink-400);max-width:32em;}

@media (max-width:760px){
  .portfolio__grid{grid-template-columns:1fr;}
}

/* ============================================================
   TECH STACK
   ============================================================ */
.techgrid{
  display:grid;
  grid-template-columns:repeat(5,1fr);
  gap:1.4rem;
}
.techcol h3{
  font-family:var(--ff-mono);
  font-size:0.76rem;
  letter-spacing:0.1em;
  text-transform:uppercase;
  color:var(--ink-600);
  font-weight:500;
  margin-bottom:1rem;
  padding-bottom:0.9rem;
  border-bottom:1px solid var(--line);
}
.techcol ul{display:flex;flex-direction:column;gap:0.65rem;}
.techcol li{
  font-family:var(--ff-body);
  font-size:0.92rem;
  color:var(--ink-300);
  position:relative;
  padding-left:1rem;
}
.techcol li::before{
  content:"";
  position:absolute;left:0;top:0.55em;
  width:5px;height:5px;
  background:var(--grad-accent);
  clip-path:polygon(50% 0%,100% 50%,50% 100%,0% 50%);
}

@media (max-width:980px){.techgrid{grid-template-columns:repeat(3,1fr);row-gap:2.2rem;}}
@media (max-width:620px){.techgrid{grid-template-columns:repeat(2,1fr);}}

/* ============================================================
   WHY US
   ============================================================ */
.why__grid{
  display:grid;
  grid-template-columns:repeat(3,1fr);
  gap:1.4rem;
}
.why h3{font-size:1.1rem;margin-bottom:0.75rem;}
.why p{font-size:0.93rem;color:var(--ink-400);}
.why__mark{
  width:22px;height:22px;
  margin-bottom:1.1rem;
  background:var(--grad-accent);
  clip-path:polygon(50% 0%,100% 50%,50% 100%,0% 50%);
}
@media (max-width:860px){.why__grid{grid-template-columns:1fr;}}

/* ============================================================
   CONTACT
   ============================================================ */
.contact__panel{
  position:relative;
  background:var(--bg-elevated);
  border:1px solid var(--line-bright);
  clip-path:polygon(28px 0,100% 0,100% calc(100% - 28px),calc(100% - 28px) 100%,0 100%,0 28px);
  padding:clamp(2.2rem,5vw,3.6rem);
  display:grid;
  grid-template-columns:1.2fr 1fr;
  gap:2.5rem;
  align-items:center;
  overflow:hidden;
}
.contact__panel::before{
  content:"";
  position:absolute;
  inset:0;
  background:
    radial-gradient(circle at 8% 12%, rgba(79,199,236,0.16), transparent 45%),
    radial-gradient(circle at 92% 88%, rgba(192,79,224,0.18), transparent 45%);
  pointer-events:none;
}
.contact__panel h2{font-size:clamp(1.9rem,3.2vw,2.5rem);margin-bottom:0.9rem;}
.contact__panel > div{position:relative;z-index:1;}
.contact__sub{font-size:1.02rem;color:var(--ink-400);max-width:32em;}
.contact__manager{
  position:relative;z-index:1;
  display:flex;
  flex-direction:column;
  gap:0.9rem;
  border-left:1px solid var(--line);
  padding-left:clamp(1.4rem,3vw,2.2rem);
}
.contact__manager .name{
  font-family:var(--ff-display);
  font-size:1.15rem;
  color:var(--ink-100);
  font-weight:600;
}
.contact__manager .role{
  font-family:var(--ff-mono);
  font-size:0.72rem;
  letter-spacing:0.08em;
  text-transform:uppercase;
  color:var(--cyan);
}
.contact__row{
  display:flex;
  align-items:center;
  gap:0.65rem;
  font-family:var(--ff-mono);
  font-size:0.95rem;
  color:var(--ink-300);
  transition:color .2s var(--ease);
}
.contact__row svg{flex:none;width:17px;height:17px;color:var(--ink-600);}
a.contact__row:hover{color:var(--cyan);}
a.contact__row:hover svg{color:var(--cyan);}
.contact__manager .btn{margin-top:0.5rem;align-self:flex-start;}

@media (max-width:820px){
  .contact__panel{grid-template-columns:1fr;}
  .contact__manager{border-left:none;padding-left:0;border-top:1px solid var(--line);padding-top:1.6rem;}
}

/* ============================================================
   FOOTER
   ============================================================ */
.footer{
  border-top:1px solid var(--line);
  padding-block:2.6rem;
}
.footer .container{
  display:flex;
  flex-wrap:wrap;
  align-items:center;
  justify-content:space-between;
  gap:1.4rem;
}
.footer__brand{
  display:flex;
  align-items:center;
  gap:0.6rem;
  font-family:var(--ff-display);
  font-size:0.98rem;
  color:var(--ink-300);
}
.footer__brand img{width:26px;height:26px;border-radius:50%;}
.footer__meta{
  font-family:var(--ff-mono);
  font-size:0.76rem;
  color:var(--ink-700);
}
.footer__links{
  display:flex;
  gap:1.5rem;
  font-family:var(--ff-mono);
  font-size:0.8rem;
  color:var(--ink-400);
}
.footer__links a:hover{color:var(--cyan);}

/* ============================================================
   SCROLL REVEAL
   ============================================================ */
[data-reveal]{
  opacity:0;
  transform:translateY(22px);
  transition:opacity .7s var(--ease), transform .7s var(--ease);
}
[data-reveal].in-view{
  opacity:1;
  transform:translateY(0);
}
@media (prefers-reduced-motion:reduce){
  [data-reveal]{opacity:1;transform:none;transition:none;}
}
</style>
</head>
<body>

<a class="skip-link" href="#main">Перейти к содержимому</a>

<canvas id="stars" aria-hidden="true"></canvas>

<svg width="0" height="0" style="position:absolute" aria-hidden="true">
  <defs>
    <linearGradient id="iconGrad" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0%" stop-color="#4fc7ec"/>
      <stop offset="100%" stop-color="#c04fe0"/>
    </linearGradient>
  </defs>
</svg>

<div class="site">

<!-- ============================================================
     HEADER
     ============================================================ -->
<header class="header">
  <div class="container">
    <a class="brand" href="#top" aria-label="EVOLARIS — на главную">
      <img class="brand__mark" src="images/image_c6b942e3.webp" alt="" width="38" height="38">
      <span class="brand__name">EVOLARIS</span>
    </a>
    <nav class="nav" aria-label="Основная навигация">
      <ul class="nav__links" id="navLinks" data-open="false">
        <li><a href="#services">Услуги</a></li>
        <li><a href="#process">Процесс</a></li>
        <li><a href="#team">Команда</a></li>
        <li><a href="#portfolio">Портфолио</a></li>
        <li><a href="#stack">Стек</a></li>
      </ul>
      <a class="btn btn-primary btn-sm nav__cta" href="https://t.me/Manager_pegase" target="_blank" rel="noopener">Обсудить проект</a>
      <button class="nav__toggle" id="navToggle" aria-expanded="false" aria-controls="navLinks" aria-label="Открыть меню">
        <span></span>
      </button>
    </nav>
  </div>
</header>

<main id="main">

<!-- ============================================================
     HERO
     ============================================================ -->
<section class="hero" id="top">
  <div class="container">
    <div class="hero__text">
      <p class="eyebrow hero__eyebrow">Full-stack &amp; AI студия</p>
      <h1>От идеи до продакшена. <em>Одна команда, все слои.</em></h1>
      <p class="hero__sub">Интерфейс, backend, данные и AI — мы проектируем и строим каждый слой сами. Никаких передач между подрядчиками и потерянного контекста.</p>
      <div class="hero__cta">
        <a class="btn btn-primary" href="https://t.me/Manager_pegase" target="_blank" rel="noopener">Обсудить проект</a>
        <a class="btn btn-ghost" href="#portfolio">Смотреть портфолио</a>
      </div>
      <ul class="hero__trust">
        <li><strong>14+</strong><span>лет опыта в команде</span></li>
        <li><strong>4</strong><span>production-системы в портфолио</span></li>
        <li class="note"><span>AI + инженерия, а не только генерация кода</span></li>
      </ul>
    </div>

    <div class="stackviz" data-reveal aria-hidden="true">
      <div class="stackviz__logo">
        <img src="images/image_c6b942e3.webp" alt="">
      </div>
      <div class="stackviz__body">
        <div class="stackviz__spine"></div>
        <div class="stackviz__pulse"></div>
        <ul class="stackviz__layers">
          <li class="stackviz__layer">
            <span class="stackviz__node"></span>
            <div class="stackviz__card">
              <span class="stackviz__name">Интерфейс</span>
              <span class="stackviz__tags">Next.js · React · Angular</span>
            </div>
          </li>
          <li class="stackviz__layer">
            <span class="stackviz__node"></span>
            <div class="stackviz__card">
              <span class="stackviz__name">Backend / API</span>
              <span class="stackviz__tags">Node.js · .NET · PHP</span>
            </div>
          </li>
          <li class="stackviz__layer">
            <span class="stackviz__node"></span>
            <div class="stackviz__card">
              <span class="stackviz__name">Данные</span>
              <span class="stackviz__tags">MySQL · MongoDB · MSSQL</span>
            </div>
          </li>
          <li class="stackviz__layer">
            <span class="stackviz__node"></span>
            <div class="stackviz__card">
              <span class="stackviz__name">AI-слой</span>
              <span class="stackviz__tags">LLM · RAG · LangChain</span>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     SERVICES
     ============================================================ -->
<section class="section-alt" id="services">
  <div class="container">
    <div class="section-head" data-reveal>
      <p class="eyebrow">Услуги</p>
      <h2>Что мы строим</h2>
      <p>Шесть направлений, одна команда. Каждый проект ведут те же люди, что проектируют архитектуру и пишут код.</p>
    </div>
    <div class="services__grid">
      <article class="service facet" data-reveal>
        <svg class="icon" viewBox="0 0 24 24"><path d="M8 8L3.6 12L8 16M16 8L20.4 12L16 16M13.6 5.5l-3.2 13"/></svg>
        <h3>Веб-приложения</h3>
        <p>Быстрые интерфейсы и надёжный backend в одной связке — без разрыва между фронтом и сервером.</p>
        <div class="service__tags">
          <span class="tag">Next.js</span><span class="tag">React</span><span class="tag">Angular</span><span class="tag">Node.js</span><span class="tag">.NET</span><span class="tag">PHP</span>
        </div>
      </article>
      <article class="service facet" data-reveal>
        <svg class="icon" viewBox="0 0 24 24"><circle cx="12" cy="5" r="1.9"/><circle cx="5" cy="17.5" r="1.9"/><circle cx="19" cy="17.5" r="1.9"/><path d="M12 6.9V12M12 12l-5.6 4M12 12l5.6 4"/></svg>
        <h3>AI и RAG-системы</h3>
        <p>Встраиваем языковые модели в реальные процессы: поиск по знаниям компании, автоматизация, агенты с доступом к вашим данным.</p>
        <div class="service__tags">
          <span class="tag">LLM</span><span class="tag">LangChain</span><span class="tag">Vector DB</span><span class="tag">AI-агенты</span>
        </div>
      </article>
      <article class="service facet" data-reveal>
        <svg class="icon" viewBox="0 0 24 24"><rect x="3.5" y="3.5" width="7.5" height="7.5" rx="1.3"/><rect x="13" y="3.5" width="7.5" height="7.5" rx="1.3"/><rect x="3.5" y="13" width="7.5" height="7.5" rx="1.3"/><rect x="13" y="13" width="7.5" height="7.5" rx="1.3"/></svg>
        <h3>CRM и внутренние системы</h3>
        <p>Роли, доступы, аналитика — системы, которые наводят порядок внутри компании и растут вместе с ней.</p>
        <div class="service__tags">
          <span class="tag">Роли и доступы</span><span class="tag">Аналитика</span><span class="tag">Интеграции</span>
        </div>
      </article>
      <article class="service facet" data-reveal>
        <svg class="icon" viewBox="0 0 24 24"><path d="M5 8h14l-1.3 9.4a2 2 0 01-2 1.7H8.3a2 2 0 01-2-1.7L5 8z"/><path d="M9 8V6a3 3 0 016 0v2"/></svg>
        <h3>E-commerce</h3>
        <p>Каталог, корзина, заказы, оплата — от витрины до личного кабинета покупателя.</p>
        <div class="service__tags">
          <span class="tag">Каталог</span><span class="tag">Оплата</span><span class="tag">Заказы</span>
        </div>
      </article>
      <article class="service facet" data-reveal>
        <svg class="icon" viewBox="0 0 24 24"><rect x="6.5" y="2.8" width="11" height="18.4" rx="2.2"/><path d="M10.6 18.2h2.8"/></svg>
        <h3>Мобильные приложения</h3>
        <p>iOS и Android с push-уведомлениями и синхронизацией с вашей CRM в реальном времени.</p>
        <div class="service__tags">
          <span class="tag">iOS</span><span class="tag">Android</span><span class="tag">Push</span><span class="tag">Синхронизация</span>
        </div>
      </article>
      <article class="service facet" data-reveal>
        <svg class="icon" viewBox="0 0 24 24"><path d="M9 15l6-6M8.3 8.3L6.5 6.5a2.7 2.7 0 113.8-3.8l1.8 1.8M15.7 15.7l1.8 1.8a2.7 2.7 0 11-3.8 3.8l-1.8-1.8"/></svg>
        <h3>API, интеграции, DevOps</h3>
        <p>REST API, Docker, деплой — связываем сервисы и держим инфраструктуру под контролем.</p>
        <div class="service__tags">
          <span class="tag">REST API</span><span class="tag">Docker</span><span class="tag">Деплой</span>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- ============================================================
     PROCESS
     ============================================================ -->
<section id="process">
  <div class="container">
    <div class="section-head" data-reveal>
      <p class="eyebrow">Как мы работаем</p>
      <h2>Процесс</h2>
      <p>Шесть последовательных этапов — от первого разговора до жизни проекта после запуска.</p>
    </div>
    <ol class="process">
      <li class="process__step" data-reveal><span class="process__num">1</span><h3>Бриф</h3><p>Разбираемся в задаче, бизнесе и ограничениях, прежде чем предлагать решение.</p></li>
      <li class="process__step" data-reveal><span class="process__num">2</span><h3>Архитектура</h3><p>Проектируем структуру системы: слои, интеграции, модель данных.</p></li>
      <li class="process__step" data-reveal><span class="process__num">3</span><h3>Разработка</h3><p>Пишем код короткими итерациями и регулярно показываем прогресс.</p></li>
      <li class="process__step" data-reveal><span class="process__num">4</span><h3>Тестирование</h3><p>Проверяем, ломаем, чиним — до релиза, а не после.</p></li>
      <li class="process__step" data-reveal><span class="process__num">5</span><h3>Запуск</h3><p>Разворачиваем в продакшен без простоев для пользователей.</p></li>
      <li class="process__step" data-reveal><span class="process__num">6</span><h3>Поддержка</h3><p>Остаёмся на связи после запуска: правки, доработки, рост.</p></li>
    </ol>
  </div>
</section>

<!-- ============================================================
     TEAM
     ============================================================ -->
<section class="section-alt" id="team">
  <div class="container">
    <div class="section-head" data-reveal>
      <p class="eyebrow">Команда</p>
      <h2>Люди, которые ведут проект</h2>
      <p>Небольшая команда с реальным коммерческим опытом — без прослойки лишних ролей.</p>
    </div>
    <div class="team__grid">
      <article class="member facet" data-reveal>
        <div class="member__avatar" aria-hidden="true">Ю</div>
        <div>
          <span class="member__role">Менеджер проекта</span>
          <h3>Юрий</h3>
          <p>Ведёт коммуникацию с клиентом, планирует спринты и следит, чтобы сроки не расползались.</p>
          <div class="service__tags"><span class="tag">Коммуникация</span><span class="tag">Планирование</span><span class="tag">Контроль сроков</span></div>
        </div>
      </article>
      <article class="member facet" data-reveal>
        <div class="member__avatar" aria-hidden="true">АЯ</div>
        <div>
          <span class="member__role">Full Stack &amp; AI Developer · Индия</span>
          <h3>Адарш Ядав</h3>
          <p>Совмещает full-stack и AI-разработку. Построил AI-платформу Manage One AI (по проекту опубликована исследовательская работа) и систему TaskFlow Pro. Самостоятельно сдал клиенту e-commerce проект под ключ — от интерфейса до базы данных и интеграций.</p>
          <div class="service__tags"><span class="tag">Next.js</span><span class="tag">FastAPI</span><span class="tag">LangChain</span><span class="tag">RAG</span><span class="tag">Vector DB</span></div>
        </div>
      </article>
      <article class="member facet" data-reveal>
        <div class="member__avatar" aria-hidden="true">С</div>
        <div>
          <span class="member__role">Full Stack Developer</span>
          <h3>Станислав</h3>
          <p>Программирует ещё с до-AI времён: сначала разбирается в архитектуре, потом ускоряется с помощью AI-инструментов. Построил сайт, CRM и мобильное приложение для ArboStar и CRM с личными кабинетами для восьми ролей для «Мира тайных покупателей».</p>
          <div class="service__tags"><span class="tag">Laravel</span><span class="tag">CodeIgniter</span><span class="tag">MySQL</span><span class="tag">Docker</span></div>
        </div>
      </article>
      <article class="member facet" data-reveal>
        <div class="member__avatar" aria-hidden="true">KT</div>
        <div>
          <span class="member__role">Senior Backend Developer</span>
          <h3>Kalpeshkumar Tamboli</h3>
          <p>14+ лет в backend-разработке на PHP и .NET. Проектирует архитектуру веб-приложений, API-интеграции и работу с базами данных — MySQL, MSSQL, Oracle.</p>
          <div class="service__tags"><span class="tag">PHP</span><span class="tag">.NET</span><span class="tag">AWS</span><span class="tag">API</span></div>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- ============================================================
     PORTFOLIO
     ============================================================ -->
<section id="portfolio">
  <div class="container">
    <div class="section-head" data-reveal>
      <p class="eyebrow">Портфолио</p>
      <h2>Что мы уже сделали</h2>
      <p>Production-системы, которые работают у реальных клиентов — не тестовые проекты.</p>
    </div>
    <div class="portfolio__grid">
      <a class="browser" data-reveal href="https://arbostar.com" target="_blank" rel="noopener" aria-label="Открыть arbostar.com в новой вкладке">
        <div class="browser__bar">
          <span class="browser__dots"><span></span><span></span><span></span></span>
          <span class="browser__url"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3a14 14 0 010 18M12 3a14 14 0 000 18"/></svg><span>arbostar.com</span></span>
        </div>
        <div class="browser__preview">
          <h3>ArboStar</h3>
          <p>Сайт, CRM и мобильное приложение для бизнеса в арбористике: заявки, роли доступа, push-уведомления.</p>
        </div>
      </a>
      <a class="browser" data-reveal href="https://mtp-global.com" target="_blank" rel="noopener" aria-label="Открыть mtp-global.com в новой вкладке">
        <div class="browser__bar">
          <span class="browser__dots"><span></span><span></span><span></span></span>
          <span class="browser__url"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3a14 14 0 010 18M12 3a14 14 0 000 18"/></svg><span>mtp-global.com</span></span>
        </div>
        <div class="browser__preview">
          <h3>МТП — Мир тайных покупателей</h3>
          <p>CRM для сети тайных покупателей: личные кабинеты для восьми ролей, рассылки, статистика.</p>
        </div>
      </a>
      <a class="browser" data-reveal href="https://vivaset.ru" target="_blank" rel="noopener" aria-label="Открыть vivaset.ru в новой вкладке">
        <div class="browser__bar">
          <span class="browser__dots"><span></span><span></span><span></span></span>
          <span class="browser__url"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3a14 14 0 010 18M12 3a14 14 0 000 18"/></svg><span>vivaset.ru</span></span>
        </div>
        <div class="browser__preview">
          <h3>Vivaset</h3>
          <p>Коммерческий проект под ключ: от интерфейса до базы данных — реализован полностью нашей командой.</p>
        </div>
      </a>
      <a class="browser" data-reveal href="https://spb.provy.ru" target="_blank" rel="noopener" aria-label="Открыть spb.provy.ru в новой вкладке">
        <div class="browser__bar">
          <span class="browser__dots"><span></span><span></span><span></span></span>
          <span class="browser__url"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3a14 14 0 010 18M12 3a14 14 0 000 18"/></svg><span>spb.provy.ru</span></span>
        </div>
        <div class="browser__preview">
          <h3>Provy</h3>
          <p>Коммерческий проект под ключ, реализован полностью нашей командой.</p>
        </div>
      </a>
    </div>
  </div>
</section>

<!-- ============================================================
     TECH STACK
     ============================================================ -->
<section class="section-alt" id="stack">
  <div class="container">
    <div class="section-head" data-reveal>
      <p class="eyebrow">Стек</p>
      <h2>Технологии в работе</h2>
      <p>Выбираем стек под задачу, а не подгоняем задачу под один любимый фреймворк.</p>
    </div>
    <div class="techgrid">
      <div class="techcol" data-reveal>
        <h3>Frontend</h3>
        <ul><li>Next.js</li><li>React</li><li>Angular</li><li>JavaScript / TypeScript</li></ul>
      </div>
      <div class="techcol" data-reveal>
        <h3>Backend</h3>
        <ul><li>Node.js</li><li>Python / FastAPI</li><li>.NET Core</li><li>PHP / Laravel / CodeIgniter</li></ul>
      </div>
      <div class="techcol" data-reveal>
        <h3>AI &amp; RAG</h3>
        <ul><li>LangChain</li><li>RAG</li><li>LLM / AI-агенты</li><li>Vector DB / ChromaDB</li></ul>
      </div>
      <div class="techcol" data-reveal>
        <h3>Данные</h3>
        <ul><li>MySQL</li><li>MongoDB</li><li>MSSQL</li><li>Oracle</li><li>SQL Server</li></ul>
      </div>
      <div class="techcol" data-reveal>
        <h3>Инфраструктура</h3>
        <ul><li>Docker</li><li>Git</li><li>AWS</li><li>REST API</li></ul>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     WHY US
     ============================================================ -->
<section id="why">
  <div class="container">
    <div class="section-head" data-reveal>
      <p class="eyebrow">Почему мы</p>
      <h2>Почему EVOLARIS</h2>
    </div>
    <div class="why__grid">
      <div class="why" data-reveal>
        <div class="why__mark" aria-hidden="true"></div>
        <h3>Всё в одной команде</h3>
        <p>Frontend, backend, данные и AI — без передачи проекта между подрядчиками и потери контекста.</p>
      </div>
      <div class="why" data-reveal>
        <div class="why__mark" aria-hidden="true"></div>
        <h3>AI ускоряет, инженерия — контролирует</h3>
        <p>Мы используем AI-инструменты, чтобы работать быстрее, но архитектуру и качество полностью контролируют инженеры.</p>
      </div>
      <div class="why" data-reveal>
        <div class="why__mark" aria-hidden="true"></div>
        <h3>Реальный коммерческий опыт</h3>
        <p>Production-CRM, e-commerce под ключ, AI-продукт с опубликованной исследовательской работой — не пет-проекты, а системы, которые работают.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     CONTACT
     ============================================================ -->
<section id="contact">
  <div class="container">
    <div class="contact__panel" data-reveal>
      <div>
        <p class="eyebrow">Контакты</p>
        <h2>Обсудим ваш проект</h2>
        <p class="contact__sub">Юрий ответит в Telegram или по телефону — расскажите в двух словах, что нужно построить.</p>
      </div>
      <div class="contact__manager">
        <span class="role">Менеджер проекта</span>
        <span class="name">Юрий</span>
        <a class="contact__row" href="https://t.me/Manager_pegase" target="_blank" rel="noopener">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M21 4.5L2.5 11.8l6 2.1M21 4.5l-3 15-6.7-5M21 4.5l-9.5 8.6M8.5 13.9v5l3-2.7"/></svg>
          @Manager_pegase
        </a>
        <a class="contact__row" href="tel:+380951118402">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M6.5 3.5h3l1.5 4.5-2.2 1.8a13 13 0 006.4 6.4l1.8-2.2 4.5 1.5v3a2 2 0 01-2.2 2 18 18 0 01-15.3-15.3 2 2 0 012-2z"/></svg>
          +380 95 111 84 02
        </a>
        <a class="btn btn-primary" href="https://t.me/Manager_pegase" target="_blank" rel="noopener">Написать в Telegram</a>
      </div>
    </div>
  </div>
</section>

</main>

<!-- ============================================================
     FOOTER
     ============================================================ -->
<footer class="footer">
  <div class="container">
    <div class="footer__brand">
      <img src="images/image_c6b942e3.webp" alt="" width="26" height="26">
      <span>EVOLARIS</span>
    </div>
    <p class="footer__meta">© <span id="year">2026</span> EVOLARIS. Full-stack &amp; AI-разработка.</p>
    <div class="footer__links">
      <a href="https://t.me/Manager_pegase" target="_blank" rel="noopener">Telegram</a>
      <a href="tel:+380951118402">+380 95 111 84 02</a>
    </div>
  </div>
</footer>

</div>

<script>
(function(){
  "use strict";

  /* mobile nav toggle */
  var toggle = document.getElementById('navToggle');
  var links = document.getElementById('navLinks');
  if(toggle && links){
    toggle.addEventListener('click', function(){
      var open = links.getAttribute('data-open') === 'true';
      links.setAttribute('data-open', String(!open));
      toggle.setAttribute('aria-expanded', String(!open));
    });
    links.querySelectorAll('a').forEach(function(a){
      a.addEventListener('click', function(){
        links.setAttribute('data-open','false');
        toggle.setAttribute('aria-expanded','false');
      });
    });
  }

  /* footer year */
  var y = document.getElementById('year');
  if(y){ y.textContent = new Date().getFullYear(); }

  /* scroll reveal */
  var reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var items = document.querySelectorAll('[data-reveal]');
  if(!reduced && 'IntersectionObserver' in window){
    var io = new IntersectionObserver(function(entries){
      entries.forEach(function(entry){
        if(entry.isIntersecting){
          entry.target.classList.add('in-view');
          io.unobserve(entry.target);
        }
      });
    }, {threshold:0.14, rootMargin:'0px 0px -8% 0px'});
    items.forEach(function(el){ io.observe(el); });
  } else {
    items.forEach(function(el){ el.classList.add('in-view'); });
  }

  /* starfield canvas */
  var canvas = document.getElementById('stars');
  if(canvas){
    var ctx = canvas.getContext('2d');
    var stars = [];
    var W, H, DPR;

    function resize(){
      DPR = Math.min(window.devicePixelRatio || 1, 2);
      W = window.innerWidth;
      H = document.documentElement.scrollHeight;
      canvas.width = W * DPR;
      canvas.height = Math.min(H, window.innerHeight * 2.2) * DPR;
      canvas.style.width = W + 'px';
      canvas.style.height = (canvas.height / DPR) + 'px';
      ctx.setTransform(DPR,0,0,DPR,0,0);
      seed();
    }

    function seed(){
      var count = Math.floor((W * (canvas.height/DPR)) / 3600);
      count = Math.max(90, Math.min(count, 260));
      stars = [];
      for(var i=0;i<count;i++){
        stars.push({
          x: Math.random()*W,
          y: Math.random()*(canvas.height/DPR),
          r: Math.random()*1.3 + 0.3,
          baseAlpha: Math.random()*0.5 + 0.35,
          phase: Math.random()*Math.PI*2,
          speed: Math.random()*0.6 + 0.25
        });
      }
    }

    function draw(t){
      ctx.clearRect(0,0,W, canvas.height/DPR);
      for(var i=0;i<stars.length;i++){
        var s = stars[i];
        var a = reduced ? s.baseAlpha : s.baseAlpha * (0.6 + 0.4*Math.sin(s.phase + t*0.001*s.speed));
        ctx.beginPath();
        ctx.fillStyle = 'rgba(220,232,255,' + a.toFixed(3) + ')';
        ctx.arc(s.x, s.y, s.r, 0, Math.PI*2);
        ctx.fill();
      }
      if(!reduced){ requestAnimationFrame(draw); }
    }

    resize();
    window.addEventListener('resize', resize);
    if(reduced){
      draw(0);
    } else {
      requestAnimationFrame(draw);
    }
  }
})();
</script>
</body>
</html>
