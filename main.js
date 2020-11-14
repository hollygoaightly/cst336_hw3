var sDate;
var eDate;

window.onload = function(){
    $("#search").on("click", search);
};

function search(){
    sDate = $("#start").val();
    eDate = $("#end").val();
    if(isValid()){
        clearInfo();  
        doCallout();
    }
}

function isValid(){
    var isValid = true;
    if("" == sDate){
        isValid = false;
        $("#sError").html("Start Date cannot be blank!");
    }
    if("" == eDate){
        isValid = false;
        $("#eError").html("End Date cannot be blank!");
    }
    if(sDate > eDate){
        isValid = false;
        $("#error").html("End Date must come after Start Date!");
    }
    return isValid;
}

function clearInfo(){
    $("#sError").html("");
    $("#eError").html("");
    $("#error").html("");
    $("#data").html("");
}

async function doCallout(){
    var magnitude = $("#magnitude").val();
    var place = $("#place").val();
    var url = "https://earthquake.usgs.gov/fdsnws/event/1/query?format=geojson&starttime="+ sDate +"&endtime=" + eDate;
    if(magnitude != ""){
        url += "&minmagnitude="+ magnitude;
    }
    let response = await fetch(url);
    let data = await response.json();
    var features = data.features;
    var count = 0;
    var report = "";
    for(let i = 0; i < features.length; i++){
        if(features[i].properties.place.includes(place)){
            count++;
            var date = new Date(features[i].properties.time); 
            report += '<u>Place</u>: ' + features[i].properties.place +'<br/><u>Time</u>: '+ date +'<br/><u>Magnitude</u>: <b>' + features[i].properties.mag + '</b><br/><br/>';
        }
    }
    var output = count + ' earthquakes reported <br/><br/>' + report;
    $("#data").html(output);
}
