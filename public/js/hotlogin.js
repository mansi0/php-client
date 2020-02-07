async function setValue(url){
    try{
        const emailId = document.getElementById("emailid").value;
        const password = document.getElementById("password").value;
       
        const hotel= {
            hotelEmailId: emailId,
            hotelPassword:password
            };

            console.log(hotel)
        
            const promiseResponse = await fetch(url+"/hotel/loginhotel", {
               method: 'POST',
               headers: {
                   'Content-Type': 'application/json;charset=utf-8'
               },
               body: JSON.stringify(hotel),
           });
   

           if(promiseResponse.status===200)
           {


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

                 var hotelId=encodeURIComponent(hid);

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

               window.location.replace("../public/hotelhomepage.php");``
           }
           if(promiseResponse.status===400)
           {

            document.getElementById("bodyhotlogin").innerHTML="**Invalid Password!!!";
           }
           
            if(promiseResponse.status===404)
            {
                document.getElementById("bodyhotlogin").innerHTML="**Hotel Not Found!!";
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
   
