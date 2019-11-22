document.getElementById('loginSubmit').onclick = async function() {
    let login = document.getElementsByTagName('input')[0].value;
    let password = document.getElementsByTagName('input')[1].value;
    let response = await fetch('http://task/auth', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify({login, password})
    });
    if(response.ok) {
        let json = await response.json();
        if(json.error) {
            alert(json.error)
        } else {
            document.location.replace("http://task/recipe");
        }
    }
}