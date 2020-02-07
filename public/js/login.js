async function setValue(url){
    try{
        const emailId = document.getElementById("emailid").value;
        const password = document.getElementById("password").value;
       
        const customer = {
            emailId: emailId,
            password:password
            };

            console.log(customer)
        
            const promiseResponse = await fetch(url+"/customer/logincustomer", {
               method: 'POST',
               headers: {
                   'Content-Type': 'application/json;charset=utf-8'
               },
               body: JSON.stringify(customer),
           });

        
           
           if(promiseResponse.status===200)
           {

            const customerList = await fetch(url+"/customer/getbyemailid", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json;charset=utf-8'
                },
                body: JSON.stringify(customer),
            });

            console.log(customerList);
            var response = await customerList.json();
            console.log(response);
          var cid = response[0].customerId.toString();
          console.log(cid);

          var customerId=encodeURIComponent(cid);

          createCookie("customerId", customerId, "10");
    

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


                
               
               
               
               
               
               
                window.location.replace("../public/loginaft.php");
           }
           if(promiseResponse.status===400)
           {
                alert('invalid');
            document.getElementById("msg").innerHTML="**Invalid Password!!!";
           }
           
            if(promiseResponse.status===404)
            {
                document.getElementById("msg").innerHTML="**Customer Not Found!!";
            }

            if(promiseResponse.status===500)
            {
                alert('Exception');
            }
          console.log(promiseResponse);

          
        }catch(error){
            console.log(error);

     
        }
    }
   

