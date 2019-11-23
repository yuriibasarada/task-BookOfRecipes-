$(document).ready(function () {
    $('#saveChange').on('click', async function () {
        let name = $('form').children('div.form-group').children('div.col-md-10').children('input').val();
        let description = $('form').children('div.form-group').children('div.col-md-10').children('textarea').val();
        let ingredients = [];
        $('form').children('.ingredient').each(function( index) {
            ingredients[index] = {ingredient: $(this).children('div#selectInput').children('select').val(),
                amount: $(this).children('div.col-md-2').children('input').val()  };
        });

        const formData = {
            name,
            description,
            ingredients
        };
        let response = await fetch(`http://task/recipe/add?token=${localStorage.token}`, {
            method: 'POST',
            headers: {'Content-Type': 'application/json'},
            body: JSON.stringify(formData)
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
    });
});

