export default async function excluirFetch(id, linha) {
  try {
    console.log(id, linha);
    const response = await fetch(`../controller/pessoaExcluir.php?id=${id}`, {
      method: "DELETE",
    }).then((response) => {
      if (!response.ok) {
        throw new Erro("Erro");
      }
      console.log(`ANTES DO response.json`, response);
      return response.json();
    });

    if (!response.erro) {
      linha.remove();
    }
  } catch {
    console.log("ERRO AO EXCLUIR LINHA");
  }
}
