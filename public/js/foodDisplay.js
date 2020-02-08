
async function food(hotelId, url) {
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

        var customerId = getCookie("customerId");
        // alert(customerId);


        var hid = encodeURIComponent(hotelId);
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

        const order = {
            customerId: customerId,
            hotelId: hotelId
        };



        const promiseResponse = await fetch(url + "/order/addorder", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json;charset=utf-8'
            },
            body: JSON.stringify(order),
        });

        console.log(promiseResponse);
        if (promiseResponse.status === 200) {
            /* function formatDate(d) {
               //  var d = new Date(date),
                     month = '' + (d.getMonth() + 1),
                     day = '' + d.getDate(),
                     year = d.getFullYear();
             
                 if (month.length < 2) 
                     month = '0' + month;
                 if (day.length < 2) 
                     day = '0' + day;
             
                 return [year, month, day].join('-');
             }*/

            var date = new Date();
            var hrs = date.getHours();
            var min = date.getMinutes();
            
            var year = date.getFullYear();
            var month = date.getMonth() + 1;
            var day = date.getDate();

            month = checkZero(month);
            day = checkZero(day);

            var dates = "";

            dates += year;
            dates += "-";
            dates += month;
            dates += "-";
            dates += day;

            //document.querySelector("#display").innerHTML = date;

            function checkZero(i) {
                if (i < 10) {
                    i = "0" + i
                };  // add zero in front of numbers < 10

                return i;
            }



            const orderList = await fetch(url + "/order/getorderbytime/" + hrs + "/" + min + "/" + dates);
            var order1 = await orderList.json();
            var oId = order1[0].orderId.toString();
            var orderId = encodeURIComponent(oId);

           // alert(oId);

           createCookie("orderId", orderId, "10");

            window.location.replace("../public/foodDisplay1.php");

        }

        if (promiseResponse.status === 400) {
            alert('order already exist delete your cart');
        }

        if (promiseResponse.status === 500) {
            alert('internal Error');
        }



    } catch (error) {
        console.log(error);
    }
}
