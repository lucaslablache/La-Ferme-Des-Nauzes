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
            var isSameDate = moment(start).format('DD/MM/YYYY') == moment(end).format('DD/MM/YYYY');
            var endFormat = (isSameDate ? '' : 'DD/MM/YYYY ') + 'HH:mm';
    
            if (isAllDay) {
                return moment(start.toUTCString()).format('DD/MM/YYYY HH:mm') + (isSameDate ? '' : ' - ' + moment(end.toUTCString()).format('DD/MM/YYYY HH:mm'));
            }
    
            return (moment(start.toUTCString()).format('DD/MM/YYYY HH:mm') + ' - ' + moment(end.toUTCString()).format(endFormat));
        },
        popupDetailLocation: function(schedule) {
            return 'Adresse : ' + schedule.location;
        },
    };
    
    cal = new tui.Calendar('#calendar', {
        defaultView: 'month',
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
    
    for (let i = 0; i < calendarEvents.length ; i++) {
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