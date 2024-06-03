const toggleButton = document.querySelector('[data-collapse-toggle="navbar-sticky2"]');
const navbar = document.getElementById('navbar-sticky2');

toggleButton.addEventListener('click', function () {
    navbar.classList.toggle('hidden');
});

const dropdowns = [
    {
        button: document.getElementById('dropdownNavbarLink3'),
        menu: document.getElementById('dropdownNavbar3')
    },
    {
        button: document.getElementById('dropdownNavbarLink4'),
        menu: document.getElementById('dropdownNavbar4')
    }
];

dropdowns.forEach(dropdown => {
    dropdown.button.addEventListener('click', function () {
        dropdown.menu.classList.toggle('hidden');
    });
});