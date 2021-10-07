// Init Materialize
document.addEventListener('DOMContentLoaded', () => {
    // Collapse
    var elemsc = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elemsc);

    // Dropdown
    var elemsd = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elemsd);

    // Modals
    var elemsm = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elemsm);

    // Sidenav
    var elemsv = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elemsv);

    // Tooltip
    var elems = document.querySelectorAll('.tooltipped');
    var instances = M.Tooltip.init(elems);

    // Material Box
    var elemsx = document.querySelectorAll('.materialboxed');
    var instances = M.Materialbox.init(elemsx);

    // Slider
    var elemsr = document.querySelectorAll('.slider');
    var instances = M.Slider.init(elemsr);

    // Paralax
    var elemsp = document.querySelectorAll('.parallax');
    var instances = M.Parallax.init(elemsp);
});