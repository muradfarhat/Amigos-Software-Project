<!DOCTYPE html>
<html lang="en">
<head>
    <title> Calendar</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link rel="icon" href="favicon.png">

    <!-- CSS -->
    <link rel="stylesheet" href="CSS/evo-calendar.min.css">

    <link rel="stylesheet" href="CSS/evo-calendar.css">

    <link rel="stylesheet" href="CSS/demo.css">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Mono&display=swap" rel="stylesheet">
</head>
<body>
 <main>
        <div class="main-container">
     <section id="demos">
                <div class="section-content">
                    <p class="section-title --shrt">Your Calender</p>
                    <div class="console-log">
                        <div class="log-content">
                            <div class="--noshadow" id="demoEvoCalendar"></div>
                        </div>
                    </div>
                    <div class="action-buttons">
                        <button class="btn-action" id="addBtn">ADD EVENT</button>
                        <button class="btn-action" id="removeBtn" disabled>REMOVE EVENT</button>
                    </div>
                </div>
            </section>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
    <script src="JS/evo-calendar.min.js"></script>
    <script src="JS/demo.js"></script>
</body>
</html>
