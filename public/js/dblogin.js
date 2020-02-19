async function setValue(url) {
    try {
        const emailId = document.getElementById("emailid").value;
        const password = document.getElementById("password").value;
        // var slider = document.getElementsByClassName("switch");
        // console.log(slider);

        const deliveryboy = {
            deliveryboyEmailId: emailId,
            deliveryboyPassword: password
        };

        console.log(deliveryboy)

        const promiseResponse = await fetch(url + "/deliveryboy/logindeliveryboy", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json;charset=utf-8'
            },
            body: JSON.stringify(deliveryboy),
        });


        if (promiseResponse.status === 200) {
            var promisres = await fetch(url + "/deliveryboy/getdeliveryboybyemailid", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json;charset=utf-8'
                },
                body: JSON.stringify(deliveryboy),
            });


            var response = await promisres.json();
            var dbid = response[0].deliveryboyId.toString();
            console.log(dbid);

            var deliveryBoyId = encodeURIComponent(dbid);

            createCookie("deliveryBoyId", deliveryBoyId, "10");


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


            window.location.replace("../public/dbhomepage.php");
        }
        if (promiseResponse.status === 400) {

            document.getElementById("bodydblogin").innerHTML = "**Invalid Password!!!";
        }

        if (promiseResponse.status === 404) {
            document.getElementById("bodydblogin").innerHTML = "**Deliveryboy Not Found!!";
        }

        if (promiseResponse.status === 500) {
            alert('Exception');
        }
        console.log(promiseResponse);





    } catch (error) {
        console.log(error);


    }
}

async function getValue(url) {

    var value = document.getElementsByClassName("onoff");
    var val;
    if (value[0].checked === true) {
        val=1;
    }
    else val=0;


    const deliveryboy = {
        status:val
    };

   // console.log(deliveryboy)

    const promiseResponse = await fetch(url + "/deliveryboy/updatedeliveryboybystatus", {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json;charset=utf-8'
        },
        body: JSON.stringify(deliveryboy),
    });

}

