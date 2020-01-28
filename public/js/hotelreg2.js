async function reg(url) {
    try {
        var h = localStorage;
        const name = h.getItem('nm');
        const contNo = h.getItem('cn');
        const emailId = h.getItem('ei');
        const address = h.getItem('ad');
        const locality = h.getItem('lc');
        const landmark = h.getItem('lm');
        const city = h.getItem('ct');
        const state = h.getItem('st');
        const password = h.getItem('pw');
        const confirmPassword = h.getItem('cp');
        const openAt = document.getElementById("openAt").value;
        const closeAt = document.getElementById("closeAt").value;
        const approximateCost = document.getElementById("approximateCost").value;
        const openingDate = document.getElementById("openingDate").value;
        var D1 = document.getElementById("d1");
        var D2 = document.getElementById("d2");
        var status1 = document.getElementById("status1");
        var status2 = document.getElementById("status2");
        var hotelMenu1 = document.getElementById("hotelMenu1");
        var hotelMenu2 = document.getElementById("hotelMenu2");
        var expressDelivery, hotelStatus, hotelMenu;
        if (D1.checked == true)
            //console.log(D1.value);
            expressDelivery = D1.value;

        else if (D2.checked == true)
            // console.log(D2.value)
            expressDelivery = D2.value;
        if (status1.checked == true)
            //console.log(status1.value);
            hotelStatus = status1.value;
        else if (status2.checked == true)
            //console.log(status2.value)
            hotelStatus = status1.value;
        if (hotelMenu1.checked == true)
            // console.log(hotelMenu1.value);
            hotelMenu = hotelMenu1.value;
        else if (hotelMenu2.checked == true)
            //console.log(hotelMenu2.value)
            hotelMenu = hotelMenu2.value;
        else if (hotelMenu3.checked == true)
            // console.log(hotelMenu3.value)
            hotelMenu = hotelMenu3.value;

        var cuisine = document.getElementsByClassName("cuisine");
        var cuisineArray = [];
        for (var i = 0; i < 8; i++) {
            if (cuisine[i].checked === true) {
                cuisineArray[i] = "1";
            }
            else cuisineArray[i] = "0";
        }
        for (var i = 0; i < 8; i++)
            console.log(cuisineArray[i]);

        var facility = document.getElementsByClassName("facility");
        var facilityArray = [];
        for (var i = 0; i < 8; i++) {
            if (facility.checked === true)
                facilityArray[i] = "1";
            else facilityArray[i] = "0";
        }
        //console.log(str1);

        var hotelImage=h.getItem('hotelImage');


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
            openAt:openAt,
            closeAt:closeAt,
            approximateCost:approximateCost,
            hotelOpeningDate:openingDate,
            expressDelivery:expressDelivery,
            hotelStatus:hotelStatus,
            hotelMenuType:hotelMenu,
            hotelCuisine:cuisineArray,
            hotelFacility:facilityArray,
            hotelImage:hotelImage
        };
       // console.log(customer)

        const promiseResponse = await fetch(url + "/hotel/addhotel", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json;charset=utf-8'
            },
            body: JSON.stringify(hotel),
        });

        console.log(promiseResponse);
        if (promiseResponse.status === 200) {
            window.location.replace("../public/food.php");
        }

        if (promiseResponse.status === 400) {
            document.getElementById("body").innerHTML = "Hotel Alreday Exist!!";
        }
        if (promiseResponse.status === 500) {
            alert('exception occur');
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
       /* if (D1.checked == true)
            console.log(D1.value);

        else if (D2.checked == true)
            console.log(D2.value)

        if (status1.checked == true)
            console.log(status1.value);

        else if (status2.checked == true)
            console.log(status2.value)

        if (hotelMenu1.checked == true)
            console.log(hotelMenu1.value);

        else if (hotelMenu2.checked == true)
            console.log(hotelMenu2.value)

        else if (hotelMenu3.checked == true)
            console.log(hotelMenu3.value)*/

    } catch (error) {
        console.log(error);
    }
}

