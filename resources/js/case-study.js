(function () {
    'use strict';

    const grid       = document.getElementById('csGrid');
    const searchEl   = document.getElementById('csSearch');
    const tabsScroll = document.getElementById('csTabsScroll');
    const emptyJs    = document.getElementById('csEmptyJs');
    const countEl    = document.getElementById('csCount');

    if (!grid) return;

    const cards = Array.from(grid.querySelectorAll('.cs-card-col'));
    let activeTab = 'all';

    function normalize(str) {
        return (str || '').toLowerCase().trim();
    }

    function filterCards() {
        const q = normalize(searchEl ? searchEl.value : '');

        // Step 1 — konti cards visible ahet te find kara
        const visibleCards = cards.filter(function (card) {
            const cat   = normalize(card.dataset.cat);
            const title = normalize(card.dataset.title);
            const desc  = normalize(card.dataset.desc);

            const catMatch  = activeTab === 'all' || cat === normalize(activeTab);
            const textMatch = !q || title.includes(q) || desc.includes(q) || cat.includes(q);

            return catMatch && textMatch;
        });

        // Step 2 — saglyanna aadhi hide kara
        cards.forEach(function (card) {
            card.classList.add('cs-hidden');
            card.classList.remove('cs-featured-col');

            // Normal card style restore
            const link = card.querySelector('a');
            if (link) {
                link.classList.remove('cs-featured-card');
                if (!link.classList.contains('cs-card')) {
                    link.classList.add('cs-card');
                }
            }

            // Inner content restore
            const inner = card.querySelector('.cs-featured-inner');
            if (inner) {
                inner.classList.remove('cs-featured-inner');
                inner.classList.add('cs-card-body-restored');
            }
        });

        // Step 3 — visible cards show kara, pehila featured banva
        visibleCards.forEach(function (card, index) {
            card.classList.remove('cs-hidden');

            // Fade animation
            card.style.animation = 'none';
            void card.offsetWidth;
            card.style.animation = 'csFadeIn 0.4s ease both';

            if (index === 0) {
                // PEHILA CARD → FEATURED HORIZONTAL
                card.classList.add('cs-featured-active');
                card.classList.remove('col-md-6', 'col-lg-4');
                card.classList.add('col-12');
            } else {
                // BAKI CARDS → NORMAL GRID
                card.classList.remove('cs-featured-active', 'col-12');
                card.classList.add('col-md-6', 'col-lg-4');
            }
        });

        // Count update
        if (countEl) {
            countEl.textContent = visibleCards.length + ' project' + (visibleCards.length !== 1 ? 's' : '');
        }

        // Empty state
        if (emptyJs) {
            emptyJs.classList.toggle('d-none', visibleCards.length > 0);
        }
    }

    // Tab click
    if (tabsScroll) {
        tabsScroll.addEventListener('click', function (e) {
            const btn = e.target.closest('.cs-tab');
            if (!btn) return;
            tabsScroll.querySelectorAll('.cs-tab').forEach(t => t.classList.remove('active'));
            btn.classList.add('active');
            activeTab = btn.dataset.cat;
            filterCards();
        });
    }

    // Search debounce
    let debounceTimer;
    if (searchEl) {
        searchEl.addEventListener('input', function () {
            clearTimeout(debounceTimer);
            debounceTimer = setTimeout(filterCards, 220);
        });
    }

    // Arrow buttons
    const arrowLeft  = document.getElementById('tabArrowLeft');
    const arrowRight = document.getElementById('tabArrowRight');
    if (arrowLeft && tabsScroll) {
        arrowLeft.addEventListener('click', function () {
            tabsScroll.scrollBy({ left: -150, behavior: 'smooth' });
        });
    }
    if (arrowRight && tabsScroll) {
        arrowRight.addEventListener('click', function () {
            tabsScroll.scrollBy({ left: 150, behavior: 'smooth' });
        });
    }

    // Sticky filter
    const filterBar = document.getElementById('csFilterBar');
    function adjustStickyTop() {
        const header = document.querySelector('header') || document.querySelector('nav.navbar');
        if (header && filterBar) {
            filterBar.style.top = header.offsetHeight + 'px';
        }
    }
    adjustStickyTop();
    window.addEventListener('resize', adjustStickyTop);

    // Initial load
    filterCards();

})();