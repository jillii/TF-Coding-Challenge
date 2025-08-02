/**
 * Optional JavaScript for enhanced interactions
 * This file is not required for the basic challenge
 */

document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.faq-question').forEach(btn => {
        btn.addEventListener('click', (e) => e.target.classList.toggle('collapse'))
    })
    
    console.log('Product listing page loaded');
});
