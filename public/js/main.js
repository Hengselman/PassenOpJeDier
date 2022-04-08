let checkbox_hond = document.getElementById("hond");
let checkbox_kater = document.getElementById("kater");
let checkbox_slang = document.getElementById("slang");
let checkbox_papegaai = document.getElementById("papegaai");
let checkbox_cavia = document.getElementById("cavia");
let list_of_huisdier = document.getElementsByTagName("li");

var aa = document.getElementById("randomID")

checkbox_hond.checked = true;
checkbox_kater.checked = true;

checkbox_hond.addEventListener("change", function(){
    if(checkbox_hond.checked){
        for(let i = 0; i < list_of_huisdier.length; i++){
            if (list_of_huisdier[i].dataset.huisdierSoort == "Hond"){
                list_of_huisdier[i].style.display = "";
            }
        }
    }
    else{
        for(let i = 0; i < list_of_huisdier.length; i++){
            if (list_of_huisdier[i].dataset.huisdierSoort == "Hond"){
                list_of_huisdier[i].style.display = "none";
            }
        }
    }
});

checkbox_kater.addEventListener("change", function(){
    if(checkbox_kater.checked){
        for(let i = 0; i < list_of_huisdier.length; i++){
            if (list_of_huisdier[i].dataset.huisdierSoort == "Kater"){
                list_of_huisdier[i].style.display = "";
            }
        }
    }
    else{
        for(let i = 0; i < list_of_huisdier.length; i++){
            if (list_of_huisdier[i].dataset.huisdierSoort == "Kater"){
                list_of_huisdier[i].style.display = "none";
            }
        }
    }
});


function randomHuisdier(){
    console.log("test1")
    let RNGcijfer = Math.floor(Math.random() * 25 + 1);
    const randomlinkie1 = "/huisdier/";
    let samengevoegd = randomlinkie1.concat(RNGcijfer);
    console.log(samengevoegd);
    aa.setAttribute("href", samengevoegd);
}
