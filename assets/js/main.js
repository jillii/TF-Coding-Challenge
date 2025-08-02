/**
 * Optional JavaScript for enhanced interactions
 * This file is not required for the basic challenge
 */

document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.faq-question').forEach(btn => {
        btn.addEventListener('click', (e) => e.target.classList.toggle('collapse'))
    })
    
    document.querySelectorAll('.load-more').forEach(btn => {
        btn.addEventListener('click', (e) => {
            const target = document.getElementById(e.target.dataset.loadMoreContainer)
            const items = target.children
            let count = 0
            // un-hide three more items
            Array.from(items).forEach(item => {
                if (count === 3) { return } // break out of loop if when count reached 3
                if (item.classList.contains('hidden')) {
                    item.classList.remove('hidden')
                    count++
                }
            })
            // hide load more button if there are no more items to show
            if (target.querySelectorAll('.hidden').length === 0) { btn.remove() }
        })
    })
});
