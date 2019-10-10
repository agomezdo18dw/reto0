var dict = {
    "fechaHora": {
        en: "Charging date and hour...",
        eu: "Data eta ordua kargatzen...",
        es: "Cargando Fecha y hora..."
    },
    "desc": {
        en: "Description",
        eu: "Deskripzioa",
        es: "Descripcion"
    },
    "temp": {
        en: "Seasons",
        eu: "Demboraldiak",
        es: "Temporadas"
    },
    "act": {
        en: "Actors",
        eu: "Aktoreak",
        es: "Actores"
    },
    "merch": {
        en: "Merchandising",
        eu: "Merchandisinga",
        es: "Merchandising"
    },
    "mult": {
        en: "Multimedia",
        eu: "Multimedia",
        es: "Multimedia"
    },
    "ini": {
        en: "Home",
        eu: "Hasiera",
        es: "Inicio"
    },
    "tit": {
        en: "The A team",
        eu: "A taldea",
        es: "El equipo A"
    },
    "dur": {
        en: "Average duration of the chapter:",
        eu: "Kapituluaren batez besteko iraupena:",
        es: "Duracion media del cap.:"
    },
    "mins": {
        en: "60 minutes",
        eu: "60 minutu",
        es: "60 minutos"
    },
    "gen": {
        en: "Genre:",
        eu: "Generoa:",
        es: "Genero:"
    },
    "gen2": {
        en: "Action, adventure",
        eu: "Akzioa, abentura",
        es: "Accion, aventura"
    },
    "inf": {
        en: "Information:",
        eu: "Informazioa:",
        es: "Información:"
    },
    "inf2": {
        en: "TV serie (1983-1987)",
        eu: "TB seriea (1983-tik 1987-ra)",
        es: "Serie TV (1983-1987)"
    },
    "sin": {
        en: "Synopsis:",
        eu: "Laburpena:",
        es: "Sinopsis:"
    },
    "sin2": {
        en: "It tells the adventures of a group of four deserter soldiers from the Vietnam War, who work as mercenaries, always for just causes.",
        eu: "Vietnamgo gerrako lau soldadu desertoreren talde baten abenturak kontatzen ditu, mertzenario gisa lan egiten dutenak, beti arrazoi arrazoi batzuengatik.",
        es: "Narra las andanzas de un grupo de cuatro soldados desertores de la guerra de Vietnam, que trabajan como mercenarios, siempre por causas justas."
    },
    "TituloDesc": {
	en:"Description",
	eu:"Deskripzioa",
	es:"Descripcion",
    },
    "DescripcionParrafo": {
	en:"Officially it is said that during the Vietnam War, Colonel Samuel Morrison orders the A-Team to attack the Bank of Hanoi to help end the war. The A-Team successfully completes the mission, but upon returning to the US base four days after the end of the war, they find it in ruins by an attack by the Viet Cong and all the dead soldiers, also Colonel Samuel Morrison. As it was not possible to prove that they were following orders from a superior, since there was no evidence of the mission, they were imprisoned in Fort Bragg for the attack on the bank, but they soon escaped. In the movie version it is modified by a similar event developed in Iraq.",
	eu:"Ofizialki esan ohi da Vietnamgo gerran Samuel Morrison koronelak A-Team-i Hanoi Bankuari eraso egiteko agindu duela gerra amaitzen laguntzeko. A-taldeak arrakastaz bete du misioa, baina gerra amaitu eta lau egunera AEBetako basera itzuli direnean, Viet Cong-eko erasoa eta hildako soldadu guztiak, Samuel Morrison koronela ere, aurkitu dituzte. Goren baten aginduak jarraitzen ari zirela frogatu ez zenez, misioaren frogarik ez zegoenez, Fort Bragg-en espetxeratu zituzten bankuko erasoagatik, baina laster ihes egin zuten. Zinema bertsioan Iraken garatutako antzeko gertaeraren bidez aldatzen da.",
	es:"Oficialmente se dice que durante la guerra de Vietnam, el coronel Samuel Morrison ordena al A-Team que ataque el Banco de Hanoi para ayudar a la finalización de la guerra. El A-Team completa la misión con éxito, pero al volver a la base estadounidense cuatro días después del fin de la guerra, la encuentran en ruinas por un ataque del Viet Cong y todos los soldados muertos, también el coronel Samuel Morrison. Como no se pudo demostrar que cumplían órdenes de un superior, ya que no quedaron pruebas de la misión, fueron encarcelados en Fort Bragg por el ataque al banco, pero no tardaron en fugarse. En la versión para cine es modificada por un hecho similar desarrollado en Irak.",
    },
}
function cambiarIdioma(idioma){
    var translator = $('body').translate({lang: idioma, t: dict});
}
