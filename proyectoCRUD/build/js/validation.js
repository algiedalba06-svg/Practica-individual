document.addEventListener("DOMContentLoaded", function(){

const tipoSelect = document.getElementById("tipoHabitacion");
const habitacionSelect = document.getElementById("habitacionSelect");
const huespedesInput = document.getElementById("huespedesInput");

if(!tipoSelect || !habitacionSelect || !huespedesInput) return;

const habitaciones = {
    "Individual":[1,2,3,4,5],
    "Doble":[6,7,8,9,10],
    "Suite":[11,12,13,14,15],
    "Familiar":[16,17,18,19,20]
};

const maxHuespedes = {
    "Individual":1,
    "Doble":2,
    "Suite":3,
    "Familiar":4
};

function actualizarHabitaciones(){

    const tipo = tipoSelect.value;

    habitacionSelect.innerHTML = '<option value="">Seleccionar</option>';

    if(!habitaciones[tipo]) return;

    habitaciones[tipo].forEach(function(num){

        const option = document.createElement("option");

        option.value = num;
        option.textContent = "Habitación " + num;

        habitacionSelect.appendChild(option);

    });

    huespedesInput.max = maxHuespedes[tipo];

}

tipoSelect.addEventListener("change", actualizarHabitaciones);

});