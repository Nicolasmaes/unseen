const link = document.getElementById("link");

link.addEventListener('click', randomlinks);

function randomlinks(){
let random = Math.floor (Math.random() * 15);
console.log(random);
switch(random){
    case 0:
        link.href="pages/adam.php";
    break;
    case 1:
        link.href="pages/adrien.php";
    break;
    case 2:
        link.href="pages/chloe.php";
    break;
    case 3:
        link.href="pages/etienne.php";
    break;
    case 4:
        link.href="pages/gael.php";
    break;
    case 5:
        link.href="pages/herve.php";
    break;
    case 6:
        link.href="pages/jean-baptiste.php";
    break;
    case 7:
        link.href="pages/karina.php";
    break;
    case 8:
        link.href="pages/luc.php";
    break;
    case 9:
        link.href="pages/nathan.php";
    break;
    case 10:
        link.href="pages/nicolas.php";
    break;
    case 11:
        link.href="pages/paule.php";
    break;
    case 12:
        link.href="pages/romain.php";
    break;
    case 13:
        link.href="pages/sonia.php";
    break;
    case 14:   
    link.href="pages/tiavina.php";
    break;
    case 15:
        link.href="pages/williams.php";
    break;
    default:
    }
}