/**
 * ABP RentalForge - Documentation
 * Vanilla JS tab engine (prefix: abrf). No dependencies.
 * Handles: tab switching, nav group toggles, live search,
 * mobile drawer, deep links (#hash), scroll-to-top.
 */
(function () {
    'use strict';

    if (typeof document === 'undefined') {
        return;
    }

    function ready(fn) {
        if (document.readyState !== 'loading') {
            fn();
        } else {
            document.addEventListener('DOMContentLoaded', fn);
        }
    }

    ready(function () {
        const wrap = document.querySelector('.abrf-doc');
        if (!wrap) {
            return;
        }

        const nav = wrap.querySelector('.abrf-nav');
        const content = wrap.querySelector('.abrf-content');
        const links = Array.prototype.slice.call(nav.querySelectorAll('[data-abrf-target]'));
        const pages = Array.prototype.slice.call(content.querySelectorAll('[data-abrf-tab]'));
        const searchInput = wrap.querySelector('.abrf-search input');
        const burger = wrap.querySelector('.abrf-burger');
        const backdrop = wrap.querySelector('.abrf-backdrop');
        const topBtn = wrap.querySelector('.abrf-top');

        let activeId = null;

        function showTab(id, updateHash) {
            const page = content.querySelector('[data-abrf-tab="' + id + '"]');
            if (!page) {
                return;
            }

            pages.forEach(function (p) { p.classList.remove('is-active'); });
            page.classList.add('is-active');

            links.forEach(function (l) {
                const hit = l.getAttribute('data-abrf-target') === id;
                l.classList.toggle('is-active', hit);
                if (hit) {
                    let group = l.closest('.abrf-nav-group');
                    while (group) {
                        group.classList.add('is-open');
                        group = group.parentElement ? group.parentElement.closest('.abrf-nav-group') : null;
                    }
                }
            });

            activeId = id;

            if (updateHash && history.replaceState) {
                history.replaceState(null, '', '#' + id.replace('#', ''));
            }

            const scroller = content;
            if (scroller) {
                scroller.scrollTop = 0;
            }
            window.scrollTo({ top: wrap.getBoundingClientRect().top + window.scrollY - 90, behavior: 'smooth' });
        }

        /* click nav links */
        links.forEach(function (link) {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                const id = link.getAttribute('data-abrf-target');
                if (id) {
                    showTab(id, true);
                    closeDrawer();
                }
            });
        });

        /* nav group toggles (also open the group landing page) */
        Array.prototype.forEach.call(nav.querySelectorAll('[data-abrf-group]'), function (btn) {
            btn.addEventListener('click', function () {
                const group = btn.closest('.abrf-nav-group');
                if (group) {
                    group.classList.toggle('is-open');
                }
                const id = btn.getAttribute('data-abrf-target');
                if (id) {
                    showTab(id, true);
                    closeDrawer();
                }
            });
        });

        /* search filter */
        if (searchInput) {
            searchInput.addEventListener('input', function () {
                const q = searchInput.value.trim().toLowerCase();
                links.forEach(function (l) {
                    const txt = l.textContent.toLowerCase();
                    const group = l.closest('.abrf-nav-group');
                    let visible = true;
                    if (q) {
                        visible = txt.indexOf(q) !== -1;
                        l.classList.toggle('is-active', visible);
                    } else {
                        l.classList.remove('is-active');
                    }
                    if (group) {
                        group.classList.toggle('is-filtered', visible);
                        if (q) {
                            l.style.display = visible ? '' : 'none';
                        } else {
                            l.style.display = '';
                        }
                    }
                });
            });
        }

        /* mobile drawer */
        function closeDrawer() {
            wrap.classList.remove('is-open');
        }
        if (burger) {
            burger.addEventListener('click', function () {
                wrap.classList.toggle('is-open');
            });
        }
        if (backdrop) {
            backdrop.addEventListener('click', closeDrawer);
        }
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') {
                closeDrawer();
            }
        });

        /* scroll-to-top */
        if (topBtn) {
            topBtn.addEventListener('click', function () {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
            window.addEventListener('scroll', function () {
                const y = window.scrollY || document.documentElement.scrollTop;
                topBtn.classList.toggle('is-visible', y > 500);
            }, { passive: true });
        }

        /* deep link: open requested tab, else first visible one */
        const hash = window.location.hash;
        const requested = hash && pages.filter(function (p) {
            return p.getAttribute('data-abrf-tab') === hash;
        }).length ? hash : null;

        const firstTarget = links.length ? links[0].getAttribute('data-abrf-target') : null;
        showTab(requested || firstTarget, false);
    });
})();