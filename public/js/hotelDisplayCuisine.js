async function getValue(val, url) {
    try {




        createCookie("val", val, "10");


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

        window.location.replace("../public/foodDisplay2.php");
    } catch (error) {
        console.log(error);
    }
}

async function deleteOrder(url) {

   // alert('indeleteorder');

    

    try {

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

        var orderId = getCookie("orderId");


        const promiseResponse = await fetch(url + "/order/deleteorder/" + orderId);
        /*var response = await foodList.json();
        var fid = response[0].foodId.toString();
        */
       //salert('sure?');
        console.log(promiseResponse);
        
         if (promiseResponse.status === 500) {
            alert('Exception occur');
            window.location.replace("../public/hotelDisplay.php");
        }
        
         else if (promiseResponse.status === 200) {
           // alert('in 200');
            window.location.replace("../public/hotelDisplay.php");
        }

        window.location.replace("../public/hotelDisplay.php");

    } catch (error) {
        console.log(error);
    }


}

async function setValue(url,hotelFoodId) {

    const quantity=document.getElementById(hotelFoodId).value;

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

    var orderId = getCookie("orderId");

    const foodOrder = {
        hotelFoodId:hotelFoodId,
        orderId:orderId,
        quantity:quantity
    };

    console.log(foodOrder);


    const promiseResponse = await fetch(url + "/foodorder/addfoodorder", {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json;charset=utf-8'
        },
        body: JSON.stringify(foodOrder),
    });

    // console.log(promiseResponse);
    if(promiseResponse.status === 200 ) 
    {
        alert('added into cart');
        document.getElementById("bodyfooddisplay").innerHTML = "added into cart";
        window.location.replace("../public/foodDisplay1.php");
    }

    if(promiseResponse.status ===400)
    {
        alert('already added into cart');
    }
    if (promiseResponse.status === 500) {
        //alert('in 400');
        alert('this element is already added into cart');
       // document.getElementById("bodyhtl").innerHTML = "Internal Server Error!!";
    }




}


