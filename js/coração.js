document.querySelectorAll('.like-button').forEach(button => {
// Seleciona todos os elementos com a classe 'like-button' e itera sobre cada um deles usando o método 'forEach'
  button.addEventListener('click', () => {
  // Adiciona um ouvinte de evento de clique a cada botão
    button.classList.toggle('red');
    // Alterna a classe 'red' no botão atual, adicionando-a se não estiver presente e removendo-a se já estiver presente
  });
});
