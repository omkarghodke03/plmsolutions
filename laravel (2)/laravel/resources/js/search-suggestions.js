document.addEventListener('DOMContentLoaded', function () {
    const input = document.getElementById('plm-search-input');
    const form = document.querySelector('.plm-search-bar__form');
    let box = document.createElement('div');
    box.className = 'plm-search-suggestions';
    form.appendChild(box);

    let timer;
    input.addEventListener('input', function () {
        clearTimeout(timer);
        const q = this.value.trim();
        if (q.length < 2) { box.innerHTML = ''; return; }

        timer = setTimeout(() => {
            fetch(`/search/suggestions?q=${encodeURIComponent(q)}`)
                .then(res => res.json())
                .then(data => {
                    box.innerHTML = data.map(item =>
                        `<a href="${item.url}" class="plm-suggestion-item">
                            <span>${item.title}</span>
                            <small>${item.type}</small>
                        </a>`
                    ).join('');
                });
        }, 300); // 300ms debounce
    });
});