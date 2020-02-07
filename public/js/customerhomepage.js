async function getValue(value) {
    try {


        createCookie("value", value, "10");


        // Function to create the cookie 
        function createCookie(name, value, days) {
            var expires;

            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                expires = "; expires=" + date.toGMTString();
            }
            else {
                expires = "";
            }

            document.cookie = escape(name) + "=" +
                escape(value) + expires + "; path=/";
        }

        window.location.replace("../public/hotelDisplayCuisine.php");
    } catch (error) {
        console.log(error);
    }
}

