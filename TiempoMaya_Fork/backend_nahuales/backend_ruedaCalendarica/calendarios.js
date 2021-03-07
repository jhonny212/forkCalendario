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

module.exports.jsonHabb=calendario_haab
module.exports.jsonTzol=calendario_tzolkin