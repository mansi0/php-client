async function reg(url) {
    try {
        console.log('in reg');
        const name = document.getElementById('name').value;
        //const foodtype = document.getElementById("foodType").value;
        var selectedValue = document.getElementById("list").value;
        console.log(selectedValue);
        const foodcategory = document.getElementById('foodCategory').value;
        const foodspeciality = document.getElementById('foodSpeciality').value;
        const foodsize = document.getElementById("foodSize").value;
        const foodprice = document.getElementById('foodPrice').value;





        const food = {
            foodName: name,
            foodType: selectedValue,
            category: foodcategory,
        };

        console.log(food);


        const promiseResponse = await fetch(url + "/food/addfood", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json;charset=utf-8'
            },
            body: JSON.stringify(food),
        });

        console.log(promiseResponse);
        if (promiseResponse.status === 200 || promiseResponse.status === 400) {

           // window.location.replace("../public/dblogin.php");
           console.log('ok');
        }

        if (promiseResponse.status === 500) {
            //alert('in 400');
            document.getElementById("bodyhtl").innerHTML = "Internal Server Error!!";
        }



        const foodList = await fetch(url + "/food/getdetail/"+ name);
        var response = await foodList.json();
        var fid = response[0].foodId.toString();

        var l=localStorage;
        var hname=l.getItem('nm');

        const hotelList = await fetch(url + "/hotel/getdetail/"+ hname);
        var hresponse = await hotelList.json();
        var hid = hresponse[0].hotelId.toString();

        const hotelFood = {
            hotelId : hid,
            foodId : fid,
            foodSpeciality : foodspeciality,
            price : foodprice,
            size : foodsize
            
        }

        const promiseResponseh = await fetch(url + "/hotelfood/addhotelfood", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json;charset=utf-8'
            },
            body: JSON.stringify(hotelFood),
        });

        console.log(promiseResponseh);
        if (promiseResponseh.status === 200) {

            window.location.replace("../public/hotlogin.php");
           
        }

        if (promiseResponseh.status === 500) {
            //alert('in 400');
            document.getElementById("bodyhtl").innerHTML = "Internal Server Error!!";
        }
        
        


    } 
    catch (error) {
        console.log(error);
    }
}


