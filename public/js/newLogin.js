

        console.log("im in testing");

        async function set() {

            const response = await fetch('https://api.github.com/users')
            //  alert("innn");
            console.log('before response');
            const users = await response.json();//return promise
            console.log('user resolved!!!!');

            return users;
            return "Arti";
        }
        console.log("b4 arti");
        let p = set();
        console.log("after arti");
        console.log(p);
        p.then(data => console.log(data))
        console.log("last line ");
    
