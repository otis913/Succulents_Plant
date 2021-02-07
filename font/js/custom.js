
var buybox = 0;

//商品區的宣告
let plants = document.querySelectorAll('.pp li');
let decorations = document.querySelectorAll('.dd li');
let pots = document.querySelectorAll('.bb li');

//客製區的宣告
let plant1 = document.querySelector('#custom_01');
let plant2 = document.querySelector('#custom_02');
let plant3 = document.querySelector('#custom_03');
let dec1 = document.querySelector('#decoration');
var pot1 = document.querySelector('#pot');

var PlantArray = [
    {
        obj : plant1,
        pos : 0,
        id : "custom_01",
    },
    {
        obj : plant2,
        pos : 0,
        id : "custom_02",
    },
    {
        obj : plant3,
        pos : 0,
        id : "custom_03",
    },
];

//清空旋轉宣告
let turn180 = document.querySelector('.turn180');
turn180.addEventListener('click',function(){
    rotateplant();
},false);
let delet = document.querySelector('#delet');
delet.addEventListener('click',function(){
    plant1.src ="img/custom/custom_01.png";
    plant2.src ="img/custom/custom_02.png";
    plant3.src ="img/custom/custom_03.png";
    dec1.src = "";
    pot1.src = `img/custom/pot_01.png`;

    let ww = document.querySelector('.custom_draw_plant');
    let ttt = ww.offsetWidth+"px";
    let yy = parseInt(ttt.slice(0,-2),10);
    let areacenter = yy/2;

    let ob = document.getElementById(PlantArray[0].id);
    let centerpoint = ob.clientWidth/2;
    let num = areacenter-centerpoint;

    plant1.style.left = "0px";
    plant2.style.left = num +"px";
    plant3.style.left = yy-ob.clientWidth +"px";

},false);

for( let i=0 ; i<plants.length ;i++){
    plants[i].addEventListener('click',function(){
        // alert(document.getElementById('custom_01').src);
        if(buybox==0)
        {
            plant1.src = `img/custom/custom_0${i+1}.png`;
            
        }
        else if(buybox==1)
        {
            plant2.src = `img/custom/custom_0${i+1}.png`;
           
        }
        else if(buybox==2)
        {
            plant3.src =`img/custom/custom_0${i+1}.png`;
            
        }
    },false);
};

for( let i=0 ; i<decorations.length ;i++){
    decorations[i].addEventListener('click',function(){
        dec1.src = `img/custom/dec_0${i+1}.png`;
    },false);
   
};

for( let i=0 ; i<pots.length ;i++){
    pots[i].addEventListener('click',function(){
        pot1.src = `img/custom/pot_0${i+1}.png`;
    },false);
   
};



//客製區的圖層判斷
plant1.addEventListener('mousedown',function(){
    plant1.classList.add('-upup');
    plant2.classList.remove('-upup');
    plant3.classList.remove('-upup');
    decoration.classList.remove('-upup');
    buybox=0;
},false);

plant2.addEventListener('mousedown',function(){
    plant2.classList.add('-upup');
    plant1.classList.remove('-upup');
    plant3.classList.remove('-upup');
    decoration.classList.remove('-upup');
    buybox=1;
},false);

plant3.addEventListener('mousedown',function(){
    plant3.classList.add('-upup');
    plant1.classList.remove('-upup');
    plant2.classList.remove('-upup');
    decoration.classList.remove('-upup');
    buybox=2;
},false);

plant1.addEventListener('mouseup',function(){
    var ob = document.getElementById("custom_01");
    let tt = ob.style.left;
    let yy = parseInt(tt.slice(0,-2),10);
    PlantArray[0].pos = yy;
   
},false);

plant2.addEventListener('mouseup',function(){
    var ob = document.getElementById("custom_02");
    let tt = ob.style.left;
    let yy = parseInt(tt.slice(0,-2),10);
    PlantArray[1].pos = yy;
   
},false);

plant3.addEventListener('mouseup',function(){
    var ob = document.getElementById("custom_03");
    let tt = ob.style.left;
    let yy = parseInt(tt.slice(0,-2),10);
    PlantArray[2].pos = yy;
    
},false);

decoration.addEventListener('click',function(){
    decoration.classList.add('-upup');
    plant1.classList.remove('-upup');
    plant2.classList.remove('-upup');
    plant3.classList.remove('-upup');
    buybox=3;
},false);

function rotateplant()
{
    let ww = document.querySelector('.custom_draw_plant');
    let ttt = ww.offsetWidth+"px";
    let yy = parseInt(ttt.slice(0,-2),10);
    let areacenter = yy/2;
   //console.log(ww.offsetwidth);

    for(let i=0;i<3;++i)
    {
        let rotatepos=0;
        let ob = document.getElementById(PlantArray[i].id);
        let centerpoint = ob.clientWidth/2;
        let num = PlantArray[i].pos + centerpoint;
       // console.log(num);
        if(num<areacenter)
        {
            let move = areacenter - num;
            rotatepos = PlantArray[i].pos + move+move;
            if(rotatepos>yy-ob.clientWidth)rotatepos=yy-ob.clientWidth;
        }
        else if(num>areacenter)
        {
            let move = num - areacenter;
            rotatepos = PlantArray[i].pos - move-move;
            if(rotatepos<0)rotatepos=0;
        }
        ob.style.left = rotatepos + "px";
        PlantArray[i].pos=rotatepos;
    }
};




// -------------------------- 心理測驗 ---------------------------------







