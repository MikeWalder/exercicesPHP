class Personnage{
    
    constructor(nom, age, sexe){
        this.nom = nom;
        this.age = age;
        this.sexe = sexe;
    }

    getNom(){ return this.nom; }
    setNom(nom){ this.nom = nom; }
    getAge(){ return this.age; }
    setNom(age){ this.age = age; }
    getSexe(){ return this.sexe; }
    setNom(sexe){ this.sexe = sexe; }

    ditBonjour(){
        console.log("Bonjour, c'est moi " + this.nom);
    }
}

var p1 = new Personnage("Tya", 22, false);
console.log(p1.getNom());