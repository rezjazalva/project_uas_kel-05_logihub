    $(document).ready(function() {
        $("#userDropdown").click(function(e) {
            e.stopPropagation(); // Menghentikan event klik dari menyebar
            $("#dropdownContent").toggle();
            $("#logoutFloatingBox").toggle(); // Tampilkan logout melayang ketika dropdown ditampilkan
        });

        // Klik di luar dropdown akan menyembunyikan dropdown dan logout melayang
        $(document).click(function() {
            $("#dropdownContent").hide();
            $("#logoutFloatingBox").hide();
        });
    });