const bt = document.getElementById("bt");
bt.addEventListener("click",function(){
        let data ={
                time : document.forms['inpt']['pilihinpt'].value
        }
        localStorage.setItem("waktu",JSON.stringify(data));
        location.reload();
})

let sc = 1;
setInterval(() => {
        var ip = document.forms['inpt']['pilihinpt'].value;
        const tm = document.getElementById("time");
        const wt = document.getElementById("wtnya");
        document.getElementById("time").innerText = sc;
        
        var cek = localStorage.getItem("waktu");
        var inpt = JSON.parse(cek)
        document.getElementById("wtnya").innerText = inpt.time;
        

        if (inpt.time == 99) {
                tm.style.visibility = "hidden";
                wt.style.visibility = "hidden";
        }else{
                tm.style.visibility = "visible";
                wt.style.visibility = "visible";
                sc++;
                if (sc > inpt.time) {
                        sc = 1;
                        location.reload();
                }
        }
},1000)
