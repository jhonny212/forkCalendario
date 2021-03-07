//Declaracion de varialbes
const btn=document.getElementById('btn-calc');
const date=document.getElementById('date')
const tzolkin_init="Ahau",hab_init="Kankin";

btn.addEventListener('click',(ev)=>{
   if(date.value){
    const dias=calcular_dias(date.value);
    let res=HabbNumber(dias,calendario_haab);
    setValue(res,'hab');
    res=TzolkinNumber(dias+2,calendario_tzolkin);
    setValue(res,'tzo');
   }
})


function setValue(json_,id){
    console.log(json_)
    document.getElementById(id).value=json_.nivel+" "+json_.name;
}





//Contenido de funciones.js
function calcular_dias(fechaCalc){
    const fechaInicio=new Date('2013-04-02')
    const fechaFin=new Date(fechaCalc)
    const diff = fechaFin - fechaInicio
    return diff/(1000*60*60*24) 
}


function HabbNumber(diaRef,content){
    let contador=0 
    let numId=0
    while(diaRef>=20){
        diaRef-=20
        contador++
        numId++
        if(contador==18){
            if(contador>=18){
                diaRef-=5
            }
            numId=0
            contador=0
        }
    }
    if(diaRef<0 && content[numId]=="pop"){
        diaRef+=5
        //console.log(diaRef+"->kayeb")
        return {
            nivel:diaRef,
            name:"kayeb"
        }
    }else{
        //console.log(diaRef+"->"+content[numId])
        return {
            nivel:diaRef,
            name:content[numId]
        }
    }
}

function TzolkinNumber(diaRef,content){
    let val_tmp=diaRef
    while(diaRef>13){
        diaRef-=13
    }
    while(val_tmp>20){
        val_tmp-=20
    }
    val_tmp-=1
  
    //console.log(diaRef+"->"+(content[val_tmp]))
    return {
        nivel:diaRef,
        name:content[val_tmp]
    }
}






//Contenido de calendarios.js
const calendario_haab=[
    "pop",
    "uo",
    "zip",
    "zot's",
    "tsec",
    "xul",
    "Yaxkin",
    "Mol",
    "Ch'en",
    "Yax",
    "zac",
    "ceh",
    "mac",
    "Kankin",
    "Muan",
    "Pax",
    "Kajab",
    "Cumku",
    "Uayeb"
]
const calendario_tzolkin=[
    "Imix",
    "Lk",
    "Akbal",
    "Kan",
    "Chicchan",
    "Cimi",
    "Manik",
    "Lamat",
    "Muluc",
    "Oc",
    "Chuen",
    "Eb",
    "Ben",
    "Ix",
    "Men",
    "Cib",
    "Caban",
    "Etnab",
    "Cauac",
    "Ahau"
]
function calcularTzolkin(days){
    while(days>20){
        days-=20
    }
    return calendario_tzolkin[days-1]
 }
 function Habb(indice){
    while(indice>19){
        indice-=19
    }
    indice-=1
    return calendario_haab[indice]
}