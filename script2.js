document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');

    form.addEventListener('submit', function (event) {
        event.preventDefault();

        const formData = new FormData(form);

        fetch('conn1.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json()) // Assuming the server returns JSON
        .then(data => {
            // Handle the server response here
            console.log(data);

            // You can update the UI or perform additional actions based on the response
            if (data.success) {
                document.getElementById('submission-response').innerHTML = 'Form submitted successfully';
                
            } else {
                document.getElementById('submission-response').innerHTML = 'Form submission failed';
            }
        })
        .catch(error => {
            // Handle any errors that occurred during the fetch
            console.error('Error:', error);
        });
    });
});
