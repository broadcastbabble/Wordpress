/* Loads the Google data JavaScript client library */
google.load("gdata", "2.x");

function initGoogleCalendar() {
    // init the Google data JS client library with an error handler
    google.gdata.client.init(handleGDError);
    // load the code.google.com developer calendar
    loadCalendar('https://www.google.com/calendar/feeds/broadcastbabble@gmail.com/public/full');
}

/**
* Uses Google data JS client library to retrieve a calendar feed from the specified
* URL.  The feed is controlled by several query parameters and a callback 
* function is called to process the feed results.
*
* @param {string} calendarUrl is the URL for a public calendar feed
*/
function loadCalendar(calendarUrl) {
    var service = new 
      google.gdata.calendar.CalendarService('gdata-js-client-samples-simple');
    var query = new google.gdata.calendar.CalendarEventQuery(calendarUrl);
    query.setOrderBy('starttime');
    query.setSortOrder('ascending');
    query.setFutureEvents(true);
    query.setSingleEvents(true);
    query.setMaxResults(10);

    service.getEventsFeed(query, listEvents, handleGDError);
}

/**
* Callback function for the Google data JS client library to call when an error
* occurs during the retrieval of the feed.  Details available depend partly
* on the web browser, but this shows a few basic examples. In the case of
* a privileged environment using ClientLogin authentication, there may also
* be an e.type attribute in some cases.
*
* @param {Error} e is an instance of an Error 
*/
function handleGDError(e) {
    document.getElementById('jsSourceFinal').setAttribute('style',
      'display:none');
    if (e instanceof Error) {
        /* alert with the error line number, file and message */
        alert('Error at line ' + e.lineNumber +
          ' in ' + e.fileName + '\n' +
          'Message: ' + e.message);
        /* if available, output HTTP error code and status text */
        if (e.cause) {
            var status = e.cause.status;
            var statusText = e.cause.statusText;
            alert('Root cause: HTTP error ' + status + ' with status text of: ' +
            statusText);
        }
    } else {
        alert(e.toString());
    }
}

/**
* Callback function for the Google data JS client library to call with a feed 
* of events retrieved.
*
* Creates an unordered list of events in a human-readable form.  This list of
* events is added into a div called 'events'.  The title for the calendar is
* placed in a div called 'calendarTitle'
*       
* @param {json} feedRoot is the root of the feed, containing all entries 
*/
function listEvents(feedRoot) {
    var entries = feedRoot.feed.getEntries();
    /* create a new unordered list */
    var ul = document.getElementById('google_calendar_list');
    /* loop through each event in the feed */
    var len = entries.length;

    var monthNames = ["January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December"];

    for (var i = 0; i < len; i++) {
        var entry = entries[i];
        var title = entry.getTitle().getText();
        var description = entry.getContent().getText();
        var startDateTime = null;
        var startJSDate = null;
        var times = entry.getTimes();
        if (times.length > 0) {
            startDateTime = times[0].getStartTime();
            startJSDate = startDateTime.getDate();
        }
        var li = document.createElement('li');

        var datediv = document.createElement('div');
        datediv.className = "date";

        var daydiv = document.createElement('div');
        daydiv.className = "date-day";
        daydiv.appendChild(document.createTextNode(startJSDate.getDate()));
        datediv.appendChild(daydiv);

        var monthdiv = document.createElement('div');
        monthdiv.className = "date-month";
        monthdiv.appendChild(document.createTextNode(monthNames[startJSDate.getMonth()]));
        datediv.appendChild(monthdiv);

        var contentdiv = document.createElement('div');
        contentdiv.className = "content";
        var contenthead = document.createElement('h2');
        contenthead.appendChild(document.createTextNode(title));
        contentdiv.appendChild(contenthead);
        contentdiv.appendChild(document.createTextNode(description));

        li.appendChild(datediv);
        li.appendChild(contentdiv);


        /* append the list item onto the unordered list */
        ul.appendChild(li);
    }

    $('#google_calendar_list').cycle({ fx: 'scrollDown', timeout: 15000, random: 1 });

}