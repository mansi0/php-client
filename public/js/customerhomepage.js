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



async function getValue1(value) {
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

        window.location.replace("../public/hotelDisplayFacility.php");
    } catch (error) {
        console.log(error);
    }
}

async function searchFood(url) {
    //  alert('in searchfood');

    try {

        const na = document.getElementById('search').value;
        const name=na.toLowerCase();

        const foodList = await fetch(url + "/food/getdetail/" + name);
        var response = await foodList.json();
        if (response[0] == null) {
            alert(name + ' not found');
            window.location.replace("../public/customerhomepage.php");
        }
        else {
            var fid = response[0].foodId.toString();


            createCookie("fId", fid, "10");


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

            window.location.replace("../public/hotelDisplaySearchFood.php");
        }
    } catch (error) {
        console.log(error);
    }
}
