document.addEventListener("DOMContentLoaded", function () {
    const dateInput = document.getElementById("date");
    const heureSelect = document.getElementById("heure");

    // Heures disponibles selon les jours
    const hoursMonday = ["06:45"];
    const hoursTuesdayToSaturday = ["06:45", "18:30"];
    const hoursSunday = ["07:30", "09:30", "11:00"];

    // Fonction pour vérifier et convertir la date saisie
    function parseDate(dateString) {
        const dateParts = dateString.split("-"); // Format attendu : YYYY-MM-DD
        if (dateParts.length === 3) {
            const year = parseInt(dateParts[0], 10);
            const month = parseInt(dateParts[1], 10) - 1; // Les mois commencent à 0 en JS
            const day = parseInt(dateParts[2], 10);
            return new Date(year, month, day);
        }
        return null; // Retourne null si le format est incorrect
    }

    // Fonction pour mettre à jour les heures disponibles
    function updateAvailableHours(selectedDate) {
        // Vider les options du champ "heure"
        heureSelect.innerHTML = '<option value="" disabled selected>Veuillez choisir une heure</option>';

        if (!selectedDate) return; // Si aucune date sélectionnée, ne rien faire

        // Convertir la date et déterminer le jour de la semaine
        const parsedDate = parseDate(selectedDate);
        if (!parsedDate || isNaN(parsedDate)) {
            console.error("Date invalide :", selectedDate);
            return;
        }

        const dayOfWeek = parsedDate.getDay(); // 0 = dimanche, 1 = lundi, ..., 6 = samedi
        let availableHours;

        // Déterminer les heures disponibles en fonction du jour
        if (dayOfWeek === 0) {
            // Dimanche
            availableHours = hoursSunday;
        } else if (dayOfWeek === 1) {
            // Lundi
            availableHours = hoursMonday;
        } else {
            // Mardi à samedi
            availableHours = hoursTuesdayToSaturday;
        }

        // Ajouter les options disponibles
        availableHours.forEach(hour => {
            const option = document.createElement("option");
            option.value = hour;
            option.textContent = hour;
            heureSelect.appendChild(option);
        });
    }

    // Mettre à jour les heures lorsque la date change
    dateInput.addEventListener("input", function () {
        updateAvailableHours(this.value);
    });

    // Initialiser les heures si une date est déjà sélectionnée
    if (dateInput.value) {
        updateAvailableHours(dateInput.value);
    }
});
