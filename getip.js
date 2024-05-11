// This script will fetch the user's IP address using a PHP script and display it on the webpage.

// Function to update the IP address on the webpage
function updateIPAddress(ip) {
    document.getElementById('ipAddress').textContent = ip;
}

// AJAX request to get the user's IP address
const xhr = new XMLHttpRequest();
xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
            const response = xhr.responseText;
            updateIPAddress(response);
        } else {
            console.error('Error getting IP address.');
        }
    }
};

xhr.open('GET', 'get_ip.php', true);
xhr.send();