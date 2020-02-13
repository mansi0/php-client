async function setValue(url) {
    try {
        const emailId = document.getElementById("emailid").value;
        const password = document.getElementById("password").value;

        const hotel = {
            hotelEmailId: emailId,
            hotelPassword: password
        };

        console.log(hotel)

        const promiseResponse = await fetch(url + "/hotel/loginhotel", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json;charset=utf-8'
            },
            body: JSON.stringify(hotel),
        });


        if (promiseResponse.status === 200) {


            var promisres = await fetch(url + "/hotel/getdetailsbyemailid", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json;charset=utf-8'
                },
                body: JSON.stringify(hotel),
            });

            var response = await promisres.json();
            var hid = response[0].hotelId.toString();
            console.log(hid);

            var hotelId = encodeURIComponent(hid);

            createCookie("hotelId", hotelId, "10");


            // Function to create the cookie 
            function createCookie(name, value, days) {
                var expires;
                console.log(value);

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

            window.location.replace("../public/hotelhomepage.php"); ``
        }
        if (promiseResponse.status === 400) {

            document.getElementById("bodyhotlogin").innerHTML = "**Invalid Password!!!";
        }

        if (promiseResponse.status === 404) {
            document.getElementById("bodyhotlogin").innerHTML = "**Hotel Not Found!!";
        }

        if (promiseResponse.status === 500) {
            alert('Exception');
        }
        console.log(promiseResponse);




    } catch (error) {
        console.log(error);


    }
}

async function accepthomedelivery(url,value) {

    const homedelivery = {
        status:value
    };

   // console.log(hotel)

    const promiseResponse = await fetch(url + "/homedelivery/updatehomedeliverybystatus", {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json;charset=utf-8'
        },
        body: JSON.stringify(homedelivery),
    });
    alert('order accepted');
} 





async function acceptselfpickup(url,value) {

    const selfpickup = {
        status:value
    };

   // console.log(hotel)

    const promiseResponse = await fetch(url + "/selfpickup/updateselfpickupbystatus", {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json;charset=utf-8'
        },
        body: JSON.stringify(selfpickup),
    });

    alert('order accepted');


}



/*async function getOrder(url) {

    function getCookie(c_name) {
        if (document.cookie.length > 0) {
            c_start = document.cookie.indexOf(c_name + "=");
            if (c_start != -1) {
                c_start = c_start + c_name.length + 1;
                c_end = document.cookie.indexOf(";", c_start);
                if (c_end == -1) {
                    c_end = document.cookie.length;
                }
                return unescape(document.cookie.substring(c_start, c_end));
            }
        }
        return "";
    }

    var hotelId = getCookie("hotelId");



}*/

