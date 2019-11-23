async function deleteRecipe(element) {
    $(element).closest('tr').remove();
    let id = $(element).context.rel;
    let response = await fetch(`http://task/recipe/delete/${id}?token=${localStorage.token}`, {
        method: 'POST',
        headers: {'Content-Type': 'application/json'}
    });
    if(response.ok) {
        let json =  await response.json();
        if(json.error) {
            alert(json.error)
        } else {
            alert(json.message);
            // location.reload()
        }
    }
}