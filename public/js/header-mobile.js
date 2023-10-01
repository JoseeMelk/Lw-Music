// JavaScript
function toggleMenu() {
    const options = document.querySelector('.options');
    const buttons = document.querySelector('.buttons');

    if (options.style.display === 'none' || options.style.display === '') {
        options.style.display = 'flex';
        buttons.style.display = 'flex';
    } else {
        options.style.display = 'none';
        buttons.style.display = 'none';
    }
}
