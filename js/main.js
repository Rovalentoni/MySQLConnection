document.addEventListener("DOMContentLoaded", function() {
    fetch('index.php?f=showListDb')
    .then(response => response.json())
    .then(data => {
        const container = document.getElementById('data-container');
        data.forEach((item) => {
            const div = document.createElement('div');
            div.textContent = `ID: ${item.id}, Name: ${item.name}`;
            container.appendChild(div);
        });
    })
    .catch((error) => {
        console.error('Error:', error);
    });
});
