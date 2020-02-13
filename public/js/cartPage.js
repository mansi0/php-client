async function deleteFoodOrder(url) {

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


        const promiseResponse = await fetch(url + "/foodorder/deletefoodorder/" + orderId);
        /*var response = await foodList.json();
        var fid = response[0].foodId.toString();
        */
        //salert('sure?');
        console.log(promiseResponse);

        if (promiseResponse.status === 500) {
            //  alert('Exception occur');
            window.location.replace("../public/foodDisplay1.php");
        }

        else if (promiseResponse.status === 200) {
            //  alert('in 200');
            window.location.replace("../public/foodDisplay1.php");
        }

        window.location.replace("../public/foodDisplay1.php");

    } catch (error) {
        console.log(error);
    }


}






async function deleteFood(url, hotelFoodId) {

    try {
        const promiseResponse = await fetch(url + "/foodorder/deletefoodorderbyhotelfoodid/" + hotelFoodId);
        /*var response = await foodList.json();
        var fid = response[0].foodId.toString();
        */
        //salert('sure?');
        console.log(promiseResponse);

        if (promiseResponse.status === 500) {
            //  alert('Exception occur');
            window.location.replace("../public/cartpage.php");
        }

        else if (promiseResponse.status === 200) {
            //  alert('in 200');
            window.location.replace("../public/cartpage.php");
        }

        window.location.replace("../public/cartpage.php");

    } catch (error) {
        console.log(error);
    }
}







async function deliverNow(url, total) {
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

        deliverNowadd(url, orderId);


        const order = {
            orderId: orderId,
            total: total,
            status:1
        }

        const promiseResponse = await fetch(url + "/order/updateorderbytotal/", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json;charset=utf-8'
            },
            body: JSON.stringify(order),
        });


        if (promiseResponse.status === 200) {

            console.log('total is updated');
            window.location.replace("../public/food.php");

        }

        if (promiseResponse.status === 500) {
            alert('total is not updated');
            window.location.replace("../public/food.php");
        }
    }
    catch (error) {
        console.log(error);
    }
}







async function deliverNowadd(url, orderId) {

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

    var customerId = getCookie("customerId");

    const customerList = await fetch(url + "/customer/getcustomerbycustomerid/" + customerId);
    var responsec = await customerList.json();
    var address = responsec[0].address.toString();
    var locality = responsec[0].locality.toString();
    var landmark = responsec[0].landmark.toString();
    var city = responsec[0].city.toString();
    var state = responsec[0].state.toString();


    try {
        const deliverNow = {
            address:address,
            locality:locality,
            landmark:landmark,
            city:city,
            state:state,
            orderId: orderId,
            status: 1
        };

        const promiseResponses = await fetch(url + "/homedelivery/addhomedelivery/", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json;charset=utf-8'
            },
            body: JSON.stringify(deliverNow),
        });


        if (promiseResponses.status === 200) {
            alert('order is placed for deliverNow');
        }
        if (promiseResponses === 500) {
            alert('exception ocuur');
        }

        const delivernowlist = await fetch(url + "/homedelivery/getdetailsbyorderid" + orderId);
        var response = await delivernowlist.json();
        var hid = response[0].homeDeliveryId.toString();

        createCookie("homeDeliveryId", hid, "10");


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
        window.location.replace("../public/food.php");

    } catch (error) {
        console.log(error);
    }
}




async function selfPickUp(url, total) {

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

        selfpickupadd(url, orderId);

        const order = {
            orderId: orderId,
            total: total,
            status:2
        };

        const promiseResponse = await fetch(url + "/order/updateorderbytotal/", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json;charset=utf-8'
            },
            body: JSON.stringify(order),
        });



        if (promiseResponse.status === 200) {

            alert('total is updated in 200');


        }


        else if (promiseResponse.status === 500) {
            alert('total is not updated');
            window.location.replace("../public/food.php");
        }


        alert('after updation');

    } catch (error) {
        console.log(error);
    }
}





async function selfpickupadd(url, orderId) {

    try {
        const selfPickUp = {
            orderId: orderId,
            status: 1
        };

        const promiseResponses = await fetch(url + "/selfpickup/addselfpickup/", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json;charset=utf-8'
            },
            body: JSON.stringify(selfPickUp),
        });


        if (promiseResponses.status === 200) {
            alert('order is placed for selfpickup');
        }
        if (promiseResponses === 500) {
            alert('exception ocuur');
        }

        const selfPickUpList = await fetch(url + "/selfpickup/getdetailsbyorderid/" + orderId);
        var response = await selfPickUpList.json();
        var sid = response[0].selfPickupId.toString();

        createCookie("selfPickupId", sid, "10");


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
        window.location.replace("../public/food.php");

    } catch (error) {
        console.log(error);
    }
}
