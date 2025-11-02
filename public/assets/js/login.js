document.addEventListener("DOMContentLoaded", function () {
    const button = document.getElementById("loginbtn");

    if (button) {
        button.addEventListener("click", askUser);
    } else {
        console.error("Error: Button with ID 'logintbtn' not found.");
    }

    function askUser(event) {
        // Prevent form submission or default behavior
        event.preventDefault();
        try {
            window.location.href = "tasks.php";

        } catch (err) {
            console.error("An unexpected error occurred:", err);
        }
    }
});
