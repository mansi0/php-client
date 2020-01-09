async function reg(url) {
    try {
        var l=localStorage;
        const name=l.getItem('nm');
        const contNo = l.getItem('cn');
        const emailId = l.getItem('ei');
        const address = l.getItem('ad');
        const locality = l.getItem('lc');
        const landmark = l.getItem('lm');
        const city = l.getItem('ct');
        const state = l.getItem('st');
        const password = l.getItem('pw');
        const confirmPassword=l.getItem('cp');
        const openAt = document.getElementById("openAt").value;
        const closeAt = document.getElementById("closeAt").value;
        const landmark = document.getElementById("approximateCost").value;
        const city = document.getElementById("openingDate").value;
       
       
        
        
        const hotel = {
            hotelPassword: password, 
            hotelName: name,
            hotelAddress: address,  
            hotelLocality: locality, 
            hotelLandmark: landmark,
            hotelCity: city,
            hotelState: state,
            hotelEmailId: emailId,
            hotelContNo: contNo, 
            openAt=openAt,
            closeAt=closeAt,
            approximateCost=approximateCost,
            hotelOpeningDate=openingDate,

        };
        console.log(customer)
        
         const promiseResponse = await fetch(url+"/hotel/addhotel", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json;charset=utf-8'
            },
            body: JSON.stringify(customer),
        });

        console.log(promiseResponse);
        if(promiseResponse.status===200)
        {
            window.location.replace("../public/hotellogin.php");
        }

        if(promiseResponse.status===400){
            document.getElementById("body").innerHTML="Hotel Alreday Exist!!";
        }

       /* const addUserResponse = await promiseResponse.json();
        if(addUserResponse.status === 200) {
            window.location.replace("../public/lohin.html");
        }
        if(addUserResponse.status === 400) {
            window.location.replace("../public/login.html");
        }*/
        
      /* const promiseResponse = await fetch("http://localhost:5000/customer/details")
            
        
       const response = await promiseResponse.json();

       console.log(response);
   */
   
   console.log(promiseResponse);

} catch (error) {
   console.log(error);
}
}

