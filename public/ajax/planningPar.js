const MaxTd = 26;
const WidthTd = 3.6;
const Color = ["#710101", "#00590a", "#024b72", "#360274", "#945700", "#9a0043", "#6d8c00"];

let choiceColor = 0;
let currentDatePlanning = new Date(datePlanning);

// Met à jour les réservations du planning
function updatePlanning(data) {
    // On vide le tableau
    $("#tabBody").empty();

    // Pour chaque salle
    $.each(data, function(key, value) {
        completeTab(key, value);
    });
}

function completeTab(nameOfRoom, value) {
    nameOfRoomSlug = slugify(nameOfRoom);

    // Ajoute le nom de la salle
    let html = "";
    html += "<tr class='room' id='" + nameOfRoomSlug + "'>";
    html += "   <td class='void nameOfRoom' id='name'>" + nameOfRoom + "</td>";
    html += "</tr>";

    $("#tabBody").append(html);

    if (value.length != 0) {
        // Ajoute les réservations de la salle
        addReservation(value, nameOfRoomSlug);
    } else {
        noReservation(nameOfRoomSlug);
    }
}

function addReservation(value, slug) {
    let dateTemp = new Date(currentDatePlanning);
    dateTemp.setHours(10);
    dateTemp.setMinutes(0);
    dateTemp.setSeconds(0);

    $.each(value, function(key, object) {
        let dateForRes = formatageDate(object);
        dateForRes[0] = setDateForRes(dateForRes[0]);
        let colspan = 0;
        let html = '';

        // Tant que la date temp est inferieur à la date de fin de la reservation OU que la date temp arrive à 21H00
        while(dateTemp < dateForRes[1] && dateTemp.getHours() !== 23) {
            if ((dateTemp > dateForRes[0] && dateTemp < dateForRes[1]) && dateTemp.getHours() != 23) {
                colspan++;
            } else {
                html = '<td style="width: '+WidthTd+'%"></td>';
                $("#" + slug).append(html);
            }
            dateTemp = dateAdd(dateTemp, 'minute', 30);
        }

        afficherTd(object, colspan, slug);
    });

    // Ajoute les td manquant
    while (dateTemp.getHours() !== 23) {
        let html = '';
        html += '<td style="width: '+WidthTd+'%"></td>';
        $("#" + slug).append(html);

        dateTemp = dateAdd(dateTemp, 'minute', 30);
    }
}

function setDateForRes(dateForResDeb) {
    // Met à jour le jour de la date
    if (dateForResDeb.getDay() !== currentDatePlanning.getDay()) {
        dateForResDeb = dateAdd(dateForResDeb, 'day', 1);
        dateForResDeb.setHours(10);
        dateForResDeb.setMinutes(0);
        dateForResDeb.setSeconds(0);
    }

    // Met à jour l'heure de la date
    if (dateForResDeb.getHours() < 10) {
        dateForResDeb.setHours(10);
        dateForResDeb.setMinutes(0);
        dateForResDeb.setSeconds(0);
    }

    return dateForResDeb;
}

function afficherTd (value, colspan, slug) {
    let html = '';
    let col;

    if (value['visPlan'] === false) {
        col = "#000";
    } else {
        col = Color[choiceColor];
        if (choiceColor + 1 >= Color.length) {
            choiceColor = 0;
        } else {
            choiceColor++;
        }
    }

    html += '<td data-id="'+value['id']+'" class="text-center cliquable" style="width:'+colspan * WidthTd+'%; background-color: '+col+'" colspan="'+ colspan +'">';
    html += '   <span class="libres">'+ value['libres'] +'</span>';
    html += '   <br>';
    html += '   <br>';
    html += '   <br>';
    html += '   <span class="client">Client : '+ value['client']['titre'] +'</span>';
    html += '</td>';

    $("#" + slug).append(html);

    // return dateTemp;
}

function noReservation(slug) {
    let html = '';

    for (let i=0; i < MaxTd; i++) {
        html += '<td style="width: '+WidthTd+'%"></td>';
    }

    $("#" + slug).append(html);
}

function formatageDate(object) {
    let datetimeArray = [];

    datetimeArray[0] = object['planning']['datetimeDebut']['date'];
    datetimeArray[1] = object['planning']['datetimeFin']['date'];

    // Remettre l'heure à niveau
    datetimeArray[0] = dateAdd(datetimeArray[0], 'minute', 120);
    datetimeArray[1] = dateAdd(datetimeArray[1], 'minute', 120);

    return datetimeArray;
}


function slugify(text)
{
    return text.toString().toLowerCase()
        .replace(/\s+/g, '-')           // Replace spaces with -
        .replace(/[^\w\-]+/g, '')       // Remove all non-word chars
        .replace(/\-\-+/g, '-')         // Replace multiple - with single -
        .replace(/^-+/, '')             // Trim - from start of text
        .replace(/-+$/, '');            // Trim - from end of text
}

/**
 * Adds time to a date. Modelled after MySQL DATE_ADD function.
 * Example: dateAdd(new Date(), 'minute', 30)  //returns 30 minutes from now.
 *
 * @param date  Date to start with
 * @param interval  One of: year, quarter, month, week, day, hour, minute, second
 * @param units  Number of units of the given interval to add.
 */
function dateAdd(date, interval, units) {
    let ret = new Date(date); //don't change original date

    let checkRollover = function() {
        if(ret.getDate() != date.getDate())
            ret.setDate(0);
    };

    switch(interval.toLowerCase()) {
        case 'year'   :  ret.setFullYear(ret.getFullYear() + units); checkRollover();  break;
        case 'quarter':  ret.setMonth(ret.getMonth() + 3*units); checkRollover();  break;
        case 'month'  :  ret.setMonth(ret.getMonth() + units); checkRollover();  break;
        case 'week'   :  ret.setDate(ret.getDate() + 7*units);  break;
        case 'day'    :  ret.setDate(ret.getDate() + units);  break;
        case 'hour'   :  ret.setTime(ret.getTime() + units*3600000);  break;
        case 'minute' :  ret.setTime(ret.getTime() + units*60000);  break;
        case 'second' :  ret.setTime(ret.getTime() + units*1000);  break;
        default       :  ret = undefined;  break;
    }
    return ret;
}