// Zoek het keuzemenu op met id="categories".
const select = document.getElementById("categories");

// Verzamel alle productgroepen met een data-category-attribuut.
const groups = document.querySelectorAll("[data-category]");

function applyFilter(chosen) {
    // Controleer elke productgroep afzonderlijk.
    groups.forEach(function (group) {
        // Toon alle groepen bij "all", of alleen de groep met de gekozen categorie.
        if (chosen === "all" || group.dataset.category === chosen) {
            group.classList.remove("hidden");
        } else {
            // Verberg groepen die niet bij de gekozen categorie horen.
            group.classList.add("hidden");
        }
    });
}

// Gebruik de categorie uit de URL, bijvoorbeeld ?categories=gietijzer.
const requestedCategory = new URLSearchParams(window.location.search).get("categories");
const hasRequestedCategory = Array.from(select.options).some(function (option) {
    return option.value === requestedCategory;
});
select.value = hasRequestedCategory ? requestedCategory : "all";
applyFilter(select.value);

// Voer de filter opnieuw uit zodra de gebruiker een andere optie kiest.
select.addEventListener("change", function () {
    applyFilter(select.value);
});