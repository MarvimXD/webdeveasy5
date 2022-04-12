function update(){
    $.ajax({
        url: 'novophp.php',
        success: function(result){
            $('#frame').html(result);
            console.log("oi");
            setTimeout(getComment, 100);

        }
    });
}