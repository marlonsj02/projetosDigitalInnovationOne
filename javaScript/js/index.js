// var nome = "Marlon Sant Anna";
// var n1 = 22;
// var n2 = 10;
// var frase = "Japão é o melhor time do mundo";
// // alert(nome + " tem " + idade + " anos");
// // alert(idade + idade2);

// console.log(nome);
// console.log(n1 + n2);
// console.log(n1 * n2);
// console.log(n1 / n2);
// console.log(n1 % n2);
// console.log(n1 - n2);
// console.log(n1 ** n2);
// console.log(++n1);
// console.log(--n1);
// console.log(frase);
// console.log(frase.replace("Japão", "Brasil"));
// console.log(frase.toUpperCase());
// console.log(frase.toLowerCase());

// var frutas = ["Maçã", "Uva", "Pêra", "Melância", "Kiwi"]
// console.log(frutas[2]);
// frutas.push("Laranja");
// console.log(frutas);
// frutas.pop();
// console.log(frutas);
// console.log(frutas.length);
// console.log(frutas.reverse());
// console.log(frutas.toString());
// console.log(frutas.join(" - "));

// var frutas = [{nome: "Maçã", cor: "Vermelha"}, {nome: "Uva", cor: "Roxa"}];
// console.log(frutas[0]);
// console.log(frutas[1]);
// console.log(frutas[1].nome);
// console.log(frutas[0].cor);

// var idade = prompt("Digite sua idade: ");
// if (idade == 0) {
//     idade = n1;
// }

// if (n1 >= 18) {
//     alert("Maior de idade");
// } else {
//     alert("Menor de idade");
// }

// var count = 0;

// while (count <= 5) {
//     console.log(count);
//     count++;
// }

// for (let count = 0; count <= 5; count++) {
//     alert(count);
// }

// var date = new Date();
// console.log(date.getMonth());
// console.log(date.getMinutes());
// console.log(date.getDay());
// console.log(date.getHours());

// function soma(n1, n2) {
//     return n1 + n2;
// }

// function setReplace(frase, nome, novoNome) {
//     return frase.replace(nome, novoNome);
// }

// // console.log(soma(5, 10));
// console.log(setReplace("Vai Japão", "Japão", "Brasil"));

// function validaIdade(idade) {
//     if (idade >= 18) {
//         validar = true;    
//     } else {
//         validar = false;
//     }
    
//     return validar;
// }

// var idade = prompt("Digite a sua idade:")
// console.log(validaIdade(idade));

// function clicou() {
//     document.getElementById("agradecimento");
//     console.log(document.getElementById("agradecimento").innerHTML = "<br> Obrigado por clicar");
// }

// function redirecionar() {
//     window.open("https://github.com/marlonsj02/projetosDigitalInnovationOne");
//     // window.location.href = "https://github.com/marlonsj02/projetosDigitalInnovationOne";
// }

function passouMouse(elemento) {
    // document.getElementById("passouMouse").innerHTML = "Você passou o mouse!"
    // alert("Trocar texto");
    elemento.style.backgroundColor = "Red";
}

function voltar(elemento) {
    // document.getElementById("passouMouse").style.backgroundColor = "White"
    elemento.style.backgroundColor = "White";
}

// // function load() {
// //     alert("Página carregada!");
// // }

// function change(elemento) {
//     console.log(elemento.value)
// }

// var A = 11
// var B = 7;
// var X = A + B;
// console.log("X = " + X);