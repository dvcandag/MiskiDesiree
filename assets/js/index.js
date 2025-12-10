// Script para index: clona enlaces del header en #nav-contents y carga contenido vía fetch en #main-cards
document.addEventListener('DOMContentLoaded', function(){
    var headerMenu = document.querySelector('.main-menu');
    var target = document.getElementById('nav-contents');
    var mainCards = document.getElementById('main-cards');
    if(!headerMenu || !target) return;

    var links = headerMenu.querySelectorAll('a');
    links.forEach(function(a){
        var btn = document.createElement('a');
        btn.href = a.getAttribute('href');
        btn.textContent = a.textContent.trim();
        btn.className = 'nav-btn';
        btn.addEventListener('click', function(ev){
            ev.preventDefault();
            var href = a.getAttribute('href');
            fetch(href).then(function(res){
                if(!res.ok) throw new Error('Network response was not ok');
                return res.text();
            }).then(function(html){
                var parser = new DOMParser();
                var doc = parser.parseFromString(html, 'text/html');
                var newMain = doc.querySelector('main') || doc.body;
                if(newMain){
                    mainCards.innerHTML = newMain.innerHTML;
                    history.pushState({page: href}, '', href);
                }
            }).catch(function(){ window.location.href = href; });
        });
        target.appendChild(btn);
    });

    window.addEventListener('popstate', function(e){
        if(e.state && e.state.page){
            fetch(e.state.page).then(r=>r.text()).then(function(html){
                var doc = new DOMParser().parseFromString(html,'text/html');
                var newMain = doc.querySelector('main') || doc.body;
                if(newMain) document.getElementById('main-cards').innerHTML = newMain.innerHTML;
            });
        }
    });
});
