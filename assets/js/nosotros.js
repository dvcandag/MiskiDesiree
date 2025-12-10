// scripts mínimos para nosotros.html
document.addEventListener('DOMContentLoaded', function(){
    // año en footer
    var y = new Date().getFullYear();
    var el = document.getElementById('year'); if(el) el.textContent = y;
    // contador: se activa cuando la sección es visible (IntersectionObserver)
    var counters = document.querySelectorAll('.stat .num');
    if(counters.length){
        var runCounters = function(){
            counters.forEach(function(node){
                if(node._countRan) return;
                var target = parseInt(node.getAttribute('data-target') || node.textContent || 0,10);
                var start = 0;
                var duration = 1200; // ms
                var stepTime = Math.max(10, Math.floor(duration / (target || 1)));
                var timer = setInterval(function(){
                    start += Math.ceil(target / (duration/stepTime));
                    if(start >= target){ node.textContent = target; clearInterval(timer); node._countRan = true; }
                    else node.textContent = start;
                }, stepTime);
            });
        };

        // observar cuando la sección stats entra en viewport
        var statsSection = document.querySelector('.stats');
        if(window.IntersectionObserver && statsSection){
            var obs = new IntersectionObserver(function(entries){
                entries.forEach(function(entry){ if(entry.isIntersecting){ runCounters(); obs.disconnect(); } });
            }, { threshold: 0.35 });
            obs.observe(statsSection);
        } else { runCounters(); }
    }

    // formulario: validación simple
    var form = document.getElementById('contact-form');
    if(form){
        form.addEventListener('submit', function(e){
            e.preventDefault();
            var name = form.querySelector('#name');
            var email = form.querySelector('#email');
            var message = form.querySelector('#message');
            var feedback = document.getElementById('form-feedback');
            feedback.textContent = '';
            if(!name.value.trim()) return feedback.textContent = 'Por favor, ingresa tu nombre.';
            if(!email.value.trim() || !/^\S+@\S+\.\S+$/.test(email.value)) return feedback.textContent = 'Por favor, ingresa un correo válido.';
            if(!message.value.trim()) return feedback.textContent = 'El mensaje no puede estar vacío.';

            // simulación de envío
            feedback.textContent = 'Enviando mensaje...';
            setTimeout(function(){
                feedback.textContent = 'Gracias, tu mensaje fue recibido. Te responderemos pronto.';
                form.reset();
            }, 900);
        });
    }

    // Modal simple para miembros del equipo
    var modal = document.getElementById('member-modal');
    var mdCard = modal && modal.querySelector('.md-card');
    var openMember = function(fig){
        if(!modal) return;
        var img = fig.querySelector('img') ? fig.querySelector('img').src : '';
        var name = fig.querySelector('strong') ? fig.querySelector('strong').textContent : '';
        var role = fig.querySelector('.role') ? fig.querySelector('.role').textContent : '';
        var bio = fig.querySelector('.bio') ? fig.querySelector('.bio').innerHTML : '';
        modal.querySelector('.md-card img').src = img;
        modal.querySelector('.md-card .md-body h3').textContent = name;
        modal.querySelector('.md-card .md-body .md-role').textContent = role;
        modal.querySelector('.md-card .md-body .md-bio').innerHTML = bio;
        modal.classList.add('open');
    };

    // asignar eventos a cada miembro
    var members = document.querySelectorAll('.member');
    members.forEach(function(m){
        m.addEventListener('click', function(){ openMember(m); });
        m.addEventListener('keydown', function(e){ if(e.key === 'Enter' || e.key === ' ') { e.preventDefault(); openMember(m); } });
        m.setAttribute('tabindex','0');
        m.setAttribute('role','button');
    });

    if(modal){
        modal.addEventListener('click', function(e){ if(e.target === modal || e.target.classList.contains('md-close')) modal.classList.remove('open'); });
        document.addEventListener('keydown', function(e){ if(e.key === 'Escape' && modal.classList.contains('open')) modal.classList.remove('open'); });
    }
});
