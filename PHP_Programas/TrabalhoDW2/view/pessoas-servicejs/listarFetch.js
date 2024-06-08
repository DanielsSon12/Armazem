import excluirFetch from "./excluirFetch.js";

document.addEventListener("DOMContentLoaded", async function () {
  const corpoTabela = document.getElementById("corpoTabela");
  const mensagemErro = document.getElementById("mensagemErro");

  try {
    const response = await fetch("../controller/pessoaListar.php")
    .then((response) => {
        if (!response.ok) {
          throw new Error(
            "Erro: Não foi possível recuperar os dados do banco de dados"
          );
        }

        return response;
      }
    );

    const responseData = await response.json();

    if (responseData.erro) {
      mensagemErro.textContent = responseData.msg;
    } else {
      const pessoas = responseData.dados;
      pessoas.forEach((pessoa) => {
        const tr = document.createElement("tr");

        const tdId = document.createElement("td");
        tdId.textContent = pessoa.id;

        const tdNome = document.createElement("td");
        tdNome.textContent = pessoa.nome_pessoa;

        const tdDataNascimento = document.createElement("td");
        tdDataNascimento.textContent = pessoa.dataN_pessoa;

        const tdCPF = document.createElement("td");
        tdCPF.textContent = pessoa.cpf_pessoa;

        const tdEndereco = document.createElement("td");
        tdEndereco.textContent = pessoa.endereco_pessoa;

        const tdBotao = document.createElement("td");
        const btn = document.createElement("button");

        btn.className = "excluir";
        btn.textContent = "[EXCLUIR]";
        
        btn.addEventListener("click", () => excluirFetch(pessoa.id, tr));
        tdBotao.appendChild(btn);
        
        tr.append(tdId, tdNome, tdDataNascimento, tdCPF, tdEndereco, tdBotao);
        corpoTabela.appendChild(tr);
      });
    }
  } catch (error) {
    mensagemErro.textContent = error.message;
  }
});
