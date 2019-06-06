moment.locale('fr');
let currentDate =  new Date();
let datePlanning = new Date();

// Affiche le numero de la semaine
function getWeek() {
    let format = "W";
    let week = moment(datePlanning).format(format);
    $("#week").html("Semaine " + week);
}

// Affiche la date du planning
function getDay() {
    let format = "dddd D MMMM YYYY";
    let day = moment(datePlanning).format(format);

    day = day.charAt(0).toUpperCase() + day.slice(1);

    $("#day").html(day);
}

// Au clique du button Suivant, modifie la date et le numero de la semaine
$("#buttonNext").click(function nextDay() {
    datePlanning = moment(datePlanning).add(1, 'days');

    load();
});

// Au clique du button Precedent, modifie la date et le numero de la semaine
$("#buttonPrev").click(function prevDay() {
    if (moment(datePlanning).subtract(1, 'days') >= currentDate) {
        datePlanning = moment(datePlanning).subtract(1, 'days');

        load();
    }
});

function load() {
    getWeek();
    getDay();
}