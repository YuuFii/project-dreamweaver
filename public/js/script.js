document.addEventListener('DOMContentLoaded', function () {
    

    document.getElementById('dropdownNavbarLink1').addEventListener('click', function () {
        console.log("Tombol ditekan");
        document.getElementById('dropdownNavbar1').classList.toggle('hidden');
    });

    document.getElementById('dropdownNavbarLink2').addEventListener('click', function () {
        console.log("Tombol ditekan");
        document.getElementById('dropdownNavbar2').classList.toggle('hidden');
    });

    const sidebarButton = document.getElementById("sidebar-btn");
    const sidebarMenu = document.getElementById("sidebar-menu");

    sidebarButton.addEventListener("click", () => {
        sidebarMenu.classList.toggle("hidden");
    });

    // Script untuk halaman bantuan

    const likeButtons = document.querySelectorAll('[id^="like"]');
    const fillButtons = document.querySelectorAll('[id^="fill"]');

    // Loop melalui setiap tombol dan tambahkan event listener
    fillButtons.forEach((fillButton, index) => {
        fillButton.addEventListener("click", () => {
            // Toggle kelas hidden untuk masing-masing pasangan tombol like
            likeButtons[index].classList.toggle("hidden");
            fillButton.classList.toggle("hidden");
        });
        likeButtons[index].addEventListener("click", () => {
            // Toggle kelas hidden untuk masing-masing pasangan tombol like
            fillButton.classList.toggle("hidden");
            likeButtons[index].classList.toggle("hidden");
        });
    });
});


document.getElementById('dropdownNavbarLink3').addEventListener('click', function () {
    document.getElementById('dropdownNavbar3').classList.toggle('hidden');
});

document.getElementById('dropdownNavbarLink4').addEventListener('click', function () {
    document.getElementById('dropdownNavbar4').classList.toggle('hidden');
});

document.getElementById('editProfileBtn').addEventListener('click', function() {
    document.getElementById('editProfileModal').classList.remove('hidden');
});

function closeEditProfileModal() {
    document.getElementById('editProfileModal').classList.add('hidden');
}

document.getElementById('close-btn').addEventListener('click', function() {
    document.getElementById('notification').style.display = 'none';
});

document.getElementById('close-btn').addEventListener('click', function() {
    document.getElementById('notification').style.display = 'none';
});

function closeEditProfileModal() {
    var modal = document.getElementById('editProfileModal');
    modal.classList.add('hidden');
}

function redirectLoginBtn(){
    window.location = "/login";
}

function redirectToPrivateChat(){
    window.location = "/chatify";
}

function redirectToForums(){
    window.location = "/forums";
}

function toggleNavbar() {
    const navbar = document.getElementById('navbar-sticky2');
    navbar.classList.toggle('hidden');
}