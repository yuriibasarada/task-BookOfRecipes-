async function logout() {
    fetch('http://task/logout', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'}
    });
    document.location.replace("http://task/login");
}