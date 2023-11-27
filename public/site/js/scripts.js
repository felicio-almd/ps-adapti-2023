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

//
// Funcao troca botao contratar/contratado  -- USANDO APENAS JAVASCRIPT COM O LOCALSTORAGE
// //
// function verifyKey(value) {
//     // verifica se o valor existe dentro da chave e se ela existe
//     const keys = localStorage.getItem("contratados");
//     if (keys && keys.includes(value)) {
//         return true;
//     }
//     return false;
// }

// function setupButtons() {
//     // Configura o estado inicial dos botoes ao recarregar a pagina com base nos dados salvos no localStorage
//     const buttons = document.querySelectorAll(".botao");
//     buttons.forEach((button) => {
//         const value = button.value;
//         const isContratado = verifyKey(value);

//         if (isContratado) {
//             button.textContent = "Contratado!";
//             button.classList.add("contratado");
//         } else {
//             button.textContent = "Contratar";
//             button.classList.remove("contratado");
//         }
//     });
// }

// function saveItem(value, buttonId) {
//     // Salva o valor de cada id dos botões na chave e faz a troca de texto em tempo real
//     const existKey = verifyKey(value);
//     let dataArray = JSON.parse(localStorage.getItem("contratados")) || [];
//     if (existKey) {
//         let index = dataArray.indexOf(value);
//         dataArray.splice(index, 1);
//     } else {
//         dataArray.push(value);
//     }
//     localStorage.setItem("contratados", JSON.stringify(dataArray));

//     const cardButton = document.getElementById(buttonId);

//     if (existKey) {
//         cardButton.textContent = "Contratar";
//         cardButton.classList.remove("contratado");
//     } else {
//         cardButton.textContent = "Contratado!";
//         cardButton.classList.add("contratado");
//     }
// }

// // chamada da função de verificar estado inicial dos botões toda vez que a pagina é carregada
// window.addEventListener("load", setupButtons);
