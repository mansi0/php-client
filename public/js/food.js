async function foodreg(url) {
    try {

        console.log('in foodreg');
        const name = document.getElementById('name').value;
        //const foodtype = document.getElementById("foodType").value;
        var selectedValue = document.getElementById("list").value;
        console.log(selectedValue);
        const foodcategory = document.getElementById('foodCategory').value;
        const foodspeciality = document.getElementById('foodSpeciality').value;
        const foodsize = document.getElementById('foodSize').value;
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
        if(promiseResponse.status === 200 || promiseResponse.status ===400)
        {
            console.log('ok');
           // window.location.replace("../public/food.php");
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
        var fprice=parseFloat(foodprice);
        console.log(fprice);


        alert('before obj');
        const hotelFood = {
            hotelId : hid,
            foodId : fid,
            foodSpeciality : foodspeciality,
            price : fprice,
            size : foodsize,
        }

        console.log(hotelFood);

        const promiseResponseh = await fetch(url + "/hotelfood/addhotelfood", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json;charset=utf-8'
            },
            body: JSON.stringify(hotelFood),
        });

        console.log(promiseResponseh);
        if (promiseResponseh.status === 200) {

            alert('ok');
            window.location.replace("../public/food.php");
           
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


