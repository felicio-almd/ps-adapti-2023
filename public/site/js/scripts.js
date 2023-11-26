const changeThemeBtn = document.querySelector("#change-theme");

// trocar o Dark Mode
function toggleDarkMode() {
    document.body.classList.toggle("dark");
}

// carregar light ou dark mode
function loadTheme() {
    const darkMode = localStorage.getItem("dark");

    if (darkMode === "1") {
        toggleDarkMode();
    }
}

loadTheme();

changeThemeBtn.addEventListener("change", function () {
    toggleDarkMode();

    // save or remove dar mode
    // localStorage.removeItem("dark");

    if (document.body.classList.contains("dark")) {
        localStorage.setItem("dark", 1);
    } else {
        localStorage.removeItem("dark");
    }
});

// mudar botao e salvar no localStorage
// function mudarTexto() {
//     var botao = document.getElementById("botao");

//     if (botao.innerHTML === "Contratar") {
//         // Se o texto atual for "Contratar", muda para "Contratado!"
//         botao.innerHTML = "Contratado!";
//         botao.classList.add("contratado");
//     } else {
//         botao.innerHTML = "Contratar";
//         botao.classList.remove("contratado");
//     }

//     // salvando no localStorage
//     localStorage.setItem("textoBotao", botao.innerHTML);
// }

// // carregar o texto do botão do localStorage ao carregar a página
// function carregarTexto() {
//     var botao = document.getElementById("botao");

//     // pega o texto do botão do localStorage
//     var textoSalvo = localStorage.getItem("textoBotao");

//     // se houver um texto salvo, define o texto do botão com esse valor
//     if (textoSalvo) {
//         botao.innerHTML = textoSalvo;
//         if (textoSalvo === "Contratado!") {
//             botao.classList.add("contratado");
//         }
//     }
// }

// // chama a função carregarTexto ao carregar a página
// window.onload = carregarTexto;

// $(document).ready(function () {
//     $("html,body").animate({ scrollTop: document.body.scrollHeight }, "slow");
// });

let mybutton = document.getElementById("scroll-button");

// mostra o botao ao usuario scrollar qualquer quantia

window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    if (
        document.body.scrollTop > 30 ||
        document.documentElement.scrollTop > 30
    ) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

// Quando o usuario clicar volta ao topo da pagina
function toTop() {
    window.scrollTo({
        top: 0,
        behavior: "smooth",
    });
}
