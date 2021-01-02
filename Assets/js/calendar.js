var cal;
var calendarEvents;
$(document).ready(() => {
    cal = new tui.Calendar('#calendar', {
        defaultView: 'month', // monthly view option
        month: {
            daynames: ['Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Vend', 'Sam'],
            startDayOfWeek: 1
        },
        
    });

    calendarEvents = $("#calendar-data").children();
    calendarArray = [];
    
    for (let i = 0; i < calendarEvents.length ; i++) {

        console.log($(calendarEvents[i]).attr('hStart'));
        calendarArray.push(
            {
                id: i.toString(),
                calendarId: i.toString(),
                title: 'my schedule',
                body: $(calendarEvents[i]).attr('info'),
                location: $(calendarEvents[i]).attr('location'),
                category: 'time',
                dueDateClass: '',
                start: $(calendarEvents[i]).attr('date')+'T'+$(calendarEvents[i]).attr('hStart'),
                end: $(calendarEvents[i]).attr('date')+'T'+$(calendarEvents[i]).attr('hEnd'),
                isReadOnly: true    // schedule is read-only
            }
        )
    }

    cal.createSchedules(calendarArray);
    

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


