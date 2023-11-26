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

// const searchInput = document.getElementById("js-search");

// searchInput.addEventListener("input", (e) => {
//     console.log(e.target.value);
// });

// async function getAlunos() {
//     const itens = await fetch("/");
//     console.log(itens);
// }

// getAlunos();

// function search(event) {
//     event.preventDefault();
//     var searchInput = $("#js-search").val();
//     var searchRoute = $("#searchForm").data("searchRoute");

//     $.get(searchRoute, { search: searchInput }, function (data) {
//         // Atualize a parte da página que exibe os resultados
//         $(".container").html(""); // Limpe os resultados antigos

//         // Adicione os novos resultados
//         $.each(data.alunos, function (index, aluno) {
//             console.log("Dados recebidos:", data);
//             var cardHtml = '<article class="card">';
//             cardHtml +=
//                 '<img class="card-img-top" src="' +
//                 aluno.imagem +
//                 '" alt="Imagem de Perfil" />';
//             cardHtml += '<div class="card-infos">';
//             cardHtml += '<h3 class="card-name">' + aluno.nome + "</h3>";
//             cardHtml +=
//                 '<p class="card-description">' + aluno.descricao + "</p>";
//             cardHtml +=
//                 '<p class="card-graduation">' + aluno.curso.curso + "</p>";
//             cardHtml +=
//                 '<p class="card-occupation">' +
//                 (aluno.formado ? "Formado" : "Não Formado") +
//                 "</p>";
//             cardHtml +=
//                 '<button class="botao ' +
//                 (aluno.contratado ? "contratado" : "") +
//                 '" id="botao" onclick="mudarTexto()">' +
//                 (aluno.contratado ? "Contratado!" : "Contratar") +
//                 "</button>";
//             cardHtml += "</div>";
//             cardHtml += "</article>";

//             $(".container").append(cardHtml);
//         });
//     });
// }
