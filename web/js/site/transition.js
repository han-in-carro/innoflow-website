// Transition (hide/show)
/**
 * Handles the "enter" transition for an element.
 * @param {HTMLElement} element - The element to transition in.
 *
 * @param {string} transitionName
 */
const showElement = (element, transitionName) => {
    const enterFromClass = `${transitionName}-enter-from`;
    const enterActiveClass = `${transitionName}-enter-active`
    const enterToClass = `${transitionName}-enter-to`

    // Show element
    element.classList.remove('hidden');

    element.classList.add(enterActiveClass, enterFromClass);

    // setTimeout for display 'none' transition workaround
    setTimeout(() => {
        element.classList.remove(enterFromClass);
        element.classList.add(enterToClass);
    })


    element.addEventListener('transitionend', function onTransitionEnd() {
        element.classList.remove(enterActiveClass, enterToClass);

        // Clean up listener
        element.removeEventListener('transitionend', onTransitionEnd);
    }, {once: true});
}

/**
 * Handles the "leave" transition for an element.
 * @param {HTMLElement} element - The element to transition out.
 * @param {string} transitionName
 */
const hideElement = (element, transitionName) => {
    const leaveFromClass = `${transitionName}-leave-from`;
    const leaveActiveClass = `${transitionName}-leave-active`
    const leaveToClass = `${transitionName}-leave-to`


    element.classList.add(leaveActiveClass, leaveFromClass, leaveToClass)
    element.classList.remove(leaveFromClass)


    // 5. Wait for the transition to end
    element.addEventListener('transitionend', function onTransitionEnd() {
        element.classList.remove(leaveActiveClass, leaveToClass)

        // Hide
        element.classList.add('hidden');

        // Clean up listener
        element.removeEventListener('transitionend', onTransitionEnd);
    }, {once: true});
}
