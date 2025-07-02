document.addEventListener("DOMContentLoaded", function () {
    const checkbox = document.getElementById("agreement-checkbox");
    const continueButton = document.getElementById("continue-button");
    const errorMessage = document.getElementById("checkbox-error");
    const tabs = document.querySelectorAll('[role="tab"]');

    const pendaftaranTab = document.getElementById("pendaftaran-tab");
    const syaratTab = document.getElementById("syarat-tab");
    const kirimTab = document.getElementById("kirim-tab");

    const pendaftaranContent = document.getElementById("pendaftaran");
    const syaratContent = document.getElementById("syarat");
    const kirimContent = document.getElementById("kirim");

    // Nonaktifkan syarat & kirim tab di awal
    syaratTab.setAttribute("aria-disabled", "true");
    syaratTab.classList.add("opacity-50", "cursor-not-allowed");
    kirimTab.setAttribute("aria-disabled", "true");
    kirimTab.classList.add("opacity-50", "cursor-not-allowed");

    // Fungsi untuk mengaktifkan tab tertentu
    function activateTab(tabId) {
        // Sembunyikan semua konten
        [pendaftaranContent, syaratContent, kirimContent].forEach((el) =>
            el.classList.add("hidden")
        );

        // Reset semua tab style
        [pendaftaranTab, syaratTab, kirimTab].forEach((tab) => {
            tab.classList.remove("bg-gray-100", "text-blue-600");
            tab.classList.add("hover:text-gray-600", "hover:bg-gray-50");
        });

        // Tampilkan tab & konten yang diinginkan
        const targetTab = document.getElementById(`${tabId}-tab`);
        const targetContent = document.getElementById(tabId);

        if (targetTab && targetContent) {
            targetTab.classList.add("bg-gray-100", "text-blue-600");
            targetTab.classList.remove(
                "hover:text-gray-600",
                "hover:bg-gray-50"
            );
            targetContent.classList.remove("hidden");
        }
    }

    // Klik tombol Lanjutkan
    continueButton.addEventListener("click", function () {
        if (!checkbox.checked) {
            errorMessage.classList.remove("hidden");
            return;
        }

        errorMessage.classList.add("hidden");

        // Aktifkan tab "syarat" dan "kirim"
        syaratTab.removeAttribute("aria-disabled");
        kirimTab.removeAttribute("aria-disabled");
        syaratTab.classList.remove("opacity-50", "cursor-not-allowed");
        kirimTab.classList.remove("opacity-50", "cursor-not-allowed");

        // Pindah ke tab syarat
        activateTab("syarat");
    });

    // Klik tab navigasi
    tabs.forEach((tab) => {
        tab.addEventListener("click", function (e) {
            if (this.getAttribute("aria-disabled") === "true") {
                e.preventDefault();
                return;
            }

            const targetId = this.getAttribute("aria-controls");
            activateTab(targetId);
        });
    });

    // Aktifkan tab awal (pendaftaran)
    activateTab("pendaftaran");
});
