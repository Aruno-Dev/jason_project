function checkInputFill(input){
    return input.value.length;
}

$(document).on('click','.post',function(){
    var nameInput = document.getElementById('name');
    if(checkInputFill(nameInput)){
        $('.nameError').html('');
   
        var add = confirm('Add '+$('#name').val()+' to the crew ?');
        if(add){
            $.ajax({
                type: 'POST',
                url: 'list',
                data: "name="+$('#name').val(),
            success: refreshPage,
            error: function() {alert('Erreur serveur')}
            })
            $('#name').val('')
        }
    }else{
        nameInput.focus({preventScroll:false})
        $('.nameError').html('enter a name');
    }
});

function refreshPage(response){
    
    $('.member-list').html(response);
}