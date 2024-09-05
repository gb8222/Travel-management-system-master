
        window.addEventListener('DOMContentLoaded', (event) => {
            const searchBtn = document.querySelector('.search-btn');
            const whereInput = document.querySelector('.search-field.where');
            const datesInput = document.querySelector('.search-field.dates');

            searchBtn.addEventListener('click', function(event) {
                event.preventDefault();
                const whereValue = whereInput.value;
                const datesValue = datesInput.value;
                console.log("Where: " + whereValue);
                console.log("Dates: " + datesValue);
                // Add your desired logic here
            });
        });
    