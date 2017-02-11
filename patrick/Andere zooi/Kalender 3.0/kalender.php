<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="pretty-calendar.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="pretty-calendar.js"></script>

<title>LK Events</title>
</head>
<body>
<div id="demo">
   
</div>
<script>
   	var events = [];
events[0] = [];
events[0][0] = "Sunday";
events[0][1] = "3:00pm";
events[0][2] = "Event 1"
events[0][3] = "#c0c0c0";
events[1] = [];
events[1][0] = "Monday";
events[1][1] = "12:00pm";
events[1][2] = "Event 2"
events[1][3] = "#8FD8D8";
events[2] = [];
events[2][0] = "Thursday";
events[2][1] = "5:00pm";
events[2][2] = "Event 3.1"
events[2][3] = "orange";
events[3] = [];
events[3][0] = "Thursday";
events[3][1] = "5:30pm";
events[3][2] = "Event 3.2"
events[3][3] = "purple";

var weekday=new Array(7);
weekday[0]="Sun (Apr 13)";
weekday[1]="Mon (Apr 14)";
weekday[2]="Tue (Apr 15)";
weekday[3]="Wed (Apr 16)";
weekday[4]="Thu (Apr 17)";
weekday[5]="Fri (Apr 18)";
weekday[6]="Sat (Apr 19)";

var prettyCal = new PrettyCalendar(events, "demo", false, weekday);
</script>

</body>
</html>