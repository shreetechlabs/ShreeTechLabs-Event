<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Details Form</title>
</head>

<body>
    <form action="event-detail-logic.php" method="POST" enctype="multipart/form-data">
        <!-- Select Input For Choose Table In Event DataBase -->
        <label for="whichTable">For:</label>
        <select name="whichTable" id="whichTable">
            <option value="softwarehackathon">Software Hackathon</option>
            <option value="hardwarehackathon">Hardware Hackathon</option>
            <option value="techcompetition">Tech Competition</option>
            <option value="workshop">Workshop</option>
            <option value="exhibition">Exhibition</option>
        </select><br><br><br>
        <!-- Input Tag For Event Title -->
        <label for="eventTitle">Event Title: </label>
        <input type="text" name="eventTitle" id="eventTitle" placeholder="Enter Title"><br><br><br>
        <!-- Input Tag For Event Tagline -->
        <label for="eventTagline">Event Tagline: </label>
        <input type="text" name="eventTagline" id="eventTagline" placeholder="Enter Tagline"><br><br><br>
        <!-- Input Tag For Event Prize Money -->
        <label for="eventPrize">Event Prize Money: </label>
        <input type="text" name="eventPrize" id="eventPrize" placeholder="Enter Prize Money"><br><br><br>
        <!-- Input Tag For Event Fee -->
        <label for="eventFee">Event Fee: </label>
        <input type="text" name="eventFee" id="eventFee" placeholder="Enter Fee"><br><br><br>
        <!-- Input Tag For Event Mode -->
        <label for="eventMode">Event Mode: </label>
        <select name="eventMode" id="eventMode">
            <option value="online">Online</option>
            <option value="offline">offline</option>
        </select><br><br><br>
        <!-- Input Tag For Event DeadLine -->
        <label for="eventDeadline">Event Deadline: </label>
        <input type="date" name="eventDeadline" id="eventDeadline" placeholder="Enter Deadline"><br><br><br>
        <!-- Input Tag For Event Priority -->
        <label for="eventPriority">Event Priority: </label>
        <select name="eventPriority" id="eventPriority">
            <option value="0" selected>N/A</option>
            <option value="1">Featured</option>
        </select><br><br><br>
        <!-- Input Tag For Event Link -->
         <label for="eventLink">Event Link: </label>
        <input type="text" name="eventLink" id="eventLink" placeholder="Enter Link"><br><br><br>
        <!-- Input Tag For Organisation Logo -->
        <label for="eventLogo">Event Logo: </label>
        <input type="file" name="eventLogo" id="eventLogo"><br><br><br>
        <input type="submit" name="submit" value="submit"><br><br><br>
    </form>
</body>

</html>