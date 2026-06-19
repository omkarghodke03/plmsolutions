(function () {
    'use strict';

    /* ───── LISTING PAGE ONLY ───── */
    const grid      = document.getElementById('csGrid');
    const searchEl  = document.getElementById('csSearch');
    const tabsScroll = document.getElementById('csTabsScroll');
    const emptyJs   = document.getElementById('csEmptyJs');
    const countEl   = document.getElementById('csCount');

    if (!grid) return; // not listing page

    const cards = Array.from(grid.querySelectorAll('.cs-card-col'));
    let activeTab = 'all';

    function normalize(str) {
        return (str || '').toLowerCase().trim();
    }

    function filterCards() {
        const q = normalize(searchEl ? searchEl.value : '');
        let visible = 0;

        cards.forEach(function (card) {
            const cat   = normalize(card.dataset.cat);
            const title = normalize(card.dataset.title);
            const desc  = normalize(card.dataset.desc);

            const catMatch  = activeTab === 'all' || cat === normalize(activeTab);
            const textMatch = !q || title.includes(q) || desc.includes(q) || cat.includes(q);

            if (catMatch && textMatch) {
                showCard(card);
                visible++;
            } else {
                hideCard(card);
            }
        });

        if (countEl) countEl.textContent = visible + ' project' + (visible !== 1 ? 's' : '');
        if (emptyJs) emptyJs.classList.toggle('d-none', visible > 0);
    }

    function showCard(card) {
        card.classList.remove('cs-hidden');
        // Fade in
        void card.offsetWidth; // reflow
        card.style.animation = 'none';
        void card.offsetWidth;
        card.style.animation = 'csFadeIn 0.4s ease both';
    }

    function hideCard(card) {
        card.classList.add('cs-hidden');
    }

    /* Tab clicks */
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

    /* Search input — debounced */
    let debounceTimer;
    if (searchEl) {
        searchEl.addEventListener('input', function () {
            clearTimeout(debounceTimer);
            debounceTimer = setTimeout(filterCards, 220);
        });
    }

    /* Arrow scroll buttons */
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

    /* Sticky filter offset adjustment for fixed header */
    const filterBar = document.getElementById('csFilterBar');
    function adjustStickyTop() {
        const header = document.querySelector('header') || document.querySelector('nav.navbar');
        if (header && filterBar) {
            filterBar.style.top = header.offsetHeight + 'px';
        }
    }
    adjustStickyTop();
    window.addEventListener('resize', adjustStickyTop);

    /* Initial filter pass */
    filterCards();

})();