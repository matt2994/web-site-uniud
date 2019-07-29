function objectifyForm(formToconv) {
    //serialize data function
    $(formToconv).submit(function(event){
        var serializedData = $(this).serializeJSON(); 
    });
    return serializedData;
}

function connect(idForm){
    //Convert form to json    
    var data = objectifyForm(idForm)
    $.post('services/insert.php', data, function(responce){
        console.log("Response: " + response);
    });
} 

$(document).ready(function(){
    //when click on signin button call connect function
    $("#submit-signin").on("click", function(){
        connect("#form-signin");
    });
});
