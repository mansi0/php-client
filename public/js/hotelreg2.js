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
        const approximateCost = document.getElementById("approximateCost").value;
        const openingDate = document.getElementById("openingDate").value;
        var D1=document.getElementById("d1");
        var D2=document.getElementById("d2");
        var status1=document.getElementById("status1");
        var status2=document.getElementById("status2");
        var hotelMenu1=document.getElementById("hotelMenu1");
        var hotelMenu2=document.getElementById("hotelMenu2");
        
        var cuisine=document.getElementsByClassName("cuisine");
        var str='';
        for(var i=0;i<8;i++)
        {
            if(cuisine[i].checked===true){
                str+=cuisine[i].value +"";
                
            }
        }
        console.log(str);
        
        var facility=document.getElementsByClassName("facility");
        var str1='';
        for(var i=0;i<8;i++)
        {
            if(facility[i].checked===true){
                str1+=facility[i].value +"";
                
            }
        }
        console.log(str1);
        
       /* const hotel = {
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
            expressDelivery=delivery;
            hotelStatus=status;
            hotelMenuType=hotelMenu;
            hotelCuisine=cuisine;

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
    /*document.getElementById("delivery").innerHTML="**Customer Not Found!!";
    console.log(promiseResponse);*/
    if(D1.checked == true)
        console.log(D1.value);

    else if(D2.checked == true)
        console.log(D2.value)

    if(status1.checked == true)
        console.log(status1.value);
    
    else if(status2.checked == true)
        console.log(status2.value)
    
    if(hotelMenu1.checked == true)
        console.log(hotelMenu1.value);
    
    else if(hotelMenu2.checked == true)
        console.log(hotelMenu2.value)

    else if(hotelMenu3.checked == true)
        console.log(hotelMenu3.value)
    
} catch (error) {
   console.log(error);
}
}

