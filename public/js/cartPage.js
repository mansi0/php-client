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


async function deliverNow(url,total){
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


        const order = {
            orderId : orderId,
            total:total
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

async function selfPickUp(url,total) {

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


    const order = {
        orderId : orderId,
        total:total
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
    }catch (error) {
        console.log(error);
    }
    



 }
 