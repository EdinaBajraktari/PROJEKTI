function isLoggedIn() {
    return localStorage.getItem('userToken') !== null;
}


function openLink(youtubeLink) {
    if (isLoggedIn()) {
        window.open(youtubeLink, "_blank");
    } else {
        var userResponse = confirm("You need to be logged in to view this course. Do you want to log in?");

        if (userResponse) {
            var placeholderToken = 'example_token';
            localStorage.setItem('userToken', placeholderToken);
            
            window.location.reload();
        }
    }
}

