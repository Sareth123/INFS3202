<link href='css/fullcalendar/fullcalendar.print.min.css' rel='stylesheet' media='print' />
<script src='js/fullcalendar/moment.min.js'></script>

<script src='js/fullcalendar/fullcalendar.min.js'></script>
<script src='js/fullcalendar/gcal.min.js'></script>
<script>

  $(document).ready(function() {

    $('#calendar').fullCalendar({

      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,listYear'
      },

      displayEventTime: false, // don't show the time column in list view

      // THIS KEY WON'T WORK IN PRODUCTION!!!
      // To make your own Google API key, follow the directions here:
      // http://fullcalendar.io/docs/google_calendar/
      googleCalendarApiKey: 'AIzaSyAji3B4PgpcRNaqTq-ssbUgeW7PBZh4_r4',
      events:{googleCalendarId:'sportchallenger123@gmail.com'
    },

      eventClick: function(event) {
        // opens events in a popup window
        window.open(event.url, 'gcalevent', 'width=700,height=600');
        return false;
      },

      loading: function(bool) {
        $('#loading').toggle(bool);
      }

    });

  });

</script>
<style>


  

  #calendar {
    max-width: 45%;
    margin: 0 auto;
  }

</style>

<body>

  

  <div id='calendar'></div>

</body>
</html>
