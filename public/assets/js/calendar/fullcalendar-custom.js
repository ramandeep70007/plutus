document.addEventListener('DOMContentLoaded', function() {

    /* initialize the external events
    -----------------------------------------------------------------*/

    var containerEl = document.getElementById('external-events-list');
    new FullCalendar.Draggable(containerEl, {
      itemSelector: '.fc-event',
      eventData: function(eventEl) {
        return {
          title: eventEl.innerText.trim()
        }
      }
    });


    //// the individual way to do it
    // var containerEl = document.getElementById('external-events-list');
    // var eventEls = Array.prototype.slice.call(
    //   containerEl.querySelectorAll('.fc-event')
    // );
    // eventEls.forEach(function(eventEl) {
    //   new FullCalendar.Draggable(eventEl, {
    //     eventData: {
    //       title: eventEl.innerText.trim(),
    //     }
    //   });
    // });

    /* initialize the calendar
    -----------------------------------------------------------------*/

    var calendarEl = document.getElementById('calendar');

    var currentDate = new Date();

var year = currentDate.getFullYear();
var month = ('0' + (currentDate.getMonth() + 1)).slice(-2); // Adding 1 because months are zero-based
var day = ('0' + currentDate.getDate()).slice(-2);

var formattedDate = year + '-' + month + '-' + day;

    var calendar = new FullCalendar.Calendar(calendarEl, {
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
      },
      initialView: 'dayGridMonth',
      initialDate: formattedDate,
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      selectable: true,
      nowIndicator: true,
      // dayMaxEvents: true, // allow "more" link when too many events
      events: [
        {
          title: 'Scheduled Call',
          start: '2023-06-07',
        },

        {
          groupId: 999,
          title: 'Meeting with Team',
          start: '2022-11-11T16:00:00'
        },
        {
          groupId: 999,
          title: 'Upload New Project',
          start: '2022-11-16T16:00:00'
        },
        {
          title: 'Birthday Party',
          start: '2022-11-24',
          end: '2022-11-26'
        },
        {
          title: 'Reporting about Theme',
          start: '2022-11-28T10:30:00',
          end: '2022-11-29T12:30:00'
        },
        {
          title: 'Lunch',
          start: '2023-06-15'
        },
        {
          title: 'Meeting',
          start: '2023-06-12T14:30:00'
        },
        {
          title: 'Happy Hour',
          start: '2023-06-20T17:30:00'
        },
      ],
      editable: true,
      droppable: true, // this allows things to be dropped onto the calendar
      drop: function(arg) {
        // is the "remove after drop" checkbox checked?
        if (document.getElementById('drop-remove').checked) {
          // if so, remove the element from the "Draggable Events" list
          arg.draggedEl.parentNode.removeChild(arg.draggedEl);
        }
      }
    });
    calendar.render();

  });
