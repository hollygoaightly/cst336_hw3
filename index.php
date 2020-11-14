<!DOCTYPE html>
<html>
    <head>
        <title>Earthquake Catalog</title>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Courier+Prime&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
        <h1>Earthquake Catalog</h1>
        <h3>Select a date Range</h3>
        Start Date: <input type="date" id="start"><br/>
            <span id="sError" class="error"></span><br/>
        End Date: <input type="date" id="end"><br/>
            <span id="eError" class="error"></span><br/>
        Select a minimum magnitude: <select id="magnitude">
            <option value="">Select One</option>
            <option value="1.0">1.0</option>
            <option value="2.0">2.0</option>
            <option value="3.0">3.0</option>
            <option value="4.0">4.0</option>
            <option value="5.0">5.0</option>
            <option value="6.0">6.0</option>
            <option value="7.0">7.0</option>
            <option value="8.0">8.0</option>
            <option value="9.0">9.0</option>
        </select><br/><br/>
        Select a place: <select id="place">
            <option value="">All</option>
            <option value="Argentina">Argentina</option>
            <option value="Alaska">Alaska</option>
            <option value="California">California</option>
            <option value="Greece">Greece</option>
            <option value="Hawaii">Hawaii</option>
            <option value="Idaho">Idaho</option>
            <option value="Indonesia">Indonesia</option>
            <option value="Japan">Japan</option>
            <option value="Montana">Montana</option>
            <option value="Mexico">Mexico</option>
            <option value="Nevada">Nevada</option>
            <option value="Pakistan">Pakistan</option>
            <option value="Papua New Guinea">Papua New Guinea</option>
            <option value="Philippines">Philippines</option>
            <option value="Taiwan">Taiwan</option>
            <option value="Texas">Texas</option>
            <option value="Utah">Utah</option>
        </select><br/><br/>
        <span id="error" class="error"></span><br/><br/>
        <button id="search">Search</button>
        <br/><br/>
        <script src = "main.js"></script>
        <br/><br/>
        <div id="data"></div>
    </body>
</html>