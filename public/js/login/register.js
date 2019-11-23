document.getElementById('registerSubmit').onclick = async function() {
    let formData = {};
    $('#formRegister').serializeArray().forEach(function (index) {
        let test = index.name;
        let value = index.value;
        formData[test] = value;
    });
    let response = await fetch('http://task/register', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify(formData)
    });
    if(response.ok) {
        let json = await response.json();
        if(json.error) {
            alert(json.error)
        } else {
            localStorage.token = json.token;
            document.location.replace(`http://task/recipe?token=${localStorage.token}`);
        }
    }
}