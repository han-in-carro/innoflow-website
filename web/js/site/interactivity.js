window.addEventListener('load', () => {
    // Add interactivity to tab panels

    const tabPanelEls = document.querySelectorAll('.tab-panel')
    tabPanelEls.forEach(tabPanelEl => {
        const tabHeaderEls = tabPanelEl.querySelectorAll('.tab-header-container .tab-header')
        const tabContentEls = tabPanelEl.querySelectorAll('.tab-content-container .tab-content')

        let isAnyTabSelectedInitially = false

        tabHeaderEls.forEach(tabHeaderEl => {
            if (tabHeaderEl.dataset.active && !isAnyTabSelectedInitially) {
                isAnyTabSelectedInitially = true;

                tabContentEls.forEach(innerTabContentEl => {
                    if (innerTabContentEl.dataset.tabId === tabHeaderEl.dataset.tabId) {
                        innerTabContentEl.dataset.active = 'true';
                        innerTabContentEl.ariaSelected = 'true';
                    } else {
                        delete innerTabContentEl.dataset.active;
                        innerTabContentEl.ariaSelected = 'false';
                    }
                })
            }

            tabHeaderEl.addEventListener('click', (event) => {
                const selectedTabId = tabHeaderEl.dataset.tabId;

                tabHeaderEls.forEach(innerTabHeaderEl => {
                    if (innerTabHeaderEl.dataset.tabId === selectedTabId) {
                        innerTabHeaderEl.dataset.active = 'true';
                        innerTabHeaderEl.ariaSelected = 'true';
                    } else {
                        delete innerTabHeaderEl.dataset.active;
                        innerTabHeaderEl.ariaSelected = 'false';
                    }
                });

                tabContentEls.forEach(innerTabContentEl => {
                    if (innerTabContentEl.dataset.tabId === selectedTabId) {
                        innerTabContentEl.dataset.active = 'true';
                        innerTabContentEl.ariaSelected = 'true';
                    } else {
                        delete innerTabContentEl.dataset.active;
                        innerTabContentEl.ariaSelected = 'false';
                    }
                })
            })
        })

        if (!isAnyTabSelectedInitially) {
            const defaultSelectedTabHeaderEl = tabHeaderEls[0];
            const defaultSelectedTabId = defaultSelectedTabHeaderEl.dataset.tabId

            defaultSelectedTabHeaderEl.dataset.active = 'true';

            tabContentEls.forEach(innerTabContentEl => {
                if (innerTabContentEl.dataset.tabId === defaultSelectedTabId) {
                    innerTabContentEl.dataset.active = 'true';
                    innerTabContentEl.ariaSelected = 'true';
                } else {
                    delete innerTabContentEl.dataset.active;
                    innerTabContentEl.ariaSelected = 'false';
                }
            })
        }
    })

    // Nav bar menu toggle behaviors

    const mobileMenuEl = document.querySelector('#mobile-menu')
    const mobileMenuBackdropEl = document.querySelector('#mobile-menu-backdrop')
    const mobileMenuOpenButtonEl = document.querySelector('#mobile-menu-open-button')
    const mobileMenuCloseButtonEl = document.querySelector('#mobile-menu-close-button')

    const mobileMenuElTransitionName = mobileMenuEl.dataset.transitionName;
    const mobileMenuBackdropElTransitionName = mobileMenuBackdropEl.dataset.transitionName

    mobileMenuOpenButtonEl.addEventListener('click', () => {
        showElement(mobileMenuEl, mobileMenuElTransitionName)
        showElement(mobileMenuBackdropEl, mobileMenuBackdropElTransitionName)

    })

    mobileMenuCloseButtonEl.addEventListener('click', function closeButtonClick() {
        hideElement(mobileMenuEl, mobileMenuElTransitionName)
        hideElement(mobileMenuBackdropEl, mobileMenuBackdropElTransitionName)
    })


    // Nav bar style adjustment based on scroll

    const throttleDurationMs = 100;
    let isThrottleActive = false;

    const pageHeaderContentEl = document.querySelector('#page-header-content')
    const syncNavBarStyleBasedOnScroll = () => {
        if (window.scrollY > 100) {
            pageHeaderContentEl.classList.remove('border-transparent');
            pageHeaderContentEl.classList.add('shadow-xl', 'shadow-gray-500/5', 'dark:shadow-gray-950/10', 'border-gray-200', 'hover:backdrop-blur-none', 'hover:bg-white', 'bg-white/25', 'p-6', 'backdrop-blur-xs')
        } else {
            pageHeaderContentEl.classList.add('border-transparent');
            pageHeaderContentEl.classList.remove('shadow-xl', 'shadow-gray-500/5', 'dark:shadow-gray-950/10', 'border-gray-200', 'hover:backdrop-blur-none', 'hover:bg-white', 'bg-white/25', 'p-6', 'backdrop-blur-xs')
        }
    }

    window.addEventListener('scroll', (event) => {
        if (isThrottleActive) {
            return;
        }

        isThrottleActive = true;

        setTimeout(() => {
            syncNavBarStyleBasedOnScroll();
            isThrottleActive = false;
        }, throttleDurationMs)
    })

    // Run once on load
    syncNavBarStyleBasedOnScroll()
})