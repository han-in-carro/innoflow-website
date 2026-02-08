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
})