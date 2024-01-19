window.addEventListener("scroll", () => {
    var top = this.scrollY;

    nav = document.querySelector('nav');

    if (top > 0) return nav.style.borderBottom = '4px dotted #B0926A';
    
    nav.style.borderBottom = 'none';
});