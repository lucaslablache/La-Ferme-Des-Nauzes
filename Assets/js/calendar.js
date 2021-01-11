var cal;
var calendarEvents;
$(document).ready(() => {
    var templates = {
        titlePlaceholder: function() {
            return 'Titre';
        },
        locationPlaceholder: function() {
            return 'Adresse';
        },
        startDatePlaceholder: function() {
            return 'Heure de début';
        },
        endDatePlaceholder: function() {
            return 'Heure de fin';
        },
        popupDetailBody: function(schedule) {
            return 'Informations : ' + schedule.body;
        },
        popupDetailUser: function(schedule) {
            return 'User : ' + (schedule.attendees || []).join(', ');
        },
        popupDetailDate: function(isAllDay, start, end) {
            console.log(moment(start.toUTCString()).format('DD/MM/YYYY hh:mm a'));
            console.log(moment(end));
            var isSameDate = moment(start).format('DD/MM/YYYY') == moment(end).format('DD/MM/YYYY');
            var endFormat = (isSameDate ? '' : 'DD/MM/YYYY ') + 'hh:mm a';
    
            if (isAllDay) {
                return moment(start.toUTCString()).format('DD/MM/YYYY hh:mm a') + (isSameDate ? '' : ' - ' + moment(end.toUTCString()).format('DD/MM/YYYY hh:mm a'));
            }
    
            return (moment(start.toUTCString()).format('DD/MM/YYYY hh:mm a') + ' - ' + moment(end.toUTCString()).format(endFormat));
        },
        popupDetailLocation: function(schedule) {
            return 'Adresse : ' + schedule.location;
        },
    };
    
    cal = new tui.Calendar('#calendar', {
        defaultView: 'month', // monthly view option
        month: {
            daynames: ['Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Vend', 'Sam'],
            startDayOfWeek: 1
        },
        template: templates,
        useDetailPopup: true,
        isReadOnly: true,
        
    });

    calendarEvents = $("#calendar-data").children();
    calendarArray = [];
    
    console.log(moment(Date.now()).format('DD-MM-YYYY hh:mm'));
    for (let i = 0; i < calendarEvents.length ; i++) {

        console.log($(calendarEvents[i]).attr('date')+' '+$(calendarEvents[i]).attr('hStart'));
        calendarArray.push(
            {
                id: i.toString(),
                isAllDay: 0,
                calendarId: i.toString(),
                title: 'Marché',
                body: $(calendarEvents[i]).attr('info'),
                location: $(calendarEvents[i]).attr('location'),
                category: 'time',
                start: $(calendarEvents[i]).attr('date')+'T'+$(calendarEvents[i]).attr('hStart')+'+01:00',
                end: $(calendarEvents[i]).attr('date')+'T'+$(calendarEvents[i]).attr('hEnd')+'+01:00',
                isReadOnly: true    // schedule is read-only
            }
        )
    }

    cal.createSchedules(calendarArray);

    //remove des ul / li
    $("#calendar-data").remove();

    $("#move-today").click( () => {
        cal.today();
      });

    $("#move-prev").click( () => {
      cal.prev();
    });

    $("#move-next").click( () => {
        cal.next();
      });
    
    
});