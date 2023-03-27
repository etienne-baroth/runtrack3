function jourtravaille(jour, mois, année) {

let date = new Date(Date.UTC(2020, 0, 1, 0, 0, 0));
const options = {weekday: 'long', year: 'numeric', month: 'long', day: 'numeric'}
let dateLocale = date.toLocaleString('fr-FR', options);

console.log(dateLocale);

const ferie = [
    jourDeLan = new Date(Date.UTC(2020, 0, 1, 0, 0, 0)).toLocaleString('fr-FR', options),
    paques = new Date(Date.UTC(2020, 3, 13, 0, 0, 0)).toLocaleString('fr-FR', options),
    feteDuTravail = new Date(Date.UTC(2020, 4, 1, 0, 0, 0)).toLocaleString('fr-FR', options),
    victoireDesAllies = new Date(Date.UTC(2020, 4, 8, 0, 0, 0)).toLocaleString('fr-FR', options),
    ascension = new Date(Date.UTC(2020, 4, 21, 0, 0, 0)).toLocaleString('fr-FR', options),
    pentecote = new Date(Date.UTC(2020, 5, 1, 0, 0, 0)).toLocaleString('fr-FR', options),
    priseDeLaBastille = new Date(Date.UTC(2020, 6, 14, 0, 0, 0)).toLocaleString('fr-FR', options),
    assomption = new Date(Date.UTC(2020, 7, 15, 0, 0, 0)).toLocaleString('fr-FR', options),
    toussaint = new Date(Date.UTC(2020, 10, 1, 0, 0, 0)).toLocaleString('fr-FR', options),
    armistice = new Date(Date.UTC(2020, 10, 11, 0, 0, 0)).toLocaleString('fr-FR', options),
    noel = new Date(Date.UTC(2020, 11, 25, 0, 0, 0)).toLocaleString('fr-FR', options)
]

if(dateLocale === 'samedi' || dateLocale === 'dimanche') {
    console.log(`Non, ${jour} ${mois} ${année} est un weekend`);
} else if(dateLocale === ferie) {
    console.log(`le ${jour} ${mois} ${année} est un jour férié`);
}

 else {
    console.log(`Oui, ${jour} ${mois} ${année} est un jour travaillé`);
}

}

jourtravaille(1,1,2020);