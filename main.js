const link = document.getElementById("link");


link.addEventListener('click', randomlinks);


function randomlinks(){
let random = Math.floor (Math.random() * 15);
console.log(random);
switch(random){
    case 0:
        link.href="adam.php";
    break;
    case 1:
        link.href="adrien.php";
    break;
    case 2:
        link.href="chloe.php";
    break;
    case 3:
        link.href="etienne.php";
    break;
    case 4:
        link.href="gael.php";
    break;
    case 5:
        link.href="herve.php";
    break;
    case 6:
        link.href="jean-baptiste.php";
    break;
    case 7:
        link.href="karina.php";
    break;
    case 8:
        link.href="luc.php";
    break;
    case 9:
        link.href="nathan.php";
    break;
    case 10:
        link.href="nicolas.php";
    break;
    case 11:
        link.href="paule.php";
    break;
    case 12:
        link.href="romain.php";
    break;
    case 13:
        link.href="sonia.php";
    break;
    case 14:   
    link.href="tiavina.php";
    break;
    case 15:
        link.href="williams.php";
    break;
    default:
    }
}


