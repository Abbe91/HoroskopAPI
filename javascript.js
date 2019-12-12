

$(document).ready(function(){
    $("#createBtn").click(function(){
        var name= $("#createTextbox").val();
        // stutsText
        $.post("horoscopeInfo.json",
        {
            name: name
            // name : "Gemini",
            // gloss: "The Twins",
            // element: "Air",
            // longitude_start: "60",
            // longitude_end: "90"
        },
        function(data, status){
            console.log('data', data);
            console.log('status', status);
            alert("Data: " + data + "\nStatus: " + status);
        });
         });

});


