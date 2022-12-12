class Pagina {
    constructor() {
        this.grande = document.querySelector(".grande1");
        this.grande2 = document.querySelector(".grande2");
        this.grande3 = document.querySelector(".grande3");

        this.punto = document.querySelectorAll(".punto");
        this.puntoCarru1 = [];
        this.puntoCarru2 = [];
        this.puntoCarru3 = [];
        this.posicion1 = 0;
        this.posicion2 = 0;
        this.posicion3 = 0;
    }
    animarCarrusel() {
        this.dividirPuntos();
        setInterval(() => {
            this.posicion1++;
            if (this.posicion1 > (this.punto.length / 3) - 1) {
                this.posicion1 = 0;
            }
            let operacion1 = this.posicion1 * -10;
            this.grande.style.transform = `translateX(${operacion1}%)`;
            this.cambiarPunto(this.puntoCarru1, this.posicion1);

            this.posicion2++;
            if (this.posicion2 > (this.punto.length / 3) - 1) {
                this.posicion2 = 0;
            }
            let operacion2 = this.posicion2 * -10;
            this.grande2.style.transform = `translateX(${operacion2}%)`;
            this.cambiarPunto(this.puntoCarru2, this.posicion2);

            this.posicion3++;
            if (this.posicion3 > (this.punto.length / 3) - 1) {
                this.posicion3 = 0;
            }
            let operacion3 = this.posicion3 * -10;
            this.grande3.style.transform = `translateX(${operacion3}%)`;
            this.cambiarPunto(this.puntoCarru3, this.posicion3);
        }, 5000);

        this.puntoCarru1.forEach((cadaPunto, i) => {
            this.puntoCarru1[i].addEventListener('click', () => {
                this.posicion1 = i;
                let operacion = this.posicion1 * -10;

                this.grande.style.transform = `translateX(${operacion}%)`;
                this.cambiarPunto(this.puntoCarru1, this.posicion1);
            });
        });
        this.puntoCarru2.forEach((cadaPunto, i) => {
            this.puntoCarru2[i].addEventListener('click', () => {
                this.posicion2 = i;
                let operacion = this.posicion2 * -10;

                this.grande2.style.transform = `translateX(${operacion}%)`;
                this.cambiarPunto(this.puntoCarru2, this.posicion2);
            });
        });
        this.puntoCarru3.forEach((cadaPunto, i) => {
            this.puntoCarru3[i].addEventListener('click', () => {
                this.posicion3 = i;
                let operacion = this.posicion3 * -10;

                this.grande3.style.transform = `translateX(${operacion}%)`;
                this.cambiarPunto(this.puntoCarru3, this.posicion3);
            });
        });
    }
    cambiarPunto(punto, posicion) {
        punto.forEach((cadaPunto, i) => {
            punto[i].classList.remove("activo");
        });
        punto[posicion].classList.add("activo");
    }
    dividirPuntos() {
        for (let i = 0; i < (this.punto.length / 10); i++) {
            switch (i + 1) {
                case 1:
                    for (let j = 0; j < (this.punto.length / 3); j++) {
                        this.puntoCarru1[j] = this.punto[j];
                    }
                    break;
                case 2:
                    for (let x = 0; x < (this.punto.length / 3); x++) {
                        this.puntoCarru2[x] = this.punto[x + 10];
                    }
                    break;
                case 3:
                    for (let o = 0; o < (this.punto.length / 3); o++) {
                        this.puntoCarru3[o] = this.punto[o + 20];
                    }
                    break;
            }
        }
    }
    asignarImagenes() {
        let comida = document.querySelectorAll(".div-plati");
        for (let i = 0; i < (comida.length / 3); i++) {
            if ((i+1) == 1 || (i+1) == 4) {
                comida[i].style.background = 'linear-gradient(0deg, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("../Images/comida/comida' + (i + 1) + '.png")';
            } else if ((i+1) == 8) {
                comida[i].style.background = 'linear-gradient(0deg, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("../Images/comida/comida' + (i + 1) + '.jfif")';
            } else {
                comida[i].style.background = 'linear-gradient(0deg, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("../Images/comida/comida' + (i + 1) + '.jpg")';
            }
            comida[i].style.backgroundSize = 'cover';
            comida[i].style.backgroundPosition = 'center center';
            comida[i].style.backgroundRepeat = 'no-repeat';
        }
        for (let i = 10; i < 20; i++) {
            if ((i+1) == 15 || (i+1) == 18) {
                comida[i].style.background = 'linear-gradient(0deg, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("../Images/bebidas/bebida' + (i - 9) + '.jfif")';
            } else if ((i+1) == 16 || (i+1) == 19) {
                comida[i].style.background = 'linear-gradient(0deg, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("../Images/bebidas/bebida' + (i - 9) + '.webp")';
            } else {
                comida[i].style.background = 'linear-gradient(0deg, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("../Images/bebidas/bebida' + (i - 9) + '.jpg")';
            }
            comida[i].style.backgroundSize = 'cover';
            comida[i].style.backgroundPosition = 'center center';
            comida[i].style.backgroundRepeat = 'no-repeat';
        }
        for (let i = 20; i < 30; i++) {
            if ((i+1) == 21 || (i+1) == 25 || (i+1) == 30) {
                comida[i].style.background = 'linear-gradient(0deg, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("../Images/frituras/fritura' + (i - 19) + '.jfif")';
            } else if ((i+1) == 27 || (i+1) == 28) {
                comida[i].style.background = 'linear-gradient(0deg, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("../Images/frituras/fritura' + (i - 19) + '.webp")';
            } else if((i+1) == 23){
                comida[i].style.background = 'linear-gradient(0deg, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("../Images/frituras/fritura' + (i - 19) + '.png")';
            }else {
                comida[i].style.background = 'linear-gradient(0deg, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("../Images/frituras/fritura' + (i - 19) + '.jpg")';
            }
            comida[i].style.backgroundSize = 'cover';
            comida[i].style.backgroundPosition = 'center center';
            comida[i].style.backgroundRepeat = 'no-repeat';
        }
    }
}
let pagina = new Pagina();
pagina.animarCarrusel();
pagina.asignarImagenes();