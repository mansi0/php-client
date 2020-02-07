async function food(hotelId) {
    try {

        

        var hid=encodeURIComponent(hotelId);
        //var hotelId=document.getElementById('hotelid').value;
        // Creating a cookie after the document is ready 
        
            createCookie("hotelId", hid, "10");
    


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
        window.location.replace("../public/foodDisplay1.php");

    } catch (error) {
        console.log(error);
    }
}
