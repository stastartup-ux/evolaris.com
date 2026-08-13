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