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

    let isThrottleActive = false;

    const pageHeaderContentEl = document.querySelector('#page-header-content')
    const syncNavBarStyleBasedOnScroll = () => {
        if (window.scrollY > 50) {
            pageHeaderContentEl.classList.remove('border-transparent');
            pageHeaderContentEl.classList.add('shadow-xl', 'shadow-gray-500/5', 'dark:shadow-gray-950/10', 'border-gray-200', 'hover:backdrop-blur-none', 'hover:bg-white', 'bg-white/70', 'p-6')
        } else {
            pageHeaderContentEl.classList.add('border-transparent');
            pageHeaderContentEl.classList.remove('shadow-xl', 'shadow-gray-500/5', 'dark:shadow-gray-950/10', 'border-gray-200', 'hover:backdrop-blur-none', 'hover:bg-white', 'bg-white/70', 'p-6')
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
        }, 100)
    })

    // Run once on load
    syncNavBarStyleBasedOnScroll()

    // Add interaction to banner components
    const bannerEls = document.querySelectorAll('.banner-container');
    bannerEls.forEach(bannerEl => {
        const bannerElTransitionName = bannerEl.dataset.transitionName;
        let bannerElIsOpen = bannerEl.dataset.isOpen;

        if (bannerElIsOpen === 'true' && bannerElTransitionName) showElement(bannerEl, bannerElTransitionName);

        const bannerCloseBtnEl = bannerEl.querySelector('.banner__close-button')
        bannerCloseBtnEl.addEventListener('click', (ev) => {
            ev.preventDefault();
            bannerEl.dataset.isOpen = 'false';
            hideElement(bannerEl, bannerElTransitionName)
        })
    })
})