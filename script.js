'use strict';

document.addEventListener("DOMContentLoaded", function() {
    const dropdown = document.getElementById("list");

    dropdown.addEventListener("change", function() {
        const selectedValue = dropdown.value;

        // Eerst alle oefening divs verbergen
        for (let i = 1; i <= 14; i++) {
            const exDiv = document.getElementById("ex" + i);
            if (exDiv) {
                exDiv.style.display = "none";
            }
        }

        // Alleen de geselecteerde oefening tonen
        if (selectedValue) {
            const selectedDiv = document.getElementById("ex" + selectedValue);
            if (selectedDiv) {
                selectedDiv.style.display = "block";
            }
        }
    });

    // Optioneel: verberg alle oefeningen bij het laden
    for (let i = 1; i <= 14; i++) {
        const exDiv = document.getElementById("ex" + i);
        if (exDiv) exDiv.style.display = "none";
    }
});
