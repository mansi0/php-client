async function setValue(url){
    try{
        const emailId = document.getElementById("emailid").value;
        const password = document.getElementById("password").value;
       
        const deliveryboy= {
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
               window.location.replace("../public/food.php");``
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
   
