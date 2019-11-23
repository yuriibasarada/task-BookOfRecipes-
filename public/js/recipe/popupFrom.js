$(document).ready(function(){
    $("#saveChangePopup").on('click', async function() {
        let name = $('.containerwe').children('div.row').children('.input-div-popup').children('input').val();
        let response = await fetch(`http://task/ingredient/add?token=${localStorage.token}`, {
            method: 'POST',
            headers: {'Content-Type': 'application/json'},
            body: JSON.stringify({name})
        });
        if(response.ok) {
            let json =  await response.json();
            if(json.error) {
                alert(json.error)
            } else {
                alert(json.message);
                location.reload()
            }
        }
    })
});